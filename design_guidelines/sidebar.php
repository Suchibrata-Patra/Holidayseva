<?php
/**
 * sidebar.php
 * ─────────────────────────────────────────────────────────────
 * Sidebar navigation & developer guide for toggle.php.
 * Include this file inside the <aside class="sidebar-slot"> in
 * toggle.php (formerly toggle.html):
 *
 *   <aside class="sidebar-slot">
 *       <?php include 'sidebar.php'; ?>
 *   </aside>
 *
 * The sidebar renders:
 *  1. On-page navigation (scroll-spy handled by toggle.php JS)
 *  2. A collapsible developer guide panel
 */
?>

<!-- ── On-page navigation ──────────────────────────────────── -->
<p class="sidebar-section-label">On This Page</p>
<ul class="sidebar-nav" id="sidebarNav">
  <li><a href="#overview"     data-section="overview">Overview</a></li>
  <li><a href="#anatomy"      data-section="anatomy">Anatomy</a></li>
  <li><a href="#specs"        data-section="specs">Specifications</a></li>
  <li><a href="#usage"        data-section="usage">HTML Usage</a></li>
  <li><a href="#javascript"   data-section="javascript">JavaScript API</a></li>
  <li><a href="#integration"  data-section="integration">Integration</a></li>
  <li><a href="#accessibility" data-section="accessibility">Accessibility</a></li>
</ul>

<!-- ── Developer Guide ────────────────────────────────────── -->
<p class="sidebar-section-label" style="margin-top: 36px;">Developer Guide</p>

<div class="dev-guide">

  <!-- Guide item 1: HTML -->
  <div class="guide-item" id="guide-html">
    <button class="guide-toggle" onclick="toggleGuide('guide-html')" aria-expanded="false">
      <span class="guide-icon">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
          <rect x="1" y="2" width="12" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/>
          <path d="M4 6l2 2-2 2M8 10h2" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </span>
      HTML Implementation
      <svg class="guide-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none">
        <path d="M3 4.5l3 3 3-3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>
    <div class="guide-body" hidden>
      <div class="guide-content">
        <p class="guide-text">Place the two-element markup wherever the toggle is needed. The outer <code class="g-code">.toggle</code> div is the track; the inner <code class="g-code">.toggle-circle</code> div is the thumb.</p>

        <div class="guide-code-block">
<pre><code>&lt;div class="toggle"
     role="switch"
     aria-checked="false"
     tabindex="0"
     aria-label="Enable feature"&gt;
  &lt;div class="toggle-circle"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <p class="guide-text">Add the <code class="g-code">active</code> class to the outer element to render the toggle in the <em>on</em> state on page load:</p>

        <div class="guide-code-block">
<pre><code>&lt;div class="toggle active"
     role="switch"
     aria-checked="true"
     tabindex="0"&gt;
  &lt;div class="toggle-circle"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <p class="guide-tip">
          <strong>Tip:</strong> The stylesheet is included via <code class="g-code">toggle.css</code>. Link it once in <code class="g-code">&lt;head&gt;</code> — it covers all instances on the page.
        </p>
      </div>
    </div>
  </div><!-- /guide-html -->

  <!-- Guide item 2: JS State -->
  <div class="guide-item" id="guide-state">
    <button class="guide-toggle" onclick="toggleGuide('guide-state')" aria-expanded="false">
      <span class="guide-icon">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
          <circle cx="7" cy="7" r="5.5" stroke="currentColor" stroke-width="1.2"/>
          <path d="M5 7l1.5 1.5L9 5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </span>
      JavaScript State
      <svg class="guide-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none">
        <path d="M3 4.5l3 3 3-3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>
    <div class="guide-body" hidden>
      <div class="guide-content">
        <p class="guide-text">State is stored in two places simultaneously:</p>

        <ul class="guide-list">
          <li><code class="g-code">element.classList</code> — the <code class="g-code">active</code> class drives the CSS animation.</li>
          <li><code class="g-code">element.dataset.state</code> — holds the string <code class="g-code">"on"</code> or <code class="g-code">"off"</code> for JS consumers.</li>
        </ul>

        <p class="guide-text">When a user clicks, the class toggles first, then <code class="g-code">dataset.state</code> is updated, and finally a <code class="g-code">toggle-change</code> CustomEvent fires on the element:</p>

        <div class="guide-code-block">
<pre><code>element.addEventListener('toggle-change', (e) => {
  console.log(e.detail.state);    // "on" | "off"
  console.log(e.detail.isActive); // true | false
  console.log(e.detail.element);  // the DOM node
});</code></pre>
        </div>

        <p class="guide-tip">
          <strong>Note:</strong> <code class="g-code">setState()</code> and <code class="g-code">toggle()</code> update the class and dataset but do <em>not</em> fire <code class="g-code">toggle-change</code>. Only user-initiated clicks dispatch the event.
        </p>
      </div>
    </div>
  </div><!-- /guide-state -->

  <!-- Guide item 3: toggle.js -->
  <div class="guide-item" id="guide-js">
    <button class="guide-toggle" onclick="toggleGuide('guide-js')" aria-expanded="false">
      <span class="guide-icon">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
          <rect x="1.5" y="1.5" width="11" height="11" rx="2" stroke="currentColor" stroke-width="1.2"/>
          <path d="M5 5v4M9 5c0 0 1 0 1 1.5S9 9 9 9" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
        </svg>
      </span>
      Using toggle.js
      <svg class="guide-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none">
        <path d="M3 4.5l3 3 3-3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>
    <div class="guide-body" hidden>
      <div class="guide-content">
        <p class="guide-text"><code class="g-code">toggle.js</code> exports a single class: <code class="g-code">ToggleSwitch</code>. The file auto-initialises all <code class="g-code">.toggle</code> elements on <code class="g-code">DOMContentLoaded</code> — you don't need to call anything manually for standard use.</p>

        <p class="guide-text">For programmatic control, instantiate the class yourself with any valid CSS selector:</p>

        <div class="guide-code-block">
<pre><code>// Re-use for a scoped set of toggles
const panel = new ToggleSwitch('.settings-panel .toggle');

// Get state
const el = document.querySelector('#darkMode');
console.log(panel.getState(el)); // "on" | "off"

// Set state
panel.setState(el, 'on');

// Flip
panel.toggle(el);</code></pre>
        </div>

        <p class="guide-tip">
          <strong>Multiple instances:</strong> Each <code class="g-code">ToggleSwitch</code> manages its own set of elements. Instantiating the same selector twice will bind duplicate listeners — use a single shared instance per selector.
        </p>
      </div>
    </div>
  </div><!-- /guide-js -->

  <!-- Guide item 4: components.js integration -->
  <div class="guide-item" id="guide-components">
    <button class="guide-toggle" onclick="toggleGuide('guide-components')" aria-expanded="false">
      <span class="guide-icon">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
          <path d="M7 1.5L12.5 4.5V9.5L7 12.5L1.5 9.5V4.5L7 1.5Z" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/>
          <path d="M7 1.5V12.5M1.5 4.5L12.5 4.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
        </svg>
      </span>
      components.js Integration
      <svg class="guide-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none">
        <path d="M3 4.5l3 3 3-3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>
    <div class="guide-body" hidden>
      <div class="guide-content">
        <p class="guide-text"><code class="g-code">components.js</code> is the design system's single entry-point. It imports every component script, so pages only need one <code class="g-code">&lt;script&gt;</code> tag.</p>

        <div class="guide-code-block">
<pre><code>// components.js
import './toggle.js';
// import './modal.js';
// import './tooltip.js';</code></pre>
        </div>

        <p class="guide-text">Include it as a module on any page that uses design-system components:</p>

        <div class="guide-code-block">
<pre><code>&lt;script type="module"
  src="/design_guidelines/JS/components.js"&gt;
&lt;/script&gt;</code></pre>
        </div>

        <p class="guide-text">Because <code class="g-code">toggle.js</code> listens for <code class="g-code">DOMContentLoaded</code>, the import order within <code class="g-code">components.js</code> does not matter — each component initialises itself safely when the document is ready.</p>

        <p class="guide-tip">
          <strong>Adding new components:</strong> Create the component class in its own file (e.g. <code class="g-code">modal.js</code>), then add one <code class="g-code">import</code> line to <code class="g-code">components.js</code>. Nothing else changes.
        </p>
      </div>
    </div>
  </div><!-- /guide-components -->

</div><!-- /dev-guide -->

<!-- ── Sidebar styles (scoped) ─────────────────────────────── -->
<style>
  /* Developer guide accordion */
  .dev-guide {
    padding: 0 16px 0;
  }

  .guide-item {
    border-bottom: 1px solid var(--border-faint);
  }

  .guide-item:first-child {
    border-top: 1px solid var(--border-faint);
  }

  .guide-toggle {
    width: 100%;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 11px 8px;
    background: none;
    border: none;
    cursor: pointer;
    font-family: var(--font-sans);
    font-size: 13px;
    font-weight: 500;
    color: var(--text-secondary);
    text-align: left;
    transition: color var(--transition);
    -webkit-font-smoothing: antialiased;
  }

  .guide-toggle:hover {
    color: var(--text-primary);
  }

  .guide-toggle[aria-expanded="true"] {
    color: var(--accent);
  }

  .guide-icon {
    width: 22px;
    height: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--surface);
    border: 1px solid var(--border-faint);
    border-radius: 6px;
    flex-shrink: 0;
    color: inherit;
  }

  .guide-chevron {
    margin-left: auto;
    flex-shrink: 0;
    color: var(--text-tertiary);
    transition: transform 0.2s ease;
  }

  .guide-toggle[aria-expanded="true"] .guide-chevron {
    transform: rotate(180deg);
  }

  .guide-body {
    /* shown/hidden via hidden attribute + JS */
  }

  .guide-body:not([hidden]) {
    display: block;
  }

  .guide-content {
    padding: 4px 8px 16px;
  }

  .guide-text {
    font-size: 12.5px;
    color: var(--text-secondary);
    line-height: 1.65;
    margin-bottom: 10px;
  }

  .guide-list {
    font-size: 12.5px;
    color: var(--text-secondary);
    line-height: 1.65;
    padding-left: 16px;
    margin: 8px 0 10px;
  }

  .guide-list li + li {
    margin-top: 4px;
  }

  .guide-code-block {
    background: var(--code-bg);
    border: 1px solid var(--border-faint);
    border-radius: 8px;
    overflow: hidden;
    margin: 10px 0;
  }

  .guide-code-block pre {
    padding: 12px 14px;
    margin: 0;
    overflow-x: auto;
    background: transparent;
  }

  .guide-code-block code {
    font-family: var(--font-mono);
    font-size: 11.5px;
    line-height: 1.65;
    color: var(--text-primary);
  }

  .g-code {
    background: var(--surface);
    border: 1px solid var(--border-faint);
    padding: 1px 5px;
    border-radius: 4px;
    font-family: var(--font-mono);
    font-size: 11.5px;
    color: var(--text-primary);
  }

  .guide-tip {
    font-size: 12px;
    color: #9b1a30;
    background: var(--accent-soft);
    border: 1px solid rgba(255,56,92,0.15);
    border-radius: 8px;
    padding: 10px 12px;
    line-height: 1.6;
    margin-top: 12px;
  }
</style>

<!-- ── Sidebar JS (accordion) ─────────────────────────────── -->
<script>
  function toggleGuide(id) {
    const item = document.getElementById(id);
    if (!item) return;
    const btn  = item.querySelector('.guide-toggle');
    const body = item.querySelector('.guide-body');
    const open = btn.getAttribute('aria-expanded') === 'true';

    // Close all others
    document.querySelectorAll('.guide-item').forEach(other => {
      if (other.id !== id) {
        other.querySelector('.guide-toggle').setAttribute('aria-expanded', 'false');
        other.querySelector('.guide-body').setAttribute('hidden', '');
      }
    });

    // Toggle this one
    btn.setAttribute('aria-expanded', String(!open));
    if (open) {
      body.setAttribute('hidden', '');
    } else {
      body.removeAttribute('hidden');
    }
  }
</script>