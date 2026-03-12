<?php
/**
 * calendar.php
 * Calendar / Date Picker — Holidayseva Design System Documentation
 */
$partials = __DIR__ . '/../../';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calendar — Holidayseva Design System</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://holidayseva.com/UI/Foundation/colors.css">
  <link rel="stylesheet" href="https://holidayseva.com/UI/design-system.css">
  
<style>
/* ═══════════════════════════════════════════
   PAGE: Grid override
═══════════════════════════════════════════ */
.page-layout {
  display: grid;
  grid-template-columns: var(--sidebar-w) 1fr var(--toc-w);
  grid-template-rows: 1fr;
  padding-left: 0 !important;
  padding-right: 0 !important;
  min-height: calc(100vh - var(--header-h));
  align-items: start;
}
.page-layout > .sidebar-left {
  grid-column: 1; position: sticky;
  top: var(--header-h); height: calc(100vh - var(--header-h));
  overflow-y: auto; border-right: 1px solid var(--border-light);
  left: unset; width: 100%; z-index: 10 !important;
}
.page-layout > .main-content { grid-column: 2; min-width: 0; padding: 48px 56px; }
.page-layout > .sidebar-right {
  grid-column: 3; position: sticky;
  top: var(--header-h); height: calc(100vh - var(--header-h));
  overflow-y: auto; border-left: 1px solid var(--border-light);
  right: unset; width: 100%;
}
@media (max-width: 1100px) {
  .page-layout { grid-template-columns: var(--sidebar-w) 1fr; }
  .page-layout > .sidebar-right { display: none; }
}
@media (max-width: 680px) {
  .page-layout { grid-template-columns: 1fr; }
  .page-layout > .sidebar-left { display: none; }
  .page-layout > .main-content { padding: 32px 20px; }
}

/* ═══════════════════════════════════════════
   PAGE TYPOGRAPHY
═══════════════════════════════════════════ */
.page-eyebrow {
  font-size: 11px; font-weight: 600; color: var(--color-primary);
  letter-spacing: var(--tracking-wide); text-transform: uppercase; margin-bottom: 8px;
}
.page-title {
  font-family: var(--font-display); font-size: 34px; font-weight: 700;
  letter-spacing: var(--tracking-tight); color: var(--color-text-primary);
  line-height: 1.15; margin-bottom: 16px;
}
.page-lead { font-size: 16px; color: var(--color-text-secondary); line-height: 1.65; max-width: 600px; margin-bottom: 40px; }
.page-divider { border: none; border-top: 1px solid var(--color-border-light); margin: 48px 0; }
.section { margin-bottom: 56px; }
.section-title {
  font-size: 20px; font-weight: 600; letter-spacing: var(--tracking-tight);
  color: var(--color-text-primary); margin-bottom: 16px;
  padding-bottom: 12px; border-bottom: 1px solid var(--color-border-light);
}
.section-body { font-size: 14px; color: var(--color-text-secondary); line-height: 1.7; }
.section-body p + p { margin-top: 10px; }
.section-subtitle { font-size: 14px; font-weight: 600; color: var(--color-text-primary); margin: 24px 0 10px; }

/* ═══════════════════════════════════════════
   PREVIEW CARD
═══════════════════════════════════════════ */
.preview-card {
  background: var(--color-bg-secondary);
  border: 1px solid var(--color-border-light);
  border-radius: 18px;
  padding: 40px 24px;
  display: flex; align-items: center; justify-content: center;
  margin-bottom: 32px; min-height: 300px;
  overflow: hidden;
}

/* ═══════════════════════════════════════════
   QUICK EMBED — hero snippet box
═══════════════════════════════════════════ */
.embed-hero {
  background: #0D0D0D;
  border-radius: 16px;
  padding: 32px;
  margin-bottom: 32px;
  position: relative;
}
.embed-hero__title {
  font-size: 11px; font-weight: 600; color: #5E5E6A;
  text-transform: uppercase; letter-spacing: 0.07em;
  margin-bottom: 20px;
  display: flex; align-items: center; gap: 8px;
}
.embed-hero__title::before {
  content: '';
  display: inline-block;
  width: 8px; height: 8px;
  border-radius: 50%;
  background: #30D158;
}
.embed-hero pre {
  font-family: 'DM Mono', monospace;
  font-size: 13px; line-height: 1.75;
  color: #E5E5EA; white-space: pre; overflow-x: auto;
  padding-bottom: 4px;
}
.embed-copy {
  position: absolute; top: 20px; right: 20px;
  background: rgba(255,255,255,0.07);
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: 7px; padding: 6px 12px;
  font-size: 12px; font-family: 'DM Sans', sans-serif;
  color: #8E8E93; cursor: pointer;
  transition: all 0.12s;
}
.embed-copy:hover { background: rgba(255,255,255,0.14); color: #fff; }

/* ═══════════════════════════════════════════
   STEP LIST (Quick Start)
═══════════════════════════════════════════ */
.step-list { list-style: none; display: flex; flex-direction: column; gap: 0; }
.step-item { display: flex; gap: 16px; position: relative; }
.step-item + .step-item::before {
  content: ''; position: absolute; left: 14px; top: -14px;
  width: 2px; height: 14px; background: var(--color-border-light);
}
.step-number {
  width: 30px; height: 30px; border-radius: 50%;
  background: var(--color-text-primary); color: #fff;
  font-size: 13px; font-weight: 700;
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0; margin-top: 2px;
}
.step-content { padding-bottom: 24px; }
.step-title { font-weight: 600; color: var(--color-text-primary); font-size: 15px; margin-bottom: 6px; }
.step-desc { font-size: 13px; color: var(--color-text-secondary); line-height: 1.6; }
.step-desc code {
  font-family: 'DM Mono', monospace; font-size: 11px;
  background: var(--color-muted); padding: 1px 5px;
  border-radius: 3px; color: var(--color-primary);
}

/* ═══════════════════════════════════════════
   CODE BLOCKS
═══════════════════════════════════════════ */
.code-label {
  font-size: 11px; font-weight: 600; color: #8E8E93;
  text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 8px;
}
.code-block {
  background: #0D0D0D;
  border-radius: 14px; padding: 24px; margin-bottom: 24px;
  overflow-x: auto; position: relative;
}
.code-block pre {
  font-family: 'DM Mono', monospace; font-size: 13px;
  line-height: 1.7; color: #E5E5EA; white-space: pre;
}
.copy-btn {
  position: absolute; top: 14px; right: 14px;
  background: rgba(255,255,255,0.07);
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: 6px; padding: 5px 10px;
  font-size: 11px; font-family: 'DM Sans', sans-serif;
  color: #8E8E93; cursor: pointer; transition: all 0.12s;
}
.copy-btn:hover { background: rgba(255,255,255,0.15); color: #fff; }
.kw { color: #FF7AB2; }
.str { color: #FC6A5D; }
.cmt { color: #6C7986; font-style: italic; }
.prop { color: #67B7A4; }
.tag { color: #FF8170; }
.attr { color: #67B7A4; }
.num { color: #D9C97C; }

/* ═══════════════════════════════════════════
   PROPS TABLE
═══════════════════════════════════════════ */
.props-table {
  width: 100%; border-collapse: collapse; font-size: 13px;
  margin-bottom: 24px; border-radius: 10px; overflow: hidden;
  border: 1px solid var(--color-border-light);
}
.props-table th {
  text-align: left; font-weight: 600; color: var(--color-text-primary);
  padding: 10px 14px; background: var(--color-bg-secondary);
  border-bottom: 1px solid var(--color-border-light);
  font-size: 11px; letter-spacing: var(--tracking-wide); text-transform: uppercase;
}
.props-table td {
  padding: 10px 14px; border-bottom: 1px solid var(--color-border-light);
  color: var(--color-text-secondary); vertical-align: top;
}
.props-table tr:last-child td { border-bottom: none; }
.props-table td code {
  font-family: 'DM Mono', monospace; font-size: 11px;
  background: var(--color-muted); padding: 2px 5px;
  border-radius: 4px; color: var(--color-text-primary);
}
.type-badge {
  display: inline-block; font-family: 'DM Mono', monospace; font-size: 11px;
  padding: 2px 6px; border-radius: 4px;
  background: var(--color-primary-alpha); color: var(--color-primary); font-weight: 500;
}

/* ═══════════════════════════════════════════
   CALLOUTS
═══════════════════════════════════════════ */
.callout {
  padding: 14px 18px; border-radius: 10px; font-size: 13px;
  line-height: 1.6; margin-bottom: 20px;
  display: flex; gap: 10px; align-items: flex-start;
}
.callout--info { background: rgba(0,122,255,0.07); border: 1px solid rgba(0,122,255,0.20); }
.callout--tip  { background: rgba(52,199,89,0.08); border: 1px solid rgba(52,199,89,0.25); }
.callout__body { color: var(--color-text-secondary); }
.callout__body strong { color: var(--color-text-primary); }
.callout__body code {
  font-family: 'DM Mono', monospace; font-size: 11px;
  background: rgba(0,0,0,0.06); padding: 1px 5px; border-radius: 4px;
}

/* ═══════════════════════════════════════════
   DO / DON'T
═══════════════════════════════════════════ */
.usage-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 24px; }
.usage-card { border-radius: 12px; border: 1.5px solid transparent; overflow: hidden; }
.usage-card--do { border-color: rgba(52,199,89,0.35); }
.usage-card--dont { border-color: rgba(255,59,48,0.30); }
.usage-card__header { padding: 10px 16px; font-size: 13px; font-weight: 600; }
.usage-card--do .usage-card__header { background: rgba(52,199,89,0.10); color: #1A9E35; }
.usage-card--dont .usage-card__header { background: rgba(255,59,48,0.08); color: #C13515; }
.usage-card__body { padding: 14px 16px; background: var(--color-bg); font-size: 13px; color: var(--color-text-secondary); line-height: 1.6; }
.usage-card__body code {
  font-family: 'DM Mono', monospace; font-size: 11px;
  background: var(--color-muted); padding: 1px 4px; border-radius: 3px;
}
@media (max-width: 560px) {
  .usage-grid { grid-template-columns: 1fr; }
}

/* ═══════════════════════════════════════════
   CALLBACK DEMO OUTPUT
═══════════════════════════════════════════ */
.output-box {
  background: var(--color-bg-secondary);
  border: 1px solid var(--color-border-light);
  border-radius: 10px; padding: 16px 20px;
  font-family: 'DM Mono', monospace; font-size: 12px;
  color: var(--color-text-secondary); line-height: 1.6;
  margin-top: 16px; min-height: 52px;
}
.output-box strong { color: var(--color-primary); }

/* ═══════════════════════════════════════════
   CALENDAR COMPONENT INLINE STYLES
   (in case holidayseva.com/UI files are unreachable)
═══════════════════════════════════════════ */
.hs-calendar {
  background: #fff;
  border-radius: 18px; padding: 28px;
  box-shadow: 0 8px 40px rgba(0,0,0,0.14), 0 2px 8px rgba(0,0,0,0.08);
  max-width: 720px; width: 100%;
  display: flex; flex-direction: column; gap: 0;
  font-family: -apple-system, BlinkMacSystemFont, "SF Pro Text", "DM Sans", "Segoe UI", sans-serif;
  box-sizing: border-box;
}
.hs-calendar *, .hs-calendar *::before, .hs-calendar *::after { box-sizing: border-box; }
.hs-calendar.hs-calendar--inline { box-shadow: none; border: 1px solid #D2D2D7; }
.hs-calendar__months { display: grid; grid-template-columns: 1fr 1fr; gap: 36px; margin-bottom: 20px; }
.hs-calendar__month { min-width: 0; }
.hs-calendar__month-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px; }
.hs-calendar__month-title { font-size: 15px; font-weight: 600; color: #1D1D1F; letter-spacing: -0.01em; }
.hs-calendar__nav {
  width: 32px; height: 32px; border-radius: 50%; border: 1px solid #D2D2D7;
  background: #fff; display: flex; align-items: center; justify-content: center;
  color: #1D1D1F; cursor: pointer; transition: background 0.12s, box-shadow 0.12s; flex-shrink: 0;
}
.hs-calendar__nav:hover { background: #F5F5F7; box-shadow: 0 1px 3px rgba(0,0,0,0.08); }
.hs-calendar__nav--hidden { visibility: hidden; pointer-events: none; }
.hs-calendar__weekdays { display: grid; grid-template-columns: repeat(7, 1fr); margin-bottom: 6px; }
.hs-calendar__weekday { text-align: center; font-size: 11px; font-weight: 600; color: #6E6E73; padding: 4px 0; letter-spacing: 0.02em; }
.hs-calendar__days { display: grid; grid-template-columns: repeat(7, 1fr); gap: 1px 0; }
.hs-calendar__day {
  aspect-ratio: 1; display: flex; align-items: center; justify-content: center;
  font-size: 13px; font-weight: 400; color: #1D1D1F;
  background: none; border: none; border-radius: 50%;
  position: relative; transition: background 0.12s, color 0.12s;
  cursor: pointer; z-index: 1; font-family: inherit;
}
.hs-calendar__day:hover:not(:disabled):not(.hs-calendar__day--empty) { background: #F5F5F7; }
.hs-calendar__day--empty { cursor: default; pointer-events: none; }
.hs-calendar__day--disabled { color: #DDDDDD; text-decoration: line-through; cursor: not-allowed; pointer-events: none; }
.hs-calendar__day--today { font-weight: 700; }
.hs-calendar__day--today::after {
  content: ''; position: absolute; bottom: 4px; left: 50%;
  transform: translateX(-50%); width: 4px; height: 4px;
  background: #FF385C; border-radius: 50%;
}
.hs-calendar__day--selected,
.hs-calendar__day--range-start,
.hs-calendar__day--range-end {
  background: #222222 !important; color: #fff !important;
  font-weight: 600; border-radius: 50%; z-index: 2;
}
.hs-calendar__day--selected::after,
.hs-calendar__day--range-start::after,
.hs-calendar__day--range-end::after { background: #fff !important; }
.hs-calendar__day--range-start::before {
  content: ''; position: absolute; top: 0; right: 0; width: 50%; height: 100%;
  background: rgba(255,56,92,0.10); border-radius: 0; z-index: -1;
}
.hs-calendar__day--range-end::before {
  content: ''; position: absolute; top: 0; left: 0; width: 50%; height: 100%;
  background: rgba(255,56,92,0.10); border-radius: 0; z-index: -1;
}
.hs-calendar__day--in-range {
  background: rgba(255,56,92,0.10) !important; color: #1D1D1F; border-radius: 0;
}
.hs-calendar__day--in-range:hover { background: rgba(255,56,92,0.18) !important; }
.hs-calendar__day--hover-range { background: rgba(255,56,92,0.10) !important; border-radius: 0; }
.hs-calendar__day--extend-end {
  background: #1A7A35 !important; color: #fff !important; font-weight: 600; border-radius: 50%; z-index: 2;
}
.hs-calendar__day--extend-end::before {
  content: ''; position: absolute; top: 0; left: 0; width: 50%; height: 100%;
  background: rgba(52,199,89,0.12); border-radius: 0; z-index: -1;
}
.hs-calendar__day--extend-range {
  background: rgba(52,199,89,0.12) !important; color: #1D1D1F; border-radius: 0;
}
.hs-calendar__day:focus-visible { outline: 2px solid #FF385C; outline-offset: 1px; }
.hs-calendar__footer {
  display: flex; flex-wrap: wrap; gap: 8px;
  padding-top: 20px; margin-top: 4px;
  border-top: 1px solid #EBEBEB; align-items: center;
}
.hs-calendar__extend-label { font-size: 12px; color: #6E6E73; font-weight: 500; margin-right: 4px; white-space: nowrap; }
.hs-calendar__extend-pill {
  padding: 6px 14px; border: 1.5px solid #D2D2D7; border-radius: 999px;
  background: none; font-family: inherit; font-size: 13px; color: #6E6E73;
  cursor: pointer; transition: all 0.12s; white-space: nowrap;
}
.hs-calendar__extend-pill:hover { border-color: #1D1D1F; color: #1D1D1F; }
.hs-calendar__extend-pill--active {
  border-color: #1D1D1F; color: #1D1D1F; font-weight: 600;
  background: rgba(0,0,0,0.04);
}
.hs-calendar__live {
  position: absolute; width: 1px; height: 1px;
  overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap;
}
@media (max-width: 600px) {
  .hs-calendar__months { grid-template-columns: 1fr; gap: 24px; }
  .hs-calendar { padding: 20px 16px; }
  .hs-calendar__extend-label { display: none; }
}
</style>
</head>
<body>

<?php include $partials . 'header.php'; ?>

<div class="page-layout">

  <!-- ── Left sidebar ── -->
  <aside class="sidebar-left">
    <?php include $partials . 'drawer_sidebar.php'; ?>
    <?php include $partials . 'left_sidebar.php'; ?>
  </aside>

  <!-- ── Main content ── -->
  <main class="main-content">

    <!-- HEADER -->
    <p class="page-eyebrow">Components · Forms</p>
    <h1 class="page-title">Calendar</h1>
    <p class="page-lead">
      A responsive date-range picker for booking flows. One script tag, one div — done.
      Works on desktop (two months) and collapses to a single month on mobile automatically.
    </p>

    <hr class="page-divider" />

    <!-- ── LIVE PREVIEW ── -->
    <section class="section" id="preview">
      <h2 class="section-title">Live Preview</h2>
      <div class="preview-card">
        <div id="previewCal"></div>
      </div>
      <div class="output-box" id="previewOutput">
        <span style="color:#AEAEB2;">Select a check-in and check-out date above…</span>
      </div>
    </section>

    <!-- ── QUICK EMBED ── -->
    <section class="section" id="embed">
      <h2 class="section-title">Quick Embed</h2>
      <p class="section-body" style="margin-bottom:24px;">
        Two lines. That's all you need to drop a fully working calendar into any page.
      </p>

      <div class="embed-hero">
        <div class="embed-hero__title">Minimum embed</div>
        <button class="embed-copy" onclick="copyCode(this)">Copy</button>
        <pre><span class="cmt">&lt;!-- 1. One div --&gt;</span>
<span class="tag">&lt;div</span> <span class="attr">data-hs-calendar</span><span class="tag">&gt;&lt;/div&gt;</span>

<span class="cmt">&lt;!-- 2. One script --&gt;</span>
<span class="tag">&lt;script</span> <span class="attr">src</span>=<span class="str">"https://holidayseva.com/UI/Forms/calendar/calendar-component.js"</span><span class="tag">&gt;&lt;/script&gt;</span></pre>
      </div>

      <div class="callout callout--tip">
        <span class="callout__icon">💡</span>
        <div class="callout__body">
          <strong>That's it.</strong> The script self-injects all required CSS, auto-finds every
          <code>[data-hs-calendar]</code> div, and initialises. No <code>new HolidaysevaCalendar()</code> call needed unless you want custom options.
        </div>
      </div>

      <!-- Option B: with options -->
      <h3 class="section-subtitle">With options (data attribute)</h3>
      <div class="code-label">HTML</div>
      <div class="code-block">
        <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        <pre><span class="tag">&lt;div</span>
  <span class="attr">data-hs-calendar</span>
  <span class="attr">data-hs-config</span>=<span class="str">'{"months":2,"showFooter":true}'</span>
<span class="tag">&gt;&lt;/div&gt;</span>

<span class="tag">&lt;script</span> <span class="attr">src</span>=<span class="str">"/UI/Forms/calendar/calendar-component.js"</span><span class="tag">&gt;&lt;/script&gt;</span></pre>
      </div>

      <!-- Option C: JS init -->
      <h3 class="section-subtitle">JS initialisation (full control)</h3>
      <div class="code-label">HTML + JS</div>
      <div class="code-block">
        <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        <pre><span class="cmt">&lt;!-- your page --&gt;</span>
<span class="tag">&lt;div</span> <span class="attr">id</span>=<span class="str">"bookingCal"</span><span class="tag">&gt;&lt;/div&gt;</span>

<span class="tag">&lt;script</span> <span class="attr">src</span>=<span class="str">"/UI/Forms/calendar/calendar-component.js"</span><span class="tag">&gt;&lt;/script&gt;</span>
<span class="tag">&lt;script&gt;</span>
  <span class="kw">const</span> cal = <span class="kw">new</span> <span class="prop">HolidaysevaCalendar</span>(<span class="str">'#bookingCal'</span>, {
    <span class="prop">minDate</span>: <span class="kw">new</span> Date(),
    <span class="prop">onChange</span>: ({ start, end, extendDays, effectiveEnd }) <span class="kw">=&gt;</span> {
      console.<span class="prop">log</span>(<span class="str">'Check-in:'</span>, start);
      console.<span class="prop">log</span>(<span class="str">'Check-out:'</span>, end);
      console.<span class="prop">log</span>(<span class="str">'Extended checkout:'</span>, effectiveEnd);
    },
  });
<span class="tag">&lt;/script&gt;</span></pre>
      </div>
    </section>

    <!-- ── QUICK START ── -->
    <section class="section" id="quickstart">
      <h2 class="section-title">Quick Start</h2>
      <ol class="step-list">
        <li class="step-item">
          <div class="step-number">1</div>
          <div class="step-content">
            <div class="step-title">Copy the component file</div>
            <div class="step-desc">Upload <code>calendar-component.js</code> to <code>/UI/Forms/calendar/</code> on your server. That single file includes all styles — no separate CSS needed.</div>
          </div>
        </li>
        <li class="step-item">
          <div class="step-number">2</div>
          <div class="step-content">
            <div class="step-title">Add a div where you want the calendar</div>
            <div class="step-desc">Place <code>&lt;div data-hs-calendar&gt;&lt;/div&gt;</code> anywhere in your page body. Give it an <code>id</code> if you need to reference it via JS.</div>
          </div>
        </li>
        <li class="step-item">
          <div class="step-number">3</div>
          <div class="step-content">
            <div class="step-title">Load the script</div>
            <div class="step-desc">Add one <code>&lt;script src="/UI/Forms/calendar/calendar-component.js"&gt;&lt;/script&gt;</code> tag before <code>&lt;/body&gt;</code>. Auto-init runs immediately.</div>
          </div>
        </li>
        <li class="step-item">
          <div class="step-number">4</div>
          <div class="step-content">
            <div class="step-title">Wire up your form (optional)</div>
            <div class="step-desc">Use the <code>onChange</code> callback to sync <code>start</code>, <code>end</code>, and <code>effectiveEnd</code> into hidden inputs for form submission.</div>
          </div>
        </li>
        <li class="step-item">
          <div class="step-number">5</div>
          <div class="step-content">
            <div class="step-title">Block unavailable dates</div>
            <div class="step-desc">Pass <code>disabledDates: ['2026-04-15', '2026-04-16']</code> on init, or call <code>cal.disable(dates)</code> dynamically inside <code>onMonthChange</code> to fetch from your API.</div>
          </div>
        </li>
      </ol>
    </section>

    <!-- ── EXTEND DAYS FEATURE ── -->
    <section class="section" id="extend">
      <h2 class="section-title">Extend Stay Buttons</h2>
      <p class="section-body" style="margin-bottom:20px;">
        Once a date range is selected, pill buttons appear in the footer letting the user extend their checkout by +1, +2, +3, +7, or +14 days. The extended end date is highlighted in green. Clicking the same pill again toggles it off.
      </p>

      <div class="callout callout--info">
        <span class="callout__icon">ℹ️</span>
        <div class="callout__body">
          The <code>onChange</code> callback receives <strong>four values</strong>: <code>start</code>, <code>end</code> (original selection), <code>extendDays</code> (0 if not extended), and <code>effectiveEnd</code> (the actual checkout after extension).
        </div>
      </div>

      <div class="code-label">Customise the options</div>
      <div class="code-block">
        <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        <pre><span class="kw">new</span> <span class="prop">HolidaysevaCalendar</span>(<span class="str">'#cal'</span>, {
  <span class="prop">extendOptions</span>: [<span class="num">1</span>, <span class="num">2</span>, <span class="num">3</span>, <span class="num">7</span>, <span class="num">14</span>],  <span class="cmt">// default</span>
  <span class="prop">showFooter</span>: <span class="kw">true</span>,                 <span class="cmt">// set false to hide footer</span>
  <span class="prop">onChange</span>: ({ start, end, extendDays, effectiveEnd }) <span class="kw">=&gt;</span> {
    <span class="cmt">// extendDays = 0 means no extension selected</span>
    document.<span class="prop">getElementById</span>(<span class="str">'checkin'</span>).value  = start.<span class="prop">toISOString</span>().<span class="prop">slice</span>(<span class="num">0</span>, <span class="num">10</span>);
    document.<span class="prop">getElementById</span>(<span class="str">'checkout'</span>).value = effectiveEnd.<span class="prop">toISOString</span>().<span class="prop">slice</span>(<span class="num">0</span>, <span class="num">10</span>);
  },
});</pre>
      </div>
    </section>

    <!-- ── OPTIONS ── -->
    <section class="section" id="options">
      <h2 class="section-title">Options</h2>
      <table class="props-table">
        <thead>
          <tr><th>Option</th><th>Type</th><th>Default</th><th>Description</th></tr>
        </thead>
        <tbody>
          <tr><td><code>minDate</code></td><td><span class="type-badge">Date</span></td><td><code>new Date()</code></td><td>Earliest selectable date. Past dates are struck through.</td></tr>
          <tr><td><code>maxDate</code></td><td><span class="type-badge">Date</span></td><td><code>null</code></td><td>Latest selectable date. Null = no upper limit.</td></tr>
          <tr><td><code>disabledDates</code></td><td><span class="type-badge">string[]</span></td><td><code>[]</code></td><td>Array of <code>YYYY-MM-DD</code> strings to block.</td></tr>
          <tr><td><code>defaultStart</code></td><td><span class="type-badge">string</span></td><td><code>null</code></td><td>Pre-selected check-in date as <code>YYYY-MM-DD</code>.</td></tr>
          <tr><td><code>defaultEnd</code></td><td><span class="type-badge">string</span></td><td><code>null</code></td><td>Pre-selected check-out date as <code>YYYY-MM-DD</code>.</td></tr>
          <tr><td><code>months</code></td><td><span class="type-badge">number</span></td><td><code>2</code></td><td>Month columns on desktop. On mobile (&lt;600px) always 1.</td></tr>
          <tr><td><code>inline</code></td><td><span class="type-badge">boolean</span></td><td><code>false</code></td><td>Replaces drop-shadow with a border. Useful inside modals.</td></tr>
          <tr><td><code>showFooter</code></td><td><span class="type-badge">boolean</span></td><td><code>true</code></td><td>Shows/hides the extend-stay footer.</td></tr>
          <tr><td><code>extendOptions</code></td><td><span class="type-badge">number[]</span></td><td><code>[1,2,3,7,14]</code></td><td>Days to offer as checkout extensions in the footer.</td></tr>
          <tr><td><code>onChange</code></td><td><span class="type-badge">function</span></td><td><code>null</code></td><td>Fires on complete range. Receives <code>{ start, end, extendDays, effectiveEnd }</code>.</td></tr>
          <tr><td><code>onMonthChange</code></td><td><span class="type-badge">function</span></td><td><code>null</code></td><td>Fires on navigation. Receives <code>{ year, month }</code>.</td></tr>
          <tr><td><code>onSelect</code></td><td><span class="type-badge">function</span></td><td><code>null</code></td><td>Fires on each individual click. Receives the clicked <code>Date</code>.</td></tr>
        </tbody>
      </table>
    </section>

    <!-- ── METHODS ── -->
    <section class="section" id="methods">
      <h2 class="section-title">JavaScript Methods</h2>
      <table class="props-table">
        <thead>
          <tr><th>Method</th><th>Returns</th><th>Description</th></tr>
        </thead>
        <tbody>
          <tr><td><code>getRange()</code></td><td><span class="type-badge">object</span></td><td>Returns <code>{ start, end, extendDays, effectiveEnd }</code>. Values are <code>Date</code> or <code>null</code>.</td></tr>
          <tr><td><code>setRange(start, end)</code></td><td><code>void</code></td><td>Programmatically sets dates. Accepts <code>Date</code> or <code>YYYY-MM-DD</code> string.</td></tr>
          <tr><td><code>clear()</code></td><td><code>void</code></td><td>Clears selection, hover, and extend state. Re-renders.</td></tr>
          <tr><td><code>goToMonth(year, month)</code></td><td><code>void</code></td><td>Navigates to a month. <code>month</code> is 0-indexed (0 = January).</td></tr>
          <tr><td><code>disable(dates)</code></td><td><code>void</code></td><td>Dynamically adds dates to the disabled list.</td></tr>
          <tr><td><code>destroy()</code></td><td><code>void</code></td><td>Removes all event listeners and clears the DOM.</td></tr>
        </tbody>
      </table>
    </section>

    <!-- ── USAGE GUIDELINES ── -->
    <section class="section" id="guidelines">
      <h2 class="section-title">Usage Guidelines</h2>
      <div class="usage-grid">
        <div class="usage-card usage-card--do">
          <div class="usage-card__header">✓ Do</div>
          <div class="usage-card__body">Show two months for range selection. Users comparing weekly stays need to see both start and end without navigating.</div>
        </div>
        <div class="usage-card usage-card--dont">
          <div class="usage-card__header">✗ Don't</div>
          <div class="usage-card__body">Embed the dual calendar inside a container narrower than 600px — it will collapse to one month automatically, but don't fight it.</div>
        </div>
        <div class="usage-card usage-card--do">
          <div class="usage-card__header">✓ Do</div>
          <div class="usage-card__body">Pass <code>minDate: new Date()</code> in booking flows to prevent past-date selection out of the box.</div>
        </div>
        <div class="usage-card usage-card--dont">
          <div class="usage-card__header">✗ Don't</div>
          <div class="usage-card__body">Override the color variables inline. Edit <code>colors.css</code> tokens so the theme propagates everywhere consistently.</div>
        </div>
        <div class="usage-card usage-card--do">
          <div class="usage-card__header">✓ Do</div>
          <div class="usage-card__body">Use <code>effectiveEnd</code> (not <code>end</code>) when syncing to hidden form inputs, so extend-stay days are always included.</div>
        </div>
        <div class="usage-card usage-card--dont">
          <div class="usage-card__header">✗ Don't</div>
          <div class="usage-card__body">Load the script inside the <code>&lt;head&gt;</code> with no <code>defer</code>. Place it before <code>&lt;/body&gt;</code> or add <code>defer</code>.</div>
        </div>
      </div>
    </section>

  </main>

  <!-- ── Right sidebar TOC ── -->
  <aside class="sidebar-right">
    <?php include $partials . 'right_sidebar.php'; ?>
  </aside>

</div>

<!-- The component script -->
<script src="https://holidayseva.com/UI/Forms/calendar/calendar-component.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {

  const output = document.getElementById('previewOutput');

  new HolidaysevaCalendar('#previewCal', {
    minDate: new Date(),
    months: 2,
    onChange: ({ start, end, extendDays, effectiveEnd }) => {
      const fmt = d => d ? d.toLocaleDateString('en-IN', { day:'numeric', month:'short', year:'numeric' }) : '—';
      const nights = start && end ? Math.round((end - start) / 86400000) : 0;
      const extText = extendDays > 0
        ? ` &nbsp;+&nbsp; <strong style="color:#1A7A35">+${extendDays} day${extendDays>1?'s':''} extension → ${fmt(effectiveEnd)}</strong>`
        : '';
      output.innerHTML = `<strong>${fmt(start)}</strong> → <strong>${fmt(end)}</strong> &nbsp;·&nbsp; ${nights} night${nights!==1?'s':''}${extText}`;
    },
  });

});

function copyCode(btn) {
  const block = btn.closest('.code-block, .embed-hero');
  const text = block.querySelector('pre').innerText;
  navigator.clipboard.writeText(text).then(() => {
    btn.textContent = 'Copied!';
    setTimeout(() => btn.textContent = 'Copy', 1800);
  });
}
</script>

</body>
</html>