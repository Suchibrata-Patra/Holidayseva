<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Button | HolidaySeva Design Guidelines</title>

  <link rel="stylesheet" href="/design-system.css">
  <link rel="stylesheet" href="https://holidayseva.com/UI/Atom/button/button.css">
  <script defer src="https://holidayseva.com/UI/Atom/button/button.js"></script>

  <style>
    :root { --mono: "SF Mono", "Fira Code", monospace; }

    /* ── Hero strip ──────────────────────────────── */
    .btn-hero-strip {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 12px;
      padding: 36px 0 4px;
    }

    /* ── Section shell ───────────────────────────── */
    .doc-section { padding: 56px 0 0; }
    .doc-section + .doc-section {
      border-top: 1px solid #e5e5ea;
      margin-top: 56px;
    }

    /* ── Typography ──────────────────────────────── */
    .doc-eyebrow {
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: #aeaeb2;
      margin: 0 0 10px;
      -webkit-font-smoothing: antialiased;
    }
    .doc-h2 {
      font-size: 28px;
      font-weight: 700;
      letter-spacing: -0.03em;
      color: #1d1d1f;
      margin: 0 0 14px;
      line-height: 1.2;
      -webkit-font-smoothing: antialiased;
    }
    .doc-lead {
      font-size: 17px;
      line-height: 1.65;
      color: #424245;
      max-width: 620px;
      margin: 0 0 28px;
      letter-spacing: -0.01em;
      -webkit-font-smoothing: antialiased;
    }
    .doc-body {
      font-size: 15px;
      line-height: 1.72;
      color: #424245;
      max-width: 620px;
      margin: 0 0 20px;
      letter-spacing: -0.005em;
      -webkit-font-smoothing: antialiased;
    }
    .doc-h3 {
      font-size: 19px;
      font-weight: 600;
      letter-spacing: -0.02em;
      color: #1d1d1f;
      margin: 40px 0 10px;
      -webkit-font-smoothing: antialiased;
    }
    code {
      font-family: var(--mono);
      font-size: 0.84em;
      background: #f2f2f7;
      color: #c0392b;
      padding: 2px 6px;
      border-radius: 5px;
    }

    /* ── Preview stage ───────────────────────────── */
    .preview {
      background: #fafafa;
      border: 1px solid #e5e5ea;
      border-radius: 16px;
      padding: 40px 32px;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 12px;
      margin: 24px 0 0;
    }
    .preview.dark {
      background: #1d1d1f;
      border-color: #3a3a3c;
    }
    .preview.col {
      flex-direction: column;
      align-items: flex-start;
    }

    /* ── Variant table ───────────────────────────── */
    .variant-list {
      margin: 32px 0 0;
      border: 1px solid #e5e5ea;
      border-radius: 16px;
      overflow: hidden;
    }
    .variant-row {
      display: grid;
      grid-template-columns: 190px 1fr 1fr;
      align-items: center;
      padding: 22px 24px;
      gap: 28px;
      border-bottom: 1px solid #f2f2f7;
    }
    .variant-row:last-child { border-bottom: none; }
    .variant-row:nth-child(even) { background: #fafafa; }
    .variant-label {
      font-size: 13px;
      font-weight: 600;
      color: #1d1d1f;
      letter-spacing: -0.01em;
      -webkit-font-smoothing: antialiased;
    }
    .variant-label span {
      display: block;
      font-weight: 400;
      color: #86868b;
      font-size: 12px;
      margin-top: 3px;
      letter-spacing: 0;
    }
    .variant-preview {
      display: flex;
      align-items: center;
      gap: 10px;
      flex-wrap: wrap;
    }

    /* ── Size ruler ──────────────────────────────── */
    .size-ruler {
      display: flex;
      align-items: flex-end;
      gap: 24px;
      padding: 40px 32px;
      background: #fafafa;
      border: 1px solid #e5e5ea;
      border-radius: 16px;
      flex-wrap: wrap;
      margin: 24px 0 0;
    }
    .size-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
    }
    .size-tag {
      font-size: 11px;
      font-weight: 500;
      font-family: var(--mono);
      color: #aeaeb2;
      letter-spacing: 0.03em;
    }

    /* ── States row ──────────────────────────────── */
    .states-row {
      display: flex;
      flex-wrap: wrap;
      gap: 36px;
      padding: 40px 32px;
      background: #fafafa;
      border: 1px solid #e5e5ea;
      border-radius: 16px;
      margin: 24px 0 0;
    }
    .state-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 12px;
    }
    .state-tag {
      font-size: 11px;
      font-weight: 500;
      color: #aeaeb2;
      font-family: var(--mono);
    }

    /* ── Code block ──────────────────────────────── */
    .code-block {
      border: 1px solid #e5e5ea;
      border-radius: 12px;
      overflow: hidden;
      margin: 20px 0 0;
      background: #f9f9fb;
    }
    .code-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 8px 16px;
      background: #f2f2f7;
      border-bottom: 1px solid #e5e5ea;
    }
    .code-lang {
      font-size: 11px;
      font-weight: 700;
      font-family: var(--mono);
      color: #aeaeb2;
      text-transform: uppercase;
      letter-spacing: 0.07em;
    }
    .copy-btn {
      font-size: 12px;
      font-weight: 500;
      color: #86868b;
      background: transparent;
      border: 1px solid #d2d2d7;
      border-radius: 6px;
      padding: 3px 10px;
      cursor: pointer;
      font-family: -apple-system, sans-serif;
      transition: background 0.1s;
    }
    .copy-btn:hover { background: #e5e5ea; }
    .code-block pre {
      margin: 0;
      padding: 20px;
      font-family: var(--mono);
      font-size: 13px;
      line-height: 1.7;
      color: #1d1d1f;
      overflow-x: auto;
      -webkit-font-smoothing: antialiased;
    }
    /* Syntax */
    .t  { color: #e04e2f; }
    .a  { color: #2879c0; }
    .s  { color: #2e9e5b; }
    .c  { color: #aeaeb2; font-style: italic; }
    .k  { color: #9b59b6; }

    /* ── Spec table ──────────────────────────────── */
    .spec-table {
      width: 100%;
      border-collapse: collapse;
      margin: 24px 0 0;
      font-size: 14px;
    }
    .spec-table th {
      text-align: left;
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.07em;
      color: #aeaeb2;
      padding: 0 16px 10px 0;
      border-bottom: 1px solid #e5e5ea;
    }
    .spec-table td {
      padding: 11px 16px 11px 0;
      border-bottom: 1px solid #f2f2f7;
      color: #424245;
      vertical-align: top;
      -webkit-font-smoothing: antialiased;
      font-size: 14px;
    }
    .spec-table td:first-child {
      font-weight: 600;
      color: #1d1d1f;
      white-space: nowrap;
    }

    /* ── Anatomy ─────────────────────────────────── */
    .anatomy-wrap {
      padding: 56px 40px;
      background: #fafafa;
      border: 1px solid #e5e5ea;
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 24px 0 0;
      position: relative;
    }
    .anatomy-btn-wrap { position: relative; display: inline-flex; }
    .ann {
      position: absolute;
      display: flex;
      align-items: center;
      gap: 6px;
      white-space: nowrap;
      font-size: 11.5px;
      font-family: var(--mono);
      color: #86868b;
      pointer-events: none;
    }
    .ann-dot { width: 5px; height: 5px; border-radius: 50%; background: #FF385C; flex-shrink: 0; }
    .ann-line { height: 1px; background: #d2d2d7; flex-shrink: 0; }
    .ann-top    { top: -30px; left: 0; }
    .ann-bottom { bottom: -30px; left: 24px; }
    .ann-right  { top: 50%; right: -148px; transform: translateY(-50%); flex-direction: row-reverse; }
    .ann-bottom2 { bottom: -30px; right: 24px; }

    /* ── Notes ───────────────────────────────────── */
    .note {
      display: flex;
      gap: 12px;
      padding: 14px 18px;
      background: #f2f2f7;
      border-radius: 10px;
      margin: 20px 0 0;
      font-size: 13.5px;
      line-height: 1.6;
      color: #424245;
      -webkit-font-smoothing: antialiased;
    }
    .note svg { flex-shrink: 0; margin-top: 1px; }
    .note.blue   { background: rgba(0,113,227,0.06); }
    .note.orange { background: rgba(196,85,8,0.07);  }

    /* ── Token callout ───────────────────────────── */
    .token-callout {
      border: 1px solid #e5e5ea;
      border-radius: 14px;
      overflow: hidden;
      margin: 24px 0 0;
    }
    .token-callout-header {
      padding: 13px 20px;
      background: #f2f2f7;
      border-bottom: 1px solid #e5e5ea;
      font-size: 13px;
      font-weight: 600;
      color: #1d1d1f;
      display: flex;
      align-items: center;
      gap: 8px;
      -webkit-font-smoothing: antialiased;
    }
    .token-callout .code-block { margin: 0; border: none; border-radius: 0; }

    /* ── Responsive ──────────────────────────────── */
    @media (max-width: 900px) {
      .variant-row { grid-template-columns: 160px 1fr; }
      .variant-row .code-block { display: none; }
    }
    @media (max-width: 600px) {
      .variant-row { grid-template-columns: 1fr; }
      .preview, .states-row, .size-ruler, .anatomy-wrap { padding: 28px 20px; }
      .doc-h2 { font-size: 22px; }
      .doc-lead { font-size: 15px; }
    }
  </style>
</head>
<body>

<?php include __DIR__ . '/header.php'; ?>
<?php include __DIR__ . '/drawer_sidebar.php'; ?>

<div class="page-layout">

  <!-- Left sidebar -->
  <aside class="sidebar-left">
    <?php include __DIR__ . '/left_sidebar.php'; ?>
  </aside>

  <!-- Main content -->
  <main class="page-main">


    <!-- ════════════════════════════════════
         OVERVIEW
    ════════════════════════════════════ -->
    <div id="overview">
      <p class="page-eyebrow">Components · Atom</p>
      <h1 class="page-title">Button</h1>
      <p class="page-lead">
        Buttons are the primary way users take action across HolidaySeva — from booking a stay
        to filtering results. The system covers every context with a consistent set of variants,
        sizes, and states.
      </p>
      <div class="btn-hero-strip">
        <button class="btn btn-primary">Book Now</button>
        <button class="btn btn-secondary">Explore Stays</button>
        <button class="btn btn-outline">Save</button>
        <button class="btn btn-ghost">Learn More</button>
        <button class="btn btn-soft">Filters</button>
        <button class="btn btn-accent">Contact Host</button>
      </div>
    </div>


    <!-- ════════════════════════════════════
         ANATOMY
    ════════════════════════════════════ -->
    <section class="doc-section" id="anatomy">
      <p class="doc-eyebrow">Structure</p>
      <h2 class="doc-h2">Anatomy</h2>
      <p class="doc-lead">Every button shares the same four-part structure. The container applies all visual styles via variant classes — icons and badges slot in naturally.</p>

      <div class="anatomy-wrap">
        <div class="anatomy-btn-wrap">

          <button class="btn btn-primary" style="pointer-events:none; padding:0 28px; gap:10px;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            Search Stays
          </button>

          <div class="ann ann-top">
            <div class="ann-dot"></div>
            <div class="ann-line" style="width:18px;"></div>
            <span>.btn container</span>
          </div>

          <div class="ann ann-bottom">
            <div class="ann-dot"></div>
            <div class="ann-line" style="width:18px;"></div>
            <span>.btn-icon</span>
          </div>

          <div class="ann ann-right">
            <div class="ann-line" style="width:18px;"></div>
            <div class="ann-dot"></div>
            <span>label</span>
          </div>

          <div class="ann ann-bottom2">
            <div class="ann-dot"></div>
            <div class="ann-line" style="width:18px;"></div>
            <span>padding</span>
          </div>
        </div>
      </div>

      <table class="spec-table" style="margin-top:32px;">
        <thead>
          <tr><th>Part</th><th>Class</th><th>Notes</th></tr>
        </thead>
        <tbody>
          <tr><td>Container</td><td><code>.btn</code> + variant</td><td>Handles padding, radius, colour, shadow, and transitions</td></tr>
          <tr><td>Leading icon</td><td><code>.btn-icon</code></td><td>Optional SVG — inherits <code>currentColor</code> automatically</td></tr>
          <tr><td>Label</td><td>Text node</td><td>Use <code>.btn-label</code> when hiding text during loading</td></tr>
          <tr><td>Badge</td><td><code>.btn-badge</code></td><td>Optional trailing count chip (e.g. cart quantity)</td></tr>
          <tr><td>Spinner</td><td><code>.btn-spinner</code></td><td>Injected by <code>button.js</code> during loading state</td></tr>
        </tbody>
      </table>
    </section>


    <!-- ════════════════════════════════════
         VARIANTS
    ════════════════════════════════════ -->
    <section class="doc-section" id="variations">
      <p class="doc-eyebrow">Styles</p>
      <h2 class="doc-h2">Variants</h2>
      <p class="doc-lead">Each variant has one job. Use them intentionally — the hierarchy between primary, secondary, and ghost tells users what to do first.</p>

      <div class="variant-list">

        <div class="variant-row">
          <div class="variant-label">Primary<span>One per view. The strongest CTA.</span></div>
          <div class="variant-preview">
            <button class="btn btn-primary">Book Now</button>
            <button class="btn btn-primary btn-sm">Book Now</button>
          </div>
          <div class="code-block">
            <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
            <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span><span class="t">&gt;</span>Book Now<span class="t">&lt;/button&gt;</span></code></pre>
          </div>
        </div>

        <div class="variant-row">
          <div class="variant-label">Secondary<span>Dark fill. Strong but subordinate.</span></div>
          <div class="variant-preview">
            <button class="btn btn-secondary">Explore Stays</button>
            <button class="btn btn-secondary btn-sm">Explore</button>
          </div>
          <div class="code-block">
            <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
            <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-secondary"</span><span class="t">&gt;</span>Explore<span class="t">&lt;/button&gt;</span></code></pre>
          </div>
        </div>

        <div class="variant-row">
          <div class="variant-label">Outline<span>Bordered, transparent. Cards & forms.</span></div>
          <div class="variant-preview">
            <button class="btn btn-outline">Save to Wishlist</button>
            <button class="btn btn-outline btn-sm">Save</button>
          </div>
          <div class="code-block">
            <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
            <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-outline"</span><span class="t">&gt;</span>Save<span class="t">&lt;/button&gt;</span></code></pre>
          </div>
        </div>

        <div class="variant-row">
          <div class="variant-label">Ghost<span>No border until hover. Toolbars & menus.</span></div>
          <div class="variant-preview">
            <button class="btn btn-ghost">Learn More</button>
            <button class="btn btn-ghost btn-sm">More</button>
          </div>
          <div class="code-block">
            <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
            <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-ghost"</span><span class="t">&gt;</span>Learn More<span class="t">&lt;/button&gt;</span></code></pre>
          </div>
        </div>

        <div class="variant-row">
          <div class="variant-label">Ghost Primary<span>Brand colour, no background.</span></div>
          <div class="variant-preview">
            <button class="btn btn-ghost-primary">View All Listings</button>
          </div>
          <div class="code-block">
            <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
            <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-ghost-primary"</span><span class="t">&gt;</span>View All<span class="t">&lt;/button&gt;</span></code></pre>
          </div>
        </div>

        <div class="variant-row">
          <div class="variant-label">Soft<span>Tinted fill. Filter chips & tags.</span></div>
          <div class="variant-preview">
            <button class="btn btn-soft">Apply Filters</button>
            <button class="btn btn-soft btn-sm">Filters</button>
          </div>
          <div class="code-block">
            <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
            <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-soft"</span><span class="t">&gt;</span>Filters<span class="t">&lt;/button&gt;</span></code></pre>
          </div>
        </div>

        <div class="variant-row">
          <div class="variant-label">Accent<span>Teal. Messaging & contact flows.</span></div>
          <div class="variant-preview">
            <button class="btn btn-accent">Contact Host</button>
            <button class="btn btn-accent btn-sm">Message</button>
          </div>
          <div class="code-block">
            <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
            <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-accent"</span><span class="t">&gt;</span>Contact Host<span class="t">&lt;/button&gt;</span></code></pre>
          </div>
        </div>

        <div class="variant-row">
          <div class="variant-label">Danger<span>Destructive actions only. Always confirm.</span></div>
          <div class="variant-preview">
            <button class="btn btn-danger">Cancel Booking</button>
            <button class="btn btn-danger-outline btn-sm">Remove</button>
          </div>
          <div class="code-block">
            <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
            <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-danger"</span><span class="t">&gt;</span>Cancel Booking<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-danger-outline"</span><span class="t">&gt;</span>Remove<span class="t">&lt;/button&gt;</span></code></pre>
          </div>
        </div>

        <div class="variant-row">
          <div class="variant-label">White<span>For dark or image hero sections.</span></div>
          <div class="variant-preview" style="background:#1d1d1f; border-radius:10px; padding:16px 20px;">
            <button class="btn btn-white">Explore Destinations</button>
          </div>
          <div class="code-block">
            <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
            <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-white"</span><span class="t">&gt;</span>Explore<span class="t">&lt;/button&gt;</span></code></pre>
          </div>
        </div>

        <div class="variant-row">
          <div class="variant-label">Link<span>Inline text actions. Navigation only.</span></div>
          <div class="variant-preview">
            <button class="btn btn-link">View full cancellation policy</button>
          </div>
          <div class="code-block">
            <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
            <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-link"</span><span class="t">&gt;</span>View policy<span class="t">&lt;/button&gt;</span></code></pre>
          </div>
        </div>

      </div>
    </section>


    <!-- ════════════════════════════════════
         ICONS & BADGES
    ════════════════════════════════════ -->
    <section class="doc-section" id="icons">
      <p class="doc-eyebrow">Composition</p>
      <h2 class="doc-h2">Icons &amp; Badges</h2>
      <p class="doc-lead">Add a leading icon, trailing icon, or count badge. Icons inherit the button's colour via <code>currentColor</code> — no extra styling needed.</p>

      <div class="preview">
        <button class="btn btn-primary">
          <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          Search
        </button>
        <button class="btn btn-outline">
          Save to List
          <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
        </button>
        <button class="btn btn-outline btn-icon-only" aria-label="Share listing">
          <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
        </button>
        <button class="btn btn-secondary">
          Cart <span class="btn-badge">3</span>
        </button>
        <button class="btn btn-ghost btn-icon-only" aria-label="More options">
          <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="5" r="1"/><circle cx="12" cy="12" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
      </div>

      <div class="code-block">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="c">&lt;!-- Leading icon --&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span><span class="t">&gt;</span>
  <span class="t">&lt;svg</span> <span class="a">class</span>=<span class="s">"btn-icon"</span> <span class="a">aria-hidden</span>=<span class="s">"true"</span><span class="t">&gt;</span>...<span class="t">&lt;/svg&gt;</span>
  Search
<span class="t">&lt;/button&gt;</span>

<span class="c">&lt;!-- Icon-only — always include aria-label --&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-outline btn-icon-only"</span>
        <span class="a">aria-label</span>=<span class="s">"Share listing"</span><span class="t">&gt;</span>
  <span class="t">&lt;svg</span> <span class="a">class</span>=<span class="s">"btn-icon"</span> <span class="a">aria-hidden</span>=<span class="s">"true"</span><span class="t">&gt;</span>...<span class="t">&lt;/svg&gt;</span>
<span class="t">&lt;/button&gt;</span>

<span class="c">&lt;!-- Badge --&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-secondary"</span><span class="t">&gt;</span>
  Cart <span class="t">&lt;span</span> <span class="a">class</span>=<span class="s">"btn-badge"</span><span class="t">&gt;</span>3<span class="t">&lt;/span&gt;</span>
<span class="t">&lt;/button&gt;</span></code></pre>
      </div>
    </section>


    <!-- ════════════════════════════════════
         SIZES
    ════════════════════════════════════ -->
    <section class="doc-section" id="sizes">
      <p class="doc-eyebrow">Scale</p>
      <h2 class="doc-h2">Sizes</h2>
      <p class="doc-lead">Five sizes. The default (no size class) is <strong>md</strong> at 44px — Apple's minimum touch target. Sizes scale down automatically on mobile.</p>

      <div class="size-ruler">
        <div class="size-item">
          <button class="btn btn-primary btn-xl">Get Started</button>
          <span class="size-tag">xl · 60px</span>
        </div>
        <div class="size-item">
          <button class="btn btn-primary btn-lg">Book a Stay</button>
          <span class="size-tag">lg · 52px</span>
        </div>
        <div class="size-item">
          <button class="btn btn-primary">Book Now</button>
          <span class="size-tag">md · 44px</span>
        </div>
        <div class="size-item">
          <button class="btn btn-primary btn-sm">Save</button>
          <span class="size-tag">sm · 36px</span>
        </div>
        <div class="size-item">
          <button class="btn btn-primary btn-xs">New</button>
          <span class="size-tag">xs · 28px</span>
        </div>
      </div>

      <div class="code-block">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary btn-xl"</span><span class="t">&gt;</span>XL<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary btn-lg"</span><span class="t">&gt;</span>Large<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span><span class="t">&gt;</span>Default md<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary btn-sm"</span><span class="t">&gt;</span>Small<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary btn-xs"</span><span class="t">&gt;</span>XS<span class="t">&lt;/button&gt;</span></code></pre>
      </div>

      <h3 class="doc-h3">Full width</h3>
      <p class="doc-body">Add <code>.btn-block</code> to fill the container width. Used in checkout flows and mobile modals.</p>

      <div class="preview col" style="max-width: 380px; gap: 10px;">
        <button class="btn btn-primary btn-block">Confirm &amp; Pay</button>
        <button class="btn btn-outline btn-block">Save for Later</button>
      </div>

      <div class="code-block">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary btn-block"</span><span class="t">&gt;</span>Confirm &amp; Pay<span class="t">&lt;/button&gt;</span></code></pre>
      </div>
    </section>


    <!-- ════════════════════════════════════
         STATES
    ════════════════════════════════════ -->
    <section class="doc-section" id="states">
      <p class="doc-eyebrow">Interaction</p>
      <h2 class="doc-h2">States</h2>
      <p class="doc-lead">Hover, focus, active, disabled, and loading states are all handled automatically. Focus rings only appear on keyboard navigation via <code>:focus-visible</code>.</p>

      <div class="states-row">
        <div class="state-item">
          <button class="btn btn-primary" tabindex="-1">Default</button>
          <span class="state-tag">default</span>
        </div>
        <div class="state-item">
          <button class="btn btn-primary" style="background:#E8314F;border-color:#E8314F;box-shadow:0 6px 20px rgba(0,0,0,0.14);" tabindex="-1">Hover</button>
          <span class="state-tag">hover</span>
        </div>
        <div class="state-item">
          <button class="btn btn-primary" style="transform:scale(0.97);background:#CC2B47;" tabindex="-1">Active</button>
          <span class="state-tag">active</span>
        </div>
        <div class="state-item">
          <button class="btn btn-primary" style="box-shadow:0 0 0 3px rgba(255,56,92,0.30);" tabindex="-1">Focus</button>
          <span class="state-tag">focus</span>
        </div>
        <div class="state-item">
          <button class="btn btn-primary" disabled>Disabled</button>
          <span class="state-tag">disabled</span>
        </div>
        <div class="state-item">
          <button class="btn btn-primary" disabled style="opacity:0.82;">
            <span class="btn-spinner" aria-hidden="true"></span>
            Booking…
          </button>
          <span class="state-tag">loading</span>
        </div>
      </div>

      <h3 class="doc-h3">Loading state</h3>
      <p class="doc-body">Call <code>ButtonSystem.loading(btn, true)</code> the moment an async action starts — it injects a spinner, disables the button, and sets <code>aria-busy</code>. Restore with <code>ButtonSystem.loading(btn, false)</code>.</p>

      <div class="preview">
        <button class="btn btn-primary" id="loadingDemo" data-loading-text="Booking…">Book Now</button>
        <button class="btn btn-outline btn-sm" onclick="triggerDemo()">Simulate</button>
      </div>

      <div class="code-block">
        <div class="code-bar"><span class="code-lang">JavaScript</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="k">const</span> btn = document.<span class="k">querySelector</span>(<span class="s">'#bookBtn'</span>);

ButtonSystem.<span class="k">loading</span>(btn, <span class="k">true</span>);   <span class="c">// start</span>
ButtonSystem.<span class="k">loading</span>(btn, <span class="k">false</span>);  <span class="c">// stop</span>

<span class="c">&lt;!-- Auto-trigger on click --&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span>
        <span class="a">data-loading-on-click</span>
        <span class="a">data-loading-text</span>=<span class="s">"Booking…"</span><span class="t">&gt;</span>Book Now<span class="t">&lt;/button&gt;</span></code></pre>
      </div>

      <h3 class="doc-h3">Toggle</h3>
      <p class="doc-body">Add <code>.btn-toggle</code> for selectable filter chips. <code>button.js</code> handles <code>aria-pressed</code> and <code>.is-selected</code> on every click.</p>

      <div class="preview">
        <div class="btn-group">
          <button class="btn btn-toggle is-selected" aria-pressed="true">Entire Place</button>
          <button class="btn btn-toggle" aria-pressed="false">Private Room</button>
          <button class="btn btn-toggle" aria-pressed="false">Shared Room</button>
        </div>
      </div>

      <div class="code-block">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"btn-group"</span><span class="t">&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-toggle is-selected"</span> <span class="a">aria-pressed</span>=<span class="s">"true"</span><span class="t">&gt;</span>Entire Place<span class="t">&lt;/button&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-toggle"</span> <span class="a">aria-pressed</span>=<span class="s">"false"</span><span class="t">&gt;</span>Private Room<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;/div&gt;</span></code></pre>
      </div>
    </section>


    <!-- ════════════════════════════════════
         GROUPS
    ════════════════════════════════════ -->
    <section class="doc-section" id="groups">
      <p class="doc-eyebrow">Composition</p>
      <h2 class="doc-h2">Button Groups</h2>
      <p class="doc-lead">Use <code>.btn-group</code> for spaced sets and <code>.btn-group-attached</code> for joined segmented controls.</p>

      <h3 class="doc-h3">Spaced</h3>
      <div class="preview">
        <div class="btn-group">
          <button class="btn btn-primary">Confirm Booking</button>
          <button class="btn btn-outline">Save Draft</button>
          <button class="btn btn-ghost">Cancel</button>
        </div>
      </div>

      <h3 class="doc-h3">Attached</h3>
      <div class="preview">
        <div class="btn-group-attached">
          <button class="btn btn-outline">Day</button>
          <button class="btn btn-outline">Week</button>
          <button class="btn btn-outline">Month</button>
        </div>
      </div>

      <div class="code-block">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"btn-group"</span><span class="t">&gt;</span>               <span class="c">&lt;!-- spaced --&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span><span class="t">&gt;</span>Confirm<span class="t">&lt;/button&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-outline"</span><span class="t">&gt;</span>Save<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;/div&gt;</span>

<span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"btn-group-attached"</span><span class="t">&gt;</span>        <span class="c">&lt;!-- joined --&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-outline"</span><span class="t">&gt;</span>Day<span class="t">&lt;/button&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-outline"</span><span class="t">&gt;</span>Week<span class="t">&lt;/button&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-outline"</span><span class="t">&gt;</span>Month<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;/div&gt;</span></code></pre>
      </div>
    </section>


    <!-- ════════════════════════════════════
         ACCESSIBILITY
    ════════════════════════════════════ -->
    <section class="doc-section" id="accessibility">
      <p class="doc-eyebrow">Standards</p>
      <h2 class="doc-h2">Accessibility</h2>
      <p class="doc-lead">The system meets WCAG 2.1 AA. Focus rings, colour contrast, 44px touch targets, and ARIA attributes are built in.</p>

      <table class="spec-table">
        <thead>
          <tr><th>Requirement</th><th>How it's met</th></tr>
        </thead>
        <tbody>
          <tr><td>Touch target</td><td>Default md height is 44px — Apple's recommended minimum</td></tr>
          <tr><td>Focus ring</td><td>3px offset ring on <code>:focus-visible</code> — keyboard-only, invisible on mouse click</td></tr>
          <tr><td>Colour contrast</td><td>All variants tested at ≥ 4.5:1 against their backgrounds</td></tr>
          <tr><td>Disabled</td><td>Use native <code>disabled</code> attribute — no extra ARIA needed</td></tr>
          <tr><td>Loading</td><td><code>aria-busy="true"</code> set automatically by <code>button.js</code></td></tr>
          <tr><td>Toggle</td><td><code>aria-pressed</code> kept in sync by <code>button.js</code></td></tr>
          <tr><td>Icon-only</td><td>Always add <code>aria-label="…"</code> on the button element itself</td></tr>
        </tbody>
      </table>

      <div class="note blue" style="margin-top:24px;">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><circle cx="8" cy="8" r="6.5" stroke="#0071e3" stroke-width="1.3"/><path d="M8 7v4M8 5.5v.5" stroke="#0071e3" stroke-width="1.3" stroke-linecap="round"/></svg>
        <span>Always use a native <code>&lt;button&gt;</code> element. Avoid <code>&lt;div&gt;</code> — you'd need extensive ARIA wiring to replicate what the browser gives you for free.</span>
      </div>
    </section>


    <!-- ════════════════════════════════════
         USAGE
    ════════════════════════════════════ -->
    <section class="doc-section" id="usage">
      <p class="doc-eyebrow">Guidelines</p>
      <h2 class="doc-h2">Usage</h2>
      <p class="doc-lead">A few principles that keep buttons consistent and purposeful across the product.</p>

      <h3 class="doc-h3">One primary button per view</h3>
      <p class="doc-body">The primary button signals the most important action on the screen. Using more than one dilutes that signal. If two strong actions are needed, make one primary and one outline.</p>

      <h3 class="doc-h3">Label with a verb</h3>
      <p class="doc-body">"Book Now", "Save to Wishlist", "Contact Host" — not "Submit" or "OK". The label should tell the user exactly what will happen when they tap.</p>

      <h3 class="doc-h3">Confirm before destroying</h3>
      <p class="doc-body">A <code>btn-danger</code> tap should always be followed by a confirmation dialog before executing. Never delete data on the first tap.</p>

      <h3 class="doc-h3">Show progress on async actions</h3>
      <p class="doc-body">The moment a button triggers an API call, enter the loading state. This prevents double-submission and reassures the user that something is happening.</p>

      <div class="note orange">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M8 2L14 13H2L8 2z" stroke="#c45508" stroke-width="1.3" stroke-linejoin="round"/><path d="M8 6.5v3M8 11v.5" stroke="#c45508" stroke-width="1.3" stroke-linecap="round"/></svg>
        <span>Never rely on colour alone to communicate state. Disabled buttons must also have reduced opacity. Loading buttons must show a spinner — not just a colour shift.</span>
      </div>
    </section>


    <!-- ════════════════════════════════════
         INTEGRATION
    ════════════════════════════════════ -->
    <section class="doc-section" id="integration">
      <p class="doc-eyebrow">Setup</p>
      <h2 class="doc-h2">Integration</h2>
      <p class="doc-body">Import <code>button.css</code> in your <code>&lt;head&gt;</code> after <code>colors.css</code>. Add <code>button.js</code> before <code>&lt;/body&gt;</code> only if you need loading states, ripple, or toggle behaviour.</p>

      <div class="code-block">
        <div class="code-bar"><span class="code-lang">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="c">&lt;!-- In &lt;head&gt; --&gt;</span>
<span class="t">&lt;link</span> <span class="a">rel</span>=<span class="s">"stylesheet"</span> <span class="a">href</span>=<span class="s">"https://holidayseva.com/UI/Atom/button/button.css"</span><span class="t">&gt;</span>

<span class="c">&lt;!-- Before &lt;/body&gt; (optional) --&gt;</span>
<span class="t">&lt;script</span> <span class="a">src</span>=<span class="s">"https://holidayseva.com/UI/Atom/button/button.js"</span><span class="t">&gt;&lt;/script&gt;</span></code></pre>
      </div>

      <h3 class="doc-h3">File structure</h3>
      <div class="code-block">
        <div class="code-bar"><span class="code-lang">Directory</span></div>
        <pre><code>holidayseva.com/
└── UI/
    └── Atom/
        └── button/
            ├── button.css
            └── button.js</code></pre>
      </div>

      <h3 class="doc-h3">Required <code>colors.css</code> additions</h3>
      <p class="doc-body">These tokens are used by <code>button.css</code> but are not yet in your central <code>colors.css</code>. Add them to keep the token system consistent.</p>

      <div class="token-callout">
        <div class="token-callout-header">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none" aria-hidden="true"><rect x="1.5" y="4" width="13" height="8" rx="1.5" stroke="currentColor" stroke-width="1.3"/><path d="M4 8h5M4 10.5h3" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>
          Add to colors.css
        </div>
        <div class="code-block">
          <div class="code-bar"><span class="code-lang">CSS</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
          <pre><code><span class="c">/* Primary interaction states */</span>
--color-primary-hover:    #E8314F;
--color-primary-pressed:  #CC2B47;

<span class="c">/* Ghost hover backgrounds */</span>
--color-ghost-hover-bg:   rgba(34, 34, 34, 0.06);
--color-ghost-pressed-bg: rgba(34, 34, 34, 0.10);

<span class="c">/* Danger interaction states */</span>
--color-danger-hover:     #A82C10;
--color-danger-pressed:   #8E240D;

<span class="c">/* Disabled surfaces */</span>
--color-surface-disabled: #F5F5F5;
--color-text-disabled:    #B0B0B0;
--color-border-disabled:  #E0E0E0;</code></pre>
        </div>
      </div>

    </section>


  </main>

  <!-- Right TOC sidebar -->
  <aside class="sidebar-right">
    <div class="toc-wrap">

      <div class="toc-platforms">
        <p class="toc-platforms-label">Supported platforms</p>
        <div class="toc-platform-icons">
          <svg width="18" height="22" viewBox="0 0 18 22" fill="none" title="iPhone"><rect x="1" y="1" width="16" height="20" rx="3.5" stroke="currentColor" stroke-width="1.3"/><circle cx="9" cy="18" r="1" fill="currentColor"/><path d="M7 3h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
          <svg width="18" height="22" viewBox="0 0 18 22" fill="none" title="iPad"><rect x="1" y="1" width="16" height="20" rx="2.5" stroke="currentColor" stroke-width="1.3"/><circle cx="9" cy="18.5" r="1" fill="currentColor"/></svg>
          <svg width="24" height="22" viewBox="0 0 24 22" fill="none" title="Mac"><rect x="1" y="1" width="22" height="14" rx="2" stroke="currentColor" stroke-width="1.3"/><path d="M1 18h22" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/><path d="M8 18l1 3h6l1-3" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/></svg>
          <svg width="24" height="20" viewBox="0 0 24 20" fill="none" title="TV"><rect x="1" y="1" width="22" height="14" rx="2" stroke="currentColor" stroke-width="1.3"/><path d="M9 15v4M15 15v4M7 19h10" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
          <svg width="14" height="22" viewBox="0 0 14 22" fill="none" title="Watch"><rect x="1" y="5" width="12" height="12" rx="3" stroke="currentColor" stroke-width="1.3"/><path d="M4 5V3.5a1 1 0 011-1h4a1 1 0 011 1V5M4 17v1.5a1 1 0 001 1h4a1 1 0 001-1V17" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
        </div>
      </div>

      <ul class="toc-list" id="tocList">
        <li><a class="toc-link" href="#overview">Button</a></li>
        <li><a class="toc-link" href="#anatomy">Anatomy</a></li>
        <li><a class="toc-link" href="#variations">Variants</a></li>
        <li><a class="toc-link" href="#icons">Icons &amp; Badges</a></li>
        <li><a class="toc-link" href="#sizes">Sizes</a></li>
        <li><a class="toc-link" href="#states">States</a></li>
        <li><a class="toc-link" href="#groups">Button Groups</a></li>
        <li><a class="toc-link" href="#accessibility">Accessibility</a></li>
        <li><a class="toc-link" href="#usage">Usage</a></li>
        <li><a class="toc-link" href="#integration">Integration</a></li>
      </ul>

    </div>
  </aside>

</div>

<?php include __DIR__ . '/footer.php'; ?>

<script>
  function copyCode(btn) {
    navigator.clipboard.writeText(
      btn.closest('.code-block').querySelector('pre').innerText
    ).then(() => {
      btn.textContent = 'Copied';
      setTimeout(() => btn.textContent = 'Copy', 1800);
    });
  }

  function triggerDemo() {
    const btn = document.getElementById('loadingDemo');
    ButtonSystem.loading(btn, true);
    setTimeout(() => ButtonSystem.loading(btn, false), 2400);
  }
</script>

</body>
</html>