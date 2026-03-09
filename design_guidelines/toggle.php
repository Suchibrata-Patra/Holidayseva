<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toggle — Design Guidelines</title>

  <style>
    /* ─────────────────────────────────────────────────────
       APPLE DESIGN TOKENS — exact developer.apple.com palette
    ───────────────────────────────────────────────────── */
    :root {
      --sf:         -apple-system, "SF Pro Text", "SF Pro Display", BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif;
      --sf-display: -apple-system, "SF Pro Display", BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif;
      --sf-mono:    "SF Mono", ui-monospace, "Cascadia Code", "Fira Mono", monospace;

      /* Apple label colours */
      --label-1:  #1d1d1f;
      --label-2:  #6e6e73;
      --label-3:  #aeaeb2;
      --label-4:  #c7c7cc;

      /* Apple fill / surface colours */
      --fill-1:   #ffffff;
      --fill-2:   #fbfbfd;
      --fill-3:   #f5f5f7;
      --fill-4:   #e8e8ed;

      /* Separators */
      --sep:      rgba(0,0,0,.08);
      --sep-hard: #d2d2d7;

      /* Accent — Apple blue for links / active */
      --blue:     #0066cc;

      /* Toggle component colours (iOS-spec) */
      --tog-on:   #34c759;
      --tog-off:  #e5e5ea;

      /* Layout dims */
      --top-h:    48px;
      --sub-h:    44px;
      --sb-w:     228px;
      --toc-w:    192px;

      --r-xs: 4px;  --r-sm: 6px;  --r-md: 10px;
      --r-lg: 14px; --r-xl: 18px;
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

    /* ══════════════════════════════════════════════════════
       GLOBAL NAV  ─  Tier 1
    ══════════════════════════════════════════════════════ */
    .g-nav {
      position: fixed; top: 0; left: 0; right: 0;
      height: var(--top-h);
      background: rgba(255,255,255,.85);
      backdrop-filter: saturate(180%) blur(20px);
      -webkit-backdrop-filter: saturate(180%) blur(20px);
      border-bottom: 1px solid var(--sep);
      display: flex; align-items: center;
      padding: 0 22px; gap: 0; z-index: 300;
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
      list-style: none; display: flex; align-items: center;
      margin: 0 auto; gap: 0;
    }
    .g-links a {
      font-size: 13px; font-weight: 400;
      color: var(--label-2); text-decoration: none;
      padding: 5px 11px; border-radius: var(--r-sm);
      letter-spacing: -.003em;
      transition: color .14s;
    }
    .g-links a:hover { color: var(--label-1); }
    .g-links a.on    { color: var(--label-1); font-weight: 500; }

    .g-actions { display: flex; align-items: center; gap: 2px; flex-shrink: 0; }
    .g-icon {
      width: 30px; height: 30px;
      border: none; background: none; cursor: pointer;
      border-radius: var(--r-sm);
      display: flex; align-items: center; justify-content: center;
      color: var(--label-2); transition: background .12s, color .12s;
    }
    .g-icon:hover { background: var(--fill-3); color: var(--label-1); }

    /* ══════════════════════════════════════════════════════
       SECTION NAV  ─  Tier 2
    ══════════════════════════════════════════════════════ */
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
    .s-divider { width: 1px; height: 14px; background: var(--sep-hard); flex-shrink: 0; }
    .s-tabs { list-style: none; display: flex; align-items: center; gap: 0; }
    .s-tabs a {
      font-size: 13px; font-weight: 400;
      color: var(--label-2); text-decoration: none;
      padding: 5px 11px; border-radius: var(--r-sm);
      letter-spacing: -.003em; transition: color .12s;
    }
    .s-tabs a:hover { color: var(--label-1); }
    .s-tabs a.on    { color: var(--label-1); font-weight: 500; }

    /* ══════════════════════════════════════════════════════
       LAYOUT
    ══════════════════════════════════════════════════════ */
    .layout {
      display: flex;
      padding-top: calc(var(--top-h) + var(--sub-h));
      min-height: 100vh;
      background: var(--fill-2);
    }

    /* Left sidebar */
    .sidebar {
      width: var(--sb-w); flex-shrink: 0;
      position: sticky;
      top: calc(var(--top-h) + var(--sub-h));
      height: calc(100vh - var(--top-h) - var(--sub-h));
      overflow-y: auto; padding: 20px 0 48px;
      border-right: 1px solid var(--sep);
      background: var(--fill-2);
    }
    .sidebar::-webkit-scrollbar { width: 0; }

    /* Right TOC */
    .toc-col {
      width: var(--toc-w); flex-shrink: 0;
      position: sticky;
      top: calc(var(--top-h) + var(--sub-h));
      height: calc(100vh - var(--top-h) - var(--sub-h));
      overflow-y: auto; padding: 28px 0 48px;
      border-left: 1px solid var(--sep);
      background: var(--fill-2);
    }
    .toc-col::-webkit-scrollbar { width: 0; }

    /* Main */
    .main {
      flex: 1; min-width: 0; max-width: 740px;
      padding: 52px 52px 120px 56px;
    }

    /* ══════════════════════════════════════════════════════
       TYPOGRAPHY  ─  exact Apple developer docs scale
    ══════════════════════════════════════════════════════ */
    .eyebrow {
      font-size: 11px; font-weight: 600;
      letter-spacing: .05em; text-transform: uppercase;
      color: var(--label-3); margin-bottom: 8px;
    }
    .page-title {
      font-family: var(--sf-display);
      font-size: 48px; font-weight: 700;
      letter-spacing: -.025em; line-height: 1.06;
      color: var(--label-1); margin-bottom: 14px;
    }
    .page-lead {
      font-size: 17px; font-weight: 300;
      color: var(--label-2); line-height: 1.7;
      max-width: 520px; letter-spacing: -.003em;
    }
    .divider {
      border: none; border-top: 1px solid var(--sep);
      margin: 36px 0 44px;
    }
    .sec-title {
      font-family: var(--sf-display);
      font-size: 24px; font-weight: 700;
      letter-spacing: -.018em; color: var(--label-1);
      margin-bottom: 10px;
    }
    .sub-title {
      font-size: 15px; font-weight: 600;
      letter-spacing: -.01em; color: var(--label-1);
      margin: 26px 0 8px;
    }
    .body-p {
      font-size: 15px; font-weight: 400;
      color: var(--label-2); line-height: 1.8;
      letter-spacing: -.003em; margin-bottom: 14px;
    }
    .body-p:last-child { margin-bottom: 0; }
    .body-p code {
      font-family: var(--sf-mono); font-size: 12.5px; font-weight: 500;
      background: var(--fill-3); color: var(--label-1);
      padding: 1px 5px; border-radius: var(--r-xs);
      border: 1px solid var(--sep-hard);
    }
    .body-p strong { font-weight: 600; color: var(--label-1); }

    kbd {
      font-family: var(--sf-mono); font-size: 11px; font-weight: 500;
      background: var(--fill-3); color: var(--label-1);
      border: 1px solid var(--sep-hard); border-radius: var(--r-xs);
      padding: 1px 6px; box-shadow: 0 1px 0 var(--sep-hard);
    }

    /* ══════════════════════════════════════════════════════
       DEMO BOX
    ══════════════════════════════════════════════════════ */
    .demo-box {
      background: var(--fill-3);
      border: 1px solid var(--sep);
      border-radius: var(--r-xl);
      padding: 52px 40px;
      display: flex; flex-direction: column;
      align-items: center; gap: 22px; margin: 24px 0;
    }
    .demo-cap {
      font-size: 11px; font-weight: 500;
      letter-spacing: .05em; text-transform: uppercase;
      color: var(--label-3);
    }
    .demo-badge {
      font-family: var(--sf-mono); font-size: 11.5px;
      color: var(--label-3);
      background: var(--fill-1);
      border: 1px solid var(--sep-hard);
      border-radius: 20px; padding: 3px 13px;
      transition: color .2s, border-color .2s, background .2s;
    }
    .demo-badge.on {
      color: #1a7f37;
      border-color: rgba(52,199,89,.35);
      background: rgba(52,199,89,.06);
    }

    /* ══════════════════════════════════════════════════════
       TOGGLE COMPONENT
    ══════════════════════════════════════════════════════ */
    .toggle {
      position: relative;
      width: 280px; height: 160px;
      background: var(--tog-off);
      border-radius: 80px; cursor: pointer;
      transition: background-color .3s ease;
      box-shadow: inset 0 0 0 1px rgba(0,0,0,.06);
    }
    .toggle.active { background: var(--tog-on); }
    .toggle-circle {
      position: absolute;
      width: 140px; height: 140px;
      background: #fff; border-radius: 50%;
      top: 10px; left: 10px;
      transition: left .4s cubic-bezier(.4,0,.2,1);
      box-shadow: 0 3px 8px rgba(0,0,0,.15), 0 3px 1px rgba(0,0,0,.06);
    }
    .toggle.active .toggle-circle { left: 130px; }
    @media (max-width: 480px) {
      .toggle { width: 220px; height: 130px; border-radius: 65px; }
      .toggle-circle { width: 110px; height: 110px; }
      .toggle.active .toggle-circle { left: 100px; }
    }

    /* ══════════════════════════════════════════════════════
       ANATOMY
    ══════════════════════════════════════════════════════ */
    .anatomy-box {
      background: var(--fill-3); border: 1px solid var(--sep);
      border-radius: var(--r-xl); padding: 64px 40px;
      display: flex; align-items: center; justify-content: center;
      margin: 20px 0; overflow: visible;
    }
    .anat-wrap { position: relative; }
    .anat-track {
      position: relative; width: 192px; height: 108px;
      background: #e5e5ea; border-radius: 54px;
    }
    .anat-thumb {
      position: absolute;
      width: 92px; height: 92px;
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
    .ann span {
      font-family: var(--sf-mono); font-size: 10.5px;
      color: var(--label-3); white-space: nowrap;
    }
    .ann-r { top: 50%; right: -150px; transform: translateY(12px); }
    .ann-l { top: 36%; left: -154px; flex-direction: row-reverse; }

    /* ══════════════════════════════════════════════════════
       SPEC TABLE
    ══════════════════════════════════════════════════════ */
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
    .spec-key {
      width: 168px; flex-shrink: 0;
      font-weight: 500; color: var(--label-1); letter-spacing: -.005em;
    }
    .spec-val { font-family: var(--sf-mono); font-size: 12px; color: var(--label-2); }
    .sw {
      display: inline-block; width: 11px; height: 11px;
      border-radius: 3px; margin-right: 6px; vertical-align: middle;
      border: 1px solid rgba(0,0,0,.1); flex-shrink: 0;
    }

    /* ══════════════════════════════════════════════════════
       API TABLE
    ══════════════════════════════════════════════════════ */
    .api-table {
      width: 100%; border-collapse: collapse;
      border: 1px solid var(--sep-hard); border-radius: var(--r-md);
      overflow: hidden; font-size: 13px; margin: 16px 0;
    }
    .api-table thead { background: rgba(0,0,0,.02); }
    .api-table th {
      padding: 9px 16px; font-weight: 600;
      font-size: 11.5px; letter-spacing: .01em;
      color: var(--label-1); text-align: left;
      border-bottom: 1px solid var(--sep-hard);
    }
    .api-table td {
      padding: 10px 16px; color: var(--label-2);
      border-bottom: 1px solid var(--sep);
      line-height: 1.6; letter-spacing: -.003em;
    }
    .api-table tr:last-child td { border-bottom: none; }
    .api-table td:first-child {
      font-family: var(--sf-mono); font-size: 12px;
      color: var(--label-1); font-weight: 500;
    }
    .api-table code {
      font-family: var(--sf-mono); font-size: 11.5px;
      background: var(--fill-3); color: var(--label-1);
      padding: 1px 5px; border-radius: var(--r-xs);
      border: 1px solid var(--sep-hard);
    }

    /* ══════════════════════════════════════════════════════
       CODE BLOCKS
    ══════════════════════════════════════════════════════ */
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
    /* syntax tokens */
    .t { color: #b5281c; }
    .a { color: #2972a8; }
    .s { color: #2e7d32; }
    .k { color: #6f42c1; }
    .m { color: #b5281c; }
    .c { color: var(--label-3); font-style: italic; }

    /* ══════════════════════════════════════════════════════
       CALLOUT
    ══════════════════════════════════════════════════════ */
    .callout {
      background: var(--fill-3); border: 1px solid var(--sep-hard);
      border-radius: var(--r-md); padding: 14px 16px;
      margin: 14px 0; display: flex; gap: 10px; align-items: flex-start;
    }
    .c-icon { font-size: 14px; flex-shrink: 0; margin-top: 1px; color: var(--label-3); }
    .callout p {
      font-size: 13px; color: var(--label-2);
      line-height: 1.7; letter-spacing: -.003em;
    }
    .callout p code {
      font-family: var(--sf-mono); font-size: 11.5px;
      background: rgba(0,0,0,.05); color: var(--label-1);
      padding: 1px 5px; border-radius: var(--r-xs);
    }
    .callout.warn { border-color: rgba(255,149,0,.35); background: rgba(255,149,0,.04); }
    .callout.warn .c-icon { color: #f5a623; }

    /* ══════════════════════════════════════════════════════
       FILE TREE
    ══════════════════════════════════════════════════════ */
    .file-tree {
      font-family: var(--sf-mono); font-size: 12.5px;
      line-height: 2; color: var(--label-2);
      background: var(--fill-3); border: 1px solid var(--sep-hard);
      border-radius: var(--r-md); padding: 16px 20px; margin: 12px 0;
    }
    .ft-d { color: var(--label-1); font-weight: 500; }
    .ft-h { color: var(--blue); }

    /* ══════════════════════════════════════════════════════
       LEFT SIDEBAR
    ══════════════════════════════════════════════════════ */
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
      padding: 5px 10px; background: none; border: none;
      cursor: pointer; font-family: var(--sf);
      font-size: 12.5px; font-weight: 600;
      color: var(--label-1); text-align: left;
      border-radius: 7px; letter-spacing: -.006em;
      transition: background .1s;
    }
    .sb-btn:hover { background: var(--fill-3); }
    .sb-chev {
      flex-shrink: 0; color: var(--label-3);
      transition: transform .18s ease;
    }
    .sb-group.open > .sb-btn .sb-chev { transform: rotate(90deg); }

    .sb-list { list-style: none; padding: 1px 0 2px 16px; }
    .sb-list[hidden] { display: none; }

    .sb-link {
      display: flex; align-items: center; gap: 7px;
      font-family: var(--sf); font-size: 12.5px; font-weight: 400;
      color: var(--label-2); text-decoration: none;
      padding: 4px 10px; border-radius: 6px;
      letter-spacing: -.004em; line-height: 1.5;
      transition: background .1s, color .1s;
    }
    .sb-link svg { flex-shrink: 0; color: var(--label-3); }
    .sb-link:hover { background: var(--fill-3); color: var(--label-1); }
    .sb-link:hover svg { color: var(--label-2); }
    .sb-link.active { font-weight: 600; color: var(--label-1); background: rgba(0,0,0,.055); }
    .sb-link.active svg { color: var(--label-1); }
    .sb-link.hidden { display: none; }

    /* ══════════════════════════════════════════════════════
       RIGHT TOC
    ══════════════════════════════════════════════════════ */
    .toc-wrap { padding: 0 0 0 20px; }
    .toc-label {
      font-family: var(--sf); font-size: 10.5px; font-weight: 600;
      letter-spacing: .04em; text-transform: uppercase;
      color: var(--label-1); margin-bottom: 10px; padding-left: 8px;
    }
    .toc-list { list-style: none; border-left: 1px solid var(--sep-hard); }
    .toc-link {
      display: block; font-family: var(--sf);
      font-size: 12px; font-weight: 400; color: var(--label-3);
      text-decoration: none; padding: 3px 0 3px 12px;
      border-left: 2px solid transparent; margin-left: -1px;
      letter-spacing: -.003em; line-height: 1.6;
      transition: color .12s, border-color .12s;
    }
    .toc-link:hover { color: var(--label-1); }
    .toc-link.active { color: var(--label-1); font-weight: 500; border-left-color: var(--label-1); }

    /* ══════════════════════════════════════════════════════
       FOOTER
    ══════════════════════════════════════════════════════ */
    .footer {
      border-top: 1px solid var(--sep);
      padding: 22px 56px;
      display: flex; justify-content: space-between; align-items: center;
      background: var(--fill-2);
    }
    .footer span { font-size: 12px; color: var(--label-3); letter-spacing: -.003em; }

    /* ══════════════════════════════════════════════════════
       RESPONSIVE
    ══════════════════════════════════════════════════════ */
    @media (max-width: 1120px) { .toc-col  { display: none; } }
    @media (max-width: 860px)  { .main { padding: 40px 28px 80px; } .page-title { font-size: 38px; } }
    @media (max-width: 680px)  { .sidebar { display: none; } .main { padding: 30px 18px 80px; } .page-title { font-size: 32px; } }
  </style>
</head>
<body>

<!-- ───────────────────────────────────────
     TIER 1  Global nav
─────────────────────────────────────────── -->
<header class="g-nav" role="banner">
  <a class="g-brand" href="/" aria-label="Holidayseva Developer">
    <svg width="18" height="18" viewBox="0 0 20 20" fill="none" aria-hidden="true">
      <rect x="2"    y="2"    width="4.5" height="16" rx="1.2" fill="#1d1d1f"/>
      <rect x="13.5" y="2"    width="4.5" height="16" rx="1.2" fill="#1d1d1f"/>
      <rect x="2"    y="8.75" width="16"  height="2.5" rx="1.25" fill="#1d1d1f"/>
    </svg>
    Developer
  </a>
  <ul class="g-links" role="list">
    <li><a href="#">Get Started</a></li>
    <li><a href="#">Foundations</a></li>
    <li><a href="#" class="on">Components</a></li>
    <li><a href="#">Patterns</a></li>
    <li><a href="#">Resources</a></li>
  </ul>
  <div class="g-actions">
    <button class="g-icon" aria-label="Search">
      <svg width="15" height="15" viewBox="0 0 15 15" fill="none">
        <circle cx="6.2" cy="6.2" r="4.5" stroke="currentColor" stroke-width="1.3"/>
        <line x1="9.7" y1="9.7" x2="13.4" y2="13.4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
      </svg>
    </button>
    <button class="g-icon" aria-label="Account">
      <svg width="15" height="15" viewBox="0 0 15 15" fill="none">
        <circle cx="7.5" cy="5" r="2.8" stroke="currentColor" stroke-width="1.3"/>
        <path d="M1.5 14c0-3.31 2.69-6 6-6s6 2.69 6 6" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
      </svg>
    </button>
  </div>
</header>

<!-- ───────────────────────────────────────
     TIER 2  Section nav
─────────────────────────────────────────── -->
<nav class="s-nav" aria-label="Section navigation">
  <span class="s-title">Design Guidelines</span>
  <div class="s-divider"></div>
  <ul class="s-tabs" role="list">
    <li><a href="#">Overview</a></li>
    <li><a href="#">What's New</a></li>
    <li><a href="#">Get Started</a></li>
    <li><a href="#" class="on">Guidelines</a></li>
    <li><a href="#">Resources</a></li>
  </ul>
</nav>

<!-- ───────────────────────────────────────
     PAGE LAYOUT
─────────────────────────────────────────── -->
<div class="layout">

  <!-- Left sidebar -->
  <aside class="sidebar">
    <div class="sb-filter">
      <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M1 3h12M3 7h8M5 11h4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>
      <input type="text" placeholder="Filter" id="sbFilter" oninput="filterSidebar(this.value)"/>
    </div>
    <nav class="sb-nav">

      <div class="sb-group" id="g-start">
        <button class="sb-btn" onclick="toggleGroup('g-start')">
          <svg class="sb-chev" width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Getting started
        </button>
        <ul class="sb-list" hidden>
          <li><a href="#" class="sb-link"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="5.5" stroke="currentColor" stroke-width="1.2"/><path d="M7 4v3.5L9 9" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>Introduction</a></li>
        </ul>
      </div>

      <div class="sb-group" id="g-foundations">
        <button class="sb-btn" onclick="toggleGroup('g-foundations')">
          <svg class="sb-chev" width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Foundations
        </button>
        <ul class="sb-list" hidden>
          <li><a href="#" class="sb-link"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><rect x="2" y="2" width="10" height="10" rx="2" stroke="currentColor" stroke-width="1.2"/></svg>Colour</a></li>
          <li><a href="#" class="sb-link"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M3 10V4l4 5 4-5v6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>Typography</a></li>
          <li><a href="#" class="sb-link"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2v10" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>Spacing</a></li>
        </ul>
      </div>

      <div class="sb-group open" id="g-components">
        <button class="sb-btn" onclick="toggleGroup('g-components')">
          <svg class="sb-chev" width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Components
        </button>
        <ul class="sb-list">
          <li><a href="#" class="sb-link"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><rect x="1" y="4" width="12" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/></svg>Button</a></li>
          <li><a href="#" class="sb-link"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><rect x="1" y="3" width="12" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M4 6h6M4 9h4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>Input</a></li>
          <li><a href="toggle.php" class="sb-link active"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><rect x="1" y="4" width="12" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/><circle cx="10" cy="7" r="2" fill="currentColor"/></svg>Toggle</a></li>
          <li><a href="#" class="sb-link"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M2 4h10v7a1 1 0 01-1 1H3a1 1 0 01-1-1V4z" stroke="currentColor" stroke-width="1.2"/><path d="M2 4l5-2 5 2" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/></svg>Modal</a></li>
          <li><a href="#" class="sb-link"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="4" r="2" stroke="currentColor" stroke-width="1.2"/><path d="M2 12c0-2.76 2.24-5 5-5s5 2.24 5 5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>Avatar</a></li>
        </ul>
      </div>

      <div class="sb-group" id="g-patterns">
        <button class="sb-btn" onclick="toggleGroup('g-patterns')">
          <svg class="sb-chev" width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Patterns
        </button>
        <ul class="sb-list" hidden>
          <li><a href="#" class="sb-link"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M2 11V5l5-3 5 3v6l-5 3-5-3z" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/></svg>Forms</a></li>
          <li><a href="#" class="sb-link"><svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M2 10l4-4 2 2 4-5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>Data display</a></li>
        </ul>
      </div>

    </nav>
  </aside>

  <!-- ────────── MAIN ────────── -->
  <main class="main">

    <div id="overview">
      <p class="eyebrow">Components · Form Controls</p>
      <h1 class="page-title">Toggle</h1>
      <p class="page-lead">A binary switch for enabling or disabling a single option. Communicates state instantly through colour and position.</p>
    </div>

    <hr class="divider">

    <!-- Demo -->
    <div class="demo-box">
      <span class="demo-cap">Interactive demo — click to toggle</span>
      <div class="toggle" id="demoToggle"
           role="switch" aria-checked="false"
           tabindex="0" aria-label="Demo toggle">
        <div class="toggle-circle"></div>
      </div>
      <span class="demo-badge" id="demoBadge">state: off</span>
    </div>

    <!-- Anatomy -->
    <section id="anatomy" style="margin-bottom:48px">
      <h2 class="sec-title">Anatomy</h2>
      <p class="body-p">The component has two elements. The <strong>track</strong> (<code>.toggle</code>) is the pill-shaped container whose fill colour reflects state. The <strong>thumb</strong> (<code>.toggle-circle</code>) is the white circle that slides within the track.</p>
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

    <!-- Specs -->
    <section id="specs" style="margin-bottom:48px">
      <h2 class="sec-title">Specifications</h2>
      <p class="body-p">Default (desktop) dimensions. A responsive breakpoint at 480 px scales the component proportionally.</p>
      <div class="spec-table">
        <div class="spec-row"><span class="spec-key">Width</span><span class="spec-val">280px</span></div>
        <div class="spec-row"><span class="spec-key">Height</span><span class="spec-val">160px</span></div>
        <div class="spec-row"><span class="spec-key">Border radius</span><span class="spec-val">80px</span></div>
        <div class="spec-row"><span class="spec-key">Thumb diameter</span><span class="spec-val">140px</span></div>
        <div class="spec-row"><span class="spec-key">Thumb inset</span><span class="spec-val">10px (all sides)</span></div>
        <div class="spec-row"><span class="spec-key">Thumb travel</span><span class="spec-val">left: 10px → left: 130px</span></div>
        <div class="spec-row"><span class="spec-key">Easing</span><span class="spec-val">cubic-bezier(0.4, 0, 0.2, 1) 0.4s</span></div>
        <div class="spec-row"><span class="spec-key">Off colour</span><span class="spec-val"><span class="sw" style="background:#e5e5ea"></span>#e5e5ea</span></div>
        <div class="spec-row"><span class="spec-key">Active colour</span><span class="spec-val"><span class="sw" style="background:#34c759"></span>#34c759</span></div>
        <div class="spec-row"><span class="spec-key">Thumb colour</span><span class="spec-val"><span class="sw" style="background:#fff;border-color:#ccc"></span>#ffffff</span></div>
      </div>
    </section>

    <hr class="divider">

    <!-- HTML Usage -->
    <section id="usage" style="margin-bottom:48px">
      <h2 class="sec-title">HTML Usage</h2>
      <p class="body-p">Link the stylesheet in <code>&lt;head&gt;</code> and place the markup in your template. The script auto-initialises every <code>.toggle</code> on <code>DOMContentLoaded</code> — no manual wiring needed.</p>

      <div class="code-block">
        <div class="code-bar"><span class="lang-tag">HTML</span><button class="cp-btn" onclick="copyCode(this)">Copy</button></div>
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

      <p class="sub-title">Pre-active state</p>
      <p class="body-p">Add the <code>active</code> class in markup to render in the on state. Pair with <code>aria-checked="true"</code>.</p>
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
        <p>Always include <code>role="switch"</code>, <code>aria-checked</code>, <code>tabindex="0"</code>, and a descriptive <code>aria-label</code>. The script keeps <code>aria-checked</code> in sync automatically.</p>
      </div>
    </section>

    <hr class="divider">

    <!-- JavaScript API -->
    <section id="javascript" style="margin-bottom:48px">
      <h2 class="sec-title">JavaScript API</h2>
      <p class="body-p"><code>ToggleSwitch</code> is defined in <code>toggle.js</code> and auto-initialises on page load. Three methods are available for programmatic control.</p>

      <table class="api-table">
        <thead><tr><th>Method</th><th>Arguments</th><th>Returns</th><th>Description</th></tr></thead>
        <tbody>
          <tr><td>getState(el)</td><td>HTMLElement</td><td><code>"on"</code> | <code>"off"</code></td><td>Reads current state from <code>data-state</code>.</td></tr>
          <tr><td>setState(el, state)</td><td>HTMLElement, <code>"on"</code>|<code>"off"</code></td><td>—</td><td>Sets state silently — no event fired.</td></tr>
          <tr><td>toggle(el)</td><td>HTMLElement</td><td>—</td><td>Flips state silently.</td></tr>
        </tbody>
      </table>

      <p class="sub-title">Listening for changes</p>
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
        <p><code>setState()</code> and <code>toggle()</code> do not fire <code>toggle-change</code>. Only user-initiated clicks dispatch the event.</p>
      </div>
    </section>

    <hr class="divider">

    <!-- Integration -->
    <section id="integration" style="margin-bottom:48px">
      <h2 class="sec-title">Integration</h2>
      <p class="body-p">Include <code>toggle.js</code> once before <code>&lt;/body&gt;</code>. Elements added dynamically after load require a fresh <code>new ToggleSwitch(selector)</code> call.</p>
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

    <!-- Accessibility -->
    <section id="accessibility" style="margin-bottom:48px">
      <h2 class="sec-title">Accessibility</h2>
      <p class="body-p">The toggle is a custom control — ARIA attributes must be set in markup. The script keeps <code>aria-checked</code> synchronised on every transition. The element is keyboard-operable via <kbd>Space</kbd> or <kbd>Enter</kbd>.</p>
      <table class="api-table">
        <thead><tr><th>Attribute</th><th>Value</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td>role</td><td><code>"switch"</code></td><td>Identifies the control as a binary switch.</td></tr>
          <tr><td>aria-checked</td><td><code>"true"</code> / <code>"false"</code></td><td>Updated by <code>toggle.js</code> on each state change.</td></tr>
          <tr><td>tabindex</td><td><code>"0"</code></td><td>Places element in the natural tab order.</td></tr>
          <tr><td>aria-label</td><td>Descriptive string</td><td>Describes what the toggle controls, e.g. <code>"Enable dark mode"</code>.</td></tr>
        </tbody>
      </table>
      <p class="sub-title">Keyboard activation snippet</p>
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

  <!-- Right TOC -->
  <aside class="toc-col">
    <div class="toc-wrap">
      <p class="toc-label">On this page</p>
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

<footer class="footer">
  <span>Holidayseva Design Guidelines · Toggle</span>
  <span>v1.0</span>
</footer>

<script>
  class ToggleSwitch {
    constructor(sel) { this.toggles = document.querySelectorAll(sel); this.init(); }
    init() {
      this.toggles.forEach(t => {
        t.addEventListener('click', e => this.handleToggle(e));
        const on = t.classList.contains('active');
        t.dataset.state = on ? 'on' : 'off';
        t.setAttribute('aria-checked', on ? 'true' : 'false');
      });
    }
    handleToggle(e) {
      const t = e.currentTarget;
      t.classList.toggle('active');
      const s = t.classList.contains('active') ? 'on' : 'off';
      t.dataset.state = s;
      t.setAttribute('aria-checked', s === 'on' ? 'true' : 'false');
      t.dispatchEvent(new CustomEvent('toggle-change', {
        detail: { state: s, isActive: s === 'on', element: t }
      }));
    }
    getState(el)        { return el.dataset.state || 'off'; }
    setState(el, state) {
      const on = state === 'on' || state === true;
      el.classList.toggle('active', on);
      el.dataset.state = on ? 'on' : 'off';
      el.setAttribute('aria-checked', on ? 'true' : 'false');
    }
    toggle(el) {
      el.classList.toggle('active');
      const s = el.classList.contains('active') ? 'on' : 'off';
      el.dataset.state = s;
      el.setAttribute('aria-checked', s === 'on' ? 'true' : 'false');
    }
  }

  document.addEventListener('DOMContentLoaded', () => {
    new ToggleSwitch('.toggle');

    const demoEl = document.getElementById('demoToggle');
    const badge  = document.getElementById('demoBadge');
    demoEl.addEventListener('toggle-change', e => {
      badge.textContent = 'state: ' + e.detail.state;
      badge.className   = 'demo-badge' + (e.detail.isActive ? ' on' : '');
    });

    document.querySelectorAll('.toggle').forEach(el => {
      el.addEventListener('keydown', e => {
        if (e.key === ' ' || e.key === 'Enter') { e.preventDefault(); el.click(); }
      });
    });

    const tocLinks = document.querySelectorAll('.toc-link');
    const sections = document.querySelectorAll('section[id], div[id]');
    new IntersectionObserver(entries => {
      entries.forEach(en => {
        if (en.isIntersecting) {
          tocLinks.forEach(a => {
            a.classList.remove('active');
            if (a.getAttribute('href') === '#' + en.target.id) a.classList.add('active');
          });
        }
      });
    }, { rootMargin: '-15% 0px -75% 0px' }).observe
    && sections.forEach(s => new IntersectionObserver(entries => {
      entries.forEach(en => {
        if (en.isIntersecting) {
          tocLinks.forEach(a => {
            a.classList.remove('active');
            if (a.getAttribute('href') === '#' + en.target.id) a.classList.add('active');
          });
        }
      });
    }, { rootMargin: '-15% 0px -75% 0px' }).observe(s));
  });

  function toggleGroup(id) {
    const g = document.getElementById(id);
    const l = g.querySelector('.sb-list');
    const open = g.classList.contains('open');
    g.classList.toggle('open', !open);
    open ? l.setAttribute('hidden', '') : l.removeAttribute('hidden');
  }

  function filterSidebar(q) {
    const t = q.toLowerCase().trim();
    document.querySelectorAll('.sb-link').forEach(a => {
      const m = a.textContent.toLowerCase().includes(t);
      a.classList.toggle('hidden', !m);
      if (m && t) { const g = a.closest('.sb-group'); g.classList.add('open'); g.querySelector('.sb-list').removeAttribute('hidden'); }
    });
  }

  function copyCode(btn) {
    navigator.clipboard.writeText(btn.closest('.code-block').querySelector('pre').innerText).then(() => {
      btn.textContent = 'Copied';
      setTimeout(() => btn.textContent = 'Copy', 1800);
    });
  }
</script>

</body>
</html>