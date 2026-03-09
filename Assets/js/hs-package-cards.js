/* =========================================================
   HolidaySeva — Tour Package Cards Component
   File: js/hs-package-cards.js
   ========================================================= */

(function () {
    'use strict';

    class HSPackageCards {
        /**
         * @param {string|HTMLElement} container
         * @param {Object} options
         * @param {Array}  [options.items=[]]         - Package data
         * @param {Array}  [options.tabs]             - Tab labels e.g. ['India','International']
         * @param {string} [options.ctaLabel]         - CTA button text (default: 'Get Offers')
         * @param {Function} [options.onCta]          - Callback when CTA clicked: (item) => {}
         * @param {Function} [options.onTabChange]    - Callback: (tabLabel) => {}
         */
        constructor(container, options = {}) {
            this.root = typeof container === 'string'
                ? document.querySelector(container)
                : container;

            if (!this.root) { console.warn('HSPackageCards: container not found'); return; }

            this.options = Object.assign({
                items: [],
                tabs: ['India', 'International'],
                ctaLabel: 'Get Offers ›',
                onCta: null,
                onTabChange: null
            }, options);

            this.activeTab = 0;
            this._build();
        }

        _build() {
            this.root.classList.add('hs-packages-section');

            // If items injected via data attr
            if (!this.options.items.length) {
                try {
                    const raw = this.root.dataset.hsPackages;
                    if (raw) this.options.items = JSON.parse(raw);
                } catch (e) { }
            }

            // Header
            const existingHeader = this.root.querySelector('.hs-packages-header');
            if (!existingHeader) {
                const header = document.createElement('div');
                header.className = 'hs-packages-header';
                const title = this.root.querySelector('.hs-packages-title');
                if (title) {
                    header.appendChild(title.cloneNode(true));
                    title.remove();
                }
                this.root.prepend(header);
            }

            // Tabs
            this._buildTabs();

            // Grid
            this.grid = this.root.querySelector('.hs-packages-grid');
            if (!this.grid) {
                this.grid = document.createElement('div');
                this.grid.className = 'hs-packages-grid';
                this.root.appendChild(this.grid);
            }

            this._renderItems(this._getFilteredItems());
        }

        _buildTabs() {
            const header = this.root.querySelector('.hs-packages-header');
            if (!header || !this.options.tabs.length) return;

            const tabBar = document.createElement('div');
            tabBar.className = 'hs-packages-tabs';

            this.options.tabs.forEach((label, i) => {
                const btn = document.createElement('button');
                btn.className = 'hs-packages-tab' + (i === 0 ? ' hs-active' : '');
                btn.textContent = label;
                btn.addEventListener('click', () => {
                    this.root.querySelectorAll('.hs-packages-tab').forEach(b => b.classList.remove('hs-active'));
                    btn.classList.add('hs-active');
                    this.activeTab = i;
                    this._renderItems(this._getFilteredItems());
                    if (typeof this.options.onTabChange === 'function') this.options.onTabChange(label);
                });
                tabBar.appendChild(btn);
            });

            header.appendChild(tabBar);
        }

        _getFilteredItems() {
            const tabLabel = this.options.tabs[this.activeTab] || '';
            return this.options.items.filter(item =>
                !item.tab || item.tab === tabLabel || item.tab === 'all'
            );
        }

        _renderItems(items) {
            this.grid.innerHTML = '';
            items.forEach(item => {
                this.grid.insertAdjacentHTML('beforeend', this._cardTemplate(item));
            });

            // Bind CTA buttons
            this.grid.querySelectorAll('.hs-pkg-cta-btn').forEach((btn, i) => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    if (typeof this.options.onCta === 'function') this.options.onCta(items[i]);
                });
            });
        }

        _cardTemplate(item) {
            const {
                image = '',
                duration = '',
                discount = '',
                name = '',
                route = [],
                agent = '',
                agentIcon = '',
                rating = '',
                reviewCount = 0,
                priceOriginal = '',
                priceFinal = '',
                href = '#',
                ctaLabel = this.options.ctaLabel
            } = item;

            const routeHtml = Array.isArray(route)
                ? route.map((r, i) => `${i > 0 ? '<span class="hs-arrow">→</span>' : ''}${r}`).join('')
                : route;

            return `
        <a class="hs-pkg-card" href="${href}">
          <div class="hs-pkg-card-img-wrap">
            <img src="${image}" alt="${name}" loading="lazy">
            ${duration ? `<div class="hs-pkg-duration-badge">${duration}</div>` : ''}
            ${discount ? `<div class="hs-pkg-discount-badge">${discount}</div>` : ''}
          </div>
          <div class="hs-pkg-card-body">
            <h3 class="hs-pkg-card-name">${name}</h3>
            ${routeHtml ? `<p class="hs-pkg-card-route">${routeHtml}</p>` : ''}
            ${agent ? `
            <div class="hs-pkg-card-agent">
              <div class="hs-pkg-agent-icon">${agentIcon || '🧳'}</div>
              <span>${agent}</span>
            </div>` : ''}
            ${rating ? `
            <div class="hs-pkg-card-rating">
              <svg viewBox="0 0 24 24"><path d="M12 2l3.1 6.3L22 9.3l-5 4.8 1.2 6.9L12 17.7l-6.2 3.3 1.2-6.9-5-4.8 6.9-1z"/></svg>
              ${rating}
              ${reviewCount ? `<span class="hs-pkg-card-rating-count">(${reviewCount} reviews)</span>` : ''}
            </div>` : ''}
            <div class="hs-pkg-card-price-row">
              <div class="hs-pkg-card-price-wrap">
                ${priceOriginal ? `<span class="hs-pkg-price-original">${priceOriginal}</span>` : ''}
                <span class="hs-pkg-price-final">${priceFinal}<span class="hs-pkg-price-unit">/person</span></span>
              </div>
              <button class="hs-pkg-cta-btn">${ctaLabel}</button>
            </div>
          </div>
        </a>`;
        }

        /* Public: update items & re-render */
        setItems(items) {
            this.options.items = items;
            this._renderItems(this._getFilteredItems());
        }
    }

    // Auto-init
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[data-hs-packages]').forEach(el => {
            let opts = {};
            try { opts = JSON.parse(el.dataset.hsPackagesOptions || '{}'); } catch (e) { }
            new HSPackageCards(el, opts);
        });
    });

    window.HSPackageCards = HSPackageCards;
})();