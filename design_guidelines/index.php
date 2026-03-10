<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Design Guidelines | Holidayseva</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=SF+Pro+Display:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --color-brand: #0071e3;
      --color-text: #1d1d1f;
      --color-text-2: #424245;
      --color-text-3: #6e6e73;
      --color-border: #d2d2d7;
      --color-surface: #f5f5f7;
      --color-surface-2: #fbfbfd;
      --radius-sm: 6px;
      --radius-md: 12px;
      --radius-lg: 18px;
      --radius-xl: 24px;
      --font-sans: -apple-system, 'SF Pro Display', 'Helvetica Neue', Arial, sans-serif;
      --font-mono: 'SF Mono', 'Fira Code', Menlo, monospace;
    }

    html { scroll-behavior: smooth; }

    body {
      font-family: var(--font-sans);
      background: #fff;
      color: var(--color-text);
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      overflow-x: hidden;
    }

    /* ─── NAV ─────────────────────────────────────── */
    .nav {
      position: sticky;
      top: 0;
      z-index: 100;
      background: rgba(255,255,255,0.82);
      backdrop-filter: saturate(180%) blur(20px);
      -webkit-backdrop-filter: saturate(180%) blur(20px);
      border-bottom: 1px solid rgba(0,0,0,0.08);
      height: 52px;
      display: flex;
      align-items: center;
      padding: 0 28px;
      gap: 28px;
    }
    .nav-logo {
      font-size: 17px;
      font-weight: 600;
      color: var(--color-text);
      text-decoration: none;
      letter-spacing: -0.3px;
    }
    .nav-links {
      display: flex;
      gap: 24px;
      list-style: none;
      margin-left: 8px;
    }
    .nav-links a {
      font-size: 13px;
      color: var(--color-text-3);
      text-decoration: none;
      transition: color 0.15s;
    }
    .nav-links a:hover { color: var(--color-text); }
    .nav-search {
      margin-left: auto;
      display: flex;
      align-items: center;
      background: var(--color-surface);
      border-radius: 8px;
      padding: 5px 12px;
      gap: 7px;
      width: 200px;
    }
    .nav-search svg { opacity: 0.4; flex-shrink: 0; }
    .nav-search input {
      border: none;
      background: none;
      outline: none;
      font-family: var(--font-sans);
      font-size: 13px;
      color: var(--color-text);
      width: 100%;
    }
    .nav-search input::placeholder { color: var(--color-text-3); }

    /* ─── HERO ─────────────────────────────────────── */
    .hero {
      position: relative;
      min-height: 480px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 88px 40px 96px;
      overflow: hidden;
      background: #000;
    }

    .hero-bg {
      position: absolute;
      inset: 0;
      background:
        radial-gradient(ellipse 80% 60% at 20% 40%, rgba(100,180,255,0.18) 0%, transparent 70%),
        radial-gradient(ellipse 60% 50% at 80% 70%, rgba(140,100,255,0.15) 0%, transparent 70%),
        radial-gradient(ellipse 50% 40% at 50% 20%, rgba(255,100,150,0.10) 0%, transparent 60%),
        linear-gradient(160deg, #0a0a0e 0%, #0d1117 50%, #080810 100%);
    }

    /* Animated glow orbs */
    .hero-orb {
      position: absolute;
      border-radius: 50%;
      filter: blur(80px);
      animation: orbFloat 12s ease-in-out infinite;
      pointer-events: none;
    }
    .hero-orb-1 { width: 400px; height: 400px; background: rgba(0,113,227,0.25); top: -100px; left: -60px; animation-duration: 14s; }
    .hero-orb-2 { width: 300px; height: 300px; background: rgba(191,90,242,0.2); bottom: -80px; right: 5%; animation-delay: 3s; animation-duration: 11s; }
    .hero-orb-3 { width: 200px; height: 200px; background: rgba(255,55,95,0.15); top: 30%; right: 25%; animation-delay: 6s; animation-duration: 16s; }

    @keyframes orbFloat {
      0%, 100% { transform: translate(0, 0) scale(1); }
      33%       { transform: translate(30px, -20px) scale(1.05); }
      66%       { transform: translate(-20px, 30px) scale(0.95); }
    }

    /* Star-like dots */
    .hero-dots {
      position: absolute;
      inset: 0;
      background-image:
        radial-gradient(circle, rgba(255,255,255,0.7) 1px, transparent 1px),
        radial-gradient(circle, rgba(255,255,255,0.4) 1px, transparent 1px);
      background-size: 80px 80px, 40px 40px;
      background-position: 0 0, 20px 20px;
      opacity: 0.08;
    }

    .hero-content {
      position: relative;
      z-index: 2;
    }

    .hero-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 12px;
      font-weight: 500;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.45);
      margin-bottom: 20px;
    }
    .hero-eyebrow::before, .hero-eyebrow::after {
      content: '';
      width: 28px; height: 1px;
      background: rgba(255,255,255,0.2);
    }

    .hero-title {
      font-size: clamp(44px, 6vw, 72px);
      font-weight: 700;
      letter-spacing: -2.5px;
      line-height: 1.02;
      color: #fff;
      margin-bottom: 20px;
    }
    .hero-title .accent {
      background: linear-gradient(135deg, #5ac8fa, #0071e3, #bf5af2);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .hero-sub {
      font-size: 19px;
      font-weight: 300;
      color: rgba(255,255,255,0.55);
      line-height: 1.6;
      max-width: 560px;
      margin: 0 auto 36px;
      letter-spacing: -0.2px;
    }

    .hero-cta {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 12px 24px;
      background: #0071e3;
      color: #fff;
      font-size: 15px;
      font-weight: 500;
      border-radius: 980px;
      text-decoration: none;
      transition: background 0.2s, transform 0.15s;
      letter-spacing: -0.2px;
    }
    .hero-cta:hover { background: #0077ed; transform: scale(1.02); }

    /* ─── WRAPPER ─────────────────────────────────── */
    .wrapper {
      max-width: 1140px;
      margin: 0 auto;
      padding: 0 24px;
    }

    /* ─── SECTION ─────────────────────────────────── */
    .section { padding: 72px 0 0; }
    .section-header {
      display: flex;
      align-items: baseline;
      justify-content: space-between;
      margin-bottom: 32px;
    }
    .section-title {
      font-size: clamp(24px, 3vw, 32px);
      font-weight: 700;
      letter-spacing: -1.2px;
      color: var(--color-text);
    }
    .section-link {
      font-size: 14px;
      font-weight: 500;
      color: var(--color-brand);
      text-decoration: none;
      white-space: nowrap;
    }
    .section-link:hover { text-decoration: underline; }

    /* ─── HIG TOPIC CARDS (Apple-style image cards) ─ */
    .hig-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 2px;
      background: var(--color-border);
      border-radius: 20px;
      overflow: hidden;
      margin-bottom: 2px;
    }
    .hig-grid-2 {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 2px;
      background: var(--color-border);
      border-radius: 20px;
      overflow: hidden;
    }
    @media (max-width: 900px) {
      .hig-grid { grid-template-columns: repeat(2, 1fr); }
      .hig-grid-2 { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 580px) {
      .hig-grid, .hig-grid-2 { grid-template-columns: 1fr; }
    }

    .hig-card {
      position: relative;
      background: #fff;
      text-decoration: none;
      color: inherit;
      display: block;
      overflow: hidden;
      transition: background 0.2s;
    }
    .hig-card:hover { background: var(--color-surface-2); }
    .hig-card:first-child { border-radius: 18px 0 0 0; }
    .hig-card:nth-child(3) { border-radius: 0 18px 0 0; }
    .hig-card:last-child { border-radius: 0 0 18px 18px; }

    .hig-card-img {
      width: 100%;
      aspect-ratio: 4/3;
      object-fit: cover;
      display: block;
      transition: transform 0.35s ease;
    }
    .hig-card:hover .hig-card-img { transform: scale(1.03); }
    .hig-card-img-wrap { overflow: hidden; }

    .hig-card-body {
      padding: 16px 20px 20px;
      border-top: 1px solid var(--color-border);
    }
    .hig-card-tag {
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--color-text-3);
      margin-bottom: 6px;
    }
    .hig-card-name {
      font-size: 17px;
      font-weight: 600;
      color: var(--color-text);
      letter-spacing: -0.4px;
      margin-bottom: 4px;
    }
    .hig-card-desc {
      font-size: 13px;
      color: var(--color-text-3);
      line-height: 1.5;
    }
    .hig-card-arrow {
      display: inline-flex;
      align-items: center;
      gap: 4px;
      font-size: 13px;
      font-weight: 500;
      color: var(--color-brand);
      margin-top: 10px;
    }

    /* ─── COMPONENT CATEGORY CARDS ───────────────── */
    .cat-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 16px;
    }
    @media (max-width: 900px) { .cat-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 580px) { .cat-grid { grid-template-columns: 1fr; } }

    .cat-card {
      display: block;
      text-decoration: none;
      border-radius: 18px;
      overflow: hidden;
      border: 1px solid var(--color-border);
      transition: transform 0.22s ease, box-shadow 0.22s ease;
      color: inherit;
      background: #fff;
    }
    .cat-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 20px 60px rgba(0,0,0,0.1);
      border-color: transparent;
    }

    .cat-thumb {
      width: 100%;
      aspect-ratio: 16/9;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      position: relative;
    }
    .cat-thumb svg { width: 100%; height: 100%; position: absolute; inset: 0; }

    .cat-thumb-badge {
      position: absolute;
      top: 14px;
      left: 14px;
      z-index: 2;
      font-size: 10px;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.85);
      background: rgba(0,0,0,0.22);
      backdrop-filter: blur(8px);
      padding: 4px 10px;
      border-radius: 20px;
      border: 1px solid rgba(255,255,255,0.18);
    }

    .cat-body {
      padding: 16px 20px 18px;
    }
    .cat-name {
      font-size: 16px;
      font-weight: 600;
      color: var(--color-text);
      letter-spacing: -0.3px;
      margin-bottom: 4px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .cat-name span { color: #aeaeb2; font-size: 14px; font-weight: 400; }
    .cat-count {
      font-size: 12.5px;
      color: var(--color-text-3);
      line-height: 1.5;
    }

    /* Gradient themes */
    .gt-foundation { background: linear-gradient(135deg, #1c1c1e, #3a3a3c); }
    .gt-atoms      { background: linear-gradient(135deg, #0a84ff, #5ac8fa); }
    .gt-forms      { background: linear-gradient(135deg, #30d158, #28a745); }
    .gt-layout     { background: linear-gradient(135deg, #5e5ce6, #bf5af2); }
    .gt-navigation { background: linear-gradient(135deg, #ff9f0a, #ff6b00); }
    .gt-interactive{ background: linear-gradient(135deg, #0a84ff, #5856d6); }
    .gt-data       { background: linear-gradient(135deg, #ff375f, #ff6b6b); }
    .gt-feedback   { background: linear-gradient(135deg, #ff9f0a, #ffd60a); }
    .gt-composite  { background: linear-gradient(135deg, #ff375f, #bf5af2); }
    .gt-media      { background: linear-gradient(135deg, #5ac8fa, #32ade6); }

    /* ─── INSTALL SECTION ─────────────────────────── */
    .rule {
      border: none;
      border-top: 1px solid var(--color-border);
      margin: 64px 0 0;
    }

    .install-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin-top: 32px;
      margin-bottom: 16px;
    }
    @media (max-width: 720px) { .install-grid { grid-template-columns: 1fr; } }

    .install-step {
      border: 1px solid var(--color-border);
      border-radius: 16px;
      overflow: hidden;
      background: #fff;
    }
    .install-step-head {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      padding: 18px 22px 16px;
      border-bottom: 1px solid var(--color-border);
    }
    .install-num {
      width: 26px; height: 26px;
      background: var(--color-text);
      color: #fff;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-size: 12px; font-weight: 700;
      flex-shrink: 0; margin-top: 1px;
    }
    .install-title { font-size: 14px; font-weight: 600; color: var(--color-text); }
    .install-desc  { font-size: 12.5px; color: #86868b; margin-top: 3px; line-height: 1.45; }

    pre.install-code {
      background: #161618;
      padding: 18px 22px;
      margin: 0;
      overflow-x: auto;
    }
    pre.install-code code {
      font-family: var(--font-mono);
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

    .install-bar {
      display: flex; align-items: center; justify-content: space-between;
      padding: 9px 16px;
      background: #0d0d0f;
      border-top: 1px solid rgba(255,255,255,.05);
    }
    .install-lang {
      font-size: 10px; font-weight: 600; letter-spacing: .07em;
      text-transform: uppercase; color: rgba(255,255,255,.3);
    }
    .install-copy {
      font-size: 11px; font-weight: 500; color: rgba(255,255,255,.35);
      padding: 3px 10px; border-radius: 6px;
      border: 1px solid rgba(255,255,255,.1);
      background: none; cursor: pointer;
      transition: color .1s, border-color .1s;
      font-family: var(--font-sans);
    }
    .install-copy:hover { color: #fff; border-color: rgba(255,255,255,.28); }

    /* ─── TOKEN TABLE ─────────────────────────────── */
    .token-section-title {
      font-size: 22px;
      font-weight: 700;
      letter-spacing: -0.6px;
      color: var(--color-text);
      margin: 48px 0 16px;
    }
    .token-wrap {
      border: 1px solid var(--color-border);
      border-radius: 16px;
      overflow: hidden;
      margin-bottom: 80px;
    }
    .token-table { width: 100%; border-collapse: collapse; font-size: 13px; }
    .token-table th {
      text-align: left; padding: 11px 18px;
      background: var(--color-surface-2);
      border-bottom: 1px solid var(--color-border);
      font-size: 11px; font-weight: 600;
      letter-spacing: .05em; text-transform: uppercase;
      color: #86868b;
    }
    .token-table td {
      padding: 12px 18px;
      border-bottom: 1px solid #f2f2f7;
      vertical-align: middle;
    }
    .token-table tr:last-child td { border-bottom: none; }
    .token-table tr:hover td { background: #fafafa; }
    .token-table code {
      font-family: var(--font-mono);
      font-size: 11.5px;
      background: #f2f2f7;
      padding: 2px 6px;
      border-radius: 4px;
      color: var(--color-text);
    }
    .swatch {
      display: inline-block;
      width: 13px; height: 13px;
      border-radius: 3px;
      border: 1px solid rgba(0,0,0,.1);
      vertical-align: middle;
      margin-right: 7px;
    }

    /* ─── FOOTER ──────────────────────────────────── */
    .footer {
      background: var(--color-surface);
      border-top: 1px solid var(--color-border);
      padding: 36px 24px;
      text-align: center;
    }
    .footer-text {
      font-size: 12px;
      color: var(--color-text-3);
      line-height: 1.8;
    }
    .footer-text a {
      color: var(--color-brand);
      text-decoration: none;
    }

    /* ─── ANIMATIONS ──────────────────────────────── */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .hero-content > * {
      animation: fadeUp 0.7s ease both;
    }
    .hero-eyebrow { animation-delay: 0.1s; }
    .hero-title   { animation-delay: 0.2s; }
    .hero-sub     { animation-delay: 0.32s; }
    .hero-cta     { animation-delay: 0.44s; }
  </style>
</head>
<body>

<!-- ─── NAV ─────────────────────────────────── -->
<nav class="nav">
  <a href="#" class="nav-logo">Holidayseva</a>
  <ul class="nav-links">
    <li><a href="#overview">Overview</a></li>
    <li><a href="#foundations">Foundations</a></li>
    <li><a href="#components">Components</a></li>
    <li><a href="#installation">Get Started</a></li>
  </ul>
  <div class="nav-search">
    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
      <circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/>
    </svg>
    <input type="text" placeholder="Search guidelines…">
  </div>
</nav>

<!-- ─── HERO ─────────────────────────────────── -->
<div class="hero" id="overview">
  <div class="hero-bg"></div>
  <div class="hero-dots"></div>
  <div class="hero-orb hero-orb-1"></div>
  <div class="hero-orb hero-orb-2"></div>
  <div class="hero-orb hero-orb-3"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">Design System</div>
    <h1 class="hero-title">Holidayseva<br><span class="accent">Design Guidelines</span></h1>
    <p class="hero-sub">Components, tokens, patterns, and integration guides for building Holidayseva products.</p>
    <a href="#components" class="hero-cta">
      Browse Components
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <path d="M5 12h14M12 5l7 7-7 7"/>
      </svg>
    </a>
  </div>
</div>

<!-- ─── MAIN CONTENT ──────────────────────────── -->
<div class="wrapper">

  <!-- ═══ FOUNDATIONS (Apple HIG image cards) ════ -->
  <div class="section" id="foundations">
    <div class="section-header">
      <h2 class="section-title">Foundations</h2>
      <a href="#" class="section-link">See all foundations →</a>
    </div>

    <!-- Row 1: 3 large cards -->
    <div class="hig-grid" style="margin-bottom:2px;">
      <a href="#" class="hig-card">
        <div class="hig-card-img-wrap">
          <img class="hig-card-img" src="https://docs-assets.developer.apple.com/published/345382ad96e4a8a995ad037f2776f978/foundations-app-icons-thumbnail%402x.png" alt="App Icons" loading="lazy">
        </div>
        <div class="hig-card-body">
          <div class="hig-card-tag">Core</div>
          <div class="hig-card-name">App Icons</div>
          <div class="hig-card-desc">Craft icons that communicate your app's purpose at a glance.</div>
          <div class="hig-card-arrow">Learn more <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>
      <a href="#" class="hig-card">
        <div class="hig-card-img-wrap">
          <img class="hig-card-img" src="https://docs-assets.developer.apple.com/published/abf2e0ae0883b9974bae47a71b3ac09b/foundations-color-thumbnail%402x.png" alt="Color" loading="lazy">
        </div>
        <div class="hig-card-body">
          <div class="hig-card-tag">Visual</div>
          <div class="hig-card-name">Color</div>
          <div class="hig-card-desc">Use color to convey information and enhance the UI without overwhelming.</div>
          <div class="hig-card-arrow">Learn more <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>
      <a href="#" class="hig-card">
        <div class="hig-card-img-wrap">
          <img class="hig-card-img" src="https://docs-assets.developer.apple.com/published/399fa3194e9fceae447179fca01d14b5/foundations-materials-thumbnail%402x.png" alt="Materials" loading="lazy">
        </div>
        <div class="hig-card-body">
          <div class="hig-card-tag">Surfaces</div>
          <div class="hig-card-name">Materials</div>
          <div class="hig-card-desc">Apply translucency and blur to create depth and visual hierarchy.</div>
          <div class="hig-card-arrow">Learn more <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>
    </div>

    <!-- Row 2: 4 smaller cards -->
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:2px;background:var(--color-border);border-radius:20px;overflow:hidden;margin-bottom:16px;">
      <a href="#" class="hig-card" style="border-radius:0 0 0 18px;">
        <div class="hig-card-img-wrap">
          <img class="hig-card-img" src="https://docs-assets.developer.apple.com/published/5f1118c7a04054c091da4877d8ad6a30/platforms%402x.png" alt="Platforms" loading="lazy" style="aspect-ratio:16/9;object-fit:cover;width:100%;display:block;">
        </div>
        <div class="hig-card-body">
          <div class="hig-card-tag">System</div>
          <div class="hig-card-name">Platforms</div>
          <div class="hig-card-desc">Design for every Apple platform with confidence.</div>
        </div>
      </a>
      <a href="#" class="hig-card">
        <div class="hig-card-img-wrap">
          <img class="hig-card-img" src="https://docs-assets.developer.apple.com/published/9b43c494c1a4380ef23ac4ea796144f1/inputs%402x.png" alt="Inputs" loading="lazy" style="aspect-ratio:16/9;object-fit:cover;width:100%;display:block;">
        </div>
        <div class="hig-card-body">
          <div class="hig-card-tag">Interaction</div>
          <div class="hig-card-name">Inputs</div>
          <div class="hig-card-desc">Buttons, toggles, sliders, and other controls.</div>
        </div>
      </a>
      <a href="#" class="hig-card">
        <div class="hig-card-img-wrap">
          <img class="hig-card-img" src="https://docs-assets.developer.apple.com/published/8e9aa190f87899c3c3b50ce5794a2889/technologies%402x.png" alt="Technologies" loading="lazy" style="aspect-ratio:16/9;object-fit:cover;width:100%;display:block;">
        </div>
        <div class="hig-card-body">
          <div class="hig-card-tag">SDK</div>
          <div class="hig-card-name">Technologies</div>
          <div class="hig-card-desc">Guidelines for using system frameworks and capabilities.</div>
        </div>
      </a>
      <a href="#" class="hig-card" style="border-radius:0 0 18px 0;">
        <div class="hig-card-img-wrap">
          <img class="hig-card-img" src="https://docs-assets.developer.apple.com/published/eb615612701e37890e4e41bb22074b49/patterns%402x.png" alt="Patterns" loading="lazy" style="aspect-ratio:16/9;object-fit:cover;width:100%;display:block;">
        </div>
        <div class="hig-card-body">
          <div class="hig-card-tag">UX</div>
          <div class="hig-card-name">Patterns</div>
          <div class="hig-card-desc">Familiar interaction patterns that users trust.</div>
        </div>
      </a>
    </div>

    <!-- Row 3: Components + Search + Multitasking side by side -->
    <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:2px;background:var(--color-border);border-radius:20px;overflow:hidden;margin-bottom:0;">
      <a href="#" class="hig-card" style="border-radius:18px 0 0 18px;">
        <div class="hig-card-img-wrap">
          <img class="hig-card-img" src="https://docs-assets.developer.apple.com/published/69ea95cca7b329d6ae87431bb9ef617c/components%402x.png" alt="Components" loading="lazy" style="aspect-ratio:16/9;object-fit:cover;width:100%;display:block;">
        </div>
        <div class="hig-card-body">
          <div class="hig-card-tag">UI Kit</div>
          <div class="hig-card-name">Components</div>
          <div class="hig-card-desc">Menus, pickers, alerts, and every UI building block.</div>
          <div class="hig-card-arrow">Learn more <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>
      <a href="#" class="hig-card">
        <div class="hig-card-img-wrap">
          <img class="hig-card-img" src="https://docs-assets.developer.apple.com/published/ddbdf38e27a54655df7627a7d8d004af/components-search-fields-thumbnail%402x.png" alt="Search" loading="lazy" style="aspect-ratio:16/9;object-fit:cover;width:100%;display:block;">
        </div>
        <div class="hig-card-body">
          <div class="hig-card-tag">Controls</div>
          <div class="hig-card-name">Search Fields</div>
          <div class="hig-card-desc">Help users find content quickly with clear, responsive search.</div>
          <div class="hig-card-arrow">Learn more <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>
      <a href="#" class="hig-card" style="border-radius:0 18px 18px 0;">
        <div class="hig-card-img-wrap">
          <img class="hig-card-img" src="https://docs-assets.developer.apple.com/published/ea6167f27c78f180c522c507f579cfd1/patterns-multitasking-thumbnail%402x.png" alt="Multitasking" loading="lazy" style="aspect-ratio:16/9;object-fit:cover;width:100%;display:block;">
        </div>
        <div class="hig-card-body">
          <div class="hig-card-tag">Patterns</div>
          <div class="hig-card-name">Multitasking</div>
          <div class="hig-card-desc">Design for split views, slide over, and Stage Manager.</div>
          <div class="hig-card-arrow">Learn more <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>
    </div>
  </div>

  <!-- ═══ BROWSE COMPONENTS ════════════════════════ -->
  <div class="section" id="components">
    <div class="section-header">
      <h2 class="section-title">Browse Components</h2>
    </div>

    <div class="cat-grid">

      <!-- Foundation -->
      <a href="UI/Foundation/Foundation.php" class="cat-card">
        <div class="cat-thumb gt-foundation">
          <span class="cat-thumb-badge">Core</span>
          <svg viewBox="0 0 400 225" fill="none">
            <circle cx="320" cy="50"  r="90" fill="rgba(255,255,255,.06)"/>
            <circle cx="80"  cy="180" r="70" fill="rgba(255,255,255,.05)"/>
            <circle cx="200" cy="112" r="120" fill="rgba(255,255,255,.04)"/>
            <circle cx="140" cy="95"  r="28" fill="#FF385C" opacity=".85"/>
            <circle cx="200" cy="95"  r="28" fill="#0a84ff" opacity=".85"/>
            <circle cx="260" cy="95"  r="28" fill="#30d158" opacity=".85"/>
            <rect x="130" y="132" width="140" height="8" rx="4" fill="rgba(255,255,255,.3)"/>
            <rect x="150" y="148" width="100" height="6" rx="3" fill="rgba(255,255,255,.18)"/>
          </svg>
        </div>
        <div class="cat-body">
          <div class="cat-name">Foundation <span>→</span></div>
          <div class="cat-count">Typography · Colour · Icons · Grid · Spacing · Motion</div>
        </div>
      </a>

      <!-- Atoms -->
      <a href="UI/Atom/Atom.php" class="cat-card">
        <div class="cat-thumb gt-atoms">
          <span class="cat-thumb-badge">Atoms</span>
          <svg viewBox="0 0 400 225" fill="none">
            <rect x="80" y="76" width="100" height="36" rx="18" fill="rgba(255,255,255,.35)"/>
            <rect x="192" y="76" width="80" height="36" rx="18" fill="rgba(255,255,255,.22)"/>
            <rect x="284" y="76" width="36" height="36" rx="18" fill="rgba(255,255,255,.22)"/>
            <rect x="80" y="124" width="64" height="28" rx="14" fill="rgba(255,255,255,.5)"/>
            <rect x="154" y="124" width="90" height="28" rx="14" fill="rgba(255,255,255,.22)"/>
            <circle cx="270" cy="138" r="14" fill="none" stroke="white" stroke-opacity=".5" stroke-width="2"/>
            <circle cx="300" cy="138" r="14" fill="rgba(255,255,255,.35)"/>
          </svg>
        </div>
        <div class="cat-body">
          <div class="cat-name">Atoms <span>→</span></div>
          <div class="cat-count">Button · Badge · Avatar · Tag · Toggle · Spinner · 8 more</div>
        </div>
      </a>

      <!-- Forms -->
      <a href="UI/Forms/Forms.php" class="cat-card">
        <div class="cat-thumb gt-forms">
          <span class="cat-thumb-badge">Input</span>
          <svg viewBox="0 0 400 225" fill="none">
            <rect x="80" y="52" width="240" height="30" rx="8" fill="rgba(255,255,255,.2)" stroke="white" stroke-opacity=".35" stroke-width="1"/>
            <rect x="92" y="62" width="80" height="10" rx="5" fill="rgba(255,255,255,.45)"/>
            <rect x="80" y="92" width="240" height="30" rx="8" fill="rgba(255,255,255,.2)" stroke="white" stroke-opacity=".35" stroke-width="1"/>
            <rect x="92" y="102" width="60" height="10" rx="5" fill="rgba(255,255,255,.3)"/>
            <circle cx="116" cy="148" r="6" fill="none" stroke="white" stroke-opacity=".6" stroke-width="2"/>
            <circle cx="116" cy="148" r="3" fill="white" opacity=".9"/>
            <rect x="130" y="143" width="60" height="10" rx="5" fill="rgba(255,255,255,.45)"/>
            <circle cx="220" cy="148" r="6" fill="none" stroke="white" stroke-opacity=".35" stroke-width="2"/>
            <rect x="234" y="143" width="60" height="10" rx="5" fill="rgba(255,255,255,.25)"/>
          </svg>
        </div>
        <div class="cat-body">
          <div class="cat-name">Forms <span>→</span></div>
          <div class="cat-count">Calendar · Date Picker · Autocomplete · File Upload · 5 more</div>
        </div>
      </a>

      <!-- Layout -->
      <a href="UI/Layout/Layout.php" class="cat-card">
        <div class="cat-thumb gt-layout">
          <span class="cat-thumb-badge">Structure</span>
          <svg viewBox="0 0 400 225" fill="none">
            <rect x="60" y="40" width="280" height="150" rx="12" fill="rgba(255,255,255,.12)" stroke="white" stroke-opacity=".2" stroke-width="1"/>
            <rect x="60" y="40" width="280" height="28" rx="12" fill="rgba(255,255,255,.22)"/>
            <rect x="60" y="68" width="68" height="122" fill="rgba(255,255,255,.14)"/>
            <path d="M128 68v122" stroke="white" stroke-opacity=".2" stroke-width="1"/>
            <rect x="140" y="82" width="140" height="8" rx="4" fill="rgba(255,255,255,.35)"/>
            <rect x="140" y="98" width="100" height="6" rx="3" fill="rgba(255,255,255,.2)"/>
            <rect x="140" y="112" width="120" height="6" rx="3" fill="rgba(255,255,255,.2)"/>
            <rect x="140" y="126" width="80" height="6" rx="3" fill="rgba(255,255,255,.15)"/>
          </svg>
        </div>
        <div class="cat-body">
          <div class="cat-name">Layout <span>→</span></div>
          <div class="cat-count">Grid · Flex · Stack · Container · Sidebar · 8 more</div>
        </div>
      </a>

      <!-- Navigation -->
      <a href="UI/Navigation/Navigation.php" class="cat-card">
        <div class="cat-thumb gt-navigation">
          <span class="cat-thumb-badge">Wayfinding</span>
          <svg viewBox="0 0 400 225" fill="none">
            <rect x="60" y="56" width="280" height="40" rx="10" fill="rgba(255,255,255,.22)"/>
            <circle cx="88" cy="76" r="12" fill="white" opacity=".5"/>
            <rect x="112" y="70" width="40" height="12" rx="6" fill="rgba(255,255,255,.5)"/>
            <rect x="162" y="70" width="40" height="12" rx="6" fill="rgba(255,255,255,.35)"/>
            <rect x="212" y="70" width="40" height="12" rx="6" fill="rgba(255,255,255,.35)"/>
            <rect x="80" y="114" width="48" height="12" rx="6" fill="rgba(255,255,255,.4)"/>
            <rect x="148" y="114" width="64" height="12" rx="6" fill="rgba(255,255,255,.6)"/>
            <rect x="148" y="148" width="24" height="24" rx="6" fill="rgba(255,255,255,.2)"/>
            <rect x="176" y="148" width="24" height="24" rx="6" fill="rgba(255,255,255,.55)"/>
            <rect x="204" y="148" width="24" height="24" rx="6" fill="rgba(255,255,255,.2)"/>
            <rect x="232" y="148" width="24" height="24" rx="6" fill="rgba(255,255,255,.2)"/>
          </svg>
        </div>
        <div class="cat-body">
          <div class="cat-name">Navigation <span>→</span></div>
          <div class="cat-count">Navbar · Sidebar · Drawer · Breadcrumb · Pagination · 2 more</div>
        </div>
      </a>

      <!-- Interactive -->
      <a href="UI/Interactive/Interactive.php" class="cat-card">
        <div class="cat-thumb gt-interactive">
          <span class="cat-thumb-badge">Patterns</span>
          <svg viewBox="0 0 400 225" fill="none">
            <rect x="80" y="50" width="240" height="30" rx="8" fill="rgba(255,255,255,.15)"/>
            <rect x="80" y="50" width="78" height="30" rx="8" fill="rgba(255,255,255,.4)"/>
            <rect x="80" y="96" width="240" height="36" rx="8" fill="rgba(255,255,255,.18)"/>
            <rect x="95" y="108" width="100" height="12" rx="6" fill="rgba(255,255,255,.5)"/>
            <path d="M295 114l-8 8-8-8" stroke="white" stroke-opacity=".6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
            <rect x="140" y="150" width="120" height="32" rx="8" fill="rgba(255,255,255,.3)"/>
            <path d="M196 182l8 10 8-10" fill="rgba(255,255,255,.3)"/>
            <rect x="155" y="160" width="60" height="8" rx="4" fill="rgba(255,255,255,.5)"/>
            <rect x="155" y="174" width="44" height="6" rx="3" fill="rgba(255,255,255,.3)"/>
          </svg>
        </div>
        <div class="cat-body">
          <div class="cat-name">Interactive <span>→</span></div>
          <div class="cat-count">Tabs · Accordion · Dropdown · Tooltip · Command Palette · 6 more</div>
        </div>
      </a>

      <!-- Data Display -->
      <a href="UI/DataDisplay/DataDisplay.php" class="cat-card">
        <div class="cat-thumb gt-data">
          <span class="cat-thumb-badge">Display</span>
          <svg viewBox="0 0 400 225" fill="none">
            <rect x="60" y="44" width="120" height="148" rx="14" fill="rgba(255,255,255,.2)" stroke="white" stroke-opacity=".25" stroke-width="1"/>
            <rect x="68" y="52" width="104" height="64" rx="8" fill="rgba(255,255,255,.25)"/>
            <rect x="68" y="126" width="70" height="10" rx="5" fill="rgba(255,255,255,.5)"/>
            <rect x="68" y="142" width="50" height="8" rx="4" fill="rgba(255,255,255,.3)"/>
            <rect x="68" y="158" width="80" height="22" rx="11" fill="rgba(255,255,255,.25)"/>
            <rect x="196" y="44" width="148" height="148" rx="14" fill="rgba(255,255,255,.12)" stroke="white" stroke-opacity=".2" stroke-width="1"/>
            <rect x="196" y="44" width="148" height="30" rx="14" fill="rgba(255,255,255,.2)"/>
            <rect x="204" y="82" width="132" height="18" rx="4" fill="rgba(255,255,255,.14)"/>
            <rect x="204" y="108" width="132" height="18" rx="4" fill="rgba(255,255,255,.08)"/>
            <rect x="204" y="134" width="132" height="18" rx="4" fill="rgba(255,255,255,.14)"/>
            <rect x="204" y="160" width="132" height="18" rx="4" fill="rgba(255,255,255,.08)"/>
          </svg>
        </div>
        <div class="cat-body">
          <div class="cat-name">Data Display <span>→</span></div>
          <div class="cat-count">Card · Table · Timeline · Stats · Review Card · 7 more</div>
        </div>
      </a>

      <!-- Feedback -->
      <a href="UI/Feedback/Feedback.php" class="cat-card">
        <div class="cat-thumb gt-feedback">
          <span class="cat-thumb-badge">States</span>
          <svg viewBox="0 0 400 225" fill="none">
            <rect x="60" y="52" width="280" height="52" rx="12" fill="rgba(255,255,255,.22)" stroke="white" stroke-opacity=".3" stroke-width="1"/>
            <circle cx="84" cy="78" r="12" fill="rgba(255,255,255,.5)"/>
            <path d="M84 71v9" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
            <circle cx="84" cy="83" r="1.5" fill="white"/>
            <rect x="104" y="68" width="140" height="10" rx="5" fill="rgba(255,255,255,.55)"/>
            <rect x="104" y="83" width="100" height="8" rx="4" fill="rgba(255,255,255,.3)"/>
            <rect x="200" y="122" width="140" height="52" rx="12" fill="rgba(255,255,255,.3)" stroke="white" stroke-opacity=".4" stroke-width="1"/>
            <rect x="214" y="136" width="80" height="10" rx="5" fill="rgba(255,255,255,.6)"/>
            <rect x="214" y="151" width="60" height="8" rx="4" fill="rgba(255,255,255,.35)"/>
            <rect x="60" y="122" width="120" height="52" rx="12" fill="rgba(255,255,255,.15)"/>
            <rect x="72" y="134" width="80" height="10" rx="5" fill="rgba(255,255,255,.35)"/>
            <rect x="72" y="150" width="56" height="8" rx="4" fill="rgba(255,255,255,.2)"/>
          </svg>
        </div>
        <div class="cat-body">
          <div class="cat-name">Feedback <span>→</span></div>
          <div class="cat-count">Alert · Toast · Modal · Skeleton · Empty State · 3 more</div>
        </div>
      </a>

      <!-- Composite -->
      <a href="UI/Composite/Composite.php" class="cat-card">
        <div class="cat-thumb gt-composite">
          <span class="cat-thumb-badge">Patterns</span>
          <svg viewBox="0 0 400 225" fill="none">
            <rect x="60" y="38" width="150" height="155" rx="16" fill="rgba(255,255,255,.18)" stroke="white" stroke-opacity=".25" stroke-width="1"/>
            <rect x="68" y="46" width="134" height="70" rx="10" fill="rgba(255,255,255,.3)"/>
            <rect x="68" y="124" width="90" height="10" rx="5" fill="rgba(255,255,255,.5)"/>
            <rect x="68" y="140" width="60" height="8" rx="4" fill="rgba(255,255,255,.3)"/>
            <rect x="68" y="158" width="100" height="24" rx="12" fill="rgba(255,255,255,.35)"/>
            <rect x="220" y="38" width="128" height="40" rx="10" fill="rgba(255,255,255,.28)"/>
            <circle cx="242" cy="58" r="8" fill="none" stroke="white" stroke-opacity=".6" stroke-width="2"/>
            <path d="M248 64l6 6" stroke="white" stroke-opacity=".6" stroke-width="2" stroke-linecap="round"/>
            <rect x="258" y="52" width="76" height="10" rx="5" fill="rgba(255,255,255,.35)"/>
            <rect x="220" y="90" width="128" height="100" rx="14" fill="rgba(255,255,255,.16)"/>
            <circle cx="284" cy="118" r="18" fill="rgba(255,255,255,.4)"/>
            <rect x="248" y="142" width="72" height="10" rx="5" fill="rgba(255,255,255,.5)"/>
          </svg>
        </div>
        <div class="cat-body">
          <div class="cat-name">Composite <span>→</span></div>
          <div class="cat-count">Booking Card · Search Bar · Profile Card · Filters · 6 more</div>
        </div>
      </a>

      <!-- Media -->
      <a href="UI/Media/Media.php" class="cat-card">
        <div class="cat-thumb gt-media">
          <span class="cat-thumb-badge">Assets</span>
          <svg viewBox="0 0 400 225" fill="none">
            <rect x="60" y="44" width="120" height="80" rx="10" fill="rgba(255,255,255,.3)"/>
            <rect x="188" y="44" width="76" height="80" rx="10" fill="rgba(255,255,255,.25)"/>
            <rect x="272" y="44" width="76" height="80" rx="10" fill="rgba(255,255,255,.2)"/>
            <rect x="60" y="132" width="76" height="60" rx="10" fill="rgba(255,255,255,.2)"/>
            <rect x="144" y="132" width="110" height="60" rx="10" fill="rgba(255,255,255,.28)"/>
            <rect x="262" y="132" width="86" height="60" rx="10" fill="rgba(255,255,255,.22)"/>
            <path d="M100 72l22 12-22 12V72z" fill="rgba(255,255,255,.7)"/>
          </svg>
        </div>
        <div class="cat-body">
          <div class="cat-name">Media <span>→</span></div>
          <div class="cat-count">Image · Video · Gallery · Carousel · Lightbox · Thumbnail Grid</div>
        </div>
      </a>

    </div>
  </div>

  <!-- ═══ GET STARTED ════════════════════════════════ -->
  <hr class="rule">
  <div class="section" id="installation" style="padding-top:56px;">
    <h2 class="section-title">Get Started</h2>

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
            <div class="install-desc">Auto-inits on <code style="font-size:11px;background:#f0f0f5;padding:1px 5px;border-radius:4px;">DOMContentLoaded</code> — no manual wiring needed.</div>
          </div>
        </div>
        <pre class="install-code"><code><span class="ic-c">&lt;!-- before &lt;/body&gt; --&gt;</span>
<span class="ic-t">&lt;script</span>
  <span class="ic-a">src</span>=<span class="ic-s">"/UI/Atom/toggle/toggle.js"</span>
<span class="ic-t">&gt;&lt;/script&gt;</span></code></pre>
        <div class="install-bar"><span class="install-lang">HTML · JS</span><button class="install-copy" onclick="copyCode(this)">Copy</button></div>
      </div>
    </div>

    <!-- Token table -->
    <h3 class="token-section-title">CSS Custom Properties</h3>
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
  </div>

</div><!-- /wrapper -->

<!-- ─── FOOTER ──────────────────────────────── -->
<footer class="footer">
  <div class="footer-text">
    Copyright &copy; 2025 Holidayseva. All rights reserved.<br>
    Design system inspired by <a href="https://developer.apple.com/design/human-interface-guidelines/">Apple Human Interface Guidelines</a>.
  </div>
</footer>

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