<?php
/**
 * UI/Interactive/Interactive.php
 * Interactive components index — stateful overlay and disclosure patterns.
 */

$items = [
  ['slug'=>'tabs',             'label'=>'Tabs',             'desc'=>'Horizontal tab strip switching between content panels.',                      'tags'=>['stable']],
  ['slug'=>'accordion',        'label'=>'Accordion',        'desc'=>'Vertically stacked sections that expand/collapse on click.',                   'tags'=>['stable']],
  ['slug'=>'dropdown',         'label'=>'Dropdown',         'desc'=>'Button-triggered menu of options or actions.',                                  'tags'=>['stable']],
  ['slug'=>'tooltip',          'label'=>'Tooltip',          'desc'=>'Brief label appearing on hover/focus of an element.',                           'tags'=>['stable']],
  ['slug'=>'popover',          'label'=>'Popover',          'desc'=>'Richer floating panel triggered by click, includes a title and body.',          'tags'=>['stable']],
  ['slug'=>'collapse',         'label'=>'Collapse',         'desc'=>'Show/hide a content region with an animated height transition.',               'tags'=>['stable']],
  ['slug'=>'menu',             'label'=>'Menu',             'desc'=>'Accessible list of actions, supports icons and keyboard navigation.',           'tags'=>['stable']],
  ['slug'=>'context-menu',     'label'=>'Context Menu',     'desc'=>'Right-click triggered action menu.',                                            'tags'=>['stable']],
  ['slug'=>'stepper',          'label'=>'Stepper',          'desc'=>'Numeric increment/decrement control.',                                          'tags'=>['stable']],
  ['slug'=>'segmented-control','label'=>'Segmented Control','desc'=>'Mutually exclusive option set rendered as a pill strip.',                       'tags'=>['stable']],
  ['slug'=>'command-palette',  'label'=>'Command Palette',  'desc'=>'⌘K-style fuzzy search and shortcut launcher.',                                 'tags'=>['beta']],
];
?>

<div id="interactive-overview">
  <p class="page-eyebrow">UI · Components</p>
  <h1 class="page-title">Interactive</h1>
  <p class="page-lead">Stateful components — overlays, disclosure patterns, and controls that respond to user gestures.</p>
</div>

<hr class="rule">

<section id="interactive-grid">
  <div class="comp-grid">
    <?php foreach ($items as $item): ?>
    <a href="/design_guidelines/UI/Interactive/<?= $item['slug'] ?>/<?= $item['slug'] ?>.php" class="comp-card">
      <div class="comp-card-icon">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
          <path d="M4 5h8M4 8h8M4 11h5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
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