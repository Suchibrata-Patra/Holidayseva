<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toggle — Holidayseva Design Guidelines</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">

  <style>
    /* ── Reset & Base ──────────────────────────────────── */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --brand:        #FF385C;
      --brand-hover:  #e0314f;
      --text-primary: #1a1a1a;
      --text-secondary: #5a5a68;
      --text-tertiary: #9898a5;
      --bg:           #ffffff;
      --bg-subtle:    #f7f7f9;
      --bg-code:      #f3f3f6;
      --border:       #e4e4ea;
      --border-light: #efeff3;
      --shadow-xs:    0 1px 3px rgba(0,0,0,.06);
      --shadow-sm:    0 2px 8px rgba(0,0,0,.08);
      --shadow-md:    0 4px 20px rgba(0,0,0,.08);
      --r-sm:         6px;
      --r-md:         10px;
      --r-lg:         16px;
      --r-xl:         20px;
      --sans:         'DM Sans', sans-serif;
      --mono:         'DM Mono', monospace;
      --topbar-h:     52px;
      --subbar-h:     44px;
      --sidebar-w:    220px;
      --toc-w:        200px;
    }

    html { -webkit-font-smoothing: antialiased; scroll-behavior: smooth; }
    body {
      font-family: var(--sans);
      background: var(--bg);
      color: var(--text-primary);
      line-height: 1.6;
    }

    /* ── HEADER — Tier 1 (Light) ───────────────────────── */
    .global-nav {
      position: fixed;
      top: 0; left: 0; right: 0;
      height: var(--topbar-h);
      background: rgba(255,255,255,0.88);
      backdrop-filter: blur(16px) saturate(180%);
      -webkit-backdrop-filter: blur(16px) saturate(180%);
      border-bottom: 1px solid var(--border-light);
      display: flex;
      align-items: center;
      padding: 0 24px;
      gap: 0;
      z-index: 200;
    }

    .global-nav-brand {
      display: flex;
      align-items: center;
      gap: 8px;
      text-decoration: none;
      font-size: 14px;
      font-weight: 600;
      color: var(--text-primary);
      letter-spacing: -0.01em;
      flex-shrink: 0;
    }

    .global-nav-links {
      list-style: none;
      display: flex;
      align-items: center;
      gap: 2px;
      margin: 0 auto;
    }

    .global-nav-links a {
      font-size: 13px;
      font-weight: 400;
      color: var(--text-secondary);
      text-decoration: none;
      padding: 5px 12px;
      border-radius: var(--r-sm);
      transition: background 0.12s, color 0.12s;
    }
    .global-nav-links a:hover { background: var(--bg-subtle); color: var(--text-primary); }
    .global-nav-links a.active { color: var(--text-primary); font-weight: 500; }

    .global-nav-actions {
      display: flex;
      align-items: center;
      gap: 4px;
      flex-shrink: 0;
    }

    .global-nav-icon {
      width: 32px; height: 32px;
      border: none;
      background: none;
      cursor: pointer;
      border-radius: var(--r-sm);
      display: flex; align-items: center; justify-content: center;
      color: var(--text-secondary);
      transition: background 0.12s, color 0.12s;
    }
    .global-nav-icon:hover { background: var(--bg-subtle); color: var(--text-primary); }

    /* ── HEADER — Tier 2 (Section Nav) ────────────────── */
    .section-nav {
      position: fixed;
      top: var(--topbar-h);
      left: 0; right: 0;
      height: var(--subbar-h);
      background: rgba(255,255,255,0.92);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-bottom: 1px solid var(--border-light);
      display: flex;
      align-items: center;
      padding: 0 24px;
      gap: 24px;
      z-index: 199;
    }

    .section-nav-title {
      font-size: 13px;
      font-weight: 600;
      color: var(--text-primary);
      letter-spacing: -0.01em;
      flex-shrink: 0;
    }

    .section-nav-divider {
      width: 1px; height: 16px;
      background: var(--border);
      flex-shrink: 0;
    }

    .section-nav-tabs {
      list-style: none;
      display: flex;
      align-items: center;
      gap: 2px;
    }

    .section-nav-tabs a {
      font-size: 13px;
      font-weight: 400;
      color: var(--text-secondary);
      text-decoration: none;
      padding: 4px 11px;
      border-radius: var(--r-sm);
      transition: background 0.12s, color 0.12s;
    }
    .section-nav-tabs a:hover { background: var(--bg-subtle); color: var(--text-primary); }
    .section-nav-tabs a.active {
      color: var(--brand);
      font-weight: 500;
      background: rgba(255,56,92,0.06);
    }

    /* ── Layout ───────────────────────────────────────── */
    .layout {
      display: flex;
      padding-top: calc(var(--topbar-h) + var(--subbar-h));
      min-height: 100vh;
    }

    /* ── Left Sidebar ─────────────────────────────────── */
    .sidebar {
      width: var(--sidebar-w);
      flex-shrink: 0;
      position: sticky;
      top: calc(var(--topbar-h) + var(--subbar-h));
      height: calc(100vh - var(--topbar-h) - var(--subbar-h));
      overflow-y: auto;
      padding: 24px 0 40px;
      border-right: 1px solid var(--border-light);
    }
    .sidebar::-webkit-scrollbar { width: 0; }

    /* ── Right Sidebar (TOC) ──────────────────────────── */
    .toc-sidebar {
      width: var(--toc-w);
      flex-shrink: 0;
      position: sticky;
      top: calc(var(--topbar-h) + var(--subbar-h));
      height: calc(100vh - var(--topbar-h) - var(--subbar-h));
      overflow-y: auto;
      padding: 32px 0;
      border-left: 1px solid var(--border-light);
    }
    .toc-sidebar::-webkit-scrollbar { width: 0; }

    /* ── Main Content ─────────────────────────────────── */
    .main {
      flex: 1;
      min-width: 0;
      max-width: 760px;
      padding: 56px 56px 120px 60px;
    }

    /* ── Page Hero ─────────────────────────────────────── */
    .page-eyebrow {
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.07em;
      text-transform: uppercase;
      color: var(--brand);
      margin-bottom: 10px;
    }
    .page-title {
      font-size: 48px;
      font-weight: 600;
      letter-spacing: -0.03em;
      line-height: 1.08;
      color: var(--text-primary);
      margin-bottom: 16px;
    }
    .page-lead {
      font-size: 17px;
      font-weight: 300;
      color: var(--text-secondary);
      line-height: 1.7;
      max-width: 520px;
    }
    .title-rule {
      border: none;
      border-top: 1px solid var(--border-light);
      margin: 40px 0 48px;
    }

    /* ── Section ──────────────────────────────────────── */
    .section { margin-bottom: 52px; }
    .rule {
      border: none;
      border-top: 1px solid var(--border-light);
      margin: 48px 0;
    }
    .section-title {
      font-size: 24px;
      font-weight: 600;
      letter-spacing: -0.02em;
      color: var(--text-primary);
      margin-bottom: 12px;
    }
    .subsection-title {
      font-size: 14px;
      font-weight: 600;
      color: var(--text-primary);
      margin: 28px 0 8px;
    }
    .body-text {
      font-size: 14.5px;
      color: var(--text-secondary);
      line-height: 1.8;
      margin-bottom: 16px;
    }
    .body-text:last-child { margin-bottom: 0; }
    .body-text code, .body-text strong {
      font-family: var(--mono);
      font-size: 12.5px;
      font-weight: 500;
      background: var(--bg-code);
      color: var(--text-primary);
      padding: 1px 5px;
      border-radius: 4px;
    }
    .body-text strong { font-family: var(--sans); font-size: inherit; }

    /* ── Demo Box ─────────────────────────────────────── */
    .demo-box {
      background: var(--bg-subtle);
      border: 1px solid var(--border);
      border-radius: var(--r-xl);
      padding: 48px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 24px;
      margin: 28px 0;
    }

    /* ── Toggle Component ─────────────────────────────── */
    .toggle {
      position: relative;
      width: 280px;
      height: 160px;
      background: #DDDDDD;
      border-radius: 80px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .toggle.active { background: #FF385C; }
    .toggle-circle {
      position: absolute;
      width: 140px;
      height: 140px;
      background: white;
      border-radius: 50%;
      top: 10px;
      left: 10px;
      transition: left 0.4s cubic-bezier(0.4, 0.0, 0.2, 1);
      box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    }
    .toggle.active .toggle-circle { left: 130px; }

    @media (max-width: 480px) {
      .toggle { width: 220px; height: 130px; border-radius: 65px; }
      .toggle-circle { width: 110px; height: 110px; }
      .toggle.active .toggle-circle { left: 100px; }
    }

    .demo-label {
      font-size: 12px;
      font-weight: 500;
      color: var(--text-tertiary);
      letter-spacing: 0.04em;
      text-transform: uppercase;
    }
    .demo-state {
      font-family: var(--mono);
      font-size: 12px;
      color: var(--text-tertiary);
      background: var(--bg-code);
      padding: 4px 12px;
      border-radius: 20px;
      border: 1px solid var(--border);
      transition: color 0.2s, background 0.2s;
    }
    .demo-state.on {
      color: var(--brand);
      background: rgba(255,56,92,0.06);
      border-color: rgba(255,56,92,0.2);
    }

    /* ── Anatomy ──────────────────────────────────────── */
    .anatomy-box {
      background: var(--bg-subtle);
      border: 1px solid var(--border);
      border-radius: var(--r-xl);
      padding: 56px 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 24px 0;
      overflow: visible;
    }
    .anat-toggle {
      position: relative;
      width: 200px;
      height: 112px;
      background: #d1d1d6;
      border-radius: 56px;
    }
    .anat-circle {
      position: absolute;
      width: 96px; height: 96px;
      background: #fff;
      border-radius: 50%;
      top: 8px; left: 8px;
      box-shadow: var(--shadow-sm);
    }
    .anat-ann {
      position: absolute;
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .anat-ann-dot {
      width: 6px; height: 6px;
      border-radius: 50%;
      background: var(--brand);
      flex-shrink: 0;
    }
    .anat-ann-line { width: 44px; height: 1px; background: var(--border); }
    .anat-ann span {
      font-family: var(--mono);
      font-size: 11px;
      color: var(--text-tertiary);
      white-space: nowrap;
    }
    .ann-track { top: 50%; right: -148px; transform: translateY(14px); }
    .ann-thumb { top: 38%; left: -150px; flex-direction: row-reverse; }

    /* ── Spec Table ───────────────────────────────────── */
    .spec-table {
      border: 1px solid var(--border);
      border-radius: var(--r-md);
      overflow: hidden;
      margin: 20px 0;
    }
    .spec-row {
      display: flex;
      align-items: center;
      padding: 11px 18px;
      border-bottom: 1px solid var(--border-light);
      font-size: 13px;
    }
    .spec-row:last-child { border-bottom: none; }
    .spec-row:nth-child(even) { background: var(--bg-subtle); }
    .spec-key {
      width: 160px;
      flex-shrink: 0;
      font-weight: 500;
      color: var(--text-primary);
    }
    .spec-val {
      font-family: var(--mono);
      font-size: 12px;
      color: var(--text-secondary);
    }
    .spec-swatch {
      display: inline-block;
      width: 12px; height: 12px;
      border-radius: 3px;
      margin-right: 6px;
      vertical-align: middle;
      border: 1px solid rgba(0,0,0,.08);
    }

    /* ── API Table ────────────────────────────────────── */
    .api-table {
      width: 100%;
      border-collapse: collapse;
      border: 1px solid var(--border);
      border-radius: var(--r-md);
      overflow: hidden;
      font-size: 13px;
      margin: 16px 0;
    }
    .api-table thead { background: var(--bg-subtle); }
    .api-table th {
      padding: 10px 16px;
      font-weight: 600;
      color: var(--text-primary);
      text-align: left;
      border-bottom: 1px solid var(--border);
      font-size: 12px;
      letter-spacing: 0.02em;
    }
    .api-table td {
      padding: 11px 16px;
      color: var(--text-secondary);
      border-bottom: 1px solid var(--border-light);
    }
    .api-table tr:last-child td { border-bottom: none; }
    .api-table td:first-child {
      font-family: var(--mono);
      font-size: 12px;
      color: var(--text-primary);
      font-weight: 500;
    }
    .api-table td code {
      font-family: var(--mono);
      font-size: 11.5px;
      background: var(--bg-code);
      color: var(--brand);
      padding: 1px 5px;
      border-radius: 4px;
    }

    /* ── Code Block ───────────────────────────────────── */
    .code-block {
      background: var(--bg-code);
      border: 1px solid var(--border);
      border-radius: var(--r-md);
      overflow: hidden;
      margin: 14px 0 20px;
    }
    .code-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 8px 14px;
      border-bottom: 1px solid var(--border);
      background: rgba(255,255,255,0.6);
    }
    .code-lang-tag {
      font-size: 10.5px;
      font-weight: 600;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: var(--text-tertiary);
    }
    .copy-btn {
      font-size: 11px;
      font-weight: 500;
      font-family: var(--sans);
      color: var(--text-secondary);
      background: none;
      border: 1px solid var(--border);
      border-radius: 5px;
      padding: 2px 9px;
      cursor: pointer;
      transition: background 0.12s, color 0.12s;
    }
    .copy-btn:hover { background: var(--bg); color: var(--text-primary); }
    .code-block pre {
      overflow-x: auto;
      padding: 16px 18px;
      font-family: var(--mono);
      font-size: 12.5px;
      line-height: 1.75;
      color: var(--text-primary);
    }
    .code-block pre .t  { color: #c0392b; }    /* tag */
    .code-block pre .a  { color: #2980b9; }    /* attr */
    .code-block pre .s  { color: #27ae60; }    /* string */
    .code-block pre .k  { color: #8e44ad; }    /* keyword */
    .code-block pre .c  { color: var(--text-tertiary); font-style: italic; }
    .code-block pre .n  { color: var(--brand); }

    /* ── Note / Warning ───────────────────────────────── */
    .note {
      padding: 14px 18px;
      border-radius: var(--r-md);
      border: 1px solid var(--border);
      background: var(--bg-subtle);
      margin: 16px 0;
    }
    .note p {
      font-size: 13.5px;
      color: var(--text-secondary);
      line-height: 1.7;
    }
    .note p code {
      font-family: var(--mono);
      font-size: 12px;
      background: var(--bg-code);
      color: var(--text-primary);
      padding: 1px 5px;
      border-radius: 4px;
    }
    .note.warn {
      border-color: rgba(255,56,92,0.2);
      background: rgba(255,56,92,0.04);
    }
    .note.warn::before {
      content: '⚠ ';
      color: var(--brand);
      font-weight: 600;
    }

    /* ── File Tree ────────────────────────────────────── */
    .file-tree {
      font-family: var(--mono);
      font-size: 12.5px;
      line-height: 1.9;
      color: var(--text-secondary);
      background: var(--bg-code);
      border: 1px solid var(--border);
      border-radius: var(--r-md);
      padding: 16px 20px;
      margin: 14px 0;
    }
    .file-tree .dir  { color: var(--text-primary); font-weight: 500; }
    .file-tree .file { color: var(--text-secondary); }
    .file-tree .hl   { color: var(--brand); font-weight: 500; }

    /* ── Footer ───────────────────────────────────────── */
    .footer {
      border-top: 1px solid var(--border-light);
      padding: 24px 60px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: var(--bg-subtle);
    }
    .footer-text {
      font-size: 12px;
      color: var(--text-tertiary);
    }

    /* ── Left Sidebar styles ──────────────────────────── */
    .sb-filter {
      display: flex;
      align-items: center;
      gap: 8px;
      margin: 0 14px 14px;
      padding: 6px 11px;
      background: var(--bg-subtle);
      border: 1px solid var(--border);
      border-radius: var(--r-sm);
      color: var(--text-tertiary);
    }
    .sb-filter input {
      border: none;
      background: none;
      outline: none;
      font-size: 12.5px;
      color: var(--text-primary);
      font-family: var(--sans);
      width: 100%;
    }
    .sb-filter input::placeholder { color: var(--text-tertiary); }

    .sb-nav { padding: 0 6px; }
    .sb-group { margin-bottom: 1px; }

    .sb-group-btn {
      width: 100%;
      display: flex;
      align-items: center;
      gap: 6px;
      padding: 5px 10px;
      background: none;
      border: none;
      cursor: pointer;
      font-family: var(--sans);
      font-size: 12.5px;
      font-weight: 600;
      color: var(--text-primary);
      text-align: left;
      border-radius: var(--r-sm);
      transition: background 0.1s;
    }
    .sb-group-btn:hover { background: var(--bg-subtle); }

    .sb-chevron {
      flex-shrink: 0;
      color: var(--text-tertiary);
      transition: transform 0.18s ease;
    }
    .sb-group.open > .sb-group-btn .sb-chevron { transform: rotate(90deg); }

    .sb-items { list-style: none; padding: 1px 0 3px 16px; }
    .sb-items[hidden] { display: none; }

    .sb-link {
      display: flex;
      align-items: center;
      gap: 7px;
      font-size: 12.5px;
      font-weight: 400;
      color: var(--text-secondary);
      text-decoration: none;
      padding: 4px 10px;
      border-radius: var(--r-sm);
      transition: background 0.1s, color 0.1s;
      line-height: 1.5;
    }
    .sb-link svg { flex-shrink: 0; color: var(--text-tertiary); }
    .sb-link:hover { background: var(--bg-subtle); color: var(--text-primary); }
    .sb-link:hover svg { color: var(--text-primary); }
    .sb-link.active { font-weight: 600; color: var(--brand); background: rgba(255,56,92,0.06); }
    .sb-link.active svg { color: var(--brand); }
    .sb-link.hidden { display: none; }

    /* ── TOC styles ───────────────────────────────────── */
    .toc-wrap { padding: 20px 0 0 16px; }
    .toc-heading {
      font-size: 10.5px;
      font-weight: 600;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: var(--text-primary);
      margin-bottom: 10px;
      padding-left: 8px;
    }
    .toc-list {
      list-style: none;
      border-left: 1px solid var(--border);
    }
    .toc-link {
      display: block;
      font-size: 12px;
      font-weight: 400;
      color: var(--text-tertiary);
      text-decoration: none;
      padding: 3px 0 3px 12px;
      border-left: 2px solid transparent;
      margin-left: -1px;
      transition: color 0.12s, border-color 0.12s;
      line-height: 1.6;
    }
    .toc-link:hover { color: var(--text-primary); }
    .toc-link.active {
      color: var(--brand);
      font-weight: 500;
      border-left-color: var(--brand);
    }

    /* ── Responsive ───────────────────────────────────── */
    @media (max-width: 1100px) { .toc-sidebar { display: none; } }
    @media (max-width: 860px) {
      .main { padding: 44px 28px 80px; }
      .page-title { font-size: 38px; }
    }
    @media (max-width: 680px) {
      .sidebar { display: none; }
      .main { padding: 32px 18px 80px; }
      .page-title { font-size: 32px; }
    }
  </style>
</head>
<body>

<!-- ══════════════════════════════════════════
     TIER 1 — Global nav (light)
     ══════════════════════════════════════════ -->
<header class="global-nav" role="banner">
  <a class="global-nav-brand" href="/" aria-label="Holidayseva Developer Home">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true">
      <rect x="2"   y="2"    width="4.5" height="16" rx="1.2" fill="#FF385C"/>
      <rect x="13.5" y="2"   width="4.5" height="16" rx="1.2" fill="#FF385C"/>
      <rect x="2"   y="8.75" width="16"  height="2.5" rx="1.25" fill="#FF385C"/>
    </svg>
    Developer
  </a>

  <ul class="global-nav-links" role="list" aria-label="Main navigation">
    <li><a href="#">Get Started</a></li>
    <li><a href="#">Foundations</a></li>
    <li><a href="#" class="active">Components</a></li>
    <li><a href="#">Patterns</a></li>
    <li><a href="#">Resources</a></li>
  </ul>

  <div class="global-nav-actions">
    <button class="global-nav-icon" aria-label="Search">
      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" aria-hidden="true">
        <circle cx="6.2" cy="6.2" r="4.5" stroke="currentColor" stroke-width="1.35"/>
        <line x1="9.7" y1="9.7" x2="13.5" y2="13.5" stroke="currentColor" stroke-width="1.35" stroke-linecap="round"/>
      </svg>
    </button>
    <button class="global-nav-icon" aria-label="Account">
      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" aria-hidden="true">
        <circle cx="7.5" cy="5"  r="2.8" stroke="currentColor" stroke-width="1.35"/>
        <path d="M1.5 14c0-3.31 2.69-6 6-6s6 2.69 6 6" stroke="currentColor" stroke-width="1.35" stroke-linecap="round"/>
      </svg>
    </button>
  </div>
</header>

<!-- ══════════════════════════════════════════
     TIER 2 — Section nav
     ══════════════════════════════════════════ -->
<nav class="section-nav" aria-label="Section navigation">
  <span class="section-nav-title">Design Guidelines</span>
  <div class="section-nav-divider"></div>
  <ul class="section-nav-tabs" role="list">
    <li><a href="#">Overview</a></li>
    <li><a href="#">What's New</a></li>
    <li><a href="#">Get Started</a></li>
    <li><a href="#" class="active">Guidelines</a></li>
    <li><a href="#">Resources</a></li>
  </ul>
</nav>

<!-- ══════════════════════════════════════════
     PAGE LAYOUT
     ══════════════════════════════════════════ -->
<div class="layout">

  <!-- Left sidebar -->
  <aside class="sidebar" id="sidebar">

    <div class="sb-filter">
      <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M1 3h12M3 7h8M5 11h4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>
      <input type="text" placeholder="Filter" id="sbFilter" oninput="filterSidebar(this.value)" />
    </div>

    <nav class="sb-nav" id="sbNav">

      <div class="sb-group" id="grp-gettingstarted">
        <button class="sb-group-btn" onclick="toggleGroup('grp-gettingstarted')">
          <svg class="sb-chevron" width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Getting started
        </button>
        <ul class="sb-items" hidden>
          <li><a href="#" class="sb-link">
            <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="5.5" stroke="currentColor" stroke-width="1.2"/><path d="M7 4v3.5L9 9" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>
            Introduction
          </a></li>
        </ul>
      </div>

      <div class="sb-group" id="grp-foundations">
        <button class="sb-group-btn" onclick="toggleGroup('grp-foundations')">
          <svg class="sb-chevron" width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Foundations
        </button>
        <ul class="sb-items" hidden>
          <li><a href="#" class="sb-link"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><rect x="2" y="2" width="10" height="10" rx="2" stroke="currentColor" stroke-width="1.2"/></svg>Colour</a></li>
          <li><a href="#" class="sb-link"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M3 10V4l4 5 4-5v6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>Typography</a></li>
          <li><a href="#" class="sb-link"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2v10" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>Spacing</a></li>
        </ul>
      </div>

      <div class="sb-group open" id="grp-components">
        <button class="sb-group-btn" onclick="toggleGroup('grp-components')">
          <svg class="sb-chevron" width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Components
        </button>
        <ul class="sb-items">
          <li><a href="#" class="sb-link"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><rect x="1" y="4" width="12" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/></svg>Button</a></li>
          <li><a href="#" class="sb-link"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><rect x="1" y="3" width="12" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M4 6h6M4 9h4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>Input</a></li>
          <li><a href="toggle.php" class="sb-link active"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><rect x="1" y="4" width="12" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/><circle cx="10" cy="7" r="2" fill="currentColor"/></svg>Toggle</a></li>
          <li><a href="#" class="sb-link"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M2 4h10v7a1 1 0 01-1 1H3a1 1 0 01-1-1V4z" stroke="currentColor" stroke-width="1.2"/><path d="M2 4l5-2 5 2" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/></svg>Modal</a></li>
          <li><a href="#" class="sb-link"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="4" r="2" stroke="currentColor" stroke-width="1.2"/><path d="M2 12c0-2.76 2.24-5 5-5s5 2.24 5 5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>Avatar</a></li>
        </ul>
      </div>

      <div class="sb-group" id="grp-patterns">
        <button class="sb-group-btn" onclick="toggleGroup('grp-patterns')">
          <svg class="sb-chevron" width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Patterns
        </button>
        <ul class="sb-items" hidden>
          <li><a href="#" class="sb-link"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M2 11V5l5-3 5 3v6l-5 3-5-3z" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/></svg>Forms</a></li>
          <li><a href="#" class="sb-link"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M2 10l4-4 2 2 4-5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>Data display</a></li>
        </ul>
      </div>

    </nav>
  </aside>

  <!-- ── MAIN CONTENT ────────────────────────────── -->
  <main class="main">

    <!-- Overview -->
    <div id="overview">
      <p class="page-eyebrow">Components · Form Controls</p>
      <h1 class="page-title">Toggle</h1>
      <p class="page-lead">A binary switch for enabling or disabling a single option. Communicates state instantly through colour and position.</p>
    </div>

    <hr class="title-rule">

    <!-- Live demo -->
    <div class="demo-box">
      <span class="demo-label">Interactive demo</span>
      <div class="toggle" id="demoToggle" role="switch" aria-checked="false" tabindex="0" aria-label="Demo toggle">
        <div class="toggle-circle"></div>
      </div>
      <span class="demo-state" id="demoState">state: off</span>
    </div>

    <!-- Anatomy -->
    <section class="section" id="anatomy">
      <h2 class="section-title">Anatomy</h2>
      <p class="body-text">The component is composed of two elements. The <strong>track</strong> — <code>.toggle</code> — is the pill-shaped container whose fill colour reflects the current state. The <strong>thumb</strong> — <code>.toggle-circle</code> — is the white circle that slides within the track.</p>
      <div class="anatomy-box">
        <div class="anat-toggle">
          <div class="anat-circle"></div>
          <div class="anat-ann ann-track">
            <div class="anat-ann-dot"></div>
            <div class="anat-ann-line"></div>
            <span>.toggle</span>
          </div>
          <div class="anat-ann ann-thumb">
            <div class="anat-ann-dot"></div>
            <div class="anat-ann-line"></div>
            <span>.toggle-circle</span>
          </div>
        </div>
      </div>
    </section>

    <hr class="rule">

    <!-- Specs -->
    <section class="section" id="specs">
      <h2 class="section-title">Specifications</h2>
      <p class="body-text">Default (desktop) dimensions. A responsive breakpoint at 480 px scales the component proportionally to fit smaller viewports.</p>
      <div class="spec-table">
        <div class="spec-row"><span class="spec-key">Width</span><span class="spec-val">280px</span></div>
        <div class="spec-row"><span class="spec-key">Height</span><span class="spec-val">160px</span></div>
        <div class="spec-row"><span class="spec-key">Border radius</span><span class="spec-val">80px</span></div>
        <div class="spec-row"><span class="spec-key">Thumb diameter</span><span class="spec-val">140px</span></div>
        <div class="spec-row"><span class="spec-key">Thumb inset</span><span class="spec-val">10px all sides</span></div>
        <div class="spec-row"><span class="spec-key">Thumb travel</span><span class="spec-val">left 10px → left 130px</span></div>
        <div class="spec-row"><span class="spec-key">Transition</span><span class="spec-val">0.4s cubic-bezier(0.4, 0, 0.2, 1)</span></div>
        <div class="spec-row"><span class="spec-key">Off colour</span><span class="spec-val"><span class="spec-swatch" style="background:#DDDDDD"></span>#DDDDDD</span></div>
        <div class="spec-row"><span class="spec-key">Active colour</span><span class="spec-val"><span class="spec-swatch" style="background:#FF385C"></span>#FF385C</span></div>
        <div class="spec-row"><span class="spec-key">Thumb colour</span><span class="spec-val"><span class="spec-swatch" style="background:#FFFFFF;border-color:#ccc"></span>#FFFFFF</span></div>
      </div>
    </section>

    <hr class="rule">

    <!-- HTML Usage -->
    <section class="section" id="usage">
      <h2 class="section-title">HTML Usage</h2>
      <p class="body-text">Link the stylesheet in <code>&lt;head&gt;</code> and place the component markup anywhere in your template. The script auto-initialises every <code>.toggle</code> element on <code>DOMContentLoaded</code> — no manual wiring needed.</p>

      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="c">&lt;!-- In &lt;head&gt; --&gt;</span>
<span class="t">&lt;link</span> <span class="a">rel</span>=<span class="s">"stylesheet"</span> <span class="a">href</span>=<span class="s">"/Components/toggle.css"</span><span class="t">&gt;</span>

<span class="c">&lt;!-- Component --&gt;</span>
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

      <p class="subsection-title">Pre-active state</p>
      <p class="body-text">Add the <code>active</code> class directly in markup to start in the on state. Pair this with <code>aria-checked="true"</code>.</p>
      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"toggle active"</span>
     <span class="a">role</span>=<span class="s">"switch"</span>
     <span class="a">aria-checked</span>=<span class="s">"true"</span>
     <span class="a">tabindex</span>=<span class="s">"0"</span>
     <span class="a">aria-label</span>=<span class="s">"Notifications enabled"</span><span class="t">&gt;</span>
  <span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"toggle-circle"</span><span class="t">&gt;&lt;/div&gt;</span>
<span class="t">&lt;/div&gt;</span></code></pre>
      </div>

      <div class="note warn">
        <p>Always include <code>role="switch"</code>, <code>aria-checked</code>, <code>tabindex="0"</code>, and a descriptive <code>aria-label</code>. The JavaScript updates <code>aria-checked</code> automatically on every state change.</p>
      </div>
    </section>

    <hr class="rule">

    <!-- JavaScript API -->
    <section class="section" id="javascript">
      <h2 class="section-title">JavaScript API</h2>
      <p class="body-text"><code>ToggleSwitch</code> lives in <code>toggle.js</code> and is auto-instantiated on page load via the selector <code>'.toggle'</code>. For programmatic control, construct a new instance and use the three methods below.</p>

      <table class="api-table">
        <thead>
          <tr><th>Method</th><th>Arguments</th><th>Returns</th><th>Description</th></tr>
        </thead>
        <tbody>
          <tr>
            <td>getState(el)</td>
            <td>HTMLElement</td>
            <td><code>"on"</code> | <code>"off"</code></td>
            <td>Reads the current state from the element's <code>data-state</code> attribute.</td>
          </tr>
          <tr>
            <td>setState(el, state)</td>
            <td>HTMLElement, <code>"on"</code> | <code>"off"</code></td>
            <td>—</td>
            <td>Applies a state without triggering the <code>toggle-change</code> event.</td>
          </tr>
          <tr>
            <td>toggle(el)</td>
            <td>HTMLElement</td>
            <td>—</td>
            <td>Flips the current state silently (no event dispatched).</td>
          </tr>
        </tbody>
      </table>

      <p class="subsection-title">Listening for state changes</p>
      <p class="body-text">Every user click dispatches a <code>toggle-change</code> CustomEvent on the element. The <code>detail</code> object exposes both a string state and a boolean.</p>
      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">JavaScript</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="k">const</span> el = document.<span class="k">querySelector</span>(<span class="s">'.toggle'</span>);

el.<span class="k">addEventListener</span>(<span class="s">'toggle-change'</span>, (e) => {
  console.<span class="k">log</span>(e.detail.state);    <span class="c">// "on" | "off"</span>
  console.<span class="k">log</span>(e.detail.isActive); <span class="c">// true | false</span>
});</code></pre>
      </div>

      <p class="subsection-title">Programmatic control</p>
      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">JavaScript</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="k">const</span> sw = <span class="k">new</span> <span class="n">ToggleSwitch</span>(<span class="s">'.toggle'</span>);
<span class="k">const</span> el = document.<span class="k">querySelector</span>(<span class="s">'#myToggle'</span>);

sw.<span class="k">setState</span>(el, <span class="s">'on'</span>);   <span class="c">// force on (silent)</span>
sw.<span class="k">setState</span>(el, <span class="s">'off'</span>);  <span class="c">// force off (silent)</span>
sw.<span class="k">toggle</span>(el);            <span class="c">// flip (silent)</span>
sw.<span class="k">getState</span>(el);          <span class="c">// → "on" | "off"</span></code></pre>
      </div>

      <div class="note">
        <p><code>setState()</code> and <code>toggle()</code> do <em>not</em> fire <code>toggle-change</code>. Only user-initiated clicks dispatch the custom event.</p>
      </div>
    </section>

    <hr class="rule">

    <!-- Integration -->
    <section class="section" id="integration">
      <h2 class="section-title">Integration</h2>
      <p class="body-text">Include <code>toggle.js</code> once before <code>&lt;/body&gt;</code>. It auto-initialises all <code>.toggle</code> elements present in the DOM at load time. Elements inserted dynamically require a manual <code>new ToggleSwitch(selector)</code> call.</p>

      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="t">&lt;script</span> <span class="a">src</span>=<span class="s">"/JS/toggle.js"</span><span class="t">&gt;&lt;/script&gt;</span></code></pre>
      </div>

      <p class="subsection-title">Recommended file structure</p>
      <div class="file-tree">
        <span class="dir">design_guidelines/</span><br>
        ├── <span class="file">header.php</span><br>
        ├── <span class="file">left_sidebar.php</span><br>
        ├── <span class="file">right_sidebar.php</span><br>
        ├── <span class="hl">toggle.php</span><br>
        ├── <span class="file">design-system.css</span><br>
        ├── Components/<br>
        │   └── <span class="hl">toggle.css</span><br>
        └── JS/<br>
            └── <span class="hl">toggle.js</span>
      </div>
    </section>

    <hr class="rule">

    <!-- Accessibility -->
    <section class="section" id="accessibility">
      <h2 class="section-title">Accessibility</h2>
      <p class="body-text">The toggle is a fully custom control — ARIA attributes must be set explicitly in markup. The JavaScript keeps <code>aria-checked</code> synchronised on every state transition, and the element is keyboard-navigable via <kbd>Space</kbd> or <kbd>Enter</kbd> when focused.</p>

      <table class="api-table">
        <thead>
          <tr><th>Attribute</th><th>Value</th><th>Notes</th></tr>
        </thead>
        <tbody>
          <tr>
            <td>role</td>
            <td><code>"switch"</code></td>
            <td>Identifies the control as a binary switch to screen readers.</td>
          </tr>
          <tr>
            <td>aria-checked</td>
            <td><code>"true"</code> / <code>"false"</code></td>
            <td>Updated by <code>toggle.js</code> on every state change. Set the correct initial value in markup.</td>
          </tr>
          <tr>
            <td>tabindex</td>
            <td><code>"0"</code></td>
            <td>Ensures the element enters the tab order and can be focused with a keyboard.</td>
          </tr>
          <tr>
            <td>aria-label</td>
            <td>Descriptive string</td>
            <td>Describes what the control enables or disables — e.g. <code>"Enable dark mode"</code>.</td>
          </tr>
        </tbody>
      </table>

      <p class="subsection-title">Keyboard support</p>
      <p class="body-text">Add the snippet below alongside <code>toggle.js</code> to support <kbd>Space</kbd> and <kbd>Enter</kbd> key activation for keyboard-only users.</p>
      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">JavaScript</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code>document.<span class="k">querySelectorAll</span>(<span class="s">'.toggle'</span>).<span class="k">forEach</span>(el => {
  el.<span class="k">addEventListener</span>(<span class="s">'keydown'</span>, e => {
    <span class="k">if</span> (e.key === <span class="s">' '</span> || e.key === <span class="s">'Enter'</span>) {
      e.<span class="k">preventDefault</span>();
      el.<span class="k">click</span>();
    }
  });
});</code></pre>
      </div>
    </section>

  </main>

  <!-- Right TOC -->
  <aside class="toc-sidebar" id="toc">
    <div class="toc-wrap">
      <p class="toc-heading">On this page</p>
      <ul class="toc-list" id="tocList">
        <li><a class="toc-link" href="#overview">Toggle</a></li>
        <li><a class="toc-link" href="#anatomy">Anatomy</a></li>
        <li><a class="toc-link" href="#specs">Specifications</a></li>
        <li><a class="toc-link" href="#usage">HTML Usage</a></li>
        <li><a class="toc-link" href="#javascript">JavaScript API</a></li>
        <li><a class="toc-link" href="#integration">Integration</a></li>
        <li><a class="toc-link" href="#accessibility">Accessibility</a></li>
      </ul>
    </div>
  </aside>

</div>

<!-- Footer -->
<footer class="footer">
  <span class="footer-text">Holidayseva Design Guidelines · Toggle</span>
  <span class="footer-text">v1.0</span>
</footer>

<!-- ══════════════════════════════════════════
     TOGGLE JS (inlined from toggle.js)
     ══════════════════════════════════════════ -->
<script>
  class ToggleSwitch {
    constructor(selector) {
      this.toggles = document.querySelectorAll(selector);
      this.init();
    }
    init() {
      this.toggles.forEach((toggle) => {
        toggle.addEventListener('click', (e) => this.handleToggle(e));
        const isActive = toggle.classList.contains('active');
        toggle.dataset.state = isActive ? 'on' : 'off';
        toggle.setAttribute('aria-checked', isActive ? 'true' : 'false');
      });
    }
    handleToggle(event) {
      const toggle = event.currentTarget;
      toggle.classList.toggle('active');
      const newState = toggle.classList.contains('active') ? 'on' : 'off';
      toggle.dataset.state = newState;
      toggle.setAttribute('aria-checked', newState === 'on' ? 'true' : 'false');
      const evt = new CustomEvent('toggle-change', {
        detail: { state: newState, isActive: newState === 'on', element: toggle }
      });
      toggle.dispatchEvent(evt);
    }
    getState(element) { return element.dataset.state || 'off'; }
    setState(element, state) {
      const on = state === 'on' || state === true;
      element.classList.toggle('active', on);
      element.dataset.state = on ? 'on' : 'off';
      element.setAttribute('aria-checked', on ? 'true' : 'false');
    }
    toggle(element) {
      element.classList.toggle('active');
      const s = element.classList.contains('active') ? 'on' : 'off';
      element.dataset.state = s;
      element.setAttribute('aria-checked', s === 'on' ? 'true' : 'false');
    }
  }

  document.addEventListener('DOMContentLoaded', () => {
    new ToggleSwitch('.toggle');

    /* Demo state label */
    document.getElementById('demoToggle').addEventListener('toggle-change', (e) => {
      const el = document.getElementById('demoState');
      el.textContent = 'state: ' + e.detail.state;
      el.className = 'demo-state' + (e.detail.isActive ? ' on' : '');
    });

    /* Keyboard activation */
    document.querySelectorAll('.toggle').forEach(el => {
      el.addEventListener('keydown', e => {
        if (e.key === ' ' || e.key === 'Enter') { e.preventDefault(); el.click(); }
      });
    });

    /* TOC scroll spy */
    const tocLinks = document.querySelectorAll('.toc-link');
    const sections = document.querySelectorAll('section[id], div[id]');
    const spy = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          tocLinks.forEach(a => {
            a.classList.remove('active');
            if (a.getAttribute('href') === '#' + entry.target.id) a.classList.add('active');
          });
        }
      });
    }, { rootMargin: '-15% 0px -75% 0px' });
    sections.forEach(s => spy.observe(s));
  });

  /* Sidebar helpers */
  function toggleGroup(id) {
    const grp = document.getElementById(id);
    const list = grp.querySelector('.sb-items');
    const open = grp.classList.contains('open');
    grp.classList.toggle('open', !open);
    if (open) list.setAttribute('hidden', '');
    else list.removeAttribute('hidden');
  }

  function filterSidebar(q) {
    const term = q.toLowerCase().trim();
    document.querySelectorAll('.sb-link').forEach(a => {
      const match = a.textContent.toLowerCase().includes(term);
      a.classList.toggle('hidden', !match);
      if (match && term) {
        const grp = a.closest('.sb-group');
        grp.classList.add('open');
        grp.querySelector('.sb-items').removeAttribute('hidden');
      }
    });
  }

  function copyCode(btn) {
    const text = btn.closest('.code-block').querySelector('pre').innerText;
    navigator.clipboard.writeText(text).then(() => {
      btn.textContent = 'Copied!';
      setTimeout(() => btn.textContent = 'Copy', 1800);
    });
  }
</script>

</body>
</html>