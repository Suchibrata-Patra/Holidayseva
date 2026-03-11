<?php
/**
 * input.php — Airframe UI · Input Fields
 * Atom layer · /Atom/input/input.php
 */

$pageTitle  = 'Input Fields';
$activePage = 'input';
$partials   = __DIR__ . '/../../';

if (!defined('SITE_WEB_ROOT'))          define('SITE_WEB_ROOT',          'https://developer.holidayseva.com');
if (!defined('DESIGN_GUIDELINES_WEB'))  define('DESIGN_GUIDELINES_WEB',  SITE_WEB_ROOT);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($pageTitle) ?> — Airframe UI · Holidayseva</title>

  <!-- ① Token layer — MUST come before input.css -->
  <link rel="stylesheet" href="/colors.css" />
  <!-- ② Component stylesheet — zero hex inside -->
  <link rel="stylesheet" href="https://holidayseva.com/UI/design-system.css" />
  <link rel="stylesheet" href="https://holidayseva.com/UI/Atom/input/input.css" />
  <!-- ③ Design system shell (global-nav, section-nav, page-layout, sidebar-left etc.) -->
  <link rel="stylesheet" href="/design-system.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet" />

  <style>
  /* ================================================================
     PAGE-LEVEL STYLES — input.php
     HARD RULE: Zero hex / rgba / hsl literals.
     Every colour resolves through var(--color-*) or var(--shadow-*)
     tokens defined in colors.css.
  ================================================================ */

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  html { scroll-behavior: smooth; }

  body {
    font-family: 'DM Sans', -apple-system, 'Helvetica Neue', sans-serif;
    background: var(--color-bg);
    color: var(--color-text-primary);
    -webkit-font-smoothing: antialiased;
    min-height: 100vh;
  }

  /* ── Page layout shell ─────────────────────────── */
  .page-layout {
    display: grid;
    grid-template-columns: 260px 1fr 220px;
    min-height: calc(100vh - var(--header-h, 96px));
    max-width: 1440px;
    margin: 0 auto;
  }

  .sidebar-left {
    position: sticky;
    top: var(--header-h, 96px);
    height: calc(100vh - var(--header-h, 96px));
    overflow-y: auto;
    overflow-x: hidden;
    border-right: 1px solid var(--color-border);
    background: var(--color-nav-bg);
    padding: 20px 0 40px;
    scrollbar-width: thin;
    scrollbar-color: var(--color-muted-dark) transparent;
  }

  .main-content {
    padding: 56px 72px 120px;
    min-width: 0;
    max-width: 960px;
  }

  .sidebar-right {
    position: sticky;
    top: var(--header-h, 96px);
    height: calc(100vh - var(--header-h, 96px));
    overflow-y: auto;
    border-left: 1px solid var(--color-border);
    scrollbar-width: thin;
    scrollbar-color: var(--color-muted-dark) transparent;
  }

  @media (max-width: 1100px) {
    .page-layout { grid-template-columns: 240px 1fr; }
    .sidebar-right { display: none; }
  }
  @media (max-width: 700px) {
    .page-layout { grid-template-columns: 1fr; }
    .sidebar-left { display: none; }
    .main-content { padding: 28px 20px 60px; }
  }

  /* ── Content typography ──────────────────────────── */
  .page-eyebrow {
    font-size: 11px; font-weight: 700; letter-spacing: .1em;
    text-transform: uppercase; color: var(--color-primary); margin-bottom: 12px;
  }
  .page-title {
    font-size: 48px; font-weight: 700; letter-spacing: -.034em;
    line-height: 1.05; color: var(--color-text-primary); margin-bottom: 20px;
  }
  .page-intro {
    font-size: 18px; line-height: 1.7; color: var(--color-text-secondary);
    max-width: 640px; margin-bottom: 40px; letter-spacing: -.01em;
  }
  .page-rule { border: none; border-top: 1px solid var(--color-border); margin: 56px 0; }

  .section-label {
    font-size: 11px; font-weight: 700; letter-spacing: .1em;
    text-transform: uppercase; color: var(--color-primary); margin-bottom: 8px;
  }
  .section-title {
    font-size: 32px; font-weight: 700; letter-spacing: -.028em;
    line-height: 1.1; color: var(--color-text-primary);
    margin-bottom: 12px; scroll-margin-top: calc(var(--header-h, 96px) + 16px);
  }
  .section-body {
    font-size: 15px; line-height: 1.72; color: var(--color-text-secondary);
    max-width: 640px; margin-bottom: 32px;
  }
  .section-h3 {
    font-size: 20px; font-weight: 700; letter-spacing: -.016em;
    color: var(--color-text-primary); margin: 40px 0 10px;
    scroll-margin-top: calc(var(--header-h, 96px) + 16px);
  }

  /* Inline code */
  code {
    font-family: 'DM Mono', 'SF Mono', 'Menlo', monospace;
    font-size: 12.5px;
    background: var(--color-primary-alpha-sm);
    color: var(--color-primary);
    padding: 2px 6px; border-radius: 5px;
    border: 1px solid var(--color-primary-border);
  }

  /* ── Callout ─────────────────────────────────────── */
  .callout {
    display: flex; gap: 14px; align-items: flex-start;
    padding: 16px 20px; border-radius: 12px; margin-bottom: 32px;
    font-size: 14px; line-height: 1.65;
  }
  .callout-info  { background: var(--color-info-bg);    border: 1px solid var(--color-info-border);    color: var(--color-info-text); }
  .callout-warn  { background: var(--color-warning-bg); border: 1px solid var(--color-warning-border); color: var(--color-warning-text); }
  .callout-icon  { font-size: 17px; flex-shrink: 0; line-height: 1.65; }

  /* ── Demo card ───────────────────────────────────── */
  .demo-card {
    border: 1px solid var(--color-border);
    border-radius: 16px; overflow: hidden;
    margin-bottom: 32px;
    box-shadow: var(--shadow-sm);
  }
  .demo-bar {
    display: flex; align-items: center;
    background: var(--color-surface);
    border-bottom: 1px solid var(--color-border);
  }
  .demo-tab {
    font-size: 13px; font-weight: 500; font-family: inherit;
    color: var(--color-text-muted); padding: 11px 20px;
    cursor: pointer; border: none; background: none;
    border-bottom: 2px solid transparent; margin-bottom: -1px;
    transition: color .12s, border-color .12s;
  }
  .demo-tab.active {
    color: var(--color-text-primary);
    border-bottom-color: var(--color-primary);
  }

  /*
    Demo preview backgrounds — this is the key fix:
    We use a slightly tinted surface so white inputs are clearly visible.
  */
  .demo-preview {
    padding: 40px 36px;
    background: var(--color-bg-grouped);       /* #F2F2F7 light / #000 dark */
    border-bottom: 1px solid var(--color-border);
    display: flex; flex-wrap: wrap;
    gap: 24px; align-items: flex-start;
  }
  .demo-preview.col    { flex-direction: column; }
  .demo-preview.center { flex-direction: column; justify-content: center; align-items: center; }

  .demo-code {
    font-family: 'DM Mono', 'SF Mono', 'Menlo', monospace;
    font-size: 12.5px; line-height: 1.8; tab-size: 2;
    padding: 24px 28px; margin: 0;
    color: var(--color-code-text);
    background: var(--color-code-bg);
    overflow-x: auto; white-space: pre;
  }
  /* Code syntax colours */
  .demo-code .c-tag   { color: var(--color-code-tag); }
  .demo-code .c-attr  { color: var(--color-code-attr); }
  .demo-code .c-str   { color: var(--color-code-string); }
  .demo-code .c-cmt   { color: var(--color-code-comment); font-style: italic; }

  /* ── Spec grid ───────────────────────────────────── */
  .spec-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; margin-bottom: 32px; }
  @media (max-width: 800px) { .spec-grid { grid-template-columns: 1fr 1fr; } }
  .spec-item {
    padding: 16px 18px; border-radius: 12px;
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    box-shadow: var(--shadow-sm);
  }
  .spec-lbl {
    font-size: 10.5px; font-weight: 700; text-transform: uppercase;
    letter-spacing: .07em; color: var(--color-text-muted); margin-bottom: 6px;
  }
  .spec-val { font-size: 14px; font-weight: 600; color: var(--color-text-primary); }

  /* ── Prop table ──────────────────────────────────── */
  .prop-table { width: 100%; border-collapse: collapse; font-size: 13.5px; margin-bottom: 36px; }
  .prop-table th {
    font-size: 10.5px; font-weight: 700; letter-spacing: .07em; text-transform: uppercase;
    color: var(--color-text-muted); padding: 10px 14px; text-align: left;
    background: var(--color-surface-raised);
    border-bottom: 1px solid var(--color-border);
  }
  .prop-table td {
    padding: 11px 14px; vertical-align: top; color: var(--color-text-secondary);
    border-bottom: 1px solid var(--color-border-light);
  }
  .prop-table tr:last-child td { border-bottom: none; }

  /* ── A11y list ───────────────────────────────────── */
  .a11y-list { list-style: none; padding: 0; display: flex; flex-direction: column; gap: 10px; }
  .a11y-item { display: flex; align-items: flex-start; gap: 12px; font-size: 14px; color: var(--color-text-secondary); line-height: 1.6; }
  .a11y-check {
    width: 20px; height: 20px; border-radius: 50%; flex-shrink: 0; margin-top: 1px;
    background: var(--color-success-bg); border: 1.5px solid var(--color-success-border);
    display: flex; align-items: center; justify-content: center;
    color: var(--color-success);
  }

  /* ── Scroll-to-top ───────────────────────────────── */
  .scroll-top {
    position: fixed; bottom: 32px; right: 32px; z-index: 500;
    width: 42px; height: 42px; border-radius: 50%;
    background: var(--color-surface); border: 1px solid var(--color-border);
    box-shadow: var(--shadow-lg); cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    color: var(--color-text-secondary);
    opacity: 0; transform: translateY(10px);
    transition: opacity .22s, transform .22s;
  }
  .scroll-top.show { opacity: 1; transform: translateY(0); }
  .scroll-top:hover { color: var(--color-text-primary); background: var(--color-surface-raised); }

  /* ════════════════════════════════════════════════════
     GLASS DEMO BACKDROP
     A gradient wash so frosted inputs have depth to blur.
  ════════════════════════════════════════════════════ */
  .glass-stage {
    position: relative;
    padding: 48px 36px;
    background:
      radial-gradient(ellipse 70% 70% at 15% 50%,  var(--color-primary-alpha) 0%, transparent 65%),
      radial-gradient(ellipse 60% 60% at 85% 30%,  var(--color-accent-alpha)  0%, transparent 65%),
      radial-gradient(ellipse 50% 50% at 50% 90%,  var(--color-info-bg)       0%, transparent 65%),
      var(--color-bg-grouped);
    border-bottom: 1px solid var(--color-border);
    display: flex; flex-direction: column; align-items: center; gap: 32px;
  }

  /* ════════════════════════════════════════════════════
     TOC RIGHT SIDEBAR override — use token colours
  ════════════════════════════════════════════════════ */
  .toc-platforms-label { color: var(--color-text-primary) !important; }
  .toc-platform-icons  { color: var(--color-text-primary) !important; }
  .toc-link            { color: var(--color-text-secondary) !important; }
  .toc-link:hover      { color: var(--color-text-primary) !important; }
  .toc-link.active     { color: var(--color-text-primary) !important; border-left-color: var(--color-primary) !important; }
  .toc-list            { border-left-color: var(--color-border-light) !important; }

  /* ════════════════════════════════════════════════════
     GLASS STAGE — nature photo background container
     The real photo creates depth for backdrop-filter blur
  ════════════════════════════════════════════════════ */
  .glass-stage {
    position: relative;
    min-height: 240px;
    padding: 48px 36px;
    background-size: cover;
    background-position: center;
    border-bottom: 1px solid var(--color-border, #d1d1d6);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 32px;
    overflow: hidden;
  }
  /* Dark overlay to improve contrast of glass panels */
  .glass-stage::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.28);
    pointer-events: none;
  }
  .glass-stage > * { position: relative; z-index: 1; }

  /* Glass panel — the frosted card container */
  .glass-panel {
    background: rgba(255,255,255,0.14);
    backdrop-filter: blur(24px) saturate(1.8);
    -webkit-backdrop-filter: blur(24px) saturate(1.8);
    border: 1px solid rgba(255,255,255,0.28);
    border-radius: 20px;
    box-shadow: 0 8px 40px rgba(0,0,0,0.25), inset 0 1px 0 rgba(255,255,255,0.3);
    padding: 28px 28px;
  }
  .glass-panel-sm { padding: 28px 28px; max-width: 440px; }

  /* Glass field wrapper */
  .glass-field {
    display: flex;
    flex-direction: column;
    gap: 6px;
    width: 100%;
  }

  /* Glass label — uppercase micro, white on dark bg */
  .glass-label {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .08em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.65);
    -webkit-font-smoothing: antialiased;
    user-select: none;
  }

  /* ── Glass input ─────────────────────────────────
     Core frosted input: semi-transparent bg, luminous
     border, heavy backdrop blur
  ──────────────────────────────────────────────── */
  .input-glass {
    display: block;
    width: 100%;
    height: var(--input-h-md, 42px);
    padding: 0 14px;
    font-size: 15px;
    font-family: inherit;
    font-weight: 400;
    letter-spacing: -.01em;
    color: rgba(255,255,255,0.95);

    background: rgba(255,255,255,0.18);
    backdrop-filter: blur(20px) saturate(1.8);
    -webkit-backdrop-filter: blur(20px) saturate(1.8);
    border: 1px solid rgba(255,255,255,0.32);
    border-radius: var(--radius-md, 10px);
    outline: none;
    box-shadow: 0 2px 12px rgba(0,0,0,0.12), inset 0 1px 0 rgba(255,255,255,0.25);
    transition: background 150ms ease, border-color 150ms ease, box-shadow 150ms ease;
    -webkit-appearance: none;
    appearance: none;
  }
  .input-glass::placeholder { color: rgba(255,255,255,0.45); }
  .input-glass:hover:not(:disabled) {
    background: rgba(255,255,255,0.24);
    border-color: rgba(255,255,255,0.45);
  }
  .input-glass:focus {
    background: rgba(255,255,255,0.28);
    border-color: rgba(255,255,255,0.6);
    box-shadow: 0 0 0 3px rgba(255,56,92,0.28), 0 2px 12px rgba(0,0,0,0.12), inset 0 1px 0 rgba(255,255,255,0.3);
  }
  .input-glass:disabled {
    background: rgba(255,255,255,0.08);
    border-color: rgba(255,255,255,0.12);
    color: rgba(255,255,255,0.35);
    cursor: not-allowed;
    backdrop-filter: none;
    -webkit-backdrop-filter: none;
  }
  .input-glass.is-error {
    border-color: rgba(255,80,80,0.7);
    box-shadow: 0 0 0 3px rgba(255,59,48,0.25);
  }
  .input-glass.is-success {
    border-color: rgba(80,220,100,0.7);
    box-shadow: 0 0 0 3px rgba(52,199,89,0.22);
  }

  /* Size modifiers */
  .input-glass-sm {
    height: var(--input-h-sm, 34px);
    font-size: 13px;
    padding: 0 10px;
    border-radius: var(--radius-sm, 8px);
  }
  .input-glass-lg {
    height: var(--input-h-lg, 52px);
    font-size: 16px;
    padding: 0 18px;
    border-radius: var(--radius-lg, 12px);
  }

  /* ── Glass search bar ──────────────────────────── */
  .input-glass-search {
    display: block;
    height: 56px;
    padding: 0 20px;
    font-size: 16px;
    font-family: inherit;
    font-weight: 400;
    color: rgba(255,255,255,0.95);
    background: rgba(255,255,255,0.16);
    backdrop-filter: blur(28px) saturate(2);
    -webkit-backdrop-filter: blur(28px) saturate(2);
    border: 1px solid rgba(255,255,255,0.3);
    border-radius: 999px;
    outline: none;
    box-shadow: 0 4px 32px rgba(0,0,0,0.2), inset 0 1px 0 rgba(255,255,255,0.25);
    transition: all 150ms ease;
    -webkit-appearance: none;
    appearance: none;
    width: 100%;
  }
  .input-glass-search::placeholder { color: rgba(255,255,255,0.5); }
  .input-glass-search:focus {
    background: rgba(255,255,255,0.24);
    border-color: rgba(255,255,255,0.55);
    box-shadow: 0 0 0 3px rgba(255,56,92,0.25), 0 4px 32px rgba(0,0,0,0.2);
  }

  /* ── Glass textarea ────────────────────────────── */
  .textarea-glass {
    display: block;
    width: 100%;
    min-height: 96px;
    padding: 12px 14px;
    font-size: 15px;
    font-family: inherit;
    font-weight: 400;
    line-height: 1.6;
    color: rgba(255,255,255,0.95);
    background: rgba(255,255,255,0.18);
    backdrop-filter: blur(20px) saturate(1.8);
    -webkit-backdrop-filter: blur(20px) saturate(1.8);
    border: 1px solid rgba(255,255,255,0.32);
    border-radius: var(--radius-md, 10px);
    outline: none;
    resize: vertical;
    box-shadow: 0 2px 12px rgba(0,0,0,0.12), inset 0 1px 0 rgba(255,255,255,0.2);
    transition: all 150ms ease;
  }
  .textarea-glass::placeholder { color: rgba(255,255,255,0.4); }
  .textarea-glass:focus {
    background: rgba(255,255,255,0.26);
    border-color: rgba(255,255,255,0.55);
    box-shadow: 0 0 0 3px rgba(255,56,92,0.25), 0 2px 12px rgba(0,0,0,0.12);
  }

  /* ── Glass select ──────────────────────────────── */
  .select-glass {
    height: var(--input-h-md, 42px);
    padding: 0 40px 0 14px;
    font-size: 15px;
    font-family: inherit;
    font-weight: 400;
    color: rgba(255,255,255,0.95);
    background: rgba(255,255,255,0.18);
    backdrop-filter: blur(20px) saturate(1.8);
    -webkit-backdrop-filter: blur(20px) saturate(1.8);
    border: 1px solid rgba(255,255,255,0.32);
    border-radius: var(--radius-md, 10px);
    outline: none;
    width: 100%;
    cursor: pointer;
    -webkit-appearance: none;
    appearance: none;
    box-shadow: 0 2px 12px rgba(0,0,0,0.12);
    transition: all 150ms ease;
  }
  .select-glass option { background: #1c1c2e; color: #ffffff; }
  .select-glass:focus {
    border-color: rgba(255,255,255,0.55);
    box-shadow: 0 0 0 3px rgba(255,56,92,0.25);
  }

  /* ── Glass country select (phone) ─────────────── */
  .country-select-glass {
    flex-shrink: 0;
    height: var(--input-h-md, 42px);
    padding: 0 10px;
    font-size: 14px;
    font-family: inherit;
    color: rgba(255,255,255,0.9);
    background: rgba(255,255,255,0.14);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(255,255,255,0.25);
    border-right: none;
    border-radius: var(--radius-md, 10px) 0 0 var(--radius-md, 10px);
    outline: none;
    cursor: pointer;
    -webkit-appearance: none;
    appearance: none;
  }
  .country-select-glass option { background: #1c1c2e; }

  /* ── Glass OTP cells ───────────────────────────── */
  .otp-glass-cell {
    background: rgba(255,255,255,0.18) !important;
    backdrop-filter: blur(20px) saturate(1.8);
    -webkit-backdrop-filter: blur(20px) saturate(1.8);
    border: 1.5px solid rgba(255,255,255,0.32) !important;
    color: rgba(255,255,255,0.95) !important;
    box-shadow: 0 2px 8px rgba(0,0,0,0.2) !important;
  }
  .otp-glass-cell:focus {
    background: rgba(255,255,255,0.28) !important;
    border-color: rgba(255,255,255,0.6) !important;
    box-shadow: 0 0 0 3px rgba(255,56,92,0.3), 0 2px 8px rgba(0,0,0,0.2) !important;
  }
  .otp-glass-cell.is-filled {
    border-color: rgba(255,56,92,0.7) !important;
    background: rgba(255,56,92,0.2) !important;
  }

  /* ── Glass stepper btn ─────────────────────────── */
  .stepper-btn-glass {
    flex: 1;
    width: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255,255,255,0.1);
    border: none;
    cursor: pointer;
    color: rgba(255,255,255,0.7);
    transition: background 100ms ease;
  }
  .stepper-btn-glass:first-child {
    border-bottom: 1px solid rgba(255,255,255,0.15);
    border-radius: 0 var(--radius-md, 10px) 0 0;
  }
  .stepper-btn-glass:last-child { border-radius: 0 0 var(--radius-md, 10px) 0; }
  .stepper-btn-glass:hover {
    background: rgba(255,255,255,0.2);
    color: rgba(255,255,255,0.95);
  }

  /* ── Primary CTA button (glass context) ────────── */
  .btn-glass-primary {
    height: 44px;
    padding: 0 28px;
    border-radius: var(--radius-md, 10px);
    background: var(--color-primary, #FF385C);
    color: #ffffff;
    font-size: 15px;
    font-weight: 600;
    font-family: inherit;
    border: none;
    cursor: pointer;
    letter-spacing: -.01em;
    transition: filter 140ms ease, transform 80ms ease;
    width: 100%;
    box-shadow: 0 4px 20px rgba(255,56,92,0.4);
  }
  .btn-glass-primary:hover { filter: brightness(1.08); }
  .btn-glass-primary:active { transform: scale(0.98); }
  </style>
</head>
<body>

<?php include $partials . 'header.php'; ?>
<?php include $partials . 'drawer_sidebar.php'; ?>

<div class="page-layout">

  <!-- ── Left sidebar ── -->
  <aside class="sidebar-left">
    <?php include $partials . 'left_sidebar.php'; ?>
  </aside>

  <!-- ── Main content ── -->
  <main class="main-content" id="top">

    <!-- ───────────────────────────────────────────────
         PAGE HEADER
    ─────────────────────────────────────────────── -->
    <div class="breadcrumb" style="display:flex;align-items:center;gap:6px;margin-bottom:20px;font-size:13px;color:var(--color-text-secondary)">
      <a href="/index.php" style="color:var(--color-text-link);text-decoration:none">Home</a>
      <span style="color:var(--color-text-muted)">›</span>
      <a href="/Atom" style="color:var(--color-text-link);text-decoration:none">Atom</a>
      <span style="color:var(--color-text-muted)">›</span>
      <span>Input Fields</span>
    </div>

    <p class="page-eyebrow">Atom · Input</p>
    <h1 class="page-title">Input Fields</h1>
    <p class="page-intro">
      Two complete component suites — <strong>Solid</strong> (Apple HIG / Airbnb ultra-premium)
      and <strong>Glass</strong> (liquid-glass morphism). Every colour token lives in
      <code>colors.css</code>. All form styles live in <code>input.css</code> only.
    </p>

    <div class="callout callout-info">
      <span class="callout-icon">ℹ</span>
      <span>All styles live in <code>/Atom/input/input.css</code>.
        To change any colour, edit <code>colors.css</code> only — every component adapts automatically.</span>
    </div>

    <hr class="page-rule" />

    <!-- ═══════════════════════════════════════════════════════════
         SUITE 01 — SOLID / APPLE-AIRBNB STYLE
    ═══════════════════════════════════════════════ -->
    <section id="standard">
      <p class="section-label">Suite 01</p>
      <h2 class="section-title">Solid — Apple HIG × Airbnb</h2>
      <p class="section-body">
        Clean white surfaces, precise radii, coral-red focus rings.
        The <code>.input</code> base class works across every native input type.
        Size with <code>.input-sm</code> / <code>.input-lg</code>.
      </p>

      <!-- Text / Email / PIN -->
      <h3 class="section-h3" id="text-email">Text, Email &amp; PIN</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview col">
          <div class="field" style="max-width:420px">
            <label class="field-label" for="t1">Full name <span class="required">*</span></label>
            <input class="input" id="t1" type="text" placeholder="e.g. Rahul Verma" />
            <span class="field-helper">As it appears on your government-issued ID.</span>
          </div>
          <div class="field" style="max-width:420px">
            <label class="field-label" for="t2">Email address</label>
            <input class="input" id="t2" type="email" placeholder="you@email.com" />
          </div>
          <div class="field" style="max-width:220px">
            <label class="field-label" for="t3">PIN code</label>
            <input class="input" id="t3" type="text" placeholder="400001" maxlength="6" />
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="field"&gt;
  &lt;label class="field-label" for="name"&gt;Full name &lt;span class="required"&gt;*&lt;/span&gt;&lt;/label&gt;
  &lt;input class="input" id="name" type="text" placeholder="e.g. Rahul Verma" /&gt;
  &lt;span class="field-helper"&gt;As it appears on your ID.&lt;/span&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- Sizes -->
      <h3 class="section-h3" id="sizes">Sizes</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview col">
          <div class="field" style="max-width:460px">
            <label class="field-label">Small · <code>.input-sm</code> · 34 px</label>
            <input class="input input-sm" type="text" placeholder="Small input" />
          </div>
          <div class="field" style="max-width:460px">
            <label class="field-label">Medium · <code>.input</code> · 42 px (default)</label>
            <input class="input" type="text" placeholder="Medium input" />
          </div>
          <div class="field" style="max-width:460px">
            <label class="field-label">Large · <code>.input-lg</code> · 52 px</label>
            <input class="input input-lg" type="text" placeholder="Large input" />
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;input class="input input-sm" type="text" placeholder="Small" /&gt;
&lt;input class="input"          type="text" placeholder="Medium (default)" /&gt;
&lt;input class="input input-lg" type="text" placeholder="Large" /&gt;</pre>
      </div>

      <!-- States -->
      <h3 class="section-h3" id="states">States</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview col">
          <div class="field" style="max-width:420px">
            <label class="field-label" for="s1">Default</label>
            <input class="input" id="s1" type="text" placeholder="Normal input" />
          </div>
          <div class="field" style="max-width:420px">
            <label class="field-label" for="s2">Error</label>
            <input class="input is-error" id="s2" type="email" value="bad@@email" aria-invalid="true" aria-describedby="s2err" />
            <span class="field-helper is-error" id="s2err">Please enter a valid email address.</span>
          </div>
          <div class="field" style="max-width:420px">
            <label class="field-label" for="s3">Success</label>
            <input class="input is-success" id="s3" type="email" value="rahul@holidayseva.com" />
            <span class="field-helper is-success">Looks good!</span>
          </div>
          <div class="field" style="max-width:420px">
            <label class="field-label" for="s4">Disabled</label>
            <input class="input" id="s4" type="text" placeholder="Cannot edit" disabled />
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;input class="input is-error" type="email" aria-invalid="true" aria-describedby="err" /&gt;
&lt;span class="field-helper is-error" id="err"&gt;Please enter a valid email.&lt;/span&gt;

&lt;input class="input is-success" type="email" value="ok@email.com" /&gt;
&lt;input class="input" type="text" disabled /&gt;</pre>
      </div>

      <!-- Icons -->
      <h3 class="section-h3" id="icons">With Icons</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview col">
          <div class="field" style="max-width:420px">
            <label class="field-label">Search — leading icon</label>
            <div class="input-wrap">
              <span class="input-icon" aria-hidden="true">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="7" cy="7" r="4.5" stroke="currentColor" stroke-width="1.4"/><path d="M10.5 10.5l3 3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>
              </span>
              <input class="input input-search" type="search" placeholder="Search destinations…" />
            </div>
          </div>
          <div class="field" style="max-width:420px">
            <label class="field-label">Email — trailing icon</label>
            <div class="input-wrap icon-right">
              <input class="input" type="email" placeholder="your@email.com" />
              <span class="input-icon input-icon-right" aria-hidden="true">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="3.5" width="13" height="9" rx="1.5" stroke="currentColor" stroke-width="1.3"/><path d="M1.5 5.5l6.5 4 6.5-4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
              </span>
            </div>
          </div>
          <div class="field" style="max-width:420px">
            <label class="field-label">Location — both icons</label>
            <div class="input-wrap icon-both">
              <span class="input-icon" aria-hidden="true">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1a5 5 0 015 5c0 3.5-5 9-5 9S3 9.5 3 6a5 5 0 015-5z" stroke="currentColor" stroke-width="1.3"/><circle cx="8" cy="6" r="1.5" stroke="currentColor" stroke-width="1.3"/></svg>
              </span>
              <input class="input" type="text" placeholder="City or destination" />
              <span class="input-icon input-icon-right" aria-hidden="true">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="input-wrap"&gt;
  &lt;span class="input-icon" aria-hidden="true"&gt;…svg…&lt;/span&gt;
  &lt;input class="input input-search" type="search" /&gt;
&lt;/div&gt;
&lt;div class="input-wrap icon-right"&gt;
  &lt;input class="input" type="email" /&gt;
  &lt;span class="input-icon input-icon-right" aria-hidden="true"&gt;…svg…&lt;/span&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- Password -->
      <h3 class="section-h3" id="password">Password</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview">
          <div class="field" style="max-width:420px;width:100%">
            <label class="field-label" for="pw1">Password</label>
            <div class="input-wrap icon-right">
              <input class="input" id="pw1" type="password" placeholder="Min. 8 characters" />
              <button class="pw-toggle" type="button" aria-label="Show password" onclick="togglePw(this,'pw1')">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M1 9C1 9 4 3.5 9 3.5S17 9 17 9s-3 5.5-8 5.5S1 9 1 9z" stroke="currentColor" stroke-width="1.4"/><circle cx="9" cy="9" r="2.5" stroke="currentColor" stroke-width="1.4"/></svg>
              </button>
            </div>
            <span class="field-helper">Use letters, numbers and symbols.</span>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="input-wrap icon-right"&gt;
  &lt;input class="input" id="pw" type="password" /&gt;
  &lt;button class="pw-toggle" type="button" aria-label="Show password" onclick="togglePw(this,'pw')"&gt;…eye svg…&lt;/button&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- Number stepper -->
      <h3 class="section-h3" id="number">Number Stepper</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview" style="gap:24px;flex-wrap:wrap">
          <div class="field" style="max-width:200px">
            <label class="field-label" for="ng">Guests</label>
            <div class="number-wrap">
              <input class="input" id="ng" type="number" value="2" min="1" max="16" />
              <div class="number-stepper">
                <button class="stepper-btn" type="button" onclick="step('ng',1)" aria-label="Increase guests">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 9V3M3 6l3-3 3 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <button class="stepper-btn" type="button" onclick="step('ng',-1)" aria-label="Decrease guests">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 3v6M3 6l3 3 3-3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
              </div>
            </div>
          </div>
          <div class="field" style="max-width:200px">
            <label class="field-label" for="nn">Nights</label>
            <div class="number-wrap">
              <input class="input" id="nn" type="number" value="3" min="1" max="30" />
              <div class="number-stepper">
                <button class="stepper-btn" type="button" onclick="step('nn',1)" aria-label="Increase nights">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 9V3M3 6l3-3 3 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <button class="stepper-btn" type="button" onclick="step('nn',-1)" aria-label="Decrease nights">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 3v6M3 6l3 3 3-3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
              </div>
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="number-wrap"&gt;
  &lt;input class="input" id="guests" type="number" value="2" min="1" max="16" /&gt;
  &lt;div class="number-stepper"&gt;
    &lt;button class="stepper-btn" onclick="step('guests',1)"  aria-label="Increase"&gt;▲&lt;/button&gt;
    &lt;button class="stepper-btn" onclick="step('guests',-1)" aria-label="Decrease"&gt;▼&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- Phone -->
      <h3 class="section-h3" id="phone">Phone Number</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview">
          <div class="field" style="max-width:460px;width:100%">
            <label class="field-label" for="ph1">Phone number</label>
            <div class="phone-wrap">
              <select class="country-select" aria-label="Country code">
                <option value="+91">🇮🇳 +91</option>
                <option value="+1">🇺🇸 +1</option>
                <option value="+44">🇬🇧 +44</option>
                <option value="+971">🇦🇪 +971</option>
                <option value="+65">🇸🇬 +65</option>
                <option value="+61">🇦🇺 +61</option>
              </select>
              <input class="input" id="ph1" type="tel" placeholder="98765 43210" />
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="phone-wrap"&gt;
  &lt;select class="country-select" aria-label="Country code"&gt;
    &lt;option value="+91"&gt;🇮🇳 +91&lt;/option&gt;
  &lt;/select&gt;
  &lt;input class="input" type="tel" placeholder="98765 43210" /&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- Select -->
      <h3 class="section-h3" id="select">Select / Dropdown</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview" style="flex-wrap:wrap;gap:20px">
          <div class="field" style="flex:1;min-width:200px;max-width:280px">
            <label class="field-label" for="sel1">Property type</label>
            <div class="select-wrap">
              <select class="select-native" id="sel1">
                <option value="">Select a type…</option>
                <option>Apartment</option><option>Villa</option>
                <option>Cottage</option><option>Treehouse</option><option>Houseboat</option>
              </select>
              <span class="select-caret" aria-hidden="true">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
            </div>
          </div>
          <div class="field" style="flex:1;min-width:200px;max-width:280px">
            <label class="field-label" for="sel2">Sort by</label>
            <div class="select-wrap">
              <select class="select-native" id="sel2">
                <option>Recommended</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
                <option>Top rated</option>
              </select>
              <span class="select-caret" aria-hidden="true">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="select-wrap"&gt;
  &lt;select class="select-native"&gt;
    &lt;option value=""&gt;Select a type…&lt;/option&gt;
    &lt;option&gt;Apartment&lt;/option&gt;
  &lt;/select&gt;
  &lt;span class="select-caret" aria-hidden="true"&gt;…chevron…&lt;/span&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- Date & Time -->
      <h3 class="section-h3" id="datetime">Date &amp; Time</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview" style="flex-wrap:wrap;gap:20px">
          <div class="field" style="flex:1;min-width:160px"><label class="field-label" for="dt1">Check-in</label><input class="input" id="dt1" type="date" /></div>
          <div class="field" style="flex:1;min-width:160px"><label class="field-label" for="dt2">Check-out</label><input class="input" id="dt2" type="date" /></div>
          <div class="field" style="flex:1;min-width:160px"><label class="field-label" for="dt3">Arrival time</label><input class="input" id="dt3" type="time" value="14:00" /></div>
        </div>
        <pre class="demo-code" hidden>&lt;input class="input" type="date" /&gt;
&lt;input class="input" type="time" value="14:00" /&gt;</pre>
      </div>

      <!-- Textarea -->
      <h3 class="section-h3" id="textarea">Textarea</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview">
          <div class="field" style="max-width:520px;width:100%">
            <label class="field-label" for="ta1">Bio</label>
            <textarea class="textarea" id="ta1" maxlength="300" rows="4"
                      placeholder="Tell guests a little about yourself…"
                      oninput="countChars(this,'tc1',300)"></textarea>
            <div class="textarea-footer">
              <span class="field-helper">Shown on your public host profile.</span>
              <span class="textarea-count" id="tc1">0 / 300</span>
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;textarea class="textarea" maxlength="300" rows="4"
          oninput="countChars(this,'count',300)"&gt;&lt;/textarea&gt;
&lt;div class="textarea-footer"&gt;
  &lt;span class="field-helper"&gt;Helper text&lt;/span&gt;
  &lt;span class="textarea-count" id="count"&gt;0 / 300&lt;/span&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- Range -->
      <h3 class="section-h3" id="range">Range Slider</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview col">
          <div class="field" style="max-width:520px;width:100%">
            <label class="field-label">Price per night</label>
            <div class="range-wrap">
              <input type="range" id="rng1" min="0" max="20000" value="5000" step="500" style="--pct:25%" oninput="syncRange(this,'rv1','₹')" />
              <span class="range-val" id="rv1">₹5,000</span>
            </div>
          </div>
          <div class="field" style="max-width:520px;width:100%">
            <label class="field-label">Minimum rating</label>
            <div class="range-wrap">
              <input type="range" id="rng2" min="1" max="5" value="3" step="0.5" style="--pct:50%" oninput="syncRange(this,'rv2','','★')" />
              <span class="range-val" id="rv2">3★</span>
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="range-wrap"&gt;
  &lt;input type="range" id="price" min="0" max="20000" value="5000" step="500"
         style="--pct:25%" oninput="syncRange(this,'rv','₹')" /&gt;
  &lt;span class="range-val" id="rv"&gt;₹5,000&lt;/span&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- Checkbox & Radio -->
      <h3 class="section-h3" id="checkradio">Checkbox &amp; Radio</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview" style="flex-wrap:wrap;gap:32px">
          <div style="display:flex;flex-direction:column;gap:14px">
            <label class="checkbox-wrap"><input type="checkbox" checked /><span class="checkbox-label">Entire home<span class="checkbox-sub">You'll have the place to yourself.</span></span></label>
            <label class="checkbox-wrap"><input type="checkbox" /><span class="checkbox-label">Private room</span></label>
            <label class="checkbox-wrap"><input type="checkbox" disabled /><span class="checkbox-label" style="opacity:.5">Shared room (unavailable)</span></label>
          </div>
          <div style="display:flex;flex-direction:column;gap:14px">
            <label class="radio-wrap"><input type="radio" name="sort" checked /><span class="checkbox-label">Recommended</span></label>
            <label class="radio-wrap"><input type="radio" name="sort" /><span class="checkbox-label">Price: Low to High</span></label>
            <label class="radio-wrap"><input type="radio" name="sort" /><span class="checkbox-label">Top rated</span></label>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;label class="checkbox-wrap"&gt;
  &lt;input type="checkbox" checked /&gt;
  &lt;span class="checkbox-label"&gt;Entire home
    &lt;span class="checkbox-sub"&gt;You'll have the place to yourself.&lt;/span&gt;
  &lt;/span&gt;
&lt;/label&gt;
&lt;label class="radio-wrap"&gt;
  &lt;input type="radio" name="sort" checked /&gt;
  &lt;span class="checkbox-label"&gt;Recommended&lt;/span&gt;
&lt;/label&gt;</pre>
      </div>

      <!-- Compound -->
      <h3 class="section-h3" id="compound">Compound / Row Layout</h3>
      <div class="demo-card">
        <div class="demo-bar"><button class="demo-tab active" onclick="switchTab(this)">Preview</button></div>
        <div class="demo-preview col">
          <div class="field-row" style="max-width:580px">
            <div class="field"><label class="field-label" for="c1">First name</label><input class="input" id="c1" type="text" placeholder="Rahul" /></div>
            <div class="field"><label class="field-label" for="c2">Last name</label><input class="input" id="c2" type="text" placeholder="Verma" /></div>
          </div>
          <div class="field-row" style="max-width:580px">
            <div class="field" style="flex:2"><label class="field-label" for="c3">Street address</label><input class="input" id="c3" type="text" placeholder="12 Marine Drive" /></div>
            <div class="field" style="flex:1"><label class="field-label" for="c4">PIN code</label><input class="input" id="c4" type="text" placeholder="400001" maxlength="6" /></div>
          </div>
        </div>
      </div>

      <!-- Floating label -->
      <h3 class="section-h3" id="floating">Floating Label</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview" style="flex-wrap:wrap;gap:20px">
          <div class="float-field" style="max-width:260px;flex:1;min-width:180px">
            <input class="float-input" id="fl1" type="text" placeholder=" " />
            <label class="float-label" for="fl1">Full name</label>
          </div>
          <div class="float-field" style="max-width:260px;flex:1;min-width:180px">
            <input class="float-input" id="fl2" type="email" placeholder=" " />
            <label class="float-label" for="fl2">Email address</label>
          </div>
          <div class="float-field" style="max-width:260px;flex:1;min-width:180px">
            <input class="float-input" id="fl3" type="text" placeholder=" " value="Mumbai" />
            <label class="float-label" for="fl3">City (pre-filled)</label>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="float-field"&gt;
  &lt;input class="float-input" id="name" type="text" placeholder=" " /&gt;
  &lt;label class="float-label" for="name"&gt;Full name&lt;/label&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- Tag input -->
      <h3 class="section-h3" id="tags">Tag Input</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview">
          <div class="field" style="max-width:520px;width:100%">
            <label class="field-label">Amenities</label>
            <div class="tag-input-wrap" onclick="document.getElementById('ti').focus()">
              <span class="tag-pill">WiFi <button class="tag-pill-remove" onclick="removeTag(this)" aria-label="Remove WiFi">×</button></span>
              <span class="tag-pill">Pool <button class="tag-pill-remove" onclick="removeTag(this)" aria-label="Remove Pool">×</button></span>
              <span class="tag-pill">Parking <button class="tag-pill-remove" onclick="removeTag(this)" aria-label="Remove Parking">×</button></span>
              <input class="tag-input-inner" id="ti" type="text" placeholder="Add amenity…" onkeydown="handleTag(event)" />
            </div>
            <span class="field-helper">Press Enter to add · × to remove.</span>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="tag-input-wrap"&gt;
  &lt;span class="tag-pill"&gt;WiFi &lt;button class="tag-pill-remove" aria-label="Remove WiFi"&gt;×&lt;/button&gt;&lt;/span&gt;
  &lt;input class="tag-input-inner" type="text" placeholder="Add amenity…" onkeydown="handleTag(event)" /&gt;
&lt;/div&gt;</pre>
      </div>
    </section>

    <hr class="page-rule" />

    <!-- ═══════════════════════════════════════════════════════════
         SUITE 01B — OTP / PIN (Solid)
    ═══════════════════════════════════════════════════════════════ -->
    <section id="otp">
      <p class="section-label">Suite 01 · OTP</p>
      <h2 class="section-title">OTP / PIN</h2>
      <p class="section-body">
        Auto-advances on input, backtracks on delete, supports paste and arrow-key navigation.
        Classes: <code>.otp-input</code> · <code>.otp-input-lg</code> · <code>.otp-input-sm</code>
      </p>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview center" style="gap:40px">
          <div style="text-align:center">
            <p style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--color-text-muted);margin-bottom:16px">Standard · 6-digit OTP</p>
            <div class="otp-wrap" id="otp6" role="group" aria-label="One-time passcode">
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 1" />
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 2" />
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 3" />
              <span class="otp-sep" aria-hidden="true">–</span>
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 4" />
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 5" />
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 6" />
            </div>
          </div>
          <div style="text-align:center">
            <p style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--color-text-muted);margin-bottom:16px">Large · 4-digit PIN</p>
            <div class="otp-wrap" id="otp4" role="group" aria-label="PIN code">
              <input class="otp-input otp-input-lg" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 1" />
              <input class="otp-input otp-input-lg" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 2" />
              <input class="otp-input otp-input-lg" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 3" />
              <input class="otp-input otp-input-lg" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 4" />
            </div>
          </div>
          <div style="text-align:center">
            <p style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--color-error-text);margin-bottom:16px">Error state</p>
            <div class="otp-wrap" role="group" aria-label="Invalid code">
              <input class="otp-input is-error" type="text" maxlength="1" value="5" aria-label="Digit 1" />
              <input class="otp-input is-error" type="text" maxlength="1" value="3" aria-label="Digit 2" />
              <input class="otp-input is-error" type="text" maxlength="1" value="9" aria-label="Digit 3" />
              <input class="otp-input is-error" type="text" maxlength="1" value="1" aria-label="Digit 4" />
            </div>
            <p style="font-size:12px;color:var(--color-error-text);margin-top:10px;font-weight:500">Incorrect code. Please try again.</p>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="otp-wrap" id="otp6" role="group" aria-label="One-time passcode"&gt;
  &lt;input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 1" /&gt;
  &lt;!-- × 5 more --&gt;
&lt;/div&gt;
&lt;script&gt;initOTP('otp6');&lt;/script&gt;</pre>
      </div>
    </section>

    <hr class="page-rule" />

    <!-- ═══════════════════════════════════════════════════════════
         SUITE 02 — GLASSMORPHISM
         Nature photography backgrounds to show glass depth.
    ═══════════════════════════════════════════════════════════════ -->
    <section id="glass">
      <p class="section-label">Suite 02</p>
      <h2 class="section-title">Glassmorphism Set</h2>
      <p class="section-body">
        Apple liquid-glass aesthetic — frosted backdrop-filter blur, luminous border, layered shadows.
        Every component mirrors the Solid suite but uses <code>.input-glass</code>,
        <code>.textarea-glass</code>, <code>.select-glass</code> classes.
        Real nature photography is used as the stage background so the blur effect renders properly.
      </p>

      <!-- Glass: Text, Email, PIN -->
      <h3 class="section-h3" id="glass-text">Glass · Text, Email &amp; PIN</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <!-- 🌿 Nature bg: Maldives ocean aerial — rich teal water creates perfect glass contrast -->
        <div class="glass-stage" style="background-image:url('https://images.unsplash.com/photo-1514282401047-d79a71a590e8?w=1200&q=80&fit=crop')">
          <div class="glass-panel" style="width:100%;max-width:480px;display:flex;flex-direction:column;gap:18px">
            <div class="glass-field">
              <label class="glass-label" for="gt1">Full name</label>
              <input class="input-glass" id="gt1" type="text" placeholder="e.g. Rahul Verma" />
            </div>
            <div class="glass-field">
              <label class="glass-label" for="gt2">Email address</label>
              <input class="input-glass" id="gt2" type="email" placeholder="you@email.com" />
            </div>
            <div class="glass-field">
              <label class="glass-label" for="gt3">PIN code</label>
              <input class="input-glass" id="gt3" type="text" placeholder="400001" maxlength="6" style="max-width:180px" />
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="glass-field"&gt;
  &lt;label class="glass-label" for="name"&gt;Full name&lt;/label&gt;
  &lt;input class="input-glass" id="name" type="text" placeholder="e.g. Rahul Verma" /&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- Glass: Sizes -->
      <h3 class="section-h3" id="glass-sizes">Glass · Sizes</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <!-- 🌲 Nature bg: Dense green forest canopy — dark green makes frosting very visible -->
        <div class="glass-stage" style="background-image:url('https://images.unsplash.com/photo-1448375240586-882707db888b?w=1200&q=80&fit=crop')">
          <div class="glass-panel" style="width:100%;max-width:480px;display:flex;flex-direction:column;gap:20px">
            <div class="glass-field">
              <label class="glass-label">Small · <code style="background:rgba(255,255,255,0.15);border:none;color:rgba(255,255,255,0.9)">.input-glass-sm</code></label>
              <input class="input-glass input-glass-sm" type="text" placeholder="Small glass input" />
            </div>
            <div class="glass-field">
              <label class="glass-label">Medium · <code style="background:rgba(255,255,255,0.15);border:none;color:rgba(255,255,255,0.9)">.input-glass</code></label>
              <input class="input-glass" type="text" placeholder="Medium glass input (default)" />
            </div>
            <div class="glass-field">
              <label class="glass-label">Large · <code style="background:rgba(255,255,255,0.15);border:none;color:rgba(255,255,255,0.9)">.input-glass-lg</code></label>
              <input class="input-glass input-glass-lg" type="text" placeholder="Large glass input" />
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;input class="input-glass input-glass-sm" type="text" placeholder="Small" /&gt;
&lt;input class="input-glass"              type="text" placeholder="Medium (default)" /&gt;
&lt;input class="input-glass input-glass-lg" type="text" placeholder="Large" /&gt;</pre>
      </div>

      <!-- Glass: States -->
      <h3 class="section-h3" id="glass-states">Glass · States</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <!-- 🏔️ Nature bg: Snow-capped mountain lake — cool blues complement the glass effect -->
        <div class="glass-stage" style="background-image:url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=1200&q=80&fit=crop')">
          <div class="glass-panel" style="width:100%;max-width:480px;display:flex;flex-direction:column;gap:18px">
            <div class="glass-field">
              <label class="glass-label">Default</label>
              <input class="input-glass" type="text" placeholder="Normal glass input" />
            </div>
            <div class="glass-field">
              <label class="glass-label">Error</label>
              <input class="input-glass is-error" type="email" value="bad@@email" aria-invalid="true" />
              <span style="font-size:12px;color:#ff6b6b;margin-top:2px">Please enter a valid email address.</span>
            </div>
            <div class="glass-field">
              <label class="glass-label">Success</label>
              <input class="input-glass is-success" type="email" value="rahul@holidayseva.com" />
              <span style="font-size:12px;color:#6bcb77;margin-top:2px">Looks good!</span>
            </div>
            <div class="glass-field">
              <label class="glass-label">Disabled</label>
              <input class="input-glass" type="text" placeholder="Cannot edit" disabled />
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;input class="input-glass is-error" type="email" aria-invalid="true" /&gt;
&lt;input class="input-glass is-success" type="email" value="ok@email.com" /&gt;
&lt;input class="input-glass" type="text" disabled /&gt;</pre>
      </div>

      <!-- Glass: Icons + Password -->
      <h3 class="section-h3" id="glass-icons">Glass · Icons &amp; Password</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <!-- 🌅 Nature bg: Sunset over ocean — warm coral-orange tones match brand primary -->
        <div class="glass-stage" style="background-image:url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=1200&q=80&fit=crop')">
          <div class="glass-panel" style="width:100%;max-width:480px;display:flex;flex-direction:column;gap:18px">
            <div class="glass-field">
              <label class="glass-label">Search — leading icon</label>
              <div class="input-wrap">
                <span class="input-icon" aria-hidden="true" style="color:rgba(255,255,255,0.7)">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="7" cy="7" r="4.5" stroke="currentColor" stroke-width="1.4"/><path d="M10.5 10.5l3 3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>
                </span>
                <input class="input-glass" type="search" placeholder="Search destinations…" />
              </div>
            </div>
            <div class="glass-field">
              <label class="glass-label">Location — both icons</label>
              <div class="input-wrap icon-both">
                <span class="input-icon" aria-hidden="true" style="color:rgba(255,255,255,0.7)">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1a5 5 0 015 5c0 3.5-5 9-5 9S3 9.5 3 6a5 5 0 015-5z" stroke="currentColor" stroke-width="1.3"/><circle cx="8" cy="6" r="1.5" stroke="currentColor" stroke-width="1.3"/></svg>
                </span>
                <input class="input-glass" type="text" placeholder="City or destination" />
                <span class="input-icon input-icon-right" aria-hidden="true" style="color:rgba(255,255,255,0.7)">
                  <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
              </div>
            </div>
            <div class="glass-field">
              <label class="glass-label">Password — eye toggle</label>
              <div class="input-wrap icon-right">
                <input class="input-glass" id="gpw1" type="password" placeholder="Min. 8 characters" />
                <button class="pw-toggle" type="button" aria-label="Show password" onclick="togglePw(this,'gpw1')" style="color:rgba(255,255,255,0.7)">
                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M1 9C1 9 4 3.5 9 3.5S17 9 17 9s-3 5.5-8 5.5S1 9 1 9z" stroke="currentColor" stroke-width="1.4"/><circle cx="9" cy="9" r="2.5" stroke="currentColor" stroke-width="1.4"/></svg>
                </button>
              </div>
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="input-wrap"&gt;
  &lt;span class="input-icon" aria-hidden="true"&gt;…svg…&lt;/span&gt;
  &lt;input class="input-glass" type="search" /&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- Glass: Select + Phone + Number -->
      <h3 class="section-h3" id="glass-compound">Glass · Select, Phone &amp; Number</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <!-- 🌸 Nature bg: Cherry blossoms — pink tones reinforce brand coral -->
        <div class="glass-stage" style="background-image:url('https://images.unsplash.com/photo-1522383225653-ed111181a951?w=1200&q=80&fit=crop')">
          <div class="glass-panel" style="width:100%;max-width:480px;display:flex;flex-direction:column;gap:18px">
            <div class="glass-field">
              <label class="glass-label">Property type</label>
              <div class="select-wrap">
                <select class="select-glass">
                  <option value="">Select a type…</option>
                  <option>Apartment</option><option>Villa</option>
                  <option>Cottage</option><option>Treehouse</option>
                </select>
                <span class="select-caret" aria-hidden="true" style="color:rgba(255,255,255,0.7)">
                  <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
              </div>
            </div>
            <div class="glass-field">
              <label class="glass-label">Phone number</label>
              <div class="phone-wrap">
                <select class="country-select-glass" aria-label="Country code">
                  <option value="+91">🇮🇳 +91</option>
                  <option value="+1">🇺🇸 +1</option>
                  <option value="+44">🇬🇧 +44</option>
                </select>
                <input class="input-glass" type="tel" placeholder="98765 43210" style="border-radius:0 var(--radius-md) var(--radius-md) 0;border-left:none" />
              </div>
            </div>
            <div class="glass-field">
              <label class="glass-label">Guests</label>
              <div class="number-wrap" style="max-width:200px">
                <input class="input-glass" id="gng" type="number" value="2" min="1" max="16" style="padding-right:46px" />
                <div class="number-stepper">
                  <button class="stepper-btn-glass" type="button" onclick="step('gng',1)" aria-label="Increase guests">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 9V3M3 6l3-3 3 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  </button>
                  <button class="stepper-btn-glass" type="button" onclick="step('gng',-1)" aria-label="Decrease guests">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 3v6M3 6l3 3 3-3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="select-wrap"&gt;
  &lt;select class="select-glass"&gt;…&lt;/select&gt;
  &lt;span class="select-caret" aria-hidden="true"&gt;…chevron…&lt;/span&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- Glass: Textarea + Range -->
      <h3 class="section-h3" id="glass-textarea">Glass · Textarea &amp; Range</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <!-- 🌊 Nature bg: Northern Lights / Aurora — deep purple-green creates dramatic depth -->
        <div class="glass-stage" style="background-image:url('https://images.unsplash.com/photo-1531366936337-7c912a4589a7?w=1200&q=80&fit=crop')">
          <div class="glass-panel" style="width:100%;max-width:500px;display:flex;flex-direction:column;gap:18px">
            <div class="glass-field">
              <label class="glass-label">Property description</label>
              <textarea class="textarea-glass" rows="3" placeholder="Describe your space…"></textarea>
            </div>
            <div class="glass-field">
              <label class="glass-label">Price per night</label>
              <div class="range-wrap">
                <input type="range" id="grng" min="0" max="20000" value="8000" step="500" style="--pct:40%;filter:brightness(1.2)" oninput="syncRange(this,'grv','₹')" />
                <span class="range-val" id="grv" style="color:rgba(255,255,255,0.9)">₹8,000</span>
              </div>
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;textarea class="textarea-glass" rows="3" placeholder="Describe your space…"&gt;&lt;/textarea&gt;

&lt;div class="range-wrap"&gt;
  &lt;input type="range" min="0" max="20000" value="8000" style="--pct:40%" /&gt;
  &lt;span class="range-val"&gt;₹8,000&lt;/span&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- Glass: OTP -->
      <h3 class="section-h3" id="glass-otp">Glass · OTP / PIN</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <!-- 🌋 Nature bg: Lava / volcanic rock with glowing cracks — dramatic and vivid -->
        <div class="glass-stage" style="background-image:url('https://images.unsplash.com/photo-1445262102387-5fbb30a5e59d?w=1200&q=80&fit=crop')">
          <div class="glass-panel glass-panel-sm" style="display:flex;flex-direction:column;align-items:center;gap:24px;min-width:340px">
            <div style="text-align:center">
              <p style="font-size:20px;font-weight:700;color:rgba(255,255,255,0.95);margin-bottom:6px;text-shadow:0 1px 8px rgba(0,0,0,0.3)">Verify your number</p>
              <p style="font-size:13px;color:rgba(255,255,255,0.7)">6-digit code sent to +91 98765 43210</p>
            </div>
            <div class="otp-wrap otp-glass" id="gotp" role="group" aria-label="Verification code">
              <input class="otp-input otp-glass-cell" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 1" />
              <input class="otp-input otp-glass-cell" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 2" />
              <input class="otp-input otp-glass-cell" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 3" />
              <span class="otp-sep" aria-hidden="true" style="color:rgba(255,255,255,0.5)">–</span>
              <input class="otp-input otp-glass-cell" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 4" />
              <input class="otp-input otp-glass-cell" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 5" />
              <input class="otp-input otp-glass-cell" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 6" />
            </div>
            <button type="button" class="btn-glass-primary">Verify Code</button>
            <p style="font-size:12px;color:rgba(255,255,255,0.6)">Didn't receive? <a href="#" style="color:rgba(255,255,255,0.9);text-decoration:none;font-weight:600">Resend</a></p>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="otp-wrap" id="gotp" role="group" aria-label="Verification code"&gt;
  &lt;input class="otp-input otp-glass-cell" type="text" inputmode="numeric" maxlength="1" aria-label="Digit 1" /&gt;
  &lt;!-- × 5 more --&gt;
&lt;/div&gt;
&lt;script&gt;initOTP('gotp');&lt;/script&gt;</pre>
      </div>

      <!-- Glass: Sign-in Card -->
      <h3 class="section-h3" id="glass-card">Glass · Sign-in Card</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <!-- 🌃 Nature bg: Milky Way / starry night over mountains — deep dark sky is perfect glass canvas -->
        <div class="glass-stage" style="background-image:url('https://images.unsplash.com/photo-1419242902214-272b3f66ee7a?w=1200&q=80&fit=crop')">
          <div class="glass-panel glass-panel-sm" style="width:100%;max-width:440px">
            <div style="margin-bottom:24px">
              <p style="font-size:26px;font-weight:700;letter-spacing:-.022em;color:rgba(255,255,255,0.95);margin-bottom:4px;text-shadow:0 2px 12px rgba(0,0,0,0.3)">Welcome back</p>
              <p style="font-size:14px;color:rgba(255,255,255,0.65)">Sign in to Holidayseva</p>
            </div>
            <div style="display:flex;flex-direction:column;gap:16px">
              <div class="glass-field">
                <label class="glass-label" for="gsi1">Email address</label>
                <div class="input-wrap">
                  <span class="input-icon" aria-hidden="true" style="color:rgba(255,255,255,0.6)">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="3.5" width="13" height="9" rx="1.5" stroke="currentColor" stroke-width="1.3"/><path d="M1.5 5.5l6.5 4 6.5-4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
                  </span>
                  <input class="input-glass" id="gsi1" type="email" placeholder="you@email.com" />
                </div>
              </div>
              <div class="glass-field">
                <label class="glass-label" for="gsi2">Password</label>
                <div class="input-wrap icon-right">
                  <input class="input-glass" id="gsi2" type="password" placeholder="Min. 8 characters" />
                  <button class="pw-toggle" type="button" aria-label="Show password" onclick="togglePw(this,'gsi2')" style="color:rgba(255,255,255,0.6)">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M1 9C1 9 4 3.5 9 3.5S17 9 17 9s-3 5.5-8 5.5S1 9 1 9z" stroke="currentColor" stroke-width="1.4"/><circle cx="9" cy="9" r="2.5" stroke="currentColor" stroke-width="1.4"/></svg>
                  </button>
                </div>
              </div>
              <button type="button" class="btn-glass-primary" style="margin-top:4px">Continue with email</button>
              <p style="font-size:12px;text-align:center;color:rgba(255,255,255,0.5)">By continuing you agree to our <a href="#" style="color:rgba(255,255,255,0.85);text-decoration:none">Terms</a></p>
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="glass-panel"&gt;
  &lt;div class="glass-field"&gt;
    &lt;label class="glass-label" for="email"&gt;Email address&lt;/label&gt;
    &lt;input class="input-glass" id="email" type="email" placeholder="you@email.com" /&gt;
  &lt;/div&gt;
  &lt;div class="glass-field"&gt;
    &lt;label class="glass-label" for="pw"&gt;Password&lt;/label&gt;
    &lt;input class="input-glass" id="pw" type="password" /&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- Glass: Search Bar -->
      <h3 class="section-h3" id="glass-search">Glass · Search Bar</h3>
      <div class="demo-card">
        <div class="demo-bar"><button class="demo-tab active" onclick="switchTab(this)">Preview</button></div>
        <!-- 🏝️ Nature bg: Tropical beach from above — vivid turquoise water for max contrast -->
        <div class="glass-stage" style="background-image:url('https://images.unsplash.com/photo-1559494007-9f5847c49d94?w=1200&q=80&fit=crop')">
          <div class="input-wrap" style="max-width:580px;width:100%">
            <span class="input-icon" aria-hidden="true" style="left:18px;color:rgba(255,255,255,0.7)">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><circle cx="9" cy="9" r="6.5" stroke="currentColor" stroke-width="1.5"/><path d="M14 14l4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
            </span>
            <input class="input-glass-search" type="search" placeholder="Where do you want to go?" style="padding-left:52px;width:100%" />
          </div>
        </div>
      </div>

    </section>

    <hr class="page-rule" />

    <!-- ═══════════════════════════════════════════════
         03 · SPECIFICATIONS
    ═══════════════════════════════════════════════ -->
    <section id="specs">
      <p class="section-label">03</p>
      <h2 class="section-title">Specifications</h2>
      <div class="spec-grid">
        <div class="spec-item"><div class="spec-lbl">Height SM</div><div class="spec-val">34 px</div></div>
        <div class="spec-item"><div class="spec-lbl">Height MD (default)</div><div class="spec-val">42 px</div></div>
        <div class="spec-item"><div class="spec-lbl">Height LG</div><div class="spec-val">52 px</div></div>
        <div class="spec-item"><div class="spec-lbl">OTP cell standard</div><div class="spec-val">48 × 56 px</div></div>
        <div class="spec-item"><div class="spec-lbl">OTP cell large</div><div class="spec-val">62 × 70 px</div></div>
        <div class="spec-item"><div class="spec-lbl">Border radius MD</div><div class="spec-val">10 px</div></div>
        <div class="spec-item"><div class="spec-lbl">Solid border</div><div class="spec-val"><code>--color-border</code></div></div>
        <div class="spec-item"><div class="spec-lbl">Focus ring (solid)</div><div class="spec-val"><code>--focus-ring-blue</code></div></div>
        <div class="spec-item"><div class="spec-lbl">Focus ring (glass)</div><div class="spec-val"><code>--focus-ring</code> coral</div></div>
        <div class="spec-item"><div class="spec-lbl">Glass blur</div><div class="spec-val">blur(20px) sat(1.8)</div></div>
        <div class="spec-item"><div class="spec-lbl">Glass bg</div><div class="spec-val"><code>--color-glass-bg</code></div></div>
        <div class="spec-item"><div class="spec-lbl">Glass border</div><div class="spec-val"><code>--color-glass-border</code></div></div>
      </div>
    </section>

    <hr class="page-rule" />

    <!-- ═══════════════════════════════════════════════
         04 · JS API
    ═══════════════════════════════════════════════ -->
    <section id="javascript">
      <p class="section-label">04</p>
      <h2 class="section-title">JavaScript API</h2>
      <p class="section-body">Lightweight helpers in <code>input.js</code> — no framework required.</p>
      <table class="prop-table">
        <thead><tr><th style="width:220px">Function</th><th style="width:200px">Signature</th><th>Description</th></tr></thead>
        <tbody>
          <?php
          $api = [
            ['togglePw(btn, id)',      '(El, string)',          'Toggles password visibility; updates aria-label and eye icon.'],
            ['step(id, delta)',         '(string, number)',      'Increments / decrements number input, respects min/max.'],
            ['countChars(el, id, max)', '(El, string, number)', 'Updates textarea character counter; adds .is-near / .is-max.'],
            ['syncRange(el, id, …)',    '(El, string, str?, str?)','Syncs CSS --pct track fill and value label for range inputs.'],
            ['initOTP(groupId)',        '(string)',              'Wires auto-advance, backspace, paste and arrow keys for an OTP group.'],
            ['handleTag(event)',        '(KeyboardEvent)',       'Creates a tag pill on Enter inside .tag-input-inner.'],
            ['removeTag(btn)',          '(El)',                  'Removes the closest .tag-pill from the tag input wrap.'],
          ];
          foreach ($api as [$fn, $sig, $desc]): ?>
          <tr>
            <td><code><?= htmlspecialchars($fn) ?></code></td>
            <td><code><?= htmlspecialchars($sig) ?></code></td>
            <td><?= $desc ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </section>

    <hr class="page-rule" />

    <!-- ═══════════════════════════════════════════════
         05 · ACCESSIBILITY
    ═══════════════════════════════════════════════ -->
    <section id="accessibility">
      <p class="section-label">05</p>
      <h2 class="section-title">Accessibility</h2>
      <ul class="a11y-list">
        <?php
        $checks = [
          'Every <code>&lt;input&gt;</code> must have an associated <code>&lt;label&gt;</code> via matching <code>for</code>/<code>id</code>. Never use <code>placeholder</code> as the only label.',
          'Error states: set <code>aria-invalid="true"</code> on the input and <code>aria-describedby</code> pointing to the error message.',
          'OTP groups: <code>role="group"</code> + <code>aria-label</code> on the wrapper; individual <code>aria-label="Digit N"</code> on each cell.',
          'Focus rings must never be suppressed without a high-contrast replacement. Tokens <code>--focus-ring</code> and <code>--focus-ring-blue</code> meet 3:1 contrast.',
          'Password toggle: <code>aria-label</code> must reflect current action — "Show password" or "Hide password" — not a static label.',
          'Range sliders: expose the current value via <code>aria-valuenow</code>, <code>aria-valuemin</code>, and <code>aria-valuemax</code>.',
          'Tag input wrap: add <code>role="group"</code> + <code>aria-label</code>; each pill remove button needs a descriptive <code>aria-label</code>.',
          'All decorative SVGs must carry <code>aria-hidden="true"</code>.',
        ];
        foreach ($checks as $c): ?>
        <li class="a11y-item">
          <span class="a11y-check" aria-hidden="true">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5L8 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
          <span><?= $c ?></span>
        </li>
        <?php endforeach; ?>
      </ul>
    </section>

    <div style="height:80px"></div>
  </main>

  <!-- ── Right sidebar ── -->
  <aside class="sidebar-right">
    <?php include $partials . 'right_sidebar.php'; ?>
  </aside>

</div><!-- /.page-layout -->

<!-- Scroll to top -->
<button class="scroll-top" id="scrollTop"
        onclick="window.scrollTo({top:0,behavior:'smooth'})"
        aria-label="Back to top">
  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
    <path d="M8 12V4M4 7l4-4 4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
</button>

<!-- ═══════════════════════════════════════════════
     input.js — extract to /Atom/input/input.js
═══════════════════════════════════════════════ -->
<script>
/* ─── Tab switcher ────────────────────────────── */
function switchTab(btn) {
  const card    = btn.closest('.demo-card');
  const tabs    = card.querySelectorAll('.demo-tab');
  const preview = card.querySelector('.demo-preview, .glass-stage');
  const code    = card.querySelector('.demo-code');
  const show    = btn.textContent.trim() === 'Preview';
  tabs.forEach(t => t.classList.remove('active'));
  btn.classList.add('active');
  if (preview) preview.hidden = !show;
  if (code)    code.hidden    =  show;
}

/* ─── Password reveal ─────────────────────────── */
function togglePw(btn, id) {
  const el   = document.getElementById(id);
  const show = el.type === 'password';
  el.type    = show ? 'text' : 'password';
  btn.setAttribute('aria-label', show ? 'Hide password' : 'Show password');
  btn.querySelector('svg').innerHTML = show
    ? `<path d="M1 9C1 9 4 3.5 9 3.5S17 9 17 9s-3 5.5-8 5.5S1 9 1 9z" stroke="currentColor" stroke-width="1.4"/>
       <path d="M3 3l12 12" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>`
    : `<path d="M1 9C1 9 4 3.5 9 3.5S17 9 17 9s-3 5.5-8 5.5S1 9 1 9z" stroke="currentColor" stroke-width="1.4"/>
       <circle cx="9" cy="9" r="2.5" stroke="currentColor" stroke-width="1.4"/>`;
}

/* ─── Number stepper ──────────────────────────── */
function step(id, delta) {
  const el  = document.getElementById(id);
  const min = el.min !== '' ? +el.min : -Infinity;
  const max = el.max !== '' ? +el.max :  Infinity;
  el.value  = Math.min(max, Math.max(min, (+el.value || 0) + delta));
}

/* ─── Textarea counter ────────────────────────── */
function countChars(el, id, max) {
  const n   = el.value.length;
  const out = document.getElementById(id);
  if (!out) return;
  out.textContent = n + ' / ' + max;
  out.classList.toggle('is-near', n >= max * .8 && n < max);
  out.classList.toggle('is-max',  n >= max);
}

/* ─── Range slider ────────────────────────────── */
function syncRange(el, valId, pre, suf) {
  pre = pre || ''; suf = suf || '';
  const min = +el.min, max = +el.max, val = +el.value;
  const pct = ((val - min) / (max - min) * 100).toFixed(1);
  el.style.setProperty('--pct', pct + '%');
  const disp = Number.isInteger(val) ? val.toLocaleString('en-IN') : val;
  const out  = document.getElementById(valId);
  if (out) out.textContent = pre + disp + suf;
}

/* ─── OTP auto-advance ────────────────────────── */
function initOTP(groupId) {
  const group  = document.getElementById(groupId);
  if (!group) return;
  const inputs = [...group.querySelectorAll('.otp-input')];
  inputs.forEach((inp, i) => {
    inp.addEventListener('input', e => {
      const v = e.target.value.replace(/\D/g, '');
      e.target.value = v.slice(-1);
      if (v) { inp.classList.add('is-filled'); if (i < inputs.length - 1) inputs[i + 1].focus(); }
      else     inp.classList.remove('is-filled');
    });
    inp.addEventListener('keydown', e => {
      if (e.key === 'Backspace' && !inp.value && i > 0) {
        inputs[i - 1].value = '';
        inputs[i - 1].classList.remove('is-filled');
        inputs[i - 1].focus();
      }
      if (e.key === 'ArrowLeft'  && i > 0)               inputs[i - 1].focus();
      if (e.key === 'ArrowRight' && i < inputs.length-1)  inputs[i + 1].focus();
    });
    inp.addEventListener('paste', e => {
      e.preventDefault();
      const digits = (e.clipboardData.getData('text') || '').replace(/\D/g,'').split('');
      digits.forEach((d, j) => {
        if (inputs[i + j]) { inputs[i + j].value = d; inputs[i + j].classList.add('is-filled'); }
      });
      inputs[Math.min(i + digits.length, inputs.length - 1)]?.focus();
    });
  });
}

/* ─── Tag input ───────────────────────────────── */
function handleTag(e) {
  if (e.key !== 'Enter') return;
  e.preventDefault();
  const inp = e.currentTarget;
  const val = inp.value.trim();
  if (!val) return;
  const pill = document.createElement('span');
  pill.className = 'tag-pill';
  pill.innerHTML = val + ' <button class="tag-pill-remove" onclick="removeTag(this)" aria-label="Remove ' + val + '">×</button>';
  inp.parentElement.insertBefore(pill, inp);
  inp.value = '';
}
function removeTag(btn) { btn.closest('.tag-pill').remove(); }

/* ─── Init ────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  initOTP('otp6');
  initOTP('otp4');
  initOTP('gotp');

  /* Scroll-to-top */
  const scrollBtn = document.getElementById('scrollTop');
  window.addEventListener('scroll', () => {
    scrollBtn?.classList.toggle('show', scrollY > 400);
  });

  /* TOC scroll spy */
  const tocLinks = document.querySelectorAll('.toc-link');
  if (tocLinks.length) {
    const spy = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (!e.isIntersecting) return;
        tocLinks.forEach(a => a.classList.remove('active'));
        document.querySelector(`.toc-link[href="#${e.target.id}"]`)?.classList.add('active');
      });
    }, { rootMargin: '-10% 0px -75% 0px' });
    document.querySelectorAll('section[id], h3[id]').forEach(t => spy.observe(t));
  }
});
</script>
</body>
</html>