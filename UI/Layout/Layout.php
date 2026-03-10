<?php
/**
 * UI/Layout/Layout.php
 * Layout primitives index — structural page-level components.
 */

$layouts = [
  ['slug'=>'page-wrapper',   'label'=>'Page Wrapper',   'desc'=>'Root container that applies max-width, horizontal padding, and centering.',                      'tags'=>['stable']],
  ['slug'=>'container',      'label'=>'Container',      'desc'=>'Fluid container with configurable max-width breakpoint stops.',                                  'tags'=>['stable']],
  ['slug'=>'grid',           'label'=>'Grid',           'desc'=>'CSS Grid wrapper with named column presets (1–12 col) and gap utilities.',                       'tags'=>['stable']],
  ['slug'=>'flex',           'label'=>'Flex',           'desc'=>'Flexbox wrapper exposing direction, wrap, align, and justify as props.',                         'tags'=>['stable']],
  ['slug'=>'stack',          'label'=>'Stack',          'desc'=>'Vertical (or horizontal) flex stack with uniform gap between children.',                         'tags'=>['stable']],
  ['slug'=>'header',         'label'=>'Header',         'desc'=>'Top-of-page slot for logo, navigation, and utility actions.',                                    'tags'=>['stable']],
  ['slug'=>'navbar',         'label'=>'Navbar',         'desc'=>'Horizontal navigation bar with sticky positioning and backdrop blur.',                           'tags'=>['stable']],
  ['slug'=>'sidebar',        'label'=>'Sidebar',        'desc'=>'Fixed-width left or right panel, sticky with overflow scroll.',                                  'tags'=>['stable']],
  ['slug'=>'drawer-sidebar', 'label'=>'Drawer Sidebar', 'desc'=>'Off-canvas sidebar that slides in from the left on mobile.',                                    'tags'=>['stable']],
  ['slug'=>'footer',         'label'=>'Footer',         'desc'=>'Page footer with link groups, copyright line, and optional logo.',                               'tags'=>['stable']],
  ['slug'=>'section',        'label'=>'Section',        'desc'=>'Semantic section wrapper with consistent vertical padding and optional divider.',                 'tags'=>['stable']],
  ['slug'=>'breadcrumbs',    'label'=>'Breadcrumbs',    'desc'=>'Hierarchical path indicator with separator and truncation on narrow viewports.',                  'tags'=>['stable']],
  ['slug'=>'pagination',     'label'=>'Pagination',     'desc'=>'Previous / next and numbered page controls with ellipsis.',                                      'tags'=>['stable']],
];

function layout_icon(string $slug): string {
  $icons = [
    'page-wrapper'   => '<rect x="1.5" y="1.5" width="13" height="13" rx="1.5" stroke="currentColor" stroke-width="1.2"/><rect x="3.5" y="3.5" width="9" height="9" rx="1" stroke="currentColor" stroke-width="1" opacity=".4"/>',
    'container'      => '<rect x="2" y="4" width="12" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2"/>',
    'grid'           => '<rect x="2" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="9" y="2" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="2" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="9" y="9" width="5" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/>',
    'flex'           => '<path d="M2 8h3M7 8h3M12 8h2" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/><path d="M5 5.5V10.5M10 5.5V10.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" opacity=".3"/>',
    'stack'          => '<rect x="2" y="2" width="12" height="3" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="2" y="6.5" width="12" height="3" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="2" y="11" width="12" height="3" rx="1" stroke="currentColor" stroke-width="1.2"/>',
    'header'         => '<rect x="1.5" y="2" width="13" height="4.5" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M1.5 9.5h13" stroke="currentColor" stroke-width="1.2" opacity=".2"/>',
    'navbar'         => '<rect x="1.5" y="4" width="13" height="4" rx="1.5" stroke="currentColor" stroke-width="1.2"/><circle cx="4.5" cy="6" r="1" fill="currentColor" opacity=".4"/><path d="M7 6h5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" opacity=".4"/>',
    'sidebar'        => '<rect x="1.5" y="2" width="13" height="12" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M6 2v12" stroke="currentColor" stroke-width="1.2"/>',
    'drawer-sidebar' => '<rect x="1.5" y="2" width="13" height="12" rx="1.5" stroke="currentColor" stroke-width="1.2"/><rect x="1.5" y="2" width="6" height="12" rx="1.5" fill="currentColor" opacity=".1" stroke="none"/>',
    'footer'         => '<rect x="1.5" y="9.5" width="13" height="4.5" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M1.5 6.5h13" stroke="currentColor" stroke-width="1.2" opacity=".2"/>',
    'section'        => '<path d="M2 3h12M2 13h12" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/><rect x="3" y="5.5" width="10" height="5" rx="1" stroke="currentColor" stroke-width="1.2" opacity=".5"/>',
    'breadcrumbs'    => '<path d="M2 8h3M5 8l2-3 2 6 2-3h3" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>',
    'pagination'     => '<rect x="2" y="5.5" width="3" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/><rect x="6.5" y="5.5" width="3" height="5" rx="1" stroke="currentColor" stroke-width="1.2" fill="currentColor" fill-opacity=".15"/><rect x="11" y="5.5" width="3" height="5" rx="1" stroke="currentColor" stroke-width="1.2"/>',
  ];
  return $icons[$slug] ?? '<rect x="2" y="2" width="12" height="12" rx="2" stroke="currentColor" stroke-width="1.2"/>';
}
?>

<div id="layout-overview">
  <p class="page-eyebrow">UI · Components</p>
  <h1 class="page-title">Layout</h1>
  <p class="page-lead">Structural primitives that define page regions and control the flow of content across all breakpoints.</p>
</div>

<hr class="rule">

<section id="layout-grid">
  <div class="comp-grid">
    <?php foreach ($layouts as $item): ?>
    <a href="/design_guidelines/UI/Layout/<?= $item['slug'] ?>/<?= $item['slug'] ?>.php" class="comp-card">
      <div class="comp-card-icon">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><?= layout_icon($item['slug']) ?></svg>
      </div>
      <div class="comp-card-body">
        <div class="comp-card-title">
          <?= $item['label'] ?>
          <?php foreach ($item['tags'] as $tag): ?>
            <span class="comp-tag comp-tag--<?= $tag ?>"><?= $tag ?></span>
          <?php endforeach; ?>
        </div>
        <div class="comp-card-desc"><?= $item['desc'] ?></div>
      </div>
      <svg class="comp-card-arrow" width="12" height="12" viewBox="0 0 16 16" fill="none">
        <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </a>
    <?php endforeach; ?>
  </div>
</section>