/**
 * doc-shell.js
 * Handles: sidebar mobile toggle, copy-to-clipboard, scroll-spy active links.
 * Works on every page in the design_guidelines section.
 */
(function () {
    'use strict';

    /* ── Mobile sidebar toggle ─────────────────────────────── */
    const sidebar = document.getElementById('docSidebar');
    const toggleBtn = document.getElementById('sidebarToggle');
    const closeBtn = document.getElementById('sidebarClose');
    const overlay = document.createElement('div');

    if (sidebar && toggleBtn) {
        overlay.className = 'doc-sidebar-overlay';
        overlay.style.cssText = [
            'position:fixed', 'inset:0', 'background:rgba(0,0,0,0.4)',
            'z-index:499', 'opacity:0', 'pointer-events:none',
            'transition:opacity 250ms'
        ].join(';');
        document.body.appendChild(overlay);

        function openSidebar() {
            sidebar.classList.add('is-open');
            overlay.style.opacity = '1';
            overlay.style.pointerEvents = 'all';
            document.body.style.overflow = 'hidden';
        }

        function closeSidebar() {
            sidebar.classList.remove('is-open');
            overlay.style.opacity = '0';
            overlay.style.pointerEvents = 'none';
            document.body.style.overflow = '';
        }

        toggleBtn.addEventListener('click', openSidebar);
        if (closeBtn) closeBtn.addEventListener('click', closeSidebar);
        overlay.addEventListener('click', closeSidebar);
        document.addEventListener('keydown', e => { if (e.key === 'Escape') closeSidebar(); });
    }

    /* ── Copy-to-clipboard ─────────────────────────────────── */
    window.doCopy = function (btn) {
        const pre = btn.closest('.doc-code')?.querySelector('pre');
        if (!pre) return;
        const text = pre.innerText || pre.textContent;
        navigator.clipboard.writeText(text).then(() => {
            btn.textContent = 'Copied!';
            btn.classList.add('copied');
            setTimeout(() => { btn.textContent = 'Copy'; btn.classList.remove('copied'); }, 2000);
        }).catch(() => {
            const ta = document.createElement('textarea');
            ta.value = text;
            document.body.appendChild(ta);
            ta.select();
            document.execCommand('copy');
            document.body.removeChild(ta);
            btn.textContent = 'Copied!';
            setTimeout(() => { btn.textContent = 'Copy'; }, 2000);
        });
    };

    /* ── Scroll-spy: highlight active sidebar link ─────────── */
    const sections = document.querySelectorAll('.doc-section[id]');
    const navLinks = document.querySelectorAll('.doc-nav-link');

    if (sections.length > 0) {
        const obs = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    navLinks.forEach(l => l.classList.remove('is-active'));
                    const link = document.querySelector(`.doc-nav-link[href*="#${e.target.id}"], .doc-nav-link[href$="${e.target.id}.php"]`);
                    if (link) link.classList.add('is-active');
                }
            });
        }, { rootMargin: '-20% 0px -70% 0px' });
        sections.forEach(s => obs.observe(s));
    }

    /* ── Calendar flex pills toggle (shared helper) ─────────── */
    document.querySelectorAll('.calendar-flex-pill').forEach(p => {
        p.addEventListener('click', () => {
            p.closest('.calendar-flex-pills')
                .querySelectorAll('.calendar-flex-pill')
                .forEach(x => x.classList.remove('is-active'));
            p.classList.add('is-active');
        });
    });

})();