<?php
/**
 * layout.php — shared header + sidebar include
 * Usage: include __DIR__ . '/../includes/layout.php';
 * Requires: $pageTitle, $activeSection to be set before including.
 */

// Nav structure — label => [ anchor => link_text ]
$navSections = [
    'Introduction' => [
        'overview'         => ['text' => 'Overview',      'icon' => '✦', 'page' => 'index.php'],
        'getting-started'  => ['text' => 'Getting Started','icon' => '→', 'page' => 'index.php#getting-started'],
    ],
    'Foundations' => [
        'color'      => ['text' => 'Color',      'icon' => '🎨', 'page' => 'foundations/color.php'],
        'typography' => ['text' => 'Typography', 'icon' => 'Tt', 'page' => 'foundations/typography.php'],
        'spacing'    => ['text' => 'Spacing',    'icon' => '↔', 'page' => 'foundations/spacing.php'],
        'shadows'    => ['text' => 'Shadows',    'icon' => '◻', 'page' => 'foundations/shadows.php'],
    ],
    'Components' => [
        'button'         => ['text' => 'Button',          'icon' => '◉',  'page' => 'components/button.php'],
        'badge'          => ['text' => 'Badge',           'icon' => '⬡',  'page' => 'components/badge.php'],
        'avatar'         => ['text' => 'Avatar',          'icon' => '👤', 'page' => 'components/avatar.php'],
        'nav-buttons'    => ['text' => 'Nav Buttons',     'icon' => '←→', 'page' => 'components/nav-buttons.php'],
        'calendar'       => ['text' => 'Calendar',        'icon' => '📅', 'page' => 'components/calendar.php'],
        'listing-card'   => ['text' => 'Listing Card',    'icon' => '🏠', 'page' => 'components/listing-card.php'],
        'card-stack'     => ['text' => 'Card Stack',      'icon' => '⧉',  'page' => 'components/card-stack.php'],
        'gallery'        => ['text' => 'Gallery',         'icon' => '🖼', 'page' => 'components/gallery.php'],
        'booking-card'   => ['text' => 'Booking Card',    'icon' => '💳', 'page' => 'components/booking-card.php'],
        'review-card'    => ['text' => 'Review Card',     'icon' => '★',  'page' => 'components/review-card.php'],
        'modal'          => ['text' => 'Modal',           'icon' => '⬜', 'page' => 'components/modal.php'],
        'dropdown'       => ['text' => 'Dropdown',        'icon' => '▾',  'page' => 'components/dropdown.php'],
        'verified-stamp' => ['text' => 'Verified Stamp',  'icon' => '✓',  'page' => 'components/verified-stamp.php'],
    ],
    'JavaScript' => [
        'js-api'    => ['text' => 'API',    'icon' => '{ }', 'page' => 'javascript/api.php'],
        'js-events' => ['text' => 'Events', 'icon' => '⚡',  'page' => 'javascript/events.php'],
    ],
];

// Resolve base path depth for relative links
$depth = isset($pageDepth) ? $pageDepth : 0;
$base  = str_repeat('../', $depth);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($pageTitle ?? 'Documentation') ?> | HolidaySeva</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="icon" href="<?= $base ?>../Assets/icons/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Circular+Std:wght@400;500;600;700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet" />
    <!-- Framework CSS -->
    <link rel="stylesheet" href="<?= $base ?>../Assets/css/ui-framework.css">
    <!-- Doc shell CSS -->
    <link rel="stylesheet" href="<?= $base ?>css/doc-shell.css">
    <?php if (isset($extraCss)): foreach ($extraCss as $css): ?>
    <link rel="stylesheet" href="<?= $base ?>css/<?= $css ?>">
    <?php endforeach; endif; ?>
</head>
<body>

<!-- ══ HEADER ══════════════════════════════════════════════ -->
<header class="doc-header">
    <a class="doc-header__logo" href="<?= $base ?>index.php">
        <span class="doc-header__logo-mark">H</span>
        HolidaySeva
    </a>
    <span class="doc-header__badge">v 1.1.3</span>
    <nav class="doc-header__nav">
        <a href="<?= $base ?>index.php">Get Started</a>
        <a href="<?= $base ?>foundations/color.php">Foundations</a>
        <a href="<?= $base ?>components/button.php">Components</a>
        <a href="<?= $base ?>javascript/api.php">JavaScript</a>
    </nav>
    <button class="doc-header__menu-toggle" id="sidebarToggle" aria-label="Toggle menu">☰</button>
</header>

<div class="doc-layout">

    <!-- ══ SIDEBAR ═════════════════════════════════════════════ -->
    <aside class="doc-sidebar" id="docSidebar">
        <button class="doc-sidebar__close" id="sidebarClose">✕</button>
        <?php foreach ($navSections as $label => $links): ?>
        <div class="doc-nav-section">
            <span class="doc-nav-label"><?= $label ?></span>
            <?php foreach ($links as $anchor => $item): 
                $isActive = isset($activeSection) && $activeSection === $anchor;
            ?>
            <a class="doc-nav-link<?= $isActive ? ' is-active' : '' ?>"
               href="<?= $base ?><?= $item['page'] ?>">
                <span class="doc-nav-link__icon"><?= $item['icon'] ?></span>
                <?= $item['text'] ?>
            </a>
            <?php endforeach; ?>
        </div>
        <?php endforeach; ?>
    </aside>

    <!-- ══ MAIN ════════════════════════════════════════════════ -->
    <main class="doc-main">
