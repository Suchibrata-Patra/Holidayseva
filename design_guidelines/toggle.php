<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toggle — Design Guidelines</title>

  <!-- ▸ Toggle component styles — from toggle.css -->
  <link rel="stylesheet" href="/Components/toggle.css">

  <style>
    /* ─────────────────────────────────────────────────
       APPLE DESIGN TOKENS
    ───────────────────────────────────────────────── */
    :root {
      --sf:         -apple-system, "SF Pro Text", "SF Pro Display", BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif;
      --sf-display: -apple-system, "SF Pro Display", BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif;
      --sf-mono:    "SF Mono", ui-monospace, "Cascadia Code", "Fira Mono", monospace;

      --label-1:  #1d1d1f;
      --label-2:  #6e6e73;
      --label-3:  #aeaeb2;

      --fill-1:   #ffffff;
      --fill-2:   #fbfbfd;
      --fill-3:   #f5f5f7;

      --sep:      rgba(0,0,0,.08);
      --sep-hard: #d2d2d7;

      --blue:     #0066cc;

      --top-h:  48px;
      --sub-h:  44px;
      --sb-w:   228px;
      --toc-w:  192px;

      --r-xs: 4px; --r-sm: 6px; --r-md: 10px; --r-lg: 14px; --r-xl: 18px;
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      text-rendering: optimizeLegibility;
      scroll-behavior: smooth;
    }
    body {
      font-family: var(--sf);
      background: var(--fill-2);
      color: var(--label-1);
      line-height: 1.6;
    }

    /* ══════════════════════════════════════════
       TIER 1 — Global nav
    ══════════════════════════════════════════ */
    .g-nav {
      position: fixed; top: 0; left: 0; right: 0;
      height: var(--top-h);
      background: rgba(255,255,255,.85);
      backdrop-filter: saturate(180%) blur(20px);
      -webkit-backdrop-filter: saturate(180%) blur(20px);
      border-bottom: 1px solid var(--sep);
      display: flex; align-items: center;
      padding: 0 22px; z-index: 300;
    }
    .g-brand {
      display: flex; align-items: center; gap: 7px;
      text-decoration: none;
      font-family: var(--sf-display);
      font-size: 13px; font-weight: 600;
      color: var(--label-1); letter-spacing: -.012em;
      flex-shrink: 0;
    }
    .g-links {
      list-style: none; display: flex;
      align-items: center; margin: 0 auto;
    }
    .g-links a {
      font-size: 13px; font-weight: 400;
      color: var(--label-2); text-decoration: none;
      padding: 5px 11px; border-radius: var(--r-sm);
      letter-spacing: -.003em; transition: color .14s;
    }
    .g-links a:hover { color: var(--label-1); }
    .g-links a.on    { color: var(--label-1); font-weight: 500; }
    .g-actions { display: flex; align-items: center; gap: 2px; flex-shrink: 0; }
    .g-icon {
      width: 30px; height: 30px; border: none; background: none;
      cursor: pointer; border-radius: var(--r-sm);
      display: flex; align-items: center; justify-content: center;
      color: var(--label-2); transition: background .12s, color .12s;
    }
    .g-icon:hover { background: var(--fill-3); color: var(--label-1); }

    /* ══════════════════════════════════════════
       TIER 2 — Section nav
    ══════════════════════════════════════════ */
    .s-nav {
      position: fixed; top: var(--top-h); left: 0; right: 0;
      height: var(--sub-h);
      background: rgba(255,255,255,.9);
      backdrop-filter: saturate(180%) blur(16px);
      -webkit-backdrop-filter: saturate(180%) blur(16px);
      border-bottom: 1px solid var(--sep);
      display: flex; align-items: center;
      padding: 0 22px; gap: 18px; z-index: 299;
    }
    .s-title {
      font-family: var(--sf-display);
      font-size: 13px; font-weight: 600;
      color: var(--label-1); letter-spacing: -.012em;
      white-space: nowrap; flex-shrink: 0;
    }
    .s-div { width: 1px; height: 14px; background: var(--sep-hard); flex-shrink: 0; }
    .s-tabs { list-style: none; display: flex; align-items: center; }
    .s-tabs a {
      font-size: 13px; font-weight: 400; color: var(--label-2);
      text-decoration: none; padding: 5px 11px; border-radius: var(--r-sm);
      letter-spacing: -.003em; transition: color .12s;
    }
    .s-tabs a:hover { color: var(--label-1); }
    .s-tabs a.on    { color: var(--label-1); font-weight: 500; }

    /* ══════════════════════════════════════════
       LAYOUT
    ══════════════════════════════════════════ */
    .layout {
      display: flex;
      padding-top: calc(var(--top-h) + var(--sub-h));
      min-height: 100vh;
    }
    .sidebar {
      width: var(--sb-w); flex-shrink: 0;
      position: sticky; top: calc(var(--top-h) + var(--sub-h));
      height: calc(100vh - var(--top-h) - var(--sub-h));
      overflow-y: auto; padding: 20px 0 48px;
      border-right: 1px solid var(--sep);
    }
    .sidebar::-webkit-scrollbar { width: 0; }
    .toc-col {
      width: var(--toc-w); flex-shrink: 0;
      position: sticky; top: calc(var(--top-h) + var(--sub-h));
      height: calc(100vh - var(--top-h) - var(--sub-h));
      overflow-y: auto; padding: 28px 0 48px;
      border-left: 1px solid var(--sep);
    }
    .toc-col::-webkit-scrollbar { width: 0; }
    .main {
      flex: 1; min-width: 0; max-width: 740px;
      padding: 52px 52px 120px 56px;
    }

    /* ══════════════════════════════════════════
       PAGE TYPOGRAPHY
    ══════════════════════════════════════════ */
    .eyebrow {
      font-size: 11px; font-weight: 600; letter-spacing: .05em;
      text-transform: uppercase; color: var(--label-3); margin-bottom: 8px;
    }
    .page-title {
      font-family: var(--sf-display);
      font-size: 48px; font-weight: 700;
      letter-spacing: -.025em; line-height: 1.06;
      color: var(--label-1); margin-bottom: 14px;
    }
    .page-lead {
      font-size: 17px; font-weight: 300; color: var(--label-2);
      line-height: 1.7; max-width: 520px; letter-spacing: -.003em;
    }
    hr.divider {
      border: none; border-top: 1px solid var(--sep);
      margin: 36px 0 44px;
    }
    .sec-title {
      font-family: var(--sf-display);
      font-size: 24px; font-weight: 700; letter-spacing: -.018em;
      color: var(--label-1); margin-bottom: 10px;
    }
    .sub-title {
      font-size: 15px; font-weight: 600; letter-spacing: -.01em;
      color: var(--label-1); margin: 26px 0 8px;
    }
    .body-p {
      font-size: 15px; font-weight: 400; color: var(--label-2);
      line-height: 1.8; letter-spacing: -.003em; margin-bottom: 14px;
    }
    .body-p:last-child { margin-bottom: 0; }
    .body-p code, .body-p strong {
      font-family: var(--sf-mono); font-size: 12.5px; font-weight: 500;
      background: var(--fill-3); color: var(--label-1);
      padding: 1px 5px; border-radius: var(--r-xs); border: 1px solid var(--sep-hard);
    }
    .body-p strong { font-family: var(--sf); font-weight: 600; font-size: inherit; background: none; border: none; padding: 0; }
    kbd {
      font-family: var(--sf-mono); font-size: 11px; font-weight: 500;
      background: var(--fill-3); color: var(--label-1);
      border: 1px solid var(--sep-hard); border-radius: var(--r-xs);
      padding: 1px 6px; box-shadow: 0 1px 0 var(--sep-hard);
    }

    /* ══════════════════════════════════════════
       DEMO BOX — uses .toggle from toggle.css
    ══════════════════════════════════════════ */
    .demo-box {
      background: var(--fill-3);
      border: 1px solid var(--sep);
      border-radius: var(--r-xl);
      padding: 52px 40px;
      display: flex; flex-direction: column;
      align-items: center; gap: 24px;
      margin: 24px 0;
    }
    .demo-cap {
      font-size: 11px; font-weight: 500; letter-spacing: .05em;
      text-transform: uppercase; color: var(--label-3);
    }
    .demo-badge {
      font-family: var(--sf-mono); font-size: 11.5px; color: var(--label-3);
      background: var(--fill-1); border: 1px solid var(--sep-hard);
      border-radius: 20px; padding: 3px 13px;
      transition: color .2s, border-color .2s, background .2s;
    }
    .demo-badge.on {
      color: #b5281c;
      border-color: rgba(255,56,92,.3);
      background: rgba(255,56,92,.05);
    }

    /* ══════════════════════════════════════════
       ANATOMY DIAGRAM
    ══════════════════════════════════════════ */
    .anatomy-box {
      background: var(--fill-3); border: 1px solid var(--sep);
      border-radius: var(--r-xl); padding: 64px 40px;
      display: flex; align-items: center; justify-content: center;
      margin: 20px 0; overflow: visible;
    }
    .anat-wrap { position: relative; }
    .anat-track {
      position: relative; width: 192px; height: 108px;
      background: #dddddd; border-radius: 54px;
    }
    .anat-thumb {
      position: absolute; width: 92px; height: 92px;
      background: #fff; border-radius: 50%;
      top: 8px; left: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,.15);
    }
    .ann {
      position: absolute; display: flex;
      align-items: center; gap: 6px; pointer-events: none;
    }
    .ann-dot  { width: 5px; height: 5px; border-radius: 50%; background: var(--label-3); flex-shrink: 0; }
    .ann-line { width: 38px; height: 1px; background: var(--sep-hard); }
    .ann span { font-family: var(--sf-mono); font-size: 10.5px; color: var(--label-3); white-space: nowrap; }
    .ann-r { top: 50%; right: -152px; transform: translateY(10px); }
    .ann-l { top: 36%; left: -158px; flex-direction: row-reverse; }

    /* ══════════════════════════════════════════
       SPEC TABLE
    ══════════════════════════════════════════ */
    .spec-table {
      width: 100%; border: 1px solid var(--sep-hard);
      border-radius: var(--r-md); overflow: hidden; margin: 18px 0;
    }
    .spec-row {
      display: flex; align-items: center;
      padding: 10px 18px; font-size: 13px;
      border-bottom: 1px solid var(--sep);
    }
    .spec-row:last-child { border-bottom: none; }
    .spec-row:nth-child(even) { background: rgba(0,0,0,.015); }
    .spec-key { width: 168px; flex-shrink: 0; font-weight: 500; color: var(--label-1); letter-spacing: -.005em; }
    .spec-val { font-family: var(--sf-mono); font-size: 12px; color: var(--label-2); display: flex; align-items: center; gap: 6px; }
    .sw {
      display: inline-block; width: 11px; height: 11px;
      border-radius: 3px; border: 1px solid rgba(0,0,0,.1); flex-shrink: 0;
    }

    /* ══════════════════════════════════════════
       API TABLE
    ══════════════════════════════════════════ */
    .api-table {
      width: 100%; border-collapse: collapse;
      border: 1px solid var(--sep-hard); border-radius: var(--r-md);
      overflow: hidden; font-size: 13px; margin: 16px 0;
    }
    .api-table thead { background: rgba(0,0,0,.02); }
    .api-table th {
      padding: 9px 16px; font-weight: 600; font-size: 11.5px;
      letter-spacing: .01em; color: var(--label-1); text-align: left;
      border-bottom: 1px solid var(--sep-hard);
    }
    .api-table td {
      padding: 10px 16px; color: var(--label-2);
      border-bottom: 1px solid var(--sep); line-height: 1.6; letter-spacing: -.003em;
    }
    .api-table tr:last-child td { border-bottom: none; }
    .api-table td:first-child { font-family: var(--sf-mono); font-size: 12px; color: var(--label-1); font-weight: 500; }
    .api-table code {
      font-family: var(--sf-mono); font-size: 11.5px;
      background: var(--fill-3); color: var(--label-1);
      padding: 1px 5px; border-radius: var(--r-xs); border: 1px solid var(--sep-hard);
    }

    /* ══════════════════════════════════════════
       CODE BLOCKS
    ══════════════════════════════════════════ */
    .code-block {
      background: var(--fill-3); border: 1px solid var(--sep-hard);
      border-radius: var(--r-md); overflow: hidden; margin: 12px 0 20px;
    }
    .code-bar {
      display: flex; align-items: center; justify-content: space-between;
      padding: 7px 14px; border-bottom: 1px solid var(--sep);
      background: rgba(255,255,255,.55);
    }
    .lang-tag {
      font-family: var(--sf-mono); font-size: 10px; font-weight: 600;
      letter-spacing: .07em; text-transform: uppercase; color: var(--label-3);
    }
    .cp-btn {
      font-family: var(--sf); font-size: 11px; font-weight: 500;
      color: var(--blue); background: none; border: none;
      cursor: pointer; padding: 2px 0; transition: opacity .12s;
    }
    .cp-btn:hover { opacity: .7; }
    .code-block pre {
      overflow-x: auto; padding: 16px 18px;
      font-family: var(--sf-mono); font-size: 12.5px;
      line-height: 1.8; color: var(--label-1);
    }
    .t { color: #b5281c; }
    .a { color: #2972a8; }
    .s { color: #2e7d32; }
    .k { color: #6f42c1; }
    .m { color: #b5281c; }
    .c { color: var(--label-3); font-style: italic; }

    /* ══════════════════════════════════════════
       CALLOUT
    ══════════════════════════════════════════ */
    .callout {
      background: var(--fill-3); border: 1px solid var(--sep-hard);
      border-radius: var(--r-md); padding: 14px 16px; margin: 14px 0;
      display: flex; gap: 10px; align-items: flex-start;
    }
    .c-icon { font-size: 14px; flex-shrink: 0; margin-top: 1px; color: var(--label-3); }
    .callout p { font-size: 13px; color: var(--label-2); line-height: 1.7; letter-spacing: -.003em; }
    .callout p code {
      font-family: var(--sf-mono); font-size: 11.5px;
      background: rgba(0,0,0,.05); color: var(--label-1);
      padding: 1px 5px; border-radius: var(--r-xs);
    }
    .callout.warn { border-color: rgba(255,149,0,.35); background: rgba(255,149,0,.04); }
    .callout.warn .c-icon { color: #f5a623; }

    /* ══════════════════════════════════════════
       FILE TREE
    ══════════════════════════════════════════ */
    .file-tree {
      font-family: var(--sf-mono); font-size: 12.5px;
      line-height: 2; color: var(--label-2);
      background: var(--fill-3); border: 1px solid var(--sep-hard);
      border-radius: var(--r-md); padding: 16px 20px; margin: 12px 0;
    }
    .ft-d { color: var(--label-1); font-weight: 500; }
    .ft-h { color: var(--blue); }

    /* ══════════════════════════════════════════
       LEFT SIDEBAR
    ══════════════════════════════════════════ */
    .sb-filter {
      display: flex; align-items: center; gap: 7px;
      margin: 0 14px 14px; padding: 6px 10px;
      background: var(--fill-3); border: 1px solid var(--sep-hard);
      border-radius: 8px; color: var(--label-3);
    }
    .sb-filter input {
      border: none; background: none; outline: none;
      font-family: var(--sf); font-size: 12.5px; color: var(--label-1); width: 100%;
    }
    .sb-filter input::placeholder { color: var(--label-3); }
    .sb-nav { padding: 0 6px; }
    .sb-group { margin-bottom: 2px; }
    .sb-btn {
      width: 100%; display: flex; align-items: center; gap: 6px;
      padding: 5px 10px; background: none; border: none; cursor: pointer;
      font-family: var(--sf); font-size: 12.5px; font-weight: 600;
      color: var(--label-1); text-align: left; border-radius: 7px;
      letter-spacing: -.006em; transition: background .1s;
    }
    .sb-btn:hover { background: var(--fill-3); }
    .sb-chev { flex-shrink: 0; color: var(--label-3); transition: transform .18s ease; }
    .sb-group.open > .sb-btn .sb-chev { transform: rotate(90deg); }
    .sb-list { list-style: none; padding: 1px 0 2px 16px; }
    .sb-list[hidden] { display: none; }
    .sb-link {
      display: flex; align-items: center; gap: 7px;
      font-family: var(--sf); font-size: 12.5px; font-weight: 400;
      color: var(--label-2); text-decoration: none;
      padding: 4px 10px; border-radius: 6px;
      letter-spacing: -.004em; line-height: 1.5; transition: background .1s, color .1s;
    }
    .sb-link svg { flex-shrink: 0; color: var(--label-3); }
    .sb-link:hover { background: var(--fill-3); color: var(--label-1); }
    .sb-link:hover svg { color: var(--label-2); }
    .sb-link.active { font-weight: 600; color: var(--label-1); background: rgba(0,0,0,.055); }
    .sb-link.active svg { color: var(--label-1); }
    .sb-link.hidden { display: none; }

    /* ══════════════════════════════════════════
       RIGHT TOC
    ══════════════════════════════════════════ */
    .toc-wrap { padding: 0 0 0 20px; }
    .toc-label {
      font-family: var(--sf); font-size: 10.5px; font-weight: 600;
      letter-spacing: .04em; text-transform: uppercase;
      color: var(--label-1); margin-bottom: 10px; padding-left: 8px;
    }
    .toc-list { list-style: none; border-left: 1px solid var(--sep-hard); }
    .toc-link {
      display: block; font-family: var(--sf); font-size: 12px; font-weight: 400;
      color: var(--label-3); text-decoration: none;
      padding: 3px 0 3px 12px; border-left: 2px solid transparent; margin-left: -1px;
      letter-spacing: -.003em; line-height: 1.6; transition: color .12s, border-color .12s;
    }
    .toc-link:hover { color: var(--label-1); }
    .toc-link.active { color: var(--label-1); font-weight: 500; border-left-color: var(--label-1); }

    /* ══════════════════════════════════════════
       FOOTER
    ══════════════════════════════════════════ */
    .page-footer {
      border-top: 1px solid var(--sep); padding: 22px 56px;
      display: flex; justify-content: space-between; align-items: center;
      background: var(--fill-2);
    }
    .page-footer span { font-size: 12px; color: var(--label-3); letter-spacing: -.003em; }

    /* ══════════════════════════════════════════
       RESPONSIVE
    ══════════════════════════════════════════ */
    @media (max-width: 1120px) { .toc-col  { display: none; } }
    @media (max-width: 860px)  { .main { padding: 40px 28px 80px; } .page-title { font-size: 38px; } }
    @media (max-width: 680px)  { .sidebar { display: none; } .main { padding: 30px 18px 80px; } .page-title { font-size: 32px; } }
  </style>
</head>
<body>

<?php include __DIR__ . '/header.php'; ?>

<div class="layout">

  <!-- ── Left sidebar ──────────────────── -->
  <aside class="sidebar">
    <?php include __DIR__ . '/left_sidebar.php'; ?>
  </aside>

  <!-- ── Main content ──────────────────── -->
  <main class="main">

    <!-- Hero -->
    <div id="overview">
      <p class="eyebrow">Components · Form Controls</p>
      <h1 class="page-title">Toggle</h1>
      <p class="page-lead">A binary switch for enabling or disabling a single option. Communicates state instantly through colour and position.</p>
    </div>

    <hr class="divider">

    <!-- ── Live demo ── uses .toggle and .toggle-circle from toggle.css -->
    <div class="demo-box">
      <span class="demo-cap">Interactive demo — click to toggle</span>

      <div class="toggle"
           id="demoToggle"
           role="switch"
           aria-checked="false"
           tabindex="0"
           aria-label="Demo toggle switch">
        <div class="toggle-circle"></div>
      </div>

      <span class="demo-badge" id="demoBadge">state: off</span>
    </div>

    <!-- ── Anatomy ───────────────────────── -->
    <section id="anatomy" style="margin-bottom:48px">
      <h2 class="sec-title">Anatomy</h2>
      <p class="body-p">The component has two elements. The <strong>track</strong> (<code>.toggle</code>) is the pill-shaped container whose background colour reflects state. The <strong>thumb</strong> (<code>.toggle-circle</code>) is the white circle that slides inside the track.</p>
      <div class="anatomy-box">
        <div class="anat-wrap">
          <div class="anat-track">
            <div class="anat-thumb"></div>
            <div class="ann ann-r"><div class="ann-dot"></div><div class="ann-line"></div><span>.toggle</span></div>
            <div class="ann ann-l"><div class="ann-dot"></div><div class="ann-line"></div><span>.toggle-circle</span></div>
          </div>
        </div>
      </div>
    </section>

    <hr class="divider">

    <!-- ── Specifications ──────────────── -->
    <section id="specs" style="margin-bottom:48px">
      <h2 class="sec-title">Specifications</h2>
      <p class="body-p">Default (desktop) dimensions defined in <code>toggle.css</code>. A responsive breakpoint at 480 px scales the component down proportionally.</p>
      <div class="spec-table">
        <div class="spec-row"><span class="spec-key">Width</span><span class="spec-val">280px</span></div>
        <div class="spec-row"><span class="spec-key">Height</span><span class="spec-val">160px</span></div>
        <div class="spec-row"><span class="spec-key">Border radius</span><span class="spec-val">80px</span></div>
        <div class="spec-row"><span class="spec-key">Thumb diameter</span><span class="spec-val">140px</span></div>
        <div class="spec-row"><span class="spec-key">Thumb inset</span><span class="spec-val">10px (all sides)</span></div>
        <div class="spec-row"><span class="spec-key">Thumb travel</span><span class="spec-val">left: 10px → left: 130px</span></div>
        <div class="spec-row"><span class="spec-key">Easing</span><span class="spec-val">cubic-bezier(0.4, 0, 0.2, 1) — 0.4s</span></div>
        <div class="spec-row"><span class="spec-key">Off colour</span><span class="spec-val"><span class="sw" style="background:#DDDDDD"></span>#DDDDDD</span></div>
        <div class="spec-row"><span class="spec-key">Active colour</span><span class="spec-val"><span class="sw" style="background:#FF385C"></span>#FF385C</span></div>
        <div class="spec-row"><span class="spec-key">Thumb colour</span><span class="spec-val"><span class="sw" style="background:#fff;border-color:#ccc"></span>#ffffff</span></div>
      </div>
    </section>

    <hr class="divider">

    <!-- ── HTML Usage ──────────────────── -->
    <section id="usage" style="margin-bottom:48px">
      <h2 class="sec-title">HTML Usage</h2>
      <p class="body-p">Link <code>toggle.css</code> in <code>&lt;head&gt;</code> and place the two-element markup anywhere in your template. <code>toggle.js</code> auto-initialises every <code>.toggle</code> on <code>DOMContentLoaded</code> — no manual wiring needed.</p>

      <div class="code-block">
        <div class="code-bar"><span class="lang-tag">HTML</span><button class="cp-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="c">&lt;!-- In &lt;head&gt; --&gt;</span>
<span class="t">&lt;link</span> <span class="a">rel</span>=<span class="s">"stylesheet"</span> <span class="a">href</span>=<span class="s">"/Components/toggle.css"</span><span class="t">&gt;</span>

<span class="c">&lt;!-- Component markup --&gt;</span>
<span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"toggle"</span>
     <span class="a">role</span>=<span class="s">"switch"</span>
     <span class="a">aria-checked</span>=<span class="s">"false"</span>
     <span class="a">tabindex</span>=<span class="s">"0"</span>
     <span class="a">aria-label</span>=<span class="s">"Enable notifications"</span><span class="t">&gt;</span>
  <span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"toggle-circle"</span><span class="t">&gt;&lt;/div&gt;</span>
<span class="t">&lt;/div&gt;</span>

<span class="c">&lt;!-- Before &lt;/body&gt; --&gt;</span>
<span class="t">&lt;script</span> <span class="a">src</span>=<span class="s">"/JS/toggle.js"</span><span class="t">&gt;&lt;/script&gt;</span></code></pre>
      </div>

      <p class="sub-title">Pre-active state</p>
      <p class="body-p">Add the <code>active</code> class directly in markup to start in the on state. Pair it with <code>aria-checked="true"</code>.</p>
      <div class="code-block">
        <div class="code-bar"><span class="lang-tag">HTML</span><button class="cp-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"toggle active"</span>
     <span class="a">role</span>=<span class="s">"switch"</span>
     <span class="a">aria-checked</span>=<span class="s">"true"</span>
     <span class="a">tabindex</span>=<span class="s">"0"</span>
     <span class="a">aria-label</span>=<span class="s">"Notifications enabled"</span><span class="t">&gt;</span>
  <span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"toggle-circle"</span><span class="t">&gt;&lt;/div&gt;</span>
<span class="t">&lt;/div&gt;</span></code></pre>
      </div>

      <div class="callout warn">
        <span class="c-icon">⚠</span>
        <p>Always include <code>role="switch"</code>, <code>aria-checked</code>, <code>tabindex="0"</code>, and a descriptive <code>aria-label</code>. <code>toggle.js</code> keeps <code>aria-checked</code> in sync automatically on every state change.</p>
      </div>
    </section>

    <hr class="divider">

    <!-- ── JavaScript API ──────────────── -->
    <section id="javascript" style="margin-bottom:48px">
      <h2 class="sec-title">JavaScript API</h2>
      <p class="body-p"><code>ToggleSwitch</code> is defined in <code>toggle.js</code> and auto-instantiated on page load via the <code>'.toggle'</code> selector. Construct a new instance for programmatic control.</p>

      <table class="api-table">
        <thead><tr><th>Method</th><th>Arguments</th><th>Returns</th><th>Description</th></tr></thead>
        <tbody>
          <tr><td>getState(el)</td><td>HTMLElement</td><td><code>"on"</code> | <code>"off"</code></td><td>Reads current state from <code>data-state</code>.</td></tr>
          <tr><td>setState(el, state)</td><td>HTMLElement, <code>"on"</code>|<code>"off"</code></td><td>—</td><td>Sets state silently — no event fired.</td></tr>
          <tr><td>toggle(el)</td><td>HTMLElement</td><td>—</td><td>Flips current state silently.</td></tr>
        </tbody>
      </table>

      <p class="sub-title">Listening for state changes</p>
      <p class="body-p">Every user click dispatches a <code>toggle-change</code> CustomEvent on the element. The <code>detail</code> object exposes a string state and a boolean.</p>
      <div class="code-block">
        <div class="code-bar"><span class="lang-tag">JavaScript</span><button class="cp-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="k">const</span> el = document.<span class="m">querySelector</span>(<span class="s">'.toggle'</span>);

el.<span class="m">addEventListener</span>(<span class="s">'toggle-change'</span>, (e) => {
  console.<span class="m">log</span>(e.detail.state);    <span class="c">// "on" | "off"</span>
  console.<span class="m">log</span>(e.detail.isActive); <span class="c">// true | false</span>
});</code></pre>
      </div>

      <p class="sub-title">Programmatic control</p>
      <div class="code-block">
        <div class="code-bar"><span class="lang-tag">JavaScript</span><button class="cp-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="k">const</span> sw = <span class="k">new</span> <span class="k">ToggleSwitch</span>(<span class="s">'.toggle'</span>);
<span class="k">const</span> el = document.<span class="m">querySelector</span>(<span class="s">'#myToggle'</span>);

sw.<span class="m">setState</span>(el, <span class="s">'on'</span>);   <span class="c">// force on  — no event</span>
sw.<span class="m">setState</span>(el, <span class="s">'off'</span>);  <span class="c">// force off — no event</span>
sw.<span class="m">toggle</span>(el);            <span class="c">// flip      — no event</span>
sw.<span class="m">getState</span>(el);          <span class="c">// → "on" | "off"</span></code></pre>
      </div>

      <div class="callout">
        <span class="c-icon">ℹ</span>
        <p><code>setState()</code> and <code>toggle()</code> do not fire <code>toggle-change</code>. Only user-initiated clicks dispatch the custom event.</p>
      </div>
    </section>

    <hr class="divider">

    <!-- ── Integration ─────────────────── -->
    <section id="integration" style="margin-bottom:48px">
      <h2 class="sec-title">Integration</h2>
      <p class="body-p">Include <code>toggle.js</code> once before <code>&lt;/body&gt;</code>. It auto-initialises all <code>.toggle</code> elements in the DOM at load time. Elements added dynamically after load require a fresh <code>new ToggleSwitch(selector)</code> call.</p>
      <div class="code-block">
        <div class="code-bar"><span class="lang-tag">HTML</span><button class="cp-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="t">&lt;script</span> <span class="a">src</span>=<span class="s">"/JS/toggle.js"</span><span class="t">&gt;&lt;/script&gt;</span></code></pre>
      </div>
      <p class="sub-title">File structure</p>
      <div class="file-tree">
        <span class="ft-d">design_guidelines/</span><br>
        ├── header.php<br>
        ├── left_sidebar.php<br>
        ├── right_sidebar.php<br>
        ├── <span class="ft-h">toggle.php</span><br>
        ├── design-system.css<br>
        ├── Components/<br>
        │&nbsp;&nbsp; └── <span class="ft-h">toggle.css</span><br>
        └── JS/<br>
        &nbsp;&nbsp;&nbsp;&nbsp;└── <span class="ft-h">toggle.js</span>
      </div>
    </section>

    <hr class="divider">

    <!-- ── Accessibility ───────────────── -->
    <section id="accessibility" style="margin-bottom:48px">
      <h2 class="sec-title">Accessibility</h2>
      <p class="body-p">The toggle is a custom control — ARIA attributes must be set explicitly in markup. <code>toggle.js</code> keeps <code>aria-checked</code> synchronised on every state transition. The element is keyboard-operable via <kbd>Space</kbd> or <kbd>Enter</kbd> when focused.</p>
      <table class="api-table">
        <thead><tr><th>Attribute</th><th>Value</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td>role</td><td><code>"switch"</code></td><td>Identifies the element as a binary switch to screen readers.</td></tr>
          <tr><td>aria-checked</td><td><code>"true"</code> / <code>"false"</code></td><td>Kept in sync by <code>toggle.js</code> on each change. Set the initial value in markup.</td></tr>
          <tr><td>tabindex</td><td><code>"0"</code></td><td>Places the element in the natural tab order.</td></tr>
          <tr><td>aria-label</td><td>Descriptive string</td><td>Describes what is being toggled, e.g. <code>"Enable dark mode"</code>.</td></tr>
        </tbody>
      </table>
      <p class="sub-title">Keyboard activation</p>
      <div class="code-block">
        <div class="code-bar"><span class="lang-tag">JavaScript</span><button class="cp-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code>document.<span class="m">querySelectorAll</span>(<span class="s">'.toggle'</span>).<span class="m">forEach</span>(el => {
  el.<span class="m">addEventListener</span>(<span class="s">'keydown'</span>, e => {
    <span class="k">if</span> (e.key === <span class="s">' '</span> || e.key === <span class="s">'Enter'</span>) {
      e.<span class="m">preventDefault</span>(); el.<span class="m">click</span>();
    }
  });
});</code></pre>
      </div>
    </section>

  </main>

  <!-- ── Right TOC ─────────────────────── -->
  <aside class="toc-col">
    <?php include __DIR__ . '/right_sidebar.php'; ?>
  </aside>

</div>

<footer class="page-footer">
  <span>Holidayseva Design Guidelines · Toggle</span>
  <span>v1.0</span>
</footer>

<!-- ▸ Toggle component script — from toggle.js -->
<script src="/JS/toggle.js"></script>

<script>
  /* Demo badge wires up to the toggle-change event dispatched by toggle.js */
  document.getElementById('demoToggle').addEventListener('toggle-change', (e) => {
    const badge = document.getElementById('demoBadge');
    badge.textContent = 'state: ' + e.detail.state;
    badge.className   = 'demo-badge' + (e.detail.isActive ? ' on' : '');
  });

  /* Keyboard activation */
  document.querySelectorAll('.toggle').forEach(el => {
    el.addEventListener('keydown', e => {
      if (e.key === ' ' || e.key === 'Enter') { e.preventDefault(); el.click(); }
    });
  });

  /* Sidebar group toggle */
  function toggleGroup(id) {
    const g = document.getElementById(id);
    const l = g.querySelector('.sb-items');
    const open = g.classList.contains('open');
    g.classList.toggle('open', !open);
    open ? l.setAttribute('hidden', '') : l.removeAttribute('hidden');
  }

  /* Sidebar filter */
  function filterSidebar(q) {
    const t = q.toLowerCase().trim();
    document.querySelectorAll('.sb-link').forEach(a => {
      const m = a.textContent.toLowerCase().includes(t);
      a.classList.toggle('hidden', !m);
      if (m && t) {
        const g = a.closest('.sb-group');
        g.classList.add('open');
        g.querySelector('.sb-items').removeAttribute('hidden');
      }
    });
  }

  /* Copy code button */
  function copyCode(btn) {
    navigator.clipboard.writeText(
      btn.closest('.code-block').querySelector('pre').innerText
    ).then(() => {
      btn.textContent = 'Copied';
      setTimeout(() => btn.textContent = 'Copy', 1800);
    });
  }
</script>

</body>
</html>