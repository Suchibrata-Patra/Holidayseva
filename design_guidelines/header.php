<?php
/**
 * header.php
 * Apple developer-style two-tier header
 * Tier 1: Dark global nav — logo + main links + search/profile icons
 * Tier 2: White section nav — "Design Guidelines" title + tab links
 *
 * Usage:  <?php include __DIR__ . '/header.php'; ?>
 * Requires: design-system.css loaded in <head>
 */
?>

<!-- ── Tier 1: Global nav ─────────────────────────────────── -->
<header class="global-nav" role="banner">

  <!-- Brand -->
  <a class="global-nav-brand" href="/">
    <!-- Apple-style glyph using Holidayseva "H" mark -->
    <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M2 2h5v18H2zM11 2h5v18h-5zM2 10.5h14" stroke="#FF385C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    Developer
  </a>

  <!-- Main nav links (centred) -->
  <ul class="global-nav-links" role="list">
    <li><a href="#">Get Started</a></li>
    <li><a href="#">Foundations</a></li>
    <li><a href="#">Components</a></li>
    <li><a href="#">Patterns</a></li>
    <li><a href="#">Resources</a></li>
  </ul>

  <!-- Icons: search + profile -->
  <div class="global-nav-actions">
    <!-- Search -->
    <a class="global-nav-icon" href="#" aria-label="Search">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
        <circle cx="6.5" cy="6.5" r="4.5" stroke="currentColor" stroke-width="1.4"/>
        <path d="M10 10l4 4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
      </svg>
    </a>
    <!-- Profile -->
    <a class="global-nav-icon" href="#" aria-label="Account">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
        <circle cx="8" cy="5.5" r="3" stroke="currentColor" stroke-width="1.4"/>
        <path d="M1.5 14.5c0-3.59 2.91-6.5 6.5-6.5s6.5 2.91 6.5 6.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
      </svg>
    </a>
  </div>

</header>

<!-- ── Tier 2: Section nav ────────────────────────────────── -->
<nav class="section-nav" aria-label="Section navigation">

  <span class="section-nav-title">Design Guidelines</span>

  <ul class="section-nav-tabs" role="list">
    <li><a href="#">Overview</a></li>
    <li><a href="#" class="active">Guidelines</a></li>
    <li><a href="#">Components</a></li>
    <li><a href="#">Resources</a></li>
  </ul>

</nav>