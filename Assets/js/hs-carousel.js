/* =========================================================
   HolidaySeva — Card Carousel Component
   File: js/hs-carousel.js
   ========================================================= */

(function () {
    'use strict';

    class HSCarousel {
        /**
         * @param {string|HTMLElement} container - CSS selector or element
         * @param {Object} options
         * @param {number} [options.visibleCards=6]   - Max cards visible
         * @param {number} [options.scrollBy=3]       - Cards to scroll per click
         * @param {number} [options.gap=16]            - Gap in px between cards
         * @param {Array}  [options.items=[]]          - Card data array
         */
        constructor(container, options = {}) {
            this.root = typeof container === 'string'
                ? document.querySelector(container)
                : container;

            if (!this.root) { console.warn('HSCarousel: container not found'); return; }

            this.options = Object.assign({
                visibleCards: 6,
                scrollBy: 3,
                gap: 16,
                items: []
            }, options);

            this.currentIndex = 0;
            this._build();
            this._bindEvents();
            this._update();
        }

        /* ---- Render ---- */
        _build() {
            const o = this.options;

            // Section wrapper
            this.root.classList.add('hs-carousel-section');

            // Header
            const header = this.root.querySelector('.hs-carousel-header');
            if (header) {
                this.btnPrev = header.querySelector('[data-hs-prev]');
                this.btnNext = header.querySelector('[data-hs-next]');
            }

            // Viewport & Track
            this.viewport = this.root.querySelector('.hs-carousel-viewport');
            this.track = this.root.querySelector('.hs-carousel-track');

            if (!this.track) return;

            // Render items if provided via JS
            if (o.items && o.items.length) {
                this.track.innerHTML = '';
                o.items.forEach(item => {
                    this.track.insertAdjacentHTML('beforeend', HSCarousel.cardTemplate(item));
                });
                // Append "See All" card
                if (o.seeAllHref) {
                    this.track.insertAdjacentHTML('beforeend', HSCarousel.seeAllTemplate(o.seeAllAvatars || []));
                }
            }

            this.cards = Array.from(this.track.children);
            this.total = this.cards.length;
        }

        _bindEvents() {
            if (this.btnPrev) this.btnPrev.addEventListener('click', () => this.prev());
            if (this.btnNext) this.btnNext.addEventListener('click', () => this.next());

            // Wishlist toggle
            this.root.addEventListener('click', e => {
                const btn = e.target.closest('.hs-card-wishlist');
                if (btn) {
                    e.preventDefault();
                    btn.classList.toggle('hs-wishlisted');
                }
            });

            // Responsive recalc
            window.addEventListener('resize', () => this._update());
        }

        _getCardWidth() {
            if (!this.cards || !this.cards[0]) return 0;
            return this.cards[0].getBoundingClientRect().width + this.options.gap;
        }

        _maxIndex() {
            const visible = this._visibleCount();
            return Math.max(0, this.total - visible);
        }

        _visibleCount() {
            if (!this.viewport) return this.options.visibleCards;
            const vw = this.viewport.offsetWidth;
            const cw = this._getCardWidth() || 1;
            return Math.floor(vw / cw);
        }

        _update() {
            const max = this._maxIndex();
            this.currentIndex = Math.min(this.currentIndex, max);

            const offset = this.currentIndex * this._getCardWidth();
            if (this.track) this.track.style.transform = `translateX(-${offset}px)`;

            if (this.btnPrev) this.btnPrev.disabled = this.currentIndex === 0;
            if (this.btnNext) this.btnNext.disabled = this.currentIndex >= max;
        }

        next() {
            const step = this.options.scrollBy;
            this.currentIndex = Math.min(this.currentIndex + step, this._maxIndex());
            this._update();
        }

        prev() {
            const step = this.options.scrollBy;
            this.currentIndex = Math.max(this.currentIndex - step, 0);
            this._update();
        }

        goTo(index) {
            this.currentIndex = Math.max(0, Math.min(index, this._maxIndex()));
            this._update();
        }

        /* ---- Static Templates ---- */
        static cardTemplate(item) {
            const {
                image = '',
                badge = 'Original',
                location = '',
                name = '',
                priceFrom = '',
                price = '',
                rating = '',
                href = '#'
            } = item;

            return `
        <a class="hs-card" href="${href}">
          <div class="hs-card-image-wrap">
            <img src="${image}" alt="${name}" loading="lazy">
            <div class="hs-card-badge">
              <svg class="hs-card-badge-icon" viewBox="0 0 24 24" fill="none">
                <path d="M12 2l2.4 7.4H22l-6.2 4.5 2.4 7.4L12 17l-6.2 4.3 2.4-7.4L2 9.4h7.6z" fill="#FFB400"/>
              </svg>
              ${badge}
            </div>
            <button class="hs-card-wishlist" aria-label="Save to wishlist">
              <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 28c-.3 0-.6-.1-.8-.3C5.2 19.4 2 15.1 2 11c0-4.4 3.6-8 8-8 2.5 0 4.9 1.2 6.5 3.2.8-1 1.9-1.9 3.1-2.5 1.2-.6 2.5-.9 3.8-.9C27.6 2.8 31 6 31 10.2c0 4.3-3 8.7-13.2 17.5-.2.2-.5.3-.8.3z" fill="none" stroke="#fff" stroke-width="2"/>
              </svg>
            </button>
          </div>
          <div class="hs-card-info">
            <p class="hs-card-location">${location}</p>
            <p class="hs-card-name">${name}</p>
            <div class="hs-card-meta">
              <span class="hs-card-price-from">${priceFrom}</span>
              <span class="hs-card-price">${price}</span>
              ${rating ? `<span class="hs-card-rating">
                <svg viewBox="0 0 32 32"><path d="M15.1 1.6l-4 8.2L2 11.1l6.5 6.4-1.5 9 8.1-4.3 8.1 4.3-1.5-9L28 11l-9.1-1.3z"/></svg>
                ${rating}
              </span>` : ''}
            </div>
          </div>
        </a>`;
        }

        static seeAllTemplate(avatars = []) {
            const imgs = avatars.slice(0, 4).map(src =>
                `<img src="${src}" alt="">`
            ).join('');
            return `
        <a class="hs-card-see-all" href="#">
          <div class="hs-card-see-all-avatars">${imgs}</div>
          <span class="hs-card-see-all-label">See all</span>
        </a>`;
        }
    }

    // Auto-init via data attribute
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[data-hs-carousel]').forEach(el => {
            let opts = {};
            try { opts = JSON.parse(el.dataset.hsCarouselOptions || '{}'); } catch (e) { }
            new HSCarousel(el, opts);
        });
    });

    // Expose globally
    window.HSCarousel = HSCarousel;
})();