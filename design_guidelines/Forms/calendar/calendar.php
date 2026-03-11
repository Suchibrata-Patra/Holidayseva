<?php
/**
 * calendar.php
 * Component Documentation — Date Picker / Calendar
 * Holidayseva Design System · developer.holidayseva.com
 */
?>< !DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>Calendar / Date Picker — Holidayseva Design System</title>< !-- ── Design System Tokens ── --><style>

/* ================================================================
       HOLIDAYSEVA — COLOR TOKENS (inline for self-contained demo)
       ================================================================ */
:root {
    --color-primary: #FF385C;
    --color-primary-light: #FF5A76;
    --color-primary-alpha: rgba(255, 56, 92, 0.12);
    --color-primary-border: rgba(255, 56, 92, 0.25);
    --color-secondary: #222222;
    --color-accent: #00A699;
    --color-text-primary: #1D1D1F;
    --color-text-secondary: #6E6E73;
    --color-text-muted: #B0B0B0;
    --color-text-disabled: #AEAEB2;
    --color-bg: #FFFFFF;
    --color-bg-secondary: #F5F5F7;
    --color-surface: #FFFFFF;
    --color-surface-raised: #F7F7F7;
    --color-border: #D2D2D7;
    --color-border-light: #E5E5EA;
    --color-border-dark: #AEAEB2;
    --color-muted: #EBEBEB;
    --color-muted-dark: #DDDDDD;
    --color-code-bg: #1C1C1E;
    --color-code-text: #F5F5F7;
    --color-code-keyword: #CF9FFF;
    --color-code-string: #A8FF78;
    --color-code-number: #FF9F43;
    --color-code-comment: #7F8C8D;
    --color-code-property: #6BCAFF;
    --color-code-tag: #FF6B9D;
    --color-code-attr: #FFD176;
    --color-success: #1A9E35;
    --color-success-bg: rgba(52, 199, 89, 0.10);
    --color-success-border: rgba(52, 199, 89, 0.30);
    --color-warning: #C45508;
    --color-warning-bg: rgba(255, 149, 0, 0.10);
    --color-warning-border: rgba(255, 149, 0, 0.30);

    --font-system: -apple-system, BlinkMacSystemFont, "SF Pro Text", "Helvetica Neue", Arial, sans-serif;
    --font-display: -apple-system, BlinkMacSystemFont, "SF Pro Display", "Helvetica Neue", Arial, sans-serif;
    --font-mono: "SF Mono", "Menlo", "Monaco", "Courier New", monospace;

    --radius-sm: 6px;
    --radius-md: 10px;
    --radius-lg: 14px;
    --radius-xl: 18px;
    --radius-full: 9999px;

    --space-xs: 4px;
    --space-sm: 8px;
    --space-md: 16px;
    --space-lg: 24px;
    --space-xl: 32px;
    --space-2xl: 48px;

    --text-xs: 11px;
    --text-sm: 13px;
    --text-md: 15px;
    --text-lg: 17px;
    --text-xl: 22px;
    --text-2xl: 28px;
    --text-3xl: 36px;

    --weight-regular: 400;
    --weight-medium: 500;
    --weight-semibold: 600;
    --weight-bold: 700;

    --tracking-tight: -0.022em;
    --tracking-wide: 0.04em;

    --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.06), 0 1px 2px rgba(0, 0, 0, 0.04);
    --shadow-md: 0 4px 12px rgba(0, 0, 0, 0.08), 0 2px 4px rgba(0, 0, 0, 0.04);
    --shadow-lg: 0 8px 24px rgba(0, 0, 0, 0.10), 0 3px 8px rgba(0, 0, 0, 0.06);
    --shadow-modal: 0 20px 60px rgba(0, 0, 0, 0.14), 0 8px 20px rgba(0, 0, 0, 0.08);

    --transition-fast: 120ms ease;
    --transition-base: 200ms ease;
}

/* ── Reset & Base ── */
*,
*::before,
*::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

html {
    font-size: 16px;
    -webkit-text-size-adjust: 100%;
}

body {
    font-family: var(--font-system);
    background: var(--color-bg);
    color: var(--color-text-primary);
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    display: flex;
    min-height: 100vh;
}

/* ── Layout shell ── */
.layout {
    display: grid;
    grid-template-columns: 260px 1fr 220px;
    width: 100%;
    min-height: 100vh;
}

.sidebar-left {
    border-right: 1px solid var(--color-border-light);
    background: var(--color-bg);
    position: sticky;
    top: 0;
    height: 100vh;
    overflow-y: auto;
    padding: 24px 0;
    scrollbar-width: thin;
}

.sidebar-right {
    border-left: 1px solid var(--color-border-light);
    background: var(--color-bg);
    position: sticky;
    top: 0;
    height: 100vh;
    overflow-y: auto;
    padding: 24px 0;
}

.main-content {
    padding: 48px 56px;
    max-width: 900px;
    min-width: 0;
}

@media (max-width: 1100px) {
    .layout {
        grid-template-columns: 240px 1fr;
    }

    .sidebar-right {
        display: none;
    }
}

@media (max-width: 700px) {
    .layout {
        grid-template-columns: 1fr;
    }

    .sidebar-left {
        display: none;
    }

    .main-content {
        padding: 32px 20px;
    }
}

/* ────────────────────────────────────────────
       TYPOGRAPHY
    ──────────────────────────────────────────── */
.page-eyebrow {
    font-size: var(--text-sm);
    font-weight: var(--weight-semibold);
    color: var(--color-primary);
    letter-spacing: var(--tracking-wide);
    text-transform: uppercase;
    margin-bottom: 8px;
}

.page-title {
    font-family: var(--font-display);
    font-size: var(--text-3xl);
    font-weight: var(--weight-bold);
    letter-spacing: var(--tracking-tight);
    color: var(--color-text-primary);
    line-height: 1.15;
    margin-bottom: 16px;
}

.page-lead {
    font-size: var(--text-lg);
    color: var(--color-text-secondary);
    line-height: 1.6;
    max-width: 620px;
    margin-bottom: 40px;
}

.section {
    margin-bottom: 56px;
}

.section-title {
    font-family: var(--font-display);
    font-size: var(--text-2xl);
    font-weight: var(--weight-semibold);
    letter-spacing: var(--tracking-tight);
    color: var(--color-text-primary);
    margin-bottom: 16px;
    padding-bottom: 12px;
    border-bottom: 1px solid var(--color-border-light);
}

.section-body {
    font-size: var(--text-md);
    color: var(--color-text-secondary);
    line-height: 1.7;
}

.section-body p+p {
    margin-top: 12px;
}

.section-subtitle {
    font-size: var(--text-md);
    font-weight: var(--weight-semibold);
    color: var(--color-text-primary);
    margin: 24px 0 10px;
}

/* ── Divider ── */
.page-divider {
    border: none;
    border-top: 1px solid var(--color-border-light);
    margin: 48px 0;
}

/* ────────────────────────────────────────────
       PREVIEW CARD
    ──────────────────────────────────────────── */
.preview-card {
    background: var(--color-bg-secondary);
    border: 1px solid var(--color-border-light);
    border-radius: var(--radius-xl);
    padding: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 32px;
    min-height: 280px;
}

/* ────────────────────────────────────────────
       CALENDAR COMPONENT (THE REAL THING)
    ──────────────────────────────────────────── */
.calendar-wrapper {
    background: var(--color-surface);
    border-radius: var(--radius-xl);
    padding: var(--space-lg);
    box-shadow: var(--shadow-modal);
    display: inline-flex;
    flex-direction: column;
    gap: var(--space-md);
    max-width: 660px;
    width: 100%;
}

/* Mode toggle */
.calendar-mode-toggle {
    display: flex;
    background: var(--color-muted);
    border-radius: var(--radius-full);
    padding: 3px;
    gap: 0;
    align-self: center;
}

.calendar-mode-btn {
    padding: 7px 24px;
    border-radius: var(--radius-full);
    border: none;
    background: none;
    font-family: var(--font-system);
    font-size: var(--text-sm);
    font-weight: var(--weight-medium);
    color: var(--color-text-secondary);
    cursor: pointer;
    transition: all var(--transition-fast);
}

.calendar-mode-btn.active {
    background: var(--color-surface);
    color: var(--color-text-primary);
    font-weight: var(--weight-semibold);
    box-shadow: var(--shadow-sm);
}

/* Dual months grid */
.calendar-months {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-2xl);
}

.calendar-month__header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: var(--space-md);
}

.calendar-month__title {
    font-size: var(--text-md);
    font-weight: var(--weight-semibold);
    letter-spacing: var(--tracking-tight);
}

.calendar-nav-btn {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    border: 1.5px solid var(--color-border);
    background: var(--color-surface);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all var(--transition-fast);
    color: var(--color-text-primary);
}

.calendar-nav-btn:hover {
    background: var(--color-muted);
}

.calendar-nav-btn--hidden {
    visibility: hidden;
}

.calendar-weekdays {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    text-align: center;
    margin-bottom: 4px;
}

.calendar-weekday {
    font-size: 11px;
    font-weight: var(--weight-semibold);
    color: var(--color-text-secondary);
    padding: 4px 0;
    letter-spacing: var(--tracking-wide);
}

.calendar-days {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 1px;
}

.calendar-day {
    aspect-ratio: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: var(--text-sm);
    cursor: pointer;
    border-radius: 50%;
    transition: all var(--transition-fast);
    position: relative;
    background: none;
    border: none;
    font-family: inherit;
    color: var(--color-text-primary);
}

.calendar-day:hover:not(:disabled):not(.selected):not(.range-start):not(.range-end) {
    background: var(--color-muted);
}

.calendar-day.empty {
    pointer-events: none;
}

.calendar-day.disabled {
    color: var(--color-muted-dark);
    cursor: not-allowed;
    text-decoration: line-through;
}

.calendar-day.today {
    font-weight: var(--weight-bold);
}

.calendar-day.today::after {
    content: '';
    position: absolute;
    bottom: 3px;
    left: 50%;
    transform: translateX(-50%);
    width: 4px;
    height: 4px;
    background: var(--color-primary);
    border-radius: 50%;
}

.calendar-day.selected {
    background: var(--color-secondary) !important;
    color: #fff !important;
    border-radius: 50% !important;
    font-weight: var(--weight-semibold);
}

.calendar-day.today.selected::after {
    background: #fff;
}

.calendar-day.in-range {
    background: var(--color-primary-alpha);
    border-radius: 0;
}

.calendar-day.range-start {
    background: var(--color-secondary);
    color: #fff;
    border-radius: 50% 0 0 50%;
}

.calendar-day.range-end {
    background: var(--color-secondary);
    color: #fff;
    border-radius: 0 50% 50% 0;
}

.calendar-day.hover-range {
    background: var(--color-muted);
    border-radius: 0;
}

/* Footer */
.calendar-footer {
    display: flex;
    align-items: center;
    gap: 8px;
    padding-top: var(--space-md);
    border-top: 1px solid var(--color-border-light);
    flex-wrap: wrap;
}

.flex-pill {
    padding: 6px 14px;
    border: 1.5px solid var(--color-border);
    border-radius: var(--radius-full);
    background: none;
    font-family: var(--font-system);
    font-size: var(--text-sm);
    color: var(--color-text-secondary);
    cursor: pointer;
    transition: all var(--transition-fast);
}

.flex-pill:hover {
    border-color: var(--color-border-dark);
    color: var(--color-text-primary);
}

.flex-pill.active-pill {
    border-color: var(--color-text-primary);
    color: var(--color-text-primary);
    font-weight: var(--weight-semibold);
}

/* ────────────────────────────────────────────
       ANATOMY DIAGRAM
    ──────────────────────────────────────────── */
.anatomy-diagram {
    position: relative;
    background: var(--color-bg-secondary);
    border: 1px solid var(--color-border-light);
    border-radius: var(--radius-xl);
    padding: 40px;
    margin-bottom: 24px;
}

.anatomy-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-bottom: 12px;
}

.anatomy-number {
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background: var(--color-primary);
    color: #fff;
    font-size: 11px;
    font-weight: var(--weight-bold);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    margin-top: 1px;
}

.anatomy-label {
    font-size: var(--text-sm);
    font-weight: var(--weight-semibold);
    color: var(--color-text-primary);
}

.anatomy-desc {
    font-size: var(--text-sm);
    color: var(--color-text-secondary);
    margin-top: 2px;
}

/* ── Inline annotated preview ── */
.annotated-wrapper {
    position: relative;
    display: inline-flex;
    flex-direction: column;
    width: 100%;
}

.annotation-line {
    position: absolute;
    border: 1.5px dashed var(--color-primary);
    border-radius: 4px;
    pointer-events: none;
}

.annotation-dot {
    width: 18px;
    height: 18px;
    border-radius: 50%;
    background: var(--color-primary);
    color: #fff;
    font-size: 10px;
    font-weight: var(--weight-bold);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

/* ────────────────────────────────────────────
       SPECS TABLE
    ──────────────────────────────────────────── */
.spec-table {
    width: 100%;
    border-collapse: collapse;
    font-size: var(--text-sm);
    margin-bottom: 24px;
}

.spec-table th {
    text-align: left;
    font-weight: var(--weight-semibold);
    color: var(--color-text-primary);
    padding: 10px 14px;
    background: var(--color-bg-secondary);
    border-bottom: 1px solid var(--color-border-light);
    font-size: var(--text-xs);
    letter-spacing: var(--tracking-wide);
    text-transform: uppercase;
}

.spec-table td {
    padding: 10px 14px;
    border-bottom: 1px solid var(--color-border-light);
    color: var(--color-text-secondary);
    vertical-align: top;
}

.spec-table tr:last-child td {
    border-bottom: none;
}

.spec-table td:first-child {
    font-weight: var(--weight-medium);
    color: var(--color-text-primary);
    font-family: var(--font-mono);
    font-size: 12px;
}

.token-val {
    font-family: var(--font-mono);
    font-size: 12px;
    background: var(--color-muted);
    padding: 2px 6px;
    border-radius: 4px;
    color: var(--color-primary);
}

/* ────────────────────────────────────────────
       CODE BLOCKS
    ──────────────────────────────────────────── */
.code-block {
    background: var(--color-code-bg);
    border-radius: var(--radius-lg);
    padding: 24px;
    margin-bottom: 24px;
    overflow-x: auto;
    position: relative;
}

.code-block pre {
    font-family: var(--font-mono);
    font-size: 13px;
    line-height: 1.7;
    color: var(--color-code-text);
    white-space: pre;
}

.code-label {
    font-size: 11px;
    font-weight: var(--weight-semibold);
    color: #8E8E93;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    margin-bottom: 10px;
}

.copy-btn {
    position: absolute;
    top: 14px;
    right: 14px;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 6px;
    padding: 5px 10px;
    font-size: 11px;
    font-family: var(--font-system);
    color: #8E8E93;
    cursor: pointer;
    transition: all var(--transition-fast);
}

.copy-btn:hover {
    background: rgba(255, 255, 255, 0.15);
    color: #fff;
}

/* Syntax highlighting helpers */
.kw {
    color: var(--color-code-keyword);
}

.str {
    color: var(--color-code-string);
}

.num {
    color: var(--color-code-number);
}

.cmt {
    color: var(--color-code-comment);
    font-style: italic;
}

.prop {
    color: var(--color-code-property);
}

.tag {
    color: var(--color-code-tag);
}

.attr {
    color: var(--color-code-attr);
}

/* ────────────────────────────────────────────
       PROPS / JS API TABLE
    ──────────────────────────────────────────── */
.props-table {
    width: 100%;
    border-collapse: collapse;
    font-size: var(--text-sm);
    margin-bottom: 24px;
}

.props-table th {
    text-align: left;
    font-weight: var(--weight-semibold);
    color: var(--color-text-primary);
    padding: 10px 14px;
    background: var(--color-bg-secondary);
    border-bottom: 2px solid var(--color-border);
    font-size: var(--text-xs);
    letter-spacing: var(--tracking-wide);
    text-transform: uppercase;
}

.props-table td {
    padding: 10px 14px;
    border-bottom: 1px solid var(--color-border-light);
    color: var(--color-text-secondary);
    vertical-align: top;
}

.props-table tr:last-child td {
    border-bottom: none;
}

.props-table td code {
    font-family: var(--font-mono);
    font-size: 12px;
    background: var(--color-muted);
    padding: 2px 5px;
    border-radius: 4px;
    color: var(--color-text-primary);
}

.type-badge {
    display: inline-block;
    font-family: var(--font-mono);
    font-size: 11px;
    padding: 2px 6px;
    border-radius: 4px;
    background: var(--color-primary-alpha);
    color: var(--color-primary);
    font-weight: var(--weight-medium);
}

.required-badge {
    display: inline-block;
    font-size: 10px;
    font-weight: var(--weight-semibold);
    color: #C45508;
    background: rgba(255, 149, 0, 0.10);
    padding: 1px 5px;
    border-radius: 4px;
    letter-spacing: 0.02em;
    margin-left: 4px;
}

/* ────────────────────────────────────────────
       USAGE / DO — DON'T
    ──────────────────────────────────────────── */
.usage-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-bottom: 24px;
}

.usage-card {
    border-radius: var(--radius-lg);
    border: 1.5px solid transparent;
    overflow: hidden;
}

.usage-card--do {
    border-color: rgba(52, 199, 89, 0.35);
}

.usage-card--dont {
    border-color: rgba(255, 59, 48, 0.30);
}

.usage-card__header {
    padding: 10px 16px;
    font-size: var(--text-sm);
    font-weight: var(--weight-semibold);
}

.usage-card--do .usage-card__header {
    background: var(--color-success-bg);
    color: var(--color-success);
}

.usage-card--dont .usage-card__header {
    background: rgba(255, 59, 48, 0.08);
    color: #C13515;
}

.usage-card__body {
    padding: 16px;
    background: var(--color-bg);
    font-size: var(--text-sm);
    color: var(--color-text-secondary);
    line-height: 1.6;
}

/* ────────────────────────────────────────────
       ACCESSIBILITY CHECKLIST
    ──────────────────────────────────────────── */
.a11y-list {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.a11y-item {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    font-size: var(--text-sm);
    color: var(--color-text-secondary);
}

.a11y-icon {
    width: 18px;
    height: 18px;
    border-radius: 50%;
    background: var(--color-success-bg);
    border: 1.5px solid var(--color-success-border);
    color: var(--color-success);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    margin-top: 1px;
}

/* ────────────────────────────────────────────
       INTEGRATION STEPS
    ──────────────────────────────────────────── */
.step-list {
    counter-reset: steps;
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 0;
}

.step-item {
    display: flex;
    gap: 16px;
    position: relative;
}

.step-item+.step-item::before {
    content: '';
    position: absolute;
    left: 14px;
    top: -16px;
    width: 2px;
    height: 16px;
    background: var(--color-border-light);
}

.step-number {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: var(--color-text-primary);
    color: #fff;
    font-size: var(--text-sm);
    font-weight: var(--weight-bold);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    counter-increment: steps;
    margin-top: 2px;
}

.step-content {
    padding-bottom: 28px;
}

.step-title {
    font-weight: var(--weight-semibold);
    color: var(--color-text-primary);
    font-size: var(--text-md);
    margin-bottom: 6px;
}

.step-desc {
    font-size: var(--text-sm);
    color: var(--color-text-secondary);
    line-height: 1.6;
}

/* ────────────────────────────────────────────
       SIDEBAR STYLES (replicated from PHP files)
    ──────────────────────────────────────────── */
.sb-filter {
    display: flex;
    align-items: center;
    gap: 8px;
    margin: 0 16px 18px;
    padding: 7px 13px;
    background: #ffffff;
    border: 1px solid #e5e5ea;
    border-radius: 10px;
    color: #000;
}

.sb-filter input {
    border: none;
    background: none;
    outline: none;
    font-size: 15px;
    font-weight: 500;
    color: #1d1d1f;
    font-family: var(--font-system);
    width: 100%;
}

.sb-filter input::placeholder {
    color: #aeaeb2;
}

.sb-nav {
    padding: 0 8px;
}

.sb-group {
    margin-bottom: 2px;
}

.sb-group-btn {
    width: 100%;
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 6px 10px;
    background: none;
    border: none;
    cursor: pointer;
    font-family: var(--font-system);
    font-size: 15px;
    font-weight: 500;
    color: #86868b;
    text-align: left;
    border-radius: 6px;
    transition: background 0.1s, color 0.1s;
    -webkit-font-smoothing: antialiased;
}

.sb-group-btn:hover {
    background: #f2f2f7;
    color: #1d1d1f;
}

.sb-count {
    margin-left: auto;
    font-size: 11px;
    font-weight: 500;
    color: #aeaeb2;
    background: #f2f2f7;
    border: 1px solid #e5e5ea;
    border-radius: 10px;
    padding: 1px 6px;
    line-height: 1.5;
    flex-shrink: 0;
}

.sb-chevron {
    flex-shrink: 0;
    color: #aeaeb2;
    transition: transform 0.16s ease;
}

.sb-group.open>.sb-group-btn .sb-chevron {
    transform: rotate(90deg);
}

.sb-items {
    list-style: none;
    padding: 0 0 6px 0;
    margin: 0;
}

.sb-items[hidden] {
    display: none;
}

.sb-link {
    display: flex;
    align-items: flex-start;
    gap: 9px;
    font-size: 15px;
    font-weight: 400;
    color: #86868b;
    text-decoration: none;
    padding: 5px 10px 5px 26px;
    border-radius: 6px;
    transition: background 0.1s, color 0.1s;
    -webkit-font-smoothing: antialiased;
}

.sb-link:hover {
    background: #f2f2f7;
    color: #1d1d1f;
}

.sb-link.active {
    font-weight: 600;
    color: #1d1d1f;
}

/* ── TOC (right sidebar) ── */
.toc-wrap {
    padding: 24px 0 0 20px;
}

.toc-platforms {
    margin-bottom: 22px;
}

.toc-platforms-label {
    font-size: 12px;
    font-weight: 600;
    color: #1d1d1f;
    margin-bottom: 10px;
    letter-spacing: -0.01em;
    -webkit-font-smoothing: antialiased;
}

.toc-platform-icons {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #1d1d1f;
}

.toc-platform-icons svg {
    flex-shrink: 0;
    opacity: 0.75;
}

.toc-list {
    list-style: none;
    border-left: 1px solid #e0e0e5;
    padding: 0;
    margin: 0;
}

.toc-link {
    display: block;
    font-size: 12.5px;
    font-weight: 400;
    color: #6e6e73;
    text-decoration: none;
    padding: 4px 0 4px 14px;
    border-left: 2px solid transparent;
    margin-left: -1px;
    transition: color 0.1s, border-color 0.1s;
    line-height: 1.5;
    -webkit-font-smoothing: antialiased;
    letter-spacing: -0.005em;
}

.toc-link:hover {
    color: #1d1d1f;
}

.toc-link.active {
    color: #1d1d1f;
    font-weight: 600;
    border-left-color: #1d1d1f;
}

/* ── Inline warning/note callouts ── */
.callout {
    padding: 14px 18px;
    border-radius: var(--radius-md);
    font-size: var(--text-sm);
    line-height: 1.6;
    margin-bottom: 20px;
    display: flex;
    gap: 10px;
    align-items: flex-start;
}

.callout--info {
    background: rgba(0, 122, 255, 0.07);
    border: 1px solid rgba(0, 122, 255, 0.20);
}

.callout--warning {
    background: var(--color-warning-bg);
    border: 1px solid var(--color-warning-border);
}

.callout--success {
    background: var(--color-success-bg);
    border: 1px solid var(--color-success-border);
}

.callout__icon {
    flex-shrink: 0;
    margin-top: 1px;
}

.callout__body {
    color: var(--color-text-secondary);
}

.callout__body strong {
    color: var(--color-text-primary);
}

/* ── Sidebar logo area ── */
.sb-logo {
    padding: 0 16px 20px;
    display: flex;
    align-items: center;
    gap: 8px;
    border-bottom: 1px solid var(--color-border-light);
    margin-bottom: 16px;
}

.sb-logo-dot {
    width: 22px;
    height: 22px;
    border-radius: 6px;
    background: var(--color-primary);
}

.sb-logo-text {
    font-size: 13px;
    font-weight: 700;
    color: var(--color-text-primary);
    letter-spacing: -0.02em;
}

.sb-logo-sub {
    font-size: 11px;
    font-weight: 400;
    color: var(--color-text-secondary);
}

/* ── Color swatches for token docs ── */
.swatch-row {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 8px 0;
    border-bottom: 1px solid var(--color-border-light);
    font-size: var(--text-sm);
}

.swatch {
    width: 28px;
    height: 28px;
    border-radius: 6px;
    border: 1px solid rgba(0, 0, 0, 0.08);
    flex-shrink: 0;
}

.swatch-name {
    font-family: var(--font-mono);
    font-size: 12px;
    color: var(--color-primary);
    flex: 1;
}

.swatch-value {
    font-family: var(--font-mono);
    font-size: 12px;
    color: var(--color-text-secondary);
}

</style></head><body><div class="layout">< !-- ═══════════════════════════════════════ LEFT SIDEBAR ═══════════════════════════════════════ --><aside class="sidebar-left"><div class="sb-logo"><div class="sb-logo-dot"></div><div><div class="sb-logo-text">Holidayseva</div><div class="sb-logo-sub">Design System</div></div></div><div class="sb-filter"><svg width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M2 4h12M4 8h8M6 12h4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" /></svg><input type="text" placeholder="Filter" class="sb-filter-input" oninput="filterSidebar(this)" /></div><nav class="sb-nav" id="sbNav">< !-- Getting Started --><div class="sb-group"><button class="sb-group-btn" onclick="toggleGroup(this)"><svg class="sb-chevron" width="9" height="9" viewBox="0 0 10 10" fill="none"><path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg>Getting started </button><ul class="sb-items" hidden><li><a href="#" class="sb-link">Introduction</a></li><li><a href="#" class="sb-link">Overview</a></li><li><a href="#" class="sb-link">What's new</a></li>
 </ul></div>< !-- Foundations --><div class="sb-group"><button class="sb-group-btn" onclick="toggleGroup(this)"><svg class="sb-chevron" width="9" height="9" viewBox="0 0 10 10" fill="none"><path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg>Foundations </button><ul class="sb-items" hidden><li><a href="#" class="sb-link">Colour</a></li><li><a href="#" class="sb-link">Typography</a></li><li><a href="#" class="sb-link">Spacing</a></li><li><a href="#" class="sb-link">Icons</a></li><li><a href="#" class="sb-link">Layout</a></li></ul></div>< !-- Atom --><div class="sb-group"><button class="sb-group-btn" onclick="toggleGroup(this)"><svg class="sb-chevron" width="9" height="9" viewBox="0 0 10 10" fill="none"><path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg>Atom <span class="sb-count">8</span></button><ul class="sb-items" hidden><li><a href="#" class="sb-link">Button</a></li><li><a href="#" class="sb-link">Badge</a></li><li><a href="#" class="sb-link">Checkbox</a></li><li><a href="#" class="sb-link">Input</a></li><li><a href="#" class="sb-link">Label</a></li><li><a href="#" class="sb-link">Radio</a></li><li><a href="#" class="sb-link">Select</a></li><li><a href="#" class="sb-link">Toggle</a></li></ul></div>< !-- Components — active --><div class="sb-group open has-active"><button class="sb-group-btn" onclick="toggleGroup(this)"><svg class="sb-chevron" width="9" height="9" viewBox="0 0 10 10" fill="none"><path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg>Components <span class="sb-count">12</span></button><ul class="sb-items"><li><a href="#" class="sb-link active">Calendar</a></li><li><a href="#" class="sb-link">Card</a></li><li><a href="#" class="sb-link">Dropdown</a></li><li><a href="#" class="sb-link">Modal</a></li><li><a href="#" class="sb-link">Tabs</a></li><li><a href="#" class="sb-link">Tooltip</a></li></ul></div>< !-- Composite --><div class="sb-group"><button class="sb-group-btn" onclick="toggleGroup(this)"><svg class="sb-chevron" width="9" height="9" viewBox="0 0 10 10" fill="none"><path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg>Composite <span class="sb-count">5</span></button><ul class="sb-items" hidden><li><a href="#" class="sb-link">Booking Card</a></li><li><a href="#" class="sb-link">Search Bar</a></li><li><a href="#" class="sb-link">Price Card</a></li><li><a href="#" class="sb-link">Review Card</a></li><li><a href="#" class="sb-link">User Menu</a></li></ul></div></nav></aside>< !-- ═══════════════════════════════════════ MAIN CONTENT ═══════════════════════════════════════ --><main class="main-content">< !-- ── Page Header ── --><div id="overview"><p class="page-eyebrow">Components</p><h1 class="page-title">Calendar / Date Picker</h1><p class="page-lead">A dual-month date range picker for selecting check-in and check-out dates. Supports exact dates,
flexible windows,
range hover states,
disabled dates,
and today highlighting — designed for booking and travel use cases. </p><div class="callout callout--info"><svg class="callout__icon" width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6.5" stroke="#007AFF" stroke-width="1.3" /><path d="M8 5.5v.5M8 7.5v3.5" stroke="#007AFF" stroke-width="1.4" stroke-linecap="round" /></svg><div class="callout__body"><strong>Design token dependency:</strong>This component reads from <code>colors.css</code>. Always import design tokens before the component stylesheet. </div></div></div><hr class="page-divider" />< !-- ══════════════════════════════════════ LIVE PREVIEW ══════════════════════════════════════ --><section class="section" id="preview"><h2 class="section-title">Live Preview</h2><p class="section-body" style="margin-bottom:24px;">Interact with the calendar below. Click a date to set the check-in,
click a second date to set check-out. Use the footer pills to add date flexibility. </p><div class="preview-card"><div class="calendar-wrapper" id="cal">< !-- Mode toggle --><div class="calendar-mode-toggle"><button class="calendar-mode-btn active" onclick="setMode('dates',this)">Dates</button><button class="calendar-mode-btn" onclick="setMode('flexible',this)">Flexible</button></div>< !-- Months grid --><div class="calendar-months" id="calMonths"></div>< !-- Footer --><div class="calendar-footer" id="calFooter"><button class="flex-pill active-pill" onclick="setPill(this,'exact')">Exact dates</button><button class="flex-pill" onclick="setPill(this,'1')">± 1 day</button><button class="flex-pill" onclick="setPill(this,'2')">± 2 days</button><button class="flex-pill" onclick="setPill(this,'3')">± 3 days</button><button class="flex-pill" onclick="setPill(this,'7')">± 7 days</button><button class="flex-pill" onclick="setPill(this,'14')">± 14 days</button></div></div></div></section>< !-- ══════════════════════════════════════ ANATOMY ══════════════════════════════════════ --><section class="section" id="anatomy"><h2 class="section-title">Anatomy</h2><p class="section-body" style="margin-bottom:24px;">The calendar is composed of discrete,
individually styled sub-elements. Understanding each part helps when customising or extending the component. </p>< !-- Anatomy part list --><div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:32px;"><div class="anatomy-item"><div class="anatomy-number">1</div><div><div class="anatomy-label">Mode Toggle</div><div class="anatomy-desc">Segmented pill control. Switches between "Dates" and "Flexible" booking intent.</div></div></div><div class="anatomy-item"><div class="anatomy-number">2</div><div><div class="anatomy-label">Month Header</div><div class="anatomy-desc">Displays the current month+year. Houses the prev/next navigation arrows.</div></div></div><div class="anatomy-item"><div class="anatomy-number">3</div><div><div class="anatomy-label">Navigation Buttons</div><div class="anatomy-desc">32×32 circular buttons advancing or retreating the visible month window.</div></div></div><div class="anatomy-item"><div class="anatomy-number">4</div><div><div class="anatomy-label">Weekday Labels</div><div class="anatomy-desc">Sun–Sat row. 11px semibold uppercase. Uses <code>--color-text-secondary</code>.</div></div></div><div class="anatomy-item"><div class="anatomy-number">5</div><div><div class="anatomy-label">Day Cell</div><div class="anatomy-desc">7-column grid. Each cell is a 1:1 aspect-ratio button with 5 visual states.</div></div></div><div class="anatomy-item"><div class="anatomy-number">6</div><div><div class="anatomy-label">Range Fill</div><div class="anatomy-desc">Rectangular alpha fill between range-start and range-end. Uses <code>--color-primary-alpha</code>.</div></div></div><div class="anatomy-item"><div class="anatomy-number">7</div><div><div class="anatomy-label">Today Dot</div><div class="anatomy-desc">4px circle under the date number via <code>::after</code>. Colour: <code>--color-primary</code>.</div></div></div><div class="anatomy-item"><div class="anatomy-number">8</div><div><div class="anatomy-label">Flexibility Footer</div><div class="anatomy-desc">Pill buttons letting the user soften the date constraint by ±1/2/3/7/14 days.</div></div></div></div>< !-- Day cell states diagram --><h3 class="section-subtitle">Day Cell States</h3><div style="display:flex;flex-wrap:wrap;gap:12px;margin-bottom:8px;background:var(--color-bg-secondary);padding:24px;border-radius:var(--radius-lg);border:1px solid var(--color-border-light);"><div style="display:flex;flex-direction:column;align-items:center;gap:8px;min-width:80px;"><div style="width:36px;height:36px;display:flex;align-items:center;justify-content:center;font-size:14px;color:var(--color-text-primary);border-radius:50%;background:var(--color-muted);">12</div><div style="font-size:11px;color:var(--color-text-secondary);text-align:center;font-weight:500;">Hover</div></div><div style="display:flex;flex-direction:column;align-items:center;gap:8px;min-width:80px;"><div style="position:relative;width:36px;height:36px;display:flex;align-items:center;justify-content:center;font-size:14px;font-weight:700;color:var(--color-text-primary);">12 <span style="position:absolute;bottom:3px;left:50%;transform:translateX(-50%);width:4px;height:4px;background:var(--color-primary);border-radius:50%;"></span></div><div style="font-size:11px;color:var(--color-text-secondary);text-align:center;font-weight:500;">Today</div></div><div style="display:flex;flex-direction:column;align-items:center;gap:8px;min-width:80px;"><div style="width:36px;height:36px;display:flex;align-items:center;justify-content:center;font-size:14px;color:#fff;font-weight:600;background:var(--color-secondary);border-radius:50%;">12</div><div style="font-size:11px;color:var(--color-text-secondary);text-align:center;font-weight:500;">Selected</div></div><div style="display:flex;flex-direction:column;align-items:center;gap:8px;min-width:80px;"><div style="display:flex;"><div style="width:36px;height:36px;display:flex;align-items:center;justify-content:center;font-size:14px;color:#fff;font-weight:600;background:var(--color-secondary);border-radius:50% 0 0 50%;">11</div><div style="width:36px;height:36px;display:flex;align-items:center;justify-content:center;font-size:14px;background:var(--color-primary-alpha);">12</div><div style="width:36px;height:36px;display:flex;align-items:center;justify-content:center;font-size:14px;color:#fff;font-weight:600;background:var(--color-secondary);border-radius:0 50% 50% 0;">14</div></div><div style="font-size:11px;color:var(--color-text-secondary);text-align:center;font-weight:500;">Range</div></div><div style="display:flex;flex-direction:column;align-items:center;gap:8px;min-width:80px;"><div style="width:36px;height:36px;display:flex;align-items:center;justify-content:center;font-size:14px;color:var(--color-muted-dark);text-decoration:line-through;">12</div><div style="font-size:11px;color:var(--color-text-secondary);text-align:center;font-weight:500;">Disabled</div></div></div></section>< !-- ══════════════════════════════════════ SPECIFICATIONS ══════════════════════════════════════ --><section class="section" id="specs"><h2 class="section-title">Specifications</h2><h3 class="section-subtitle">Layout & Sizing</h3><table class="spec-table"><thead><tr><th>Property</th><th>Value</th><th>Token</th></tr></thead><tbody><tr><td>Wrapper max-width</td><td>700px</td><td>—</td></tr><tr><td>Wrapper padding</td><td>24px</td><td><span class="token-val">--space-lg</span></td></tr><tr><td>Wrapper border-radius</td><td>18px</td><td><span class="token-val">--radius-xl</span></td></tr><tr><td>Column gap (dual months)</td><td>48px</td><td><span class="token-val">--space-2xl</span></td></tr><tr><td>Day cell size</td><td>aspect-ratio: 1 (fills grid col)</td><td>—</td></tr><tr><td>Nav button size</td><td>32 × 32px</td><td>—</td></tr><tr><td>Today dot size</td><td>4 × 4px</td><td>—</td></tr><tr><td>Grid columns</td><td>7</td><td>—</td></tr></tbody></table><h3 class="section-subtitle">Color Tokens Used</h3><div class="swatch-row"><div class="swatch" style="background:#FF385C;"></div><span class="swatch-name">--color-primary</span><span class="swatch-value">#FF385C</span></div><div class="swatch-row"><div class="swatch" style="background:rgba(255,56,92,0.12);"></div><span class="swatch-name">--color-primary-alpha</span><span class="swatch-value">rgba(255, 56, 92, 0.12)</span></div><div class="swatch-row"><div class="swatch" style="background:#222222;"></div><span class="swatch-name">--color-secondary</span><span class="swatch-value">#222222</span></div><div class="swatch-row"><div class="swatch" style="background:#EBEBEB;border:1px solid #ddd;"></div><span class="swatch-name">--color-muted</span><span class="swatch-value">#EBEBEB</span></div><div class="swatch-row"><div class="swatch" style="background:#D2D2D7;"></div><span class="swatch-name">--color-border</span><span class="swatch-value">#D2D2D7</span></div><div class="swatch-row"><div class="swatch" style="background:#1D1D1F;"></div><span class="swatch-name">--color-text-primary</span><span class="swatch-value">#1D1D1F</span></div><div class="swatch-row"><div class="swatch" style="background:#6E6E73;"></div><span class="swatch-name">--color-text-secondary</span><span class="swatch-value">#6E6E73</span></div><div class="swatch-row" style="border:none;"><div class="swatch" style="background:#DDDDDD;"></div><span class="swatch-name">--color-muted-dark</span><span class="swatch-value">#DDDDDD</span></div><h3 class="section-subtitle">Typography</h3><table class="spec-table"><thead><tr><th>Element</th><th>Size</th><th>Weight</th></tr></thead><tbody><tr><td>Month title</td><td>15px <span class="token-val">--text-md</span></td><td>600 <span class="token-val">--weight-semibold</span></td></tr><tr><td>Weekday label</td><td>11px <span class="token-val">--text-xs</span></td><td>600 <span class="token-val">--weight-semibold</span></td></tr><tr><td>Day number</td><td>13px <span class="token-val">--text-sm</span></td><td>400 / 700 today</td></tr><tr><td>Footer pill</td><td>13px <span class="token-val">--text-sm</span></td><td>500 <span class="token-val">--weight-medium</span></td></tr></tbody></table></section>< !-- ══════════════════════════════════════ HTML USAGE ══════════════════════════════════════ --><section class="section" id="usage"><h2 class="section-title">HTML Usage</h2><p class="section-body" style="margin-bottom:20px;">Copy the markup skeleton below and initialise it with the JavaScript API documented in the next section. Months are rendered dynamically into <code>.calendar-months</code>. </p><div class="callout callout--warning"><svg class="callout__icon" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 2L15 14H1L8 2Z" stroke="#C45508" stroke-width="1.3" stroke-linejoin="round" /><path d="M8 6v4M8 11.5v.5" stroke="#C45508" stroke-width="1.3" stroke-linecap="round" /></svg><div class="callout__body"><strong>Token import order matters.</strong>Load <code>colors.css</code>before <code>calendar.css</code>,
otherwise CSS custom properties will be undefined. </div></div><div class="code-label">HTML</div><div class="code-block"><button class="copy-btn" onclick="copyCode(this)">Copy</button><pre><span class="cmt">&lt;
!-- 1. Import design tokens first --&gt;
</span><span class="tag">&lt;
link</span><span class="attr">rel</span>=<span class="str">"stylesheet" </span><span class="attr">href</span>=<span class="str">"/assets/css/colors.css" </span><span class="tag">&gt;
</span><span class="tag">&lt;
link</span><span class="attr">rel</span>=<span class="str">"stylesheet" </span><span class="attr">href</span>=<span class="str">"/Components/calendar/calendar.css" </span><span class="tag">&gt;
</span><span class="cmt">&lt;
!-- 2. Calendar wrapper --&gt;
</span><span class="tag">&lt;
div</span><span class="attr">class</span>=<span class="str">"calendar-wrapper" </span><span class="attr">id</span>=<span class="str">"myCalendar" </span><span class="tag">&gt;
</span><span class="cmt">&lt;
!-- Mode toggle (optional) --&gt;
</span><span class="tag">&lt;
div</span><span class="attr">class</span>=<span class="str">"calendar-mode-toggle" </span><span class="tag">&gt;
</span><span class="tag">&lt;
button</span><span class="attr">class</span>=<span class="str">"calendar-mode-btn active" </span><span class="tag">&gt;
</span>Dates<span class="tag">&lt;/button&gt;
</span><span class="tag">&lt;
button</span><span class="attr">class</span>=<span class="str">"calendar-mode-btn" </span><span class="tag">&gt;
</span>Flexible<span class="tag">&lt;/button&gt;
</span><span class="tag">&lt;/div&gt;
</span><span class="cmt">&lt;
!-- Month columns — populated by JS --&gt;
</span><span class="tag">&lt;
div</span><span class="attr">class</span>=<span class="str">"calendar-months" </span><span class="tag">&gt;
&lt;/div&gt;
</span><span class="cmt">&lt;
!-- Footer flex pills (optional) --&gt;
</span><span class="tag">&lt;
div</span><span class="attr">class</span>=<span class="str">"calendar-footer" </span><span class="tag">&gt;
</span><span class="tag">&lt;
button</span><span class="attr">class</span>=<span class="str">"flex-pill active-pill" </span><span class="tag">&gt;
</span>Exact dates<span class="tag">&lt;/button&gt;
</span><span class="tag">&lt;
button</span><span class="attr">class</span>=<span class="str">"flex-pill" </span><span class="tag">&gt;
</span>± 1 day<span class="tag">&lt;/button&gt;
</span><span class="tag">&lt;
button</span><span class="attr">class</span>=<span class="str">"flex-pill" </span><span class="tag">&gt;
</span>± 2 days<span class="tag">&lt;/button&gt;
</span><span class="tag">&lt;
button</span><span class="attr">class</span>=<span class="str">"flex-pill" </span><span class="tag">&gt;
</span>± 3 days<span class="tag">&lt;/button&gt;
</span><span class="tag">&lt;
button</span><span class="attr">class</span>=<span class="str">"flex-pill" </span><span class="tag">&gt;
</span>± 7 days<span class="tag">&lt;/button&gt;
</span><span class="tag">&lt;
button</span><span class="attr">class</span>=<span class="str">"flex-pill" </span><span class="tag">&gt;
</span>± 14 days<span class="tag">&lt;/button&gt;
</span><span class="tag">&lt;/div&gt;
</span><span class="tag">&lt;/div&gt;
</span><span class="cmt">&lt;
!-- 3. Initialise --&gt;
</span><span class="tag">&lt;
script</span><span class="attr">src</span>=<span class="str">"/Components/calendar/calendar.js" </span><span class="tag">&gt;
&lt;/script&gt;
</span><span class="tag">&lt;
script&gt;

</span><span class="kw">const</span>cal=<span class="kw">new</span><span class="prop">HolidaysevaCalendar</span>(<span class="str" >'#myCalendar' </span>, {

    <span class="prop" >minDate</span>: <span class="kw" >new</span> Date(),
    <span class="prop" >onChange</span>: ({
        start, end
    })=&gt; console.<span class="prop" >log</span>(start, end)
});
<span class="tag">&lt;/script&gt;
</span></pre></div><h3 class="section-subtitle">PHP Include (server-side)</h3><div class="code-label">PHP</div><div class="code-block"><button class="copy-btn" onclick="copyCode(this)">Copy</button><pre><span class="cmt">&lt;
?php</span><span class="cmt"> // Pass optional config as JSON to the rendered wrapper</span>
<span class="kw">$calConfig</span>=<span class="prop">json_encode</span>([ <span class="str" >'minDate' </span>=&gt; <span class="prop" >date</span>(<span class="str" >'Y-m-d' </span>),
    <span class="str" >'disabledDates' </span>=&gt; [<span class="str" >'2026-04-15' </span>, <span class="str" >'2026-04-16' </span>],
    <span class="str" >'defaultStart' </span>=&gt; <span class="str" >'2026-04-10' </span>,
    ]);
<span class="cmt">?&gt;
</span><span class="tag">&lt;
div</span><span class="attr">class</span>=<span class="str">"calendar-wrapper" </span><span class="attr">data-calendar-config</span>=<span class="str">'&lt;?= htmlspecialchars($calConfig) ?&gt;' </span><span class="tag">&gt;
</span><span class="tag">&lt;
div</span><span class="attr">class</span>=<span class="str">"calendar-months" </span><span class="tag">&gt;
&lt;/div&gt;
</span><span class="tag">&lt;/div&gt;
</span><span class="cmt">&lt;
?php</span><span class="cmt"> // Auto-init from data attribute:</span>
<span class="cmt"> // HolidaysevaCalendar.autoInit();   ← reads data-calendar-config</span>
<span class="cmt">?&gt;

</span></pre></div></section>< !-- ══════════════════════════════════════ JAVASCRIPT API ══════════════════════════════════════ --><section class="section" id="javascript"><h2 class="section-title">JavaScript API</h2><p class="section-body" style="margin-bottom:20px;">The calendar exposes a class-based API. Instantiate it with a CSS selector (or DOM element) and an options object. </p><h3 class="section-subtitle">Constructor Options</h3><table class="props-table"><thead><tr><th>Option</th><th>Type</th><th>Default</th><th>Description</th></tr></thead><tbody><tr><td><code>minDate</code></td><td><span class="type-badge">Date</span></td><td><code>new Date()</code></td><td>Earliest selectable date. Dates before this are disabled.</td></tr><tr><td><code>maxDate</code></td><td><span class="type-badge">Date</span></td><td><code>null</code></td><td>Latest selectable date. Null=no limit.</td></tr><tr><td><code>disabledDates</code></td><td><span class="type-badge">string[]</span></td><td><code>[]</code></td><td>Array of <code>YYYY-MM-DD</code>strings to block. Useful for sold-out dates.</td></tr><tr><td><code>defaultStart</code></td><td><span class="type-badge">string</span></td><td><code>null</code></td><td>Pre-selected check-in date as <code>YYYY-MM-DD</code>.</td></tr><tr><td><code>defaultEnd</code></td><td><span class="type-badge">string</span></td><td><code>null</code></td><td>Pre-selected check-out date as <code>YYYY-MM-DD</code>.</td></tr><tr><td><code>months</code></td><td><span class="type-badge">number</span></td><td><code>2</code></td><td>Number of months to display side-by-side. Use <code>1</code>for mobile.</td></tr><tr><td><code>onChange</code></td><td><span class="type-badge">function</span></td><td><code>null</code></td><td>Callback fired when a complete range is selected. Receives <code> {
    start: Date, end: Date
}

</code>.</td></tr><tr><td><code>onMonthChange</code></td><td><span class="type-badge">function</span></td><td><code>null</code></td><td>Callback fired when the displayed month changes. Receives <code> {
    year,
    month
}

</code>.</td></tr><tr><td><code>inline</code></td><td><span class="type-badge">boolean</span></td><td><code>false</code></td><td>When true,
removes the drop-shadow and adds <code>calendar-inline</code>class for embedded use.</td></tr></tbody></table><h3 class="section-subtitle">Instance Methods</h3><table class="props-table"><thead><tr><th>Method</th><th>Returns</th><th>Description</th></tr></thead><tbody><tr><td><code>getRange()</code></td><td><span class="type-badge"> {
    start,
    end
}

</span></td><td>Returns the currently selected date range. Values are <code>Date</code>or <code>null</code>.</td></tr><tr><td><code>setRange(start, end)</code></td><td><code>void</code></td><td>Programmatically sets the date range. Accepts <code>Date</code>objects or <code>YYYY-MM-DD</code>strings.</td></tr><tr><td><code>clear()</code></td><td><code>void</code></td><td>Clears the selected range and resets the calendar to its initial state.</td></tr><tr><td><code>goToMonth(year, month)</code></td><td><code>void</code></td><td>Navigates the calendar to a specific month. Month is 0-indexed (Jan=0).</td></tr><tr><td><code>disable(dates)</code></td><td><code>void</code></td><td>Dynamically adds dates to the disabled list. Accepts a single <code>YYYY-MM-DD</code>or an array.</td></tr><tr><td><code>destroy()</code></td><td><code>void</code></td><td>Removes all event listeners and clears rendered HTML. Use when unmounting.</td></tr></tbody></table><h3 class="section-subtitle">Full example</h3><div class="code-label">JavaScript</div><div class="code-block"><button class="copy-btn" onclick="copyCode(this)">Copy</button><pre><span class="kw">import</span>HolidaysevaCalendar <span class="kw">from</span><span class="str">'./calendar.js' </span>;

<span class="kw">const</span>cal=<span class="kw">new</span><span class="prop">HolidaysevaCalendar</span>(<span class="str" >'#bookingCalendar' </span>, {

    <span class="prop" >minDate</span> : <span class="kw" >new</span> Date(),
    <span class="prop" >months</span> : <span class="num" >2</span>,
    <span class="prop" >disabledDates</span>: [<span class="str" >'2026-04-15' </span>, <span class="str" >'2026-04-16' </span>],
    <span class="prop" >onChange</span> : ({
        start, end

    })=> {
    console.<span class="prop" >log</span>(<span class="str" >'Check-in:' </span>, start.<span class="prop" >toDateString</span>());
    console.<span class="prop" >log</span>(<span class="str" >'Check-out:' </span>, end.<span class="prop" >toDateString</span>());

    <span class="cmt" > // Update hidden form inputs</span>
    document.<span class="prop" >querySelector</span>(<span class="str" >'[name="checkin"]' </span>).<span class="prop" >value</span>=start.<span class="prop" >toISOString</span>();
    document.<span class="prop" >querySelector</span>(<span class="str" >'[name="checkout"]' </span>).<span class="prop" >value</span>=end.<span class="prop" >toISOString</span>();
}

,
});

<span class="cmt"> // Programmatic control</span>
cal.<span class="prop">setRange</span>(<span class="str" >'2026-04-10' </span>, <span class="str" >'2026-04-14' </span>);
<span class="cmt"> // pre-fill</span>
cal.<span class="prop">goToMonth</span>(<span class="num" >2026</span>, <span class="num" >3</span>);
<span class="cmt"> // jump to April 2026</span>

<span class="cmt"> // Listen for range</span>

<span class="kw">const</span> {
    start,
    end
}

=cal.<span class="prop">getRange</span>();

<span class="kw">if</span>(start && end) {
    <span class="kw">const</span>nights=Math.<span class="prop">round</span>((end - start) / <span class="num" >86400000</span>);

    console.<span class="prop">log</span>(`<span class="str" >$ {
            nights
        }

        nights selected</span>`);
}

</pre></div></section>< !-- ══════════════════════════════════════ INTEGRATION ══════════════════════════════════════ --><section class="section" id="integration"><h2 class="section-title">Integration</h2><p class="section-body" style="margin-bottom:28px;">Follow these steps to add the Calendar component to any page in the Holidayseva platform. </p><ol class="step-list"><li class="step-item"><div class="step-number">1</div><div class="step-content"><div class="step-title">Copy component files</div><div class="step-desc">Copy <code>/Components/calendar/calendar.css</code>and <code>/Components/calendar/calendar.js</code>into your project. Do not inline the CSS — it depends on tokens from <code>colors.css</code>. </div></div></li><li class="step-item"><div class="step-number">2</div><div class="step-content"><div class="step-title">Import stylesheets in order</div><div class="step-desc">Always load <code>colors.css</code>before <code>calendar.css</code>in your <code>&lt;
head&gt;
</code>. The component uses only CSS custom properties defined in the tokens file — raw hex values are not used. </div></div></li><li class="step-item"><div class="step-number">3</div><div class="step-content"><div class="step-title">Add HTML markup</div><div class="step-desc">Place the <code>.calendar-wrapper</code>element in your HTML. The inner <code>.calendar-months</code>div will be populated automatically by the JavaScript initialiser. </div></div></li><li class="step-item"><div class="step-number">4</div><div class="step-content"><div class="step-title">Initialise the component</div><div class="step-desc">Call <code>new HolidaysevaCalendar(selector, options)</code>after the DOM is ready. Pass <code>minDate: new Date()</code>to prevent selection of past dates for booking flows. </div></div></li><li class="step-item"><div class="step-number">5</div><div class="step-content"><div class="step-title">Wire to your form or search bar</div><div class="step-desc">Use the <code>onChange</code>callback to sync selected dates into hidden <code>&lt;
input&gt;

</code>fields or a search query object. The callback receives <code> {
    start: Date, end: Date
}

</code>. </div></div></li><li class="step-item"><div class="step-number">6</div><div class="step-content"><div class="step-title">Test disabled dates</div><div class="step-desc">Fetch unavailable dates from your API and pass them as <code>disabledDates: ['YYYY-MM-DD',
...]</code>. These will render with a strikethrough and block user selection. </div></div></li></ol></section>< !-- ══════════════════════════════════════ USAGE GUIDELINES ══════════════════════════════════════ --><section class="section" id="guidelines"><h2 class="section-title">Usage Guidelines</h2><div class="usage-grid"><div class="usage-card usage-card--do"><div class="usage-card__header">✓ Do</div><div class="usage-card__body">Show the calendar inline in the search bar flow. Users should see both months without having to scroll. </div></div><div class="usage-card usage-card--dont"><div class="usage-card__header">✗ Don't</div>
 <div class="usage-card__body">Don't show a single month for a date range picker. Two months are
 essential so users can see multi-week stays at a glance. </div></div><div class="usage-card usage-card--do"><div class="usage-card__header">✓ Do</div><div class="usage-card__body">Always pass <code>minDate: new Date()</code>to prevent selecting past dates in booking contexts. Past dates should never be bookable. </div></div><div class="usage-card usage-card--dont"><div class="usage-card__header">✗ Don't</div>
 <div class="usage-card__body">Don't use raw hex colours in custom calendar styles. Always reference
 design tokens from <code>colors.css</code>so dark mode works automatically. </div></div><div class="usage-card usage-card--do"><div class="usage-card__header">✓ Do</div><div class="usage-card__body">Provide the flexibility footer pills for travel search. They meaningfully improve booking conversion by relaxing rigid date constraints. </div></div><div class="usage-card usage-card--dont"><div class="usage-card__header">✗ Don't</div>
 <div class="usage-card__body">Don't place the calendar inside a tiny container. The wrapper needs
 at least 600px to render comfortably in dual-month layout. </div></div></div></section>< !-- ══════════════════════════════════════ ACCESSIBILITY ══════════════════════════════════════ --><section class="section" id="accessibility"><h2 class="section-title">Accessibility</h2><p class="section-body" style="margin-bottom:20px;">The calendar is built to meet WCAG 2.1 AA. The following checks are enforced in the default implementation. </p><ul class="a11y-list"><li class="a11y-item"><div class="a11y-icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg></div><div><strong>Keyboard navigation</strong>— All day cells are focusable via Tab. Arrow keys navigate within the grid. Enter or Space selects a date.</div></li><li class="a11y-item"><div class="a11y-icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg></div><div><strong>ARIA roles</strong>— The grid uses <code>role="grid" </code>,
each row uses <code>role="row" </code>,
and cells use <code>role="gridcell" </code>.</div></li><li class="a11y-item"><div class="a11y-icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg></div><div><strong>aria-label on each cell</strong>— Every day button receives a full date string,
e.g. <code>aria-label="Thursday, April 10, 2026" </code>.</div></li><li class="a11y-item"><div class="a11y-icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg></div><div><strong>aria-disabled</strong>— Unavailable or past dates receive <code>aria-disabled="true" </code>and are removed from the tab order.</div></li><li class="a11y-item"><div class="a11y-icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg></div><div><strong>Focus ring</strong>— Visible focus ring via <code>:focus-visible</code>outline using <code>--color-primary</code>at 2px offset. Never suppressed.</div></li><li class="a11y-item"><div class="a11y-icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg></div><div><strong>Contrast</strong>— All text/background combinations meet 4.5:1 minimum. Selected state uses white text on <code>#222222</code>(16.1:1).</div></li><li class="a11y-item"><div class="a11y-icon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 5l2.5 2.5 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg></div><div><strong>Live region</strong>— A visually hidden <code>aria-live="polite" </code>region announces the selected range to screen reader users after each selection.</div></li></ul></section></main>< !-- ═══════════════════════════════════════ RIGHT SIDEBAR — TOC ═══════════════════════════════════════ --><aside class="sidebar-right"><div class="toc-wrap"><div class="toc-platforms"><p class="toc-platforms-label">Supported platforms</p><div class="toc-platform-icons">< !-- iPhone --><svg width="18" height="22" viewBox="0 0 18 22" fill="none" title="iPhone"><rect x="1" y="1" width="16" height="20" rx="3.5" stroke="currentColor" stroke-width="1.3" /><circle cx="9" cy="18" r="1" fill="currentColor" /><path d="M7 3h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" /></svg>< !-- iPad --><svg width="18" height="22" viewBox="0 0 18 22" fill="none" title="iPad"><rect x="1" y="1" width="16" height="20" rx="2.5" stroke="currentColor" stroke-width="1.3" /><circle cx="9" cy="18.5" r="1" fill="currentColor" /></svg>< !-- Mac --><svg width="24" height="22" viewBox="0 0 24 22" fill="none" title="Mac"><rect x="1" y="1" width="22" height="14" rx="2" stroke="currentColor" stroke-width="1.3" /><path d="M1 18h22" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" /><path d="M8 18l1 3h6l1-3" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round" /></svg>< !-- TV --><svg width="24" height="20" viewBox="0 0 24 20" fill="none" title="Apple TV"><rect x="1" y="1" width="22" height="14" rx="2" stroke="currentColor" stroke-width="1.3" /><path d="M9 15v4M15 15v4M7 19h10" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" /></svg></div></div><ul class="toc-list" id="tocList"><li><a class="toc-link" href="#overview">Element</a></li><li><a class="toc-link" href="#anatomy">Anatomy</a></li><li><a class="toc-link" href="#specs">Specifications</a></li><li><a class="toc-link" href="#usage">HTML Usage</a></li><li><a class="toc-link" href="#javascript">JavaScript API</a></li><li><a class="toc-link" href="#integration">Integration</a></li><li><a class="toc-link" href="#accessibility">Accessibility</a></li></ul></div></aside></div>< !-- /layout -->< !-- ═══════════════════════════════════════════ CALENDAR RUNTIME JAVASCRIPT (Self-contained demo — no external deps) ════════════════════════════════════════════ --><script>
/* ─── State ─────────────────────────────────────────────────── */
const TODAY=new Date();
TODAY.setHours(0, 0, 0, 0);

let viewYear=TODAY.getFullYear();
let viewMonth=TODAY.getMonth();
let selStart=null;
let selEnd=null;
let hoverDate=null;

/* ─── Helpers ────────────────────────────────────────────────── */
const monthNames=['January',
'February',
'March',
'April',
'May',
'June',
'July',
'August',
'September',
'October',
'November',
'December'];
const dayNames=['S',
'M',
'T',
'W',
'T',
'F',
'S'];

function sameDay(a, b) {
    return a && b && a.getFullYear()===b.getFullYear() && a.getMonth()===b.getMonth() && a.getDate()===b.getDate();
}

function isBetween(d, a, b) {
    if ( !a || !b) return false;
    const lo=a < b ? a: b;
    const hi=a < b ? b: a;
    return d>lo && d < hi;
}

/* ─── Render a single month ──────────────────────────────────── */
function renderMonth(year, month, showPrev, showNext) {
    const firstDay=new Date(year, month, 1).getDay();
    const daysInMonth=new Date(year, month+1, 0).getDate();

    let html=`<div class="calendar-month"><div class="calendar-month__header"><button class="calendar-nav-btn ${showPrev?'':'calendar-nav-btn--hidden'}"

    onclick="navigate(-1)" aria-label="Previous month"><svg width="8" height="12" viewBox="0 0 8 12" fill="none"><path d="M7 1L2 6l5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg></button><span class="calendar-month__title">$ {
        monthNames[month]
    }

    $ {
        year
    }

    </span><button class="calendar-nav-btn ${showNext?'':'calendar-nav-btn--hidden'}"
    onclick="navigate(1)" aria-label="Next month"><svg width="8" height="12" viewBox="0 0 8 12" fill="none"><path d="M1 1l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg></button></div><div class="calendar-weekdays">`;

    dayNames.forEach(d=> {
            html +=`<div class="calendar-weekday" >$ {
                d
            }

            </div>`;
        });
    html+=`</div><div class="calendar-days">`;

    // Empty lead cells
    for (let i=0; i < firstDay; i++) {
        html+=`<div class="calendar-day empty"></div>`;
    }

    // Day cells
    for (let d=1; d <=daysInMonth; d++) {
        const date=new Date(year, month, d);
        const isPast=date < TODAY && !sameDay(date, TODAY);
        const isToday=sameDay(date, TODAY);
        const isStart=sameDay(date, selStart);
        const isEnd=sameDay(date, selEnd);
        const inRange=isBetween(date, selStart, selEnd);
        const inHover=selStart && !selEnd && hoverDate && isBetween(date, selStart, hoverDate);

        let cls='calendar-day';
        if (isPast) cls+=' disabled';
        if (isToday) cls+=' today';
        if (isStart && selEnd) cls+=' range-start';
        else if (isEnd) cls+=' range-end';
        else if (isStart) cls+=' selected';
        if (inRange) cls+=' in-range';
        if (inHover && !inRange && !isStart && !isEnd) cls+=' hover-range';

        const ds=`$ {
            year
        }

        -$ {
            String(month+1).padStart(2, '0')
        }

        -$ {
            String(d).padStart(2, '0')
        }

        `;

        html+=`<button class="${cls}"
        data-date="${ds}"
        aria-label="${date.toDateString()}"

        $ {
            isPast ? 'disabled aria-disabled="true"': ''
        }

        onclick="selectDate('${ds}')"
        onmouseenter="hoverDay('${ds}')"
        onmouseleave="clearHover()"

        >$ {
            d
        }

        </button>`;
    }

    html+=`</div></div>`;
    return html;
}

/* ─── Render both months ─────────────────────────────────────── */
function renderCalendar() {
    const next=new Date(viewYear, viewMonth+1);
    const container=document.getElementById('calMonths');
    if ( !container) return;
    container.innerHTML=renderMonth(viewYear, viewMonth, true, false)+renderMonth(next.getFullYear(), next.getMonth(), false, true);
}

/* ─── Navigation ─────────────────────────────────────────────── */
function navigate(dir) {
    viewMonth+=dir;

    if (viewMonth > 11) {
        viewMonth=0;
        viewYear++;
    }

    if (viewMonth < 0) {
        viewMonth=11;
        viewYear--;
    }

    renderCalendar();
}

/* ─── Date selection ─────────────────────────────────────────── */
function selectDate(ds) {
    const d=new Date(ds + 'T00:00:00');

    if ( !selStart || (selStart && selEnd)) {
        selStart=d;
        selEnd=null;
    }

    else {
        if (d < selStart) {
            selEnd=selStart;
            selStart=d;
        }

        else {
            selEnd=d;
        }
    }

    renderCalendar();
}

function hoverDay(ds) {
    hoverDate=new Date(ds + 'T00:00:00');
    renderCalendar();
}

function clearHover() {
    hoverDate=null;
    renderCalendar();
}

/* ─── Mode toggle ────────────────────────────────────────────── */
function setMode(mode, btn) {
    document.querySelectorAll('.calendar-mode-btn').forEach(b=> b.classList.remove('active'));
    btn.classList.add('active');
}

/* ─── Flex pills ─────────────────────────────────────────────── */
function setPill(btn, val) {
    document.querySelectorAll('.flex-pill').forEach(p=> p.classList.remove('active-pill'));
    btn.classList.add('active-pill');
}

/* ─── Sidebar helpers ────────────────────────────────────────── */
function toggleGroup(btn) {
    const grp=btn.closest('.sb-group');
    const list=grp.querySelector('.sb-items');
    const open=grp.classList.contains('open');
    grp.classList.toggle('open', !open);
    if (open) list.setAttribute('hidden', '');
    else list.removeAttribute('hidden');
}

function filterSidebar(input) {
    const term=input.value.toLowerCase().trim();
    const nav=document.getElementById('sbNav');

    if ( !term) {
        nav.querySelectorAll('.sb-link').forEach(a=> a.classList.remove('hidden'));
        return;
    }

    nav.querySelectorAll('.sb-group').forEach(grp=> {
            const links=grp.querySelectorAll('.sb-link');
            const list=grp.querySelector('.sb-items');
            let hasMatch=false;

            links.forEach(a=> {
                    const match=a.textContent.toLowerCase().includes(term);
                    a.classList.toggle('hidden', !match);
                    if (match) hasMatch=true;
                });

            if (hasMatch) {
                grp.classList.add('open'); list.removeAttribute('hidden');
            }

            else if ( !grp.classList.contains('has-active')) {
                grp.classList.remove('open'); list.setAttribute('hidden', '');
            }
        });
}

/* ─── TOC scroll spy ─────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', ()=> {
        renderCalendar();

        const tocLinks=document.querySelectorAll('.toc-link');
        const sections=document.querySelectorAll('section[id], div[id], h1+div[id]');

        const spy=new IntersectionObserver(entries=> {
                entries.forEach(e=> {
                        if (e.isIntersecting) {
                            tocLinks.forEach(a=> {
                                    a.classList.remove('active');
                                    if (a.getAttribute('href')==='#' + e.target.id) a.classList.add('active');
                                });
                        }
                    });
            }

            , {
            rootMargin: '-15% 0px -75% 0px'
        });

    document.querySelectorAll('[id]').forEach(s=> spy.observe(s));
});

/* ─── Copy code ──────────────────────────────────────────────── */
function copyCode(btn) {
    const code=btn.closest('.code-block').querySelector('pre').innerText;

    navigator.clipboard.writeText(code).then(()=> {
            btn.textContent='Copied!';
            setTimeout(()=> btn.textContent='Copy', 1800);
        });
}

</script></body></html>