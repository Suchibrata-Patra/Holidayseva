<?php
/**
 * input.php
 * Airframe UI — Input Fields component documentation
 * Atom layer · developer.holidayseva.com/Atom/input/input.php
 */

$pageTitle  = 'Input';
$activePage = 'input';
$partials   = __DIR__ . '/../../';

if (!defined('SITE_WEB_ROOT')) define('SITE_WEB_ROOT', 'https://developer.holidayseva.com');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($pageTitle) ?> Fields — Airframe UI · Holidayseva</title>

  <!-- ① TOKEN LAYER — always before anything else -->
  <link rel="stylesheet" href="/colors.css" />

  <!-- ② COMPONENT STYLESHEET — input.css (no hex inside) -->
  <link rel="stylesheet" href="https://holidayseva.com/UI/Atom/input/input.css" />

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet" />

  <style>
  /* ================================================================
     DOC SHELL — page layout + documentation UI only.
     RULE: Zero hex / rgba / hsl literals. Every colour = var(--*).
  ================================================================ */
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  html { scroll-behavior: smooth; }

  body {
    font-family: 'DM Sans', -apple-system, 'Helvetica Neue', sans-serif;
    font-size: 15px;
    line-height: 1.6;
    color: var(--color-text-primary);
    background: var(--color-bg);
    -webkit-font-smoothing: antialiased;
    min-height: 100vh;
  }

  /* ── Site header ────────────────────────────────── */
  .site-header {
    position: sticky; top: 0; z-index: 200;
    height: 52px;
    background: var(--color-header-bg);
    backdrop-filter: saturate(180%) blur(20px);
    -webkit-backdrop-filter: saturate(180%) blur(20px);
    border-bottom: 1px solid var(--color-separator);
    display: flex; align-items: center; gap: 16px;
    padding: 0 24px;
  }
  .site-logo {
    display: flex; align-items: center; gap: 8px;
    font-size: 15px; font-weight: 600;
    color: var(--color-text-primary); text-decoration: none;
  }
  .site-logo-dot { width: 8px; height: 8px; border-radius: 50%; background: var(--color-primary); }
  .site-sep { width: 1px; height: 18px; background: var(--color-separator); }
  .site-crumb { font-size: 13px; color: var(--color-text-secondary); }
  .site-spacer { flex: 1; }
  .site-badge {
    font-size: 11px; font-weight: 600; letter-spacing: .02em;
    padding: 2px 9px; border-radius: 20px;
    background: var(--color-primary-alpha);
    color: var(--color-primary);
  }

  /* ── Three-column shell ─────────────────────────── */
  .shell {
    display: grid;
    grid-template-columns: 240px 1fr 220px;
    min-height: calc(100vh - 52px);
    max-width: 1280px;
    margin: 0 auto;
  }

  /* ── Sidebars ───────────────────────────────────── */
  .sidebar-left {
    position: sticky; top: 52px;
    height: calc(100vh - 52px);
    overflow-y: auto; overflow-x: hidden;
    border-right: 1px solid var(--color-separator);
    padding: 24px 0 40px;
    scrollbar-width: thin;
    scrollbar-color: var(--color-border) transparent;
  }
  .sidebar-right {
    position: sticky; top: 52px;
    height: calc(100vh - 52px);
    overflow-y: auto;
    border-left: 1px solid var(--color-separator);
    scrollbar-width: thin;
    scrollbar-color: var(--color-border) transparent;
  }

  /* ── Main content ───────────────────────────────── */
  .main-content {
    padding: 48px 56px 100px;
    min-width: 0;
    max-width: 900px;
  }

  @media (max-width: 1060px) {
    .shell { grid-template-columns: 220px 1fr; }
    .sidebar-right { display: none; }
  }
  @media (max-width: 680px) {
    .shell { grid-template-columns: 1fr; }
    .sidebar-left { display: none; }
    .main-content { padding: 28px 20px 60px; }
  }

  /* ── Left sidebar internals ─────────────────────── */
  .sb-search-wrap { padding: 0 12px 16px; }
  .sb-search {
    width: 100%; height: 30px; padding: 0 10px;
    font-size: 13px; font-family: inherit;
    color: var(--color-text-primary);
    background: var(--color-surface-raised);
    border: 1px solid var(--color-border-light);
    border-radius: 8px; outline: none;
    transition: border-color .15s, box-shadow .15s;
  }
  .sb-search::placeholder { color: var(--color-text-placeholder); }
  .sb-search:focus { border-color: var(--color-border-focus); box-shadow: var(--focus-ring-blue); }

  .sb-section-label {
    font-size: 10.5px; font-weight: 700; letter-spacing: .07em;
    text-transform: uppercase; color: var(--color-text-muted);
    padding: 10px 16px 4px;
  }
  .sb-group { margin-bottom: 2px; }
  .sb-group-btn {
    display: flex; align-items: center; gap: 8px; width: 100%;
    font-size: 13px; font-weight: 500; color: var(--color-text-secondary);
    padding: 6px 12px; border-radius: 6px; cursor: pointer;
    background: none; border: none; transition: background .1s, color .1s;
    -webkit-font-smoothing: antialiased;
  }
  .sb-group-btn:hover { background: var(--color-surface-raised); color: var(--color-text-primary); }
  .sb-cat-icon { width: 16px; height: 16px; opacity: .6; color: var(--color-text-secondary); flex-shrink: 0; }
  .sb-group-label { flex: 1; text-align: left; }
  .sb-count {
    font-size: 11px; font-weight: 500; color: var(--color-text-muted);
    background: var(--color-surface-raised); border-radius: 10px; padding: 1px 6px;
  }
  .sb-chevron { flex-shrink: 0; color: var(--color-border-dark); transition: transform .16s; }
  .sb-group.open .sb-chevron { transform: rotate(90deg); }
  .sb-group.has-active .sb-group-btn { font-weight: 600; color: var(--color-text-primary); }
  .sb-items { list-style: none; padding: 0 0 6px; }
  .sb-items[hidden] { display: none; }
  .sb-link {
    display: flex; align-items: center; gap: 9px;
    font-size: 13.5px; font-weight: 400; color: var(--color-text-tertiary);
    text-decoration: none; padding: 5px 10px 5px 28px;
    border-radius: 6px; transition: background .1s, color .1s;
    -webkit-font-smoothing: antialiased;
  }
  .sb-link svg { flex-shrink: 0; opacity: .65; color: var(--color-text-muted); }
  .sb-link:hover { background: var(--color-bg-secondary); color: var(--color-text-primary); }
  .sb-link:hover svg { opacity: 1; }
  .sb-link.active { font-weight: 600; color: var(--color-text-primary); }
  .sb-link.active svg { opacity: 1; color: var(--color-primary); }
  .sb-link.hidden { display: none; }
  .sb-link.sb-match { font-weight: 700; color: var(--color-text-primary); }

  /* ── Content typography ─────────────────────────── */
  .page-eyebrow {
    font-size: 11.5px; font-weight: 700; letter-spacing: .08em;
    text-transform: uppercase; color: var(--color-primary); margin-bottom: 10px;
  }
  .page-title {
    font-size: 42px; font-weight: 700; letter-spacing: -.03em;
    color: var(--color-text-primary); line-height: 1.05; margin-bottom: 18px;
  }
  .page-desc {
    font-size: 16px; color: var(--color-text-secondary);
    line-height: 1.7; max-width: 620px; margin-bottom: 36px;
  }
  .page-rule { height: 1px; background: var(--color-separator); margin: 44px 0; }

  .section-label {
    font-size: 11px; font-weight: 700; letter-spacing: .09em;
    text-transform: uppercase; color: var(--color-primary); margin-bottom: 8px;
  }
  .section-title {
    font-size: 28px; font-weight: 700; letter-spacing: -.024em;
    color: var(--color-text-primary); margin-bottom: 10px; scroll-margin-top: 72px;
  }
  .section-body {
    font-size: 15px; color: var(--color-text-secondary);
    line-height: 1.7; margin-bottom: 28px; max-width: 640px;
  }
  .section-h3 {
    font-size: 19px; font-weight: 700; letter-spacing: -.016em;
    color: var(--color-text-primary); margin: 36px 0 8px; scroll-margin-top: 72px;
  }

  /* Inline code */
  code {
    font-family: 'DM Mono', 'SF Mono', 'Menlo', monospace;
    font-size: 12.5px;
    background: var(--color-bg-secondary);
    color: var(--color-primary);
    padding: 1px 5px; border-radius: 4px;
  }

  /* ── Demo card ──────────────────────────────────── */
  .demo-card {
    background: var(--color-surface);
    border: 1px solid var(--color-border-light);
    border-radius: var(--radius-xl, 14px); overflow: hidden;
    margin-bottom: 28px;
    box-shadow: var(--shadow-sm);
  }
  .demo-bar {
    display: flex; align-items: center; gap: 0;
    border-bottom: 1px solid var(--color-border-light);
    background: var(--color-surface);
  }
  .demo-tab {
    font-size: 12px; font-weight: 500; font-family: inherit;
    color: var(--color-text-muted); padding: 10px 18px;
    cursor: pointer; border: none; background: none;
    border-bottom: 2px solid transparent; margin-bottom: -1px;
    transition: color .1s, border-color .1s;
  }
  .demo-tab.active { color: var(--color-text-primary); border-bottom-color: var(--color-primary); }

  .demo-preview {
    padding: 36px 32px;
    background: var(--color-bg-secondary);
    border-bottom: 1px solid var(--color-border-light);
    display: flex; flex-wrap: wrap; gap: 24px; align-items: flex-start;
  }
  .demo-preview.col    { flex-direction: column; }
  .demo-preview.center { flex-direction: column; justify-content: center; align-items: center; }

  .demo-code {
    font-family: 'DM Mono', 'SF Mono', 'Menlo', monospace;
    font-size: 12.5px; line-height: 1.75; tab-size: 2;
    padding: 22px 26px; margin: 0;
    color: var(--color-text-secondary);
    background: var(--color-code-bg);
    overflow-x: auto; white-space: pre;
  }

  /* ── Spec grid ──────────────────────────────────── */
  .spec-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 28px; }
  .spec-item {
    padding: 14px 16px; border-radius: 10px;
    background: var(--color-bg-secondary); border: 1px solid var(--color-border-light);
  }
  .spec-label {
    font-size: 10.5px; font-weight: 700; text-transform: uppercase;
    letter-spacing: .07em; color: var(--color-text-muted); margin-bottom: 4px;
  }
  .spec-val { font-size: 14px; font-weight: 600; color: var(--color-text-primary); }

  /* ── Prop table ─────────────────────────────────── */
  .prop-table { width: 100%; border-collapse: collapse; font-size: 13.5px; margin-bottom: 32px; }
  .prop-table th {
    font-size: 10.5px; font-weight: 700; letter-spacing: .07em; text-transform: uppercase;
    color: var(--color-text-muted); padding: 8px 12px; text-align: left;
    border-bottom: 1px solid var(--color-border-light);
  }
  .prop-table td {
    padding: 10px 12px; vertical-align: top; color: var(--color-text-secondary);
    border-bottom: 1px solid var(--color-border-lighter);
  }
  .prop-table tr:last-child td { border-bottom: none; }
  .prop-table code { font-size: 11.5px; }

  /* ── Callout ────────────────────────────────────── */
  .callout {
    display: flex; gap: 12px; align-items: flex-start;
    padding: 14px 18px; border-radius: 10px; margin-bottom: 28px;
    font-size: 13.5px; line-height: 1.6;
  }
  .callout-info { background: var(--color-info-bg); border: 1px solid var(--color-info-border); color: var(--color-info-text); }
  .callout-warn { background: var(--color-warning-bg); border: 1px solid var(--color-warning-border); color: var(--color-warning-text); }
  .callout-icon { font-size: 16px; flex-shrink: 0; margin-top: 1px; }

  /* ── A11y list ──────────────────────────────────── */
  .a11y-list { list-style: none; padding: 0; display: flex; flex-direction: column; gap: 8px; }
  .a11y-item { display: flex; align-items: flex-start; gap: 10px; font-size: 14px; color: var(--color-text-secondary); line-height: 1.5; }
  .a11y-check {
    width: 18px; height: 18px; border-radius: 50%; flex-shrink: 0; margin-top: 2px;
    background: var(--color-success-bg); border: 1.5px solid var(--color-success-border);
    display: flex; align-items: center; justify-content: center;
    color: var(--color-success);
  }

  /* ── Scroll top ─────────────────────────────────── */
  .scroll-top {
    position: fixed; bottom: 28px; right: 28px; z-index: 100;
    width: 40px; height: 40px; border-radius: 50%;
    background: var(--color-surface); border: 1px solid var(--color-border);
    box-shadow: var(--shadow-md); cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    color: var(--color-text-secondary);
    opacity: 0; transform: translateY(8px);
    transition: opacity .2s, transform .2s;
  }
  .scroll-top.visible { opacity: 1; transform: translateY(0); }
  .scroll-top:hover { color: var(--color-text-primary); }

  /* ── Glass demo backdrop ────────────────────────── */
  .glass-bg {
    background:
      radial-gradient(ellipse 80% 60% at 20% 40%, var(--color-primary-alpha) 0%, transparent 60%),
      radial-gradient(ellipse 60% 50% at 80% 70%, var(--color-accent-alpha) 0%, transparent 60%),
      var(--color-bg-secondary);
    padding: 40px 32px;
    border-radius: 0;
  }
  </style>
</head>
<body>

<!-- ═══════════ HEADER ═══════════ -->
<header class="site-header">
  <a class="site-logo" href="<?= SITE_WEB_ROOT ?>">
    <span class="site-logo-dot"></span>Airframe UI
  </a>
  <span class="site-sep"></span>
  <span class="site-crumb">Atom / Input Fields</span>
  <span class="site-spacer"></span>
  <span class="site-badge">v1.0</span>
</header>

<!-- ═══════════ SHELL ═══════════ -->
<div class="shell">

<!-- ════ LEFT SIDEBAR ════ -->
<nav class="sidebar-left" aria-label="Component navigation">
  <div class="sb-search-wrap">
    <input class="sb-search" type="search" placeholder="Search components…"
           oninput="filterSidebar(this)" aria-label="Search components" />
  </div>

  <div class="sb-section-label">Getting Started</div>
  <div class="sb-group">
    <ul class="sb-items">
      <li><a class="sb-link" href="/index.php">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M8 1L1 6v9h5V10h4v5h5V6L8 1z" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/></svg>
        Overview</a></li>
      <li><a class="sb-link" href="/Foundations/colors.php">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.3"/></svg>
        Color Tokens</a></li>
      <li><a class="sb-link" href="/Foundations/typography.php">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M3 4h10M8 4v9" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>
        Typography</a></li>
    </ul>
  </div>

  <div class="sb-section-label">Atom</div>
  <div class="sb-group open has-active">
    <button class="sb-group-btn" onclick="toggleGroup(this)" aria-expanded="true">
      <svg class="sb-cat-icon" viewBox="0 0 16 16" fill="none"><rect x="2" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="9" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="2" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="9" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/></svg>
      <span class="sb-group-label">Atom</span>
      <span class="sb-count">10</span>
      <svg class="sb-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M4.5 3l3 3-3 3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </button>
    <ul class="sb-items">
      <li><a class="sb-link" href="/Atom/button/button.php"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="5" width="13" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/></svg>Button</a></li>
      <li><a class="sb-link active" href="/Atom/input/input.php"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="4" width="13" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M5 8h6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>Input</a></li>
      <li><a class="sb-link" href="/Atom/toggle/toggle.php"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="1" y="5" width="14" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/><circle cx="11.5" cy="8" r="2" fill="currentColor"/></svg>Toggle</a></li>
      <li><a class="sb-link" href="/Atom/checkbox/checkbox.php"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="2.5" y="2.5" width="11" height="11" rx="2" stroke="currentColor" stroke-width="1.2"/><path d="M5 8l2.5 2.5L11 5.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>Checkbox</a></li>
      <li><a class="sb-link" href="/Atom/radio/radio.php"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="5.5" stroke="currentColor" stroke-width="1.2"/><circle cx="8" cy="8" r="2.5" fill="currentColor"/></svg>Radio</a></li>
      <li><a class="sb-link" href="/Atom/select/select.php"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="4.5" width="13" height="7" rx="1.5" stroke="currentColor" stroke-width="1.2"/></svg>Select</a></li>
      <li><a class="sb-link" href="/Atom/slider/slider.php"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><line x1="2" y1="8" x2="14" y2="8" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/><circle cx="8" cy="8" r="2.5" fill="currentColor"/></svg>Slider</a></li>
      <li><a class="sb-link" href="/Atom/badge/badge.php"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="3" y="5" width="10" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/></svg>Badge</a></li>
      <li><a class="sb-link" href="/Atom/otp/otp.php"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="1" y="3" width="3" height="10" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="6" y="3" width="3" height="10" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="12" y="3" width="3" height="10" rx="1" stroke="currentColor" stroke-width="1.2"/></svg>OTP / PIN</a></li>
      <li><a class="sb-link" href="/Atom/spinner/spinner.php"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M8 2a6 6 0 016 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.2" opacity=".2"/></svg>Spinner</a></li>
    </ul>
  </div>

  <div class="sb-section-label">Components</div>
  <div class="sb-group">
    <button class="sb-group-btn" onclick="toggleGroup(this)" aria-expanded="false">
      <svg class="sb-cat-icon" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M1.5 7h13" stroke="currentColor" stroke-width="1.2"/></svg>
      <span class="sb-group-label">Components</span>
      <span class="sb-count">6</span>
      <svg class="sb-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M4.5 3l3 3-3 3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </button>
    <ul class="sb-items" hidden>
      <li><a class="sb-link" href="/Components/modal/modal.php"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M1.5 6.5h13" stroke="currentColor" stroke-width="1.2"/></svg>Modal</a></li>
      <li><a class="sb-link" href="/Components/card/card.php"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M4 6.5h5M4 9h8" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>Card</a></li>
      <li><a class="sb-link" href="/Components/tabs/tabs.php"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M2 10V5.5A1.5 1.5 0 013.5 4H7l1.5 2H14v4" stroke="currentColor" stroke-width="1.2"/></svg>Tabs</a></li>
      <li><a class="sb-link" href="/Components/tooltip/tooltip.php"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="2" y="2" width="12" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M5 10.5l1.5 2.5 1.5-2.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>Tooltip</a></li>
      <li><a class="sb-link" href="/Components/dropdown/dropdown.php"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="4" width="13" height="5" rx="1.5" stroke="currentColor" stroke-width="1.2"/></svg>Dropdown</a></li>
      <li><a class="sb-link" href="/Components/avatar/avatar.php"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="5.5" r="2.5" stroke="currentColor" stroke-width="1.2"/><path d="M2.5 14c0-3.04 2.46-5.5 5.5-5.5s5.5 2.46 5.5 5.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>Avatar</a></li>
    </ul>
  </div>
</nav>

<!-- ════ MAIN ════ -->
<main class="main-content" id="top">

  <!-- Page header -->
  <p class="page-eyebrow">Atom · Input</p>
  <h1 class="page-title">Input Fields</h1>
  <p class="page-desc">
    Complete input primitive library — standard, glass, floating-label, OTP/PIN,
    compound, and more — all styled through <code>input.css</code> with zero
    colour literals. Every visual decision traces back to <code>colors.css</code> tokens.
  </p>

  <div class="callout callout-info">
    <span class="callout-icon">ℹ</span>
    <span>All styling lives in <code>/Atom/input/input.css</code>. To change any colour,
    edit <code>colors.css</code> only — components adapt automatically, including dark mode.</span>
  </div>

  <div class="page-rule"></div>

  <!-- ══════════════════════════════════════
       § 1 — STANDARD INPUTS
  ══════════════════════════════════════ -->
  <section id="standard">
    <p class="section-label">01</p>
    <h2 class="section-title">Standard Inputs</h2>
    <p class="section-body">The base <code>.input</code> class covers every native input type. Add size modifiers <code>.input-sm</code> / <code>.input-lg</code> as needed.</p>

    <!-- Text / Email / Number -->
    <h3 class="section-h3" id="basic">Text, Email, Number</h3>
    <div class="demo-card">
      <div class="demo-bar">
        <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
        <button class="demo-tab" onclick="switchTab(this)">HTML</button>
      </div>
      <div class="demo-preview col">
        <div class="field" style="max-width:400px">
          <label class="field-label" for="t-name">Full name <span class="required" style="color:var(--color-primary)">*</span></label>
          <input class="input" id="t-name" type="text" placeholder="e.g. Rahul Verma" />
          <span class="field-helper">As it appears on your government-issued ID.</span>
        </div>
        <div class="field" style="max-width:400px">
          <label class="field-label" for="t-email">Email address</label>
          <input class="input" id="t-email" type="email" placeholder="you@email.com" />
        </div>
        <div class="field" style="max-width:220px">
          <label class="field-label" for="t-zip">PIN code</label>
          <input class="input" id="t-zip" type="text" placeholder="400001" maxlength="6" />
        </div>
      </div>
      <pre class="demo-code" hidden>&lt;div class="field"&gt;
  &lt;label class="field-label" for="name"&gt;Full name&lt;/label&gt;
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
        <div class="field" style="max-width:440px"><label class="field-label">Small · <code>.input-sm</code> · 34 px</label><input class="input input-sm" type="text" placeholder="Small input" /></div>
        <div class="field" style="max-width:440px"><label class="field-label">Medium · <code>.input</code> · 42 px (default)</label><input class="input" type="text" placeholder="Medium input" /></div>
        <div class="field" style="max-width:440px"><label class="field-label">Large · <code>.input-lg</code> · 52 px</label><input class="input input-lg" type="text" placeholder="Large input" /></div>
      </div>
      <pre class="demo-code" hidden>&lt;input class="input input-sm" type="text" placeholder="Small" /&gt;
&lt;input class="input"         type="text" placeholder="Medium (default)" /&gt;
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
        <div class="field" style="max-width:400px"><label class="field-label" for="st1">Default</label><input class="input" id="st1" type="text" placeholder="Normal input" /></div>
        <div class="field" style="max-width:400px">
          <label class="field-label" for="st2">Error</label>
          <input class="input is-error" id="st2" type="email" value="bad@@email" aria-invalid="true" aria-describedby="st2-err" />
          <span class="field-helper is-error" id="st2-err">Please enter a valid email address.</span>
        </div>
        <div class="field" style="max-width:400px">
          <label class="field-label" for="st3">Success</label>
          <input class="input is-success" id="st3" type="email" value="rahul@holidayseva.com" />
          <span class="field-helper is-success">Looks good!</span>
        </div>
        <div class="field" style="max-width:400px"><label class="field-label" for="st4">Disabled</label><input class="input" id="st4" type="text" placeholder="Cannot edit" disabled /></div>
      </div>
      <pre class="demo-code" hidden>&lt;input class="input is-error"   type="email" aria-invalid="true" aria-describedby="err" /&gt;
&lt;input class="input is-success" type="email" /&gt;
&lt;input class="input"            type="text"  disabled /&gt;</pre>
    </div>

    <!-- With icons -->
    <h3 class="section-h3" id="icons">With Icons</h3>
    <div class="demo-card">
      <div class="demo-bar">
        <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
        <button class="demo-tab" onclick="switchTab(this)">HTML</button>
      </div>
      <div class="demo-preview col">
        <div class="field" style="max-width:400px">
          <label class="field-label">Search (leading icon · pill)</label>
          <div class="input-wrap">
            <span class="input-icon" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="7" cy="7" r="4.5" stroke="currentColor" stroke-width="1.4"/><path d="M10.5 10.5l3 3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>
            </span>
            <input class="input input-search" type="search" placeholder="Search destinations…" />
          </div>
        </div>
        <div class="field" style="max-width:400px">
          <label class="field-label">Email (trailing icon)</label>
          <div class="input-wrap icon-right">
            <input class="input" type="email" placeholder="your@email.com" />
            <span class="input-icon" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="3.5" width="13" height="9" rx="1.5" stroke="currentColor" stroke-width="1.3"/><path d="M1.5 5.5l6.5 4 6.5-4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
            </span>
          </div>
        </div>
        <div class="field" style="max-width:400px">
          <label class="field-label">Location (both icons)</label>
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
      <pre class="demo-code" hidden>&lt;!-- Leading --&gt;
&lt;div class="input-wrap"&gt;
  &lt;span class="input-icon" aria-hidden="true"&gt;…svg…&lt;/span&gt;
  &lt;input class="input input-search" type="search" /&gt;
&lt;/div&gt;

&lt;!-- Trailing --&gt;
&lt;div class="input-wrap icon-right"&gt;
  &lt;input class="input" type="email" /&gt;
  &lt;span class="input-icon" aria-hidden="true"&gt;…svg…&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Both --&gt;
&lt;div class="input-wrap icon-both"&gt;
  &lt;span class="input-icon"&gt;…&lt;/span&gt;
  &lt;input class="input" /&gt;
  &lt;span class="input-icon input-icon-right"&gt;…&lt;/span&gt;
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
        <div class="field" style="max-width:400px;width:100%">
          <label class="field-label" for="pw1">Password</label>
          <div class="input-wrap icon-right">
            <input class="input" id="pw1" type="password" placeholder="Min. 8 characters" />
            <button class="pw-toggle" type="button" aria-label="Show password" onclick="togglePw(this,'pw1')">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true">
                <path d="M1 9C1 9 4 3.5 9 3.5S17 9 17 9s-3 5.5-8 5.5S1 9 1 9z" stroke="currentColor" stroke-width="1.4"/>
                <circle cx="9" cy="9" r="2.5" stroke="currentColor" stroke-width="1.4"/>
              </svg>
            </button>
          </div>
          <span class="field-helper">Use letters, numbers and symbols.</span>
        </div>
      </div>
      <pre class="demo-code" hidden>&lt;div class="input-wrap icon-right"&gt;
  &lt;input class="input" id="pw" type="password" /&gt;
  &lt;button class="pw-toggle" type="button"
          aria-label="Show password"
          onclick="togglePw(this,'pw')"&gt;…svg…&lt;/button&gt;
&lt;/div&gt;</pre>
    </div>

    <!-- Number stepper -->
    <h3 class="section-h3" id="number">Number Stepper</h3>
    <div class="demo-card">
      <div class="demo-bar">
        <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
        <button class="demo-tab" onclick="switchTab(this)">HTML</button>
      </div>
      <div class="demo-preview" style="gap:20px;flex-wrap:wrap">
        <div class="field" style="max-width:200px">
          <label class="field-label" for="n-guests">Guests</label>
          <div class="number-wrap">
            <input class="input" id="n-guests" type="number" value="2" min="1" max="16" />
            <div class="number-stepper">
              <button class="stepper-btn" type="button" onclick="step('n-guests',1)" aria-label="Increase">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 9V3M3 6l3-3 3 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </button>
              <button class="stepper-btn" type="button" onclick="step('n-guests',-1)" aria-label="Decrease">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 3v6M3 6l3 3 3-3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </button>
            </div>
          </div>
        </div>
        <div class="field" style="max-width:200px">
          <label class="field-label" for="n-nights">Nights</label>
          <div class="number-wrap">
            <input class="input" id="n-nights" type="number" value="3" min="1" max="30" />
            <div class="number-stepper">
              <button class="stepper-btn" type="button" onclick="step('n-nights',1)" aria-label="Increase">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 9V3M3 6l3-3 3 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </button>
              <button class="stepper-btn" type="button" onclick="step('n-nights',-1)" aria-label="Decrease">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 3v6M3 6l3 3 3-3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </button>
            </div>
          </div>
        </div>
      </div>
      <pre class="demo-code" hidden>&lt;div class="number-wrap"&gt;
  &lt;input class="input" id="guests" type="number" value="2" min="1" max="16" /&gt;
  &lt;div class="number-stepper"&gt;
    &lt;button class="stepper-btn" onclick="step('guests', 1)"  aria-label="Increase"&gt;…&lt;/button&gt;
    &lt;button class="stepper-btn" onclick="step('guests', -1)" aria-label="Decrease"&gt;…&lt;/button&gt;
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
        <div class="field" style="max-width:440px;width:100%">
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
    <h3 class="section-h3" id="select">Select</h3>
    <div class="demo-card">
      <div class="demo-bar">
        <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
        <button class="demo-tab" onclick="switchTab(this)">HTML</button>
      </div>
      <div class="demo-preview" style="gap:20px;flex-wrap:wrap">
        <div class="field" style="flex:1;min-width:200px;max-width:320px">
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
        <div class="field" style="flex:1;min-width:200px;max-width:320px">
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
  &lt;select class="select-native" id="type"&gt;
    &lt;option value=""&gt;Select a type…&lt;/option&gt;
    &lt;option&gt;Apartment&lt;/option&gt;
  &lt;/select&gt;
  &lt;span class="select-caret" aria-hidden="true"&gt;…chevron svg…&lt;/span&gt;
&lt;/div&gt;</pre>
    </div>

    <!-- Date & Time -->
    <h3 class="section-h3" id="datetime">Date &amp; Time</h3>
    <div class="demo-card">
      <div class="demo-bar"><button class="demo-tab active" onclick="switchTab(this)">Preview</button><button class="demo-tab" onclick="switchTab(this)">HTML</button></div>
      <div class="demo-preview" style="flex-wrap:wrap;gap:20px">
        <div class="field" style="flex:1;min-width:180px"><label class="field-label" for="dt1">Check-in</label><input class="input" id="dt1" type="date" /></div>
        <div class="field" style="flex:1;min-width:180px"><label class="field-label" for="dt2">Check-out</label><input class="input" id="dt2" type="date" /></div>
        <div class="field" style="flex:1;min-width:180px"><label class="field-label" for="dt3">Arrival time</label><input class="input" id="dt3" type="time" value="14:00" /></div>
        <div class="field" style="flex:1;min-width:220px"><label class="field-label" for="dt4">Event datetime</label><input class="input" id="dt4" type="datetime-local" /></div>
      </div>
      <pre class="demo-code" hidden>&lt;input class="input" type="date" /&gt;
&lt;input class="input" type="time" value="14:00" /&gt;
&lt;input class="input" type="datetime-local" /&gt;</pre>
    </div>

    <!-- Textarea -->
    <h3 class="section-h3" id="textarea">Textarea</h3>
    <div class="demo-card">
      <div class="demo-bar"><button class="demo-tab active" onclick="switchTab(this)">Preview</button><button class="demo-tab" onclick="switchTab(this)">HTML</button></div>
      <div class="demo-preview">
        <div class="field" style="max-width:500px;width:100%">
          <label class="field-label" for="ta1">Bio</label>
          <textarea class="textarea" id="ta1" maxlength="300" rows="4"
                    placeholder="Tell guests a little about yourself…"
                    oninput="countChars(this,'ta1-count',300)"></textarea>
          <div class="textarea-footer">
            <span class="field-helper">Shown on your public host profile.</span>
            <span class="textarea-count" id="ta1-count">0 / 300</span>
          </div>
        </div>
      </div>
      <pre class="demo-code" hidden>&lt;textarea class="textarea" maxlength="300" rows="4"
          oninput="countChars(this,'count-id',300)"&gt;&lt;/textarea&gt;
&lt;div class="textarea-footer"&gt;
  &lt;span class="field-helper"&gt;…&lt;/span&gt;
  &lt;span class="textarea-count" id="count-id"&gt;0 / 300&lt;/span&gt;
&lt;/div&gt;</pre>
    </div>

    <!-- Range -->
    <h3 class="section-h3" id="range">Range Slider</h3>
    <div class="demo-card">
      <div class="demo-bar"><button class="demo-tab active" onclick="switchTab(this)">Preview</button><button class="demo-tab" onclick="switchTab(this)">HTML</button></div>
      <div class="demo-preview col">
        <div class="field" style="max-width:500px;width:100%">
          <label class="field-label">Price per night</label>
          <div class="range-wrap">
            <input type="range" id="rng1" min="0" max="20000" value="5000" step="500"
                   style="--pct:25%" oninput="syncRange(this,'rv1','₹')" />
            <span class="range-val" id="rv1">₹5,000</span>
          </div>
        </div>
        <div class="field" style="max-width:500px;width:100%">
          <label class="field-label">Minimum rating</label>
          <div class="range-wrap">
            <input type="range" id="rng2" min="1" max="5" value="3" step="0.5"
                   style="--pct:50%" oninput="syncRange(this,'rv2','','★')" />
            <span class="range-val" id="rv2">3★</span>
          </div>
        </div>
      </div>
      <pre class="demo-code" hidden>&lt;div class="range-wrap"&gt;
  &lt;input type="range" id="price"
         min="0" max="20000" value="5000" step="500"
         style="--pct:25%"
         oninput="syncRange(this,'rv','₹')" /&gt;
  &lt;span class="range-val" id="rv"&gt;₹5,000&lt;/span&gt;
&lt;/div&gt;</pre>
    </div>

    <!-- Checkbox & Radio -->
    <h3 class="section-h3" id="checkbox">Checkbox &amp; Radio</h3>
    <div class="demo-card">
      <div class="demo-bar"><button class="demo-tab active" onclick="switchTab(this)">Preview</button><button class="demo-tab" onclick="switchTab(this)">HTML</button></div>
      <div class="demo-preview" style="gap:24px;flex-wrap:wrap">
        <div style="display:flex;flex-direction:column;gap:12px">
          <label class="checkbox-wrap"><input type="checkbox" checked /><span class="checkbox-label">Entire home<span class="checkbox-sub">You'll have the place to yourself.</span></span></label>
          <label class="checkbox-wrap"><input type="checkbox" /><span class="checkbox-label">Private room</span></label>
          <label class="checkbox-wrap"><input type="checkbox" disabled /><span class="checkbox-label" style="opacity:.5">Shared room (unavailable)</span></label>
        </div>
        <div style="display:flex;flex-direction:column;gap:12px">
          <label class="radio-wrap"><input type="radio" name="sort" checked /><span class="checkbox-label">Recommended</span></label>
          <label class="radio-wrap"><input type="radio" name="sort" /><span class="checkbox-label">Price: Low to High</span></label>
          <label class="radio-wrap"><input type="radio" name="sort" /><span class="checkbox-label">Top rated</span></label>
        </div>
      </div>
      <pre class="demo-code" hidden>&lt;!-- Checkbox --&gt;
&lt;label class="checkbox-wrap"&gt;
  &lt;input type="checkbox" checked /&gt;
  &lt;span class="checkbox-label"&gt;
    Entire home
    &lt;span class="checkbox-sub"&gt;You'll have the place to yourself.&lt;/span&gt;
  &lt;/span&gt;
&lt;/label&gt;

&lt;!-- Radio --&gt;
&lt;label class="radio-wrap"&gt;
  &lt;input type="radio" name="sort" checked /&gt;
  &lt;span class="checkbox-label"&gt;Recommended&lt;/span&gt;
&lt;/label&gt;</pre>
    </div>

    <!-- Compound row -->
    <h3 class="section-h3" id="compound">Compound / Row Layout</h3>
    <div class="demo-card">
      <div class="demo-bar"><button class="demo-tab active" onclick="switchTab(this)">Preview</button></div>
      <div class="demo-preview col">
        <div class="field-row" style="max-width:560px">
          <div class="field"><label class="field-label" for="c1">First name</label><input class="input" id="c1" type="text" placeholder="Rahul" /></div>
          <div class="field"><label class="field-label" for="c2">Last name</label><input class="input" id="c2" type="text" placeholder="Verma" /></div>
        </div>
        <div class="field-row" style="max-width:560px">
          <div class="field" style="flex:2"><label class="field-label" for="c3">Street address</label><input class="input" id="c3" type="text" placeholder="12 Marine Drive" /></div>
          <div class="field" style="flex:1"><label class="field-label" for="c4">PIN code</label><input class="input" id="c4" type="text" placeholder="400001" maxlength="6" /></div>
        </div>
      </div>
    </div>

    <!-- Input group prefix/suffix -->
    <h3 class="section-h3" id="inputgroup">Input Groups</h3>
    <div class="demo-card">
      <div class="demo-bar"><button class="demo-tab active" onclick="switchTab(this)">Preview</button><button class="demo-tab" onclick="switchTab(this)">HTML</button></div>
      <div class="demo-preview col">
        <div class="field" style="max-width:400px">
          <label class="field-label">Website</label>
          <div class="input-group">
            <span class="input-addon">https://</span>
            <input class="input" type="text" placeholder="yourdomain.com" />
          </div>
        </div>
        <div class="field" style="max-width:360px">
          <label class="field-label">Price per night</label>
          <div class="input-group">
            <span class="input-addon">₹</span>
            <input class="input" type="number" placeholder="0" />
            <span class="input-addon">/ night</span>
          </div>
        </div>
      </div>
      <pre class="demo-code" hidden>&lt;div class="input-group"&gt;
  &lt;span class="input-addon"&gt;https://&lt;/span&gt;
  &lt;input class="input" type="text" placeholder="yourdomain.com" /&gt;
&lt;/div&gt;</pre>
    </div>

    <!-- Floating label -->
    <h3 class="section-h3" id="floating">Floating Label</h3>
    <div class="demo-card">
      <div class="demo-bar"><button class="demo-tab active" onclick="switchTab(this)">Preview</button><button class="demo-tab" onclick="switchTab(this)">HTML</button></div>
      <div class="demo-preview" style="gap:20px;flex-wrap:wrap">
        <div class="float-field" style="max-width:280px;width:100%">
          <input class="float-input" id="fl1" type="text" placeholder=" " />
          <label class="float-label" for="fl1">Full name</label>
        </div>
        <div class="float-field" style="max-width:280px;width:100%">
          <input class="float-input" id="fl2" type="email" placeholder=" " />
          <label class="float-label" for="fl2">Email address</label>
        </div>
        <div class="float-field" style="max-width:280px;width:100%">
          <input class="float-input" id="fl3" type="text" placeholder=" " value="Mumbai" />
          <label class="float-label" for="fl3">City</label>
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
      <div class="demo-bar"><button class="demo-tab active" onclick="switchTab(this)">Preview</button><button class="demo-tab" onclick="switchTab(this)">HTML</button></div>
      <div class="demo-preview">
        <div class="field" style="max-width:480px;width:100%">
          <label class="field-label">Amenities</label>
          <div class="tag-input-wrap" id="tagWrap" onclick="document.getElementById('tagInner').focus()">
            <span class="tag-pill">WiFi <button class="tag-pill-remove" onclick="removeTag(this)" aria-label="Remove WiFi">×</button></span>
            <span class="tag-pill">Pool <button class="tag-pill-remove" onclick="removeTag(this)" aria-label="Remove Pool">×</button></span>
            <span class="tag-pill">Parking <button class="tag-pill-remove" onclick="removeTag(this)" aria-label="Remove Parking">×</button></span>
            <input class="tag-input-inner" id="tagInner" type="text" placeholder="Add amenity…" onkeydown="handleTag(event)" />
          </div>
          <span class="field-helper">Press Enter to add, × to remove.</span>
        </div>
      </div>
      <pre class="demo-code" hidden>&lt;div class="tag-input-wrap"&gt;
  &lt;span class="tag-pill"&gt;
    WiFi
    &lt;button class="tag-pill-remove" aria-label="Remove WiFi"&gt;×&lt;/button&gt;
  &lt;/span&gt;
  &lt;input class="tag-input-inner" type="text"
         placeholder="Add amenity…" /&gt;
&lt;/div&gt;</pre>
    </div>

  </section>

  <div class="page-rule"></div>

  <!-- ══════════════════════════════════════
       § 2 — OTP / PIN
  ══════════════════════════════════════ -->
  <section id="otp">
    <p class="section-label">02</p>
    <h2 class="section-title">OTP / PIN</h2>
    <p class="section-body">
      Squared single-character cells. Auto-advances on input, backtracks on delete,
      supports clipboard paste and arrow-key navigation.
      Classes: <code>.otp-input</code> · <code>.otp-input-lg</code> · <code>.otp-input-sm</code>
    </p>

    <div class="demo-card">
      <div class="demo-bar"><button class="demo-tab active" onclick="switchTab(this)">Preview</button><button class="demo-tab" onclick="switchTab(this)">HTML</button></div>
      <div class="demo-preview center" style="gap:32px">

        <div>
          <p style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.07em;color:var(--color-text-muted);text-align:center;margin-bottom:14px">Standard · 6-digit OTP</p>
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

        <div>
          <p style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.07em;color:var(--color-text-muted);text-align:center;margin-bottom:14px">Large · 4-digit PIN</p>
          <div class="otp-wrap" id="otp4" role="group" aria-label="PIN code">
            <input class="otp-input otp-input-lg" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 1" />
            <input class="otp-input otp-input-lg" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 2" />
            <input class="otp-input otp-input-lg" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 3" />
            <input class="otp-input otp-input-lg" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 4" />
          </div>
        </div>

        <div>
          <p style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.07em;color:var(--color-text-muted);text-align:center;margin-bottom:14px">Error state</p>
          <div class="otp-wrap" id="otpErr" role="group" aria-label="Invalid code">
            <input class="otp-input is-error" type="text" inputmode="numeric" maxlength="1" value="5" aria-label="Digit 1" />
            <input class="otp-input is-error" type="text" inputmode="numeric" maxlength="1" value="3" aria-label="Digit 2" />
            <input class="otp-input is-error" type="text" inputmode="numeric" maxlength="1" value="9" aria-label="Digit 3" />
            <input class="otp-input is-error" type="text" inputmode="numeric" maxlength="1" value="1" aria-label="Digit 4" />
          </div>
          <p style="font-size:12px;color:var(--color-error-text);text-align:center;margin-top:8px">Incorrect code. Try again.</p>
        </div>

      </div>
      <pre class="demo-code" hidden>&lt;div class="otp-wrap" id="otp6" role="group" aria-label="One-time passcode"&gt;
  &lt;input class="otp-input" type="text" inputmode="numeric"
         maxlength="1" pattern="[0-9]" aria-label="Digit 1" /&gt;
  &lt;!-- × 5 more --&gt;
&lt;/div&gt;

&lt;!-- Large PIN --&gt;
&lt;div class="otp-wrap" id="otp4" role="group" aria-label="PIN code"&gt;
  &lt;input class="otp-input otp-input-lg" type="text" inputmode="numeric"
         maxlength="1" pattern="[0-9]" aria-label="Digit 1" /&gt;
  &lt;!-- × 3 more --&gt;
&lt;/div&gt;

&lt;script&gt;initOTP('otp6'); initOTP('otp4');&lt;/script&gt;</pre>
    </div>
  </section>

  <div class="page-rule"></div>

  <!-- ══════════════════════════════════════
       § 3 — GLASSMORPHISM INPUTS
  ══════════════════════════════════════ -->
  <section id="glass">
    <p class="section-label">03</p>
    <h2 class="section-title">Glassmorphism Set</h2>
    <p class="section-body">
      Apple liquid-glass aesthetic — frosted backdrop, luminous border, layered depth.
      Use inside a <code>.glass-panel</code> container or over a blurred/coloured background.
      Classes: <code>.input-glass</code> · <code>.textarea-glass</code> · <code>.select-glass</code> · <code>.input-glass-search</code>
    </p>

    <div class="demo-card">
      <div class="demo-bar"><button class="demo-tab active" onclick="switchTab(this)">Preview</button><button class="demo-tab" onclick="switchTab(this)">HTML</button></div>
      <div class="demo-preview center glass-bg">
        <div class="glass-panel glass-panel-sm" style="width:100%;max-width:520px">
          <div style="margin-bottom:20px">
            <p style="font-size:22px;font-weight:700;letter-spacing:-.02em;color:var(--color-text-primary);margin-bottom:4px">Sign in</p>
            <p style="font-size:14px;color:var(--color-text-secondary)">Welcome back to Holidayseva</p>
          </div>
          <div style="display:flex;flex-direction:column;gap:16px">
            <div class="glass-field">
              <label class="glass-label" for="g1">Email address</label>
              <div class="input-wrap">
                <span class="input-icon" aria-hidden="true">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="3.5" width="13" height="9" rx="1.5" stroke="currentColor" stroke-width="1.3"/><path d="M1.5 5.5l6.5 4 6.5-4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
                </span>
                <input class="input-glass" id="g1" type="email" placeholder="you@email.com" style="padding-left:40px;height:var(--input-h-md);font-size:var(--input-fs-md)" />
              </div>
            </div>
            <div class="glass-field">
              <label class="glass-label" for="g2">Password</label>
              <div class="input-wrap icon-right">
                <input class="input-glass" id="g2" type="password" placeholder="Min. 8 characters" style="height:var(--input-h-md);font-size:var(--input-fs-md)" />
                <button class="pw-toggle" type="button" aria-label="Show password" onclick="togglePw(this,'g2')">
                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M1 9C1 9 4 3.5 9 3.5S17 9 17 9s-3 5.5-8 5.5S1 9 1 9z" stroke="currentColor" stroke-width="1.4"/><circle cx="9" cy="9" r="2.5" stroke="currentColor" stroke-width="1.4"/></svg>
                </button>
              </div>
            </div>
            <button type="button" style="height:44px;border-radius:var(--radius-md);background:var(--color-primary);color:var(--color-text-inverse);font-size:15px;font-weight:600;font-family:inherit;border:none;cursor:pointer;transition:background .14s;letter-spacing:-.01em" onmouseover="this.style.background='var(--color-primary-hover)'" onmouseout="this.style.background='var(--color-primary)'">
              Continue
            </button>
          </div>
        </div>
      </div>
      <pre class="demo-code" hidden>&lt;!-- Wrap glass inputs inside .glass-panel for correct depth --&gt;
&lt;div class="glass-panel"&gt;

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

    <!-- Glass search -->
    <h3 class="section-h3" id="glass-search">Glass Search</h3>
    <div class="demo-card">
      <div class="demo-bar"><button class="demo-tab active" onclick="switchTab(this)">Preview</button></div>
      <div class="demo-preview center glass-bg" style="padding:40px 32px">
        <div class="input-wrap" style="max-width:500px;width:100%">
          <span class="input-icon" aria-hidden="true" style="left:16px">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="8" cy="8" r="5.5" stroke="currentColor" stroke-width="1.4"/><path d="M12.5 12.5l3.5 3.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>
          </span>
          <input class="input-glass-search" type="search" placeholder="Where do you want to go?"
                 style="padding-left:48px;width:100%;font-size:16px;" />
        </div>
      </div>
    </div>

    <!-- Glass OTP -->
    <h3 class="section-h3" id="glass-otp">Glass OTP</h3>
    <div class="demo-card">
      <div class="demo-bar"><button class="demo-tab active" onclick="switchTab(this)">Preview</button></div>
      <div class="demo-preview center glass-bg" style="padding:48px 32px">
        <div class="glass-panel glass-panel-sm" style="display:flex;flex-direction:column;align-items:center;gap:20px">
          <div>
            <p style="font-size:18px;font-weight:700;color:var(--color-text-primary);text-align:center;margin-bottom:4px">Verify your number</p>
            <p style="font-size:13px;color:var(--color-text-secondary);text-align:center">Enter the 6-digit code sent to +91 98765 43210</p>
          </div>
          <div class="otp-wrap otp-glass" id="glassOtp" role="group" aria-label="Verification code">
            <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 1" />
            <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 2" />
            <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 3" />
            <span class="otp-sep" aria-hidden="true">–</span>
            <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 4" />
            <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 5" />
            <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 6" />
          </div>
        </div>
      </div>
    </div>

    <!-- Glass textarea -->
    <h3 class="section-h3" id="glass-textarea">Glass Textarea &amp; Select</h3>
    <div class="demo-card">
      <div class="demo-bar"><button class="demo-tab active" onclick="switchTab(this)">Preview</button></div>
      <div class="demo-preview center glass-bg" style="padding:40px 32px">
        <div class="glass-panel glass-panel-sm" style="width:100%;max-width:500px;display:flex;flex-direction:column;gap:16px">
          <div class="glass-field">
            <label class="glass-label" for="gta">Property description</label>
            <textarea class="textarea-glass" id="gta" rows="3" placeholder="Describe your space…"></textarea>
          </div>
          <div class="glass-field">
            <label class="glass-label" for="gsel">Category</label>
            <div class="select-wrap">
              <select class="select-glass" id="gsel">
                <option>Select a category…</option>
                <option>Beachfront</option><option>Mountain</option>
                <option>City centre</option><option>Countryside</option>
              </select>
              <span class="select-caret" aria-hidden="true">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="page-rule"></div>

  <!-- ══════════════════════════════════════
       § 4 — SPECS
  ══════════════════════════════════════ -->
  <section id="specs">
    <p class="section-label">04</p>
    <h2 class="section-title">Specifications</h2>
    <div class="spec-grid">
      <div class="spec-item"><div class="spec-label">Height SM</div><div class="spec-val">34 px</div></div>
      <div class="spec-item"><div class="spec-label">Height MD (default)</div><div class="spec-val">42 px</div></div>
      <div class="spec-item"><div class="spec-label">Height LG</div><div class="spec-val">52 px</div></div>
      <div class="spec-item"><div class="spec-label">OTP cell</div><div class="spec-val">48 × 56 px</div></div>
      <div class="spec-item"><div class="spec-label">OTP cell LG</div><div class="spec-val">62 × 70 px</div></div>
      <div class="spec-item"><div class="spec-label">Border radius MD</div><div class="spec-val">10 px</div></div>
      <div class="spec-item"><div class="spec-label">Border (default)</div><div class="spec-val"><code>--color-border</code></div></div>
      <div class="spec-item"><div class="spec-label">Border (focus)</div><div class="spec-val"><code>--color-border-focus</code></div></div>
      <div class="spec-item"><div class="spec-label">Focus ring (standard)</div><div class="spec-val"><code>--focus-ring-blue</code></div></div>
      <div class="spec-item"><div class="spec-label">Focus ring (OTP/glass)</div><div class="spec-val"><code>--focus-ring</code> (coral)</div></div>
      <div class="spec-item"><div class="spec-label">Surface</div><div class="spec-val"><code>--color-surface</code></div></div>
      <div class="spec-item"><div class="spec-label">Glass bg</div><div class="spec-val"><code>--color-glass-bg</code></div></div>
    </div>
  </section>

  <div class="page-rule"></div>

  <!-- ══════════════════════════════════════
       § 5 — JAVASCRIPT API
  ══════════════════════════════════════ -->
  <section id="javascript">
    <p class="section-label">05</p>
    <h2 class="section-title">JavaScript API</h2>
    <p class="section-body">Lightweight helpers in <code>input.js</code>. No framework required.</p>
    <table class="prop-table">
      <thead><tr><th style="width:220px">Function</th><th style="width:220px">Signature</th><th>Description</th></tr></thead>
      <tbody>
        <tr><td><code>togglePw(btn, id)</code></td><td><code>(El, string)</code></td><td>Toggles password visibility; updates aria-label and icon.</td></tr>
        <tr><td><code>step(id, delta)</code></td><td><code>(string, number)</code></td><td>Increments / decrements number input, respecting min/max.</td></tr>
        <tr><td><code>countChars(el, id, max)</code></td><td><code>(El, string, number)</code></td><td>Updates textarea character counter; adds <code>.is-near</code> / <code>.is-max</code>.</td></tr>
        <tr><td><code>syncRange(el, id, pre, suf)</code></td><td><code>(El, string, str?, str?)</code></td><td>Syncs CSS <code>--pct</code> track fill and value label.</td></tr>
        <tr><td><code>initOTP(groupId)</code></td><td><code>(string)</code></td><td>Wires auto-advance, backspace, paste and arrow keys for an OTP group.</td></tr>
        <tr><td><code>handleTag(event)</code></td><td><code>(KeyboardEvent)</code></td><td>Creates a tag pill on Enter inside <code>.tag-input-inner</code>.</td></tr>
        <tr><td><code>removeTag(btn)</code></td><td><code>(El)</code></td><td>Removes a <code>.tag-pill</code> from the tag input wrap.</td></tr>
      </tbody>
    </table>
  </section>

  <div class="page-rule"></div>

  <!-- ══════════════════════════════════════
       § 6 — INTEGRATION
  ══════════════════════════════════════ -->
  <section id="integration">
    <p class="section-label">06</p>
    <h2 class="section-title">Integration</h2>
    <div class="demo-card">
      <pre class="demo-code">&lt;!-- ① Token layer (always first) --&gt;
&lt;link rel="stylesheet" href="/colors.css" /&gt;

&lt;!-- ② Component CSS (zero hex inside) --&gt;
&lt;link rel="stylesheet" href="/Atom/input/input.css" /&gt;

&lt;!-- ③ Helper JS --&gt;
&lt;script src="/Atom/input/input.js" defer&gt;&lt;/script&gt;

&lt;!-- PHP sidebar includes --&gt;
&lt;?php include $partials . 'left_sidebar.php'; ?&gt;
&lt;?php include $partials . 'right_sidebar.php'; ?&gt;</pre>
    </div>
    <div class="callout callout-warn">
      <span class="callout-icon">⚠</span>
      <span>Never write hex, <code>rgba()</code>, or <code>hsl()</code> literals in <code>input.css</code>
      or any component stylesheet. All colour decisions live exclusively in <code>colors.css</code>.</span>
    </div>
  </section>

  <div class="page-rule"></div>

  <!-- ══════════════════════════════════════
       § 7 — ACCESSIBILITY
  ══════════════════════════════════════ -->
  <section id="accessibility">
    <p class="section-label">07</p>
    <h2 class="section-title">Accessibility</h2>
    <ul class="a11y-list">
      <?php
      $checks = [
        'Every <code>&lt;input&gt;</code> needs an associated <code>&lt;label&gt;</code> via matching <code>for</code>/<code>id</code>. Never use <code>placeholder</code> as the only label.',
        'Error states: set <code>aria-invalid="true"</code> on the input and <code>aria-describedby</code> pointing to the error message.',
        'OTP groups: <code>role="group"</code> + <code>aria-label</code> on the wrapper; individual <code>aria-label="Digit N"</code> on each cell.',
        'Focus rings must never be suppressed without a custom high-contrast replacement. Tokens <code>--focus-ring</code> and <code>--focus-ring-blue</code> meet 3:1 contrast.',
        'Password toggle: <code>aria-label</code> must reflect current action — "Show password" or "Hide password".',
        'Range sliders: expose current value via <code>aria-valuenow</code>, <code>aria-valuemin</code>, and <code>aria-valuemax</code>.',
        'Tag input wrap: add <code>role="group"</code> + <code>aria-label</code>; each pill remove button needs a descriptive <code>aria-label</code>.',
        'All icon-only decorative SVGs must carry <code>aria-hidden="true"</code>.',
      ];
      foreach ($checks as $c): ?>
      <li class="a11y-item">
        <span class="a11y-check" aria-hidden="true">
          <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
            <path d="M2 5l2.5 2.5L8 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </span>
        <span><?= $c ?></span>
      </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <div style="height:80px"></div>
</main>

<!-- ════ RIGHT SIDEBAR ════ -->
<aside class="sidebar-right" aria-label="On this page">
  <?php include $partials . 'right_sidebar.php'; ?>
</aside>

</div><!-- /.shell -->

<button class="scroll-top" id="scrollTop"
        onclick="window.scrollTo({top:0,behavior:'smooth'})"
        aria-label="Back to top">
  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
    <path d="M8 12V4M4 7l4-4 4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
</button>

<!-- ═══════════════════════════════════════
     input.js — extract to /Atom/input/input.js
═══════════════════════════════════════ -->
<script>
/* ─── Tab switcher ────────────────────────────────────────── */
function switchTab(btn) {
  const card    = btn.closest('.demo-card');
  const tabs    = card.querySelectorAll('.demo-tab');
  const preview = card.querySelector('.demo-preview');
  const code    = card.querySelector('.demo-code');
  const show    = btn.textContent.trim() === 'Preview';
  tabs.forEach(t => t.classList.remove('active'));
  btn.classList.add('active');
  if (preview) preview.hidden = !show;
  if (code)    code.hidden    =  show;
}

/* ─── Password reveal ─────────────────────────────────────── */
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

/* ─── Number stepper ──────────────────────────────────────── */
function step(id, delta) {
  const el  = document.getElementById(id);
  const min = el.min !== '' ? +el.min : -Infinity;
  const max = el.max !== '' ? +el.max :  Infinity;
  el.value  = Math.min(max, Math.max(min, (+el.value || 0) + delta));
}

/* ─── Textarea counter ────────────────────────────────────── */
function countChars(el, id, max) {
  const n   = el.value.length;
  const out = document.getElementById(id);
  if (!out) return;
  out.textContent = n + ' / ' + max;
  out.classList.toggle('is-near', n >= max * .8 && n < max);
  out.classList.toggle('is-max',  n >= max);
}

/* ─── Range slider ────────────────────────────────────────── */
function syncRange(el, valId, pre, suf) {
  pre = pre || ''; suf = suf || '';
  const min = +el.min, max = +el.max, val = +el.value;
  const pct = ((val - min) / (max - min) * 100).toFixed(1);
  el.style.setProperty('--pct', pct + '%');
  const disp = Number.isInteger(val) ? val.toLocaleString('en-IN') : val;
  const out  = document.getElementById(valId);
  if (out) out.textContent = pre + disp + suf;
}

/* ─── OTP auto-advance ────────────────────────────────────── */
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
      if (e.key === 'ArrowLeft'  && i > 0)              inputs[i - 1].focus();
      if (e.key === 'ArrowRight' && i < inputs.length-1) inputs[i + 1].focus();
    });
    inp.addEventListener('paste', e => {
      e.preventDefault();
      const digits = (e.clipboardData.getData('text') || '').replace(/\D/g,'').split('');
      digits.forEach((d, j) => { if (inputs[i+j]) { inputs[i+j].value = d; inputs[i+j].classList.add('is-filled'); } });
      inputs[Math.min(i + digits.length, inputs.length - 1)]?.focus();
    });
  });
}

/* ─── Tag input ───────────────────────────────────────────── */
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

/* ─── Init ────────────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  initOTP('otp6');
  initOTP('otp4');
  initOTP('glassOtp');

  /* Scroll spy */
  const links   = document.querySelectorAll('.toc-link');
  const targets = document.querySelectorAll('section[id], h3[id]');
  if (links.length && targets.length) {
    new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          links.forEach(a => a.classList.remove('active'));
          document.querySelector(`.toc-link[href="#${e.target.id}"]`)?.classList.add('active');
        }
      });
    }, { rootMargin: '-10% 0px -75% 0px' }).observe || targets.forEach(t => {});
    const spy = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (!e.isIntersecting) return;
        links.forEach(a => a.classList.remove('active'));
        document.querySelector(`.toc-link[href="#${e.target.id}"]`)?.classList.add('active');
      });
    }, { rootMargin: '-10% 0px -75% 0px' });
    targets.forEach(t => spy.observe(t));
  }

  /* Sidebar groups */
  document.querySelectorAll('.sb-link.active').forEach(l => l.closest('.sb-group')?.classList.add('has-active'));

  /* Scroll top */
  const btn = document.getElementById('scrollTop');
  window.addEventListener('scroll', () => btn?.classList.toggle('visible', scrollY > 400));
});

/* ─── Sidebar helpers ─────────────────────────────────────── */
function toggleGroup(btn) {
  const grp  = btn.closest('.sb-group');
  const list = grp.querySelector('.sb-items');
  const open = grp.classList.contains('open');
  grp.classList.toggle('open', !open);
  open ? list.setAttribute('hidden','') : list.removeAttribute('hidden');
}
function filterSidebar(inp) {
  const term = inp.value.toLowerCase().trim();
  const nav  = inp.closest('.sidebar-left') || document;
  if (!term) {
    nav.querySelectorAll('.sb-link').forEach(a => a.classList.remove('hidden','sb-match'));
    nav.querySelectorAll('.sb-group').forEach(g => {
      const l = g.querySelector('.sb-items');
      g.classList.contains('open') ? l.removeAttribute('hidden') : l.setAttribute('hidden','');
    });
    return;
  }
  nav.querySelectorAll('.sb-group').forEach(g => {
    const links = g.querySelectorAll('.sb-link');
    const list  = g.querySelector('.sb-items');
    let hit = false;
    links.forEach(a => {
      const m = a.textContent.toLowerCase().includes(term);
      a.classList.toggle('hidden', !m); a.classList.toggle('sb-match', m);
      if (m) hit = true;
    });
    if (hit) { g.classList.add('open'); list.removeAttribute('hidden'); }
    else if (!g.classList.contains('has-active')) { g.classList.remove('open'); list.setAttribute('hidden',''); }
  });
}
</script>
</body>
</html>