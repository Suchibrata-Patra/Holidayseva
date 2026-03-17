/* ============================================================
   AIRBNB TOGGLE SWITCH JAVASCRIPT
   ============================================================ */

class ToggleSwitch {
    constructor(selector) {
        this.toggles = document.querySelectorAll(selector);
        this.init();
    }

    init() {
        this.toggles.forEach((toggle) => {
            toggle.addEventListener('click', (e) => this.handleToggle(e));

            // Store initial state in data attribute
            const isActive = toggle.classList.contains('active');
            toggle.dataset.state = isActive ? 'on' : 'off';
        });
    }

    handleToggle(event) {
        const toggle = event.currentTarget;

        // Toggle the active class
        toggle.classList.toggle('active');

        // Update the state
        const newState = toggle.classList.contains('active') ? 'on' : 'off';
        toggle.dataset.state = newState;

        // Dispatch custom event for state change
        const event_obj = new CustomEvent('toggle-change', {
            detail: {
                state: newState,
                isActive: toggle.classList.contains('active'),
                element: toggle
            }
        });
        toggle.dispatchEvent(event_obj);

        console.log(`Toggle state changed: ${newState}`);
    }

    // Method to get state of a specific toggle
    getState(element) {
        return element.dataset.state || 'off';
    }

    // Method to set state programmatically
    setState(element, state) {
        if (state === 'on' || state === true) {
            element.classList.add('active');
            element.dataset.state = 'on';
        } else {
            element.classList.remove('active');
            element.dataset.state = 'off';
        }
    }

    // Method to toggle programmatically
    toggle(element) {
        element.classList.toggle('active');
        const newState = element.classList.contains('active') ? 'on' : 'off';
        element.dataset.state = newState;
    }
}

// Auto-initialize all toggles with class 'toggle'
document.addEventListener('DOMContentLoaded', () => {
    new ToggleSwitch('.toggle');
});