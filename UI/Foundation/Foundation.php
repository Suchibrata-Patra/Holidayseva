<?php
/**
 * UI/Foundation/Foundation.php
 * Design tokens and foundations index.
 */

$tokens = [
  ['slug'=>'colors',         'label'=>'Colour',        'desc'=>'Brand palette, semantic colours, and full token reference.',                              'tags'=>['stable'], 'file'=>'colors.css'],
  ['slug'=>'typography',     'label'=>'Typography',    'desc'=>'Type scale, font families, line-heights, and text utility classes.',                       'tags'=>['stable'], 'file'=>''],
  ['slug'=>'spacing',        'label'=>'Spacing',       'desc'=>'4-pt grid — spacing scale from 0 to 128, margin/padding helpers.',                         'tags'=>['stable'], 'file'=>'spacing.css'],
  ['slug'=>'grid',           'label'=>'Grid',          'desc'=>'12-column CSS Grid breakpoints and responsive column utilities.',                           'tags'=>['stable'], 'file'=>'grid.css'],
  ['slug'=>'shadows',        'label'=>'Shadows',       'desc'=>'Elevation system from flat (0) to overlay (5) using layered box-shadows.',                 'tags'=>['stable'], 'file'=>'shadows.css'],
  ['slug'=>'border-radius',  'label'=>'Border Radius', 'desc'=>'Radius tokens from 2 px pill to full circle.',                                             'tags'=>['stable'], 'file'=>'border-radius.css'],
  ['slug'=>'motion',         'label'=>'Motion',        'desc'=>'Duration and easing tokens, animation utilities, and reduced-motion guidelines.',          'tags'=>['stable'], 'file'=>'motion.css'],
  ['slug'=>'opacity',        'label'=>'Opacity',       'desc'=>'Opacity scale utilities for overlays, disabled states, and ghost elements.',               'tags'=>['stable'], 'file'=>'opacity.css'],
  ['slug'=>'zindex',         'label'=>'Z-Index',       'desc'=>'Z-index scale for dropdowns, modals, toasts, and sticky headers.',                         'tags'=>['stable'], 'file'=>'zindex.css'],
];
?>

<div id="foundation-overview">
  <p class="page-eyebrow">UI · Design System</p>
  <h1 class="page-title">Foundation</h1>
  <p class="page-lead">The raw design decisions behind every component — colour, space, type, motion, and elevation expressed as CSS custom properties.</p>
</div>

<hr class="rule">

<section id="foundation-grid">
  <div class="comp-grid">
    <?php foreach ($tokens as $item): ?>
    <a href="/design_guidelines/UI/Foundation/<?= $item['slug'] ?>.php" class="comp-card">
      <div class="comp-card-icon">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
          <circle cx="5.5" cy="6.5" r="3" stroke="currentColor" stroke-width="1.2"/>
          <circle cx="10.5" cy="6.5" r="3" stroke="currentColor" stroke-width="1.2"/>
          <circle cx="8" cy="10.5" r="3" stroke="currentColor" stroke-width="1.2"/>
        </svg>
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