<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Design Guidelines | Holidayseva</title>
  <link rel="stylesheet" href="/design-system.css">
  <style>

    /* ─── RESET ─────────────────────────────────────── */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    /* ─── HERO ──────────────────────────────────────── */
    .dg-hero {
      position: relative;
      width: 100%;
      min-height: 440px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 72px 40px 80px;
      overflow: hidden;
      background: #f5f5f7;
      margin-bottom: 0;
      box-sizing: border-box;
      align-self: stretch;
    }

    /* Abstract floating shapes — pure CSS, no images */
    .dg-hero-bg {
      position: absolute;
      inset: 0;
      overflow: hidden;
      pointer-events: none;
    }
    .dg-shape {
      position: absolute;
      border-radius: 50%;
      background: rgba(255,255,255,0.72);
      box-shadow: 0 2px 32px rgba(0,0,0,.04);
      backdrop-filter: blur(0px);
      animation: floatsisiShape 8s ease-in-out infinite;
    }
    .dg-shape-1 { width: 260px; height: 180px; border-radius: 38% 62% 60% 40%/52% 36% 64% 48%; top: 12%; left: 8%; animation-delay: 0s; }
    .dg-shape-2 { width: 80px;  height: 80px;  border-radius: 50%; top: 10%; right: 28%; animation-delay: 1.2s; }
    .dg-shape-3 { width: 130px; height: 90px;  border-radius: 28% 72% 68% 32%/42% 58% 42% 58%; bottom: 18%; left: 20%; animation-delay: 2.4s; }
    .dg-shape-4 { width: 320px; height: 220px; border-radius: 60% 40% 44% 56%/48% 62% 38% 52%; bottom: 6%; right: 4%; animation-delay: 0.8s; }
    .dg-shape-5 { width: 60px;  height: 60px;  border-radius: 50%; top: 40%; left: 44%; animation-delay: 3s; opacity:.5; }
    .dg-shape-6 { width: 40px;  height: 40px;  border-radius: 50%; top: 20%; left: 60%; animation-delay: 1.8s; opacity:.6; }
    @keyframes floatShape {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      50%       { transform: translateY(-12px) rotate(3deg); }
    }

    .dg-hero-content { position: relative; z-index: 2; }
    .dg-hero-title {
      font-size: clamp(36px, 5vw, 56px);
      font-weight: 700;
      letter-spacing: -2px;
      color: #1d1d1f;
      line-height: 1.04;
      margin-bottom: 16px;
      -webkit-font-smoothing: antialiased;
    }
    .dg-hero-sub {
      font-size: 19px;
      color: #6e6e73;
      line-height: 1.5;
      max-width: 560px;
      margin: 0 auto;
      -webkit-font-smoothing: antialiased;
    }

    /* ─── SECTION HEADERS ───────────────────────────── */
    .dg-section { padding: 56px 0 24px; }
    .dg-section-title {
      font-size: clamp(26px, 3vw, 34px);
      font-weight: 700;
      letter-spacing: -1px;
      color: #1d1d1f;
      margin-bottom: 28px;
      -webkit-font-smoothing: antialiased;
    }

    /* ─── CATEGORY CARDS — 3-col grid ──────────────── */
    /* Mirrors the WWDC session card grid */
    .dg-cat-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 16px;
      margin-bottom: 16px;
    }
    @media (max-width: 900px) { .dg-cat-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 580px) { .dg-cat-grid { grid-template-columns: 1fr; } }

    .dg-cat-card {
      display: block;
      text-decoration: none;
      border-radius: 18px;
      overflow: hidden;
      transition: transform .2s ease, box-shadow .2s ease;
      color: inherit;
    }
    .dg-cat-card:hover {
      transform: scale(1.025);
      box-shadow: 0 16px 48px rgba(0,0,0,.13);
      text-decoration: none;
    }

    /* Coloured thumb — fills the top 2/3 */
    .dg-cat-thumb {
      position: relative;
      width: 100%;
      aspect-ratio: 16/9;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }
    .dg-cat-thumb svg.thumb-art {
      width: 100%; height: 100%;
      position: absolute; inset: 0;
    }
    .dg-cat-thumb-label {
      position: relative;
      z-index: 2;
      font-size: 13px;
      font-weight: 600;
      letter-spacing: .04em;
      text-transform: uppercase;
      color: rgba(255,255,255,.7);
      padding: 8px 14px;
      background: rgba(0,0,0,.18);
      border-radius: 20px;
      backdrop-filter: blur(4px);
      align-self: flex-start;
      margin: 14px 0 0 14px;
      position: absolute;
      top: 0; left: 0;
    }

    /* Bottom label row */
    .dg-cat-body {
      padding: 16px 20px 18px;
      background: #fff;
      border: 1px solid #e5e5ea;
      border-top: none;
      border-radius: 0 0 18px 18px;
    }
    .dg-cat-name {
      font-size: 17px;
      font-weight: 600;
      color: #1d1d1f;
      letter-spacing: -.3px;
      margin-bottom: 4px;
      -webkit-font-smoothing: antialiased;
    }
    .dg-cat-count {
      font-size: 13px;
      color: #86868b;
    }
    .dg-cat-arrow {
      float: right;
      margin-top: 2px;
      color: #aeaeb2;
      font-size: 16px;
    }

    /* ─── GRADIENT THEMES ───────────────────────────── */
    .gt-foundation { background: linear-gradient(135deg, #1c1c1e 0%, #3a3a3c 100%); }
    .gt-atoms      { background: linear-gradient(135deg, #0a84ff 0%, #5ac8fa 100%); }
    .gt-forms      { background: linear-gradient(135deg, #30d158 0%, #34c759 60%, #28a745 100%); }
    .gt-layout     { background: linear-gradient(135deg, #5e5ce6 0%, #bf5af2 100%); }
    .gt-navigation { background: linear-gradient(135deg, #ff9f0a 0%, #ff6b00 100%); }
    .gt-interactive{ background: linear-gradient(135deg, #0a84ff 0%, #5856d6 100%); }
    .gt-data       { background: linear-gradient(135deg, #ff375f 0%, #ff6b6b 100%); }
    .gt-feedback   { background: linear-gradient(135deg, #ff9f0a 0%, #ffd60a 100%); }
    .gt-composite  { background: linear-gradient(135deg, #ff375f 0%, #bf5af2 100%); }
    .gt-media      { background: linear-gradient(135deg, #5ac8fa 0%, #32ade6 100%); }

    /* ─── INSTALL SECTION ───────────────────────────── */
    .dg-rule { border: none; border-top: 1px solid #e5e5ea; margin: 48px 0; }

    .install-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin-bottom: 16px;
    }
    @media (max-width: 720px) { .install-grid { grid-template-columns: 1fr; } }

    .install-step {
      border: 1px solid #e5e5ea;
      border-radius: 16px;
      overflow: hidden;
      background: #fff;
    }
    .install-step-head {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      padding: 18px 22px 16px;
      border-bottom: 1px solid #e5e5ea;
    }
    .install-num {
      width: 26px; height: 26px;
      background: #1d1d1f;
      color: #fff;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-size: 12px; font-weight: 700;
      flex-shrink: 0; margin-top: 1px;
    }
    .install-title  { font-size: 14.5px; font-weight: 600; color: #1d1d1f; -webkit-font-smoothing: antialiased; }
    .install-desc   { font-size: 13px; color: #86868b; margin-top: 3px; line-height: 1.45; }
    pre.install-code {
      background: #161618;
      padding: 18px 22px;
      margin: 0;
      overflow-x: auto;
    }
    pre.install-code code {
      font-family: 'SF Mono','Fira Code',Menlo,monospace;
      font-size: 12.5px;
      line-height: 1.75;
      color: #e2e8f0;
      background: none; padding: 0; display: block;
    }
    .ic-t { color: #7dd3fc; }
    .ic-a { color: #86efac; }
    .ic-s { color: #fca5a5; }
    .ic-c { color: #475569; }
    .ic-k { color: #c4b5fd; }
    .ic-p { color: #fcd34d; }
    .install-bar {
      display: flex; align-items: center; justify-content: space-between;
      padding: 9px 16px;
      background: #0d0d0f;
      border-top: 1px solid rgba(255,255,255,.05);
    }
    .install-lang { font-size: 10.5px; font-weight: 600; letter-spacing: .07em; text-transform: uppercase; color: rgba(255,255,255,.3); }
    .install-copy {
      font-size: 11px; font-weight: 500; color: rgba(255,255,255,.35);
      padding: 3px 10px; border-radius: 6px;
      border: 1px solid rgba(255,255,255,.1);
      background: none; cursor: pointer;
      transition: color .1s, border-color .1s;
    }
    .install-copy:hover { color: #fff; border-color: rgba(255,255,255,.28); }

    /* ─── TOKEN TABLE ───────────────────────────────── */
    .token-wrap {
      border: 1px solid #e5e5ea;
      border-radius: 16px;
      overflow: hidden;
      margin-bottom: 0;
    }
    .token-table { width: 100%; border-collapse: collapse; font-size: 13px; }
    .token-table th {
      text-align: left; padding: 11px 18px;
      background: #f9f9fb; border-bottom: 1px solid #e5e5ea;
      font-size: 11px; font-weight: 600; letter-spacing: .05em; text-transform: uppercase; color: #86868b;
    }
    .token-table td { padding: 12px 18px; border-bottom: 1px solid #f2f2f7; vertical-align: middle; }
    .token-table tr:last-child td { border-bottom: none; }
    .token-table tr:hover td { background: #fafafa; }
    .token-table code {
      font-family: 'SF Mono','Fira Code',Menlo,monospace;
      font-size: 11.5px; background: #f2f2f7;
      padding: 2px 6px; border-radius: 4px; color: #1d1d1f;
    }
    .swatch {
      display: inline-block; width: 14px; height: 14px;
      border-radius: 3px; border: 1px solid rgba(0,0,0,.1);
      vertical-align: middle; margin-right: 7px;
    }

  </style>
</head>
<body>

<?php include __DIR__ . '/header.php'; ?>
<?php include __DIR__ . '/drawer_sidebar.php'; ?>

<div class="page-layout">

  <aside class="sidebar-left">
    <?php include __DIR__ . '/left_sidebar.php'; ?>
  </aside>

  <main class="page-main" style="padding-left:0;padding-right:0;padding-top:0;min-width:0;flex:1 1 0%;max-width:none;overflow:hidden;">

    <!-- ══════════════════════════════════════════════
         HERO  (Apple Developer Docs style)
    ══════════════════════════════════════════════ -->
    <div class="dg-hero" id="overview">
      <div class="dg-hero-bg" aria-hidden="true">
        <div class="dg-shape dg-shape-1"></div>
        <div class="dg-shape dg-shape-2"></div>
        <div class="dg-shape dg-shape-3"></div>
        <div class="dg-shape dg-shape-4"></div>
        <div class="dg-shape dg-shape-5"></div>
        <div class="dg-shape dg-shape-6"></div>
      </div>
      <div class="dg-hero-content">
        <h1 class="dg-hero-title">{ HIG }<br>Human Interface Guidelines</h1>
        <p class="dg-hero-sub">Components, tokens, patterns, and integration guides for building Holidayseva products.</p>
      </div>
    </div>

    <div style="padding: 0 52px 80px;">

    <!-- ══════════════════════════════════════════════
         BROWSE COMPONENTS
    ══════════════════════════════════════════════ -->
    <div class="dg-section" id="components">
      <h2 class="dg-section-title">Browse Components</h2>

      <div class="dg-cat-grid">

        <!-- Foundation -->
        <a href="UI/Foundation/Foundation.php" class="dg-cat-card">
          <div class="dg-cat-thumb gt-foundation">
            <span class="dg-cat-thumb-label">Core</span>
            <svg class="thumb-art" viewBox="0 0 400 225" fill="none" aria-hidden="true">
              <circle cx="320" cy="50"  r="90" fill="rgba(255,255,255,.06)"/>
              <circle cx="80"  cy="180" r="70" fill="rgba(255,255,255,.05)"/>
              <circle cx="200" cy="112" r="120" fill="rgba(255,255,255,.04)"/>
              <!-- colour dots -->
              <circle cx="140" cy="95"  r="28" fill="#FF385C" opacity=".85"/>
              <circle cx="200" cy="95"  r="28" fill="#0a84ff" opacity=".85"/>
              <circle cx="260" cy="95"  r="28" fill="#30d158" opacity=".85"/>
              <circle cx="170" cy="138" r="28" fill="#ff9f0a" opacity=".85"/>
              <circle cx="230" cy="138" r="28" fill="#bf5af2" opacity=".85"/>
            </svg>
          </div>
          <div class="dg-cat-body">
            <span class="dg-cat-arrow">→</span>
            <div class="dg-cat-name">Foundation</div>
            <div class="dg-cat-count">Colour · Typography · Spacing · Grid · Motion · Shadows</div>
          </div>
        </a>

        <!-- Atoms -->
        <a href="UI/Atom/Atom.php" class="dg-cat-card">
          <div class="dg-cat-thumb gt-atoms">
            <span class="dg-cat-thumb-label">Primitives</span>
            <svg class="thumb-art" viewBox="0 0 400 225" fill="none" aria-hidden="true">
              <rect x="60"  y="72"  width="120" height="40" rx="20" fill="white" opacity=".25"/>
              <rect x="220" y="72"  width="120" height="40" rx="8"  fill="white" opacity=".18"/>
              <!-- toggle -->
              <rect x="60"  y="132" width="80"  height="32" rx="16" fill="white" opacity=".2"/>
              <circle cx="125" cy="148" r="13" fill="white" opacity=".7"/>
              <!-- badge -->
              <rect x="200" y="135" width="52" height="22" rx="11" fill="white" opacity=".35"/>
              <!-- checkbox -->
              <rect x="300" y="135" width="28" height="28" rx="6" fill="white" opacity=".2" stroke="white" stroke-opacity=".5" stroke-width="1.5"/>
              <path d="M307 149l6 6 10-10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="dg-cat-body">
            <span class="dg-cat-arrow">→</span>
            <div class="dg-cat-name">Atoms</div>
            <div class="dg-cat-count">Button · Input · Toggle · Badge · Avatar · Spinner · 13 more</div>
          </div>
        </a>

        <!-- Forms -->
        <a href="UI/Forms/Forms.php" class="dg-cat-card">
          <div class="dg-cat-thumb gt-forms">
            <span class="dg-cat-thumb-label">Controls</span>
            <svg class="thumb-art" viewBox="0 0 400 225" fill="none" aria-hidden="true">
              <!-- calendar grid -->
              <rect x="100" y="48" width="200" height="145" rx="14" fill="rgba(255,255,255,.18)" stroke="white" stroke-opacity=".3" stroke-width="1"/>
              <rect x="100" y="48" width="200" height="36" rx="14" fill="rgba(255,255,255,.2)"/>
              <path d="M100 84h200" stroke="white" stroke-opacity=".3" stroke-width="1"/>
              <!-- day grid dots -->
              <?php for($r=0;$r<3;$r++) for($c=0;$c<7;$c++): $x=115+$c*28; $y=100+$r*28; ?>
              <circle cx="<?=$x?>" cy="<?=$y?>" r="9" fill="rgba(255,255,255,<?=($r==1&&$c==3)?'.8':'.25'?>)"/>
              <?php endfor; ?>
            </svg>
          </div>
          <div class="dg-cat-body">
            <span class="dg-cat-arrow">→</span>
            <div class="dg-cat-name">Forms</div>
            <div class="dg-cat-count">Calendar · Date Picker · Autocomplete · File Upload · 5 more</div>
          </div>
        </a>

        <!-- Layout -->
        <a href="UI/Layout/Layout.php" class="dg-cat-card">
          <div class="dg-cat-thumb gt-layout">
            <span class="dg-cat-thumb-label">Structure</span>
            <svg class="thumb-art" viewBox="0 0 400 225" fill="none" aria-hidden="true">
              <!-- page wireframe -->
              <rect x="60"  y="40"  width="280" height="150" rx="12" fill="rgba(255,255,255,.12)" stroke="white" stroke-opacity=".2" stroke-width="1"/>
              <!-- header strip -->
              <rect x="60"  y="40"  width="280" height="28" rx="12" fill="rgba(255,255,255,.22)"/>
              <!-- sidebar -->
              <rect x="60"  y="68"  width="68"  height="122" rx="0" fill="rgba(255,255,255,.14)"/>
              <path d="M128 68v122" stroke="white" stroke-opacity=".2" stroke-width="1"/>
              <!-- content lines -->
              <rect x="140" y="82"  width="140" height="8" rx="4" fill="rgba(255,255,255,.35)"/>
              <rect x="140" y="98"  width="100" height="6" rx="3" fill="rgba(255,255,255,.2)"/>
              <rect x="140" y="112" width="120" height="6" rx="3" fill="rgba(255,255,255,.2)"/>
              <rect x="140" y="126" width="80"  height="6" rx="3" fill="rgba(255,255,255,.15)"/>
            </svg>
          </div>
          <div class="dg-cat-body">
            <span class="dg-cat-arrow">→</span>
            <div class="dg-cat-name">Layout</div>
            <div class="dg-cat-count">Grid · Flex · Stack · Container · Sidebar · 8 more</div>
          </div>
        </a>

        <!-- Navigation -->
        <a href="UI/Navigation/Navigation.php" class="dg-cat-card">
          <div class="dg-cat-thumb gt-navigation">
            <span class="dg-cat-thumb-label">Wayfinding</span>
            <svg class="thumb-art" viewBox="0 0 400 225" fill="none" aria-hidden="true">
              <!-- navbar -->
              <rect x="60" y="56" width="280" height="40" rx="10" fill="rgba(255,255,255,.22)"/>
              <circle cx="88" cy="76" r="12" fill="white" opacity=".5"/>
              <rect x="112" y="70" width="40" height="12" rx="6" fill="rgba(255,255,255,.5)"/>
              <rect x="162" y="70" width="40" height="12" rx="6" fill="rgba(255,255,255,.35)"/>
              <rect x="212" y="70" width="40" height="12" rx="6" fill="rgba(255,255,255,.35)"/>
              <!-- breadcrumb -->
              <rect x="80"  y="114" width="48" height="12" rx="6" fill="rgba(255,255,255,.4)"/>
              <path d="M133 120l8 0" stroke="white" stroke-opacity=".5" stroke-width="2" stroke-linecap="round"/>
              <path d="M133 120l5-5 5 5" stroke="white" stroke-opacity=".3" stroke-width="1.5" stroke-linecap="round" fill="none"/>
              <rect x="148" y="114" width="64" height="12" rx="6" fill="rgba(255,255,255,.6)"/>
              <!-- pagination -->
              <rect x="148" y="148" width="24" height="24" rx="6" fill="rgba(255,255,255,.2)"/>
              <rect x="176" y="148" width="24" height="24" rx="6" fill="rgba(255,255,255,.55)"/>
              <rect x="204" y="148" width="24" height="24" rx="6" fill="rgba(255,255,255,.2)"/>
              <rect x="232" y="148" width="24" height="24" rx="6" fill="rgba(255,255,255,.2)"/>
            </svg>
          </div>
          <div class="dg-cat-body">
            <span class="dg-cat-arrow">→</span>
            <div class="dg-cat-name">Navigation</div>
            <div class="dg-cat-count">Navbar · Sidebar · Drawer · Breadcrumb · Pagination · 2 more</div>
          </div>
        </a>

        <!-- Interactive -->
        <a href="UI/Interactive/Interactive.php" class="dg-cat-card">
          <div class="dg-cat-thumb gt-interactive">
            <span class="dg-cat-thumb-label">Patterns</span>
            <svg class="thumb-art" viewBox="0 0 400 225" fill="none" aria-hidden="true">
              <!-- tab strip -->
              <rect x="80"  y="50"  width="240" height="30" rx="8" fill="rgba(255,255,255,.15)"/>
              <rect x="80"  y="50"  width="78"  height="30" rx="8" fill="rgba(255,255,255,.4)"/>
              <rect x="164" y="50"  width="78"  height="30" rx="0" fill="rgba(255,255,255,.0)"/>
              <rect x="248" y="50"  width="72"  height="30" rx="8" fill="rgba(255,255,255,.0)"/>
              <!-- accordion -->
              <rect x="80"  y="96"  width="240" height="36" rx="8" fill="rgba(255,255,255,.18)"/>
              <rect x="95"  y="108" width="100" height="12" rx="6" fill="rgba(255,255,255,.5)"/>
              <path d="M295 114l-8 8-8-8" stroke="white" stroke-opacity=".6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
              <!-- tooltip -->
              <rect x="140" y="150" width="120" height="32" rx="8" fill="rgba(255,255,255,.3)"/>
              <path d="M196 182l8 10 8-10" fill="rgba(255,255,255,.3)"/>
              <rect x="155" y="160" width="60" height="8" rx="4" fill="rgba(255,255,255,.5)"/>
              <rect x="155" y="174" width="44" height="6" rx="3" fill="rgba(255,255,255,.3)"/>
            </svg>
          </div>
          <div class="dg-cat-body">
            <span class="dg-cat-arrow">→</span>
            <div class="dg-cat-name">Interactive</div>
            <div class="dg-cat-count">Tabs · Accordion · Dropdown · Tooltip · Command Palette · 6 more</div>
          </div>
        </a>

        <!-- Data Display -->
        <a href="UI/DataDisplay/DataDisplay.php" class="dg-cat-card">
          <div class="dg-cat-thumb gt-data">
            <span class="dg-cat-thumb-label">Display</span>
            <svg class="thumb-art" viewBox="0 0 400 225" fill="none" aria-hidden="true">
              <!-- card -->
              <rect x="60"  y="44"  width="120" height="148" rx="14" fill="rgba(255,255,255,.2)" stroke="white" stroke-opacity=".25" stroke-width="1"/>
              <rect x="68"  y="52"  width="104" height="64" rx="8" fill="rgba(255,255,255,.25)"/>
              <rect x="68"  y="126" width="70" height="10" rx="5" fill="rgba(255,255,255,.5)"/>
              <rect x="68"  y="142" width="50" height="8"  rx="4" fill="rgba(255,255,255,.3)"/>
              <rect x="68"  y="158" width="80" height="22" rx="11" fill="rgba(255,255,255,.25)"/>
              <!-- table -->
              <rect x="196" y="44"  width="148" height="148" rx="14" fill="rgba(255,255,255,.12)" stroke="white" stroke-opacity=".2" stroke-width="1"/>
              <rect x="196" y="44"  width="148" height="30" rx="14" fill="rgba(255,255,255,.2)"/>
              <?php for($i=0;$i<4;$i++): ?>
              <rect x="204" y="<?=82+$i*26?>" width="132" height="18" rx="4" fill="rgba(255,255,255,<?=$i%2==0?.14:.08?>)"/>
              <?php endfor; ?>
            </svg>
          </div>
          <div class="dg-cat-body">
            <span class="dg-cat-arrow">→</span>
            <div class="dg-cat-name">Data Display</div>
            <div class="dg-cat-count">Card · Table · Timeline · Stats · Review Card · 7 more</div>
          </div>
        </a>

        <!-- Feedback -->
        <a href="UI/Feedback/Feedback.php" class="dg-cat-card">
          <div class="dg-cat-thumb gt-feedback">
            <span class="dg-cat-thumb-label">States</span>
            <svg class="thumb-art" viewBox="0 0 400 225" fill="none" aria-hidden="true">
              <!-- alert -->
              <rect x="60" y="52"  width="280" height="52" rx="12" fill="rgba(255,255,255,.22)" stroke="white" stroke-opacity=".3" stroke-width="1"/>
              <circle cx="84" cy="78" r="12" fill="rgba(255,255,255,.5)"/>
              <path d="M84 71v9" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
              <circle cx="84" cy="83" r="1.5" fill="white"/>
              <rect x="104" y="68" width="140" height="10" rx="5" fill="rgba(255,255,255,.55)"/>
              <rect x="104" y="83" width="100" height="8"  rx="4" fill="rgba(255,255,255,.3)"/>
              <!-- toast -->
              <rect x="200" y="122" width="140" height="52" rx="12" fill="rgba(255,255,255,.3)" stroke="white" stroke-opacity=".4" stroke-width="1"/>
              <rect x="214" y="136" width="80" height="10" rx="5" fill="rgba(255,255,255,.6)"/>
              <rect x="214" y="151" width="60" height="8"  rx="4" fill="rgba(255,255,255,.35)"/>
              <!-- skeleton -->
              <rect x="60" y="122" width="120" height="52" rx="12" fill="rgba(255,255,255,.15)"/>
              <rect x="72" y="134" width="80" height="10" rx="5" fill="rgba(255,255,255,.35)"/>
              <rect x="72" y="150" width="56" height="8"  rx="4" fill="rgba(255,255,255,.2)"/>
              <rect x="72" y="164" width="68" height="8"  rx="4" fill="rgba(255,255,255,.2)"/>
            </svg>
          </div>
          <div class="dg-cat-body">
            <span class="dg-cat-arrow">→</span>
            <div class="dg-cat-name">Feedback</div>
            <div class="dg-cat-count">Alert · Toast · Modal · Skeleton · Empty State · 3 more</div>
          </div>
        </a>

        <!-- Composite -->
        <a href="UI/Composite/Composite.php" class="dg-cat-card">
          <div class="dg-cat-thumb gt-composite">
            <span class="dg-cat-thumb-label">Patterns</span>
            <svg class="thumb-art" viewBox="0 0 400 225" fill="none" aria-hidden="true">
              <!-- booking card -->
              <rect x="60"  y="38" width="150" height="155" rx="16" fill="rgba(255,255,255,.18)" stroke="white" stroke-opacity=".25" stroke-width="1"/>
              <rect x="68"  y="46" width="134" height="70" rx="10" fill="rgba(255,255,255,.3)"/>
              <rect x="68"  y="124" width="90"  height="10" rx="5" fill="rgba(255,255,255,.5)"/>
              <rect x="68"  y="140" width="60"  height="8"  rx="4" fill="rgba(255,255,255,.3)"/>
              <rect x="68"  y="158" width="100" height="24" rx="12" fill="rgba(255,255,255,.35)"/>
              <!-- search bar -->
              <rect x="220" y="38" width="128" height="40" rx="10" fill="rgba(255,255,255,.28)"/>
              <circle cx="242" cy="58" r="8" fill="none" stroke="white" stroke-opacity=".6" stroke-width="2"/>
              <path d="M248 64l6 6" stroke="white" stroke-opacity=".6" stroke-width="2" stroke-linecap="round"/>
              <rect x="258" y="52" width="76" height="10" rx="5" fill="rgba(255,255,255,.35)"/>
              <!-- profile card -->
              <rect x="220" y="90" width="128" height="100" rx="14" fill="rgba(255,255,255,.16)"/>
              <circle cx="284" cy="118" r="18" fill="rgba(255,255,255,.4)"/>
              <rect x="248" y="142" width="72" height="10" rx="5" fill="rgba(255,255,255,.5)"/>
              <rect x="258" y="157" width="52" height="8"  rx="4" fill="rgba(255,255,255,.25)"/>
              <rect x="244" y="170" width="80" height="14" rx="7" fill="rgba(255,255,255,.3)"/>
            </svg>
          </div>
          <div class="dg-cat-body">
            <span class="dg-cat-arrow">→</span>
            <div class="dg-cat-name">Composite</div>
            <div class="dg-cat-count">Booking Card · Search Bar · Profile Card · Filters · 6 more</div>
          </div>
        </a>

        <!-- Media -->
        <a href="UI/Media/Media.php" class="dg-cat-card">
          <div class="dg-cat-thumb gt-media">
            <span class="dg-cat-thumb-label">Assets</span>
            <svg class="thumb-art" viewBox="0 0 400 225" fill="none" aria-hidden="true">
              <!-- gallery grid -->
              <rect x="60"  y="44"  width="120" height="80" rx="10" fill="rgba(255,255,255,.3)"/>
              <rect x="188" y="44"  width="76"  height="80" rx="10" fill="rgba(255,255,255,.25)"/>
              <rect x="272" y="44"  width="76"  height="80" rx="10" fill="rgba(255,255,255,.2)"/>
              <rect x="60"  y="132" width="76"  height="60" rx="10" fill="rgba(255,255,255,.2)"/>
              <rect x="144" y="132" width="110" height="60" rx="10" fill="rgba(255,255,255,.28)"/>
              <rect x="262" y="132" width="86"  height="60" rx="10" fill="rgba(255,255,255,.22)"/>
              <!-- play button on first cell -->
              <path d="M100 72l22 12-22 12V72z" fill="rgba(255,255,255,.7)"/>
            </svg>
          </div>
          <div class="dg-cat-body">
            <span class="dg-cat-arrow">→</span>
            <div class="dg-cat-name">Media</div>
            <div class="dg-cat-count">Image · Video · Gallery · Carousel · Lightbox · Thumbnail Grid</div>
          </div>
        </a>

      </div>
    </div>

    <hr class="dg-rule">

    <!-- ══════════════════════════════════════════════
         GET STARTED / INSTALLATION
    ══════════════════════════════════════════════ -->
    <div class="dg-section" id="installation">
      <h2 class="dg-section-title">Import Framework</h2>

      <div class="install-grid">

        <!-- Step 1 -->
        <div class="install-step">
          <div class="install-step-head">
            <div class="install-num">1</div>
            <div>
              <div class="install-title">Import the design system CSS</div>
              <div class="install-desc">One file covers all tokens, layout grid, and component base styles.</div>
            </div>
          </div>
          <pre class="install-code"><code><span class="ic-t">&lt;link</span> <span class="ic-a">rel</span>=<span class="ic-s">"stylesheet"</span>
      <span class="ic-a">href</span>=<span class="ic-s">"/design-system.css"</span><span class="ic-t">&gt;</span></code></pre>
          <div class="install-bar"><span class="install-lang">HTML · &lt;head&gt;</span><button class="install-copy" onclick="copyCode(this)">Copy</button></div>
        </div>

        <!-- Step 2 -->
        <div class="install-step">
          <div class="install-step-head">
            <div class="install-num">2</div>
            <div>
              <div class="install-title">Add the PHP page shell</div>
              <div class="install-desc">Include header, drawer, both sidebars, and footer on every page.</div>
            </div>
          </div>
          <pre class="install-code"><code><span class="ic-t">&lt;?php</span> <span class="ic-k">include</span> <span class="ic-k">__DIR__</span> . <span class="ic-s">'/header.php'</span>; <span class="ic-t">?&gt;</span>
<span class="ic-t">&lt;div</span> <span class="ic-a">class</span>=<span class="ic-s">"page-layout"</span><span class="ic-t">&gt;</span>
  <span class="ic-t">&lt;aside</span> <span class="ic-a">class</span>=<span class="ic-s">"sidebar-left"</span><span class="ic-t">&gt;</span>...<span class="ic-t">&lt;/aside&gt;</span>
  <span class="ic-t">&lt;main</span>  <span class="ic-a">class</span>=<span class="ic-s">"page-main"</span><span class="ic-t">&gt;</span>...<span class="ic-t">&lt;/main&gt;</span>
  <span class="ic-t">&lt;aside</span> <span class="ic-a">class</span>=<span class="ic-s">"sidebar-right"</span><span class="ic-t">&gt;</span>...<span class="ic-t">&lt;/aside&gt;</span>
<span class="ic-t">&lt;/div&gt;</span></code></pre>
          <div class="install-bar"><span class="install-lang">PHP · shell</span><button class="install-copy" onclick="copyCode(this)">Copy</button></div>
        </div>

        <!-- Step 3 -->
        <div class="install-step">
          <div class="install-step-head">
            <div class="install-num">3</div>
            <div>
              <div class="install-title">Load component CSS per page</div>
              <div class="install-desc">Only load what the page uses — each component has its own stylesheet.</div>
            </div>
          </div>
          <pre class="install-code"><code><span class="ic-c">&lt;!-- per-page, after design-system.css --&gt;</span>
<span class="ic-t">&lt;link</span> <span class="ic-a">rel</span>=<span class="ic-s">"stylesheet"</span>
      <span class="ic-a">href</span>=<span class="ic-s">"/UI/Atom/toggle/toggle.css"</span><span class="ic-t">&gt;</span>
<span class="ic-t">&lt;link</span> <span class="ic-a">rel</span>=<span class="ic-s">"stylesheet"</span>
      <span class="ic-a">href</span>=<span class="ic-s">"/UI/Forms/calendar/calendar.css"</span><span class="ic-t">&gt;</span></code></pre>
          <div class="install-bar"><span class="install-lang">HTML · CSS</span><button class="install-copy" onclick="copyCode(this)">Copy</button></div>
        </div>

        <!-- Step 4 -->
        <div class="install-step">
          <div class="install-step-head">
            <div class="install-num">4</div>
            <div>
              <div class="install-title">Load component JS before &lt;/body&gt;</div>
              <div class="install-desc">Auto-inits on <code style="font-size:11.5px;background:#f0f0f5;padding:1px 5px;border-radius:4px;">DOMContentLoaded</code> — no manual wiring needed.</div>
            </div>
          </div>
          <pre class="install-code"><code><span class="ic-c">&lt;!-- before &lt;/body&gt; --&gt;</span>
<span class="ic-t">&lt;script</span>
  <span class="ic-a">src</span>=<span class="ic-s">"/UI/Atom/toggle/toggle.js"</span>
<span class="ic-t">&gt;&lt;/script&gt;</span></code></pre>
          <div class="install-bar"><span class="install-lang">HTML · JS</span><button class="install-copy" onclick="copyCode(this)">Copy</button></div>
        </div>

      </div><!-- /install-grid -->

      <!-- Token table -->
      <h3 style="font-size:20px;font-weight:650;letter-spacing:-.5px;color:#1d1d1f;margin:40px 0 16px;-webkit-font-smoothing:antialiased;">CSS Custom Properties</h3>
      <div class="token-wrap">
        <table class="token-table">
          <thead>
            <tr><th>Token</th><th>Default</th><th>Used for</th></tr>
          </thead>
          <tbody>
            <tr><td><code>--color-brand</code></td><td><span class="swatch" style="background:#FF385C"></span><code>#FF385C</code></td><td>Buttons, active states, links</td></tr>
            <tr><td><code>--color-text</code></td><td><span class="swatch" style="background:#1d1d1f"></span><code>#1d1d1f</code></td><td>Primary text</td></tr>
            <tr><td><code>--color-text-2</code></td><td><span class="swatch" style="background:#424245"></span><code>#424245</code></td><td>Body copy, secondary labels</td></tr>
            <tr><td><code>--color-border</code></td><td><span class="swatch" style="background:#e5e5ea;border:1px solid #ccc"></span><code>#e5e5ea</code></td><td>Borders, dividers, rules</td></tr>
            <tr><td><code>--color-surface</code></td><td><span class="swatch" style="background:#f2f2f7;border:1px solid #ddd"></span><code>#f2f2f7</code></td><td>Inputs, chips, hover fills</td></tr>
            <tr><td><code>--radius-sm / md / lg</code></td><td><code>6px / 10px / 14px</code></td><td>Buttons / cards / modals</td></tr>
            <tr><td><code>--font-sans</code></td><td><code>-apple-system, 'Helvetica Neue'</code></td><td>All UI text</td></tr>
            <tr><td><code>--font-mono</code></td><td><code>'SF Mono', 'Fira Code', Menlo</code></td><td>Code blocks, tokens</td></tr>
          </tbody>
        </table>
      </div>

    </div><!-- /installation -->

    </div><!-- /inner padding wrapper -->
  </main>

  <aside class="sidebar-right">
    <?php include __DIR__ . '/right_sidebar.php'; ?>
  </aside>

</div>

<?php include __DIR__ . '/footer.php'; ?>

<script>
function copyCode(btn) {
  const pre = btn.closest('.install-step').querySelector('pre');
  navigator.clipboard.writeText(pre ? pre.innerText : '').then(() => {
    btn.textContent = 'Copied';
    setTimeout(() => btn.textContent = 'Copy', 1800);
  });
}
</script>

</body>
</html>