<?php
/**
 * header.php — Two-tier Apple HIG header
 * Uses only classes from design-system.css — no inline styles
 *
 * Tier 1 (.global-nav)   — frosted glass bar: brand · nav links · icons
 * Tier 2 (.section-nav)  — section title · pip · tabs · version badge
 *
 * Include: <?php include __DIR__ . '/header.php'; ?>
 */

$current = basename($_SERVER['PHP_SELF'] ?? '');

$componentPages = ['button.php','input.php','toggle.php','modal.php',
                   'avatar.php','badge.php','card.php','dropdown.php',
                   'tabs.php','tooltip.php'];
$foundationPages = ['colour.php','typography.php','spacing.php','icons.php','layout.php'];
$patternPages    = ['charting-data.php','forms.php','data-display.php'];
?>

<!-- ══════════════════════════════════════════════════════
     TIER 1 — Global nav
     ══════════════════════════════════════════════════════ -->
<header class="global-nav" role="banner">

  <!-- Brand -->
  <a class="global-nav-brand" href="/" aria-label="Holidayseva home">
    <span class="global-nav-brand-mark" aria-hidden="true">
      <img
        src=""
        alt="" width="18" height="18"
      >
    </span>
    Holidayseva
  </a>

  <!-- Hairline pip between brand and links -->
  <span class="global-nav-sep" aria-hidden="true"></span>

  <!-- Centred nav links -->
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

  <!-- Right: search + account -->
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
     TIER 2 — Section nav
     ══════════════════════════════════════════════════════ -->
<nav class="section-nav" aria-label="Section navigation">

  <!-- Bold section title -->
  <span class="section-nav-title">Design Guidelines</span>

  <!-- Pip divider -->
  <span class="section-nav-divider" aria-hidden="true"></span>

  <!-- Tab links -->
  <ul class="section-nav-tabs" role="list">
    <li><a href="#">Overview</a></li>
    <li><a href="#">What's New</a></li>
    <li><a href="#">Get Started</a></li>
    <li><a href="#" class="active">Guidelines</a></li>
    <li><a href="#">Resources</a></li>
  </ul>

  <!-- Version badge -->
  <div class="section-nav-meta">
    <span class="section-nav-badge">v1.0</span>
  </div>

</nav>