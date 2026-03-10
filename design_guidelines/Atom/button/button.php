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

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,300;0,14..32,400;0,14..32,500;0,14..32,600;1,14..32,400&display=swap" rel="stylesheet">

  <style>

    /* ════════════════════════════════════════════════════════
       DESIGN TOKENS
    ════════════════════════════════════════════════════════ */
    :root {
      --rose:           #FF385C;
      --rose-hover:     #E8314F;
      --rose-press:     #CC2B47;
      --rose-soft:      rgba(255, 56, 92, 0.09);
      --teal:           #00A699;
      --ink:            #1d1d1f;
      --ink-2:          #3a3a3c;
      --ink-3:          #6e6e73;
      --ink-4:          #aeaeb2;
      --sep:            #e5e5ea;
      --fill-1:         #f5f5f7;
      --fill-2:         #fafafa;
      --white:          #ffffff;
      --danger:         #C0392B;
      --radius:         16px;
      --radius-sm:      10px;
      --mono:           "SF Mono", "Fira Code", "Cascadia Code", monospace;
      --shadow-card:    0 2px 12px rgba(0,0,0,.06), 0 1px 3px rgba(0,0,0,.04);
      --shadow-demo:    0 1px 4px rgba(0,0,0,.05);
    }

    /* ════════════════════════════════════════════════════════
       BASE
    ════════════════════════════════════════════════════════ */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: "Inter", -apple-system, BlinkMacSystemFont, "Helvetica Neue", sans-serif;
      background: var(--white);
      color: var(--ink);
      -webkit-font-smoothing: antialiased;
      line-height: 1.6;
    }

    /* ════════════════════════════════════════════════════════
       PAGE HERO
    ════════════════════════════════════════════════════════ */
    .pg-eyebrow {
      font-size: 11.5px;
      font-weight: 600;
      letter-spacing: .07em;
      text-transform: uppercase;
      color: var(--rose);
      margin-bottom: 10px;
    }

    .pg-title {
      font-size: clamp(36px, 5vw, 56px);
      font-weight: 300;
      letter-spacing: -0.03em;
      line-height: 1.06;
      color: var(--ink);
      margin-bottom: 18px;
    }

    .pg-lead {
      font-size: 18px;
      font-weight: 400;
      color: var(--ink-3);
      line-height: 1.6;
      max-width: 600px;
      letter-spacing: -0.01em;
      margin-bottom: 0;
    }

    /* ════════════════════════════════════════════════════════
       WHAT IS A BUTTON — BEGINNER INTRO CARD
    ════════════════════════════════════════════════════════ */
    .intro-card {
      background: linear-gradient(135deg, #fff9f9 0%, #fff 60%);
      border: 1.5px solid #ffd6de;
      border-radius: var(--radius);
      padding: 28px 32px;
      margin: 32px 0 0;
      display: flex;
      gap: 20px;
      align-items: flex-start;
    }
    .intro-card-icon {
      width: 40px; height: 40px;
      background: var(--rose);
      border-radius: 10px;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
    }
    .intro-card-icon svg { width: 20px; height: 20px; }
    .intro-card-title {
      font-size: 13px;
      font-weight: 700;
      letter-spacing: .04em;
      text-transform: uppercase;
      color: var(--rose);
      margin-bottom: 6px;
    }
    .intro-card-body {
      font-size: 14.5px;
      color: var(--ink-2);
      line-height: 1.7;
    }
    .intro-card-body strong { color: var(--ink); font-weight: 600; }

    /* ════════════════════════════════════════════════════════
       DIVIDER
    ════════════════════════════════════════════════════════ */
    .rule {
      border: none;
      border-top: 1px solid var(--sep);
      margin: 60px 0;
    }

    /* ════════════════════════════════════════════════════════
       SECTION HEADERS
    ════════════════════════════════════════════════════════ */
    .sec-label {
      font-size: 11px;
      font-weight: 700;
      letter-spacing: .08em;
      text-transform: uppercase;
      color: var(--rose);
      margin-bottom: 8px;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .sec-label::after {
      content: '';
      flex: 1;
      height: 1px;
      background: var(--sep);
    }

    .sec-title {
      font-size: 28px;
      font-weight: 600;
      letter-spacing: -0.025em;
      color: var(--ink);
      margin-bottom: 8px;
      line-height: 1.2;
    }

    .sec-desc {
      font-size: 15px;
      color: var(--ink-3);
      line-height: 1.65;
      max-width: 640px;
      margin-bottom: 28px;
      font-weight: 400;
    }

    .subsec-title {
      font-size: 17px;
      font-weight: 600;
      letter-spacing: -0.015em;
      color: var(--ink);
      margin: 36px 0 8px;
    }

    .body-text {
      font-size: 14.5px;
      color: var(--ink-3);
      line-height: 1.7;
      margin-bottom: 16px;
      max-width: 640px;
    }

    code {
      font-family: var(--mono);
      font-size: .82em;
      background: var(--fill-1);
      color: var(--rose);
      padding: 2px 7px;
      border-radius: 5px;
      letter-spacing: 0;
    }

    /* ════════════════════════════════════════════════════════
       DEMO STAGE
    ════════════════════════════════════════════════════════ */
    .demo-stage {
      background: var(--fill-2);
      border: 1px solid var(--sep);
      border-radius: var(--radius);
      padding: 32px 28px;
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      align-items: center;
      box-shadow: var(--shadow-demo);
      margin: 16px 0;
    }
    .demo-stage.dark {
      background: #1d1d1f;
      border-color: #3a3a3c;
    }
    .demo-stage.center { justify-content: center; }
    .demo-stage.column {
      flex-direction: column;
      align-items: flex-start;
    }
    .demo-caption {
      font-size: 11px;
      font-weight: 500;
      letter-spacing: .05em;
      text-transform: uppercase;
      color: var(--ink-4);
      margin-bottom: 16px;
      display: block;
      width: 100%;
    }

    /* ════════════════════════════════════════════════════════
       CALLOUT — "WHAT THIS DOES" EXPLANATIONS FOR NOOBS
    ════════════════════════════════════════════════════════ */
    .explain-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
      gap: 12px;
      margin: 20px 0 28px;
    }
    .explain-card {
      background: var(--fill-2);
      border: 1px solid var(--sep);
      border-radius: var(--radius-sm);
      padding: 18px 20px;
    }
    .explain-card-head {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 8px;
    }
    .explain-dot {
      width: 10px; height: 10px;
      border-radius: 50%;
      flex-shrink: 0;
    }
    .explain-card-name {
      font-size: 13px;
      font-weight: 700;
      color: var(--ink);
      font-family: var(--mono);
    }
    .explain-card-body {
      font-size: 13px;
      color: var(--ink-3);
      line-height: 1.6;
    }
    .explain-card-body strong { color: var(--ink); font-weight: 600; }

    /* ════════════════════════════════════════════════════════
       SPEC TABLE
    ════════════════════════════════════════════════════════ */
    .spec-table {
      border: 1px solid var(--sep);
      border-radius: var(--radius);
      overflow: hidden;
      margin: 16px 0 28px;
    }
    .spec-row {
      display: grid;
      grid-template-columns: 200px 1fr;
      border-bottom: 1px solid var(--sep);
    }
    .spec-row:last-child { border-bottom: none; }
    .spec-key {
      padding: 13px 20px;
      font-family: var(--mono);
      font-size: 12px;
      font-weight: 500;
      color: var(--ink-2);
      background: var(--fill-2);
      border-right: 1px solid var(--sep);
      display: flex;
      align-items: center;
    }
    .spec-val {
      padding: 13px 20px;
      font-size: 13.5px;
      color: var(--ink-2);
      display: flex;
      align-items: center;
      gap: 8px;
      line-height: 1.55;
    }
    .spec-swatch {
      display: inline-block;
      width: 13px; height: 13px;
      border-radius: 50%;
      border: 1px solid rgba(0,0,0,.1);
      vertical-align: middle;
      flex-shrink: 0;
    }

    /* ════════════════════════════════════════════════════════
       STEP-BY-STEP GUIDE — COPY & USE
    ════════════════════════════════════════════════════════ */
    .steps {
      counter-reset: step-counter;
      display: flex;
      flex-direction: column;
      gap: 0;
      margin: 16px 0 28px;
      border: 1px solid var(--sep);
      border-radius: var(--radius);
      overflow: hidden;
    }
    .step {
      display: flex;
      gap: 20px;
      padding: 22px 24px;
      border-bottom: 1px solid var(--sep);
      counter-increment: step-counter;
      background: var(--white);
      transition: background .15s;
    }
    .step:last-child { border-bottom: none; }
    .step:hover { background: var(--fill-2); }
    .step-num {
      width: 28px; height: 28px;
      border-radius: 50%;
      background: var(--rose);
      color: #fff;
      font-size: 13px;
      font-weight: 700;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      margin-top: 1px;
    }
    .step-content {}
    .step-title {
      font-size: 14.5px;
      font-weight: 600;
      color: var(--ink);
      margin-bottom: 4px;
    }
    .step-body {
      font-size: 13.5px;
      color: var(--ink-3);
      line-height: 1.65;
    }
    .step-body code { font-size: .8em; }

    /* ════════════════════════════════════════════════════════
       CODE BLOCK
    ════════════════════════════════════════════════════════ */
    .code-block {
      border: 1px solid var(--sep);
      border-radius: var(--radius-sm);
      overflow: hidden;
      margin: 12px 0 28px;
      background: #fafafa;
    }
    .code-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 9px 16px;
      background: var(--fill-1);
      border-bottom: 1px solid var(--sep);
    }
    .code-lang-tag {
      font-size: 10px;
      font-weight: 700;
      letter-spacing: .07em;
      text-transform: uppercase;
      color: var(--ink-4);
    }
    .copy-btn {
      font-family: inherit;
      font-size: 11.5px;
      font-weight: 600;
      color: var(--rose);
      background: none;
      border: none;
      cursor: pointer;
      padding: 4px 10px;
      border-radius: 5px;
      transition: background .15s;
      letter-spacing: .01em;
    }
    .copy-btn:hover { background: var(--rose-soft); }
    pre {
      padding: 20px 22px;
      overflow-x: auto;
      font-family: var(--mono);
      font-size: 12.5px;
      line-height: 1.8;
      color: var(--ink-2);
    }
    /* Syntax colours */
    .t  { color: #0070c9; }
    .a  { color: #b97000; }
    .s  { color: #1a8f40; }
    .k  { color: #8e44ad; }
    .c  { color: var(--ink-4); font-style: italic; }

    /* ════════════════════════════════════════════════════════
       VARIANT SHOWCASE CARDS
    ════════════════════════════════════════════════════════ */
    .variant-card {
      border: 1px solid var(--sep);
      border-radius: var(--radius);
      overflow: hidden;
      margin: 20px 0;
    }
    .variant-card-head {
      padding: 20px 24px 16px;
      border-bottom: 1px solid var(--sep);
      background: var(--white);
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 16px;
      flex-wrap: wrap;
    }
    .variant-card-info {}
    .variant-name {
      font-size: 15px;
      font-weight: 700;
      color: var(--ink);
      margin-bottom: 4px;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .variant-class {
      font-family: var(--mono);
      font-size: 11.5px;
      background: var(--fill-1);
      color: var(--rose);
      padding: 2px 8px;
      border-radius: 4px;
      font-weight: 500;
    }
    .variant-desc {
      font-size: 13.5px;
      color: var(--ink-3);
      line-height: 1.6;
      max-width: 480px;
    }
    .when-tag {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      font-size: 11.5px;
      font-weight: 600;
      padding: 4px 10px;
      border-radius: 99px;
      white-space: nowrap;
      flex-shrink: 0;
    }
    .when-tag.use  { background: #e6f9f3; color: #0a6e52; }
    .when-tag.warn { background: #fff4e5; color: #8a4800; }
    .when-tag.never { background: #fff0f0; color: #b82020; }
    .variant-card-demo {
      background: var(--fill-2);
      padding: 24px;
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      align-items: center;
    }
    .variant-card-demo.dark-bg { background: #1d1d1f; }
    .variant-card-code {
      padding: 0;
      border-top: 1px solid var(--sep);
    }
    .variant-card-code .code-block {
      border: none;
      border-radius: 0;
      margin: 0;
    }
    .variant-card-code .code-bar { border-radius: 0; }

    /* ════════════════════════════════════════════════════════
       SIZE RULER
    ════════════════════════════════════════════════════════ */
    .size-ruler {
      display: flex;
      flex-wrap: wrap;
      align-items: flex-end;
      gap: 28px;
    }
    .size-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
    }
    .size-item-label {
      font-size: 11px;
      font-family: var(--mono);
      color: var(--ink-4);
      letter-spacing: .03em;
      text-align: center;
      line-height: 1.5;
    }

    /* ════════════════════════════════════════════════════════
       STATES STRIP
    ════════════════════════════════════════════════════════ */
    .states-strip {
      display: flex;
      flex-wrap: wrap;
      align-items: flex-end;
      gap: 32px;
    }
    .state-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
    }
    .state-item-label {
      font-size: 11px;
      font-family: var(--mono);
      color: var(--ink-4);
    }

    /* ════════════════════════════════════════════════════════
       NOTE / WARNING CALLOUT
    ════════════════════════════════════════════════════════ */
    .note {
      border-left: 3px solid var(--rose);
      background: rgba(255,56,92,.05);
      border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
      padding: 14px 18px;
      margin: 16px 0 24px;
      font-size: 13.5px;
      color: var(--ink-2);
      line-height: 1.7;
    }
    .note.tip {
      border-left-color: var(--teal);
      background: rgba(0,166,153,.05);
    }
    .note.warn {
      border-left-color: #f59e0b;
      background: rgba(245,158,11,.05);
    }
    .note strong { color: var(--ink); }
    .note-label {
      font-size: 11px;
      font-weight: 800;
      letter-spacing: .07em;
      text-transform: uppercase;
      margin-bottom: 4px;
      display: block;
    }
    .note .note-label { color: var(--rose); }
    .note.tip .note-label { color: var(--teal); }
    .note.warn .note-label { color: #d97706; }

    /* ════════════════════════════════════════════════════════
       ANATOMY DIAGRAM
    ════════════════════════════════════════════════════════ */
    .anatomy-figure {
      position: relative;
      display: inline-flex;
      justify-content: center;
      width: 100%;
      padding: 60px 20px;
    }
    .anatomy-annotation {
      position: absolute;
      display: flex;
      align-items: center;
      gap: 6px;
      font-size: 11.5px;
      font-family: var(--mono);
      color: var(--ink-3);
      white-space: nowrap;
    }
    .ann-dot {
      width: 6px; height: 6px;
      border-radius: 50%;
      background: var(--rose);
      flex-shrink: 0;
    }
    .ann-line {
      height: 1px;
      background: var(--sep);
      display: inline-block;
    }

    /* ════════════════════════════════════════════════════════
       ACCESSIBILITY TABLE
    ════════════════════════════════════════════════════════ */
    .a11y-table {
      width: 100%;
      border-collapse: collapse;
      font-size: 13.5px;
      border: 1px solid var(--sep);
      border-radius: var(--radius);
      overflow: hidden;
      margin: 16px 0 24px;
    }
    .a11y-table thead th {
      text-align: left;
      padding: 11px 18px;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: .06em;
      text-transform: uppercase;
      color: var(--ink-4);
      background: var(--fill-1);
      border-bottom: 1px solid var(--sep);
    }
    .a11y-table tbody tr { border-bottom: 1px solid var(--sep); }
    .a11y-table tbody tr:last-child { border-bottom: none; }
    .a11y-table td {
      padding: 13px 18px;
      color: var(--ink-2);
      line-height: 1.55;
      vertical-align: top;
    }
    .a11y-table td:first-child { font-weight: 600; color: var(--ink); font-size: 13px; }
    .check { color: var(--teal); font-weight: 700; }
    .you  { color: var(--rose); font-weight: 700; }

    /* ════════════════════════════════════════════════════════
       FILE TREE
    ════════════════════════════════════════════════════════ */
    .file-tree {
      font-family: var(--mono);
      font-size: 13px;
      line-height: 2;
      color: var(--ink-2);
      background: var(--fill-2);
      border: 1px solid var(--sep);
      border-radius: var(--radius-sm);
      padding: 20px 24px;
      margin: 12px 0 28px;
    }
    .ft-hl { color: var(--rose); font-weight: 700; }

    /* ════════════════════════════════════════════════════════
       BUTTON GROUP DEMO
    ════════════════════════════════════════════════════════ */
    .btn-group-wrap { width: 100%; }
    .block-preview {
      width: 100%;
      max-width: 360px;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    /* ════════════════════════════════════════════════════════
       INLINE BADGE FOR DO / DON'T
    ════════════════════════════════════════════════════════ */
    .do-dont {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin: 16px 0 28px;
    }
    @media (max-width: 600px) { .do-dont { grid-template-columns: 1fr; } }
    .do-card, .dont-card {
      border-radius: var(--radius-sm);
      padding: 18px 20px;
      font-size: 13.5px;
      line-height: 1.65;
      color: var(--ink-2);
    }
    .do-card {
      background: #f0fdf7;
      border: 1.5px solid #86efca;
    }
    .dont-card {
      background: #fff5f5;
      border: 1.5px solid #fca5a5;
    }
    .do-card-label  { font-size: 11px; font-weight: 800; letter-spacing: .07em; text-transform: uppercase; color: #0a6e52; margin-bottom: 8px; }
    .dont-card-label { font-size: 11px; font-weight: 800; letter-spacing: .07em; text-transform: uppercase; color: #b82020; margin-bottom: 8px; }
    .do-card ul, .dont-card ul { padding-left: 16px; }
    .do-card li, .dont-card li { margin-bottom: 4px; }

    /* ════════════════════════════════════════════════════════
       REAL BUTTONS (since button.css may be external)
    ════════════════════════════════════════════════════════ */
    .btn {
      display: inline-flex; align-items: center; justify-content: center;
      gap: 8px; height: 44px; padding: 0 20px;
      border-radius: 999px; border: 1.5px solid transparent;
      font-family: inherit; font-size: 15px; font-weight: 600;
      letter-spacing: -.01em; cursor: pointer; white-space: nowrap;
      transition: background .16s, border-color .16s, color .16s, box-shadow .2s, transform .12s;
      text-decoration: none; outline: none; position: relative;
      overflow: hidden; user-select: none;
    }
    .btn:focus-visible { box-shadow: 0 0 0 3px rgba(255,56,92,.30); }
    .btn:active:not(:disabled) { transform: scale(0.97); }
    .btn:disabled { opacity: .38; cursor: not-allowed; pointer-events: none; }

    .btn-primary   { background: var(--rose); border-color: var(--rose); color: #fff; box-shadow: 0 2px 8px rgba(255,56,92,.25); }
    .btn-primary:hover:not(:disabled) { background: var(--rose-hover); border-color: var(--rose-hover); box-shadow: 0 6px 20px rgba(255,56,92,.32); }
    .btn-secondary { background: var(--ink); border-color: var(--ink); color: #fff; }
    .btn-secondary:hover:not(:disabled) { background: #333; box-shadow: 0 4px 16px rgba(0,0,0,.20); }
    .btn-outline   { background: transparent; border-color: var(--sep); color: var(--ink); }
    .btn-outline:hover:not(:disabled) { border-color: var(--ink-3); background: var(--fill-1); }
    .btn-ghost     { background: transparent; border-color: transparent; color: var(--ink); }
    .btn-ghost:hover:not(:disabled) { background: rgba(34,34,34,.06); }
    .btn-ghost-primary { background: transparent; border-color: transparent; color: var(--rose); }
    .btn-ghost-primary:hover:not(:disabled) { background: var(--rose-soft); }
    .btn-soft      { background: var(--rose-soft); border-color: transparent; color: var(--rose); }
    .btn-soft:hover:not(:disabled) { background: rgba(255,56,92,.15); }
    .btn-accent    { background: var(--teal); border-color: var(--teal); color: #fff; box-shadow: 0 2px 8px rgba(0,166,153,.22); }
    .btn-accent:hover:not(:disabled) { background: #008f83; box-shadow: 0 6px 20px rgba(0,166,153,.28); }
    .btn-danger    { background: var(--danger); border-color: var(--danger); color: #fff; }
    .btn-danger:hover:not(:disabled) { background: #a82c10; box-shadow: 0 4px 16px rgba(192,57,43,.28); }
    .btn-danger-outline { background: transparent; border-color: var(--danger); color: var(--danger); }
    .btn-danger-outline:hover:not(:disabled) { background: rgba(192,57,43,.06); }
    .btn-white     { background: #fff; border-color: #fff; color: var(--ink); box-shadow: 0 2px 12px rgba(0,0,0,.18); }
    .btn-white:hover:not(:disabled) { box-shadow: 0 6px 24px rgba(0,0,0,.24); }
    .btn-link      { background: transparent; border-color: transparent; color: var(--rose); height: auto; padding: 0; font-weight: 400; font-size: 14px; text-decoration: underline; text-underline-offset: 3px; border-radius: 2px; }
    .btn-link:hover { text-decoration: none; }

    .btn-toggle    { background: transparent; border-color: var(--sep); color: var(--ink-3); }
    .btn-toggle:hover:not(:disabled) { border-color: var(--ink-3); color: var(--ink); }
    .btn-toggle.is-selected { background: var(--rose); border-color: var(--rose); color: #fff; box-shadow: 0 2px 8px rgba(255,56,92,.25); }

    .btn-xl   { height: 60px; padding: 0 28px; font-size: 17px; }
    .btn-lg   { height: 52px; padding: 0 24px; font-size: 16px; }
    .btn-sm   { height: 36px; padding: 0 14px; font-size: 13px; }
    .btn-xs   { height: 28px; padding: 0 10px; font-size: 11.5px; }
    .btn-block { width: 100%; display: flex; }

    .btn-icon { width: 1.2em; height: 1.2em; flex-shrink: 0; }
    .btn-icon-only { padding: 0; width: 44px; }
    .btn-icon-only.btn-sm { width: 36px; }

    .btn-badge {
      background: rgba(255,255,255,.25); color: inherit;
      font-size: .73em; font-weight: 700;
      padding: 1px 7px; border-radius: 999px; line-height: 1.6;
    }
    .btn-secondary .btn-badge { background: rgba(255,255,255,.2); }
    .btn-outline .btn-badge { background: var(--fill-1); color: var(--rose); }

    .btn-spinner {
      width: 15px; height: 15px;
      border: 2px solid rgba(255,255,255,.3);
      border-top-color: #fff; border-radius: 50%;
      animation: spin .7s linear infinite; flex-shrink: 0;
    }
    @keyframes spin { to { transform: rotate(360deg); } }

    .btn-group { display: flex; flex-wrap: wrap; gap: 10px; align-items: center; }
    .btn-group-attached {
      display: inline-flex; border-radius: 999px;
      border: 1.5px solid var(--sep); overflow: hidden;
    }
    .btn-group-attached .btn {
      border-radius: 0; border: none;
      border-right: 1.5px solid var(--sep);
      height: 40px; font-size: 14px;
    }
    .btn-group-attached .btn:last-child { border-right: none; }
    .btn-group-attached .btn:hover:not(:disabled) { background: var(--fill-1); }

    /* ════════════════════════════════════════════════════════
       FADE IN
    ════════════════════════════════════════════════════════ */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(14px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    section, .intro-card, .demo-stage {
      animation: fadeUp .45s cubic-bezier(.22,1,.36,1) both;
    }
  </style>
</head>
<body>

<?php
$partials = __DIR__ . '/../../';
?>

<?php include $partials . 'header.php'; ?>
<?php include $partials . 'drawer_sidebar.php'; ?>

<div class="page-layout">

  <!-- ── Left sidebar (untouched) ── -->
  <aside class="sidebar-left" style="z-index:10000;">
    <?php include $partials . 'left_sidebar.php'; ?>
  </aside>

  <!-- ══════════════════════════════════════════════════════
       MAIN CONTENT
  ══════════════════════════════════════════════════════════ -->
  <main class="page-main">


    <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
         HERO / OVERVIEW
    ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
    <div id="overview">
      <p class="pg-eyebrow">Components · Atom</p>
      <h1 class="pg-title">Button</h1>
      <p class="pg-lead">The primary action element in HolidaySeva. Buttons trigger bookings, submit forms, and guide users through every flow — from search to checkout.</p>

      <!-- Beginner intro card -->
      <div class="intro-card">
        <div class="intro-card-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"/>
            <line x1="12" y1="8" x2="12" y2="12"/>
            <line x1="12" y1="16" x2="12.01" y2="16"/>
          </svg>
        </div>
        <div>
          <div class="intro-card-title">New to buttons?</div>
          <div class="intro-card-body">
            A <strong>button</strong> is an HTML element that users click to <strong>do something</strong> — book a trip, submit a form, save a listing.
            In code, it looks like <code>&lt;button class="btn btn-primary"&gt;Book Now&lt;/button&gt;</code>.
            You give it a class to choose its colour and style. That's it. Everything else — hover effects, animations,
            focus rings — is handled automatically by <code>button.css</code> and <code>button.js</code>.
          </div>
        </div>
      </div>
    </div>

    <!-- Live demo strip -->
    <div class="demo-stage" style="margin-top: 28px;">
      <span class="demo-caption">Live demo — hover and click each button</span>
      <button class="btn btn-primary">Book Now</button>
      <button class="btn btn-secondary">Explore</button>
      <button class="btn btn-outline">Save</button>
      <button class="btn btn-ghost">Learn More</button>
      <button class="btn btn-soft">Filters</button>
      <button class="btn btn-accent">Contact Host</button>
    </div>

    <hr class="rule">


    <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
         HOW TO USE (QUICK START)
    ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
    <section id="quickstart">
      <p class="sec-label">Step-by-step</p>
      <h2 class="sec-title">Quick Start — 3 steps to your first button</h2>
      <p class="sec-desc">Follow these three steps and you'll have a working button in under 2 minutes, even if you've never done this before.</p>

      <div class="steps">
        <div class="step">
          <div class="step-num">1</div>
          <div class="step-content">
            <div class="step-title">Link the stylesheet in your <code>&lt;head&gt;</code></div>
            <div class="step-body">
              This one line loads all the button styles. Paste it inside the <code>&lt;head&gt;</code> section of your HTML file,
              <em>after</em> your main <code>design-system.css</code> link.
            </div>
          </div>
        </div>
        <div class="step">
          <div class="step-num">2</div>
          <div class="step-content">
            <div class="step-title">Add the script before <code>&lt;/body&gt;</code> <em>(optional but recommended)</em></div>
            <div class="step-body">
              This enables loading spinners, click ripples, and toggle behaviour.
              You don't need it if your buttons are purely decorative — but you almost always do.
            </div>
          </div>
        </div>
        <div class="step">
          <div class="step-num">3</div>
          <div class="step-content">
            <div class="step-title">Write a <code>&lt;button&gt;</code> with two classes</div>
            <div class="step-body">
              Always use <code>.btn</code> as the base class, then add a variant class like <code>.btn-primary</code>.
              The label inside the tag is what the user sees. Done.
            </div>
          </div>
        </div>
      </div>

      <div class="code-block">
        <div class="code-bar">
          <span class="code-lang-tag">HTML — complete setup</span>
          <button class="copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
        <pre><code><span class="c">&lt;!-- Step 1: In &lt;head&gt; --&gt;</span>
<span class="t">&lt;link</span> <span class="a">rel</span>=<span class="s">"stylesheet"</span> <span class="a">href</span>=<span class="s">"https://holidayseva.com/UI/Atom/button/button.css"</span><span class="t">&gt;</span>

<span class="c">&lt;!-- Step 2: Before &lt;/body&gt; --&gt;</span>
<span class="t">&lt;script</span> <span class="a">src</span>=<span class="s">"https://holidayseva.com/UI/Atom/button/button.js"</span><span class="t">&gt;&lt;/script&gt;</span>

<span class="c">&lt;!-- Step 3: Your button --&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span><span class="t">&gt;</span>Book Now<span class="t">&lt;/button&gt;</span></code></pre>
      </div>

      <div class="note tip">
        <span class="note-label">💡 Tip</span>
        Always use a native <code>&lt;button&gt;</code> HTML element. <strong>Never</strong> use a <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code>
        styled to look like a button — that breaks keyboard navigation and screen readers.
      </div>
    </section>

    <hr class="rule">


    <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
         ANATOMY
    ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
    <section id="anatomy">
      <p class="sec-label">How it's built</p>
      <h2 class="sec-title">Anatomy</h2>
      <p class="sec-desc">Every button is made of up to four parts. You control which parts appear by adding classes or child elements.</p>

      <div class="demo-stage center">
        <div class="anatomy-figure">
          <button class="btn btn-primary" style="pointer-events:none; gap:10px; position:relative; z-index:1;">
            <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
            </svg>
            Search Stays
          </button>
          <!-- Container callout -->
          <div class="anatomy-annotation" style="top:14px;left:50%;transform:translateX(-50%);">
            <span class="ann-dot"></span>
            <span class="ann-line" style="width:24px;"></span>
            <span>.btn (container)</span>
          </div>
          <!-- Icon callout -->
          <div class="anatomy-annotation" style="bottom:14px;left:calc(50% - 80px);">
            <span class="ann-dot"></span>
            <span class="ann-line" style="width:18px;"></span>
            <span>.btn-icon</span>
          </div>
          <!-- Label callout -->
          <div class="anatomy-annotation" style="bottom:14px;right:calc(50% - 80px);">
            <span class="ann-line" style="width:18px;"></span>
            <span class="ann-dot"></span>
            <span style="margin-left:4px;">label (text)</span>
          </div>
        </div>
      </div>

      <div class="explain-grid">
        <div class="explain-card">
          <div class="explain-card-head">
            <span class="explain-dot" style="background:var(--rose)"></span>
            <span class="explain-card-name">.btn</span>
          </div>
          <div class="explain-card-body"><strong>Required.</strong> The wrapper element. Controls padding, shape, colour, shadows, and transitions. Every button must have this class.</div>
        </div>
        <div class="explain-card">
          <div class="explain-card-head">
            <span class="explain-dot" style="background:#0070c9"></span>
            <span class="explain-card-name">.btn-icon</span>
          </div>
          <div class="explain-card-body"><strong>Optional.</strong> An SVG icon placed before or after the label. Automatically inherits the button's text colour — no extra colour code needed.</div>
        </div>
        <div class="explain-card">
          <div class="explain-card-head">
            <span class="explain-dot" style="background:#1a8f40"></span>
            <span class="explain-card-name">label</span>
          </div>
          <div class="explain-card-body"><strong>Required.</strong> The text the user reads. Keep it short and action-oriented: "Book Now", "Save", "Cancel". Avoid vague labels like "Click here".</div>
        </div>
        <div class="explain-card">
          <div class="explain-card-head">
            <span class="explain-dot" style="background:#8e44ad"></span>
            <span class="explain-card-name">.btn-badge</span>
          </div>
          <div class="explain-card-body"><strong>Optional.</strong> A small chip showing a number — e.g. a cart count. Place it as a <code>&lt;span class="btn-badge"&gt;</code> at the end of the label.</div>
        </div>
        <div class="explain-card">
          <div class="explain-card-head">
            <span class="explain-dot" style="background:#d97706"></span>
            <span class="explain-card-name">.btn-spinner</span>
          </div>
          <div class="explain-card-body"><strong>Auto-injected.</strong> When a button is loading, <code>button.js</code> adds this animated spinner automatically. You never need to write it yourself.</div>
        </div>
      </div>
    </section>

    <hr class="rule">


    <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
         SPECIFICATIONS
    ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
    <section id="specs">
      <p class="sec-label">Design tokens</p>
      <h2 class="sec-title">Specifications</h2>
      <p class="sec-desc">These are the exact values used in <code>button.css</code> for the default <code>md</code> size. You should never need to override these — they're already correct.</p>

      <div class="spec-table">
        <div class="spec-row">
          <span class="spec-key">height</span>
          <span class="spec-val">44px — matches Apple's minimum touch target size so buttons are easy to tap on mobile</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">padding-inline</span>
          <span class="spec-val">20px — space on the left and right sides inside the button</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">border-radius</span>
          <span class="spec-val">999px — creates a pill/capsule shape; a very large value ensures it's always fully rounded</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">border-width</span>
          <span class="spec-val">1.5px — thin enough to look refined, thick enough to be visible</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">font-weight</span>
          <span class="spec-val">600 — semi-bold; labels are intentionally heavier than body text</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">font-size</span>
          <span class="spec-val">15px — slightly larger than body for readability</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">letter-spacing</span>
          <span class="spec-val">−0.01em — slight tightening gives a polished, premium feel</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">icon gap</span>
          <span class="spec-val">8px — space between icon and label text</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">press animation</span>
          <span class="spec-val">scale(0.97) over 120ms — subtle shrink on click gives physical feedback</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">transition</span>
          <span class="spec-val">160ms for colour &amp; background · 200ms for shadow</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">--color-primary</span>
          <span class="spec-val"><span class="spec-swatch" style="background:#FF385C;"></span> #FF385C — HolidaySeva rose</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">--color-secondary</span>
          <span class="spec-val"><span class="spec-swatch" style="background:#222222; border-color:rgba(0,0,0,.2);"></span> #222222 — near black</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">--color-accent</span>
          <span class="spec-val"><span class="spec-swatch" style="background:#00A699;"></span> #00A699 — HolidaySeva teal</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">focus ring</span>
          <span class="spec-val">3px · rgba(255,56,92,0.30) — only appears when navigating with a keyboard, never on mouse click</span>
        </div>
      </div>
    </section>

    <hr class="rule">


    <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
         VARIANTS
    ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
    <section id="variants">
      <p class="sec-label">All variants</p>
      <h2 class="sec-title">Variants</h2>
      <p class="sec-desc">
        There are <strong>10 variants</strong>. Each has a single, specific role. Using the wrong variant in the wrong place
        will confuse users — so read each "When to use" carefully.
      </p>

      <div class="note warn">
        <span class="note-label">⚠️ Rule</span>
        <strong>Use only one Primary button per screen.</strong> If you put two Primary buttons side by side,
        the user won't know which action matters most. Use a Secondary or Outline button for the less important action.
      </div>

      <!-- Do / Don't -->
      <div class="do-dont">
        <div class="do-card">
          <div class="do-card-label">✅ Do</div>
          <ul>
            <li>One <code>btn-primary</code> per view</li>
            <li>Pair with <code>btn-outline</code> or <code>btn-ghost</code> for secondary actions</li>
            <li>Use <code>btn-danger</code> only for delete/cancel</li>
            <li>Use <code>btn-accent</code> only for messaging</li>
          </ul>
        </div>
        <div class="dont-card">
          <div class="dont-card-label">❌ Don't</div>
          <ul>
            <li>Two <code>btn-primary</code> buttons next to each other</li>
            <li>Use <code>btn-danger</code> for a regular edit action</li>
            <li>Mix <code>btn-accent</code> with <code>btn-primary</code> in the same action row</li>
            <li>Use <code>btn-link</code> to trigger actions (use it only for navigation)</li>
          </ul>
        </div>
      </div>

      <!-- ─── PRIMARY ─── -->
      <div class="variant-card" id="v-primary">
        <div class="variant-card-head">
          <div class="variant-card-info">
            <div class="variant-name">
              Primary
              <code class="variant-class">btn-primary</code>
            </div>
            <div class="variant-desc">
              The strongest call-to-action. Filled with HolidaySeva rose. Use <strong>once per screen</strong>
              for the single most important action — booking, confirming, submitting.
            </div>
          </div>
          <span class="when-tag use">✅ Use for: Book, Confirm, Submit</span>
        </div>
        <div class="variant-card-demo">
          <button class="btn btn-primary btn-xl">xl</button>
          <button class="btn btn-primary btn-lg">lg</button>
          <button class="btn btn-primary">md (default)</button>
          <button class="btn btn-primary btn-sm">sm</button>
          <button class="btn btn-primary btn-xs">xs</button>
        </div>
        <div class="variant-card-code">
          <div class="code-block">
            <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
            <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span><span class="t">&gt;</span>Book Now<span class="t">&lt;/button&gt;</span></code></pre>
          </div>
        </div>
      </div>

      <!-- ─── SECONDARY ─── -->
      <div class="variant-card">
        <div class="variant-card-head">
          <div class="variant-card-info">
            <div class="variant-name">Secondary <code class="variant-class">btn-secondary</code></div>
            <div class="variant-desc">Dark filled. Strong, but clearly subordinate to Primary. Pair it alongside a Primary for a second important action like "Browse All".</div>
          </div>
          <span class="when-tag use">✅ Use for: Browse All, Explore</span>
        </div>
        <div class="variant-card-demo">
          <button class="btn btn-secondary">Explore Stays</button>
          <button class="btn btn-secondary btn-sm">Explore</button>
        </div>
        <div class="variant-card-code">
          <div class="code-block">
            <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
            <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-secondary"</span><span class="t">&gt;</span>Explore Stays<span class="t">&lt;/button&gt;</span></code></pre>
          </div>
        </div>
      </div>

      <!-- ─── OUTLINE ─── -->
      <div class="variant-card">
        <div class="variant-card-head">
          <div class="variant-card-info">
            <div class="variant-name">Outline <code class="variant-class">btn-outline</code></div>
            <div class="variant-desc">Transparent background with a visible border. Great for secondary actions inside cards and forms. Less visually dominant than Primary or Secondary.</div>
          </div>
          <span class="when-tag use">✅ Use for: Save, Edit, View Details</span>
        </div>
        <div class="variant-card-demo">
          <button class="btn btn-outline">Save to Wishlist</button>
          <button class="btn btn-outline btn-sm">Save</button>
        </div>
        <div class="variant-card-code">
          <div class="code-block">
            <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
            <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-outline"</span><span class="t">&gt;</span>Save to Wishlist<span class="t">&lt;/button&gt;</span></code></pre>
          </div>
        </div>
      </div>

      <!-- ─── GHOST ─── -->
      <div class="variant-card">
        <div class="variant-card-head">
          <div class="variant-card-info">
            <div class="variant-name">Ghost <code class="variant-class">btn-ghost</code> · <code class="variant-class">btn-ghost-primary</code></div>
            <div class="variant-desc">No visible border or background until you hover over it. The "quietest" button — use for low-importance actions in toolbars, menus, or dense UIs.</div>
          </div>
          <span class="when-tag warn">⚠️ Low emphasis only</span>
        </div>
        <div class="variant-card-demo">
          <button class="btn btn-ghost">Learn More</button>
          <button class="btn btn-ghost-primary">View All Listings</button>
        </div>
        <div class="variant-card-code">
          <div class="code-block">
            <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
            <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-ghost"</span><span class="t">&gt;</span>Learn More<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-ghost-primary"</span><span class="t">&gt;</span>View All Listings<span class="t">&lt;/button&gt;</span></code></pre>
          </div>
        </div>
      </div>

      <!-- ─── SOFT ─── -->
      <div class="variant-card">
        <div class="variant-card-head">
          <div class="variant-card-info">
            <div class="variant-name">Soft <code class="variant-class">btn-soft</code></div>
            <div class="variant-desc">Light rose-tinted background with rose text. Friendly and visible without being aggressive. Perfect for filter chips and category pills.</div>
          </div>
          <span class="when-tag use">✅ Use for: Filters, Tags, Categories</span>
        </div>
        <div class="variant-card-demo">
          <button class="btn btn-soft">Apply Filters</button>
          <button class="btn btn-soft btn-sm">Beachfront</button>
          <button class="btn btn-soft btn-sm">Pet-friendly</button>
        </div>
        <div class="variant-card-code">
          <div class="code-block">
            <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
            <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-soft"</span><span class="t">&gt;</span>Apply Filters<span class="t">&lt;/button&gt;</span></code></pre>
          </div>
        </div>
      </div>

      <!-- ─── ACCENT ─── -->
      <div class="variant-card">
        <div class="variant-card-head">
          <div class="variant-card-info">
            <div class="variant-name">Accent <code class="variant-class">btn-accent</code></div>
            <div class="variant-desc">HolidaySeva teal — strictly reserved for messaging and communication actions. Complements the primary rose without competing with it.</div>
          </div>
          <span class="when-tag use">✅ Use for: Message, Contact Host</span>
        </div>
        <div class="variant-card-demo">
          <button class="btn btn-accent">Contact Host</button>
          <button class="btn btn-accent btn-sm">Message</button>
        </div>
        <div class="variant-card-code">
          <div class="code-block">
            <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
            <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-accent"</span><span class="t">&gt;</span>Contact Host<span class="t">&lt;/button&gt;</span></code></pre>
          </div>
        </div>
      </div>

      <!-- ─── DANGER ─── -->
      <div class="variant-card">
        <div class="variant-card-head">
          <div class="variant-card-info">
            <div class="variant-name">Danger <code class="variant-class">btn-danger</code> · <code class="variant-class">btn-danger-outline</code></div>
            <div class="variant-desc">Red — for destructive actions that cannot be undone. <strong>Always</strong> show a confirmation dialog before executing the action. Never use this for a regular edit.</div>
          </div>
          <span class="when-tag never">🚫 Destructive only</span>
        </div>
        <div class="variant-card-demo">
          <button class="btn btn-danger">Cancel Booking</button>
          <button class="btn btn-danger-outline">Remove Listing</button>
        </div>
        <div class="variant-card-code">
          <div class="code-block">
            <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
            <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-danger"</span><span class="t">&gt;</span>Cancel Booking<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-danger-outline"</span><span class="t">&gt;</span>Remove Listing<span class="t">&lt;/button&gt;</span></code></pre>
          </div>
        </div>
      </div>

      <!-- ─── WHITE ─── -->
      <div class="variant-card">
        <div class="variant-card-head">
          <div class="variant-card-info">
            <div class="variant-name">White <code class="variant-class">btn-white</code></div>
            <div class="variant-desc">White filled — for use on dark or photo backgrounds only. Invisible on a white page background, so only use it inside dark containers or hero images.</div>
          </div>
          <span class="when-tag warn">⚠️ Dark backgrounds only</span>
        </div>
        <div class="variant-card-demo dark-bg">
          <button class="btn btn-white">Explore Destinations</button>
        </div>
        <div class="variant-card-code">
          <div class="code-block">
            <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
            <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-white"</span><span class="t">&gt;</span>Explore Destinations<span class="t">&lt;/button&gt;</span></code></pre>
          </div>
        </div>
      </div>

      <!-- ─── LINK ─── -->
      <div class="variant-card">
        <div class="variant-card-head">
          <div class="variant-card-info">
            <div class="variant-name">Link <code class="variant-class">btn-link</code></div>
            <div class="variant-desc">Looks like a hyperlink. Use it inside body copy for <strong>navigation</strong> — not for triggering actions. If clicking it does something (like deleting data), use a different variant.</div>
          </div>
          <span class="when-tag warn">⚠️ Navigation only</span>
        </div>
        <div class="variant-card-demo">
          <button class="btn btn-link">View full cancellation policy</button>
        </div>
        <div class="variant-card-code">
          <div class="code-block">
            <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
            <pre><code><span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-link"</span><span class="t">&gt;</span>View full cancellation policy<span class="t">&lt;/button&gt;</span></code></pre>
          </div>
        </div>
      </div>

    </section>

    <hr class="rule">


    <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
         SIZES
    ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
    <section id="sizes">
      <p class="sec-label">Sizing</p>
      <h2 class="sec-title">Sizes</h2>
      <p class="sec-desc">
        There are 5 sizes. <strong>You don't need a size class for the default</strong> — just <code>.btn .btn-primary</code>
        gives you the standard 44px button. Only add a size class when you need something bigger or smaller.
      </p>

      <div class="demo-stage">
        <div class="size-ruler">
          <div class="size-item">
            <button class="btn btn-primary btn-xl">Get Started</button>
            <span class="size-item-label">btn-xl<br>60px · Hero CTAs</span>
          </div>
          <div class="size-item">
            <button class="btn btn-primary btn-lg">Book a Stay</button>
            <span class="size-item-label">btn-lg<br>52px · Section CTAs</span>
          </div>
          <div class="size-item">
            <button class="btn btn-primary">Book Now</button>
            <span class="size-item-label">default md<br>44px · Standard</span>
          </div>
          <div class="size-item">
            <button class="btn btn-primary btn-sm">Save</button>
            <span class="size-item-label">btn-sm<br>36px · Cards &amp; rows</span>
          </div>
          <div class="size-item">
            <button class="btn btn-primary btn-xs">New</button>
            <span class="size-item-label">btn-xs<br>28px · Tags only</span>
          </div>
        </div>
      </div>

      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="c">&lt;!-- No size class = default 44px --&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span><span class="t">&gt;</span>Default<span class="t">&lt;/button&gt;</span>

<span class="c">&lt;!-- Bigger --&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary btn-xl"</span><span class="t">&gt;</span>XL · 60px<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary btn-lg"</span><span class="t">&gt;</span>Large · 52px<span class="t">&lt;/button&gt;</span>

<span class="c">&lt;!-- Smaller --&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary btn-sm"</span><span class="t">&gt;</span>Small · 36px<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary btn-xs"</span><span class="t">&gt;</span>XS · 28px<span class="t">&lt;/button&gt;</span></code></pre>
      </div>

      <div class="subsec-title">Full-width button</div>
      <p class="body-text">
        Add <code>.btn-block</code> to make a button stretch to fill its container's width.
        Commonly used in checkout modals, mobile forms, and bottom action bars.
      </p>
      <div class="demo-stage column">
        <div class="block-preview">
          <button class="btn btn-primary btn-block">Confirm &amp; Pay</button>
          <button class="btn btn-outline btn-block">Save for Later</button>
        </div>
      </div>
      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="c">&lt;!-- Just add btn-block to any button --&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary btn-block"</span><span class="t">&gt;</span>Confirm &amp; Pay<span class="t">&lt;/button&gt;</span></code></pre>
      </div>
    </section>

    <hr class="rule">


    <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
         ICONS & BADGES
    ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
    <section id="icons">
      <p class="sec-label">Composition</p>
      <h2 class="sec-title">Icons &amp; Badges</h2>
      <p class="sec-desc">
        You can add an SVG icon before or after the label, an icon-only button (no text), or a badge showing a count.
        Icons inherit the button's colour automatically — you never need to set their colour manually.
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
        <button class="btn btn-secondary">Cart <span class="btn-badge">3</span></button>
        <button class="btn btn-ghost btn-icon-only" aria-label="More options">
          <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="5" r="1"/><circle cx="12" cy="12" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
      </div>

      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">HTML — all icon patterns</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="c">&lt;!-- Leading icon: place the &lt;svg&gt; BEFORE the label text --&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span><span class="t">&gt;</span>
  <span class="t">&lt;svg</span> <span class="a">class</span>=<span class="s">"btn-icon"</span> <span class="a">aria-hidden</span>=<span class="s">"true"</span><span class="t">&gt;</span>...<span class="t">&lt;/svg&gt;</span>
  Search
<span class="t">&lt;/button&gt;</span>

<span class="c">&lt;!-- Trailing icon: place the &lt;svg&gt; AFTER the label text --&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-outline"</span><span class="t">&gt;</span>
  Save to List
  <span class="t">&lt;svg</span> <span class="a">class</span>=<span class="s">"btn-icon"</span> <span class="a">aria-hidden</span>=<span class="s">"true"</span><span class="t">&gt;</span>...<span class="t">&lt;/svg&gt;</span>
<span class="t">&lt;/button&gt;</span>

<span class="c">&lt;!-- Icon-only: add btn-icon-only + always write aria-label --&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-outline btn-icon-only"</span>
        <span class="a">aria-label</span>=<span class="s">"Share listing"</span><span class="t">&gt;</span>
  <span class="t">&lt;svg</span> <span class="a">class</span>=<span class="s">"btn-icon"</span> <span class="a">aria-hidden</span>=<span class="s">"true"</span><span class="t">&gt;</span>...<span class="t">&lt;/svg&gt;</span>
<span class="t">&lt;/button&gt;</span>

<span class="c">&lt;!-- Badge: wrap the count in a span.btn-badge at the end --&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-secondary"</span><span class="t">&gt;</span>
  Cart <span class="t">&lt;span</span> <span class="a">class</span>=<span class="s">"btn-badge"</span><span class="t">&gt;</span>3<span class="t">&lt;/span&gt;</span>
<span class="t">&lt;/button&gt;</span></code></pre>
      </div>

      <div class="note">
        <span class="note-label">⚠️ Icon-only buttons need aria-label</span>
        When there's no text, screen readers have nothing to announce. Always add <code>aria-label="…"</code>
        on the <code>&lt;button&gt;</code> element itself — this is what gets read aloud.
      </div>
    </section>

    <hr class="rule">


    <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
         STATES
    ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
    <section id="states">
      <p class="sec-label">Interactivity</p>
      <h2 class="sec-title">States</h2>
      <p class="sec-desc">A button can be in six states. Hover, focus, and active are fully automatic. You only need to write code for Disabled and Loading.</p>

      <div class="demo-stage">
        <div class="states-strip">
          <div class="state-item">
            <button class="btn btn-primary" tabindex="-1">Default</button>
            <span class="state-item-label">default</span>
          </div>
          <div class="state-item">
            <button class="btn btn-primary" style="background:#E8314F;border-color:#E8314F;box-shadow:0 6px 20px rgba(255,56,92,.32);" tabindex="-1">Hover</button>
            <span class="state-item-label">hover</span>
          </div>
          <div class="state-item">
            <button class="btn btn-primary" style="transform:scale(0.97);background:#CC2B47;border-color:#CC2B47;" tabindex="-1">Active</button>
            <span class="state-item-label">active / pressed</span>
          </div>
          <div class="state-item">
            <button class="btn btn-primary" style="box-shadow:0 0 0 3px rgba(255,56,92,.30);" tabindex="-1">Focus</button>
            <span class="state-item-label">focus (keyboard)</span>
          </div>
          <div class="state-item">
            <button class="btn btn-primary" disabled>Disabled</button>
            <span class="state-item-label">disabled</span>
          </div>
          <div class="state-item">
            <button class="btn btn-primary" disabled style="opacity:.82;">
              <span class="btn-spinner" aria-hidden="true"></span>
              Booking…
            </button>
            <span class="state-item-label">loading</span>
          </div>
        </div>
      </div>

      <!-- Disabled -->
      <div class="subsec-title">Disabled state</div>
      <p class="body-text">
        Add the <code>disabled</code> attribute directly on the <code>&lt;button&gt;</code> tag.
        CSS automatically reduces opacity to 38% and changes the cursor to "not-allowed".
        The button becomes unclickable — no extra JavaScript needed.
      </p>
      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="c">&lt;!-- Just add the "disabled" attribute --&gt;</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span> <span class="a">disabled</span><span class="t">&gt;</span>Book Now<span class="t">&lt;/button&gt;</span>

<span class="c">&lt;!-- For &lt;a&gt; tags (links styled as buttons), do this instead: --&gt;</span>
<span class="t">&lt;a</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span>
   <span class="a">aria-disabled</span>=<span class="s">"true"</span>
   <span class="a">tabindex</span>=<span class="s">"-1"</span><span class="t">&gt;</span>Book Now<span class="t">&lt;/a&gt;</span></code></pre>
      </div>

      <!-- Loading -->
      <div class="subsec-title">Loading state — interactive demo</div>
      <p class="body-text">
        When a user clicks Book and your page sends a request to a server, show a loading state.
        Call <code>ButtonSystem.loading(btn, true)</code> to start it — the JS automatically injects
        the spinner, disables the button, and announces "busy" to screen readers.
        Call <code>ButtonSystem.loading(btn, false)</code> when the server responds to restore it.
      </p>
      <div class="demo-stage">
        <button class="btn btn-primary" id="loadingDemo" data-loading-text="Booking…">Book Now — click me</button>
        <button class="btn btn-outline btn-sm" onclick="triggerLoadingDemo()">▶ Simulate loading</button>
      </div>
      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">JavaScript</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="c">// Manual control (most common approach)</span>
<span class="k">const</span> btn = document.<span class="k">querySelector</span>(<span class="s">'#bookBtn'</span>);

<span class="c">// When your fetch/API call starts:</span>
ButtonSystem.<span class="k">loading</span>(btn, <span class="k">true</span>);

<span class="c">// When your fetch/API call finishes:</span>
ButtonSystem.<span class="k">loading</span>(btn, <span class="k">false</span>);

<span class="c">// ── OR ── Auto-trigger with just HTML attributes (no JS needed)</span>
<span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span>
        <span class="a">data-loading-on-click</span>
        <span class="a">data-loading-text</span>=<span class="s">"Booking…"</span><span class="t">&gt;</span>
  Book Now
<span class="t">&lt;/button&gt;</span></code></pre>
      </div>

      <!-- Toggle -->
      <div class="subsec-title">Toggle / Selected state</div>
      <p class="body-text">
        Use <code>.btn-toggle</code> when a button can be switched between selected and unselected —
        like a room-type selector. Add the group inside a <code>.btn-group</code> wrapper.
        <code>button.js</code> automatically handles the selected highlight and ARIA state.
      </p>
      <div class="demo-stage">
        <div class="btn-group">
          <button class="btn btn-toggle is-selected" aria-pressed="true">Entire Place</button>
          <button class="btn btn-toggle" aria-pressed="false">Private Room</button>
          <button class="btn btn-toggle" aria-pressed="false">Shared Room</button>
        </div>
      </div>
      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">HTML</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="c">&lt;!-- Wrap in btn-group, use btn-toggle on each button    --&gt;</span>
<span class="c">&lt;!-- Add is-selected + aria-pressed="true" to the default --&gt;</span>
<span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"btn-group"</span><span class="t">&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-toggle is-selected"</span>
          <span class="a">aria-pressed</span>=<span class="s">"true"</span><span class="t">&gt;</span>Entire Place<span class="t">&lt;/button&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-toggle"</span>
          <span class="a">aria-pressed</span>=<span class="s">"false"</span><span class="t">&gt;</span>Private Room<span class="t">&lt;/button&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-toggle"</span>
          <span class="a">aria-pressed</span>=<span class="s">"false"</span><span class="t">&gt;</span>Shared Room<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;/div&gt;</span></code></pre>
      </div>
      <div class="note tip">
        <span class="note-label">💡 Tip — Listening for toggle events</span>
        When a toggle button is clicked, <code>button.js</code> fires a custom event called <code>btn-toggle</code>
        with a <code>detail.pressed</code> value of <code>true</code> or <code>false</code>.
        You can listen to it exactly like a regular click or change event:
        <code>btn.addEventListener('btn-toggle', e =&gt; console.log(e.detail.pressed))</code>
      </div>
    </section>

    <hr class="rule">


    <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
         BUTTON GROUPS
    ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
    <section id="groups">
      <p class="sec-label">Grouping</p>
      <h2 class="sec-title">Button Groups</h2>
      <p class="sec-desc">Two ways to group buttons: spaced (with gap between) or attached (merged into one segmented control with borders touching).</p>

      <div class="subsec-title">Spaced group — <code>.btn-group</code></div>
      <p class="body-text">Wraps buttons in a flex container with 10px gaps. Use for action rows like Confirm + Save Draft + Cancel.</p>
      <div class="demo-stage">
        <div class="btn-group">
          <button class="btn btn-primary">Confirm Booking</button>
          <button class="btn btn-outline">Save Draft</button>
          <button class="btn btn-ghost">Cancel</button>
        </div>
      </div>

      <div class="subsec-title">Attached group — <code>.btn-group-attached</code></div>
      <p class="body-text">Buttons share borders and form a single segmented control. Use for mutually exclusive filter options like Day / Week / Month.</p>
      <div class="demo-stage">
        <div class="btn-group-attached">
          <button class="btn btn-outline">Day</button>
          <button class="btn btn-outline">Week</button>
          <button class="btn btn-outline">Month</button>
        </div>
      </div>

      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">HTML — both group types</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="c">&lt;!-- Spaced: gap between each button --&gt;</span>
<span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"btn-group"</span><span class="t">&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-primary"</span><span class="t">&gt;</span>Confirm<span class="t">&lt;/button&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-outline"</span><span class="t">&gt;</span>Save Draft<span class="t">&lt;/button&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-ghost"</span><span class="t">&gt;</span>Cancel<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;/div&gt;</span>

<span class="c">&lt;!-- Attached: borders merge, looks like one control --&gt;</span>
<span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"btn-group-attached"</span><span class="t">&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-outline"</span><span class="t">&gt;</span>Day<span class="t">&lt;/button&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-outline"</span><span class="t">&gt;</span>Week<span class="t">&lt;/button&gt;</span>
  <span class="t">&lt;button</span> <span class="a">class</span>=<span class="s">"btn btn-outline"</span><span class="t">&gt;</span>Month<span class="t">&lt;/button&gt;</span>
<span class="t">&lt;/div&gt;</span></code></pre>
      </div>
    </section>

    <hr class="rule">


    <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
         JAVASCRIPT API
    ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
    <section id="javascript">
      <p class="sec-label">JS Reference</p>
      <h2 class="sec-title">JavaScript API</h2>
      <p class="sec-desc">
        <code>button.js</code> loads automatically when you include the script tag. It exposes one
        public method and one custom event. Everything else runs silently in the background.
      </p>

      <div class="spec-table">
        <div class="spec-row">
          <span class="spec-key">ButtonSystem .loading(btn, true)</span>
          <span class="spec-val">Enters loading: injects spinner animation, disables button, sets <code>aria-busy="true"</code> for screen readers</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">ButtonSystem .loading(btn, false)</span>
          <span class="spec-val">Exits loading: restores original button content, re-enables, removes <code>aria-busy</code></span>
        </div>
        <div class="spec-row">
          <span class="spec-key">data-loading-on-click</span>
          <span class="spec-val">HTML attribute — triggers loading automatically on click. No JavaScript required.</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">data-loading-text="…"</span>
          <span class="spec-val">HTML attribute — sets the label shown during loading, e.g. "Booking…"</span>
        </div>
        <div class="spec-row">
          <span class="spec-key">btn-toggle (CustomEvent)</span>
          <span class="spec-val">Fires on every toggle click with <code>event.detail.pressed</code> (boolean). Listen with <code>addEventListener('btn-toggle', fn)</code></span>
        </div>
      </div>
    </section>

    <hr class="rule">


    <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
         INTEGRATION
    ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
    <section id="integration">
      <p class="sec-label">Setup</p>
      <h2 class="sec-title">Integration</h2>
      <p class="sec-desc">Where the files live, and what to add to your colours file to keep tokens consistent across all components.</p>

      <div class="subsec-title">File structure</div>
      <div class="file-tree">design_guidelines/<br>
├── header.php<br>
├── left_sidebar.php<br>
├── right_sidebar.php<br>
├── drawer_sidebar.php<br>
├── footer.php<br>
├── design-system.css<br>
└── Atom/<br>
&nbsp;&nbsp;&nbsp;&nbsp;└── button/<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├── <span class="ft-hl">button.php</span>&nbsp;&nbsp;← this page<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├── button.css&nbsp;&nbsp;← all styles<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└── button.js&nbsp;&nbsp;&nbsp;← loading/toggle/ripple</div>

      <div class="subsec-title">Required CSS token additions</div>
      <p class="body-text">
        These variables are used by <code>button.css</code> but aren't yet in your central <code>colors.css</code>.
        Add them once — they'll be picked up by buttons everywhere automatically.
      </p>
      <div class="code-block">
        <div class="code-bar"><span class="code-lang-tag">CSS — add to colors.css</span><button class="copy-btn" onclick="copyCode(this)">Copy</button></div>
        <pre><code><span class="c">/* Primary hover & pressed states */</span>
--color-primary-hover:    #E8314F;
--color-primary-pressed:  #CC2B47;

<span class="c">/* Ghost background on hover & press */</span>
--color-ghost-hover-bg:   rgba(34, 34, 34, 0.06);
--color-ghost-pressed-bg: rgba(34, 34, 34, 0.10);

<span class="c">/* Danger button interaction states */</span>
--color-danger-hover:     #A82C10;
--color-danger-pressed:   #8E240D;

<span class="c">/* Disabled state surfaces */</span>
--color-surface-disabled: #F5F5F5;
--color-text-disabled:    #B0B0B0;
--color-border-disabled:  #E0E0E0;</code></pre>
      </div>
    </section>

    <hr class="rule">


    <!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
         ACCESSIBILITY
    ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
    <section id="accessibility">
      <p class="sec-label">A11y</p>
      <h2 class="sec-title">Accessibility</h2>
      <p class="sec-desc">
        The button system is built to WCAG 2.1 AA. The table below shows what's handled automatically
        and what <strong>you</strong> are responsible for. Green = automatic. Red = your job.
      </p>

      <table class="a11y-table">
        <thead>
          <tr>
            <th>Requirement</th>
            <th>How it's handled</th>
            <th>Your job</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Touch target size</td>
            <td><span class="check">✅ Auto</span> — default md is 44px, the Apple minimum</td>
            <td>Don't override height below 44px on mobile</td>
          </tr>
          <tr>
            <td>Keyboard focus ring</td>
            <td><span class="check">✅ Auto</span> — 3px ring appears on keyboard navigation only</td>
            <td>Never write <code>outline: none</code> without adding your own ring</td>
          </tr>
          <tr>
            <td>Colour contrast</td>
            <td><span class="check">✅ Auto</span> — all variants pass 4.5:1 minimum ratio</td>
            <td>If you override colours, re-test contrast at <a href="https://webaim.org/resources/contrastchecker/" target="_blank" style="color:var(--rose);">webaim.org</a></td>
          </tr>
          <tr>
            <td>Disabled state</td>
            <td><span class="check">✅ Auto</span> — opacity and cursor handled by CSS</td>
            <td><span class="you">⚑ You</span> — add native <code>disabled</code> attribute to the element</td>
          </tr>
          <tr>
            <td>Loading state</td>
            <td><span class="check">✅ Auto</span> — <code>button.js</code> sets <code>aria-busy="true"</code></td>
            <td>Use <code>ButtonSystem.loading()</code> — don't manually add a spinner</td>
          </tr>
          <tr>
            <td>Toggle state</td>
            <td><span class="check">✅ Auto</span> — <code>button.js</code> keeps <code>aria-pressed</code> in sync</td>
            <td><span class="you">⚑ You</span> — set the correct initial <code>aria-pressed</code> value in markup</td>
          </tr>
          <tr>
            <td>Icon-only buttons</td>
            <td>❌ Not automatic</td>
            <td><span class="you">⚑ You</span> — always add <code>aria-label="…"</code> on the button element</td>
          </tr>
        </tbody>
      </table>

      <div class="note warn">
        <span class="note-label">⚠️ Important</span>
        <strong>Always use a native <code>&lt;button&gt;</code> element.</strong>
        If you use a <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code>, keyboard users can't tab to it,
        screen readers won't announce it as a button, and you'd need to manually write many lines of ARIA
        and event-handler code to replicate what the browser gives you for free.
      </div>
    </section>


  </main>
  <!-- /.page-main -->

  <!-- ── Right sidebar (untouched) ── -->
  <aside class="sidebar-right">
    <?php include $partials . 'right_sidebar.php'; ?>
  </aside>

</div><!-- /.page-layout -->

<?php include $partials . 'footer.php'; ?>

<script>
  /* ── Loading demo ── */
  function triggerLoadingDemo() {
    const btn = document.getElementById('loadingDemo');
    if (btn.disabled) return;
    const orig = btn.innerHTML;
    btn.disabled = true;
    btn.setAttribute('aria-busy', 'true');
    btn.innerHTML = '<span class="btn-spinner" aria-hidden="true"></span> Booking…';
    setTimeout(() => {
      btn.disabled = false;
      btn.removeAttribute('aria-busy');
      btn.innerHTML = orig;
    }, 2400);
  }

  /* ── Toggle demo ── */
  document.querySelectorAll('.btn-toggle').forEach(btn => {
    btn.addEventListener('click', () => {
      const group = btn.closest('.btn-group');
      if (!group) return;
      group.querySelectorAll('.btn-toggle').forEach(b => {
        b.classList.remove('is-selected');
        b.setAttribute('aria-pressed', 'false');
      });
      btn.classList.add('is-selected');
      btn.setAttribute('aria-pressed', 'true');
    });
  });

  /* ── Copy code ── */
  function copyCode(btn) {
    const text = btn.closest('.code-block, .variant-card-code')
                    .querySelector('pre').innerText;
    navigator.clipboard.writeText(text).then(() => {
      btn.textContent = 'Copied!';
      setTimeout(() => btn.textContent = 'Copy', 1800);
    });
  }

  /* ── TOC scroll-spy ── */
  document.addEventListener('DOMContentLoaded', () => {
    const tocLinks = document.querySelectorAll('.toc-link');
    const sections = document.querySelectorAll('section[id], div[id]');
    const spy = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          tocLinks.forEach(a => {
            a.classList.toggle('active', a.getAttribute('href') === '#' + entry.target.id);
          });
        }
      });
    }, { rootMargin: '-15% 0px -75% 0px' });
    sections.forEach(s => spy.observe(s));
  });
</script>

</body>
</html>