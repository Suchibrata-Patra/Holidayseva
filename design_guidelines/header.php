<?php
/**
 * header.php — Two-tier Apple HIG header
 * Uses only classes from design-system.css — no inline styles
 *
 * Scroll behaviour:
 *   - Tier 1 (.global-nav)  slides UP and hides on scroll-down
 *   - Tier 2 (.section-nav) stays pinned at top=0 once Tier 1 is gone
 *
 * Include: <?php include __DIR__ . '/header.php'; ?>
 */

$current = basename($_SERVER['PHP_SELF'] ?? '');

$componentPages  = ['button.php','input.php','toggle.php','modal.php',
                    'avatar.php','badge.php','card.php','dropdown.php',
                    'tabs.php','tooltip.php'];
$foundationPages = ['colour.php','typography.php','spacing.php','icons.php','layout.php'];
$patternPages    = ['charting-data.php','forms.php','data-display.php'];
?>

<!-- ══════════════════════════════════════════════════════
     TIER 1 — Global nav (hides on scroll-down)
     ══════════════════════════════════════════════════════ -->
<header class="global-nav" id="globalNav" role="banner">

  <!-- Hamburger — only visible on mobile (≤680px via CSS) -->
  <button class="nav-hamburger" id="navHamburger" aria-label="Open navigation menu" aria-expanded="false" aria-controls="drawerSidebar">
    <svg class="icon-menu" width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true">
      <path d="M2 4.5h14M2 9h14M2 13.5h14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
    </svg>
    <svg class="icon-close" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
      <path d="M2 2l12 12M14 2L2 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
    </svg>
  </button>

  <a class="global-nav-brand" href="/" aria-label="Holidayseva home">
    <strong>Holidayseva</strong>
  </a>

  <span class="global-nav-sep" aria-hidden="true"></span>

  <ul class="global-nav-links" role="list" aria-label="Main navigation">
    <li><a href="index.php"
        <?= $current === 'index.php' ? 'class="active"' : '' ?>>Get Started</a></li>
    <li><a href="foundations.php"
        <?= in_array($current, $foundationPages) ? 'class="active"' : '' ?>>UI/UX</a></li>
    <li><a href="components.php"
        <?= in_array($current, $componentPages) ? 'class="active"' : '' ?>>Components</a></li>
    <li><a href="patterns.php"
        <?= in_array($current, $patternPages) ? 'class="active"' : '' ?>>API</a></li>
    <li><a href="resources.php"
        <?= $current === 'resources.php' ? 'class="active"' : '' ?>>DBMS</a></li>
  </ul>

  <div class="global-nav-actions">
    <button class="global-nav-icon" aria-label="Search">
      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" aria-hidden="true">
        <circle cx="6.2" cy="6.2" r="4.5" stroke="currentColor" stroke-width="1.3"/>
        <path d="M10 10l3 3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
      </svg>
    </button>
    <button class="global-nav-icon" aria-label="Account">
      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" aria-hidden="true">
        <circle cx="7.5" cy="5" r="2.8" stroke="currentColor" stroke-width="1.3"/>
        <path d="M1.5 14c0-3.31 2.69-6 6-6s6 2.69 6 6"
              stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
      </svg>
    </button>
  </div>

</header>

<!-- ══════════════════════════════════════════════════════
     MOBILE DRAWER BACKDROP
     ══════════════════════════════════════════════════════ -->
<div class="drawer-backdrop" id="drawerBackdrop" aria-hidden="true"></div>

<!-- ══════════════════════════════════════════════════════
     TIER 2 — Section nav (always visible, sticks to top)
     ══════════════════════════════════════════════════════ -->
<nav class="section-nav" id="sectionNav" aria-label="Section navigation">

  <span class="section-nav-title">Developer Guidelines <br><span style="font-si;color: #aeaeae;font-weight:200;">Copyright © 2024 Suchibrata</span></span> 
  <span class="section-nav-divider" aria-hidden="true"></span>

  <!-- <ul class="section-nav-tabs" role="list">
    <li><a href="#">Overview</a></li>
    <li><a href="#">Resources</a></li>
  </ul> -->

  <div class="section-nav-meta">
    <span class="section-nav-badge">βeta Release - 1.1.2</span>
  </div>

</nav>

<script>
(function () {
  const root        = document.documentElement;
  const globalNav   = document.getElementById('globalNav');
  const sectionNav  = document.getElementById('sectionNav');
  const hamburger   = document.getElementById('navHamburger');
  const backdrop    = document.getElementById('drawerBackdrop');

  const TIER1_H = 52;   // --topbar-h
  const TIER2_H = 44;   // --subbar-h
  const FULL_H  = TIER1_H + TIER2_H;

  function setHeaderHeight(px) {
    root.style.setProperty('--header-h', px + 'px');
  }

  setHeaderHeight(FULL_H);
  sectionNav.style.top = TIER1_H + 'px';

  let lastY  = 0;
  let hidden = false;

  function onScroll() {
    const y         = window.scrollY;
    const goingDown = y > lastY;

    if (goingDown && y > TIER1_H && !hidden) {
      globalNav.style.transform = 'translateY(-100%)';
      sectionNav.style.top      = '0px';
      setHeaderHeight(TIER2_H);
      hidden = true;
    } else if (!goingDown && hidden && y <= 0) {
      globalNav.style.transform = 'translateY(0)';
      sectionNav.style.top      = TIER1_H + 'px';
      setHeaderHeight(FULL_H);
      hidden = false;
    }
    lastY = y;
  }

  window.addEventListener('scroll', onScroll, { passive: true });

  /* ── Mobile drawer ─────────────────────────────────── */
  let drawerOpen = false;

  function getDrawer() {
    return document.getElementById('drawerSidebar');
  }

  function openDrawer() {
    const drawer = getDrawer();
    if (!drawer) return;
    drawerOpen = true;
    drawer.classList.add('is-open');
    backdrop.classList.add('is-visible');
    hamburger.classList.add('is-open');
    hamburger.setAttribute('aria-expanded', 'true');
    hamburger.setAttribute('aria-label', 'Close navigation menu');
    document.body.style.overflow = 'hidden';
    // Trigger backdrop fade
    requestAnimationFrame(() => backdrop.classList.add('is-active'));
    // Trap focus
    const firstLink = drawer.querySelector('a, button, input');
    if (firstLink) firstLink.focus();
  }

  function closeDrawer() {
    const drawer = getDrawer();
    if (!drawer) return;
    drawerOpen = false;
    drawer.classList.remove('is-open');
    backdrop.classList.remove('is-active');
    hamburger.classList.remove('is-open');
    hamburger.setAttribute('aria-expanded', 'false');
    hamburger.setAttribute('aria-label', 'Open navigation menu');
    document.body.style.overflow = '';
    // Hide backdrop after transition
    setTimeout(() => backdrop.classList.remove('is-visible'), 300);
    hamburger.focus();
  }

  function toggleDrawer() {
    drawerOpen ? closeDrawer() : openDrawer();
  }

  if (hamburger) hamburger.addEventListener('click', toggleDrawer);

  // Close on backdrop tap
  if (backdrop) backdrop.addEventListener('click', closeDrawer);

  // Close on Escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && drawerOpen) closeDrawer();
  });

  // Close drawer on nav link click (smooth UX)
  document.addEventListener('click', (e) => {
    const link = e.target.closest('.drawer-sidebar .sb-link');
    if (link) setTimeout(closeDrawer, 120);
  });

  // Swipe-left to close drawer
  let touchStartX = 0;
  document.addEventListener('touchstart', (e) => {
    touchStartX = e.touches[0].clientX;
  }, { passive: true });
  document.addEventListener('touchend', (e) => {
    if (!drawerOpen) return;
    const dx = e.changedTouches[0].clientX - touchStartX;
    if (dx < -60) closeDrawer();
  }, { passive: true });

})();
</script>