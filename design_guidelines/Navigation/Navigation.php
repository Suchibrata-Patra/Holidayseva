<?php
/**
 * UI/Navigation/Navigation.php
 * Navigation components index.
 */

$items = [
  ['slug'=>'navbar',           'label'=>'Navbar',           'desc'=>'Top-level horizontal navigation bar with logo, links, and CTA.',                            'tags'=>['stable']],
  ['slug'=>'sidebar',          'label'=>'Sidebar',          'desc'=>'Vertical left-rail navigation with collapsible groups.',                                     'tags'=>['stable']],
  ['slug'=>'drawer',           'label'=>'Drawer',           'desc'=>'Off-canvas panel for mobile navigation, overlays the content.',                              'tags'=>['stable']],
  ['slug'=>'breadcrumb',       'label'=>'Breadcrumb',       'desc'=>'Trail of links showing current page location within the hierarchy.',                          'tags'=>['stable']],
  ['slug'=>'pagination',       'label'=>'Pagination',       'desc'=>'Page-turn controls: previous, numbered pages, next.',                                         'tags'=>['stable']],
  ['slug'=>'step-navigation',  'label'=>'Step Navigation',  'desc'=>'Linear wizard stepper with complete, active, and pending states.',                            'tags'=>['stable']],
  ['slug'=>'bottom-navigation','label'=>'Bottom Navigation','desc'=>'Mobile tab bar anchored to the bottom of the viewport.',                                      'tags'=>['stable']],
];
?>

<div id="nav-overview">
  <p class="page-eyebrow">UI · Components</p>
  <h1 class="page-title">Navigation</h1>
  <p class="page-lead">Controls that help users move through the product — from top-level page navigation to step-by-step wizards.</p>
</div>

<hr class="rule">

<section id="nav-grid">
  <div class="comp-grid">
    <?php foreach ($items as $item): ?>
    <a href="/design_guidelines/UI/Navigation/<?= $item['slug'] ?>/<?= $item['slug'] ?>.php" class="comp-card">
      <div class="comp-card-icon">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
          <rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/>
          <path d="M4 7.5h8M4 9.5h5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
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