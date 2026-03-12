(function (global) {
    'use strict';

    /* ─── Constants ──────────────────────────────────────────────── */
    const MONTH_NAMES = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];
    const DAY_NAMES = ['S', 'M', 'T', 'W', 'T', 'F', 'S'];
    const DAY_NAMES_FULL = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

    /* ─── Utility helpers ────────────────────────────────────────── */
    function parseDate(val) {
        if (!val) return null;
        if (val instanceof Date) { const d = new Date(val); d.setHours(0, 0, 0, 0); return d; }
        if (typeof val === 'string') {
            const [y, m, d] = val.split('-').map(Number);
            return new Date(y, m - 1, d);
        }
        return null;
    }

    function formatDate(d) {
        if (!d) return '';
        const y = d.getFullYear();
        const m = String(d.getMonth() + 1).padStart(2, '0');
        const day = String(d.getDate()).padStart(2, '0');
        return `${y}-${m}-${day}`;
    }

    function formatReadable(d) {
        if (!d) return '';
        return `${DAY_NAMES_FULL[d.getDay()]}, ${MONTH_NAMES[d.getMonth()]} ${d.getDate()}, ${d.getFullYear()}`;
    }

    function sameDay(a, b) {
        return a && b &&
            a.getFullYear() === b.getFullYear() &&
            a.getMonth() === b.getMonth() &&
            a.getDate() === b.getDate();
    }

    function isBetween(d, a, b) {
        if (!a || !b) return false;
        const lo = a < b ? a : b;
        const hi = a < b ? b : a;
        return d > lo && d < hi;
    }

    function startOfDay(d) {
        const n = new Date(d);
        n.setHours(0, 0, 0, 0);
        return n;
    }

    /* ─── Main class ─────────────────────────────────────────────── */
    class HolidaysevaCalendar {

        /**
         * @param {string|HTMLElement} selector
         * @param {object} options
         * @param {Date}     [options.minDate]         – Earliest selectable date (default: today)
         * @param {Date}     [options.maxDate]         – Latest selectable date
         * @param {string[]} [options.disabledDates]   – Array of 'YYYY-MM-DD' strings to block
         * @param {string}   [options.defaultStart]    – Pre-selected check-in 'YYYY-MM-DD'
         * @param {string}   [options.defaultEnd]      – Pre-selected check-out 'YYYY-MM-DD'
         * @param {number}   [options.months=2]        – Columns of months to show
         * @param {boolean}  [options.inline=false]    – Remove shadow, add border
         * @param {boolean}  [options.showModeToggle=true]
         * @param {boolean}  [options.showFooter=true]
         * @param {function} [options.onChange]        – fn({ start, end }) called on complete range
         * @param {function} [options.onMonthChange]   – fn({ year, month })
         * @param {function} [options.onSelect]        – fn(date) called on each single click
         */
        constructor(selector, options = {}) {
            this._el = typeof selector === 'string'
                ? document.querySelector(selector)
                : selector;

            if (!this._el) {
                console.warn(`HolidaysevaCalendar: element "${selector}" not found.`);
                return;
            }

            /* defaults */
            const today = startOfDay(new Date());
            this._opts = Object.assign({
                minDate: today,
                maxDate: null,
                disabledDates: [],
                defaultStart: null,
                defaultEnd: null,
                months: 2,
                inline: false,
                showModeToggle: true,
                showFooter: true,
                onChange: null,
                onMonthChange: null,
                onSelect: null,
            }, options);

            /* normalise */
            this._opts.minDate = parseDate(this._opts.minDate) || today;
            this._opts.maxDate = parseDate(this._opts.maxDate);
            this._opts.disabledDates = (this._opts.disabledDates || []).map(formatDate);

            /* state */
            this._selStart = parseDate(this._opts.defaultStart);
            this._selEnd = parseDate(this._opts.defaultEnd);
            this._hoverDate = null;
            this._viewYear = (this._selStart || today).getFullYear();
            this._viewMonth = (this._selStart || today).getMonth();
            this._mode = 'dates';
            this._flex = 'exact';

            /* inline variant */
            if (this._opts.inline) this._el.classList.add('calendar-inline');

            this._boundHandlers = {};
            this._render();
            this._attachDelegatedEvents();
        }

        /* ── Public API ────────────────────────────────────────────── */

        /** Returns { start: Date|null, end: Date|null } */
        getRange() {
            return { start: this._selStart, end: this._selEnd };
        }

        /** @param {Date|string} start  @param {Date|string} end */
        setRange(start, end) {
            this._selStart = parseDate(start);
            this._selEnd = parseDate(end);
            this._render();
        }

        /** Clears the selection */
        clear() {
            this._selStart = null;
            this._selEnd = null;
            this._hoverDate = null;
            this._render();
        }

        /**
         * Navigate to a month.
         * @param {number} year   Full year, e.g. 2026
         * @param {number} month  0-indexed (0 = January)
         */
        goToMonth(year, month) {
            this._viewYear = year;
            this._viewMonth = month;
            this._render();
        }

        /**
         * Disable additional dates dynamically.
         * @param {string|string[]} dates  'YYYY-MM-DD' or array
         */
        disable(dates) {
            const arr = Array.isArray(dates) ? dates : [dates];
            arr.forEach(d => {
                const s = formatDate(parseDate(d));
                if (s && !this._opts.disabledDates.includes(s)) {
                    this._opts.disabledDates.push(s);
                }
            });
            this._render();
        }

        /** Removes all event listeners and clears HTML */
        destroy() {
            this._el.innerHTML = '';
            this._el.removeEventListener('click', this._boundHandlers.click);
            this._el.removeEventListener('mouseover', this._boundHandlers.mouseover);
            this._el.removeEventListener('mouseleave', this._boundHandlers.mouseleave);
            this._el.removeEventListener('keydown', this._boundHandlers.keydown);
        }

        /* ── Internal: render ──────────────────────────────────────── */

        _render() {
            const monthsGrid = this._el.querySelector('.calendar-months');
            const footer = this._el.querySelector('.calendar-footer');
            const modeToggle = this._el.querySelector('.calendar-mode-toggle');

            /* month grid is required */
            if (!monthsGrid) {
                console.warn('HolidaysevaCalendar: .calendar-months not found in wrapper.');
                return;
            }

            /* render month columns */
            let html = '';
            for (let i = 0; i < this._opts.months; i++) {
                let y = this._viewYear;
                let m = this._viewMonth + i;
                if (m > 11) { m -= 12; y++; }
                html += this._renderMonth(y, m, i === 0, i === this._opts.months - 1);
            }
            monthsGrid.innerHTML = html;

            /* update live region */
            this._updateLiveRegion();
        }

        _renderMonth(year, month, isFirst, isLast) {
            const firstDayOfWeek = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            let html = `<div class="calendar-month" data-year="${year}" data-month="${month}">`;

            /* Header */
            html += `<div class="calendar-month__header">`;
            html += isFirst
                ? `<button class="calendar-nav-btn" data-action="prev" aria-label="Previous month">
               <svg width="8" height="13" viewBox="0 0 8 13" fill="none">
                 <path d="M7 1.5L2 6.5l5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>
             </button>`
                : `<button class="calendar-nav-btn calendar-nav-btn--hidden" tabindex="-1" aria-hidden="true"></button>`;

            html += `<span class="calendar-month__title">${MONTH_NAMES[month]} ${year}</span>`;

            html += isLast
                ? `<button class="calendar-nav-btn" data-action="next" aria-label="Next month">
               <svg width="8" height="13" viewBox="0 0 8 13" fill="none">
                 <path d="M1 1.5l5 5-5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>
             </button>`
                : `<button class="calendar-nav-btn calendar-nav-btn--hidden" tabindex="-1" aria-hidden="true"></button>`;

            html += `</div>`;

            /* Weekday labels */
            html += `<div class="calendar-weekdays" role="row">`;
            DAY_NAMES.forEach(d => {
                html += `<div class="calendar-weekday" role="columnheader">${d}</div>`;
            });
            html += `</div>`;

            /* Days grid */
            html += `<div class="calendar-days" role="grid" aria-label="${MONTH_NAMES[month]} ${year}">`;

            /* empty lead cells */
            for (let i = 0; i < firstDayOfWeek; i++) {
                html += `<div class="calendar-day calendar-day--empty" role="gridcell" aria-hidden="true"></div>`;
            }

            /* day cells */
            for (let d = 1; d <= daysInMonth; d++) {
                const date = new Date(year, month, d);
                const ds = formatDate(date);
                const isPast = date < this._opts.minDate && !sameDay(date, this._opts.minDate);
                const isMax = this._opts.maxDate && date > this._opts.maxDate;
                const isDis = this._opts.disabledDates.includes(ds);
                const isDisabled = isPast || isMax || isDis;

                const isToday = sameDay(date, startOfDay(new Date()));
                const isStart = sameDay(date, this._selStart);
                const isEnd = sameDay(date, this._selEnd);
                const inRange = isBetween(date, this._selStart, this._selEnd);
                const inHover = this._selStart && !this._selEnd && this._hoverDate &&
                    isBetween(date, this._selStart, this._hoverDate);
                const isHoverEnd = this._selStart && !this._selEnd && sameDay(date, this._hoverDate);

                /* build class list */
                let cls = 'calendar-day';
                if (isDisabled) cls += ' calendar-day--disabled';
                if (isToday) cls += ' calendar-day--today';
                if (isStart && this._selEnd) cls += ' calendar-day--range-start';
                else if (isEnd) cls += ' calendar-day--range-end';
                else if (isStart) cls += ' calendar-day--selected';
                if (inRange) cls += ' calendar-day--in-range';
                if (inHover && !inRange && !isStart && !isEnd) cls += ' calendar-day--hover-range';
                if (isHoverEnd && !isEnd) cls += ' calendar-day--selected';

                const ariaSelected = (isStart || isEnd) ? 'true' : 'false';
                const ariaLabel = `${formatReadable(date)}${isDisabled ? ', unavailable' : ''}${isStart ? ', check-in selected' : ''}${isEnd ? ', check-out selected' : ''}`;

                html += `<button
            class="${cls}"
            role="gridcell"
            data-date="${ds}"
            data-action="select"
            aria-label="${ariaLabel}"
            aria-selected="${ariaSelected}"
            ${isDisabled ? 'disabled aria-disabled="true"' : ''}
            tabindex="${isStart || (!this._selStart && isToday) ? '0' : '-1'}"
          >${d}</button>`;
            }

            html += `</div></div>`;
            return html;
        }

        /* ── Internal: events ──────────────────────────────────────── */

        _attachDelegatedEvents() {
            /* click */
            this._boundHandlers.click = (e) => {
                const btn = e.target.closest('[data-action]');
                if (!btn) return;
                const action = btn.dataset.action;
                if (action === 'prev') this._navigate(-1);
                if (action === 'next') this._navigate(1);
                if (action === 'select') this._selectDate(btn.dataset.date);
                if (action === 'mode') this._setMode(btn.dataset.mode);
                if (action === 'flex') this._setFlex(btn.dataset.flex, btn);
            };

            /* hover */
            this._boundHandlers.mouseover = (e) => {
                const btn = e.target.closest('[data-action="select"]');
                if (!btn || btn.disabled) return;
                this._hoverDate = parseDate(btn.dataset.date);
                if (this._selStart && !this._selEnd) this._render();
            };

            /* hover leave */
            this._boundHandlers.mouseleave = () => {
                if (this._hoverDate) {
                    this._hoverDate = null;
                    if (this._selStart && !this._selEnd) this._render();
                }
            };

            /* keyboard navigation inside grid */
            this._boundHandlers.keydown = (e) => {
                const active = document.activeElement;
                if (!active || !active.dataset.date) return;
                const cells = [...this._el.querySelectorAll('.calendar-day:not(.calendar-day--empty)')];
                const idx = cells.indexOf(active);
                const map = { ArrowRight: 1, ArrowLeft: -1, ArrowDown: 7, ArrowUp: -7 };
                const delta = map[e.key];
                if (delta !== undefined) {
                    e.preventDefault();
                    const next = cells[idx + delta];
                    if (next) { next.setAttribute('tabindex', '0'); next.focus(); active.setAttribute('tabindex', '-1'); }
                    return;
                }
                if (e.key === 'Escape') this.clear();
            };

            this._el.addEventListener('click', this._boundHandlers.click);
            this._el.addEventListener('mouseover', this._boundHandlers.mouseover);
            this._el.addEventListener('mouseleave', this._boundHandlers.mouseleave);
            this._el.addEventListener('keydown', this._boundHandlers.keydown);
        }

        _navigate(dir) {
            this._viewMonth += dir;
            if (this._viewMonth > 11) { this._viewMonth = 0; this._viewYear++; }
            if (this._viewMonth < 0) { this._viewMonth = 11; this._viewYear--; }
            if (this._opts.onMonthChange) {
                this._opts.onMonthChange({ year: this._viewYear, month: this._viewMonth });
            }
            this._render();
        }

        _selectDate(ds) {
            const date = parseDate(ds);
            if (!date) return;

            if (!this._selStart || (this._selStart && this._selEnd)) {
                /* first click — set check-in */
                this._selStart = date;
                this._selEnd = null;
                this._hoverDate = null;
            } else {
                /* second click — set check-out */
                if (date < this._selStart) {
                    this._selEnd = this._selStart;
                    this._selStart = date;
                } else if (sameDay(date, this._selStart)) {
                    /* clicked same day — clear */
                    this._selStart = null;
                } else {
                    this._selEnd = date;
                }
            }

            if (this._opts.onSelect) this._opts.onSelect(date);

            if (this._selStart && this._selEnd && this._opts.onChange) {
                this._opts.onChange({ start: this._selStart, end: this._selEnd });
            }

            this._render();
        }

        _setMode(mode) {
            this._mode = mode;
            const btns = this._el.querySelectorAll('[data-action="mode"]');
            btns.forEach(b => {
                b.classList.toggle('active', b.dataset.mode === mode);
            });
        }

        _setFlex(flex, clickedBtn) {
            this._flex = flex;
            const btns = this._el.querySelectorAll('[data-action="flex"]');
            btns.forEach(b => b.classList.remove('active-pill'));
            clickedBtn.classList.add('active-pill');
        }

        _updateLiveRegion() {
            let region = this._el.querySelector('.calendar-live-region');
            if (!region) {
                region = document.createElement('div');
                region.className = 'calendar-live-region';
                region.setAttribute('aria-live', 'polite');
                region.setAttribute('aria-atomic', 'true');
                region.style.cssText = 'position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;';
                this._el.appendChild(region);
            }
            if (this._selStart && this._selEnd) {
                const nights = Math.round((this._selEnd - this._selStart) / 86400000);
                region.textContent = `Selected: ${formatReadable(this._selStart)} to ${formatReadable(this._selEnd)}, ${nights} night${nights !== 1 ? 's' : ''}.`;
            } else if (this._selStart) {
                region.textContent = `Check-in selected: ${formatReadable(this._selStart)}. Now select a check-out date.`;
            } else {
                region.textContent = 'No dates selected.';
            }
        }

        /* ── Static: auto-init ─────────────────────────────────────── */
        static autoInit() {
            document.querySelectorAll('.calendar-wrapper[data-calendar-config]').forEach(el => {
                let cfg = {};
                try { cfg = JSON.parse(el.dataset.calendarConfig); } catch (e) { }
                new HolidaysevaCalendar(el, cfg);
            });
        }
    }

    /* ─── Expose ──────────────────────────────────────────────────── */
    global.HolidaysevaCalendar = HolidaysevaCalendar;

})(typeof window !== 'undefined' ? window : this);