/**
 * calendar.js
 * Page-specific init for the Calendar documentation page.
 * airframe.js auto-inits .calendar-wrapper — this file adds
 * the tab switching logic and the mouseleave hover-clear.
 */
(function () {
    'use strict';

    /* Tab switching: Dates ↔ Flexible */
    document.querySelectorAll('.calendar-tab').forEach(tab => {
        tab.addEventListener('click', function () {
            const tabs = this.closest('.calendar-tabs');
            tabs.querySelectorAll('.calendar-tab').forEach(t => {
                t.classList.remove('is-active', 'calendar-tab--active');
            });
            this.classList.add('is-active');
        });
    });

    /* Clear hover state when mouse leaves calendar */
    const calWrap = document.getElementById('calendarEl');
    if (calWrap) {
        calWrap.addEventListener('mouseleave', () => {
            if (window.AirframeUI) {
                const state = AirframeUI.getCalState(calWrap);
                if (state) {
                    state.hover = null;
                    AirframeUI.initCalendar(calWrap); // re-render
                }
            }
        });
    }

    /* Expose clearCalendar globally for the "Clear dates" button */
    window.clearCalendar = function () {
        const el = document.getElementById('calendarEl');
        if (el && window.AirframeUI) AirframeUI.clearCalendar(el);
    };

})();
