<?php
/**
 * header.php — Apple developer.apple.com style two-tier header
 * Tier 1: Dark frosted global nav  rgb(22,22,23)
 * Tier 2: White frosted section nav with bold title + tab links
 * Requires: design-system.css
 */
?>

<!-- ═══════════════════════════════════════════════════════════
     TIER 1 — Global nav (dark)
     ═══════════════════════════════════════════════════════════ -->
<header class="global-nav" role="banner">

  <!-- Brand: Holidayseva "H" mark + wordmark -->
  <a class="global-nav-brand" href="/" aria-label="Holidayseva Developer Home">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
      <!-- H letterform with brand red -->
      <rect x="2"  y="2" width="4.5" height="16" rx="1.2" fill="#ff385c"/>
      <rect x="13.5" y="2" width="4.5" height="16" rx="1.2" fill="#ff385c"/>
      <rect x="2"  y="8.75" width="16" height="2.5" rx="1.25" fill="#ff385c"/>
    </svg>
    Developer
  </a>

  <!-- Nav links (centred via margin:auto) -->
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
        <circle cx="6.2" cy="6.2" r="4.5" stroke="currentColor" stroke-width="1.35"/>
        <line x1="9.7" y1="9.7" x2="13.5" y2="13.5" stroke="currentColor" stroke-width="1.35" stroke-linecap="round"/>
      </svg>
    </button>
    <button class="global-nav-icon" aria-label="Account">
      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" aria-hidden="true">
        <circle cx="7.5" cy="5"   r="2.8" stroke="currentColor" stroke-width="1.35"/>
        <path   d="M1.5 14c0-3.31 2.69-6 6-6s6 2.69 6 6" stroke="currentColor" stroke-width="1.35" stroke-linecap="round"/>
      </svg>
    </button>
  </div>

</header>

<!-- ═══════════════════════════════════════════════════════════
     TIER 2 — Section nav (white)
     ═══════════════════════════════════════════════════════════ -->
<nav class="section-nav" aria-label="Section navigation">

  <span class="section-nav-title">Design Guidelines</span>

  <ul class="section-nav-tabs" role="list">
    <li><a href="#">Overview</a></li>
    <li><a href="#">What's New</a></li>
    <li><a href="#">Get Started</a></li>
    <li><a href="#" class="active">Guidelines</a></li>
    <li><a href="#">Resources</a></li>
  </ul>

</nav>