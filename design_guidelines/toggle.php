<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Toggle — Component Documentation</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=SF+Pro+Display:wght@300;400;500;600&family=New+York:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet" />
  <!-- Fallback stack matching SF Pro / New York feel -->
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,300&family=Lora:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet" />

  <style>
    /* ── Reset & Tokens ──────────────────────────────────────── */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --bg:          #ffffff;
      --surface:     #f5f5f7;
      --border:      #d2d2d7;
      --border-faint:#e8e8ed;
      --text-primary:#1d1d1f;
      --text-secondary:#6e6e73;
      --text-tertiary:#aeaeb2;
      --accent:      #ff385c;
      --accent-soft: #fff0f2;
      --code-bg:     #f5f5f7;
      --code-text:   #1d1d1f;

      --font-sans: 'DM Sans', -apple-system, BlinkMacSystemFont, 'Helvetica Neue', sans-serif;
      --font-serif: 'Lora', Georgia, 'Times New Roman', serif;
      --font-mono:  'SF Mono', 'Fira Code', 'Cascadia Code', monospace;

      --sidebar-w: 280px;
      --header-h:  56px;
      --radius:    12px;
      --transition: 0.2s ease;
    }

    html { scroll-behavior: smooth; }

    body {
      font-family: var(--font-sans);
      background: var(--bg);
      color: var(--text-primary);
      line-height: 1.6;
      -webkit-font-smoothing: antialiased;
      overflow-x: hidden;
    }

    /* ── Top Navigation ──────────────────────────────────────── */
    .site-nav {
      position: fixed;
      top: 0; left: 0; right: 0;
      height: var(--header-h);
      background: rgba(255,255,255,0.88);
      backdrop-filter: saturate(180%) blur(20px);
      -webkit-backdrop-filter: saturate(180%) blur(20px);
      border-bottom: 1px solid var(--border-faint);
      display: flex;
      align-items: center;
      padding: 0 32px;
      z-index: 100;
      gap: 0;
    }

    .nav-brand {
      font-size: 13px;
      font-weight: 500;
      color: var(--text-secondary);
      letter-spacing: 0.01em;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .nav-brand span {
      color: var(--text-tertiary);
      font-weight: 300;
    }

    .nav-divider {
      width: 1px;
      height: 18px;
      background: var(--border);
      margin: 0 16px;
    }

    .nav-section {
      font-size: 13px;
      color: var(--text-primary);
      font-weight: 500;
    }

    .nav-spacer { flex: 1; }

    .nav-tag {
      font-size: 11px;
      font-weight: 500;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      padding: 3px 10px;
      border-radius: 20px;
      background: var(--accent-soft);
      color: var(--accent);
      border: 1px solid rgba(255, 56, 92, 0.15);
    }

    /* ── Page Shell ──────────────────────────────────────────── */
    .page-shell {
      display: flex;
      min-height: 100vh;
      padding-top: var(--header-h);
    }

    /* ── Sidebar (include via PHP) ───────────────────────────── */
    .sidebar-slot {
      width: var(--sidebar-w);
      flex-shrink: 0;
      position: sticky;
      top: var(--header-h);
      height: calc(100vh - var(--header-h));
      overflow-y: auto;
      border-right: 1px solid var(--border-faint);
      padding: 40px 0 40px;

    }

    /* Sidebar nav styles (also used by sidebar.php) */
    .sidebar-section-label {
      font-size: 10px;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--text-tertiary);
      padding: 0 24px;
      margin-bottom: 8px;
      margin-top: 28px;
    }
    .sidebar-section-label:first-child { margin-top: 0; }

    .sidebar-nav { list-style: none; }

    .sidebar-nav a {
      display: block;
      font-size: 13.5px;
      font-weight: 400;
      color: var(--text-secondary);
      text-decoration: none;
      padding: 6px 24px;
      border-left: 2px solid transparent;
      transition: color var(--transition), border-color var(--transition), background var(--transition);
    }

    .sidebar-nav a:hover {
      color: var(--text-primary);
      background: var(--surface);
    }

    .sidebar-nav a.active {
      color: var(--accent);
      border-left-color: var(--accent);
      font-weight: 500;
      background: var(--accent-soft);
    }

    /* ── Main Content ────────────────────────────────────────── */
    .main-content {
      flex: 1;
      min-width: 0;
      padding: 64px 80px 120px 72px;
      max-width: 900px;
    }

    /* ── Hero ────────────────────────────────────────────────── */
    .doc-hero {
      margin-bottom: 64px;
      padding-bottom: 48px;
      border-bottom: 1px solid var(--border-faint);
    }

    .doc-eyebrow {
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--accent);
      margin-bottom: 16px;
    }

    .doc-title {
      font-family: var(--font-serif);
      font-size: 52px;
      font-weight: 400;
      line-height: 1.08;
      letter-spacing: -0.02em;
      color: var(--text-primary);
      margin-bottom: 20px;
    }

    .doc-lead {
      font-size: 18px;
      font-weight: 300;
      color: var(--text-secondary);
      line-height: 1.65;
      max-width: 560px;
    }

    /* ── Live Demo ───────────────────────────────────────────── */
    .demo-stage {
      background: var(--surface);
      border: 1px solid var(--border-faint);
      border-radius: 20px;
      padding: 56px 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 24px;
      margin: 48px 0;
      position: relative;
      overflow: hidden;
    }

    .demo-stage::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(ellipse at 50% 0%, rgba(255,56,92,0.04) 0%, transparent 65%);
      pointer-events: none;
    }

    .demo-label {
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--text-tertiary);
    }

    .demo-state-indicator {
      font-size: 13px;
      color: var(--text-tertiary);
      font-weight: 400;
      transition: color 0.3s;
    }

    .demo-state-indicator.on { color: var(--accent); font-weight: 500; }

    /* Live Toggle Component */
    .toggle {
      position: relative;
      width: 280px;
      height: 160px;
      background: #DDDDDD;
      border-radius: 80px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      user-select: none;
      -webkit-tap-highlight-color: transparent;
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

    /* ── Section Anatomy ─────────────────────────────────────── */
    .doc-section {
      margin-bottom: 64px;
    }

    .doc-section-title {
      font-family: var(--font-serif);
      font-size: 28px;
      font-weight: 400;
      letter-spacing: -0.01em;
      color: var(--text-primary);
      margin-bottom: 16px;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .section-anchor {
      color: var(--text-tertiary);
      text-decoration: none;
      font-size: 18px;
      opacity: 0;
      transition: opacity 0.15s;
    }
    .doc-section-title:hover .section-anchor { opacity: 1; }

    .doc-body {
      font-size: 15px;
      color: var(--text-secondary);
      line-height: 1.75;
      margin-bottom: 24px;
    }

    /* ── Spec Grid ───────────────────────────────────────────── */
    .spec-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1px;
      background: var(--border-faint);
      border: 1px solid var(--border-faint);
      border-radius: var(--radius);
      overflow: hidden;
      margin: 32px 0;
    }

    .spec-cell {
      background: var(--bg);
      padding: 20px 22px;
    }

    .spec-cell-label {
      font-size: 10px;
      font-weight: 600;
      letter-spacing: 0.07em;
      text-transform: uppercase;
      color: var(--text-tertiary);
      margin-bottom: 6px;
    }

    .spec-cell-value {
      font-family: var(--font-mono);
      font-size: 13px;
      color: var(--text-primary);
    }

    /* ── Code Blocks ─────────────────────────────────────────── */
    .code-wrap {
      margin: 24px 0;
      border: 1px solid var(--border-faint);
      border-radius: var(--radius);
      overflow: hidden;
    }

    .code-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 16px;
      background: var(--surface);
      border-bottom: 1px solid var(--border-faint);
    }

    .code-lang {
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: var(--text-tertiary);
    }

    .code-copy {
      font-size: 11px;
      font-weight: 500;
      color: var(--text-tertiary);
      background: none;
      border: none;
      cursor: pointer;
      padding: 2px 8px;
      border-radius: 5px;
      transition: color var(--transition), background var(--transition);
      font-family: var(--font-sans);
    }
    .code-copy:hover {
      color: var(--text-primary);
      background: var(--border-faint);
    }

    pre {
      background: var(--code-bg);
      padding: 20px 22px;
      overflow-x: auto;
      margin: 0;
    }

    code {
      font-family: var(--font-mono);
      font-size: 13px;
      line-height: 1.7;
      color: var(--code-text);
    }

    /* Inline code */
    p code, li code {
      background: var(--surface);
      border: 1px solid var(--border-faint);
      padding: 1px 6px;
      border-radius: 5px;
      font-size: 12.5px;
    }

    /* Syntax highlighting */
    .kw  { color: #c0185e; }
    .fn  { color: #0071e3; }
    .str { color: #1a7f45; }
    .cmt { color: #aeaeb2; font-style: italic; }
    .tag { color: #c0185e; }
    .attr{ color: #e37c00; }
    .val { color: #1a7f45; }

    /* ── States Table ────────────────────────────────────────── */
    .states-table {
      width: 100%;
      border-collapse: collapse;
      font-size: 13.5px;
      margin: 24px 0;
    }

    .states-table th {
      text-align: left;
      font-size: 10px;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--text-tertiary);
      padding: 0 16px 12px;
    }

    .states-table td {
      padding: 13px 16px;
      border-top: 1px solid var(--border-faint);
      color: var(--text-secondary);
      vertical-align: top;
    }

    .states-table td:first-child {
      font-family: var(--font-mono);
      font-size: 12.5px;
      color: var(--text-primary);
      white-space: nowrap;
    }

    /* ── Callout ─────────────────────────────────────────────── */
    .callout {
      display: flex;
      gap: 14px;
      padding: 18px 20px;
      border-radius: var(--radius);
      border: 1px solid var(--border-faint);
      background: var(--surface);
      margin: 28px 0;
    }

    .callout-icon {
      width: 18px;
      height: 18px;
      flex-shrink: 0;
      margin-top: 1px;
      opacity: 0.5;
    }

    .callout p {
      font-size: 13.5px;
      color: var(--text-secondary);
      line-height: 1.65;
      margin: 0;
    }

    .callout.tip { border-color: rgba(255,56,92,0.2); background: var(--accent-soft); }
    .callout.tip p { color: #9b1a30; }

    /* ── Section Divider ─────────────────────────────────────── */
    .section-rule {
      border: none;
      border-top: 1px solid var(--border-faint);
      margin: 64px 0;
    }

    /* ── Anatomy Diagram ─────────────────────────────────────── */
    .anatomy-wrap {
      position: relative;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: var(--surface);
      border: 1px solid var(--border-faint);
      border-radius: 20px;
      padding: 48px 64px;
      margin: 32px 0;
      width: 100%;
    }

    .anatomy-toggle {
      position: relative;
      width: 220px;
      height: 124px;
      background: #DDDDDD;
      border-radius: 62px;
    }

    .anatomy-circle {
      position: absolute;
      width: 104px;
      height: 104px;
      background: white;
      border-radius: 50%;
      top: 10px;
      left: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    }

    /* Annotation lines */
    .ann {
      position: absolute;
      display: flex;
      align-items: center;
      gap: 6px;
    }

    .ann-line {
      height: 1px;
      background: var(--border);
    }

    .ann-dot {
      width: 5px;
      height: 5px;
      border-radius: 50%;
      background: var(--accent);
      flex-shrink: 0;
    }

    .ann-label {
      font-size: 11px;
      font-weight: 500;
      color: var(--text-secondary);
      white-space: nowrap;
      font-family: var(--font-mono);
    }

    .ann-track {
      top: 50%;
      right: -148px;
      transform: translateY(10px);
    }
    .ann-track .ann-line { width: 60px; }

    .ann-thumb {
      top: 40%;
      left: -148px;
      flex-direction: row-reverse;
    }
    .ann-thumb .ann-line { width: 60px; }

    /* ── Responsive ──────────────────────────────────────────── */
    @media (max-width: 900px) {
      .main-content { padding: 48px 40px 80px; }
      .doc-title { font-size: 40px; }
    }

    @media (max-width: 700px) {
      .sidebar-slot { display: none; }
      .main-content { padding: 40px 24px 80px; }
      .doc-title { font-size: 34px; }
      .spec-grid { grid-template-columns: repeat(2, 1fr); }
    }

    /* ── Scroll spy active link ──────────────────────────────── */
    .sidebar-nav a[data-active="true"] {
      color: var(--accent);
      border-left-color: var(--accent);
      font-weight: 500;
      background: var(--accent-soft);
    }

    /* ── Footer ──────────────────────────────────────────────── */
    .doc-footer {
      border-top: 1px solid var(--border-faint);
      padding: 40px 80px 40px 72px;
      display: flex;
      align-items: center;
      gap: 24px;
    }

    .footer-text {
      font-size: 12px;
      color: var(--text-tertiary);
    }
  </style>
</head>
<body>

  <!-- Top Navigation -->
  <nav class="site-nav">
    <a class="nav-brand" href="#">Design System <span>/</span> Components</a>
    <div class="nav-divider"></div>
    <span class="nav-section">Toggle</span>
    <div class="nav-spacer"></div>
    <span class="nav-tag">UI Component</span>
  </nav>

  <div class="page-shell">

    <aside class="sidebar-slot" id="sidebar">
      <?php include 'sidebar.php'; ?>
    </aside>

    <!-- Main Documentation Content -->
    <main class="main-content">

      <!-- Hero -->
      <header class="doc-hero" id="overview">
        <p class="doc-eyebrow">Components · Form Controls</p>
        <h1 class="doc-title">Toggle</h1>
        <p class="doc-lead">A binary switch for toggling a single setting between two states. Built for clarity and fluid interaction with a smooth, spring-like animation.</p>
      </header>

      <!-- Live Demo -->
      <div class="demo-stage">
        <span class="demo-label">Interactive Demo</span>
        <div class="toggle" id="demoToggle" role="switch" aria-checked="false" tabindex="0" aria-label="Toggle demo">
          <div class="toggle-circle"></div>
        </div>
        <span class="demo-state-indicator" id="demoState">State: <strong>off</strong></span>
      </div>

      <!-- Anatomy -->
      <section class="doc-section" id="anatomy">
        <h2 class="doc-section-title">
          Anatomy
          <a class="section-anchor" href="#anatomy">#</a>
        </h2>
        <p class="doc-body">The toggle is composed of two elements: the <strong>track</strong> — a pill-shaped container that conveys the active/inactive state through colour — and the <strong>thumb</strong>, a circular indicator that slides along the track.</p>

        <div class="anatomy-wrap">
          <div class="anatomy-toggle" style="position:relative;">
            <div class="anatomy-circle"></div>

            <!-- Annotation: track -->
            <div style="position:absolute; top:50%; right:-180px; transform:translateY(12px); display:flex; align-items:center; gap:6px;">
              <div style="width:1px; height:28px; background:var(--border); margin-right:4px;"></div>
              <div style="width:48px; height:1px; background:var(--border);"></div>
              <div style="width:5px; height:5px; border-radius:50%; background:var(--accent); flex-shrink:0;"></div>
              <span style="font-family:var(--font-mono); font-size:11px; color:var(--text-secondary); white-space:nowrap;">.toggle (track)</span>
            </div>

            <!-- Annotation: thumb -->
            <div style="position:absolute; top:50%; left:-192px; transform:translateY(-20px); display:flex; flex-direction:row-reverse; align-items:center; gap:6px;">
              <div style="width:1px; height:28px; background:var(--border); margin-left:4px;"></div>
              <div style="width:48px; height:1px; background:var(--border);"></div>
              <div style="width:5px; height:5px; border-radius:50%; background:var(--accent); flex-shrink:0;"></div>
              <span style="font-family:var(--font-mono); font-size:11px; color:var(--text-secondary); white-space:nowrap;">.toggle-circle (thumb)</span>
            </div>
          </div>
        </div>
      </section>

      <hr class="section-rule" />

      <!-- Specifications -->
      <section class="doc-section" id="specs">
        <h2 class="doc-section-title">
          Specifications
          <a class="section-anchor" href="#specs">#</a>
        </h2>
        <p class="doc-body">Visual dimensions and colour tokens for the default size. Responsive breakpoints adjust the component for smaller viewports.</p>

        <div class="spec-grid">
          <div class="spec-cell">
            <p class="spec-cell-label">Width</p>
            <p class="spec-cell-value">280px</p>
          </div>
          <div class="spec-cell">
            <p class="spec-cell-label">Height</p>
            <p class="spec-cell-value">160px</p>
          </div>
          <div class="spec-cell">
            <p class="spec-cell-label">Border Radius</p>
            <p class="spec-cell-value">80px</p>
          </div>
          <div class="spec-cell">
            <p class="spec-cell-label">Thumb Diameter</p>
            <p class="spec-cell-value">140px</p>
          </div>
          <div class="spec-cell">
            <p class="spec-cell-label">Thumb Inset</p>
            <p class="spec-cell-value">10px</p>
          </div>
          <div class="spec-cell">
            <p class="spec-cell-label">Animation</p>
            <p class="spec-cell-value">0.4s cubic-bezier</p>
          </div>
          <div class="spec-cell">
            <p class="spec-cell-label">Off Colour</p>
            <p class="spec-cell-value">#DDDDDD</p>
          </div>
          <div class="spec-cell">
            <p class="spec-cell-label">Active Colour</p>
            <p class="spec-cell-value">#FF385C</p>
          </div>
          <div class="spec-cell">
            <p class="spec-cell-label">Thumb Colour</p>
            <p class="spec-cell-value">#FFFFFF</p>
          </div>
        </div>

        <h3 style="font-size:14px; font-weight:600; letter-spacing:0.02em; margin:32px 0 12px; color:var(--text-primary);">Responsive Breakpoint — &lt; 480px</h3>
        <div class="spec-grid">
          <div class="spec-cell"><p class="spec-cell-label">Width</p><p class="spec-cell-value">220px</p></div>
          <div class="spec-cell"><p class="spec-cell-label">Height</p><p class="spec-cell-value">130px</p></div>
          <div class="spec-cell"><p class="spec-cell-label">Thumb Diameter</p><p class="spec-cell-value">110px</p></div>
        </div>
      </section>

      <hr class="section-rule" />

      <!-- HTML Usage -->
      <section class="doc-section" id="usage">
        <h2 class="doc-section-title">
          HTML Usage
          <a class="section-anchor" href="#usage">#</a>
        </h2>
        <p class="doc-body">Drop the two-element markup anywhere in your template. Link the stylesheet in <code>&lt;head&gt;</code> and the script before <code>&lt;/body&gt;</code>. The <code>toggle.js</code> file auto-initialises every element matching <code>.toggle</code> on <code>DOMContentLoaded</code>.</p>

        <div class="code-wrap">
          <div class="code-header">
            <span class="code-lang">HTML</span>
            <button class="code-copy" onclick="copyCode(this)">Copy</button>
          </div>
          <pre><code><span class="cmt">&lt;!-- In &lt;head&gt; --&gt;</span>
<span class="tag">&lt;link</span> <span class="attr">rel</span>=<span class="val">"stylesheet"</span> <span class="attr">href</span>=<span class="val">"/design_guidelines/toggle.css"</span><span class="tag">&gt;</span>

<span class="cmt">&lt;!-- Component markup --&gt;</span>
<span class="tag">&lt;div</span> <span class="attr">class</span>=<span class="val">"toggle"</span>
     <span class="attr">role</span>=<span class="val">"switch"</span>
     <span class="attr">aria-checked</span>=<span class="val">"false"</span>
     <span class="attr">tabindex</span>=<span class="val">"0"</span>
     <span class="attr">aria-label</span>=<span class="val">"Enable notifications"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;div</span> <span class="attr">class</span>=<span class="val">"toggle-circle"</span><span class="tag">&gt;&lt;/div&gt;</span>
<span class="tag">&lt;/div&gt;</span>

<span class="cmt">&lt;!-- Before &lt;/body&gt; --&gt;</span>
<span class="tag">&lt;script</span> <span class="attr">src</span>=<span class="val">"/design_guidelines/JS/components.js"</span><span class="tag">&gt;&lt;/script&gt;</span></code></pre>
        </div>

        <p class="doc-body">To render the toggle in its <strong>active (on) state</strong> by default, add the <code>active</code> class to the wrapper element:</p>

        <div class="code-wrap">
          <div class="code-header">
            <span class="code-lang">HTML · Pre-active</span>
            <button class="code-copy" onclick="copyCode(this)">Copy</button>
          </div>
          <pre><code><span class="tag">&lt;div</span> <span class="attr">class</span>=<span class="val">"toggle active"</span>
     <span class="attr">role</span>=<span class="val">"switch"</span>
     <span class="attr">aria-checked</span>=<span class="val">"true"</span>
     <span class="attr">tabindex</span>=<span class="val">"0"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;div</span> <span class="attr">class</span>=<span class="val">"toggle-circle"</span><span class="tag">&gt;&lt;/div&gt;</span>
<span class="tag">&lt;/div&gt;</span></code></pre>
        </div>

        <div class="callout tip">
          <svg class="callout-icon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="10" cy="10" r="9" stroke="#FF385C" stroke-width="1.5"/>
            <path d="M10 6v4M10 14h.01" stroke="#FF385C" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
          <p>Always include <code>role="switch"</code>, <code>aria-checked</code>, <code>tabindex="0"</code>, and a descriptive <code>aria-label</code>. The JavaScript keeps <code>aria-checked</code> in sync automatically.</p>
        </div>
      </section>

      <hr class="section-rule" />

      <!-- JavaScript API -->
      <section class="doc-section" id="javascript">
        <h2 class="doc-section-title">
          JavaScript API
          <a class="section-anchor" href="#javascript">#</a>
        </h2>
        <p class="doc-body"><code>ToggleSwitch</code> is a lightweight class defined in <code>toggle.js</code>. It auto-initialises on page load, but exposes three methods you can call programmatically after creating an instance.</p>

        <!-- States table -->
        <table class="states-table">
          <thead>
            <tr>
              <th>Method</th>
              <th>Arguments</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>getState(element)</td>
              <td>HTMLElement</td>
              <td>Returns <code>"on"</code> or <code>"off"</code> for the given element.</td>
            </tr>
            <tr>
              <td>setState(element, state)</td>
              <td>HTMLElement, <code>true</code> | <code>"on"</code> | <code>"off"</code></td>
              <td>Programmatically sets the toggle to the specified state without firing a click event.</td>
            </tr>
            <tr>
              <td>toggle(element)</td>
              <td>HTMLElement</td>
              <td>Flips the current state of the specified element.</td>
            </tr>
          </tbody>
        </table>

        <h3 style="font-size:15px; font-weight:600; margin: 36px 0 12px; color:var(--text-primary);">Listening for state changes</h3>
        <p class="doc-body">Every time a toggle is clicked, it fires a <code>toggle-change</code> CustomEvent on itself. Listen to it to react to state changes in your application logic.</p>

        <div class="code-wrap">
          <div class="code-header">
            <span class="code-lang">JavaScript</span>
            <button class="code-copy" onclick="copyCode(this)">Copy</button>
          </div>
          <pre><code><span class="kw">const</span> myToggle = document.<span class="fn">querySelector</span>(<span class="str">'.toggle'</span>);

myToggle.<span class="fn">addEventListener</span>(<span class="str">'toggle-change'</span>, (e) =&gt; {
  <span class="kw">const</span> { state, isActive, element } = e.detail;
  console.<span class="fn">log</span>(<span class="str">`New state: <span class="kw">${state}</span>`</span>); <span class="cmt">// "on" | "off"</span>
});</code></pre>
        </div>

        <h3 style="font-size:15px; font-weight:600; margin:36px 0 12px; color:var(--text-primary);">Programmatic control</h3>

        <div class="code-wrap">
          <div class="code-header">
            <span class="code-lang">JavaScript</span>
            <button class="code-copy" onclick="copyCode(this)">Copy</button>
          </div>
          <pre><code><span class="cmt">// Grab the auto-initialised instance (or create your own)</span>
<span class="kw">const</span> switches = <span class="kw">new</span> <span class="fn">ToggleSwitch</span>(<span class="str">'.toggle'</span>);

<span class="kw">const</span> el = document.<span class="fn">querySelector</span>(<span class="str">'#myToggle'</span>);

switches.<span class="fn">setState</span>(el, <span class="str">'on'</span>);   <span class="cmt">// force on</span>
switches.<span class="fn">setState</span>(el, <span class="str">'off'</span>);  <span class="cmt">// force off</span>
switches.<span class="fn">toggle</span>(el);             <span class="cmt">// flip</span>

<span class="kw">const</span> current = switches.<span class="fn">getState</span>(el); <span class="cmt">// "on" | "off"</span></code></pre>
        </div>
      </section>

      <hr class="section-rule" />

      <!-- Integration with components.js -->
      <section class="doc-section" id="integration">
        <h2 class="doc-section-title">
          Integration with <code style="font-size:22px;">components.js</code>
          <a class="section-anchor" href="#integration">#</a>
        </h2>
        <p class="doc-body">The design system uses a single entry-point file — <code>components.js</code> — that imports all component scripts. This means you only ever need one <code>&lt;script&gt;</code> tag per page, and every component is available automatically.</p>

        <div class="code-wrap">
          <div class="code-header">
            <span class="code-lang">components.js · Entry point</span>
            <button class="code-copy" onclick="copyCode(this)">Copy</button>
          </div>
          <pre><code><span class="cmt">/**
 * components.js
 * Central entry-point. Import all component scripts here.
 * Include this single file on every page.
 */</span>

<span class="kw">import</span> <span class="str">'./toggle.js'</span>;
<span class="cmt">// import './modal.js';</span>
<span class="cmt">// import './tooltip.js';</span>
<span class="cmt">// import './accordion.js';</span></code></pre>
        </div>

        <p class="doc-body">Each component script (e.g. <code>toggle.js</code>) auto-initialises when the DOM is ready. If you add <code>components.js</code> as a module, the imports resolve correctly:</p>

        <div class="code-wrap">
          <div class="code-header">
            <span class="code-lang">HTML · Module script tag</span>
            <button class="code-copy" onclick="copyCode(this)">Copy</button>
          </div>
          <pre><code><span class="tag">&lt;script</span> <span class="attr">type</span>=<span class="val">"module"</span>
        <span class="attr">src</span>=<span class="val">"/design_guidelines/JS/components.js"</span><span class="tag">&gt;
&lt;/script&gt;</span></code></pre>
        </div>

        <div class="callout">
          <svg class="callout-icon" viewBox="0 0 20 20" fill="none">
            <circle cx="10" cy="10" r="9" stroke="#aeaeb2" stroke-width="1.5"/>
            <path d="M10 6v4M10 14h.01" stroke="#aeaeb2" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
          <p>Using <code>type="module"</code> ensures ES module <code>import</code> statements resolve correctly and scripts are deferred by default — no need for a separate <code>defer</code> attribute.</p>
        </div>

        <h3 style="font-size:15px; font-weight:600; margin:36px 0 12px; color:var(--text-primary);">Recommended file structure</h3>
        <div class="code-wrap">
          <div class="code-header">
            <span class="code-lang">File Tree</span>
          </div>
          <pre><code>design_guidelines/
├── toggle.css
├── JS/
│   ├── components.js     <span class="cmt">← single import on every page</span>
│   ├── toggle.js         <span class="cmt">← ToggleSwitch class</span>
│   ├── modal.js
│   └── tooltip.js</code></pre>
        </div>
      </section>

      <hr class="section-rule" />

      <!-- Accessibility -->
      <section class="doc-section" id="accessibility">
        <h2 class="doc-section-title">
          Accessibility
          <a class="section-anchor" href="#accessibility">#</a>
        </h2>
        <p class="doc-body">The toggle is a custom control and requires explicit ARIA attributes to be accessible to assistive technology. The JavaScript keeps these attributes in sync automatically whenever the state changes.</p>

        <table class="states-table">
          <thead>
            <tr>
              <th>Attribute</th>
              <th>Required value</th>
              <th>Notes</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>role</td>
              <td><code>"switch"</code></td>
              <td>Identifies the element as a binary on/off control to screen readers.</td>
            </tr>
            <tr>
              <td>aria-checked</td>
              <td><code>"true"</code> / <code>"false"</code></td>
              <td>Updated by JS on every state change. Set initial value in HTML.</td>
            </tr>
            <tr>
              <td>tabindex</td>
              <td><code>"0"</code></td>
              <td>Makes the element keyboard-focusable.</td>
            </tr>
            <tr>
              <td>aria-label</td>
              <td>Descriptive string</td>
              <td>Describes what the toggle controls, e.g. <code>"Enable dark mode"</code>.</td>
            </tr>
          </tbody>
        </table>

        <div class="callout tip">
          <svg class="callout-icon" viewBox="0 0 20 20" fill="none">
            <circle cx="10" cy="10" r="9" stroke="#FF385C" stroke-width="1.5"/>
            <path d="M10 6v4M10 14h.01" stroke="#FF385C" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
          <p>Add keyboard support with a <code>keydown</code> listener that activates on <kbd>Space</kbd> and <kbd>Enter</kbd>. The auto-initialiser in <code>toggle.js</code> handles this for all <code>.toggle</code> elements.</p>
        </div>
      </section>

    </main>
  </div>

  <!-- Footer -->
  <footer class="doc-footer">
    <span class="footer-text">Design System · Toggle Component</span>
    <span class="footer-text" style="margin-left:auto;">v1.0</span>
  </footer>

  <!-- Live demo JS -->
  <script>
    // Demo toggle
    const demo = document.getElementById('demoToggle');
    const stateEl = document.getElementById('demoState');

    demo.addEventListener('click', () => {
      demo.classList.toggle('active');
      const on = demo.classList.contains('active');
      demo.setAttribute('aria-checked', on ? 'true' : 'false');
      stateEl.innerHTML = `State: <strong>${on ? 'on' : 'off'}</strong>`;
      stateEl.className = `demo-state-indicator${on ? ' on' : ''}`;
    });

    demo.addEventListener('keydown', (e) => {
      if (e.key === ' ' || e.key === 'Enter') {
        e.preventDefault();
        demo.click();
      }
    });

    // Scroll spy
    const sections = document.querySelectorAll('[id]');
    const navLinks = document.querySelectorAll('.sidebar-nav a');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          navLinks.forEach(a => {
            a.removeAttribute('data-active');
            if (a.getAttribute('href') === `#${entry.target.id}`) {
              a.setAttribute('data-active', 'true');
            }
          });
        }
      });
    }, { rootMargin: '-20% 0px -70% 0px' });

    sections.forEach(s => observer.observe(s));

    // Copy code
    function copyCode(btn) {
      const pre = btn.closest('.code-wrap').querySelector('pre');
      navigator.clipboard.writeText(pre.innerText).then(() => {
        btn.textContent = 'Copied!';
        setTimeout(() => btn.textContent = 'Copy', 1800);
      });
    }
  </script>

</body>
</html>