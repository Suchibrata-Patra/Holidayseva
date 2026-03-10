/* ============================================================
   HOLIDAYSEVA — BUTTON JAVASCRIPT
   Handles: loading states, toggle/pressed, ripple effect,
            keyboard activation, aria sync
   ============================================================ */

class ButtonSystem {
    constructor() {
        this.init();
    }

    init() {
        document.addEventListener('DOMContentLoaded', () => {
            this._initRipple();
            this._initToggleButtons();
            this._initLoadingButtons();
            this._initKeyboardSupport();
        });
    }

    /* ── Ripple effect ──────────────────────────────────────── */
    _initRipple() {
        document.querySelectorAll('.btn:not(.btn-link)').forEach(btn => {
            btn.addEventListener('click', (e) => this._createRipple(e, btn));
        });
    }

    _createRipple(e, btn) {
        if (btn.disabled || btn.getAttribute('aria-disabled') === 'true') return;

        const ripple = document.createElement('span');
        const rect = btn.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height) * 1.6;
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;

        ripple.style.cssText = `
        position:absolute;
        width:${size}px; height:${size}px;
        top:${y}px; left:${x}px;
        border-radius:50%;
        background:rgba(255,255,255,0.22);
        pointer-events:none;
        transform:scale(0);
        animation:btn-ripple 480ms cubic-bezier(0.4,0,0.2,1) forwards;
      `;

        // Inject keyframes once
        if (!document.getElementById('btn-ripple-kf')) {
            const style = document.createElement('style');
            style.id = 'btn-ripple-kf';
            style.textContent = '@keyframes btn-ripple{to{transform:scale(1);opacity:0}}';
            document.head.appendChild(style);
        }

        btn.appendChild(ripple);
        ripple.addEventListener('animationend', () => ripple.remove());
    }

    /* ── Toggle / pressed buttons ──────────────────────────── */
    _initToggleButtons() {
        document.querySelectorAll('.btn-toggle').forEach(btn => {
            btn.addEventListener('click', () => {
                if (btn.disabled) return;
                const pressed = btn.getAttribute('aria-pressed') === 'true';
                btn.setAttribute('aria-pressed', String(!pressed));
                btn.classList.toggle('is-selected', !pressed);

                btn.dispatchEvent(new CustomEvent('btn-toggle', {
                    bubbles: true,
                    detail: { pressed: !pressed, element: btn }
                }));
            });
        });
    }

    /* ── Loading state ─────────────────────────────────────── */
    _initLoadingButtons() {
        // Buttons with data-loading-on-click auto-enter loading state on click
        document.querySelectorAll('[data-loading-on-click]').forEach(btn => {
            btn.addEventListener('click', () => this.setLoading(btn, true));
        });
    }

    /**
     * Set a button's loading state programmatically.
     * @param {HTMLElement} btn
     * @param {boolean} isLoading
     */
    setLoading(btn, isLoading) {
        if (isLoading) {
            // Save original content
            if (!btn.dataset.originalHtml) {
                btn.dataset.originalHtml = btn.innerHTML;
            }

            const spinnerHtml = `
          <span class="btn-spinner" aria-hidden="true"></span>
          <span class="btn-label" aria-live="polite" style="position:absolute;opacity:0">
            ${btn.dataset.loadingText || 'Loading…'}
          </span>
          <span aria-hidden="true">${btn.dataset.loadingText || 'Loading…'}</span>
        `;

            btn.innerHTML = spinnerHtml;
            btn.setAttribute('data-loading', 'true');
            btn.setAttribute('aria-busy', 'true');
            btn.disabled = true;

        } else {
            // Restore
            if (btn.dataset.originalHtml) {
                btn.innerHTML = btn.dataset.originalHtml;
                delete btn.dataset.originalHtml;
            }
            btn.removeAttribute('data-loading');
            btn.removeAttribute('aria-busy');
            btn.disabled = false;
        }
    }

    /* ── Keyboard support ──────────────────────────────────── */
    _initKeyboardSupport() {
        // <a> and <div> used as buttons need Space/Enter activation
        document.querySelectorAll('.btn:not(button)').forEach(el => {
            el.addEventListener('keydown', (e) => {
                if (e.key === ' ' || e.key === 'Enter') {
                    e.preventDefault();
                    el.click();
                }
            });
        });
    }
}

/* ── Public helpers ─────────────────────────────────────────── */

/**
 * Start loading on any button element.
 * Usage: ButtonSystem.loading(el, true);
 */
ButtonSystem.loading = function (btn, state) {
    window._btnSystem = window._btnSystem || new ButtonSystem();
    window._btnSystem.setLoading(btn, state);
};

/* ── Auto-boot ──────────────────────────────────────────────── */
window._btnSystem = new ButtonSystem();