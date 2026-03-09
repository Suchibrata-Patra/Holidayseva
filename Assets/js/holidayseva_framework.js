/* =============================================================
   HolidaySeva UI Framework
   File: holidayseva_framework.js
   Version: 1.0.0

   USAGE:
     <script src="holidayseva_framework.js"></script>

   All components are registered on the global `HolidaySeva`
   namespace AND as direct window globals for convenience:
     window.HSCarousel
     window.HSDatepicker
     window.HSPackageCards
     window.HSModal
     window.HSShowMore
   ============================================================= */

/* ─── Inline all component scripts ─────────────────────────────
   NOTE: When using individual files, replace this bundle with:
   <script src="js/hs-carousel.js"></script>
   <script src="js/hs-datepicker.js"></script>
   <script src="js/hs-package-cards.js"></script>
   <script src="js/hs-modal.js"></script>
   ─────────────────────────────────────────────────────────── */

/* ══════════════════════════════════════════════════════════════
   1. CAROUSEL
   ══════════════════════════════════════════════════════════════ */
(function () {
    'use strict';

    class HSCarousel {
        constructor(container, options = {}) {
            this.root = typeof container === 'string' ? document.querySelector(container) : container;
            if (!this.root) { console.warn('HSCarousel: container not found'); return; }
            this.options = Object.assign({ visibleCards: 6, scrollBy: 3, gap: 16, items: [] }, options);
            this.currentIndex = 0;
            this._build();
            this._bindEvents();
            this._update();
        }
        _build() {
            this.root.classList.add('hs-carousel-section');
            const header = this.root.querySelector('.hs-carousel-header');
            if (header) {
                this.btnPrev = header.querySelector('[data-hs-prev]');
                this.btnNext = header.querySelector('[data-hs-next]');
            }
            this.viewport = this.root.querySelector('.hs-carousel-viewport');
            this.track = this.root.querySelector('.hs-carousel-track');
            if (!this.track) return;
            if (this.options.items && this.options.items.length) {
                this.track.innerHTML = '';
                this.options.items.forEach(item => {
                    this.track.insertAdjacentHTML('beforeend', HSCarousel.cardTemplate(item));
                });
                if (this.options.seeAllHref) {
                    this.track.insertAdjacentHTML('beforeend', HSCarousel.seeAllTemplate(this.options.seeAllAvatars || []));
                }
            }
            this.cards = Array.from(this.track.children);
            this.total = this.cards.length;
        }
        _bindEvents() {
            if (this.btnPrev) this.btnPrev.addEventListener('click', () => this.prev());
            if (this.btnNext) this.btnNext.addEventListener('click', () => this.next());
            this.root.addEventListener('click', e => {
                const btn = e.target.closest('.hs-card-wishlist');
                if (btn) { e.preventDefault(); btn.classList.toggle('hs-wishlisted'); }
            });
            window.addEventListener('resize', () => this._update());
        }
        _getCardWidth() {
            if (!this.cards || !this.cards[0]) return 0;
            return this.cards[0].getBoundingClientRect().width + this.options.gap;
        }
        _maxIndex() {
            return Math.max(0, this.total - this._visibleCount());
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
        next() { this.currentIndex = Math.min(this.currentIndex + this.options.scrollBy, this._maxIndex()); this._update(); }
        prev() { this.currentIndex = Math.max(this.currentIndex - this.options.scrollBy, 0); this._update(); }
        goTo(i) { this.currentIndex = Math.max(0, Math.min(i, this._maxIndex())); this._update(); }

        static cardTemplate(item) {
            const { image = '', badge = 'Original', location = '', name = '', priceFrom = '', price = '', rating = '', href = '#' } = item;
            return `<a class="hs-card" href="${href}">
          <div class="hs-card-image-wrap">
            <img src="${image}" alt="${name}" loading="lazy">
            <div class="hs-card-badge"><svg class="hs-card-badge-icon" viewBox="0 0 24 24" fill="none"><path d="M12 2l2.4 7.4H22l-6.2 4.5 2.4 7.4L12 17l-6.2 4.3 2.4-7.4L2 9.4h7.6z" fill="#FFB400"/></svg>${badge}</div>
            <button class="hs-card-wishlist" aria-label="Save to wishlist"><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M16 28c-.3 0-.6-.1-.8-.3C5.2 19.4 2 15.1 2 11c0-4.4 3.6-8 8-8 2.5 0 4.9 1.2 6.5 3.2.8-1 1.9-1.9 3.1-2.5 1.2-.6 2.5-.9 3.8-.9C27.6 2.8 31 6 31 10.2c0 4.3-3 8.7-13.2 17.5-.2.2-.5.3-.8.3z" fill="none" stroke="#fff" stroke-width="2"/></svg></button>
          </div>
          <div class="hs-card-info">
            <p class="hs-card-location">${location}</p>
            <p class="hs-card-name">${name}</p>
            <div class="hs-card-meta">
              <span class="hs-card-price-from">${priceFrom}</span>
              <span class="hs-card-price">${price}</span>
              ${rating ? `<span class="hs-card-rating"><svg viewBox="0 0 32 32"><path d="M15.1 1.6l-4 8.2L2 11.1l6.5 6.4-1.5 9 8.1-4.3 8.1 4.3-1.5-9L28 11l-9.1-1.3z"/></svg>${rating}</span>` : ''}
            </div>
          </div>
        </a>`;
        }
        static seeAllTemplate(avatars = []) {
            const imgs = avatars.slice(0, 4).map(s => `<img src="${s}" alt="">`).join('');
            return `<a class="hs-card-see-all" href="#"><div class="hs-card-see-all-avatars">${imgs}</div><span class="hs-card-see-all-label">See all</span></a>`;
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[data-hs-carousel]').forEach(el => {
            let opts = {}; try { opts = JSON.parse(el.dataset.hsCarouselOptions || '{}'); } catch (e) { }
            new HSCarousel(el, opts);
        });
    });
    window.HSCarousel = HSCarousel;
})();

/* ══════════════════════════════════════════════════════════════
   2. DATE PICKER
   ══════════════════════════════════════════════════════════════ */
(function () {
    'use strict';
    const WEEKDAYS = ['S', 'M', 'T', 'W', 'T', 'F', 'S'];
    const MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    class HSDatepicker {
        constructor(trigger, options = {}) {
            this.triggerEl = typeof trigger === 'string' ? document.querySelector(trigger) : trigger;
            this.options = Object.assign({ minDate: new Date(), maxDate: null, position: 'bottom-left', range: true, flexChips: ['Exact dates', '± 1 day', '± 2 days', '± 3 days', '± 7 days', '± 14 days'], onChange: null }, options);
            this.startDate = null; this.endDate = null; this.hoverDate = null; this.picking = false;
            const now = new Date();
            this.viewYear = now.getFullYear(); this.viewMonth = now.getMonth();
            this._buildDOM(); this._bindEvents();
        }
        _buildDOM() {
            this.overlay = document.createElement('div'); this.overlay.className = 'hs-datepicker-overlay';
            this.panel = document.createElement('div'); this.panel.className = 'hs-datepicker'; this.panel.setAttribute('role', 'dialog');
            this.panel.innerHTML = `<div class="hs-dp-tabs"><button class="hs-dp-tab hs-active" data-tab="dates">Dates</button><button class="hs-dp-tab" data-tab="flexible">Flexible</button></div><div class="hs-dp-calendars"><div class="hs-dp-cal" data-side="left"><div class="hs-dp-cal-nav"><button class="hs-dp-cal-nav-btn" data-nav="prev" aria-label="Previous month"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 18l-6-6 6-6"/></svg></button><span class="hs-dp-month-label"></span><span></span></div><div class="hs-dp-cal-grid"></div></div><div class="hs-dp-cal" data-side="right"><div class="hs-dp-cal-nav"><span></span><span class="hs-dp-month-label"></span><button class="hs-dp-cal-nav-btn" data-nav="next" aria-label="Next month"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg></button></div><div class="hs-dp-cal-grid"></div></div></div><div class="hs-dp-footer">${this.options.flexChips.map((c, i) => `<button class="hs-dp-flex-chip${i === 0 ? ' hs-active' : ''}" data-chip="${i}">${c}</button>`).join('')}<button class="hs-dp-clear">Clear dates</button></div>`;
            this.overlay.appendChild(this.panel); document.body.appendChild(this.overlay);
            this.calLeft = this.panel.querySelector('[data-side="left"]'); this.calRight = this.panel.querySelector('[data-side="right"]');
            this._renderCalendars();
        }
        _renderCalendars() {
            const ly = this.viewYear, lm = this.viewMonth;
            const rd = new Date(ly, lm + 1, 1);
            this._renderMonth(this.calLeft, ly, lm);
            this._renderMonth(this.calRight, rd.getFullYear(), rd.getMonth());
            const prevBtn = this.panel.querySelector('[data-nav="prev"]');
            if (prevBtn) { const now = new Date(); prevBtn.disabled = (ly < now.getFullYear()) || (ly === now.getFullYear() && lm <= now.getMonth()); }
        }
        _renderMonth(calEl, year, month) {
            calEl.querySelector('.hs-dp-month-label').textContent = `${MONTHS[month]} ${year}`;
            const grid = calEl.querySelector('.hs-dp-cal-grid'); grid.innerHTML = '';
            WEEKDAYS.forEach(d => { const wd = document.createElement('div'); wd.className = 'hs-dp-weekday'; wd.textContent = d; grid.appendChild(wd); });
            const firstDay = new Date(year, month, 1).getDay();
            for (let i = 0; i < firstDay; i++) { const b = document.createElement('div'); b.className = 'hs-dp-day hs-dp-day--empty'; grid.appendChild(b); }
            const today = new Date(); today.setHours(0, 0, 0, 0);
            const dim = new Date(year, month + 1, 0).getDate();
            for (let d = 1; d <= dim; d++) {
                const date = new Date(year, month, d); const cell = document.createElement('div');
                cell.className = 'hs-dp-day'; cell.dataset.ts = date.getTime(); cell.textContent = d;
                if (date.getTime() === today.getTime()) cell.classList.add('hs-dp-day--today');
                if (date < today) cell.classList.add('hs-dp-day--past', 'hs-dp-day--disabled');
                this._applyRangeClass(cell, date); grid.appendChild(cell);
            }
        }
        _applyRangeClass(cell, date) {
            if (!this.startDate) return;
            const t = date.getTime(), s = this.startDate.getTime(), e = (this.endDate || this.hoverDate || this.startDate).getTime();
            const lo = Math.min(s, e), hi = Math.max(s, e);
            if (t === s || t === e) { if (t === lo) cell.classList.add('hs-dp-day--start'); if (t === hi) cell.classList.add('hs-dp-day--end'); if (lo === hi) { cell.classList.add('hs-dp-day--start', 'hs-dp-day--end'); } }
            else if (t > lo && t < hi) cell.classList.add('hs-dp-day--in-range');
        }
        _bindEvents() {
            if (this.triggerEl) this.triggerEl.addEventListener('click', e => { e.stopPropagation(); this.toggle(); });
            this.overlay.addEventListener('click', e => { if (!this.panel.contains(e.target)) this.close(); });
            this.panel.querySelector('[data-nav="prev"]').addEventListener('click', () => { const d = new Date(this.viewYear, this.viewMonth - 1, 1); this.viewYear = d.getFullYear(); this.viewMonth = d.getMonth(); this._renderCalendars(); });
            this.panel.querySelector('[data-nav="next"]').addEventListener('click', () => { const d = new Date(this.viewYear, this.viewMonth + 1, 1); this.viewYear = d.getFullYear(); this.viewMonth = d.getMonth(); this._renderCalendars(); });
            this.panel.addEventListener('click', e => { const cell = e.target.closest('.hs-dp-day'); if (!cell || cell.classList.contains('hs-dp-day--disabled') || cell.classList.contains('hs-dp-day--empty')) return; const date = new Date(Number(cell.dataset.ts)); if (!this.options.range) { this.startDate = date; this.endDate = null; this._emit(); this.close(); return; } if (!this.picking || (this.startDate && this.endDate)) { this.startDate = date; this.endDate = null; this.hoverDate = null; this.picking = true; } else { if (date < this.startDate) { this.endDate = this.startDate; this.startDate = date; } else { this.endDate = date; } this.picking = false; this.hoverDate = null; this._emit(); } this._renderCalendars(); this._updateTrigger(); });
            this.panel.addEventListener('mouseover', e => { if (!this.picking) return; const cell = e.target.closest('.hs-dp-day'); if (!cell || cell.classList.contains('hs-dp-day--disabled')) return; this.hoverDate = new Date(Number(cell.dataset.ts)); this._renderCalendars(); });
            this.panel.querySelectorAll('.hs-dp-tab').forEach(b => b.addEventListener('click', () => { this.panel.querySelectorAll('.hs-dp-tab').forEach(x => x.classList.remove('hs-active')); b.classList.add('hs-active'); }));
            this.panel.querySelectorAll('.hs-dp-flex-chip').forEach(b => b.addEventListener('click', () => { this.panel.querySelectorAll('.hs-dp-flex-chip').forEach(x => x.classList.remove('hs-active')); b.classList.add('hs-active'); }));
            this.panel.querySelector('.hs-dp-clear').addEventListener('click', () => this.clear());
        }
        open() { document.body.style.overflow = 'hidden'; this.overlay.classList.add('hs-open'); this._positionPanel(); if (this.triggerEl) this.triggerEl.classList.add('hs-active'); }
        close() { this.overlay.classList.remove('hs-open'); document.body.style.overflow = ''; if (this.triggerEl) this.triggerEl.classList.remove('hs-active'); }
        toggle() { this.overlay.classList.contains('hs-open') ? this.close() : this.open(); }
        clear() { this.startDate = null; this.endDate = null; this.hoverDate = null; this.picking = false; this._renderCalendars(); this._updateTrigger(); this._emit(); }
        getDates() { return { startDate: this.startDate, endDate: this.endDate }; }
        setDates(start, end) { this.startDate = start || null; this.endDate = end || null; this.picking = false; if (start) { this.viewYear = start.getFullYear(); this.viewMonth = start.getMonth(); } this._renderCalendars(); this._updateTrigger(); }
        _positionPanel() { if (!this.triggerEl) return; const r = this.triggerEl.getBoundingClientRect(); this.panel.style.top = (r.bottom + window.scrollY + 8) + 'px'; if (this.options.position === 'bottom-right') { this.panel.style.right = (window.innerWidth - r.right) + 'px'; this.panel.style.left = 'auto'; } else { this.panel.style.left = (r.left + window.scrollX) + 'px'; this.panel.style.right = 'auto'; } }
        _formatDate(date) { if (!date) return ''; return `${date.getDate()} ${MONTHS[date.getMonth()].slice(0, 3)}`; }
        _updateTrigger() { if (!this.triggerEl) return; const v = this.triggerEl.querySelector('.hs-dp-trigger-value'); const c = this.triggerEl.querySelector('.hs-dp-trigger-clear'); if (v) { if (this.startDate && this.endDate) { v.textContent = `${this._formatDate(this.startDate)} – ${this._formatDate(this.endDate)}`; } else if (this.startDate) { v.textContent = `${this._formatDate(this.startDate)} – ?`; } else { v.textContent = 'Add dates'; } } if (c) c.style.display = this.startDate ? 'flex' : 'none'; }
        _emit() { if (typeof this.options.onChange === 'function') this.options.onChange({ startDate: this.startDate, endDate: this.endDate }); if (this.triggerEl) this.triggerEl.dispatchEvent(new CustomEvent('hs:datechange', { bubbles: true, detail: { startDate: this.startDate, endDate: this.endDate } })); }
    }
    document.addEventListener('DOMContentLoaded', () => { document.querySelectorAll('[data-hs-datepicker]').forEach(t => { let o = {}; try { o = JSON.parse(t.dataset.hsDatepickerOptions || '{}'); } catch (e) { } new HSDatepicker(t, o); }); });
    window.HSDatepicker = HSDatepicker;
})();

/* ══════════════════════════════════════════════════════════════
   3. PACKAGE CARDS
   ══════════════════════════════════════════════════════════════ */
(function () {
    'use strict';
    class HSPackageCards {
        constructor(container, options = {}) {
            this.root = typeof container === 'string' ? document.querySelector(container) : container;
            if (!this.root) { console.warn('HSPackageCards: container not found'); return; }
            this.options = Object.assign({ items: [], tabs: ['India', 'International'], ctaLabel: 'Get Offers ›', onCta: null, onTabChange: null }, options);
            this.activeTab = 0; this._build();
        }
        _build() {
            this.root.classList.add('hs-packages-section');
            if (!this.options.items.length) { try { const r = this.root.dataset.hsPackages; if (r) this.options.items = JSON.parse(r); } catch (e) { } }
            this._buildTabs();
            this.grid = this.root.querySelector('.hs-packages-grid');
            if (!this.grid) { this.grid = document.createElement('div'); this.grid.className = 'hs-packages-grid'; this.root.appendChild(this.grid); }
            this._renderItems(this._getFilteredItems());
        }
        _buildTabs() {
            const header = this.root.querySelector('.hs-packages-header') || this.root;
            if (!this.options.tabs.length) return;
            const tb = document.createElement('div'); tb.className = 'hs-packages-tabs';
            this.options.tabs.forEach((label, i) => { const btn = document.createElement('button'); btn.className = 'hs-packages-tab' + (i === 0 ? ' hs-active' : ''); btn.textContent = label; btn.addEventListener('click', () => { this.root.querySelectorAll('.hs-packages-tab').forEach(b => b.classList.remove('hs-active')); btn.classList.add('hs-active'); this.activeTab = i; this._renderItems(this._getFilteredItems()); if (typeof this.options.onTabChange === 'function') this.options.onTabChange(label); }); tb.appendChild(btn); });
            header.appendChild(tb);
        }
        _getFilteredItems() { const tl = this.options.tabs[this.activeTab] || ''; return this.options.items.filter(item => !item.tab || item.tab === tl || item.tab === 'all'); }
        _renderItems(items) {
            this.grid.innerHTML = '';
            items.forEach(item => this.grid.insertAdjacentHTML('beforeend', this._cardTemplate(item)));
            this.grid.querySelectorAll('.hs-pkg-cta-btn').forEach((btn, i) => { btn.addEventListener('click', e => { e.preventDefault(); e.stopPropagation(); if (typeof this.options.onCta === 'function') this.options.onCta(items[i]); }); });
        }
        _cardTemplate(item) {
            const { image = '', duration = '', discount = '', name = '', route = [], agent = '', agentIcon = '', rating = '', reviewCount = 0, priceOriginal = '', priceFinal = '', href = '#', ctaLabel = this.options.ctaLabel } = item;
            const routeHtml = Array.isArray(route) ? route.map((r, i) => `${i > 0 ? '<span class="hs-arrow">→</span>' : ''}${r}`).join('') : route;
            return `<a class="hs-pkg-card" href="${href}"><div class="hs-pkg-card-img-wrap"><img src="${image}" alt="${name}" loading="lazy">${duration ? `<div class="hs-pkg-duration-badge">${duration}</div>` : ''} ${discount ? `<div class="hs-pkg-discount-badge">${discount}</div>` : ''}</div><div class="hs-pkg-card-body"><h3 class="hs-pkg-card-name">${name}</h3>${routeHtml ? `<p class="hs-pkg-card-route">${routeHtml}</p>` : ''} ${agent ? `<div class="hs-pkg-card-agent"><div class="hs-pkg-agent-icon">${agentIcon || '🧳'}</div><span>${agent}</span></div>` : ''} ${rating ? `<div class="hs-pkg-card-rating"><svg viewBox="0 0 24 24"><path d="M12 2l3.1 6.3L22 9.3l-5 4.8 1.2 6.9L12 17.7l-6.2 3.3 1.2-6.9-5-4.8 6.9-1z" fill="#F5A623"/></svg>${rating}${reviewCount ? `<span class="hs-pkg-card-rating-count">(${reviewCount} reviews)</span>` : ''}</div>` : ''}<div class="hs-pkg-card-price-row"><div class="hs-pkg-card-price-wrap">${priceOriginal ? `<span class="hs-pkg-price-original">${priceOriginal}</span>` : ''}<span class="hs-pkg-price-final">${priceFinal}<span class="hs-pkg-price-unit">/person</span></span></div><button class="hs-pkg-cta-btn">${ctaLabel}</button></div></div></a>`;
        }
        setItems(items) { this.options.items = items; this._renderItems(this._getFilteredItems()); }
    }
    document.addEventListener('DOMContentLoaded', () => { document.querySelectorAll('[data-hs-packages]').forEach(el => { let o = {}; try { o = JSON.parse(el.dataset.hsPackagesOptions || '{}'); } catch (e) { } new HSPackageCards(el, o); }); });
    window.HSPackageCards = HSPackageCards;
})();

/* ══════════════════════════════════════════════════════════════
   4. MODAL + SHOW MORE
   ══════════════════════════════════════════════════════════════ */
(function () {
    'use strict';
    class HSModal {
        constructor(options = {}) {
            this.options = Object.assign({ title: 'About this space', content: '', contentSelector: null, footerButtons: [], closeOnBackdrop: true, showFooter: false, onOpen: null, onClose: null }, options);
            this._buildDOM(); this._bindEvents();
        }
        _buildDOM() {
            this.backdrop = document.createElement('div'); this.backdrop.className = 'hs-modal-backdrop'; this.backdrop.setAttribute('role', 'dialog'); this.backdrop.setAttribute('aria-modal', 'true');
            this.panel = document.createElement('div'); this.panel.className = 'hs-modal';
            this.panel.innerHTML = `<div class="hs-modal-header"><button class="hs-modal-close" aria-label="Close"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 6 6 18M6 6l12 12"/></svg></button><h2 class="hs-modal-title">${this.options.title}</h2></div><div class="hs-modal-body"></div>${this.options.showFooter || this.options.footerButtons.length ? '<div class="hs-modal-footer"></div>' : ''}`;
            this.bodyEl = this.panel.querySelector('.hs-modal-body'); this.titleEl = this.panel.querySelector('.hs-modal-title');
            if (this.options.footerButtons.length) { const f = this.panel.querySelector('.hs-modal-footer'); this.options.footerButtons.forEach(btn => { const b = document.createElement('button'); b.className = `hs-modal-footer-btn hs-modal-footer-btn--${btn.type || 'secondary'}`; b.textContent = btn.label; if (typeof btn.onClick === 'function') b.addEventListener('click', () => btn.onClick(this)); f.appendChild(b); }); }
            this._setContent(); this.backdrop.appendChild(this.panel); document.body.appendChild(this.backdrop);
        }
        _setContent() { if (this.options.contentSelector) { const s = document.querySelector(this.options.contentSelector); if (s) { this.bodyEl.innerHTML = s.innerHTML; return; } } this.bodyEl.innerHTML = this.options.content || ''; }
        _bindEvents() {
            this.panel.querySelector('.hs-modal-close').addEventListener('click', () => this.close());
            if (this.options.closeOnBackdrop) this.backdrop.addEventListener('click', e => { if (!this.panel.contains(e.target)) this.close(); });
            this._keyHandler = e => { if (e.key === 'Escape' && this.isOpen()) this.close(); }; document.addEventListener('keydown', this._keyHandler);
        }
        open() { document.body.style.overflow = 'hidden'; this.backdrop.classList.add('hs-open'); setTimeout(() => { const f = this.panel.querySelector('button,[tabindex]'); if (f) f.focus(); }, 50); if (typeof this.options.onOpen === 'function') this.options.onOpen(this); }
        close() { this.backdrop.classList.remove('hs-open'); document.body.style.overflow = ''; if (typeof this.options.onClose === 'function') this.options.onClose(this); }
        toggle() { this.isOpen() ? this.close() : this.open(); }
        isOpen() { return this.backdrop.classList.contains('hs-open'); }
        setContent(html) { this.options.content = html; this.bodyEl.innerHTML = html; }
        setTitle(t) { this.options.title = t; this.titleEl.textContent = t; }
        destroy() { document.removeEventListener('keydown', this._keyHandler); this.backdrop.remove(); }
    }

    class HSShowMore {
        constructor(container, options = {}) {
            this.container = typeof container === 'string' ? document.querySelector(container) : container;
            if (!this.container) { console.warn('HSShowMore: container not found'); return; }
            this.options = Object.assign({ truncateHeight: '120px', triggerLabel: 'Show more', modalTitle: 'About this space', useModal: true }, options);
            this._init();
        }
        _init() {
            const wrapper = document.createElement('div'); wrapper.className = 'hs-truncated-content hs-collapsed'; wrapper.style.setProperty('--hs-truncate-height', this.options.truncateHeight);
            while (this.container.firstChild) wrapper.appendChild(this.container.firstChild);
            this.container.appendChild(wrapper);
            const fullHTML = wrapper.innerHTML;
            const trigger = document.createElement('button'); trigger.className = 'hs-show-more-link';
            trigger.innerHTML = `${this.options.triggerLabel}<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>`;
            this.container.appendChild(trigger);
            if (this.options.useModal) {
                trigger.addEventListener('click', () => { if (!this._modal) this._modal = new HSModal({ title: this.options.modalTitle, content: fullHTML, showFooter: false }); this._modal.open(); });
            } else {
                trigger.addEventListener('click', () => { wrapper.classList.remove('hs-collapsed'); trigger.style.display = 'none'; });
            }
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[data-hs-show-more]').forEach(el => { let o = {}; try { o = JSON.parse(el.dataset.hsShowMoreOptions || '{}'); } catch (e) { } new HSShowMore(el, o); });
        document.querySelectorAll('[data-hs-modal-trigger]').forEach(btn => { const ts = btn.dataset.hsModalTrigger; const title = btn.dataset.hsModalTitle || 'Details'; const m = new HSModal({ title, contentSelector: ts }); btn.addEventListener('click', () => m.open()); });
    });

    window.HSModal = HSModal;
    window.HSShowMore = HSShowMore;
})();

/* ──────────────────────────────────────────────────────────────
   Global namespace
   ────────────────────────────────────────────────────────────── */
window.HolidaySeva = {
    version: '1.0.0',
    Carousel: window.HSCarousel,
    Datepicker: window.HSDatepicker,
    PackageCards: window.HSPackageCards,
    Modal: window.HSModal,
    ShowMore: window.HSShowMore
};