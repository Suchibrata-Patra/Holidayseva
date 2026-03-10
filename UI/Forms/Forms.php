<?php
/**
 * UI/Forms/Forms.php
 * Form-level components index — composite form controls.
 */

$forms = [
  [
    'slug'  => 'form-container',
    'label' => 'Form Container',
    'desc'  => 'Wraps form fields with consistent spacing, header, and submit zone.',
    'tags'  => ['stable'],
    'icon'  => '<rect x="1.5" y="2" width="13" height="12" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M4 5.5h8M4 8h8M4 10.5h5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
  ],
  [
    'slug'  => 'field-group',
    'label' => 'Field Group',
    'desc'  => 'Groups a label, input, and helper text into a single accessible unit.',
    'tags'  => ['stable'],
    'icon'  => '<path d="M2 4h12" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/><rect x="2" y="6.5" width="12" height="4.5" rx="1" stroke="currentColor" stroke-width="1.2"/><path d="M2 13h7" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" opacity=".4"/>',
  ],
  [
    'slug'  => 'calendar',
    'label' => 'Calendar',
    'desc'  => 'Month-view calendar with date selection, range support, and disabled dates.',
    'tags'  => ['stable'],
    'icon'  => '<rect x="1.5" y="3" width="13" height="11" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M5 1.5V4M11 1.5V4M1.5 6.5h13" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
  ],
  [
    'slug'  => 'date-picker',
    'label' => 'Date Picker',
    'desc'  => 'Input + Calendar popover for single date selection.',
    'tags'  => ['stable'],
    'icon'  => '<rect x="1.5" y="3" width="13" height="11" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M5 1.5V4M11 1.5V4M1.5 6.5h13" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/><circle cx="8" cy="10" r="1.2" fill="currentColor"/>',
  ],
  [
    'slug'  => 'time-picker',
    'label' => 'Time Picker',
    'desc'  => 'Hour/minute/AM–PM scroll wheel or text input for time entry.',
    'tags'  => ['stable'],
    'icon'  => '<circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.2"/><path d="M8 5v3.5L10 10" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
  ],
  [
    'slug'  => 'autocomplete',
    'label' => 'Autocomplete',
    'desc'  => 'Text input with live suggestion dropdown, keyboard navigation.',
    'tags'  => ['stable'],
    'icon'  => '<rect x="1.5" y="4" width="13" height="4" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M2 11h12M2 13.5h8" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" opacity=".35"/>',
  ],
  [
    'slug'  => 'multi-select',
    'label' => 'Multi Select',
    'desc'  => 'Checkbox-driven dropdown for selecting multiple values, with chip display.',
    'tags'  => ['stable'],
    'icon'  => '<rect x="1.5" y="3.5" width="13" height="9" rx="1.5" stroke="currentColor" stroke-width="1.2"/><rect x="3" y="5.5" width="3" height="2.5" rx=".5" fill="currentColor" opacity=".4"/><rect x="7" y="5.5" width="3" height="2.5" rx=".5" fill="currentColor" opacity=".4"/><path d="M11 9.5l2 2" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
  ],
  [
    'slug'  => 'file-upload',
    'label' => 'File Upload',
    'desc'  => 'Drag-and-drop zone with file type restrictions and upload progress.',
    'tags'  => ['stable'],
    'icon'  => '<rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M8 10V6M6 8l2-2 2 2" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>',
  ],
  [
    'slug'  => 'validation-message',
    'label' => 'Validation Message',
    'desc'  => 'Error, warning, and success states for form field feedback.',
    'tags'  => ['stable'],
    'icon'  => '<circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.2"/><path d="M8 5.5V9" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/><circle cx="8" cy="11" r=".7" fill="currentColor"/>',
  ],
];
?>

<div id="forms-overview">
  <p class="page-eyebrow">UI · Components</p>
  <h1 class="page-title">Forms</h1>
  <p class="page-lead">Composite form controls that combine atoms into fully accessible, validation-ready input experiences.</p>
</div>

<hr class="rule">

<section id="forms-grid">
  <div class="comp-grid">
    <?php foreach ($forms as $form): ?>
    <a href="/design_guidelines/UI/Forms/<?= $form['slug'] ?>/<?= $form['slug'] ?>.php" class="comp-card">
      <div class="comp-card-icon">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><?= $form['icon'] ?></svg>
      </div>
      <div class="comp-card-body">
        <div class="comp-card-title">
          <?= $form['label'] ?>
          <?php foreach ($form['tags'] as $tag): ?>
            <span class="comp-tag comp-tag--<?= $tag ?>"><?= $tag ?></span>
          <?php endforeach; ?>
        </div>
        <div class="comp-card-desc"><?= $form['desc'] ?></div>
      </div>
      <svg class="comp-card-arrow" width="12" height="12" viewBox="0 0 16 16" fill="none">
        <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </a>
    <?php endforeach; ?>
  </div>
</section>