<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Input Fields — Airframe UI</title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=SF+Pro+Display:wght@300;400;500;600;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet" />
<style>
/* ═══════════════════════════════════════════════════════════════
   DESIGN TOKENS
═══════════════════════════════════════════════════════════════ */
:root {
  --primary: #FF385C;
  --primary-hover: #e0314f;
  --primary-alpha: rgba(255,56,92,0.08);
  --primary-border: rgba(255,56,92,0.2);

  --text-primary: #1d1d1f;
  --text-secondary: #6e6e73;
  --text-muted: #aeaeb2;
  --text-link: #0066cc;

  --border: #d1d1d6;
  --border-light: #e5e5ea;
  --border-focus: rgba(0,102,255,0.6);

  --surface: #ffffff;
  --surface-raised: #f5f5f7;
  --surface-grouped: #f2f2f7;

  --success: #34c759;
  --success-bg: #f0fdf4;
  --success-border: #86efac;
  --success-text: #166534;

  --error: #ff3b30;
  --error-bg: #fff1f0;
  --error-border: #fca5a5;
  --error-text: #991b1b;

  --info-bg: #eff6ff;
  --info-border: #bfdbfe;
  --info-text: #1e40af;

  --warning-bg: #fffbeb;
  --warning-border: #fde68a;
  --warning-text: #92400e;

  --shadow-xs: 0 1px 2px rgba(0,0,0,0.05);
  --shadow-sm: 0 1px 4px rgba(0,0,0,0.08), 0 2px 8px rgba(0,0,0,0.04);
  --shadow-md: 0 4px 16px rgba(0,0,0,0.08), 0 1px 3px rgba(0,0,0,0.06);
  --shadow-lg: 0 12px 40px rgba(0,0,0,0.12), 0 2px 8px rgba(0,0,0,0.06);

  --radius-sm: 8px;
  --radius-md: 10px;
  --radius-lg: 14px;
  --radius-xl: 20px;
  --radius-pill: 999px;

  --input-h-sm: 34px;
  --input-h-md: 42px;
  --input-h-lg: 52px;

  --font-sans: 'DM Sans', -apple-system, BlinkMacSystemFont, sans-serif;
  --font-mono: 'DM Mono', 'SF Mono', 'Menlo', monospace;

  --nav-w: 260px;
  --toc-w: 220px;
  --header-h: 56px;
}

/* ═══════════════════════════════════════════════════════════════
   RESET & BASE
═══════════════════════════════════════════════════════════════ */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

html { scroll-behavior: smooth; font-size: 16px; -webkit-font-smoothing: antialiased; }

body {
  font-family: var(--font-sans);
  background: var(--surface);
  color: var(--text-primary);
  line-height: 1.6;
}

/* ═══════════════════════════════════════════════════════════════
   TOP NAV BAR
═══════════════════════════════════════════════════════════════ */
.topbar {
  position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
  height: var(--header-h);
  background: rgba(255,255,255,0.85);
  backdrop-filter: blur(20px) saturate(1.8);
  -webkit-backdrop-filter: blur(20px) saturate(1.8);
  border-bottom: 1px solid var(--border-light);
  display: flex; align-items: center; padding: 0 24px;
  gap: 32px;
}

.topbar-brand {
  display: flex; align-items: center; gap: 10px;
  text-decoration: none; color: var(--text-primary);
  font-weight: 600; font-size: 15px; letter-spacing: -.01em;
  flex-shrink: 0;
}

.topbar-brand-dot {
  width: 8px; height: 8px; border-radius: 50%;
  background: var(--primary);
}

.topbar-nav {
  display: flex; align-items: center; gap: 4px;
  flex: 1;
}

.topbar-link {
  font-size: 13.5px; color: var(--text-secondary);
  text-decoration: none; padding: 5px 12px; border-radius: var(--radius-sm);
  transition: color .14s, background .14s; font-weight: 500;
}
.topbar-link:hover { color: var(--text-primary); background: var(--surface-raised); }
.topbar-link.active { color: var(--text-primary); background: var(--surface-raised); }

.topbar-actions { display: flex; align-items: center; gap: 8px; margin-left: auto; }

.topbar-pill {
  font-size: 11.5px; font-weight: 600; padding: 4px 10px;
  border-radius: var(--radius-pill); background: var(--primary-alpha);
  color: var(--primary); border: 1px solid var(--primary-border);
  letter-spacing: .02em;
}

/* ═══════════════════════════════════════════════════════════════
   LAYOUT
═══════════════════════════════════════════════════════════════ */
.layout {
  display: flex; padding-top: var(--header-h);
  min-height: 100vh;
}

/* ── Left sidebar ── */
.sidebar-left {
  position: fixed; top: var(--header-h); left: 0; bottom: 0;
  width: var(--nav-w); overflow-y: auto;
  background: var(--surface);
  border-right: 1px solid var(--border-light);
  padding: 28px 0;
  scrollbar-width: thin; scrollbar-color: var(--border) transparent;
}

.nav-section-title {
  font-size: 10.5px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase;
  color: var(--text-muted); padding: 0 20px; margin-bottom: 6px; margin-top: 20px;
}
.nav-section-title:first-child { margin-top: 0; }

.nav-link {
  display: flex; align-items: center; gap: 10px;
  font-size: 13.5px; font-weight: 500; color: var(--text-secondary);
  text-decoration: none; padding: 7px 20px; border-radius: 0;
  transition: color .12s, background .12s; letter-spacing: -.01em;
}
.nav-link:hover { color: var(--text-primary); background: var(--surface-raised); }
.nav-link.active {
  color: var(--primary); background: var(--primary-alpha);
  border-right: 2px solid var(--primary);
  font-weight: 600;
}

.nav-link-icon {
  width: 18px; height: 18px; flex-shrink: 0; opacity: .6;
  display: flex; align-items: center; justify-content: center;
}
.nav-link.active .nav-link-icon { opacity: 1; }

/* ── Main content ── */
.main {
  flex: 1;
  margin-left: var(--nav-w);
  margin-right: var(--toc-w);
  max-width: 840px;
  padding: 56px 64px 160px;
}

@media (max-width: 1100px) { .sidebar-right { display: none; } .main { margin-right: 0; } }
@media (max-width: 800px) { .sidebar-left { display: none; } .main { margin-left: 0; padding: 32px 24px 80px; } }

/* ── Right TOC ── */
.sidebar-right {
  position: fixed; top: var(--header-h); right: 0; bottom: 0;
  width: var(--toc-w); overflow-y: auto;
  padding: 32px 20px;
  scrollbar-width: thin; scrollbar-color: var(--border) transparent;
}

.toc-title {
  font-size: 10.5px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase;
  color: var(--text-muted); margin-bottom: 12px;
}

.toc-list { list-style: none; border-left: 1.5px solid var(--border-light); }

.toc-link {
  display: block; font-size: 12.5px; color: var(--text-secondary);
  text-decoration: none; padding: 5px 0 5px 14px; border-left: 2px solid transparent;
  margin-left: -1.5px; transition: color .12s, border-color .12s; line-height: 1.4;
  font-weight: 500;
}
.toc-link:hover { color: var(--text-primary); }
.toc-link.active { color: var(--primary); border-left-color: var(--primary); }

.toc-sub { font-size: 12px; color: var(--text-muted); padding: 3px 0 3px 26px; font-weight: 400; }

/* ═══════════════════════════════════════════════════════════════
   PAGE TYPOGRAPHY
═══════════════════════════════════════════════════════════════ */
.page-eyebrow {
  font-size: 11px; font-weight: 700; letter-spacing: .12em; text-transform: uppercase;
  color: var(--primary); margin-bottom: 10px;
  display: flex; align-items: center; gap: 8px;
}
.page-eyebrow::before {
  content: ''; width: 24px; height: 2px; background: var(--primary); border-radius: 1px;
}

.page-title {
  font-size: 52px; font-weight: 700; letter-spacing: -.038em; line-height: 1.04;
  color: var(--text-primary); margin-bottom: 18px;
}

.page-intro {
  font-size: 17px; line-height: 1.72; color: var(--text-secondary);
  max-width: 620px; margin-bottom: 36px; letter-spacing: -.01em;
}

.page-rule {
  border: none; border-top: 1px solid var(--border-light); margin: 64px 0;
}

.breadcrumb {
  display: flex; align-items: center; gap: 6px; margin-bottom: 28px;
  font-size: 12.5px; color: var(--text-muted);
}
.breadcrumb a { color: var(--text-link); text-decoration: none; }
.breadcrumb a:hover { text-decoration: underline; }
.breadcrumb-sep { color: var(--border); font-size: 14px; }

/* ── Section headings ── */
.section-label {
  font-size: 10.5px; font-weight: 700; letter-spacing: .12em; text-transform: uppercase;
  color: var(--primary); margin-bottom: 6px;
}

.section-title {
  font-size: 34px; font-weight: 700; letter-spacing: -.03em; line-height: 1.1;
  color: var(--text-primary); margin-bottom: 12px;
  scroll-margin-top: calc(var(--header-h) + 20px);
}

.section-body {
  font-size: 15px; line-height: 1.75; color: var(--text-secondary);
  max-width: 620px; margin-bottom: 32px;
}

.section-h3 {
  font-size: 18px; font-weight: 600; letter-spacing: -.016em;
  color: var(--text-primary); margin: 44px 0 12px;
  scroll-margin-top: calc(var(--header-h) + 20px);
}

/* ── Code ── */
code {
  font-family: var(--font-mono); font-size: 12px;
  background: var(--primary-alpha); color: var(--primary);
  padding: 2px 6px; border-radius: 5px;
  border: 1px solid var(--primary-border);
}

/* ═══════════════════════════════════════════════════════════════
   CALLOUTS
═══════════════════════════════════════════════════════════════ */
.callout {
  display: flex; gap: 14px; align-items: flex-start;
  padding: 16px 20px; border-radius: var(--radius-lg); margin-bottom: 32px;
  font-size: 13.5px; line-height: 1.65;
}
.callout-info  { background: var(--info-bg);    border: 1px solid var(--info-border);    color: var(--info-text); }
.callout-warn  { background: var(--warning-bg); border: 1px solid var(--warning-border); color: var(--warning-text); }
.callout-icon  { font-size: 16px; flex-shrink: 0; line-height: 1.65; }

/* ═══════════════════════════════════════════════════════════════
   DEMO CARD
═══════════════════════════════════════════════════════════════ */
.demo-card {
  border: 1px solid var(--border);
  border-radius: var(--radius-xl); overflow: hidden;
  margin-bottom: 28px;
  box-shadow: var(--shadow-sm);
  background: var(--surface);
}

.demo-bar {
  display: flex; align-items: center;
  background: var(--surface-raised);
  border-bottom: 1px solid var(--border-light);
  padding: 0 4px;
}

.demo-tab {
  font-size: 12.5px; font-weight: 500; font-family: inherit;
  color: var(--text-muted); padding: 10px 16px;
  cursor: pointer; border: none; background: none;
  border-bottom: 2px solid transparent; margin-bottom: -1px;
  transition: color .12s, border-color .12s; letter-spacing: -.01em;
}
.demo-tab.active { color: var(--text-primary); border-bottom-color: var(--primary); }

.demo-preview {
  padding: 36px 32px;
  background: var(--surface);
  border-bottom: 1px solid var(--border-light);
  display: flex; flex-wrap: wrap; gap: 20px; align-items: flex-start;
}
.demo-preview.col { flex-direction: column; }
.demo-preview.center { flex-direction: column; justify-content: center; align-items: center; }

.demo-code {
  font-family: var(--font-mono); font-size: 12px; line-height: 1.85;
  tab-size: 2; padding: 24px 28px; margin: 0;
  color: #c9d1d9; background: #0d1117;
  overflow-x: auto; white-space: pre;
}

/* ═══════════════════════════════════════════════════════════════
   FORM ELEMENTS
═══════════════════════════════════════════════════════════════ */
/* Field wrapper */
.field { display: flex; flex-direction: column; gap: 5px; }
.field-label {
  font-size: 13px; font-weight: 600; color: var(--text-primary); letter-spacing: -.01em;
}
.field-helper {
  font-size: 12px; color: var(--text-muted); letter-spacing: -.01em;
}
.field-helper.is-error { color: var(--error-text); }
.field-helper.is-success { color: var(--success-text); }

/* Base input */
.input {
  height: var(--input-h-md); width: 100%;
  padding: 0 13px; border-radius: var(--radius-md);
  border: 1.5px solid var(--border);
  background: var(--surface); color: var(--text-primary);
  font-family: var(--font-sans); font-size: 14.5px; font-weight: 400;
  letter-spacing: -.01em; outline: none;
  transition: border-color .16s, box-shadow .16s, background .16s;
  appearance: none;
}
.input::placeholder { color: var(--text-muted); }
.input:hover { border-color: #b0b0b8; }
.input:focus {
  border-color: var(--border-focus);
  box-shadow: 0 0 0 3px rgba(0,102,255,0.12);
}
.input:disabled {
  background: var(--surface-grouped); color: var(--text-muted);
  cursor: not-allowed; border-style: dashed;
}
.input.is-error {
  border-color: var(--error); background: var(--error-bg);
}
.input.is-error:focus {
  box-shadow: 0 0 0 3px rgba(255,59,48,0.12);
}
.input.is-success {
  border-color: var(--success); background: var(--success-bg);
}
.input.input-sm { height: var(--input-h-sm); font-size: 13px; padding: 0 10px; border-radius: var(--radius-sm); }
.input.input-lg { height: var(--input-h-lg); font-size: 16px; padding: 0 16px; border-radius: var(--radius-lg); }

/* Input with icon */
.input-wrap { position: relative; display: flex; align-items: center; }
.input-icon {
  position: absolute; left: 12px; color: var(--text-muted);
  display: flex; align-items: center; pointer-events: none; z-index: 1;
}
.input-icon-right { left: auto; right: 12px; }
.icon-right .input-icon  { left: auto; right: 12px; }
.input-wrap .input { padding-left: 38px; }
.input-wrap.icon-right .input { padding-left: 13px; padding-right: 40px; }
.input-wrap.icon-both .input { padding-left: 38px; padding-right: 38px; }

/* Search pill */
.input-search {
  border-radius: var(--radius-pill);
  padding-left: 38px;
  background: var(--surface-raised);
}

/* Password toggle */
.pw-toggle {
  position: absolute; right: 10px;
  width: 32px; height: 32px; border-radius: 8px;
  border: none; background: none; cursor: pointer;
  color: var(--text-muted); display: flex; align-items: center; justify-content: center;
  transition: color .12s, background .12s;
}
.pw-toggle:hover { color: var(--text-primary); background: var(--surface-raised); }

/* Textarea */
.textarea {
  width: 100%; padding: 12px 13px; border-radius: var(--radius-md);
  border: 1.5px solid var(--border); background: var(--surface);
  color: var(--text-primary); font-family: var(--font-sans);
  font-size: 14.5px; line-height: 1.6; letter-spacing: -.01em;
  resize: vertical; outline: none; min-height: 100px;
  transition: border-color .16s, box-shadow .16s;
}
.textarea::placeholder { color: var(--text-muted); }
.textarea:focus { border-color: var(--border-focus); box-shadow: 0 0 0 3px rgba(0,102,255,0.12); }
.textarea-footer { display: flex; justify-content: space-between; align-items: flex-end; margin-top: 4px; }
.textarea-count { font-size: 11.5px; color: var(--text-muted); font-variant-numeric: tabular-nums; }
.textarea-count.is-near { color: #f59e0b; }
.textarea-count.is-max  { color: var(--error); }

/* Select */
.select-wrap { position: relative; }
.select-native {
  width: 100%; height: var(--input-h-md); padding: 0 36px 0 13px;
  border-radius: var(--radius-md); border: 1.5px solid var(--border);
  background: var(--surface); color: var(--text-primary);
  font-family: var(--font-sans); font-size: 14.5px; letter-spacing: -.01em;
  appearance: none; outline: none; cursor: pointer;
  transition: border-color .16s, box-shadow .16s;
}
.select-native:focus { border-color: var(--border-focus); box-shadow: 0 0 0 3px rgba(0,102,255,0.12); }
.select-caret {
  position: absolute; right: 11px; top: 50%; transform: translateY(-50%);
  color: var(--text-muted); pointer-events: none;
}

/* Phone */
.phone-wrap { display: flex; gap: 0; border-radius: var(--radius-md); overflow: hidden; border: 1.5px solid var(--border); transition: border-color .16s, box-shadow .16s; }
.phone-wrap:focus-within { border-color: var(--border-focus); box-shadow: 0 0 0 3px rgba(0,102,255,0.12); }
.country-select {
  height: var(--input-h-md); padding: 0 8px 0 10px; border: none;
  background: var(--surface-raised); color: var(--text-primary);
  font-family: var(--font-sans); font-size: 13.5px; appearance: none;
  cursor: pointer; outline: none; border-right: 1.5px solid var(--border-light);
  flex-shrink: 0; min-width: 100px;
}
.phone-wrap .input { border: none; border-radius: 0; box-shadow: none; flex: 1; }
.phone-wrap .input:focus { border: none; box-shadow: none; }

/* Number stepper */
.number-wrap { position: relative; }
.number-stepper {
  position: absolute; right: 4px; top: 50%; transform: translateY(-50%);
  display: flex; flex-direction: column; gap: 2px;
}
.stepper-btn {
  width: 22px; height: 17px; border: none; background: var(--surface-raised);
  border-radius: 5px; cursor: pointer; color: var(--text-secondary);
  display: flex; align-items: center; justify-content: center;
  transition: background .1s, color .1s;
}
.stepper-btn:hover { background: var(--border-light); color: var(--text-primary); }
.number-wrap .input { padding-right: 36px; }

/* Range */
.range-wrap { display: flex; align-items: center; gap: 16px; }
input[type=range] {
  flex: 1; height: 4px; appearance: none; background: none; outline: none; cursor: pointer;
  border-radius: 2px;
  background: linear-gradient(to right, var(--primary) var(--pct, 50%), var(--border) var(--pct, 50%));
}
input[type=range]::-webkit-slider-thumb {
  appearance: none; width: 20px; height: 20px; border-radius: 50%;
  background: var(--surface); border: 2.5px solid var(--primary);
  box-shadow: 0 2px 8px rgba(255,56,92,0.3);
  transition: transform .12s;
}
input[type=range]::-webkit-slider-thumb:hover { transform: scale(1.15); }
.range-val { font-size: 13px; font-weight: 600; color: var(--text-primary); white-space: nowrap; min-width: 60px; text-align: right; }

/* Checkbox & Radio */
.checkbox-wrap, .radio-wrap {
  display: flex; align-items: flex-start; gap: 10px; cursor: pointer;
}
.checkbox-wrap input[type=checkbox],
.radio-wrap input[type=radio] {
  width: 18px; height: 18px; flex-shrink: 0; margin-top: 2px;
  appearance: none; border: 1.5px solid var(--border); border-radius: 5px;
  background: var(--surface); cursor: pointer;
  transition: background .14s, border-color .14s, box-shadow .14s;
  position: relative;
}
.radio-wrap input[type=radio] { border-radius: 50%; }
.checkbox-wrap input[type=checkbox]:checked,
.radio-wrap input[type=radio]:checked {
  background: var(--primary); border-color: var(--primary);
}
.checkbox-wrap input[type=checkbox]:checked::after {
  content: ''; position: absolute; left: 4px; top: 1.5px;
  width: 5px; height: 9px; border: 2px solid white;
  border-top: none; border-left: none; transform: rotate(42deg);
}
.radio-wrap input[type=radio]:checked::after {
  content: ''; position: absolute; left: 50%; top: 50%;
  transform: translate(-50%, -50%);
  width: 7px; height: 7px; border-radius: 50%; background: white;
}
.checkbox-wrap input:focus-visible,
.radio-wrap input:focus-visible {
  outline: none; box-shadow: 0 0 0 3px rgba(255,56,92,0.2);
}
.checkbox-label { font-size: 14px; color: var(--text-primary); line-height: 1.5; }
.checkbox-sub { display: block; font-size: 12px; color: var(--text-muted); margin-top: 1px; }

/* Field row */
.field-row { display: flex; gap: 16px; }
.field-row .field { flex: 1; }

/* Input group */
.input-group { display: flex; border-radius: var(--radius-md); overflow: hidden; border: 1.5px solid var(--border); transition: border-color .16s, box-shadow .16s; }
.input-group:focus-within { border-color: var(--border-focus); box-shadow: 0 0 0 3px rgba(0,102,255,0.12); }
.input-addon {
  padding: 0 13px; background: var(--surface-raised); color: var(--text-secondary);
  font-size: 13.5px; font-weight: 500; display: flex; align-items: center;
  border-right: 1.5px solid var(--border-light); white-space: nowrap; flex-shrink: 0;
}
.input-addon:last-child { border-right: none; border-left: 1.5px solid var(--border-light); }
.input-group .input { border: none; border-radius: 0; flex: 1; box-shadow: none; }
.input-group .input:focus { border: none; box-shadow: none; }

/* Floating label */
.float-field { position: relative; }
.float-input {
  width: 100%; height: var(--input-h-md); padding: 18px 13px 6px;
  border-radius: var(--radius-md); border: 1.5px solid var(--border);
  background: var(--surface); color: var(--text-primary);
  font-family: var(--font-sans); font-size: 14.5px; outline: none;
  transition: border-color .16s, box-shadow .16s;
}
.float-input:focus { border-color: var(--border-focus); box-shadow: 0 0 0 3px rgba(0,102,255,0.12); }
.float-label {
  position: absolute; left: 13px; top: 50%; transform: translateY(-50%);
  font-size: 14.5px; color: var(--text-muted); font-family: var(--font-sans);
  pointer-events: none; transition: all .15s ease; transform-origin: left top;
  font-weight: 400; letter-spacing: -.01em;
}
.float-input:focus + .float-label,
.float-input:not(:placeholder-shown) + .float-label {
  top: 10px; transform: translateY(0) scale(0.78);
  color: var(--primary); font-weight: 600;
}

/* Tag input */
.tag-input-wrap {
  display: flex; flex-wrap: wrap; gap: 6px; align-items: center;
  padding: 8px 10px; border-radius: var(--radius-md);
  border: 1.5px solid var(--border); background: var(--surface);
  cursor: text; min-height: var(--input-h-md);
  transition: border-color .16s, box-shadow .16s;
}
.tag-input-wrap:focus-within { border-color: var(--border-focus); box-shadow: 0 0 0 3px rgba(0,102,255,0.12); }
.tag-pill {
  display: inline-flex; align-items: center; gap: 5px;
  padding: 3px 10px; border-radius: var(--radius-pill);
  background: var(--primary-alpha); color: var(--primary);
  font-size: 12.5px; font-weight: 600; border: 1px solid var(--primary-border);
  letter-spacing: -.01em;
}
.tag-pill-remove {
  border: none; background: none; cursor: pointer; color: inherit;
  font-size: 15px; line-height: 1; padding: 0; margin-left: 1px;
  opacity: .7; transition: opacity .1s;
}
.tag-pill-remove:hover { opacity: 1; }
.tag-input-inner {
  border: none; outline: none; background: none; font-family: var(--font-sans);
  font-size: 14px; color: var(--text-primary); flex: 1; min-width: 120px;
}

/* ═══════════════════════════════════════════════════════════════
   OTP / PIN
═══════════════════════════════════════════════════════════════ */
.otp-wrap { display: flex; align-items: center; gap: 8px; }
.otp-input {
  width: 48px; height: 56px; border-radius: var(--radius-md);
  border: 1.5px solid var(--border); background: var(--surface);
  color: var(--text-primary); font-family: var(--font-sans);
  font-size: 22px; font-weight: 600; text-align: center; outline: none;
  transition: border-color .16s, box-shadow .16s, background .16s;
  letter-spacing: 0; caret-color: var(--primary);
}
.otp-input:focus {
  border-color: var(--primary);
  box-shadow: 0 0 0 3px rgba(255,56,92,0.15);
  background: rgba(255,56,92,0.02);
}
.otp-input.is-filled { background: var(--primary-alpha); border-color: var(--primary); }
.otp-input.is-error { border-color: var(--error); background: var(--error-bg); }
.otp-input-lg { width: 62px; height: 70px; font-size: 28px; border-radius: var(--radius-lg); }
.otp-input-sm { width: 38px; height: 44px; font-size: 18px; }
.otp-sep { font-size: 20px; color: var(--text-muted); font-weight: 300; margin: 0 2px; }

/* ═══════════════════════════════════════════════════════════════
   GLASSMORPHISM
═══════════════════════════════════════════════════════════════ */
.glass-stage {
  position: relative; padding: 56px 36px;
  background:
    radial-gradient(ellipse 70% 70% at 15% 50%,  rgba(255,56,92,0.18) 0%, transparent 65%),
    radial-gradient(ellipse 60% 60% at 85% 30%,  rgba(0,166,153,0.14) 0%, transparent 65%),
    radial-gradient(ellipse 50% 50% at 50% 90%,  rgba(0,122,255,0.12) 0%, transparent 65%),
    linear-gradient(135deg, #dde1ff 0%, #fce4ec 50%, #d0f2ee 100%);
  border-bottom: 1px solid var(--border);
  display: flex; flex-direction: column; align-items: center; gap: 32px;
}

.glass-panel {
  background: rgba(255,255,255,0.65);
  backdrop-filter: blur(32px) saturate(1.6);
  -webkit-backdrop-filter: blur(32px) saturate(1.6);
  border: 1px solid rgba(255,255,255,0.8);
  border-radius: var(--radius-xl);
  padding: 32px 28px;
  box-shadow:
    0 8px 32px rgba(0,0,0,0.1),
    0 1px 0 rgba(255,255,255,0.9) inset,
    0 -1px 0 rgba(0,0,0,0.04) inset;
}

.glass-field { display: flex; flex-direction: column; gap: 5px; }
.glass-label { font-size: 13px; font-weight: 600; color: var(--text-primary); letter-spacing: -.01em; }

.input-glass {
  width: 100%; height: var(--input-h-md); padding: 0 13px;
  border-radius: var(--radius-md);
  border: 1px solid rgba(255,255,255,0.6);
  background: rgba(255,255,255,0.5);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  color: var(--text-primary); font-family: var(--font-sans);
  font-size: 14.5px; outline: none; letter-spacing: -.01em;
  box-shadow: 0 1px 3px rgba(0,0,0,0.06), 0 1px 0 rgba(255,255,255,0.8) inset;
  transition: border-color .16s, box-shadow .16s, background .16s;
}
.input-glass::placeholder { color: rgba(0,0,0,0.35); }
.input-glass:focus {
  border-color: rgba(255,56,92,0.5);
  background: rgba(255,255,255,0.7);
  box-shadow: 0 0 0 3px rgba(255,56,92,0.12), 0 1px 0 rgba(255,255,255,0.8) inset;
}

.input-glass-search {
  width: 100%; height: 54px; border-radius: var(--radius-pill); padding: 0 20px;
  border: 1px solid rgba(255,255,255,0.7);
  background: rgba(255,255,255,0.55);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  color: var(--text-primary); font-family: var(--font-sans); font-size: 15px;
  outline: none; letter-spacing: -.01em;
  box-shadow: 0 4px 20px rgba(0,0,0,0.08), 0 1px 0 rgba(255,255,255,0.9) inset;
  transition: box-shadow .16s, background .16s;
}
.input-glass-search::placeholder { color: rgba(0,0,0,0.4); }
.input-glass-search:focus {
  background: rgba(255,255,255,0.75);
  box-shadow: 0 0 0 3px rgba(255,56,92,0.15), 0 4px 20px rgba(0,0,0,0.08);
}

.textarea-glass {
  width: 100%; padding: 12px 13px; border-radius: var(--radius-md);
  border: 1px solid rgba(255,255,255,0.6);
  background: rgba(255,255,255,0.5);
  backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);
  color: var(--text-primary); font-family: var(--font-sans); font-size: 14.5px;
  line-height: 1.6; outline: none; resize: vertical; min-height: 90px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.06), 0 1px 0 rgba(255,255,255,0.8) inset;
  transition: border-color .16s, box-shadow .16s;
}
.textarea-glass:focus {
  border-color: rgba(255,56,92,0.5);
  box-shadow: 0 0 0 3px rgba(255,56,92,0.12), 0 1px 0 rgba(255,255,255,0.8) inset;
}
.textarea-glass::placeholder { color: rgba(0,0,0,0.35); }

.select-glass {
  width: 100%; height: var(--input-h-md); padding: 0 36px 0 13px;
  border-radius: var(--radius-md);
  border: 1px solid rgba(255,255,255,0.6);
  background: rgba(255,255,255,0.5);
  backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);
  color: var(--text-primary); font-family: var(--font-sans); font-size: 14.5px;
  appearance: none; outline: none; cursor: pointer;
  box-shadow: 0 1px 3px rgba(0,0,0,0.06);
  transition: border-color .16s, box-shadow .16s;
}
.select-glass:focus {
  border-color: rgba(255,56,92,0.5);
  box-shadow: 0 0 0 3px rgba(255,56,92,0.12);
}

.otp-glass .otp-input {
  background: rgba(255,255,255,0.5);
  backdrop-filter: blur(12px);
  border: 1px solid rgba(255,255,255,0.7);
  box-shadow: 0 2px 8px rgba(0,0,0,0.06);
}
.otp-glass .otp-input:focus {
  border-color: rgba(255,56,92,0.6);
  background: rgba(255,255,255,0.75);
  box-shadow: 0 0 0 3px rgba(255,56,92,0.15);
}

/* ═══════════════════════════════════════════════════════════════
   SPEC GRID
═══════════════════════════════════════════════════════════════ */
.spec-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 10px; margin-bottom: 32px; }
@media (max-width: 800px) { .spec-grid { grid-template-columns: repeat(2,1fr); } }
.spec-item {
  padding: 16px 18px; border-radius: var(--radius-lg);
  background: var(--surface); border: 1px solid var(--border);
  box-shadow: var(--shadow-xs);
  transition: box-shadow .14s, transform .14s;
}
.spec-item:hover { box-shadow: var(--shadow-sm); transform: translateY(-1px); }
.spec-lbl { font-size: 10.5px; font-weight: 700; text-transform: uppercase; letter-spacing: .08em; color: var(--text-muted); margin-bottom: 6px; }
.spec-val { font-size: 14px; font-weight: 600; color: var(--text-primary); font-variant-numeric: tabular-nums; }

/* ═══════════════════════════════════════════════════════════════
   PROP TABLE
═══════════════════════════════════════════════════════════════ */
.prop-table { width: 100%; border-collapse: collapse; font-size: 13.5px; margin-bottom: 36px; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border); }
.prop-table th {
  font-size: 10.5px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase;
  color: var(--text-muted); padding: 11px 16px; text-align: left;
  background: var(--surface-raised); border-bottom: 1px solid var(--border);
}
.prop-table td {
  padding: 12px 16px; vertical-align: top; color: var(--text-secondary);
  border-bottom: 1px solid var(--border-light);
}
.prop-table tr:last-child td { border-bottom: none; }
.prop-table tr:hover td { background: rgba(0,0,0,0.015); }

/* ═══════════════════════════════════════════════════════════════
   A11Y LIST
═══════════════════════════════════════════════════════════════ */
.a11y-list { list-style: none; display: flex; flex-direction: column; gap: 10px; }
.a11y-item { display: flex; align-items: flex-start; gap: 12px; font-size: 14px; color: var(--text-secondary); line-height: 1.65; }
.a11y-check {
  width: 22px; height: 22px; border-radius: 50%; flex-shrink: 0; margin-top: 1px;
  background: var(--success-bg); border: 1.5px solid var(--success-border);
  display: flex; align-items: center; justify-content: center;
  color: var(--success);
}

/* ═══════════════════════════════════════════════════════════════
   SCROLL TO TOP
═══════════════════════════════════════════════════════════════ */
.scroll-top {
  position: fixed; bottom: 32px; right: 32px; z-index: 500;
  width: 44px; height: 44px; border-radius: 50%;
  background: var(--surface); border: 1px solid var(--border);
  box-shadow: var(--shadow-lg); cursor: pointer;
  display: flex; align-items: center; justify-content: center;
  color: var(--text-secondary);
  opacity: 0; transform: translateY(12px);
  transition: opacity .22s, transform .22s, box-shadow .14s;
}
.scroll-top.show { opacity: 1; transform: translateY(0); }
.scroll-top:hover { box-shadow: 0 16px 48px rgba(0,0,0,0.16); color: var(--text-primary); }

/* ═══════════════════════════════════════════════════════════════
   SECTION INTRO STRIP
═══════════════════════════════════════════════════════════════ */
.section-header {
  display: flex; align-items: baseline; gap: 16px; margin-bottom: 8px;
}
.section-num {
  font-size: 11px; font-weight: 700; color: var(--text-muted);
  background: var(--surface-raised); border: 1px solid var(--border);
  padding: 2px 8px; border-radius: var(--radius-pill); letter-spacing: .06em;
  text-transform: uppercase; flex-shrink: 0; margin-top: 2px;
}

/* page entry animation */
@keyframes fadeUp {
  from { opacity: 0; transform: translateY(18px); }
  to   { opacity: 1; transform: translateY(0); }
}
.page-eyebrow { animation: fadeUp .5s ease both; }
.page-title   { animation: fadeUp .5s ease .07s both; }
.page-intro   { animation: fadeUp .5s ease .14s both; }
.callout      { animation: fadeUp .5s ease .2s both; }
</style>
</head>
<body>

<!-- ═══════════════════════════════════════════════════════════
     TOP NAVIGATION BAR
═══════════════════════════════════════════════════════════════ -->
<header class="topbar">
  <a href="#" class="topbar-brand">
    <span class="topbar-brand-dot"></span>
    Airframe UI
  </a>
  <nav class="topbar-nav">
    <a href="#" class="topbar-link">Overview</a>
    <a href="#" class="topbar-link active">Guidelines</a>
    <a href="#" class="topbar-link">Components</a>
    <a href="#" class="topbar-link">Resources</a>
  </nav>
  <div class="topbar-actions">
    <span class="topbar-pill">v2.4</span>
  </div>
</header>

<div class="layout">

  <!-- ═══════════════════════════════════════════════════════════
       LEFT SIDEBAR NAVIGATION
  ═══════════════════════════════════════════════════════════ -->
  <aside class="sidebar-left">
    <p class="nav-section-title">Getting Started</p>
    <a href="#" class="nav-link">
      <span class="nav-link-icon"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><rect x="1" y="1" width="5" height="5" rx="1.5" stroke="currentColor" stroke-width="1.3"/><rect x="8" y="1" width="5" height="5" rx="1.5" stroke="currentColor" stroke-width="1.3"/><rect x="1" y="8" width="5" height="5" rx="1.5" stroke="currentColor" stroke-width="1.3"/><rect x="8" y="8" width="5" height="5" rx="1.5" stroke="currentColor" stroke-width="1.3"/></svg></span>
      Overview
    </a>
    <a href="#" class="nav-link">
      <span class="nav-link-icon"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="5.5" stroke="currentColor" stroke-width="1.3"/><path d="M7 4.5v3l1.5 1.5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg></span>
      Tokens
    </a>

    <p class="nav-section-title">Foundations</p>
    <a href="#" class="nav-link">
      <span class="nav-link-icon"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><rect x="1" y="3" width="12" height="8" rx="1.5" stroke="currentColor" stroke-width="1.3"/><circle cx="7" cy="7" r="2" stroke="currentColor" stroke-width="1.3"/></svg></span>
      Colour
    </a>
    <a href="#" class="nav-link">
      <span class="nav-link-icon"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 4h10M2 7h7M2 10h5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg></span>
      Typography
    </a>
    <a href="#" class="nav-link">
      <span class="nav-link-icon"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><rect x="1" y="1" width="12" height="12" rx="2" stroke="currentColor" stroke-width="1.3"/><path d="M4 1v12M10 1v12M1 7h12" stroke="currentColor" stroke-width="1.3"/></svg></span>
      Spacing
    </a>
    <a href="#" class="nav-link">
      <span class="nav-link-icon"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><rect x="1" y="1" width="12" height="12" rx="3" stroke="currentColor" stroke-width="1.3"/></svg></span>
      Shadows
    </a>

    <p class="nav-section-title">Atoms</p>
    <a href="#" class="nav-link">
      <span class="nav-link-icon"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><rect x="1" y="4" width="12" height="6" rx="1.5" stroke="currentColor" stroke-width="1.3"/></svg></span>
      Buttons
    </a>
    <a href="#" class="nav-link active">
      <span class="nav-link-icon"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><rect x="1" y="3" width="12" height="8" rx="1.5" stroke="currentColor" stroke-width="1.3"/><path d="M4 7h6" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg></span>
      Input Fields
    </a>
    <a href="#" class="nav-link">
      <span class="nav-link-icon"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M1 3h12M1 7h12M1 11h8" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg></span>
      Typography
    </a>
    <a href="#" class="nav-link">
      <span class="nav-link-icon"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><rect x="1" y="1" width="5" height="8" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="8" y="5" width="5" height="8" rx="1" stroke="currentColor" stroke-width="1.3"/></svg></span>
      Cards
    </a>
    <a href="#" class="nav-link">
      <span class="nav-link-icon"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M7 2v2M7 10v2M2 7h2M10 7h2" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/><circle cx="7" cy="7" r="3" stroke="currentColor" stroke-width="1.3"/></svg></span>
      Icons
    </a>

    <p class="nav-section-title">Patterns</p>
    <a href="#" class="nav-link">
      <span class="nav-link-icon"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M1 3h12M3 7h8M5 11h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg></span>
      Forms
    </a>
    <a href="#" class="nav-link">
      <span class="nav-link-icon"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="5" r="3" stroke="currentColor" stroke-width="1.3"/><path d="M1 13c0-2.761 2.686-5 6-5s6 2.239 6 5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg></span>
      Auth
    </a>
    <a href="#" class="nav-link">
      <span class="nav-link-icon"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M7 1l1.5 4H13l-3.5 2.5L11 12 7 9.5 3 12l1.5-4.5L1 5h4.5z" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/></svg></span>
      Empty states
    </a>
  </aside>

  <!-- ═══════════════════════════════════════════════════════════
       MAIN CONTENT
  ═══════════════════════════════════════════════════════════ -->
  <main class="main" id="top">

    <!-- PAGE HEADER -->
    <nav class="breadcrumb">
      <a href="#">Home</a>
      <span class="breadcrumb-sep">›</span>
      <a href="#">Atoms</a>
      <span class="breadcrumb-sep">›</span>
      <span>Input Fields</span>
    </nav>

    <p class="page-eyebrow">Atom · Input</p>
    <h1 class="page-title">Input Fields</h1>
    <p class="page-intro">
      A complete set of Apple-inspired form primitives — standard, glassmorphism,
      floating-label, OTP/PIN, compound, and more. All colours resolve from
      <code>colors.css</code> tokens. Zero hex literals in <code>input.css</code>.
    </p>

    <div class="callout callout-info">
      <span class="callout-icon">ℹ</span>
      <span>All styles live in <code>/Atom/input/input.css</code>.
        To change any colour, edit <code>colors.css</code> only — every component adapts automatically including dark mode.</span>
    </div>

    <hr class="page-rule" />

    <!-- ══════════════════════════
         01 · STANDARD INPUTS
    ══════════════════════════ -->
    <section id="standard">
      <div class="section-header">
        <span class="section-num">01</span>
        <p class="section-label">Standard Inputs</p>
      </div>
      <h2 class="section-title">Standard Inputs</h2>
      <p class="section-body">
        The base <code>.input</code> class covers every native input type.
        Add <code>.input-sm</code> or <code>.input-lg</code> for size variants.
      </p>

      <h3 class="section-h3" id="text-email">Text &amp; Email</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview col">
          <div class="field" style="max-width:420px">
            <label class="field-label" for="t1">Full name <span style="color:var(--primary)">*</span></label>
            <input class="input" id="t1" type="text" placeholder="e.g. Rahul Verma" />
            <span class="field-helper">As it appears on your government-issued ID.</span>
          </div>
          <div class="field" style="max-width:420px">
            <label class="field-label" for="t2">Email address</label>
            <input class="input" id="t2" type="email" placeholder="you@email.com" />
          </div>
          <div class="field" style="max-width:280px">
            <label class="field-label" for="t3">PIN code</label>
            <input class="input" id="t3" type="text" placeholder="400001" maxlength="6" />
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="field"&gt;
  &lt;label class="field-label" for="name"&gt;Full name&lt;/label&gt;
  &lt;input class="input" id="name" type="text" placeholder="e.g. Rahul Verma" /&gt;
  &lt;span class="field-helper"&gt;As it appears on your ID.&lt;/span&gt;
&lt;/div&gt;</pre>
      </div>

      <h3 class="section-h3" id="sizes">Sizes</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview col">
          <div class="field" style="max-width:460px">
            <label class="field-label">Small · <code>.input-sm</code> · 34 px</label>
            <input class="input input-sm" type="text" placeholder="Small input" />
          </div>
          <div class="field" style="max-width:460px">
            <label class="field-label">Medium · <code>.input</code> · 42 px (default)</label>
            <input class="input" type="text" placeholder="Medium input" />
          </div>
          <div class="field" style="max-width:460px">
            <label class="field-label">Large · <code>.input-lg</code> · 52 px</label>
            <input class="input input-lg" type="text" placeholder="Large input" />
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;input class="input input-sm" type="text" placeholder="Small" /&gt;
&lt;input class="input"          type="text" placeholder="Medium (default)" /&gt;
&lt;input class="input input-lg" type="text" placeholder="Large" /&gt;</pre>
      </div>

      <h3 class="section-h3" id="states">States</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview col">
          <div class="field" style="max-width:420px">
            <label class="field-label" for="s1">Default</label>
            <input class="input" id="s1" type="text" placeholder="Normal input" />
          </div>
          <div class="field" style="max-width:420px">
            <label class="field-label" for="s2">Error</label>
            <input class="input is-error" id="s2" type="email" value="bad@@email" aria-invalid="true" aria-describedby="s2err" />
            <span class="field-helper is-error" id="s2err">Please enter a valid email address.</span>
          </div>
          <div class="field" style="max-width:420px">
            <label class="field-label" for="s3">Success</label>
            <input class="input is-success" id="s3" type="email" value="rahul@holidayseva.com" />
            <span class="field-helper is-success">Looks good!</span>
          </div>
          <div class="field" style="max-width:420px">
            <label class="field-label" for="s4">Disabled</label>
            <input class="input" id="s4" type="text" placeholder="Cannot edit" disabled />
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;input class="input is-error"   type="email" aria-invalid="true" /&gt;
&lt;input class="input is-success" type="email" value="ok@email.com" /&gt;
&lt;input class="input" type="text" disabled /&gt;</pre>
      </div>

      <h3 class="section-h3" id="icons">With Icons</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview col">
          <div class="field" style="max-width:420px">
            <label class="field-label">Search — leading icon + pill</label>
            <div class="input-wrap">
              <span class="input-icon" aria-hidden="true">
                <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><circle cx="7" cy="7" r="4.5" stroke="currentColor" stroke-width="1.4"/><path d="M10.5 10.5l3 3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>
              </span>
              <input class="input input-search" type="search" placeholder="Search destinations…" />
            </div>
          </div>
          <div class="field" style="max-width:420px">
            <label class="field-label">Email — trailing icon</label>
            <div class="input-wrap icon-right">
              <input class="input" type="email" placeholder="your@email.com" />
              <span class="input-icon" aria-hidden="true">
                <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="3.5" width="13" height="9" rx="1.5" stroke="currentColor" stroke-width="1.3"/><path d="M1.5 5.5l6.5 4 6.5-4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
              </span>
            </div>
          </div>
          <div class="field" style="max-width:420px">
            <label class="field-label">Location — both icons</label>
            <div class="input-wrap icon-both">
              <span class="input-icon" aria-hidden="true">
                <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><path d="M8 1a5 5 0 015 5c0 3.5-5 9-5 9S3 9.5 3 6a5 5 0 015-5z" stroke="currentColor" stroke-width="1.3"/><circle cx="8" cy="6" r="1.5" stroke="currentColor" stroke-width="1.3"/></svg>
              </span>
              <input class="input" type="text" placeholder="City or destination" />
              <span class="input-icon input-icon-right" aria-hidden="true">
                <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;!-- Leading icon --&gt;
&lt;div class="input-wrap"&gt;
  &lt;span class="input-icon" aria-hidden="true"&gt;…svg…&lt;/span&gt;
  &lt;input class="input input-search" type="search" /&gt;
&lt;/div&gt;

&lt;!-- Trailing icon --&gt;
&lt;div class="input-wrap icon-right"&gt;
  &lt;input class="input" type="email" /&gt;
  &lt;span class="input-icon" aria-hidden="true"&gt;…svg…&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Both --&gt;
&lt;div class="input-wrap icon-both"&gt;
  &lt;span class="input-icon"&gt;…&lt;/span&gt;
  &lt;input class="input" /&gt;
  &lt;span class="input-icon input-icon-right"&gt;…&lt;/span&gt;
&lt;/div&gt;</pre>
      </div>

      <h3 class="section-h3" id="password">Password</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview">
          <div class="field" style="max-width:420px;width:100%">
            <label class="field-label" for="pw1">Password</label>
            <div class="input-wrap icon-right">
              <input class="input" id="pw1" type="password" placeholder="Min. 8 characters" />
              <button class="pw-toggle" type="button" aria-label="Show password" onclick="togglePw(this,'pw1')">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M1 9C1 9 4 3.5 9 3.5S17 9 17 9s-3 5.5-8 5.5S1 9 1 9z" stroke="currentColor" stroke-width="1.4"/><circle cx="9" cy="9" r="2.5" stroke="currentColor" stroke-width="1.4"/></svg>
              </button>
            </div>
            <span class="field-helper">Use letters, numbers and symbols.</span>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="input-wrap icon-right"&gt;
  &lt;input class="input" id="pw" type="password" /&gt;
  &lt;button class="pw-toggle" type="button"
          aria-label="Show password"
          onclick="togglePw(this,'pw')"&gt;…eye svg…&lt;/button&gt;
&lt;/div&gt;</pre>
      </div>

      <h3 class="section-h3" id="number">Number Stepper</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview" style="gap:24px;flex-wrap:wrap">
          <div class="field" style="max-width:200px">
            <label class="field-label" for="ng">Guests</label>
            <div class="number-wrap">
              <input class="input" id="ng" type="number" value="2" min="1" max="16" />
              <div class="number-stepper">
                <button class="stepper-btn" type="button" onclick="step('ng',1)" aria-label="Increase guests">
                  <svg width="11" height="11" viewBox="0 0 12 12" fill="none"><path d="M6 9V3M3 6l3-3 3 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <button class="stepper-btn" type="button" onclick="step('ng',-1)" aria-label="Decrease guests">
                  <svg width="11" height="11" viewBox="0 0 12 12" fill="none"><path d="M6 3v6M3 6l3 3 3-3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
              </div>
            </div>
          </div>
          <div class="field" style="max-width:200px">
            <label class="field-label" for="nn">Nights</label>
            <div class="number-wrap">
              <input class="input" id="nn" type="number" value="3" min="1" max="30" />
              <div class="number-stepper">
                <button class="stepper-btn" type="button" onclick="step('nn',1)" aria-label="Increase nights">
                  <svg width="11" height="11" viewBox="0 0 12 12" fill="none"><path d="M6 9V3M3 6l3-3 3 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <button class="stepper-btn" type="button" onclick="step('nn',-1)" aria-label="Decrease nights">
                  <svg width="11" height="11" viewBox="0 0 12 12" fill="none"><path d="M6 3v6M3 6l3 3 3-3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
              </div>
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="number-wrap"&gt;
  &lt;input class="input" id="guests" type="number" value="2" min="1" max="16" /&gt;
  &lt;div class="number-stepper"&gt;
    &lt;button class="stepper-btn" onclick="step('guests', 1)"&gt;▲&lt;/button&gt;
    &lt;button class="stepper-btn" onclick="step('guests',-1)"&gt;▼&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
      </div>

      <h3 class="section-h3" id="phone">Phone Number</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview">
          <div class="field" style="max-width:460px;width:100%">
            <label class="field-label" for="ph1">Phone number</label>
            <div class="phone-wrap">
              <select class="country-select" aria-label="Country code">
                <option value="+91">🇮🇳 +91</option>
                <option value="+1">🇺🇸 +1</option>
                <option value="+44">🇬🇧 +44</option>
                <option value="+971">🇦🇪 +971</option>
                <option value="+65">🇸🇬 +65</option>
              </select>
              <input class="input" id="ph1" type="tel" placeholder="98765 43210" />
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="phone-wrap"&gt;
  &lt;select class="country-select" aria-label="Country code"&gt;
    &lt;option value="+91"&gt;🇮🇳 +91&lt;/option&gt;
  &lt;/select&gt;
  &lt;input class="input" type="tel" placeholder="98765 43210" /&gt;
&lt;/div&gt;</pre>
      </div>

      <h3 class="section-h3" id="select">Select / Dropdown</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview" style="flex-wrap:wrap;gap:20px">
          <div class="field" style="flex:1;min-width:200px;max-width:300px">
            <label class="field-label" for="sel1">Property type</label>
            <div class="select-wrap">
              <select class="select-native" id="sel1">
                <option value="">Select a type…</option>
                <option>Apartment</option><option>Villa</option>
                <option>Cottage</option><option>Treehouse</option>
              </select>
              <span class="select-caret" aria-hidden="true">
                <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
            </div>
          </div>
          <div class="field" style="flex:1;min-width:200px;max-width:300px">
            <label class="field-label" for="sel2">Sort by</label>
            <div class="select-wrap">
              <select class="select-native" id="sel2">
                <option>Recommended</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
                <option>Top rated</option>
              </select>
              <span class="select-caret" aria-hidden="true">
                <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </span>
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="select-wrap"&gt;
  &lt;select class="select-native" id="type"&gt;
    &lt;option value=""&gt;Select a type…&lt;/option&gt;
  &lt;/select&gt;
  &lt;span class="select-caret" aria-hidden="true"&gt;…chevron svg…&lt;/span&gt;
&lt;/div&gt;</pre>
      </div>

      <h3 class="section-h3" id="datetime">Date &amp; Time</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview" style="flex-wrap:wrap;gap:16px">
          <div class="field" style="flex:1;min-width:170px"><label class="field-label" for="dt1">Check-in</label><input class="input" id="dt1" type="date" /></div>
          <div class="field" style="flex:1;min-width:170px"><label class="field-label" for="dt2">Check-out</label><input class="input" id="dt2" type="date" /></div>
          <div class="field" style="flex:1;min-width:160px"><label class="field-label" for="dt3">Arrival time</label><input class="input" id="dt3" type="time" value="14:00" /></div>
          <div class="field" style="flex:1;min-width:210px"><label class="field-label" for="dt4">Event datetime</label><input class="input" id="dt4" type="datetime-local" /></div>
        </div>
        <pre class="demo-code" hidden>&lt;input class="input" type="date" /&gt;
&lt;input class="input" type="time"           value="14:00" /&gt;
&lt;input class="input" type="datetime-local" /&gt;</pre>
      </div>

      <h3 class="section-h3" id="textarea">Textarea</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview">
          <div class="field" style="max-width:520px;width:100%">
            <label class="field-label" for="ta1">Bio</label>
            <textarea class="textarea" id="ta1" maxlength="300" rows="4"
                      placeholder="Tell guests a little about yourself…"
                      oninput="countChars(this,'tc1',300)"></textarea>
            <div class="textarea-footer">
              <span class="field-helper">Shown on your public host profile.</span>
              <span class="textarea-count" id="tc1">0 / 300</span>
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;textarea class="textarea" maxlength="300" rows="4"
          oninput="countChars(this,'count-id',300)"&gt;&lt;/textarea&gt;
&lt;div class="textarea-footer"&gt;
  &lt;span class="field-helper"&gt;Helper text&lt;/span&gt;
  &lt;span class="textarea-count" id="count-id"&gt;0 / 300&lt;/span&gt;
&lt;/div&gt;</pre>
      </div>

      <h3 class="section-h3" id="range">Range Slider</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview col">
          <div class="field" style="max-width:520px;width:100%">
            <label class="field-label">Price per night</label>
            <div class="range-wrap">
              <input type="range" id="rng1" min="0" max="20000" value="5000" step="500" style="--pct:25%" oninput="syncRange(this,'rv1','₹')" />
              <span class="range-val" id="rv1">₹5,000</span>
            </div>
          </div>
          <div class="field" style="max-width:520px;width:100%">
            <label class="field-label">Minimum rating</label>
            <div class="range-wrap">
              <input type="range" id="rng2" min="1" max="5" value="3" step="0.5" style="--pct:50%" oninput="syncRange(this,'rv2','','★')" />
              <span class="range-val" id="rv2">3★</span>
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="range-wrap"&gt;
  &lt;input type="range" id="price"
         min="0" max="20000" value="5000" step="500"
         style="--pct:25%"
         oninput="syncRange(this,'rv','₹')" /&gt;
  &lt;span class="range-val" id="rv"&gt;₹5,000&lt;/span&gt;
&lt;/div&gt;</pre>
      </div>

      <h3 class="section-h3" id="checkradio">Checkbox &amp; Radio</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview" style="flex-wrap:wrap;gap:32px">
          <div style="display:flex;flex-direction:column;gap:14px">
            <label class="checkbox-wrap">
              <input type="checkbox" checked />
              <span class="checkbox-label">Entire home<span class="checkbox-sub">You'll have the place to yourself.</span></span>
            </label>
            <label class="checkbox-wrap">
              <input type="checkbox" />
              <span class="checkbox-label">Private room</span>
            </label>
            <label class="checkbox-wrap">
              <input type="checkbox" disabled />
              <span class="checkbox-label" style="opacity:.5">Shared room (unavailable)</span>
            </label>
          </div>
          <div style="display:flex;flex-direction:column;gap:14px">
            <label class="radio-wrap"><input type="radio" name="sort" checked /><span class="checkbox-label">Recommended</span></label>
            <label class="radio-wrap"><input type="radio" name="sort" /><span class="checkbox-label">Price: Low to High</span></label>
            <label class="radio-wrap"><input type="radio" name="sort" /><span class="checkbox-label">Top rated</span></label>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;label class="checkbox-wrap"&gt;
  &lt;input type="checkbox" checked /&gt;
  &lt;span class="checkbox-label"&gt;Entire home&lt;/span&gt;
&lt;/label&gt;

&lt;label class="radio-wrap"&gt;
  &lt;input type="radio" name="sort" checked /&gt;
  &lt;span class="checkbox-label"&gt;Recommended&lt;/span&gt;
&lt;/label&gt;</pre>
      </div>

      <h3 class="section-h3" id="compound">Compound / Row Layout</h3>
      <div class="demo-card">
        <div class="demo-bar"><button class="demo-tab active" onclick="switchTab(this)">Preview</button></div>
        <div class="demo-preview col">
          <div class="field-row" style="max-width:580px">
            <div class="field"><label class="field-label" for="c1">First name</label><input class="input" id="c1" type="text" placeholder="Rahul" /></div>
            <div class="field"><label class="field-label" for="c2">Last name</label><input class="input" id="c2" type="text" placeholder="Verma" /></div>
          </div>
          <div class="field-row" style="max-width:580px">
            <div class="field" style="flex:2"><label class="field-label" for="c3">Street address</label><input class="input" id="c3" type="text" placeholder="12 Marine Drive" /></div>
            <div class="field" style="flex:1"><label class="field-label" for="c4">PIN code</label><input class="input" id="c4" type="text" placeholder="400001" maxlength="6" /></div>
          </div>
        </div>
      </div>

      <h3 class="section-h3" id="inputgroup">Input Groups</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview col">
          <div class="field" style="max-width:440px">
            <label class="field-label">Website</label>
            <div class="input-group">
              <span class="input-addon">https://</span>
              <input class="input" type="text" placeholder="yourdomain.com" />
            </div>
          </div>
          <div class="field" style="max-width:380px">
            <label class="field-label">Price per night</label>
            <div class="input-group">
              <span class="input-addon">₹</span>
              <input class="input" type="number" placeholder="0" />
              <span class="input-addon">/ night</span>
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="input-group"&gt;
  &lt;span class="input-addon"&gt;https://&lt;/span&gt;
  &lt;input class="input" type="text" placeholder="yourdomain.com" /&gt;
&lt;/div&gt;</pre>
      </div>

      <h3 class="section-h3" id="floating">Floating Label</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview" style="flex-wrap:wrap;gap:20px">
          <div class="float-field" style="max-width:270px;flex:1;min-width:200px">
            <input class="float-input" id="fl1" type="text" placeholder=" " />
            <label class="float-label" for="fl1">Full name</label>
          </div>
          <div class="float-field" style="max-width:270px;flex:1;min-width:200px">
            <input class="float-input" id="fl2" type="email" placeholder=" " />
            <label class="float-label" for="fl2">Email address</label>
          </div>
          <div class="float-field" style="max-width:270px;flex:1;min-width:200px">
            <input class="float-input" id="fl3" type="text" placeholder=" " value="Mumbai" />
            <label class="float-label" for="fl3">City (pre-filled)</label>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="float-field"&gt;
  &lt;!-- placeholder=" " (single space) is required --&gt;
  &lt;input class="float-input" id="name" type="text" placeholder=" " /&gt;
  &lt;label class="float-label" for="name"&gt;Full name&lt;/label&gt;
&lt;/div&gt;</pre>
      </div>

      <h3 class="section-h3" id="tags">Tag Input</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview">
          <div class="field" style="max-width:520px;width:100%">
            <label class="field-label">Amenities</label>
            <div class="tag-input-wrap" onclick="document.getElementById('ti').focus()">
              <span class="tag-pill">WiFi <button class="tag-pill-remove" onclick="removeTag(this)" aria-label="Remove WiFi">×</button></span>
              <span class="tag-pill">Pool <button class="tag-pill-remove" onclick="removeTag(this)" aria-label="Remove Pool">×</button></span>
              <span class="tag-pill">Parking <button class="tag-pill-remove" onclick="removeTag(this)" aria-label="Remove Parking">×</button></span>
              <input class="tag-input-inner" id="ti" type="text" placeholder="Add amenity…" onkeydown="handleTag(event)" />
            </div>
            <span class="field-helper">Press Enter to add · × to remove.</span>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="tag-input-wrap"&gt;
  &lt;span class="tag-pill"&gt;
    WiFi &lt;button class="tag-pill-remove" aria-label="Remove WiFi"&gt;×&lt;/button&gt;
  &lt;/span&gt;
  &lt;input class="tag-input-inner" type="text"
         placeholder="Add amenity…"
         onkeydown="handleTag(event)" /&gt;
&lt;/div&gt;</pre>
      </div>
    </section>

    <hr class="page-rule" />

    <!-- ══════════════════════════
         02 · OTP / PIN
    ══════════════════════════ -->
    <section id="otp">
      <div class="section-header">
        <span class="section-num">02</span>
        <p class="section-label">OTP / PIN</p>
      </div>
      <h2 class="section-title">OTP / PIN</h2>
      <p class="section-body">
        Squared single-character cells. Auto-advances on input, backtracks on delete,
        supports clipboard paste and arrow-key navigation. Classes:
        <code>.otp-input</code> · <code>.otp-input-lg</code> · <code>.otp-input-sm</code>
      </p>

      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="demo-preview center" style="gap:44px;padding:48px 32px">
          <div style="text-align:center">
            <p style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:var(--text-muted);margin-bottom:18px">Standard · 6-digit OTP</p>
            <div class="otp-wrap" id="otp6" role="group" aria-label="One-time passcode">
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 1" />
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 2" />
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 3" />
              <span class="otp-sep" aria-hidden="true">–</span>
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 4" />
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 5" />
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 6" />
            </div>
          </div>
          <div style="text-align:center">
            <p style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:var(--text-muted);margin-bottom:18px">Large · 4-digit PIN</p>
            <div class="otp-wrap" id="otp4" role="group" aria-label="PIN code">
              <input class="otp-input otp-input-lg" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 1" />
              <input class="otp-input otp-input-lg" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 2" />
              <input class="otp-input otp-input-lg" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 3" />
              <input class="otp-input otp-input-lg" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 4" />
            </div>
          </div>
          <div style="text-align:center">
            <p style="font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:var(--error);margin-bottom:18px">Error state</p>
            <div class="otp-wrap" role="group" aria-label="Invalid code">
              <input class="otp-input is-error" type="text" maxlength="1" value="5" readonly aria-label="Digit 1" />
              <input class="otp-input is-error" type="text" maxlength="1" value="3" readonly aria-label="Digit 2" />
              <input class="otp-input is-error" type="text" maxlength="1" value="9" readonly aria-label="Digit 3" />
              <input class="otp-input is-error" type="text" maxlength="1" value="1" readonly aria-label="Digit 4" />
            </div>
            <p style="font-size:12px;color:var(--error-text);margin-top:12px;font-weight:500">Incorrect code. Please try again.</p>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="otp-wrap" id="otp6" role="group" aria-label="One-time passcode"&gt;
  &lt;input class="otp-input" type="text" inputmode="numeric"
         maxlength="1" pattern="[0-9]" aria-label="Digit 1" /&gt;
  &lt;!-- × 5 more --&gt;
&lt;/div&gt;

&lt;script&gt;initOTP('otp6');&lt;/script&gt;</pre>
      </div>
    </section>

    <hr class="page-rule" />

    <!-- ══════════════════════════
         03 · GLASSMORPHISM
    ══════════════════════════ -->
    <section id="glass">
      <div class="section-header">
        <span class="section-num">03</span>
        <p class="section-label">Glassmorphism Set</p>
      </div>
      <h2 class="section-title">Glassmorphism Set</h2>
      <p class="section-body">
        Apple liquid-glass aesthetic — frosted backdrop blur, luminous border, layered depth shadow.
        Wrap in <code>.glass-panel</code> over a coloured background stage.
        Classes: <code>.input-glass</code> · <code>.textarea-glass</code> · <code>.select-glass</code>
      </p>

      <h3 class="section-h3" id="glass-card">Glass Sign-in Card</h3>
      <div class="demo-card">
        <div class="demo-bar">
          <button class="demo-tab active" onclick="switchTab(this)">Preview</button>
          <button class="demo-tab" onclick="switchTab(this)">HTML</button>
        </div>
        <div class="glass-stage">
          <div class="glass-panel" style="width:100%;max-width:440px">
            <div style="margin-bottom:24px">
              <p style="font-size:22px;font-weight:700;letter-spacing:-.022em;color:var(--text-primary);margin-bottom:4px">Welcome back</p>
              <p style="font-size:14px;color:var(--text-secondary)">Sign in to Holidayseva</p>
            </div>
            <div style="display:flex;flex-direction:column;gap:14px">
              <div class="glass-field">
                <label class="glass-label" for="g1">Email address</label>
                <div class="input-wrap">
                  <span class="input-icon" aria-hidden="true">
                    <svg width="15" height="15" viewBox="0 0 16 16" fill="none"><rect x="1.5" y="3.5" width="13" height="9" rx="1.5" stroke="currentColor" stroke-width="1.3"/><path d="M1.5 5.5l6.5 4 6.5-4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
                  </span>
                  <input class="input-glass" id="g1" type="email" placeholder="you@email.com" style="padding-left:38px" />
                </div>
              </div>
              <div class="glass-field">
                <label class="glass-label" for="g2">Password</label>
                <div class="input-wrap icon-right">
                  <input class="input-glass" id="g2" type="password" placeholder="Min. 8 characters" style="padding-right:44px" />
                  <button class="pw-toggle" type="button" aria-label="Show password" onclick="togglePw(this,'g2')">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M1 9C1 9 4 3.5 9 3.5S17 9 17 9s-3 5.5-8 5.5S1 9 1 9z" stroke="currentColor" stroke-width="1.4"/><circle cx="9" cy="9" r="2.5" stroke="currentColor" stroke-width="1.4"/></svg>
                  </button>
                </div>
              </div>
              <button type="button"
                style="height:44px;border-radius:var(--radius-md);background:var(--primary);color:#fff;font-size:14.5px;font-weight:600;font-family:var(--font-sans);border:none;cursor:pointer;transition:background .14s;letter-spacing:-.01em;margin-top:4px;box-shadow:0 4px 16px rgba(255,56,92,0.35)"
                onmouseover="this.style.background='var(--primary-hover)'"
                onmouseout="this.style.background='var(--primary)'">
                Continue with email
              </button>
              <p style="font-size:12.5px;text-align:center;color:var(--text-muted)">By continuing you agree to our <a href="#" style="color:var(--primary);text-decoration:none;font-weight:500">Terms</a></p>
            </div>
          </div>
        </div>
        <pre class="demo-code" hidden>&lt;div class="glass-panel"&gt;
  &lt;div class="glass-field"&gt;
    &lt;label class="glass-label" for="email"&gt;Email&lt;/label&gt;
    &lt;input class="input-glass" id="email" type="email" /&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
      </div>

      <h3 class="section-h3" id="glass-search">Glass Search Bar</h3>
      <div class="demo-card">
        <div class="demo-bar"><button class="demo-tab active" onclick="switchTab(this)">Preview</button></div>
        <div class="glass-stage" style="padding:56px 36px">
          <div class="input-wrap" style="max-width:560px;width:100%">
            <span class="input-icon" aria-hidden="true" style="left:18px">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="8" cy="8" r="5.5" stroke="currentColor" stroke-width="1.4"/><path d="M12.5 12.5l3.5 3.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>
            </span>
            <input class="input-glass-search" type="search" placeholder="Where do you want to go?" style="padding-left:52px;width:100%" />
          </div>
        </div>
      </div>

      <h3 class="section-h3" id="glass-otp">Glass OTP Verification</h3>
      <div class="demo-card">
        <div class="demo-bar"><button class="demo-tab active" onclick="switchTab(this)">Preview</button></div>
        <div class="glass-stage" style="padding:56px 36px">
          <div class="glass-panel" style="display:flex;flex-direction:column;align-items:center;gap:24px;min-width:340px">
            <div style="text-align:center">
              <p style="font-size:19px;font-weight:700;color:var(--text-primary);margin-bottom:6px">Verify your number</p>
              <p style="font-size:13px;color:var(--text-secondary)">6-digit code sent to +91 98765 43210</p>
            </div>
            <div class="otp-wrap otp-glass" id="gotp" role="group" aria-label="Verification code">
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 1" />
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 2" />
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 3" />
              <span class="otp-sep" aria-hidden="true">–</span>
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 4" />
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 5" />
              <input class="otp-input" type="text" inputmode="numeric" maxlength="1" pattern="[0-9]" aria-label="Digit 6" />
            </div>
            <button type="button"
              style="height:40px;padding:0 32px;border-radius:var(--radius-pill);background:var(--primary);color:#fff;font-size:14px;font-weight:600;font-family:var(--font-sans);border:none;cursor:pointer;box-shadow:0 4px 14px rgba(255,56,92,0.3)">
              Verify Code
            </button>
            <p style="font-size:12px;color:var(--text-muted)">Didn't receive? <a href="#" style="color:var(--primary);text-decoration:none;font-weight:500">Resend</a></p>
          </div>
        </div>
      </div>

      <h3 class="section-h3" id="glass-forms">Glass Textarea &amp; Select</h3>
      <div class="demo-card">
        <div class="demo-bar"><button class="demo-tab active" onclick="switchTab(this)">Preview</button></div>
        <div class="glass-stage">
          <div class="glass-panel" style="width:100%;max-width:480px;display:flex;flex-direction:column;gap:16px">
            <div class="glass-field">
              <label class="glass-label" for="gta">Property description</label>
              <textarea class="textarea-glass" id="gta" rows="3" placeholder="Describe your space…"></textarea>
            </div>
            <div class="glass-field">
              <label class="glass-label" for="gsel">Category</label>
              <div class="select-wrap">
                <select class="select-glass" id="gsel">
                  <option>Select a category…</option>
                  <option>Beachfront</option><option>Mountain retreat</option>
                  <option>City centre</option><option>Countryside</option>
                </select>
                <span class="select-caret" aria-hidden="true">
                  <svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M3 5l4 4 4-4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr class="page-rule" />

    <!-- ══════════════════════════
         04 · SPECIFICATIONS
    ══════════════════════════ -->
    <section id="specs">
      <div class="section-header">
        <span class="section-num">04</span>
        <p class="section-label">Specifications</p>
      </div>
      <h2 class="section-title">Specifications</h2>
      <div class="spec-grid">
        <div class="spec-item"><div class="spec-lbl">Height SM</div><div class="spec-val">34 px</div></div>
        <div class="spec-item"><div class="spec-lbl">Height MD (default)</div><div class="spec-val">42 px</div></div>
        <div class="spec-item"><div class="spec-lbl">Height LG</div><div class="spec-val">52 px</div></div>
        <div class="spec-item"><div class="spec-lbl">OTP cell standard</div><div class="spec-val">48 × 56 px</div></div>
        <div class="spec-item"><div class="spec-lbl">OTP cell large</div><div class="spec-val">62 × 70 px</div></div>
        <div class="spec-item"><div class="spec-lbl">Border radius MD</div><div class="spec-val">10 px</div></div>
        <div class="spec-item"><div class="spec-lbl">Border default</div><div class="spec-val"><code>--border</code></div></div>
        <div class="spec-item"><div class="spec-lbl">Border focus</div><div class="spec-val"><code>--border-focus</code></div></div>
        <div class="spec-item"><div class="spec-lbl">Focus ring (standard)</div><div class="spec-val">blue · 3 px</div></div>
        <div class="spec-item"><div class="spec-lbl">Focus ring (OTP/glass)</div><div class="spec-val">coral · 3 px</div></div>
        <div class="spec-item"><div class="spec-lbl">Surface</div><div class="spec-val"><code>--surface</code></div></div>
        <div class="spec-item"><div class="spec-lbl">Glass bg</div><div class="spec-val">rgba(255,255,255,0.5)</div></div>
      </div>
    </section>

    <hr class="page-rule" />

    <!-- ══════════════════════════
         05 · JS API
    ══════════════════════════ -->
    <section id="javascript">
      <div class="section-header">
        <span class="section-num">05</span>
        <p class="section-label">JavaScript API</p>
      </div>
      <h2 class="section-title">JavaScript API</h2>
      <p class="section-body">Lightweight helpers in <code>input.js</code> — no framework required.</p>
      <table class="prop-table">
        <thead>
          <tr>
            <th style="width:220px">Function</th>
            <th style="width:180px">Signature</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr><td><code>togglePw(btn, id)</code></td><td><code>(El, string)</code></td><td>Toggles password visibility; updates aria-label and eye icon.</td></tr>
          <tr><td><code>step(id, delta)</code></td><td><code>(string, number)</code></td><td>Increments / decrements number input, respects min/max.</td></tr>
          <tr><td><code>countChars(el, id, max)</code></td><td><code>(El, string, number)</code></td><td>Updates textarea character counter; adds .is-near / .is-max.</td></tr>
          <tr><td><code>syncRange(el, id, …)</code></td><td><code>(El, string, str?, str?)</code></td><td>Syncs CSS --pct track fill and value label for range inputs.</td></tr>
          <tr><td><code>initOTP(groupId)</code></td><td><code>(string)</code></td><td>Wires auto-advance, backspace, paste and arrow keys for an OTP group.</td></tr>
          <tr><td><code>handleTag(event)</code></td><td><code>(KeyboardEvent)</code></td><td>Creates a tag pill on Enter inside .tag-input-inner.</td></tr>
          <tr><td><code>removeTag(btn)</code></td><td><code>(El)</code></td><td>Removes the closest .tag-pill from the tag input wrap.</td></tr>
        </tbody>
      </table>
    </section>

    <hr class="page-rule" />

    <!-- ══════════════════════════
         06 · INTEGRATION
    ══════════════════════════ -->
    <section id="integration">
      <div class="section-header">
        <span class="section-num">06</span>
        <p class="section-label">Integration</p>
      </div>
      <h2 class="section-title">Integration</h2>
      <p class="section-body">Three file includes — tokens first, then component CSS, then JS.</p>
      <div class="demo-card">
        <pre class="demo-code">&lt;!-- ① Token layer — always first --&gt;
&lt;link rel="stylesheet" href="/colors.css" /&gt;

&lt;!-- ② Component CSS — zero hex literals inside --&gt;
&lt;link rel="stylesheet" href="/Atom/input/input.css" /&gt;

&lt;!-- ③ Helper JS (OTP, password, range, stepper, tags) --&gt;
&lt;script src="/Atom/input/input.js" defer&gt;&lt;/script&gt;</pre>
      </div>
      <div class="callout callout-warn">
        <span class="callout-icon">⚠</span>
        <span>Never write hex, <code>rgba()</code>, or <code>hsl()</code> literals in <code>input.css</code>.
          All colour decisions live exclusively in <code>colors.css</code>.</span>
      </div>
    </section>

    <hr class="page-rule" />

    <!-- ══════════════════════════
         07 · ACCESSIBILITY
    ══════════════════════════ -->
    <section id="accessibility">
      <div class="section-header">
        <span class="section-num">07</span>
        <p class="section-label">Accessibility</p>
      </div>
      <h2 class="section-title">Accessibility</h2>
      <ul class="a11y-list">
        <li class="a11y-item">
          <span class="a11y-check" aria-hidden="true"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5L8 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          <span>Every <code>&lt;input&gt;</code> must have an associated <code>&lt;label&gt;</code> via matching <code>for</code>/<code>id</code>. Never use <code>placeholder</code> as the only label.</span>
        </li>
        <li class="a11y-item">
          <span class="a11y-check" aria-hidden="true"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5L8 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          <span>Error states: set <code>aria-invalid="true"</code> on the input and <code>aria-describedby</code> pointing to the error message.</span>
        </li>
        <li class="a11y-item">
          <span class="a11y-check" aria-hidden="true"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5L8 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          <span>OTP groups: <code>role="group"</code> + <code>aria-label</code> on the wrapper; individual <code>aria-label="Digit N"</code> on each cell.</span>
        </li>
        <li class="a11y-item">
          <span class="a11y-check" aria-hidden="true"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5L8 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          <span>Focus rings must never be suppressed without a custom high-contrast replacement. Tokens meet 3:1 contrast ratio.</span>
        </li>
        <li class="a11y-item">
          <span class="a11y-check" aria-hidden="true"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5L8 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          <span>Password toggle: <code>aria-label</code> must reflect current action — "Show password" or "Hide password" — not a static label.</span>
        </li>
        <li class="a11y-item">
          <span class="a11y-check" aria-hidden="true"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5L8 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          <span>Range sliders: expose the current value via <code>aria-valuenow</code>, <code>aria-valuemin</code>, and <code>aria-valuemax</code>.</span>
        </li>
        <li class="a11y-item">
          <span class="a11y-check" aria-hidden="true"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5L8 3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          <span>All decorative SVGs must carry <code>aria-hidden="true"</code>.</span>
        </li>
      </ul>
    </section>

    <div style="height:80px"></div>
  </main>

  <!-- ═══════════════════════════════════════════════════════════
       RIGHT TOC SIDEBAR
  ═══════════════════════════════════════════════════════════ -->
  <aside class="sidebar-right">
    <p class="toc-title">On this page</p>
    <ul class="toc-list">
      <li><a class="toc-link active" href="#standard">Standard Inputs</a></li>
      <li><a class="toc-link toc-sub" href="#text-email">Text &amp; Email</a></li>
      <li><a class="toc-link toc-sub" href="#sizes">Sizes</a></li>
      <li><a class="toc-link toc-sub" href="#states">States</a></li>
      <li><a class="toc-link toc-sub" href="#icons">With Icons</a></li>
      <li><a class="toc-link toc-sub" href="#password">Password</a></li>
      <li><a class="toc-link toc-sub" href="#number">Number Stepper</a></li>
      <li><a class="toc-link toc-sub" href="#phone">Phone Number</a></li>
      <li><a class="toc-link toc-sub" href="#select">Select</a></li>
      <li><a class="toc-link toc-sub" href="#datetime">Date &amp; Time</a></li>
      <li><a class="toc-link toc-sub" href="#textarea">Textarea</a></li>
      <li><a class="toc-link toc-sub" href="#range">Range Slider</a></li>
      <li><a class="toc-link toc-sub" href="#checkradio">Checkbox &amp; Radio</a></li>
      <li><a class="toc-link toc-sub" href="#compound">Compound</a></li>
      <li><a class="toc-link toc-sub" href="#inputgroup">Input Groups</a></li>
      <li><a class="toc-link toc-sub" href="#floating">Floating Label</a></li>
      <li><a class="toc-link toc-sub" href="#tags">Tag Input</a></li>
      <li><a class="toc-link" href="#otp">OTP / PIN</a></li>
      <li><a class="toc-link" href="#glass">Glassmorphism</a></li>
      <li><a class="toc-link toc-sub" href="#glass-card">Sign-in Card</a></li>
      <li><a class="toc-link toc-sub" href="#glass-search">Search Bar</a></li>
      <li><a class="toc-link toc-sub" href="#glass-otp">OTP Glass</a></li>
      <li><a class="toc-link" href="#specs">Specifications</a></li>
      <li><a class="toc-link" href="#javascript">JavaScript API</a></li>
      <li><a class="toc-link" href="#integration">Integration</a></li>
      <li><a class="toc-link" href="#accessibility">Accessibility</a></li>
    </ul>
  </aside>

</div>

<!-- Scroll to top -->
<button class="scroll-top" id="scrollTop" onclick="window.scrollTo({top:0,behavior:'smooth'})" aria-label="Back to top">
  <svg width="15" height="15" viewBox="0 0 16 16" fill="none" aria-hidden="true">
    <path d="M8 12V4M4 7l4-4 4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
</button>

<script>
/* ── Tab switcher ── */
function switchTab(btn) {
  const card    = btn.closest('.demo-card');
  const tabs    = card.querySelectorAll('.demo-tab');
  const preview = card.querySelector('.demo-preview, .glass-stage');
  const code    = card.querySelector('.demo-code');
  const show    = btn.textContent.trim() === 'Preview';
  tabs.forEach(t => t.classList.remove('active'));
  btn.classList.add('active');
  if (preview) preview.hidden = !show;
  if (code)    code.hidden    =  show;
}

/* ── Password reveal ── */
function togglePw(btn, id) {
  const el   = document.getElementById(id);
  const show = el.type === 'password';
  el.type    = show ? 'text' : 'password';
  btn.setAttribute('aria-label', show ? 'Hide password' : 'Show password');
  btn.querySelector('svg').innerHTML = show
    ? `<path d="M1 9C1 9 4 3.5 9 3.5S17 9 17 9s-3 5.5-8 5.5S1 9 1 9z" stroke="currentColor" stroke-width="1.4"/>
       <path d="M3 3l12 12" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>`
    : `<path d="M1 9C1 9 4 3.5 9 3.5S17 9 17 9s-3 5.5-8 5.5S1 9 1 9z" stroke="currentColor" stroke-width="1.4"/>
       <circle cx="9" cy="9" r="2.5" stroke="currentColor" stroke-width="1.4"/>`;
}

/* ── Number stepper ── */
function step(id, delta) {
  const el  = document.getElementById(id);
  const min = el.min !== '' ? +el.min : -Infinity;
  const max = el.max !== '' ? +el.max :  Infinity;
  el.value  = Math.min(max, Math.max(min, (+el.value || 0) + delta));
}

/* ── Textarea counter ── */
function countChars(el, id, max) {
  const n   = el.value.length;
  const out = document.getElementById(id);
  if (!out) return;
  out.textContent = n + ' / ' + max;
  out.classList.toggle('is-near', n >= max * .8 && n < max);
  out.classList.toggle('is-max',  n >= max);
}

/* ── Range slider ── */
function syncRange(el, valId, pre, suf) {
  pre = pre || ''; suf = suf || '';
  const min = +el.min, max = +el.max, val = +el.value;
  const pct = ((val - min) / (max - min) * 100).toFixed(1);
  el.style.setProperty('--pct', pct + '%');
  const disp = Number.isInteger(val) ? val.toLocaleString('en-IN') : val;
  const out  = document.getElementById(valId);
  if (out) out.textContent = pre + disp + suf;
}

/* ── OTP auto-advance ── */
function initOTP(groupId) {
  const group  = document.getElementById(groupId);
  if (!group) return;
  const inputs = [...group.querySelectorAll('.otp-input')];
  inputs.forEach((inp, i) => {
    inp.addEventListener('input', e => {
      const v = e.target.value.replace(/\D/g, '');
      e.target.value = v.slice(-1);
      if (v) { inp.classList.add('is-filled'); if (i < inputs.length - 1) inputs[i + 1].focus(); }
      else     inp.classList.remove('is-filled');
    });
    inp.addEventListener('keydown', e => {
      if (e.key === 'Backspace' && !inp.value && i > 0) {
        inputs[i - 1].value = ''; inputs[i - 1].classList.remove('is-filled'); inputs[i - 1].focus();
      }
      if (e.key === 'ArrowLeft'  && i > 0)              inputs[i - 1].focus();
      if (e.key === 'ArrowRight' && i < inputs.length-1) inputs[i + 1].focus();
    });
    inp.addEventListener('paste', e => {
      e.preventDefault();
      const digits = (e.clipboardData.getData('text') || '').replace(/\D/g,'').split('');
      digits.forEach((d, j) => {
        if (inputs[i + j]) { inputs[i + j].value = d; inputs[i + j].classList.add('is-filled'); }
      });
      inputs[Math.min(i + digits.length, inputs.length - 1)]?.focus();
    });
  });
}

/* ── Tag input ── */
function handleTag(e) {
  if (e.key !== 'Enter') return;
  e.preventDefault();
  const inp = e.currentTarget;
  const val = inp.value.trim();
  if (!val) return;
  const pill = document.createElement('span');
  pill.className = 'tag-pill';
  pill.innerHTML = val + ' <button class="tag-pill-remove" onclick="removeTag(this)" aria-label="Remove ' + val + '">×</button>';
  inp.parentElement.insertBefore(pill, inp);
  inp.value = '';
}
function removeTag(btn) { btn.closest('.tag-pill').remove(); }

/* ── Init ── */
document.addEventListener('DOMContentLoaded', () => {
  initOTP('otp6'); initOTP('otp4'); initOTP('gotp');

  const scrollBtn = document.getElementById('scrollTop');
  window.addEventListener('scroll', () => {
    scrollBtn?.classList.toggle('show', scrollY > 400);
  });

  // TOC scroll spy
  const tocLinks = document.querySelectorAll('.toc-link');
  if (tocLinks.length) {
    const spy = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (!e.isIntersecting) return;
        tocLinks.forEach(a => a.classList.remove('active'));
        document.querySelector(`.toc-link[href="#${e.target.id}"]`)?.classList.add('active');
      });
    }, { rootMargin: '-8% 0px -78% 0px' });
    document.querySelectorAll('section[id], h3[id]').forEach(t => spy.observe(t));
  }
});
</script>
</body>
</html>