<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toggle | Design Guidelines</title>

  <!-- Design system: layout, typography, components -->
  <link rel="stylesheet" href="/design-system.css">
<!-- No <base> tag at all -->
<link rel="stylesheet" href="https://holidayseva.com/UI/Components/toggle/toggle.css">
<script type="module" src="https://holidayseva.com/UI/Components/toggle/toggle.js"></script>
</head>
<body>


<div class="page-layout">

<?php
$partials = __DIR__ . '/../../';
?>

<?php include $partials . 'header.php'; ?>
<?php include $partials . 'drawer_sidebar.php'; ?>

<div class="page-layout">

  <!-- ── Left sidebar (untouched) ── -->
  <aside class="sidebar-left" style="z-index:10000;">
    <?php include $partials . 'left_sidebar.php'; ?>
  </aside>


  <!-- ── Main content ──────────────────────── -->
  <main class="page-main">

    <!-- Hero -->
    <div id="overview">
      <p class="page-eyebrow">Components · Form Controls</p>
      <h1 class="page-title">Toggle</h1>
      <p class="page-lead">A binary switch for enabling or disabling a single option. Communicates state instantly through colour and position.</p>
    </div>

    <hr class="rule">

    <!-- ── Live demo ─────────────────────────
         .toggle and .toggle-circle are styled
         entirely by toggle.css — no inline CSS
    ──────────────────────────────────────── -->
    <div class="demo-stage">
      <span class="demo-label">Interactive demo — click to toggle</span>

      <div class="toggle active"
           id="demoToggle"
           role="switch"
           aria-checked="true"
           tabindex="0"
           aria-label="Demo toggle switch">
        <div class="toggle-circle"></div>
      </div>

      <span class="demo-state on" id="demoState">state: on</span>
    </div>

    <!-- ── Anatomy ────────────────────────── -->
    <section id="anatomy">
      <h2 class="section-title">Anatomy</h2>
      <p class="body-text">
        The component has two elements. The <strong>track</strong> (<code>.toggle</code>) is the
        pill-shaped container whose background colour reflects state. The <strong>thumb</strong>
        (<code>.toggle-circle</code>) is the white circle that slides inside the track.
      </p>

      <div class="anatomy-stage">
        <div class="anat-toggle">
          <div class="anat-circle"></div>
          <!-- Annotation: track -->
          <div class="anat-ann ann-track">
            <div class="anat-ann-dot"></div>
            <div class="anat-ann-line"></div>
            <span>.toggle</span>
          </div>
          <!-- Annotation: thumb -->
          <div class="anat-ann ann-thumb">
            <div class="anat-ann-dot"></div>
            <div class="anat-ann-line"></div>
            <span>.toggle-circle</span>
          </div>
        </div>
      </div>
    </section>

    <hr class="rule">

    <!-- ── Specifications ────────────────── -->
    <section id="specs">
      <h2 class="section-title">Specifications</h2>
      <p class="body-text">
        Default (desktop) dimensions as defined in <code>toggle.css</code>.
        A responsive breakpoint at 480 px scales the component proportionally.
      </p>

      <div class="spec-table">
        <div class="spec-row">
          <span class="spec-key">Width</span>
          <span class="spec-val">280px</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">Height</span>
          <span class="spec-val">160px</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">Border radius</span>
          <span class="spec-val">80px</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">Thumb diameter</span>
          <span class="spec-val">140px</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">Thumb inset</span>
          <span class="spec-val">10px (all sides)</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">Thumb travel</span>
          <span class="spec-val">left: 10px → left: 130px</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">Easing</span>
          <span class="spec-val">cubic-bezier(0.4, 0, 0.2, 1) — 0.4s</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">Off colour</span>
          <span class="spec-val">
            <span class="spec-swatch" style="background:#DDDDDD"></span>#DDDDDD
          </span>
        </div>
        <div class="spec-row">
          <span class="spec-key">Active colour</span>
          <span class="spec-val">
            <span class="spec-swatch" style="background:#FF385C"></span>#FF385C
          </span>
        </div>
        <div class="spec-row">
          <span class="spec-key">Thumb colour</span>
          <span class="spec-val">
            <span class="spec-swatch" style="background:#fff;border-color:#ccc"></span>#ffffff
          </span>
        </div>
      </div>
    </section>

    <hr class="rule">

    <!-- ── HTML Usage ─────────────────────── -->
    <section id="usage">
      <h2 class="section-title">HTML Usage</h2>
      <p class="body-text">
        Link <code>toggle.css</code> in <code>&lt;head&gt;</code> and place the two-element
        markup anywhere in your template. <code>toggle.js</code> auto-initialises every
        <code>.toggle</code> on <code>DOMContentLoaded</code> — no manual wiring needed.
      </p>

      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">HTML</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
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

      <p class="subsection-title">Pre-active state</p>
      <p class="body-text">
        Add the <code>active</code> class in markup to render the toggle in the on state on
        first paint. Pair it with <code>aria-checked="true"</code>.
      </p>

      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">HTML</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"toggle active"</span>
     <span class="a">role</span>=<span class="s">"switch"</span>
     <span class="a">aria-checked</span>=<span class="s">"true"</span>
     <span class="a">tabindex</span>=<span class="s">"0"</span>
     <span class="a">aria-label</span>=<span class="s">"Notifications enabled"</span><span class="t">&gt;</span>
  <span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"toggle-circle"</span><span class="t">&gt;&lt;/div&gt;</span>
<span class="t">&lt;/div&gt;</span></code></pre>
      </div>

      <div class="note warn">
        <p>Always include <code>role="switch"</code>, <code>aria-checked</code>,
        <code>tabindex="0"</code>, and a descriptive <code>aria-label</code>.
        <code>toggle.js</code> keeps <code>aria-checked</code> in sync automatically
        on every state change.</p>
      </div>
    </section>

    <hr class="rule">

    <!-- ── JavaScript API ─────────────────── -->
    <section id="javascript">
      <h2 class="section-title">JavaScript API</h2>
      <p class="body-text">
        <code>ToggleSwitch</code> is defined in <code>toggle.js</code> and auto-instantiated
        on page load via the <code>'.toggle'</code> selector. Construct a new instance for
        programmatic control.
      </p>

      <table class="api-table">
        <thead>
          <tr>
            <th>Method</th>
            <th>Arguments</th>
            <th>Returns</th>
            <th>Description</th>
          </tr>
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
            <td>Sets state silently — does not fire <code>toggle-change</code>.</td>
          </tr>
          <tr>
            <td>toggle(el)</td>
            <td>HTMLElement</td>
            <td>—</td>
            <td>Flips the current state silently.</td>
          </tr>
        </tbody>
      </table>

      <p class="subsection-title">Listening for state changes</p>
      <p class="body-text">
        Every user click dispatches a <code>toggle-change</code> CustomEvent on the element.
        The <code>detail</code> object exposes a string state and a boolean.
      </p>

      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">JavaScript</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="k">const</span> el = document.<span class="k">querySelector</span>(<span class="s">'.toggle'</span>);

el.<span class="k">addEventListener</span>(<span class="s">'toggle-change'</span>, (e) => {
  console.<span class="k">log</span>(e.detail.state);    <span class="c">// "on" | "off"</span>
  console.<span class="k">log</span>(e.detail.isActive); <span class="c">// true | false</span>
});</code></pre>
      </div>

      <p class="subsection-title">Programmatic control</p>

      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">JavaScript</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="k">const</span> sw = <span class="k">new</span> ToggleSwitch(<span class="s">'.toggle'</span>);
<span class="k">const</span> el = document.<span class="k">querySelector</span>(<span class="s">'#myToggle'</span>);

sw.<span class="k">setState</span>(el, <span class="s">'on'</span>);   <span class="c">// force on  — no event</span>
sw.<span class="k">setState</span>(el, <span class="s">'off'</span>);  <span class="c">// force off — no event</span>
sw.<span class="k">toggle</span>(el);            <span class="c">// flip      — no event</span>
sw.<span class="k">getState</span>(el);          <span class="c">// → "on" | "off"</span></code></pre>
      </div>

      <div class="note">
        <p><code>setState()</code> and <code>toggle()</code> do not fire <code>toggle-change</code>.
        Only user-initiated clicks dispatch the custom event.</p>
      </div>
    </section>

    <hr class="rule">

    <!-- ── Integration ────────────────────── -->
    <section id="integration">
      <h2 class="section-title">Integration</h2>
      <p class="body-text">
        Include <code>toggle.js</code> once before <code>&lt;/body&gt;</code>. It auto-initialises
        all <code>.toggle</code> elements present at load time. Elements added dynamically after
        load require a fresh <code>new ToggleSwitch(selector)</code> call.
      </p>

      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">HTML</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="t">&lt;script</span> <span class="a">src</span>=<span class="s">"/JS/toggle.js"</span><span class="t">&gt;&lt;/script&gt;</span></code></pre>
      </div>

      <p class="subsection-title">File structure</p>

      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">Directory</span>
        </div>
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

    <!-- ── Accessibility ──────────────────── -->
    <section id="accessibility">
      <h2 class="section-title">Accessibility</h2>
      <p class="body-text">
        The toggle is a custom control — ARIA attributes must be set explicitly in markup.
        <code>toggle.js</code> keeps <code>aria-checked</code> synchronised on every state
        transition. The element is keyboard-operable via Space or Enter when focused.
      </p>

      <table class="api-table">
        <thead>
          <tr><th>Attribute</th><th>Value</th><th>Notes</th></tr>
        </thead>
        <tbody>
          <tr>
            <td>role</td>
            <td><code>"switch"</code></td>
            <td>Identifies the element as a binary switch to screen readers.</td>
          </tr>
          <tr>
            <td>aria-checked</td>
            <td><code>"true"</code> / <code>"false"</code></td>
            <td>Kept in sync by <code>toggle.js</code>. Set the initial value in markup.</td>
          </tr>
          <tr>
            <td>tabindex</td>
            <td><code>"0"</code></td>
            <td>Places the element in the natural tab order.</td>
          </tr>
          <tr>
            <td>aria-label</td>
            <td>Descriptive string</td>
            <td>Describes what is toggled, e.g. <code>"Enable dark mode"</code>.</td>
          </tr>
        </tbody>
      </table>

      <p class="subsection-title">Keyboard activation</p>

      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">JavaScript</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code>document.<span class="k">querySelectorAll</span>(<span class="s">'.toggle'</span>).<span class="k">forEach</span>(el => {
  el.<span class="k">addEventListener</span>(<span class="s">'keydown'</span>, e => {
    <span class="k">if</span> (e.key === <span class="s">' '</span> || e.key === <span class="s">'Enter'</span>) {
      e.<span class="k">preventDefault</span>(); el.<span class="k">click</span>();
    }
  });
});</code></pre>
      </div>
    </section>

  </main>

  <!-- ── Right TOC ──────────────────────── -->
  <aside class="sidebar-right">
    <?php include __DIR__ . '/right_sidebar.php'; ?>
  </aside>

</div>

<footer class="footer">
  <span class="footer-text">Holidayseva Design Guidelines · Toggle</span>
  <span class="footer-text">v1.0</span>
</footer>


<script>
  /* Wire demo state badge to the toggle-change event from toggle.js */
  document.getElementById('demoToggle').addEventListener('toggle-change', (e) => {
    const el = document.getElementById('demoState');
    el.textContent = 'state: ' + e.detail.state;
    el.className   = 'demo-state' + (e.detail.isActive ? ' on' : '');
    /* Keep aria-checked in sync */
    document.getElementById('demoToggle').setAttribute('aria-checked', e.detail.isActive);
  });

  /* Keyboard support for all toggles */
  document.querySelectorAll('.toggle').forEach(el => {
    el.addEventListener('keydown', e => {
      if (e.key === ' ' || e.key === 'Enter') { e.preventDefault(); el.click(); }
    });
  });

  /* TOC scroll-spy */
  document.addEventListener('DOMContentLoaded', () => {
    const tocLinks = document.querySelectorAll('.toc-link');
    const sections = document.querySelectorAll('section[id], div[id]');
    const spy = new IntersectionObserver(entries => {
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

  /* Copy code buttons */
  function copyCode(btn) {
    navigator.clipboard.writeText(
      btn.closest('.code-block').querySelector('pre').innerText
    ).then(() => {
      btn.textContent = 'Copied';
      setTimeout(() => btn.textContent = 'Copy', 1800);
    });
  }
</script>
<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>