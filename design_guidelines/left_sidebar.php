<?php
/**
 * left_sidebar.php
 * Left navigation — Apple HIG style
 * Dynamic component sections: Atom · Components · Composite · DataDisplay
 * + Static: Getting Started · Foundations
 *
 * Include: <?php include __DIR__ . '/left_sidebar.php'; ?>
 */

// ── Helpers ────────────────────────────────────────────────────────────────

// Site web root — all asset URLs are built from this
// developer.holidayseva.com IS the design_guidelines web root
if (!defined('SITE_WEB_ROOT')) {
    define('SITE_WEB_ROOT', 'https://developer.holidayseva.com');
}
if (!defined('DESIGN_GUIDELINES_WEB')) {
    define('DESIGN_GUIDELINES_WEB', SITE_WEB_ROOT);
}

/**
 * Convert a filesystem path under public_html into a full https:// URL.
 * e.g. /Users/suchibratapatra/Documents/Holidayseva/design_guidelines/Atom/button/button.ico
 *   => https://developer.holidayseva.com/Atom/button/button.ico
 */
if (!function_exists('fsToWebUrl')):
function fsToWebUrl(string $fsPath): string {
    // Strip the design_guidelines root from the filesystem path
    $fsRoot = rtrim(__DIR__, '/');
    if (strpos($fsPath, $fsRoot) === 0) {
        return SITE_WEB_ROOT . substr($fsPath, strlen($fsRoot));
    }
    // Fallback: strip DOCUMENT_ROOT
    $docRoot = rtrim($_SERVER['DOCUMENT_ROOT'] ?? '', '/');
    if ($docRoot && strpos($fsPath, $docRoot) === 0) {
        return SITE_WEB_ROOT . substr($fsPath, strlen($docRoot));
    }
    return $fsPath;
}
endif;

/**
 * Scan a category directory and return component entries.
 * - If subfolder contains {name}.php  → links to {name}.php (dedicated page)
 * - Otherwise                         → links to {Category}.php#{name} (anchor)
 * - Checks for {name}.ico in subfolder and records its web URL if found.
 */
if (!function_exists('scanComponentCategory')):
function scanComponentCategory(string $baseDir, string $category): array {
    $catPath = rtrim($baseDir, '/') . '/' . $category;
    if (!is_dir($catPath)) return [];

    $components = [];
    $entries    = @scandir($catPath);
    if (!$entries) return [];

    foreach ($entries as $entry) {
        if ($entry === '.' || $entry === '..') continue;
        $fullPath = $catPath . '/' . $entry;
        if (!is_dir($fullPath)) continue;

        // Link target — URLs are relative to the web root (developer.holidayseva.com)
        // dedicated page:  Category/item.php          e.g. Components/toggle.php
        // anchor fallback: Category/Category.php#item e.g. Components/Components.php#toggle
        $phpFile = $fullPath . '/' . $entry . '.php';
        $page    = file_exists($phpFile)
                   ? $category . '/' . $entry . '.php'
                   : $category . '/' . $category . '.php#' . $entry;

        // Icon web URL — component-specific .ico if it exists
        $icoFile   = $fullPath . '/' . $entry . '.ico';
        $iconWebUrl = file_exists($icoFile) ? fsToWebUrl($icoFile) : null;

        $components[] = [
            'name'       => $entry,
            'label'      => ucwords(str_replace(['-', '_'], ' ', $entry)),
            'page'       => $page,
            'iconWebUrl' => $iconWebUrl,
        ];
    }

    usort($components, fn($a, $b) => strcmp($a['label'], $b['label']));
    return $components;
}
endif;

/**
 * Render the icon for a sidebar link.
 * Uses proper https:// web URLs for all <img> sources.
 * Falls back to inline SVGs when no .ico is found.
 */
if (!function_exists('renderComponentIcon')):
function renderComponentIcon(?string $iconWebUrl, string $defaultIconWebUrl, string $name): string {
    if ($iconWebUrl) {
        return '<img src="' . htmlspecialchars($iconWebUrl) . '" width="14" height="14" alt="" style="flex-shrink:0;margin-top:1px;opacity:.75;" />';
    }
    if ($defaultIconWebUrl) {
        return '<img src="' . htmlspecialchars($defaultIconWebUrl) . '" width="14" height="14" alt="" style="flex-shrink:0;margin-top:1px;opacity:.75;" />';
    }

    // Inline SVG fallbacks keyed by component name
    $svgs = [
        'button'       => '<rect x="1.5" y="5" width="13" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/>',
        'input'        => '<rect x="1.5" y="4" width="13" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M5 8h6M5 10.5h3" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
        'toggle'       => '<rect x="1" y="5" width="14" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/><circle cx="11.5" cy="8" r="2" fill="currentColor"/>',
        'modal'        => '<rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M1.5 6.5h13" stroke="currentColor" stroke-width="1.2"/><path d="M5 9.5h6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
        'avatar'       => '<circle cx="8" cy="5.5" r="2.5" stroke="currentColor" stroke-width="1.2"/><path d="M2.5 14c0-3.04 2.46-5.5 5.5-5.5s5.5 2.46 5.5 5.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
        'badge'        => '<rect x="3" y="5" width="10" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/><path d="M8 7v2M7 8h2" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
        'card'         => '<rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M4 6.5h5M4 9h8M4 11h6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
        'dropdown'     => '<rect x="1.5" y="4" width="13" height="5" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M2 11h12M2 13.5h8" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" opacity=".35"/><path d="M11 6.5l2 1.5-2 1.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>',
        'tabs'         => '<path d="M2 10V5.5A1.5 1.5 0 013.5 4H7l1.5 2H14v4a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 012 10z" stroke="currentColor" stroke-width="1.2"/>',
        'tooltip'      => '<rect x="2" y="2" width="12" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M5 10.5l1.5 2.5 1.5-2.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 5.5h6M5 7.5h4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
        'checkbox'     => '<rect x="2.5" y="2.5" width="11" height="11" rx="2" stroke="currentColor" stroke-width="1.2"/><path d="M5 8l2.5 2.5L11 5.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>',
        'radio'        => '<circle cx="8" cy="8" r="5.5" stroke="currentColor" stroke-width="1.2"/><circle cx="8" cy="8" r="2.5" fill="currentColor"/>',
        'select'       => '<rect x="1.5" y="4.5" width="13" height="7" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M10.5 7.5l1.5 1.5-1.5 1.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" transform="rotate(90 11 8.5)"/>',
        'slider'       => '<line x1="2" y1="8" x2="14" y2="8" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/><circle cx="8" cy="8" r="2.5" fill="currentColor"/>',
        'spinner'      => '<path d="M8 2a6 6 0 016 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.2" opacity=".2"/>',
        'progress'     => '<rect x="1.5" y="6" width="13" height="4" rx="2" stroke="currentColor" stroke-width="1.2"/><rect x="1.5" y="6" width="7" height="4" rx="2" fill="currentColor" opacity=".25"/>',
        'label'        => '<rect x="1.5" y="4" width="13" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M4 8h8" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
        'switch'       => '<rect x="1" y="5" width="14" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/><circle cx="11.5" cy="8" r="2" stroke="currentColor" stroke-width="1.2"/>',
        'textarea'     => '<rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M4 6.5h8M4 8.5h8M4 10.5h5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
        'link'         => '<path d="M6 9.5a3.5 3.5 0 005 0l2-2a3.5 3.5 0 00-5-5l-1 1" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/><path d="M10 6.5a3.5 3.5 0 00-5 0l-2 2a3.5 3.5 0 005 5l1-1" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
        'divider'      => '<line x1="2" y1="8" x2="14" y2="8" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>',
        'icon'         => '<path d="M8 2l1.8 3.6L14 6.2l-3 2.9.7 4.1L8 11.1l-3.7 2.1.7-4.1-3-2.9 4.2-.6L8 2z" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/>',
        'range'        => '<line x1="2" y1="8" x2="14" y2="8" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/><circle cx="6" cy="8" r="2.5" fill="currentColor"/>',
        'helper-text'  => '<path d="M8 2a6 6 0 100 12A6 6 0 008 2z" stroke="currentColor" stroke-width="1.2"/><path d="M8 7v5M8 5.5v.5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>',
        'profile-card' => '<circle cx="8" cy="6" r="3" stroke="currentColor" stroke-width="1.2"/><path d="M2 14c0-2.76 2.69-5 6-5s6 2.24 6 5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
        'booking-card' => '<rect x="2" y="3" width="12" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M2 7h12M5 3V5M11 3V5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
        'search-bar'   => '<circle cx="7" cy="7" r="4.5" stroke="currentColor" stroke-width="1.2"/><path d="M10.5 10.5l3 3" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
        'filters'      => '<path d="M2 4h12M4 8h8M6 12h4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>',
        'user-menu'    => '<circle cx="8" cy="5.5" r="2.5" stroke="currentColor" stroke-width="1.2"/><path d="M2.5 14c0-3.04 2.46-5.5 5.5-5.5s5.5 2.46 5.5 5.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/><path d="M12 10l2 1.5-2 1.5" stroke="currentColor" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/>',
        'review-card'  => '<rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M8 6l.8 2.5H11l-2 1.4.8 2.6L8 11l-1.8 1.5.8-2.6-2-1.4h2.2z" fill="currentColor" opacity=".6"/>',
        'price-card'   => '<rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M6 8h4M8 6v4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
        'table'        => '<rect x="1.5" y="3" width="13" height="10" rx="1" stroke="currentColor" stroke-width="1.2"/><path d="M1.5 7h13M5.5 7v6" stroke="currentColor" stroke-width="1.2"/>',
        'list'         => '<path d="M2 4.5h12M2 8h12M2 11.5h8" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
        'tag'          => '<path d="M2 8V4.5A1.5 1.5 0 013.5 3H9l4 5-4 5H3.5A1.5 1.5 0 012 11.5V8z" stroke="currentColor" stroke-width="1.2"/>',
        'chip'         => '<rect x="1" y="5" width="14" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/><path d="M5 8h6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
        'gallery'      => '<rect x="1.5" y="1.5" width="5.5" height="5.5" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="9" y="1.5" width="5.5" height="5.5" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="1.5" y="9" width="5.5" height="5.5" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="9" y="9" width="5.5" height="5.5" rx="1" stroke="currentColor" stroke-width="1.2"/>',
        'image'        => '<rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><circle cx="5.5" cy="6.5" r="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M2 11l4-3 3 2.5 2-1.5 3 3" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>',
        'timeline'     => '<line x1="8" y1="2" x2="8" y2="14" stroke="currentColor" stroke-width="1.2"/><circle cx="8" cy="4" r="1.5" fill="currentColor"/><circle cx="8" cy="8" r="1.5" fill="currentColor"/><circle cx="8" cy="12" r="1.5" fill="currentColor"/>',
        'stats-card'   => '<rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M4 11l2.5-3 2 2 2-4 2 3" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>',
        'rating-stars' => '<path d="M8 2l1.5 3.5 3.5.5-2.5 2.5.5 3.5L8 10.5 5 12l.5-3.5L3 6l3.5-.5L8 2z" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/>',
        'notification-dropdown' => '<path d="M8 2a5 5 0 00-5 5v2l-1 2h12l-1-2V7a5 5 0 00-5-5z" stroke="currentColor" stroke-width="1.2"/><path d="M6.5 13a1.5 1.5 0 003 0" stroke="currentColor" stroke-width="1.2"/>',
        'dashboard-widget' => '<rect x="1.5" y="1.5" width="5.5" height="8" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="9" y="1.5" width="5.5" height="4" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="9" y="7" width="5.5" height="6.5" rx="1" stroke="currentColor" stroke-width="1.2"/>',
        'property-listing-card' => '<rect x="1.5" y="5" width="13" height="9" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M4 5V3.5A1.5 1.5 0 015.5 2h5A1.5 1.5 0 0112 3.5V5" stroke="currentColor" stroke-width="1.2"/>',
    ];

    $inner = $svgs[$name] ?? '<circle cx="8" cy="8" r="5.5" stroke="currentColor" stroke-width="1.2"/><path d="M8 5.5v5M8 12v.5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>';
    return '<svg width="14" height="14" viewBox="0 0 16 16" fill="none" style="flex-shrink:0;margin-top:1px;">' . $inner . '</svg>';
}
endif;

// ── Configuration ───────────────────────────────────────────────────────────

// Filesystem base — __DIR__ is the design_guidelines folder; Atom/Components/etc. live directly inside it
$baseDir        = __DIR__;

// Default icon — served via https, no filesystem path needed in HTML
$defaultIconUrl = SITE_WEB_ROOT . '/favicon.ico';

// Categories to show as collapsible sections
$categories = [
    'Atom'        => 'Atom',
    'Components'  => 'Components',
    'Composite'   => 'Composite',
    'DataDisplay' => 'Data Display',
];

// Detect current page — SCRIPT_FILENAME is reliable even when this file is included
$current = basename($_SERVER['SCRIPT_FILENAME'] ?? $_SERVER['PHP_SELF']);

// Pre-scan all categories and collect component page names for open-state detection
$allComponentPages = [];
$categoryData = [];
foreach ($categories as $dir => $label) {
    $items = scanComponentCategory($baseDir, $dir);
    $categoryData[$dir] = ['label' => $label, 'items' => $items];
    foreach ($items as $item) {
        $allComponentPages[] = $item['page'];
    }
}

// Static section page lists
$gettingStartedPages = ['index.php','introduction.php','overview.php','whats-new.php'];
$foundationPages     = ['colour.php','typography.php','spacing.php','icons.php','layout.php'];
?>

<div class="sb-filter">
  <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
    <path d="M2 4h12M4 8h8M6 12h4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
  </svg>
  <input type="text" placeholder="Filter" class="sb-filter-input" oninput="filterSidebar(this)" />
</div>

<nav class="sb-nav" id="sbNav">

  <!-- ══════════════════════════════════════════
       1. GETTING STARTED
  ══════════════════════════════════════════ -->
  <?php $gettingStartedOpen = in_array($current, $gettingStartedPages); ?>
  <div class="sb-group <?= $gettingStartedOpen ? 'open' : '' ?>">
    <button class="sb-group-btn" onclick="toggleGroup(this)">
      <svg class="sb-chevron" width="9" height="9" viewBox="0 0 10 10" fill="none">
        <path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      Getting started
    </button>
    <ul class="sb-items" <?= !$gettingStartedOpen ? 'hidden' : '' ?>>

      <li><a href="index.php" class="sb-link <?= ($current === 'index.php' || $current === 'introduction.php') ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.2"/>
          <path d="M8 5v3.5L10 10" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
        </svg>
        Introduction
      </a></li>

      <li><a href="overview.php" class="sb-link <?= $current === 'overview.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="2" y="2" width="5.5" height="5.5" rx="1" stroke="currentColor" stroke-width="1.2"/>
          <rect x="8.5" y="2" width="5.5" height="5.5" rx="1" stroke="currentColor" stroke-width="1.2"/>
          <rect x="2" y="8.5" width="5.5" height="5.5" rx="1" stroke="currentColor" stroke-width="1.2"/>
          <rect x="8.5" y="8.5" width="5.5" height="5.5" rx="1" stroke="currentColor" stroke-width="1.2"/>
        </svg>
        Overview
      </a></li>

      <li><a href="whats-new.php" class="sb-link <?= $current === 'whats-new.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <path d="M8 2l1.5 4.5H14l-3.7 2.7 1.4 4.3L8 11l-3.7 2.5 1.4-4.3L2 6.5h4.5L8 2z" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/>
        </svg>
        What's new
      </a></li>

    </ul>
  </div>


  <!-- ══════════════════════════════════════════
       2. FOUNDATIONS
  ══════════════════════════════════════════ -->
  <?php $foundationOpen = in_array($current, $foundationPages); ?>
  <div class="sb-group <?= $foundationOpen ? 'open' : '' ?>">
    <button class="sb-group-btn" onclick="toggleGroup(this)">
      <svg class="sb-chevron" width="9" height="9" viewBox="0 0 10 10" fill="none">
        <path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      Foundations
    </button>
    <ul class="sb-items" <?= !$foundationOpen ? 'hidden' : '' ?>>

      <li><a href="colour.php" class="sb-link <?= $current === 'colour.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <circle cx="5.5" cy="6.5" r="3" stroke="currentColor" stroke-width="1.2"/>
          <circle cx="10.5" cy="6.5" r="3" stroke="currentColor" stroke-width="1.2"/>
          <circle cx="8" cy="10.5" r="3" stroke="currentColor" stroke-width="1.2"/>
        </svg>
        Colour
      </a></li>

      <li><a href="typography.php" class="sb-link <?= $current === 'typography.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <path d="M3 4h10M8 4v8" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
        </svg>
        Typography
      </a></li>

      <li><a href="spacing.php" class="sb-link <?= $current === 'spacing.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <path d="M2 8h12M8 2v12" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
          <path d="M4 5v6M12 5v6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" opacity=".4"/>
        </svg>
        Spacing
      </a></li>

      <li><a href="icons.php" class="sb-link <?= $current === 'icons.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <path d="M8 2l1.8 3.6L14 6.2l-3 2.9.7 4.1L8 11.1l-3.7 2.1.7-4.1-3-2.9 4.2-.6L8 2z" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/>
        </svg>
        Icons
      </a></li>

      <li><a href="layout.php" class="sb-link <?= $current === 'layout.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="2" y="2" width="12" height="12" rx="1.5" stroke="currentColor" stroke-width="1.2"/>
          <path d="M2 6h12M6 6v8" stroke="currentColor" stroke-width="1.2"/>
        </svg>
        Layout
      </a></li>

    </ul>
  </div>


  <!-- ══════════════════════════════════════════
       3–6. DYNAMIC COMPONENT CATEGORIES
       (Atom · Components · Composite · DataDisplay)
  ══════════════════════════════════════════ -->
  <?php foreach ($categoryData as $dir => $cat): ?>
    <?php
      $catPages = array_column($cat['items'], 'page');
      $catOpen  = in_array($current, array_map('basename', $catPages));

      // Choose category icon
      $catIcons = [
        'Atom'        => '<circle cx="8" cy="8" r="2" fill="currentColor"/><circle cx="8" cy="8" r="5.5" stroke="currentColor" stroke-width="1.2"/><ellipse cx="8" cy="8" rx="5.5" ry="2" stroke="currentColor" stroke-width="1.2"/>',
        'Components'  => '<rect x="2" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="9" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="2" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/><path d="M9 11.5h5M11.5 9v5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
        'Composite'   => '<rect x="1.5" y="3" width="8" height="6" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="6" y="7" width="8" height="6" rx="1" stroke="currentColor" stroke-width="1.2"/>',
        'DataDisplay' => '<rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M4 11l2.5-3 2 2 2-4 2 3" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>',
      ];
      $catIconInner = $catIcons[$dir] ?? '<rect x="2" y="2" width="12" height="12" rx="2" stroke="currentColor" stroke-width="1.2"/>';
    ?>
    <div class="sb-group <?= $catOpen ? 'open' : '' ?>" data-category="<?= htmlspecialchars($dir) ?>">
      <button class="sb-group-btn" onclick="toggleGroup(this)">
        <svg class="sb-chevron" width="9" height="9" viewBox="0 0 10 10" fill="none">
          <path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <svg class="sb-cat-icon" width="13" height="13" viewBox="0 0 16 16" fill="none" style="flex-shrink:0;opacity:.7;">
          <?= $catIconInner ?>
        </svg>
        <?= htmlspecialchars($cat['label']) ?>
        <span class="sb-count"><?= count($cat['items']) ?></span>
      </button>

      <ul class="sb-items" <?= !$catOpen ? 'hidden' : '' ?>>
        <?php if (empty($cat['items'])): ?>
          <li class="sb-empty">No components found</li>
        <?php else: ?>
          <?php foreach ($cat['items'] as $comp): ?>
            <li>
              <a href="<?= htmlspecialchars($comp['page']) ?>"
                 class="sb-link <?= $current === basename($comp['page']) ? 'active' : '' ?>">
                <?= renderComponentIcon($comp['iconWebUrl'], $defaultIconUrl, $comp['name']) ?>
                <?= htmlspecialchars($comp['label']) ?>
              </a>
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </div>
  <?php endforeach; ?>

</nav>

<style>
  /* ── Filter bar ───────────────────────────────── */
  .sb-filter {
    display: flex;
    align-items: center;
    gap: 8px;
    margin: 0 16px 18px;
    padding: 7px 13px;
    background: #f2f2f7;
    border: 1px solid #e5e5ea;
    border-radius: 10px;
    color: #aeaeb2;
  }
  .sb-filter input {
    border: none;
    background: none;
    outline: none;
    font-size: 15px;
    color: #1d1d1f;
    font-family: var(--font-sans, -apple-system, 'Helvetica Neue', sans-serif);
    width: 100%;
  }
  .sb-filter input::placeholder { color: #aeaeb2; }

  /* ── Nav wrapper ──────────────────────────────── */
  .sb-nav { padding: 0 8px; }
  .sb-group { margin-bottom: 2px; }

  /* ── Group header button ──────────────────────── */
  .sb-group-btn {
    width: 100%;
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 6px 10px;
    background: none;
    border: none;
    cursor: pointer;
    font-family: var(--font-sans, -apple-system, 'Helvetica Neue', sans-serif);
    font-size: 15px;
    font-weight: 500;
    color: #86868b;
    text-align: left;
    border-radius: 6px;
    transition: background 0.1s, color 0.1s;
    -webkit-font-smoothing: antialiased;
    line-height: 1.4;
  }
  .sb-group-btn:hover { background: #f2f2f7; color: #1d1d1f; }

  /* Category item count badge */
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
    transition: opacity 0.1s;
  }
  .sb-group-btn:hover .sb-count { opacity: .7; }

  /* Active group */
  .sb-group.has-active > .sb-group-btn {
    font-weight: 600;
    color: #1d1d1f;
  }
  .sb-group.has-active > .sb-group-btn .sb-chevron,
  .sb-group.has-active > .sb-group-btn .sb-cat-icon { color: #1d1d1f; opacity: 1; }

  /* ── Chevron ──────────────────────────────────── */
  .sb-chevron {
    flex-shrink: 0;
    color: #aeaeb2;
    transition: transform 0.16s ease;
  }
  .sb-group.open > .sb-group-btn .sb-chevron { transform: rotate(90deg); }

  /* ── Items list ───────────────────────────────── */
  .sb-items {
    list-style: none;
    padding: 0 0 6px 0;
    margin: 0;
  }
  .sb-items[hidden] { display: none; }
  .sb-empty {
    font-size: 13px;
    color: #aeaeb2;
    padding: 5px 10px 5px 26px;
    font-style: italic;
    font-family: var(--font-sans, -apple-system, 'Helvetica Neue', sans-serif);
  }

  /* ── Individual link ──────────────────────────── */
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
    line-height: 1.45;
  }
  .sb-link svg,
  .sb-link img {
    flex-shrink: 0;
    color: #aeaeb2;
    margin-top: 1px;
    opacity: .75;
  }
  .sb-link:hover { background: #f2f2f7; color: #1d1d1f; }
  .sb-link:hover svg,
  .sb-link:hover img { color: #86868b; opacity: 1; }

  /* Active */
  .sb-link.active { font-weight: 600; color: #1d1d1f; }
  .sb-link.active svg,
  .sb-link.active img { color: #1d1d1f; opacity: 1; }

  /* Search match — bold black highlight */
  .sb-link.sb-match {
    font-weight: 700;
    color: #1d1d1f;
  }
  .sb-link.sb-match svg,
  .sb-link.sb-match img { color: #1d1d1f; opacity: 1; }

  .sb-link.hidden { display: none; }
</style>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.sb-link.active').forEach(link => {
      const grp = link.closest('.sb-group');
      if (grp) grp.classList.add('has-active');
    });
  });

  function toggleGroup(btn) {
    const grp  = btn.closest('.sb-group');
    const list = grp.querySelector('.sb-items');
    const isOpen = grp.classList.contains('open');
    grp.classList.toggle('open', !isOpen);
    if (isOpen) list.setAttribute('hidden', '');
    else        list.removeAttribute('hidden');
  }

  function filterSidebar(input) {
    const term = input.value.toLowerCase().trim();
    const nav  = input.closest('.sidebar-left, .drawer-sidebar') || document;

    if (!term) {
      // Clear search state — remove match highlight and hidden flags
      nav.querySelectorAll('.sb-link').forEach(a => {
        a.classList.remove('hidden', 'sb-match');
      });
      nav.querySelectorAll('.sb-group').forEach(grp => {
        const list   = grp.querySelector('.sb-items');
        const isOpen = grp.classList.contains('open');
        if (isOpen) list.removeAttribute('hidden');
        else        list.setAttribute('hidden', '');
      });
      return;
    }

    nav.querySelectorAll('.sb-group').forEach(grp => {
      const links    = grp.querySelectorAll('.sb-link');
      const list     = grp.querySelector('.sb-items');
      let   hasMatch = false;

      links.forEach(a => {
        const match = a.textContent.toLowerCase().includes(term);
        a.classList.toggle('hidden',   !match);
        a.classList.toggle('sb-match',  match); // bold+black on match
        if (match) hasMatch = true;
      });

      if (hasMatch) {
        grp.classList.add('open');
        list.removeAttribute('hidden');
      } else {
        if (!grp.classList.contains('has-active')) {
          grp.classList.remove('open');
          list.setAttribute('hidden', '');
        }
      }
    });
  }
</script>