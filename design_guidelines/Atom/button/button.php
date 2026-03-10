<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Button | HolidaySeva Design Guidelines</title>

  <!-- Design system shell -->
  <link rel="stylesheet" href="/design-system.css">

  <!-- Button component -->
  <link rel="stylesheet" href="https://holidayseva.com/UI/Atom/button/button.css">
  <script defer src="https://holidayseva.com/UI/Atom/button/button.js"></script>

  <style>
    /* ── Page-scoped doc styles ──────────────────────────── */
    :root {
      --doc-font: -apple-system, BlinkMacSystemFont, "SF Pro Text", "Helvetica Neue", Arial, sans-serif;
      --doc-mono: "SF Mono", "Fira Code", "Fira Mono", "Roboto Mono", monospace;
      --doc-bg:   #FAFAFA;
      --doc-card: #FFFFFF;
    }

    /* Preview stage */
    .demo-stage {
      background:  var(--doc-card);
      border:      1px solid #EBEBEB;
      border-radius: 16px;
      padding:     48px 32px;
      display:     flex;
      flex-wrap:   wrap;
      align-items: center;
      gap:         16px;
      margin:      24px 0;
    }

    .demo-stage.dark-bg {
      background: #1A1A1A;
    }

    .demo-stage.muted-bg {
      background: #F7F7F7;
    }

    /* Anatomy diagram */
    .anatomy-wrap {
      display:     flex;
      align-items: flex-start;
      gap:         48px;
      flex-wrap:   wrap;
      margin:      32px 0;
    }

    .anatomy-preview {
      position:    relative;
      display:     inline-flex;
      align-items: center;
      margin:      32px 48px 32px 16px;
    }

    .anatomy-btn {
      /* Rendered via button.css */
    }

    /* Callout lines */
    .anat-lines {
      position: absolute;
      inset:    0;
      pointer-events: none;
    }

    .anat-ann {
      position:    absolute;
      display:     flex;
      align-items: center;
      gap:         6px;
      white-space: nowrap;
      font-size:   12px;
      font-family: var(--doc-mono);
      color:       #717171;
    }

    .anat-ann-dot {
      width:        6px;
      height:       6px;
      border-radius: 50%;
      background:   #FF385C;
      flex-shrink:  0;
    }

    .anat-ann-line {
      width:        36px;
      height:       1px;
      background:   #DDDDDD;
    }

    /* Spec table */
    .spec-table {
      border:        1px solid #EBEBEB;
      border-radius: 12px;
      overflow:      hidden;
      margin:        24px 0;
    }

    .spec-row {
      display:         flex;
      align-items:     center;
      padding:         12px 20px;
      border-bottom:   1px solid #F0F0F0;
      gap:             16px;
      font-size:       14px;
    }

    .spec-row:last-child { border-bottom: none; }

    .spec-key {
      min-width:   160px;
      font-weight: 600;
      color:       #222222;
      font-family: var(--doc-font);
    }

    .spec-val {
      color:       #484848;
      font-family: var(--doc-mono);
      font-size:   13px;
    }

    .spec-swatch {
      display:       inline-block;
      width:         14px;
      height:        14px;
      border-radius: 50%;
      border:        1px solid rgba(0,0,0,0.10);
      vertical-align: middle;
      margin-right:  6px;
    }

    /* Variation grid */
    .variation-grid {
      display:               grid;
      grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
      gap:                   24px;
      margin:                24px 0;
    }

    .variation-card {
      border:        1px solid #EBEBEB;
      border-radius: 16px;
      overflow:      hidden;
      background:    var(--doc-card);
    }

    .variation-card.dark-card {
      background: #1A1A1A;
    }

    .variation-preview {
      padding:       36px 28px;
      display:       flex;
      flex-wrap:     wrap;
      gap:           12px;
      align-items:   center;
      min-height:    100px;
      border-bottom: 1px solid #F0F0F0;
    }

    .variation-card.dark-card .variation-preview {
      border-bottom-color: rgba(255,255,255,0.08);
    }

    .variation-meta {
      padding:    18px 22px;
    }

    .variation-name {
      font-size:   14px;
      font-weight: 700;
      color:       #222222;
      margin:      0 0 4px 0;
      font-family: var(--doc-font);
    }

    .variation-card.dark-card .variation-name {
      color: #FFFFFF;
    }

    .variation-desc {
      font-size:  13px;
      color:      #717171;
      margin:     0 0 14px;
      line-height: 1.5;
    }

    .variation-card.dark-card .variation-desc {
      color: #B0B0B0;
    }

    /* Code blocks */
    .code-block {
      border:        1px solid #EBEBEB;
      border-radius: 12px;
      overflow:      hidden;
      margin:        16px 0;
      background:    #F7F7F7;
    }

    .code-bar {
      display:         flex;
      align-items:     center;
      justify-content: space-between;
      padding:         8px 16px;
      background:      #EFEFEF;
      border-bottom:   1px solid #E5E5E5;
    }

    .code-lang-tag {
      font-size:   11px;
      font-weight: 700;
      font-family: var(--doc-mono);
      color:       #717171;
      text-transform: uppercase;
      letter-spacing: 0.06em;
    }

    .copy-btn {
      font-size:     12px;
      font-weight:   600;
      font-family:   var(--doc-font);
      color:         #484848;
      background:    transparent;
      border:        1px solid #DDDDDD;
      border-radius: 6px;
      padding:       3px 10px;
      cursor:        pointer;
      transition:    background 120ms, color 120ms;
    }

    .copy-btn:hover { background: #E0E0E0; }
    .copy-btn:active { background: #CFCFCF; }

    .code-block pre {
      margin:  0;
      padding: 20px;
      overflow-x: auto;
      font-family: var(--doc-mono);
      font-size:   13px;
      line-height: 1.65;
      color:       #222222;
    }

    /* Syntax highlighting */
    .code-block .t { color: #C0392B; }   /* tag */
    .code-block .a { color: #2980B9; }   /* attribute */
    .code-block .s { color: #27AE60; }   /* string */
    .code-block .c { color: #999999; font-style: italic; } /* comment */
    .code-block .k { color: #8E44AD; }   /* keyword */

    /* States table */
    .states-grid {
      display:               grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      gap:                   16px;
      margin:                24px 0;
    }

    .state-card {
      border:        1px solid #EBEBEB;
      border-radius: 14px;
      padding:       28px 20px 20px;
      text-align:    center;
      background:    var(--doc-card);
    }

    .state-label {
      display:       block;
      margin-top:    16px;
      font-size:     12px;
      font-weight:   600;
      color:         #717171;
      font-family:   var(--doc-mono);
      text-transform: uppercase;
      letter-spacing: 0.07em;
    }

    /* Best practices */
    .practices-grid {
      display:               grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap:                   20px;
      margin:                24px 0;
    }

    .practice-card {
      border:        1px solid #EBEBEB;
      border-radius: 14px;
      padding:       24px;
      background:    var(--doc-card);
    }

    .practice-card.do  { border-color: rgba(0,138,5,0.25); background: rgba(0,138,5,0.03); }
    .practice-card.dont{ border-color: rgba(193,53,21,0.20); background: rgba(193,53,21,0.03); }

    .practice-badge {
      display:       inline-flex;
      align-items:   center;
      gap:           5px;
      font-size:     11px;
      font-weight:   700;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      padding:       3px 10px;
      border-radius: 999px;
      margin-bottom: 12px;
    }

    .practice-card.do   .practice-badge { background: rgba(0,138,5,0.12); color: #008A05; }
    .practice-card.dont .practice-badge { background: rgba(193,53,21,0.12); color: #C13515; }

    .practice-title {
      font-size:   14px;
      font-weight: 700;
      color:       #222222;
      margin:      0 0 6px;
    }

    .practice-desc {
      font-size:  13px;
      color:      #717171;
      line-height: 1.55;
      margin:     0;
    }

    /* Notes / callouts */
    .note {
      border-left:   3px solid #DDDDDD;
      background:    #F9F9F9;
      border-radius: 0 10px 10px 0;
      padding:       14px 18px;
      margin:        20px 0;
      font-size:     14px;
      color:         #484848;
      line-height:   1.6;
    }

    .note.info  { border-color: #007AB8; background: rgba(0,122,184,0.05); }
    .note.warn  { border-color: #C45508; background: rgba(196,85,8,0.05); }
    .note.success { border-color: #008A05; background: rgba(0,138,5,0.05); }

    .note p { margin: 0; }
    .note code {
      background:    rgba(0,0,0,0.07);
      padding:       1px 5px;
      border-radius: 4px;
      font-family:   var(--doc-mono);
      font-size:     12px;
    }

    /* Inline code */
    code {
      background:    rgba(0,0,0,0.06);
      padding:       1px 6px;
      border-radius: 5px;
      font-family:   var(--doc-mono);
      font-size:     0.88em;
      color:         #C0392B;
    }

    /* Separator */
    .rule {
      border:      none;
      border-top:  1px solid #EBEBEB;
      margin:      48px 0;
    }

    /* Colors additions callout */
    .colors-additions {
      background:    #FFFBF0;
      border:        1px solid rgba(196,85,8,0.20);
      border-radius: 14px;
      padding:       24px;
      margin:        32px 0;
    }

    .colors-additions h3 {
      margin: 0 0 12px;
      font-size: 14px;
      font-weight: 700;
      color: #C45508;
    }

    /* Responsive adjustments for the doc page itself */
    @media (max-width: 600px) {
      .demo-stage     { padding: 28px 20px; }
      .variation-grid { grid-template-columns: 1fr; }
      .states-grid    { grid-template-columns: 1fr 1fr; }
      .practices-grid { grid-template-columns: 1fr; }
      .spec-key       { min-width: 130px; }
    }
  </style>
</head>
<body>

<?php include __DIR__ . '/header.php'; ?>
<?php include __DIR__ . '/drawer_sidebar.php'; ?>

<div class="page-layout">

  <!-- ── Left sidebar ──────────────────────────────────────── -->
  <aside class="sidebar-left">
    <?php include __DIR__ . '/left_sidebar.php'; ?>
  </aside>

  <!-- ── Main content ──────────────────────────────────────── -->
  <main class="page-main">

    <!-- ════════════════════════════════════════
         HERO / OVERVIEW
    ════════════════════════════════════════ -->
    <div id="overview">
      <p class="page-eyebrow">Components · Atom</p>
      <h1 class="page-title">Button</h1>
      <p class="page-lead">
        The foundational interactive element of HolidaySeva. Buttons trigger actions,
        submit forms, and guide users through booking flows. The system is Apple-inspired
        in polish and Airbnb-structured in composition — clean, confident, and purposeful.
      </p>
    </div>

    <!-- Live hero demo -->
    <div class="demo-stage">
      <button class="btn btn-primary">Book Now</button>
      <button class="btn btn-secondary">Explore Stays</button>
      <button class="btn btn-outline">Save to Wishlist</button>
      <button class="btn btn-ghost">Learn More</button>
      <button class="btn btn-accent">Contact Host</button>
    </div>

    <hr class="rule">


    <!-- ════════════════════════════════════════
         INTRODUCTION
    ════════════════════════════════════════ -->
    <section id="introduction">
      <h2 class="section-title">Introduction</h2>

      <p class="body-text">
        The <strong>Button</strong> is the primary call-to-action element in the HolidaySeva design system.
        Every button communicates a clear action and has a defined role in the interface — from booking
        confirmations to secondary navigation. The system provides a complete range of variants, sizes,
        and states so that any UI need can be met with a single CSS import and a simple HTML class.
      </p>

      <p class="body-text">
        <strong>Why it exists:</strong> A unified button system ensures visual consistency, accessibility,
        and brand coherence across every page and feature of the website. Without it, buttons would drift
        — different teams ship different padding, colours, and interaction patterns, creating a fragmented
        experience.
      </p>

      <p class="body-text">
        <strong>How to use it:</strong> Import <code>button.css</code> and apply <code>.btn</code> plus
        one variant class to any <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> element.
        Optionally include <code>button.js</code> for loading states, ripple effects, and toggle behaviour.
      </p>

      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">HTML — Quick Start</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="c">&lt;!-- 1. Add to &lt;head&gt; --&gt;</span>
<span class="t">&lt;link</span> <span class="a">rel</span>=<span class="s">"stylesheet"</span> <span class="a">href</span>=<span class="s">"https://holidayseva.com/UI/Atom/button/button.css"</span><span class="t">&gt;</span>

<span class="c">&lt;!-- 2. Use the component --&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span><span class="t">&gt;</span>Book Now<span class="t">&lt;/button&gt;</span>

<span class="c">&lt;!-- 3. Optional JS (before &lt;/body&gt;) --&gt;</span>
<span class="t">&lt;script</span> <span class="a">src</span>=<span class="s">"https://holidayseva.com/UI/Atom/button/button.js"</span><span class="t">&gt;&lt;/script&gt;</span></code></pre>
      </div>
    </section>

    <hr class="rule">


    <!-- ════════════════════════════════════════
         ANATOMY
    ════════════════════════════════════════ -->
    <section id="anatomy">
      <h2 class="section-title">Button Anatomy</h2>
      <p class="body-text">
        A button is composed of a <strong>container</strong>, an optional <strong>leading icon</strong>,
        a <strong>label</strong>, and an optional <strong>trailing icon or badge</strong>. The container
        holds all internal spacing and applies the visual style via variant classes.
      </p>

      <!-- Anatomy visual -->
      <div class="anatomy-wrap">
        <div style="position:relative; display:inline-block; padding: 40px 60px 40px 20px;">

          <!-- The actual rendered button -->
          <button class="btn btn-primary" id="anatomyBtn" style="pointer-events:none; user-select:none;">
            <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            Search Stays
          </button>

          <!-- Annotation: container -->
          <div style="position:absolute;top:-16px;left:20px;font-size:11px;font-family:monospace;color:#717171;display:flex;align-items:center;gap:6px;">
            <span style="width:6px;height:6px;border-radius:50%;background:#FF385C;display:inline-block;"></span>
            <span style="width:24px;height:1px;background:#DDDDDD;display:inline-block;"></span>
            <span>.btn container</span>
          </div>

          <!-- Annotation: icon -->
          <div style="position:absolute;top:50%;left:-110px;transform:translateY(-50%);font-size:11px;font-family:monospace;color:#717171;display:flex;align-items:center;gap:6px;">
            <span>.btn-icon</span>
            <span style="width:24px;height:1px;background:#DDDDDD;display:inline-block;"></span>
            <span style="width:6px;height:6px;border-radius:50%;background:#FF385C;display:inline-block;"></span>
          </div>

          <!-- Annotation: label -->
          <div style="position:absolute;bottom:-24px;right:32px;font-size:11px;font-family:monospace;color:#717171;display:flex;align-items:center;gap:6px;">
            <span style="width:6px;height:6px;border-radius:50%;background:#FF385C;display:inline-block;"></span>
            <span style="width:24px;height:1px;background:#DDDDDD;display:inline-block;"></span>
            <span>label text</span>
          </div>
        </div>

        <!-- Parts breakdown -->
        <div style="flex:1; min-width: 240px;">
          <div class="spec-table">
            <div class="spec-row">
              <span class="spec-key">Container</span>
              <span class="spec-val">.btn + variant class</span>
            </div>
            <div class="spec-row">
              <span class="spec-key">Leading icon</span>
              <span class="spec-val">.btn-icon (optional)</span>
            </div>
            <div class="spec-row">
              <span class="spec-key">Label</span>
              <span class="spec-val">Text node / .btn-label</span>
            </div>
            <div class="spec-row">
              <span class="spec-key">Trailing badge</span>
              <span class="spec-val">.btn-badge (optional)</span>
            </div>
            <div class="spec-row">
              <span class="spec-key">Spinner</span>
              <span class="spec-val">.btn-spinner (loading)</span>
            </div>
          </div>
        </div>
      </div>

      <p class="body-text">
        The container handles all padding, border-radius, colour, and shadow. Icons use
        <code>currentColor</code> so they automatically inherit the button's text colour.
        Internal <code>gap</code> keeps consistent spacing between icon, label, and badge.
      </p>
    </section>

    <hr class="rule">


    <!-- ════════════════════════════════════════
         SPECIFICATIONS
    ════════════════════════════════════════ -->
    <section id="specs">
      <h2 class="section-title">Specifications</h2>
      <p class="body-text">Default medium size. All values come from CSS custom properties in <code>button.css</code>.</p>

      <div class="spec-table">
        <div class="spec-row"><span class="spec-key">Default height</span><span class="spec-val">44px (Apple-standard touch target)</span></div>
        <div class="spec-row"><span class="spec-key">Horizontal padding</span><span class="spec-val">20px</span></div>
        <div class="spec-row"><span class="spec-key">Border radius</span><span class="spec-val">999px (pill)</span></div>
        <div class="spec-row"><span class="spec-key">Border width</span><span class="spec-val">1.5px</span></div>
        <div class="spec-row"><span class="spec-key">Font weight</span><span class="spec-val">600</span></div>
        <div class="spec-row"><span class="spec-key">Font size</span><span class="spec-val">15px</span></div>
        <div class="spec-row"><span class="spec-key">Letter spacing</span><span class="spec-val">−0.01em</span></div>
        <div class="spec-row"><span class="spec-key">Icon gap</span><span class="spec-val">8px</span></div>
        <div class="spec-row"><span class="spec-key">Press transform</span><span class="spec-val">scale(0.97)</span></div>
        <div class="spec-row"><span class="spec-key">Transition duration</span><span class="spec-val">160ms (color/bg), 200ms (shadow)</span></div>
        <div class="spec-row">
          <span class="spec-key">Primary colour</span>
          <span class="spec-val"><span class="spec-swatch" style="background:#FF385C;"></span>#FF385C</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">Secondary colour</span>
          <span class="spec-val"><span class="spec-swatch" style="background:#222222;"></span>#222222</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">Accent colour</span>
          <span class="spec-val"><span class="spec-swatch" style="background:#00A699;"></span>#00A699</span>
        </div>
      </div>
    </section>

    <hr class="rule">


    <!-- ════════════════════════════════════════
         VARIATIONS
    ════════════════════════════════════════ -->
    <section id="variations">
      <h2 class="section-title">Button Variations</h2>
      <p class="body-text">
        Each variant is designed for a specific role in the UI. Use only one primary button per
        view to maintain clear visual hierarchy.
      </p>

      <div class="variation-grid">

        <!-- Primary -->
        <div class="variation-card">
          <div class="variation-preview">
            <button class="btn btn-primary">Book Now</button>
          </div>
          <div class="variation-meta">
            <p class="variation-name">Primary</p>
            <p class="variation-desc">The strongest CTA. Use for the single most important action on a screen — booking, confirming, or submitting. One per view.</p>
            <div class="code-block">
              <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
              <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span><span class="t">&gt;</span>Book Now<span class="t">&lt;/button&gt;</span></code></pre>
            </div>
          </div>
        </div>

        <!-- Secondary -->
        <div class="variation-card">
          <div class="variation-preview">
            <button class="btn btn-secondary">Explore Stays</button>
          </div>
          <div class="variation-meta">
            <p class="variation-name">Secondary</p>
            <p class="variation-desc">Strong but subordinate. Paired with a primary button for secondary actions like "Browse All" or "View Details".</p>
            <div class="code-block">
              <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
              <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-secondary"</span><span class="t">&gt;</span>Explore<span class="t">&lt;/button&gt;</span></code></pre>
            </div>
          </div>
        </div>

        <!-- Outline -->
        <div class="variation-card">
          <div class="variation-preview">
            <button class="btn btn-outline">Save to Wishlist</button>
          </div>
          <div class="variation-meta">
            <p class="variation-name">Outline</p>
            <p class="variation-desc">Bordered, transparent background. Ideal for secondary actions in cards, filters, or alongside a primary.</p>
            <div class="code-block">
              <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
              <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-outline"</span><span class="t">&gt;</span>Save<span class="t">&lt;/button&gt;</span></code></pre>
            </div>
          </div>
        </div>

        <!-- Ghost -->
        <div class="variation-card">
          <div class="variation-preview">
            <button class="btn btn-ghost">Learn More</button>
          </div>
          <div class="variation-meta">
            <p class="variation-name">Ghost</p>
            <p class="variation-desc">No border or background until hover. Use for low-emphasis actions in toolbars, lists, or tight spaces.</p>
            <div class="code-block">
              <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
              <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-ghost"</span><span class="t">&gt;</span>Learn More<span class="t">&lt;/button&gt;</span></code></pre>
            </div>
          </div>
        </div>

        <!-- Ghost Primary -->
        <div class="variation-card">
          <div class="variation-preview">
            <button class="btn btn-ghost-primary">View All Listings</button>
          </div>
          <div class="variation-meta">
            <p class="variation-name">Ghost Primary</p>
            <p class="variation-desc">Brand-coloured ghost. Use for "See all →" links inside section cards without competing with the primary CTA.</p>
            <div class="code-block">
              <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
              <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-ghost-primary"</span><span class="t">&gt;</span>View All<span class="t">&lt;/button&gt;</span></code></pre>
            </div>
          </div>
        </div>

        <!-- Soft -->
        <div class="variation-card">
          <div class="variation-preview">
            <button class="btn btn-soft">Apply Filters</button>
          </div>
          <div class="variation-meta">
            <p class="variation-name">Soft / Tinted</p>
            <p class="variation-desc">Light tinted background with brand colour text. Great for filter chips, category selectors, or inline actions that need a bit more presence than ghost.</p>
            <div class="code-block">
              <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
              <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-soft"</span><span class="t">&gt;</span>Filters<span class="t">&lt;/button&gt;</span></code></pre>
            </div>
          </div>
        </div>

        <!-- Accent -->
        <div class="variation-card">
          <div class="variation-preview">
            <button class="btn btn-accent">Contact Host</button>
          </div>
          <div class="variation-meta">
            <p class="variation-name">Accent (Teal)</p>
            <p class="variation-desc">HolidaySeva teal. Use for messaging, support, and communication-related actions that complement the primary rose.</p>
            <div class="code-block">
              <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
              <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-accent"</span><span class="t">&gt;</span>Contact Host<span class="t">&lt;/button&gt;</span></code></pre>
            </div>
          </div>
        </div>

        <!-- Danger -->
        <div class="variation-card">
          <div class="variation-preview">
            <button class="btn btn-danger">Cancel Booking</button>
          </div>
          <div class="variation-meta">
            <p class="variation-name">Danger</p>
            <p class="variation-desc">Destructive actions only — cancellations, deletions, revocations. Always pair with a confirmation dialog.</p>
            <div class="code-block">
              <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
              <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-danger"</span><span class="t">&gt;</span>Cancel<span class="t">&lt;/button&gt;</span></code></pre>
            </div>
          </div>
        </div>

        <!-- Danger Outline -->
        <div class="variation-card">
          <div class="variation-preview">
            <button class="btn btn-danger-outline">Remove Listing</button>
          </div>
          <div class="variation-meta">
            <p class="variation-name">Danger Outline</p>
            <p class="variation-desc">Softer destructive affordance. Use when the action is reversible or you want less visual alarm than the filled danger.</p>
            <div class="code-block">
              <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
              <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-danger-outline"</span><span class="t">&gt;</span>Remove<span class="t">&lt;/button&gt;</span></code></pre>
            </div>
          </div>
        </div>

        <!-- White / Inverse -->
        <div class="variation-card dark-card">
          <div class="variation-preview">
            <button class="btn btn-white">Explore Destinations</button>
          </div>
          <div class="variation-meta">
            <p class="variation-name">White (Inverse)</p>
            <p class="variation-desc">White button for use on dark or image hero sections. Inverts the surface to stay legible against dark backgrounds.</p>
            <div class="code-block" style="background:#111; border-color:#333;">
              <div class="code-bar" style="background:#222; border-color:#333;">
                <span class="code-lang-tag" style="color:#999;">HTML</span>
                <button class="copy-btn" style="border-color:#444;color:#999;" onclick="copyCode(this)">Copy</button>
              </div>
              <pre style="color:#D4D4D4;"><code><span class="t" style="color:#F1865A;">&lt;button</span> <span class="a" style="color:#9CDCFE;">class</span>=<span class="s" style="color:#CE9178;">"btn btn-white"</span><span class="t" style="color:#F1865A;">&gt;</span>Explore<span class="t" style="color:#F1865A;">&lt;/button&gt;</span></code></pre>
            </div>
          </div>
        </div>

        <!-- Link -->
        <div class="variation-card">
          <div class="variation-preview">
            <button class="btn btn-link">View full policy</button>
          </div>
          <div class="variation-meta">
            <p class="variation-name">Link</p>
            <p class="variation-desc">Looks like a hyperlink. Use inside body copy or help text when navigating away, not triggering an action.</p>
            <div class="code-block">
              <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
              <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-link"</span><span class="t">&gt;</span>View policy<span class="t">&lt;/button&gt;</span></code></pre>
            </div>
          </div>
        </div>

        <!-- Toggle -->
        <div class="variation-card">
          <div class="variation-preview">
            <button class="btn btn-toggle is-selected" aria-pressed="true">Entire Place</button>
            <button class="btn btn-toggle" aria-pressed="false">Private Room</button>
            <button class="btn btn-toggle" aria-pressed="false">Shared</button>
          </div>
          <div class="variation-meta">
            <p class="variation-name">Toggle / Segmented</p>
            <p class="variation-desc">Selectable filter chips or segmented control options. JS auto-handles <code>aria-pressed</code> and <code>.is-selected</code>.</p>
            <div class="code-block">
              <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
              <pre><code><span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"btn-group"</span><span class="t">&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-toggle is-selected"</span>
          <span class="a">aria-pressed</span>=<span class="s">"true"</span><span class="t">&gt;</span>Entire Place<span class="t">&lt;/button&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-toggle"</span>
          <span class="a">aria-pressed</span>=<span class="s">"false"</span><span class="t">&gt;</span>Private Room<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;/div&gt;</span></code></pre>
            </div>
          </div>
        </div>

      </div>
    </section>

    <hr class="rule">


    <!-- ════════════════════════════════════════
         WITH ICONS
    ════════════════════════════════════════ -->
    <section id="icons">
      <h2 class="section-title">Buttons with Icons</h2>
      <p class="body-text">
        Add a leading or trailing <code>.btn-icon</code> element inside the button.
        Icons use <code>1.2em</code> sizing and inherit <code>currentColor</code> automatically.
        Use SVG icons at <code>24×24</code> viewBox with <code>stroke-width: 2</code> for crisp results.
      </p>

      <div class="demo-stage">
        <!-- Leading icon -->
        <button class="btn btn-primary">
          <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          Search
        </button>

        <!-- Trailing icon -->
        <button class="btn btn-outline">
          Save to List
          <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
        </button>

        <!-- Icon only -->
        <button class="btn btn-outline btn-icon-only" aria-label="Share listing">
          <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
        </button>

        <!-- With badge -->
        <button class="btn btn-secondary">
          <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          Cart
          <span class="btn-badge">3</span>
        </button>
      </div>

      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">HTML — Icon Examples</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="c">&lt;!-- Leading icon --&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span><span class="t">&gt;</span>
  <span class="t">&lt;svg</span> <span class="a">class</span>=<span class="s">"btn-icon"</span> <span class="a">aria-hidden</span>=<span class="s">"true"</span> <span class="c">...&gt;</span><span class="t">&lt;/svg&gt;</span>
  Search
<span class="t">&lt;/button&gt;</span>

<span class="c">&lt;!-- Icon only — always add aria-label --&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-outline btn-icon-only"</span>
        <span class="a">aria-label</span>=<span class="s">"Share listing"</span><span class="t">&gt;</span>
  <span class="t">&lt;svg</span> <span class="a">class</span>=<span class="s">"btn-icon"</span> <span class="a">aria-hidden</span>=<span class="s">"true"</span> <span class="c">...&gt;</span><span class="t">&lt;/svg&gt;</span>
<span class="t">&lt;/button&gt;</span>

<span class="c">&lt;!-- Badge --&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-secondary"</span><span class="t">&gt;</span>
  Cart <span class="t">&lt;span</span> <span class="a">class</span>=<span class="s">"btn-badge"</span><span class="t">&gt;</span>3<span class="t">&lt;/span&gt;</span>
<span class="t">&lt;/button&gt;</span></code></pre>
      </div>
    </section>

    <hr class="rule">


    <!-- ════════════════════════════════════════
         SIZES & RESPONSIVENESS
    ════════════════════════════════════════ -->
    <section id="sizes">
      <h2 class="section-title">Sizes &amp; Responsiveness</h2>
      <p class="body-text">
        Five sizes are available. The default is <strong>md</strong> — no extra class needed. Sizes scale down
        automatically on small screens: <code>xl → lg</code> below 480px, and <code>lg → md</code>
        on the same breakpoint. At 360px, the unsized button steps down to <code>sm</code>.
      </p>

      <div class="demo-stage" style="flex-direction:column; align-items:flex-start; gap:20px;">
        <div style="display:flex;align-items:center;gap:20px;flex-wrap:wrap;">
          <button class="btn btn-primary btn-xl">xl — Hero CTA</button>
          <code style="color:#717171;font-size:12px;">h:60px · px:36px · 18px</code>
        </div>
        <div style="display:flex;align-items:center;gap:20px;flex-wrap:wrap;">
          <button class="btn btn-primary btn-lg">lg — Section CTA</button>
          <code style="color:#717171;font-size:12px;">h:52px · px:28px · 16px</code>
        </div>
        <div style="display:flex;align-items:center;gap:20px;flex-wrap:wrap;">
          <button class="btn btn-primary">md — Default</button>
          <code style="color:#717171;font-size:12px;">h:44px · px:20px · 15px</code>
        </div>
        <div style="display:flex;align-items:center;gap:20px;flex-wrap:wrap;">
          <button class="btn btn-primary btn-sm">sm — Compact</button>
          <code style="color:#717171;font-size:12px;">h:36px · px:14px · 13px</code>
        </div>
        <div style="display:flex;align-items:center;gap:20px;flex-wrap:wrap;">
          <button class="btn btn-primary btn-xs">xs — Tag / Chip</button>
          <code style="color:#717171;font-size:12px;">h:28px · px:10px · 11px</code>
        </div>
      </div>

      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">HTML — Sizes</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary btn-xl"</span><span class="t">&gt;</span>Hero CTA<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary btn-lg"</span><span class="t">&gt;</span>Large<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span><span class="t">&gt;</span>Default (md)<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary btn-sm"</span><span class="t">&gt;</span>Small<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary btn-xs"</span><span class="t">&gt;</span>Extra Small<span class="t">&lt;/button&gt;</span></code></pre>
      </div>

      <!-- Full width -->
      <p class="subsection-title" style="margin-top:28px;">Full Width</p>
      <p class="body-text">Add <code>.btn-block</code> to make any button span its container — useful in mobile modals, checkout flows, and forms.</p>
      <div class="demo-stage" style="flex-direction:column;">
        <button class="btn btn-primary btn-block">Confirm &amp; Pay</button>
      </div>
      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary btn-block"</span><span class="t">&gt;</span>Confirm &amp; Pay<span class="t">&lt;/button&gt;</span></code></pre>
      </div>
    </section>

    <hr class="rule">


    <!-- ════════════════════════════════════════
         STATES
    ════════════════════════════════════════ -->
    <section id="states">
      <h2 class="section-title">States</h2>
      <p class="body-text">
        Every button passes through multiple states. CSS handles hover, focus, and active automatically.
        Disabled and loading states require the appropriate HTML attribute or <code>button.js</code>.
      </p>

      <div class="states-grid">
        <div class="state-card">
          <button class="btn btn-primary" tabindex="-1">Default</button>
          <span class="state-label">Default</span>
        </div>

        <div class="state-card">
          <!-- Simulated hover via inline style for static demo -->
          <button class="btn btn-primary" style="background:#E8314F;border-color:#E8314F;box-shadow:0 6px 20px rgba(0,0,0,0.14);" tabindex="-1">Hover</button>
          <span class="state-label">Hover</span>
        </div>

        <div class="state-card">
          <button class="btn btn-primary" style="transform:scale(0.97);background:#CC2B47;" tabindex="-1">Active</button>
          <span class="state-label">Active / Pressed</span>
        </div>

        <div class="state-card">
          <button class="btn btn-primary" style="box-shadow:0 0 0 3px rgba(255,56,92,0.30);" tabindex="-1">Focus</button>
          <span class="state-label">Focus (keyboard)</span>
        </div>

        <div class="state-card">
          <button class="btn btn-primary" disabled>Disabled</button>
          <span class="state-label">Disabled</span>
        </div>

        <div class="state-card">
          <button class="btn btn-primary" data-loading="true" aria-busy="true" disabled>
            <span class="btn-spinner" aria-hidden="true"></span>
            Booking…
          </button>
          <span class="state-label">Loading</span>
        </div>

        <div class="state-card">
          <button class="btn btn-toggle is-selected" aria-pressed="true">Selected</button>
          <span class="state-label">Toggle Selected</span>
        </div>

        <div class="state-card">
          <button class="btn btn-toggle" aria-pressed="false">Unselected</button>
          <span class="state-label">Toggle Default</span>
        </div>
      </div>

      <!-- Loading JS demo -->
      <p class="subsection-title" style="margin-top:32px;">Loading State — Interactive</p>
      <p class="body-text">
        The loading state is managed by <code>button.js</code>. Call <code>ButtonSystem.loading(el, true)</code>
        to activate, and <code>ButtonSystem.loading(el, false)</code> to restore. Or add
        <code>data-loading-on-click</code> for automatic activation on click.
      </p>

      <div class="demo-stage">
        <button class="btn btn-primary" id="loadingDemo" data-loading-text="Booking…">
          Book Now
        </button>
        <button class="btn btn-outline btn-sm" onclick="triggerLoadingDemo()">
          Simulate loading
        </button>
      </div>

      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">JavaScript</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="k">const</span> btn = document.<span class="k">querySelector</span>(<span class="s">'#myBtn'</span>);

<span class="c">// Start loading</span>
ButtonSystem.<span class="k">loading</span>(btn, <span class="k">true</span>);

<span class="c">// Stop loading (e.g. after API response)</span>
ButtonSystem.<span class="k">loading</span>(btn, <span class="k">false</span>);

<span class="c">// Or: auto-load on click with custom text</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span>
        <span class="a">data-loading-on-click</span>
        <span class="a">data-loading-text</span>=<span class="s">"Booking…"</span><span class="t">&gt;</span>Book Now<span class="t">&lt;/button&gt;</span></code></pre>
      </div>

      <!-- Disabled state notes -->
      <div class="note warn" style="margin-top:24px;">
        <p>Always use the native <code>disabled</code> attribute on <code>&lt;button&gt;</code> elements.
        For <code>&lt;a&gt;</code> tags used as buttons, use <code>aria-disabled="true"</code> and
        <code>tabindex="-1"</code> to prevent keyboard access.</p>
      </div>
    </section>

    <hr class="rule">


    <!-- ════════════════════════════════════════
         BUTTON GROUPS
    ════════════════════════════════════════ -->
    <section id="groups">
      <h2 class="section-title">Button Groups</h2>
      <p class="body-text">
        Use <code>.btn-group</code> for spaced groups (filters, toolbars) and
        <code>.btn-group-attached</code> for segmented, joined controls.
      </p>

      <p class="subsection-title">Spaced Group</p>
      <div class="demo-stage">
        <div class="btn-group">
          <button class="btn btn-primary">Confirm</button>
          <button class="btn btn-outline">Save Draft</button>
          <button class="btn btn-ghost">Cancel</button>
        </div>
      </div>

      <p class="subsection-title">Attached / Segmented</p>
      <div class="demo-stage">
        <div class="btn-group-attached">
          <button class="btn btn-outline">Day</button>
          <button class="btn btn-outline">Week</button>
          <button class="btn btn-outline">Month</button>
        </div>
      </div>

      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">HTML — Groups</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="c">&lt;!-- Spaced --&gt;</span>
<span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"btn-group"</span><span class="t">&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span><span class="t">&gt;</span>Confirm<span class="t">&lt;/button&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-outline"</span><span class="t">&gt;</span>Save Draft<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;/div&gt;</span>

<span class="c">&lt;!-- Attached --&gt;</span>
<span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"btn-group-attached"</span><span class="t">&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-outline"</span><span class="t">&gt;</span>Day<span class="t">&lt;/button&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-outline"</span><span class="t">&gt;</span>Week<span class="t">&lt;/button&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-outline"</span><span class="t">&gt;</span>Month<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;/div&gt;</span></code></pre>
      </div>
    </section>

    <hr class="rule">


    <!-- ════════════════════════════════════════
         ACCESSIBILITY
    ════════════════════════════════════════ -->
    <section id="accessibility">
      <h2 class="section-title">Accessibility</h2>
      <p class="body-text">
        The button system is built to meet <strong>WCAG 2.1 AA</strong>. All interactive states have visible
        focus rings (3px offset with opacity), colours pass contrast requirements, and touch targets
        meet the 44×44px minimum. Follow these rules to keep every button accessible:
      </p>

      <div class="spec-table">
        <div class="spec-row"><span class="spec-key">Minimum touch target</span><span class="spec-val">44×44px (met by default md size)</span></div>
        <div class="spec-row"><span class="spec-key">Focus indicator</span><span class="spec-val">3px ring, auto-applied on :focus-visible</span></div>
        <div class="spec-row"><span class="spec-key">Color contrast</span><span class="spec-val">≥ 4.5:1 for all text on background</span></div>
        <div class="spec-row"><span class="spec-key">Keyboard</span><span class="spec-val">Space / Enter activates; Tab navigates</span></div>
        <div class="spec-row"><span class="spec-key">Screen reader</span><span class="spec-val">Use descriptive text or aria-label</span></div>
        <div class="spec-row"><span class="spec-key">Disabled</span><span class="spec-val">native disabled attr or aria-disabled="true"</span></div>
        <div class="spec-row"><span class="spec-key">Loading</span><span class="spec-val">aria-busy="true" + visually hidden status</span></div>
        <div class="spec-row"><span class="spec-key">Toggle</span><span class="spec-val">aria-pressed="true/false" kept in sync by JS</span></div>
        <div class="spec-row"><span class="spec-key">Icon-only</span><span class="spec-val">Always provide aria-label on the button</span></div>
      </div>

      <div class="note success" style="margin-top:20px;">
        <p><strong>Tip:</strong> Never rely on colour alone to communicate button state.
        Always pair colour changes with shape, text, or icon changes so the UI is usable
        for colour-blind users.</p>
      </div>
    </section>

    <hr class="rule">


    <!-- ════════════════════════════════════════
         BEST PRACTICES
    ════════════════════════════════════════ -->
    <section id="best-practices">
      <h2 class="section-title">Best Practices</h2>

      <div class="practices-grid">

        <div class="practice-card do">
          <span class="practice-badge">✓ Do</span>
          <p class="practice-title">One primary button per view</p>
          <p class="practice-desc">Use <code>.btn-primary</code> for the single most important action. A page should have at most one.</p>
        </div>

        <div class="practice-card dont">
          <span class="practice-badge">✗ Don't</span>
          <p class="practice-title">Stack multiple primary buttons</p>
          <p class="practice-desc">Using <code>.btn-primary</code> for every CTA removes hierarchy and confuses users about what to do next.</p>
        </div>

        <div class="practice-card do">
          <span class="practice-badge">✓ Do</span>
          <p class="practice-title">Use verb-led labels</p>
          <p class="practice-desc">"Book Now", "Save", "Confirm Stay" — labels should state exactly what happens when clicked.</p>
        </div>

        <div class="practice-card dont">
          <span class="practice-badge">✗ Don't</span>
          <p class="practice-title">Use vague labels</p>
          <p class="practice-desc">"Click Here", "Submit", "OK" give users no context about the outcome of the action.</p>
        </div>

        <div class="practice-card do">
          <span class="practice-badge">✓ Do</span>
          <p class="practice-title">Use native &lt;button&gt;</p>
          <p class="practice-desc">Always prefer <code>&lt;button type="button"&gt;</code>. It is keyboard-focusable, activatable, and semantically correct by default.</p>
        </div>

        <div class="practice-card dont">
          <span class="practice-badge">✗ Don't</span>
          <p class="practice-title">Use &lt;div&gt; or &lt;span&gt; as buttons</p>
          <p class="practice-desc">Non-semantic elements require extensive ARIA and JS to replicate native button behaviour. Avoid unless absolutely necessary.</p>
        </div>

        <div class="practice-card do">
          <span class="practice-badge">✓ Do</span>
          <p class="practice-title">Confirm before destructive actions</p>
          <p class="practice-desc">Always follow a <code>.btn-danger</code> click with a confirmation dialog before executing irreversible operations.</p>
        </div>

        <div class="practice-card dont">
          <span class="practice-badge">✗ Don't</span>
          <p class="practice-title">Use danger for non-destructive actions</p>
          <p class="practice-desc">Red is a strong signal. Using it for "Close" or "Skip" trains users to ignore it — and hides real danger when it appears.</p>
        </div>

        <div class="practice-card do">
          <span class="practice-badge">✓ Do</span>
          <p class="practice-title">Show loading state on async actions</p>
          <p class="practice-desc">Use <code>ButtonSystem.loading(btn, true)</code> immediately when an async action starts. Prevents double-submission.</p>
        </div>

        <div class="practice-card dont">
          <span class="practice-badge">✗ Don't</span>
          <p class="practice-title">Leave buttons interactive during loading</p>
          <p class="practice-desc">Failing to disable a button while an API call is in-flight can cause duplicate bookings, payments, or form submissions.</p>
        </div>

        <div class="practice-card do">
          <span class="practice-badge">✓ Do</span>
          <p class="practice-title">Label icon-only buttons</p>
          <p class="practice-desc">Always add <code>aria-label="Share listing"</code> on <code>.btn-icon-only</code> buttons. Screen readers cannot infer meaning from icons.</p>
        </div>

        <div class="practice-card dont">
          <span class="practice-badge">✗ Don't</span>
          <p class="practice-title">Use icons as the sole indicator</p>
          <p class="practice-desc">On mobile and for users with cognitive disabilities, icon-only buttons can be ambiguous. Add a visible label when space permits.</p>
        </div>

      </div>
    </section>

    <hr class="rule">


  </main>

  <!-- ── Right TOC ──────────────────────────────────────────── -->
  <aside class="sidebar-right">
    <?php include __DIR__ . '/right_sidebar.php'; ?>
  </aside>

</div>

<footer class="footer">
  <span class="footer-text">HolidaySeva Design Guidelines · Button</span>
  <span class="footer-text">v1.0</span>
</footer>


<script>
  /* ── Copy code ─────────────────────────────────────────── */
  function copyCode(btn) {
    const text = btn.closest('.code-block').querySelector('pre').innerText;
    navigator.clipboard.writeText(text).then(() => {
      btn.textContent = 'Copied';
      setTimeout(() => btn.textContent = 'Copy', 1800);
    });
  }

  /* ── Loading demo ──────────────────────────────────────── */
  function triggerLoadingDemo() {
    const btn = document.getElementById('loadingDemo');
    ButtonSystem.loading(btn, true);
    setTimeout(() => ButtonSystem.loading(btn, false), 2400);
  }

  /* ── Scroll spy for TOC ────────────────────────────────── */
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
</script>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>