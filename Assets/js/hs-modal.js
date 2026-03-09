/* =========================================================
   HolidaySeva — Show More Modal Component
   File: js/hs-modal.js
   ========================================================= */

(function () {
    'use strict';

    class HSModal {
        /**
         * @param {Object} options
         * @param {string}      [options.title]         - Modal heading
         * @param {string}      [options.content]       - HTML content string
         * @param {string}      [options.contentSelector] - CSS selector to clone content from DOM
         * @param {Array}       [options.footerButtons]  - [{label, type:'primary'|'secondary', onClick}]
         * @param {boolean}     [options.closeOnBackdrop=true]
         * @param {boolean}     [options.showFooter=false]
         * @param {Function}    [options.onOpen]
         * @param {Function}    [options.onClose]
         */
        constructor(options = {}) {
            this.options = Object.assign({
                title: 'About this space',
                content: '',
                contentSelector: null,
                footerButtons: [],
                closeOnBackdrop: true,
                showFooter: false,
                onOpen: null,
                onClose: null
            }, options);

            this._buildDOM();
            this._bindEvents();
        }

        _buildDOM() {
            // Backdrop
            this.backdrop = document.createElement('div');
            this.backdrop.className = 'hs-modal-backdrop';
            this.backdrop.setAttribute('role', 'dialog');
            this.backdrop.setAttribute('aria-modal', 'true');

            // Panel
            this.panel = document.createElement('div');
            this.panel.className = 'hs-modal';

            // Header
            this.panel.innerHTML = `
          <div class="hs-modal-header">
            <button class="hs-modal-close" aria-label="Close">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M18 6 6 18M6 6l12 12"/>
              </svg>
            </button>
            <h2 class="hs-modal-title">${this.options.title}</h2>
          </div>
          <div class="hs-modal-body"></div>
          ${this.options.showFooter || this.options.footerButtons.length ? `
          <div class="hs-modal-footer"></div>` : ''}
        `;

            this.bodyEl = this.panel.querySelector('.hs-modal-body');
            this.titleEl = this.panel.querySelector('.hs-modal-title');

            // Footer buttons
            if (this.options.footerButtons.length) {
                const footer = this.panel.querySelector('.hs-modal-footer');
                this.options.footerButtons.forEach(btn => {
                    const b = document.createElement('button');
                    b.className = `hs-modal-footer-btn hs-modal-footer-btn--${btn.type || 'secondary'}`;
                    b.textContent = btn.label;
                    if (typeof btn.onClick === 'function') b.addEventListener('click', () => btn.onClick(this));
                    footer.appendChild(b);
                });
            }

            // Content
            this._setContent();

            this.backdrop.appendChild(this.panel);
            document.body.appendChild(this.backdrop);
        }

        _setContent() {
            if (this.options.contentSelector) {
                const source = document.querySelector(this.options.contentSelector);
                if (source) {
                    this.bodyEl.innerHTML = source.innerHTML;
                    return;
                }
            }
            this.bodyEl.innerHTML = this.options.content || '';
        }

        _bindEvents() {
            // Close button
            this.panel.querySelector('.hs-modal-close').addEventListener('click', () => this.close());

            // Backdrop click
            if (this.options.closeOnBackdrop) {
                this.backdrop.addEventListener('click', (e) => {
                    if (!this.panel.contains(e.target)) this.close();
                });
            }

            // ESC key
            this._keyHandler = (e) => {
                if (e.key === 'Escape' && this.isOpen()) this.close();
            };
            document.addEventListener('keydown', this._keyHandler);
        }

        /* ========== Public API ========== */
        open() {
            document.body.style.overflow = 'hidden';
            this.backdrop.classList.add('hs-open');
            // Focus management
            setTimeout(() => {
                const focusable = this.panel.querySelector('button, [tabindex]');
                if (focusable) focusable.focus();
            }, 50);
            if (typeof this.options.onOpen === 'function') this.options.onOpen(this);
        }

        close() {
            this.backdrop.classList.remove('hs-open');
            document.body.style.overflow = '';
            if (typeof this.options.onClose === 'function') this.options.onClose(this);
        }

        toggle() {
            this.isOpen() ? this.close() : this.open();
        }

        isOpen() {
            return this.backdrop.classList.contains('hs-open');
        }

        /**
         * Update content after creation
         * @param {string} htmlContent
         */
        setContent(htmlContent) {
            this.options.content = htmlContent;
            this.bodyEl.innerHTML = htmlContent;
        }

        /**
         * Update title after creation
         * @param {string} title
         */
        setTitle(title) {
            this.options.title = title;
            this.titleEl.textContent = title;
        }

        /** Remove modal from DOM */
        destroy() {
            document.removeEventListener('keydown', this._keyHandler);
            this.backdrop.remove();
        }
    }

    /* -------------------------------------------------------
     * HSShowMore
     * Truncates content inline with a "Show more" link that
     * opens the full content in an HSModal.
     * ------------------------------------------------------- */
    class HSShowMore {
        /**
         * @param {string|HTMLElement} container  - The element whose content to truncate
         * @param {Object} options
         * @param {string}  [options.truncateHeight='120px']   - Collapsed height
         * @param {string}  [options.triggerLabel='Show more'] - Link text
         * @param {string}  [options.modalTitle]               - Modal heading
         * @param {boolean} [options.useModal=true]            - Open in modal or expand inline
         */
        constructor(container, options = {}) {
            this.container = typeof container === 'string'
                ? document.querySelector(container)
                : container;

            if (!this.container) { console.warn('HSShowMore: container not found'); return; }

            this.options = Object.assign({
                truncateHeight: '120px',
                triggerLabel: 'Show more',
                modalTitle: 'About this space',
                useModal: true
            }, options);

            this._init();
        }

        _init() {
            // Wrap content
            const wrapper = document.createElement('div');
            wrapper.className = 'hs-truncated-content hs-collapsed';
            wrapper.style.setProperty('--hs-truncate-height', this.options.truncateHeight);

            // Move children into wrapper
            while (this.container.firstChild) wrapper.appendChild(this.container.firstChild);
            this.container.appendChild(wrapper);

            // Grab full content HTML
            const fullHTML = wrapper.innerHTML;

            // Trigger button
            const trigger = document.createElement('button');
            trigger.className = 'hs-show-more-link';
            trigger.innerHTML = `${this.options.triggerLabel}
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M9 18l6-6-6-6"/>
          </svg>`;
            this.container.appendChild(trigger);

            if (this.options.useModal) {
                // Build modal lazily
                trigger.addEventListener('click', () => {
                    if (!this._modal) {
                        this._modal = new HSModal({
                            title: this.options.modalTitle,
                            content: fullHTML,
                            showFooter: false
                        });
                    }
                    this._modal.open();
                });
            } else {
                // Expand inline
                trigger.addEventListener('click', () => {
                    wrapper.classList.remove('hs-collapsed');
                    trigger.style.display = 'none';
                });
            }
        }
    }

    // Auto-init Show More
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[data-hs-show-more]').forEach(el => {
            let opts = {};
            try { opts = JSON.parse(el.dataset.hsShowMoreOptions || '{}'); } catch (e) { }
            new HSShowMore(el, opts);
        });

        // Auto-init modals via trigger buttons
        document.querySelectorAll('[data-hs-modal-trigger]').forEach(btn => {
            const targetSel = btn.dataset.hsModalTrigger;
            const title = btn.dataset.hsModalTitle || 'Details';
            const modal = new HSModal({ title, contentSelector: targetSel });
            btn.addEventListener('click', () => modal.open());
        });
    });

    window.HSModal = HSModal;
    window.HSShowMore = HSShowMore;
})();