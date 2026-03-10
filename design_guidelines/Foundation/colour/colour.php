<?php
/**
 * colors.php
 * Design Guidelines — Color System
 * developer.holidayseva.com
 */

// ── Page meta ────────────────────────────────────────────────────────────────
$pageTitle       = 'Colors';
$pageDescription = 'Color tokens, semantic usage, and accessibility guidelines for the Holidayseva design system.';
$activePage      = 'colors'; // used by left_sidebar to mark the active link
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($pageTitle) ?> — Design Guidelines · Holidayseva</title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>" />
  <link rel="stylesheet" href="https://holidayseva.com/UI/Foundation/colors.css" />

  <!-- SF Pro via Apple CDN (falls back to system-ui) -->
  <style>
    /* ── Reset & base ──────────────────────────────────────────────────────── */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    html { font-size: 16px; scroll-behavior: smooth; }

    body {
      font-family: -apple-system, BlinkMacSystemFont, "SF Pro Text", "Helvetica Neue", Arial, sans-serif;
      background: var(--color-bg);
      color: var(--color-text-primary);
      -webkit-font-smoothing: antialiased;
      min-height: 100vh;
    }

    /* ── Shell layout ──────────────────────────────────────────────────────── */
    .shell {
      display: grid;
      grid-template-columns: 260px 1fr 220px;
      grid-template-rows: auto 1fr;
      grid-template-areas:
        "topbar topbar topbar"
        "left   main   right";
      min-height: 100vh;
    }

    /* ── Top bar ───────────────────────────────────────────────────────────── */
    .topbar {
      grid-area: topbar;
      height: 52px;
      background: var(--color-surface-overlay);
      border-bottom: 1px solid var(--color-border);
      backdrop-filter: saturate(180%) blur(20px);
      -webkit-backdrop-filter: saturate(180%) blur(20px);
      position: sticky;
      top: 0;
      z-index: 100;
      display: flex;
      align-items: center;
      padding: 0 24px;
      gap: 0;
    }

    .topbar-brand {
      display: flex;
      align-items: center;
      gap: 10px;
      text-decoration: none;
      margin-right: auto;
    }

    .topbar-logo {
      width: 26px;
      height: 26px;
      background: var(--color-primary);
      border-radius: 7px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .topbar-logo svg { color: #fff; }

    .topbar-wordmark {
      font-size: 14px;
      font-weight: 600;
      color: var(--color-text-primary);
      letter-spacing: -0.02em;
    }

    .topbar-sep {
      width: 1px;
      height: 18px;
      background: var(--color-border);
      margin: 0 14px;
    }

    .topbar-section {
      font-size: 13px;
      color: var(--color-text-secondary);
      letter-spacing: -0.01em;
    }

    /* ── Sidebars ──────────────────────────────────────────────────────────── */
    .sidebar-left {
      grid-area: left;
      border-right: 1px solid var(--color-border);
      position: sticky;
      top: 52px;
      height: calc(100vh - 52px);
      overflow-y: auto;
      padding: 20px 0;
      scrollbar-width: thin;
      scrollbar-color: var(--color-muted-dark) transparent;
    }

    .sidebar-right {
      grid-area: right;
      border-left: 1px solid var(--color-border);
      position: sticky;
      top: 52px;
      height: calc(100vh - 52px);
      overflow-y: auto;
      padding: 0;
      scrollbar-width: thin;
      scrollbar-color: var(--color-muted-dark) transparent;
    }

    /* ── Main content ──────────────────────────────────────────────────────── */
    .main-content {
      grid-area: main;
      padding: 52px 60px 80px 60px;
      max-width: 860px;
    }

    /* ── Section spacing ───────────────────────────────────────────────────── */
    section { padding-top: 16px; }
    section + section { margin-top: 60px; }

    /* ── Typography ────────────────────────────────────────────────────────── */
    .page-eyebrow {
      font-size: 12px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: var(--color-primary);
      margin-bottom: 10px;
    }

    .page-title {
      font-size: 40px;
      font-weight: 700;
      letter-spacing: -0.03em;
      color: var(--color-text-primary);
      line-height: 1.1;
      margin-bottom: 18px;
    }

    .page-intro {
      font-size: 17px;
      line-height: 1.65;
      color: var(--color-text-secondary);
      max-width: 620px;
      margin-bottom: 0;
    }

    .section-title {
      font-size: 22px;
      font-weight: 700;
      letter-spacing: -0.022em;
      color: var(--color-text-primary);
      margin-bottom: 6px;
    }

    .section-subtitle {
      font-size: 15px;
      color: var(--color-text-secondary);
      line-height: 1.6;
      margin-bottom: 28px;
      max-width: 580px;
    }

    /* ── Divider ───────────────────────────────────────────────────────────── */
    .page-divider {
      border: none;
      border-top: 1px solid var(--color-border);
      margin: 40px 0 0 0;
    }

    /* ── Overview banner ───────────────────────────────────────────────────── */
    .overview-banner {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 2px;
      border-radius: 14px;
      overflow: hidden;
      margin-top: 36px;
      border: 1px solid var(--color-border);
    }

    .overview-swatch {
      padding: 28px 26px;
      display: flex;
      flex-direction: column;
      gap: 6px;
    }

    .overview-swatch-name {
      font-size: 12px;
      font-weight: 600;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      opacity: 0.7;
    }

    .overview-swatch-hex {
      font-size: 19px;
      font-weight: 700;
      letter-spacing: -0.01em;
      font-variant-numeric: tabular-nums;
    }

    .overview-swatch-desc {
      font-size: 12px;
      opacity: 0.6;
      margin-top: 2px;
    }

    /* ── Token grid ────────────────────────────────────────────────────────── */
    .token-group {
      margin-bottom: 40px;
    }

    .token-group-label {
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.07em;
      color: var(--color-text-muted);
      margin-bottom: 12px;
      padding-bottom: 8px;
      border-bottom: 1px solid var(--color-muted);
    }

    .token-table {
      width: 100%;
      border-collapse: collapse;
      border: 1px solid var(--color-border);
      border-radius: 10px;
      overflow: hidden;
    }

    .token-table thead th {
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      color: var(--color-text-muted);
      background: var(--color-surface-raised);
      padding: 10px 16px;
      text-align: left;
      border-bottom: 1px solid var(--color-border);
    }

    .token-table tbody tr {
      border-bottom: 1px solid var(--color-muted);
      transition: background 0.1s;
    }

    .token-table tbody tr:last-child { border-bottom: none; }
    .token-table tbody tr:hover { background: var(--color-bg-muted); }

    .token-table td {
      padding: 12px 16px;
      font-size: 13px;
      vertical-align: middle;
    }

    .token-cell {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .swatch {
      width: 28px;
      height: 28px;
      border-radius: 6px;
      flex-shrink: 0;
      border: 1px solid rgba(0,0,0,0.08);
    }

    .token-name {
      font-family: "SF Mono", "Fira Code", "Fira Mono", Menlo, monospace;
      font-size: 12.5px;
      color: var(--color-accent-dark);
      background: rgba(0, 166, 153, 0.08);
      padding: 2px 7px;
      border-radius: 4px;
    }

    .token-hex {
      font-family: "SF Mono", "Fira Code", "Fira Mono", Menlo, monospace;
      font-size: 12px;
      color: var(--color-text-secondary);
    }

    .token-desc {
      font-size: 13px;
      color: var(--color-text-secondary);
      line-height: 1.5;
    }

    /* ── Usage examples ────────────────────────────────────────────────────── */
    .usage-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 16px;
      margin-top: 4px;
    }

    .usage-card {
      border: 1px solid var(--color-border);
      border-radius: 12px;
      overflow: hidden;
      transition: box-shadow 0.15s;
    }

    .usage-card:hover { box-shadow: 0 4px 16px rgba(0,0,0,0.08); }

    .usage-card-preview {
      height: 100px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      padding: 20px;
    }

    .usage-card-label {
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      color: var(--color-text-muted);
      padding: 10px 14px;
      border-top: 1px solid var(--color-border);
      background: var(--color-surface-raised);
    }

    /* Preview: buttons */
    .prev-btn-primary {
      background: var(--color-primary);
      color: #fff;
      font-size: 13px;
      font-weight: 600;
      padding: 8px 18px;
      border-radius: 8px;
      border: none;
      cursor: default;
      font-family: inherit;
    }

    .prev-btn-secondary {
      background: transparent;
      color: var(--color-secondary);
      font-size: 13px;
      font-weight: 600;
      padding: 8px 18px;
      border-radius: 8px;
      border: 1.5px solid var(--color-secondary);
      cursor: default;
      font-family: inherit;
    }

    /* Preview: text */
    .prev-text-stack { display: flex; flex-direction: column; gap: 4px; align-items: flex-start; }
    .prev-text-h { font-size: 14px; font-weight: 700; color: var(--color-text-primary); }
    .prev-text-b { font-size: 12px; color: var(--color-text-secondary); }
    .prev-text-m { font-size: 11px; color: var(--color-text-muted); }

    /* Preview: status */
    .prev-badge {
      font-size: 11px;
      font-weight: 600;
      padding: 3px 10px;
      border-radius: 20px;
    }

    .prev-badge-success { background: rgba(0,138,5,0.1); color: var(--color-success); }
    .prev-badge-warning { background: rgba(196,85,8,0.1); color: var(--color-warning); }
    .prev-badge-error   { background: rgba(193,53,21,0.1); color: var(--color-error); }

    /* Preview: bg */
    .prev-bg-surface  { width: 38px; height: 38px; border-radius: 8px; background: var(--color-surface); border: 1px solid var(--color-border); }
    .prev-bg-raised   { width: 38px; height: 38px; border-radius: 8px; background: var(--color-surface-raised); border: 1px solid var(--color-border); }
    .prev-bg-dark     { width: 38px; height: 38px; border-radius: 8px; background: var(--color-bg-dark); }
    .prev-bg-muted    { width: 38px; height: 38px; border-radius: 8px; background: var(--color-bg-muted); border: 1px solid var(--color-border); }

    /* Preview: interactive */
    .prev-interactive { display: flex; flex-direction: column; gap: 6px; width: 100%; }
    .prev-focus-ring {
      font-size: 12px;
      padding: 6px 10px;
      border-radius: 6px;
      border: 1.5px solid var(--color-border-focus);
      box-shadow: var(--focus-ring);
      font-family: inherit;
      outline: none;
      background: var(--color-surface);
      color: var(--color-text-primary);
      width: 100%;
    }
    .prev-ghost-btn {
      font-size: 12px;
      padding: 6px 10px;
      border-radius: 6px;
      border: none;
      background: var(--color-ghost-hover-bg);
      color: var(--color-text-primary);
      font-family: inherit;
      cursor: default;
    }

    /* ── Palette showcase ──────────────────────────────────────────────────── */
    .palette-row {
      display: flex;
      gap: 0;
      border-radius: 12px;
      overflow: hidden;
      border: 1px solid var(--color-border);
      margin-bottom: 12px;
    }

    .palette-swatch {
      flex: 1;
      height: 72px;
      position: relative;
      cursor: default;
      transition: flex 0.2s ease;
    }

    .palette-swatch:hover { flex: 1.6; }

    .palette-swatch-label {
      position: absolute;
      bottom: 8px;
      left: 10px;
      font-size: 10px;
      font-weight: 600;
      letter-spacing: 0.03em;
      opacity: 0;
      transition: opacity 0.15s;
      white-space: nowrap;
    }

    .palette-swatch:hover .palette-swatch-label { opacity: 1; }

    /* ── Accessibility table ───────────────────────────────────────────────── */
    .a11y-table {
      width: 100%;
      border-collapse: collapse;
      border: 1px solid var(--color-border);
      border-radius: 10px;
      overflow: hidden;
    }

    .a11y-table thead th {
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      color: var(--color-text-muted);
      background: var(--color-surface-raised);
      padding: 10px 16px;
      text-align: left;
      border-bottom: 1px solid var(--color-border);
    }

    .a11y-table tbody tr {
      border-bottom: 1px solid var(--color-muted);
    }

    .a11y-table tbody tr:last-child { border-bottom: none; }

    .a11y-table td {
      padding: 13px 16px;
      font-size: 13px;
      vertical-align: middle;
    }

    .a11y-pair {
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }

    .a11y-dot-bg {
      width: 28px;
      height: 28px;
      border-radius: 6px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 11px;
      font-weight: 700;
    }

    .ratio-pass-aaa { color: var(--color-success); font-weight: 700; }
    .ratio-pass-aa  { color: var(--color-info); font-weight: 700; }
    .ratio-fail     { color: var(--color-error); font-weight: 700; }

    .ratio-badge {
      display: inline-block;
      font-size: 10px;
      font-weight: 700;
      padding: 2px 6px;
      border-radius: 4px;
      letter-spacing: 0.04em;
    }

    .ratio-badge-aaa { background: rgba(0,138,5,.1); color: var(--color-success); }
    .ratio-badge-aa  { background: rgba(0,122,184,.1); color: var(--color-info); }
    .ratio-badge-fail{ background: rgba(193,53,21,.1); color: var(--color-error); }

    /* ── Do / Don't ────────────────────────────────────────────────────────── */
    .do-dont-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }

    .do-card, .dont-card {
      border-radius: 12px;
      overflow: hidden;
      border: 1px solid var(--color-border);
    }

    .do-card-header, .dont-card-header {
      padding: 10px 16px;
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      display: flex;
      align-items: center;
      gap: 7px;
    }

    .do-card-header   { background: rgba(0,138,5,.08); color: var(--color-success); border-bottom: 1px solid rgba(0,138,5,.12); }
    .dont-card-header { background: rgba(193,53,21,.08); color: var(--color-error); border-bottom: 1px solid rgba(193,53,21,.12); }

    .do-card-body, .dont-card-body {
      padding: 20px 18px;
    }

    .do-card-body p, .dont-card-body p {
      font-size: 13.5px;
      color: var(--color-text-secondary);
      line-height: 1.6;
    }

    .do-example, .dont-example {
      margin-top: 14px;
      border-radius: 8px;
      padding: 14px 16px;
      font-size: 13px;
    }

    .do-example   { background: var(--color-bg-muted); }
    .dont-example { background: var(--color-bg-muted); }

    /* ── Code block ────────────────────────────────────────────────────────── */
    .code-block {
      background: #1A1A1A;
      border-radius: 12px;
      padding: 24px 28px;
      margin-top: 4px;
      overflow-x: auto;
    }

    .code-block pre {
      font-family: "SF Mono", "Fira Code", Menlo, monospace;
      font-size: 13px;
      line-height: 1.8;
      color: #e0e0e0;
      margin: 0;
    }

    .code-comment { color: #6e7681; }
    .code-prop    { color: #79c0ff; }
    .code-val     { color: #a5d6ff; }
    .code-string  { color: #a8d8a8; }
    .code-fn      { color: #d2a8ff; }

    /* ── Copy pill ─────────────────────────────────────────────────────────── */
    .code-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 14px;
    }

    .code-lang {
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      color: #6e7681;
    }

    .copy-btn {
      font-size: 11px;
      font-weight: 600;
      color: #6e7681;
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.1);
      padding: 4px 10px;
      border-radius: 6px;
      cursor: pointer;
      font-family: inherit;
      transition: background 0.1s, color 0.1s;
    }

    .copy-btn:hover { background: rgba(255,255,255,0.12); color: #e0e0e0; }

    /* ── Tip callout ───────────────────────────────────────────────────────── */
    .tip {
      background: var(--color-primary-alpha);
      border-left: 3px solid var(--color-primary);
      border-radius: 0 8px 8px 0;
      padding: 14px 18px;
      font-size: 13.5px;
      color: var(--color-text-primary);
      line-height: 1.6;
      margin-top: 20px;
    }

    .tip strong { color: var(--color-primary-dark); }

    /* ── Mobile ────────────────────────────────────────────────────────────── */
    @media (max-width: 1100px) {
      .shell { grid-template-columns: 240px 1fr; grid-template-areas: "topbar topbar" "left main"; }
      .sidebar-right { display: none; }
      .main-content { padding: 40px 36px 60px 36px; }
    }

    @media (max-width: 720px) {
      .shell { grid-template-columns: 1fr; grid-template-areas: "topbar" "main"; }
      .sidebar-left { display: none; }
      .usage-grid { grid-template-columns: 1fr 1fr; }
      .do-dont-grid { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>
<div class="shell">

  <!-- ── Top bar ─────────────────────────────────────────────────────────── -->
  <header class="topbar">
    <a class="topbar-brand" href="/">
      <div class="topbar-logo">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
          <path d="M7 1.5C7 1.5 3 4 3 7.5C3 9.985 4.79 12 7 12C9.21 12 11 9.985 11 7.5C11 4 7 1.5 7 1.5Z" fill="white"/>
        </svg>
      </div>
      <span class="topbar-wordmark">Holidayseva</span>
    </a>
    <div class="topbar-sep"></div>
    <span class="topbar-section">Design Guidelines</span>
  </header>

  <!-- ── Left sidebar ────────────────────────────────────────────────────── -->
  <?php
$partials = __DIR__ . '/../../';
?>

<?php include $partials . 'header.php'; ?>
<?php include $partials . 'drawer_sidebar.php'; ?>

<div class="page-layout">

  <nav class="sidebar-left">
  <?php include $partials . 'left_sidebar.php'; ?>
  </nav>

  <!-- ── Main content ────────────────────────────────────────────────────── -->
  <main class="main-content">

    <!-- ══ OVERVIEW ══════════════════════════════════════════════════════════ -->
    <section id="overview">
      <p class="page-eyebrow">Foundations</p>
      <h1 class="page-title">Colors</h1>
      <p class="page-intro">
        The Holidayseva color system is built on a structured set of design tokens.
        Every color in the UI is sourced from these tokens — ensuring visual consistency,
        dark-mode readiness, and WCAG-compliant contrast across all surfaces.
      </p>

      <!-- Overview banner: 4 hero swatches -->
      <div class="overview-banner">
        <div class="overview-swatch" style="background:var(--color-primary); color:#fff;">
          <span class="overview-swatch-name">Primary</span>
          <span class="overview-swatch-hex">#FF385C</span>
          <span class="overview-swatch-desc">Brand coral-red. CTAs &amp; highlights.</span>
        </div>
        <div class="overview-swatch" style="background:var(--color-secondary); color:#fff;">
          <span class="overview-swatch-name">Secondary</span>
          <span class="overview-swatch-hex">#222222</span>
          <span class="overview-swatch-desc">Near-black. Headings &amp; body.</span>
        </div>
        <div class="overview-swatch" style="background:var(--color-accent); color:#fff;">
          <span class="overview-swatch-name">Accent</span>
          <span class="overview-swatch-hex">#00A699</span>
          <span class="overview-swatch-desc">Teal-green. Links &amp; confirmations.</span>
        </div>
        <div class="overview-swatch" style="background:var(--color-surface-raised); color:var(--color-text-primary); border-top:1px solid var(--color-border); border-right:1px solid var(--color-border);">
          <span class="overview-swatch-name">Surface</span>
          <span class="overview-swatch-hex">#F7F7F7</span>
          <span class="overview-swatch-desc">Raised background. Cards &amp; inputs.</span>
        </div>
      </div>
    </section>

    <!-- ══ ANATOMY (palette) ═════════════════════════════════════════════════ -->
    <hr class="page-divider" />
    <section id="anatomy">
      <h2 class="section-title">Full Palette</h2>
      <p class="section-subtitle">Hover any swatch to reveal its label. Each bar represents a stop in the ramp.</p>

      <!-- Primary ramp -->
      <div class="palette-row">
        <div class="palette-swatch" style="background:#FFB3BF;"><span class="palette-swatch-label" style="color:#222">+alpha</span></div>
        <div class="palette-swatch" style="background:var(--color-primary-light);"><span class="palette-swatch-label" style="color:#fff">light</span></div>
        <div class="palette-swatch" style="background:var(--color-primary);"><span class="palette-swatch-label" style="color:#fff">primary</span></div>
        <div class="palette-swatch" style="background:var(--color-primary-hover);"><span class="palette-swatch-label" style="color:#fff">hover</span></div>
        <div class="palette-swatch" style="background:var(--color-primary-pressed);"><span class="palette-swatch-label" style="color:#fff">pressed</span></div>
        <div class="palette-swatch" style="background:var(--color-primary-dark);"><span class="palette-swatch-label" style="color:#fff">dark</span></div>
      </div>

      <!-- Accent ramp -->
      <div class="palette-row">
        <div class="palette-swatch" style="background:var(--color-accent-light);"><span class="palette-swatch-label" style="color:#fff">accent-light</span></div>
        <div class="palette-swatch" style="background:var(--color-accent);"><span class="palette-swatch-label" style="color:#fff">accent</span></div>
        <div class="palette-swatch" style="background:var(--color-accent-dark);"><span class="palette-swatch-label" style="color:#fff">accent-dark</span></div>
      </div>

      <!-- Neutral ramp -->
      <div class="palette-row">
        <div class="palette-swatch" style="background:#FFFFFF; border:1px solid #eee;"><span class="palette-swatch-label" style="color:#222">surface</span></div>
        <div class="palette-swatch" style="background:var(--color-surface-raised);"><span class="palette-swatch-label" style="color:#222">raised</span></div>
        <div class="palette-swatch" style="background:var(--color-muted);"><span class="palette-swatch-label" style="color:#222">muted</span></div>
        <div class="palette-swatch" style="background:var(--color-muted-dark);"><span class="palette-swatch-label" style="color:#222">muted-dark</span></div>
        <div class="palette-swatch" style="background:var(--color-text-muted);"><span class="palette-swatch-label" style="color:#fff">text-muted</span></div>
        <div class="palette-swatch" style="background:var(--color-text-secondary);"><span class="palette-swatch-label" style="color:#fff">text-sec</span></div>
        <div class="palette-swatch" style="background:var(--color-secondary-muted);"><span class="palette-swatch-label" style="color:#fff">sec-muted</span></div>
        <div class="palette-swatch" style="background:var(--color-secondary);"><span class="palette-swatch-label" style="color:#fff">secondary</span></div>
        <div class="palette-swatch" style="background:var(--color-bg-dark);"><span class="palette-swatch-label" style="color:#fff">bg-dark</span></div>
      </div>

      <!-- Semantic ramp -->
      <div class="palette-row">
        <div class="palette-swatch" style="background:var(--color-success);"><span class="palette-swatch-label" style="color:#fff">success</span></div>
        <div class="palette-swatch" style="background:var(--color-warning);"><span class="palette-swatch-label" style="color:#fff">warning</span></div>
        <div class="palette-swatch" style="background:var(--color-error);"><span class="palette-swatch-label" style="color:#fff">error</span></div>
        <div class="palette-swatch" style="background:var(--color-info);"><span class="palette-swatch-label" style="color:#fff">info</span></div>
      </div>
    </section>

    <!-- ══ SPECIFICATIONS ════════════════════════════════════════════════════ -->
    <hr class="page-divider" />
    <section id="specs">
      <h2 class="section-title">Token Specifications</h2>
      <p class="section-subtitle">All tokens are defined as CSS custom properties on <code>:root</code> in <code>colors.css</code>.</p>

      <!-- Brand -->
      <div class="token-group">
        <p class="token-group-label">Brand</p>
        <table class="token-table">
          <thead>
            <tr><th>Token</th><th>Value</th><th>Usage</th></tr>
          </thead>
          <tbody>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#FF385C;"></div><code class="token-name">--color-primary</code></div></td>
              <td><span class="token-hex">#FF385C</span></td>
              <td class="token-desc">Primary actions, CTA buttons, active states</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#FF5A76;"></div><code class="token-name">--color-primary-light</code></div></td>
              <td><span class="token-hex">#FF5A76</span></td>
              <td class="token-desc">Hover tint on primary surfaces</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#D93B55;"></div><code class="token-name">--color-primary-dark</code></div></td>
              <td><span class="token-hex">#D93B55</span></td>
              <td class="token-desc">Pressed / active deep tone</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:rgba(255,56,92,0.12); border:1px dashed #ccc;"></div><code class="token-name">--color-primary-alpha</code></div></td>
              <td><span class="token-hex">rgba(255,56,92,.12)</span></td>
              <td class="token-desc">Tinted background chips, callouts</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#E8314F;"></div><code class="token-name">--color-primary-hover</code></div></td>
              <td><span class="token-hex">#E8314F</span></td>
              <td class="token-desc">Button hover state</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#CC2B47;"></div><code class="token-name">--color-primary-pressed</code></div></td>
              <td><span class="token-hex">#CC2B47</span></td>
              <td class="token-desc">Button pressed / active state</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#222222;"></div><code class="token-name">--color-secondary</code></div></td>
              <td><span class="token-hex">#222222</span></td>
              <td class="token-desc">Secondary UI elements, outlined buttons</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#484848;"></div><code class="token-name">--color-secondary-muted</code></div></td>
              <td><span class="token-hex">#484848</span></td>
              <td class="token-desc">Subdued secondary labels</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#00A699;"></div><code class="token-name">--color-accent</code></div></td>
              <td><span class="token-hex">#00A699</span></td>
              <td class="token-desc">Success accents, link highlights, confirmations</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#00BDB2;"></div><code class="token-name">--color-accent-light</code></div></td>
              <td><span class="token-hex">#00BDB2</span></td>
              <td class="token-desc">Accent hover / tint</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#008C81;"></div><code class="token-name">--color-accent-dark</code></div></td>
              <td><span class="token-hex">#008C81</span></td>
              <td class="token-desc">Accent pressed / deep</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Text -->
      <div class="token-group">
        <p class="token-group-label">Text</p>
        <table class="token-table">
          <thead><tr><th>Token</th><th>Value</th><th>Usage</th></tr></thead>
          <tbody>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#222222;"></div><code class="token-name">--color-text-primary</code></div></td>
              <td><span class="token-hex">#222222</span></td>
              <td class="token-desc">Headings, body copy, labels</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#717171;"></div><code class="token-name">--color-text-secondary</code></div></td>
              <td><span class="token-hex">#717171</span></td>
              <td class="token-desc">Captions, metadata, placeholder</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#B0B0B0;"></div><code class="token-name">--color-text-muted</code></div></td>
              <td><span class="token-hex">#B0B0B0</span></td>
              <td class="token-desc">Disabled labels, decorative text</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#FFFFFF; border:1px solid #ccc;"></div><code class="token-name">--color-text-inverse</code></div></td>
              <td><span class="token-hex">#FFFFFF</span></td>
              <td class="token-desc">Text on dark / primary backgrounds</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#222222;"></div><code class="token-name">--color-text-link</code></div></td>
              <td><span class="token-hex">#222222</span></td>
              <td class="token-desc">Inline hyperlinks (underlined)</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#B0B0B0;"></div><code class="token-name">--color-text-disabled</code></div></td>
              <td><span class="token-hex">#B0B0B0</span></td>
              <td class="token-desc">Disabled form fields &amp; buttons</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Surface & Background -->
      <div class="token-group">
        <p class="token-group-label">Surface &amp; Background</p>
        <table class="token-table">
          <thead><tr><th>Token</th><th>Value</th><th>Usage</th></tr></thead>
          <tbody>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#FFFFFF; border:1px solid #eee;"></div><code class="token-name">--color-surface</code></div></td>
              <td><span class="token-hex">#FFFFFF</span></td>
              <td class="token-desc">Modal, card, popover surfaces</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#F7F7F7; border:1px solid #eee;"></div><code class="token-name">--color-surface-raised</code></div></td>
              <td><span class="token-hex">#F7F7F7</span></td>
              <td class="token-desc">Elevated cards, sidebars</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:rgba(255,255,255,0.95); border:1px dashed #ccc;"></div><code class="token-name">--color-surface-overlay</code></div></td>
              <td><span class="token-hex">rgba(255,255,255,.95)</span></td>
              <td class="token-desc">Frosted-glass nav bars</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#FFFFFF; border:1px solid #eee;"></div><code class="token-name">--color-bg</code></div></td>
              <td><span class="token-hex">#FFFFFF</span></td>
              <td class="token-desc">Page background</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#F7F7F7; border:1px solid #eee;"></div><code class="token-name">--color-bg-muted</code></div></td>
              <td><span class="token-hex">#F7F7F7</span></td>
              <td class="token-desc">Alternate row, subtle section bg</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#1A1A1A;"></div><code class="token-name">--color-bg-dark</code></div></td>
              <td><span class="token-hex">#1A1A1A</span></td>
              <td class="token-desc">Dark section, code block bg</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#F5F5F5; border:1px solid #eee;"></div><code class="token-name">--color-surface-disabled</code></div></td>
              <td><span class="token-hex">#F5F5F5</span></td>
              <td class="token-desc">Disabled input / button fill</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Border -->
      <div class="token-group">
        <p class="token-group-label">Border</p>
        <table class="token-table">
          <thead><tr><th>Token</th><th>Value</th><th>Usage</th></tr></thead>
          <tbody>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#DDDDDD;"></div><code class="token-name">--color-border</code></div></td>
              <td><span class="token-hex">#DDDDDD</span></td>
              <td class="token-desc">Default dividers, card outlines</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#B0B0B0;"></div><code class="token-name">--color-border-dark</code></div></td>
              <td><span class="token-hex">#B0B0B0</span></td>
              <td class="token-desc">Emphasized borders, input stroke</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#222222;"></div><code class="token-name">--color-border-focus</code></div></td>
              <td><span class="token-hex">#222222</span></td>
              <td class="token-desc">Focused input / interactive ring</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#E0E0E0;"></div><code class="token-name">--color-border-disabled</code></div></td>
              <td><span class="token-hex">#E0E0E0</span></td>
              <td class="token-desc">Disabled field borders</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#EBEBEB;"></div><code class="token-name">--color-muted</code></div></td>
              <td><span class="token-hex">#EBEBEB</span></td>
              <td class="token-desc">Light separators, hairlines</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#DDDDDD;"></div><code class="token-name">--color-muted-dark</code></div></td>
              <td><span class="token-hex">#DDDDDD</span></td>
              <td class="token-desc">Medium separators</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Semantic -->
      <div class="token-group">
        <p class="token-group-label">Semantic &amp; Feedback</p>
        <table class="token-table">
          <thead><tr><th>Token</th><th>Value</th><th>Usage</th></tr></thead>
          <tbody>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#008A05;"></div><code class="token-name">--color-success</code></div></td>
              <td><span class="token-hex">#008A05</span></td>
              <td class="token-desc">Confirmations, success messages</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#C45508;"></div><code class="token-name">--color-warning</code></div></td>
              <td><span class="token-hex">#C45508</span></td>
              <td class="token-desc">Warnings, caution alerts</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#C13515;"></div><code class="token-name">--color-error</code></div></td>
              <td><span class="token-hex">#C13515</span></td>
              <td class="token-desc">Errors, destructive actions</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#007AB8;"></div><code class="token-name">--color-info</code></div></td>
              <td><span class="token-hex">#007AB8</span></td>
              <td class="token-desc">Informational banners, tooltips</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#FF385C;"></div><code class="token-name">--color-star</code></div></td>
              <td><span class="token-hex">#FF385C</span></td>
              <td class="token-desc">Ratings, star / review icons</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:#C13515;"></div><code class="token-name">--color-danger</code></div></td>
              <td><span class="token-hex">#C13515</span></td>
              <td class="token-desc">Delete, remove, destructive buttons</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Overlay & Ghost -->
      <div class="token-group">
        <p class="token-group-label">Overlay, Ghost &amp; Focus</p>
        <table class="token-table">
          <thead><tr><th>Token</th><th>Value</th><th>Usage</th></tr></thead>
          <tbody>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:rgba(0,0,0,0.5);"></div><code class="token-name">--color-overlay</code></div></td>
              <td><span class="token-hex">rgba(0,0,0,.5)</span></td>
              <td class="token-desc">Modal backdrop scrim</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:rgba(0,0,0,0.15);"></div><code class="token-name">--color-overlay-light</code></div></td>
              <td><span class="token-hex">rgba(0,0,0,.15)</span></td>
              <td class="token-desc">Soft image overlay, card hover</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:rgba(34,34,34,0.06); border:1px solid #eee;"></div><code class="token-name">--color-ghost-hover-bg</code></div></td>
              <td><span class="token-hex">rgba(34,34,34,.06)</span></td>
              <td class="token-desc">Ghost button hover fill</td>
            </tr>
            <tr>
              <td><div class="token-cell"><div class="swatch" style="background:rgba(34,34,34,0.10); border:1px solid #eee;"></div><code class="token-name">--color-ghost-pressed-bg</code></div></td>
              <td><span class="token-hex">rgba(34,34,34,.10)</span></td>
              <td class="token-desc">Ghost button pressed fill</td>
            </tr>
          </tbody>
        </table>
      </div>

    </section>

    <!-- ══ HTML USAGE ══════════════════════════════════════════════════════════ -->
    <hr class="page-divider" />
    <section id="usage">
      <h2 class="section-title">Usage in Practice</h2>
      <p class="section-subtitle">Common patterns showing how color tokens map to real UI components.</p>

      <div class="usage-grid">

        <!-- Buttons -->
        <div class="usage-card">
          <div class="usage-card-preview" style="background:var(--color-bg-muted);">
            <button class="prev-btn-primary">Book Now</button>
            <button class="prev-btn-secondary">Save</button>
          </div>
          <p class="usage-card-label">Buttons</p>
        </div>

        <!-- Typography -->
        <div class="usage-card">
          <div class="usage-card-preview" style="background:var(--color-bg-muted);">
            <div class="prev-text-stack">
              <span class="prev-text-h">Heading copy</span>
              <span class="prev-text-b">Body / caption text</span>
              <span class="prev-text-m">Muted / metadata text</span>
            </div>
          </div>
          <p class="usage-card-label">Typography</p>
        </div>

        <!-- Status badges -->
        <div class="usage-card">
          <div class="usage-card-preview" style="background:var(--color-bg-muted); flex-wrap:wrap; gap:8px;">
            <span class="prev-badge prev-badge-success">Confirmed</span>
            <span class="prev-badge prev-badge-warning">Pending</span>
            <span class="prev-badge prev-badge-error">Cancelled</span>
          </div>
          <p class="usage-card-label">Status Badges</p>
        </div>

        <!-- Surfaces -->
        <div class="usage-card">
          <div class="usage-card-preview" style="background:var(--color-secondary);">
            <div class="prev-bg-surface"></div>
            <div class="prev-bg-raised"></div>
            <div class="prev-bg-muted"></div>
            <div class="prev-bg-dark"></div>
          </div>
          <p class="usage-card-label">Surfaces</p>
        </div>

        <!-- Interactive / Focus -->
        <div class="usage-card">
          <div class="usage-card-preview" style="background:var(--color-bg-muted); flex-direction:column; width:100%; padding:16px;">
            <input class="prev-focus-ring" type="text" value="Focused input" readonly />
            <button class="prev-ghost-btn">Ghost button</button>
          </div>
          <p class="usage-card-label">Focus &amp; Ghost</p>
        </div>

        <!-- Accent -->
        <div class="usage-card">
          <div class="usage-card-preview" style="background:var(--color-bg-muted); flex-direction:column; gap:8px;">
            <span style="font-size:13px;color:var(--color-accent);font-weight:600;">✓ 3 nights — great price</span>
            <span style="font-size:13px;color:var(--color-accent-dark);text-decoration:underline;cursor:default;">See all reviews</span>
          </div>
          <p class="usage-card-label">Accent</p>
        </div>

      </div>

      <div class="tip">
        <strong>Tip:</strong> Always use design tokens — never hard-code hex values. This ensures your component automatically inherits future theme changes and dark-mode overrides.
      </div>
    </section>

    <!-- ══ JAVASCRIPT API ══════════════════════════════════════════════════════ -->
    <hr class="page-divider" />
    <section id="javascript">
      <h2 class="section-title">Using Tokens in JavaScript</h2>
      <p class="section-subtitle">Read resolved token values at runtime using <code>getComputedStyle</code>. Useful for canvas rendering or charting libraries.</p>

      <div class="code-block">
        <div class="code-header">
          <span class="code-lang">JavaScript</span>
          <button class="copy-btn" onclick="
            navigator.clipboard.writeText(this.closest('.code-block').querySelector('pre').innerText);
            this.textContent='Copied!';
            setTimeout(()=>this.textContent='Copy',1600);
          ">Copy</button>
        </div>
        <pre><span class="code-comment">// Read any CSS token at runtime</span>
<span class="code-fn">const</span> root = document.documentElement;
<span class="code-fn">const</span> get = <span class="code-prop">key</span> =>
  getComputedStyle(root).getPropertyValue(key).trim();

<span class="code-comment">// Examples</span>
<span class="code-fn">const</span> primary  = get(<span class="code-string">'--color-primary'</span>);   <span class="code-comment">// "#FF385C"</span>
<span class="code-fn">const</span> accent   = get(<span class="code-string">'--color-accent'</span>);    <span class="code-comment">// "#00A699"</span>
<span class="code-fn">const</span> textPrim = get(<span class="code-string">'--color-text-primary'</span>); <span class="code-comment">// "#222222"</span>

<span class="code-comment">// Use with Chart.js, canvas, or D3</span>
chart.data.datasets[0].backgroundColor = primary;
ctx.fillStyle = textPrim;</pre>
      </div>

      <div class="code-block" style="margin-top:16px;">
        <div class="code-header">
          <span class="code-lang">CSS — custom overrides</span>
          <button class="copy-btn" onclick="
            navigator.clipboard.writeText(this.closest('.code-block').querySelector('pre').innerText);
            this.textContent='Copied!';
            setTimeout(()=>this.textContent='Copy',1600);
          ">Copy</button>
        </div>
        <pre><span class="code-comment">/* Scoped override — partner white-label theme */</span>
<span class="code-prop">.theme-ocean</span> {
  <span class="code-val">--color-primary</span>:       #0077CC;
  <span class="code-val">--color-primary-hover</span>: #0066BB;
  <span class="code-val">--color-accent</span>:        #00BFD8;
}

<span class="code-comment">/* Dark-mode shell */</span>
<span class="code-prop">@media (prefers-color-scheme: dark)</span> {
  :root {
    <span class="code-val">--color-bg</span>:           #111111;
    <span class="code-val">--color-surface</span>:      #1C1C1E;
    <span class="code-val">--color-text-primary</span>: #F5F5F7;
    <span class="code-val">--color-border</span>:       #3A3A3C;
  }
}</pre>
      </div>
    </section>

    <!-- ══ INTEGRATION ════════════════════════════════════════════════════════ -->
    <hr class="page-divider" />
    <section id="integration">
      <h2 class="section-title">Integration</h2>
      <p class="section-subtitle">Reference <code>colors.css</code> in every page by linking it in <code>&lt;head&gt;</code>. All component stylesheets must consume only token variables — never raw hex values.</p>

      <div class="code-block">
        <div class="code-header">
          <span class="code-lang">PHP / HTML — include pattern</span>
          <button class="copy-btn" onclick="
            navigator.clipboard.writeText(this.closest('.code-block').querySelector('pre').innerText);
            this.textContent='Copied!';
            setTimeout(()=>this.textContent='Copy',1600);
          ">Copy</button>
        </div>
        <pre><span class="code-comment">&lt;!-- In every page &lt;head&gt; --&gt;</span>
<span class="code-prop">&lt;link</span> rel=<span class="code-string">"stylesheet"</span> href=<span class="code-string">"/colors.css"</span> <span class="code-prop">/&gt;</span>

<span class="code-comment">&lt;!-- PHP layout skeleton --&gt;</span>
<span class="code-fn">&lt;?php</span> include __DIR__ . <span class="code-string">'/left_sidebar.php'</span>; <span class="code-fn">?&gt;</span>
<span class="code-fn">&lt;?php</span> include __DIR__ . <span class="code-string">'/right_sidebar.php'</span>; <span class="code-fn">?&gt;</span>

<span class="code-comment">/* Then in your component.css — tokens only */</span>
<span class="code-prop">.my-button</span> {
  background: <span class="code-val">var(--color-primary)</span>;
  color: <span class="code-val">var(--color-text-inverse)</span>;
  border: none;
}</pre>
      </div>
    </section>

    <!-- ══ ACCESSIBILITY ══════════════════════════════════════════════════════ -->
    <hr class="page-divider" />
    <section id="accessibility">
      <h2 class="section-title">Accessibility &amp; Contrast</h2>
      <p class="section-subtitle">All primary text pairings meet WCAG 2.1 AA (4.5:1 normal text, 3:1 large text). Key ratios are listed below.</p>

      <table class="a11y-table">
        <thead>
          <tr>
            <th>Foreground</th>
            <th>Background</th>
            <th>Ratio</th>
            <th>Level</th>
            <th>Use case</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="a11y-pair">
                <div class="a11y-dot-bg" style="background:#FF385C;color:#fff;">Aa</div>
                <span style="font-size:13px;color:var(--color-text-secondary);">#fff on Primary</span>
              </div>
            </td>
            <td><span class="token-hex">#FF385C</span></td>
            <td><strong>3.8:1</strong></td>
            <td><span class="ratio-badge ratio-badge-aa">AA Large</span></td>
            <td class="token-desc">Button labels (≥ 18px bold)</td>
          </tr>
          <tr>
            <td>
              <div class="a11y-pair">
                <div class="a11y-dot-bg" style="background:#222222;color:#fff;">Aa</div>
                <span style="font-size:13px;color:var(--color-text-secondary);">#fff on Secondary</span>
              </div>
            </td>
            <td><span class="token-hex">#222222</span></td>
            <td><strong>16.1:1</strong></td>
            <td><span class="ratio-badge ratio-badge-aaa">AAA</span></td>
            <td class="token-desc">Dark button labels, dark nav text</td>
          </tr>
          <tr>
            <td>
              <div class="a11y-pair">
                <div class="a11y-dot-bg" style="background:#fff;color:#222222;border:1px solid #ddd;">Aa</div>
                <span style="font-size:13px;color:var(--color-text-secondary);">Primary text on white</span>
              </div>
            </td>
            <td><span class="token-hex">#FFFFFF</span></td>
            <td><strong>16.1:1</strong></td>
            <td><span class="ratio-badge ratio-badge-aaa">AAA</span></td>
            <td class="token-desc">Body copy, headings</td>
          </tr>
          <tr>
            <td>
              <div class="a11y-pair">
                <div class="a11y-dot-bg" style="background:#fff;color:#717171;border:1px solid #ddd;">Aa</div>
                <span style="font-size:13px;color:var(--color-text-secondary);">Secondary text on white</span>
              </div>
            </td>
            <td><span class="token-hex">#FFFFFF</span></td>
            <td><strong>4.6:1</strong></td>
            <td><span class="ratio-badge ratio-badge-aa">AA</span></td>
            <td class="token-desc">Captions, metadata, dates</td>
          </tr>
          <tr>
            <td>
              <div class="a11y-pair">
                <div class="a11y-dot-bg" style="background:#fff;color:#00A699;border:1px solid #ddd;">Aa</div>
                <span style="font-size:13px;color:var(--color-text-secondary);">Accent on white</span>
              </div>
            </td>
            <td><span class="token-hex">#FFFFFF</span></td>
            <td><strong>4.5:1</strong></td>
            <td><span class="ratio-badge ratio-badge-aa">AA</span></td>
            <td class="token-desc">Inline links, confirmation text</td>
          </tr>
          <tr>
            <td>
              <div class="a11y-pair">
                <div class="a11y-dot-bg" style="background:#fff;color:#B0B0B0;border:1px solid #ddd;">Aa</div>
                <span style="font-size:13px;color:var(--color-text-secondary);">Muted text on white</span>
              </div>
            </td>
            <td><span class="token-hex">#FFFFFF</span></td>
            <td><strong>2.3:1</strong></td>
            <td><span class="ratio-badge ratio-badge-fail">Decorative only</span></td>
            <td class="token-desc">Disabled labels — not for readable content</td>
          </tr>
        </tbody>
      </table>

      <!-- Do / Don't -->
      <div class="do-dont-grid" style="margin-top:28px;">
        <div class="do-card">
          <div class="do-card-header">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7l3.5 3.5L12 4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            Do
          </div>
          <div class="do-card-body">
            <p>Use <code>--color-text-primary</code> on <code>--color-bg</code> or <code>--color-surface</code> for all readable body text. These pairs meet AAA contrast.</p>
            <div class="do-example" style="background:#fff; border:1px solid var(--color-border);">
              <p style="color:var(--color-text-primary); font-size:13px; font-weight:600;">Heading text — #222222</p>
              <p style="color:var(--color-text-secondary); font-size:12px; margin-top:4px;">Caption — #717171 meets AA</p>
            </div>
          </div>
        </div>

        <div class="dont-card">
          <div class="dont-card-header">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M3 3l8 8M11 3l-8 8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
            Don't
          </div>
          <div class="dont-card-body">
            <p>Don't use <code>--color-text-muted</code> for important content — it only passes at large decorative sizes and will fail for body copy.</p>
            <div class="dont-example" style="background:#fff; border:1px solid var(--color-border);">
              <p style="color:var(--color-text-muted); font-size:13px;">Body text in muted grey — fails AA ✗</p>
              <p style="color:var(--color-text-muted); font-size:12px; margin-top:4px;">Caption in muted — fails AA ✗</p>
            </div>
          </div>
        </div>
      </div>

    </section>

  </main>

  <!-- ── Right sidebar ────────────────────────────────────────────────────── -->
  <aside class="sidebar-right">
  <?php include $partials . '/right_sidebar.php'; ?>
  </aside>

</div><!-- .shell -->
</body>
</html>