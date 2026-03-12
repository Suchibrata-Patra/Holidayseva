<?php
/**
 * calendar.php
 * Component Documentation — Date Picker / Calendar
 * Holidayseva Design System · developer.holidayseva.com
 *
 * Asset load order (all external — zero inline CSS):
 *   1. /assets/css/colors.css              ← design tokens (MUST be first)
 *   2. /Components/calendar/calendar.css   ← component styles
 *   3. /Components/calendar/doc.css        ← documentation page layout only
 *   4. /Components/calendar/calendar.js    ← component JavaScript
 *
 * Sidebars:
 *   <?php include __DIR__ . '/left_sidebar.php';  ?>
 *   <?php include __DIR__ . '/right_sidebar.php'; ?>
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calendar / Date Picker — Holidayseva Design System</title>

  <!--
    ┌─────────────────────────────────────────────────────┐
    │  STYLESHEET LOAD ORDER — DO NOT CHANGE              │
    │  1. colors.css   — all CSS custom property tokens   │
    │  2. calendar.css — component (reads tokens)         │
    │  3. doc.css      — this documentation page only     │
    └─────────────────────────────────────────────────────┘
-->
  <link rel="stylesheet" href="https://holidayseva.com/UI/Forms/calendar/colors.css" />
  <link rel="stylesheet" href="https://holidayseva.com/UI/Forms/calendar/calendar.css" />
  <link rel="stylesheet" href="https://holidayseva.com/UI/Forms/calendar.js" />
</head>
<body>

<div class="layout">

  <!-- ═══════════════════════════════════════
       LEFT SIDEBAR
  ═══════════════════════════════════════ -->
  <aside class="sidebar-left">
    <div class="sb-logo">
      <div class="sb-logo-dot"></div>
      <div>
        <div class="sb-logo-text">Holidayseva</div>
        <div class="sb-logo-sub">Design System</div>
      </div>
    </div>
    <?php include __DIR__ . '/left_sidebar.php'; ?>
  </aside>


  <!-- ═══════════════════════════════════════
       MAIN CONTENT
  ═══════════════════════════════════════ -->
  <main class="main-content">

    <!-- ── Page Header ────────────────────────────────────── -->
    <div id="overview">
      <p class="page-eyebrow">Components</p>
      <h1 class="page-title">Calendar / Date Picker</h1>
      <p class="page-lead">
        A dual-month date range picker for selecting check-in and check-out dates.
        Supports exact dates, flexible windows, range hover states, disabled dates,
        and today highlighting — built for travel and booking flows.
      </p>

      <div class="callout callout--info">
        <svg class="callout__icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
          <circle cx="8" cy="8" r="6.5" stroke="#007AFF" stroke-width="1.3"/>
          <path d="M8 5.5v.5M8 7.5v3.5" stroke="#007AFF" stroke-width="1.4" stroke-linecap="round"/>
        </svg>
        <div class="callout__body">
          <strong>Token dependency:</strong> This component reads exclusively from
          <code>colors.css</code>. Always load design tokens <em>before</em>
          <code>calendar.css</code> — reversed order will leave all
          <code>var(--…)</code> calls unresolved.
        </div>
      </div>
    </div>

    <hr class="page-divider" />


    <!-- ══════════════════════════════════════
         LIVE PREVIEW
    ══════════════════════════════════════ -->
    <section class="section" id="preview">
      <h2 class="section-title">Live Preview</h2>
      <p class="section-body" style="margin-bottom:24px;">
        Interact with the calendar below. Click a date to set check-in,
        click a second date to set check-out. Navigate months with the arrows.
        Footer pills adjust date flexibility.
      </p>

      <div class="preview-card">

        <!--
          .calendar-wrapper  — root element
          .calendar-months   — populated automatically by HolidaysevaCalendar
          .calendar-footer   — optional; flex pill row
        -->
        <div class="calendar-wrapper" id="previewCal">

          <div class="calendar-mode-toggle">
            <button class="calendar-mode-btn active" data-action="mode" data-mode="dates">Dates</button>
            <button class="calendar-mode-btn"        data-action="mode" data-mode="flexible">Flexible</button>
          </div>

          <div class="calendar-months"></div>

          <div class="calendar-footer">
            <button class="flex-pill active-pill" data-action="flex" data-flex="exact">Exact dates</button>
            <button class="flex-pill"             data-action="flex" data-flex="1">± 1 day</button>
            <button class="flex-pill"             data-action="flex" data-flex="2">± 2 days</button>
            <button class="flex-pill"             data-action="flex" data-flex="3">± 3 days</button>
            <button class="flex-pill"             data-action="flex" data-flex="7">± 7 days</button>
            <button class="flex-pill"             data-action="flex" data-flex="14">± 14 days</button>
          </div>

        </div>
      </div>
    </section>


    <!-- ══════════════════════════════════════
         ANATOMY
    ══════════════════════════════════════ -->
    <section class="section" id="anatomy">
      <h2 class="section-title">Anatomy</h2>
      <p class="section-body" style="margin-bottom:24px;">
        The calendar is built from discrete, independently styled sub-elements.
        Each maps to a specific BEM class in <code>calendar.css</code>.
      </p>

      <div class="anatomy-grid">

        <div class="anatomy-item">
          <div class="anatomy-number">1</div>
          <div>
            <div class="anatomy-label">Mode Toggle</div>
            <div class="anatomy-desc">Segmented pill switching between "Dates" and "Flexible" intent. Wired via <code>data-action="mode"</code>.</div>
          </div>
        </div>

        <div class="anatomy-item">
          <div class="anatomy-number">2</div>
          <div>
            <div class="anatomy-label">Month Header</div>
            <div class="anatomy-desc">Month name + year. Houses prev/next nav via <code>.calendar-month__header</code>.</div>
          </div>
        </div>

        <div class="anatomy-item">
          <div class="anatomy-number">3</div>
          <div>
            <div class="anatomy-label">Navigation Buttons</div>
            <div class="anatomy-desc">32×32 circular icon buttons (<code>.calendar-nav-btn</code>). Left hidden on right month; right hidden on left month via <code>--hidden</code>.</div>
          </div>
        </div>

        <div class="anatomy-item">
          <div class="anatomy-number">4</div>
          <div>
            <div class="anatomy-label">Weekday Labels</div>
            <div class="anatomy-desc">S M T W T F S row. Class <code>.calendar-weekday</code>. Token: <code>--text-xs</code>, <code>--weight-semibold</code>, <code>--color-text-secondary</code>.</div>
          </div>
        </div>

        <div class="anatomy-item">
          <div class="anatomy-number">5</div>
          <div>
            <div class="anatomy-label">Day Cell</div>
            <div class="anatomy-desc">7-column button grid (<code>.calendar-day</code>). Each cell has 6 visual states applied via BEM modifier classes.</div>
          </div>
        </div>

        <div class="anatomy-item">
          <div class="anatomy-number">6</div>
          <div>
            <div class="anatomy-label">Range Fill</div>
            <div class="anatomy-desc">Rectangular alpha band between endpoints. Class <code>.calendar-day--in-range</code>. Token: <code>--color-primary-alpha</code>.</div>
          </div>
        </div>

        <div class="anatomy-item">
          <div class="anatomy-number">7</div>
          <div>
            <div class="anatomy-label">Today Dot</div>
            <div class="anatomy-desc">4px circle via <code>.calendar-day--today::after</code>. Token: <code>--color-primary</code>. Turns white on selected state.</div>
          </div>
        </div>

        <div class="anatomy-item">
          <div class="anatomy-number">8</div>
          <div>
            <div class="anatomy-label">Flexibility Footer</div>
            <div class="anatomy-desc">Pill row (<code>.calendar-footer</code>) softening the constraint by ±1–14 days. Wired via <code>data-action="flex"</code>.</div>
          </div>
        </div>

      </div>

      <h3 class="section-subtitle">Day Cell States</h3>
      <div class="state-strip">

        <div class="state-item">
          <div class="demo-day demo-day--default">8</div>
          <div class="state-label">Default</div>
        </div>

        <div class="state-item">
          <div class="demo-day demo-day--hover">8</div>
          <div class="state-label">Hover</div>
        </div>

        <div class="state-item">
          <div class="demo-day demo-day--today">8</div>
          <div class="state-label">Today</div>
        </div>

        <div class="state-item">
          <div class="demo-day demo-day--selected">8</div>
          <div class="state-label">Selected</div>
        </div>

        <div class="state-item">
          <div class="demo-range-wrap">
            <div class="demo-day--rs">6</div>
            <div class="demo-day--ir">7</div>
            <div class="demo-day--re">8</div>
          </div>
          <div class="state-label">Range</div>
        </div>

        <div class="state-item">
          <div class="demo-day demo-day--disabled">8</div>
          <div class="state-label">Disabled</div>
        </div>

      </div>
    </section>


    <!-- ══════════════════════════════════════
         SPECIFICATIONS
    ══════════════════════════════════════ -->
    <section class="section" id="specs">
      <h2 class="section-title">Specifications</h2>

      <h3 class="section-subtitle">Layout & Sizing</h3>
      <table class="spec-table">
        <thead><tr><th>Property</th><th>Value</th><th>Token</th></tr></thead>
        <tbody>
          <tr><td>Wrapper max-width</td><td>700px</td><td>—</td></tr>
          <tr><td>Wrapper padding</td><td>24px</td><td><span class="token-val">--space-lg</span></td></tr>
          <tr><td>Wrapper border-radius</td><td>18px</td><td><span class="token-val">--radius-xl</span></td></tr>
          <tr><td>Wrapper shadow</td><td>layered drop shadow</td><td><span class="token-val">--shadow-modal</span></td></tr>
          <tr><td>Dual-month column gap</td><td>48px</td><td><span class="token-val">--space-2xl</span></td></tr>
          <tr><td>Day cell</td><td>aspect-ratio: 1 (fills grid column)</td><td>—</td></tr>
          <tr><td>Nav button</td><td>32 × 32px, border-radius 50%</td><td>—</td></tr>
          <tr><td>Grid columns</td><td>7</td><td>—</td></tr>
          <tr><td>Today dot</td><td>4 × 4px</td><td>—</td></tr>
        </tbody>
      </table>

      <h3 class="section-subtitle">Typography</h3>
      <table class="spec-table">
        <thead><tr><th>Element</th><th>Size token</th><th>Weight token</th></tr></thead>
        <tbody>
          <tr><td>Month title</td><td><span class="token-val">--text-md</span></td><td><span class="token-val">--weight-semibold</span></td></tr>
          <tr><td>Weekday label</td><td><span class="token-val">--text-xs</span></td><td><span class="token-val">--weight-semibold</span></td></tr>
          <tr><td>Day number (default)</td><td><span class="token-val">--text-sm</span></td><td><span class="token-val">--weight-regular</span></td></tr>
          <tr><td>Day number (today)</td><td><span class="token-val">--text-sm</span></td><td><span class="token-val">--weight-bold</span></td></tr>
          <tr><td>Day number (selected)</td><td><span class="token-val">--text-sm</span></td><td><span class="token-val">--weight-semibold</span></td></tr>
        </tbody>
      </table>

      <h3 class="section-subtitle">Color Tokens</h3>
      <div style="border:1px solid var(--color-border-light);border-radius:10px;padding:0 16px;">
        <div class="swatch-row"><div class="swatch" style="background:#FF385C;"></div><span class="swatch-name">--color-primary</span><span class="swatch-value">#FF385C — today dot, focus ring</span></div>
        <div class="swatch-row"><div class="swatch" style="background:rgba(255,56,92,0.12);"></div><span class="swatch-name">--color-primary-alpha</span><span class="swatch-value">rgba(255,56,92,.12) — in-range fill</span></div>
        <div class="swatch-row"><div class="swatch" style="background:#222222;"></div><span class="swatch-name">--color-secondary</span><span class="swatch-value">#222222 — selected, range endpoints</span></div>
        <div class="swatch-row"><div class="swatch" style="background:#EBEBEB;border-color:#ddd;"></div><span class="swatch-name">--color-muted</span><span class="swatch-value">#EBEBEB — hover background</span></div>
        <div class="swatch-row"><div class="swatch" style="background:#DDDDDD;border-color:#ccc;"></div><span class="swatch-name">--color-muted-dark</span><span class="swatch-value">#DDDDDD — disabled text colour</span></div>
        <div class="swatch-row"><div class="swatch" style="background:#D2D2D7;"></div><span class="swatch-name">--color-border</span><span class="swatch-value">#D2D2D7 — nav button border, footer rule</span></div>
        <div class="swatch-row"><div class="swatch" style="background:#1D1D1F;"></div><span class="swatch-name">--color-text-primary</span><span class="swatch-value">#1D1D1F — default day number</span></div>
        <div class="swatch-row"><div class="swatch" style="background:#6E6E73;"></div><span class="swatch-name">--color-text-secondary</span><span class="swatch-value">#6E6E73 — weekday labels</span></div>
        <div class="swatch-row" style="border:none;"><div class="swatch" style="background:#fff;"></div><span class="swatch-name">--color-surface</span><span class="swatch-value">#FFFFFF — wrapper background</span></div>
      </div>
    </section>


    <!-- ══════════════════════════════════════
         HTML USAGE
    ══════════════════════════════════════ -->
    <section class="section" id="usage">
      <h2 class="section-title">HTML Usage</h2>
      <p class="section-body" style="margin-bottom:20px;">
        Copy the skeleton below. The <code>.calendar-months</code> div is populated by
        <code>calendar.js</code> — never add day cells manually.
      </p>

      <div class="callout callout--warning">
        <svg class="callout__icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
          <path d="M8 2L15 14H1L8 2Z" stroke="#C45508" stroke-width="1.3" stroke-linejoin="round"/>
          <path d="M8 6v4M8 11.5v.5" stroke="#C45508" stroke-width="1.3" stroke-linecap="round"/>
        </svg>
        <div class="callout__body">
          <strong>Load order is critical.</strong> <code>colors.css</code> must come before
          <code>calendar.css</code>. Reversing the order leaves all <code>var(--…)</code> tokens unresolved.
        </div>
      </div>

      <div class="code-label">HTML</div>
      <div class="code-block">
        <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        <pre><span class="cmt">&lt;!-- 1. Tokens --&gt;</span>
<span class="tag">&lt;link</span> <span class="attr">rel</span>=<span class="str">"stylesheet"</span> <span class="attr">href</span>=<span class="str">"/assets/css/colors.css"</span><span class="tag">&gt;</span>
<span class="cmt">&lt;!-- 2. Component --&gt;</span>
<span class="tag">&lt;link</span> <span class="attr">rel</span>=<span class="str">"stylesheet"</span> <span class="attr">href</span>=<span class="str">"/Components/calendar/calendar.css"</span><span class="tag">&gt;</span>

<span class="tag">&lt;div</span> <span class="attr">class</span>=<span class="str">"calendar-wrapper"</span> <span class="attr">id</span>=<span class="str">"bookingCal"</span><span class="tag">&gt;</span>

  <span class="cmt">&lt;!-- Optional: mode toggle --&gt;</span>
  <span class="tag">&lt;div</span> <span class="attr">class</span>=<span class="str">"calendar-mode-toggle"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;button</span> <span class="attr">class</span>=<span class="str">"calendar-mode-btn active"</span>
            <span class="attr">data-action</span>=<span class="str">"mode"</span> <span class="attr">data-mode</span>=<span class="str">"dates"</span><span class="tag">&gt;</span>Dates<span class="tag">&lt;/button&gt;</span>
    <span class="tag">&lt;button</span> <span class="attr">class</span>=<span class="str">"calendar-mode-btn"</span>
            <span class="attr">data-action</span>=<span class="str">"mode"</span> <span class="attr">data-mode</span>=<span class="str">"flexible"</span><span class="tag">&gt;</span>Flexible<span class="tag">&lt;/button&gt;</span>
  <span class="tag">&lt;/div&gt;</span>

  <span class="cmt">&lt;!-- Required: JS fills this --&gt;</span>
  <span class="tag">&lt;div</span> <span class="attr">class</span>=<span class="str">"calendar-months"</span><span class="tag">&gt;&lt;/div&gt;</span>

  <span class="cmt">&lt;!-- Optional: flex footer --&gt;</span>
  <span class="tag">&lt;div</span> <span class="attr">class</span>=<span class="str">"calendar-footer"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;button</span> <span class="attr">class</span>=<span class="str">"flex-pill active-pill"</span> <span class="attr">data-action</span>=<span class="str">"flex"</span> <span class="attr">data-flex</span>=<span class="str">"exact"</span><span class="tag">&gt;</span>Exact dates<span class="tag">&lt;/button&gt;</span>
    <span class="tag">&lt;button</span> <span class="attr">class</span>=<span class="str">"flex-pill"</span>             <span class="attr">data-action</span>=<span class="str">"flex"</span> <span class="attr">data-flex</span>=<span class="str">"1"</span><span class="tag">&gt;</span>± 1 day<span class="tag">&lt;/button&gt;</span>
    <span class="tag">&lt;button</span> <span class="attr">class</span>=<span class="str">"flex-pill"</span>             <span class="attr">data-action</span>=<span class="str">"flex"</span> <span class="attr">data-flex</span>=<span class="str">"2"</span><span class="tag">&gt;</span>± 2 days<span class="tag">&lt;/button&gt;</span>
    <span class="tag">&lt;button</span> <span class="attr">class</span>=<span class="str">"flex-pill"</span>             <span class="attr">data-action</span>=<span class="str">"flex"</span> <span class="attr">data-flex</span>=<span class="str">"3"</span><span class="tag">&gt;</span>± 3 days<span class="tag">&lt;/button&gt;</span>
    <span class="tag">&lt;button</span> <span class="attr">class</span>=<span class="str">"flex-pill"</span>             <span class="attr">data-action</span>=<span class="str">"flex"</span> <span class="attr">data-flex</span>=<span class="str">"7"</span><span class="tag">&gt;</span>± 7 days<span class="tag">&lt;/button&gt;</span>
    <span class="tag">&lt;button</span> <span class="attr">class</span>=<span class="str">"flex-pill"</span>             <span class="attr">data-action</span>=<span class="str">"flex"</span> <span class="attr">data-flex</span>=<span class="str">"14"</span><span class="tag">&gt;</span>± 14 days<span class="tag">&lt;/button&gt;</span>
  <span class="tag">&lt;/div&gt;</span>

<span class="tag">&lt;/div&gt;</span>

<span class="tag">&lt;script</span> <span class="attr">src</span>=<span class="str">"/Components/calendar/calendar.js"</span><span class="tag">&gt;&lt;/script&gt;</span>
<span class="tag">&lt;script&gt;</span>
  <span class="kw">const</span> cal = <span class="kw">new</span> <span class="prop">HolidaysevaCalendar</span>(<span class="str">'#bookingCal'</span>, {
    <span class="prop">minDate</span>: <span class="kw">new</span> Date(),
    <span class="prop">onChange</span>: ({ start, end }) => console.<span class="prop">log</span>(start, end),
  });
<span class="tag">&lt;/script&gt;</span></pre>
      </div>

      <h3 class="section-subtitle">Inline variant</h3>
      <div class="code-label">JavaScript</div>
      <div class="code-block">
        <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        <pre><span class="kw">new</span> <span class="prop">HolidaysevaCalendar</span>(<span class="str">'#picker'</span>, {
  <span class="prop">inline</span>: <span class="kw">true</span>,  <span class="cmt">// shadow → border, adds .calendar-inline</span>
  <span class="prop">months</span>: <span class="num">1</span>,     <span class="cmt">// single month for narrow containers</span>
  <span class="prop">minDate</span>: <span class="kw">new</span> Date(),
});</pre>
      </div>

      <h3 class="section-subtitle">PHP server-side include</h3>
      <div class="code-label">PHP</div>
      <div class="code-block">
        <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        <pre><span class="cmt">&lt;?php</span>
<span class="kw">$config</span> = <span class="prop">json_encode</span>([
    <span class="str">'minDate'</span>       => <span class="prop">date</span>(<span class="str">'Y-m-d'</span>),
    <span class="str">'disabledDates'</span> => [<span class="str">'2026-04-15'</span>, <span class="str">'2026-04-16'</span>],
    <span class="str">'defaultStart'</span>  => <span class="str">'2026-04-10'</span>,
    <span class="str">'defaultEnd'</span>    => <span class="str">'2026-04-14'</span>,
]);
<span class="cmt">?&gt;</span>
<span class="tag">&lt;div</span> <span class="attr">class</span>=<span class="str">"calendar-wrapper"</span>
     <span class="attr">data-calendar-config</span>=<span class="str">'&lt;?= htmlspecialchars($config) ?&gt;'</span><span class="tag">&gt;</span>
  <span class="tag">&lt;div</span> <span class="attr">class</span>=<span class="str">"calendar-months"</span><span class="tag">&gt;&lt;/div&gt;</span>
<span class="tag">&lt;/div&gt;</span>

<span class="tag">&lt;script</span> <span class="attr">src</span>=<span class="str">"/Components/calendar/calendar.js"</span><span class="tag">&gt;&lt;/script&gt;</span>
<span class="tag">&lt;script&gt;</span>HolidaysevaCalendar.<span class="prop">autoInit</span>();<span class="tag">&lt;/script&gt;</span></pre>
      </div>
    </section>


    <!-- ══════════════════════════════════════
         JAVASCRIPT API
    ══════════════════════════════════════ -->
    <section class="section" id="javascript">
      <h2 class="section-title">JavaScript API</h2>
      <p class="section-body" style="margin-bottom:20px;">
        <code>HolidaysevaCalendar</code> is a vanilla JS class exposed on <code>window</code>.
        No framework or build step required.
      </p>

      <h3 class="section-subtitle">Constructor Options</h3>
      <table class="props-table">
        <thead><tr><th>Option</th><th>Type</th><th>Default</th><th>Description</th></tr></thead>
        <tbody>
          <tr><td><code>minDate</code></td><td><span class="type-badge">Date</span></td><td><code>new Date()</code></td><td>Earliest selectable date. Past dates render disabled.</td></tr>
          <tr><td><code>maxDate</code></td><td><span class="type-badge">Date</span></td><td><code>null</code></td><td>Latest selectable date. <code>null</code> = no upper limit.</td></tr>
          <tr><td><code>disabledDates</code></td><td><span class="type-badge">string[]</span></td><td><code>[]</code></td><td>Array of <code>YYYY-MM-DD</code> strings to block (e.g. sold-out nights).</td></tr>
          <tr><td><code>defaultStart</code></td><td><span class="type-badge">string</span></td><td><code>null</code></td><td>Pre-selected check-in as <code>YYYY-MM-DD</code>.</td></tr>
          <tr><td><code>defaultEnd</code></td><td><span class="type-badge">string</span></td><td><code>null</code></td><td>Pre-selected check-out as <code>YYYY-MM-DD</code>.</td></tr>
          <tr><td><code>months</code></td><td><span class="type-badge">number</span></td><td><code>2</code></td><td>Month columns to render. Use <code>1</code> on narrow layouts.</td></tr>
          <tr><td><code>inline</code></td><td><span class="type-badge">boolean</span></td><td><code>false</code></td><td>Replaces drop-shadow with a border. Adds <code>.calendar-inline</code>.</td></tr>
          <tr><td><code>onChange</code></td><td><span class="type-badge">function</span></td><td><code>null</code></td><td>Fired on complete range. Receives <code>{ start: Date, end: Date }</code>.</td></tr>
          <tr><td><code>onMonthChange</code></td><td><span class="type-badge">function</span></td><td><code>null</code></td><td>Fired on navigation. Receives <code>{ year, month }</code>.</td></tr>
          <tr><td><code>onSelect</code></td><td><span class="type-badge">function</span></td><td><code>null</code></td><td>Fired on every single click. Receives the clicked <code>Date</code>.</td></tr>
        </tbody>
      </table>

      <h3 class="section-subtitle">Instance Methods</h3>
      <table class="props-table">
        <thead><tr><th>Method</th><th>Returns</th><th>Description</th></tr></thead>
        <tbody>
          <tr><td><code>getRange()</code></td><td><span class="type-badge">{ start, end }</span></td><td>Returns current selection. Values are <code>Date</code> or <code>null</code>.</td></tr>
          <tr><td><code>setRange(start, end)</code></td><td><code>void</code></td><td>Programmatically sets dates. Accepts <code>Date</code> or <code>YYYY-MM-DD</code> string.</td></tr>
          <tr><td><code>clear()</code></td><td><code>void</code></td><td>Clears selection and hover state, re-renders.</td></tr>
          <tr><td><code>goToMonth(year, month)</code></td><td><code>void</code></td><td>Navigates to month. <code>month</code> is 0-indexed (Jan = 0).</td></tr>
          <tr><td><code>disable(dates)</code></td><td><code>void</code></td><td>Dynamically adds to disabled list. String or array of <code>YYYY-MM-DD</code>.</td></tr>
          <tr><td><code>destroy()</code></td><td><code>void</code></td><td>Removes all event listeners and clears HTML. Call when unmounting.</td></tr>
          <tr><td><code>HolidaysevaCalendar.autoInit()</code></td><td><code>void</code></td><td>Static. Scans DOM for <code>[data-calendar-config]</code> and initialises each wrapper found.</td></tr>
        </tbody>
      </table>

      <h3 class="section-subtitle">Full example</h3>
      <div class="code-label">JavaScript</div>
      <div class="code-block">
        <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        <pre><span class="kw">const</span> cal = <span class="kw">new</span> <span class="prop">HolidaysevaCalendar</span>(<span class="str">'#bookingCal'</span>, {
  <span class="prop">minDate</span>       : <span class="kw">new</span> Date(),
  <span class="prop">months</span>        : <span class="num">2</span>,
  <span class="prop">disabledDates</span> : [<span class="str">'2026-04-15'</span>, <span class="str">'2026-04-16'</span>],

  <span class="prop">onChange</span>: ({ start, end }) => {
    document.<span class="prop">querySelector</span>(<span class="str">'[name="checkin"]'</span>).<span class="prop">value</span>  = start.<span class="prop">toISOString</span>();
    document.<span class="prop">querySelector</span>(<span class="str">'[name="checkout"]'</span>).<span class="prop">value</span> = end.<span class="prop">toISOString</span>();
    <span class="kw">const</span> nights = Math.<span class="prop">round</span>((end - start) / <span class="num">86400000</span>);
    console.<span class="prop">log</span>(`<span class="str">${nights} nights selected</span>`);
  },

  <span class="prop">onMonthChange</span>: ({ year, month }) => {
    <span class="prop">fetchAvailability</span>(year, month).<span class="prop">then</span>(unavailable => {
      cal.<span class="prop">disable</span>(unavailable); <span class="cmt">// block sold-out nights dynamically</span>
    });
  },
});

<span class="cmt">// Programmatic control</span>
cal.<span class="prop">setRange</span>(<span class="str">'2026-04-10'</span>, <span class="str">'2026-04-14'</span>);
cal.<span class="prop">goToMonth</span>(<span class="num">2026</span>, <span class="num">3</span>);

<span class="cmt">// Teardown (e.g. modal close)</span>
cal.<span class="prop">destroy</span>();</pre>
      </div>
    </section>


    <!-- ══════════════════════════════════════
         INTEGRATION
    ══════════════════════════════════════ -->
    <section class="section" id="integration">
      <h2 class="section-title">Integration</h2>
      <p class="section-body" style="margin-bottom:28px;">
        Six steps to add the Calendar to any Holidayseva page from scratch.
      </p>

      <ol class="step-list">
        <li class="step-item">
          <div class="step-number">1</div>
          <div class="step-content">
            <div class="step-title">Copy component files</div>
            <div class="step-desc">Place <code>calendar.css</code> and <code>calendar.js</code> into <code>/Components/calendar/</code>. Keep them as separate files — they depend on <code>colors.css</code> loaded at page level.</div>
          </div>
        </li>
        <li class="step-item">
          <div class="step-number">2</div>
          <div class="step-content">
            <div class="step-title">Import in correct order</div>
            <div class="step-desc">In your <code>&lt;head&gt;</code>: load <code>colors.css</code> first, then <code>calendar.css</code>. The component uses only CSS custom properties — reversed order breaks all colour rendering.</div>
          </div>
        </li>
        <li class="step-item">
          <div class="step-number">3</div>
          <div class="step-content">
            <div class="step-title">Add the HTML wrapper</div>
            <div class="step-desc">Place <code>.calendar-wrapper</code> with an empty <code>.calendar-months</code> inside it. Never populate day cells manually — the JS does this.</div>
          </div>
        </li>
        <li class="step-item">
          <div class="step-number">4</div>
          <div class="step-content">
            <div class="step-title">Initialise</div>
            <div class="step-desc">Call <code>new HolidaysevaCalendar('#id', options)</code> after the DOM is ready. Always pass <code>minDate: new Date()</code> in booking flows.</div>
          </div>
        </li>
        <li class="step-item">
          <div class="step-number">5</div>
          <div class="step-content">
            <div class="step-title">Wire to your form</div>
            <div class="step-desc">Use the <code>onChange</code> callback to sync <code>{ start, end }</code> into hidden inputs or a search query object. Both values are native <code>Date</code> objects.</div>
          </div>
        </li>
        <li class="step-item">
          <div class="step-number">6</div>
          <div class="step-content">
            <div class="step-title">Load disabled dates from your API</div>
            <div class="step-desc">Pass unavailable nights via <code>disabledDates</code> on init, or call <code>cal.disable(dates)</code> inside <code>onMonthChange</code> as the user navigates forward.</div>
          </div>
        </li>
      </ol>
    </section>


    <!-- ══════════════════════════════════════
         USAGE GUIDELINES
    ══════════════════════════════════════ -->
    <section class="section" id="guidelines">
      <h2 class="section-title">Usage Guidelines</h2>
      <div class="usage-grid">
        <div class="usage-card usage-card--do">
          <div class="usage-card__header">✓ Do</div>
          <div class="usage-card__body">Show two months side-by-side. Users comparing weekly stays need to see both start and end without navigating.</div>
        </div>
        <div class="usage-card usage-card--dont">
          <div class="usage-card__header">✗ Don't</div>
          <div class="usage-card__body">Show one month for range selection. It forces navigation and hides the span of the trip from the user.</div>
        </div>
        <div class="usage-card usage-card--do">
          <div class="usage-card__header">✓ Do</div>
          <div class="usage-card__body">Pass <code>minDate: new Date()</code> in booking flows to prevent any past-date selection.</div>
        </div>
        <div class="usage-card usage-card--dont">
          <div class="usage-card__header">✗ Don't</div>
          <div class="usage-card__body">Write raw hex overrides. Always reference <code>colors.css</code> tokens so dark mode and theme updates propagate automatically.</div>
        </div>
        <div class="usage-card usage-card--do">
          <div class="usage-card__header">✓ Do</div>
          <div class="usage-card__body">Include the footer flex pills in travel search. Flexible windows measurably improve booking conversion rates.</div>
        </div>
        <div class="usage-card usage-card--dont">
          <div class="usage-card__header">✗ Don't</div>
          <div class="usage-card__body">Embed the dual calendar inside a container narrower than 600px without switching to <code>months: 1</code> — the grid will overflow.</div>
        </div>
      </div>
    </section>


    <!-- ══════════════════════════════════════
         ACCESSIBILITY
    ══════════════════════════════════════ -->
    <section class="section" id="accessibility">
      <h2 class="section-title">Accessibility</h2>
      <p class="section-body" style="margin-bottom:20px;">
        The calendar targets WCAG 2.1 AA. All checks below are enforced by default in <code>calendar.js</code>.
      </p>

      <ul class="a11y-list">
        <li class="a11y-item">
          <div class="a11y-icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
          <div><strong>Keyboard navigation</strong> — Tab enters the grid. Arrow keys move between cells. Enter/Space selects. Escape clears.</div>
        </li>
        <li class="a11y-item">
          <div class="a11y-icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
          <div><strong>ARIA grid roles</strong> — <code>role="grid"</code> on the day container; <code>role="row"</code> on rows; <code>role="gridcell"</code> on every cell.</div>
        </li>
        <li class="a11y-item">
          <div class="a11y-icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
          <div><strong>Descriptive aria-label per cell</strong> — e.g. <code>"Thursday, April 10, 2026, check-in selected"</code>. Never just the number.</div>
        </li>
        <li class="a11y-item">
          <div class="a11y-icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
          <div><strong>aria-disabled on blocked dates</strong> — Unavailable cells get <code>aria-disabled="true"</code> and are removed from tab order.</div>
        </li>
        <li class="a11y-item">
          <div class="a11y-icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
          <div><strong>Focus ring</strong> — 2px <code>:focus-visible</code> outline using <code>--color-primary</code>. Never suppressed with <code>outline: none</code>.</div>
        </li>
        <li class="a11y-item">
          <div class="a11y-icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
          <div><strong>Contrast</strong> — Default text on white: 16.1:1. Selected (white on #222): 16.1:1. Both far exceed the 4.5:1 AA minimum.</div>
        </li>
        <li class="a11y-item">
          <div class="a11y-icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
          <div><strong>Live region</strong> — Visually hidden <code>aria-live="polite"</code> element announces the range and night count to screen reader users after every change.</div>
        </li>
      </ul>
    </section>

  </main>


  <!-- ═══════════════════════════════════════
       RIGHT SIDEBAR — TOC
  ═══════════════════════════════════════ -->
  <aside class="sidebar-right">
    <?php include __DIR__ . '/right_sidebar.php'; ?>
  </aside>

</div><!-- /layout -->


<!-- Component script — external file, zero inline JS logic -->
<script src="/Components/calendar/calendar.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    /* Live preview init */
    new HolidaysevaCalendar('#previewCal', {
      minDate : new Date(),
      months  : 2,
      onChange: ({ start, end }) => {
        const nights = Math.round((end - start) / 86400000);
        console.log(`${start.toDateString()} → ${end.toDateString()} (${nights} nights)`);
      },
    });
  });

  /* Code copy utility */
  function copyCode(btn) {
    const text = btn.closest('.code-block').querySelector('pre').innerText;
    navigator.clipboard.writeText(text).then(() => {
      btn.textContent = 'Copied!';
      setTimeout(() => btn.textContent = 'Copy', 1800);
    });
  }
</script>

</body>
</html>