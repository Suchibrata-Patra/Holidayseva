<?php
/**
 * colours.php
 * Design Guidelines — Color System
 * developer.holidayseva.com
 * 
 * Integrated with header.php, left_sidebar.php, and right_sidebar.php
 * All colors managed via colors.css CSS variables only
 */

// ── Page meta ────────────────────────────────────────────────────────────────
$pageTitle       = 'Colors';
$pageDescription = 'Color tokens, semantic usage, and accessibility guidelines for the Holidayseva design system.';
$activePage      = 'colors'; // used by left_sidebar to mark the active link
$partials        = __DIR__ . '/../../'; // Directory for shared partials
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($pageTitle) ?> — Design Guidelines · Holidayseva</title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>" />
  
  <!-- Colors CSS — all color tokens as CSS variables -->
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

    /* ── Shell layout (adjusted for external header) ──────────────────────── */
    .shell {
      display: grid;
      grid-template-columns: 260px 1fr 220px;
      grid-template-rows: 1fr;
      grid-template-areas: "left   main   right";
      min-height: calc(100vh - var(--header-h, 96px));
    }

    /* ── Sidebars ──────────────────────────────────────────────────────────── */
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
      padding: 0;
      scrollbar-width: thin;
      scrollbar-color: var(--color-muted-dark) transparent;
    }

    /* ── Main content ──────────────────────────────────────────────────────── */
    .main-content {
      grid-area: main;
      padding: 52px 60px 80px 60px;
      max-width: 860px;
      margin-top: 0;
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
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: var(--color-text-secondary);
    }

    .overview-swatch-hex {
      font-size: 18px;
      font-weight: 700;
      color: var(--color-text-primary);
      letter-spacing: -0.02em;
    }

    .overview-swatch-rgb {
      font-size: 11px;
      color: var(--color-text-muted);
      font-family: 'Menlo', 'Monaco', monospace;
    }

    /* ── Grid of color samples ──────────────────────────────────────────── */
    .color-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
      gap: 18px;
      margin-top: 32px;
    }

    .color-sample {
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 1px 3px var(--color-overlay-light);
      border: 1px solid var(--color-border);
      transition: transform 0.15s ease;
    }

    .color-sample:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px var(--color-overlay-light);
    }

    .color-sample-swatch {
      height: 100px;
      background-size: cover;
      position: relative;
    }

    .color-sample-info {
      padding: 12px;
      background: var(--color-surface);
    }

    .color-sample-name {
      font-size: 13px;
      font-weight: 600;
      color: var(--color-text-primary);
      margin-bottom: 4px;
    }

    .color-sample-hex {
      font-size: 12px;
      color: var(--color-text-secondary);
      font-family: 'Menlo', 'Monaco', monospace;
      letter-spacing: -0.01em;
    }

    .color-sample-rgb {
      font-size: 10px;
      color: var(--color-text-muted);
      font-family: 'Menlo', 'Monaco', monospace;
      margin-top: 2px;
    }

    /* ── Detailed color swatches ───────────────────────────────────────── */
    .color-detail {
      display: grid;
      grid-template-columns: 1fr;
      gap: 24px;
      margin-top: 32px;
    }

    .color-family {
      border: 1px solid var(--color-border);
      border-radius: 12px;
      overflow: hidden;
    }

    .color-family-header {
      padding: 16px 18px;
      background: var(--color-surface-raised);
      border-bottom: 1px solid var(--color-border);
    }

    .color-family-title {
      font-size: 16px;
      font-weight: 700;
      color: var(--color-text-primary);
      letter-spacing: -0.015em;
    }

    .color-family-body {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
      gap: 1px;
      background: var(--color-border);
      padding: 1px;
    }

    .color-variant {
      display: flex;
      flex-direction: column;
      overflow: hidden;
      background: var(--color-surface);
    }

    .color-variant-preview {
      height: 80px;
      position: relative;
    }

    .color-variant-info {
      padding: 10px;
      font-size: 11px;
    }

    .color-variant-label {
      font-weight: 600;
      color: var(--color-text-primary);
      text-transform: uppercase;
      letter-spacing: 0.05em;
      margin-bottom: 3px;
    }

    .color-variant-value {
      color: var(--color-text-secondary);
      font-family: 'Menlo', 'Monaco', monospace;
      font-size: 10px;
      word-break: break-all;
    }

    /* ── Semantic usage table ──────────────────────────────────────────── */
    .semantic-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 24px;
      border: 1px solid var(--color-border);
      border-radius: 10px;
      overflow: hidden;
    }

    .semantic-table thead {
      background: var(--color-surface-raised);
    }

    .semantic-table th {
      padding: 14px;
      text-align: left;
      font-size: 12px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: var(--color-text-primary);
      border-bottom: 1px solid var(--color-border);
    }

    .semantic-table td {
      padding: 14px;
      font-size: 13px;
      color: var(--color-text-primary);
      border-bottom: 1px solid var(--color-muted);
    }

    .semantic-table tr:last-child td {
      border-bottom: none;
    }

    .semantic-table td:first-child {
      font-weight: 600;
      color: var(--color-text-primary);
    }

    .semantic-token {
      font-family: 'Menlo', 'Monaco', monospace;
      font-size: 12px;
      color: var(--color-primary);
      background: rgba(255, 56, 92, 0.08);
      padding: 2px 6px;
      border-radius: 4px;
      display: inline-block;
    }

    /* ── Code blocks ───────────────────────────────────────────────────── */
    .code-block {
      background: var(--color-surface-raised);
      border: 1px solid var(--color-border);
      border-radius: 10px;
      margin-top: 16px;
      overflow: hidden;
    }

    .code-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 16px;
      background: var(--color-bg-muted);
      border-bottom: 1px solid var(--color-border);
      font-size: 12px;
      font-weight: 600;
      color: var(--color-text-secondary);
      letter-spacing: 0.05em;
    }

    .code-lang {
      text-transform: uppercase;
    }

    .copy-btn {
      background: var(--color-primary);
      color: var(--color-text-inverse);
      border: none;
      padding: 6px 12px;
      border-radius: 6px;
      font-size: 11px;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.15s ease;
    }

    .copy-btn:hover {
      background: var(--color-primary-hover);
    }

    .code-block pre {
      padding: 16px;
      overflow-x: auto;
      font-family: 'Menlo', 'Monaco', monospace;
      font-size: 12px;
      line-height: 1.6;
      color: var(--color-text-primary);
      margin: 0;
    }

    .code-comment {
      color: var(--color-text-muted);
    }

    .code-fn {
      color: var(--color-primary);
      font-weight: 600;
    }

    .code-string {
      color: var(--color-accent);
    }

    .code-prop {
      color: var(--color-secondary);
      font-weight: 600;
    }

    .code-val {
      color: var(--color-primary);
    }

    /* ── Accessibility table ───────────────────────────────────────────── */
    .a11y-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 24px;
      border: 1px solid var(--color-border);
      border-radius: 10px;
      overflow: hidden;
    }

    .a11y-table thead {
      background: var(--color-surface-raised);
    }

    .a11y-table th {
      padding: 14px;
      text-align: left;
      font-size: 12px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: var(--color-text-primary);
      border-bottom: 1px solid var(--color-border);
    }

    .a11y-table td {
      padding: 14px;
      font-size: 13px;
      color: var(--color-text-primary);
      border-bottom: 1px solid var(--color-muted);
    }

    .a11y-table tr:last-child td {
      border-bottom: none;
    }

    .a11y-pair {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .a11y-dot-bg {
      width: 40px;
      height: 40px;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      font-weight: 600;
      flex-shrink: 0;
    }

    .token-hex {
      font-family: 'Menlo', 'Monaco', monospace;
      font-size: 12px;
      font-weight: 600;
      color: var(--color-text-primary);
    }

    .ratio-badge {
      display: inline-block;
      padding: 4px 8px;
      border-radius: 4px;
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    .ratio-badge-aaa {
      background: rgba(0, 138, 5, 0.12);
      color: var(--color-success);
    }

    .ratio-badge-aa {
      background: rgba(0, 138, 5, 0.12);
      color: var(--color-success);
    }

    .ratio-badge-fail {
      background: rgba(193, 53, 21, 0.12);
      color: var(--color-error);
    }

    .token-desc {
      color: var(--color-text-secondary);
    }

    /* ── Do / Don't cards ──────────────────────────────────────────────── */
    .do-dont-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
      margin-top: 24px;
    }

    .do-card,
    .dont-card {
      border: 1px solid var(--color-border);
      border-radius: 10px;
      overflow: hidden;
    }

    .do-card-header,
    .dont-card-header {
      padding: 12px 16px;
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 13px;
      font-weight: 600;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      border-bottom: 1px solid var(--color-border);
    }

    .do-card-header {
      background: rgba(0, 138, 5, 0.08);
      color: var(--color-success);
    }

    .dont-card-header {
      background: rgba(193, 53, 21, 0.08);
      color: var(--color-error);
    }

    .do-card-body,
    .dont-card-body {
      padding: 16px;
      background: var(--color-surface);
    }

    .do-card-body p,
    .dont-card-body p {
      font-size: 13px;
      line-height: 1.6;
      color: var(--color-text-primary);
    }

    .do-card-body code,
    .dont-card-body code {
      background: var(--color-surface-raised);
      border: 1px solid var(--color-border);
      padding: 2px 6px;
      border-radius: 4px;
      font-family: 'Menlo', 'Monaco', monospace;
      font-size: 11px;
      color: var(--color-primary);
    }

    .do-example,
    .dont-example {
      margin-top: 12px;
      padding: 12px;
      border-radius: 6px;
    }

    /* ── General ───────────────────────────────────────────────────────── */
    code {
      background: var(--color-surface-raised);
      border: 1px solid var(--color-border);
      padding: 2px 6px;
      border-radius: 4px;
      font-family: 'Menlo', 'Monaco', monospace;
      font-size: 12px;
      color: var(--color-text-primary);
    }

    a {
      color: var(--color-primary);
      text-decoration: none;
      transition: opacity 0.15s ease;
    }

    a:hover {
      opacity: 0.8;
    }

    /* ── Responsive ────────────────────────────────────────────────────── */
    @media (max-width: 1280px) {
      .shell { grid-template-columns: 200px 1fr 180px; }
      .main-content { padding: 40px 40px 80px 40px; }
    }

    @media (max-width: 1024px) {
      .shell { 
        grid-template-columns: 1fr; 
        grid-template-areas: "main"; 
      }
      .sidebar-left, .sidebar-right { display: none; }
      .main-content { 
        padding: 40px 32px 80px 32px; 
        max-width: 100%; 
      }
      .do-dont-grid { grid-template-columns: 1fr; }
    }

  </style>
</head>

<body>

<?php include $partials . 'header.php'; ?>

<div class="shell">

  <!-- ── Left sidebar ────────────────────────────────────────────────────– -->
  <aside class="sidebar-left">
  <?php include $partials . 'left_sidebar.php'; ?>
  </aside>

  <!-- ── Main content ───────────────────────────────────────────────────── -->
  <main class="main-content">

    <!-- ══ OVERVIEW ════════════════════════════════════════════════════════ -->
    <section id="overview">
      <p class="page-eyebrow">Design Tokens</p>
      <h1 class="page-title">Colors</h1>
      <p class="page-intro">Color tokens, semantic usage, and accessibility guidelines for the Holidayseva design system. All colors are managed through <code>colors.css</code> as CSS variables, ensuring consistency across the entire application.</p>

      <!-- Primary + Accent banner -->
      <div class="overview-banner">
        <div class="overview-swatch" style="background: var(--color-primary);">
          <p class="overview-swatch-name">Primary</p>
          <p class="overview-swatch-hex">#FF385C</p>
          <p class="overview-swatch-rgb">rgb(255, 56, 92)</p>
        </div>
        <div class="overview-swatch" style="background: var(--color-accent);">
          <p class="overview-swatch-name">Accent</p>
          <p class="overview-swatch-hex">#00A699</p>
          <p class="overview-swatch-rgb">rgb(0, 166, 153)</p>
        </div>
      </div>
    </section>

    <!-- ══ ANATOMY ═════════════════════════════════════════════════════════ -->
    <hr class="page-divider" />
    <section id="anatomy">
      <h2 class="section-title">Token Categories</h2>
      <p class="section-subtitle">Colors are organized by semantic function, making them easy to remember and apply consistently.</p>

      <!-- Brand colors -->
      <div class="color-detail">
        <div class="color-family">
          <div class="color-family-header">
            <h3 class="color-family-title">Primary</h3>
          </div>
          <div class="color-family-body">
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-primary);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Base</p>
                <p class="color-variant-value">#FF385C</p>
              </div>
            </div>
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-primary-light);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Light</p>
                <p class="color-variant-value">#FF5A76</p>
              </div>
            </div>
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-primary-dark);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Dark</p>
                <p class="color-variant-value">#D93B55</p>
              </div>
            </div>
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-primary-hover);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Hover</p>
                <p class="color-variant-value">#E8314F</p>
              </div>
            </div>
          </div>
        </div>

        <div class="color-family">
          <div class="color-family-header">
            <h3 class="color-family-title">Accent</h3>
          </div>
          <div class="color-family-body">
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-accent);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Base</p>
                <p class="color-variant-value">#00A699</p>
              </div>
            </div>
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-accent-light);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Light</p>
                <p class="color-variant-value">#00BDB2</p>
              </div>
            </div>
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-accent-dark);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Dark</p>
                <p class="color-variant-value">#008C81</p>
              </div>
            </div>
          </div>
        </div>

        <div class="color-family">
          <div class="color-family-header">
            <h3 class="color-family-title">Status Colors</h3>
          </div>
          <div class="color-family-body">
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-success);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Success</p>
                <p class="color-variant-value">#008A05</p>
              </div>
            </div>
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-warning);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Warning</p>
                <p class="color-variant-value">#C45508</p>
              </div>
            </div>
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-error);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Error</p>
                <p class="color-variant-value">#C13515</p>
              </div>
            </div>
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-info);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Info</p>
                <p class="color-variant-value">#007AB8</p>
              </div>
            </div>
          </div>
        </div>

        <div class="color-family">
          <div class="color-family-header">
            <h3 class="color-family-title">Neutral – Text</h3>
          </div>
          <div class="color-family-body">
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-text-primary);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Primary</p>
                <p class="color-variant-value">#222222</p>
              </div>
            </div>
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-text-secondary);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Secondary</p>
                <p class="color-variant-value">#717171</p>
              </div>
            </div>
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-text-muted);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Muted</p>
                <p class="color-variant-value">#B0B0B0</p>
              </div>
            </div>
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-text-inverse);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Inverse</p>
                <p class="color-variant-value">#FFFFFF</p>
              </div>
            </div>
          </div>
        </div>

        <div class="color-family">
          <div class="color-family-header">
            <h3 class="color-family-title">Neutral – Surfaces</h3>
          </div>
          <div class="color-family-body">
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-surface);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Default</p>
                <p class="color-variant-value">#FFFFFF</p>
              </div>
            </div>
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-surface-raised);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Raised</p>
                <p class="color-variant-value">#F7F7F7</p>
              </div>
            </div>
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-bg-muted);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Muted</p>
                <p class="color-variant-value">#F7F7F7</p>
              </div>
            </div>
          </div>
        </div>

        <div class="color-family">
          <div class="color-family-header">
            <h3 class="color-family-title">Neutral – Borders</h3>
          </div>
          <div class="color-family-body">
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-border);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Default</p>
                <p class="color-variant-value">#DDDDDD</p>
              </div>
            </div>
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-border-dark);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Dark</p>
                <p class="color-variant-value">#B0B0B0</p>
              </div>
            </div>
            <div class="color-variant">
              <div class="color-variant-preview" style="background: var(--color-border-focus);"></div>
              <div class="color-variant-info">
                <p class="color-variant-label">Focus</p>
                <p class="color-variant-value">#222222</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ══ SPECIFICATIONS ═════════════════════════════════════════════════ -->
    <hr class="page-divider" />
    <section id="specs">
      <h2 class="section-title">Specifications</h2>
      <p class="section-subtitle">CSS custom property names and usage guidelines.</p>

      <table class="semantic-table">
        <thead>
          <tr>
            <th>Token Name</th>
            <th>Hex Value</th>
            <th>RGB</th>
            <th>Use Case</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><span class="semantic-token">--color-primary</span></td>
            <td>#FF385C</td>
            <td>rgb(255, 56, 92)</td>
            <td>Primary action buttons, brand highlights</td>
          </tr>
          <tr>
            <td><span class="semantic-token">--color-accent</span></td>
            <td>#00A699</td>
            <td>rgb(0, 166, 153)</td>
            <td>Secondary accent, confirmations</td>
          </tr>
          <tr>
            <td><span class="semantic-token">--color-success</span></td>
            <td>#008A05</td>
            <td>rgb(0, 138, 5)</td>
            <td>Success messages and states</td>
          </tr>
          <tr>
            <td><span class="semantic-token">--color-warning</span></td>
            <td>#C45508</td>
            <td>rgb(196, 85, 8)</td>
            <td>Warning messages and alerts</td>
          </tr>
          <tr>
            <td><span class="semantic-token">--color-error</span></td>
            <td>#C13515</td>
            <td>rgb(193, 53, 21)</td>
            <td>Error states and danger actions</td>
          </tr>
          <tr>
            <td><span class="semantic-token">--color-text-primary</span></td>
            <td>#222222</td>
            <td>rgb(34, 34, 34)</td>
            <td>Heading and body text</td>
          </tr>
          <tr>
            <td><span class="semantic-token">--color-text-secondary</span></td>
            <td>#717171</td>
            <td>rgb(113, 113, 113)</td>
            <td>Secondary text, captions</td>
          </tr>
          <tr>
            <td><span class="semantic-token">--color-border</span></td>
            <td>#DDDDDD</td>
            <td>rgb(221, 221, 221)</td>
            <td>Dividers, subtle borders</td>
          </tr>
          <tr>
            <td><span class="semantic-token">--color-surface</span></td>
            <td>#FFFFFF</td>
            <td>rgb(255, 255, 255)</td>
            <td>Card backgrounds, default surface</td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- ══ HTML USAGE ══════════════════════════════════════════════════════ -->
    <hr class="page-divider" />
    <section id="usage">
      <h2 class="section-title">HTML Usage</h2>
      <p class="section-subtitle">Apply colors to elements using CSS custom properties.</p>

      <div class="code-block">
        <div class="code-header">
          <span class="code-lang">CSS — basic usage</span>
          <button class="copy-btn" onclick="
            navigator.clipboard.writeText(this.closest('.code-block').querySelector('pre').innerText);
            this.textContent='Copied!';
            setTimeout(()=>this.textContent='Copy',1600);
          ">Copy</button>
        </div>
        <pre><span class="code-prop">.primary-button</span> {
  background: <span class="code-val">var(--color-primary)</span>;
  color: <span class="code-val">var(--color-text-inverse)</span>;
  border: none;
  padding: 10px 20px;
  border-radius: 6px;
  font-weight: 600;
  cursor: pointer;
}

<span class="code-prop">.primary-button:hover</span> {
  background: <span class="code-val">var(--color-primary-hover)</span>;
}

<span class="code-prop">.error-message</span> {
  background: <span class="code-val">var(--color-danger-alpha)</span>;
  color: <span class="code-val">var(--color-danger)</span>;
  padding: 12px;
  border-radius: 8px;
}</pre>
      </div>
    </section>

    <!-- ══ JAVASCRIPT ═══════════════════════════════════════════════════════ -->
    <hr class="page-divider" />
    <section id="javascript">
      <h2 class="section-title">JavaScript API</h2>
      <p class="section-subtitle">Read CSS tokens at runtime for dynamic styling.</p>

      <div class="code-block">
        <div class="code-header">
          <span class="code-lang">JavaScript — read tokens</span>
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
                <div class="a11y-dot-bg" style="background:var(--color-primary);color:#fff;">Aa</div>
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
                <div class="a11y-dot-bg" style="background:var(--color-secondary);color:#fff;">Aa</div>
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
                <div class="a11y-dot-bg" style="background:var(--color-surface);color:var(--color-text-primary);border:1px solid var(--color-border);">Aa</div>
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
                <div class="a11y-dot-bg" style="background:var(--color-surface);color:var(--color-text-secondary);border:1px solid var(--color-border);">Aa</div>
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
                <div class="a11y-dot-bg" style="background:var(--color-surface);color:var(--color-accent);border:1px solid var(--color-border);">Aa</div>
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
                <div class="a11y-dot-bg" style="background:var(--color-surface);color:var(--color-text-muted);border:1px solid var(--color-border);">Aa</div>
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
            <div class="do-example" style="background:var(--color-surface); border:1px solid var(--color-border);">
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
            <div class="dont-example" style="background:var(--color-surface); border:1px solid var(--color-border);">
              <p style="color:var(--color-text-muted); font-size:13px;">Body text in muted grey — fails AA ✗</p>
              <p style="color:var(--color-text-muted); font-size:12px; margin-top:4px;">Caption in muted — fails AA ✗</p>
            </div>
          </div>
        </div>
      </div>

    </section>

  </main>

  <!-- ── Right sidebar ────────────────────────────────────────────────────– -->
  <aside class="sidebar-right">
  <?php include $partials . 'right_sidebar.php'; ?>
  </aside>

</div><!-- .shell -->
</body>
</html>