<?php
/**
 * colours.php
 * Design Guidelines — Color System
 * developer.holidayseva.com
 */
$pageTitle       = 'Color';
$pageDescription = 'Color tokens, semantic usage, and accessibility guidelines for the Holidayseva design system.';
$activePage      = 'colors';
$partials        = __DIR__ . '/../../';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($pageTitle) ?> — Design Guidelines · Holidayseva</title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>" />
  <link rel="stylesheet" href="/colors.css" />
  <link rel="stylesheet" href="https://holidayseva.com/UI/Foundation/colors.css" />
  <link rel="stylesheet" href="https://developer.holidayseva.com/design-system.css" />

  <style>
    /* ══════════════════════════════════════════════════════════
       BASE
    ══════════════════════════════════════════════════════════ */
    *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
    html{font-size:16px;scroll-behavior:smooth}
    body{
      font-family:-apple-system,BlinkMacSystemFont,"SF Pro Text","Helvetica Neue",Arial,sans-serif;
      background:var(--color-bg);
      color:var(--color-text-primary);
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
      min-height:100vh;
    }

    /* ══════════════════════════════════════════════════════════
       SHELL
    ══════════════════════════════════════════════════════════ */
    .shell{
      display:grid;
      grid-template-columns:260px 1fr 220px;
      grid-template-areas:"left main right";
      min-height:calc(100vh - var(--header-h,96px));
    }
    .sidebar-left{
      grid-area:left;border-right:1px solid var(--color-border);
      position:sticky;top:var(--header-h,96px);
      height:calc(100vh - var(--header-h,96px));overflow-y:auto;
      padding:20px 0;scrollbar-width:thin;scrollbar-color:var(--color-muted-dark) transparent;
    }
    .sidebar-right{
      grid-area:right;border-left:1px solid var(--color-border);
      position:sticky;top:var(--header-h,96px);
      height:calc(100vh - var(--header-h,96px));overflow-y:auto;
      scrollbar-width:thin;scrollbar-color:var(--color-muted-dark) transparent;
    }
    .main-content{
      grid-area:main;
      padding:64px 72px 120px;
      max-width:920px;
    }

    /* ══════════════════════════════════════════════════════════
       PAGE HERO
    ══════════════════════════════════════════════════════════ */
    .breadcrumb{
      display:flex;align-items:center;gap:6px;
      margin-bottom:20px;font-size:13px;
      color:var(--color-text-secondary);
    }
    .breadcrumb a{color:var(--color-text-link);text-decoration:none;transition:opacity .15s}
    .breadcrumb a:hover{opacity:.7}
    .breadcrumb-sep{color:var(--color-text-muted);font-size:11px}

    .page-title{
      font-size:56px;font-weight:700;
      letter-spacing:-0.045em;line-height:1.0;
      color:var(--color-text-primary);
      margin-bottom:22px;
    }
    .page-intro{
      font-size:19px;line-height:1.62;
      color:var(--color-text-secondary);
      max-width:660px;letter-spacing:-0.008em;
      font-weight:400;
    }
    .page-intro em{
      font-style:normal;color:var(--color-text-primary);
      font-weight:500;
    }

    /* ══════════════════════════════════════════════════════════
       ON-PAGE ANCHOR NAV (right sidebar style)
    ══════════════════════════════════════════════════════════ */
    .page-nav{
      padding:20px 16px;
      font-size:12px;
    }
    .page-nav-title{
      font-size:11px;font-weight:600;
      text-transform:uppercase;letter-spacing:.08em;
      color:var(--color-text-muted);margin-bottom:12px;
    }
    .page-nav a{
      display:block;padding:5px 0;
      color:var(--color-text-secondary);
      text-decoration:none;font-size:12.5px;
      letter-spacing:-.01em;transition:color .15s;
      border-left:2px solid transparent;
      padding-left:10px;margin-left:-10px;
    }
    .page-nav a:hover{color:var(--color-text-primary)}
    .page-nav a.active{
      color:var(--color-primary);
      border-left-color:var(--color-primary);
    }

    /* ══════════════════════════════════════════════════════════
       SECTION SCAFFOLD
    ══════════════════════════════════════════════════════════ */
    .page-rule{border:none;border-top:1px solid var(--color-border);margin:0}
    .doc-section{padding-top:60px}
    .section-eyebrow{
      font-size:11px;font-weight:600;text-transform:uppercase;
      letter-spacing:.09em;color:var(--color-text-muted);margin-bottom:10px;
    }
    .section-title{
      font-size:34px;font-weight:700;letter-spacing:-.032em;
      color:var(--color-text-primary);margin-bottom:10px;line-height:1.1;
    }
    .section-body{
      font-size:16px;line-height:1.7;
      color:var(--color-text-secondary);
      max-width:640px;letter-spacing:-.005em;
    }

    /* ══════════════════════════════════════════════════════════
       HERO SWATCH STRIP
    ══════════════════════════════════════════════════════════ */
    .hero-strip{
      display:grid;grid-template-columns:1fr 1fr;
      margin-top:40px;border-radius:18px;overflow:hidden;
      border:1px solid rgba(0,0,0,.07);
      box-shadow:var(--shadow-lg);
    }
    .hero-swatch{
      padding:40px 36px 36px;position:relative;overflow:hidden;
      min-height:190px;display:flex;flex-direction:column;justify-content:flex-end;
    }
    .hero-swatch::before{
      content:'';position:absolute;top:-60px;right:-60px;
      width:200px;height:200px;border-radius:50%;
      background:rgba(255,255,255,.09);pointer-events:none;
    }
    .hero-swatch-tag{
      font-size:11px;font-weight:600;text-transform:uppercase;
      letter-spacing:.1em;color:rgba(255,255,255,.6);margin-bottom:8px;
    }
    .hero-swatch-hex{
      font-size:28px;font-weight:700;letter-spacing:-.03em;
      color:#fff;font-variant-numeric:tabular-nums;margin-bottom:3px;
    }
    .hero-swatch-rgb{
      font-size:12.5px;color:rgba(255,255,255,.52);
      font-family:'SF Mono','Menlo',monospace;
    }

    /* ══════════════════════════════════════════════════════════
       ★ APPLE-STYLE SYSTEM COLOR TABLE
         Columns: Name | API | Light swatch+RGB | Dark swatch+RGB
    ══════════════════════════════════════════════════════════ */
    .system-table-wrap{
      margin-top:36px;
      border:1px solid var(--color-border);
      border-radius:14px;overflow:hidden;
    }
    .system-table{
      width:100%;border-collapse:collapse;
    }
    .system-table thead tr{background:var(--color-surface-raised);}
    .system-table th{
      padding:13px 18px;text-align:left;
      font-size:11px;font-weight:600;text-transform:uppercase;
      letter-spacing:.08em;color:var(--color-text-secondary);
      border-bottom:1px solid var(--color-border);
      white-space:nowrap;
    }
    .system-table td{
      padding:0;border-bottom:1px solid var(--color-muted);
      vertical-align:middle;
    }
    .system-table tbody tr:last-child td{border-bottom:none}
    .system-table tbody tr:hover td{background:var(--color-surface-inset)}

    .sc-name{
      padding:16px 18px;
      font-size:14px;color:var(--color-text-primary);
      font-weight:400;letter-spacing:-.01em;
      white-space:nowrap;
    }
    .sc-api{
      padding:16px 18px;
      font-family:'SF Mono','Menlo',monospace;
      font-size:12.5px;color:var(--color-text-link);
      white-space:nowrap;cursor:pointer;
    }
    .sc-api:hover{text-decoration:underline}

    /* The two-column swatch+RGB cells */
    .sc-swatch-cell{
      padding:10px 14px;
    }
    .sc-swatch-inner{
      display:flex;align-items:center;gap:12px;
    }
    .sc-box{
      width:52px;height:52px;border-radius:10px;flex-shrink:0;
      border:1px solid rgba(0,0,0,.08);
    }
    .sc-rgb{
      font-family:'SF Mono','Menlo',monospace;
      font-size:11px;color:var(--color-text-secondary);
      line-height:1.7;white-space:nowrap;
    }
    .sc-rgb span{display:block}

    /* MODE HEADER CELLS */
    .mode-header-light{
      background:rgba(255,255,255,.6);
      border-bottom:2px solid var(--color-border) !important;
    }
    .mode-header-dark{
      background:#1c1c1e;
      border-bottom:2px solid #3a3a3c !important;
    }
    .mode-header-dark .th-inner{color:#98989D}
    .th-inner{display:flex;align-items:center;gap:6px;font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.08em;}
    .mode-dot{width:8px;height:8px;border-radius:50%;flex-shrink:0}

    /* DARK BACKGROUND for the dark cells */
    .sc-dark-cell{background:#161618;}
    .sc-dark-cell .sc-rgb{color:#636366}

    /* ══════════════════════════════════════════════════════════
       BRAND PALETTE ROWS
    ══════════════════════════════════════════════════════════ */
    .palette-stack{display:flex;flex-direction:column;gap:10px;margin-top:36px}
    .palette-row{border:1px solid var(--color-border);border-radius:14px;overflow:hidden;background:var(--color-surface);transition:box-shadow .2s}
    .palette-row:hover{box-shadow:var(--shadow-md)}
    .palette-row-head{display:flex;align-items:center;justify-content:space-between;padding:13px 18px;background:var(--color-surface-raised);border-bottom:1px solid var(--color-border)}
    .palette-row-name{font-size:13px;font-weight:600;color:var(--color-text-primary);letter-spacing:-.01em}
    .palette-row-count{font-size:11px;color:var(--color-text-muted);background:var(--color-muted);padding:2px 8px;border-radius:20px}
    .palette-swatches{display:grid;grid-auto-flow:column;grid-auto-columns:1fr}
    .swatch-cell{position:relative;cursor:default;transition:filter .15s}
    .swatch-cell:not(:last-child){border-right:1px solid rgba(128,128,128,.12)}
    .swatch-cell:hover{filter:brightness(1.06);z-index:1}
    .swatch-color{height:68px}
    .swatch-meta{padding:10px 12px;background:var(--color-surface);border-top:1px solid var(--color-border)}
    .swatch-vname{font-size:10.5px;font-weight:600;color:var(--color-text-primary);text-transform:uppercase;letter-spacing:.05em;margin-bottom:2px}
    .swatch-hex{font-size:10.5px;color:var(--color-text-secondary);font-family:'SF Mono','Menlo',monospace}

    /* ══════════════════════════════════════════════════════════
       SPECS TABLE
    ══════════════════════════════════════════════════════════ */
    .specs-wrap{margin-top:32px;border:1px solid var(--color-border);border-radius:14px;overflow:hidden}
    .specs-table{width:100%;border-collapse:collapse}
    .specs-table thead tr{background:var(--color-surface-raised)}
    .specs-table th{padding:13px 18px;text-align:left;font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.08em;color:var(--color-text-secondary);border-bottom:1px solid var(--color-border)}
    .specs-table td{padding:14px 18px;font-size:13.5px;color:var(--color-text-primary);border-bottom:1px solid var(--color-muted);vertical-align:middle}
    .specs-table tbody tr:last-child td{border-bottom:none}
    .specs-table tbody tr:hover td{background:var(--color-surface-inset)}
    .token-pill{display:inline-flex;align-items:center;gap:6px;font-family:'SF Mono','Menlo',monospace;font-size:12px;color:var(--color-primary);background:var(--color-primary-alpha-sm);border:1px solid var(--color-primary-border);padding:3px 9px;border-radius:6px;white-space:nowrap}
    .dot{display:inline-block;width:10px;height:10px;border-radius:50%;flex-shrink:0;border:1px solid rgba(0,0,0,.08)}
    .mono{font-family:'SF Mono','Menlo',monospace;font-size:12.5px}
    .td-note{color:var(--color-text-secondary);font-size:13px}

    /* ══════════════════════════════════════════════════════════
       CODE BLOCKS
    ══════════════════════════════════════════════════════════ */
    .code-wrap{margin-top:28px;border-radius:14px;overflow:hidden;border:1px solid rgba(255,255,255,.07);background:#1c1c1e}
    .code-bar{display:flex;align-items:center;justify-content:space-between;padding:10px 16px;background:#2c2c2e;border-bottom:1px solid rgba(255,255,255,.07)}
    .code-dots{display:flex;gap:6px}
    .cd{width:12px;height:12px;border-radius:50%}
    .cd-r{background:#FF5F57}.cd-y{background:#FFBD2E}.cd-g{background:#28C840}
    .code-fname{font-size:12px;color:rgba(255,255,255,.4);font-family:'SF Mono','Menlo',monospace}
    .copy-btn{background:rgba(255,255,255,.09);border:1px solid rgba(255,255,255,.12);color:rgba(255,255,255,.65);padding:4px 12px;border-radius:6px;font-size:11px;font-weight:500;cursor:pointer;font-family:inherit;transition:all .15s}
    .copy-btn:hover{background:rgba(255,255,255,.17);color:#fff}
    .code-wrap pre{padding:20px;margin:0;overflow-x:auto;font-family:'SF Mono','Menlo',monospace;font-size:13px;line-height:1.72;color:#f5f5f7;tab-size:2}
    .ck{color:#CF9FFF;font-weight:600}.cs{color:#A8FF78}.cn{color:#FF9F43}.cp{color:#6BCAFF}.ct{color:#FF6B9D}.ca{color:#FFD176}.cc{color:#7f8c8d;font-style:italic}

    /* ══════════════════════════════════════════════════════════
       ACCESSIBILITY TABLE
    ══════════════════════════════════════════════════════════ */
    .a11y-wrap{margin-top:32px;border:1px solid var(--color-border);border-radius:14px;overflow:hidden}
    .a11y-table{width:100%;border-collapse:collapse}
    .a11y-table thead tr{background:var(--color-surface-raised)}
    .a11y-table th{padding:13px 18px;text-align:left;font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.08em;color:var(--color-text-secondary);border-bottom:1px solid var(--color-border)}
    .a11y-table td{padding:16px 18px;font-size:13px;color:var(--color-text-primary);border-bottom:1px solid var(--color-muted);vertical-align:middle}
    .a11y-table tbody tr:last-child td{border-bottom:none}
    .a11y-table tbody tr:hover td{background:var(--color-surface-inset)}
    .a11y-pair{display:flex;align-items:center;gap:12px}
    .a11y-chip{width:48px;height:48px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:15px;font-weight:700;flex-shrink:0;letter-spacing:-.03em}
    .a11y-label{font-size:13px;color:var(--color-text-secondary);line-height:1.4}
    .a11y-label strong{display:block;color:var(--color-text-primary);font-weight:600;margin-bottom:1px}
    .rv{font-size:14px;font-weight:700;color:var(--color-text-primary);font-variant-numeric:tabular-nums;letter-spacing:-.02em}
    .badge{display:inline-block;padding:3px 9px;border-radius:20px;font-size:11px;font-weight:600;letter-spacing:.04em;text-transform:uppercase}
    .b-aaa{background:rgba(52,199,89,.10);color:#1A9E35}
    .b-aa{background:rgba(0,166,153,.10);color:#008C81}
    .b-lg{background:rgba(255,149,0,.10);color:#C45508}
    .b-fail{background:rgba(255,59,48,.10);color:#C13515}

    /* ══════════════════════════════════════════════════════════
       CALLOUTS
    ══════════════════════════════════════════════════════════ */
    .callout{display:flex;gap:14px;padding:15px 18px;border-radius:12px;margin-top:20px;border:1px solid}
    .c-note{background:rgba(0,122,255,.05);border-color:rgba(0,122,255,.18)}
    .c-warn{background:rgba(255,149,0,.05);border-color:rgba(255,149,0,.20)}
    .callout-icon{font-size:15px;line-height:1;margin-top:1px;flex-shrink:0}
    .callout-text{font-size:13.5px;line-height:1.65;color:var(--color-text-secondary)}
    .callout-text strong{color:var(--color-text-primary);font-weight:600}

    /* ══════════════════════════════════════════════════════════
       GUIDANCE CARDS
    ══════════════════════════════════════════════════════════ */
    .guidance-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-top:28px}
    .guidance-card{border-radius:14px;overflow:hidden;border:1px solid var(--color-border)}
    .guidance-head{display:flex;align-items:center;gap:8px;padding:13px 16px;font-size:12px;font-weight:700;letter-spacing:.05em;text-transform:uppercase;border-bottom:1px solid var(--color-border)}
    .g-do .guidance-head{background:rgba(52,199,89,.06);color:#1A9E35}
    .g-dont .guidance-head{background:rgba(255,59,48,.06);color:#C13515}
    .gicon{width:18px;height:18px;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0}
    .g-do .gicon{background:#1A9E35}.g-dont .gicon{background:#C13515}
    .guidance-body{padding:18px;background:var(--color-surface)}
    .guidance-body p{font-size:13.5px;line-height:1.65;color:var(--color-text-secondary)}
    .guidance-body code{font-family:'SF Mono','Menlo',monospace;font-size:11.5px;color:var(--color-primary);background:var(--color-primary-alpha-sm);border:1px solid var(--color-primary-border);padding:1px 5px;border-radius:4px}
    .guidance-ex{margin-top:14px;padding:14px;border-radius:9px;border:1px solid var(--color-border)}

    /* ══════════════════════════════════════════════════════════
       INTEGRATION STEPS
    ══════════════════════════════════════════════════════════ */
    .steps{margin-top:32px;border:1px solid var(--color-border);border-radius:14px;overflow:hidden}
    .step-row{display:flex;border-bottom:1px solid var(--color-border)}
    .step-row:last-child{border-bottom:none}
    .step-num{width:52px;flex-shrink:0;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:700;color:var(--color-primary);background:var(--color-primary-alpha-sm);border-right:1px solid var(--color-border);font-variant-numeric:tabular-nums}
    .step-content{padding:16px 20px;flex:1}
    .step-title{font-size:13.5px;font-weight:600;color:var(--color-text-primary);margin-bottom:3px;letter-spacing:-.01em}
    .step-desc{font-size:13px;color:var(--color-text-secondary);line-height:1.55}
    .step-desc code{font-family:'SF Mono','Menlo',monospace;font-size:11.5px;color:var(--color-primary);background:var(--color-primary-alpha-sm);border:1px solid var(--color-primary-border);padding:1px 5px;border-radius:4px}

    /* ══════════════════════════════════════════════════════════
       MISC
    ══════════════════════════════════════════════════════════ */
    code{font-family:'SF Mono','Menlo',monospace;font-size:12.5px;color:var(--color-text-primary);background:var(--color-surface-raised);border:1px solid var(--color-border);padding:2px 6px;border-radius:5px}
    a{color:var(--color-text-link);text-decoration:none;transition:opacity .15s}
    a:hover{opacity:.75}

    /* ══════════════════════════════════════════════════════════
       RESPONSIVE
    ══════════════════════════════════════════════════════════ */
    @media(max-width:1280px){.shell{grid-template-columns:220px 1fr 200px}.main-content{padding:48px 48px 100px}}
    @media(max-width:1024px){.shell{grid-template-columns:1fr;grid-template-areas:"main"}.sidebar-left,.sidebar-right{display:none}.main-content{padding:40px 24px 80px;max-width:100%}.guidance-grid{grid-template-columns:1fr}.hero-strip{grid-template-columns:1fr}}
    @media(max-width:640px){.page-title{font-size:38px}.system-table .sc-dark-col{display:none}}
  </style>
</head>
<body>

<?php include $partials . 'header.php'; ?>

<div class="shell">

  <!-- LEFT SIDEBAR -->
  <aside class="sidebar-left">
    <?php include $partials . 'left_sidebar.php'; ?>
  </aside>

  <!-- MAIN CONTENT -->
  <main class="main-content">

    <!-- ══════════════════════════════════════════════
         OVERVIEW
    ══════════════════════════════════════════════════ -->
    <section id="overview">

      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="#">Design Guidelines</a>
        <span class="breadcrumb-sep">›</span>
        <a href="#">Foundations</a>
        <span class="breadcrumb-sep">›</span>
        <span>Color</span>
      </nav>

      <h1 class="page-title">Color</h1>

      <p class="page-intro">
        <em>Judicious use of color can enhance communication, evoke your brand, provide visual continuity, communicate status and feedback, and help people understand information.</em> All tokens are managed in <code>colors.css</code> as CSS custom properties that automatically adapt between light and dark appearances.
      </p>

      <div class="hero-strip">
        <div class="hero-swatch" style="background:var(--color-primary);">
          <p class="hero-swatch-tag">Primary</p>
          <p class="hero-swatch-hex">#FF385C</p>
          <p class="hero-swatch-rgb">R 255 · G 56 · B 92</p>
        </div>
        <div class="hero-swatch" style="background:var(--color-accent);">
          <p class="hero-swatch-tag">Accent</p>
          <p class="hero-swatch-hex">#00A699</p>
          <p class="hero-swatch-rgb">R 0 · G 166 · B 153</p>
        </div>
      </div>
    </section>


    <!-- ══════════════════════════════════════════════
         SYSTEM COLORS — LIGHT / DARK SPLIT TABLE
    ══════════════════════════════════════════════════ -->
    <hr class="page-rule" />
    <section id="system-colors" class="doc-section">
      <p class="section-eyebrow">Palette</p>
      <h2 class="section-title">System colors</h2>
      <p class="section-body">The system palette provides vibrant, semantically named hues that are carefully calibrated for both light and dark appearances. Use these tokens when you need expressive color beyond the brand primaries.</p>

      <div class="system-table-wrap">
        <table class="system-table">
          <thead>
            <tr>
              <th style="width:110px">Name</th>
              <th style="width:130px">CSS Token</th>
              <!-- Light mode header -->
              <th class="mode-header-light" style="width:200px">
                <div class="th-inner">
                  <span class="mode-dot" style="background:#fff;border:1px solid #ccc"></span>
                  Default (light)
                </div>
              </th>
              <!-- Dark mode header -->
              <th class="mode-header-dark" style="width:200px">
                <div class="th-inner" style="color:#98989D">
                  <span class="mode-dot" style="background:#3a3a3c"></span>
                  Default (dark)
                </div>
              </th>
            </tr>
          </thead>
          <tbody>

            <?php
            $rows = [
              ['Red',    '--sys-red',    '#FF3B30','255','59','48',  '#FF453A','255','69','58'],
              ['Orange', '--sys-orange', '#FF9500','255','149','0',  '#FF9F0A','255','159','10'],
              ['Yellow', '--sys-yellow', '#FFCC00','255','204','0',  '#FFD60A','255','214','10'],
              ['Green',  '--sys-green',  '#34C759','52','199','89',  '#30D158','48','209','88'],
              ['Mint',   '--sys-mint',   '#00C7BE','0','199','190',  '#63E6E2','99','230','226'],
              ['Teal',   '--sys-teal',   '#30B0C7','48','176','199', '#40CBE0','64','203','224'],
              ['Cyan',   '--sys-cyan',   '#32ADE6','50','173','230', '#64D2FF','100','210','255'],
              ['Blue',   '--sys-blue',   '#007AFF','0','122','255',  '#0A84FF','10','132','255'],
              ['Indigo', '--sys-indigo', '#5856D6','88','86','214',  '#5E5CE6','94','92','230'],
              ['Purple', '--sys-purple', '#AF52DE','175','82','222', '#BF5AF2','191','90','242'],
              ['Pink',   '--sys-pink',   '#FF2D55','255','45','85',  '#FF375F','255','55','95'],
              ['Brown',  '--sys-brown',  '#A2845E','162','132','94', '#AC8E68','172','142','104'],
            ];
            foreach($rows as $r):
            ?>
            <tr>
              <td class="sc-name"><?= $r[0] ?></td>
              <td class="sc-api"><code style="background:none;border:none;padding:0;color:var(--color-text-link);font-size:12px"><?= $r[1] ?></code></td>

              <!-- Light swatch -->
              <td class="sc-swatch-cell">
                <div class="sc-swatch-inner">
                  <div class="sc-box" style="background:<?= $r[2] ?>"></div>
                  <div class="sc-rgb">
                    <span>R <?= $r[3] ?></span>
                    <span>G <?= $r[4] ?></span>
                    <span>B <?= $r[5] ?></span>
                  </div>
                </div>
              </td>

              <!-- Dark swatch -->
              <td class="sc-swatch-cell sc-dark-cell">
                <div class="sc-swatch-inner">
                  <div class="sc-box" style="background:<?= $r[6] ?>;border-color:rgba(255,255,255,.12)"></div>
                  <div class="sc-rgb" style="color:#636366">
                    <span>R <?= $r[7] ?></span>
                    <span>G <?= $r[8] ?></span>
                    <span>B <?= $r[9] ?></span>
                  </div>
                </div>
              </td>
            </tr>
            <?php endforeach; ?>

            <!-- Gray scale rows -->
            <?php
            $grays = [
              ['Gray',   '--sys-gray-1', '#8E8E93','142','142','147', '#8E8E93','142','142','147'],
              ['Gray 2', '--sys-gray-2', '#AEAEB2','174','174','178', '#636366','99','99','102'],
              ['Gray 3', '--sys-gray-3', '#C7C7CC','199','199','204', '#48484A','72','72','74'],
              ['Gray 4', '--sys-gray-4', '#D1D1D6','209','209','214', '#3A3A3C','58','58','60'],
              ['Gray 5', '--sys-gray-5', '#E5E5EA','229','229','234', '#2C2C2E','44','44','46'],
              ['Gray 6', '--sys-gray-6', '#F2F2F7','242','242','247', '#1C1C1E','28','28','30'],
            ];
            foreach($grays as $g):
            ?>
            <tr>
              <td class="sc-name"><?= $g[0] ?></td>
              <td class="sc-api"><code style="background:none;border:none;padding:0;color:var(--color-text-link);font-size:12px"><?= $g[1] ?></code></td>
              <td class="sc-swatch-cell">
                <div class="sc-swatch-inner">
                  <div class="sc-box" style="background:<?= $g[2] ?>;<?= $g[2]==='#F2F2F7' ? 'border:1px solid #ddd' : '' ?>"></div>
                  <div class="sc-rgb">
                    <span>R <?= $g[3] ?></span>
                    <span>G <?= $g[4] ?></span>
                    <span>B <?= $g[5] ?></span>
                  </div>
                </div>
              </td>
              <td class="sc-swatch-cell sc-dark-cell">
                <div class="sc-swatch-inner">
                  <div class="sc-box" style="background:<?= $g[6] ?>;border-color:rgba(255,255,255,.12)"></div>
                  <div class="sc-rgb" style="color:#636366">
                    <span>R <?= $g[7] ?></span>
                    <span>G <?= $g[8] ?></span>
                    <span>B <?= $g[9] ?></span>
                  </div>
                </div>
              </td>
            </tr>
            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </section>


    <!-- ══════════════════════════════════════════════
         BRAND PALETTE (split light/dark rows)
    ══════════════════════════════════════════════════ -->
    <hr class="page-rule" />
    <section id="brand-palette" class="doc-section">
      <p class="section-eyebrow">Brand Tokens</p>
      <h2 class="section-title">Brand palette</h2>
      <p class="section-body">Holidayseva's brand colors are calibrated separately for light and dark appearances. The dark variants are slightly brighter to maintain perceptual weight on dark surfaces.</p>

      <!-- PRIMARY -->
      <div class="palette-stack">

        <!-- Light mode label -->
        <div style="display:flex;align-items:center;gap:8px;margin-top:4px;margin-bottom:-4px">
          <span style="width:8px;height:8px;border-radius:50%;background:#fff;border:1px solid #ccc;display:inline-block"></span>
          <span style="font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.08em;color:var(--color-text-muted)">Default (light)</span>
        </div>

        <div class="palette-row">
          <div class="palette-row-head">
            <span class="palette-row-name">Primary</span>
            <span class="palette-row-count">4 variants</span>
          </div>
          <div class="palette-swatches">
            <div class="swatch-cell"><div class="swatch-color" style="background:#FF385C"></div><div class="swatch-meta"><p class="swatch-vname">Base</p><p class="swatch-hex">#FF385C</p></div></div>
            <div class="swatch-cell"><div class="swatch-color" style="background:#FF5A76"></div><div class="swatch-meta"><p class="swatch-vname">Light</p><p class="swatch-hex">#FF5A76</p></div></div>
            <div class="swatch-cell"><div class="swatch-color" style="background:#E8314F"></div><div class="swatch-meta"><p class="swatch-vname">Hover</p><p class="swatch-hex">#E8314F</p></div></div>
            <div class="swatch-cell"><div class="swatch-color" style="background:#D93B55"></div><div class="swatch-meta"><p class="swatch-vname">Dark</p><p class="swatch-hex">#D93B55</p></div></div>
          </div>
        </div>

        <!-- Dark mode variant -->
        <div style="display:flex;align-items:center;gap:8px;margin-top:8px;margin-bottom:-4px">
          <span style="width:8px;height:8px;border-radius:50%;background:#3a3a3c;display:inline-block"></span>
          <span style="font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.08em;color:var(--color-text-muted)">Default (dark)</span>
        </div>

        <div class="palette-row" style="background:#1c1c1e;border-color:#3a3a3c">
          <div class="palette-row-head" style="background:#2c2c2e;border-color:#3a3a3c">
            <span class="palette-row-name" style="color:#f5f5f7">Primary (dark)</span>
            <span class="palette-row-count" style="background:#3a3a3c;color:#8e8e93">4 variants</span>
          </div>
          <div class="palette-swatches" style="background:#1c1c1e">
            <div class="swatch-cell"><div class="swatch-color" style="background:#FF4D6A"></div><div class="swatch-meta" style="background:#1c1c1e;border-color:#3a3a3c"><p class="swatch-vname" style="color:#f5f5f7">Base</p><p class="swatch-hex" style="color:#636366">#FF4D6A</p></div></div>
            <div class="swatch-cell"><div class="swatch-color" style="background:#FF6B85"></div><div class="swatch-meta" style="background:#1c1c1e;border-color:#3a3a3c"><p class="swatch-vname" style="color:#f5f5f7">Light</p><p class="swatch-hex" style="color:#636366">#FF6B85</p></div></div>
            <div class="swatch-cell"><div class="swatch-color" style="background:#FF5C78"></div><div class="swatch-meta" style="background:#1c1c1e;border-color:#3a3a3c"><p class="swatch-vname" style="color:#f5f5f7">Hover</p><p class="swatch-hex" style="color:#636366">#FF5C78</p></div></div>
            <div class="swatch-cell"><div class="swatch-color" style="background:#E83D5C"></div><div class="swatch-meta" style="background:#1c1c1e;border-color:#3a3a3c"><p class="swatch-vname" style="color:#f5f5f7">Pressed</p><p class="swatch-hex" style="color:#636366">#E83D5C</p></div></div>
          </div>
        </div>

        <!-- ACCENT light -->
        <div style="display:flex;align-items:center;gap:8px;margin-top:12px;margin-bottom:-4px">
          <span style="width:8px;height:8px;border-radius:50%;background:#fff;border:1px solid #ccc;display:inline-block"></span>
          <span style="font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.08em;color:var(--color-text-muted)">Default (light)</span>
        </div>
        <div class="palette-row">
          <div class="palette-row-head">
            <span class="palette-row-name">Accent</span>
            <span class="palette-row-count">3 variants</span>
          </div>
          <div class="palette-swatches">
            <div class="swatch-cell"><div class="swatch-color" style="background:#00A699"></div><div class="swatch-meta"><p class="swatch-vname">Base</p><p class="swatch-hex">#00A699</p></div></div>
            <div class="swatch-cell"><div class="swatch-color" style="background:#00BDB2"></div><div class="swatch-meta"><p class="swatch-vname">Light</p><p class="swatch-hex">#00BDB2</p></div></div>
            <div class="swatch-cell"><div class="swatch-color" style="background:#008C81"></div><div class="swatch-meta"><p class="swatch-vname">Dark</p><p class="swatch-hex">#008C81</p></div></div>
          </div>
        </div>

        <!-- ACCENT dark -->
        <div style="display:flex;align-items:center;gap:8px;margin-top:8px;margin-bottom:-4px">
          <span style="width:8px;height:8px;border-radius:50%;background:#3a3a3c;display:inline-block"></span>
          <span style="font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.08em;color:var(--color-text-muted)">Default (dark)</span>
        </div>
        <div class="palette-row" style="background:#1c1c1e;border-color:#3a3a3c">
          <div class="palette-row-head" style="background:#2c2c2e;border-color:#3a3a3c">
            <span class="palette-row-name" style="color:#f5f5f7">Accent (dark)</span>
            <span class="palette-row-count" style="background:#3a3a3c;color:#8e8e93">3 variants</span>
          </div>
          <div class="palette-swatches" style="background:#1c1c1e">
            <div class="swatch-cell"><div class="swatch-color" style="background:#00C4B7"></div><div class="swatch-meta" style="background:#1c1c1e;border-color:#3a3a3c"><p class="swatch-vname" style="color:#f5f5f7">Base</p><p class="swatch-hex" style="color:#636366">#00C4B7</p></div></div>
            <div class="swatch-cell"><div class="swatch-color" style="background:#33D1C5"></div><div class="swatch-meta" style="background:#1c1c1e;border-color:#3a3a3c"><p class="swatch-vname" style="color:#f5f5f7">Light</p><p class="swatch-hex" style="color:#636366">#33D1C5</p></div></div>
            <div class="swatch-cell"><div class="swatch-color" style="background:#00A699"></div><div class="swatch-meta" style="background:#1c1c1e;border-color:#3a3a3c"><p class="swatch-vname" style="color:#f5f5f7">Dark</p><p class="swatch-hex" style="color:#636366">#00A699</p></div></div>
          </div>
        </div>

        <!-- STATUS — single row showing both -->
        <div style="display:flex;align-items:center;gap:8px;margin-top:12px;margin-bottom:-4px">
          <span style="font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.08em;color:var(--color-text-muted)">Status — Light &amp; Dark</span>
        </div>

        <!-- Status light -->
        <div class="palette-row">
          <div class="palette-row-head">
            <span class="palette-row-name">Status (light)</span>
            <span class="palette-row-count">4 colors</span>
          </div>
          <div class="palette-swatches">
            <div class="swatch-cell"><div class="swatch-color" style="background:#1A9E35"></div><div class="swatch-meta"><p class="swatch-vname">Success</p><p class="swatch-hex">#1A9E35</p></div></div>
            <div class="swatch-cell"><div class="swatch-color" style="background:#C45508"></div><div class="swatch-meta"><p class="swatch-vname">Warning</p><p class="swatch-hex">#C45508</p></div></div>
            <div class="swatch-cell"><div class="swatch-color" style="background:#C13515"></div><div class="swatch-meta"><p class="swatch-vname">Error</p><p class="swatch-hex">#C13515</p></div></div>
            <div class="swatch-cell"><div class="swatch-color" style="background:#0071D6"></div><div class="swatch-meta"><p class="swatch-vname">Info</p><p class="swatch-hex">#0071D6</p></div></div>
          </div>
        </div>

        <!-- Status dark -->
        <div class="palette-row" style="background:#1c1c1e;border-color:#3a3a3c">
          <div class="palette-row-head" style="background:#2c2c2e;border-color:#3a3a3c">
            <span class="palette-row-name" style="color:#f5f5f7">Status (dark)</span>
            <span class="palette-row-count" style="background:#3a3a3c;color:#8e8e93">4 colors</span>
          </div>
          <div class="palette-swatches" style="background:#1c1c1e">
            <div class="swatch-cell"><div class="swatch-color" style="background:#30D158"></div><div class="swatch-meta" style="background:#1c1c1e;border-color:#3a3a3c"><p class="swatch-vname" style="color:#f5f5f7">Success</p><p class="swatch-hex" style="color:#636366">#30D158</p></div></div>
            <div class="swatch-cell"><div class="swatch-color" style="background:#FF9F0A"></div><div class="swatch-meta" style="background:#1c1c1e;border-color:#3a3a3c"><p class="swatch-vname" style="color:#f5f5f7">Warning</p><p class="swatch-hex" style="color:#636366">#FF9F0A</p></div></div>
            <div class="swatch-cell"><div class="swatch-color" style="background:#FF453A"></div><div class="swatch-meta" style="background:#1c1c1e;border-color:#3a3a3c"><p class="swatch-vname" style="color:#f5f5f7">Error</p><p class="swatch-hex" style="color:#636366">#FF453A</p></div></div>
            <div class="swatch-cell"><div class="swatch-color" style="background:#409CFF"></div><div class="swatch-meta" style="background:#1c1c1e;border-color:#3a3a3c"><p class="swatch-vname" style="color:#f5f5f7">Info</p><p class="swatch-hex" style="color:#636366">#409CFF</p></div></div>
          </div>
        </div>

      </div><!-- /palette-stack -->
    </section>


    <!-- ══════════════════════════════════════════════
         SPECIFICATIONS
    ══════════════════════════════════════════════════ -->
    <hr class="page-rule" />
    <section id="specs" class="doc-section">
      <p class="section-eyebrow">Token Reference</p>
      <h2 class="section-title">Specifications</h2>
      <p class="section-body">CSS custom property names and semantic guidance. Components must reference tokens only — never raw hex values. All tokens automatically shift between light and dark via <code>@media (prefers-color-scheme: dark)</code>.</p>

      <div class="specs-wrap">
        <table class="specs-table">
          <thead>
            <tr>
              <th>Token</th>
              <th>Light</th>
              <th>Dark</th>
              <th>Use case</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $specs = [
              ['--color-primary',        '#FF385C','#FF4D6A', 'Primary action buttons, brand highlights'],
              ['--color-accent',         '#00A699','#00C4B7', 'Secondary accent, confirmations'],
              ['--color-success',        '#1A9E35','#30D158', 'Success messages and states'],
              ['--color-warning',        '#C45508','#FF9F0A', 'Warning messages and alerts'],
              ['--color-error',          '#C13515','#FF453A', 'Error states and destructive actions'],
              ['--color-info',           '#0071D6','#409CFF', 'Informational notices'],
              ['--color-text-primary',   '#1D1D1F','#F5F5F7', 'Headings, body text'],
              ['--color-text-secondary', '#6E6E73','#98989D', 'Secondary text, captions'],
              ['--color-text-muted',     '#B0B0B0','#48484A', 'Decorative only — not for readable content'],
              ['--color-border',         '#D2D2D7','#3A3A3C', 'Dividers, card outlines'],
              ['--color-surface',        '#FFFFFF','#1C1C1E', 'Card backgrounds, default surface'],
              ['--color-surface-raised', '#F7F7F7','#2C2C2E', 'Elevated panels, table headers'],
              ['--color-bg',             '#FFFFFF','#000000', 'Page background'],
              ['--color-overlay',        'rgba(0,0,0,.48)','rgba(0,0,0,.62)', 'Modal backdrops'],
            ];
            foreach($specs as $s): ?>
            <tr>
              <td><span class="token-pill"><span class="dot" style="background:<?= $s[1] ?>;<?= in_array($s[1],['#FFFFFF','#F7F7F7','#D2D2D7']) ? 'border:1px solid #ccc' : '' ?>"></span><?= $s[0] ?></span></td>
              <td class="mono"><?= $s[1] ?></td>
              <td class="mono" style="color:#98989D"><?= $s[2] ?></td>
              <td class="td-note"><?= $s[3] ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </section>


    <!-- ══════════════════════════════════════════════
         HTML / CSS USAGE
    ══════════════════════════════════════════════════ -->
    <hr class="page-rule" />
    <section id="usage" class="doc-section">
      <p class="section-eyebrow">Implementation</p>
      <h2 class="section-title">Usage</h2>
      <p class="section-body">Reference tokens using CSS custom properties. Components automatically adapt to dark mode because <code>colors.css</code> overrides every token inside <code>@media (prefers-color-scheme: dark)</code>.</p>

      <div class="code-wrap">
        <div class="code-bar">
          <div class="code-dots"><span class="cd cd-r"></span><span class="cd cd-y"></span><span class="cd cd-g"></span></div>
          <span class="code-fname">component.css</span>
          <button class="copy-btn" onclick="navigator.clipboard.writeText(this.closest('.code-wrap').querySelector('pre').innerText);this.textContent='Copied!';setTimeout(()=>this.textContent='Copy',1600)">Copy</button>
        </div>
        <pre><span class="cc">/* ── Primary button ─────────────────────────────── */</span>
<span class="cp">.btn-primary</span> {
  background:    <span class="cn">var(--color-primary)</span>;
  color:         <span class="cn">var(--color-text-inverse)</span>;
  border:        none;
  padding:       10px 20px;
  border-radius: 8px;
  font-weight:   600;
  cursor:        pointer;
  transition:    <span class="cn">var(--transition-btn)</span>;
}
<span class="cp">.btn-primary:hover</span>        { background: <span class="cn">var(--color-primary-hover)</span>; }
<span class="cp">.btn-primary:active</span>       { background: <span class="cn">var(--color-primary-pressed)</span>; }
<span class="cp">.btn-primary:focus-visible</span> { box-shadow:  <span class="cn">var(--focus-ring)</span>; outline: none; }

<span class="cc">/* ── Error state ────────────────────────────────── */</span>
<span class="cp">.message-error</span> {
  background: <span class="cn">var(--color-error-bg)</span>;
  color:      <span class="cn">var(--color-error-text)</span>;
  border:     1px solid <span class="cn">var(--color-error-border)</span>;
  padding:    12px 16px;
  border-radius: 10px;
}

<span class="cc">/* No dark-mode code needed — tokens adapt automatically */</span></pre>
      </div>

      <div class="code-wrap" style="margin-top:16px">
        <div class="code-bar">
          <div class="code-dots"><span class="cd cd-r"></span><span class="cd cd-y"></span><span class="cd cd-g"></span></div>
          <span class="code-fname">tokens.js — read at runtime</span>
          <button class="copy-btn" onclick="navigator.clipboard.writeText(this.closest('.code-wrap').querySelector('pre').innerText);this.textContent='Copied!';setTimeout(()=>this.textContent='Copy',1600)">Copy</button>
        </div>
        <pre><span class="cc">// Read any token at runtime (Chart.js, Canvas, D3…)</span>
<span class="ck">const</span> token = <span class="cp">key</span> =>
  getComputedStyle(document.documentElement).getPropertyValue(key).trim();

<span class="ck">const</span> primary  = token(<span class="cs">'--color-primary'</span>);      <span class="cc">// adapts to current mode</span>
<span class="ck">const</span> accent   = token(<span class="cs">'--color-accent'</span>);
<span class="ck">const</span> textBase = token(<span class="cs">'--color-text-primary'</span>);

chart.data.datasets[0].backgroundColor = primary;
chart.data.datasets[0].borderColor      = accent;</pre>
      </div>

      <div class="callout c-note">
        <span class="callout-icon">ℹ️</span>
        <p class="callout-text"><strong>Token-only rule.</strong> All component stylesheets must consume only CSS variable tokens — never raw hex values. This ensures white-label themes and dark mode cascade correctly without touching any component code.</p>
      </div>
    </section>


    <!-- ══════════════════════════════════════════════
         INTEGRATION
    ══════════════════════════════════════════════════ -->
    <hr class="page-rule" />
    <section id="integration" class="doc-section">
      <p class="section-eyebrow">Setup</p>
      <h2 class="section-title">Integration</h2>
      <p class="section-body">Include <code>colors.css</code> as the first stylesheet in every page <code>&lt;head&gt;</code>. PHP layout partials inherit all tokens automatically.</p>

      <div class="steps">
        <div class="step-row">
          <div class="step-num">1</div>
          <div class="step-content">
            <p class="step-title">Link the token sheet first</p>
            <p class="step-desc">Add <code>&lt;link rel="stylesheet" href="/colors.css" /&gt;</code> before any other stylesheet in every page <code>&lt;head&gt;</code>.</p>
          </div>
        </div>
        <div class="step-row">
          <div class="step-num">2</div>
          <div class="step-content">
            <p class="step-title">Include PHP partials</p>
            <p class="step-desc">Header, sidebar, and footer partials inherit all tokens automatically. No additional setup required.</p>
          </div>
        </div>
        <div class="step-row">
          <div class="step-num">3</div>
          <div class="step-content">
            <p class="step-title">Use tokens only in component CSS</p>
            <p class="step-desc">Reference <code>var(--color-primary)</code> in every component stylesheet. Raw hex values are forbidden in component files.</p>
          </div>
        </div>
        <div class="step-row">
          <div class="step-num">4</div>
          <div class="step-content">
            <p class="step-title">Dark mode is automatic</p>
            <p class="step-desc">All tokens shift automatically at <code>@media (prefers-color-scheme: dark)</code>. For a manual toggle, add the <code>.dark</code> class to <code>&lt;html&gt;</code>.</p>
          </div>
        </div>
      </div>
    </section>


    <!-- ══════════════════════════════════════════════
         ACCESSIBILITY
    ══════════════════════════════════════════════════ -->
    <hr class="page-rule" />
    <section id="accessibility" class="doc-section">
      <p class="section-eyebrow">WCAG 2.1</p>
      <h2 class="section-title">Accessibility &amp; contrast</h2>
      <p class="section-body">All primary text pairings meet WCAG 2.1 AA at minimum. Contrast ratios below are for the default light appearance. Muted text is decorative only and must not carry informational content.</p>

      <div class="a11y-wrap">
        <table class="a11y-table">
          <thead>
            <tr>
              <th>Pairing</th>
              <th>Background</th>
              <th>Ratio</th>
              <th>Level</th>
              <th>Use case</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><div class="a11y-pair"><div class="a11y-chip" style="background:#FF385C;color:#fff;">Aa</div><div class="a11y-label"><strong>White on Primary</strong>--color-text-inverse</div></div></td>
              <td><span class="mono">#FF385C</span></td>
              <td><span class="rv">3.8:1</span></td>
              <td><span class="badge b-lg">AA Large</span></td>
              <td class="td-note">Button labels ≥ 18px bold</td>
            </tr>
            <tr>
              <td><div class="a11y-pair"><div class="a11y-chip" style="background:#222222;color:#fff;">Aa</div><div class="a11y-label"><strong>White on Secondary</strong>--color-text-inverse</div></div></td>
              <td><span class="mono">#222222</span></td>
              <td><span class="rv">16.1:1</span></td>
              <td><span class="badge b-aaa">AAA</span></td>
              <td class="td-note">Dark buttons, nav text</td>
            </tr>
            <tr>
              <td><div class="a11y-pair"><div class="a11y-chip" style="background:#fff;color:#1D1D1F;border:1px solid #ddd;">Aa</div><div class="a11y-label"><strong>Primary text on white</strong>--color-text-primary</div></div></td>
              <td><span class="mono">#FFFFFF</span></td>
              <td><span class="rv">16.1:1</span></td>
              <td><span class="badge b-aaa">AAA</span></td>
              <td class="td-note">Body copy, headings</td>
            </tr>
            <tr>
              <td><div class="a11y-pair"><div class="a11y-chip" style="background:#fff;color:#6E6E73;border:1px solid #ddd;">Aa</div><div class="a11y-label"><strong>Secondary text on white</strong>--color-text-secondary</div></div></td>
              <td><span class="mono">#FFFFFF</span></td>
              <td><span class="rv">4.6:1</span></td>
              <td><span class="badge b-aa">AA</span></td>
              <td class="td-note">Captions, metadata</td>
            </tr>
            <tr>
              <td><div class="a11y-pair"><div class="a11y-chip" style="background:#fff;color:#00A699;border:1px solid #ddd;">Aa</div><div class="a11y-label"><strong>Accent on white</strong>--color-accent</div></div></td>
              <td><span class="mono">#FFFFFF</span></td>
              <td><span class="rv">4.5:1</span></td>
              <td><span class="badge b-aa">AA</span></td>
              <td class="td-note">Inline links, confirmations</td>
            </tr>
            <tr>
              <td><div class="a11y-pair"><div class="a11y-chip" style="background:#fff;color:#B0B0B0;border:1px solid #ddd;">Aa</div><div class="a11y-label"><strong>Muted text on white</strong>--color-text-muted</div></div></td>
              <td><span class="mono">#FFFFFF</span></td>
              <td><span class="rv">2.3:1</span></td>
              <td><span class="badge b-fail">Decorative only</span></td>
              <td class="td-note">Disabled states — not readable content</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="callout c-warn" style="margin-top:20px">
        <span class="callout-icon">⚠️</span>
        <p class="callout-text"><strong>Muted text warning.</strong> <code>--color-text-muted</code> achieves only 2.3:1 contrast on white. Never use it for body copy, labels, or any informational content. Reserve it strictly for decorative elements and disabled indicators.</p>
      </div>

      <div class="guidance-grid">
        <div class="guidance-card g-do">
          <div class="guidance-head"><span class="gicon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M1.5 5l2.5 2.5 4.5-5" stroke="#fff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Do</div>
          <div class="guidance-body">
            <p>Use <code>--color-text-primary</code> on <code>--color-surface</code> for all readable body text. These pairings meet AAA contrast and are the default for all content.</p>
            <div class="guidance-ex">
              <p style="color:#1D1D1F;font-size:14px;font-weight:600;margin-bottom:4px">Heading text — #1D1D1F ✓</p>
              <p style="color:#6E6E73;font-size:13px">Caption — #6E6E73 passes AA ✓</p>
            </div>
          </div>
        </div>
        <div class="guidance-card g-dont">
          <div class="guidance-head"><span class="gicon"><svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M2 2l6 6M8 2l-6 6" stroke="#fff" stroke-width="1.6" stroke-linecap="round"/></svg></span>Don't</div>
          <div class="guidance-body">
            <p>Don't use <code>--color-text-muted</code> for important content — it fails AA for normal body text and is reserved for decorative use only.</p>
            <div class="guidance-ex">
              <p style="color:#B0B0B0;font-size:14px;font-weight:600;margin-bottom:4px">Heading in muted — fails AA ✗</p>
              <p style="color:#B0B0B0;font-size:13px">Caption in muted — fails AA ✗</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- /.main-content -->

  <!-- RIGHT SIDEBAR (on-page nav) -->
  <aside class="sidebar-right">
    <nav class="page-nav">
      <p class="page-nav-title">On this page</p>
      <a href="#overview" class="active">Overview</a>
      <a href="#system-colors">System colors</a>
      <a href="#brand-palette">Brand palette</a>
      <a href="#specs">Specifications</a>
      <a href="#usage">Usage</a>
      <a href="#integration">Integration</a>
      <a href="#accessibility">Accessibility</a>
    </nav>
    <?php include $partials . 'right_sidebar.php'; ?>
  </aside>

</div><!-- /.shell -->

<script>
// Highlight active nav item on scroll
(function(){
  const links = document.querySelectorAll('.page-nav a');
  const sections = [...links].map(l=>document.querySelector(l.getAttribute('href'))).filter(Boolean);
  const obs = new IntersectionObserver(entries=>{
    entries.forEach(e=>{
      if(e.isIntersecting){
        links.forEach(l=>l.classList.remove('active'));
        const a = document.querySelector('.page-nav a[href="#'+e.target.id+'"]');
        if(a) a.classList.add('active');
      }
    });
  },{rootMargin:'-20% 0px -70% 0px'});
  sections.forEach(s=>obs.observe(s));
})();
</script>

</body>
</html>