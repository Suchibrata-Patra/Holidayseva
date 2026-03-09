/* =========================================================
   HolidaySeva — Date Picker Component
   File: js/hs-datepicker.js
   ========================================================= */

(function () {
    'use strict';

    const WEEKDAYS = ['S', 'M', 'T', 'W', 'T', 'F', 'S'];
    const MONTHS = ['January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'];

    class HSDatepicker {
        /**
         * @param {string|HTMLElement} trigger  - The button/element that opens the picker
         * @param {Object} options
         * @param {Date}    [options.minDate]          - Earliest selectable date (default: today)
         * @param {Date}    [options.maxDate]          - Latest selectable date
         * @param {string}  [options.position]         - 'bottom-left'|'bottom-right'|'bottom-center'
         * @param {boolean} [options.range=true]       - Range selection vs single date
         * @param {Array}   [options.flexChips]        - Labels for flex chips e.g. ['Exact dates',±1 day',…]
         * @param {Function}[options.onChange]         - Callback: ({startDate, endDate}) => {}
         */
        constructor(trigger, options = {}) {
            this.triggerEl = typeof trigger === 'string'
                ? document.querySelector(trigger)
                : trigger;

            this.options = Object.assign({
                minDate: new Date(),
                maxDate: null,
                position: 'bottom-left',
                range: true,
                flexChips: ['Exact dates', '± 1 day', '± 2 days', '± 3 days', '± 7 days', '± 14 days'],
                onChange: null
            }, options);

            this.startDate = null;
            this.endDate = null;
            this.hoverDate = null;
            this.picking = false; // true while user has picked start but not end

            // Current view months
            const now = new Date();
            this.viewYear = now.getFullYear();
            this.viewMonth = now.getMonth(); // left calendar month

            this._buildDOM();
            this._bindEvents();
        }

        /* ========== DOM Build ========== */
        _buildDOM() {
            // Overlay (closes picker on outside click)
            this.overlay = document.createElement('div');
            this.overlay.className = 'hs-datepicker-overlay';

            // Picker panel
            this.panel = document.createElement('div');
            this.panel.className = 'hs-datepicker';
            this.panel.setAttribute('role', 'dialog');
            this.panel.setAttribute('aria-label', 'Choose dates');

            this.panel.innerHTML = `
          <div class="hs-dp-tabs">
            <button class="hs-dp-tab hs-active" data-tab="dates">Dates</button>
            <button class="hs-dp-tab" data-tab="flexible">Flexible</button>
          </div>
          <div class="hs-dp-calendars">
            <div class="hs-dp-cal" data-side="left">
              <div class="hs-dp-cal-nav">
                <button class="hs-dp-cal-nav-btn" data-nav="prev" aria-label="Previous month">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 18l-6-6 6-6"/></svg>
                </button>
                <span class="hs-dp-month-label"></span>
                <span></span>
              </div>
              <div class="hs-dp-cal-grid"></div>
            </div>
            <div class="hs-dp-cal" data-side="right">
              <div class="hs-dp-cal-nav">
                <span></span>
                <span class="hs-dp-month-label"></span>
                <button class="hs-dp-cal-nav-btn" data-nav="next" aria-label="Next month">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
                </button>
              </div>
              <div class="hs-dp-cal-grid"></div>
            </div>
          </div>
          <div class="hs-dp-footer">
            ${this.options.flexChips.map((c, i) =>
                `<button class="hs-dp-flex-chip${i === 0 ? ' hs-active' : ''}" data-chip="${i}">${c}</button>`
            ).join('')}
            <button class="hs-dp-clear">Clear dates</button>
          </div>
        `;

            this.overlay.appendChild(this.panel);
            document.body.appendChild(this.overlay);

            // Cache elements
            this.calLeft = this.panel.querySelector('[data-side="left"]');
            this.calRight = this.panel.querySelector('[data-side="right"]');

            this._renderCalendars();
        }

        /* ========== Render Calendars ========== */
        _renderCalendars() {
            const leftYear = this.viewYear;
            const leftMonth = this.viewMonth;
            const rightDate = new Date(leftYear, leftMonth + 1, 1);

            this._renderMonth(this.calLeft, leftYear, leftMonth);
            this._renderMonth(this.calRight, rightDate.getFullYear(), rightDate.getMonth());

            // Update nav button disabled state
            const prevBtn = this.panel.querySelector('[data-nav="prev"]');
            if (prevBtn) {
                const now = new Date();
                prevBtn.disabled = (leftYear < now.getFullYear()) ||
                    (leftYear === now.getFullYear() && leftMonth <= now.getMonth());
            }
        }

        _renderMonth(calEl, year, month) {
            calEl.querySelector('.hs-dp-month-label').textContent = `${MONTHS[month]} ${year}`;
            const grid = calEl.querySelector('.hs-dp-cal-grid');
            grid.innerHTML = '';

            // Weekday headers
            WEEKDAYS.forEach(d => {
                const wd = document.createElement('div');
                wd.className = 'hs-dp-weekday';
                wd.textContent = d;
                grid.appendChild(wd);
            });

            // Blank leading cells
            const firstDay = new Date(year, month, 1).getDay();
            for (let i = 0; i < firstDay; i++) {
                const blank = document.createElement('div');
                blank.className = 'hs-dp-day hs-dp-day--empty';
                grid.appendChild(blank);
            }

            const today = new Date(); today.setHours(0, 0, 0, 0);
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            for (let d = 1; d <= daysInMonth; d++) {
                const date = new Date(year, month, d);
                const cell = document.createElement('div');
                cell.className = 'hs-dp-day';
                cell.dataset.ts = date.getTime();
                cell.textContent = d;

                // State classes
                const isPast = date < today;
                const isMin = this.options.minDate && date < this.options.minDate && date < today;

                if (date.getTime() === today.getTime()) cell.classList.add('hs-dp-day--today');
                if (isPast || isMin) cell.classList.add('hs-dp-day--past', 'hs-dp-day--disabled');

                // Range highlight
                this._applyRangeClass(cell, date);

                grid.appendChild(cell);
            }
        }

        _applyRangeClass(cell, date) {
            if (!this.startDate) return;
            const t = date.getTime();
            const s = this.startDate.getTime();
            const e = (this.endDate || this.hoverDate || this.startDate).getTime();

            const lo = Math.min(s, e);
            const hi = Math.max(s, e);

            if (t === s || t === e) {
                if (t === lo) cell.classList.add('hs-dp-day--start');
                if (t === hi) cell.classList.add('hs-dp-day--end');
                if (lo === hi) {
                    cell.classList.add('hs-dp-day--start', 'hs-dp-day--end');
                }
            } else if (t > lo && t < hi) {
                cell.classList.add('hs-dp-day--in-range');
            }
        }

        /* ========== Events ========== */
        _bindEvents() {
            // Trigger open/close
            if (this.triggerEl) {
                this.triggerEl.addEventListener('click', (e) => {
                    e.stopPropagation();
                    this.toggle();
                });
            }

            // Overlay close on outside click
            this.overlay.addEventListener('click', (e) => {
                if (!this.panel.contains(e.target)) this.close();
            });

            // Nav buttons
            this.panel.querySelector('[data-nav="prev"]').addEventListener('click', () => {
                const d = new Date(this.viewYear, this.viewMonth - 1, 1);
                this.viewYear = d.getFullYear();
                this.viewMonth = d.getMonth();
                this._renderCalendars();
            });

            this.panel.querySelector('[data-nav="next"]').addEventListener('click', () => {
                const d = new Date(this.viewYear, this.viewMonth + 1, 1);
                this.viewYear = d.getFullYear();
                this.viewMonth = d.getMonth();
                this._renderCalendars();
            });

            // Day click
            this.panel.addEventListener('click', (e) => {
                const cell = e.target.closest('.hs-dp-day');
                if (!cell || cell.classList.contains('hs-dp-day--disabled') || cell.classList.contains('hs-dp-day--empty')) return;

                const date = new Date(Number(cell.dataset.ts));

                if (!this.options.range) {
                    this.startDate = date;
                    this.endDate = null;
                    this._emit();
                    this.close();
                    return;
                }

                if (!this.picking || (this.startDate && this.endDate)) {
                    // Start fresh
                    this.startDate = date;
                    this.endDate = null;
                    this.hoverDate = null;
                    this.picking = true;
                } else {
                    // End date
                    if (date < this.startDate) {
                        this.endDate = this.startDate;
                        this.startDate = date;
                    } else {
                        this.endDate = date;
                    }
                    this.picking = false;
                    this.hoverDate = null;
                    this._emit();
                }
                this._renderCalendars();
                this._updateTrigger();
            });

            // Hover for range preview
            this.panel.addEventListener('mouseover', (e) => {
                if (!this.picking) return;
                const cell = e.target.closest('.hs-dp-day');
                if (!cell || cell.classList.contains('hs-dp-day--disabled')) return;
                this.hoverDate = new Date(Number(cell.dataset.ts));
                this._renderCalendars();
            });

            // Tabs
            this.panel.querySelectorAll('.hs-dp-tab').forEach(btn => {
                btn.addEventListener('click', () => {
                    this.panel.querySelectorAll('.hs-dp-tab').forEach(b => b.classList.remove('hs-active'));
                    btn.classList.add('hs-active');
                });
            });

            // Flex chips
            this.panel.querySelectorAll('.hs-dp-flex-chip').forEach(btn => {
                btn.addEventListener('click', () => {
                    this.panel.querySelectorAll('.hs-dp-flex-chip').forEach(b => b.classList.remove('hs-active'));
                    btn.classList.add('hs-active');
                });
            });

            // Clear
            this.panel.querySelector('.hs-dp-clear').addEventListener('click', () => {
                this.clear();
            });
        }

        /* ========== Public API ========== */
        open() {
            this.overlay.classList.add('hs-open');
            this._positionPanel();
            if (this.triggerEl) this.triggerEl.classList.add('hs-active');
        }

        close() {
            this.overlay.classList.remove('hs-open');
            if (this.triggerEl) this.triggerEl.classList.remove('hs-active');
        }

        toggle() {
            this.overlay.classList.contains('hs-open') ? this.close() : this.open();
        }

        clear() {
            this.startDate = null;
            this.endDate = null;
            this.hoverDate = null;
            this.picking = false;
            this._renderCalendars();
            this._updateTrigger();
            this._emit();
        }

        /**
         * Get selected dates
         * @returns {{startDate: Date|null, endDate: Date|null}}
         */
        getDates() {
            return { startDate: this.startDate, endDate: this.endDate };
        }

        /**
         * Set date range programmatically
         * @param {Date} start
         * @param {Date} [end]
         */
        setDates(start, end) {
            this.startDate = start || null;
            this.endDate = end || null;
            this.picking = false;
            // Navigate to start month
            if (start) {
                this.viewYear = start.getFullYear();
                this.viewMonth = start.getMonth();
            }
            this._renderCalendars();
            this._updateTrigger();
        }

        /* ========== Helpers ========== */
        _positionPanel() {
            if (!this.triggerEl) return;
            const rect = this.triggerEl.getBoundingClientRect();
            const pos = this.options.position;

            this.panel.style.top = (rect.bottom + window.scrollY + 8) + 'px';

            if (pos === 'bottom-right') {
                this.panel.style.right = (window.innerWidth - rect.right) + 'px';
                this.panel.style.left = 'auto';
            } else if (pos === 'bottom-center') {
                const mid = rect.left + rect.width / 2;
                this.panel.style.left = (mid - 350 + window.scrollX) + 'px';
                this.panel.style.right = 'auto';
            } else {
                this.panel.style.left = (rect.left + window.scrollX) + 'px';
                this.panel.style.right = 'auto';
            }
        }

        _formatDate(date) {
            if (!date) return '';
            const d = date.getDate();
            const m = MONTHS[date.getMonth()].slice(0, 3);
            return `${d} ${m}`;
        }

        _updateTrigger() {
            if (!this.triggerEl) return;
            const valEl = this.triggerEl.querySelector('.hs-dp-trigger-value');
            const clearBtn = this.triggerEl.querySelector('.hs-dp-trigger-clear');

            if (valEl) {
                if (this.startDate && this.endDate) {
                    valEl.textContent = `${this._formatDate(this.startDate)} – ${this._formatDate(this.endDate)}`;
                } else if (this.startDate) {
                    valEl.textContent = `${this._formatDate(this.startDate)} – ?`;
                } else {
                    valEl.textContent = 'Add dates';
                }
            }
            if (clearBtn) {
                clearBtn.style.display = (this.startDate) ? 'flex' : 'none';
            }
        }

        _emit() {
            if (typeof this.options.onChange === 'function') {
                this.options.onChange({ startDate: this.startDate, endDate: this.endDate });
            }
            // Also fire a custom event on the trigger
            if (this.triggerEl) {
                this.triggerEl.dispatchEvent(new CustomEvent('hs:datechange', {
                    bubbles: true,
                    detail: { startDate: this.startDate, endDate: this.endDate }
                }));
            }
        }
    }

    // Auto-init
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[data-hs-datepicker]').forEach(trigger => {
            let opts = {};
            try { opts = JSON.parse(trigger.dataset.hsDatepickerOptions || '{}'); } catch (e) { }
            new HSDatepicker(trigger, opts);
        });
    });

    window.HSDatepicker = HSDatepicker;
})();