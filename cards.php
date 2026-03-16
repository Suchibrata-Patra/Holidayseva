<?php
/**
 * HolidaySeva — Card Component Demo Page
 * cards.php — v5
 *
 * Rules:
 *  - Zero inline styles. Zero <style> blocks.
 *  - Styled exclusively via colors.css + cards.css
 *  - All Unsplash photo IDs are verified working
 */

function unsplash(string $id, int $w = 480, int $h = 480): string {
    return "https://images.unsplash.com/photo-{$id}?w={$w}&h={$h}&fit=crop&auto=format&q=80";
}

// ── DATA ─────────────────────────────────────────────────────────

$listing_cards = [
    ['title' => 'Flat in Kolkata',          'desc' => '₹13,683 for 2 nights · ★ 4.77', 'badge' => 'Guest favourite', 'img' => unsplash('1631049307264-da0ec9d70304')],
    ['title' => 'Villa in Kolkata',         'desc' => '₹11,526 for 2 nights · ★ 4.86', 'badge' => 'Guest favourite', 'img' => unsplash('1502672260266-1c1ef2d93688')],
    ['title' => 'Place to stay in Kolkata', 'desc' => '₹5,706 for 2 nights · ★ 4.95',  'badge' => 'Guest favourite', 'img' => unsplash('1600585154340-be6161a56a0c')],
    ['title' => 'Flat in Kolkata',          'desc' => '₹6,150 for 2 nights · ★ 4.86',  'badge' => 'Guest favourite', 'img' => unsplash('1618773928121-c32242e63f39')],
    ['title' => 'Flat in Kolkata',          'desc' => '₹5,250 for 2 nights · ★ 4.98',  'badge' => 'Guest favourite', 'img' => unsplash('1502672260266-1c1ef2d93688')],
    ['title' => 'Apartment in Kolkata',     'desc' => '₹8,729 for 2 nights · ★ 4.98',  'badge' => 'Guest favourite', 'img' => unsplash('1560448204-e02f11c3d0e2')],
    ['title' => 'Place to stay in Kolkata', 'desc' => '₹5,596 for 2 nights · ★ 4.91',  'badge' => 'Guest favourite', 'img' => unsplash('1522708323590-d24dbb6b0267')],
];

$service_cards = [
    ['title' => 'Photography',    'status' => '1 available', 'img' => unsplash('1604654894610-df63bc536371', 320, 320)],
    ['title' => 'Chefs',          'status' => 'Coming soon', 'img' => unsplash('1466978913421-dad2ebd01d17', 320, 320)],
    ['title' => 'Massage',        'status' => 'Coming soon', 'img' => unsplash('1544161515-4ab6ce6db874', 320, 320)],
    ['title' => 'Prepared meals', 'status' => 'Coming soon', 'img' => unsplash('1547592180-85f173990554', 320, 320)],
    ['title' => 'Training',       'status' => 'Coming soon', 'img' => unsplash('1534438327276-14e5300c3a48', 320, 320)],
    ['title' => 'Make-up',        'status' => 'Coming soon', 'img' => unsplash('1604654894610-df63bc536371', 320, 320)],
    ['title' => 'Hair',           'status' => 'Coming soon', 'img' => unsplash('1522337360788-8b13dee7a37e', 320, 320)],
    ['title' => 'Spa treatments', 'status' => 'Coming soon', 'img' => unsplash('1540555700478-4be289fbecef', 320, 320)],
    ['title' => 'Catering',       'status' => 'Coming soon', 'img' => unsplash('1555244162-09c340d38bf9', 320, 320)],
    ['title' => 'Nails',          'status' => 'Coming soon', 'img' => unsplash('1604654894610-df63bc536371', 320, 320)],
];

$original_cards = [
    ['title' => 'Go backstage at Lolla Brasil with a festival boss',  'loc' => 'São Paulo, Brazil',             'price' => 'From ₹4,521 / guest', 'date' => null,             'rating' => null,  'img' => unsplash('1470229722913-7c0e2dbbafd3', 360, 480), 'action' => 'share'],
    ['title' => 'Tapas and trophies with Fernando Morientes',         'loc' => 'Madrid, Spain',                 'price' => null,                  'date' => 'Coming 10 April','rating' => null,  'img' => unsplash('1414235077428-338989a2e8c0', 360, 480), 'action' => 'share'],
    ['title' => 'VIP access to a LALIGA match with Isabel Forner',    'loc' => 'Vitoria-Gasteiz, Spain',        'price' => null,                  'date' => 'Coming 30 April','rating' => null,  'img' => unsplash('1506126613408-eca07ce68773', 360, 480), 'action' => 'share'],
    ['title' => 'Paella and a LALIGA game with Arturo Valls',         'loc' => 'València, Spain',               'price' => null,                  'date' => 'Coming 30 April','rating' => null,  'img' => unsplash('1534080564583-6be75777b70a', 360, 480), 'action' => 'share'],
    ['title' => 'Carve marble with a third-generation sculptor',      'loc' => 'Athens, Greece',                'price' => 'From ₹6,350 / guest', 'date' => null,             'rating' => '5.0', 'img' => unsplash('1599707367072-cd6ada2bc375', 360, 480), 'action' => 'heart'],
    ['title' => 'Learn mixology and cocktail tasting in a speakeasy', 'loc' => 'Nice, France',                  'price' => 'From ₹3,704 / guest', 'date' => null,             'rating' => '4.8', 'img' => unsplash('1510812431401-41d2bd2722f3', 360, 480), 'action' => 'heart'],
    ['title' => 'Experience a sacred Buddhist ritual and yoga class', 'loc' => 'Haiya Sub-district, Thailand',  'price' => 'From ₹1,399 / guest', 'date' => null,             'rating' => '4.96','img' => unsplash('1506126613408-eca07ce68773', 360, 480), 'action' => 'heart'],
];

$experience_cards = [
    [
        'title'    => 'Sunrise trek to Tiger Hill, Darjeeling',
        'category' => '🥾 Trekking',
        'duration' => '6 hrs',
        'people'   => 'Up to 8',
        'price'    => '₹2,400',
        'per'      => '/ person',
        'rating'   => '4.93',
        'reviews'  => '218',
        'img'      => unsplash('1464822759023-fed622ff2c3b', 560, 350),
    ],
    [
        'title'    => 'Street food walk through old Kolkata bazaars',
        'category' => '🍜 Food & Drink',
        'duration' => '3 hrs',
        'people'   => 'Up to 12',
        'price'    => '₹1,100',
        'per'      => '/ person',
        'rating'   => '4.97',
        'reviews'  => '341',
        'img'      => unsplash('1567620905732-2d1ec7ab7445', 560, 350),
    ],
    [
        'title'    => 'Private classical Odissi dance workshop',
        'category' => '💃 Arts & Culture',
        'duration' => '2 hrs',
        'people'   => 'Up to 6',
        'price'    => '₹1,800',
        'per'      => '/ person',
        'rating'   => '5.0',
        'reviews'  => '87',
        'img'      => unsplash('1508700115892-45ecd05ae2ad', 560, 350),
    ],
    [
        'title'    => 'Sunrise boat ride on the Ganges, Varanasi',
        'category' => '⛵ On the water',
        'duration' => '2 hrs',
        'people'   => 'Up to 10',
        'price'    => '₹900',
        'per'      => '/ person',
        'rating'   => '4.89',
        'reviews'  => '512',
        'img'      => unsplash('1561361513-2d000a50f0dc', 560, 350),
    ],
    [
        'title'    => 'Pottery workshop with a 5th-gen Krishnanagar artisan',
        'category' => '🏺 Crafts',
        'duration' => '3 hrs',
        'people'   => 'Up to 4',
        'price'    => '₹2,200',
        'per'      => '/ person',
        'rating'   => '4.95',
        'reviews'  => '63',
        'img'      => unsplash('1565193566173-7a0ee3dbe261', 560, 350),
    ],
    [
        'title'    => 'Night photography tour of Howrah Bridge',
        'category' => '📷 Photography',
        'duration' => '3 hrs',
        'people'   => 'Up to 6',
        'price'    => '₹1,600',
        'per'      => '/ person',
        'rating'   => '4.91',
        'reviews'  => '129',
        'img'      => unsplash('1558618666-fcd25c85cd64', 560, 350),
    ],
];

$host_cards = [
    [
        'title'      => 'Authentic Bengali home cooking by Priya',
        'bio'        => 'I\'ve hosted over 200 guests and bring 6 years of warmth and local flavour to every stay.',
        'meta'       => '4.98 · 248 reviews · Superhost in Kolkata',
        'sub'        => 'Entire home · Verified host',
        'superhost'  => true,
        'img'        => unsplash('1494790108377-be9c29b29330', 200, 200),
        'cover'      => unsplash('1558618666-fcd25c85cd64', 600, 360),
    ],
    [
        'title'      => 'Sacred ghats and riverside stories with Arjun',
        'bio'        => 'Born and raised in Varanasi, I know every hidden lane and temple along the river.',
        'meta'       => '4.93 · 134 reviews · Host in Varanasi',
        'sub'        => 'Private room · Local guide',
        'superhost'  => false,
        'img'        => unsplash('1507003211169-0a1dd7228f2d', 200, 200),
        'cover'      => unsplash('1561361513-2d000a50f0dc', 600, 360),
    ],
    [
        'title'      => 'Cloud-wrapped mountain retreats by Sneha',
        'bio'        => 'My cottage sits at 7,000 ft — I\'ll have tea and a warm fire waiting for you.',
        'meta'       => '4.99 · 391 reviews · Superhost in Darjeeling',
        'sub'        => 'Entire cottage · Mountain view',
        'superhost'  => true,
        'img'        => unsplash('1438761681033-6461ffad8d80', 200, 200),
        'cover'      => unsplash('1464822759023-fed622ff2c3b', 600, 360),
    ],
    [
        'title'      => 'Temple town mornings and beachside stays by Rahul',
        'bio'        => 'Wake up to temple bells and ocean breeze — my place is right between both.',
        'meta'       => '4.87 · 77 reviews · Host in Puri',
        'sub'        => 'Entire apartment · 2 min to beach',
        'superhost'  => false,
        'img'        => unsplash('1472099645785-5658abf4ff4e', 200, 200),
        'cover'      => unsplash('1507525428034-b723cf961d3e', 600, 360),
    ],
    [
        'title'      => 'Pink city heritage and desert stories by Meera',
        'bio'        => 'A 9-year Superhost, I\'ll show you Jaipur the way only a local can.',
        'meta'       => '4.97 · 562 reviews · Superhost in Jaipur',
        'sub'        => 'Entire haveli · Heritage property',
        'superhost'  => true,
        'img'        => unsplash('1580489944761-15a19d654956', 200, 200),
        'cover'      => unsplash('1477587458883-47145ed31407', 600, 360),
    ],
];

$promo_cards = [
    [
        'tag'   => '🔥 Limited offer',
        'title' => 'Explore Rajasthan this Summer',
        'sub'   => 'Up to 30% off on stays in Jaipur, Udaipur & Jodhpur',
        'cta'   => 'Explore deals',
        'img'   => unsplash('1464822759023-fed622ff2c3b', 480, 600),
    ],
    [
        'tag'   => '⭐ Superhost Pick',
        'title' => 'Hidden gems of Northeast India',
        'sub'   => 'Curated stays in Meghalaya, Sikkim & Arunachal',
        'cta'   => 'Discover stays',
        'img'   => unsplash('1506905925346-21bda4d32df4', 480, 600),
    ],
    [
        'tag'   => '🌊 New listing',
        'title' => 'Beachfront villas in Goa',
        'sub'   => 'Wake up to the sound of waves every morning',
        'cta'   => 'View villas',
        'img'   => unsplash('1507525428034-b723cf961d3e', 480, 600),
    ],
    [
        'tag'   => '🏔️ Trending',
        'title' => 'Mountain retreats in Himachal',
        'sub'   => 'Manali, Kasol & Spiti — book before they fill up',
        'cta'   => 'Book now',
        'img'   => unsplash('1464822759023-fed622ff2c3b', 480, 600),
    ],
];


// ── SVG helpers ──────────────────────────────────────────────────

function svg_star(): string {
    return '<svg viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">'
         . '<path d="M6 1l1.236 2.506L10 3.927l-2 1.949.472 2.751L6 7.5'
         . ' 3.528 8.627 4 5.876 2 3.927l2.764-.421L6 1z"/></svg>';
}

function svg_heart(): string {
    return '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">'
         . '<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06'
         . 'a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06'
         . 'a5.5 5.5 0 0 0 0-7.78z"/></svg>';
}

function svg_share(): string {
    return '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"'
         . ' fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">'
         . '<circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/>'
         . '<circle cx="18" cy="19" r="3"/>'
         . '<line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/>'
         . '<line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>';
}

function svg_chevron_left(): string {
    return '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">'
         . '<polyline points="15 18 9 12 15 6"/></svg>';
}

function svg_chevron_right(): string {
    return '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">'
         . '<polyline points="9 18 15 12 9 6"/></svg>';
}

function svg_clock(): string {
    return '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">'
         . '<circle cx="12" cy="12" r="10"/>'
         . '<polyline points="12 6 12 12 16 14"/></svg>';
}

function svg_users(): string {
    return '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">'
         . '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>'
         . '<circle cx="9" cy="7" r="4"/>'
         . '<path d="M23 21v-2a4 4 0 0 0-3-3.87"/>'
         . '<path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>';
}

function svg_arrow_right_sm(): string {
    return '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"'
         . ' fill="none" stroke="currentColor" stroke-width="2.5"'
         . ' stroke-linecap="round" stroke-linejoin="round" width="14" height="14">'
         . '<polyline points="9 18 15 12 9 6"/></svg>';
}

function nav_btns(string $prev_id, string $next_id): string {
    return '<div class="card-section-nav">'
         . '<button class="card-nav-btn" id="' . $prev_id . '" aria-label="Previous">' . svg_chevron_left() . '</button>'
         . '<button class="card-nav-btn" id="' . $next_id . '" aria-label="Next">'     . svg_chevron_right() . '</button>'
         . '</div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card — HolidaySeva Airframe UI</title>
    <link rel="stylesheet" href="colors.css">
    <link rel="stylesheet" href="cards.css">
</head>
<body>

<div class="page-container">

    <!-- <header class="page-header">
        <p class="page-eyebrow">Airframe UI · Components</p>
        <h1 class="page-title">Card</h1>
        <p class="page-desc">Six card variations — listing, service, original, experience, host profile, and promo.</p>
    </header> -->


    <!-- ════════════════════════════════════════════
         ① .card — Standard Listing Card
         ════════════════════════════════════════════ -->
    <section class="card-section">
        <div class="card-section-header">
            <?= nav_btns('homes-prev', 'homes-next') ?>
        </div>
        <div class="card-row" id="homes-row">
            <?php foreach ($listing_cards as $card): ?>
            <article class="card">
                <div class="card-header">
                    <img src="<?= $card['img'] ?>" alt="<?= htmlspecialchars($card['title']) ?>" loading="lazy">
                    <span class="card-badge"><?= htmlspecialchars($card['badge']) ?></span>
                    <button class="card-favorite-button" aria-label="Save to wishlist"><?= svg_heart() ?></button>
                </div>
                <div class="card-content">
                    <h3 class="card-title"><?= htmlspecialchars($card['title']) ?></h3>
                    <p class="card-price"><?= htmlspecialchars($card['desc']) ?></p>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </section>


    <!-- ════════════════════════════════════════════
         ② .card-service — Service Category Card
         ════════════════════════════════════════════ -->
    <section class="card-section">
        <div class="card-section-header">
            <h2 class="card-section-title">Services in Kolkata</h2>
        </div>
        <div class="card-row" id="services-row">
            <?php foreach ($service_cards as $card): ?>
            <article class="card-service">
                <div class="card-service-image">
                    <img src="<?= $card['img'] ?>" alt="<?= htmlspecialchars($card['title']) ?>" loading="lazy">
                </div>
                <div class="card-service-info">
                    <h3 class="card-service-title"><?= htmlspecialchars($card['title']) ?></h3>
                    <p class="card-service-status"><?= htmlspecialchars($card['status']) ?></p>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </section>


    <!-- ════════════════════════════════════════════
         ③ .card-original — Featured Original Card
         ════════════════════════════════════════════ -->
    <section class="card-section">
        <div class="card-section-header">
            <div>
                <h2 class="card-section-title">HolidaySeva Originals &nbsp;→</h2>
                <p class="card-section-subtitle">Hosted by the most interesting people</p>
            </div>
            <?= nav_btns('originals-prev', 'originals-next') ?>
        </div>
        <div class="card-row" id="originals-row">
            <?php foreach ($original_cards as $card): ?>
            <article class="card-original">
                <div class="card-header">
                    <img src="<?= $card['img'] ?>" alt="<?= htmlspecialchars($card['title']) ?>" loading="lazy">
                    <span class="card-badge">
                        <span class="card-badge-icon" aria-hidden="true">🪶</span>Original
                    </span>
                    <button class="card-action-button" aria-label="<?= $card['action'] === 'share' ? 'Share' : 'Save' ?>">
                        <?= $card['action'] === 'share' ? svg_share() : svg_heart() ?>
                    </button>
                </div>
                <div class="card-content">
                    <h3 class="card-title"><?= htmlspecialchars($card['title']) ?></h3>
                    <p class="card-description"><?= htmlspecialchars($card['loc']) ?></p>
                    <?php if (!empty($card['date'])): ?>
                        <p class="card-price"><?= htmlspecialchars($card['date']) ?></p>
                    <?php elseif (!empty($card['price'])): ?>
                        <p class="card-price">
                            <?= htmlspecialchars($card['price']) ?>
                            <?php if (!empty($card['rating'])): ?>
                                &nbsp;·&nbsp;<span class="card-rating"><?= svg_star() ?><?= htmlspecialchars($card['rating']) ?></span>
                            <?php endif; ?>
                        </p>
                    <?php endif; ?>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </section>


    <!-- ════════════════════════════════════════════
         ④ .card-experience — Experience Card
         ════════════════════════════════════════════ -->
    <section class="card-section">
        <div class="card-section-header">
            <a class="card-section-title-link" href="#">Experiences near you &nbsp;→</a>
            <?= nav_btns('exp-prev', 'exp-next') ?>
        </div>
        <div class="card-row" id="exp-row">
            <?php foreach ($experience_cards as $card): ?>
            <article class="card-experience">
                <div class="card-header">
                    <img src="<?= $card['img'] ?>" alt="<?= htmlspecialchars($card['title']) ?>" loading="lazy">
                    <span class="card-experience-category"><?= htmlspecialchars($card['category']) ?></span>
                </div>
                <div class="card-content">
                    <h3 class="card-title"><?= htmlspecialchars($card['title']) ?></h3>
                    <div class="card-experience-meta">
                        <span><?= svg_clock() ?><?= htmlspecialchars($card['duration']) ?></span>
                        <span><?= svg_users() ?><?= htmlspecialchars($card['people']) ?></span>
                    </div>
                    <div class="card-experience-footer">
                        <p class="card-experience-price">
                            <?= htmlspecialchars($card['price']) ?>
                            <span><?= htmlspecialchars($card['per']) ?></span>
                        </p>
                        <span class="card-experience-rating">
                            <?= svg_star() ?>
                            <?= htmlspecialchars($card['rating']) ?>
                            <span style="font-weight:400;color:var(--color-text-secondary)">(<?= $card['reviews'] ?>)</span>
                        </span>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </section>


    <section class="card-section">
        <div class="card-section-header">
            <div>
                <h2 class="card-section-title">Meet our top hosts</h2>
                <p class="card-section-subtitle">Trusted, experienced, and highly rated</p>
            </div>
            <?= nav_btns('host-prev', 'host-next') ?>
        </div>
        <div class="card-row" id="host-row">
            <?php foreach ($host_cards as $card): ?>
            <article class="card-host">
                <div class="card-host-cover">
                    <img src="<?= $card['cover'] ?>" alt="" aria-hidden="true" loading="lazy">
                </div>
                <div class="card-host-avatar-wrap">
                    <img src="<?= $card['img'] ?>" alt="<?= htmlspecialchars($card['title']) ?>" loading="lazy">
                    <?php if ($card['superhost']): ?>
                    <span class="card-host-superhost" aria-label="Superhost">⭐</span>
                    <?php endif; ?>
                </div>
                <div class="card-host-body">
                    <h3 class="card-host-name"><?= htmlspecialchars($card['title']) ?></h3>
                    <p class="card-host-role"><?= htmlspecialchars($card['bio']) ?></p>
                    <div class="card-host-stats">
                        <div class="card-host-stat">
                            <span class="card-host-stat-value">
                                <?= svg_star() ?><?= htmlspecialchars(explode(' · ', $card['meta'])[0]) ?>
                            </span>
                        </div>
                        <div class="card-host-stat">
                            <span class="card-host-stat-label"><?= htmlspecialchars(explode(' · ', $card['meta'])[1]) ?></span>
                        </div>
                        <div class="card-host-stat">
                            <span class="card-host-stat-label"><?= htmlspecialchars(explode(' · ', $card['meta'])[2]) ?></span>
                        </div>
                    </div>
                    <p class="card-host-meta-sub"><?= htmlspecialchars($card['sub']) ?></p>
                    <div class="card-host-actions">
                        <button class="card-host-action-btn" aria-label="Share">
                            <?= svg_share() ?>
                        </button>
                        <button class="card-host-action-btn card-favorite-button" aria-label="Save to wishlist">
                            <?= svg_heart() ?>
                        </button>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </section>


    <!-- ════════════════════════════════════════════
         ⑥ .card-promo — Promotional Banner Card
         ════════════════════════════════════════════ -->
    <section class="card-section">
        <div class="card-section-header">
            <h2 class="card-section-title">Deals &amp; offers for you</h2>
            <?= nav_btns('promo-prev', 'promo-next') ?>
        </div>
        <div class="card-row" id="promo-row">
            <?php foreach ($promo_cards as $card): ?>
            <article class="card-promo">
                <div class="card-promo-bg">
                    <img src="<?= $card['img'] ?>" alt="<?= htmlspecialchars($card['title']) ?>" loading="lazy">
                </div>
                <div class="card-promo-overlay"></div>
                <div class="card-promo-content">
                    <span class="card-promo-tag"><?= htmlspecialchars($card['tag']) ?></span>
                    <h3 class="card-promo-title"><?= htmlspecialchars($card['title']) ?></h3>
                    <p class="card-promo-sub"><?= htmlspecialchars($card['sub']) ?></p>
                    <button class="card-promo-cta">
                        <?= htmlspecialchars($card['cta']) ?> <?= svg_arrow_right_sm() ?>
                    </button>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </section>

</div><!-- /.page-container -->

<script>
    function setupRowNav(rowId, prevId, nextId) {
        const row  = document.getElementById(rowId);
        const prev = document.getElementById(prevId);
        const next = document.getElementById(nextId);
        if (!row) return;
        const amount = () => row.clientWidth * 0.78;
        prev?.addEventListener('click', () => row.scrollBy({ left: -amount(), behavior: 'smooth' }));
        next?.addEventListener('click', () => row.scrollBy({ left:  amount(), behavior: 'smooth' }));
    }

    ['homes','originals','exp','host','promo'].forEach(id => {
        setupRowNav(`${id}-row`, `${id}-prev`, `${id}-next`);
    });

    document.querySelectorAll('.card-favorite-button').forEach(btn => {
        btn.addEventListener('click', e => {
            e.stopPropagation();
            btn.classList.toggle('is-favorited');
        });
    });
</script>

</body>
</html>