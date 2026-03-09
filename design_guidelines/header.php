<?php
/**
 * header.php — Ultra-premium light two-tier header
 * Tier 1: White frosted global nav — glass, depth, precision
 * Tier 2: White section nav — bold title, tab links, version badge
 * Requires: design-system.css
 */
?>

<!-- ═══════════════════════════════════════════════════════════
     TIER 1 — Global nav (light frosted glass)
     ═══════════════════════════════════════════════════════════ -->
<header class="global-nav" role="banner">

  <!-- Brand: "H" mark on dark pill + wordmark -->
  <a class="global-nav-brand" href="/" aria-label="Holidayseva Developer Home">
    <span class="global-nav-brand-mark" aria-hidden="true">
      <!-- H letterform in white on dark background -->
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
        <rect x="1"   y="1"    width="3.5" height="14" rx="1" fill="white"/>
        <rect x="11"  y="1"    width="3.5" height="14" rx="1" fill="white"/>
        <rect x="1"   y="6.25" width="14"  height="2.5" rx="1" fill="white"/>
      </svg>
    </span>
    Holidayseva
  </a>

  <span class="global-nav-sep" aria-hidden="true"></span>

  <!-- Nav links — centred via margin:auto on the list -->
  <ul class="global-nav-links" role="list" aria-label="Main navigation">
    <li><a href="#">Get Started</a></li>
    <li><a href="#">Foundations</a></li>
    <li><a href="#" class="active">Components</a></li>
    <li><a href="#">Patterns</a></li>
    <li><a href="#">Resources</a></li>
  </ul>

  <!-- Right: search + account -->
  <div class="global-nav-actions">
    <button class="global-nav-icon" aria-label="Search">
      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" aria-hidden="true">
        <circle cx="6.2" cy="6.2" r="4.5" stroke="currentColor" stroke-width="1.3"/>
        <line x1="9.7" y1="9.7" x2="13.4" y2="13.4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
      </svg>
    </button>
    <button class="global-nav-icon" aria-label="Account">
      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" aria-hidden="true">
        <circle cx="7.5" cy="5"  r="2.8" stroke="currentColor" stroke-width="1.3"/>
        <path   d="M1.5 14c0-3.31 2.69-6 6-6s6 2.69 6 6" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
      </svg>
    </button>
  </div>

</header>

<!-- ═══════════════════════════════════════════════════════════
     TIER 2 — Section nav (white, bold title, tab underlines)
     ═══════════════════════════════════════════════════════════ -->
<nav class="section-nav" aria-label="Section navigation">

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