<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calendar / Date Picker — Holidayseva Design System</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://holidayseva.com/design-style.css">
  <link rel="stylesheet" href="https://holidayseva.com/left-sidebar.css">
  <link rel="stylesheet" href="https://holidayseva.com/right-sidebar.css">
<style>
/* ═══════════════════════════════════════════════════════
   DESIGN TOKENS
═══════════════════════════════════════════════════════ */
:root {
  --font-system: 'DM Sans', -apple-system, BlinkMacSystemFont, sans-serif;
  --font-display: 'DM Sans', -apple-system, sans-serif;
  --font-mono: 'DM Mono', 'SF Mono', monospace;

  --color-primary: #FF385C;
  --color-primary-alpha: rgba(255, 56, 92, 0.10);
  --color-secondary: #222222;
  --color-muted: #F7F7F7;
  --color-muted-dark: #DDDDDD;
  --color-border: #D2D2D7;
  --color-border-light: #EBEBEB;
  --color-text-primary: #1D1D1F;
  --color-text-secondary: #6E6E73;
  --color-surface: #FFFFFF;
  --color-bg: #FFFFFF;
  --color-bg-secondary: #F7F7F7;
  --color-code-bg: #1A1A2E;
  --color-code-text: #E2E8F0;
  --color-code-keyword: #FF6B9D;
  --color-code-string: #A8E6CF;
  --color-code-number: #FFD93D;
  --color-code-comment: #718096;
  --color-code-property: #81E6D9;
  --color-code-tag: #FC8181;
  --color-code-attr: #F6AD55;

  --weight-regular: 400;
  --weight-medium: 500;
  --weight-semibold: 600;
  --weight-bold: 700;

  --text-xs: 11px;
  --text-sm: 13px;
  --text-md: 15px;
  --text-lg: 17px;

  --tracking-tight: -0.02em;
  --tracking-wide: 0.06em;

  --radius-sm: 6px;
  --radius-md: 10px;
  --radius-lg: 14px;
  --radius-xl: 18px;

  --space-xs: 4px;
  --space-sm: 8px;
  --space-md: 16px;
  --space-lg: 24px;
  --space-xl: 32px;
  --space-2xl: 48px;

  --shadow-sm: 0 1px 3px rgba(0,0,0,0.08);
  --shadow-md: 0 4px 16px rgba(0,0,0,0.10);
  --shadow-modal: 0 8px 40px rgba(0,0,0,0.14), 0 2px 8px rgba(0,0,0,0.08);

  --transition-fast: 0.12s ease;
  --transition-base: 0.2s ease;

  --topbar-h: 52px;
  --subbar-h: 44px;
  --header-h: 96px;
}

/* ═══════════════════════════════════════════════════════
   RESET
═══════════════════════════════════════════════════════ */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { font-size: 16px; scroll-behavior: smooth; -webkit-text-size-adjust: 100%; }
body {
  font-family: var(--font-system);
  background: var(--color-bg);
  color: var(--color-text-primary);
  line-height: 1.6;
  -webkit-font-smoothing: antialiased;
  overflow-x: hidden;
}
a { text-decoration: none; }
button { font-family: inherit; cursor: pointer; }

/* ═══════════════════════════════════════════════════════
   HEADER — TIER 1 & TIER 2
═══════════════════════════════════════════════════════ */
.global-nav {
  position: fixed;
  top: 0; left: 0; right: 0;
  height: var(--topbar-h);
  background: rgba(255,255,255,0.92);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border-bottom: 1px solid var(--color-border-light);
  display: flex;
  align-items: center;
  padding: 0 24px;
  gap: 12px;
  z-index: 200;
  transition: transform 0.28s cubic-bezier(0.4,0,0.2,1);
}

.global-nav-brand {
  font-size: 15px;
  font-weight: 700;
  color: var(--color-text-primary);
  letter-spacing: -0.02em;
  flex-shrink: 0;
}

.global-nav-sep {
  width: 1px;
  height: 18px;
  background: var(--color-border);
  flex-shrink: 0;
}

.global-nav-links {
  display: flex;
  align-items: center;
  gap: 2px;
  list-style: none;
  flex: 1;
}

.global-nav-links a {
  font-size: 13px;
  font-weight: 500;
  color: var(--color-text-secondary);
  padding: 5px 11px;
  border-radius: 20px;
  transition: background var(--transition-fast), color var(--transition-fast);
}
.global-nav-links a:hover { background: var(--color-muted); color: var(--color-text-primary); }
.global-nav-links a.active { color: var(--color-text-primary); font-weight: 600; }

.global-nav-actions {
  display: flex;
  align-items: center;
  gap: 4px;
  margin-left: auto;
}

.global-nav-icon {
  width: 34px; height: 34px;
  border-radius: 50%;
  border: none;
  background: none;
  display: flex; align-items: center; justify-content: center;
  color: var(--color-text-secondary);
  transition: background var(--transition-fast), color var(--transition-fast);
}
.global-nav-icon:hover { background: var(--color-muted); color: var(--color-text-primary); }

.nav-hamburger { display: none; }

.section-nav {
  position: fixed;
  left: 0; right: 0;
  top: var(--topbar-h);
  height: var(--subbar-h);
  background: rgba(255,255,255,0.95);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  border-bottom: 1px solid var(--color-border-light);
  display: flex;
  align-items: center;
  padding: 0 24px;
  gap: 12px;
  z-index: 199;
  transition: top 0.28s cubic-bezier(0.4,0,0.2,1);
}

.section-nav-title {
  font-size: 12px;
  font-weight: 600;
  color: var(--color-text-secondary);
  letter-spacing: 0.02em;
}

.section-nav-divider {
  width: 1px;
  height: 14px;
  background: var(--color-border);
}

.section-nav-badge {
  font-size: 10px;
  font-weight: 600;
  color: var(--color-primary);
  background: var(--color-primary-alpha);
  padding: 2px 8px;
  border-radius: 20px;
  letter-spacing: 0.02em;
}

.section-nav-meta { margin-left: auto; }

.drawer-backdrop { display: none; }

/* ═══════════════════════════════════════════════════════
   PAGE LAYOUT
═══════════════════════════════════════════════════════ */
.layout {
  display: grid;
  grid-template-columns: 260px 1fr 220px;
  min-height: 100vh;
  padding-top: var(--header-h);
}

.sidebar-left {
  border-right: 1px solid var(--color-border-light);
  background: var(--color-bg);
  position: sticky;
  top: var(--header-h);
  height: calc(100vh - var(--header-h));
  overflow-y: auto;
  padding: 24px 0;
  scrollbar-width: thin;
  scrollbar-color: var(--color-border) transparent;
}
.sidebar-left::-webkit-scrollbar { width: 4px; }
.sidebar-left::-webkit-scrollbar-track { background: transparent; }
.sidebar-left::-webkit-scrollbar-thumb { background: var(--color-border); border-radius: 4px; }

.sidebar-right {
  border-left: 1px solid var(--color-border-light);
  background: var(--color-bg);
  position: sticky;
  top: var(--header-h);
  height: calc(100vh - var(--header-h));
  overflow-y: auto;
  padding: 24px 0;
}

.main-content {
  padding: 48px 56px;
  max-width: 900px;
  min-width: 0;
}

/* ═══════════════════════════════════════════════════════
   LEFT SIDEBAR
═══════════════════════════════════════════════════════ */
.sb-logo {
  padding: 0 16px 20px;
  display: flex;
  align-items: center;
  gap: 8px;
  border-bottom: 1px solid var(--color-border-light);
  margin-bottom: 16px;
}
.sb-logo-dot {
  width: 22px; height: 22px;
  border-radius: 6px;
  background: var(--color-primary);
}
.sb-logo-text { font-size: 13px; font-weight: 700; color: var(--color-text-primary); letter-spacing: -0.02em; }
.sb-logo-sub { font-size: 11px; color: var(--color-text-secondary); }

.sb-filter {
  display: flex;
  align-items: center;
  gap: 8px;
  margin: 0 16px 18px;
  padding: 7px 13px;
  background: #fff;
  border: 1px solid var(--color-border-light);
  border-radius: 10px;
  color: var(--color-text-primary);
}
.sb-filter svg { flex-shrink: 0; color: var(--color-text-secondary); }
.sb-filter input {
  border: none; background: none; outline: none;
  font-size: 13px; font-weight: 500; color: var(--color-text-primary);
  font-family: var(--font-system); width: 100%;
}
.sb-filter input::placeholder { color: #aeaeb2; }

.sb-nav { padding: 0 8px; }
.sb-group { margin-bottom: 2px; }

.sb-group-btn {
  width: 100%;
  display: flex;
  align-items: center;
  gap: 6px;
  padding: 6px 10px;
  background: none; border: none;
  font-family: var(--font-system);
  font-size: 13px; font-weight: 500;
  color: #86868b;
  text-align: left;
  border-radius: var(--radius-sm);
  transition: background var(--transition-fast), color var(--transition-fast);
}
.sb-group-btn:hover { background: var(--color-muted); color: var(--color-text-primary); }

.sb-count {
  margin-left: auto;
  font-size: 10px; font-weight: 500;
  color: #aeaeb2;
  background: var(--color-muted);
  border: 1px solid var(--color-border-light);
  border-radius: 10px;
  padding: 1px 6px; line-height: 1.5;
  flex-shrink: 0;
}

.sb-chevron {
  flex-shrink: 0;
  color: #aeaeb2;
  transition: transform 0.16s ease;
}
.sb-group.open > .sb-group-btn .sb-chevron { transform: rotate(90deg); }

.sb-items { list-style: none; padding: 0 0 6px; margin: 0; }
.sb-items[hidden] { display: none; }

.sb-link {
  display: flex;
  align-items: center;
  gap: 9px;
  font-size: 13px; font-weight: 400;
  color: #86868b;
  padding: 5px 10px 5px 26px;
  border-radius: var(--radius-sm);
  transition: background var(--transition-fast), color var(--transition-fast);
}
.sb-link:hover { background: var(--color-muted); color: var(--color-text-primary); }
.sb-link.active { font-weight: 600; color: var(--color-text-primary); background: var(--color-muted); }
.sb-link svg { flex-shrink: 0; color: #aeaeb2; }
.sb-link:hover svg, .sb-link.active svg { color: var(--color-text-primary); }

/* ═══════════════════════════════════════════════════════
   RIGHT SIDEBAR — TOC
═══════════════════════════════════════════════════════ */
.toc-wrap { padding: 24px 0 0 20px; }

.toc-platforms { margin-bottom: 22px; }
.toc-platforms-label {
  font-size: 11px; font-weight: 600;
  color: var(--color-text-primary);
  margin-bottom: 10px;
  letter-spacing: -0.01em;
}
.toc-platform-icons {
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--color-text-primary);
}
.toc-platform-icons svg { flex-shrink: 0; opacity: 0.75; }

.toc-list {
  list-style: none;
  border-left: 1px solid var(--color-border);
  padding: 0; margin: 0;
}
.toc-link {
  display: block;
  font-size: 12px; font-weight: 400;
  color: var(--color-text-secondary);
  padding: 4px 0 4px 14px;
  border-left: 2px solid transparent;
  margin-left: -1px;
  transition: color var(--transition-fast), border-color var(--transition-fast);
}
.toc-link:hover { color: var(--color-text-primary); }
.toc-link.active { color: var(--color-text-primary); font-weight: 600; border-left-color: var(--color-text-primary); }

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
.callout--info { background: rgba(0,122,255,0.07); border: 1px solid rgba(0,122,255,0.20); }
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
   CALENDAR COMPONENT
═══════════════════════════════════════════════════════ */
.calendar-wrapper {
  background: var(--color-surface);
  border-radius: var(--radius-xl);
  padding: 28px;
  box-shadow: var(--shadow-modal);
  max-width: 700px;
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 0;
}

.calendar-wrapper.calendar-inline {
  box-shadow: none;
  border: 1px solid var(--color-border);
}

/* Mode toggle */
.calendar-mode-toggle {
  display: flex;
  background: var(--color-muted);
  border-radius: 999px;
  padding: 3px;
  align-self: center;
  margin-bottom: 24px;
}
.calendar-mode-btn {
  padding: 8px 24px;
  border-radius: 999px; border: none;
  background: none;
  font-family: var(--font-system);
  font-size: 14px; font-weight: 500;
  color: var(--color-text-secondary);
  transition: all var(--transition-fast);
}
.calendar-mode-btn.active {
  background: var(--color-surface);
  color: var(--color-text-primary);
  font-weight: 600;
  box-shadow: 0 1px 6px rgba(0,0,0,0.12), 0 0 0 0.5px rgba(0,0,0,0.04);
}

/* Month grid */
.calendar-months {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 32px;
}

.calendar-month { min-width: 0; }

/* Month header */
.calendar-month__header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 16px;
}
.calendar-month__title {
  font-size: 15px; font-weight: 600;
  color: var(--color-text-primary);
  letter-spacing: -0.01em;
}

/* Nav buttons */
.calendar-nav-btn {
  width: 32px; height: 32px;
  border-radius: 50%; border: 1px solid var(--color-border);
  background: var(--color-surface);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-text-primary);
  transition: background var(--transition-fast), border-color var(--transition-fast), box-shadow var(--transition-fast);
  flex-shrink: 0;
}
.calendar-nav-btn:hover { background: var(--color-muted); border-color: var(--color-border); box-shadow: var(--shadow-sm); }
.calendar-nav-btn--hidden { visibility: hidden; pointer-events: none; }

/* Weekday labels */
.calendar-weekdays {
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  margin-bottom: 8px;
}
.calendar-weekday {
  text-align: center;
  font-size: 11px; font-weight: 600;
  color: var(--color-text-secondary);
  padding: 4px 0;
  letter-spacing: 0.02em;
}

/* Days grid */
.calendar-days {
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  gap: 1px 0;
}

/* Day cell */
.calendar-day {
  aspect-ratio: 1;
  display: flex; align-items: center; justify-content: center;
  font-size: 13px; font-weight: 400;
  color: var(--color-text-primary);
  background: none; border: none;
  border-radius: 50%;
  position: relative;
  transition: background var(--transition-fast), color var(--transition-fast);
  cursor: pointer;
  z-index: 1;
}
.calendar-day:hover:not(:disabled):not(.calendar-day--empty) {
  background: var(--color-muted);
}
.calendar-day--empty { cursor: default; }
.calendar-day--disabled {
  color: var(--color-muted-dark);
  text-decoration: line-through;
  cursor: not-allowed;
}

/* Today */
.calendar-day--today { font-weight: 700; }
.calendar-day--today::after {
  content: '';
  position: absolute;
  bottom: 4px; left: 50%;
  transform: translateX(-50%);
  width: 4px; height: 4px;
  background: var(--color-primary);
  border-radius: 50%;
}

/* Selected / endpoints */
.calendar-day--selected,
.calendar-day--range-start,
.calendar-day--range-end {
  background: var(--color-secondary) !important;
  color: #fff !important;
  font-weight: 600;
  border-radius: 50%;
  z-index: 2;
}
.calendar-day--selected::after,
.calendar-day--range-start::after,
.calendar-day--range-end::after { background: #fff !important; }

/* Range fill — half-circle approach */
.calendar-day--range-start {
  border-radius: 50%;
  position: relative;
}
.calendar-day--range-start::before {
  content: '';
  position: absolute;
  top: 0; right: 0;
  width: 50%; height: 100%;
  background: var(--color-primary-alpha);
  border-radius: 0;
  z-index: -1;
}

.calendar-day--range-end {
  border-radius: 50%;
  position: relative;
}
.calendar-day--range-end::before {
  content: '';
  position: absolute;
  top: 0; left: 0;
  width: 50%; height: 100%;
  background: var(--color-primary-alpha);
  border-radius: 0;
  z-index: -1;
}

.calendar-day--in-range {
  background: var(--color-primary-alpha) !important;
  color: var(--color-text-primary);
  border-radius: 0;
}
.calendar-day--in-range:hover { background: rgba(255,56,92,0.18) !important; }

.calendar-day--hover-range {
  background: var(--color-primary-alpha) !important;
  border-radius: 0;
}

/* Focus ring */
.calendar-day:focus-visible {
  outline: 2px solid var(--color-primary);
  outline-offset: 1px;
}

/* Footer */
.calendar-footer {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  padding-top: 20px;
  margin-top: 4px;
  border-top: 1px solid var(--color-border-light);
  align-items: center;
}

.flex-pill {
  padding: 7px 14px;
  border: 1.5px solid var(--color-border);
  border-radius: 999px;
  background: none;
  font-family: var(--font-system);
  font-size: 13px; font-weight: 400;
  color: var(--color-text-secondary);
  transition: all var(--transition-fast);
  white-space: nowrap;
}
.flex-pill:hover { border-color: var(--color-text-primary); color: var(--color-text-primary); }
.active-pill { border-color: var(--color-text-primary) !important; color: var(--color-text-primary) !important; font-weight: 600; }

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
.demo-day--default { color: var(--color-text-primary); }
.demo-day--hover { background: var(--color-muted); color: var(--color-text-primary); }
.demo-day--today { font-weight: 700; color: var(--color-text-primary); }
.demo-day--today::after {
  content: ''; position: absolute; bottom: 3px; left: 50%;
  transform: translateX(-50%);
  width: 4px; height: 4px; background: var(--color-primary); border-radius: 50%;
}
.demo-day--selected { background: var(--color-secondary); color: #fff; font-weight: 600; }
.demo-day--disabled { color: var(--color-muted-dark); text-decoration: line-through; }

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
.swatch-name { font-family: var(--font-mono); font-size: 12px; color: var(--color-primary); flex: 1; }
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
.kw { color: var(--color-code-keyword); }
.str { color: var(--color-code-string); }
.num { color: var(--color-code-number); }
.cmt { color: var(--color-code-comment); font-style: italic; }
.prop { color: var(--color-code-property); }
.tag { color: var(--color-code-tag); }
.attr { color: var(--color-code-attr); }

/* ═══════════════════════════════════════════════════════
   DO / DON'T GRID
═══════════════════════════════════════════════════════ */
.usage-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 24px; }
.usage-card { border-radius: var(--radius-lg); border: 1.5px solid transparent; overflow: hidden; }
.usage-card--do { border-color: rgba(52,199,89,0.35); }
.usage-card--dont { border-color: rgba(255,59,48,0.30); }
.usage-card__header { padding: 10px 16px; font-size: 13px; font-weight: 600; }
.usage-card--do .usage-card__header { background: rgba(52,199,89,0.10); color: #1A9E35; }
.usage-card--dont .usage-card__header { background: rgba(255,59,48,0.08); color: #C13515; }
.usage-card__body { padding: 14px 16px; background: var(--color-bg); font-size: 13px; color: var(--color-text-secondary); line-height: 1.6; }

/* ═══════════════════════════════════════════════════════
   ACCESSIBILITY
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
.step-item+.step-item::before {
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

/* ═══════════════════════════════════════════════════════
   RESPONSIVE
═══════════════════════════════════════════════════════ */
@media (max-width: 1200px) {
  .layout { grid-template-columns: 240px 1fr; }
  .sidebar-right { display: none; }
}
@media (max-width: 900px) {
  .calendar-months { grid-template-columns: 1fr; gap: 24px; }
  .anatomy-grid { grid-template-columns: 1fr; }
  .usage-grid { grid-template-columns: 1fr; }
}
@media (max-width: 700px) {
  .layout { grid-template-columns: 1fr; }
  .sidebar-left { display: none; }
  .main-content { padding: 32px 20px; }
  .global-nav-links { display: none; }
  .nav-hamburger { display: flex; align-items: center; justify-content: center; width: 34px; height: 34px; border: none; background: none; color: var(--color-text-primary); }
  .preview-card { padding: 20px 12px; }
}

/* ── Live region (screen reader only) ── */
.calendar-live-region {
  position: absolute; width: 1px; height: 1px;
  overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap;
}
</style>
</head>
<body>


<!-- ═══════════════════════════════════════════
     MAIN LAYOUT
═══════════════════════════════════════════ -->
<div class="layout">
<?php
$partials = __DIR__ . '/../../';
?>

<?php include $partials . 'header.php'; ?>
<?php include $partials . 'drawer_sidebar.php'; ?>

<div class="page-layout">

  <!-- ── Left sidebar (untouched) ── -->
  <aside class="sidebar-left" style="z-index:10000;">
  </aside>

  <!-- MAIN CONTENT -->
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

  <!-- RIGHT SIDEBAR -->
  <aside class="sidebar-right">
  <?php include $partials . '/right_sidebar.php'; ?>
  </aside>


</div><!-- /layout -->


<!-- ═══════════════════════════════════════════
     CALENDAR JS (embedded from calendar.js)
═══════════════════════════════════════════ -->
<script>
(function (global) {
  'use strict';

  const MONTH_NAMES = ['January','February','March','April','May','June','July','August','September','October','November','December'];
  const DAY_NAMES = ['S','M','T','W','T','F','S'];
  const DAY_NAMES_FULL = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];

  function parseDate(val) {
    if (!val) return null;
    if (val instanceof Date) { const d = new Date(val); d.setHours(0,0,0,0); return d; }
    if (typeof val === 'string') { const [y,m,d] = val.split('-').map(Number); return new Date(y,m-1,d); }
    return null;
  }
  function formatDate(d) {
    if (!d) return '';
    return `${d.getFullYear()}-${String(d.getMonth()+1).padStart(2,'0')}-${String(d.getDate()).padStart(2,'0')}`;
  }
  function formatReadable(d) {
    if (!d) return '';
    return `${DAY_NAMES_FULL[d.getDay()]}, ${MONTH_NAMES[d.getMonth()]} ${d.getDate()}, ${d.getFullYear()}`;
  }
  function sameDay(a,b) { return a&&b&&a.getFullYear()===b.getFullYear()&&a.getMonth()===b.getMonth()&&a.getDate()===b.getDate(); }
  function isBetween(d,a,b) { if(!a||!b) return false; const lo=a<b?a:b,hi=a<b?b:a; return d>lo&&d<hi; }
  function startOfDay(d) { const n=new Date(d); n.setHours(0,0,0,0); return n; }

  class HolidaysevaCalendar {
    constructor(selector, options={}) {
      this._el = typeof selector==='string' ? document.querySelector(selector) : selector;
      if (!this._el) { console.warn(`HolidaysevaCalendar: element "${selector}" not found.`); return; }
      const today = startOfDay(new Date());
      this._opts = Object.assign({
        minDate: today, maxDate: null, disabledDates: [],
        defaultStart: null, defaultEnd: null,
        months: 2, inline: false,
        onChange: null, onMonthChange: null, onSelect: null,
      }, options);
      this._opts.minDate = parseDate(this._opts.minDate) || today;
      this._opts.maxDate = parseDate(this._opts.maxDate);
      this._opts.disabledDates = (this._opts.disabledDates||[]).map(formatDate);
      this._selStart = parseDate(this._opts.defaultStart);
      this._selEnd = parseDate(this._opts.defaultEnd);
      this._hoverDate = null;
      this._viewYear = (this._selStart||today).getFullYear();
      this._viewMonth = (this._selStart||today).getMonth();
      this._mode = 'dates';
      this._flex = 'exact';
      if (this._opts.inline) this._el.classList.add('calendar-inline');
      this._boundHandlers = {};
      this._render();
      this._attachDelegatedEvents();
    }

    getRange() { return { start: this._selStart, end: this._selEnd }; }
    setRange(start, end) { this._selStart=parseDate(start); this._selEnd=parseDate(end); this._render(); }
    clear() { this._selStart=null; this._selEnd=null; this._hoverDate=null; this._render(); }
    goToMonth(year, month) { this._viewYear=year; this._viewMonth=month; this._render(); }
    disable(dates) {
      const arr = Array.isArray(dates)?dates:[dates];
      arr.forEach(d=>{ const s=formatDate(parseDate(d)); if(s&&!this._opts.disabledDates.includes(s)) this._opts.disabledDates.push(s); });
      this._render();
    }
    destroy() {
      this._el.innerHTML='';
      this._el.removeEventListener('click',this._boundHandlers.click);
      this._el.removeEventListener('mouseover',this._boundHandlers.mouseover);
      this._el.removeEventListener('mouseleave',this._boundHandlers.mouseleave);
      this._el.removeEventListener('keydown',this._boundHandlers.keydown);
    }

    _render() {
      const monthsGrid = this._el.querySelector('.calendar-months');
      if (!monthsGrid) { console.warn('HolidaysevaCalendar: .calendar-months not found'); return; }
      let html = '';
      for (let i=0; i<this._opts.months; i++) {
        let y=this._viewYear, m=this._viewMonth+i;
        if (m>11) { m-=12; y++; }
        html += this._renderMonth(y, m, i===0, i===this._opts.months-1);
      }
      monthsGrid.innerHTML = html;
      this._updateLiveRegion();
    }

    _renderMonth(year, month, isFirst, isLast) {
      const firstDayOfWeek = new Date(year,month,1).getDay();
      const daysInMonth = new Date(year,month+1,0).getDate();
      let html = `<div class="calendar-month" data-year="${year}" data-month="${month}">`;
      html += `<div class="calendar-month__header">`;
      html += isFirst
        ? `<button class="calendar-nav-btn" data-action="prev" aria-label="Previous month"><svg width="8" height="13" viewBox="0 0 8 13" fill="none"><path d="M7 1.5L2 6.5l5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></button>`
        : `<button class="calendar-nav-btn calendar-nav-btn--hidden" tabindex="-1" aria-hidden="true"></button>`;
      html += `<span class="calendar-month__title">${MONTH_NAMES[month]} ${year}</span>`;
      html += isLast
        ? `<button class="calendar-nav-btn" data-action="next" aria-label="Next month"><svg width="8" height="13" viewBox="0 0 8 13" fill="none"><path d="M1 1.5l5 5-5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></button>`
        : `<button class="calendar-nav-btn calendar-nav-btn--hidden" tabindex="-1" aria-hidden="true"></button>`;
      html += `</div>`;
      html += `<div class="calendar-weekdays" role="row">`;
      DAY_NAMES.forEach(d => { html += `<div class="calendar-weekday" role="columnheader">${d}</div>`; });
      html += `</div>`;
      html += `<div class="calendar-days" role="grid" aria-label="${MONTH_NAMES[month]} ${year}">`;
      for (let i=0; i<firstDayOfWeek; i++) {
        html += `<div class="calendar-day calendar-day--empty" role="gridcell" aria-hidden="true"></div>`;
      }
      for (let d=1; d<=daysInMonth; d++) {
        const date = new Date(year,month,d);
        const ds = formatDate(date);
        const isPast = date < this._opts.minDate && !sameDay(date, this._opts.minDate);
        const isMax = this._opts.maxDate && date > this._opts.maxDate;
        const isDis = this._opts.disabledDates.includes(ds);
        const isDisabled = isPast || isMax || isDis;
        const isToday = sameDay(date, startOfDay(new Date()));
        const isStart = sameDay(date, this._selStart);
        const isEnd = sameDay(date, this._selEnd);
        const inRange = isBetween(date, this._selStart, this._selEnd);
        const inHover = this._selStart && !this._selEnd && this._hoverDate && isBetween(date, this._selStart, this._hoverDate);
        const isHoverEnd = this._selStart && !this._selEnd && sameDay(date, this._hoverDate);

        let cls = 'calendar-day';
        if (isDisabled) cls += ' calendar-day--disabled';
        if (isToday) cls += ' calendar-day--today';
        if (isStart && this._selEnd) cls += ' calendar-day--range-start';
        else if (isEnd) cls += ' calendar-day--range-end';
        else if (isStart) cls += ' calendar-day--selected';
        if (inRange) cls += ' calendar-day--in-range';
        if (inHover && !inRange && !isStart && !isEnd) cls += ' calendar-day--hover-range';
        if (isHoverEnd && !isEnd) cls += ' calendar-day--selected';

        const ariaSelected = (isStart||isEnd) ? 'true' : 'false';
        const ariaLabel = `${formatReadable(date)}${isDisabled?', unavailable':''}${isStart?', check-in selected':''}${isEnd?', check-out selected':''}`;

        html += `<button class="${cls}" role="gridcell" data-date="${ds}" data-action="select"
          aria-label="${ariaLabel}" aria-selected="${ariaSelected}"
          ${isDisabled?'disabled aria-disabled="true"':''}
          tabindex="${isStart||(!this._selStart&&isToday)?'0':'-1'}">${d}</button>`;
      }
      html += `</div></div>`;
      return html;
    }

    _attachDelegatedEvents() {
      this._boundHandlers.click = (e) => {
        const btn = e.target.closest('[data-action]');
        if (!btn) return;
        const action = btn.dataset.action;
        if (action==='prev') this._navigate(-1);
        if (action==='next') this._navigate(1);
        if (action==='select') this._selectDate(btn.dataset.date);
        if (action==='mode') this._setMode(btn.dataset.mode, btn);
        if (action==='flex') this._setFlex(btn.dataset.flex, btn);
      };
      this._boundHandlers.mouseover = (e) => {
        const btn = e.target.closest('[data-action="select"]');
        if (!btn||btn.disabled) return;
        this._hoverDate = parseDate(btn.dataset.date);
        if (this._selStart && !this._selEnd) this._render();
      };
      this._boundHandlers.mouseleave = () => {
        if (this._hoverDate) { this._hoverDate=null; if(this._selStart&&!this._selEnd) this._render(); }
      };
      this._boundHandlers.keydown = (e) => {
        const active = document.activeElement;
        if (!active||!active.dataset.date) return;
        const cells = [...this._el.querySelectorAll('.calendar-day:not(.calendar-day--empty)')];
        const idx = cells.indexOf(active);
        const map = {ArrowRight:1,ArrowLeft:-1,ArrowDown:7,ArrowUp:-7};
        const delta = map[e.key];
        if (delta!==undefined) { e.preventDefault(); const next=cells[idx+delta]; if(next){next.setAttribute('tabindex','0');next.focus();active.setAttribute('tabindex','-1');} return; }
        if (e.key==='Escape') this.clear();
      };
      this._el.addEventListener('click', this._boundHandlers.click);
      this._el.addEventListener('mouseover', this._boundHandlers.mouseover);
      this._el.addEventListener('mouseleave', this._boundHandlers.mouseleave);
      this._el.addEventListener('keydown', this._boundHandlers.keydown);
    }

    _navigate(dir) {
      this._viewMonth += dir;
      if (this._viewMonth>11){this._viewMonth=0;this._viewYear++;}
      if (this._viewMonth<0){this._viewMonth=11;this._viewYear--;}
      if (this._opts.onMonthChange) this._opts.onMonthChange({year:this._viewYear,month:this._viewMonth});
      this._render();
    }

    _selectDate(ds) {
      const date = parseDate(ds);
      if (!date) return;
      if (!this._selStart||(this._selStart&&this._selEnd)) {
        this._selStart=date; this._selEnd=null; this._hoverDate=null;
      } else {
        if (date<this._selStart){this._selEnd=this._selStart;this._selStart=date;}
        else if (sameDay(date,this._selStart)){this._selStart=null;}
        else {this._selEnd=date;}
      }
      if (this._opts.onSelect) this._opts.onSelect(date);
      if (this._selStart&&this._selEnd&&this._opts.onChange) this._opts.onChange({start:this._selStart,end:this._selEnd});
      this._render();
    }

    _setMode(mode, btn) {
      this._mode = mode;
      this._el.querySelectorAll('[data-action="mode"]').forEach(b=>b.classList.toggle('active',b.dataset.mode===mode));
    }
    _setFlex(flex, clickedBtn) {
      this._flex = flex;
      this._el.querySelectorAll('[data-action="flex"]').forEach(b=>b.classList.remove('active-pill'));
      clickedBtn.classList.add('active-pill');
    }

    _updateLiveRegion() {
      let region = this._el.querySelector('.calendar-live-region');
      if (!region) {
        region = document.createElement('div');
        region.className = 'calendar-live-region';
        region.setAttribute('aria-live','polite');
        region.setAttribute('aria-atomic','true');
        this._el.appendChild(region);
      }
      if (this._selStart&&this._selEnd) {
        const nights = Math.round((this._selEnd-this._selStart)/86400000);
        region.textContent = `Selected: ${formatReadable(this._selStart)} to ${formatReadable(this._selEnd)}, ${nights} night${nights!==1?'s':''}.`;
      } else if (this._selStart) {
        region.textContent = `Check-in selected: ${formatReadable(this._selStart)}. Now select a check-out date.`;
      } else {
        region.textContent = 'No dates selected.';
      }
    }

    static autoInit() {
      document.querySelectorAll('.calendar-wrapper[data-calendar-config]').forEach(el => {
        let cfg = {};
        try { cfg = JSON.parse(el.dataset.calendarConfig); } catch(e){}
        new HolidaysevaCalendar(el, cfg);
      });
    }
  }

  global.HolidaysevaCalendar = HolidaysevaCalendar;
})(window);
</script>

<!-- ═══════════════════════════════════════════
     HEADER SCROLL BEHAVIOR + SIDEBAR + TOC
═══════════════════════════════════════════ -->
<script>
document.addEventListener('DOMContentLoaded', () => {

  // ── Header scroll ──────────────────────────
  const globalNav  = document.getElementById('globalNav');
  const sectionNav = document.getElementById('sectionNav');
  const TIER1_H = 52, TIER2_H = 44, FULL_H = 96;
  let lastY = 0, hidden = false;

  document.documentElement.style.setProperty('--header-h', FULL_H + 'px');
  sectionNav.style.top = TIER1_H + 'px';

  window.addEventListener('scroll', () => {
    const y = window.scrollY;
    const goingDown = y > lastY;
    if (goingDown && y > TIER1_H && !hidden) {
      globalNav.style.transform = 'translateY(-100%)';
      sectionNav.style.top = '0px';
      document.documentElement.style.setProperty('--header-h', TIER2_H + 'px');
      hidden = true;
    } else if (!goingDown && hidden && y <= 0) {
      globalNav.style.transform = 'translateY(0)';
      sectionNav.style.top = TIER1_H + 'px';
      document.documentElement.style.setProperty('--header-h', FULL_H + 'px');
      hidden = false;
    }
    lastY = y;
  }, { passive: true });

  // ── TOC spy ────────────────────────────────
  const tocLinks = document.querySelectorAll('.toc-link');
  const sections = document.querySelectorAll('section[id], div[id]');

  const spy = new IntersectionObserver((entries) => {
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

// ── Sidebar toggle ──────────────────────────
function toggleGroup(btn) {
  const grp  = btn.closest('.sb-group');
  const list = grp.querySelector('.sb-items');
  const isOpen = grp.classList.contains('open');
  grp.classList.toggle('open', !isOpen);
  if (isOpen) list.setAttribute('hidden', '');
  else        list.removeAttribute('hidden');
}

// ── Sidebar filter ──────────────────────────
function filterSidebar(input) {
  const term = input.value.toLowerCase().trim();
  const nav  = document.getElementById('sbNav');
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