<?php
/**
 * colours.php
 * Design Guidelines — Color System
 * developer.holidayseva.com
 *
 * Integrated with header.php, left_sidebar.php, and right_sidebar.php
 * All colors managed via colors.css CSS variables only
 */

$pageTitle       = 'Colors';
$pageDescription = 'Color tokens, semantic usage, and accessibility guidelines for the Holidayseva design system.';
$activePage      = 'colors';
$partials        = __DIR__ . '/../../';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Colors | Holidayseva</title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>" />

  <link rel="stylesheet" href="/design-system.css" />
  <link rel="stylesheet" href="https://holidayseva.com/design-system.css" />
  <link rel="stylesheet" href="https://holidayseva.com/UI/Foundation/colors.css" />

  <!-- SF Pro via Apple CDN (falls back to system-ui) -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />

  <style>
    /* ═══════════════════════════════════════════════
       BASE RESET
    ═══════════════════════════════════════════════ */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { font-size: 16px; scroll-behavior: smooth; }

    body {
      font-family: -apple-system, BlinkMacSystemFont, "SF Pro Text", "Helvetica Neue", Arial, sans-serif;
      background: var(--color-bg);
      color: var(--color-text-primary);
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      min-height: 100vh;
    }

    /* ═══════════════════════════════════════════════
       SHELL LAYOUT
    ═══════════════════════════════════════════════ */
    .shell {
      display: grid;
      grid-template-columns: 260px 1fr 220px;
      grid-template-areas: "left main right";
      min-height: calc(100vh - var(--header-h, 96px));
    }

    .sidebar-left {
      grid-area: left;
      border-right: 1px solid var(--color-border);
      position: sticky;
      top: var(--header-h, 96px);
      height: calc(100vh - var(--header-h, 96px));
      overflow-y: auto;
      padding: 20px 0;
      scrollbar-width: thin;
      scrollbar-color: var(--color-muted-dark) transparent;
    }

    .sidebar-right {
      grid-area: right;
      border-left: 1px solid var(--color-border);
      position: sticky;
      top: var(--header-h, 96px);
      height: calc(100vh - var(--header-h, 96px));
      overflow-y: auto;
      scrollbar-width: thin;
      scrollbar-color: var(--color-muted-dark) transparent;
    }

    .main-content {
      grid-area: main;
      padding: 64px 72px 120px 72px;
      max-width: 900px;
    }

    /* ═══════════════════════════════════════════════
       PAGE HEADER — Apple documentation style
    ═══════════════════════════════════════════════ */
    .page-hero {
      padding-bottom: 48px;
      border-bottom: 1px solid var(--color-border);
      margin-bottom: 0;
    }

    .breadcrumb {
      display: flex;
      align-items: center;
      gap: 6px;
      margin-bottom: 20px;
      font-size: 13px;
      color: var(--color-text-secondary);
      font-weight: 400;
      letter-spacing: -0.01em;
    }

    .breadcrumb a {
      color: var(--color-primary);
      text-decoration: none;
      transition: opacity 0.15s;
    }
    .breadcrumb a:hover { opacity: 0.7; }

    .breadcrumb-sep {
      color: var(--color-text-muted);
      font-size: 11px;
    }

    .page-title {
      font-size: 52px;
      font-weight: 700;
      letter-spacing: -0.04em;
      line-height: 1.04;
      color: var(--color-text-primary);
      margin-bottom: 20px;
    }

    .page-intro {
      font-size: 19px;
      line-height: 1.6;
      color: var(--color-text-secondary);
      max-width: 640px;
      font-weight: 400;
      letter-spacing: -0.01em;
    }

    /* ═══════════════════════════════════════════════
       IN-PAGE NAV TABS (Apple-style pill tabs)
    ═══════════════════════════════════════════════ */
    .tab-nav {
      display: flex;
      gap: 4px;
      margin: 36px 0 0 0;
      padding: 4px;
      background: var(--color-surface-raised);
      border-radius: 12px;
      width: fit-content;
      border: 1px solid var(--color-border);
    }

    .tab-btn {
      padding: 7px 16px;
      border-radius: 9px;
      border: none;
      background: transparent;
      font-family: inherit;
      font-size: 13px;
      font-weight: 500;
      color: var(--color-text-secondary);
      cursor: pointer;
      transition: all 0.18s ease;
      letter-spacing: -0.01em;
    }

    .tab-btn.active,
    .tab-btn:hover {
      background: var(--color-surface);
      color: var(--color-text-primary);
      box-shadow: 0 1px 3px rgba(0,0,0,0.10), 0 1px 1px rgba(0,0,0,0.06);
    }

    /* ═══════════════════════════════════════════════
       SECTIONS
    ═══════════════════════════════════════════════ */
    .doc-section {
      padding-top: 64px;
    }

    .section-label {
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.09em;
      color: var(--color-text-muted);
      margin-bottom: 10px;
    }

    .section-title {
      font-size: 32px;
      font-weight: 700;
      letter-spacing: -0.03em;
      color: var(--color-text-primary);
      margin-bottom: 10px;
      line-height: 1.1;
    }

    .section-body {
      font-size: 16px;
      line-height: 1.7;
      color: var(--color-text-secondary);
      max-width: 620px;
      letter-spacing: -0.005em;
    }

    .page-rule {
      border: none;
      border-top: 1px solid var(--color-border);
      margin: 0;
    }

    /* ═══════════════════════════════════════════════
       HERO COLOR SWATCH — large primary/accent strip
    ═══════════════════════════════════════════════ */
    .hero-swatches {
      display: grid;
      grid-template-columns: 1fr 1fr;
      margin-top: 40px;
      border-radius: 18px;
      overflow: hidden;
      border: 1px solid rgba(0,0,0,0.07);
      box-shadow: 0 2px 16px rgba(0,0,0,0.07), 0 1px 3px rgba(0,0,0,0.06);
    }

    .hero-swatch {
      padding: 40px 36px 36px 36px;
      position: relative;
      overflow: hidden;
      min-height: 180px;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
    }

    .hero-swatch::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(160deg, rgba(255,255,255,0.12) 0%, transparent 60%);
      pointer-events: none;
    }

    .hero-swatch-circle {
      position: absolute;
      top: -40px;
      right: -40px;
      width: 160px;
      height: 160px;
      border-radius: 50%;
      background: rgba(255,255,255,0.08);
      pointer-events: none;
    }

    .hero-swatch-label {
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color: rgba(255,255,255,0.65);
      margin-bottom: 6px;
    }

    .hero-swatch-hex {
      font-size: 26px;
      font-weight: 700;
      letter-spacing: -0.03em;
      color: #ffffff;
      margin-bottom: 2px;
      font-variant-numeric: tabular-nums;
    }

    .hero-swatch-rgb {
      font-size: 12px;
      color: rgba(255,255,255,0.55);
      font-family: 'Menlo', 'SF Mono', 'Monaco', monospace;
    }

    /* ═══════════════════════════════════════════════
       COLOR FAMILIES — Apple's grouped palette style
    ═══════════════════════════════════════════════ */
    .palette-stack {
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-top: 36px;
    }

    .palette-row {
      border: 1px solid var(--color-border);
      border-radius: 14px;
      overflow: hidden;
      background: var(--color-surface);
      transition: box-shadow 0.2s ease;
    }

    .palette-row:hover {
      box-shadow: 0 4px 20px rgba(0,0,0,0.07);
    }

    .palette-row-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 14px 18px;
      background: var(--color-surface-raised);
      border-bottom: 1px solid var(--color-border);
    }

    .palette-row-name {
      font-size: 13px;
      font-weight: 600;
      color: var(--color-text-primary);
      letter-spacing: -0.01em;
    }

    .palette-row-count {
      font-size: 11px;
      color: var(--color-text-muted);
      background: var(--color-muted);
      padding: 2px 8px;
      border-radius: 20px;
    }

    .palette-swatches {
      display: grid;
      grid-auto-flow: column;
      grid-auto-columns: 1fr;
    }

    .swatch-cell {
      position: relative;
      cursor: default;
      transition: filter 0.15s ease;
    }

    .swatch-cell:not(:last-child) {
      border-right: 1px solid rgba(255,255,255,0.15);
    }

    .swatch-cell:hover {
      filter: brightness(1.07);
      z-index: 1;
    }

    .swatch-color {
      height: 72px;
    }

    .swatch-meta {
      padding: 10px 12px;
      background: var(--color-surface);
      border-top: 1px solid var(--color-border);
    }

    .swatch-variant-name {
      font-size: 11px;
      font-weight: 600;
      color: var(--color-text-primary);
      text-transform: uppercase;
      letter-spacing: 0.05em;
      margin-bottom: 2px;
    }

    .swatch-hex {
      font-size: 11px;
      color: var(--color-text-secondary);
      font-family: 'Menlo', 'SF Mono', monospace;
    }

    /* ═══════════════════════════════════════════════
       SPECS TABLE — Apple documentation table style
    ═══════════════════════════════════════════════ */
    .specs-table-wrap {
      margin-top: 32px;
      border: 1px solid var(--color-border);
      border-radius: 14px;
      overflow: hidden;
    }

    .specs-table {
      width: 100%;
      border-collapse: collapse;
    }

    .specs-table thead tr {
      background: var(--color-surface-raised);
    }

    .specs-table th {
      padding: 13px 18px;
      text-align: left;
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: var(--color-text-secondary);
      border-bottom: 1px solid var(--color-border);
    }

    .specs-table td {
      padding: 14px 18px;
      font-size: 13.5px;
      color: var(--color-text-primary);
      border-bottom: 1px solid var(--color-muted);
      vertical-align: middle;
    }

    .specs-table tbody tr:last-child td { border-bottom: none; }

    .specs-table tbody tr:hover td {
      background: rgba(0,0,0,0.015);
    }

    .token-pill {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-family: 'Menlo', 'SF Mono', monospace;
      font-size: 12px;
      color: var(--color-primary);
      background: rgba(255, 56, 92, 0.07);
      border: 1px solid rgba(255, 56, 92, 0.15);
      padding: 3px 9px;
      border-radius: 6px;
      white-space: nowrap;
    }

    .swatch-dot {
      display: inline-block;
      width: 10px;
      height: 10px;
      border-radius: 50%;
      flex-shrink: 0;
      border: 1px solid rgba(0,0,0,0.08);
    }

    .mono {
      font-family: 'Menlo', 'SF Mono', monospace;
      font-size: 12.5px;
    }

    td.use-case-cell {
      color: var(--color-text-secondary);
      font-size: 13px;
    }

    /* ═══════════════════════════════════════════════
       CODE BLOCKS — Apple developer docs style
    ═══════════════════════════════════════════════ */
    .code-wrap {
      margin-top: 28px;
      border-radius: 14px;
      overflow: hidden;
      border: 1px solid var(--color-border);
      background: #1c1c1e;
    }

    .code-topbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 16px;
      background: #2c2c2e;
      border-bottom: 1px solid rgba(255,255,255,0.07);
    }

    .code-dots {
      display: flex;
      gap: 6px;
    }
    .code-dot {
      width: 12px;
      height: 12px;
      border-radius: 50%;
    }
    .dot-red    { background: #FF5F57; }
    .dot-yellow { background: #FFBD2E; }
    .dot-green  { background: #28C840; }

    .code-filename {
      font-size: 12px;
      color: rgba(255,255,255,0.45);
      font-family: 'Menlo','SF Mono',monospace;
      letter-spacing: 0.01em;
    }

    .copy-btn {
      background: rgba(255,255,255,0.1);
      border: 1px solid rgba(255,255,255,0.12);
      color: rgba(255,255,255,0.7);
      padding: 4px 12px;
      border-radius: 6px;
      font-size: 11px;
      font-weight: 500;
      cursor: pointer;
      font-family: inherit;
      transition: all 0.15s;
    }
    .copy-btn:hover {
      background: rgba(255,255,255,0.18);
      color: #fff;
    }

    .code-wrap pre {
      padding: 20px 20px 20px 20px;
      margin: 0;
      overflow-x: auto;
      font-family: 'Menlo', 'SF Mono', 'Monaco', monospace;
      font-size: 13px;
      line-height: 1.7;
      color: #f5f5f7;
      tab-size: 2;
    }

    /* Syntax highlighting */
    .c-comment { color: #7f8c8d; font-style: italic; }
    .c-prop     { color: #6bcaff; }
    .c-val      { color: #ff9f43; }
    .c-str      { color: #a8ff78; }
    .c-kw       { color: #cf9fff; font-weight: 600; }
    .c-tag      { color: #ff6b9d; }
    .c-attr     { color: #ffd176; }

    /* ═══════════════════════════════════════════════
       ACCESSIBILITY TABLE
    ═══════════════════════════════════════════════ */
    .a11y-wrap {
      margin-top: 32px;
      border: 1px solid var(--color-border);
      border-radius: 14px;
      overflow: hidden;
    }

    .a11y-table {
      width: 100%;
      border-collapse: collapse;
    }

    .a11y-table thead tr {
      background: var(--color-surface-raised);
    }

    .a11y-table th {
      padding: 13px 18px;
      text-align: left;
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: var(--color-text-secondary);
      border-bottom: 1px solid var(--color-border);
    }

    .a11y-table td {
      padding: 16px 18px;
      font-size: 13px;
      color: var(--color-text-primary);
      border-bottom: 1px solid var(--color-muted);
      vertical-align: middle;
    }

    .a11y-table tbody tr:last-child td { border-bottom: none; }
    .a11y-table tbody tr:hover td { background: rgba(0,0,0,0.015); }

    .a11y-preview {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .a11y-chip {
      width: 48px;
      height: 48px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 15px;
      font-weight: 700;
      flex-shrink: 0;
      letter-spacing: -0.03em;
    }

    .a11y-label {
      font-size: 13px;
      color: var(--color-text-secondary);
      line-height: 1.4;
    }

    .a11y-label strong {
      display: block;
      color: var(--color-text-primary);
      font-weight: 600;
      margin-bottom: 1px;
    }

    .badge {
      display: inline-block;
      padding: 3px 9px;
      border-radius: 20px;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.04em;
      text-transform: uppercase;
    }

    .badge-aaa { background: rgba(0,138,5,0.10); color: #008A05; }
    .badge-aa  { background: rgba(0,166,153,0.10); color: #00A699; }
    .badge-lg  { background: rgba(196,85,8,0.10); color: #C45508; }
    .badge-fail{ background: rgba(193,53,21,0.10); color: #C13515; }

    .ratio-val {
      font-size: 14px;
      font-weight: 700;
      color: var(--color-text-primary);
      font-variant-numeric: tabular-nums;
      letter-spacing: -0.02em;
    }

    /* ═══════════════════════════════════════════════
       DO / DON'T — Apple-style guidance cards
    ═══════════════════════════════════════════════ */
    .guidance-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin-top: 32px;
    }

    .guidance-card {
      border-radius: 14px;
      overflow: hidden;
      border: 1px solid var(--color-border);
    }

    .guidance-header {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 13px 16px;
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      border-bottom: 1px solid var(--color-border);
    }

    .guidance-do   .guidance-header { background: rgba(0,138,5,0.06); color: #008A05; }
    .guidance-dont .guidance-header { background: rgba(193,53,21,0.06); color: #C13515; }

    .guidance-icon {
      width: 18px;
      height: 18px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }
    .guidance-do   .guidance-icon { background: #008A05; }
    .guidance-dont .guidance-icon { background: #C13515; }

    .guidance-body {
      padding: 18px;
      background: var(--color-surface);
    }

    .guidance-body p {
      font-size: 13.5px;
      line-height: 1.65;
      color: var(--color-text-secondary);
    }

    .guidance-body code {
      font-family: 'Menlo','SF Mono',monospace;
      font-size: 11.5px;
      color: var(--color-primary);
      background: rgba(255,56,92,0.07);
      border: 1px solid rgba(255,56,92,0.12);
      padding: 1px 5px;
      border-radius: 4px;
    }

    .guidance-example {
      margin-top: 14px;
      padding: 14px;
      border-radius: 9px;
      border: 1px solid var(--color-border);
    }

    /* ═══════════════════════════════════════════════
       CALLOUT BOXES (Apple-style notes)
    ═══════════════════════════════════════════════ */
    .callout {
      display: flex;
      gap: 14px;
      padding: 16px 18px;
      border-radius: 12px;
      margin-top: 24px;
      border: 1px solid;
    }

    .callout-note {
      background: rgba(0,122,255,0.05);
      border-color: rgba(0,122,255,0.18);
    }

    .callout-warning {
      background: rgba(196,85,8,0.05);
      border-color: rgba(196,85,8,0.20);
    }

    .callout-icon {
      font-size: 16px;
      line-height: 1;
      margin-top: 1px;
      flex-shrink: 0;
    }

    .callout-text {
      font-size: 13.5px;
      line-height: 1.65;
      color: var(--color-text-secondary);
    }

    .callout-text strong {
      color: var(--color-text-primary);
      font-weight: 600;
    }

    /* ═══════════════════════════════════════════════
       INTEGRATION SECTION
    ═══════════════════════════════════════════════ */
    .integration-steps {
      margin-top: 32px;
      counter-reset: steps;
      display: flex;
      flex-direction: column;
      gap: 0;
      border: 1px solid var(--color-border);
      border-radius: 14px;
      overflow: hidden;
    }

    .step-row {
      display: flex;
      gap: 0;
      border-bottom: 1px solid var(--color-border);
    }
    .step-row:last-child { border-bottom: none; }

    .step-num {
      width: 52px;
      flex-shrink: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 13px;
      font-weight: 700;
      color: var(--color-primary);
      background: rgba(255,56,92,0.04);
      border-right: 1px solid var(--color-border);
      font-variant-numeric: tabular-nums;
    }

    .step-content {
      padding: 16px 20px;
      flex: 1;
    }

    .step-title {
      font-size: 13.5px;
      font-weight: 600;
      color: var(--color-text-primary);
      margin-bottom: 4px;
      letter-spacing: -0.01em;
    }

    .step-desc {
      font-size: 13px;
      color: var(--color-text-secondary);
      line-height: 1.55;
    }

    .step-desc code {
      font-family: 'Menlo','SF Mono',monospace;
      font-size: 11.5px;
      color: var(--color-primary);
      background: rgba(255,56,92,0.06);
      border: 1px solid rgba(255,56,92,0.12);
      padding: 1px 5px;
      border-radius: 4px;
    }

    /* ═══════════════════════════════════════════════
       MISC
    ═══════════════════════════════════════════════ */
    code {
      font-family: 'Menlo','SF Mono','Monaco',monospace;
      font-size: 12.5px;
      color: var(--color-text-primary);
      background: var(--color-surface-raised);
      border: 1px solid var(--color-border);
      padding: 2px 6px;
      border-radius: 5px;
    }

    a {
      color: var(--color-primary);
      text-decoration: none;
      transition: opacity 0.15s;
    }
    a:hover { opacity: 0.75; }

    /* ═══════════════════════════════════════════════
       RESPONSIVE
    ═══════════════════════════════════════════════ */
    @media (max-width: 1280px) {
      .shell { grid-template-columns: 220px 1fr 200px; }
      .main-content { padding: 48px 48px 100px; }
      .page-title { font-size: 44px; }
    }
    @media (max-width: 1024px) {
      .shell { grid-template-columns: 1fr; grid-template-areas: "main"; }
      .sidebar-left, .sidebar-right { display: none; }
      .main-content { padding: 40px 28px 80px; max-width: 100%; }
      .guidance-grid { grid-template-columns: 1fr; }
      .hero-swatches { grid-template-columns: 1fr; }
    }
    @media (max-width: 600px) {
      .page-title { font-size: 34px; }
      .palette-swatches { grid-auto-flow: row; grid-auto-columns: auto; grid-template-columns: 1fr 1fr; }
    }
  </style>
</head>
<body>

<?php include $partials . 'header.php'; ?>

<div class="shell">

  <!-- ── Left sidebar ── -->
  <aside class="sidebar-left">
    <?php include $partials . 'left_sidebar.php'; ?>
  </aside>

  <!-- ── Main content ── -->
  <main class="main-content">

    <!-- ══════════════════════════════════
         HERO / OVERVIEW
    ══════════════════════════════════════ -->
    <section id="overview" class="page-hero">

      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="#">Design Guidelines</a>
        <span class="breadcrumb-sep">›</span>
        <a href="#">Foundations</a>
        <span class="breadcrumb-sep">›</span>
        <span>Colors</span>
      </nav>

      <h1 class="page-title">Color</h1>

      <p class="page-intro">Judicious use of color enhances communication, evokes brand identity, provides visual continuity, and helps people understand information. All tokens are managed through <code>colors.css</code> as CSS custom properties.</p>

      <!-- Hero swatches -->
      <div class="hero-swatches">
        <div class="hero-swatch" style="background: var(--color-primary);">
          <div class="hero-swatch-circle"></div>
          <p class="hero-swatch-label">Primary</p>
          <p class="hero-swatch-hex">#FF385C</p>
          <p class="hero-swatch-rgb">rgb(255, 56, 92)</p>
        </div>
        <div class="hero-swatch" style="background: var(--color-accent);">
          <div class="hero-swatch-circle"></div>
          <p class="hero-swatch-label">Accent</p>
          <p class="hero-swatch-hex">#00A699</p>
          <p class="hero-swatch-rgb">rgb(0, 166, 153)</p>
        </div>
      </div>

      <!-- Tabs -->
      <nav class="tab-nav" aria-label="Section navigation">
        <button class="tab-btn active" onclick="scrollTo('#overview')">Overview</button>
        <button class="tab-btn" onclick="document.querySelector('#palette').scrollIntoView({behavior:'smooth'})">Palette</button>
        <button class="tab-btn" onclick="document.querySelector('#specs').scrollIntoView({behavior:'smooth'})">Specs</button>
        <button class="tab-btn" onclick="document.querySelector('#usage').scrollIntoView({behavior:'smooth'})">Usage</button>
        <button class="tab-btn" onclick="document.querySelector('#accessibility').scrollIntoView({behavior:'smooth'})">Accessibility</button>
      </nav>
    </section>

    <!-- ══════════════════════════════════
         PALETTE
    ══════════════════════════════════════ -->
    <hr class="page-rule" />
    <section id="palette" class="doc-section">
      <p class="section-label">Token Categories</p>
      <h2 class="section-title">Palette</h2>
      <p class="section-body">Colors are organized by semantic function — brand, status, text, surface, border — making them easy to apply consistently across every component.</p>

      <div class="palette-stack">

        <!-- Primary -->
        <div class="palette-row">
          <div class="palette-row-header">
            <span class="palette-row-name">Primary</span>
            <span class="palette-row-count">4 variants</span>
          </div>
          <div class="palette-swatches">
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-primary);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Base</p>
                <p class="swatch-hex">#FF385C</p>
              </div>
            </div>
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-primary-light);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Light</p>
                <p class="swatch-hex">#FF5A76</p>
              </div>
            </div>
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-primary-hover);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Hover</p>
                <p class="swatch-hex">#E8314F</p>
              </div>
            </div>
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-primary-dark);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Dark</p>
                <p class="swatch-hex">#D93B55</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Accent -->
        <div class="palette-row">
          <div class="palette-row-header">
            <span class="palette-row-name">Accent</span>
            <span class="palette-row-count">3 variants</span>
          </div>
          <div class="palette-swatches">
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-accent);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Base</p>
                <p class="swatch-hex">#00A699</p>
              </div>
            </div>
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-accent-light);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Light</p>
                <p class="swatch-hex">#00BDB2</p>
              </div>
            </div>
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-accent-dark);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Dark</p>
                <p class="swatch-hex">#008C81</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Status -->
        <div class="palette-row">
          <div class="palette-row-header">
            <span class="palette-row-name">Status</span>
            <span class="palette-row-count">4 variants</span>
          </div>
          <div class="palette-swatches">
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-success);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Success</p>
                <p class="swatch-hex">#008A05</p>
              </div>
            </div>
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-warning);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Warning</p>
                <p class="swatch-hex">#C45508</p>
              </div>
            </div>
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-error);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Error</p>
                <p class="swatch-hex">#C13515</p>
              </div>
            </div>
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-info);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Info</p>
                <p class="swatch-hex">#007AB8</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Text -->
        <div class="palette-row">
          <div class="palette-row-header">
            <span class="palette-row-name">Text</span>
            <span class="palette-row-count">4 variants</span>
          </div>
          <div class="palette-swatches">
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-text-primary);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Primary</p>
                <p class="swatch-hex">#222222</p>
              </div>
            </div>
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-text-secondary);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Secondary</p>
                <p class="swatch-hex">#717171</p>
              </div>
            </div>
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-text-muted);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Muted</p>
                <p class="swatch-hex">#B0B0B0</p>
              </div>
            </div>
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-text-inverse); border-bottom: 1px solid var(--color-border);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Inverse</p>
                <p class="swatch-hex">#FFFFFF</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Surfaces & Borders -->
        <div class="palette-row">
          <div class="palette-row-header">
            <span class="palette-row-name">Surfaces &amp; Borders</span>
            <span class="palette-row-count">6 variants</span>
          </div>
          <div class="palette-swatches">
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-surface); border-bottom: 1px solid var(--color-border);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Surface</p>
                <p class="swatch-hex">#FFFFFF</p>
              </div>
            </div>
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-surface-raised);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Raised</p>
                <p class="swatch-hex">#F7F7F7</p>
              </div>
            </div>
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-muted);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Muted</p>
                <p class="swatch-hex">#EBEBEB</p>
              </div>
            </div>
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-border);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Border</p>
                <p class="swatch-hex">#DDDDDD</p>
              </div>
            </div>
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-border-dark);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Border Dark</p>
                <p class="swatch-hex">#B0B0B0</p>
              </div>
            </div>
            <div class="swatch-cell">
              <div class="swatch-color" style="background: var(--color-border-focus);"></div>
              <div class="swatch-meta">
                <p class="swatch-variant-name">Focus</p>
                <p class="swatch-hex">#222222</p>
              </div>
            </div>
          </div>
        </div>

      </div><!-- /palette-stack -->
    </section>

    <!-- ══════════════════════════════════
         SPECIFICATIONS
    ══════════════════════════════════════ -->
    <hr class="page-rule" />
    <section id="specs" class="doc-section">
      <p class="section-label">Token Reference</p>
      <h2 class="section-title">Specifications</h2>
      <p class="section-body">CSS custom property names, values, and semantic guidance. Always reference tokens by name — never use raw hex values in component stylesheets.</p>

      <div class="specs-table-wrap">
        <table class="specs-table">
          <thead>
            <tr>
              <th>Token</th>
              <th>Hex</th>
              <th>RGB</th>
              <th>Use Case</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span class="token-pill"><span class="swatch-dot" style="background:#FF385C;"></span>--color-primary</span></td>
              <td class="mono">#FF385C</td>
              <td class="mono">255, 56, 92</td>
              <td class="use-case-cell">Primary action buttons, brand highlights</td>
            </tr>
            <tr>
              <td><span class="token-pill"><span class="swatch-dot" style="background:#00A699;"></span>--color-accent</span></td>
              <td class="mono">#00A699</td>
              <td class="mono">0, 166, 153</td>
              <td class="use-case-cell">Secondary accent, confirmation states</td>
            </tr>
            <tr>
              <td><span class="token-pill"><span class="swatch-dot" style="background:#008A05;"></span>--color-success</span></td>
              <td class="mono">#008A05</td>
              <td class="mono">0, 138, 5</td>
              <td class="use-case-cell">Success messages and states</td>
            </tr>
            <tr>
              <td><span class="token-pill"><span class="swatch-dot" style="background:#C45508;"></span>--color-warning</span></td>
              <td class="mono">#C45508</td>
              <td class="mono">196, 85, 8</td>
              <td class="use-case-cell">Warning messages and alerts</td>
            </tr>
            <tr>
              <td><span class="token-pill"><span class="swatch-dot" style="background:#C13515;"></span>--color-error</span></td>
              <td class="mono">#C13515</td>
              <td class="mono">193, 53, 21</td>
              <td class="use-case-cell">Error states and destructive actions</td>
            </tr>
            <tr>
              <td><span class="token-pill"><span class="swatch-dot" style="background:#222222;"></span>--color-text-primary</span></td>
              <td class="mono">#222222</td>
              <td class="mono">34, 34, 34</td>
              <td class="use-case-cell">Headings, body text</td>
            </tr>
            <tr>
              <td><span class="token-pill"><span class="swatch-dot" style="background:#717171;"></span>--color-text-secondary</span></td>
              <td class="mono">#717171</td>
              <td class="mono">113, 113, 113</td>
              <td class="use-case-cell">Secondary text, captions, metadata</td>
            </tr>
            <tr>
              <td><span class="token-pill"><span class="swatch-dot" style="background:#DDDDDD; border:1px solid #ccc;"></span>--color-border</span></td>
              <td class="mono">#DDDDDD</td>
              <td class="mono">221, 221, 221</td>
              <td class="use-case-cell">Dividers, subtle borders</td>
            </tr>
            <tr>
              <td><span class="token-pill"><span class="swatch-dot" style="background:#FFFFFF; border:1px solid #ccc;"></span>--color-surface</span></td>
              <td class="mono">#FFFFFF</td>
              <td class="mono">255, 255, 255</td>
              <td class="use-case-cell">Card and default surface backgrounds</td>
            </tr>
            <tr>
              <td><span class="token-pill"><span class="swatch-dot" style="background:#F7F7F7;"></span>--color-surface-raised</span></td>
              <td class="mono">#F7F7F7</td>
              <td class="mono">247, 247, 247</td>
              <td class="use-case-cell">Elevated panels, table headers</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- ══════════════════════════════════
         USAGE (CSS + JS)
    ══════════════════════════════════════ -->
    <hr class="page-rule" />
    <section id="usage" class="doc-section">
      <p class="section-label">Implementation</p>
      <h2 class="section-title">Usage</h2>
      <p class="section-body">Apply color tokens using CSS custom properties. Components must never reference raw hex values — only token variables. This ensures theme overrides and dark mode work correctly.</p>

      <!-- CSS block -->
      <div class="code-wrap">
        <div class="code-topbar">
          <div class="code-dots">
            <span class="code-dot dot-red"></span>
            <span class="code-dot dot-yellow"></span>
            <span class="code-dot dot-green"></span>
          </div>
          <span class="code-filename">component.css</span>
          <button class="copy-btn" onclick="
            navigator.clipboard.writeText(this.closest('.code-wrap').querySelector('pre').innerText);
            this.textContent='Copied!';
            setTimeout(()=>this.textContent='Copy',1600);
          ">Copy</button>
        </div>
        <pre><span class="c-comment">/* ── Primary button ───────────────────────────────────── */</span>
<span class="c-prop">.btn-primary</span> {
  background: <span class="c-val">var(--color-primary)</span>;
  color:      <span class="c-val">var(--color-text-inverse)</span>;
  border:     none;
  padding:    10px 20px;
  border-radius: 8px;
  font-weight: 600;
  cursor: pointer;
  transition: <span class="c-val">var(--transition-btn)</span>;
}
<span class="c-prop">.btn-primary:hover</span>  { background: <span class="c-val">var(--color-primary-hover)</span>; }
<span class="c-prop">.btn-primary:active</span> { background: <span class="c-val">var(--color-primary-pressed)</span>; }
<span class="c-prop">.btn-primary:focus-visible</span> { box-shadow: <span class="c-val">var(--focus-ring)</span>; }

<span class="c-comment">/* ── Error message ────────────────────────────────────── */</span>
<span class="c-prop">.message-error</span> {
  background: <span class="c-val">var(--color-danger-alpha)</span>;
  color:      <span class="c-val">var(--color-danger)</span>;
  border:     1px solid <span class="c-val">var(--color-danger)</span>;
  padding: 12px 16px;
  border-radius: 10px;
}</pre>
      </div>

      <!-- JS block -->
      <div class="code-wrap" style="margin-top:16px;">
        <div class="code-topbar">
          <div class="code-dots">
            <span class="code-dot dot-red"></span>
            <span class="code-dot dot-yellow"></span>
            <span class="code-dot dot-green"></span>
          </div>
          <span class="code-filename">tokens.js</span>
          <button class="copy-btn" onclick="
            navigator.clipboard.writeText(this.closest('.code-wrap').querySelector('pre').innerText);
            this.textContent='Copied!';
            setTimeout(()=>this.textContent='Copy',1600);
          ">Copy</button>
        </div>
        <pre><span class="c-comment">// Read any token at runtime (e.g. for Canvas, Chart.js, D3)</span>
<span class="c-kw">const</span> token = <span class="c-prop">key</span> =>
  getComputedStyle(document.documentElement).getPropertyValue(key).trim();

<span class="c-kw">const</span> primary   = token(<span class="c-str">'--color-primary'</span>);      <span class="c-comment">// "#FF385C"</span>
<span class="c-kw">const</span> accent    = token(<span class="c-str">'--color-accent'</span>);       <span class="c-comment">// "#00A699"</span>
<span class="c-kw">const</span> textBase  = token(<span class="c-str">'--color-text-primary'</span>);  <span class="c-comment">// "#222222"</span>

<span class="c-comment">// Apply to a Chart.js dataset</span>
chart.data.datasets[0].backgroundColor = primary;
chart.data.datasets[0].borderColor      = accent;</pre>
      </div>

      <!-- Dark mode override block -->
      <div class="code-wrap" style="margin-top:16px;">
        <div class="code-topbar">
          <div class="code-dots">
            <span class="code-dot dot-red"></span>
            <span class="code-dot dot-yellow"></span>
            <span class="code-dot dot-green"></span>
          </div>
          <span class="code-filename">theme-overrides.css</span>
          <button class="copy-btn" onclick="
            navigator.clipboard.writeText(this.closest('.code-wrap').querySelector('pre').innerText);
            this.textContent='Copied!';
            setTimeout(()=>this.textContent='Copy',1600);
          ">Copy</button>
        </div>
        <pre><span class="c-comment">/* Scoped override — white-label theme */</span>
<span class="c-prop">.theme-ocean</span> {
  <span class="c-val">--color-primary</span>:       #0077CC;
  <span class="c-val">--color-primary-hover</span>: #0066BB;
  <span class="c-val">--color-accent</span>:        #00BFD8;
}

<span class="c-comment">/* Dark mode shell */</span>
<span class="c-prop">@media (prefers-color-scheme: dark)</span> {
  :root {
    <span class="c-val">--color-bg</span>:           #111111;
    <span class="c-val">--color-surface</span>:      #1C1C1E;
    <span class="c-val">--color-surface-raised</span>: #2C2C2E;
    <span class="c-val">--color-text-primary</span>: #F5F5F7;
    <span class="c-val">--color-text-secondary</span>: #98989D;
    <span class="c-val">--color-border</span>:       #3A3A3C;
  }
}</pre>
      </div>

      <div class="callout callout-note">
        <span class="callout-icon">ℹ️</span>
        <p class="callout-text"><strong>Token-only rule.</strong> All component stylesheets must consume only CSS variable tokens — never raw hex values. This ensures white-label themes and dark mode overrides cascade correctly without touching component code.</p>
      </div>
    </section>

    <!-- ══════════════════════════════════
         INTEGRATION
    ══════════════════════════════════════ -->
    <hr class="page-rule" />
    <section id="integration" class="doc-section">
      <p class="section-label">Setup</p>
      <h2 class="section-title">Integration</h2>
      <p class="section-body">Include <code>colors.css</code> in every page's <code>&lt;head&gt;</code> before any component stylesheet. The PHP layout partials inherit tokens automatically.</p>

      <div class="integration-steps">
        <div class="step-row">
          <div class="step-num">1</div>
          <div class="step-content">
            <p class="step-title">Link the token sheet</p>
            <p class="step-desc">Add <code>&lt;link rel="stylesheet" href="/colors.css" /&gt;</code> as the first stylesheet in every page <code>&lt;head&gt;</code>.</p>
          </div>
        </div>
        <div class="step-row">
          <div class="step-num">2</div>
          <div class="step-content">
            <p class="step-title">Include PHP partials</p>
            <p class="step-desc">Header, sidebars, and footer partials automatically inherit all tokens once the sheet is loaded. No additional setup required.</p>
          </div>
        </div>
        <div class="step-row">
          <div class="step-num">3</div>
          <div class="step-content">
            <p class="step-title">Use tokens in component CSS</p>
            <p class="step-desc">Reference <code>var(--color-primary)</code> in component stylesheets. Raw hex values are not permitted in component files.</p>
          </div>
        </div>
        <div class="step-row">
          <div class="step-num">4</div>
          <div class="step-content">
            <p class="step-title">Override for themes</p>
            <p class="step-desc">Create a scoped class (e.g. <code>.theme-ocean</code>) and re-declare only the tokens you need to change. All components update automatically.</p>
          </div>
        </div>
      </div>

      <div class="code-wrap" style="margin-top:24px;">
        <div class="code-topbar">
          <div class="code-dots">
            <span class="code-dot dot-red"></span>
            <span class="code-dot dot-yellow"></span>
            <span class="code-dot dot-green"></span>
          </div>
          <span class="code-filename">page-template.php</span>
          <button class="copy-btn" onclick="
            navigator.clipboard.writeText(this.closest('.code-wrap').querySelector('pre').innerText);
            this.textContent='Copied!';
            setTimeout(()=>this.textContent='Copy',1600);
          ">Copy</button>
        </div>
        <pre><span class="c-comment">&lt;!-- 1. Token sheet first, always --&gt;</span>
<span class="c-tag">&lt;link</span> <span class="c-attr">rel</span>=<span class="c-str">"stylesheet"</span> <span class="c-attr">href</span>=<span class="c-str">"/colors.css"</span> <span class="c-tag">/&gt;</span>

<span class="c-comment">&lt;!-- 2. PHP partials --&gt;</span>
<span class="c-kw">&lt;?php</span> include __DIR__ . <span class="c-str">'/header.php'</span>;       <span class="c-kw">?&gt;</span>
<span class="c-kw">&lt;?php</span> include __DIR__ . <span class="c-str">'/left_sidebar.php'</span>;  <span class="c-kw">?&gt;</span>
<span class="c-kw">&lt;?php</span> include __DIR__ . <span class="c-str">'/right_sidebar.php'</span>; <span class="c-kw">?&gt;</span>

<span class="c-comment">/* 3. Component styles — tokens only */</span>
<span class="c-prop">.my-card</span> {
  background:   <span class="c-val">var(--color-surface)</span>;
  border:       1px solid <span class="c-val">var(--color-border)</span>;
  color:        <span class="c-val">var(--color-text-primary)</span>;
  border-radius: 12px;
}</pre>
      </div>
    </section>

    <!-- ══════════════════════════════════
         ACCESSIBILITY
    ══════════════════════════════════════ -->
    <hr class="page-rule" />
    <section id="accessibility" class="doc-section">
      <p class="section-label">WCAG 2.1</p>
      <h2 class="section-title">Accessibility &amp; Contrast</h2>
      <p class="section-body">All primary text pairings meet WCAG 2.1 AA at minimum. Key contrast ratios are listed below. Muted text tokens are decorative only and must not be used for readable content.</p>

      <div class="a11y-wrap">
        <table class="a11y-table">
          <thead>
            <tr>
              <th>Pairing</th>
              <th>Background</th>
              <th>Ratio</th>
              <th>Level</th>
              <th>Use case</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="a11y-preview">
                  <div class="a11y-chip" style="background:var(--color-primary); color:#fff;">Aa</div>
                  <div class="a11y-label"><strong>White on Primary</strong>var(--color-text-inverse)</div>
                </div>
              </td>
              <td><span class="mono">#FF385C</span></td>
              <td><span class="ratio-val">3.8:1</span></td>
              <td><span class="badge badge-lg">AA Large</span></td>
              <td class="use-case-cell">Button labels ≥ 18px bold</td>
            </tr>
            <tr>
              <td>
                <div class="a11y-preview">
                  <div class="a11y-chip" style="background:var(--color-secondary); color:#fff;">Aa</div>
                  <div class="a11y-label"><strong>White on Secondary</strong>var(--color-text-inverse)</div>
                </div>
              </td>
              <td><span class="mono">#222222</span></td>
              <td><span class="ratio-val">16.1:1</span></td>
              <td><span class="badge badge-aaa">AAA</span></td>
              <td class="use-case-cell">Dark buttons, nav text</td>
            </tr>
            <tr>
              <td>
                <div class="a11y-preview">
                  <div class="a11y-chip" style="background:#fff; color:var(--color-text-primary); border:1px solid var(--color-border);">Aa</div>
                  <div class="a11y-label"><strong>Primary text on white</strong>var(--color-text-primary)</div>
                </div>
              </td>
              <td><span class="mono">#FFFFFF</span></td>
              <td><span class="ratio-val">16.1:1</span></td>
              <td><span class="badge badge-aaa">AAA</span></td>
              <td class="use-case-cell">Body copy, headings</td>
            </tr>
            <tr>
              <td>
                <div class="a11y-preview">
                  <div class="a11y-chip" style="background:#fff; color:var(--color-text-secondary); border:1px solid var(--color-border);">Aa</div>
                  <div class="a11y-label"><strong>Secondary text on white</strong>var(--color-text-secondary)</div>
                </div>
              </td>
              <td><span class="mono">#FFFFFF</span></td>
              <td><span class="ratio-val">4.6:1</span></td>
              <td><span class="badge badge-aa">AA</span></td>
              <td class="use-case-cell">Captions, metadata, dates</td>
            </tr>
            <tr>
              <td>
                <div class="a11y-preview">
                  <div class="a11y-chip" style="background:#fff; color:var(--color-accent); border:1px solid var(--color-border);">Aa</div>
                  <div class="a11y-label"><strong>Accent on white</strong>var(--color-accent)</div>
                </div>
              </td>
              <td><span class="mono">#FFFFFF</span></td>
              <td><span class="ratio-val">4.5:1</span></td>
              <td><span class="badge badge-aa">AA</span></td>
              <td class="use-case-cell">Inline links, confirmation text</td>
            </tr>
            <tr>
              <td>
                <div class="a11y-preview">
                  <div class="a11y-chip" style="background:#fff; color:var(--color-text-muted); border:1px solid var(--color-border);">Aa</div>
                  <div class="a11y-label"><strong>Muted text on white</strong>var(--color-text-muted)</div>
                </div>
              </td>
              <td><span class="mono">#FFFFFF</span></td>
              <td><span class="ratio-val">2.3:1</span></td>
              <td><span class="badge badge-fail">Decorative only</span></td>
              <td class="use-case-cell">Disabled states — not readable content</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="callout callout-warning" style="margin-top:24px;">
        <span class="callout-icon">⚠️</span>
        <p class="callout-text"><strong>Muted text warning.</strong> <code>--color-text-muted</code> (#B0B0B0) achieves only 2.3:1 contrast on white. It must never be used for body copy, labels, or any informational content. Reserve it strictly for decorative elements and disabled control indicators.</p>
      </div>

      <!-- Do / Don't -->
      <div class="guidance-grid">
        <div class="guidance-card guidance-do">
          <div class="guidance-header">
            <span class="guidance-icon">
              <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M1.5 5l2.5 2.5 4.5-5" stroke="#fff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            Do
          </div>
          <div class="guidance-body">
            <p>Use <code>--color-text-primary</code> on <code>--color-surface</code> or <code>--color-bg</code> for all readable body text. These pairings meet AAA contrast and are the default for all content.</p>
            <div class="guidance-example" style="background: var(--color-surface);">
              <p style="color: var(--color-text-primary); font-size: 14px; font-weight: 600; margin-bottom: 4px;">Heading — #222222</p>
              <p style="color: var(--color-text-secondary); font-size: 13px;">Caption text — #717171 passes AA ✓</p>
            </div>
          </div>
        </div>

        <div class="guidance-card guidance-dont">
          <div class="guidance-header">
            <span class="guidance-icon">
              <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 2l6 6M8 2l-6 6" stroke="#fff" stroke-width="1.6" stroke-linecap="round"/></svg>
            </span>
            Don't
          </div>
          <div class="guidance-body">
            <p>Don't use <code>--color-text-muted</code> for important or informational content. It only passes at decorative sizes and will fail accessibility checks for body copy.</p>
            <div class="guidance-example" style="background: var(--color-surface);">
              <p style="color: var(--color-text-muted); font-size: 14px; font-weight: 600; margin-bottom: 4px;">Heading in muted — fails AA ✗</p>
              <p style="color: var(--color-text-muted); font-size: 13px;">Body copy in muted — fails AA ✗</p>
            </div>
          </div>
        </div>
      </div>

    </section>

  </main><!-- /.main-content -->

  <!-- ── Right sidebar ── -->
  <aside class="sidebar-right">
    <?php include $partials . 'right_sidebar.php'; ?>
  </aside>

</div><!-- /.shell -->

</body>
</html>