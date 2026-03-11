<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Input — Airframe UI · Holidayseva</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=SF+Pro+Display:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <!-- ═══════════════════════════════════════════
       COLOR TOKENS  (inline mirror of colors.css)
  ════════════════════════════════════════════ -->
  <style>
  :root {
    --color-primary:#FF385C; --color-primary-light:#FF5A76; --color-primary-lighter:#FF7D94;
    --color-primary-dark:#D93B55; --color-primary-hover:#E8314F; --color-primary-pressed:#CC2B47;
    --color-primary-alpha:rgba(255,56,92,.12); --color-primary-alpha-sm:rgba(255,56,92,.06);
    --color-primary-border:rgba(255,56,92,.25);
    --color-secondary:#222; --color-secondary-muted:#484848; --color-secondary-light:#6E6E6E;
    --color-accent:#00A699; --color-accent-light:#00BDB2;
    --color-text-primary:#1D1D1F; --color-text-secondary:#6E6E73; --color-text-tertiary:#868686;
    --color-text-muted:#B0B0B0; --color-text-placeholder:#C7C7CC; --color-text-disabled:#AEAEB2;
    --color-bg:#FFF; --color-bg-secondary:#F5F5F7; --color-bg-tertiary:#EFEFEF;
    --color-surface:#FFF; --color-surface-raised:#F7F7F7; --color-surface-inset:rgba(0,0,0,.04);
    --color-border:#D2D2D7; --color-border-light:#E5E5EA; --color-border-dark:#AEAEB2;
    --color-border-focus:#1D1D1F; --color-border-focus-ring:rgba(0,122,255,.48);
    --color-border-error:rgba(193,53,21,.45); --color-muted:#EBEBEB; --color-separator:rgba(60,60,67,.18);
    --color-success:#1A9E35; --color-success-light:#34C759; --color-success-bg:rgba(52,199,89,.10);
    --color-success-border:rgba(52,199,89,.30); --color-success-text:#1A7C2B;
    --color-warning:#C45508; --color-warning-light:#FF9500; --color-warning-bg:rgba(255,149,0,.10);
    --color-warning-border:rgba(255,149,0,.30); --color-warning-text:#9A3F00;
    --color-error:#C13515; --color-error-light:#FF3B30; --color-error-bg:rgba(255,59,48,.10);
    --color-error-border:rgba(255,59,48,.25); --color-error-text:#A02810;
    --color-info:#0071D6; --color-info-light:#007AFF; --color-info-bg:rgba(0,122,255,.10);
    --color-info-border:rgba(0,122,255,.25); --color-info-text:#0058A8;
    --color-nav-bg:#F5F5F7; --color-nav-text:#1D1D1F; --color-nav-text-active:#FF385C;
    --color-nav-border:#D2D2D7; --color-header-bg:rgba(245,245,247,.92);
    --color-code-bg:#F5F5F7;
    --shadow-sm:0 1px 3px rgba(0,0,0,.06),0 1px 2px rgba(0,0,0,.04);
    --shadow-md:0 4px 12px rgba(0,0,0,.08),0 2px 4px rgba(0,0,0,.04);
    --shadow-lg:0 8px 24px rgba(0,0,0,.10),0 3px 8px rgba(0,0,0,.06);
    --focus-ring:0 0 0 3px rgba(255,56,92,.32);
    --focus-ring-blue:0 0 0 3px rgba(0,122,255,.48);
    --transition-fast:140ms ease;
    --font-sans:-apple-system,'Helvetica Neue',sans-serif;
  }
  @media (prefers-color-scheme:dark) { :root {
    --color-primary:#FF4D6A; --color-primary-alpha:rgba(255,77,106,.18);
    --color-primary-alpha-sm:rgba(255,77,106,.10); --color-primary-border:rgba(255,77,106,.30);
    --color-text-primary:#F5F5F7; --color-text-secondary:#98989D; --color-text-muted:#48484A;
    --color-text-placeholder:#48484A; --color-text-disabled:#48484A;
    --color-bg:#000; --color-bg-secondary:#1C1C1E; --color-bg-tertiary:#2C2C2E;
    --color-surface:#1C1C1E; --color-surface-raised:#2C2C2E; --color-surface-inset:rgba(255,255,255,.05);
    --color-border:#3A3A3C; --color-border-light:#2C2C2E; --color-border-dark:#4E4E52;
    --color-border-focus:#F5F5F7; --color-border-error:rgba(255,69,58,.45);
    --color-muted:#2C2C2E; --color-separator:rgba(255,255,255,.15);
    --color-success:#30D158; --color-success-bg:rgba(48,209,88,.14);
    --color-success-border:rgba(48,209,88,.28); --color-success-text:#30D158;
    --color-warning:#FF9F0A; --color-warning-bg:rgba(255,159,10,.14);
    --color-warning-border:rgba(255,159,10,.28); --color-warning-text:#FF9F0A;
    --color-error:#FF453A; --color-error-bg:rgba(255,69,58,.14);
    --color-error-border:rgba(255,69,58,.25); --color-error-text:#FF453A;
    --color-info:#409CFF; --color-info-bg:rgba(64,156,255,.14);
    --color-info-border:rgba(64,156,255,.25); --color-info-text:#409CFF;
    --color-nav-bg:#1C1C1E; --color-nav-text:#F5F5F7;
    --color-nav-text-active:#FF4D6A; --color-nav-border:#3A3A3C;
    --color-header-bg:rgba(0,0,0,.82); --color-code-bg:#141414;
    --shadow-sm:0 1px 3px rgba(0,0,0,.28); --shadow-md:0 4px 12px rgba(0,0,0,.38);
    --shadow-lg:0 8px 24px rgba(0,0,0,.44);
  }}
  </style>

  <!-- ═══════════════════════════════════════════  GLOBAL RESET + LAYOUT  -->
  <style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  html { scroll-behavior: smooth; }

  body {
    font-family: var(--font-sans);
    font-size: 15px;
    line-height: 1.6;
    color: var(--color-text-primary);
    background: var(--color-bg);
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    min-height: 100vh;
  }

  /* ── Top header ─────────────────────────────── */
  .site-header {
    position: sticky; top: 0; z-index: 200;
    height: 52px;
    background: var(--color-header-bg);
    backdrop-filter: saturate(180%) blur(20px);
    -webkit-backdrop-filter: saturate(180%) blur(20px);
    border-bottom: 1px solid var(--color-separator);
    display: flex; align-items: center; gap: 16px;
    padding: 0 24px;
  }
  .site-header-logo {
    display: flex; align-items: center; gap: 8px;
    font-size: 15px; font-weight: 600; color: var(--color-text-primary);
    text-decoration: none;
  }
  .site-header-logo-dot { width: 8px; height: 8px; border-radius: 50%; background: var(--color-primary); }
  .site-header-sep { width: 1px; height: 18px; background: var(--color-separator); }
  .site-header-section { font-size: 13px; color: var(--color-text-secondary); }
  .site-header-spacer { flex: 1; }
  .site-header-badge {
    font-size: 11px; font-weight: 600;
    background: var(--color-primary-alpha);
    color: var(--color-primary);
    padding: 2px 8px; border-radius: 20px; letter-spacing: .02em;
  }

  /* ── Three-column shell ─────────────────────── */
  .page-shell {
    display: grid;
    grid-template-columns: 240px 1fr 220px;
    gap: 0;
    min-height: calc(100vh - 52px);
    max-width: 1280px;
    margin: 0 auto;
  }

  /* ── Left sidebar ────────────────────────────── */
  .sidebar-left {
    position: sticky; top: 52px;
    height: calc(100vh - 52px);
    overflow-y: auto; overflow-x: hidden;
    border-right: 1px solid var(--color-separator);
    padding: 24px 0 40px;
    scrollbar-width: thin;
    scrollbar-color: var(--color-border) transparent;
  }

  /* ── Main content ────────────────────────────── */
  .page-content {
    padding: 40px 48px 80px;
    min-width: 0;
    max-width: 860px;
  }

  /* ── Right sidebar ───────────────────────────── */
  .sidebar-right {
    position: sticky; top: 52px;
    height: calc(100vh - 52px);
    overflow-y: auto;
    border-left: 1px solid var(--color-separator);
  }

  /* ── Responsive ─────────────────────────────── */
  @media (max-width:1024px) {
    .page-shell { grid-template-columns: 220px 1fr; }
    .sidebar-right { display: none; }
  }
  @media (max-width:680px) {
    .page-shell { grid-template-columns: 1fr; }
    .sidebar-left { display: none; }
    .page-content { padding: 24px 20px 60px; }
  }

  /* ═══════════════════════════ LEFT SIDEBAR STYLES */
  .sb-search-wrap { padding: 0 12px 16px; }
  .sb-search {
    width: 100%; height: 30px; padding: 0 10px;
    font-size: 13px; font-family: var(--font-sans);
    color: var(--color-text-primary);
    background: var(--color-surface-raised);
    border: 1px solid var(--color-border-light);
    border-radius: 8px; outline: none;
    transition: border-color .15s, box-shadow .15s;
  }
  .sb-search::placeholder { color: var(--color-text-placeholder); }
  .sb-search:focus { border-color: var(--color-border-focus); box-shadow: var(--focus-ring-blue); }

  .sb-section-label {
    font-size: 11px; font-weight: 700; letter-spacing: .06em; text-transform: uppercase;
    color: var(--color-text-muted); padding: 8px 16px 4px;
  }

  .sb-group { margin-bottom: 2px; }
  .sb-group-btn {
    display: flex; align-items: center; gap: 8px; width: 100%;
    font-size: 13px; font-weight: 500; color: var(--color-text-secondary);
    padding: 6px 12px; border-radius: 6px; cursor: pointer;
    background: none; border: none;
    transition: background .1s, color .1s;
    -webkit-font-smoothing: antialiased;
  }
  .sb-group-btn:hover { background: var(--color-surface-raised); color: var(--color-text-primary); }
  .sb-cat-icon { width: 16px; height: 16px; opacity: .6; color: var(--color-text-secondary); flex-shrink: 0; }
  .sb-group-label { flex: 1; text-align: left; }
  .sb-count {
    font-size: 11px; font-weight: 500;
    color: var(--color-text-muted);
    background: var(--color-surface-raised);
    border-radius: 10px; padding: 1px 6px;
  }
  .sb-chevron { flex-shrink: 0; color: var(--color-border-dark); transition: transform .16s; }
  .sb-group.open .sb-chevron { transform: rotate(90deg); }
  .sb-group.has-active .sb-group-btn { font-weight: 600; color: var(--color-text-primary); }
  .sb-items { list-style: none; padding: 0 0 6px; }
  .sb-items[hidden] { display: none; }
  .sb-link {
    display: flex; align-items: center; gap: 9px;
    font-size: 13.5px; font-weight: 400; color: #86868b;
    text-decoration: none; padding: 5px 10px 5px 28px;
    border-radius: 6px; transition: background .1s, color .1s;
    -webkit-font-smoothing: antialiased;
  }
  .sb-link:hover { background: var(--color-bg-secondary); color: var(--color-text-primary); }
  .sb-link.active { font-weight: 600; color: var(--color-text-primary); }
  .sb-link svg { flex-shrink: 0; opacity: .7; }

  /* ═══════════════════════════ CONTENT TYPOGRAPHY */
  .page-eyebrow {
    font-size: 12px; font-weight: 600; letter-spacing: .08em;
    text-transform: uppercase; color: var(--color-primary);
    margin-bottom: 8px;
  }
  .page-title {
    font-size: 36px; font-weight: 700; letter-spacing: -.025em;
    color: var(--color-text-primary); line-height: 1.1; margin-bottom: 16px;
  }
  .page-desc {
    font-size: 16px; color: var(--color-text-secondary); line-height: 1.65;
    max-width: 620px; margin-bottom: 36px;
  }
  .page-divider { height: 1px; background: var(--color-separator); margin: 40px 0; }

  .section-title {
    font-size: 22px; font-weight: 700; letter-spacing: -.018em;
    color: var(--color-text-primary); margin-bottom: 8px; scroll-margin-top: 72px;
  }
  .section-desc {
    font-size: 14.5px; color: var(--color-text-secondary); line-height: 1.6;
    margin-bottom: 24px;
  }

  /* ═══════════════════════════ DEMO CARD */
  .demo-card {
    background: var(--color-surface);
    border: 1px solid var(--color-border-light);
    border-radius: 14px;
    overflow: hidden;
    margin-bottom: 24px;
    box-shadow: var(--shadow-sm);
  }
  .demo-preview {
    padding: 32px 32px;
    display: flex; flex-wrap: wrap; align-items: flex-start; gap: 20px;
    background: var(--color-bg-secondary);
    border-bottom: 1px solid var(--color-border-light);
    min-height: 100px;
  }
  .demo-preview.center { justify-content: center; align-items: center; }
  .demo-preview.col { flex-direction: column; }
  .demo-code {
    font-family: 'SF Mono', 'Fira Code', 'Menlo', monospace;
    font-size: 12.5px; line-height: 1.7; tab-size: 2;
    padding: 20px 24px; margin: 0;
    color: var(--color-text-secondary);
    background: var(--color-code-bg);
    overflow-x: auto; white-space: pre;
  }
  .demo-tabs {
    display: flex; gap: 0;
    border-bottom: 1px solid var(--color-border-light);
    background: var(--color-surface);
  }
  .demo-tab {
    font-size: 12px; font-weight: 500; color: var(--color-text-muted);
    padding: 10px 18px; cursor: pointer; border: none; background: none;
    border-bottom: 2px solid transparent; margin-bottom: -1px;
    transition: color .1s, border-color .1s;
    font-family: var(--font-sans);
  }
  .demo-tab.active { color: var(--color-text-primary); border-bottom-color: var(--color-primary); }

  /* ═══════════════════════════ PROP TABLE */
  .prop-table { width: 100%; border-collapse: collapse; font-size: 13.5px; margin-bottom: 32px; }
  .prop-table th {
    font-size: 11px; font-weight: 700; letter-spacing: .06em; text-transform: uppercase;
    color: var(--color-text-muted); padding: 8px 12px; text-align: left;
    border-bottom: 1px solid var(--color-border-light);
  }
  .prop-table td { padding: 10px 12px; border-bottom: 1px solid var(--color-border-lighter, #f0f0f0); vertical-align: top; }
  .prop-table tr:last-child td { border-bottom: none; }
  .prop-table code {
    font-family: 'SF Mono','Fira Code','Menlo',monospace;
    font-size: 12px; background: var(--color-bg-secondary);
    padding: 2px 6px; border-radius: 4px; color: var(--color-primary);
  }

  /* ═══════════════════════════ BADGE / TAG */
  .tag {
    display: inline-flex; align-items: center;
    font-size: 11px; font-weight: 600; letter-spacing: .02em;
    padding: 2px 8px; border-radius: 20px;
  }
  .tag-required { background: var(--color-error-bg); color: var(--color-error-text); }
  .tag-optional { background: var(--color-info-bg); color: var(--color-info-text); }
  .tag-default { background: var(--color-bg-tertiary); color: var(--color-text-secondary); }

  /* ═══════════════════════════ CALLOUT */
  .callout {
    display: flex; gap: 12px; align-items: flex-start;
    padding: 14px 18px; border-radius: 10px; margin-bottom: 24px;
    font-size: 13.5px; line-height: 1.6;
  }
  .callout-info { background: var(--color-info-bg); border: 1px solid var(--color-info-border); color: var(--color-info-text); }
  .callout-warn { background: var(--color-warning-bg); border: 1px solid var(--color-warning-border); color: var(--color-warning-text); }
  .callout-icon { font-size: 16px; flex-shrink: 0; margin-top: 1px; }

  /* ═══════════════════════════════════════════
     INPUT COMPONENT STYLES (the actual design system components)
  ════════════════════════════════════════════ */

  /* Field wrapper */
  .field { display: flex; flex-direction: column; gap: 6px; width: 100%; }
  .field-row { display: flex; gap: 16px; flex-wrap: wrap; }
  .field-row .field { flex: 1; min-width: 180px; }

  /* Label */
  .field-label {
    font-size: 13px; font-weight: 600;
    color: var(--color-text-primary);
    letter-spacing: -.005em;
    -webkit-font-smoothing: antialiased;
  }

  /* Helper text */
  .field-helper { font-size: 12px; color: var(--color-text-secondary); }
  .field-helper.error { color: var(--color-error-text); }
  .field-helper.success { color: var(--color-success-text); }

  /* ── Base input ─────────────────────────────── */
  .input {
    height: 42px;
    padding: 0 14px;
    font-size: 15px; font-family: var(--font-sans);
    color: var(--color-text-primary);
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: 10px;
    outline: none;
    width: 100%;
    transition: border-color var(--transition-fast), box-shadow var(--transition-fast), background var(--transition-fast);
    -webkit-font-smoothing: antialiased;
  }
  .input::placeholder { color: var(--color-text-placeholder); }
  .input:hover:not(:disabled):not(.input-error):not(.input-success) { border-color: var(--color-border-dark); }
  .input:focus:not(.input-error):not(.input-success) {
    border-color: var(--color-border-focus);
    box-shadow: var(--focus-ring-blue);
  }
  .input:disabled {
    background: var(--color-surface-inset);
    color: var(--color-text-disabled);
    border-color: var(--color-border-light);
    cursor: not-allowed; opacity: .6;
  }
  .input.input-error { border-color: var(--color-error); box-shadow: 0 0 0 3px var(--color-error-bg); }
  .input.input-success { border-color: var(--color-success); box-shadow: 0 0 0 3px var(--color-success-bg); }

  /* ── Sizes ─────────────────────────────────── */
  .input-sm { height: 34px; padding: 0 10px; font-size: 13px; border-radius: 8px; }
  .input-md { height: 42px; } /* default */
  .input-lg { height: 52px; padding: 0 18px; font-size: 16px; border-radius: 12px; }

  /* ── Input with icon ──────────────────────── */
  .input-wrap {
    position: relative; display: flex; align-items: center; width: 100%;
  }
  .input-wrap .input { padding-left: 40px; }
  .input-wrap.icon-right .input { padding-left: 14px; padding-right: 40px; }
  .input-icon {
    position: absolute; left: 12px; top: 50%; transform: translateY(-50%);
    color: var(--color-text-muted); pointer-events: none; display: flex;
  }
  .input-wrap.icon-right .input-icon { left: auto; right: 12px; }

  /* ── Textarea ─────────────────────────────── */
  .textarea {
    padding: 12px 14px;
    font-size: 15px; font-family: var(--font-sans);
    color: var(--color-text-primary);
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: 10px;
    outline: none; width: 100%; resize: vertical; min-height: 100px;
    transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
  }
  .textarea::placeholder { color: var(--color-text-placeholder); }
  .textarea:hover:not(:disabled) { border-color: var(--color-border-dark); }
  .textarea:focus { border-color: var(--color-border-focus); box-shadow: var(--focus-ring-blue); }
  .textarea-count { font-size: 11px; color: var(--color-text-muted); text-align: right; }

  /* ── Number input ─────────────────────────── */
  .number-wrap { position: relative; display: flex; align-items: center; }
  .number-wrap .input { padding: 0 44px 0 14px; }
  .number-stepper {
    position: absolute; right: 0; top: 0; bottom: 0;
    display: flex; flex-direction: column; border-left: 1px solid var(--color-border-light);
  }
  .stepper-btn {
    flex: 1; width: 36px; display: flex; align-items: center; justify-content: center;
    background: none; border: none; cursor: pointer; color: var(--color-text-muted);
    transition: background .1s, color .1s;
  }
  .stepper-btn:first-child { border-bottom: 1px solid var(--color-border-light); border-radius: 0 10px 0 0; }
  .stepper-btn:last-child { border-radius: 0 0 10px 0; }
  .stepper-btn:hover { background: var(--color-bg-secondary); color: var(--color-text-primary); }

  /* ── Search input ─────────────────────────── */
  .input-search { border-radius: 22px; padding-left: 40px; background: var(--color-bg-secondary); }
  .input-search:focus { background: var(--color-surface); }

  /* ── Password input ────────────────────────── */
  .pw-toggle {
    position: absolute; right: 10px; top: 50%; transform: translateY(-50%);
    background: none; border: none; cursor: pointer; color: var(--color-text-muted);
    padding: 4px; display: flex; align-items: center;
    transition: color .1s;
  }
  .pw-toggle:hover { color: var(--color-text-primary); }

  /* ── Phone + country select ────────────────── */
  .phone-wrap { display: flex; gap: 0; width: 100%; }
  .country-select {
    height: 42px; padding: 0 10px 0 12px;
    font-size: 14px; font-family: var(--font-sans);
    color: var(--color-text-primary);
    background: var(--color-bg-secondary);
    border: 1px solid var(--color-border);
    border-right: none;
    border-radius: 10px 0 0 10px;
    outline: none; cursor: pointer;
    transition: border-color .14s;
    white-space: nowrap;
  }
  .country-select:focus { border-color: var(--color-border-focus); box-shadow: none; z-index: 1; }
  .phone-wrap .input { border-radius: 0 10px 10px 0; }

  /* ── OTP / PIN inputs ─────────────────────── */
  .otp-wrap { display: flex; gap: 8px; align-items: center; }
  .otp-sep { font-size: 18px; color: var(--color-text-muted); padding: 0 2px; }
  .otp-input {
    width: 48px; height: 56px;
    font-size: 20px; font-weight: 700; font-family: var(--font-sans);
    text-align: center; letter-spacing: 0;
    color: var(--color-text-primary);
    background: var(--color-surface);
    border: 1.5px solid var(--color-border);
    border-radius: 10px; outline: none;
    transition: border-color .14s, box-shadow .14s, transform .1s;
    caret-color: var(--color-primary);
    -webkit-font-smoothing: antialiased;
  }
  .otp-input:focus {
    border-color: var(--color-primary);
    box-shadow: var(--focus-ring);
    transform: scale(1.04);
    background: var(--color-primary-alpha-sm);
  }
  .otp-input.otp-filled { border-color: var(--color-primary); background: var(--color-primary-alpha-sm); }
  .otp-input.otp-error { border-color: var(--color-error); box-shadow: 0 0 0 3px var(--color-error-bg); }
  /* Large OTP */
  .otp-input-lg { width: 60px; height: 68px; font-size: 26px; border-radius: 12px; }

  /* ── Select / Dropdown ────────────────────── */
  .select-wrap { position: relative; width: 100%; }
  .select-native {
    height: 42px; padding: 0 40px 0 14px;
    font-size: 15px; font-family: var(--font-sans);
    color: var(--color-text-primary);
    background: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: 10px; outline: none; width: 100%;
    cursor: pointer; appearance: none; -webkit-appearance: none;
    transition: border-color .14s, box-shadow .14s;
  }
  .select-native:focus { border-color: var(--color-border-focus); box-shadow: var(--focus-ring-blue); }
  .select-caret {
    position: absolute; right: 12px; top: 50%; transform: translateY(-50%);
    pointer-events: none; color: var(--color-text-muted);
  }

  /* ── Range / Slider ───────────────────────── */
  .range-wrap { display: flex; align-items: center; gap: 16px; }
  .range-val { font-size: 13px; font-weight: 600; color: var(--color-text-primary); min-width: 32px; text-align: right; }
  input[type="range"] {
    flex: 1; appearance: none; -webkit-appearance: none;
    height: 4px; border-radius: 2px; outline: none;
    background: linear-gradient(to right, var(--color-primary) 0%, var(--color-primary) var(--pct, 40%), var(--color-border) var(--pct, 40%), var(--color-border) 100%);
    cursor: pointer;
  }
  input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none; width: 20px; height: 20px; border-radius: 50%;
    background: var(--color-surface);
    border: 2px solid var(--color-primary);
    box-shadow: var(--shadow-sm);
    cursor: grab; transition: transform .1s, box-shadow .1s;
  }
  input[type="range"]::-webkit-slider-thumb:active { cursor: grabbing; transform: scale(1.18); box-shadow: var(--shadow-md); }
  input[type="range"]:focus { outline: none; }

  /* ── Date / Time ──────────────────────────── */
  input[type="date"], input[type="time"], input[type="datetime-local"] {
    color-scheme: light;
  }

  /* ═══════════════════════════ SPEC TABLE */
  .specs-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 24px; }
  .spec-item {
    padding: 14px 16px; border-radius: 10px;
    background: var(--color-bg-secondary); border: 1px solid var(--color-border-light);
  }
  .spec-label { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .06em; color: var(--color-text-muted); margin-bottom: 4px; }
  .spec-val { font-size: 14px; font-weight: 600; color: var(--color-text-primary); }

  /* ═══════════════════════════ SIZE COMPARISON */
  .size-compare { display: flex; flex-direction: column; gap: 14px; width: 100%; }

  /* ═══════════════════════════ ACCESSIBILITY CHECKLIST */
  .a11y-list { list-style: none; padding: 0; display: flex; flex-direction: column; gap: 8px; }
  .a11y-item { display: flex; align-items: flex-start; gap: 10px; font-size: 14px; color: var(--color-text-secondary); line-height: 1.5; }
  .a11y-check { width: 18px; height: 18px; border-radius: 50%; background: var(--color-success-bg); border: 1.5px solid var(--color-success-border); display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px; }

  /* ═══════════════════════════ SCROLL TOP */
  .scroll-top {
    position: fixed; bottom: 28px; right: 28px; z-index: 100;
    width: 40px; height: 40px; border-radius: 50%;
    background: var(--color-surface); border: 1px solid var(--color-border);
    box-shadow: var(--shadow-md); cursor: pointer; display: flex; align-items: center; justify-content: center;
    color: var(--color-text-secondary); opacity: 0; transform: translateY(8px);
    transition: opacity .2s, transform .2s;
  }
  .scroll-top.visible { opacity: 1; transform: translateY(0); }
  .scroll-top:hover { color: var(--color-text-primary); }
  </style>
</head>

<body>

<!-- ════════════════ TOP HEADER ════════════════ -->
<header class="site-header">
  <a class="site-header-logo" href="https://developer.holidayseva.com">
    <span class="site-header-logo-dot"></span>
    Airframe UI
  </a>
  <div class="site-header-sep"></div>
  <span class="site-header-section">Components</span>
  <div class="site-header-spacer"></div>
  <span class="site-header-badge">v1.0</span>
</header>

<!-- ════════════════ THREE-COLUMN SHELL ════════ -->
<div class="page-shell">

  <!-- ════ LEFT SIDEBAR ════ -->
  <nav class="sidebar-left" aria-label="Component navigation">
    <div class="sb-search-wrap">
      <input class="sb-search" type="search" placeholder="Search components…" oninput="filterSidebar(this)" aria-label="Search components" />
    </div>

    <!-- Getting Started -->
    <div class="sb-section-label">Getting Started</div>
    <div class="sb-group">
      <ul class="sb-items">
        <li><a class="sb-link" href="/index.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M8 1L1 6v9h5V10h4v5h5V6L8 1z" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/></svg>
          Overview
        </a></li>
        <li><a class="sb-link" href="/Foundations/colors.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.3"/><path d="M8 2v12M2 8h12" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" opacity=".4"/></svg>
          Color Tokens
        </a></li>
        <li><a class="sb-link" href="/Foundations/typography.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M3 4h10M8 4v9" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>
          Typography
        </a></li>
      </ul>
    </div>

    <!-- Atom -->
    <div class="sb-section-label">Atom</div>
    <div class="sb-group open has-active">
      <button class="sb-group-btn" onclick="toggleGroup(this)" aria-expanded="true">
        <svg class="sb-cat-icon" viewBox="0 0 16 16" fill="none"><rect x="2" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="9" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="2" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="9" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/></svg>
        <span class="sb-group-label">Atom</span>
        <span class="sb-count">9</span>
        <svg class="sb-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M4.5 3l3 3-3 3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </button>
      <ul class="sb-items">
        <li><a class="sb-link" href="/Atom/button/button.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="5" width="13" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/></svg>Button</a></li>
        <li><a class="sb-link active" href="/Atom/input/input.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="4" width="13" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M5 8h6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>Input</a></li>
        <li><a class="sb-link" href="/Atom/toggle/toggle.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="1" y="5" width="14" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/><circle cx="11.5" cy="8" r="2" fill="currentColor"/></svg>Toggle</a></li>
        <li><a class="sb-link" href="/Atom/checkbox/checkbox.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="2.5" y="2.5" width="11" height="11" rx="2" stroke="currentColor" stroke-width="1.2"/><path d="M5 8l2.5 2.5L11 5.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>Checkbox</a></li>
        <li><a class="sb-link" href="/Atom/radio/radio.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="5.5" stroke="currentColor" stroke-width="1.2"/><circle cx="8" cy="8" r="2.5" fill="currentColor"/></svg>Radio</a></li>
        <li><a class="sb-link" href="/Atom/select/select.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="4.5" width="13" height="7" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M10 7l2 2-2 2" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" transform="rotate(90 11 8.5)"/></svg>Select</a></li>
        <li><a class="sb-link" href="/Atom/slider/slider.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><line x1="2" y1="8" x2="14" y2="8" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/><circle cx="8" cy="8" r="2.5" fill="currentColor"/></svg>Slider</a></li>
        <li><a class="sb-link" href="/Atom/badge/badge.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="3" y="5" width="10" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/></svg>Badge</a></li>
        <li><a class="sb-link" href="/Atom/spinner/spinner.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M8 2a6 6 0 016 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.2" opacity=".2"/></svg>Spinner</a></li>
      </ul>
    </div>

    <!-- Components -->
    <div class="sb-section-label">Components</div>
    <div class="sb-group">
      <button class="sb-group-btn" onclick="toggleGroup(this)" aria-expanded="false">
        <svg class="sb-cat-icon" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M1.5 7h13" stroke="currentColor" stroke-width="1.2"/></svg>
        <span class="sb-group-label">Components</span>
        <span class="sb-count">6</span>
        <svg class="sb-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M4.5 3l3 3-3 3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </button>
      <ul class="sb-items" hidden>
        <li><a class="sb-link" href="/Components/modal/modal.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M1.5 6.5h13" stroke="currentColor" stroke-width="1.2"/></svg>Modal</a></li>
        <li><a class="sb-link" href="/Components/card/card.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M4 6.5h5M4 9h8" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>Card</a></li>
        <li><a class="sb-link" href="/Components/tabs/tabs.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M2 10V5.5A1.5 1.5 0 013.5 4H7l1.5 2H14v4" stroke="currentColor" stroke-width="1.2"/></svg>Tabs</a></li>
        <li><a class="sb-link" href="/Components/tooltip/tooltip.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="2" y="2" width="12" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M5 10.5l1.5 2.5 1.5-2.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>Tooltip</a></li>
        <li><a class="sb-link" href="/Components/dropdown/dropdown.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="4" width="13" height="5" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M2 11h12M2 13.5h8" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" opacity=".35"/></svg>Dropdown</a></li>
        <li><a class="sb-link" href="/Components/avatar/avatar.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="5.5" r="2.5" stroke="currentColor" stroke-width="1.2"/><path d="M2.5 14c0-3.04 2.46-5.5 5.5-5.5s5.5 2.46 5.5 5.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>Avatar</a></li>
      </ul>
    </div>

    <!-- Composite -->
    <div class="sb-section-label">Composite</div>
    <div class="sb-group">
      <button class="sb-group-btn" onclick="toggleGroup(this)" aria-expanded="false">
        <svg class="sb-cat-icon" viewBox="0 0 16 16" fill="none"><path d="M2 6h4v8H2zM6 3h8v11H6z" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/></svg>
        <span class="sb-group-label">Composite</span>
        <span class="sb-count">4</span>
        <svg class="sb-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M4.5 3l3 3-3 3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </button>
      <ul class="sb-items" hidden>
        <li><a class="sb-link" href="/Composite/search-bar/search-bar.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><circle cx="7" cy="7" r="4.5" stroke="currentColor" stroke-width="1.2"/><path d="M10.5 10.5l3 3" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>Search Bar</a></li>
        <li><a class="sb-link" href="/Composite/booking-card/booking-card.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="2" y="3" width="12" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M2 7h12" stroke="currentColor" stroke-width="1.2"/></svg>Booking Card</a></li>
        <li><a class="sb-link" href="/Composite/review-card/review-card.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M8 6l.8 2.5H11l-2 1.4.8 2.6L8 11l-1.8 1.5.8-2.6-2-1.4h2.2z" fill="currentColor" opacity=".6"/></svg>Review Card</a></li>
        <li><a class="sb-link" href="/Composite/user-menu/user-menu.php">
          <svg width="14" height="14" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="5.5" r="2.5" stroke="currentColor" stroke-width="1.2"/><path d="M2.5 14c0-3.04 2.46-5.5 5.5-5.5s5.5 2.46 5.5 5.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>User Menu</a></li>
      </ul>
    </div>
  </nav>

  <!-- ════ MAIN CONTENT ════ -->
  <main class="page-content" id="top">

    <!-- ── Page header ───────────────────────── -->
    <p class="page-eyebrow">Atom · Input</p>
    <h1 class="page-title">Input Fields</h1>
    <p class="page-desc">
      A comprehensive set of form input primitives — text, number, password, search,
      phone, OTP, textarea, select, date/time, and range — built on Airframe UI's
      token system with full states, sizes, and accessibility support.
    </p>

    <div class="callout callout-info">
      <span class="callout-icon">ℹ</span>
      <span>All inputs reference <code>colors.css</code> tokens exclusively. Never use raw hex values inside component stylesheets.</span>
    </div>

    <div class="page-divider"></div>

    <!-- ══════════════════════════════════════════
         § OVERVIEW
    ═══════════════════════════════════════════ -->
    <section id="overview">
      <h2 class="section-title">Element</h2>
      <p class="section-desc">
        Input fields are the primary mechanism for user data entry across Holidayseva's product
        surfaces — booking flows, account settings, authentication screens, and search. Every
        variant follows a common anatomical baseline so that visual behaviour is predictable.
      </p>

      <!-- Basic text input demo -->
      <div class="demo-card">
        <div class="demo-tabs">
          <button class="demo-tab active">Preview</button>
          <button class="demo-tab" onclick="switchTab(this,'code-text')">HTML</button>
        </div>
        <div class="demo-preview col" id="preview-text">
          <div class="field" style="max-width:380px">
            <label class="field-label" for="demo-basic">Full name</label>
            <input class="input" id="demo-basic" type="text" placeholder="e.g. Rahul Verma" />
            <span class="field-helper">As it appears on your government-issued ID.</span>
          </div>
        </div>
        <pre class="demo-code" id="code-text" hidden>&lt;div class="field"&gt;
  &lt;label class="field-label" for="full-name"&gt;Full name&lt;/label&gt;
  &lt;input class="input" id="full-name" type="text"
         placeholder="e.g. Rahul Verma" /&gt;
  &lt;span class="field-helper"&gt;As it appears on your government-issued ID.&lt;/span&gt;
&lt;/div&gt;</pre>
      </div>
    </section>

    <!-- ══════════════════════════════════════════
         § ANATOMY
    ═══════════════════════════════════════════ -->
    <section id="anatomy">
      <h2 class="section-title">Anatomy</h2>
      <p class="section-desc">Every input is composed of four optional layers stacked vertically.</p>
      <div class="specs-grid">
        <div class="spec-item"><div class="spec-label">① Label</div><div class="spec-val"><code>.field-label</code></div></div>
        <div class="spec-item"><div class="spec-label">② Control</div><div class="spec-val"><code>.input</code> or variant</div></div>
        <div class="spec-item"><div class="spec-label">③ Helper / Error</div><div class="spec-val"><code>.field-helper</code></div></div>
        <div class="spec-item"><div class="spec-label">④ Wrapper</div><div class="spec-val"><code>.field</code> flex col</div></div>
      </div>
    </section>

    <div class="page-divider"></div>

    <!-- ══════════════════════════════════════════
         § SPECIFICATIONS
    ═══════════════════════════════════════════ -->
    <section id="specs">
      <h2 class="section-title">Specifications</h2>
      <p class="section-desc">Token-driven sizing, spacing, and radii across all three size variants.</p>

      <div class="specs-grid">
        <div class="spec-item"><div class="spec-label">Height — SM</div><div class="spec-val">34 px</div></div>
        <div class="spec-item"><div class="spec-label">Height — MD (default)</div><div class="spec-val">42 px</div></div>
        <div class="spec-item"><div class="spec-label">Height — LG</div><div class="spec-val">52 px</div></div>
        <div class="spec-item"><div class="spec-label">Border radius</div><div class="spec-val">8 / 10 / 12 px</div></div>
        <div class="spec-item"><div class="spec-label">Border color (default)</div><div class="spec-val"><code>--color-border</code></div></div>
        <div class="spec-item"><div class="spec-label">Border color (focus)</div><div class="spec-val"><code>--color-border-focus</code></div></div>
        <div class="spec-item"><div class="spec-label">Focus ring</div><div class="spec-val"><code>--focus-ring-blue</code></div></div>
        <div class="spec-item"><div class="spec-label">Font size — MD</div><div class="spec-val">15 px</div></div>
        <div class="spec-item"><div class="spec-label">Label font size</div><div class="spec-val">13 px · weight 600</div></div>
        <div class="spec-item"><div class="spec-label">Helper font size</div><div class="spec-val">12 px</div></div>
        <div class="spec-item"><div class="spec-label">Gap (label → input)</div><div class="spec-val">6 px</div></div>
        <div class="spec-item"><div class="spec-label">Padding inline</div><div class="spec-val">14 px (MD)</div></div>
      </div>

      <!-- Size comparison -->
      <div class="demo-card">
        <div class="demo-tabs"><button class="demo-tab active">Preview — sizes</button></div>
        <div class="demo-preview col">
          <div class="size-compare">
            <div class="field" style="max-width:420px">
              <label class="field-label">Small — 34 px</label>
              <input class="input input-sm" type="text" placeholder="Small input" />
            </div>
            <div class="field" style="max-width:420px">
              <label class="field-label">Medium — 42 px (default)</label>
              <input class="input" type="text" placeholder="Medium input" />
            </div>
            <div class="field" style="max-width:420px">
              <label class="field-label">Large — 52 px</label>
              <input class="input input-lg" type="text" placeholder="Large input" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="page-divider"></div>

    <!-- ══════════════════════════════════════════
         § HTML USAGE — ALL VARIANTS
    ═══════════════════════════════════════════ -->
    <section id="usage">
      <h2 class="section-title">HTML Usage</h2>
      <p class="section-desc">All available input variants with live previews.</p>

      <!-- ── States ─────────────────────────────── -->
      <h3 style="font-size:17px;font-weight:700;letter-spacing:-.012em;margin-bottom:8px;margin-top:28px;scroll-margin-top:72px" id="states">States</h3>
      <p class="section-desc">Default, focused (tab into), error, success, and disabled.</p>
      <div class="demo-card">
        <div class="demo-tabs">
          <button class="demo-tab active">Preview</button>
          <button class="demo-tab" onclick="switchTab(this,'code-states')">HTML</button>
        </div>
        <div class="demo-preview col" id="preview-states">
          <div class="field" style="max-width:380px">
            <label class="field-label" for="s1">Default</label>
            <input class="input" id="s1" type="text" placeholder="Normal input" />
          </div>
          <div class="field" style="max-width:380px">
            <label class="field-label" for="s2">Error state</label>
            <input class="input input-error" id="s2" type="email" value="bad@@email" />
            <span class="field-helper error">Please enter a valid email address.</span>
          </div>
          <div class="field" style="max-width:380px">
            <label class="field-label" for="s3">Success state</label>
            <input class="input input-success" id="s3" type="email" value="rahul@holidayseva.com" />
            <span class="field-helper success">Looks good!</span>
          </div>
          <div class="field" style="max-width:380px">
            <label class="field-label" for="s4">Disabled</label>
            <input class="input" id="s4" type="text" placeholder="Cannot edit" disabled />
          </div>
        </div>
        <pre class="demo-code" id="code-states" hidden>&lt;!-- Error --&gt;
&lt;div class="field"&gt;
  &lt;label class="field-label" for="email"&gt;Email&lt;/label&gt;
  &lt;input class="input input-error" id="email" type="email"
         value="bad@@email" aria-invalid="true" aria-describedby="email-err" /&gt;
  &lt;span class="field-helper error" id="email-err"&gt;
    Please enter a valid email address.
  &lt;/span&gt;
&lt;/div&gt;

&lt;!-- Success --&gt;
&lt;input class="input input-success" type="email" value="ok@email.com" /&gt;

&lt;!-- Disabled --&gt;
&lt;input class="input" type="text" disabled /&gt;</pre>
      </div>

      <!-- ── With icons ─────────────────────────── -->
      <h3 style="font-size:17px;font-weight:700;letter-spacing:-.012em;margin-bottom:8px;margin-top:28px" id="icons">With Icons</h3>
      <p class="section-desc">Leading and trailing icon slots via <code>.input-wrap</code>.</p>
      <div class="demo-card">
        <div class="demo-tabs">
          <button class="demo-tab active">Preview</button>
          <button class="demo-tab" onclick="switchTab(this,'code-icons')">HTML</button>
        </div>
        <div class="demo-preview col" id="preview-icons">
          <div class="field" style="max-width:380px">
            <label class="field-label">Search (leading icon)</label>
            <div class="input-wrap">
              <span class="input-icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="7" cy="7" r="4.5" stroke="currentColor" stroke-width="1.4"/><path d="M10.5 10.5l3 3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>
              </span>
              <input class="input input-search" type="search" placeholder="Search destinations…" />
            </div>
          </div>
          <div class="field" style="max-width:380px">
            <label class="field-label">Email (trailing icon)</label>
            <div class="input-wrap icon-right">
              <input class="input" type="email" placeholder="your@email.com" />
              <span class="input-icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="3.5" width="13" height="9" rx="1.5" stroke="currentColor" stroke-width="1.3"/><path d="M1.5 5.5l6.5 4 6.5-4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
              </span>
            </div>
          </div>
        </div>
        <pre class="demo-code" id="code-icons" hidden>&lt;!-- Leading icon --&gt;
&lt;div class="input-wrap"&gt;
  &lt;span class="input-icon"&gt;
    &lt;!-- SVG icon here --&gt;
  &lt;/span&gt;
  &lt;input class="input input-search" type="search" placeholder="Search…" /&gt;
&lt;/div&gt;

&lt;!-- Trailing icon --&gt;
&lt;div class="input-wrap icon-right"&gt;
  &lt;input class="input" type="email" placeholder="your@email.com" /&gt;
  &lt;span class="input-icon"&gt;
    &lt;!-- SVG icon here --&gt;
  &lt;/span&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- ── Password ────────────────────────────── -->
      <h3 style="font-size:17px;font-weight:700;letter-spacing:-.012em;margin-bottom:8px;margin-top:28px" id="password">Password</h3>
      <p class="section-desc">With reveal/hide toggle.</p>
      <div class="demo-card">
        <div class="demo-tabs">
          <button class="demo-tab active">Preview</button>
          <button class="demo-tab" onclick="switchTab(this,'code-pw')">HTML</button>
        </div>
        <div class="demo-preview" id="preview-pw">
          <div class="field" style="max-width:380px;width:100%">
            <label class="field-label" for="pw1">Password</label>
            <div class="input-wrap icon-right">
              <input class="input" id="pw1" type="password" placeholder="Min. 8 characters" />
              <button class="pw-toggle" type="button" aria-label="Show password" onclick="togglePassword(this,'pw1')">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" id="eye-icon-pw1">
                  <path d="M1 9C1 9 4 3.5 9 3.5S17 9 17 9s-3 5.5-8 5.5S1 9 1 9z" stroke="currentColor" stroke-width="1.4"/>
                  <circle cx="9" cy="9" r="2.5" stroke="currentColor" stroke-width="1.4"/>
                </svg>
              </button>
            </div>
            <span class="field-helper">Use letters, numbers and symbols for a strong password.</span>
          </div>
        </div>
        <pre class="demo-code" id="code-pw" hidden>&lt;div class="input-wrap icon-right"&gt;
  &lt;input class="input" id="pw" type="password"
         placeholder="Min. 8 characters" /&gt;
  &lt;button class="pw-toggle" type="button"
          aria-label="Show password"
          onclick="togglePassword(this,'pw')"&gt;
    &lt;!-- Eye SVG --&gt;
  &lt;/button&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- ── Number ──────────────────────────────── -->
      <h3 style="font-size:17px;font-weight:700;letter-spacing:-.012em;margin-bottom:8px;margin-top:28px" id="number">Number</h3>
      <p class="section-desc">Stepper buttons override the browser default number spinners for consistent cross-browser appearance.</p>
      <div class="demo-card">
        <div class="demo-tabs">
          <button class="demo-tab active">Preview</button>
          <button class="demo-tab" onclick="switchTab(this,'code-num')">HTML</button>
        </div>
        <div class="demo-preview" id="preview-num">
          <div class="field" style="max-width:260px;width:100%">
            <label class="field-label" for="guests">Guests</label>
            <div class="number-wrap">
              <input class="input" id="guests" type="number" value="2" min="1" max="16" style="-moz-appearance:textfield;-webkit-appearance:none;" />
              <div class="number-stepper">
                <button class="stepper-btn" type="button" onclick="step('guests',1)" aria-label="Increase">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 9V3M3 6l3-3 3 3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <button class="stepper-btn" type="button" onclick="step('guests',-1)" aria-label="Decrease">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 3v6M3 6l3 3 3-3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
              </div>
            </div>
          </div>
        </div>
        <pre class="demo-code" id="code-num" hidden>&lt;div class="number-wrap"&gt;
  &lt;input class="input" id="guests" type="number"
         value="2" min="1" max="16" /&gt;
  &lt;div class="number-stepper"&gt;
    &lt;button class="stepper-btn" onclick="step('guests',1)"&gt;↑&lt;/button&gt;
    &lt;button class="stepper-btn" onclick="step('guests',-1)"&gt;↓&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- ── Phone ───────────────────────────────── -->
      <h3 style="font-size:17px;font-weight:700;letter-spacing:-.012em;margin-bottom:8px;margin-top:28px" id="phone">Phone</h3>
      <p class="section-desc">Country dial code picker with a fused number field.</p>
      <div class="demo-card">
        <div class="demo-tabs">
          <button class="demo-tab active">Preview</button>
          <button class="demo-tab" onclick="switchTab(this,'code-phone')">HTML</button>
        </div>
        <div class="demo-preview" id="preview-phone">
          <div class="field" style="max-width:420px;width:100%">
            <label class="field-label" for="phone-num">Phone number</label>
            <div class="phone-wrap">
              <select class="country-select" aria-label="Country code">
                <option value="+91">🇮🇳 +91</option>
                <option value="+1">🇺🇸 +1</option>
                <option value="+44">🇬🇧 +44</option>
                <option value="+971">🇦🇪 +971</option>
                <option value="+65">🇸🇬 +65</option>
              </select>
              <input class="input" id="phone-num" type="tel" placeholder="98765 43210" />
            </div>
          </div>
        </div>
        <pre class="demo-code" id="code-phone" hidden>&lt;div class="phone-wrap"&gt;
  &lt;select class="country-select" aria-label="Country code"&gt;
    &lt;option value="+91"&gt;🇮🇳 +91&lt;/option&gt;
    &lt;option value="+1"&gt;🇺🇸 +1&lt;/option&gt;
  &lt;/select&gt;
  &lt;input class="input" type="tel"
         placeholder="98765 43210" /&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- ── OTP ─────────────────────────────────── -->
      <h3 style="font-size:17px;font-weight:700;letter-spacing:-.012em;margin-bottom:8px;margin-top:28px" id="otp">OTP / PIN</h3>
      <p class="section-desc">Squared single-character cells with automatic focus advancement. Available in standard (48 px) and large (60 px) sizes.</p>
      <div class="demo-card">
        <div class="demo-tabs">
          <button class="demo-tab active">Preview</button>
          <button class="demo-tab" onclick="switchTab(this,'code-otp')">HTML</button>
        </div>
        <div class="demo-preview col center" id="preview-otp">
          <div>
            <p style="font-size:12px;color:var(--color-text-muted);text-align:center;margin-bottom:12px;font-weight:600;text-transform:uppercase;letter-spacing:.06em">Standard · 6-digit</p>
            <div class="otp-wrap" id="otp6" role="group" aria-label="One-time code">
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 1" />
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 2" />
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 3" />
              <span class="otp-sep">–</span>
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 4" />
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 5" />
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 6" />
            </div>
          </div>
          <div style="margin-top:20px">
            <p style="font-size:12px;color:var(--color-text-muted);text-align:center;margin-bottom:12px;font-weight:600;text-transform:uppercase;letter-spacing:.06em">Large · 4-digit PIN</p>
            <div class="otp-wrap" id="otp4" role="group" aria-label="PIN code">
              <input class="otp-input otp-input-lg" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 1" />
              <input class="otp-input otp-input-lg" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 2" />
              <input class="otp-input otp-input-lg" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 3" />
              <input class="otp-input otp-input-lg" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 4" />
            </div>
          </div>
        </div>
        <pre class="demo-code" id="code-otp" hidden>&lt;!-- 6-digit OTP --&gt;
&lt;div class="otp-wrap" role="group" aria-label="One-time code"&gt;
  &lt;input class="otp-input" type="text" inputmode="numeric"
         maxlength="1" pattern="[0-9]" aria-label="Digit 1" /&gt;
  &lt;input class="otp-input" type="text" inputmode="numeric"
         maxlength="1" pattern="[0-9]" aria-label="Digit 2" /&gt;
  &lt;input class="otp-input" type="text" inputmode="numeric"
         maxlength="1" pattern="[0-9]" aria-label="Digit 3" /&gt;
  &lt;span class="otp-sep"&gt;–&lt;/span&gt;
  &lt;input class="otp-input" type="text" inputmode="numeric"
         maxlength="1" pattern="[0-9]" aria-label="Digit 4" /&gt;
  &lt;input class="otp-input" type="text" inputmode="numeric"
         maxlength="1" pattern="[0-9]" aria-label="Digit 5" /&gt;
  &lt;input class="otp-input" type="text" inputmode="numeric"
         maxlength="1" pattern="[0-9]" aria-label="Digit 6" /&gt;
&lt;/div&gt;

&lt;!-- Large 4-digit PIN --&gt;
&lt;div class="otp-wrap" role="group" aria-label="PIN code"&gt;
  &lt;input class="otp-input otp-input-lg" ... /&gt;
  &lt;!-- × 4 --&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- ── Textarea ─────────────────────────────── -->
      <h3 style="font-size:17px;font-weight:700;letter-spacing:-.012em;margin-bottom:8px;margin-top:28px" id="textarea">Textarea</h3>
      <p class="section-desc">Multiline text input with optional character counter.</p>
      <div class="demo-card">
        <div class="demo-tabs">
          <button class="demo-tab active">Preview</button>
          <button class="demo-tab" onclick="switchTab(this,'code-ta')">HTML</button>
        </div>
        <div class="demo-preview" id="preview-ta">
          <div class="field" style="max-width:480px;width:100%">
            <label class="field-label" for="bio">Bio</label>
            <textarea class="textarea" id="bio" maxlength="300" rows="4" placeholder="Tell guests a little about yourself…" oninput="updateCount(this,'bio-count',300)"></textarea>
            <div style="display:flex;justify-content:space-between;align-items:center">
              <span class="field-helper">Used on your public host profile.</span>
              <span class="textarea-count" id="bio-count">0 / 300</span>
            </div>
          </div>
        </div>
        <pre class="demo-code" id="code-ta" hidden>&lt;div class="field"&gt;
  &lt;label class="field-label" for="bio"&gt;Bio&lt;/label&gt;
  &lt;textarea class="textarea" id="bio" maxlength="300"
            rows="4" placeholder="Tell guests a little about yourself…"
            oninput="updateCount(this,'bio-count',300)"&gt;&lt;/textarea&gt;
  &lt;div style="display:flex;justify-content:space-between"&gt;
    &lt;span class="field-helper"&gt;Used on your public host profile.&lt;/span&gt;
    &lt;span class="textarea-count" id="bio-count"&gt;0 / 300&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- ── Select ──────────────────────────────── -->
      <h3 style="font-size:17px;font-weight:700;letter-spacing:-.012em;margin-bottom:8px;margin-top:28px" id="select">Select</h3>
      <p class="section-desc">Native select styled with a custom SVG caret and consistent token styling.</p>
      <div class="demo-card">
        <div class="demo-tabs">
          <button class="demo-tab active">Preview</button>
          <button class="demo-tab" onclick="switchTab(this,'code-sel')">HTML</button>
        </div>
        <div class="demo-preview" id="preview-sel">
          <div class="field" style="max-width:320px;width:100%">
            <label class="field-label" for="property-type">Property type</label>
            <div class="select-wrap">
              <select class="select-native" id="property-type">
                <option value="">Select a type…</option>
                <option>Apartment</option>
                <option>Villa</option>
                <option>Cottage</option>
                <option>Treehouse</option>
                <option>Houseboat</option>
              </select>
              <span class="select-caret">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
            </div>
          </div>
        </div>
        <pre class="demo-code" id="code-sel" hidden>&lt;div class="select-wrap"&gt;
  &lt;select class="select-native" id="property-type"&gt;
    &lt;option value=""&gt;Select a type…&lt;/option&gt;
    &lt;option&gt;Apartment&lt;/option&gt;
    &lt;option&gt;Villa&lt;/option&gt;
  &lt;/select&gt;
  &lt;span class="select-caret"&gt;
    &lt;!-- chevron-down SVG --&gt;
  &lt;/span&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- ── Date & Time ─────────────────────────── -->
      <h3 style="font-size:17px;font-weight:700;letter-spacing:-.012em;margin-bottom:8px;margin-top:28px" id="datetime">Date &amp; Time</h3>
      <p class="section-desc">Date, time, and combined datetime-local — all using the base <code>.input</code> class.</p>
      <div class="demo-card">
        <div class="demo-tabs">
          <button class="demo-tab active">Preview</button>
          <button class="demo-tab" onclick="switchTab(this,'code-dt')">HTML</button>
        </div>
        <div class="demo-preview" id="preview-dt" style="flex-wrap:wrap;gap:20px">
          <div class="field" style="flex:1;min-width:180px">
            <label class="field-label" for="check-in">Check-in</label>
            <input class="input" id="check-in" type="date" />
          </div>
          <div class="field" style="flex:1;min-width:180px">
            <label class="field-label" for="checkin-time">Arrival time</label>
            <input class="input" id="checkin-time" type="time" value="14:00" />
          </div>
          <div class="field" style="flex:1;min-width:220px">
            <label class="field-label" for="event-dt">Event date &amp; time</label>
            <input class="input" id="event-dt" type="datetime-local" />
          </div>
        </div>
        <pre class="demo-code" id="code-dt" hidden>&lt;input class="input" type="date" id="check-in" /&gt;
&lt;input class="input" type="time" id="arrival" value="14:00" /&gt;
&lt;input class="input" type="datetime-local" id="event" /&gt;</pre>
      </div>

      <!-- ── Range / Slider ──────────────────────── -->
      <h3 style="font-size:17px;font-weight:700;letter-spacing:-.012em;margin-bottom:8px;margin-top:28px" id="range">Range Slider</h3>
      <p class="section-desc">Styled range input with live value display and Airframe coral-red primary track.</p>
      <div class="demo-card">
        <div class="demo-tabs">
          <button class="demo-tab active">Preview</button>
          <button class="demo-tab" onclick="switchTab(this,'code-range')">HTML</button>
        </div>
        <div class="demo-preview col" id="preview-range">
          <div class="field" style="max-width:460px;width:100%">
            <label class="field-label">Price per night</label>
            <div class="range-wrap">
              <input type="range" id="price-range" min="0" max="20000" value="5000" step="500"
                     oninput="updateRange(this,'price-val','₹')"
                     style="--pct:25%" />
              <span class="range-val" id="price-val">₹5,000</span>
            </div>
          </div>
          <div class="field" style="max-width:460px;width:100%">
            <label class="field-label">Rating threshold</label>
            <div class="range-wrap">
              <input type="range" id="rating-range" min="1" max="5" value="3" step="0.5"
                     oninput="updateRange(this,'rating-val','',' ★')"
                     style="--pct:50%" />
              <span class="range-val" id="rating-val">3 ★</span>
            </div>
          </div>
        </div>
        <pre class="demo-code" id="code-range" hidden>&lt;div class="range-wrap"&gt;
  &lt;input type="range" id="price"
         min="0" max="20000" value="5000" step="500"
         oninput="updateRange(this,'price-val','₹')"
         style="--pct:25%" /&gt;
  &lt;span class="range-val" id="price-val"&gt;₹5,000&lt;/span&gt;
&lt;/div&gt;</pre>
      </div>

      <!-- ── Compound / Row ──────────────────────── -->
      <h3 style="font-size:17px;font-weight:700;letter-spacing:-.012em;margin-bottom:8px;margin-top:28px" id="compound">Compound / Row Layout</h3>
      <p class="section-desc">Use <code>.field-row</code> to place multiple fields side by side on wider viewports.</p>
      <div class="demo-card">
        <div class="demo-tabs"><button class="demo-tab active">Preview</button></div>
        <div class="demo-preview col">
          <div class="field-row" style="max-width:520px">
            <div class="field">
              <label class="field-label" for="first">First name</label>
              <input class="input" id="first" type="text" placeholder="Rahul" />
            </div>
            <div class="field">
              <label class="field-label" for="last">Last name</label>
              <input class="input" id="last" type="text" placeholder="Verma" />
            </div>
          </div>
          <div class="field-row" style="max-width:520px">
            <div class="field" style="flex:2">
              <label class="field-label" for="street">Street address</label>
              <input class="input" id="street" type="text" placeholder="12 Marine Drive" />
            </div>
            <div class="field" style="flex:1">
              <label class="field-label" for="pincode">PIN code</label>
              <input class="input" id="pincode" type="text" placeholder="400001" maxlength="6" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="page-divider"></div>

    <!-- ══════════════════════════════════════════
         § JAVASCRIPT API
    ═══════════════════════════════════════════ -->
    <section id="javascript">
      <h2 class="section-title">JavaScript API</h2>
      <p class="section-desc">Lightweight utilities — no framework required.</p>

      <table class="prop-table">
        <thead>
          <tr>
            <th>Function</th>
            <th>Signature</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>togglePassword(btn, id)</code></td>
            <td><code>(HTMLElement, string) → void</code></td>
            <td>Toggles <code>type</code> between <code>password</code> and <code>text</code>; swaps the eye icon.</td>
          </tr>
          <tr>
            <td><code>step(id, delta)</code></td>
            <td><code>(string, number) → void</code></td>
            <td>Increments/decrements a number input by <code>delta</code>, respecting <code>min</code>/<code>max</code>.</td>
          </tr>
          <tr>
            <td><code>updateCount(el, countId, max)</code></td>
            <td><code>(HTMLElement, string, number) → void</code></td>
            <td>Updates a character counter display for a textarea.</td>
          </tr>
          <tr>
            <td><code>updateRange(el, valId, prefix, suffix)</code></td>
            <td><code>(HTMLElement, string, string?, string?) → void</code></td>
            <td>Syncs range track fill (<code>--pct</code>) and label display.</td>
          </tr>
          <tr>
            <td><code>initOTP(groupId)</code></td>
            <td><code>(string) → void</code></td>
            <td>Wires auto-advance, backspace, paste, and arrow-key navigation for an OTP group.</td>
          </tr>
        </tbody>
      </table>
    </section>

    <div class="page-divider"></div>

    <!-- ══════════════════════════════════════════
         § INTEGRATION
    ═══════════════════════════════════════════ -->
    <section id="integration">
      <h2 class="section-title">Integration</h2>
      <p class="section-desc">Include these files and the component works without any build step.</p>
      <div class="demo-card">
        <pre class="demo-code">&lt;!-- 1. Token layer (always first) --&gt;
&lt;link rel="stylesheet" href="/assets/css/colors.css" /&gt;

&lt;!-- 2. Component CSS --&gt;
&lt;link rel="stylesheet" href="/Atom/input/input.css" /&gt;

&lt;!-- 3. Helper JS (optional — needed for OTP, password, range) --&gt;
&lt;script src="/Atom/input/input.js" defer&gt;&lt;/script&gt;

&lt;!-- PHP include pattern --&gt;
&lt;?php include __DIR__ . '/../../left_sidebar.php'; ?&gt;
&lt;?php include __DIR__ . '/../../right_sidebar.php'; ?&gt;</pre>
      </div>

      <div class="callout callout-warn">
        <span class="callout-icon">⚠</span>
        <span>Never import raw hex colors inside component files. Always use <code>var(--color-*)</code> tokens from <code>colors.css</code>.</span>
      </div>
    </section>

    <div class="page-divider"></div>

    <!-- ══════════════════════════════════════════
         § ACCESSIBILITY
    ═══════════════════════════════════════════ -->
    <section id="accessibility">
      <h2 class="section-title">Accessibility</h2>
      <p class="section-desc">Airframe UI inputs are WCAG 2.1 AA compliant by default when used correctly.</p>
      <ul class="a11y-list">
        <li class="a11y-item">
          <span class="a11y-check">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5L8 3" stroke="#1A9E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
          Every input must have an associated <code>&lt;label&gt;</code> linked via <code>for</code>/<code>id</code> — never rely on <code>placeholder</code> alone as a label.
        </li>
        <li class="a11y-item">
          <span class="a11y-check">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5L8 3" stroke="#1A9E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
          Error states must set <code>aria-invalid="true"</code> on the input and link to the error message with <code>aria-describedby</code>.
        </li>
        <li class="a11y-item">
          <span class="a11y-check">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5L8 3" stroke="#1A9E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
          OTP groups must have <code>role="group"</code> and <code>aria-label</code> on the container, plus individual <code>aria-label</code> on each cell.
        </li>
        <li class="a11y-item">
          <span class="a11y-check">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5L8 3" stroke="#1A9E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
          Focus ring contrast meets 3:1 against all background surfaces. Never suppress <code>:focus-visible</code> without a custom replacement.
        </li>
        <li class="a11y-item">
          <span class="a11y-check">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5L8 3" stroke="#1A9E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
          Password toggle button must have <code>aria-label</code> that reflects the current state ("Show password" / "Hide password").
        </li>
        <li class="a11y-item">
          <span class="a11y-check">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5L8 3" stroke="#1A9E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
          Range sliders must expose current value via <code>aria-valuenow</code>, <code>aria-valuemin</code>, and <code>aria-valuemax</code>.
        </li>
      </ul>
    </section>

    <div style="height:80px"></div>
  </main>

  <!-- ════ RIGHT SIDEBAR ════ -->
  <aside class="sidebar-right" aria-label="On this page">
    <div class="toc-wrap">

      <!-- Supported platforms -->
      <div class="toc-platforms">
        <p class="toc-platforms-label">Supported platforms</p>
        <div class="toc-platform-icons">
          <!-- iPhone -->
          <svg width="18" height="22" viewBox="0 0 18 22" fill="none" title="iPhone">
            <rect x="1" y="1" width="16" height="20" rx="3.5" stroke="currentColor" stroke-width="1.3"/>
            <circle cx="9" cy="18" r="1" fill="currentColor"/>
            <path d="M7 3h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
          </svg>
          <!-- iPad -->
          <svg width="18" height="22" viewBox="0 0 18 22" fill="none" title="iPad">
            <rect x="1" y="1" width="16" height="20" rx="2.5" stroke="currentColor" stroke-width="1.3"/>
            <circle cx="9" cy="18.5" r="1" fill="currentColor"/>
          </svg>
          <!-- Mac -->
          <svg width="24" height="22" viewBox="0 0 24 22" fill="none" title="Mac">
            <rect x="1" y="1" width="22" height="14" rx="2" stroke="currentColor" stroke-width="1.3"/>
            <path d="M1 18h22" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
            <path d="M8 18l1 3h6l1-3" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/>
          </svg>
          <!-- Watch -->
          <svg width="14" height="22" viewBox="0 0 14 22" fill="none" title="Apple Watch">
            <rect x="1" y="5" width="12" height="12" rx="3" stroke="currentColor" stroke-width="1.3"/>
            <path d="M4 5V3.5a1 1 0 011-1h4a1 1 0 011 1V5M4 17v1.5a1 1 0 001 1h4a1 1 0 001-1V17" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
          </svg>
        </div>
      </div>

      <!-- TOC links -->
      <ul class="toc-list" id="tocList">
        <li><a class="toc-link" href="#overview">Element</a></li>
        <li><a class="toc-link" href="#anatomy">Anatomy</a></li>
        <li><a class="toc-link" href="#specs">Specifications</a></li>
        <li><a class="toc-link" href="#usage">HTML Usage</a>
          <ul style="list-style:none;border-left:1px solid var(--color-border-light);padding:0;margin:0 0 0 14px">
            <li><a class="toc-link" href="#states" style="font-size:12px">States</a></li>
            <li><a class="toc-link" href="#icons" style="font-size:12px">With Icons</a></li>
            <li><a class="toc-link" href="#password" style="font-size:12px">Password</a></li>
            <li><a class="toc-link" href="#number" style="font-size:12px">Number</a></li>
            <li><a class="toc-link" href="#phone" style="font-size:12px">Phone</a></li>
            <li><a class="toc-link" href="#otp" style="font-size:12px">OTP / PIN</a></li>
            <li><a class="toc-link" href="#textarea" style="font-size:12px">Textarea</a></li>
            <li><a class="toc-link" href="#select" style="font-size:12px">Select</a></li>
            <li><a class="toc-link" href="#datetime" style="font-size:12px">Date &amp; Time</a></li>
            <li><a class="toc-link" href="#range" style="font-size:12px">Range Slider</a></li>
            <li><a class="toc-link" href="#compound" style="font-size:12px">Compound / Row</a></li>
          </ul>
        </li>
        <li><a class="toc-link" href="#javascript">JavaScript API</a></li>
        <li><a class="toc-link" href="#integration">Integration</a></li>
        <li><a class="toc-link" href="#accessibility">Accessibility</a></li>
      </ul>
    </div>
  </aside>
</div>

<!-- Scroll to top -->
<button class="scroll-top" id="scrollTop" onclick="window.scrollTo({top:0,behavior:'smooth'})" aria-label="Back to top">
  <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 12V4M4 7l4-4 4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
</button>

<!-- ═══════════════════════════════════════════  SCRIPTS  ═════════════════ -->
<script>
/* ─── Tab switcher ─────────────────────────── */
function switchTab(btn, codeId) {
  const card = btn.closest('.demo-card');
  card.querySelectorAll('.demo-tab').forEach(t => t.classList.remove('active'));
  btn.classList.add('active');

  const preview = card.querySelector('[id^="preview-"]');
  const code    = card.querySelector('[id^="code-"]');

  if (preview) preview.hidden = (btn.textContent.trim() !== 'Preview');
  if (code)    code.hidden    = (btn.textContent.trim() !== 'Preview');
}

/* ─── Password reveal ──────────────────────── */
function togglePassword(btn, id) {
  const input = document.getElementById(id);
  const isHidden = input.type === 'password';
  input.type = isHidden ? 'text' : 'password';
  btn.setAttribute('aria-label', isHidden ? 'Hide password' : 'Show password');
  btn.querySelector('svg').innerHTML = isHidden
    ? `<path d="M1 9C1 9 4 3.5 9 3.5S17 9 17 9s-3 5.5-8 5.5S1 9 1 9z" stroke="currentColor" stroke-width="1.4"/>
       <path d="M3 3l12 12" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>`
    : `<path d="M1 9C1 9 4 3.5 9 3.5S17 9 17 9s-3 5.5-8 5.5S1 9 1 9z" stroke="currentColor" stroke-width="1.4"/>
       <circle cx="9" cy="9" r="2.5" stroke="currentColor" stroke-width="1.4"/>`;
}

/* ─── Number stepper ───────────────────────── */
function step(id, delta) {
  const el  = document.getElementById(id);
  const min = parseFloat(el.min || -Infinity);
  const max = parseFloat(el.max ||  Infinity);
  el.value  = Math.min(max, Math.max(min, parseFloat(el.value || 0) + delta));
}

/* ─── Textarea counter ─────────────────────── */
function updateCount(el, countId, max) {
  document.getElementById(countId).textContent = el.value.length + ' / ' + max;
}

/* ─── Range slider ─────────────────────────── */
function updateRange(el, valId, prefix = '', suffix = '') {
  const min = parseFloat(el.min), max = parseFloat(el.max), val = parseFloat(el.value);
  const pct = ((val - min) / (max - min) * 100).toFixed(1);
  el.style.setProperty('--pct', pct + '%');
  const display = Number.isInteger(val) ? val.toLocaleString('en-IN') : val;
  document.getElementById(valId).textContent = prefix + display + suffix;
}

/* ─── OTP auto-advance ─────────────────────── */
function initOTP(groupId) {
  const group  = document.getElementById(groupId);
  if (!group) return;
  const inputs = [...group.querySelectorAll('.otp-input')];

  inputs.forEach((inp, i) => {
    inp.addEventListener('input', (e) => {
      const val = e.target.value.replace(/\D/g, '');
      e.target.value = val.slice(-1);
      if (val) {
        inp.classList.add('otp-filled');
        if (i < inputs.length - 1) inputs[i + 1].focus();
      } else {
        inp.classList.remove('otp-filled');
      }
    });

    inp.addEventListener('keydown', (e) => {
      if (e.key === 'Backspace' && !inp.value && i > 0) {
        inputs[i - 1].value = '';
        inputs[i - 1].classList.remove('otp-filled');
        inputs[i - 1].focus();
      }
      if (e.key === 'ArrowLeft'  && i > 0) inputs[i - 1].focus();
      if (e.key === 'ArrowRight' && i < inputs.length - 1) inputs[i + 1].focus();
    });

    inp.addEventListener('paste', (e) => {
      e.preventDefault();
      const digits = (e.clipboardData.getData('text') || '').replace(/\D/g, '').split('');
      digits.forEach((d, j) => {
        if (inputs[i + j]) {
          inputs[i + j].value = d;
          inputs[i + j].classList.add('otp-filled');
        }
      });
      const next = inputs[Math.min(i + digits.length, inputs.length - 1)];
      next.focus();
    });
  });
}

/* ─── TOC scroll spy ───────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  initOTP('otp6');
  initOTP('otp4');

  const tocLinks = document.querySelectorAll('.toc-link');
  const sections = document.querySelectorAll('section[id], h3[id]');

  const spy = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        tocLinks.forEach(a => {
          a.classList.remove('active');
          if (a.getAttribute('href') === '#' + entry.target.id) a.classList.add('active');
        });
      }
    });
  }, { rootMargin: '-10% 0px -75% 0px' });

  sections.forEach(s => spy.observe(s));

  // Sidebar group toggle
  document.querySelectorAll('.sb-link.active').forEach(link => {
    const grp = link.closest('.sb-group');
    if (grp) grp.classList.add('has-active');
  });

  // Scroll-to-top button
  const scrollBtn = document.getElementById('scrollTop');
  window.addEventListener('scroll', () => {
    scrollBtn.classList.toggle('visible', window.scrollY > 400);
  });
});

/* ─── Sidebar ──────────────────────────────── */
function toggleGroup(btn) {
  const grp  = btn.closest('.sb-group');
  const list = grp.querySelector('.sb-items');
  const isOpen = grp.classList.contains('open');
  grp.classList.toggle('open', !isOpen);
  if (isOpen) list.setAttribute('hidden', '');
  else        list.removeAttribute('hidden');
}

function filterSidebar(input) {
  const term = input.value.toLowerCase().trim();
  const nav  = input.closest('.sidebar-left') || document;
  if (!term) {
    nav.querySelectorAll('.sb-link').forEach(a => a.classList.remove('hidden','sb-match'));
    nav.querySelectorAll('.sb-group').forEach(grp => {
      const list = grp.querySelector('.sb-items');
      if (grp.classList.contains('open')) list.removeAttribute('hidden');
      else list.setAttribute('hidden','');
    });
    return;
  }
  nav.querySelectorAll('.sb-group').forEach(grp => {
    const links = grp.querySelectorAll('.sb-link');
    const list  = grp.querySelector('.sb-items');
    let hasMatch = false;
    links.forEach(a => {
      const match = a.textContent.toLowerCase().includes(term);
      a.classList.toggle('hidden', !match);
      a.classList.toggle('sb-match', match);
      if (match) hasMatch = true;
    });
    if (hasMatch) { grp.classList.add('open'); list.removeAttribute('hidden'); }
    else if (!grp.classList.contains('has-active')) { grp.classList.remove('open'); list.setAttribute('hidden',''); }
  });
}
</script>
</body>
</html>