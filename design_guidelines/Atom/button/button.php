<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Button — HolidaySeva Design Guidelines</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --rose:        #FF385C;
    --rose-hover:  #E8314F;
    --rose-press:  #CC2B47;
    --teal:        #00A699;
    --ink:         #1d1d1f;
    --ink-2:       #424245;
    --ink-3:       #6e6e73;
    --ink-4:       #86868b;
    --separator:   #d2d2d7;
    --fill-1:      #f5f5f7;
    --fill-2:      #fafafa;
    --white:       #ffffff;
    --danger:      #C0392B;
    --mono:        "SF Mono", "Fira Code", "Cascadia Code", monospace;
    --radius-sm:   8px;
    --radius-md:   14px;
    --radius-lg:   20px;
    --shadow-sm:   0 1px 3px rgba(0,0,0,.06), 0 1px 2px rgba(0,0,0,.04);
    --shadow-md:   0 4px 16px rgba(0,0,0,.07), 0 1px 4px rgba(0,0,0,.04);
    --shadow-lg:   0 12px 40px rgba(0,0,0,.10), 0 2px 8px rgba(0,0,0,.05);
  }

  html { font-size: 16px; scroll-behavior: smooth; }

  body {
    font-family: "Inter", -apple-system, BlinkMacSystemFont, "Helvetica Neue", sans-serif;
    background: var(--white);
    color: var(--ink);
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    line-height: 1.6;
  }

  /* ─── Layout ─────────────────────────────────────── */
  .layout {
    display: grid;
    grid-template-columns: 240px 1fr 200px;
    min-height: 100vh;
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 24px;
    gap: 0;
  }

  /* ─── Left Nav ───────────────────────────────────── */
  .nav-left {
    position: sticky;
    top: 0;
    height: 100vh;
    overflow-y: auto;
    padding: 64px 0 40px;
    border-right: 1px solid var(--separator);
  }
  .nav-left::-webkit-scrollbar { display: none; }

  .nav-logo {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 40px;
    padding-right: 24px;
  }
  .nav-logo-mark {
    width: 28px; height: 28px;
    background: var(--rose);
    border-radius: 8px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
  }
  .nav-logo-mark svg { width: 14px; height: 14px; }
  .nav-logo-text { font-size: 13px; font-weight: 600; color: var(--ink); letter-spacing: -.01em; }
  .nav-logo-sub  { font-size: 11px; color: var(--ink-4); margin-top: 1px; }

  .nav-section-label {
    font-size: 10px;
    font-weight: 600;
    letter-spacing: .08em;
    text-transform: uppercase;
    color: var(--ink-4);
    padding: 20px 24px 8px 0;
  }
  .nav-link {
    display: block;
    font-size: 13px;
    font-weight: 400;
    color: var(--ink-3);
    text-decoration: none;
    padding: 6px 0;
    padding-right: 24px;
    border-radius: 0;
    transition: color .15s;
  }
  .nav-link:hover  { color: var(--ink); }
  .nav-link.active { color: var(--rose); font-weight: 500; }

  /* ─── Main ───────────────────────────────────────── */
  .main {
    padding: 64px 48px 120px;
    min-width: 0;
  }

  /* ─── Right TOC ──────────────────────────────────── */
  .toc {
    position: sticky;
    top: 0;
    height: 100vh;
    overflow-y: auto;
    padding: 64px 0 40px 32px;
  }
  .toc::-webkit-scrollbar { display: none; }
  .toc-label {
    font-size: 10px;
    font-weight: 600;
    letter-spacing: .08em;
    text-transform: uppercase;
    color: var(--ink-4);
    margin-bottom: 12px;
  }
  .toc-link {
    display: block;
    font-size: 12px;
    color: var(--ink-4);
    text-decoration: none;
    padding: 5px 0;
    transition: color .15s;
    line-height: 1.4;
  }
  .toc-link:hover  { color: var(--ink); }
  .toc-link.active { color: var(--rose); }

  /* ─── Typography ─────────────────────────────────── */
  .eyebrow {
    font-size: 12px;
    font-weight: 500;
    letter-spacing: .06em;
    text-transform: uppercase;
    color: var(--rose);
    margin-bottom: 12px;
  }
  h1 {
    font-size: 52px;
    font-weight: 300;
    letter-spacing: -.03em;
    line-height: 1.08;
    color: var(--ink);
    margin-bottom: 20px;
  }
  .page-lead {
    font-size: 19px;
    font-weight: 300;
    color: var(--ink-3);
    line-height: 1.55;
    max-width: 580px;
    letter-spacing: -.01em;
  }
  .rule {
    border: none;
    border-top: 1px solid var(--separator);
    margin: 56px 0;
  }
  h2 {
    font-size: 28px;
    font-weight: 600;
    letter-spacing: -.025em;
    color: var(--ink);
    margin-bottom: 10px;
  }
  .section-sub {
    font-size: 16px;
    color: var(--ink-3);
    font-weight: 300;
    margin-bottom: 32px;
    letter-spacing: -.01em;
    line-height: 1.5;
  }
  h3 {
    font-size: 14px;
    font-weight: 600;
    letter-spacing: -.01em;
    color: var(--ink);
    margin: 32px 0 8px;
  }
  .body-text {
    font-size: 15px;
    font-weight: 400;
    color: var(--ink-3);
    line-height: 1.65;
    margin-bottom: 20px;
    max-width: 620px;
    letter-spacing: -.005em;
  }
  code {
    font-family: var(--mono);
    font-size: .82em;
    background: var(--fill-1);
    padding: 2px 6px;
    border-radius: 4px;
    color: var(--rose);
    letter-spacing: 0;
  }

  /* ─── Demo Stage ─────────────────────────────────── */
  .demo-stage {
    background: var(--fill-2);
    border: 1px solid var(--separator);
    border-radius: var(--radius-lg);
    padding: 36px 32px;
    margin: 20px 0;
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    align-items: center;
  }
  .demo-stage.dark  { background: #1d1d1f; border-color: #3a3a3c; }
  .demo-stage.center { justify-content: center; }
  .demo-stage-label {
    font-size: 10px;
    letter-spacing: .06em;
    text-transform: uppercase;
    font-weight: 500;
    color: var(--ink-4);
    margin-bottom: 16px;
    display: block;
  }

  /* ─── Spec Table ─────────────────────────────────── */
  .spec-table {
    border: 1px solid var(--separator);
    border-radius: var(--radius-md);
    overflow: hidden;
    margin: 20px 0;
  }
  .spec-row {
    display: grid;
    grid-template-columns: 220px 1fr;
    border-bottom: 1px solid var(--separator);
    font-size: 13.5px;
  }
  .spec-row:last-child { border-bottom: none; }
  .spec-key {
    padding: 13px 20px;
    font-weight: 500;
    color: var(--ink);
    background: var(--fill-2);
    font-family: var(--mono);
    font-size: 12px;
    letter-spacing: .01em;
    border-right: 1px solid var(--separator);
  }
  .spec-val {
    padding: 13px 20px;
    color: var(--ink-2);
    font-size: 13.5px;
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .swatch {
    width: 13px; height: 13px;
    border-radius: 50%;
    border: 1px solid rgba(0,0,0,.1);
    flex-shrink: 0;
    display: inline-block;
  }

  /* ─── Code Block ─────────────────────────────────── */
  .code-wrap {
    border: 1px solid var(--separator);
    border-radius: var(--radius-md);
    overflow: hidden;
    margin: 16px 0 28px;
    background: #fafafa;
  }
  .code-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 18px;
    border-bottom: 1px solid var(--separator);
    background: var(--fill-1);
  }
  .code-lang {
    font-size: 10px;
    font-weight: 600;
    letter-spacing: .08em;
    text-transform: uppercase;
    color: var(--ink-4);
  }
  .copy-btn {
    font-family: inherit;
    font-size: 11px;
    font-weight: 500;
    color: var(--rose);
    background: none;
    border: none;
    cursor: pointer;
    padding: 3px 8px;
    border-radius: 4px;
    transition: background .15s;
    letter-spacing: .01em;
  }
  .copy-btn:hover { background: rgba(255,56,92,.08); }
  pre {
    padding: 20px 22px;
    overflow-x: auto;
    font-family: var(--mono);
    font-size: 12.5px;
    line-height: 1.75;
    color: var(--ink-2);
  }
  .tk { color: #0070c9; }      /* tag */
  .at { color: #915b00; }      /* attr */
  .sv { color: #1a8f3f; }      /* string val */
  .cm { color: var(--ink-4); font-style: italic; } /* comment */
  .kw { color: #9b59b6; }      /* keyword */

  /* ─── Note ───────────────────────────────────────── */
  .note {
    border-left: 3px solid var(--rose);
    background: rgba(255,56,92,.04);
    border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
    padding: 14px 18px;
    margin: 16px 0;
    font-size: 13.5px;
    color: var(--ink-2);
    line-height: 1.6;
  }
  .note.warn {
    border-left-color: #FF9500;
    background: rgba(255,149,0,.04);
  }

  /* ─── Size Ruler ─────────────────────────────────── */
  .size-ruler {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-end;
    gap: 24px;
  }
  .size-item { display: flex; flex-direction: column; align-items: center; gap: 10px; }
  .size-label {
    font-size: 10.5px;
    font-family: var(--mono);
    color: var(--ink-4);
    letter-spacing: .03em;
    text-align: center;
  }

  /* ─── States ─────────────────────────────────────── */
  .states-strip {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-end;
    gap: 32px;
  }
  .state-item { display: flex; flex-direction: column; align-items: center; gap: 10px; }
  .state-label {
    font-size: 10.5px;
    font-family: var(--mono);
    color: var(--ink-4);
  }

  /* ─── API Table ──────────────────────────────────── */
  .api-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 13.5px;
    border: 1px solid var(--separator);
    border-radius: var(--radius-md);
    overflow: hidden;
    margin: 16px 0;
  }
  .api-table thead th {
    text-align: left;
    padding: 12px 18px;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: .05em;
    text-transform: uppercase;
    color: var(--ink-4);
    background: var(--fill-1);
    border-bottom: 1px solid var(--separator);
  }
  .api-table tbody tr { border-bottom: 1px solid var(--separator); }
  .api-table tbody tr:last-child { border-bottom: none; }
  .api-table td {
    padding: 13px 18px;
    color: var(--ink-2);
    line-height: 1.55;
    vertical-align: top;
  }
  .api-table td:first-child { font-family: var(--mono); font-size: 12px; color: var(--ink); }

  /* ─── BUTTONS ────────────────────────────────────── */
  .btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    height: 44px;
    padding: 0 20px;
    border-radius: 999px;
    border: 1.5px solid transparent;
    font-family: inherit;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: -.01em;
    cursor: pointer;
    white-space: nowrap;
    transition: background .16s, border-color .16s, color .16s, box-shadow .2s, transform .12s;
    text-decoration: none;
    outline: none;
    position: relative;
    overflow: hidden;
    user-select: none;
  }
  .btn:focus-visible { box-shadow: 0 0 0 3px rgba(255,56,92,.30); }
  .btn:active:not(:disabled) { transform: scale(0.97); }
  .btn:disabled { opacity: .38; cursor: not-allowed; }

  /* variants */
  .btn-primary { background: var(--rose); border-color: var(--rose); color: #fff; box-shadow: 0 2px 8px rgba(255,56,92,.28); }
  .btn-primary:hover:not(:disabled) { background: var(--rose-hover); border-color: var(--rose-hover); box-shadow: 0 6px 20px rgba(255,56,92,.34); }

  .btn-secondary { background: var(--ink); border-color: var(--ink); color: #fff; }
  .btn-secondary:hover:not(:disabled) { background: #333; border-color: #333; box-shadow: 0 4px 16px rgba(0,0,0,.22); }

  .btn-outline { background: transparent; border-color: var(--separator); color: var(--ink); }
  .btn-outline:hover:not(:disabled) { border-color: var(--ink-3); background: var(--fill-1); }

  .btn-ghost { background: transparent; border-color: transparent; color: var(--ink); }
  .btn-ghost:hover:not(:disabled) { background: rgba(34,34,34,.06); }

  .btn-ghost-primary { background: transparent; border-color: transparent; color: var(--rose); }
  .btn-ghost-primary:hover:not(:disabled) { background: rgba(255,56,92,.07); }

  .btn-soft { background: rgba(255,56,92,.10); border-color: transparent; color: var(--rose); }
  .btn-soft:hover:not(:disabled) { background: rgba(255,56,92,.16); }

  .btn-accent { background: var(--teal); border-color: var(--teal); color: #fff; box-shadow: 0 2px 8px rgba(0,166,153,.25); }
  .btn-accent:hover:not(:disabled) { background: #008f83; border-color: #008f83; box-shadow: 0 6px 20px rgba(0,166,153,.30); }

  .btn-danger { background: var(--danger); border-color: var(--danger); color: #fff; }
  .btn-danger:hover:not(:disabled) { background: #a82c10; border-color: #a82c10; box-shadow: 0 4px 16px rgba(192,57,43,.3); }

  .btn-danger-outline { background: transparent; border-color: var(--danger); color: var(--danger); }
  .btn-danger-outline:hover:not(:disabled) { background: rgba(192,57,43,.06); }

  .btn-white { background: #fff; border-color: #fff; color: var(--ink); box-shadow: 0 2px 12px rgba(0,0,0,.18); }
  .btn-white:hover:not(:disabled) { box-shadow: 0 6px 24px rgba(0,0,0,.24); }

  .btn-link { background: transparent; border-color: transparent; color: var(--rose); height: auto; padding: 0; font-weight: 400; font-size: 14px; text-decoration: underline; text-underline-offset: 3px; border-radius: 2px; }
  .btn-link:hover { color: var(--rose-hover); text-decoration: none; }

  /* toggle */
  .btn-toggle { background: transparent; border-color: var(--separator); color: var(--ink-3); }
  .btn-toggle:hover:not(:disabled) { border-color: var(--ink-3); color: var(--ink); }
  .btn-toggle.is-selected { background: var(--rose); border-color: var(--rose); color: #fff; box-shadow: 0 2px 8px rgba(255,56,92,.28); }

  /* sizes */
  .btn-xl { height: 60px; padding: 0 28px; font-size: 17px; }
  .btn-lg { height: 52px; padding: 0 24px; font-size: 16px; }
  .btn-sm { height: 36px; padding: 0 14px; font-size: 13px; }
  .btn-xs { height: 28px; padding: 0 10px; font-size: 11.5px; }
  .btn-block { width: 100%; display: flex; }

  /* icon */
  .btn-icon { width: 1.2em; height: 1.2em; flex-shrink: 0; }
  .btn-icon-only { padding: 0; width: 44px; }
  .btn-icon-only.btn-sm { width: 36px; }

  /* badge */
  .btn-badge {
    background: rgba(255,255,255,.25);
    color: inherit;
    font-size: .75em;
    font-weight: 700;
    padding: 1px 7px;
    border-radius: 999px;
    line-height: 1.6;
    letter-spacing: .02em;
  }
  .btn-secondary .btn-badge { background: rgba(255,255,255,.2); }
  .btn-outline .btn-badge { background: var(--fill-1); color: var(--rose); }

  /* spinner */
  .btn-spinner {
    width: 15px; height: 15px;
    border: 2px solid rgba(255,255,255,.35);
    border-top-color: #fff;
    border-radius: 50%;
    animation: spin .7s linear infinite;
    flex-shrink: 0;
  }
  @keyframes spin { to { transform: rotate(360deg); } }

  /* groups */
  .btn-group { display: flex; flex-wrap: wrap; gap: 10px; align-items: center; }
  .btn-group-attached {
    display: inline-flex;
    border-radius: 999px;
    border: 1.5px solid var(--separator);
    overflow: hidden;
  }
  .btn-group-attached .btn {
    border-radius: 0;
    border: none;
    border-right: 1px solid var(--separator);
    height: 40px;
    font-size: 14px;
  }
  .btn-group-attached .btn:last-child { border-right: none; }
  .btn-group-attached .btn:hover:not(:disabled) { background: var(--fill-1); }

  /* ─── Anatomy Diagram ────────────────────────────── */
  .anatomy-wrap {
    position: relative;
    display: inline-flex;
    padding: 40px 80px;
  }
  .callout-line {
    position: absolute;
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 11px;
    font-family: var(--mono);
    color: var(--ink-4);
    white-space: nowrap;
  }
  .callout-dot {
    width: 5px; height: 5px;
    border-radius: 50%;
    background: var(--rose);
    flex-shrink: 0;
  }
  .callout-dash {
    width: 20px; height: 1px;
    background: var(--separator);
  }

  /* ─── File Tree ──────────────────────────────────── */
  .file-tree {
    font-family: var(--mono);
    font-size: 12.5px;
    line-height: 2;
    color: var(--ink-2);
    background: var(--fill-2);
    border: 1px solid var(--separator);
    border-radius: var(--radius-md);
    padding: 20px 24px;
    margin: 16px 0;
  }
  .file-tree .highlight { color: var(--rose); font-weight: 600; }

  /* ─── Block preview ──────────────────────────────── */
  .block-preview { width: 100%; max-width: 360px; display: flex; flex-direction: column; gap: 10px; }

  /* ─── Fade-in on load ────────────────────────────── */
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(16px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .main > * { animation: fadeUp .5s cubic-bezier(.22,1,.36,1) both; }
  .main > *:nth-child(1) { animation-delay: .05s; }
  .main > *:nth-child(2) { animation-delay: .10s; }
  .main > *:nth-child(3) { animation-delay: .15s; }
  .main > *:nth-child(4) { animation-delay: .20s; }

  /* ─── Responsive ─────────────────────────────────── */
  @media (max-width: 1100px) {
    .toc { display: none; }
    .layout { grid-template-columns: 220px 1fr; }
  }
  @media (max-width: 760px) {
    .nav-left { display: none; }
    .layout { grid-template-columns: 1fr; padding: 0 16px; }
    .main { padding: 40px 0 80px; }
    h1 { font-size: 36px; }
  }
</style>
</head>
<body>

<div class="layout">

  <!-- ── Left Nav ─────────────────────────────────── -->
  <nav class="nav-left">
    <div class="nav-logo">
      <div class="nav-logo-mark">
        <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/>
          <path d="M8 12l3 3 5-5"/>
        </svg>
      </div>
      <div>
        <div class="nav-logo-text">HolidaySeva</div>
        <div class="nav-logo-sub">Design Guidelines</div>
      </div>
    </div>

    <div class="nav-section-label">Foundations</div>
    <a href="#" class="nav-link">Colors</a>
    <a href="#" class="nav-link">Typography</a>
    <a href="#" class="nav-link">Spacing</a>
    <a href="#" class="nav-link">Icons</a>

    <div class="nav-section-label">Atoms</div>
    <a href="#overview" class="nav-link active">Button</a>
    <a href="#" class="nav-link">Badge</a>
    <a href="#" class="nav-link">Input</a>
    <a href="#" class="nav-link">Toggle</a>
    <a href="#" class="nav-link">Checkbox</a>
    <a href="#" class="nav-link">Radio</a>

    <div class="nav-section-label">Molecules</div>
    <a href="#" class="nav-link">Card</a>
    <a href="#" class="nav-link">Modal</a>
    <a href="#" class="nav-link">Toast</a>
    <a href="#" class="nav-link">Dropdown</a>

    <div class="nav-section-label">Patterns</div>
    <a href="#" class="nav-link">Search Bar</a>
    <a href="#" class="nav-link">Booking Flow</a>
    <a href="#" class="nav-link">Checkout</a>
  </nav>

  <!-- ── Main ─────────────────────────────────────── -->
  <main class="main">

    <!-- Hero -->
    <div id="overview">
      <p class="eyebrow">Components · Atom</p>
      <h1>Button</h1>
      <p class="page-lead">The primary action element in HolidaySeva. Buttons trigger bookings, submit forms, and guide users through every flow — from search to checkout.</p>
    </div>

    <!-- Live Demo -->
    <div class="demo-stage" style="margin-top: 40px;">
      <span class="demo-stage-label">Interactive demo — hover and click each variant</span>
      <button class="btn btn-primary">Book Now</button>
      <button class="btn btn-secondary">Explore</button>
      <button class="btn btn-outline">Save</button>
      <button class="btn btn-ghost">Learn More</button>
      <button class="btn btn-soft">Filters</button>
      <button class="btn btn-accent">Contact Host</button>
    </div>

    <hr class="rule">

    <!-- ── Anatomy ──────────────────────────────────── -->
    <section id="anatomy">
      <h2>Anatomy</h2>
      <p class="section-sub">A button is composed of four optional parts — all coordinated by the <code>.btn</code> container.</p>

      <div class="demo-stage center">
        <div class="anatomy-wrap">
          <button class="btn btn-primary" style="pointer-events:none; gap:10px; position:relative;">
            <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            Search Stays
          </button>
          <!-- Top callout: container -->
          <div class="callout-line" style="top:-22px;left:0;">
            <span class="callout-dot"></span><span class="callout-dash"></span>
            <span>.btn container</span>
          </div>
          <!-- Bottom left: icon -->
          <div class="callout-line" style="bottom:-22px;left:8px;">
            <span class="callout-dot"></span><span class="callout-dash"></span>
            <span>.btn-icon</span>
          </div>
          <!-- Bottom right: padding -->
          <div class="callout-line" style="bottom:-22px;right:8px;">
            <span class="callout-dot"></span><span class="callout-dash"></span>
            <span>padding · 20px</span>
          </div>
          <!-- Right: label -->
          <div class="callout-line" style="top:50%;right:-94px;transform:translateY(-50%);">
            <span class="callout-dash"></span><span class="callout-dot"></span>
            <span>label</span>
          </div>
        </div>
      </div>

      <div class="spec-table">
        <div class="spec-row"><span class="spec-key">Container</span><span class="spec-val"><code>.btn</code> + variant class — owns all visual properties</span></div>
        <div class="spec-row"><span class="spec-key">Leading icon</span><span class="spec-val"><code>.btn-icon</code> — optional, inherits <code>currentColor</code></span></div>
        <div class="spec-row"><span class="spec-key">Label</span><span class="spec-val">Text node — use <code>.btn-label</code> during loading</span></div>
        <div class="spec-row"><span class="spec-key">Badge / count</span><span class="spec-val"><code>.btn-badge</code> — optional trailing chip</span></div>
        <div class="spec-row"><span class="spec-key">Spinner</span><span class="spec-val"><code>.btn-spinner</code> — injected by button.js on load state</span></div>
      </div>
    </section>

    <hr class="rule">

    <!-- ── Specifications ───────────────────────────── -->
    <section id="specs">
      <h2>Specifications</h2>
      <p class="section-sub">Default <code>md</code> dimensions. All values are design tokens — reference them from <code>colors.css</code>.</p>

      <div class="spec-table">
        <div class="spec-row"><span class="spec-key">height</span><span class="spec-val">44px — Apple touch target minimum</span></div>
        <div class="spec-row"><span class="spec-key">padding-inline</span><span class="spec-val">20px</span></div>
        <div class="spec-row"><span class="spec-key">border-radius</span><span class="spec-val">999px (pill)</span></div>
        <div class="spec-row"><span class="spec-key">border-width</span><span class="spec-val">1.5px</span></div>
        <div class="spec-row"><span class="spec-key">font-weight</span><span class="spec-val">600</span></div>
        <div class="spec-row"><span class="spec-key">font-size</span><span class="spec-val">15px</span></div>
        <div class="spec-row"><span class="spec-key">letter-spacing</span><span class="spec-val">−0.01em</span></div>
        <div class="spec-row"><span class="spec-key">icon-gap</span><span class="spec-val">8px</span></div>
        <div class="spec-row"><span class="spec-key">press-scale</span><span class="spec-val">scale(0.97) — 120ms ease</span></div>
        <div class="spec-row"><span class="spec-key">transition</span><span class="spec-val">160ms colour/bg · 200ms shadow</span></div>
        <div class="spec-row">
          <span class="spec-key">--color-primary</span>
          <span class="spec-val"><span class="swatch" style="background:#FF385C"></span>#FF385C</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">--color-secondary</span>
          <span class="spec-val"><span class="swatch" style="background:#222222;border-color:rgba(255,255,255,.2)"></span>#222222</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">--color-accent</span>
          <span class="spec-val"><span class="swatch" style="background:#00A699"></span>#00A699</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">focus-ring</span>
          <span class="spec-val">3px · rgba(255,56,92,0.30) — :focus-visible only</span>
        </div>
      </div>
    </section>

    <hr class="rule">

    <!-- ── Variants ─────────────────────────────────── -->
    <section id="variants">
      <h2>Variants</h2>
      <p class="section-sub">Ten variants cover every UI context. Use them intentionally — each has a single, defined role in the visual hierarchy.</p>

      <!-- Primary -->
      <h3>Primary</h3>
      <p class="body-text">The strongest call-to-action. Use once per view for the single most important action — booking, confirming, submitting.</p>
      <div class="demo-stage">
        <button class="btn btn-primary btn-xl">xl</button>
        <button class="btn btn-primary btn-lg">lg</button>
        <button class="btn btn-primary">md</button>
        <button class="btn btn-primary btn-sm">sm</button>
        <button class="btn btn-primary btn-xs">xs</button>
      </div>
      <div class="code-wrap">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-primary"</span><span class="tk">&gt;</span>Book Now<span class="tk">&lt;/button&gt;</span></code></pre>
      </div>

      <!-- Secondary -->
      <h3>Secondary</h3>
      <p class="body-text">Dark filled. Strong but subordinate — pair alongside a Primary for a secondary action like "Browse All".</p>
      <div class="demo-stage">
        <button class="btn btn-secondary">Explore Stays</button>
        <button class="btn btn-secondary btn-sm">Explore</button>
      </div>
      <div class="code-wrap">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-secondary"</span><span class="tk">&gt;</span>Explore Stays<span class="tk">&lt;/button&gt;</span></code></pre>
      </div>

      <!-- Outline -->
      <h3>Outline</h3>
      <p class="body-text">Bordered, transparent background. Ideal for secondary actions inside cards and forms.</p>
      <div class="demo-stage">
        <button class="btn btn-outline">Save to Wishlist</button>
        <button class="btn btn-outline btn-sm">Save</button>
      </div>
      <div class="code-wrap">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-outline"</span><span class="tk">&gt;</span>Save to Wishlist<span class="tk">&lt;/button&gt;</span></code></pre>
      </div>

      <!-- Ghost -->
      <h3>Ghost</h3>
      <p class="body-text">No visible border or fill until hover. Use for low-emphasis actions in toolbars and menus.</p>
      <div class="demo-stage">
        <button class="btn btn-ghost">Learn More</button>
        <button class="btn btn-ghost-primary">View All Listings</button>
      </div>
      <div class="code-wrap">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-ghost"</span><span class="tk">&gt;</span>Learn More<span class="tk">&lt;/button&gt;</span>
<span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-ghost-primary"</span><span class="tk">&gt;</span>View All<span class="tk">&lt;/button&gt;</span></code></pre>
      </div>

      <!-- Soft -->
      <h3>Soft</h3>
      <p class="body-text">Light tinted fill with brand-colour text. Use for filter chips and category selectors.</p>
      <div class="demo-stage">
        <button class="btn btn-soft">Apply Filters</button>
        <button class="btn btn-soft btn-sm">Beachfront</button>
        <button class="btn btn-soft btn-sm">Pet-friendly</button>
      </div>
      <div class="code-wrap">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-soft"</span><span class="tk">&gt;</span>Apply Filters<span class="tk">&lt;/button&gt;</span></code></pre>
      </div>

      <!-- Accent -->
      <h3>Accent</h3>
      <p class="body-text">HolidaySeva teal. Reserved for messaging and communication — complements the primary rose.</p>
      <div class="demo-stage">
        <button class="btn btn-accent">Contact Host</button>
        <button class="btn btn-accent btn-sm">Message</button>
      </div>
      <div class="code-wrap">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-accent"</span><span class="tk">&gt;</span>Contact Host<span class="tk">&lt;/button&gt;</span></code></pre>
      </div>

      <!-- Danger -->
      <h3>Danger</h3>
      <p class="body-text">Destructive actions only. Always pair with a confirmation dialog before executing.</p>
      <div class="demo-stage">
        <button class="btn btn-danger">Cancel Booking</button>
        <button class="btn btn-danger-outline">Remove Listing</button>
      </div>
      <div class="code-wrap">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-danger"</span><span class="tk">&gt;</span>Cancel Booking<span class="tk">&lt;/button&gt;</span>
<span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-danger-outline"</span><span class="tk">&gt;</span>Remove Listing<span class="tk">&lt;/button&gt;</span></code></pre>
      </div>

      <!-- White -->
      <h3>White</h3>
      <p class="body-text">White filled — use on dark or image-hero backgrounds only.</p>
      <div class="demo-stage dark">
        <button class="btn btn-white">Explore Destinations</button>
      </div>
      <div class="code-wrap">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-white"</span><span class="tk">&gt;</span>Explore Destinations<span class="tk">&lt;/button&gt;</span></code></pre>
      </div>

      <!-- Link -->
      <h3>Link</h3>
      <p class="body-text">Renders as a hyperlink. Use inside body copy for navigation — not for triggering actions.</p>
      <div class="demo-stage">
        <button class="btn btn-link">View full cancellation policy</button>
      </div>
      <div class="code-wrap">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-link"</span><span class="tk">&gt;</span>View full cancellation policy<span class="tk">&lt;/button&gt;</span></code></pre>
      </div>
    </section>

    <hr class="rule">

    <!-- ── Sizes ─────────────────────────────────────── -->
    <section id="sizes">
      <h2>Sizes</h2>
      <p class="section-sub">Five sizes adapt the button to its context. Default is <code>md</code> — no extra class required.</p>

      <div class="demo-stage">
        <div class="size-ruler">
          <div class="size-item">
            <button class="btn btn-primary btn-xl">Get Started</button>
            <span class="size-label">xl · 60px</span>
          </div>
          <div class="size-item">
            <button class="btn btn-primary btn-lg">Book a Stay</button>
            <span class="size-label">lg · 52px</span>
          </div>
          <div class="size-item">
            <button class="btn btn-primary">Book Now</button>
            <span class="size-label">md · 44px</span>
          </div>
          <div class="size-item">
            <button class="btn btn-primary btn-sm">Save</button>
            <span class="size-label">sm · 36px</span>
          </div>
          <div class="size-item">
            <button class="btn btn-primary btn-xs">New</button>
            <span class="size-label">xs · 28px</span>
          </div>
        </div>
      </div>

      <div class="code-wrap">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-primary btn-xl"</span><span class="tk">&gt;</span>XL<span class="tk">&lt;/button&gt;</span>
<span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-primary btn-lg"</span><span class="tk">&gt;</span>Large<span class="tk">&lt;/button&gt;</span>
<span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-primary"</span><span class="tk">&gt;</span>Default<span class="tk">&lt;/button&gt;</span>
<span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-primary btn-sm"</span><span class="tk">&gt;</span>Small<span class="tk">&lt;/button&gt;</span>
<span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-primary btn-xs"</span><span class="tk">&gt;</span>XS<span class="tk">&lt;/button&gt;</span></code></pre>
      </div>

      <h3>Full width</h3>
      <p class="body-text">Add <code>.btn-block</code> to stretch any button to fill its container. Used in checkout modals and mobile forms.</p>
      <div class="demo-stage">
        <div class="block-preview">
          <button class="btn btn-primary btn-block">Confirm &amp; Pay</button>
          <button class="btn btn-outline btn-block">Save for Later</button>
        </div>
      </div>
      <div class="code-wrap">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-primary btn-block"</span><span class="tk">&gt;</span>Confirm &amp; Pay<span class="tk">&lt;/button&gt;</span></code></pre>
      </div>
    </section>

    <hr class="rule">

    <!-- ── Icons & Badges ─────────────────────────────── -->
    <section id="icons">
      <h2>Icons &amp; Badges</h2>
      <p class="section-sub">Icons are sized at <code>1.2em</code> and inherit <code>currentColor</code> automatically. Badges live at the trailing edge.</p>

      <div class="demo-stage">
        <button class="btn btn-primary">
          <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          Search
        </button>
        <button class="btn btn-outline">
          Save to List
          <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
        </button>
        <button class="btn btn-outline btn-icon-only" aria-label="Share listing">
          <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
        </button>
        <button class="btn btn-secondary">Cart <span class="btn-badge">3</span></button>
        <button class="btn btn-outline">
          Filters <span class="btn-badge" style="background:var(--rose);color:#fff;">4</span>
        </button>
        <button class="btn btn-ghost btn-icon-only" aria-label="More options">
          <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="5" r="1"/><circle cx="12" cy="12" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
      </div>

      <div class="code-wrap">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="cm">&lt;!-- Leading icon --&gt;</span>
<span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-primary"</span><span class="tk">&gt;</span>
  <span class="tk">&lt;svg</span> <span class="at">class</span>=<span class="sv">"btn-icon"</span> <span class="at">aria-hidden</span>=<span class="sv">"true"</span><span class="tk">&gt;</span>...<span class="tk">&lt;/svg&gt;</span>
  Search
<span class="tk">&lt;/button&gt;</span>

<span class="cm">&lt;!-- Icon-only — always include aria-label --&gt;</span>
<span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-outline btn-icon-only"</span>
        <span class="at">aria-label</span>=<span class="sv">"Share listing"</span><span class="tk">&gt;</span>
  <span class="tk">&lt;svg</span> <span class="at">class</span>=<span class="sv">"btn-icon"</span> <span class="at">aria-hidden</span>=<span class="sv">"true"</span><span class="tk">&gt;</span>...<span class="tk">&lt;/svg&gt;</span>
<span class="tk">&lt;/button&gt;</span>

<span class="cm">&lt;!-- Badge --&gt;</span>
<span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-secondary"</span><span class="tk">&gt;</span>
  Cart <span class="tk">&lt;span</span> <span class="at">class</span>=<span class="sv">"btn-badge"</span><span class="tk">&gt;</span>3<span class="tk">&lt;/span&gt;</span>
<span class="tk">&lt;/button&gt;</span></code></pre>
      </div>
    </section>

    <hr class="rule">

    <!-- ── States ───────────────────────────────────── -->
    <section id="states">
      <h2>States</h2>
      <p class="section-sub">Hover, focus, and active are CSS-only. Focus rings appear exclusively on keyboard navigation via <code>:focus-visible</code>.</p>

      <div class="demo-stage">
        <div class="states-strip">
          <div class="state-item">
            <button class="btn btn-primary" tabindex="-1">Default</button>
            <span class="state-label">default</span>
          </div>
          <div class="state-item">
            <button class="btn btn-primary" style="background:#E8314F;border-color:#E8314F;box-shadow:0 6px 20px rgba(255,56,92,.34);" tabindex="-1">Hover</button>
            <span class="state-label">hover</span>
          </div>
          <div class="state-item">
            <button class="btn btn-primary" style="transform:scale(0.97);background:#CC2B47;border-color:#CC2B47;" tabindex="-1">Active</button>
            <span class="state-label">active</span>
          </div>
          <div class="state-item">
            <button class="btn btn-primary" style="box-shadow:0 0 0 3px rgba(255,56,92,.30);" tabindex="-1">Focus</button>
            <span class="state-label">focus</span>
          </div>
          <div class="state-item">
            <button class="btn btn-primary" disabled>Disabled</button>
            <span class="state-label">disabled</span>
          </div>
          <div class="state-item">
            <button class="btn btn-primary" disabled style="opacity:.82;">
              <span class="btn-spinner"></span>Booking…
            </button>
            <span class="state-label">loading</span>
          </div>
        </div>
      </div>

      <h3>Disabled</h3>
      <p class="body-text">Use the native <code>disabled</code> attribute on <code>&lt;button&gt;</code>. For <code>&lt;a&gt;</code> tags, use <code>aria-disabled="true"</code> and <code>tabindex="-1"</code>.</p>
      <div class="code-wrap">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-primary"</span> <span class="at">disabled</span><span class="tk">&gt;</span>Book Now<span class="tk">&lt;/button&gt;</span></code></pre>
      </div>

      <h3>Loading</h3>
      <p class="body-text">Call <code>ButtonSystem.loading(btn, true)</code> when an async action starts. It injects the spinner, disables the button, and sets <code>aria-busy="true"</code>. Restore with <code>ButtonSystem.loading(btn, false)</code>.</p>
      <div class="demo-stage">
        <button class="btn btn-primary" id="loadingDemo" onclick="triggerLoad(this)">Book Now — click me</button>
      </div>
      <div class="code-wrap">
        <div class="code-bar"><span class="code-lang">JavaScript</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="kw">const</span> btn = document.<span class="kw">querySelector</span>(<span class="sv">'#bookBtn'</span>);

ButtonSystem.<span class="kw">loading</span>(btn, <span class="kw">true</span>);   <span class="cm">// start</span>
ButtonSystem.<span class="kw">loading</span>(btn, <span class="kw">false</span>);  <span class="cm">// restore</span>

<span class="cm">&lt;!-- Auto-trigger via attribute --&gt;</span>
<span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-primary"</span>
        <span class="at">data-loading-on-click</span>
        <span class="at">data-loading-text</span>=<span class="sv">"Booking…"</span><span class="tk">&gt;</span>Book Now<span class="tk">&lt;/button&gt;</span></code></pre>
      </div>

      <h3>Toggle / Selected</h3>
      <p class="body-text">Add <code>.btn-toggle</code> for selectable chips. <code>button.js</code> automatically manages <code>aria-pressed</code> and <code>.is-selected</code> on every click.</p>
      <div class="demo-stage">
        <div class="btn-group">
          <button class="btn btn-toggle is-selected" aria-pressed="true" onclick="handleToggle(this)">Entire Place</button>
          <button class="btn btn-toggle" aria-pressed="false" onclick="handleToggle(this)">Private Room</button>
          <button class="btn btn-toggle" aria-pressed="false" onclick="handleToggle(this)">Shared Room</button>
        </div>
      </div>
      <div class="code-wrap">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="tk">&lt;div</span> <span class="at">class</span>=<span class="sv">"btn-group"</span><span class="tk">&gt;</span>
  <span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-toggle is-selected"</span>
          <span class="at">aria-pressed</span>=<span class="sv">"true"</span><span class="tk">&gt;</span>Entire Place<span class="tk">&lt;/button&gt;</span>
  <span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-toggle"</span>
          <span class="at">aria-pressed</span>=<span class="sv">"false"</span><span class="tk">&gt;</span>Private Room<span class="tk">&lt;/button&gt;</span>
<span class="tk">&lt;/div&gt;</span></code></pre>
      </div>
      <div class="note">
        <code>btn-toggle</code> dispatches a <code>btn-toggle</code> CustomEvent with <code>detail.pressed</code> on every state change. Listen to it exactly like a native input event.
      </div>
    </section>

    <hr class="rule">

    <!-- ── Button Groups ─────────────────────────────── -->
    <section id="groups">
      <h2>Button Groups</h2>
      <p class="section-sub">Use <code>.btn-group</code> for a spaced flex set, and <code>.btn-group-attached</code> for a joined segmented control where borders merge.</p>

      <h3>Spaced</h3>
      <div class="demo-stage">
        <div class="btn-group">
          <button class="btn btn-primary">Confirm Booking</button>
          <button class="btn btn-outline">Save Draft</button>
          <button class="btn btn-ghost">Cancel</button>
        </div>
      </div>

      <h3>Attached</h3>
      <div class="demo-stage">
        <div class="btn-group-attached">
          <button class="btn btn-outline">Day</button>
          <button class="btn btn-outline">Week</button>
          <button class="btn btn-outline">Month</button>
        </div>
      </div>

      <div class="code-wrap">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="cm">&lt;!-- Spaced --&gt;</span>
<span class="tk">&lt;div</span> <span class="at">class</span>=<span class="sv">"btn-group"</span><span class="tk">&gt;</span>
  <span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-primary"</span><span class="tk">&gt;</span>Confirm<span class="tk">&lt;/button&gt;</span>
  <span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-outline"</span><span class="tk">&gt;</span>Save Draft<span class="tk">&lt;/button&gt;</span>
<span class="tk">&lt;/div&gt;</span>

<span class="cm">&lt;!-- Attached --&gt;</span>
<span class="tk">&lt;div</span> <span class="at">class</span>=<span class="sv">"btn-group-attached"</span><span class="tk">&gt;</span>
  <span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-outline"</span><span class="tk">&gt;</span>Day<span class="tk">&lt;/button&gt;</span>
  <span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-outline"</span><span class="tk">&gt;</span>Week<span class="tk">&lt;/button&gt;</span>
  <span class="tk">&lt;button</span> <span class="at">class</span>=<span class="sv">"btn btn-outline"</span><span class="tk">&gt;</span>Month<span class="tk">&lt;/button&gt;</span>
<span class="tk">&lt;/div&gt;</span></code></pre>
      </div>
    </section>

    <hr class="rule">

    <!-- ── JavaScript API ───────────────────────────── -->
    <section id="javascript">
      <h2>JavaScript API</h2>
      <p class="section-sub"><code>button.js</code> boots automatically. One static helper for loading, one custom event for toggles — everything else is internal.</p>

      <div class="spec-table">
        <div class="spec-row"><span class="spec-key">ButtonSystem.loading(btn, true)</span><span class="spec-val">Enters loading — spinner injected, button disabled, aria-busy set</span></div>
        <div class="spec-row"><span class="spec-key">ButtonSystem.loading(btn, false)</span><span class="spec-val">Restores original HTML, removes disabled + aria-busy</span></div>
        <div class="spec-row"><span class="spec-key">data-loading-on-click</span><span class="spec-val">Attribute — auto-triggers loading on click without JS</span></div>
        <div class="spec-row"><span class="spec-key">data-loading-text="…"</span><span class="spec-val">Custom label shown inside the loading button</span></div>
        <div class="spec-row"><span class="spec-key">btn-toggle CustomEvent</span><span class="spec-val">Fires on every toggle with <code>detail.pressed</code> (boolean)</span></div>
      </div>
    </section>

    <hr class="rule">

    <!-- ── Integration ───────────────────────────────── -->
    <section id="integration">
      <h2>Integration</h2>
      <p class="section-sub">Import CSS in <code>&lt;head&gt;</code>. Add JS before <code>&lt;/body&gt;</code> only when you need loading states, ripple, or toggle behaviour.</p>

      <div class="code-wrap">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="cm">&lt;!-- In &lt;head&gt; --&gt;</span>
<span class="tk">&lt;link</span> <span class="at">rel</span>=<span class="sv">"stylesheet"</span> <span class="at">href</span>=<span class="sv">"https://holidayseva.com/UI/Atom/button/button.css"</span><span class="tk">&gt;</span>

<span class="cm">&lt;!-- Before &lt;/body&gt; --&gt;</span>
<span class="tk">&lt;script</span> <span class="at">src</span>=<span class="sv">"https://holidayseva.com/UI/Atom/button/button.js"</span><span class="tk">&gt;&lt;/script&gt;</span></code></pre>
      </div>

      <h3>File structure</h3>
      <div class="file-tree">design_guidelines/<br>
├── header.php<br>
├── left_sidebar.php<br>
├── right_sidebar.php<br>
├── footer.php<br>
├── design-system.css<br>
└── Atom/<br>
&nbsp;&nbsp;&nbsp;&nbsp;└── button/<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├── <span class="highlight">button.php</span>&nbsp;&nbsp;← this file<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├── button.css<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└── button.js</div>

      <h3>Required token additions</h3>
      <p class="body-text">These CSS tokens are referenced by <code>button.css</code> but not yet in <code>colors.css</code>. Add them to keep the token system consistent.</p>
      <div class="code-wrap">
        <div class="code-bar"><span class="code-lang">CSS</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="cm">/* Primary interaction */</span>
--color-primary-hover:    #E8314F;
--color-primary-pressed:  #CC2B47;

<span class="cm">/* Ghost hover surfaces */</span>
--color-ghost-hover-bg:   rgba(34, 34, 34, 0.06);
--color-ghost-pressed-bg: rgba(34, 34, 34, 0.10);

<span class="cm">/* Danger interaction */</span>
--color-danger-hover:     #A82C10;
--color-danger-pressed:   #8E240D;

<span class="cm">/* Disabled state */</span>
--color-surface-disabled: #F5F5F5;
--color-text-disabled:    #B0B0B0;
--color-border-disabled:  #E0E0E0;</code></pre>
      </div>
    </section>

    <hr class="rule">

    <!-- ── Accessibility ────────────────────────────── -->
    <section id="accessibility">
      <h2>Accessibility</h2>
      <p class="section-sub">The button system meets WCAG 2.1 AA. Focus rings, colour contrast, 44px touch targets, and ARIA attributes are all built in.</p>

      <table class="api-table">
        <thead>
          <tr><th>Requirement</th><th>How it's met</th><th>Your responsibility</th></tr>
        </thead>
        <tbody>
          <tr><td>Touch target</td><td>Default md is 44px height</td><td>Don't override height below 44px on mobile</td></tr>
          <tr><td>Focus ring</td><td>3px ring on :focus-visible</td><td>Never remove outline without a custom ring</td></tr>
          <tr><td>Colour contrast</td><td>All variants ≥ 4.5:1</td><td>Don't override colours without re-testing contrast</td></tr>
          <tr><td>Disabled</td><td>CSS handles opacity &amp; cursor</td><td>Add native <code>disabled</code> attribute</td></tr>
          <tr><td>Loading</td><td>button.js sets aria-busy="true"</td><td>Use <code>ButtonSystem.loading()</code> — don't roll your own</td></tr>
          <tr><td>Toggle</td><td>button.js syncs aria-pressed</td><td>Set correct initial value in markup</td></tr>
          <tr><td>Icon-only</td><td>—</td><td>Always add <code>aria-label="…"</code> on the button</td></tr>
        </tbody>
      </table>

      <div class="note warn" style="margin-top: 20px;">
        Always use a native <code>&lt;button&gt;</code> element. Using <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code> requires full ARIA and keyboard wiring to replicate what the browser provides for free.
      </div>
    </section>

  </main>

  <!-- ── Right TOC ──────────────────────────────────── -->
  <aside class="toc">
    <div class="toc-label">On this page</div>
    <a href="#overview" class="toc-link">Overview</a>
    <a href="#anatomy" class="toc-link">Anatomy</a>
    <a href="#specs" class="toc-link">Specifications</a>
    <a href="#variants" class="toc-link">Variants</a>
    <a href="#sizes" class="toc-link">Sizes</a>
    <a href="#icons" class="toc-link">Icons &amp; Badges</a>
    <a href="#states" class="toc-link">States</a>
    <a href="#groups" class="toc-link">Button Groups</a>
    <a href="#javascript" class="toc-link">JavaScript API</a>
    <a href="#integration" class="toc-link">Integration</a>
    <a href="#accessibility" class="toc-link">Accessibility</a>
  </aside>

</div><!-- /.layout -->

<script>
  /* Loading demo */
  function triggerLoad(btn) {
    if (btn.disabled) return;
    const orig = btn.innerHTML;
    btn.disabled = true;
    btn.setAttribute('aria-busy', 'true');
    btn.innerHTML = '<span class="btn-spinner"></span>Booking…';
    setTimeout(() => {
      btn.disabled = false;
      btn.removeAttribute('aria-busy');
      btn.innerHTML = orig;
    }, 2400);
  }

  /* Toggle demo */
  function handleToggle(clicked) {
    const group = clicked.closest('.btn-group');
    group.querySelectorAll('.btn-toggle').forEach(btn => {
      btn.classList.remove('is-selected');
      btn.setAttribute('aria-pressed', 'false');
    });
    clicked.classList.add('is-selected');
    clicked.setAttribute('aria-pressed', 'true');
  }

  /* Copy code */
  function copyCode(btn) {
    const text = btn.closest('.code-wrap').querySelector('pre').innerText;
    navigator.clipboard.writeText(text).then(() => {
      btn.textContent = 'Copied';
      setTimeout(() => btn.textContent = 'Copy', 1800);
    });
  }

  /* TOC scroll-spy */
  document.addEventListener('DOMContentLoaded', () => {
    const tocLinks = document.querySelectorAll('.toc-link');
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section[id], div[id]');

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const id = '#' + entry.target.id;
          tocLinks.forEach(a => {
            a.classList.toggle('active', a.getAttribute('href') === id);
          });
        }
      });
    }, { rootMargin: '-10% 0px -80% 0px' });

    sections.forEach(s => observer.observe(s));
  });
</script>
</body>
</html>