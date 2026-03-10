<?php
/**
 * UI/Composite/Composite.php
 * Composite / domain-specific components index.
 */

$items = [
  ['slug'=>'search-bar',            'label'=>'Search Bar',            'desc'=>'Input + suggestions dropdown with recent history and keyboard navigation.', 'tags'=>['stable']],
  ['slug'=>'profile-card',          'label'=>'Profile Card',          'desc'=>'Avatar, name, role, and social actions in a contained card.',              'tags'=>['stable']],
  ['slug'=>'booking-card',          'label'=>'Booking Card',          'desc'=>'Date range, guest count, price, and CTA — Holidayseva booking widget.',    'tags'=>['stable']],
  ['slug'=>'property-listing-card', 'label'=>'Property Listing Card', 'desc'=>'Gallery image, price, rating, and quick-save for search results.',          'tags'=>['stable']],
  ['slug'=>'review-card',           'label'=>'Review Card',           'desc'=>'Traveller review with avatar, stars, date, and body.',                      'tags'=>['stable']],
  ['slug'=>'price-card',            'label'=>'Price Card',            'desc'=>'Tiered pricing display with feature list and CTA.',                          'tags'=>['stable']],
  ['slug'=>'dashboard-widget',      'label'=>'Dashboard Widget',      'desc'=>'KPI tile composing stat, chart, and trend badge.',                           'tags'=>['stable']],
  ['slug'=>'notification-dropdown', 'label'=>'Notification Dropdown', 'desc'=>'Bell icon + scrollable list of timestamped notifications.',                  'tags'=>['stable']],
  ['slug'=>'user-menu',             'label'=>'User Menu',             'desc'=>'Avatar-triggered dropdown with account links and sign-out.',                 'tags'=>['stable']],
  ['slug'=>'filters',               'label'=>'Filters',               'desc'=>'Sidebar or inline filter panel combining checkboxes, ranges, and chips.',   'tags'=>['stable']],
];
?>

<div id="composite-overview">
  <p class="page-eyebrow">UI · Components</p>
  <h1 class="page-title">Composite</h1>
  <p class="page-lead">Domain-specific patterns assembled from multiple atoms — booking flows, search, profiles, and dashboards.</p>
</div>

<hr class="rule">

<section id="composite-grid">
  <div class="comp-grid">
    <?php foreach ($items as $item): ?>
    <a href="/design_guidelines/UI/Composite/<?= $item['slug'] ?>/<?= $item['slug'] ?>.php" class="comp-card">
      <div class="comp-card-icon">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
          <rect x="1.5" y="3" width="5.5" height="5.5" rx="1" stroke="currentColor" stroke-width="1.2"/>
          <rect x="9" y="3" width="5.5" height="5.5" rx="1" stroke="currentColor" stroke-width="1.2"/>
          <rect x="1.5" y="9.5" width="5.5" height="3.5" rx="1" stroke="currentColor" stroke-width="1.2" opacity=".5"/>
          <rect x="9" y="9.5" width="5.5" height="3.5" rx="1" stroke="currentColor" stroke-width="1.2" opacity=".5"/>
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