<?php
/**
 * header.php — Ultra-premium light two-tier header
 * Tier 1: #fafafc frosted global nav — glass depth, img logo mark
 * Tier 2: #fafafc section nav — bold title, pip divider, tab underlines, version badge
 * Requires: design-system.css
 */
?>

<!-- ═══════════════════════════════════════════════════════════
     TIER 1 — Global nav  (#fafafc frosted glass)
     ═══════════════════════════════════════════════════════════ -->
<header class="global-nav" role="banner">

  <!-- Brand: dark pill with H image + "Holidayseva" wordmark -->
  <a class="global-nav-brand" href="/" aria-label="Holidayseva Developer Home">
    <span class="global-nav-brand-mark" aria-hidden="true">
      <!--
        Replace the src below with your actual H logo URL.
        filter: brightness(0) invert(1) in design-system.css
        forces any dark logo to render white on the dark pill.

        Example CDN image:
        https://your-cdn.com/holidayseva-h-mark.png

        Or reference a local file:
        /assets/images/h-mark.png
      -->
      <img
        src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Airbnb_Logo_B%C3%A9lo.svg/512px-Airbnb_Logo_B%C3%A9lo.svg.png"
        alt=""
        width="18"
        height="18"
      >
    </span>
    Holidayseva
  </a>

  <!-- Hairline separator between brand and nav links -->
  <span class="global-nav-sep" aria-hidden="true"></span>

  <!-- Nav links — centred via margin:auto -->
  <ul class="global-nav-links" role="list" aria-label="Main navigation">
    <li><a href="#">Get Started</a></li>
    <li><a href="#">Foundations</a></li>
    <li><a href="#" class="active">Components</a></li>
    <li><a href="#">Patterns</a></li>
    <li><a href="#">Resources</a></li>
  </ul>

  <!-- Right: search + account icon buttons -->
  <div class="global-nav-actions">

    <button class="global-nav-icon" aria-label="Search">
      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" aria-hidden="true">
        <circle cx="6.2" cy="6.2" r="4.5" stroke="currentColor" stroke-width="1.3"/>
        <line x1="9.7" y1="9.7" x2="13.4" y2="13.4"
              stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
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

<!-- ═══════════════════════════════════════════════════════════
     TIER 2 — Section nav  (#fafafc, bold title, tab underlines)
     ═══════════════════════════════════════════════════════════ -->
<nav class="section-nav" aria-label="Section navigation">

  <!-- Section title -->
  <span class="section-nav-title">Design Guidelines</span>

  <!-- Vertical pip divider -->
  <span class="section-nav-divider" aria-hidden="true"></span>

  <!-- Tab links — active tab gets a bottom border underline -->
  <ul class="section-nav-tabs" role="list">
    <li><a href="#">Overview</a></li>
    <li><a href="#">What's New</a></li>
    <li><a href="#">Get Started</a></li>
    <li><a href="#" class="active">Guidelines</a></li>
    <li><a href="#">Resources</a></li>
  </ul>

  <!-- Right: version badge -->
  <div class="section-nav-meta">
    <span class="section-nav-badge">v1.0</span>
  </div>

</nav>