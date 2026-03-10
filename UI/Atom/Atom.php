<?php
/**
 * UI/Atom/Atom.php
 * Atom-level components index page.
 * Included by the main index.php or linked to directly.
 */

$atoms = [
  [
    'slug'  => 'button',
    'label' => 'Button',
    'desc'  => 'Primary, secondary, ghost, danger, and icon variants with full state coverage.',
    'tags'  => ['stable'],
    'icon'  => '<rect x="1.5" y="5" width="13" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/>',
  ],
  [
    'slug'  => 'input',
    'label' => 'Input',
    'desc'  => 'Text input with floating label, helper text, error and disabled states.',
    'tags'  => ['stable'],
    'icon'  => '<rect x="1.5" y="4" width="13" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M5 8h6M5 10.5h3" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
  ],
  [
    'slug'  => 'textarea',
    'label' => 'Textarea',
    'desc'  => 'Multi-line input with optional auto-resize and character count.',
    'tags'  => ['stable'],
    'icon'  => '<rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M4 6.5h8M4 9h8M4 11.5h5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
  ],
  [
    'slug'  => 'select',
    'label' => 'Select',
    'desc'  => 'Native dropdown with custom chevron styling and placeholder support.',
    'tags'  => ['stable'],
    'icon'  => '<rect x="1.5" y="4" width="13" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M10 7.5l2 2-2 2" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>',
  ],
  [
    'slug'  => 'checkbox',
    'label' => 'Checkbox',
    'desc'  => 'Binary choice with indeterminate state and accessible label.',
    'tags'  => ['stable'],
    'icon'  => '<rect x="2" y="2" width="12" height="12" rx="2" stroke="currentColor" stroke-width="1.2"/><path d="M4.5 8l2.5 2.5 4.5-5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>',
  ],
  [
    'slug'  => 'radio',
    'label' => 'Radio',
    'desc'  => 'Single-choice from a group, always used in a fieldset.',
    'tags'  => ['stable'],
    'icon'  => '<circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.2"/><circle cx="8" cy="8" r="2.5" fill="currentColor"/>',
  ],
  [
    'slug'  => 'toggle',
    'label' => 'Toggle',
    'desc'  => 'Binary on/off switch with smooth animated transition and full ARIA support.',
    'tags'  => ['stable'],
    'icon'  => '<rect x="1" y="5" width="14" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/><circle cx="11.5" cy="8" r="2" fill="currentColor"/>',
  ],
  [
    'slug'  => 'badge',
    'label' => 'Badge',
    'desc'  => 'Status, count, and label indicators in multiple colours and sizes.',
    'tags'  => ['stable'],
    'icon'  => '<rect x="3" y="5" width="10" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/>',
  ],
  [
    'slug'  => 'avatar',
    'label' => 'Avatar',
    'desc'  => 'User image with fallback initials, size variants, and status dot.',
    'tags'  => ['stable'],
    'icon'  => '<circle cx="8" cy="5.5" r="2.5" stroke="currentColor" stroke-width="1.2"/><path d="M2.5 14c0-3.04 2.46-5.5 5.5-5.5s5.5 2.46 5.5 5.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>',
  ],
  [
    'slug'  => 'icon',
    'label' => 'Icon',
    'desc'  => 'Inline SVG icon system with xs/sm/md/lg sizes and colour inheritance.',
    'tags'  => ['stable'],
    'icon'  => '<path d="M8 2l1.8 3.6L14 6.2l-3 2.9.7 4.1L8 11.1l-3.7 2.1.7-4.1-3-2.9 4.2-.6L8 2z" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/>',
  ],
  [
    'slug'  => 'label',
    'label' => 'Label',
    'desc'  => 'Accessible form labels with optional required asterisk.',
    'tags'  => ['stable'],
    'icon'  => '<path d="M3 4h10M8 4v8" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>',
  ],
  [
    'slug'  => 'link',
    'label' => 'Link',
    'desc'  => 'Inline and standalone hyperlink with underline and icon support.',
    'tags'  => ['stable'],
    'icon'  => '<path d="M6.5 9.5a3.5 3.5 0 005 0l2-2a3.5 3.5 0 00-5-5l-1 1" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/><path d="M9.5 6.5a3.5 3.5 0 00-5 0l-2 2a3.5 3.5 0 005 5l1-1" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>',
  ],
  [
    'slug'  => 'spinner',
    'label' => 'Spinner',
    'desc'  => 'Animated loading indicator in three sizes, colour-inheriting.',
    'tags'  => ['stable'],
    'icon'  => '<circle cx="8" cy="8" r="5.5" stroke="currentColor" stroke-width="1.3" stroke-dasharray="16 18" stroke-linecap="round"/>',
  ],
  [
    'slug'  => 'progress',
    'label' => 'Progress',
    'desc'  => 'Determinate and indeterminate linear progress bar.',
    'tags'  => ['stable'],
    'icon'  => '<rect x="2" y="6.5" width="12" height="3" rx="1.5" stroke="currentColor" stroke-width="1.2"/><rect x="2" y="6.5" width="7" height="3" rx="1.5" fill="currentColor" opacity=".35"/>',
  ],
  [
    'slug'  => 'slider',
    'label' => 'Slider',
    'desc'  => 'Range slider with value tooltip and step support.',
    'tags'  => ['stable'],
    'icon'  => '<path d="M2 8h12" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/><circle cx="9" cy="8" r="2" fill="currentColor" stroke="white" stroke-width="1"/>',
  ],
  [
    'slug'  => 'range',
    'label' => 'Range',
    'desc'  => 'Dual-handle range selector for min/max value selection.',
    'tags'  => ['beta'],
    'icon'  => '<path d="M2 8h12" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/><circle cx="5" cy="8" r="2" fill="currentColor" stroke="white" stroke-width="1"/><circle cx="11" cy="8" r="2" fill="currentColor" stroke="white" stroke-width="1"/>',
  ],
  [
    'slug'  => 'switch',
    'label' => 'Switch',
    'desc'  => 'iOS-style binary control, smaller footprint than Toggle.',
    'tags'  => ['stable'],
    'icon'  => '<rect x="1.5" y="5.5" width="13" height="5" rx="2.5" stroke="currentColor" stroke-width="1.2"/><circle cx="10.5" cy="8" r="1.8" fill="currentColor"/>',
  ],
  [
    'slug'  => 'divider',
    'label' => 'Divider',
    'desc'  => 'Horizontal and vertical separator with optional label.',
    'tags'  => ['stable'],
    'icon'  => '<path d="M2 8h12" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>',
  ],
  [
    'slug'  => 'helper-text',
    'label' => 'Helper Text',
    'desc'  => 'Contextual hint or validation message beneath a form field.',
    'tags'  => ['stable'],
    'icon'  => '<circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.2"/><path d="M8 7.5v3.5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/><circle cx="8" cy="5.5" r=".7" fill="currentColor"/>',
  ],
];
?>

<div id="atoms-overview">
  <p class="page-eyebrow">UI · Components</p>
  <h1 class="page-title">Atoms</h1>
  <p class="page-lead">The smallest self-contained UI primitives. Every composite component is built from atoms — use them directly or compose them into higher-level patterns.</p>
</div>

<hr class="rule">

<section id="atoms-grid">
  <div class="comp-grid">
    <?php foreach ($atoms as $atom): ?>
    <a href="/design_guidelines/UI/Atom/<?= $atom['slug'] ?>/<?= $atom['slug'] ?>.php" class="comp-card">
      <div class="comp-card-icon">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><?= $atom['icon'] ?></svg>
      </div>
      <div class="comp-card-body">
        <div class="comp-card-title">
          <?= $atom['label'] ?>
          <?php foreach ($atom['tags'] as $tag): ?>
            <span class="comp-tag comp-tag--<?= $tag ?>"><?= $tag ?></span>
          <?php endforeach; ?>
        </div>
        <div class="comp-card-desc"><?= $atom['desc'] ?></div>
      </div>
      <svg class="comp-card-arrow" width="12" height="12" viewBox="0 0 16 16" fill="none">
        <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </a>
    <?php endforeach; ?>
  </div>
</section>