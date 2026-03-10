<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Design Guidelines | Holidayseva</title>
  <link rel="stylesheet" href="/design-system.css">
  <style>

    /* ── Page title block ──────────────────────────── */
    .lp-eyebrow {
      font-size: 11.5px;
      font-weight: 600;
      letter-spacing: .08em;
      text-transform: uppercase;
      color: #86868b;
      margin-bottom: 10px;
    }
    .lp-title {
      font-size: 36px;
      font-weight: 700;
      letter-spacing: -1.2px;
      color: #1d1d1f;
      margin-bottom: 10px;
      line-height: 1.1;
      -webkit-font-smoothing: antialiased;
    }
    .lp-lead {
      font-size: 15px;
      color: #6e6e73;
      line-height: 1.6;
      max-width: 520px;
      margin-bottom: 0;
    }

    /* ── Category nav cards ────────────────────────── */
    .cat-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      gap: 1px;
      background: #e5e5ea;
      border: 1px solid #e5e5ea;
      border-radius: 14px;
      overflow: hidden;
    }
    .cat-card {
      display: flex;
      flex-direction: column;
      gap: 6px;
      padding: 20px 20px 18px;
      background: #fff;
      text-decoration: none;
      color: inherit;
      transition: background .1s;
    }
    .cat-card:hover {
      background: #f9f9fb;
      text-decoration: none;
    }
    .cat-card:hover .cat-card-arrow { opacity: 1; }
    .cat-card-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .cat-card-icon {
      width: 34px; height: 34px;
      background: #f2f2f7;
      border-radius: 8px;
      display: flex; align-items: center; justify-content: center;
      color: #424245;
      flex-shrink: 0;
    }
    .cat-card-arrow {
      color: #c7c7cc;
      opacity: 0;
      transition: opacity .1s;
      flex-shrink: 0;
    }
    .cat-card-name {
      font-size: 14px;
      font-weight: 600;
      color: #1d1d1f;
      letter-spacing: -.15px;
      -webkit-font-smoothing: antialiased;
    }
    .cat-card-count {
      font-size: 12px;
      color: #aeaeb2;
    }

    /* ── Section headings ──────────────────────────── */
    .sec-label {
      font-size: 11px;
      font-weight: 600;
      letter-spacing: .07em;
      text-transform: uppercase;
      color: #86868b;
      margin-bottom: 12px;
    }

    /* ── Code setup blocks ─────────────────────────── */
    .setup-step {
      border: 1px solid #e5e5ea;
      border-radius: 12px;
      overflow: hidden;
      margin-bottom: 12px;
    }
    .setup-step-header {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 14px 20px;
      background: #fff;
      border-bottom: 1px solid #e5e5ea;
    }
    .setup-step-num {
      width: 22px; height: 22px;
      background: #1d1d1f;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-size: 11px; font-weight: 700; color: #fff;
      flex-shrink: 0;
    }
    .setup-step-title {
      font-size: 13.5px;
      font-weight: 600;
      color: #1d1d1f;
      -webkit-font-smoothing: antialiased;
    }
    .setup-step-desc {
      font-size: 12.5px;
      color: #86868b;
    }
    .setup-code {
      background: #1c1c1e;
      padding: 16px 20px;
      margin: 0;
      overflow-x: auto;
    }
    .setup-code code {
      font-family: 'SF Mono', 'Fira Code', Menlo, monospace;
      font-size: 12.5px;
      line-height: 1.7;
      color: #e2e8f0;
      background: none;
      padding: 0;
      display: block;
    }
    .setup-code .t  { color: #7dd3fc; }
    .setup-code .a  { color: #86efac; }
    .setup-code .s  { color: #fca5a5; }
    .setup-code .c  { color: #4a5568; }
    .setup-code .k  { color: #c4b5fd; }
    .setup-code .p  { color: #fcd34d; }

    .code-copy-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 9px 14px;
      background: #111;
      border-top: 1px solid rgba(255,255,255,.06);
    }
    .code-copy-lang {
      font-size: 10.5px;
      font-weight: 600;
      letter-spacing: .07em;
      text-transform: uppercase;
      color: rgba(255,255,255,.3);
    }
    .code-copy-btn {
      font-size: 11px;
      font-weight: 500;
      color: rgba(255,255,255,.4);
      padding: 3px 10px;
      border-radius: 6px;
      border: 1px solid rgba(255,255,255,.1);
      background: none;
      cursor: pointer;
      transition: color .1s, border-color .1s;
    }
    .code-copy-btn:hover { color: #fff; border-color: rgba(255,255,255,.25); }

    /* ── File tree block ───────────────────────────── */
    .file-tree {
      background: #1c1c1e;
      border-radius: 12px;
      padding: 18px 20px;
      overflow-x: auto;
    }
    .file-tree code {
      font-family: 'SF Mono', 'Fira Code', Menlo, monospace;
      font-size: 12.5px;
      line-height: 1.75;
      color: #a0aec0;
      background: none;
      padding: 0;
      display: block;
    }
    .file-tree .dir  { color: #7dd3fc; }
    .file-tree .dim  { color: #4a5568; }
    .file-tree .hl   { color: #86efac; }

    /* ── Token reference table ─────────────────────── */
    .token-table {
      width: 100%;
      border-collapse: collapse;
      font-size: 13px;
    }
    .token-table th {
      text-align: left;
      padding: 9px 14px;
      background: #f2f2f7;
      border-bottom: 1px solid #e5e5ea;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: .05em;
      text-transform: uppercase;
      color: #86868b;
    }
    .token-table td {
      padding: 10px 14px;
      border-bottom: 1px solid #f2f2f7;
      vertical-align: middle;
    }
    .token-table tr:last-child td { border-bottom: none; }
    .token-table tr:hover td { background: #fafafa; }
    .token-table code {
      font-family: 'SF Mono', 'Fira Code', Menlo, monospace;
      font-size: 11.5px;
      background: #f2f2f7;
      padding: 2px 6px;
      border-radius: 4px;
      color: #1d1d1f;
    }
    .token-swatch {
      display: inline-block;
      width: 14px; height: 14px;
      border-radius: 3px;
      border: 1px solid rgba(0,0,0,.1);
      vertical-align: middle;
      margin-right: 6px;
    }
    .token-table-wrap {
      border: 1px solid #e5e5ea;
      border-radius: 12px;
      overflow: hidden;
      margin-bottom: 12px;
    }

  </style>
</head>
<body>

<?php include __DIR__ . '/header.php'; ?>
<?php include __DIR__ . '/drawer_sidebar.php'; ?>

<div class="page-layout">

  <!-- ── Left sidebar ──────────────────────── -->
  <aside class="sidebar-left">
    <?php include __DIR__ . '/left_sidebar.php'; ?>
  </aside>

  <!-- ── Main content ──────────────────────── -->
  <main class="page-main">

    <!-- PAGE HEADER ────────────────────────── -->
    <div id="overview">
      <p class="lp-eyebrow">Holidayseva · v1.0</p>
      <h1 class="lp-title">Design Guidelines</h1>
      <p class="lp-lead">One CSS file, one JS file per component, and a set of PHP partials. Pick a category below or follow the setup steps to integrate.</p>
    </div>

    <hr class="rule">

    <!-- COMPONENTS ─────────────────────────── -->
    <section id="components">
      <p class="sec-label">Components</p>

      <div class="cat-grid">

        <a href="https://holidayseva.com/https://holidayseva.com/UI/Foundation/Foundation.php" class="cat-card">
          <div class="cat-card-top">
            <div class="cat-card-icon">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <circle cx="5.5" cy="6" r="2.5" stroke="currentColor" stroke-width="1.3"/>
                <circle cx="10.5" cy="6" r="2.5" stroke="currentColor" stroke-width="1.3"/>
                <circle cx="8" cy="10.5" r="2.5" stroke="currentColor" stroke-width="1.3"/>
              </svg>
            </div>
            <svg class="cat-card-arrow" width="13" height="13" viewBox="0 0 16 16" fill="none">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="cat-card-name">Foundation</div>
          <div class="cat-card-count">Colour · Typography · Spacing · Grid · Motion</div>
        </a>

        <a href="https://holidayseva.com/UI/Atom/Atom.php" class="cat-card">
          <div class="cat-card-top">
            <div class="cat-card-icon">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <rect x="2" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.3"/>
                <rect x="9" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.3"/>
                <rect x="2" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.3"/>
                <rect x="9" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.3"/>
              </svg>
            </div>
            <svg class="cat-card-arrow" width="13" height="13" viewBox="0 0 16 16" fill="none">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="cat-card-name">Atoms</div>
          <div class="cat-card-count">Button · Input · Toggle · Badge · Avatar · 14 more</div>
        </a>

        <a href="https://holidayseva.com/UI/Forms/Forms.php" class="cat-card">
          <div class="cat-card-top">
            <div class="cat-card-icon">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.3"/>
                <path d="M4 6.5h8M4 9h6M4 11.5h4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
              </svg>
            </div>
            <svg class="cat-card-arrow" width="13" height="13" viewBox="0 0 16 16" fill="none">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="cat-card-name">Forms</div>
          <div class="cat-card-count">Calendar · Date Picker · Autocomplete · 6 more</div>
        </a>

        <a href="https://holidayseva.com/UI/Layout/Layout.php" class="cat-card">
          <div class="cat-card-top">
            <div class="cat-card-icon">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <rect x="1.5" y="2" width="13" height="12" rx="1.5" stroke="currentColor" stroke-width="1.3"/>
                <path d="M6 2v12M1.5 7h4.5" stroke="currentColor" stroke-width="1.2"/>
              </svg>
            </div>
            <svg class="cat-card-arrow" width="13" height="13" viewBox="0 0 16 16" fill="none">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="cat-card-name">Layout</div>
          <div class="cat-card-count">Grid · Sidebar · Stack · Flex · 9 more</div>
        </a>

        <a href="https://holidayseva.com/UI/Navigation/Navigation.php" class="cat-card">
          <div class="cat-card-top">
            <div class="cat-card-icon">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M2 4h12M2 8h12M2 12h8" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
              </svg>
            </div>
            <svg class="cat-card-arrow" width="13" height="13" viewBox="0 0 16 16" fill="none">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="cat-card-name">Navigation</div>
          <div class="cat-card-count">Navbar · Sidebar · Drawer · Breadcrumb · 3 more</div>
        </a>

        <a href="https://holidayseva.com/UI/Interactive/Interactive.php" class="cat-card">
          <div class="cat-card-top">
            <div class="cat-card-icon">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M2 10V5.5A1.5 1.5 0 013.5 4H7l1.5 2H14v4a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 012 10z" stroke="currentColor" stroke-width="1.3"/>
              </svg>
            </div>
            <svg class="cat-card-arrow" width="13" height="13" viewBox="0 0 16 16" fill="none">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="cat-card-name">Interactive</div>
          <div class="cat-card-count">Tabs · Accordion · Dropdown · Tooltip · 7 more</div>
        </a>

        <a href="https://holidayseva.com/UI/DataDisplay/DataDisplay.php" class="cat-card">
          <div class="cat-card-top">
            <div class="cat-card-icon">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.3"/>
                <path d="M1.5 6.5h13M6.5 3v10" stroke="currentColor" stroke-width="1.2"/>
              </svg>
            </div>
            <svg class="cat-card-arrow" width="13" height="13" viewBox="0 0 16 16" fill="none">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="cat-card-name">Data Display</div>
          <div class="cat-card-count">Card · Table · Timeline · Stats Card · 8 more</div>
        </a>

        <a href="https://holidayseva.com/UI/Feedback/Feedback.php" class="cat-card">
          <div class="cat-card-top">
            <div class="cat-card-icon">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.3"/>
                <path d="M8 5.5V9" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
                <circle cx="8" cy="11" r=".8" fill="currentColor"/>
              </svg>
            </div>
            <svg class="cat-card-arrow" width="13" height="13" viewBox="0 0 16 16" fill="none">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="cat-card-name">Feedback</div>
          <div class="cat-card-count">Alert · Toast · Modal · Skeleton · 4 more</div>
        </a>

        <a href="https://holidayseva.com/UI/Composite/Composite.php" class="cat-card">
          <div class="cat-card-top">
            <div class="cat-card-icon">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <rect x="1.5" y="2" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/>
                <rect x="8.5" y="2" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/>
                <rect x="1.5" y="9" width="6" height="5" rx="1" stroke="currentColor" stroke-width="1.3" opacity=".5"/>
                <rect x="8.5" y="9" width="6" height="5" rx="1" stroke="currentColor" stroke-width="1.3" opacity=".5"/>
              </svg>
            </div>
            <svg class="cat-card-arrow" width="13" height="13" viewBox="0 0 16 16" fill="none">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="cat-card-name">Composite</div>
          <div class="cat-card-count">Booking Card · Search Bar · Profile Card · 7 more</div>
        </a>

        <a href="https://holidayseva.com/UI/Media/Media.php" class="cat-card">
          <div class="cat-card-top">
            <div class="cat-card-icon">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.3"/>
                <path d="M6.5 6l4 2-4 2V6z" fill="currentColor" opacity=".5"/>
              </svg>
            </div>
            <svg class="cat-card-arrow" width="13" height="13" viewBox="0 0 16 16" fill="none">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="cat-card-name">Media</div>
          <div class="cat-card-count">Image · Video · Gallery · Carousel · Lightbox</div>
        </a>

        <a href="https://holidayseva.com/UI/Utilities/Utilities.php" class="cat-card">
          <div class="cat-card-top">
            <div class="cat-card-icon">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M9.5 2.5l-7 7 1.5 4 4-1.5 7-7-1.5-4-4 1.5z" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/>
                <path d="M9.5 2.5l4 4" stroke="currentColor" stroke-width="1.3"/>
              </svg>
            </div>
            <svg class="cat-card-arrow" width="13" height="13" viewBox="0 0 16 16" fill="none">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="cat-card-name">Utilities</div>
          <div class="cat-card-count">Margin · Padding · Flex · Grid · Text · Visibility</div>
        </a>

      </div>
    </section>

    <hr class="rule">

    <!-- FILE STRUCTURE ─────────────────────── -->
    <section id="file-structure">
      <p class="sec-label">File Structure</p>
      <div class="file-tree">
        <code><span class="dir">design_guidelines/</span>
<span class="dim">├──</span> <span class="hl">index.php</span>              <span class="dim">← you are here</span>
<span class="dim">├──</span> header.php
<span class="dim">├──</span> left_sidebar.php
<span class="dim">├──</span> right_sidebar.php
<span class="dim">├──</span> drawer_sidebar.php
<span class="dim">├──</span> footer.php
<span class="dim">├──</span> <span class="hl">design-system.css</span>     <span class="dim">← single global import</span>
<span class="dim">└──</span> <span class="dir">https://holidayseva.com/UI/</span>
    <span class="dim">├──</span> <span class="dir">Foundation/</span>          <span class="dim">colors.css  spacing.css  motion.css …</span>
    <span class="dim">├──</span> <span class="dir">Atom/</span>                <span class="dim">button/  input/  toggle/  badge/ …</span>
    <span class="dim">│   └──</span> <span class="dir">toggle/</span>
    <span class="dim">│       ├──</span> <span class="hl">toggle.css</span>
    <span class="dim">│       └──</span> <span class="hl">toggle.js</span>
    <span class="dim">├──</span> <span class="dir">Forms/</span>               <span class="dim">calendar/  date-picker/  autocomplete/ …</span>
    <span class="dim">├──</span> <span class="dir">Layout/</span>              <span class="dim">grid/  sidebar/  stack/ …</span>
    <span class="dim">├──</span> <span class="dir">Navigation/</span>          <span class="dim">navbar/  drawer/  breadcrumb/ …</span>
    <span class="dim">├──</span> <span class="dir">Interactive/</span>         <span class="dim">tabs/  accordion/  dropdown/ …</span>
    <span class="dim">├──</span> <span class="dir">DataDisplay/</span>         <span class="dim">card/  table/  timeline/ …</span>
    <span class="dim">├──</span> <span class="dir">Feedback/</span>            <span class="dim">alert/  toast/  modal/ …</span>
    <span class="dim">├──</span> <span class="dir">Composite/</span>           <span class="dim">booking-card/  search-bar/ …</span>
    <span class="dim">├──</span> <span class="dir">Media/</span>               <span class="dim">image/  video/  carousel/ …</span>
    <span class="dim">└──</span> <span class="dir">Utilities/</span>           <span class="dim">margin/  padding/  flex/ …</span></code>
      </div>
    </section>

    <hr class="rule">

    <!-- INSTALLATION ───────────────────────── -->
    <section id="installation">
      <p class="sec-label">Installation</p>

      <!-- Step 1 -->
      <div class="setup-step">
        <div class="setup-step-header">
          <div class="setup-step-num">1</div>
          <div>
            <div class="setup-step-title">Import the design system CSS</div>
            <div class="setup-step-desc">One file covers all tokens, layout, and component base styles.</div>
          </div>
        </div>
        <pre class="setup-code"><code><span class="t">&lt;link</span> <span class="a">rel</span>=<span class="s">"stylesheet"</span> <span class="a">href</span>=<span class="s">"/design-system.css"</span><span class="t">&gt;</span></code></pre>
        <div class="code-copy-bar">
          <span class="code-copy-lang">HTML · in &lt;head&gt;</span>
          <button class="code-copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="setup-step">
        <div class="setup-step-header">
          <div class="setup-step-num">2</div>
          <div>
            <div class="setup-step-title">Add the page shell</div>
            <div class="setup-step-desc">Include the header, drawer, sidebars, and footer in every page.</div>
          </div>
        </div>
        <pre class="setup-code"><code><span class="t">&lt;?php</span> <span class="k">include</span> <span class="k">__DIR__</span> . <span class="s">'/header.php'</span>; <span class="t">?&gt;</span>
<span class="t">&lt;?php</span> <span class="k">include</span> <span class="k">__DIR__</span> . <span class="s">'/drawer_sidebar.php'</span>; <span class="t">?&gt;</span>

<span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"page-layout"</span><span class="t">&gt;</span>

  <span class="t">&lt;aside</span> <span class="a">class</span>=<span class="s">"sidebar-left"</span><span class="t">&gt;</span>
    <span class="t">&lt;?php</span> <span class="k">include</span> <span class="k">__DIR__</span> . <span class="s">'/left_sidebar.php'</span>; <span class="t">?&gt;</span>
  <span class="t">&lt;/aside&gt;</span>

  <span class="t">&lt;main</span> <span class="a">class</span>=<span class="s">"page-main"</span><span class="t">&gt;</span>
    <span class="c">&lt;!-- your content --&gt;</span>
  <span class="t">&lt;/main&gt;</span>

  <span class="t">&lt;aside</span> <span class="a">class</span>=<span class="s">"sidebar-right"</span><span class="t">&gt;</span>
    <span class="t">&lt;?php</span> <span class="k">include</span> <span class="k">__DIR__</span> . <span class="s">'/right_sidebar.php'</span>; <span class="t">?&gt;</span>
  <span class="t">&lt;/aside&gt;</span>

<span class="t">&lt;/div&gt;</span>

<span class="t">&lt;?php</span> <span class="k">include</span> <span class="k">__DIR__</span> . <span class="s">'/footer.php'</span>; <span class="t">?&gt;</span></code></pre>
        <div class="code-copy-bar">
          <span class="code-copy-lang">PHP · page shell</span>
          <button class="code-copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="setup-step">
        <div class="setup-step-header">
          <div class="setup-step-num">3</div>
          <div>
            <div class="setup-step-title">Load the component CSS</div>
            <div class="setup-step-desc">Each component folder has its own stylesheet. Only load what the page uses.</div>
          </div>
        </div>
        <pre class="setup-code"><code><span class="c">&lt;!-- example: toggle + calendar on the same page --&gt;</span>
<span class="t">&lt;link</span> <span class="a">rel</span>=<span class="s">"stylesheet"</span> <span class="a">href</span>=<span class="s">"/https://holidayseva.com/UI/Atom/toggle/toggle.css"</span><span class="t">&gt;</span>
<span class="t">&lt;link</span> <span class="a">rel</span>=<span class="s">"stylesheet"</span> <span class="a">href</span>=<span class="s">"/https://holidayseva.com/UI/Forms/calendar/calendar.css"</span><span class="t">&gt;</span></code></pre>
        <div class="code-copy-bar">
          <span class="code-copy-lang">HTML · component CSS</span>
          <button class="code-copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="setup-step">
        <div class="setup-step-header">
          <div class="setup-step-num">4</div>
          <div>
            <div class="setup-step-title">Load the component JS before &lt;/body&gt;</div>
            <div class="setup-step-desc">Each JS file auto-inits its component on <code>DOMContentLoaded</code> — no manual wiring.</div>
          </div>
        </div>
        <pre class="setup-code"><code><span class="c">&lt;!-- before &lt;/body&gt; --&gt;</span>
<span class="t">&lt;script</span> <span class="a">src</span>=<span class="s">"/https://holidayseva.com/UI/Atom/toggle/toggle.js"</span><span class="t">&gt;&lt;/script&gt;</span></code></pre>
        <div class="code-copy-bar">
          <span class="code-copy-lang">HTML · component JS</span>
          <button class="code-copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
      </div>

    </section>

    <hr class="rule">

    <!-- CSS TOKENS ─────────────────────────── -->
    <section id="tokens">
      <p class="sec-label">CSS Custom Properties</p>
      <p class="body-text" style="margin-bottom:16px;">All tokens live on <code>:root</code> in <code>design-system.css</code>. Override any of them in your own stylesheet — no need to edit the source.</p>

      <div class="token-table-wrap">
        <table class="token-table">
          <thead>
            <tr><th>Token</th><th>Default</th><th>Used for</th></tr>
          </thead>
          <tbody>
            <tr>
              <td><code>--color-brand</code></td>
              <td><span class="token-swatch" style="background:#FF385C;"></span><code>#FF385C</code></td>
              <td>Buttons, active states, links</td>
            </tr>
            <tr>
              <td><code>--color-text</code></td>
              <td><span class="token-swatch" style="background:#1d1d1f;"></span><code>#1d1d1f</code></td>
              <td>Primary text</td>
            </tr>
            <tr>
              <td><code>--color-text-2</code></td>
              <td><span class="token-swatch" style="background:#424245;"></span><code>#424245</code></td>
              <td>Body copy, secondary labels</td>
            </tr>
            <tr>
              <td><code>--color-text-3</code></td>
              <td><span class="token-swatch" style="background:#6e6e73;"></span><code>#6e6e73</code></td>
              <td>Placeholders, helper text</td>
            </tr>
            <tr>
              <td><code>--color-border</code></td>
              <td><span class="token-swatch" style="background:#e5e5ea;border:1px solid #ccc;"></span><code>#e5e5ea</code></td>
              <td>Borders, dividers, rule lines</td>
            </tr>
            <tr>
              <td><code>--color-surface</code></td>
              <td><span class="token-swatch" style="background:#f2f2f7;border:1px solid #ddd;"></span><code>#f2f2f7</code></td>
              <td>Input backgrounds, chips, hover fills</td>
            </tr>
            <tr>
              <td><code>--font-sans</code></td>
              <td><code>-apple-system, 'Helvetica Neue'</code></td>
              <td>All UI text</td>
            </tr>
            <tr>
              <td><code>--font-mono</code></td>
              <td><code>'SF Mono', 'Fira Code', Menlo</code></td>
              <td>Code blocks, token labels</td>
            </tr>
            <tr>
              <td><code>--radius-sm</code></td>
              <td><code>6px</code></td>
              <td>Buttons, tags, small chips</td>
            </tr>
            <tr>
              <td><code>--radius-md</code></td>
              <td><code>10px</code></td>
              <td>Inputs, cards, dropdowns</td>
            </tr>
            <tr>
              <td><code>--radius-lg</code></td>
              <td><code>14px</code></td>
              <td>Panels, modals, sheets</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="setup-step">
        <div class="setup-step-header">
          <div class="setup-step-num" style="background:#f2f2f7;color:#1d1d1f;">⚙</div>
          <div>
            <div class="setup-step-title">Overriding a token</div>
            <div class="setup-step-desc">Scope overrides to <code>:root</code> or any selector.</div>
          </div>
        </div>
        <pre class="setup-code"><code><span class="c">/* your-theme.css — loaded after design-system.css */</span>
<span class="p">:root</span> {
  <span class="a">--color-brand</span>: <span class="s">#0066cc</span>;   <span class="c">/* swap red → blue    */</span>
  <span class="a">--radius-md</span>:   <span class="s">6px</span>;       <span class="c">/* squarer corners    */</span>
}</code></pre>
        <div class="code-copy-bar">
          <span class="code-copy-lang">CSS · token override</span>
          <button class="code-copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
      </div>

    </section>

    <hr class="rule">

    <!-- LAYOUT CLASSES ─────────────────────── -->
    <section id="page-anatomy">
      <p class="sec-label">Layout Classes</p>
      <p class="body-text" style="margin-bottom:16px;">These classes are defined in <code>design-system.css</code> — reference only, no need to copy them.</p>

      <div class="setup-step">
        <pre class="setup-code"><code><span class="c">/* three-column shell */</span>
<span class="p">.page-layout</span>   { display: grid; grid-template-columns: 240px 1fr 220px; }

<span class="c">/* sticky left nav */</span>
<span class="p">.sidebar-left</span>  { position: sticky; top: 52px; height: calc(100vh - 52px);
                  overflow-y: auto; border-right: 1px solid #e5e5ea; }

<span class="c">/* scrollable content */</span>
<span class="p">.page-main</span>     { padding: 48px 52px 80px; min-width: 0; }

<span class="c">/* sticky right TOC */</span>
<span class="p">.sidebar-right</span> { position: sticky; top: 52px; height: calc(100vh - 52px);
                  overflow-y: auto; border-left: 1px solid #e5e5ea; }

<span class="c">/* typography helpers */</span>
<span class="p">.page-eyebrow</span>  { font-size: 11.5px; font-weight: 600; color: #FF385C; }
<span class="p">.page-title</span>    { font-size: 36px;   font-weight: 700; letter-spacing: -1.2px; }
<span class="p">.page-lead</span>     { font-size: 15px;   color: #6e6e73; }
<span class="p">.section-title</span> { font-size: 22px;   font-weight: 650; }
<span class="p">.body-text</span>     { font-size: 15px;   color: #424245; line-height: 1.65; }
<span class="p">.rule</span>          { border-top: 1px solid #e5e5ea; margin: 40px 0; }</code></pre>
        <div class="code-copy-bar">
          <span class="code-copy-lang">CSS reference</span>
        </div>
      </div>

    </section>

    <hr class="rule">

    <!-- NEW PAGE TEMPLATE ──────────────────── -->
    <section id="new-page">
      <p class="sec-label">New Page Template</p>
      <p class="body-text" style="margin-bottom:16px;">Copy this when adding a new component doc page.</p>

      <div class="setup-step">
        <pre class="setup-code"><code><span class="t">&lt;!DOCTYPE html&gt;</span>
<span class="t">&lt;html</span> <span class="a">lang</span>=<span class="s">"en"</span><span class="t">&gt;</span>
<span class="t">&lt;head&gt;</span>
  <span class="t">&lt;meta</span> <span class="a">charset</span>=<span class="s">"UTF-8"</span><span class="t">&gt;</span>
  <span class="t">&lt;meta</span> <span class="a">name</span>=<span class="s">"viewport"</span> <span class="a">content</span>=<span class="s">"width=device-width, initial-scale=1.0"</span><span class="t">&gt;</span>
  <span class="t">&lt;title&gt;</span>ComponentName | Design Guidelines<span class="t">&lt;/title&gt;</span>
  <span class="t">&lt;link</span> <span class="a">rel</span>=<span class="s">"stylesheet"</span> <span class="a">href</span>=<span class="s">"/design-system.css"</span><span class="t">&gt;</span>
  <span class="t">&lt;link</span> <span class="a">rel</span>=<span class="s">"stylesheet"</span> <span class="a">href</span>=<span class="s">"/https://holidayseva.com/UI/Atom/button/button.css"</span><span class="t">&gt;</span>
<span class="t">&lt;/head&gt;</span>
<span class="t">&lt;body&gt;</span>

  <span class="t">&lt;?php</span> <span class="k">include</span> <span class="k">__DIR__</span> . <span class="s">'/../../header.php'</span>; <span class="t">?&gt;</span>
  <span class="t">&lt;?php</span> <span class="k">include</span> <span class="k">__DIR__</span> . <span class="s">'/../../drawer_sidebar.php'</span>; <span class="t">?&gt;</span>

  <span class="t">&lt;div</span> <span class="a">class</span>=<span class="s">"page-layout"</span><span class="t">&gt;</span>
    <span class="t">&lt;aside</span> <span class="a">class</span>=<span class="s">"sidebar-left"</span><span class="t">&gt;</span>
      <span class="t">&lt;?php</span> <span class="k">include</span> <span class="k">__DIR__</span> . <span class="s">'/../../left_sidebar.php'</span>; <span class="t">?&gt;</span>
    <span class="t">&lt;/aside&gt;</span>

    <span class="t">&lt;main</span> <span class="a">class</span>=<span class="s">"page-main"</span><span class="t">&gt;</span>

      <span class="t">&lt;div</span> <span class="a">id</span>=<span class="s">"overview"</span><span class="t">&gt;</span>
        <span class="t">&lt;p</span> <span class="a">class</span>=<span class="s">"page-eyebrow"</span><span class="t">&gt;</span>Components · Atoms<span class="t">&lt;/p&gt;</span>
        <span class="t">&lt;h1</span> <span class="a">class</span>=<span class="s">"page-title"</span><span class="t">&gt;</span>Button<span class="t">&lt;/h1&gt;</span>
        <span class="t">&lt;p</span> <span class="a">class</span>=<span class="s">"page-lead"</span><span class="t">&gt;</span>Short description of the component.<span class="t">&lt;/p&gt;</span>
      <span class="t">&lt;/div&gt;</span>

      <span class="t">&lt;hr</span> <span class="a">class</span>=<span class="s">"rule"</span><span class="t">&gt;</span>

      <span class="t">&lt;section</span> <span class="a">id</span>=<span class="s">"anatomy"</span><span class="t">&gt;</span>
        <span class="t">&lt;h2</span> <span class="a">class</span>=<span class="s">"section-title"</span><span class="t">&gt;</span>Anatomy<span class="t">&lt;/h2&gt;</span>
      <span class="t">&lt;/section&gt;</span>

      <span class="t">&lt;hr</span> <span class="a">class</span>=<span class="s">"rule"</span><span class="t">&gt;</span>

      <span class="t">&lt;section</span> <span class="a">id</span>=<span class="s">"specs"</span><span class="t">&gt;</span>
        <span class="t">&lt;h2</span> <span class="a">class</span>=<span class="s">"section-title"</span><span class="t">&gt;</span>Specifications<span class="t">&lt;/h2&gt;</span>
      <span class="t">&lt;/section&gt;</span>

    <span class="t">&lt;/main&gt;</span>

    <span class="t">&lt;aside</span> <span class="a">class</span>=<span class="s">"sidebar-right"</span><span class="t">&gt;</span>
      <span class="t">&lt;?php</span> <span class="k">include</span> <span class="k">__DIR__</span> . <span class="s">'/../../right_sidebar.php'</span>; <span class="t">?&gt;</span>
    <span class="t">&lt;/aside&gt;</span>
  <span class="t">&lt;/div&gt;</span>

  <span class="t">&lt;script</span> <span class="a">src</span>=<span class="s">"/https://holidayseva.com/UI/Atom/button/button.js"</span><span class="t">&gt;&lt;/script&gt;</span>
  <span class="t">&lt;?php</span> <span class="k">include</span> <span class="k">__DIR__</span> . <span class="s">'/../../footer.php'</span>; <span class="t">?&gt;</span>
<span class="t">&lt;/body&gt;</span>
<span class="t">&lt;/html&gt;</span></code></pre>
        <div class="code-copy-bar">
          <span class="code-copy-lang">PHP · new page template</span>
          <button class="code-copy-btn" onclick="copyCode(this)">Copy</button>
        </div>
      </div>

    </section>

  </main>

  <!-- ── Right sidebar ─────────────────────── -->
  <aside class="sidebar-right">
    <?php include __DIR__ . '/right_sidebar.php'; ?>
  </aside>

</div>

<?php include __DIR__ . '/footer.php'; ?>

<script>
function copyCode(btn) {
  const bar  = btn.closest('.code-copy-bar');
  const pre  = bar.previousElementSibling;
  const text = pre ? pre.innerText : '';
  navigator.clipboard.writeText(text).then(() => {
    btn.textContent = 'Copied';
    setTimeout(() => btn.textContent = 'Copy', 1800);
  });
}
</script>

</body>
</html>