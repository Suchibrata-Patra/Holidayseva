<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toggle — Design Guidelines</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/design_guidelines/Components/toggle.css">
  <style>
    /* ─── Reset ──────────────────────────────────── */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    /* ─── Tokens ─────────────────────────────────── */
    :root {
      --white:       #ffffff;
      --off-white:   #f5f5f7;
      --rule:        #d2d2d7;
      --rule-light:  #e8e8ed;
      --ink:         #1d1d1f;
      --ink-2:       #424245;
      --ink-3:       #6e6e73;
      --ink-4:       #aeaeb2;
      --blue:        #0066cc;
      --red:         #ff385c;
      --red-bg:      #fff2f4;
      --mono: 'SF Mono', 'Fira Code', ui-monospace, monospace;
      --sans: 'SF Pro Text', 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      --display: 'SF Pro Display', 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    }

    html { scroll-behavior: smooth; font-size: 16px; }

    body {
      font-family: var(--sans);
      background: var(--white);
      color: var(--ink);
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    /* ─── Top bar ────────────────────────────────── */
    .topbar {
      position: fixed; top: 0; left: 0; right: 0; z-index: 200;
      height: 52px;
      background: rgba(255,255,255,0.92);
      backdrop-filter: blur(20px) saturate(180%);
      -webkit-backdrop-filter: blur(20px) saturate(180%);
      border-bottom: 1px solid var(--rule-light);
      display: flex; align-items: center;
      padding: 0 22px;
      gap: 6px;
    }
    .topbar-crumb {
      font-size: 12px;
      color: var(--ink-3);
      text-decoration: none;
      font-weight: 400;
    }
    .topbar-crumb:hover { color: var(--blue); }
    .topbar-sep {
      font-size: 12px;
      color: var(--ink-4);
      margin: 0 2px;
    }
    .topbar-current {
      font-size: 12px;
      color: var(--ink);
      font-weight: 500;
    }

    /* ─── Layout ─────────────────────────────────── */
    .layout {
      display: flex;
      padding-top: 52px;
      min-height: 100vh;
    }

    /* ─── Sidebar ────────────────────────────────── */
    .sidebar {
      width: 240px;
      flex-shrink: 0;
      position: sticky;
      top: 52px;
      height: calc(100vh - 52px);
      overflow-y: auto;
      padding: 36px 0 40px;
      border-right: 1px solid var(--rule-light);
    }
    .sidebar::-webkit-scrollbar { width: 0; }

    .sb-section { margin-bottom: 28px; padding: 0 20px; }

    .sb-heading {
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: var(--ink-4);
      margin-bottom: 10px;
      padding: 0 8px;
    }

    .sb-section ul { list-style: none; }

    .sb-section ul li a {
      display: block;
      font-size: 13px;
      font-weight: 400;
      color: var(--ink-2);
      text-decoration: none;
      padding: 5px 8px;
      border-radius: 6px;
      transition: background 0.12s, color 0.12s;
      line-height: 1.4;
    }
    .sb-section ul li a:hover {
      background: var(--off-white);
      color: var(--ink);
    }
    .sb-section ul li a[data-active] {
      color: var(--blue);
      font-weight: 500;
      background: #e8f0fb;
    }

    /* ─── Main content ───────────────────────────── */
    .main {
      flex: 1;
      min-width: 0;
      max-width: 780px;
      padding: 64px 56px 120px 64px;
    }

    /* ─── Page title block ───────────────────────── */
    .page-eyebrow {
      font-size: 12px;
      font-weight: 500;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      color: var(--ink-3);
      margin-bottom: 12px;
    }

    .page-title {
      font-family: var(--display);
      font-size: 56px;
      font-weight: 700;
      letter-spacing: -0.025em;
      line-height: 1.04;
      color: var(--ink);
      margin-bottom: 20px;
    }

    .page-lead {
      font-size: 19px;
      font-weight: 300;
      color: var(--ink-2);
      line-height: 1.6;
      max-width: 560px;
      margin-bottom: 0;
    }

    .title-rule {
      border: none;
      border-top: 1px solid var(--rule-light);
      margin: 40px 0 52px;
    }

    /* ─── Section titles ─────────────────────────── */
    .section { margin-bottom: 60px; }

    .section-title {
      font-family: var(--display);
      font-size: 28px;
      font-weight: 700;
      letter-spacing: -0.015em;
      color: var(--ink);
      margin-bottom: 16px;
    }

    .subsection-title {
      font-size: 17px;
      font-weight: 600;
      color: var(--ink);
      margin: 36px 0 12px;
    }

    .body-text {
      font-size: 15px;
      font-weight: 400;
      color: var(--ink-2);
      line-height: 1.75;
      margin-bottom: 20px;
    }
    .body-text:last-child { margin-bottom: 0; }

    /* inline code */
    code {
      font-family: var(--mono);
      font-size: 12.5px;
      background: var(--off-white);
      border: 1px solid var(--rule-light);
      border-radius: 4px;
      padding: 1px 5px;
      color: var(--ink);
    }

    /* ─── Demo stage ─────────────────────────────── */
    .demo-stage {
      background: var(--off-white);
      border-radius: 18px;
      padding: 60px 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 20px;
      margin: 36px 0 52px;
    }
    .demo-label {
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.07em;
      text-transform: uppercase;
      color: var(--ink-4);
    }
    .demo-state {
      font-size: 13px;
      color: var(--ink-4);
      transition: color 0.25s;
    }
    .demo-state.on { color: var(--red); font-weight: 500; }

    /* .toggle and .toggle-circle styles come from toggle.css */

    /* ─── Anatomy diagram ────────────────────────── */
    .anatomy-box {
      background: var(--off-white);
      border-radius: 18px;
      padding: 52px 72px;
      display: flex;
      justify-content: center;
      margin: 24px 0 36px;
      position: relative;
      overflow: visible;
    }
    .anat-toggle {
      position: relative;
      width: 200px; height: 114px;
      background: #d1d1d6;
      border-radius: 57px;
    }
    .anat-circle {
      position: absolute;
      width: 96px; height: 96px;
      background: #fff;
      border-radius: 50%;
      top: 9px; left: 9px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.12);
    }
    .anat-ann {
      position: absolute;
      display: flex;
      align-items: center;
      gap: 6px;
      font-family: var(--mono);
      font-size: 11px;
      color: var(--ink-3);
      white-space: nowrap;
    }
    .anat-ann-dot { width: 4px; height: 4px; border-radius: 50%; background: var(--ink-3); flex-shrink: 0; }
    .anat-ann-line { height: 1px; background: var(--rule); }
    .ann-track { right: -196px; top: 50%; transform: translateY(6px); }
    .ann-track .anat-ann-line { width: 44px; }
    .ann-thumb { left: -188px; top: 36%; flex-direction: row-reverse; }
    .ann-thumb .anat-ann-line { width: 44px; }

    /* ─── Spec table ─────────────────────────────── */
    .spec-table {
      width: 100%;
      border-top: 1px solid var(--rule-light);
      font-size: 14px;
      margin: 24px 0;
    }
    .spec-row {
      display: grid;
      grid-template-columns: 200px 1fr;
      border-bottom: 1px solid var(--rule-light);
      padding: 14px 0;
    }
    .spec-key {
      font-weight: 500;
      color: var(--ink);
      font-size: 13.5px;
    }
    .spec-val {
      font-family: var(--mono);
      font-size: 12.5px;
      color: var(--ink-2);
    }

    /* ─── Code blocks ────────────────────────────── */
    .code-block {
      margin: 20px 0;
      border-radius: 12px;
      overflow: hidden;
      border: 1px solid var(--rule-light);
    }
    .code-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 9px 16px;
      background: var(--off-white);
      border-bottom: 1px solid var(--rule-light);
    }
    .code-lang-tag {
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: var(--ink-4);
    }
    .copy-btn {
      font-size: 11px;
      font-weight: 500;
      color: var(--ink-3);
      background: none;
      border: none;
      cursor: pointer;
      font-family: var(--sans);
      padding: 2px 6px;
      border-radius: 4px;
      transition: background 0.12s, color 0.12s;
    }
    .copy-btn:hover { background: var(--rule-light); color: var(--ink); }
    pre {
      background: var(--off-white);
      margin: 0;
      padding: 18px 20px;
      overflow-x: auto;
      font-family: var(--mono);
      font-size: 12.5px;
      line-height: 1.7;
      color: var(--ink);
    }
    /* syntax */
    .k { color: #c0185e; }
    .s { color: #1a7e41; }
    .c { color: var(--ink-4); font-style: italic; }
    .t { color: #c0185e; }
    .a { color: #b85000; }
    .v { color: #1a7e41; }

    /* ─── API table ──────────────────────────────── */
    .api-table {
      width: 100%;
      border-collapse: collapse;
      font-size: 13.5px;
      margin: 20px 0;
    }
    .api-table thead th {
      text-align: left;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.07em;
      text-transform: uppercase;
      color: var(--ink-4);
      padding: 0 12px 12px 0;
      border-bottom: 1px solid var(--rule);
    }
    .api-table tbody td {
      padding: 12px 12px 12px 0;
      border-bottom: 1px solid var(--rule-light);
      vertical-align: top;
      color: var(--ink-2);
      line-height: 1.55;
    }
    .api-table tbody td:first-child {
      font-family: var(--mono);
      font-size: 12px;
      color: var(--ink);
      white-space: nowrap;
    }

    /* ─── Note callout ───────────────────────────── */
    .note {
      display: flex;
      gap: 12px;
      background: var(--off-white);
      border-left: 3px solid var(--blue);
      border-radius: 0 8px 8px 0;
      padding: 14px 18px;
      margin: 20px 0;
    }
    .note.warn { border-left-color: var(--red); }
    .note p {
      font-size: 13.5px;
      color: var(--ink-2);
      line-height: 1.6;
      margin: 0;
    }

    /* ─── Section divider ────────────────────────── */
    .rule { border: none; border-top: 1px solid var(--rule-light); margin: 60px 0; }

    /* ─── Footer ─────────────────────────────────── */
    .footer {
      border-top: 1px solid var(--rule-light);
      padding: 32px 64px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .footer-text { font-size: 12px; color: var(--ink-4); }

    /* ─── Responsive ─────────────────────────────── */
    @media (max-width: 860px) {
      .main { padding: 48px 32px 80px; }
      .page-title { font-size: 42px; }
    }
    @media (max-width: 680px) {
      .sidebar { display: none; }
      .main { padding: 40px 24px 80px; }
      .page-title { font-size: 36px; }
    }
  </style>
</head>
<body>

<!-- Top breadcrumb bar -->
<header class="topbar">
  <a class="topbar-crumb" href="#">Design Guidelines</a>
  <span class="topbar-sep">›</span>
  <a class="topbar-crumb" href="#">Components</a>
  <span class="topbar-sep">›</span>
  <span class="topbar-current">Toggle</span>
</header>

<div class="layout">

  <!-- Sidebar -->
  <aside class="sidebar" id="sidebar">
    <?php include __DIR__ . '/sidebar.php'; ?>
  </aside>

  <!-- Main -->
  <main class="main">

    <!-- Hero -->
    <div id="overview">
      <p class="page-eyebrow">Components · Form Controls</p>
      <h1 class="page-title">Toggle</h1>
      <p class="page-lead">A binary switch for enabling or disabling a single option. Communicates state instantly through colour and position.</p>
    </div>

    <hr class="title-rule">

    <!-- Live demo -->
    <div class="demo-stage">
      <span class="demo-label">Interactive Demo</span>
      <div class="toggle" id="demoToggle" role="switch" aria-checked="false" tabindex="0" aria-label="Toggle demo">
        <div class="toggle-circle"></div>
      </div>
      <span class="demo-state" id="demoState">State: off</span>
    </div>

    <!-- Anatomy -->
    <section class="section" id="anatomy">
      <h2 class="section-title">Anatomy</h2>
      <p class="body-text">The component has two elements. The <strong>track</strong> is the pill-shaped container — its colour indicates state. The <strong>thumb</strong> is the white circle that slides within the track.</p>

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
      <p class="body-text">Default dimensions. A responsive breakpoint at 480px scales the component down proportionally.</p>

      <div class="spec-table">
        <div class="spec-row"><span class="spec-key">Width</span><span class="spec-val">280px</span></div>
        <div class="spec-row"><span class="spec-key">Height</span><span class="spec-val">160px</span></div>
        <div class="spec-row"><span class="spec-key">Border radius</span><span class="spec-val">80px</span></div>
        <div class="spec-row"><span class="spec-key">Thumb diameter</span><span class="spec-val">140px</span></div>
        <div class="spec-row"><span class="spec-key">Thumb inset</span><span class="spec-val">10px</span></div>
        <div class="spec-row"><span class="spec-key">Transition</span><span class="spec-val">0.36s cubic-bezier(0.4, 0, 0.2, 1)</span></div>
        <div class="spec-row"><span class="spec-key">Off colour</span><span class="spec-val">#D1D1D6</span></div>
        <div class="spec-row"><span class="spec-key">Active colour</span><span class="spec-val">#FF385C</span></div>
        <div class="spec-row"><span class="spec-key">Thumb colour</span><span class="spec-val">#FFFFFF</span></div>
      </div>
    </section>

    <hr class="rule">

    <!-- HTML Usage -->
    <section class="section" id="usage">
      <h2 class="section-title">HTML Usage</h2>
      <p class="body-text">Link the stylesheet in <code>&lt;head&gt;</code> and place the component markup in your template. The script auto-initialises every <code>.toggle</code> element on <code>DOMContentLoaded</code>.</p>

      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="c">&lt;!-- In &lt;head&gt; --&gt;</span>
<span class="t">&lt;link</span> <span class="a">rel</span>=<span class="s">"stylesheet"</span> <span class="a">href</span>=<span class="s">"/design_guidelines/Components/toggle.css"</span><span class="t">&gt;</span>

<span class="c">&lt;!-- Component --&gt;</span>
<span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"toggle"</span>
     <span class="a">role</span>=<span class="s">"switch"</span>
     <span class="a">aria-checked</span>=<span class="s">"false"</span>
     <span class="a">tabindex</span>=<span class="s">"0"</span>
     <span class="a">aria-label</span>=<span class="s">"Enable notifications"</span><span class="t">&gt;</span>
  <span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"toggle-circle"</span><span class="t">&gt;&lt;/div&gt;</span>
<span class="t">&lt;/div&gt;</span>

<span class="c">&lt;!-- Before &lt;/body&gt; --&gt;</span>
<span class="t">&lt;script</span> <span class="a">src</span>=<span class="s">"/design_guidelines/JS/components.js"</span><span class="t">&gt;&lt;/script&gt;</span></code></pre>
      </div>

      <p class="subsection-title">Pre-active state</p>
      <p class="body-text">Add the <code>active</code> class to start in the on state.</p>

      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"toggle active"</span>
     <span class="a">role</span>=<span class="s">"switch"</span>
     <span class="a">aria-checked</span>=<span class="s">"true"</span>
     <span class="a">tabindex</span>=<span class="s">"0"</span><span class="t">&gt;</span>
  <span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"toggle-circle"</span><span class="t">&gt;&lt;/div&gt;</span>
<span class="t">&lt;/div&gt;</span></code></pre>
      </div>

      <div class="note warn">
        <p>Always include <code>role="switch"</code>, <code>aria-checked</code>, <code>tabindex="0"</code>, and a descriptive <code>aria-label</code>. The script keeps <code>aria-checked</code> in sync automatically.</p>
      </div>
    </section>

    <hr class="rule">

    <!-- JavaScript API -->
    <section class="section" id="javascript">
      <h2 class="section-title">JavaScript API</h2>
      <p class="body-text"><code>ToggleSwitch</code> is defined in <code>toggle.js</code> and auto-initialises on page load. Three methods are available for programmatic control.</p>

      <table class="api-table">
        <thead>
          <tr>
            <th>Method</th>
            <th>Arguments</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>getState(el)</td>
            <td>HTMLElement</td>
            <td>Returns <code>"on"</code> or <code>"off"</code>.</td>
          </tr>
          <tr>
            <td>setState(el, state)</td>
            <td>HTMLElement, <code>"on"</code> | <code>"off"</code></td>
            <td>Sets the state without firing a click event.</td>
          </tr>
          <tr>
            <td>toggle(el)</td>
            <td>HTMLElement</td>
            <td>Flips the current state.</td>
          </tr>
        </tbody>
      </table>

      <p class="subsection-title">Listening for changes</p>

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
        <pre><code><span class="k">const</span> sw = <span class="k">new</span> ToggleSwitch(<span class="s">'.toggle'</span>);
<span class="k">const</span> el = document.<span class="k">querySelector</span>(<span class="s">'#myToggle'</span>);

sw.setState(el, <span class="s">'on'</span>);   <span class="c">// force on</span>
sw.setState(el, <span class="s">'off'</span>);  <span class="c">// force off</span>
sw.toggle(el);            <span class="c">// flip</span>
sw.getState(el);          <span class="c">// "on" | "off"</span></code></pre>
      </div>

      <div class="note">
        <p><code>setState()</code> and <code>toggle()</code> do not fire <code>toggle-change</code>. Only user-initiated clicks dispatch the event.</p>
      </div>
    </section>

    <hr class="rule">

    <!-- Integration -->
    <section class="section" id="integration">
      <h2 class="section-title">Integration</h2>
      <p class="body-text"><code>components.js</code> is the single entry point for all design system scripts. Include it once per page — it imports every component automatically.</p>

      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">components.js</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="k">import</span> <span class="s">'./toggle.js'</span>;
<span class="c">// import './modal.js';</span>
<span class="c">// import './tooltip.js';</span></code></pre>
      </div>

      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="t">&lt;script</span> <span class="a">type</span>=<span class="s">"module"</span>
        <span class="a">src</span>=<span class="s">"/design_guidelines/JS/components.js"</span><span class="t">&gt;&lt;/script&gt;</span></code></pre>
      </div>

      <p class="subsection-title">File structure</p>
      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">Directory</span></div>
        <pre><code>design_guidelines/
├── toggle.php
├── sidebar.php
├── Components/
│   └── toggle.css
└── JS/
    ├── components.js
    └── toggle.js</code></pre>
      </div>
    </section>

    <hr class="rule">

    <!-- Accessibility -->
    <section class="section" id="accessibility">
      <h2 class="section-title">Accessibility</h2>
      <p class="body-text">The toggle is a custom control — ARIA attributes must be set explicitly. The script keeps them in sync on every state change.</p>

      <table class="api-table">
        <thead>
          <tr><th>Attribute</th><th>Value</th><th>Notes</th></tr>
        </thead>
        <tbody>
          <tr><td>role</td><td><code>"switch"</code></td><td>Identifies the control as a binary switch to screen readers.</td></tr>
          <tr><td>aria-checked</td><td><code>"true"</code> / <code>"false"</code></td><td>Updated by JS on every change. Set the initial value in markup.</td></tr>
          <tr><td>tabindex</td><td><code>"0"</code></td><td>Makes the element reachable via keyboard navigation.</td></tr>
          <tr><td>aria-label</td><td>Descriptive string</td><td>Describes what the toggle controls. e.g. <code>"Enable dark mode"</code>.</td></tr>
        </tbody>
      </table>
    </section>

  </main>
</div>

<footer class="footer">
  <span class="footer-text">Design Guidelines · Toggle</span>
  <span class="footer-text">v1.0</span>
</footer>

<script src="/design_guidelines/JS/components.js"></script>
<script>
  // Update the state label in the demo when the toggle fires its event
  document.getElementById('demoToggle').addEventListener('toggle-change', (e) => {
    const stateEl = document.getElementById('demoState');
    stateEl.textContent = 'State: ' + e.detail.state;
    stateEl.className = 'demo-state' + (e.detail.isActive ? ' on' : '');
  });

  // Scroll spy
  const targets  = document.querySelectorAll('section[id], div[id]');
  const links    = document.querySelectorAll('.sb-section ul li a');
  const spy = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        links.forEach(a => {
          delete a.dataset.active;
          if (a.getAttribute('href') === '#' + entry.target.id) a.dataset.active = '';
        });
      }
    });
  }, { rootMargin: '-15% 0px -75% 0px' });
  targets.forEach(t => spy.observe(t));

  // Copy
  function copyCode(btn) {
    const text = btn.closest('.code-block').querySelector('pre').innerText;
    navigator.clipboard.writeText(text).then(() => {
      btn.textContent = 'Copied';
      setTimeout(() => btn.textContent = 'Copy', 1800);
    });
  }
</script>

</body>
</html>