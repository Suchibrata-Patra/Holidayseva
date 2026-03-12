/**
 * HolidaysevaCalendar — Self-contained embeddable component
 * Usage: <div class="hs-calendar" data-hs-calendar></div>
 *        new HolidaysevaCalendar('#id', options);
 *
 * Version: 2.0 (responsive + extend-days feature)
 */
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

    function addDays(d, n) {
        const r = new Date(d);
        r.setDate(r.getDate() + n);
        return r;
    }

    /* ─── Inject component CSS once ─────────────────────────────── */
    function injectStyles() {
        if (document.getElementById('hs-calendar-styles')) return;
        const style = document.createElement('style');
        style.id = 'hs-calendar-styles';
        style.textContent = `
/* ── HolidaysevaCalendar Component Styles ── */
.hs-calendar {
  background: #fff;
  border-radius: 18px;
  padding: 28px;
  box-shadow: 0 8px 40px rgba(0,0,0,0.14), 0 2px 8px rgba(0,0,0,0.08);
  max-width: 720px;
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 0;
  font-family: -apple-system, BlinkMacSystemFont, "SF Pro Text", "Segoe UI", sans-serif;
  box-sizing: border-box;
}
.hs-calendar *,
.hs-calendar *::before,
.hs-calendar *::after { box-sizing: border-box; }

.hs-calendar.hs-calendar--inline {
  box-shadow: none;
  border: 1px solid #D2D2D7;
}

/* Dual-month grid */
.hs-calendar__months {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 36px;
  margin-bottom: 20px;
}

/* Single month */
.hs-calendar__month { min-width: 0; }

/* Month header */
.hs-calendar__month-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 16px;
}
.hs-calendar__month-title {
  font-size: 15px;
  font-weight: 600;
  color: #1D1D1F;
  letter-spacing: -0.01em;
}

/* Nav buttons */
.hs-calendar__nav {
  width: 32px; height: 32px;
  border-radius: 50%;
  border: 1px solid #D2D2D7;
  background: #fff;
  display: flex; align-items: center; justify-content: center;
  color: #1D1D1F;
  cursor: pointer;
  transition: background 0.12s, box-shadow 0.12s;
  flex-shrink: 0;
}
.hs-calendar__nav:hover { background: #F5F5F7; box-shadow: 0 1px 3px rgba(0,0,0,0.08); }
.hs-calendar__nav--hidden { visibility: hidden; pointer-events: none; }

/* Weekdays row */
.hs-calendar__weekdays {
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  margin-bottom: 6px;
}
.hs-calendar__weekday {
  text-align: center;
  font-size: 11px; font-weight: 600;
  color: #6E6E73;
  padding: 4px 0;
  letter-spacing: 0.02em;
}

/* Days grid */
.hs-calendar__days {
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  gap: 1px 0;
}

/* Day cell */
.hs-calendar__day {
  aspect-ratio: 1;
  display: flex; align-items: center; justify-content: center;
  font-size: 13px; font-weight: 400;
  color: #1D1D1F;
  background: none; border: none;
  border-radius: 50%;
  position: relative;
  transition: background 0.12s, color 0.12s;
  cursor: pointer;
  z-index: 1;
  font-family: inherit;
}
.hs-calendar__day:hover:not(:disabled):not(.hs-calendar__day--empty) {
  background: #F5F5F7;
}
.hs-calendar__day--empty { cursor: default; pointer-events: none; }
.hs-calendar__day--disabled {
  color: #DDDDDD;
  text-decoration: line-through;
  cursor: not-allowed;
  pointer-events: none;
}

/* Today dot */
.hs-calendar__day--today { font-weight: 700; }
.hs-calendar__day--today::after {
  content: '';
  position: absolute; bottom: 4px; left: 50%;
  transform: translateX(-50%);
  width: 4px; height: 4px;
  background: #FF385C;
  border-radius: 50%;
}

/* Selected endpoints */
.hs-calendar__day--selected,
.hs-calendar__day--range-start,
.hs-calendar__day--range-end {
  background: #222222 !important;
  color: #fff !important;
  font-weight: 600;
  border-radius: 50%;
  z-index: 2;
}
.hs-calendar__day--selected::after,
.hs-calendar__day--range-start::after,
.hs-calendar__day--range-end::after { background: #fff !important; }

/* Range start half-pill */
.hs-calendar__day--range-start::before {
  content: ''; position: absolute;
  top: 0; right: 0; width: 50%; height: 100%;
  background: rgba(255,56,92,0.10);
  border-radius: 0; z-index: -1;
}
/* Range end half-pill */
.hs-calendar__day--range-end::before {
  content: ''; position: absolute;
  top: 0; left: 0; width: 50%; height: 100%;
  background: rgba(255,56,92,0.10);
  border-radius: 0; z-index: -1;
}
/* Extended end half-pill (extend days applied) */
.hs-calendar__day--extend-end::before {
  content: ''; position: absolute;
  top: 0; left: 0; width: 50%; height: 100%;
  background: rgba(52,199,89,0.12);
  border-radius: 0; z-index: -1;
}
.hs-calendar__day--extend-end {
  background: #1A7A35 !important;
  color: #fff !important;
  font-weight: 600;
  border-radius: 50%;
  z-index: 2;
}
/* Extend range fill */
.hs-calendar__day--extend-range {
  background: rgba(52,199,89,0.12) !important;
  color: #1D1D1F;
  border-radius: 0;
}

/* In-range fill */
.hs-calendar__day--in-range {
  background: rgba(255,56,92,0.10) !important;
  color: #1D1D1F;
  border-radius: 0;
}
.hs-calendar__day--in-range:hover { background: rgba(255,56,92,0.18) !important; }
.hs-calendar__day--hover-range {
  background: rgba(255,56,92,0.10) !important;
  border-radius: 0;
}

/* Focus ring */
.hs-calendar__day:focus-visible {
  outline: 2px solid #FF385C;
  outline-offset: 1px;
}

/* ── Footer ── */
.hs-calendar__footer {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  padding-top: 20px;
  margin-top: 4px;
  border-top: 1px solid #EBEBEB;
  align-items: center;
}

/* Extend day pills */
.hs-calendar__extend-label {
  font-size: 12px;
  color: #6E6E73;
  font-weight: 500;
  margin-right: 4px;
  white-space: nowrap;
}

.hs-calendar__extend-pill {
  padding: 6px 14px;
  border: 1.5px solid #D2D2D7;
  border-radius: 999px;
  background: none;
  font-family: inherit;
  font-size: 13px;
  color: #6E6E73;
  cursor: pointer;
  transition: all 0.12s;
  white-space: nowrap;
}
.hs-calendar__extend-pill:hover {
  border-color: #1D1D1F;
  color: #1D1D1F;
}
.hs-calendar__extend-pill--active {
  border-color: #1D1D1F;
  color: #1D1D1F;
  font-weight: 600;
  background: rgba(0,0,0,0.04);
}

/* Live region */
.hs-calendar__live {
  position: absolute; width: 1px; height: 1px;
  overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap;
}

/* ── Responsive ── */
@media (max-width: 600px) {
  .hs-calendar__months {
    grid-template-columns: 1fr;
    gap: 24px;
  }
  .hs-calendar { padding: 20px 16px; }
  .hs-calendar__extend-label { display: none; }
}
        `;
        document.head.appendChild(style);
    }

    /* ─── Main class ─────────────────────────────────────────────── */
    class HolidaysevaCalendar {

        /**
         * @param {string|HTMLElement} selector
         * @param {object} options
         * @param {Date}     [options.minDate]          Earliest selectable date (default: today)
         * @param {Date}     [options.maxDate]          Latest selectable date
         * @param {string[]} [options.disabledDates]    Array of 'YYYY-MM-DD' strings to block
         * @param {string}   [options.defaultStart]     Pre-selected check-in 'YYYY-MM-DD'
         * @param {string}   [options.defaultEnd]       Pre-selected check-out 'YYYY-MM-DD'
         * @param {number}   [options.months=2]         Columns of months to show (auto 1 on mobile)
         * @param {boolean}  [options.inline=false]     Remove shadow, add border
         * @param {boolean}  [options.showFooter=true]  Show footer with extend-days pills
         * @param {number[]} [options.extendOptions]    Days to offer as extensions [1,2,3,7,14]
         * @param {function} [options.onChange]         fn({ start, end, extendDays }) on complete range
         * @param {function} [options.onMonthChange]    fn({ year, month })
         * @param {function} [options.onSelect]         fn(date) on each click
         */
        constructor(selector, options = {}) {
            this._el = typeof selector === 'string'
                ? document.querySelector(selector)
                : selector;

            if (!this._el) {
                console.warn(`HolidaysevaCalendar: element "${selector}" not found.`);
                return;
            }

            injectStyles();

            /* add base class */
            this._el.classList.add('hs-calendar');

            const today = startOfDay(new Date());
            this._opts = Object.assign({
                minDate: today,
                maxDate: null,
                disabledDates: [],
                defaultStart: null,
                defaultEnd: null,
                months: 2,
                inline: false,
                showFooter: true,
                extendOptions: [1, 2, 3, 7, 14],
                onChange: null,
                onMonthChange: null,
                onSelect: null,
            }, options);

            this._opts.minDate = parseDate(this._opts.minDate) || today;
            this._opts.maxDate = parseDate(this._opts.maxDate);
            this._opts.disabledDates = (this._opts.disabledDates || []).map(formatDate);

            /* state */
            this._selStart = parseDate(this._opts.defaultStart);
            this._selEnd = parseDate(this._opts.defaultEnd);
            this._hoverDate = null;
            this._extendDays = 0;
            this._viewYear = (this._selStart || today).getFullYear();
            this._viewMonth = (this._selStart || today).getMonth();

            /* responsive: 1 month on mobile */
            this._responsiveMonths = this._opts.months;
            this._mq = window.matchMedia('(max-width: 600px)');
            this._onMQ = (e) => {
                this._responsiveMonths = e.matches ? 1 : this._opts.months;
                this._render();
            };
            this._mq.addEventListener('change', this._onMQ);
            if (this._mq.matches) this._responsiveMonths = 1;

            if (this._opts.inline) this._el.classList.add('hs-calendar--inline');

            /* build shell */
            this._el.innerHTML = `<div class="hs-calendar__months"></div>
${this._opts.showFooter ? '<div class="hs-calendar__footer"></div>' : ''}
<div class="hs-calendar__live" aria-live="polite" aria-atomic="true"></div>`;

            this._boundHandlers = {};
            this._render();
            this._attachEvents();
        }

        /* ── Public API ────────────────────────────────────────────── */

        getRange() {
            return {
                start: this._selStart,
                end: this._selEnd,
                extendDays: this._extendDays,
                effectiveEnd: this._selEnd ? addDays(this._selEnd, this._extendDays) : null,
            };
        }

        setRange(start, end) {
            this._selStart = parseDate(start);
            this._selEnd = parseDate(end);
            this._render();
        }

        clear() {
            this._selStart = null;
            this._selEnd = null;
            this._hoverDate = null;
            this._extendDays = 0;
            this._render();
        }

        goToMonth(year, month) {
            this._viewYear = year;
            this._viewMonth = month;
            this._render();
        }

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

        destroy() {
            this._mq.removeEventListener('change', this._onMQ);
            this._el.removeEventListener('click', this._boundHandlers.click);
            this._el.removeEventListener('mouseover', this._boundHandlers.mouseover);
            this._el.removeEventListener('mouseleave', this._boundHandlers.mouseleave);
            this._el.removeEventListener('keydown', this._boundHandlers.keydown);
            this._el.innerHTML = '';
        }

        /* ── Internal: render ──────────────────────────────────────── */

        _render() {
            const monthsGrid = this._el.querySelector('.hs-calendar__months');
            const footer = this._el.querySelector('.hs-calendar__footer');
            if (!monthsGrid) return;

            /* month columns */
            let html = '';
            for (let i = 0; i < this._responsiveMonths; i++) {
                let y = this._viewYear;
                let m = this._viewMonth + i;
                if (m > 11) { m -= 12; y++; }
                html += this._renderMonth(y, m, i === 0, i === this._responsiveMonths - 1);
            }
            monthsGrid.innerHTML = html;

            /* footer */
            if (footer && this._opts.showFooter) {
                footer.innerHTML = this._renderFooter();
            }

            /* live region */
            const live = this._el.querySelector('.hs-calendar__live');
            if (live) {
                if (this._selStart && this._selEnd) {
                    const nights = Math.round((this._selEnd - this._selStart) / 86400000);
                    const ext = this._extendDays > 0 ? ` Extended by ${this._extendDays} day${this._extendDays > 1 ? 's' : ''}.` : '';
                    live.textContent = `Selected: ${formatReadable(this._selStart)} to ${formatReadable(this._selEnd)}, ${nights} night${nights !== 1 ? 's' : ''}.${ext}`;
                } else if (this._selStart) {
                    live.textContent = `Check-in selected: ${formatReadable(this._selStart)}. Now select a check-out date.`;
                } else {
                    live.textContent = 'No dates selected.';
                }
            }
        }

        _renderMonth(year, month, isFirst, isLast) {
            const firstDayOfWeek = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            const effectiveEnd = this._selEnd && this._extendDays > 0
                ? addDays(this._selEnd, this._extendDays)
                : null;

            let html = `<div class="hs-calendar__month" data-year="${year}" data-month="${month}">`;

            /* Header */
            html += `<div class="hs-calendar__month-header">`;
            html += isFirst
                ? `<button class="hs-calendar__nav" data-action="prev" aria-label="Previous month">
                     <svg width="8" height="13" viewBox="0 0 8 13" fill="none">
                       <path d="M7 1.5L2 6.5l5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                     </svg>
                   </button>`
                : `<button class="hs-calendar__nav hs-calendar__nav--hidden" tabindex="-1" aria-hidden="true"></button>`;

            html += `<span class="hs-calendar__month-title">${MONTH_NAMES[month]} ${year}</span>`;

            html += isLast
                ? `<button class="hs-calendar__nav" data-action="next" aria-label="Next month">
                     <svg width="8" height="13" viewBox="0 0 8 13" fill="none">
                       <path d="M1 1.5l5 5-5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                     </svg>
                   </button>`
                : `<button class="hs-calendar__nav hs-calendar__nav--hidden" tabindex="-1" aria-hidden="true"></button>`;

            html += `</div>`;

            /* Weekday labels */
            html += `<div class="hs-calendar__weekdays" role="row">`;
            DAY_NAMES.forEach(d => {
                html += `<div class="hs-calendar__weekday" role="columnheader">${d}</div>`;
            });
            html += `</div>`;

            /* Days grid */
            html += `<div class="hs-calendar__days" role="grid" aria-label="${MONTH_NAMES[month]} ${year}">`;

            for (let i = 0; i < firstDayOfWeek; i++) {
                html += `<div class="hs-calendar__day hs-calendar__day--empty" role="gridcell" aria-hidden="true"></div>`;
            }

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
                const isExtendEnd = effectiveEnd && sameDay(date, effectiveEnd);
                const inRange = isBetween(date, this._selStart, this._selEnd);
                const inExtendRange = effectiveEnd && this._selEnd && isBetween(date, this._selEnd, effectiveEnd);
                const inHover = this._selStart && !this._selEnd && this._hoverDate &&
                    isBetween(date, this._selStart, this._hoverDate);
                const isHoverEnd = this._selStart && !this._selEnd && sameDay(date, this._hoverDate);

                let cls = 'hs-calendar__day';
                if (isDisabled) cls += ' hs-calendar__day--disabled';
                if (isToday) cls += ' hs-calendar__day--today';
                if (isStart && this._selEnd) cls += ' hs-calendar__day--range-start';
                else if (isEnd && !isExtendEnd) cls += ' hs-calendar__day--range-end';
                else if (isEnd && isExtendEnd) cls += ' hs-calendar__day--range-end'; /* same day as extend end – rare */
                else if (isStart) cls += ' hs-calendar__day--selected';
                if (inRange) cls += ' hs-calendar__day--in-range';
                if (isExtendEnd) cls += ' hs-calendar__day--extend-end';
                if (inExtendRange) cls += ' hs-calendar__day--extend-range';
                if (inHover && !inRange && !isStart && !isEnd) cls += ' hs-calendar__day--hover-range';
                if (isHoverEnd && !isEnd) cls += ' hs-calendar__day--selected';

                const ariaSelected = (isStart || isEnd) ? 'true' : 'false';
                const ariaLabel = `${formatReadable(date)}${isDisabled ? ', unavailable' : ''}${isStart ? ', check-in' : ''}${isEnd ? ', check-out' : ''}`;

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

        _renderFooter() {
            if (!this._selEnd) return '';
            const opts = this._opts.extendOptions || [1, 2, 3, 7, 14];
            let html = `<span class="hs-calendar__extend-label">Extend stay:</span>`;
            opts.forEach(n => {
                const active = this._extendDays === n ? ' hs-calendar__extend-pill--active' : '';
                html += `<button class="hs-calendar__extend-pill${active}" data-action="extend" data-days="${n}">+${n} day${n > 1 ? 's' : ''}</button>`;
            });
            return html;
        }

        /* ── Internal: events ──────────────────────────────────────── */

        _attachEvents() {
            this._boundHandlers.click = (e) => {
                const btn = e.target.closest('[data-action]');
                if (!btn) return;
                const action = btn.dataset.action;
                if (action === 'prev') this._navigate(-1);
                if (action === 'next') this._navigate(1);
                if (action === 'select') this._selectDate(btn.dataset.date);
                if (action === 'extend') this._setExtend(parseInt(btn.dataset.days, 10), btn);
            };

            this._boundHandlers.mouseover = (e) => {
                const btn = e.target.closest('[data-action="select"]');
                if (!btn || btn.disabled) return;
                this._hoverDate = parseDate(btn.dataset.date);
                if (this._selStart && !this._selEnd) this._render();
            };

            this._boundHandlers.mouseleave = () => {
                if (this._hoverDate) {
                    this._hoverDate = null;
                    if (this._selStart && !this._selEnd) this._render();
                }
            };

            this._boundHandlers.keydown = (e) => {
                const active = document.activeElement;
                if (!active || !active.dataset.date) return;
                const cells = [...this._el.querySelectorAll('.hs-calendar__day:not(.hs-calendar__day--empty)')];
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
                this._selStart = date;
                this._selEnd = null;
                this._hoverDate = null;
                this._extendDays = 0;
            } else {
                if (date < this._selStart) {
                    this._selEnd = this._selStart;
                    this._selStart = date;
                } else if (sameDay(date, this._selStart)) {
                    this._selStart = null;
                } else {
                    this._selEnd = date;
                }
            }

            if (this._opts.onSelect) this._opts.onSelect(date);

            if (this._selStart && this._selEnd && this._opts.onChange) {
                this._opts.onChange({ start: this._selStart, end: this._selEnd, extendDays: this._extendDays });
            }

            this._render();
        }

        _setExtend(days, clickedBtn) {
            /* toggle off if already selected */
            this._extendDays = this._extendDays === days ? 0 : days;
            this._render();
            if (this._selStart && this._selEnd && this._opts.onChange) {
                this._opts.onChange({
                    start: this._selStart,
                    end: this._selEnd,
                    extendDays: this._extendDays,
                    effectiveEnd: addDays(this._selEnd, this._extendDays),
                });
            }
        }

        /* ── Static: auto-init via data attribute ──────────────────── */
        static autoInit() {
            document.querySelectorAll('[data-hs-calendar]').forEach(el => {
                let cfg = {};
                try { cfg = JSON.parse(el.dataset.hsConfig || '{}'); } catch (e) { }
                new HolidaysevaCalendar(el, cfg);
            });
        }
    }

    /* ─── Expose ─────────────────────────────────────────────────── */
    global.HolidaysevaCalendar = HolidaysevaCalendar;

    /* Auto-init on DOMContentLoaded */
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', HolidaysevaCalendar.autoInit);
    } else {
        HolidaysevaCalendar.autoInit();
    }

})(typeof window !== 'undefined' ? window : this);