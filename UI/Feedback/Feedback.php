<?php
/**
 * UI/DataDisplay/DataDisplay.php
 * Data display components index.
 */

$items = [
  ['slug'=>'card',          'label'=>'Card',          'desc'=>'Contained surface for a single topic — image, copy, actions.',                    'tags'=>['stable']],
  ['slug'=>'table',         'label'=>'Table',         'desc'=>'Sortable, striped data table with sticky header and pagination.',                  'tags'=>['stable']],
  ['slug'=>'list',          'label'=>'List',          'desc'=>'Vertical sequence of items with optional icons, avatars, and actions.',             'tags'=>['stable']],
  ['slug'=>'tag',           'label'=>'Tag',           'desc'=>'Labelling element for categorising content.',                                       'tags'=>['stable']],
  ['slug'=>'chip',          'label'=>'Chip',          'desc'=>'Compact selection token — filterable and removable.',                               'tags'=>['stable']],
  ['slug'=>'image',         'label'=>'Image',         'desc'=>'Aspect-ratio-locked image with lazy loading and skeleton placeholder.',             'tags'=>['stable']],
  ['slug'=>'gallery',       'label'=>'Gallery',       'desc'=>'Masonry or grid image gallery with lightbox trigger.',                              'tags'=>['stable']],
  ['slug'=>'timeline',      'label'=>'Timeline',      'desc'=>'Vertical chronological list with connector lines and icon nodes.',                  'tags'=>['stable']],
  ['slug'=>'stats-card',    'label'=>'Stats Card',    'desc'=>'KPI tile with metric, label, trend arrow, and optional sparkline.',                 'tags'=>['stable']],
  ['slug'=>'rating-stars',  'label'=>'Rating Stars',  'desc'=>'1–5 star rating display — static or interactive.',                                 'tags'=>['stable']],
  ['slug'=>'price-card',    'label'=>'Price Card',    'desc'=>'Pricing tier layout with feature list and CTA button.',                             'tags'=>['stable']],
  ['slug'=>'review-card',   'label'=>'Review Card',   'desc'=>'User review with avatar, star rating, and truncated body.',                        'tags'=>['stable']],
];
?>

<div id="dd-overview">
  <p class="page-eyebrow">UI · Components</p>
  <h1 class="page-title">Data Display</h1>
  <p class="page-lead">Components for presenting structured data — tables, cards, stats, and media containers.</p>
</div>

<hr class="rule">

<section id="dd-grid">
  <div class="comp-grid">
    <?php foreach ($items as $item): ?>
    <a href="/design_guidelines/UI/DataDisplay/<?= $item['slug'] ?>/<?= $item['slug'] ?>.php" class="comp-card">
      <div class="comp-card-icon">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
          <rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/>
          <path d="M4 6.5h5M4 9h8M4 11h6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
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