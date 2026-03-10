<?php
$pageTitle  = 'Color';
$activePage = 'colors';
$partials   = __DIR__ . '/../../';

$tokenGroups = [
  '01 · Brand — Primary' => [
    ['--color-primary',          '#FF385C',                    '#FF4D6A',                    'Main CTA buttons, brand highlights'],
    ['--color-primary-light',    '#FF5A76',                    '#FF6B85',                    'Hover glow, tinted backgrounds'],
    ['--color-primary-lighter',  '#FF7D94',                    '#FF8DA0',                    'Subtle tints, badge fills'],
    ['--color-primary-dark',     '#D93B55',                    '#E8314F',                    'Pressed state, deeper contrast'],
    ['--color-primary-darker',   '#B32340',                    '#CC2B47',                    'High-contrast text on light bg'],
    ['--color-primary-hover',    '#E8314F',                    '#FF5C78',                    'Button hover state'],
    ['--color-primary-pressed',  '#CC2B47',                    '#E83D5C',                    'Button active/pressed state'],
    ['--color-primary-alpha',    'rgba(255,56,92,0.12)',       'rgba(255,77,106,0.18)',       'Tinted surface fills'],
    ['--color-primary-alpha-sm', 'rgba(255,56,92,0.06)',       'rgba(255,77,106,0.10)',       'Subtle tag & token backgrounds'],
    ['--color-primary-border',   'rgba(255,56,92,0.25)',       'rgba(255,77,106,0.30)',       'Tinted border / outline'],
  ],
  '02 · Brand — Secondary & Accent' => [
    ['--color-secondary',        '#222222',                    '#F5F5F7',                    'Dark text, secondary UI'],
    ['--color-secondary-muted',  '#484848',                    '#AEAEB2',                    'Subdued secondary elements'],
    ['--color-secondary-light',  '#6E6E6E',                    '#8E8E93',                    'Light secondary text'],
    ['--color-accent',           '#00A699',                    '#00C4B7',                    'Confirmations, secondary actions'],
    ['--color-accent-light',     '#00BDB2',                    '#33D1C5',                    'Accent hover, tinted fills'],
    ['--color-accent-lighter',   '#33CEC4',                    '#5DDCD2',                    'Subtle accent tints'],
    ['--color-accent-dark',      '#008C81',                    '#00A699',                    'Accent pressed, deep teal'],
    ['--color-accent-darker',    '#006E65',                    '#008C81',                    'High-contrast accent'],
    ['--color-accent-hover',     '#009B8F',                    '#00B8AC',                    'Accent button hover'],
    ['--color-accent-pressed',   '#008478',                    '#009E93',                    'Accent button pressed'],
    ['--color-accent-alpha',     'rgba(0,166,153,0.12)',       'rgba(0,196,183,0.18)',       'Accent tinted fills'],
    ['--color-star',             '#FF385C',                    '#FF4D6A',                    'Star rating filled'],
    ['--color-star-empty',       '#DDDDDD',                    '#3A3A3C',                    'Star rating empty'],
  ],
  '03 · System — Chromatic' => [
    ['--sys-red',    '#FF3B30', '#FF453A', 'System red — destructive actions'],
    ['--sys-orange', '#FF9500', '#FF9F0A', 'System orange — warnings'],
    ['--sys-yellow', '#FFCC00', '#FFD60A', 'System yellow — caution'],
    ['--sys-green',  '#34C759', '#30D158', 'System green — success'],
    ['--sys-mint',   '#00C7BE', '#63E6E2', 'System mint — fresh accent'],
    ['--sys-teal',   '#30B0C7', '#40CBE0', 'System teal — informational'],
    ['--sys-cyan',   '#32ADE6', '#64D2FF', 'System cyan — links, info'],
    ['--sys-blue',   '#007AFF', '#0A84FF', 'System blue — primary links'],
    ['--sys-indigo', '#5856D6', '#5E5CE6', 'System indigo — premium feel'],
    ['--sys-purple', '#AF52DE', '#BF5AF2', 'System purple — creative'],
    ['--sys-pink',   '#FF2D55', '#FF375F', 'System pink — vibrant accent'],
    ['--sys-brown',  '#A2845E', '#AC8E68', 'System brown — earthy'],
  ],
  '04 · System — Grays' => [
    ['--sys-gray-1', '#8E8E93', '#8E8E93', 'Mid gray — secondary icons'],
    ['--sys-gray-2', '#AEAEB2', '#636366', 'Light gray — tertiary text'],
    ['--sys-gray-3', '#C7C7CC', '#48484A', 'Lighter gray — disabled'],
    ['--sys-gray-4', '#D1D1D6', '#3A3A3C', 'Subtle separator'],
    ['--sys-gray-5', '#E5E5EA', '#2C2C2E', 'Surface raised'],
    ['--sys-gray-6', '#F2F2F7', '#1C1C1E', 'Background gray'],
  ],
  '05 · Semantic — Text' => [
    ['--color-text-primary',     '#1D1D1F', '#F5F5F7', 'Headings, primary body text'],
    ['--color-text-secondary',   '#6E6E73', '#98989D', 'Captions, secondary body text'],
    ['--color-text-tertiary',    '#868686', '#6E6E73', 'Tertiary labels, hints'],
    ['--color-text-muted',       '#B0B0B0', '#48484A', 'Decorative only — fails AA'],
    ['--color-text-placeholder', '#C7C7CC', '#48484A', 'Input placeholders'],
    ['--color-text-inverse',     '#FFFFFF', '#1D1D1F', 'Text on dark/primary bg'],
    ['--color-text-link',        '#007AFF', '#409CFF', 'Inline links'],
    ['--color-text-link-hover',  '#0066D6', '#60ACFF', 'Link hover state'],
    ['--color-text-on-primary',  '#FFFFFF', '#FFFFFF', 'Text placed on primary bg'],
    ['--color-text-on-accent',   '#FFFFFF', '#FFFFFF', 'Text placed on accent bg'],
    ['--color-text-disabled',    '#AEAEB2', '#48484A', 'Disabled control labels'],
  ],
  '06 · Semantic — Surfaces & Backgrounds' => [
    ['--color-bg',                      '#FFFFFF',                 '#000000',                'Page background'],
    ['--color-bg-secondary',            '#F5F5F7',                 '#1C1C1E',                'Secondary page area'],
    ['--color-bg-tertiary',             '#EFEFEF',                 '#2C2C2E',                'Tertiary page area'],
    ['--color-bg-muted',                '#F7F7F7',                 '#1C1C1E',                'Muted background variant'],
    ['--color-bg-dark',                 '#1D1D1F',                 '#000000',                'Dark surface override'],
    ['--color-bg-grouped',              '#F2F2F7',                 '#000000',                'Grouped table bg (iOS style)'],
    ['--color-bg-grouped-secondary',    '#FFFFFF',                 '#1C1C1E',                'Grouped table cell bg'],
    ['--color-surface',                 '#FFFFFF',                 '#1C1C1E',                'Card / panel surface'],
    ['--color-surface-raised',          '#F7F7F7',                 '#2C2C2E',                'Elevated card / table head'],
    ['--color-surface-overlay',         'rgba(255,255,255,0.92)',  'rgba(29,29,31,0.92)',    'Modal / overlay surface'],
    ['--color-surface-glass',           'rgba(255,255,255,0.72)',  'rgba(29,29,31,0.72)',    'Frosted glass surface'],
    ['--color-surface-inset',           'rgba(0,0,0,0.04)',        'rgba(255,255,255,0.05)', 'Row hover / inset fills'],
    ['--color-surface-tinted',          'rgba(255,56,92,0.04)',    'rgba(255,77,106,0.07)',  'Brand-tinted surface'],
    ['--color-surface-disabled',        '#F5F5F5',                 '#2C2C2E',                'Disabled control surface'],
    ['--color-fill-primary',            'rgba(0,0,0,0.055)',       'rgba(255,255,255,0.10)', 'Vibrancy fill — level 1'],
    ['--color-fill-secondary',          'rgba(0,0,0,0.035)',       'rgba(255,255,255,0.065)','Vibrancy fill — level 2'],
    ['--color-fill-tertiary',           'rgba(0,0,0,0.022)',       'rgba(255,255,255,0.04)', 'Vibrancy fill — level 3'],
    ['--color-fill-quaternary',         '#00000003',       'rgba(255,255,255,0.022)','Vibrancy fill — level 4'],
  ],
  '07 · Semantic — Borders & Separators' => [
    ['--color-border',            '#D2D2D7',               '#3A3A3C',               'Default border'],
    ['--color-border-light',      '#E5E5EA',               '#2C2C2E',               'Subtle border'],
    ['--color-border-lighter',    '#F0F0F0',               '#242426',               'Hairline border'],
    ['--color-border-dark',       '#AEAEB2',               '#4E4E52',               'Strong border'],
    ['--color-border-focus',      '#1D1D1F',               '#F5F5F7',               'Focus outline'],
    ['--color-border-focus-ring', 'rgba(0,122,255,0.48)',  'rgba(64,156,255,0.55)', 'Focus ring shadow'],
    ['--color-border-error',      'rgba(193,53,21,0.45)',  'rgba(255,69,58,0.45)',  'Error input border'],
    ['--color-border-disabled',   '#E0E0E0',               '#3A3A3C',               'Disabled border'],
    ['--color-separator',         'rgba(60,60,67,0.18)',   'rgba(255,255,255,0.15)','Separator line'],
    ['--color-separator-opaque',  '#C6C6C8',               '#38383A',               'Opaque separator'],
    ['--color-muted',             '#EBEBEB',               '#2C2C2E',               'Muted fill / rule'],
    ['--color-muted-dark',        '#DDDDDD',               '#3A3A3C',               'Darker muted rule'],
  ],
  '08 · Status — Success' => [
    ['--color-success',        '#1A9E35',              '#30D158',              'Success base'],
    ['--color-success-light',  '#34C759',              '#4DDC6C',              'Success lighter'],
    ['--color-success-bg',     'rgba(52,199,89,0.10)', 'rgba(48,209,88,0.14)','Success tinted fill'],
    ['--color-success-border', 'rgba(52,199,89,0.30)', 'rgba(48,209,88,0.28)','Success border'],
    ['--color-success-text',   '#1A7C2B',              '#30D158',              'Success text label'],
  ],
  '09 · Status — Warning' => [
    ['--color-warning',        '#C45508',               '#FF9F0A',               'Warning base'],
    ['--color-warning-light',  '#FF9500',               '#FFAF34',               'Warning lighter'],
    ['--color-warning-bg',     'rgba(255,149,0,0.10)',  'rgba(255,159,10,0.14)', 'Warning tinted fill'],
    ['--color-warning-border', 'rgba(255,149,0,0.30)',  'rgba(255,159,10,0.28)', 'Warning border'],
    ['--color-warning-text',   '#9A3F00',               '#FF9F0A',               'Warning text label'],
  ],
  '10 · Status — Error & Danger' => [
    ['--color-error',          '#C13515',               '#FF453A',               'Error base'],
    ['--color-error-light',    '#FF3B30',               '#FF6961',               'Error lighter'],
    ['--color-error-bg',       'rgba(255,59,48,0.10)',  'rgba(255,69,58,0.14)',  'Error tinted fill'],
    ['--color-error-border',   'rgba(255,59,48,0.25)',  'rgba(255,69,58,0.25)',  'Error border'],
    ['--color-error-text',     '#A02810',               '#FF453A',               'Error text label'],
    ['--color-danger',         '#C13515',               '#FF453A',               'Destructive action base'],
    ['--color-danger-hover',   '#A82C10',               '#FF6961',               'Destructive hover'],
    ['--color-danger-pressed', '#8E240D',               '#FF8780',               'Destructive pressed'],
    ['--color-danger-alpha',   'rgba(193,53,21,0.10)',  'rgba(255,69,58,0.15)',  'Destructive tinted fill'],
  ],
  '11 · Status — Info' => [
    ['--color-info',           '#0071D6',               '#409CFF',               'Info base'],
    ['--color-info-light',     '#007AFF',               '#60ACFF',               'Info lighter'],
    ['--color-info-bg',        'rgba(0,122,255,0.10)',  'rgba(64,156,255,0.14)', 'Info tinted fill'],
    ['--color-info-border',    'rgba(0,122,255,0.25)',  'rgba(64,156,255,0.25)', 'Info border'],
    ['--color-info-text',      '#0058A8',               '#409CFF',               'Info text label'],
  ],
  '12 · Interactive States' => [
    ['--color-ghost-hover-bg',  'rgba(0,0,0,0.05)',      'rgba(255,255,255,0.08)', 'Ghost button hover'],
    ['--color-ghost-pressed-bg','rgba(0,0,0,0.09)',      'rgba(255,255,255,0.14)', 'Ghost button pressed'],
    ['--color-selection-bg',    'rgba(0,122,255,0.15)',  'rgba(64,156,255,0.20)',  'Text selection highlight'],
    ['--color-highlight-bg',    'rgba(255,214,10,0.30)', 'rgba(255,214,10,0.22)', 'Search match highlight'],
  ],
  '13 · Overlays & Glass' => [
    ['--color-overlay',        'rgba(0,0,0,0.48)',        'rgba(0,0,0,0.62)',        'Modal backdrop'],
    ['--color-overlay-light',  'rgba(0,0,0,0.12)',        'rgba(0,0,0,0.28)',        'Subtle overlay'],
    ['--color-overlay-dark',   'rgba(0,0,0,0.72)',        'rgba(0,0,0,0.82)',        'Heavy overlay'],
    ['--color-glass-bg',       'rgba(255,255,255,0.65)',  'rgba(28,28,30,0.72)',     'Liquid glass background'],
    ['--color-glass-border',   'rgba(255,255,255,0.35)',  'rgba(255,255,255,0.12)',  'Glass border'],
    ['--color-glass-shadow',   'rgba(0,0,0,0.08)',        'rgba(0,0,0,0.36)',        'Glass drop shadow'],
    ['--color-glass-tint',     'rgba(255,56,92,0.08)',    'rgba(255,77,106,0.12)',   'Brand-tinted glass'],
  ],
  '14 · Navigation & Header' => [
    ['--color-nav-bg',          '#F5F5F7',               '#1C1C1E',                'Sidebar / nav background'],
    ['--color-nav-text',        '#1D1D1F',               '#F5F5F7',                'Nav item text'],
    ['--color-nav-text-active', '#FF385C',               '#FF4D6A',                'Active nav item text'],
    ['--color-nav-icon',        '#6E6E73',               '#8E8E93',                'Nav icon color'],
    ['--color-nav-icon-active', '#FF385C',               '#FF4D6A',                'Active nav icon'],
    ['--color-nav-border',      '#D2D2D7',               '#3A3A3C',                'Nav border / rule'],
    ['--color-nav-hover',       'rgba(0,0,0,0.05)',      'rgba(255,255,255,0.07)', 'Nav hover fill'],
    ['--color-nav-active-bg',   'rgba(255,56,92,0.08)',  'rgba(255,77,106,0.12)',  'Active nav item background'],
    ['--color-header-bg',       'rgba(255,255,255,0.85)','rgba(0,0,0,0.82)',       'Sticky header background'],
    ['--color-header-border',   'rgba(0,0,0,0.10)',      'rgba(255,255,255,0.10)', 'Header bottom border'],
  ],
  '15 · Badges & Labels' => [
    ['--color-badge-primary-bg',   'rgba(255,56,92,0.10)',  'rgba(255,77,106,0.14)',  'Primary badge fill'],
    ['--color-badge-primary-text', '#C13515',               '#FF4D6A',                'Primary badge text'],
    ['--color-badge-success-bg',   'rgba(52,199,89,0.10)',  'rgba(48,209,88,0.14)',   'Success badge fill'],
    ['--color-badge-success-text', '#1A7C2B',               '#30D158',                'Success badge text'],
    ['--color-badge-warning-bg',   'rgba(255,149,0,0.10)',  'rgba(255,159,10,0.14)',  'Warning badge fill'],
    ['--color-badge-warning-text', '#9A3F00',               '#FF9F0A',                'Warning badge text'],
    ['--color-badge-error-bg',     'rgba(255,59,48,0.10)',  'rgba(255,69,58,0.14)',   'Error badge fill'],
    ['--color-badge-error-text',   '#A02810',               '#FF453A',                'Error badge text'],
    ['--color-badge-info-bg',      'rgba(0,122,255,0.10)',  'rgba(64,156,255,0.14)',  'Info badge fill'],
    ['--color-badge-info-text',    '#0058A8',               '#409CFF',                'Info badge text'],
    ['--color-badge-neutral-bg',   'rgba(0,0,0,0.06)',      'rgba(255,255,255,0.08)', 'Neutral badge fill'],
    ['--color-badge-neutral-text', '#6E6E73',               '#8E8E93',                'Neutral badge text'],
  ],
  '16 · Code Syntax' => [
    ['--color-code-bg',       '#1C1C1E', '#141414', 'Code block background'],
    ['--color-code-text',     '#F5F5F7', '#F5F5F7', 'Code default text'],
    ['--color-code-comment',  '#7F8C8D', '#636366', 'Code comments'],
    ['--color-code-keyword',  '#CF9FFF', '#CF9FFF', 'Language keywords'],
    ['--color-code-string',   '#A8FF78', '#A8FF78', 'String literals'],
    ['--color-code-number',   '#FF9F43', '#FF9F43', 'Numbers / values'],
    ['--color-code-property', '#6BCAFF', '#6BCAFF', 'Property names'],
    ['--color-code-tag',      '#FF6B9D', '#FF6B9D', 'HTML tags'],
    ['--color-code-attr',     '#FFD176', '#FFD176', 'HTML attributes'],
  ],
];

function isHex($v){ return strlen($v)===7 && $v[0]==='#'; }
function hexToRgb($hex){ $h=ltrim($hex,'#'); return [hexdec(substr($h,0,2)),hexdec(substr($h,2,2)),hexdec(substr($h,4,2))]; }
function isLight($hex){ if(!isHex($hex)) return true; [$r,$g,$b]=hexToRgb($hex); return (0.299*$r+0.587*$g+0.114*$b)/255>0.72; }
$total = array_sum(array_map('count',$tokenGroups));
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<title><?=htmlspecialchars($pageTitle)?> — Design Guidelines · Holidayseva</title>
<link rel="stylesheet" href="/colors.css"/>
<link rel="stylesheet" href="https://holidayseva.com/UI/Foundation/colors.css"/>
<link rel="stylesheet" href="https://developer.holidayseva.com/design-system.css"/>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{font-size:16px;scroll-behavior:smooth}
body{font-family:-apple-system,BlinkMacSystemFont,"SF Pro Text","Helvetica Neue",sans-serif;background:var(--color-bg);color:var(--color-text-primary);-webkit-font-smoothing:antialiased;min-height:100vh}
.shell{display:grid;grid-template-columns:260px 1fr 220px;grid-template-areas:"left main right";min-height:calc(100vh - var(--header-h,96px))}
.sidebar-left{grid-area:left;border-right:1px solid var(--color-border);position:sticky;top:var(--header-h,96px);height:calc(100vh - var(--header-h,96px));overflow-y:auto;padding:20px 0;scrollbar-width:thin;scrollbar-color:var(--color-muted-dark) transparent}
.sidebar-right{grid-area:right;border-left:1px solid var(--color-border);position:sticky;top:var(--header-h,96px);height:calc(100vh - var(--header-h,96px));overflow-y:auto;scrollbar-width:thin;scrollbar-color:var(--color-muted-dark) transparent}
.main-content{grid-area:main;padding:72px 80px 140px;max-width:960px}
/* NAV */
.page-nav{padding:24px 18px}
.page-nav-title{font-size:10.5px;font-weight:600;text-transform:uppercase;letter-spacing:.09em;color:var(--color-text-muted);margin-bottom:14px}
.page-nav a{display:block;padding:5px 0 5px 12px;color:var(--color-text-secondary);font-size:12.5px;text-decoration:none;border-left:2px solid transparent;transition:all .15s}
.page-nav a:hover{color:var(--color-text-primary)}
.page-nav a.active{color:var(--color-primary);border-left-color:var(--color-primary)}
.page-nav .nav-sub{display:block;padding:3px 0 3px 22px;color:var(--color-text-muted);font-size:11.5px;text-decoration:none;transition:color .15s}
.page-nav .nav-sub:hover{color:var(--color-text-secondary)}
/* TYPE */
.breadcrumb{display:flex;align-items:center;gap:6px;margin-bottom:24px;font-size:13px;color:var(--color-text-secondary)}
.breadcrumb a{color:var(--color-text-link);text-decoration:none}.breadcrumb a:hover{text-decoration:underline}
.breadcrumb-sep{color:var(--color-text-muted);font-size:10px}
.page-title{font-size:60px;font-weight:700;letter-spacing:-.048em;line-height:1;color:var(--color-text-primary);margin-bottom:24px}
.page-intro{font-size:19px;line-height:1.65;color:var(--color-text-secondary);max-width:660px;letter-spacing:-.01em}
.page-intro em{font-style:normal;color:var(--color-text-primary);font-weight:500}
.doc-section{padding-top:72px}
.section-label{font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.1em;color:var(--color-primary);margin-bottom:10px}
.section-title{font-size:36px;font-weight:700;letter-spacing:-.034em;line-height:1.1;color:var(--color-text-primary);margin-bottom:12px}
.section-body{font-size:16px;line-height:1.72;color:var(--color-text-secondary);max-width:640px;letter-spacing:-.006em}
.page-rule{border:none;border-top:1px solid var(--color-border);margin:0}
/* HERO */
.hero-strip{display:grid;grid-template-columns:1fr 1fr;margin-top:44px;border-radius:20px;overflow:hidden;border:1px solid rgba(0,0,0,.06);box-shadow:var(--shadow-lg)}
.hero-swatch{padding:44px 40px 40px;position:relative;overflow:hidden;min-height:200px;display:flex;flex-direction:column;justify-content:flex-end}
.hero-swatch::before{content:'';position:absolute;top:-70px;right:-70px;width:220px;height:220px;border-radius:50%;background:rgba(255,255,255,.08);pointer-events:none}
.h-tag{font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.1em;color:rgba(255,255,255,.55);margin-bottom:8px}
.h-hex{font-size:30px;font-weight:700;letter-spacing:-.03em;color:#fff;margin-bottom:4px;font-variant-numeric:tabular-nums}
.h-rgb{font-size:12px;color:rgba(255,255,255,.48);font-family:'SF Mono','Menlo',monospace}
/* SYSTEM COLOR TABLE */
.color-table-wrap{margin-top:40px;border:1px solid var(--color-border);border-radius:16px;overflow:hidden}
.color-table{width:100%;border-collapse:collapse;table-layout:fixed}
.color-table thead tr{background:var(--color-surface-raised)}
.color-table th{padding:12px 14px;text-align:left;font-size:10.5px;font-weight:600;text-transform:uppercase;letter-spacing:.08em;color:var(--color-text-secondary);border-bottom:1px solid var(--color-border);white-space:nowrap}
.color-table td{padding:0;border-bottom:1px solid var(--color-border);vertical-align:middle}
.color-table tbody tr:last-child td{border-bottom:none}
.color-table tbody tr:hover td{background:var(--color-surface-inset)}
.ct-name{padding:14px;font-size:14px;color:var(--color-text-primary);font-weight:400;white-space:nowrap}
.ct-token{padding:14px;font-family:'SF Mono','Menlo',monospace;font-size:11px;color:var(--color-text-link);white-space:nowrap}
.ct-swatch{padding:10px 12px}
.ct-inner{display:flex;align-items:center;gap:10px}
.ct-box{width:44px;height:44px;border-radius:9px;flex-shrink:0;border:1px solid rgba(0,0,0,.07)}
.ct-rgb{font-family:'SF Mono','Menlo',monospace;font-size:10.5px;color:var(--color-text-secondary);line-height:1.85;white-space:nowrap}
.ct-rgb span{display:block}
.ct-dark{background:#0f0f11}
.ct-dark .ct-rgb{color:#48484A}
.ct-dark .ct-box{border-color:rgba(255,255,255,.10)}
/* GRAY SECTION */
.gray-header{margin-top:52px;margin-bottom:24px}
.gray-header h3{font-size:22px;font-weight:700;letter-spacing:-.02em;color:var(--color-text-primary);margin-bottom:6px}
.gray-header p{font-size:14px;color:var(--color-text-secondary);line-height:1.6;max-width:560px}
/* THEORY */
.theory-grid{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:36px}
.theory-card{border:1px solid var(--color-border);border-radius:14px;overflow:hidden;background:var(--color-surface);transition:box-shadow .2s,transform .2s}
.theory-card:hover{box-shadow:var(--shadow-md);transform:translateY(-1px)}
.theory-card-visual{height:76px;position:relative;overflow:hidden}
.theory-card-body{padding:16px 18px}
.theory-card-title{font-size:14px;font-weight:600;color:var(--color-text-primary);margin-bottom:5px;letter-spacing:-.01em}
.theory-card-desc{font-size:13px;line-height:1.6;color:var(--color-text-secondary)}
/* ALL TOKENS TABLE */
.full-token-wrap{margin-top:40px;border:1px solid var(--color-border);border-radius:16px;overflow:hidden}
.full-token-table{width:100%;border-collapse:collapse}
.full-token-table thead tr{background:var(--color-surface-raised)}
.full-token-table th{padding:12px 20px;text-align:left;font-size:10.5px;font-weight:600;text-transform:uppercase;letter-spacing:.08em;color:var(--color-text-secondary);border-bottom:1px solid var(--color-border)}
.full-token-table td{padding:10px 20px;font-size:13px;border-bottom:1px solid var(--color-border);vertical-align:middle}
.full-token-table tbody tr:last-child td{border-bottom:none}
.full-token-table tbody tr:hover td{background:var(--color-surface-inset)}
.group-row td{padding:16px 20px 10px;font-size:10.5px;font-weight:700;text-transform:uppercase;letter-spacing:.09em;color:var(--color-text-muted);background:var(--color-bg-secondary);border-top:1px solid var(--color-border)}
.group-row:first-child td{border-top:none}
.tok{font-family:'SF Mono','Menlo',monospace;font-size:11.5px;color:var(--color-primary);background:var(--color-primary-alpha-sm);border:1px solid var(--color-primary-border);padding:2px 8px;border-radius:5px;white-space:nowrap}
.val-l{font-family:'SF Mono','Menlo',monospace;font-size:11.5px;color:var(--color-text-secondary);white-space:nowrap}
.val-d{font-family:'SF Mono','Menlo',monospace;font-size:11.5px;color:#636366;white-space:nowrap}
.sw-inline{display:inline-flex;align-items:center;gap:7px}
.dot{display:inline-block;width:11px;height:11px;border-radius:3px;flex-shrink:0;border:1px solid rgba(0,0,0,.08)}
.dot-dk{border-color:rgba(255,255,255,.12)}
.nt{font-size:12px;color:var(--color-text-muted)}
/* CALLOUT */
.callout{display:flex;gap:14px;padding:16px 18px;border-radius:12px;margin-top:24px;border:1px solid}
.c-note{background:rgba(0,122,255,.05);border-color:rgba(0,122,255,.16)}
.c-warn{background:rgba(255,149,0,.05);border-color:rgba(255,149,0,.18)}
.callout-icon{font-size:15px;line-height:1;margin-top:1px;flex-shrink:0}
.callout-text{font-size:13.5px;line-height:1.65;color:var(--color-text-secondary)}
.callout-text strong{color:var(--color-text-primary);font-weight:600}
.callout-text code{font-family:'SF Mono','Menlo',monospace;font-size:11px;color:var(--color-primary);background:var(--color-primary-alpha-sm);border:1px solid var(--color-primary-border);padding:1px 5px;border-radius:4px}
/* A11Y */
.a11y-wrap{margin-top:36px;border:1px solid var(--color-border);border-radius:16px;overflow:hidden}
.a11y-table{width:100%;border-collapse:collapse}
.a11y-table thead tr{background:var(--color-surface-raised)}
.a11y-table th{padding:12px 18px;text-align:left;font-size:10.5px;font-weight:600;text-transform:uppercase;letter-spacing:.08em;color:var(--color-text-secondary);border-bottom:1px solid var(--color-border)}
.a11y-table td{padding:14px 18px;font-size:13px;border-bottom:1px solid var(--color-border);vertical-align:middle}
.a11y-table tbody tr:last-child td{border-bottom:none}
.a11y-table tbody tr:hover td{background:var(--color-surface-inset)}
.a11y-pair{display:flex;align-items:center;gap:12px}
.a11y-chip{width:46px;height:46px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:15px;font-weight:700;flex-shrink:0}
.a11y-lbl{font-size:13px;color:var(--color-text-secondary);line-height:1.4}
.a11y-lbl strong{display:block;color:var(--color-text-primary);font-weight:600;margin-bottom:1px}
.ratio{font-size:14px;font-weight:700;font-variant-numeric:tabular-nums;letter-spacing:-.02em}
.badge{display:inline-block;padding:3px 9px;border-radius:20px;font-size:11px;font-weight:600;letter-spacing:.04em;text-transform:uppercase}
.b-aaa{background:rgba(52,199,89,.10);color:#1A9E35}
.b-aa{background:rgba(0,166,153,.10);color:#008C81}
.b-lg{background:rgba(255,149,0,.10);color:#C45508}
.b-fail{background:rgba(255,59,48,.10);color:#C13515}
/* CODE */
.code-wrap{margin-top:28px;border-radius:14px;overflow:hidden;border:1px solid rgba(255,255,255,.07);background:#1c1c1e}
.code-bar{display:flex;align-items:center;justify-content:space-between;padding:10px 16px;background:#2c2c2e;border-bottom:1px solid rgba(255,255,255,.07)}
.code-dots{display:flex;gap:6px}
.cd{width:12px;height:12px;border-radius:50%}.cd-r{background:#FF5F57}.cd-y{background:#FFBD2E}.cd-g{background:#28C840}
.code-fname{font-size:12px;color:rgba(255,255,255,.35);font-family:'SF Mono','Menlo',monospace}
.copy-btn{background:rgba(255,255,255,.09);border:1px solid rgba(255,255,255,.12);color:rgba(255,255,255,.6);padding:4px 12px;border-radius:6px;font-size:11px;font-weight:500;cursor:pointer;font-family:inherit;transition:all .15s}
.copy-btn:hover{background:rgba(255,255,255,.17);color:#fff}
.code-wrap pre{padding:22px;margin:0;overflow-x:auto;font-family:'SF Mono','Menlo',monospace;font-size:12.5px;line-height:1.75;color:#f5f5f7}
.ck{color:#CF9FFF;font-weight:600}.cs{color:#A8FF78}.cn{color:#FF9F43}.cp{color:#6BCAFF}.cc{color:#636366;font-style:italic}
code{font-family:'SF Mono','Menlo',monospace;font-size:12px;color:var(--color-text-primary);background:var(--color-surface-raised);border:1px solid var(--color-border);padding:2px 6px;border-radius:4px}
a{color:var(--color-text-link);text-decoration:none}a:hover{text-decoration:underline}
@media(max-width:1280px){.shell{grid-template-columns:220px 1fr 200px}.main-content{padding:56px 48px 120px}}
@media(max-width:1024px){.shell{grid-template-columns:1fr;grid-template-areas:"main"}.sidebar-left,.sidebar-right{display:none}.main-content{padding:40px 24px 80px;max-width:100%}.theory-grid{grid-template-columns:1fr}.hero-strip{grid-template-columns:1fr}}
</style>
</head>
<body>
<?php include $partials . 'header.php'; ?>
<div class="shell">
<aside class="sidebar-left"><?php include $partials . 'left_sidebar.php'; ?></aside>
<main class="main-content">


<!-- SYSTEM COLORS -->
<section id="system-colors" class="doc-section" style="display:none;">
  <p class="section-label">Palette</p>
  <h2 class="section-title">System colors</h2>
  <p class="section-body">Vibrant, semantically named hues calibrated separately for light and dark appearances. Each color also has an increased-contrast variant for accessibility environments.</p>

  <div class="color-table-wrap">
    <table class="color-table">
      <colgroup><col style="width:90px"><col style="width:130px"><col style="width:160px"><col style="width:160px"><col style="width:160px"><col style="width:160px"></colgroup>
      <thead><tr>
        <th>Name</th><th>CSS Token</th>
        <th>Default (light)</th><th>Default (dark)</th>
        <th>Increased contrast (light)</th><th>Increased contrast (dark)</th>
      </tr></thead>
      <tbody>
<?php
$sysRows=[
  ['Red',    '--sys-red',    '#FF3B30','255','59','48',   '#FF453A','255','69','58',   '#D70015','215','0','21',   '#FF6961','255','105','97'],
  ['Orange', '--sys-orange', '#FF9500','255','149','0',   '#FF9F0A','255','159','10',  '#C93400','201','52','0',   '#FFB340','255','179','64'],
  ['Yellow', '--sys-yellow', '#FFCC00','255','204','0',   '#FFD60A','255','214','10',  '#946200','148','98','0',   '#FFD426','255','212','38'],
  ['Green',  '--sys-green',  '#34C759','52','199','89',   '#30D158','48','209','88',   '#248A3D','36','138','61',  '#30DB5B','48','219','91'],
  ['Mint',   '--sys-mint',   '#00C7BE','0','199','190',   '#63E6E2','99','230','226',  '#0C817B','12','129','123', '#70D7D3','112','215','211'],
  ['Teal',   '--sys-teal',   '#30B0C7','48','176','199',  '#40CBE0','64','203','224',  '#008299','0','130','153',  '#5BD8FF','91','216','255'],
  ['Cyan',   '--sys-cyan',   '#32ADE6','50','173','230',  '#64D2FF','100','210','255', '#0071A4','0','113','164',  '#70D7FF','112','215','255'],
  ['Blue',   '--sys-blue',   '#007AFF','0','122','255',   '#0A84FF','10','132','255',  '#0040DD','0','64','221',   '#409CFF','64','156','255'],
  ['Indigo', '--sys-indigo', '#5856D6','88','86','214',   '#5E5CE6','94','92','230',   '#3634A3','54','52','163',  '#7D7AFF','125','122','255'],
  ['Purple', '--sys-purple', '#AF52DE','175','82','222',  '#BF5AF2','191','90','242',  '#8944AB','137','68','171', '#DA8FFF','218','143','255'],
  ['Pink',   '--sys-pink',   '#FF2D55','255','45','85',   '#FF375F','255','55','95',   '#D30F45','211','15','69',  '#FF6482','255','100','130'],
  ['Brown',  '--sys-brown',  '#A2845E','162','132','94',  '#AC8E68','172','142','104', '#7F6545','127','101','69', '#B59469','181','148','105'],
];
foreach($sysRows as $r):?>
<tr>
  <td class="ct-name"><?=$r[0]?></td>
  <td class="ct-token"><code style="background:none;border:none;color:var(--color-text-link);font-size:11px;padding:0"><?=$r[1]?></code></td>
  <td class="ct-swatch"><div class="ct-inner"><div class="ct-box" style="background:<?=$r[2]?>"></div><div class="ct-rgb"><span>R <?=$r[3]?></span><span>G <?=$r[4]?></span><span>B <?=$r[5]?></span></div></div></td>
  <td class="ct-swatch ct-dark"><div class="ct-inner"><div class="ct-box" style="background:<?=$r[6]?>"></div><div class="ct-rgb"><span>R <?=$r[7]?></span><span>G <?=$r[8]?></span><span>B <?=$r[9]?></span></div></div></td>
  <td class="ct-swatch"><div class="ct-inner"><div class="ct-box" style="background:<?=$r[10]?>"></div><div class="ct-rgb"><span>R <?=$r[11]?></span><span>G <?=$r[12]?></span><span>B <?=$r[13]?></span></div></div></td>
  <td class="ct-swatch ct-dark"><div class="ct-inner"><div class="ct-box" style="background:<?=$r[14]?>"></div><div class="ct-rgb"><span>R <?=$r[15]?></span><span>G <?=$r[16]?></span><span>B <?=$r[17]?></span></div></div></td>
</tr>
<?php endforeach;?>
      </tbody>
    </table>
  </div>

  <!-- GRAYS -->
  <div class="gray-header" style="display:none;">
    <h3>iOS · macOS system gray colors</h3>
    <p>Six gray levels spanning dark text to near-white backgrounds. Each level shifts distinctly in dark mode to maintain identical perceptual weight on dark surfaces.</p>
  </div>
  <div class="color-table-wrap">
    <table class="color-table">
      <colgroup><col style="width:90px"><col style="width:130px"><col style="width:160px"><col style="width:160px"><col style="width:160px"><col style="width:160px"></colgroup>
      <thead><tr>
        <th>Name</th><th>CSS Token</th>
        <th>Default (light)</th><th>Default (dark)</th>
        <th>Increased contrast (light)</th><th>Increased contrast (dark)</th>
      </tr></thead>
      <tbody>
<?php
$grayRows=[
  ['Gray',   '--sys-gray-1','#8E8E93','142','142','147','#8E8E93','142','142','147','#6C6C70','108','108','112','#AEAEB2','174','174','178'],
  ['Gray 2', '--sys-gray-2','#AEAEB2','174','174','178','#636366','99','99','102',  '#8E8E93','142','142','147','#7C7C80','124','124','128'],
  ['Gray 3', '--sys-gray-3','#C7C7CC','199','199','204','#48484A','72','72','74',   '#AEAEB2','174','174','178','#545456','84','84','86'],
  ['Gray 4', '--sys-gray-4','#D1D1D6','209','209','214','#3A3A3C','58','58','60',   '#BCBCC0','188','188','192','#444446','68','68','70'],
  ['Gray 5', '--sys-gray-5','#E5E5EA','229','229','234','#2C2C2E','44','44','46',   '#D8D8DC','216','216','220','#363638','54','54','56'],
  ['Gray 6', '--sys-gray-6','#F2F2F7','242','242','247','#1C1C1E','28','28','30',   '#E9E9EE','233','233','238','#242426','36','36','38'],
];
foreach($grayRows as $g):?>
<tr>
  <td class="ct-name"><?=$g[0]?></td>
  <td class="ct-token"><code style="background:none;border:none;color:var(--color-text-link);font-size:11px;padding:0"><?=$g[1]?></code></td>
  <td class="ct-swatch"><div class="ct-inner"><div class="ct-box" style="background:<?=$g[2]?>;<?=isLight($g[2])?'border-color:#D2D2D7':''?>"></div><div class="ct-rgb"><span>R <?=$g[3]?></span><span>G <?=$g[4]?></span><span>B <?=$g[5]?></span></div></div></td>
  <td class="ct-swatch ct-dark"><div class="ct-inner"><div class="ct-box" style="background:<?=$g[6]?>"></div><div class="ct-rgb"><span>R <?=$g[7]?></span><span>G <?=$g[8]?></span><span>B <?=$g[9]?></span></div></div></td>
  <td class="ct-swatch"><div class="ct-inner"><div class="ct-box" style="background:<?=$g[10]?>;<?=isLight($g[10])?'border-color:#D2D2D7':''?>"></div><div class="ct-rgb"><span>R <?=$g[11]?></span><span>G <?=$g[12]?></span><span>B <?=$g[13]?></span></div></div></td>
  <td class="ct-swatch ct-dark"><div class="ct-inner"><div class="ct-box" style="background:<?=$g[14]?>"></div><div class="ct-rgb"><span>R <?=$g[15]?></span><span>G <?=$g[16]?></span><span>B <?=$g[17]?></span></div></div></td>
</tr>
<?php endforeach;?>
      </tbody>
    </table>
  </div>
</section>


<!-- ALL TOKENS -->
<hr class="page-rule"/>
<section id="all-tokens" class="doc-section">
  <p class="section-label">Complete Reference</p>
  <h2 class="section-title">All tokens</h2>
  <p class="section-body">Every CSS custom property defined in <code>colors.css</code> — all <?=$total?> tokens with light value, dark value, and semantic usage note.</p>

  <div class="callout c-note" style="margin-top:28px">
    <span class="callout-icon">ℹ️</span>
    <div class="callout-text"><strong>Token-only rule.</strong> Components must use <code>var(--token-name)</code> exclusively. Dark mode is handled automatically — no extra CSS needed in any component file.</div>
  </div>

  <div class="full-token-wrap">
    <table class="full-token-table">
      <thead><tr>
        <th style="width:270px">Token</th>
        <th style="width:185px">Light</th>
        <th style="width:185px">Dark</th>
        <th>Usage</th>
      </tr></thead>
      <tbody>
<?php foreach($tokenGroups as $group=>$tokens):?>
        <tr class="group-row"><td colspan="4"><?=htmlspecialchars($group)?></td></tr>
<?php foreach($tokens as [$token,$light,$dark,$note]):?>
        <tr>
          <td><span class="tok"><?=htmlspecialchars($token)?></span></td>
          <td><div class="sw-inline"><?php if(isHex($light)):?><span class="dot" style="background:<?=$light?>;<?=isLight($light)?'border-color:#C6C6C8':''?>"></span><?php endif;?><span class="val-l"><?=htmlspecialchars($light)?></span></div></td>
          <td><div class="sw-inline"><?php if(isHex($dark)):?><span class="dot dot-dk" style="background:<?=$dark?>"></span><?php endif;?><span class="val-d"><?=htmlspecialchars($dark)?></span></div></td>
          <td><span class="nt"><?=htmlspecialchars($note)?></span></td>
        </tr>
<?php endforeach;?>
<?php endforeach;?>
      </tbody>
    </table>
  </div>
</section>

<!-- ACCESSIBILITY -->
<hr class="page-rule"/>
<section id="accessibility" class="doc-section">
  <p class="section-label">WCAG 2.1</p>
  <h2 class="section-title">Accessibility &amp; contrast</h2>
  <p class="section-body">All primary text pairings meet WCAG 2.1 AA at minimum. Ratios below are for the default light appearance.</p>
  <div class="a11y-wrap">
    <table class="a11y-table">
      <thead><tr><th>Pairing</th><th>On background</th><th>Ratio</th><th>Level</th><th>Use case</th></tr></thead>
      <tbody>
<?php
$a11y=[
  ['#FF385C','#fff','White on Primary','--color-text-inverse','#FF385C','3.8:1','b-lg','AA Large','CTA labels ≥ 18px bold'],
  ['#222','#fff','White on Secondary','--color-text-inverse','#222222','16.1:1','b-aaa','AAA','Dark buttons, headings'],
  ['#fff','#1D1D1F','Primary text on white','--color-text-primary','#FFFFFF','16.1:1','b-aaa','AAA','Body copy, headings'],
  ['#fff','#6E6E73','Secondary text on white','--color-text-secondary','#FFFFFF','4.6:1','b-aa','AA','Captions, metadata'],
  ['#fff','#00A699','Accent on white','--color-accent','#FFFFFF','4.5:1','b-aa','AA','Links, confirmation'],
  ['#fff','#B0B0B0','Muted text on white','--color-text-muted','#FFFFFF','2.3:1','b-fail','Decorative only','Disabled states only'],
];
foreach($a11y as [$bg,$fg,$label,$token,$bgHex,$ratio,$bc,$level,$use]):?>
        <tr>
          <td><div class="a11y-pair"><div class="a11y-chip" style="background:<?=$bg?>;color:<?=$fg?>;<?=$bg==='#fff'?'border:1px solid #ddd':''?>">Aa</div><div class="a11y-lbl"><strong><?=$label?></strong><span style="font-family:'SF Mono','Menlo',monospace;font-size:10.5px;color:var(--color-text-muted)"><?=$token?></span></div></div></td>
          <td><code style="font-size:11.5px"><?=$bgHex?></code></td>
          <td><span class="ratio"><?=$ratio?></span></td>
          <td><span class="badge <?=$bc?>"><?=$level?></span></td>
          <td style="color:var(--color-text-secondary);font-size:13px"><?=$use?></td>
        </tr>
<?php endforeach;?>
      </tbody>
    </table>
  </div>
  <div class="callout c-warn">
    <span class="callout-icon">⚠️</span>
    <div class="callout-text"><strong>Never use <code>--color-text-muted</code> for readable content.</strong> At 2.3:1 it fails WCAG AA for both normal and large text. Use it only for decorative elements and disabled placeholders.</div>
  </div>
</section>

<!-- USAGE -->
<hr class="page-rule"/>
<section id="usage" class="doc-section">
  <p class="section-label">Implementation</p>
  <h2 class="section-title">Usage</h2>
  <p class="section-body">Reference every color through a CSS token. Dark mode requires zero additional code.</p>
  <div class="code-wrap">
    <div class="code-bar"><div class="code-dots"><span class="cd cd-r"></span><span class="cd cd-y"></span><span class="cd cd-g"></span></div><span class="code-fname">component.css</span><button class="copy-btn" onclick="navigator.clipboard.writeText(this.closest('.code-wrap').querySelector('pre').innerText);this.textContent='Copied!';setTimeout(()=>this.textContent='Copy',1600)">Copy</button></div>
    <pre><span class="cc">/* Tokens only — no raw hex in component files */</span>
<span class="cp">.btn-primary</span> {
  background: <span class="cn">var(--color-primary)</span>;
  color:      <span class="cn">var(--color-text-inverse)</span>;
  transition: <span class="cn">var(--transition-btn)</span>;
}
<span class="cp">.btn-primary:hover</span>         { background: <span class="cn">var(--color-primary-hover)</span>; }
<span class="cp">.btn-primary:focus-visible</span> { box-shadow:  <span class="cn">var(--focus-ring)</span>; }

<span class="cp">.alert-error</span> {
  background: <span class="cn">var(--color-error-bg)</span>;
  color:      <span class="cn">var(--color-error-text)</span>;
  border:     1px solid <span class="cn">var(--color-error-border)</span>;
}
<span class="cc">/* Dark mode handled automatically — no extra rules needed */</span></pre>
  </div>
  <div class="code-wrap" style="margin-top:16px">
    <div class="code-bar"><div class="code-dots"><span class="cd cd-r"></span><span class="cd cd-y"></span><span class="cd cd-g"></span></div><span class="code-fname">dark-toggle.js</span><button class="copy-btn" onclick="navigator.clipboard.writeText(this.closest('.code-wrap').querySelector('pre').innerText);this.textContent='Copied!';setTimeout(()=>this.textContent='Copy',1600)">Copy</button></div>
    <pre><span class="cc">// Manual dark toggle — adds .dark class to &lt;html&gt;</span>
<span class="ck">const</span> toggleDark = () =>
  document.documentElement.classList.toggle(<span class="cs">'dark'</span>);

<span class="cc">// Read token at runtime (Canvas, Chart.js, D3…)</span>
<span class="ck">const</span> token = <span class="cp">key</span> =>
  getComputedStyle(document.documentElement).getPropertyValue(key).trim();

<span class="ck">const</span> primary = token(<span class="cs">'--color-primary'</span>); <span class="cc">// resolves current appearance</span></pre>
  </div>
</section>

</main>
<aside class="sidebar-right">
  <nav class="page-nav">
    <p class="page-nav-title">On this page</p>
    <a href="#overview" class="active">Overview</a>
    <a href="#system-colors">System colors</a>
    <a class="nav-sub" href="#system-colors">Chromatic</a>
    <a class="nav-sub" href="#system-colors">Grays</a>
    <a href="#theory">Color theory</a>
    <a href="#all-tokens">All tokens</a>
    <a class="nav-sub" href="#all-tokens">Brand</a>
    <a class="nav-sub" href="#all-tokens">Text</a>
    <a class="nav-sub" href="#all-tokens">Surfaces</a>
    <a class="nav-sub" href="#all-tokens">Status</a>
    <a class="nav-sub" href="#all-tokens">Interactive</a>
    <a class="nav-sub" href="#all-tokens">Navigation</a>
    <a href="#accessibility">Accessibility</a>
    <a href="#usage">Usage</a>
  </nav>
  <?php include $partials . 'right_sidebar.php'; ?>
</aside>
</div>
<script>
(function(){
  const links=document.querySelectorAll('.page-nav > a');
  const secs=[...links].map(l=>document.querySelector(l.getAttribute('href'))).filter(Boolean);
  const obs=new IntersectionObserver(entries=>{
    entries.forEach(e=>{if(e.isIntersecting){links.forEach(l=>l.classList.remove('active'));const a=document.querySelector(`.page-nav > a[href="#${e.target.id}"]`);if(a)a.classList.add('active');}});
  },{rootMargin:'-15% 0px -72% 0px'});
  secs.forEach(s=>obs.observe(s));
})();
</script>
</body></html>