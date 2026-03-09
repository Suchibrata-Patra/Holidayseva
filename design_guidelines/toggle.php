<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toggle — Design Guidelines</title>

  <!-- Central design system (colours, layout, typography, components) -->
  <link rel="stylesheet" href="/design-system.css">

  <!-- Toggle component CSS -->
  <link rel="stylesheet" href="/Components/toggle.css">

  <style>
    /* ── Page-specific styles only ───────────────────────
       Everything else lives in design-system.css
    ──────────────────────────────────────────────────── */

    /* Sidebar slot wrappers */
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

    /* Page layout wrapper */
    .layout {
      display: flex;
      padding-top: calc(var(--topbar-h) + var(--subbar-h));
      min-height: 100vh;
    }

    /* Main content column */
    .main {
      flex: 1;
      min-width: 0;
      max-width: 780px;
      padding: 56px 56px 120px 64px;
    }

    /* ── Page hero ──────────────────────────────────── */
    .page-eyebrow {
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: var(--brand);
      margin-bottom: 10px;
    }
    .page-title {
      font-family: var(--font-display);
      font-size: 52px;
      font-weight: 700;
      letter-spacing: -0.025em;
      line-height: 1.06;
      color: var(--text-primary);
      margin-bottom: 18px;
    }
    .page-lead {
      font-size: 18px;
      font-weight: 300;
      color: var(--text-secondary);
      line-height: 1.65;
      max-width: 540px;
    }
    .title-rule {
      border: none;
      border-top: 1px solid var(--border-light);
      margin: 40px 0 48px;
    }

    /* ── Section headings ───────────────────────────── */
    .section { margin-bottom: 56px; }
    .section-title {
      font-family: var(--font-display);
      font-size: 26px;
      font-weight: 700;
      letter-spacing: -0.018em;
      color: var(--text-primary);
      margin-bottom: 14px;
    }
    .subsection-title {
      font-size: 15px;
      font-weight: 600;
      color: var(--text-primary);
      margin: 32px 0 10px;
    }
    .body-text {
      font-size: 15px;
      color: var(--text-secondary);
      line-height: 1.78;
      margin-bottom: 18px;
    }
    .body-text:last-child { margin-bottom: 0; }

    /* ── Anatomy diagram ────────────────────────────── */
    .anatomy-box {
      background: var(--bg-secondary);
      border-radius: var(--r-xl);
      padding: 52px 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 28px 0;
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
      width: 96px;
      height: 96px;
      background: #ffffff;
      border-radius: 50%;
      top: 8px;
      left: 8px;
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
      background: var(--accent);
      flex-shrink: 0;
    }
    .anat-ann-line { width: 48px; height: 1px; background: var(--border); }
    .anat-ann span {
      font-family: var(--font-mono);
      font-size: 11px;
      color: var(--text-tertiary);
      white-space: nowrap;
    }
    .ann-track { top: 50%; right: -140px; transform: translateY(14px); }
    .ann-thumb { top: 38%; left: -140px; flex-direction: row-reverse; }

    /* ── Spec table ─────────────────────────────────── */
    .spec-table {
      border: 1px solid var(--border-light);
      border-radius: var(--r-md);
      overflow: hidden;
      margin: 20px 0;
    }

    /* ── Responsive ─────────────────────────────────── */
    @media (max-width: 1100px) { .toc-sidebar { display: none; } }
    @media (max-width: 860px) {
      .main { padding: 48px 32px 80px; }
      .page-title { font-size: 40px; }
    }
    @media (max-width: 680px) {
      .sidebar { display: none; }
      .main { padding: 36px 20px 80px; }
      .page-title { font-size: 34px; }
    }
  </style>
</head>
<body>

<?php include __DIR__ . '/header.php'; ?>

<div class="layout">

  <aside class="sidebar" id="sidebar">
    <?php include __DIR__ . '/left_sidebar.php'; ?>
  </aside>

  <main class="main">

    <div id="overview">
      <p class="page-eyebrow">Components · Form Controls</p>
      <h1 class="page-title">Toggle</h1>
      <p class="page-lead">A binary switch for enabling or disabling a single option. Communicates state instantly through colour and position.</p>
    </div>

    <hr class="title-rule">

    <!-- Live demo -->
    <div class="demo-stage">
      <span style="font-size:11px;font-weight:600;letter-spacing:0.07em;text-transform:uppercase;color:var(--text-quaternary);">Interactive Demo</span>
      <div class="toggle" id="demoToggle" role="switch" aria-checked="false" tabindex="0" aria-label="Toggle demo">
        <div class="toggle-circle"></div>
      </div>
      <span class="demo-state" id="demoState">State: off</span>
    </div>

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

    <section class="section" id="usage">
      <h2 class="section-title">HTML Usage</h2>
      <p class="body-text">Link the stylesheet in <code>&lt;head&gt;</code> and place the component markup in your template. The script auto-initialises every <code>.toggle</code> element on <code>DOMContentLoaded</code>.</p>

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

    <section class="section" id="javascript">
      <h2 class="section-title">JavaScript API</h2>
      <p class="body-text"><code>ToggleSwitch</code> is defined in <code>toggle.js</code> and auto-initialises on page load. Three methods are available for programmatic control.</p>

      <table class="api-table">
        <thead><tr><th>Method</th><th>Arguments</th><th>Description</th></tr></thead>
        <tbody>
          <tr><td>getState(el)</td><td>HTMLElement</td><td>Returns <code>"on"</code> or <code>"off"</code>.</td></tr>
          <tr><td>setState(el, state)</td><td>HTMLElement, <code>"on"</code> | <code>"off"</code></td><td>Sets the state without firing a click event.</td></tr>
          <tr><td>toggle(el)</td><td>HTMLElement</td><td>Flips the current state.</td></tr>
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

    <section class="section" id="integration">
      <h2 class="section-title">Integration</h2>
      <p class="body-text">Include <code>toggle.js</code> once before <code>&lt;/body&gt;</code>. It auto-initialises every <code>.toggle</code> on the page.</p>
      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="t">&lt;script</span> <span class="a">src</span>=<span class="s">"/JS/toggle.js"</span><span class="t">&gt;&lt;/script&gt;</span></code></pre>
      </div>
      <p class="subsection-title">File structure</p>
      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">Directory</span></div>
        <pre><code>design_guidelines/
├── header.php
├── left_sidebar.php
├── right_sidebar.php
├── toggle.php
├── design-system.css
├── Components/
│   └── toggle.css
└── JS/
    └── toggle.js</code></pre>
      </div>
    </section>

    <hr class="rule">

    <section class="section" id="accessibility">
      <h2 class="section-title">Accessibility</h2>
      <p class="body-text">The toggle is a custom control — ARIA attributes must be set explicitly. The script keeps them in sync on every state change.</p>
      <table class="api-table">
        <thead><tr><th>Attribute</th><th>Value</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td>role</td><td><code>"switch"</code></td><td>Identifies the control as a binary switch to screen readers.</td></tr>
          <tr><td>aria-checked</td><td><code>"true"</code> / <code>"false"</code></td><td>Updated by JS on every change. Set the initial value in markup.</td></tr>
          <tr><td>tabindex</td><td><code>"0"</code></td><td>Makes the element reachable via keyboard navigation.</td></tr>
          <tr><td>aria-label</td><td>Descriptive string</td><td>Describes what the toggle controls. e.g. <code>"Enable dark mode"</code>.</td></tr>
        </tbody>
      </table>
    </section>

  </main>

  <aside class="toc-sidebar" id="toc">
    <?php include __DIR__ . '/right_sidebar.php'; ?>
  </aside>

</div>

<footer class="footer">
  <span class="footer-text">Holidayseva Design Guidelines · Toggle</span>
  <span class="footer-text">v1.0</span>
</footer>

<script src="/JS/toggle.js"></script>
<script>
  document.getElementById('demoToggle').addEventListener('toggle-change', (e) => {
    const el = document.getElementById('demoState');
    el.textContent = 'State: ' + e.detail.state;
    el.className = 'demo-state' + (e.detail.isActive ? ' on' : '');
  });

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