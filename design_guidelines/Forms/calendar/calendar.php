<?php
/**
 * calendar.php
 * Calendar / Date Picker — Holidayseva Design System
 * Layout: header + drawer_sidebar + left_sidebar + main + right_sidebar
 */
$partials = __DIR__ . '/../../';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calendar / Date Picker — Holidayseva Design System</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://holidayseva.com/UI/Foundation/colors.css">
  <link rel="stylesheet" href="https://holidayseva.com/UI/design-system.css">
  <link rel="stylesheet" href="https://holidayseva.com/UI/Forms/calendar/calendar.css">

<style>
/* ============================================================
   DOCUMENTATION PAGE STYLES — calendar.php only
   Component styles live in calendar.css
   ============================================================ */

/* ═══════════════════════════════════════════════════════
   GRID LAYOUT OVERRIDE
   Replaces design-system.css fixed+padding approach with
   a true 3-column CSS grid so sidebars sit in-flow.
═══════════════════════════════════════════════════════ */
.page-layout {
  display: grid;
  grid-template-columns: var(--sidebar-w) 1fr var(--toc-w);
  grid-template-rows: 1fr;
  /* cancel the padding offsets set by design-system.css */
  padding-left: 0 !important;
  padding-right: 0 !important;
  min-height: calc(100vh - var(--header-h));
  align-items: start;
}

/* Left sidebar — sticky in its grid column */
.page-layout > .sidebar-left {
  grid-column: 1;
  position: sticky;
  top: var(--header-h);
  height: calc(100vh - var(--header-h));
  overflow-y: auto;
  border-right: 1px solid var(--border-light);
  /* undo the fixed positioning from design-system.css */
  left: unset;
  width: 100%;
  z-index: 10 !important;
}

/* Main content — centre column */
.page-layout > .main-content {
  grid-column: 2;
  min-width: 0;
  padding: 48px 56px;
}

/* Right sidebar — sticky in its grid column */
.page-layout > .sidebar-right {
  grid-column: 3;
  position: sticky;
  top: var(--header-h);
  height: calc(100vh - var(--header-h));
  overflow-y: auto;
  border-left: 1px solid var(--border-light);
  /* undo the fixed positioning from design-system.css */
  right: unset;
  width: 100%;
}

/* ── Responsive ── */
@media (max-width: 1100px) {
  .page-layout {
    grid-template-columns: var(--sidebar-w) 1fr;
  }
  .page-layout > .sidebar-right {
    display: none;
  }
}

@media (max-width: 680px) {
  .page-layout {
    grid-template-columns: 1fr;
  }
  .page-layout > .sidebar-left {
    display: none;
  }
  .page-layout > .main-content {
    padding: 32px 20px;
  }
}
/* ═══════════════════════════════════════════════════════
   PAGE TYPOGRAPHY
═══════════════════════════════════════════════════════ */
.page-eyebrow {
  font-size: 11px; font-weight: 600;
  color: var(--color-primary);
  letter-spacing: var(--tracking-wide);
  text-transform: uppercase;
  margin-bottom: 8px;
}
.page-title {
  font-family: var(--font-display);
  font-size: 34px; font-weight: 700;
  letter-spacing: var(--tracking-tight);
  color: var(--color-text-primary);
  line-height: 1.15; margin-bottom: 16px;
}
.page-lead {
  font-size: 16px;
  color: var(--color-text-secondary);
  line-height: 1.65; max-width: 620px;
  margin-bottom: 40px;
}
.page-divider {
  border: none;
  border-top: 1px solid var(--color-border-light);
  margin: 48px 0;
}

/* ═══════════════════════════════════════════════════════
   SECTIONS
═══════════════════════════════════════════════════════ */
.section { margin-bottom: 56px; }
.section-title {
  font-size: 20px; font-weight: 600;
  letter-spacing: var(--tracking-tight);
  color: var(--color-text-primary);
  margin-bottom: 16px;
  padding-bottom: 12px;
  border-bottom: 1px solid var(--color-border-light);
}
.section-body { font-size: 14px; color: var(--color-text-secondary); line-height: 1.7; }
.section-subtitle { font-size: 14px; font-weight: 600; color: var(--color-text-primary); margin: 24px 0 10px; }

/* ═══════════════════════════════════════════════════════
   CALLOUTS
═══════════════════════════════════════════════════════ */
.callout {
  padding: 14px 18px;
  border-radius: 10px;
  font-size: 13px; line-height: 1.6;
  margin-bottom: 20px;
  display: flex; gap: 10px; align-items: flex-start;
}
.callout--info    { background: rgba(0,122,255,0.07); border: 1px solid rgba(0,122,255,0.20); }
.callout--warning { background: rgba(255,149,0,0.10); border: 1px solid rgba(255,149,0,0.30); }
.callout__icon { flex-shrink: 0; margin-top: 1px; }
.callout__body { color: var(--color-text-secondary); }
.callout__body strong { color: var(--color-text-primary); }
.callout__body code {
  font-family: var(--font-mono); font-size: 11px;
  background: rgba(0,0,0,0.06);
  padding: 1px 5px; border-radius: 4px;
}

/* ═══════════════════════════════════════════════════════
   PREVIEW CARD
═══════════════════════════════════════════════════════ */
.preview-card {
  background: var(--color-bg-secondary);
  border: 1px solid var(--color-border-light);
  border-radius: var(--radius-xl);
  padding: 40px 32px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 32px;
  min-height: 280px;
}

/* ═══════════════════════════════════════════════════════
   ANATOMY
═══════════════════════════════════════════════════════ */
.anatomy-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 12px; margin-bottom: 32px;
}
.anatomy-item { display: flex; align-items: flex-start; gap: 12px; }
.anatomy-number {
  width: 22px; height: 22px;
  border-radius: 50%;
  background: var(--color-primary); color: #fff;
  font-size: 11px; font-weight: 700;
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0; margin-top: 1px;
}
.anatomy-label { font-size: 13px; font-weight: 600; color: var(--color-text-primary); }
.anatomy-desc { font-size: 12px; color: var(--color-text-secondary); margin-top: 2px; line-height: 1.5; }
.anatomy-desc code {
  font-family: var(--font-mono); font-size: 11px;
  background: var(--color-muted); padding: 1px 4px;
  border-radius: 3px; color: var(--color-primary);
}

/* Day state strip */
.state-strip {
  display: flex; flex-wrap: wrap; gap: 16px;
  background: var(--color-bg-secondary);
  padding: 24px; border-radius: var(--radius-lg);
  border: 1px solid var(--color-border-light);
  margin-bottom: 8px;
}
.state-item { display: flex; flex-direction: column; align-items: center; gap: 8px; min-width: 72px; }
.state-label { font-size: 11px; color: var(--color-text-secondary); font-weight: 500; text-align: center; }

.demo-day {
  width: 36px; height: 36px;
  display: flex; align-items: center; justify-content: center;
  font-size: 14px; font-family: var(--font-system);
  border-radius: 50%; position: relative;
}
.demo-day--default  { color: var(--color-text-primary); }
.demo-day--hover    { background: var(--color-muted); color: var(--color-text-primary); }
.demo-day--today    { font-weight: 700; color: var(--color-text-primary); }
.demo-day--today::after {
  content: ''; position: absolute; bottom: 3px; left: 50%;
  transform: translateX(-50%);
  width: 4px; height: 4px; background: var(--color-primary); border-radius: 50%;
}
.demo-day--selected  { background: var(--color-secondary); color: #fff; font-weight: 600; }
.demo-day--disabled  { color: var(--color-muted-dark); text-decoration: line-through; }

.demo-range-wrap { display: flex; }
.demo-day--rs {
  background: var(--color-secondary); color: #fff; font-weight: 600;
  border-radius: 50% 0 0 50%;
  width: 36px; height: 36px;
  display: flex; align-items: center; justify-content: center; font-size: 14px;
}
.demo-day--ir {
  background: var(--color-primary-alpha); color: var(--color-text-primary);
  border-radius: 0;
  width: 36px; height: 36px;
  display: flex; align-items: center; justify-content: center; font-size: 14px;
}
.demo-day--re {
  background: var(--color-secondary); color: #fff; font-weight: 600;
  border-radius: 0 50% 50% 0;
  width: 36px; height: 36px;
  display: flex; align-items: center; justify-content: center; font-size: 14px;
}

/* ═══════════════════════════════════════════════════════
   TABLES
═══════════════════════════════════════════════════════ */
.spec-table, .props-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 13px; margin-bottom: 24px;
  border-radius: 10px; overflow: hidden;
  border: 1px solid var(--color-border-light);
}
.spec-table th, .props-table th {
  text-align: left; font-weight: 600;
  color: var(--color-text-primary);
  padding: 10px 14px;
  background: var(--color-bg-secondary);
  border-bottom: 1px solid var(--color-border-light);
  font-size: 11px; letter-spacing: var(--tracking-wide);
  text-transform: uppercase;
}
.spec-table td, .props-table td {
  padding: 10px 14px;
  border-bottom: 1px solid var(--color-border-light);
  color: var(--color-text-secondary); vertical-align: top;
}
.spec-table tr:last-child td, .props-table tr:last-child td { border-bottom: none; }
.spec-table td:first-child {
  font-family: var(--font-mono); font-size: 12px;
  color: var(--color-text-primary); font-weight: 500;
}
.props-table td code {
  font-family: var(--font-mono); font-size: 11px;
  background: var(--color-muted); padding: 2px 5px;
  border-radius: 4px; color: var(--color-text-primary);
}
.token-val {
  font-family: var(--font-mono); font-size: 12px;
  background: var(--color-muted); padding: 2px 6px;
  border-radius: 4px; color: var(--color-primary);
}
.type-badge {
  display: inline-block;
  font-family: var(--font-mono); font-size: 11px;
  padding: 2px 6px; border-radius: 4px;
  background: var(--color-primary-alpha);
  color: var(--color-primary); font-weight: 500;
}

/* ═══════════════════════════════════════════════════════
   COLOR SWATCHES
═══════════════════════════════════════════════════════ */
.swatch-row {
  display: flex; align-items: center; gap: 10px;
  padding: 8px 0;
  border-bottom: 1px solid var(--color-border-light);
  font-size: 13px;
}
.swatch-row:last-child { border-bottom: none; }
.swatch { width: 28px; height: 28px; border-radius: 6px; border: 1px solid rgba(0,0,0,0.08); flex-shrink: 0; }
.swatch-name  { font-family: var(--font-mono); font-size: 12px; color: var(--color-primary); flex: 1; }
.swatch-value { font-family: var(--font-mono); font-size: 12px; color: var(--color-text-secondary); }

/* ═══════════════════════════════════════════════════════
   CODE BLOCKS
═══════════════════════════════════════════════════════ */
.code-label {
  font-size: 10px; font-weight: 600;
  color: #8E8E93; text-transform: uppercase;
  letter-spacing: 0.06em; margin-bottom: 8px;
}
.code-block {
  background: var(--color-code-bg);
  border-radius: var(--radius-lg);
  padding: 24px; margin-bottom: 24px;
  overflow-x: auto; position: relative;
}
.code-block pre {
  font-family: var(--font-mono); font-size: 12px;
  line-height: 1.75; color: var(--color-code-text);
  white-space: pre;
}
.copy-btn {
  position: absolute; top: 14px; right: 14px;
  background: rgba(255,255,255,0.08);
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: 6px; padding: 5px 10px;
  font-size: 11px; font-family: var(--font-system);
  color: #8E8E93; cursor: pointer;
  transition: all var(--transition-fast);
}
.copy-btn:hover { background: rgba(255,255,255,0.15); color: #fff; }
.kw   { color: var(--color-code-keyword); }
.str  { color: var(--color-code-string); }
.num  { color: var(--color-code-number); }
.cmt  { color: var(--color-code-comment); font-style: italic; }
.prop { color: var(--color-code-property); }
.tag  { color: var(--color-code-tag); }
.attr { color: var(--color-code-attr); }

/* ═══════════════════════════════════════════════════════
   DO / DON'T GRID
═══════════════════════════════════════════════════════ */
.usage-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 24px; }
.usage-card { border-radius: var(--radius-lg); border: 1.5px solid transparent; overflow: hidden; }
.usage-card--do   { border-color: rgba(52,199,89,0.35); }
.usage-card--dont { border-color: rgba(255,59,48,0.30); }
.usage-card__header { padding: 10px 16px; font-size: 13px; font-weight: 600; }
.usage-card--do   .usage-card__header { background: rgba(52,199,89,0.10); color: #1A9E35; }
.usage-card--dont .usage-card__header { background: rgba(255,59,48,0.08); color: #C13515; }
.usage-card__body { padding: 14px 16px; background: var(--color-bg); font-size: 13px; color: var(--color-text-secondary); line-height: 1.6; }

/* ═══════════════════════════════════════════════════════
   ACCESSIBILITY LIST
═══════════════════════════════════════════════════════ */
.a11y-list { list-style: none; display: flex; flex-direction: column; gap: 10px; }
.a11y-item { display: flex; align-items: flex-start; gap: 10px; font-size: 13px; color: var(--color-text-secondary); }
.a11y-icon {
  width: 18px; height: 18px;
  border-radius: 50%;
  background: rgba(52,199,89,0.10);
  border: 1.5px solid rgba(52,199,89,0.30);
  color: #1A9E35;
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0; margin-top: 1px;
}
.a11y-item strong { color: var(--color-text-primary); }
.a11y-item code { font-family: var(--font-mono); font-size: 11px; background: var(--color-muted); padding: 1px 4px; border-radius: 3px; }

/* ═══════════════════════════════════════════════════════
   STEP LIST
═══════════════════════════════════════════════════════ */
.step-list { list-style: none; display: flex; flex-direction: column; gap: 0; }
.step-item { display: flex; gap: 16px; position: relative; }
.step-item + .step-item::before {
  content: ''; position: absolute;
  left: 14px; top: -16px; width: 2px; height: 16px;
  background: var(--color-border-light);
}
.step-number {
  width: 30px; height: 30px; border-radius: 50%;
  background: var(--color-text-primary); color: #fff;
  font-size: 13px; font-weight: 700;
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0; margin-top: 2px;
}
.step-content { padding-bottom: 28px; }
.step-title { font-weight: 600; color: var(--color-text-primary); font-size: 14px; margin-bottom: 6px; }
.step-desc { font-size: 13px; color: var(--color-text-secondary); line-height: 1.6; }
.step-desc code { font-family: var(--font-mono); font-size: 11px; background: var(--color-muted); padding: 1px 5px; border-radius: 3px; color: var(--color-primary); }

/* ── Live region (screen reader only) ── */
.calendar-live-region {
  position: absolute; width: 1px; height: 1px;
  overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap;
}

/* ═══════════════════════════════════════════════════════
   RESPONSIVE
═══════════════════════════════════════════════════════ */
@media (max-width: 900px) {
  .anatomy-grid { grid-template-columns: 1fr; }
  .usage-grid   { grid-template-columns: 1fr; }
}
@media (max-width: 700px) {
  .preview-card { padding: 20px 12px; }
}

</style>
</head>
<body>

<?php include $partials . 'header.php'; ?>
<?php include $partials . 'drawer_sidebar.php'; ?>

<div class="page-layout">

  <!-- ── Left sidebar ── -->
  <aside class="sidebar-left">
    <?php include $partials . 'left_sidebar.php'; ?>
  </aside>

  <!-- ── Main content ── -->
  <main class="main-content">

    <!-- Page Header -->
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

    <!-- LIVE PREVIEW -->
    <section class="section" id="preview">
      <h2 class="section-title">Live Preview</h2>
      <p class="section-body" style="margin-bottom:24px;">
        Interact with the calendar below. Click a date to set check-in,
        click a second date to set check-out. Navigate months with the arrows.
        Footer pills adjust date flexibility.
      </p>

      <div class="preview-card">
        <div class="calendar-wrapper" id="previewCal">
          <div class="calendar-mode-toggle">
            <button class="calendar-mode-btn active" data-action="mode" data-mode="dates">Dates</button>
            <button class="calendar-mode-btn" data-action="mode" data-mode="flexible">Flexible</button>
          </div>
          <div class="calendar-months"></div>
          <div class="calendar-footer">
            <button class="flex-pill active-pill" data-action="flex" data-flex="exact">Exact dates</button>
            <button class="flex-pill" data-action="flex" data-flex="1">± 1 day</button>
            <button class="flex-pill" data-action="flex" data-flex="2">± 2 days</button>
            <button class="flex-pill" data-action="flex" data-flex="3">± 3 days</button>
            <button class="flex-pill" data-action="flex" data-flex="7">± 7 days</button>
            <button class="flex-pill" data-action="flex" data-flex="14">± 14 days</button>
          </div>
        </div>
      </div>
    </section>

    <!-- ANATOMY -->
    <section class="section" id="anatomy">
      <h2 class="section-title">Anatomy</h2>
      <p class="section-body" style="margin-bottom:24px;">
        The calendar is built from discrete, independently styled sub-elements.
        Each maps to a specific BEM class in <code style="font-family:var(--font-mono);font-size:12px;background:var(--color-muted);padding:1px 5px;border-radius:4px;">calendar.css</code>.
      </p>

      <div class="anatomy-grid">
        <div class="anatomy-item"><div class="anatomy-number">1</div><div><div class="anatomy-label">Mode Toggle</div><div class="anatomy-desc">Segmented pill switching between "Dates" and "Flexible" intent. Wired via <code>data-action="mode"</code>.</div></div></div>
        <div class="anatomy-item"><div class="anatomy-number">2</div><div><div class="anatomy-label">Month Header</div><div class="anatomy-desc">Month name + year. Houses prev/next nav via <code>.calendar-month__header</code>.</div></div></div>
        <div class="anatomy-item"><div class="anatomy-number">3</div><div><div class="anatomy-label">Navigation Buttons</div><div class="anatomy-desc">32×32 circular icon buttons (<code>.calendar-nav-btn</code>). Left hidden on right month; right hidden on left month.</div></div></div>
        <div class="anatomy-item"><div class="anatomy-number">4</div><div><div class="anatomy-label">Weekday Labels</div><div class="anatomy-desc">S M T W T F S row. Class <code>.calendar-weekday</code>. Token: <code>--text-xs</code>, <code>--color-text-secondary</code>.</div></div></div>
        <div class="anatomy-item"><div class="anatomy-number">5</div><div><div class="anatomy-label">Day Cell</div><div class="anatomy-desc">7-column button grid (<code>.calendar-day</code>). Each cell has 6 visual states applied via BEM modifier classes.</div></div></div>
        <div class="anatomy-item"><div class="anatomy-number">6</div><div><div class="anatomy-label">Range Fill</div><div class="anatomy-desc">Rectangular alpha band between endpoints. Class <code>.calendar-day--in-range</code>. Token: <code>--color-primary-alpha</code>.</div></div></div>
        <div class="anatomy-item"><div class="anatomy-number">7</div><div><div class="anatomy-label">Today Dot</div><div class="anatomy-desc">4px circle via <code>.calendar-day--today::after</code>. Token: <code>--color-primary</code>. Turns white on selected state.</div></div></div>
        <div class="anatomy-item"><div class="anatomy-number">8</div><div><div class="anatomy-label">Flexibility Footer</div><div class="anatomy-desc">Pill row (<code>.calendar-footer</code>) softening the constraint by ±1–14 days. Wired via <code>data-action="flex"</code>.</div></div></div>
      </div>

      <h3 class="section-subtitle">Day Cell States</h3>
      <div class="state-strip">
        <div class="state-item"><div class="demo-day demo-day--default">8</div><div class="state-label">Default</div></div>
        <div class="state-item"><div class="demo-day demo-day--hover">8</div><div class="state-label">Hover</div></div>
        <div class="state-item"><div class="demo-day demo-day--today">8</div><div class="state-label">Today</div></div>
        <div class="state-item"><div class="demo-day demo-day--selected">8</div><div class="state-label">Selected</div></div>
        <div class="state-item">
          <div class="demo-range-wrap"><div class="demo-day--rs">6</div><div class="demo-day--ir">7</div><div class="demo-day--re">8</div></div>
          <div class="state-label">Range</div>
        </div>
        <div class="state-item"><div class="demo-day demo-day--disabled">8</div><div class="state-label">Disabled</div></div>
      </div>
    </section>

    <!-- SPECIFICATIONS -->
    <section class="section" id="specs">
      <h2 class="section-title">Specifications</h2>

      <h3 class="section-subtitle">Layout &amp; Sizing</h3>
      <table class="spec-table">
        <thead><tr><th>Property</th><th>Value</th><th>Token</th></tr></thead>
        <tbody>
          <tr><td>Wrapper max-width</td><td>700px</td><td>—</td></tr>
          <tr><td>Wrapper padding</td><td>28px</td><td><span class="token-val">--space-lg</span></td></tr>
          <tr><td>Wrapper border-radius</td><td>18px</td><td><span class="token-val">--radius-xl</span></td></tr>
          <tr><td>Wrapper shadow</td><td>layered drop shadow</td><td><span class="token-val">--shadow-modal</span></td></tr>
          <tr><td>Dual-month column gap</td><td>32px</td><td><span class="token-val">--space-2xl</span></td></tr>
          <tr><td>Day cell</td><td>aspect-ratio: 1 (fills grid column)</td><td>—</td></tr>
          <tr><td>Nav button</td><td>32 × 32px, border-radius 50%</td><td>—</td></tr>
          <tr><td>Grid columns</td><td>7</td><td>—</td></tr>
          <tr><td>Today dot</td><td>4 × 4px</td><td>—</td></tr>
        </tbody>
      </table>

      <h3 class="section-subtitle">Color Tokens</h3>
      <div style="border:1px solid var(--color-border-light);border-radius:10px;padding:0 16px;">
        <div class="swatch-row"><div class="swatch" style="background:#FF385C;"></div><span class="swatch-name">--color-primary</span><span class="swatch-value">#FF385C — today dot, focus ring</span></div>
        <div class="swatch-row"><div class="swatch" style="background:rgba(255,56,92,0.12);"></div><span class="swatch-name">--color-primary-alpha</span><span class="swatch-value">rgba(255,56,92,.12) — in-range fill</span></div>
        <div class="swatch-row"><div class="swatch" style="background:#222222;"></div><span class="swatch-name">--color-secondary</span><span class="swatch-value">#222222 — selected, range endpoints</span></div>
        <div class="swatch-row"><div class="swatch" style="background:#EBEBEB;border-color:#ddd;"></div><span class="swatch-name">--color-muted</span><span class="swatch-value">#EBEBEB — hover background</span></div>
        <div class="swatch-row"><div class="swatch" style="background:#D2D2D7;"></div><span class="swatch-name">--color-border</span><span class="swatch-value">#D2D2D7 — nav button border</span></div>
        <div class="swatch-row"><div class="swatch" style="background:#1D1D1F;"></div><span class="swatch-name">--color-text-primary</span><span class="swatch-value">#1D1D1F — default day number</span></div>
        <div class="swatch-row" style="border:none;"><div class="swatch" style="background:#6E6E73;"></div><span class="swatch-name">--color-text-secondary</span><span class="swatch-value">#6E6E73 — weekday labels</span></div>
      </div>
    </section>

    <!-- HTML USAGE -->
    <section class="section" id="usage">
      <h2 class="section-title">HTML Usage</h2>
      <p class="section-body" style="margin-bottom:20px;">
        Copy the skeleton below. The <code style="font-family:var(--font-mono);font-size:12px;background:var(--color-muted);padding:1px 4px;border-radius:4px;">.calendar-months</code> div is populated by
        <code style="font-family:var(--font-mono);font-size:12px;background:var(--color-muted);padding:1px 4px;border-radius:4px;">calendar.js</code> — never add day cells manually.
      </p>
      <div class="callout callout--warning">
        <svg class="callout__icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
          <path d="M8 2L15 14H1L8 2Z" stroke="#C45508" stroke-width="1.3" stroke-linejoin="round"/>
          <path d="M8 6v4M8 11.5v.5" stroke="#C45508" stroke-width="1.3" stroke-linecap="round"/>
        </svg>
        <div class="callout__body">
          <strong>Load order is critical.</strong> <code>colors.css</code> must come before <code>calendar.css</code>.
        </div>
      </div>
      <div class="code-label">HTML</div>
      <div class="code-block">
        <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        <pre><span class="tag">&lt;link</span> <span class="attr">rel</span>=<span class="str">"stylesheet"</span> <span class="attr">href</span>=<span class="str">"/assets/css/colors.css"</span><span class="tag">&gt;</span>
<span class="tag">&lt;link</span> <span class="attr">rel</span>=<span class="str">"stylesheet"</span> <span class="attr">href</span>=<span class="str">"/Components/calendar/calendar.css"</span><span class="tag">&gt;</span>

<span class="tag">&lt;div</span> <span class="attr">class</span>=<span class="str">"calendar-wrapper"</span> <span class="attr">id</span>=<span class="str">"bookingCal"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;div</span> <span class="attr">class</span>=<span class="str">"calendar-mode-toggle"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;button</span> <span class="attr">class</span>=<span class="str">"calendar-mode-btn active"</span> <span class="attr">data-action</span>=<span class="str">"mode"</span> <span class="attr">data-mode</span>=<span class="str">"dates"</span><span class="tag">&gt;</span>Dates<span class="tag">&lt;/button&gt;</span>
    <span class="tag">&lt;button</span> <span class="attr">class</span>=<span class="str">"calendar-mode-btn"</span> <span class="attr">data-action</span>=<span class="str">"mode"</span> <span class="attr">data-mode</span>=<span class="str">"flexible"</span><span class="tag">&gt;</span>Flexible<span class="tag">&lt;/button&gt;</span>
  <span class="tag">&lt;/div&gt;</span>
  <span class="tag">&lt;div</span> <span class="attr">class</span>=<span class="str">"calendar-months"</span><span class="tag">&gt;&lt;/div&gt;</span>
  <span class="tag">&lt;div</span> <span class="attr">class</span>=<span class="str">"calendar-footer"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;button</span> <span class="attr">class</span>=<span class="str">"flex-pill active-pill"</span> <span class="attr">data-action</span>=<span class="str">"flex"</span> <span class="attr">data-flex</span>=<span class="str">"exact"</span><span class="tag">&gt;</span>Exact dates<span class="tag">&lt;/button&gt;</span>
    <span class="tag">&lt;button</span> <span class="attr">class</span>=<span class="str">"flex-pill"</span> <span class="attr">data-action</span>=<span class="str">"flex"</span> <span class="attr">data-flex</span>=<span class="str">"1"</span><span class="tag">&gt;</span>± 1 day<span class="tag">&lt;/button&gt;</span>
    <span class="tag">&lt;button</span> <span class="attr">class</span>=<span class="str">"flex-pill"</span> <span class="attr">data-action</span>=<span class="str">"flex"</span> <span class="attr">data-flex</span>=<span class="str">"7"</span><span class="tag">&gt;</span>± 7 days<span class="tag">&lt;/button&gt;</span>
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
    </section>

    <!-- JAVASCRIPT API -->
    <section class="section" id="javascript">
      <h2 class="section-title">JavaScript API</h2>
      <p class="section-body" style="margin-bottom:20px;">
        <code style="font-family:var(--font-mono);font-size:12px;background:var(--color-muted);padding:1px 4px;border-radius:4px;">HolidaysevaCalendar</code> is a vanilla JS class exposed on <code style="font-family:var(--font-mono);font-size:12px;background:var(--color-muted);padding:1px 4px;border-radius:4px;">window</code>.
        No framework or build step required.
      </p>

      <h3 class="section-subtitle">Constructor Options</h3>
      <table class="props-table">
        <thead><tr><th>Option</th><th>Type</th><th>Default</th><th>Description</th></tr></thead>
        <tbody>
          <tr><td><code>minDate</code></td><td><span class="type-badge">Date</span></td><td><code>new Date()</code></td><td>Earliest selectable date. Past dates render disabled.</td></tr>
          <tr><td><code>maxDate</code></td><td><span class="type-badge">Date</span></td><td><code>null</code></td><td>Latest selectable date. <code>null</code> = no upper limit.</td></tr>
          <tr><td><code>disabledDates</code></td><td><span class="type-badge">string[]</span></td><td><code>[]</code></td><td>Array of <code>YYYY-MM-DD</code> strings to block.</td></tr>
          <tr><td><code>months</code></td><td><span class="type-badge">number</span></td><td><code>2</code></td><td>Month columns to render. Use <code>1</code> on narrow layouts.</td></tr>
          <tr><td><code>inline</code></td><td><span class="type-badge">boolean</span></td><td><code>false</code></td><td>Replaces drop-shadow with a border. Adds <code>.calendar-inline</code>.</td></tr>
          <tr><td><code>onChange</code></td><td><span class="type-badge">function</span></td><td><code>null</code></td><td>Fired on complete range. Receives <code>{ start: Date, end: Date }</code>.</td></tr>
          <tr><td><code>onMonthChange</code></td><td><span class="type-badge">function</span></td><td><code>null</code></td><td>Fired on navigation. Receives <code>{ year, month }</code>.</td></tr>
        </tbody>
      </table>

      <h3 class="section-subtitle">Instance Methods</h3>
      <table class="props-table">
        <thead><tr><th>Method</th><th>Returns</th><th>Description</th></tr></thead>
        <tbody>
          <tr><td><code>getRange()</code></td><td><span class="type-badge">{ start, end }</span></td><td>Returns current selection. Values are <code>Date</code> or <code>null</code>.</td></tr>
          <tr><td><code>setRange(start, end)</code></td><td><code>void</code></td><td>Programmatically sets dates.</td></tr>
          <tr><td><code>clear()</code></td><td><code>void</code></td><td>Clears selection and hover state, re-renders.</td></tr>
          <tr><td><code>goToMonth(year, month)</code></td><td><code>void</code></td><td>Navigates to month. <code>month</code> is 0-indexed.</td></tr>
          <tr><td><code>disable(dates)</code></td><td><code>void</code></td><td>Dynamically adds to disabled list.</td></tr>
          <tr><td><code>destroy()</code></td><td><code>void</code></td><td>Removes all event listeners and clears HTML.</td></tr>
        </tbody>
      </table>
    </section>

    <!-- INTEGRATION -->
    <section class="section" id="integration">
      <h2 class="section-title">Integration</h2>
      <p class="section-body" style="margin-bottom:28px;">Six steps to add the Calendar to any Holidayseva page from scratch.</p>
      <ol class="step-list">
        <li class="step-item"><div class="step-number">1</div><div class="step-content"><div class="step-title">Copy component files</div><div class="step-desc">Place <code>calendar.css</code> and <code>calendar.js</code> into <code>/Components/calendar/</code>.</div></div></li>
        <li class="step-item"><div class="step-number">2</div><div class="step-content"><div class="step-title">Import in correct order</div><div class="step-desc">In your <code>&lt;head&gt;</code>: load <code>colors.css</code> first, then <code>calendar.css</code>.</div></div></li>
        <li class="step-item"><div class="step-number">3</div><div class="step-content"><div class="step-title">Add the HTML wrapper</div><div class="step-desc">Place <code>.calendar-wrapper</code> with an empty <code>.calendar-months</code> inside it.</div></div></li>
        <li class="step-item"><div class="step-number">4</div><div class="step-content"><div class="step-title">Initialise</div><div class="step-desc">Call <code>new HolidaysevaCalendar('#id', options)</code> after the DOM is ready.</div></div></li>
        <li class="step-item"><div class="step-number">5</div><div class="step-content"><div class="step-title">Wire to your form</div><div class="step-desc">Use the <code>onChange</code> callback to sync <code>{ start, end }</code> into hidden inputs.</div></div></li>
        <li class="step-item"><div class="step-number">6</div><div class="step-content"><div class="step-title">Load disabled dates from your API</div><div class="step-desc">Pass unavailable nights via <code>disabledDates</code> on init, or call <code>cal.disable(dates)</code> inside <code>onMonthChange</code>.</div></div></li>
      </ol>
    </section>

    <!-- USAGE GUIDELINES -->
    <section class="section" id="guidelines">
      <h2 class="section-title">Usage Guidelines</h2>
      <div class="usage-grid">
        <div class="usage-card usage-card--do"><div class="usage-card__header">✓ Do</div><div class="usage-card__body">Show two months side-by-side. Users comparing weekly stays need to see both start and end without navigating.</div></div>
        <div class="usage-card usage-card--dont"><div class="usage-card__header">✗ Don't</div><div class="usage-card__body">Show one month for range selection. It forces navigation and hides the span of the trip from the user.</div></div>
        <div class="usage-card usage-card--do"><div class="usage-card__header">✓ Do</div><div class="usage-card__body">Pass <code style="font-family:var(--font-mono);font-size:11px;background:var(--color-muted);padding:1px 4px;border-radius:3px;">minDate: new Date()</code> in booking flows to prevent any past-date selection.</div></div>
        <div class="usage-card usage-card--dont"><div class="usage-card__header">✗ Don't</div><div class="usage-card__body">Write raw hex overrides. Always reference <code style="font-family:var(--font-mono);font-size:11px;background:var(--color-muted);padding:1px 4px;border-radius:3px;">colors.css</code> tokens so dark mode propagates automatically.</div></div>
        <div class="usage-card usage-card--do"><div class="usage-card__header">✓ Do</div><div class="usage-card__body">Include the footer flex pills in travel search. Flexible windows measurably improve booking conversion rates.</div></div>
        <div class="usage-card usage-card--dont"><div class="usage-card__header">✗ Don't</div><div class="usage-card__body">Embed the dual calendar inside a container narrower than 600px without switching to <code style="font-family:var(--font-mono);font-size:11px;background:var(--color-muted);padding:1px 4px;border-radius:3px;">months: 1</code>.</div></div>
      </div>
    </section>

    <!-- ACCESSIBILITY -->
    <section class="section" id="accessibility">
      <h2 class="section-title">Accessibility</h2>
      <p class="section-body" style="margin-bottom:20px;">
        The calendar targets WCAG 2.1 AA. All checks below are enforced by default in <code style="font-family:var(--font-mono);font-size:12px;background:var(--color-muted);padding:1px 4px;border-radius:4px;">calendar.js</code>.
      </p>
      <ul class="a11y-list">
        <li class="a11y-item"><div class="a11y-icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><div><strong>Keyboard navigation</strong> — Tab enters the grid. Arrow keys move between cells. Enter/Space selects. Escape clears.</div></li>
        <li class="a11y-item"><div class="a11y-icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><div><strong>ARIA grid roles</strong> — <code>role="grid"</code> on the day container; <code>role="row"</code> on rows; <code>role="gridcell"</code> on every cell.</div></li>
        <li class="a11y-item"><div class="a11y-icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><div><strong>Descriptive aria-label per cell</strong> — e.g. <code>"Thursday, April 10, 2026, check-in selected"</code>. Never just the number.</div></li>
        <li class="a11y-item"><div class="a11y-icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><div><strong>Focus ring</strong> — 2px <code>:focus-visible</code> outline using <code>--color-primary</code>. Never suppressed.</div></li>
        <li class="a11y-item"><div class="a11y-icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><div><strong>Live region</strong> — Visually hidden <code>aria-live="polite"</code> element announces the range after every change.</div></li>
      </ul>
    </section>

  </main>

  <!-- ── Right sidebar (TOC) ── -->
  <aside class="sidebar-right">
    <?php include $partials . 'right_sidebar.php'; ?>
  </aside>

</div><!-- /page-layout -->

<script src="https://holidayseva.com/UI/Forms/calendar/calendar.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {

  // ── Calendar init ──────────────────────────
  new HolidaysevaCalendar('#previewCal', {
    minDate: new Date(),
    months: 2,
    onChange: ({ start, end }) => {
      const nights = Math.round((end - start) / 86400000);
      console.log(`${start.toDateString()} → ${end.toDateString()} (${nights} nights)`);
    },
  });

});

// ── Copy code ───────────────────────────────
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