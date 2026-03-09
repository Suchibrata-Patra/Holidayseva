<?php
/**
 * sidebar.php
 * Include inside toggle.php:  <?php include __DIR__ . '/sidebar.php'; ?>
 * Both files must live in the same folder: design_guidelines/
 */
?>
<p class="sidebar-section-label">On This Page</p>
<ul class="sidebar-nav">
  <li><a href="#overview">Overview</a></li>
  <li><a href="#anatomy">Anatomy</a></li>
  <li><a href="#specs">Specifications</a></li>
  <li><a href="#usage">HTML Usage</a></li>
  <li><a href="#javascript">JavaScript API</a></li>
  <li><a href="#integration">Integration</a></li>
  <li><a href="#accessibility">Accessibility</a></li>
</ul>

<p class="sidebar-section-label">Developer Guide</p>

<div class="dev-guide">

  <div class="guide-item" id="guide-html">
    <button class="guide-toggle" onclick="toggleGuide('guide-html')" aria-expanded="false">
      <span class="guide-icon">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><rect x="1" y="2" width="12" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M4 6l2 2-2 2M8 10h2" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </span>
      HTML Implementation
      <svg class="guide-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M3 4.5l3 3 3-3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </button>
    <div class="guide-body" hidden>
      <div class="guide-content">
        <p class="guide-text">Place the two-element markup wherever the toggle is needed. The outer <code class="g-code">.toggle</code> div is the track; the inner <code class="g-code">.toggle-circle</code> div is the thumb.</p>
        <div class="guide-code-block"><pre><code>&lt;div class="toggle"
     role="switch"
     aria-checked="false"
     tabindex="0"
     aria-label="Enable feature"&gt;
  &lt;div class="toggle-circle"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre></div>
        <p class="guide-text">Add the <code class="g-code">active</code> class to start in the <em>on</em> state:</p>
        <div class="guide-code-block"><pre><code>&lt;div class="toggle active"
     role="switch"
     aria-checked="true"
     tabindex="0"&gt;
  &lt;div class="toggle-circle"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre></div>
        <p class="guide-tip"><strong>Tip:</strong> Link <code class="g-code">toggle.css</code> once in <code class="g-code">&lt;head&gt;</code> — it covers all instances on the page.</p>
      </div>
    </div>
  </div>

  <div class="guide-item" id="guide-state">
    <button class="guide-toggle" onclick="toggleGuide('guide-state')" aria-expanded="false">
      <span class="guide-icon">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="5.5" stroke="currentColor" stroke-width="1.2"/><path d="M5 7l1.5 1.5L9 5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </span>
      JavaScript State
      <svg class="guide-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M3 4.5l3 3 3-3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </button>
    <div class="guide-body" hidden>
      <div class="guide-content">
        <p class="guide-text">State lives in two places: <code class="g-code">element.classList</code> (drives CSS) and <code class="g-code">element.dataset.state</code> (<code class="g-code">"on"</code> or <code class="g-code">"off"</code>). A <code class="g-code">toggle-change</code> CustomEvent fires on every click:</p>
        <div class="guide-code-block"><pre><code>el.addEventListener('toggle-change', (e) =&gt; {
  console.log(e.detail.state);    // "on"|"off"
  console.log(e.detail.isActive); // true|false
});</code></pre></div>
        <p class="guide-tip"><strong>Note:</strong> <code class="g-code">setState()</code> and <code class="g-code">toggle()</code> do <em>not</em> fire the event — only user clicks do.</p>
      </div>
    </div>
  </div>

  <div class="guide-item" id="guide-js">
    <button class="guide-toggle" onclick="toggleGuide('guide-js')" aria-expanded="false">
      <span class="guide-icon">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><rect x="1.5" y="1.5" width="11" height="11" rx="2" stroke="currentColor" stroke-width="1.2"/><path d="M5 5v4M9 5c0 0 1 0 1 1.5S9 9 9 9" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>
      </span>
      Using toggle.js
      <svg class="guide-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M3 4.5l3 3 3-3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </button>
    <div class="guide-body" hidden>
      <div class="guide-content">
        <p class="guide-text"><code class="g-code">toggle.js</code> auto-initialises all <code class="g-code">.toggle</code> elements on <code class="g-code">DOMContentLoaded</code>. For programmatic control:</p>
        <div class="guide-code-block"><pre><code>const sw = new ToggleSwitch('.toggle');
const el = document.querySelector('#myToggle');

sw.getState(el);       // "on"|"off"
sw.setState(el, 'on'); // force on
sw.toggle(el);         // flip</code></pre></div>
        <p class="guide-tip"><strong>Note:</strong> Avoid instantiating the same selector twice — it binds duplicate listeners.</p>
      </div>
    </div>
  </div>

  <div class="guide-item" id="guide-components">
    <button class="guide-toggle" onclick="toggleGuide('guide-components')" aria-expanded="false">
      <span class="guide-icon">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M7 1.5L12.5 4.5V9.5L7 12.5L1.5 9.5V4.5L7 1.5Z" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/><path d="M7 1.5V12.5M1.5 4.5L12.5 4.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>
      </span>
      components.js
      <svg class="guide-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M3 4.5l3 3 3-3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </button>
    <div class="guide-body" hidden>
      <div class="guide-content">
        <p class="guide-text">One script tag per page. <code class="g-code">components.js</code> imports all components:</p>
        <div class="guide-code-block"><pre><code>import './toggle.js';
// import './modal.js';</code></pre></div>
        <div class="guide-code-block"><pre><code>&lt;script type="module"
  src="/design_guidelines/JS/components.js"&gt;
&lt;/script&gt;</code></pre></div>
        <p class="guide-tip"><strong>Adding components:</strong> Create the class file, then add one <code class="g-code">import</code> line to <code class="g-code">components.js</code>.</p>
      </div>
    </div>
  </div>

</div>

<style>
  .dev-guide { padding: 0 16px; }
  .guide-item { border-bottom: 1px solid var(--border-faint); }
  .guide-item:first-child { border-top: 1px solid var(--border-faint); }
  .guide-toggle { width:100%; display:flex; align-items:center; gap:8px; padding:11px 8px; background:none; border:none; cursor:pointer; font-family:var(--font-sans); font-size:13px; font-weight:500; color:var(--text-secondary); text-align:left; transition:color var(--transition); -webkit-font-smoothing:antialiased; }
  .guide-toggle:hover { color: var(--text-primary); }
  .guide-toggle[aria-expanded="true"] { color: var(--accent); }
  .guide-icon { width:22px; height:22px; display:flex; align-items:center; justify-content:center; background:var(--surface); border:1px solid var(--border-faint); border-radius:6px; flex-shrink:0; color:inherit; }
  .guide-chevron { margin-left:auto; flex-shrink:0; color:var(--text-tertiary); transition:transform 0.2s ease; }
  .guide-toggle[aria-expanded="true"] .guide-chevron { transform:rotate(180deg); }
  .guide-body:not([hidden]) { display:block; }
  .guide-content { padding:4px 8px 16px; }
  .guide-text { font-size:12.5px; color:var(--text-secondary); line-height:1.65; margin-bottom:10px; }
  .guide-code-block { background:var(--code-bg); border:1px solid var(--border-faint); border-radius:8px; overflow:hidden; margin:10px 0; }
  .guide-code-block pre { padding:12px 14px; margin:0; overflow-x:auto; background:transparent; }
  .guide-code-block code { font-family:var(--font-mono); font-size:11.5px; line-height:1.65; color:var(--text-primary); }
  .g-code { background:var(--surface); border:1px solid var(--border-faint); padding:1px 5px; border-radius:4px; font-family:var(--font-mono); font-size:11.5px; color:var(--text-primary); }
  .guide-tip { font-size:12px; color:#9b1a30; background:var(--accent-soft); border:1px solid rgba(255,56,92,0.15); border-radius:8px; padding:10px 12px; line-height:1.6; margin-top:12px; }
</style>

<script>
  function toggleGuide(id) {
    const item = document.getElementById(id);
    if (!item) return;
    const btn = item.querySelector('.guide-toggle');
    const body = item.querySelector('.guide-body');
    const open = btn.getAttribute('aria-expanded') === 'true';
    document.querySelectorAll('.guide-item').forEach(other => {
      if (other.id !== id) {
        other.querySelector('.guide-toggle').setAttribute('aria-expanded', 'false');
        other.querySelector('.guide-body').setAttribute('hidden', '');
      }
    });
    btn.setAttribute('aria-expanded', String(!open));
    if (open) { body.setAttribute('hidden', ''); } else { body.removeAttribute('hidden'); }
  }
</script>