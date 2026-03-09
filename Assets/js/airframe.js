/**
 * ================================================================
 *  AIRFRAME UI — airframe.js
 *  Drop-in vanilla JS for all interactive components.
 *  Just import this script — everything auto-inits on DOMContentLoaded.
 * ================================================================
 */

(function () {
    'use strict';

    /* ─────────────────────────────────────────────────────────
     * CALENDAR
     * ───────────────────────────────────────────────────────── */
    const calendars = new Map(); // elId → state

    function initCalendar(el) {
        const id = el.id || ('cal_' + Math.random().toString(36).slice(2));
        el.id = id;
        const today = new Date(); today.setHours(0, 0, 0, 0);
        const state = {
            start: null,
            end: null,
            hover: null,
            curMonth: new Date(today.getFullYear(), today.getMonth(), 1),
            today,
        };
        calendars.set(id, state);
        renderCalendar(el, state);
    }

    function renderCalendar(el, state) {
        const monthsEl = el.querySelector('.calendar-months');
        if (!monthsEl) return;
        monthsEl.innerHTML = '';
        for (let m = 0; m < 2; m++) {
            const md = new Date(state.curMonth.getFullYear(), state.curMonth.getMonth() + m, 1);
            monthsEl.appendChild(buildMonth(el, state, md, m));
        }
        // Update booking card fields if present
        updateBookingFields(el, state);
    }

    function buildMonth(calEl, state, md, idx) {
        const div = document.createElement('div');
        div.className = 'calendar-month';
        const y = md.getFullYear(), mo = md.getMonth();
        const mName = md.toLocaleString('default', { month: 'long', year: 'numeric' });

        const header = document.createElement('div');
        header.className = 'calendar-month__header';

        const prevBtn = document.createElement('button');
        prevBtn.className = 'calendar-nav-btn' + (idx > 0 ? ' calendar-nav-btn--hidden' : '');
        prevBtn.innerHTML = '←';
        prevBtn.type = 'button';
        prevBtn.onclick = () => { state.curMonth = new Date(state.curMonth.getFullYear(), state.curMonth.getMonth() - 1, 1); renderCalendar(calEl, state); };

        const title = document.createElement('span');
        title.className = 'calendar-month__title';
        title.textContent = mName;

        const nextBtn = document.createElement('button');
        nextBtn.className = 'calendar-nav-btn' + (idx < 1 ? ' calendar-nav-btn--hidden' : '');
        nextBtn.innerHTML = '→';
        nextBtn.type = 'button';
        nextBtn.onclick = () => { state.curMonth = new Date(state.curMonth.getFullYear(), state.curMonth.getMonth() + 1, 1); renderCalendar(calEl, state); };

        header.appendChild(prevBtn);
        header.appendChild(title);
        header.appendChild(nextBtn);
        div.appendChild(header);

        const weekdays = document.createElement('div');
        weekdays.className = 'calendar-weekdays';
        ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'].forEach(d => {
            const wd = document.createElement('div');
            wd.className = 'calendar-weekday';
            wd.textContent = d;
            weekdays.appendChild(wd);
        });
        div.appendChild(weekdays);

        const daysEl = document.createElement('div');
        daysEl.className = 'calendar-days';

        const firstDay = new Date(y, mo, 1).getDay();
        const daysInMonth = new Date(y, mo + 1, 0).getDate();

        for (let i = 0; i < firstDay; i++) {
            const empty = document.createElement('button');
            empty.className = 'calendar-day calendar-day--empty';
            empty.disabled = true;
            daysEl.appendChild(empty);
        }

        for (let d = 1; d <= daysInMonth; d++) {
            const date = new Date(y, mo, d);
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.textContent = d;

            const classes = ['calendar-day'];

            if (date < state.today) {
                classes.push('calendar-day--disabled');
                btn.disabled = true;
            } else {
                if (date.toDateString() === state.today.toDateString()) classes.push('calendar-day--today');

                const isStart = state.start && date.toDateString() === state.start.toDateString();
                const isEnd = state.end && date.toDateString() === state.end.toDateString();
                const inRange = state.start && state.end && date > state.start && date < state.end;

                // Hover preview range
                const hoverEnd = state.hover;
                const effectiveEnd = state.end || hoverEnd;
                const rangeStart = state.start ? (effectiveEnd && effectiveEnd < state.start ? effectiveEnd : state.start) : null;
                const rangeEnd = state.start ? (effectiveEnd && effectiveEnd < state.start ? state.start : effectiveEnd) : null;

                if (isStart && isEnd) {
                    classes.push('calendar-day--selected');
                } else if (isStart) {
                    classes.push('calendar-day--range-start');
                } else if (isEnd) {
                    classes.push('calendar-day--range-end');
                } else if (inRange) {
                    classes.push('calendar-day--in-range');
                } else if (!state.end && rangeStart && rangeEnd && date > rangeStart && date < rangeEnd) {
                    // hover preview range (light grey)
                    classes.push('calendar-day--hover-range');
                }

                btn.onmouseenter = () => {
                    if (state.start && !state.end) {
                        state.hover = date;
                        renderCalendar(calEl, state);
                    }
                };

                btn.onclick = () => { selectDay(calEl, state, date); };
            }

            btn.className = classes.join(' ');
            daysEl.appendChild(btn);
        }

        div.appendChild(daysEl);
        return div;
    }

    function selectDay(calEl, state, date) {
        if (!state.start || (state.start && state.end)) {
            state.start = date;
            state.end = null;
            state.hover = null;
        } else if (date < state.start) {
            state.end = state.start;
            state.start = date;
        } else {
            state.end = date;
            state.hover = null;
        }
        renderCalendar(calEl, state);
        calEl.dispatchEvent(new CustomEvent('calendar:change', { detail: { start: state.start, end: state.end }, bubbles: true }));
    }

    function clearCalendar(calEl) {
        const state = getCalState(calEl);
        if (!state) return;
        state.start = null;
        state.end = null;
        state.hover = null;
        renderCalendar(calEl, state);
    }

    function shiftMonth(calEl, delta) {
        const state = getCalState(calEl);
        if (!state) return;
        state.curMonth = new Date(state.curMonth.getFullYear(), state.curMonth.getMonth() + delta, 1);
        renderCalendar(calEl, state);
    }

    function getCalState(calEl) {
        return calendars.get(typeof calEl === 'string' ? calEl : calEl.id);
    }

    function updateBookingFields(calEl, state) {
        // Look for booking card date fields in the same ancestor
        const root = calEl.closest('[data-booking]') || document;
        const checkIn = root.querySelector('[data-booking-checkin]');
        const checkOut = root.querySelector('[data-booking-checkout]');
        if (checkIn) checkIn.textContent = state.start ? formatDate(state.start) : 'Add date';
        if (checkOut) checkOut.textContent = state.end ? formatDate(state.end) : 'Add date';
    }

    function formatDate(d) {
        return d.toLocaleDateString('en-GB', { day: 'numeric', month: 'short', year: 'numeric' });
    }

    // Mouseleave → clear hover
    function onCalMouseLeave(calEl) {
        const state = getCalState(calEl);
        if (!state) return;
        state.hover = null;
        renderCalendar(calEl, state);
    }

    /* ─────────────────────────────────────────────────────────
     * DROPDOWN
     * ───────────────────────────────────────────────────────── */
    function initDropdowns() {
        document.querySelectorAll('.dropdown__trigger').forEach(trigger => {
            trigger.addEventListener('click', e => {
                e.stopPropagation();
                const dd = trigger.closest('.dropdown');
                if (!dd) return;
                const open = dd.classList.contains('dropdown--open');
                closeAllDropdowns();
                if (!open) {
                    dd.classList.add('dropdown--open');
                    trigger.setAttribute('aria-expanded', 'true');
                }
            });
        });

        document.addEventListener('click', closeAllDropdowns);
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') closeAllDropdowns();
        });
    }

    function closeAllDropdowns() {
        document.querySelectorAll('.dropdown--open').forEach(dd => {
            dd.classList.remove('dropdown--open');
            const t = dd.querySelector('.dropdown__trigger');
            if (t) t.setAttribute('aria-expanded', 'false');
        });
    }

    function toggleDropdown(idOrEl) {
        const el = typeof idOrEl === 'string' ? document.getElementById(idOrEl) : idOrEl;
        if (!el) return;
        const open = el.classList.contains('dropdown--open');
        closeAllDropdowns();
        if (!open) {
            el.classList.add('dropdown--open');
            const t = el.querySelector('.dropdown__trigger');
            if (t) t.setAttribute('aria-expanded', 'true');
        }
    }

    /* ─────────────────────────────────────────────────────────
     * COUNTER
     * ───────────────────────────────────────────────────────── */
    function changeCount(type, delta, opts = {}) {
        const min = opts.min !== undefined ? opts.min : 0;
        const max = opts.max !== undefined ? opts.max : 99;
        const countEl = document.getElementById(type + 'Count');
        if (!countEl) return;
        let val = parseInt(countEl.textContent, 10) || 0;
        val = Math.max(min, Math.min(max, val + delta));
        countEl.textContent = val;
        const downBtn = document.getElementById(type + 'Down');
        const upBtn = document.getElementById(type + 'Up');
        if (downBtn) downBtn.disabled = val <= min;
        if (upBtn) upBtn.disabled = val >= max;
        // Update label if a summary element is present
        const label = document.getElementById('guestLabel');
        if (label) updateGuestLabel();
    }

    function updateGuestLabel() {
        const adultEl = document.getElementById('adultsCount');
        const childEl = document.getElementById('childrenCount');
        const infantEl = document.getElementById('infantsCount');
        const label = document.getElementById('guestLabel');
        if (!label) return;
        const adults = parseInt(adultEl?.textContent || 0, 10);
        const children = parseInt(childEl?.textContent || 0, 10);
        const infants = parseInt(infantEl?.textContent || 0, 10);
        const total = adults + children;
        const parts = [`${total} guest${total !== 1 ? 's' : ''}`];
        if (infants) parts.push(`${infants} infant${infants !== 1 ? 's' : ''}`);
        label.textContent = parts.join(', ');
    }

    /* ─────────────────────────────────────────────────────────
     * MODAL
     * ───────────────────────────────────────────────────────── */
    function openModal(id) {
        const el = document.getElementById(id);
        if (!el) return;
        el.classList.add('modal-overlay--visible');
        el.classList.remove('modal-overlay--hidden');
        document.body.style.overflow = 'hidden';
        el.querySelector('.modal__close')?.focus();
    }

    function closeModal(id) {
        const el = document.getElementById(id);
        if (!el) return;
        el.classList.remove('modal-overlay--visible');
        document.body.style.overflow = '';
    }

    function initModals() {
        document.querySelectorAll('.modal-overlay').forEach(overlay => {
            overlay.addEventListener('click', e => {
                if (e.target === overlay) closeModal(overlay.id);
            });
        });

        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') {
                document.querySelectorAll('.modal-overlay--visible').forEach(m => closeModal(m.id));
            }
        });
    }

    /* ─────────────────────────────────────────────────────────
     * REVIEW CARDS — Show more / less
     * ───────────────────────────────────────────────────────── */
    function toggleReview(id, btn) {
        const el = document.getElementById(id);
        if (!el) return;
        const truncated = el.classList.contains('review-card__body--truncated');
        el.classList.toggle('review-card__body--truncated', !truncated);
        btn.textContent = truncated ? 'Show less' : 'Show more';
    }

    /* ─────────────────────────────────────────────────────────
     * COPY TO CLIPBOARD
     * ───────────────────────────────────────────────────────── */
    function doCopy(btn) {
        const pre = btn.closest('.doc-code')?.querySelector('pre');
        if (!pre) return;
        // Strip custom tag elements, get plain text
        const text = pre.innerText;
        navigator.clipboard.writeText(text).then(() => {
            btn.textContent = 'Copied!';
            btn.classList.add('ok');
            setTimeout(() => { btn.textContent = 'Copy'; btn.classList.remove('ok'); }, 1800);
        }).catch(() => {
            // Fallback
            const ta = document.createElement('textarea');
            ta.value = text;
            document.body.appendChild(ta);
            ta.select();
            document.execCommand('copy');
            document.body.removeChild(ta);
            btn.textContent = 'Copied!';
            setTimeout(() => { btn.textContent = 'Copy'; }, 1800);
        });
    }

    /* ─────────────────────────────────────────────────────────
     * SCROLL SPY — sidebar active links
     * ───────────────────────────────────────────────────────── */
    function initScrollSpy() {
        const secs = document.querySelectorAll('section[id]');
        const links = document.querySelectorAll('.doc-sidebar__link');
        if (!secs.length || !links.length) return;

        const obs = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    links.forEach(l => l.classList.remove('is-active'));
                    const a = document.querySelector(`.doc-sidebar__link[href="#${e.target.id}"]`);
                    if (a) a.classList.add('is-active');
                }
            });
        }, { threshold: 0.15, rootMargin: '-56px 0px -55% 0px' });

        secs.forEach(s => obs.observe(s));
    }

    /* ─────────────────────────────────────────────────────────
     * CALENDAR TABS (Dates / Flexible toggle)
     * ───────────────────────────────────────────────────────── */
    function initCalendarTabs() {
        document.querySelectorAll('.calendar-tab').forEach(tab => {
            tab.addEventListener('click', () => {
                const parent = tab.closest('.calendar-tabs');
                if (!parent) return;
                parent.querySelectorAll('.calendar-tab').forEach(t => t.classList.remove('calendar-tab--active'));
                tab.classList.add('calendar-tab--active');
            });
        });

        document.querySelectorAll('.calendar-flex-pill').forEach(pill => {
            pill.addEventListener('click', () => {
                const parent = pill.closest('.calendar-flex-pills');
                if (!parent) return;
                parent.querySelectorAll('.calendar-flex-pill').forEach(p => p.classList.remove('calendar-flex-pill--active'));
                pill.classList.add('calendar-flex-pill--active');
            });
        });
    }

    /* ─────────────────────────────────────────────────────────
     * WISHLIST (heart toggle)
     * ───────────────────────────────────────────────────────── */
    function initWishlists() {
        document.querySelectorAll('[data-wishlist]').forEach(btn => {
            btn.addEventListener('click', e => {
                e.stopPropagation();
                const active = btn.classList.toggle('is-wishlisted');
                btn.setAttribute('aria-pressed', active);
                btn.style.color = active ? '#FF385C' : 'white';
            });
        });
    }

    /* ─────────────────────────────────────────────────────────
     * PUBLIC API
     * ───────────────────────────────────────────────────────── */
    const AirframeUI = {
        // Calendar
        initCalendar,
        clearCalendar,
        shiftMonth,
        getCalState,
        // Dropdown
        toggleDropdown,
        closeAllDropdowns,
        // Counter
        changeCount,
        // Modal
        openModal,
        closeModal,
        // Review
        toggleReview,
        // Clipboard
        doCopy,
        // Utils
        formatDate,
    };

    /* ─────────────────────────────────────────────────────────
     * AUTO-INIT on DOMContentLoaded
     * ───────────────────────────────────────────────────────── */
    function autoInit() {
        // Calendars
        document.querySelectorAll('.calendar-wrapper, [data-calendar]').forEach(el => {
            if (el.querySelector('.calendar-months')) initCalendar(el);
        });

        // Dropdowns
        initDropdowns();

        // Modals
        initModals();

        // Scroll spy
        initScrollSpy();

        // Calendar tabs
        initCalendarTabs();

        // Wishlists
        initWishlists();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', autoInit);
    } else {
        autoInit();
    }

    // Expose globally
    window.AirframeUI = AirframeUI;

    // Legacy compat — functions called inline in the original HTML
    window.doCopy = (btn) => AirframeUI.doCopy(btn);
    window.toggleDropdown = (id) => AirframeUI.toggleDropdown(id);
    window.changeCount = (t, d, o) => AirframeUI.changeCount(t, d, o);
    window.openModal = (id) => AirframeUI.openModal(id);
    window.closeModal = (id) => AirframeUI.closeModal(id);
    window.toggleReview = (id, btn) => AirframeUI.toggleReview(id, btn);

    // Calendar global helpers (used by inline onclick in original HTML)
    window.clearCalendar = () => {
        const el = document.getElementById('calendarEl') || document.querySelector('.calendar-months')?.closest('[id]');
        if (el) AirframeUI.clearCalendar(el);
    };
    window.shiftMonth = (d) => {
        const wrapper = document.querySelector('.calendar-wrapper[id]');
        if (wrapper) AirframeUI.shiftMonth(wrapper, d);
    };

})();