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
     TIER 2 — Section nav (always visible, sticks to top)
     ══════════════════════════════════════════════════════ -->
<nav class="section-nav" id="sectionNav" aria-label="Section navigation">

  <span class="section-nav-title">Design Guidelines</span>
  <span class="section-nav-divider" aria-hidden="true"></span>

  <ul class="section-nav-tabs" role="list">
    <li><a href="#">Overview</a></li>
    <li><a href="#">What's New</a></li>
    <li><a href="#">Get Started</a></li>
    <li><a href="#" class="active">Guidelines</a></li>
    <li><a href="#">Resources</a></li>
  </ul>

  <div class="section-nav-meta">
    <span class="section-nav-badge">v1.0</span>
  </div>

</nav>

<script>
(function () {
  const globalNav  = document.getElementById('globalNav');
  const sectionNav = document.getElementById('sectionNav');

  const TIER1_H = globalNav.offsetHeight;   // 52px from design-system
  const TIER2_H = sectionNav.offsetHeight;  // 44px from design-system

  let lastY   = 0;
  let hidden  = false;

  /* Snap to correct position on load */
  sectionNav.style.top = TIER1_H + 'px';

  function onScroll() {
    const y       = window.scrollY;
    const goingDown = y > lastY;

    if (goingDown && y > TIER1_H && !hidden) {
      /* Scroll down past Tier 1 height — slide Tier 1 away */
      globalNav.style.transform  = 'translateY(-100%)';
      sectionNav.style.top       = '0px';
      hidden = true;

    } else if (!goingDown && hidden) {
      /* Scroll up — bring Tier 1 back */
      globalNav.style.transform  = 'translateY(0)';
      sectionNav.style.top       = TIER1_H + 'px';
      hidden = false;
    }

    lastY = y;
  }

  /* Smooth transitions via design-system transition tokens */
  globalNav.style.transition  = 'transform 0.28s ease';
  sectionNav.style.transition = 'top 0.28s ease';

  window.addEventListener('scroll', onScroll, { passive: true });
})();
</script>