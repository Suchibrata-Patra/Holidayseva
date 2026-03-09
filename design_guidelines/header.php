<?php
/**
 * header.php
 * Two-tier header — exact Apple developer.apple.com aesthetic
 *
 * Tier 1: Pure white frosted global nav
 *         Brand mark left · Nav links centred · Search + Account right
 *
 * Tier 2: White section bar
 *         "Design Guidelines" bold title far left · Tab links right · Version badge
 *
 * Requires: design-system.css
 */

// Detect active section from current page
$current = basename($_SERVER['PHP_SELF'] ?? '');
?>

<!-- ══════════════════════════════════════════════════════════
     TIER 1 — Global nav
     Pure white · hairline border · frosted glass on scroll
     ══════════════════════════════════════════════════════════ -->
<header class="gn" role="banner">

  <!-- Brand -->
  <a class="gn-brand" href="/" aria-label="Holidayseva home">
    <span class="gn-brand-mark" aria-hidden="true">
      <img
        src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Airbnb_Logo_B%C3%A9lo.svg/512px-Airbnb_Logo_B%C3%A9lo.svg.png"
        alt="" width="16" height="16"
      >
    </span>
    <span class="gn-brand-name">Holidayseva</span>
  </a>

  <!-- Centre nav links -->
  <ul class="gn-links" role="list" aria-label="Main navigation">
    <li><a href="#" <?= $current === 'index.php' ? 'class="active"' : '' ?>>Get Started</a></li>
    <li><a href="#" <?= $current === 'foundations.php' ? 'class="active"' : '' ?>>Foundations</a></li>
    <li><a href="#" <?= in_array($current, ['button.php','input.php','toggle.php','modal.php','avatar.php']) ? 'class="active"' : '' ?>>Components</a></li>
    <li><a href="#" <?= $current === 'patterns.php' ? 'class="active"' : '' ?>>Patterns</a></li>
    <li><a href="#" <?= $current === 'resources.php' ? 'class="active"' : '' ?>>Resources</a></li>
  </ul>

  <!-- Right actions -->
  <div class="gn-actions">
    <button class="gn-icon-btn" aria-label="Search">
      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" aria-hidden="true">
        <circle cx="6.2" cy="6.2" r="4.5" stroke="currentColor" stroke-width="1.3"/>
        <path d="M10 10l3 3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
      </svg>
    </button>
    <button class="gn-icon-btn" aria-label="Account">
      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" aria-hidden="true">
        <circle cx="7.5" cy="5" r="2.8" stroke="currentColor" stroke-width="1.3"/>
        <path d="M1.5 14c0-3.31 2.69-6 6-6s6 2.69 6 6" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
      </svg>
    </button>
  </div>

</header>

<!-- ══════════════════════════════════════════════════════════
     TIER 2 — Section nav
     Bold title left · Tab links right · hairline separator
     ══════════════════════════════════════════════════════════ -->
<nav class="sn" aria-label="Section navigation">

  <span class="sn-title">Design Guidelines</span>

  <ul class="sn-tabs" role="list">
    <li><a href="#">Overview</a></li>
    <li><a href="#">What's New</a></li>
    <li><a href="#">Get Started</a></li>
    <li><a href="#" class="active">Guidelines</a></li>
    <li><a href="#">Resources</a></li>
  </ul>

  <span class="sn-badge">v1.0</span>

</nav>


<style>
/* ─────────────────────────────────────────────────────────────
   SHARED
───────────────────────────────────────────────────────────── */
.gn, .sn {
  position: fixed;
  left: 0;
  right: 0;
  z-index: 9000;
  display: flex;
  align-items: center;
  padding: 0 32px;
  background: rgba(255, 255, 255, 0.92);
  backdrop-filter: saturate(180%) blur(20px);
  -webkit-backdrop-filter: saturate(180%) blur(20px);
}

/* ─────────────────────────────────────────────────────────────
   TIER 1 — Global nav
───────────────────────────────────────────────────────────── */
.gn {
  top: 0;
  height: 48px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.08);
}

/* Brand */
.gn-brand {
  display: flex;
  align-items: center;
  gap: 7px;
  text-decoration: none;
  flex-shrink: 0;
}

.gn-brand-mark {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 26px;
  height: 26px;
  background: #1d1d1f;
  border-radius: 6px;
  flex-shrink: 0;
  overflow: hidden;
}

.gn-brand-mark img {
  width: 14px;
  height: 14px;
  object-fit: contain;
  filter: brightness(0) invert(1);
  display: block;
}

.gn-brand-name {
  font-family: var(--font-sans, -apple-system, 'Helvetica Neue', sans-serif);
  font-size: 14px;
  font-weight: 600;
  color: #1d1d1f;
  letter-spacing: -0.016em;
  -webkit-font-smoothing: antialiased;
}

/* Centre nav links */
.gn-links {
  display: flex;
  align-items: center;
  list-style: none;
  margin: 0 auto;
  gap: 0;
  height: 48px;
}

.gn-links li {
  display: flex;
  align-items: center;
  height: 100%;
}

.gn-links a {
  display: flex;
  align-items: center;
  height: 100%;
  padding: 0 13px;
  font-family: var(--font-sans, -apple-system, 'Helvetica Neue', sans-serif);
  font-size: 12.5px;
  font-weight: 400;
  color: #424245;
  text-decoration: none;
  letter-spacing: -0.003em;
  transition: color 0.1s;
  -webkit-font-smoothing: antialiased;
  white-space: nowrap;
}

.gn-links a:hover { color: #1d1d1f; }
.gn-links a.active { color: #1d1d1f; font-weight: 500; }

/* Right icon buttons */
.gn-actions {
  display: flex;
  align-items: center;
  gap: 2px;
  flex-shrink: 0;
}

.gn-icon-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 32px;
  height: 32px;
  border: none;
  background: none;
  cursor: pointer;
  color: #424245;
  border-radius: 6px;
  transition: background 0.1s, color 0.1s;
}

.gn-icon-btn:hover {
  background: #f2f2f7;
  color: #1d1d1f;
}

/* ─────────────────────────────────────────────────────────────
   TIER 2 — Section nav
───────────────────────────────────────────────────────────── */
.sn {
  top: 48px;
  height: 44px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.07);
  gap: 0;
}

/* Bold section title — far left */
.sn-title {
  font-family: var(--font-display, -apple-system, 'Helvetica Neue', sans-serif);
  font-size: 17px;
  font-weight: 700;
  color: #1d1d1f;
  letter-spacing: -0.022em;
  line-height: 1;
  flex-shrink: 0;
  -webkit-font-smoothing: antialiased;
}

/* Tab links — pushed to the right */
.sn-tabs {
  display: flex;
  align-items: stretch;
  list-style: none;
  height: 44px;
  margin: 0 0 0 auto;
  gap: 0;
}

.sn-tabs li {
  display: flex;
  align-items: stretch;
}

.sn-tabs a {
  display: flex;
  align-items: center;
  padding: 0 14px;
  font-family: var(--font-sans, -apple-system, 'Helvetica Neue', sans-serif);
  font-size: 13px;
  font-weight: 400;
  color: #424245;
  text-decoration: none;
  letter-spacing: -0.003em;
  border-bottom: 2px solid transparent;
  margin-bottom: -1px;
  transition: color 0.1s, border-color 0.1s;
  -webkit-font-smoothing: antialiased;
  white-space: nowrap;
}

.sn-tabs a:hover { color: #1d1d1f; }

.sn-tabs a.active {
  color: #1d1d1f;
  font-weight: 500;
  border-bottom-color: #1d1d1f;
}

/* Version badge */
.sn-badge {
  font-family: var(--font-sans, -apple-system, 'Helvetica Neue', sans-serif);
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.05em;
  text-transform: uppercase;
  color: #aeaeb2;
  background: #f5f5f7;
  border: 1px solid #e8e8ed;
  border-radius: 20px;
  padding: 2px 9px;
  margin-left: 16px;
  flex-shrink: 0;
  -webkit-font-smoothing: antialiased;
}
</style>