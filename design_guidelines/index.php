<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Design Resources - Holidayseva</title>
  <link rel="stylesheet" href="/design-system.css">
  <style>
    /* ─────────────────────────────────────────────────────────
       LANDING PAGE STYLES — index.php only
    ───────────────────────────────────────────────────────── */

    /* ── Hero ─────────────────────────────────────────────── */
    .hero {
      padding: 60px 0 52px;
      border-bottom: 1px solid #e5e5ea;
      margin-bottom: 48px;
    }
    .hero-eyebrow {
      display: inline-flex; align-items: center; gap: 6px;
      font-size: 11.5px; font-weight: 600; letter-spacing: .08em;
      text-transform: uppercase; color: #FF385C;
      margin-bottom: 20px;
    }
    .hero h1 {
      font-size: clamp(32px, 5vw, 52px);
      font-weight: 700;
      letter-spacing: -1.8px;
      line-height: 1.06;
      color: #1d1d1f;
      margin-bottom: 18px;
    }
    .hero p {
      font-size: 17px;
      color: #424245;
      line-height: 1.58;
      max-width: 520px;
      margin-bottom: 32px;
    }
    .hero-actions { display: flex; gap: 10px; flex-wrap: wrap; }
    .btn-hero-primary {
      display: inline-flex; align-items: center; gap: 7px;
      background: #1d1d1f; color: #fff;
      padding: 10px 20px; border-radius: 980px;
      font-size: 13.5px; font-weight: 500;
      text-decoration: none; letter-spacing: -.1px;
      transition: background .15s, transform .15s;
    }
    .btn-hero-primary:hover { background: #000; transform: translateY(-1px); text-decoration: none; }
    .btn-hero-secondary {
      display: inline-flex; align-items: center; gap: 7px;
      background: #f2f2f7; color: #1d1d1f; border: 1px solid #e5e5ea;
      padding: 10px 20px; border-radius: 980px;
      font-size: 13.5px; font-weight: 500;
      text-decoration: none; letter-spacing: -.1px;
      transition: background .15s, transform .15s;
    }
    .btn-hero-secondary:hover { background: #e5e5ea; transform: translateY(-1px); text-decoration: none; }

    /* ── Stats strip ──────────────────────────────────────── */
    .stats-strip {
      display: grid; grid-template-columns: repeat(4, 1fr);
      border: 1px solid #e5e5ea; border-radius: 14px;
      overflow: hidden; margin-bottom: 52px;
    }
    .stat-cell {
      padding: 22px 24px; border-right: 1px solid #e5e5ea; background: #fff;
    }
    .stat-cell:last-child { border-right: none; }
    .stat-num {
      font-size: 30px; font-weight: 700; letter-spacing: -1.2px;
      color: #1d1d1f; line-height: 1;
    }
    .stat-num em { color: #FF385C; font-style: normal; }
    .stat-lbl { font-size: 12px; color: #86868b; margin-top: 4px; }

    /* ── Category sections ────────────────────────────────── */
    .cat-section { margin-bottom: 52px; }
    .cat-header {
      display: flex; align-items: baseline; justify-content: space-between;
      margin-bottom: 16px; padding-bottom: 12px;
      border-bottom: 1px solid #e5e5ea;
    }
    .cat-title {
      font-size: 11.5px; font-weight: 600; letter-spacing: .07em;
      text-transform: uppercase; color: #86868b;
    }
    .cat-see-all {
      font-size: 12.5px; color: #0066cc; font-weight: 500;
      text-decoration: none;
    }
    .cat-see-all:hover { text-decoration: underline; }

    /* ── Component card grid ──────────────────────────────── */
    .comp-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
      gap: 1px;
      background: #e5e5ea;
      border: 1px solid #e5e5ea;
      border-radius: 14px;
      overflow: hidden;
    }
    .comp-card {
      display: flex; align-items: flex-start; gap: 12px;
      padding: 18px 20px;
      background: #fff;
      text-decoration: none; color: inherit;
      transition: background .1s;
      position: relative;
    }
    .comp-card:hover { background: #f9f9fb; text-decoration: none; }
    .comp-card:hover .comp-card-arrow { opacity: 1; transform: translateX(2px); }
    .comp-card-icon {
      width: 32px; height: 32px; flex-shrink: 0;
      background: #f2f2f7; border-radius: 8px;
      display: flex; align-items: center; justify-content: center;
      color: #424245;
    }
    .comp-card-body { flex: 1; min-width: 0; }
    .comp-card-title {
      font-size: 13.5px; font-weight: 500; color: #1d1d1f;
      line-height: 1.3; display: flex; align-items: center; gap: 6px; flex-wrap: wrap;
    }
    .comp-card-desc {
      font-size: 12px; color: #86868b; line-height: 1.5; margin-top: 3px;
    }
    .comp-card-arrow {
      flex-shrink: 0; color: #aeaeb2; margin-top: 2px;
      opacity: 0; transform: translateX(0);
      transition: opacity .12s, transform .12s;
    }
    .comp-tag {
      font-size: 9.5px; font-weight: 600; letter-spacing: .05em;
      text-transform: uppercase; padding: 1.5px 6px; border-radius: 4px;
      line-height: 1.6;
    }
    .comp-tag--stable { background: #e8f5e9; color: #2e7d32; }
    .comp-tag--beta   { background: #fff3e0; color: #e65100; }
    .comp-tag--new    { background: #e3f2fd; color: #1565c0; }

    /* ── Featured dark panel ──────────────────────────────── */
    .featured-panel {
      background: #1d1d1f;
      border-radius: 18px; padding: 44px 44px 40px;
      margin-bottom: 52px; position: relative; overflow: hidden;
    }
    .featured-panel::before {
      content: ''; position: absolute;
      width: 360px; height: 360px; border-radius: 50%;
      background: radial-gradient(circle, rgba(255,56,92,.18) 0%, transparent 70%);
      top: -100px; right: -80px; pointer-events: none;
    }
    .featured-panel-tag {
      display: inline-block; font-size: 11px; font-weight: 600;
      letter-spacing: .08em; text-transform: uppercase;
      color: rgba(255,255,255,.5); margin-bottom: 16px;
    }
    .featured-panel h2 {
      font-size: 28px; font-weight: 680; letter-spacing: -.8px;
      color: #fff; margin-bottom: 10px; line-height: 1.2;
      position: relative; z-index: 1;
    }
    .featured-panel p {
      font-size: 15px; color: rgba(255,255,255,.55); line-height: 1.6;
      max-width: 460px; margin-bottom: 28px; position: relative; z-index: 1;
    }
    .featured-links {
      display: grid; grid-template-columns: repeat(3, 1fr);
      gap: 10px; position: relative; z-index: 1;
    }
    .featured-link {
      background: rgba(255,255,255,.07); border: 1px solid rgba(255,255,255,.1);
      border-radius: 10px; padding: 14px 16px;
      color: rgba(255,255,255,.8); font-size: 13px; font-weight: 450;
      text-decoration: none; display: flex; align-items: center; gap: 10px;
      transition: background .12s;
    }
    .featured-link:hover { background: rgba(255,255,255,.12); text-decoration: none; color: #fff; }
    .featured-link-icon {
      width: 30px; height: 30px; border-radius: 7px;
      background: rgba(255,255,255,.1); flex-shrink: 0;
      display: flex; align-items: center; justify-content: center;
      font-size: 14px;
    }

    /* ── Quick-start callout ──────────────────────────────── */
    .qs-row {
      display: grid; grid-template-columns: 1fr 1fr;
      gap: 14px; margin-bottom: 52px;
    }
    .qs-card {
      border: 1px solid #e5e5ea; border-radius: 14px;
      padding: 28px 28px 24px; text-decoration: none; color: inherit;
      transition: box-shadow .15s, transform .15s;
      display: block;
    }
    .qs-card:hover { box-shadow: 0 4px 20px rgba(0,0,0,.08); transform: translateY(-2px); text-decoration: none; }
    .qs-card-label {
      font-size: 11px; font-weight: 600; letter-spacing: .08em;
      text-transform: uppercase; color: #aeaeb2; margin-bottom: 8px;
    }
    .qs-card h3 {
      font-size: 18px; font-weight: 650; letter-spacing: -.4px;
      color: #1d1d1f; margin-bottom: 8px;
    }
    .qs-card p {
      font-size: 13.5px; color: #86868b; line-height: 1.55; margin: 0;
    }
    .qs-card-cta {
      display: inline-flex; align-items: center; gap: 5px;
      margin-top: 16px; font-size: 13px; font-weight: 500; color: #0066cc;
    }

    /* responsive */
    @media (max-width: 900px) {
      .stats-strip { grid-template-columns: repeat(2, 1fr); }
      .featured-links { grid-template-columns: 1fr 1fr; }
      .qs-row { grid-template-columns: 1fr; }
    }
    @media (max-width: 600px) {
      .stats-strip { grid-template-columns: 1fr 1fr; }
      .featured-links { grid-template-columns: 1fr; }
      .featured-panel { padding: 28px 20px; }
    }
  </style>
</head>
<body>

<?php include __DIR__ . '/header.php'; ?>
<?php include __DIR__ . '/drawer_sidebar.php'; ?>

<div class="page-layout">

  <!-- ── Left sidebar (yours, untouched) ──────────── -->
  <aside class="sidebar-left">
    <?php include __DIR__ . '/left_sidebar.php'; ?>
  </aside>

  <!-- ── Main content ─────────────────────────────── -->
  <main class="page-main" id="top">

    <!-- Hero ─────────────────────────────────────── -->
    <div class="hero" id="overview">
      <p class="hero-eyebrow">
        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" aria-hidden="true">
          <circle cx="5" cy="5" r="4" fill="#FF385C" opacity=".25"/>
          <circle cx="5" cy="5" r="2.5" fill="#FF385C"/>
        </svg>
        Holidayseva · Design System
      </p>
      <h1>Design<br>Guidelines</h1>
      <p>A single source of truth for building Holidayseva products — design tokens, accessible components, and interaction patterns crafted for clarity and delight.</p>
      <div class="hero-actions">
        <a href="UI/Foundation/Foundation.php" class="btn-hero-primary">
          Get started
          <svg width="12" height="12" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="UI/Atom/Atom.php" class="btn-hero-secondary">
          Browse components
        </a>
      </div>
    </div>

    <!-- Stats strip ───────────────────────────────── -->
    <div class="stats-strip" id="stats">
      <div class="stat-cell">
        <div class="stat-num">70<em>+</em></div>
        <div class="stat-lbl">Components</div>
      </div>
      <div class="stat-cell">
        <div class="stat-num">9</div>
        <div class="stat-lbl">Categories</div>
      </div>
      <div class="stat-cell">
        <div class="stat-num">100<em>%</em></div>
        <div class="stat-lbl">WCAG 2.1 AA</div>
      </div>
      <div class="stat-cell">
        <div class="stat-num">v1<em>.</em>0</div>
        <div class="stat-lbl">Current version</div>
      </div>
    </div>

    <!-- Featured: Foundation ──────────────────────── -->
    <div class="featured-panel" id="foundation">
      <p class="featured-panel-tag">Start here</p>
      <h2>Design Foundations</h2>
      <p>Every pixel in the Holidayseva product is rooted in a set of decisions. Explore the tokens that underpin every component.</p>
      <div class="featured-links">
        <a href="UI/Foundation/colors.php" class="featured-link">
          <div class="featured-link-icon">🎨</div>
          Colour
        </a>
        <a href="UI/Foundation/typography.php" class="featured-link">
          <div class="featured-link-icon">Aa</div>
          Typography
        </a>
        <a href="UI/Foundation/spacing.php" class="featured-link">
          <div class="featured-link-icon">⊞</div>
          Spacing
        </a>
        <a href="UI/Foundation/grid.php" class="featured-link">
          <div class="featured-link-icon">▦</div>
          Grid
        </a>
        <a href="UI/Foundation/motion.php" class="featured-link">
          <div class="featured-link-icon">▶</div>
          Motion
        </a>
        <a href="UI/Foundation/shadows.php" class="featured-link">
          <div class="featured-link-icon">◫</div>
          Shadows
        </a>
      </div>
    </div>

    <!-- Atoms ─────────────────────────────────────── -->
    <?php
    $atomsPreview = [
      ['slug'=>'button',   'label'=>'Button',   'desc'=>'All variants, sizes, and states.',          'icon'=>'<rect x="1.5" y="5" width="13" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/>'],
      ['slug'=>'input',    'label'=>'Input',    'desc'=>'With label, helper text, and validation.',  'icon'=>'<rect x="1.5" y="4" width="13" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M5 8h6M5 10.5h3" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>'],
      ['slug'=>'toggle',   'label'=>'Toggle',   'desc'=>'Binary switch with animated transition.',   'icon'=>'<rect x="1" y="5" width="14" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/><circle cx="11.5" cy="8" r="2" fill="currentColor"/>'],
      ['slug'=>'badge',    'label'=>'Badge',    'desc'=>'Status and count indicators.',              'icon'=>'<rect x="3" y="5" width="10" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/>'],
      ['slug'=>'avatar',   'label'=>'Avatar',   'desc'=>'Image with fallback and status dot.',       'icon'=>'<circle cx="8" cy="5.5" r="2.5" stroke="currentColor" stroke-width="1.2"/><path d="M2.5 14c0-3.04 2.46-5.5 5.5-5.5s5.5 2.46 5.5 5.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>'],
      ['slug'=>'spinner',  'label'=>'Spinner',  'desc'=>'Animated loading indicator.',              'icon'=>'<circle cx="8" cy="8" r="5.5" stroke="currentColor" stroke-width="1.3" stroke-dasharray="16 18" stroke-linecap="round"/>'],
    ];
    ?>
    <div class="cat-section" id="atoms">
      <div class="cat-header">
        <span class="cat-title">Atoms</span>
        <a href="UI/Atom/Atom.php" class="cat-see-all">See all 19 →</a>
      </div>
      <div class="comp-grid">
        <?php foreach ($atomsPreview as $a): ?>
        <a href="UI/Atom/<?= $a['slug'] ?>/<?= $a['slug'] ?>.php" class="comp-card">
          <div class="comp-card-icon">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><?= $a['icon'] ?></svg>
          </div>
          <div class="comp-card-body">
            <div class="comp-card-title"><?= $a['label'] ?></div>
            <div class="comp-card-desc"><?= $a['desc'] ?></div>
          </div>
          <svg class="comp-card-arrow" width="12" height="12" viewBox="0 0 16 16" fill="none">
            <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Forms ─────────────────────────────────────── -->
    <?php
    $formsPreview = [
      ['slug'=>'calendar',     'label'=>'Calendar',      'desc'=>'Month-view with date selection.',       'icon'=>'<rect x="1.5" y="3" width="13" height="11" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M5 1.5V4M11 1.5V4M1.5 6.5h13" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>'],
      ['slug'=>'date-picker',  'label'=>'Date Picker',   'desc'=>'Input + calendar popover.',             'icon'=>'<rect x="1.5" y="3" width="13" height="11" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M1.5 6.5h13" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/><circle cx="8" cy="10" r="1.2" fill="currentColor"/>'],
      ['slug'=>'autocomplete', 'label'=>'Autocomplete',  'desc'=>'Live suggestions with keyboard nav.',   'icon'=>'<rect x="1.5" y="4" width="13" height="4" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M2 11h12M2 13.5h8" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" opacity=".35"/>'],
      ['slug'=>'file-upload',  'label'=>'File Upload',   'desc'=>'Drag-and-drop zone with progress.',    'icon'=>'<rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M8 10V6M6 8l2-2 2 2" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>'],
    ];
    ?>
    <div class="cat-section" id="forms">
      <div class="cat-header">
        <span class="cat-title">Forms</span>
        <a href="UI/Forms/Forms.php" class="cat-see-all">See all 9 →</a>
      </div>
      <div class="comp-grid">
        <?php foreach ($formsPreview as $a): ?>
        <a href="UI/Forms/<?= $a['slug'] ?>/<?= $a['slug'] ?>.php" class="comp-card">
          <div class="comp-card-icon">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><?= $a['icon'] ?></svg>
          </div>
          <div class="comp-card-body">
            <div class="comp-card-title"><?= $a['label'] ?></div>
            <div class="comp-card-desc"><?= $a['desc'] ?></div>
          </div>
          <svg class="comp-card-arrow" width="12" height="12" viewBox="0 0 16 16" fill="none">
            <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Layout ────────────────────────────────────── -->
    <?php
    $layoutPreview = [
      ['slug'=>'grid',        'label'=>'Grid',         'desc'=>'12-column responsive CSS Grid.',    'icon'=>'<rect x="2" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="9" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="2" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="9" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/>'],
      ['slug'=>'sidebar',     'label'=>'Sidebar',      'desc'=>'Fixed-width panel with scroll.',    'icon'=>'<rect x="1.5" y="2" width="13" height="12" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M6 2v12" stroke="currentColor" stroke-width="1.2"/>'],
      ['slug'=>'stack',       'label'=>'Stack',        'desc'=>'Vertical flex with uniform gap.',   'icon'=>'<rect x="2" y="2" width="12" height="3" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="2" y="6.5" width="12" height="3" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="2" y="11" width="12" height="3" rx="1" stroke="currentColor" stroke-width="1.2"/>'],
      ['slug'=>'breadcrumbs', 'label'=>'Breadcrumbs',  'desc'=>'Hierarchical path indicator.',     'icon'=>'<path d="M2 8h3M5 8l2-3 2 6 2-3h3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>'],
    ];
    ?>
    <div class="cat-section" id="layout">
      <div class="cat-header">
        <span class="cat-title">Layout</span>
        <a href="UI/Layout/Layout.php" class="cat-see-all">See all 13 →</a>
      </div>
      <div class="comp-grid">
        <?php foreach ($layoutPreview as $a): ?>
        <a href="UI/Layout/<?= $a['slug'] ?>/<?= $a['slug'] ?>.php" class="comp-card">
          <div class="comp-card-icon">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><?= $a['icon'] ?></svg>
          </div>
          <div class="comp-card-body">
            <div class="comp-card-title"><?= $a['label'] ?></div>
            <div class="comp-card-desc"><?= $a['desc'] ?></div>
          </div>
          <svg class="comp-card-arrow" width="12" height="12" viewBox="0 0 16 16" fill="none">
            <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Interactive ────────────────────────────────── -->
    <?php
    $interactivePreview = [
      ['slug'=>'tabs',      'label'=>'Tabs',      'desc'=>'Horizontal panel switcher.',            'icon'=>'<path d="M2 10V5.5A1.5 1.5 0 013.5 4H7l1.5 2H14v4a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 012 10z" stroke="currentColor" stroke-width="1.2"/>'],
      ['slug'=>'dropdown',  'label'=>'Dropdown',  'desc'=>'Button-triggered action menu.',         'icon'=>'<rect x="1.5" y="4" width="13" height="5" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M2 11h12M2 13.5h8" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" opacity=".35"/>'],
      ['slug'=>'accordion', 'label'=>'Accordion', 'desc'=>'Expand/collapse content sections.',    'icon'=>'<rect x="1.5" y="3" width="13" height="3.5" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="1.5" y="8" width="13" height="3.5" rx="1" stroke="currentColor" stroke-width="1.2" opacity=".4"/><rect x="1.5" y="12.5" width="13" height="1" rx=".5" stroke="currentColor" stroke-width="1" opacity=".2"/>'],
      ['slug'=>'tooltip',   'label'=>'Tooltip',   'desc'=>'Brief label on hover or focus.',       'icon'=>'<rect x="2" y="2" width="12" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M5 10.5l1.5 2.5 1.5-2.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 5.5h6M5 7.5h4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>'],
    ];
    ?>
    <div class="cat-section" id="interactive">
      <div class="cat-header">
        <span class="cat-title">Interactive</span>
        <a href="UI/Interactive/Interactive.php" class="cat-see-all">See all 11 →</a>
      </div>
      <div class="comp-grid">
        <?php foreach ($interactivePreview as $a): ?>
        <a href="UI/Interactive/<?= $a['slug'] ?>/<?= $a['slug'] ?>.php" class="comp-card">
          <div class="comp-card-icon">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><?= $a['icon'] ?></svg>
          </div>
          <div class="comp-card-body">
            <div class="comp-card-title"><?= $a['label'] ?></div>
            <div class="comp-card-desc"><?= $a['desc'] ?></div>
          </div>
          <svg class="comp-card-arrow" width="12" height="12" viewBox="0 0 16 16" fill="none">
            <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Data Display ──────────────────────────────── -->
    <?php
    $ddPreview = [
      ['slug'=>'card',         'label'=>'Card',          'desc'=>'Contained surface for a single topic.',         'icon'=>'<rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M4 6.5h5M4 9h8M4 11h6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>'],
      ['slug'=>'table',        'label'=>'Table',         'desc'=>'Sortable data table with sticky header.',       'icon'=>'<rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M1.5 6.5h13M6.5 3v10" stroke="currentColor" stroke-width="1.2"/>'],
      ['slug'=>'stats-card',   'label'=>'Stats Card',    'desc'=>'KPI tile with metric and trend.',              'icon'=>'<rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M4 10l2.5-3 2 2 3-4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>'],
      ['slug'=>'timeline',     'label'=>'Timeline',      'desc'=>'Vertical chronological list.',                 'icon'=>'<circle cx="6" cy="5" r="1.5" stroke="currentColor" stroke-width="1.2"/><circle cx="6" cy="11" r="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M6 6.5V9.5M9 5h3M9 11h3" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>'],
    ];
    ?>
    <div class="cat-section" id="data-display">
      <div class="cat-header">
        <span class="cat-title">Data Display</span>
        <a href="UI/DataDisplay/DataDisplay.php" class="cat-see-all">See all 12 →</a>
      </div>
      <div class="comp-grid">
        <?php foreach ($ddPreview as $a): ?>
        <a href="UI/DataDisplay/<?= $a['slug'] ?>/<?= $a['slug'] ?>.php" class="comp-card">
          <div class="comp-card-icon">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><?= $a['icon'] ?></svg>
          </div>
          <div class="comp-card-body">
            <div class="comp-card-title"><?= $a['label'] ?></div>
            <div class="comp-card-desc"><?= $a['desc'] ?></div>
          </div>
          <svg class="comp-card-arrow" width="12" height="12" viewBox="0 0 16 16" fill="none">
            <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Feedback ──────────────────────────────────── -->
    <?php
    $feedbackPreview = [
      ['slug'=>'alert',           'label'=>'Alert',            'desc'=>'Info, success, warning, and error.',     'icon'=>'<rect x="1.5" y="4" width="13" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M4 8h2M4 10h6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/><circle cx="3.5" cy="8" r=".5" fill="currentColor"/>'],
      ['slug'=>'toast',           'label'=>'Toast',            'desc'=>'Transient auto-dismiss notification.',   'icon'=>'<rect x="2" y="5" width="12" height="7" rx="2" stroke="currentColor" stroke-width="1.2"/><path d="M5 8.5h6M5 10.5h4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>'],
      ['slug'=>'skeleton-loader', 'label'=>'Skeleton Loader',  'desc'=>'Animated placeholder shapes.',          'icon'=>'<rect x="2" y="3" width="12" height="4" rx="2" stroke="currentColor" stroke-width="1.2" opacity=".4"/><rect x="2" y="9" width="8" height="2" rx="1" stroke="currentColor" stroke-width="1.2" opacity=".3"/><rect x="2" y="12.5" width="5" height="1.5" rx=".75" stroke="currentColor" stroke-width="1.2" opacity=".2"/>'],
      ['slug'=>'empty-state',     'label'=>'Empty State',      'desc'=>'Illustration + copy + CTA.',            'icon'=>'<circle cx="8" cy="7" r="4" stroke="currentColor" stroke-width="1.2" stroke-dasharray="2 2"/><path d="M5 13h6" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>'],
    ];
    ?>
    <div class="cat-section" id="feedback">
      <div class="cat-header">
        <span class="cat-title">Feedback</span>
        <a href="UI/Feedback/Feedback.php" class="cat-see-all">See all 8 →</a>
      </div>
      <div class="comp-grid">
        <?php foreach ($feedbackPreview as $a): ?>
        <a href="UI/Feedback/<?= $a['slug'] ?>/<?= $a['slug'] ?>.php" class="comp-card">
          <div class="comp-card-icon">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><?= $a['icon'] ?></svg>
          </div>
          <div class="comp-card-body">
            <div class="comp-card-title"><?= $a['label'] ?></div>
            <div class="comp-card-desc"><?= $a['desc'] ?></div>
          </div>
          <svg class="comp-card-arrow" width="12" height="12" viewBox="0 0 16 16" fill="none">
            <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Composite ─────────────────────────────────── -->
    <?php
    $compositePreview = [
      ['slug'=>'booking-card',    'label'=>'Booking Card',    'desc'=>'Holidayseva date/guest/CTA widget.', 'icon'=>'<rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M4 6.5h3.5M4 9h5M10 9.5v2M11.5 10.5h-3" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>'],
      ['slug'=>'search-bar',      'label'=>'Search Bar',      'desc'=>'Input + live suggestions.',          'icon'=>'<circle cx="7" cy="7" r="4.5" stroke="currentColor" stroke-width="1.2"/><path d="M10.5 10.5l3 3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>'],
      ['slug'=>'profile-card',    'label'=>'Profile Card',    'desc'=>'Avatar, name, role, and actions.',   'icon'=>'<circle cx="8" cy="5.5" r="2.5" stroke="currentColor" stroke-width="1.2"/><rect x="2" y="9.5" width="12" height="4" rx="1.5" stroke="currentColor" stroke-width="1.2"/>'],
      ['slug'=>'notification-dropdown','label'=>'Notification Dropdown','desc'=>'Bell icon + notification list.','icon'=>'<path d="M8 2a4 4 0 014 4v3l1.5 2h-11L4 9V6a4 4 0 014-4z" stroke="currentColor" stroke-width="1.2"/><path d="M6.5 11a1.5 1.5 0 003 0" stroke="currentColor" stroke-width="1.2"/>'],
    ];
    ?>
    <div class="cat-section" id="composite">
      <div class="cat-header">
        <span class="cat-title">Composite</span>
        <a href="UI/Composite/Composite.php" class="cat-see-all">See all 10 →</a>
      </div>
      <div class="comp-grid">
        <?php foreach ($compositePreview as $a): ?>
        <a href="UI/Composite/<?= $a['slug'] ?>/<?= $a['slug'] ?>.php" class="comp-card">
          <div class="comp-card-icon">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><?= $a['icon'] ?></svg>
          </div>
          <div class="comp-card-body">
            <div class="comp-card-title"><?= $a['label'] ?></div>
            <div class="comp-card-desc"><?= $a['desc'] ?></div>
          </div>
          <svg class="comp-card-arrow" width="12" height="12" viewBox="0 0 16 16" fill="none">
            <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Quick-start pair ──────────────────────────── -->
    <div class="qs-row" id="resources">
      <a href="UI/Foundation/Foundation.php" class="qs-card">
        <p class="qs-card-label">For designers</p>
        <h3>Figma Kit</h3>
        <p>Components, tokens, and spacing guides — ready to drag into your frames.</p>
        <span class="qs-card-cta">
          Open Figma
          <svg width="11" height="11" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </span>
      </a>
      <a href="#" class="qs-card">
        <p class="qs-card-label">For developers</p>
        <h3>GitHub Repository</h3>
        <p>CSS, PHP components, and the full design-system.css — open source and versioned.</p>
        <span class="qs-card-cta">
          View on GitHub
          <svg width="11" height="11" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </span>
      </a>
    </div>

  </main>

  <!-- ── Right sidebar (yours, untouched) ─────────── -->
  <aside class="sidebar-right">
    <?php include __DIR__ . '/right_sidebar.php'; ?>
  </aside>

</div>

<?php include __DIR__ . '/footer.php'; ?>

<script>
/* TOC scroll-spy — works with existing right_sidebar.php script */
document.addEventListener('DOMContentLoaded', () => {
  const links    = document.querySelectorAll('.toc-link');
  const sections = document.querySelectorAll('[id]');
  if (!links.length) return;

  const spy = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        links.forEach(a => {
          a.classList.remove('active');
          if (a.getAttribute('href') === '#' + entry.target.id) a.classList.add('active');
        });
      }
    });
  }, { rootMargin: '-10% 0px -80% 0px' });

  sections.forEach(s => spy.observe(s));
});
</script>

</body>
</html>