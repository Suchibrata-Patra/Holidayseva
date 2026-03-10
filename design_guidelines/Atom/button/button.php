<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Button | Design Guidelines</title>

  <!-- Design system: layout, typography, components -->
  <link rel="stylesheet" href="/design-system.css">
  <link rel="stylesheet" href="https://holidayseva.com/UI/Atom/button/button.css">
  <script defer src="https://holidayseva.com/UI/Atom/button/button.js"></script>

  <style>
    /* ── Swatch dot (reused from toggle.php spec-table pattern) ── */
    .spec-swatch {
      display: inline-block;
      width: 12px;
      height: 12px;
      border-radius: 50%;
      border: 1px solid rgba(0,0,0,0.12);
      vertical-align: middle;
      margin-right: 5px;
    }

    /* ── Variant preview strip inside demo-stage ── */
    .variant-strip {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 12px;
    }

    /* ── Size ruler ── */
    .size-ruler {
      display: flex;
      flex-wrap: wrap;
      align-items: flex-end;
      gap: 20px;
    }
    .size-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
    }
    .size-item-label {
      font-size: 11px;
      font-family: "SF Mono", "Fira Code", monospace;
      color: #aeaeb2;
      letter-spacing: 0.04em;
    }

    /* ── States row ── */
    .states-strip {
      display: flex;
      flex-wrap: wrap;
      align-items: flex-end;
      gap: 28px;
    }
    .state-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
    }
    .state-item-label {
      font-size: 11px;
      font-family: "SF Mono", "Fira Code", monospace;
      color: #aeaeb2;
    }

    /* ── Dark demo stage (for white button) ── */
    .demo-stage.dark-stage {
      background: #1d1d1f;
      border-color: #3a3a3c;
    }

    /* ── Block button preview cap ── */
    .block-preview {
      width: 100%;
      max-width: 360px;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
  </style>
</head>
<body>

<?php include __DIR__ . '/header.php'; ?>

<!-- Mobile drawer sidebar (hidden on desktop) -->
<?php include __DIR__ . '/drawer_sidebar.php'; ?>

<div class="page-layout">

  <!-- ── Left sidebar ──────────────────────── -->
  <aside class="sidebar-left">
    <?php include __DIR__ . '/left_sidebar.php'; ?>
  </aside>

  <!-- ── Main content ──────────────────────── -->
  <main class="page-main">

    <!-- ── Hero ─────────────────────────────── -->
    <div id="overview">
      <p class="page-eyebrow">Components · Atom</p>
      <h1 class="page-title">Button</h1>
      <p class="page-lead">The primary action element in HolidaySeva. Buttons trigger bookings, submit forms, and guide users through every flow — from search to checkout.</p>
    </div>

    <hr class="rule">

    <!-- ── Live demo ─────────────────────────── -->
    <div class="demo-stage">
      <span class="demo-label">Interactive demo — hover and click each variant</span>
      <div class="variant-strip">
        <button class="btn btn-primary">Book Now</button>
        <button class="btn btn-secondary">Explore</button>
        <button class="btn btn-outline">Save</button>
        <button class="btn btn-ghost">Learn More</button>
        <button class="btn btn-soft">Filters</button>
        <button class="btn btn-accent">Contact Host</button>
      </div>
    </div>

    <hr class="rule">

    <!-- ── Anatomy ───────────────────────────── -->
    <section id="anatomy">
      <h2 class="section-title">Anatomy</h2>
      <p class="body-text">
        A button is composed of a <strong>container</strong> (<code>.btn</code>), an optional
        <strong>leading icon</strong> (<code>.btn-icon</code>), a <strong>label</strong> (text node),
        and an optional <strong>badge</strong> (<code>.btn-badge</code>). The container owns all
        padding, radius, colour, shadow, and transition — icons inherit colour via
        <code>currentColor</code> automatically.
      </p>

      <div class="demo-stage" style="justify-content: center; gap: 32px; flex-wrap: wrap;">
        <!-- Annotated button -->
        <div style="position:relative; display:inline-flex; margin: 24px 80px 24px 16px;">
          <button class="btn btn-primary" style="pointer-events:none; gap:10px;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            Search Stays
          </button>
          <!-- container -->
          <div style="position:absolute;top:-26px;left:0;display:flex;align-items:center;gap:5px;font-size:11px;font-family:'SF Mono','Fira Code',monospace;color:#86868b;white-space:nowrap;">
            <span style="width:5px;height:5px;border-radius:50%;background:#FF385C;display:inline-block;flex-shrink:0;"></span>
            <span style="width:16px;height:1px;background:#d2d2d7;display:inline-block;"></span>
            <span>.btn container</span>
          </div>
          <!-- icon -->
          <div style="position:absolute;bottom:-26px;left:16px;display:flex;align-items:center;gap:5px;font-size:11px;font-family:'SF Mono','Fira Code',monospace;color:#86868b;white-space:nowrap;">
            <span style="width:5px;height:5px;border-radius:50%;background:#FF385C;display:inline-block;flex-shrink:0;"></span>
            <span style="width:16px;height:1px;background:#d2d2d7;display:inline-block;"></span>
            <span>.btn-icon</span>
          </div>
          <!-- label -->
          <div style="position:absolute;top:50%;right:-136px;transform:translateY(-50%);display:flex;align-items:center;gap:5px;font-size:11px;font-family:'SF Mono','Fira Code',monospace;color:#86868b;white-space:nowrap;">
            <span style="width:16px;height:1px;background:#d2d2d7;display:inline-block;"></span>
            <span style="width:5px;height:5px;border-radius:50%;background:#FF385C;display:inline-block;flex-shrink:0;"></span>
            <span>label</span>
          </div>
          <!-- padding -->
          <div style="position:absolute;bottom:-26px;right:16px;display:flex;align-items:center;gap:5px;font-size:11px;font-family:'SF Mono','Fira Code',monospace;color:#86868b;white-space:nowrap;">
            <span style="width:5px;height:5px;border-radius:50%;background:#FF385C;display:inline-block;flex-shrink:0;"></span>
            <span style="width:16px;height:1px;background:#d2d2d7;display:inline-block;"></span>
            <span>padding</span>
          </div>
        </div>
      </div>

      <div class="spec-table" style="margin-top: 28px;">
        <div class="spec-row"><span class="spec-key">Container</span><span class="spec-val"><code>.btn</code> + variant class</span></div>
        <div class="spec-row"><span class="spec-key">Leading icon</span><span class="spec-val"><code>.btn-icon</code> — optional, inherits currentColor</span></div>
        <div class="spec-row"><span class="spec-key">Label</span><span class="spec-val">Text node — use <code>.btn-label</code> during loading</span></div>
        <div class="spec-row"><span class="spec-key">Badge / count</span><span class="spec-val"><code>.btn-badge</code> — optional trailing chip</span></div>
        <div class="spec-row"><span class="spec-key">Spinner</span><span class="spec-val"><code>.btn-spinner</code> — injected by button.js</span></div>
      </div>
    </section>

    <hr class="rule">

    <!-- ── Specifications ────────────────────── -->
    <section id="specs">
      <h2 class="section-title">Specifications</h2>
      <p class="body-text">
        Default (md) dimensions as defined in <code>button.css</code>. Sizes scale down
        automatically at 480px and 360px breakpoints.
      </p>

      <div class="spec-table">
        <div class="spec-row"><span class="spec-key">Default height</span><span class="spec-val">44px — Apple touch target minimum</span></div>
        <div class="spec-row"><span class="spec-key">Horizontal padding</span><span class="spec-val">20px</span></div>
        <div class="spec-row"><span class="spec-key">Border radius</span><span class="spec-val">999px (pill)</span></div>
        <div class="spec-row"><span class="spec-key">Border width</span><span class="spec-val">1.5px</span></div>
        <div class="spec-row"><span class="spec-key">Font weight</span><span class="spec-val">600</span></div>
        <div class="spec-row"><span class="spec-key">Font size</span><span class="spec-val">15px</span></div>
        <div class="spec-row"><span class="spec-key">Letter spacing</span><span class="spec-val">−0.01em</span></div>
        <div class="spec-row"><span class="spec-key">Icon gap</span><span class="spec-val">8px</span></div>
        <div class="spec-row"><span class="spec-key">Press scale</span><span class="spec-val">scale(0.97) — 120ms</span></div>
        <div class="spec-row"><span class="spec-key">Transition</span><span class="spec-val">160ms colour/bg · 200ms shadow</span></div>
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
        <div class="spec-row">
          <span class="spec-key">Focus ring</span>
          <span class="spec-val">3px · rgba(255,56,92,0.30) — :focus-visible only</span>
        </div>
      </div>
    </section>

    <hr class="rule">

    <!-- ── Variants ──────────────────────────── -->
    <section id="variants">
      <h2 class="section-title">Variants</h2>
      <p class="body-text">
        Ten variants cover every UI context. Each has a single role — use them intentionally
        to maintain a clear visual hierarchy across the product.
      </p>

      <!-- Primary -->
      <p class="subsection-title">Primary</p>
      <p class="body-text">The strongest CTA. Use once per view for the single most important action — booking, confirming, submitting.</p>
      <div class="demo-stage">
        <button class="btn btn-primary btn-xl">xl</button>
        <button class="btn btn-primary btn-lg">lg</button>
        <button class="btn btn-primary">md (default)</button>
        <button class="btn btn-primary btn-sm">sm</button>
        <button class="btn btn-primary btn-xs">xs</button>
      </div>
      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">HTML</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span><span class="t">&gt;</span>Book Now<span class="t">&lt;/button&gt;</span></code></pre>
      </div>

      <!-- Secondary -->
      <p class="subsection-title">Secondary</p>
      <p class="body-text">Dark filled. Strong but subordinate — pair alongside a primary for a secondary action like "Browse All".</p>
      <div class="demo-stage">
        <button class="btn btn-secondary">Explore Stays</button>
        <button class="btn btn-secondary btn-sm">Explore</button>
      </div>
      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">HTML</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-secondary"</span><span class="t">&gt;</span>Explore Stays<span class="t">&lt;/button&gt;</span></code></pre>
      </div>

      <!-- Outline -->
      <p class="subsection-title">Outline</p>
      <p class="body-text">Bordered, transparent background. Ideal for secondary actions in cards and forms.</p>
      <div class="demo-stage">
        <button class="btn btn-outline">Save to Wishlist</button>
        <button class="btn btn-outline btn-sm">Save</button>
      </div>
      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">HTML</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-outline"</span><span class="t">&gt;</span>Save to Wishlist<span class="t">&lt;/button&gt;</span></code></pre>
      </div>

      <!-- Ghost -->
      <p class="subsection-title">Ghost</p>
      <p class="body-text">No visible border or background until hover. Use for low-emphasis actions in toolbars and menus.</p>
      <div class="demo-stage">
        <button class="btn btn-ghost">Learn More</button>
        <button class="btn btn-ghost-primary">View All Listings</button>
      </div>
      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">HTML</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-ghost"</span><span class="t">&gt;</span>Learn More<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-ghost-primary"</span><span class="t">&gt;</span>View All Listings<span class="t">&lt;/button&gt;</span></code></pre>
      </div>

      <!-- Soft -->
      <p class="subsection-title">Soft</p>
      <p class="body-text">Light tinted fill with brand colour text. Use for filter chips and category selectors.</p>
      <div class="demo-stage">
        <button class="btn btn-soft">Apply Filters</button>
        <button class="btn btn-soft btn-sm">Beachfront</button>
        <button class="btn btn-soft btn-sm">Pet-friendly</button>
      </div>
      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">HTML</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-soft"</span><span class="t">&gt;</span>Apply Filters<span class="t">&lt;/button&gt;</span></code></pre>
      </div>

      <!-- Accent -->
      <p class="subsection-title">Accent</p>
      <p class="body-text">HolidaySeva teal. Use for messaging and communication-related actions that complement the primary rose.</p>
      <div class="demo-stage">
        <button class="btn btn-accent">Contact Host</button>
        <button class="btn btn-accent btn-sm">Message</button>
      </div>
      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">HTML</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-accent"</span><span class="t">&gt;</span>Contact Host<span class="t">&lt;/button&gt;</span></code></pre>
      </div>

      <!-- Danger -->
      <p class="subsection-title">Danger</p>
      <p class="body-text">Destructive actions only. Always follow with a confirmation dialog before executing.</p>
      <div class="demo-stage">
        <button class="btn btn-danger">Cancel Booking</button>
        <button class="btn btn-danger-outline">Remove Listing</button>
      </div>
      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">HTML</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-danger"</span><span class="t">&gt;</span>Cancel Booking<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-danger-outline"</span><span class="t">&gt;</span>Remove Listing<span class="t">&lt;/button&gt;</span></code></pre>
      </div>

      <!-- White -->
      <p class="subsection-title">White</p>
      <p class="body-text">White filled for use on dark or image hero backgrounds.</p>
      <div class="demo-stage dark-stage">
        <button class="btn btn-white">Explore Destinations</button>
      </div>
      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">HTML</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-white"</span><span class="t">&gt;</span>Explore Destinations<span class="t">&lt;/button&gt;</span></code></pre>
      </div>

      <!-- Link -->
      <p class="subsection-title">Link</p>
      <p class="body-text">Looks like a hyperlink. Use inside body copy for navigation — not for triggering actions.</p>
      <div class="demo-stage">
        <button class="btn btn-link">View full cancellation policy</button>
      </div>
      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">HTML</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-link"</span><span class="t">&gt;</span>View full cancellation policy<span class="t">&lt;/button&gt;</span></code></pre>
      </div>
    </section>

    <hr class="rule">

    <!-- ── Sizes ──────────────────────────────── -->
    <section id="sizes">
      <h2 class="section-title">Sizes</h2>
      <p class="body-text">
        Five sizes adapt the button to its context. The default is <code>md</code> — no extra class needed.
        On screens below 480px, <code>xl</code> scales to <code>lg</code> and <code>lg</code> to <code>md</code>.
        Below 360px, the unsized button steps down to <code>sm</code>.
      </p>

      <div class="demo-stage">
        <div class="size-ruler">
          <div class="size-item">
            <button class="btn btn-primary btn-xl">Get Started</button>
            <span class="size-item-label">xl · 60px</span>
          </div>
          <div class="size-item">
            <button class="btn btn-primary btn-lg">Book a Stay</button>
            <span class="size-item-label">lg · 52px</span>
          </div>
          <div class="size-item">
            <button class="btn btn-primary">Book Now</button>
            <span class="size-item-label">md · 44px</span>
          </div>
          <div class="size-item">
            <button class="btn btn-primary btn-sm">Save</button>
            <span class="size-item-label">sm · 36px</span>
          </div>
          <div class="size-item">
            <button class="btn btn-primary btn-xs">New</button>
            <span class="size-item-label">xs · 28px</span>
          </div>
        </div>
      </div>

      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">HTML</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary btn-xl"</span><span class="t">&gt;</span>XL<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary btn-lg"</span><span class="t">&gt;</span>Large<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span><span class="t">&gt;</span>Default md<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary btn-sm"</span><span class="t">&gt;</span>Small<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary btn-xs"</span><span class="t">&gt;</span>XS<span class="t">&lt;/button&gt;</span></code></pre>
      </div>

      <p class="subsection-title">Full width</p>
      <p class="body-text">Add <code>.btn-block</code> to stretch any button to fill its container. Used in checkout modals and mobile forms.</p>
      <div class="demo-stage">
        <div class="block-preview">
          <button class="btn btn-primary btn-block">Confirm &amp; Pay</button>
          <button class="btn btn-outline btn-block">Save for Later</button>
        </div>
      </div>
      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">HTML</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary btn-block"</span><span class="t">&gt;</span>Confirm &amp; Pay<span class="t">&lt;/button&gt;</span></code></pre>
      </div>
    </section>

    <hr class="rule">

    <!-- ── Icons & Badges ────────────────────── -->
    <section id="icons">
      <h2 class="section-title">Icons &amp; Badges</h2>
      <p class="body-text">
        Add a <code>.btn-icon</code> SVG before or after the label. Icons are sized at
        <code>1.2em</code> and inherit <code>currentColor</code> — no extra colour needed.
        Use a <code>.btn-badge</code> span for trailing counts.
      </p>

      <div class="demo-stage">
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
        <div class="code-bar">
          <span class="code-lang-tag">HTML</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
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

    <hr class="rule">

    <!-- ── States ────────────────────────────── -->
    <section id="states">
      <h2 class="section-title">States</h2>
      <p class="body-text">
        Hover, focus, and active states are CSS-only. Focus rings appear only on
        keyboard navigation via <code>:focus-visible</code>. Disabled and loading require
        an attribute or a JS call.
      </p>

      <div class="demo-stage">
        <div class="states-strip">
          <div class="state-item">
            <button class="btn btn-primary" tabindex="-1">Default</button>
            <span class="state-item-label">default</span>
          </div>
          <div class="state-item">
            <button class="btn btn-primary" style="background:#E8314F;border-color:#E8314F;box-shadow:0 6px 20px rgba(0,0,0,0.14);" tabindex="-1">Hover</button>
            <span class="state-item-label">hover</span>
          </div>
          <div class="state-item">
            <button class="btn btn-primary" style="transform:scale(0.97);background:#CC2B47;border-color:#CC2B47;" tabindex="-1">Active</button>
            <span class="state-item-label">active</span>
          </div>
          <div class="state-item">
            <button class="btn btn-primary" style="box-shadow:0 0 0 3px rgba(255,56,92,0.30);" tabindex="-1">Focus</button>
            <span class="state-item-label">focus</span>
          </div>
          <div class="state-item">
            <button class="btn btn-primary" disabled>Disabled</button>
            <span class="state-item-label">disabled</span>
          </div>
          <div class="state-item">
            <button class="btn btn-primary" disabled style="opacity:0.82;">
              <span class="btn-spinner" aria-hidden="true"></span>
              Booking…
            </button>
            <span class="state-item-label">loading</span>
          </div>
        </div>
      </div>

      <p class="subsection-title">Disabled</p>
      <p class="body-text">Use the native <code>disabled</code> attribute on <code>&lt;button&gt;</code>. For <code>&lt;a&gt;</code> tags, use <code>aria-disabled="true"</code> and <code>tabindex="-1"</code>.</p>
      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">HTML</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span> <span class="a">disabled</span><span class="t">&gt;</span>Book Now<span class="t">&lt;/button&gt;</span></code></pre>
      </div>

      <p class="subsection-title">Loading — interactive demo</p>
      <p class="body-text">
        Call <code>ButtonSystem.loading(btn, true)</code> the moment an async action starts.
        It injects a spinner, disables the button, and sets <code>aria-busy="true"</code>.
        Restore with <code>ButtonSystem.loading(btn, false)</code>.
      </p>
      <div class="demo-stage">
        <button class="btn btn-primary" id="loadingDemo" data-loading-text="Booking…">Book Now</button>
        <button class="btn btn-outline btn-sm" onclick="triggerLoadingDemo()">Simulate loading</button>
      </div>
      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">JavaScript</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="k">const</span> btn = document.<span class="k">querySelector</span>(<span class="s">'#bookBtn'</span>);

ButtonSystem.<span class="k">loading</span>(btn, <span class="k">true</span>);   <span class="c">// start loading</span>
ButtonSystem.<span class="k">loading</span>(btn, <span class="k">false</span>);  <span class="c">// restore</span>

<span class="c">&lt;!-- Auto-trigger on click --&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span>
        <span class="a">data-loading-on-click</span>
        <span class="a">data-loading-text</span>=<span class="s">"Booking…"</span><span class="t">&gt;</span>Book Now<span class="t">&lt;/button&gt;</span></code></pre>
      </div>

      <p class="subsection-title">Toggle / selected</p>
      <p class="body-text">
        Add <code>.btn-toggle</code> for selectable chips. <code>button.js</code>
        automatically handles <code>aria-pressed</code> and <code>.is-selected</code> on every click.
      </p>
      <div class="demo-stage">
        <div class="btn-group">
          <button class="btn btn-toggle is-selected" aria-pressed="true">Entire Place</button>
          <button class="btn btn-toggle" aria-pressed="false">Private Room</button>
          <button class="btn btn-toggle" aria-pressed="false">Shared Room</button>
        </div>
      </div>
      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">HTML</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"btn-group"</span><span class="t">&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-toggle is-selected"</span>
          <span class="a">aria-pressed</span>=<span class="s">"true"</span><span class="t">&gt;</span>Entire Place<span class="t">&lt;/button&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-toggle"</span>
          <span class="a">aria-pressed</span>=<span class="s">"false"</span><span class="t">&gt;</span>Private Room<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;/div&gt;</span></code></pre>
      </div>

      <div class="note">
        <p><code>btn-toggle</code> dispatches a <code>btn-toggle</code> CustomEvent with
        <code>detail.pressed</code> on every state change. Listen to it the same way you would
        a native input event.</p>
      </div>
    </section>

    <hr class="rule">

    <!-- ── Button Groups ─────────────────────── -->
    <section id="groups">
      <h2 class="section-title">Button Groups</h2>
      <p class="body-text">
        Use <code>.btn-group</code> for a spaced flex set and <code>.btn-group-attached</code>
        for a joined segmented control where borders merge.
      </p>

      <p class="subsection-title">Spaced</p>
      <div class="demo-stage">
        <div class="btn-group">
          <button class="btn btn-primary">Confirm Booking</button>
          <button class="btn btn-outline">Save Draft</button>
          <button class="btn btn-ghost">Cancel</button>
        </div>
      </div>

      <p class="subsection-title">Attached</p>
      <div class="demo-stage">
        <div class="btn-group-attached">
          <button class="btn btn-outline">Day</button>
          <button class="btn btn-outline">Week</button>
          <button class="btn btn-outline">Month</button>
        </div>
      </div>

      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">HTML</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
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

    <!-- ── Integration ───────────────────────── -->
    <section id="integration">
      <h2 class="section-title">Integration</h2>
      <p class="body-text">
        Import <code>button.css</code> after <code>colors.css</code> in <code>&lt;head&gt;</code>.
        Add <code>button.js</code> before <code>&lt;/body&gt;</code> only when you need loading
        states, ripple, or toggle behaviour.
      </p>

      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">HTML</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="c">&lt;!-- In &lt;head&gt; --&gt;</span>
<span class="t">&lt;link</span> <span class="a">rel</span>=<span class="s">"stylesheet"</span> <span class="a">href</span>=<span class="s">"https://holidayseva.com/UI/Atom/button/button.css"</span><span class="t">&gt;</span>

<span class="c">&lt;!-- Before &lt;/body&gt; --&gt;</span>
<span class="t">&lt;script</span> <span class="a">src</span>=<span class="s">"https://holidayseva.com/UI/Atom/button/button.js"</span><span class="t">&gt;&lt;/script&gt;</span></code></pre>
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
├── button.php
├── design-system.css
└── UI/
    └── Atom/
        └── button/
            ├── button.css
            └── button.js</code></pre>
      </div>

      <p class="subsection-title">Required colors.css additions</p>
      <p class="body-text">
        These tokens are referenced by <code>button.css</code> but are not yet in your central
        <code>colors.css</code>. Add them to keep the token system consistent across all components.
      </p>
      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">CSS</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="c">/* Primary hover & pressed */</span>
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
    </section>

    <hr class="rule">

    <!-- ── Accessibility ─────────────────────── -->
    <section id="accessibility">
      <h2 class="section-title">Accessibility</h2>
      <p class="body-text">
        The button system meets WCAG 2.1 AA. Focus rings, colour contrast, 44px touch targets,
        and ARIA attributes are all built in. The table below covers what you need to set manually.
      </p>

      <table class="api-table">
        <thead>
          <tr><th>Requirement</th><th>How it's met</th><th>Your responsibility</th></tr>
        </thead>
        <tbody>
          <tr>
            <td>Touch target</td>
            <td>Default md is 44px height</td>
            <td>Don't override height below 44px on mobile</td>
          </tr>
          <tr>
            <td>Focus ring</td>
            <td>3px ring on <code>:focus-visible</code></td>
            <td>Never remove <code>outline: none</code> without a custom ring</td>
          </tr>
          <tr>
            <td>Colour contrast</td>
            <td>All variants ≥ 4.5:1</td>
            <td>Don't override colours without re-testing contrast</td>
          </tr>
          <tr>
            <td>Disabled</td>
            <td>CSS handles opacity & cursor</td>
            <td>Add native <code>disabled</code> attribute</td>
          </tr>
          <tr>
            <td>Loading</td>
            <td><code>button.js</code> sets <code>aria-busy="true"</code></td>
            <td>Use <code>ButtonSystem.loading()</code> — don't roll your own</td>
          </tr>
          <tr>
            <td>Toggle</td>
            <td><code>button.js</code> syncs <code>aria-pressed</code></td>
            <td>Set the correct initial value in markup</td>
          </tr>
          <tr>
            <td>Icon-only</td>
            <td>—</td>
            <td>Always add <code>aria-label="…"</code> on the button element</td>
          </tr>
        </tbody>
      </table>

      <div class="note warn">
        <p>Always use a native <code>&lt;button&gt;</code> element. Using <code>&lt;div&gt;</code>
        or <code>&lt;span&gt;</code> requires full ARIA and keyboard wiring to replicate what
        the browser provides for free.</p>
      </div>
    </section>

  </main>

  <!-- ── Right TOC ──────────────────────────── -->
  <aside class="sidebar-right">
    <?php include __DIR__ . '/right_sidebar.php'; ?>
  </aside>

</div>

<footer class="footer">
  <span class="footer-text">Holidayseva Design Guidelines · Button</span>
  <span class="footer-text">v1.0</span>
</footer>

<script>
  /* ── Loading demo ───────────────────────────────── */
  function triggerLoadingDemo() {
    const btn = document.getElementById('loadingDemo');
    ButtonSystem.loading(btn, true);
    setTimeout(() => ButtonSystem.loading(btn, false), 2400);
  }

  /* ── TOC scroll-spy ─────────────────────────────── */
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

  /* ── Copy code ──────────────────────────────────── */
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