<?php
/**
 * HolidaySeva — Card Component Demo Page
 * Demonstrates all three card variations:
 *   ① Standard listing cards (Popular homes)
 *   ② Service category cards (Services in Kolkata)
 *   ③ Original/featured cards (HolidaySeva Originals)
 */

// ── Data ─────────────────────────────────────────────────────────

$listing_cards = [
    [
        'title'   => 'Flat in Kolkata',
        'desc'    => '₹13,683 for 2 nights',
        'rating'  => '4.77',
        'badge'   => 'Guest favourite',
        'color'   => '#8B7355,#6B5A3E',
    ],
    [
        'title'   => 'Villa in Kolkata',
        'desc'    => '₹11,526 for 2 nights',
        'rating'  => '4.86',
        'badge'   => 'Guest favourite',
        'color'   => '#5C8A6B,#3D6B50',
    ],
    [
        'title'   => 'Place to stay in Kolkata',
        'desc'    => '₹5,706 for 2 nights',
        'rating'  => '4.95',
        'badge'   => 'Guest favourite',
        'color'   => '#7A6E8A,#5A5070',
    ],
    [
        'title'   => 'Flat in Kolkata',
        'desc'    => '₹6,150 for 2 nights',
        'rating'  => '4.86',
        'badge'   => 'Guest favourite',
        'color'   => '#5B8FA8,#3B6F88',
    ],
    [
        'title'   => 'Flat in Kolkata',
        'desc'    => '₹5,250 for 2 nights',
        'rating'  => '4.98',
        'badge'   => 'Guest favourite',
        'color'   => '#8A7B5C,#6B5C3D',
    ],
    [
        'title'   => 'Apartment in Kolkata',
        'desc'    => '₹8,729 for 2 nights',
        'rating'  => '4.98',
        'badge'   => 'Guest favourite',
        'color'   => '#7C6B8A,#5C4B6A',
    ],
    [
        'title'   => 'Place to stay in Kolkata',
        'desc'    => '₹5,596 for 2 nights',
        'rating'  => '4.91',
        'badge'   => 'Guest favourite',
        'color'   => '#6B8A7C,#4B6A5C',
    ],
];

$service_cards = [
    ['title' => 'Photography',   'status' => '1 available',  'color' => '#C4A882,#9C7C5A'],
    ['title' => 'Chefs',         'status' => 'Coming soon',  'color' => '#D4B896,#B4886A'],
    ['title' => 'Massage',       'status' => 'Coming soon',  'color' => '#C8A88A,#A87860'],
    ['title' => 'Prepared meals','status' => 'Coming soon',  'color' => '#A8C890,#78A860'],
    ['title' => 'Training',      'status' => 'Coming soon',  'color' => '#707880,#505860'],
    ['title' => 'Make-up',       'status' => 'Coming soon',  'color' => '#E8C8B0,#C8A888'],
    ['title' => 'Hair',          'status' => 'Coming soon',  'color' => '#A87855,#785533'],
    ['title' => 'Spa treatments','status' => 'Coming soon',  'color' => '#E8B8C8,#C888A8'],
    ['title' => 'Catering',      'status' => 'Coming soon',  'color' => '#7A9060,#5A7040'],
    ['title' => 'Nails',         'status' => 'Coming soon',  'color' => '#982040,#780020'],
];

$original_cards = [
    [
        'title'  => 'Go backstage at Lolla Brasil with a festival boss',
        'loc'    => 'São Paulo, Brazil',
        'price'  => 'From ₹4,521 / guest',
        'date'   => null,
        'rating' => null,
        'color'  => '#2A2A2A,#1A1A1A',
        'action' => 'share',
    ],
    [
        'title'  => 'Tapas and trophies with Fernando Morientes',
        'loc'    => 'Madrid, Spain',
        'price'  => null,
        'date'   => 'Coming 10 April',
        'rating' => null,
        'color'  => '#1E3A5F,#0E2A4F',
        'action' => 'share',
    ],
    [
        'title'  => 'VIP access to a LALIGA match with Isabel Forner',
        'loc'    => 'Vitoria-Gasteiz, Spain',
        'price'  => null,
        'date'   => 'Coming 30 April',
        'rating' => null,
        'color'  => '#3A1E1E,#2A0E0E',
        'action' => 'share',
    ],
    [
        'title'  => 'Paella and a LALIGA game with Arturo Valls',
        'loc'    => 'València, Spain',
        'price'  => null,
        'date'   => 'Coming 30 April',
        'rating' => null,
        'color'  => '#1A3A2A,#0A2A1A',
        'action' => 'share',
    ],
    [
        'title'  => 'Carve marble with a third-generation sculptor',
        'loc'    => 'Athens, Greece',
        'price'  => 'From ₹6,350 / guest',
        'date'   => null,
        'rating' => '5.0',
        'color'  => '#E8E0D8,#C8C0B8',
        'action' => 'heart',
    ],
    [
        'title'  => 'Learn mixology and cocktail tasting in a speakeasy',
        'loc'    => 'Nice, France',
        'price'  => 'From ₹3,704 / guest',
        'date'   => null,
        'rating' => '4.8',
        'color'  => '#2A1A10,#1A0A00',
        'action' => 'heart',
    ],
    [
        'title'  => 'Experience a sacred Buddhist ritual and yoga class',
        'loc'    => 'Haiya Sub-district, Thailand',
        'price'  => 'From ₹1,399 / guest',
        'date'   => null,
        'rating' => '4.96',
        'color'  => '#E8D8C8,#C8B0A0',
        'action' => 'heart',
    ],
];

// ── SVG Helpers ────────────────────────────────────────────────────

function svg_gradient(string $id, string $from, string $to): string {
    return "<defs><linearGradient id='$id' x1='0%' y1='0%' x2='100%' y2='100%'>"
         . "<stop offset='0%' style='stop-color:$from;stop-opacity:1'/>"
         . "<stop offset='100%' style='stop-color:$to;stop-opacity:1'/>"
         . "</linearGradient></defs>";
}

function placeholder_img(string $color_pair, float $ratio = 1.0): string {
    [$from, $to] = explode(',', $color_pair);
    $id    = 'g' . substr(md5($color_pair . $ratio), 0, 6);
    $h     = round(300 * $ratio);
    $svg   = rawurlencode(
        "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 300 $h'>"
        . svg_gradient($id, $from, $to)
        . "<rect fill='url(#$id)' width='300' height='$h'/>"
        . "</svg>"
    );
    return "data:image/svg+xml,$svg";
}

function star_svg(): string {
    return '<svg viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">'
         . '<path d="M6 1l1.236 2.506L10 3.927l-2 1.949.472 2.751L6 7.5 3.528 8.627 4 5.876 2 3.927l2.764-.421L6 1z"/>'
         . '</svg>';
}

function heart_svg(): string {
    return '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" '
         . 'stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">'
         . '<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>'
         . '</svg>';
}

function share_svg(): string {
    return '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" '
         . 'stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">'
         . '<circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/>'
         . '<line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/>'
         . '</svg>';
}

function arrow_left_svg(): string {
    return '<svg viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"/></svg>';
}

function arrow_right_svg(): string {
    return '<svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Components — HolidaySeva Airframe UI</title>
    <link rel="stylesheet" href="cards.css">
    <style>
        /* ──────────────────────────────────────────────
           PAGE BASE — reset, typography, layout
           ────────────────────────────────────────────── */
        * { margin: 0; padding: 0; box-sizing: border-box; }

        html { scroll-behavior: smooth; }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            background: var(--color-bg);
            color: var(--color-text-primary);
        }

        .page-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 48px 24px 80px;
        }

        /* ──────────────────────────────────────────────
           PAGE HEADER (doc breadcrumb)
           ────────────────────────────────────────────── */
        .page-header {
            margin-bottom: 48px;
            padding-bottom: 24px;
            border-bottom: 1px solid var(--color-border-lighter);
        }

        .page-eyebrow {
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            color: var(--color-text-muted);
            margin-bottom: 8px;
        }

        .page-title {
            font-size: 32px;
            font-weight: 700;
            letter-spacing: -0.8px;
            color: var(--color-text-primary);
            line-height: 1.15;
        }

        .page-desc {
            margin-top: 8px;
            font-size: 15px;
            color: var(--color-text-secondary);
            line-height: 1.6;
        }
    </style>
</head>
<body>
<div class="page-container">

    <!-- Page Header -->
    <div class="page-header">
        <p class="page-eyebrow">Airframe UI · Components</p>
        <h1 class="page-title">Card</h1>
        <p class="page-desc">Three card variations — standard listing, service category, and featured original.</p>
    </div>


    <!-- ════════════════════════════════════════════════════
         SECTION ① — POPULAR HOMES (Standard .card)
         Matches screenshot: cards_variation_2.png
         ════════════════════════════════════════════════════ -->
    <section class="card-section">
        <div class="card-section-header">
            <div>
                <a class="card-section-title-link" href="#">
                    Popular homes in North 24 Parganas &nbsp;→
                </a>
            </div>
            <div class="card-section-nav">
                <button class="card-nav-btn" id="homes-prev" aria-label="Previous">
                    <?= arrow_left_svg() ?>
                </button>
                <button class="card-nav-btn" id="homes-next" aria-label="Next">
                    <?= arrow_right_svg() ?>
                </button>
            </div>
        </div>

        <div class="card-row" id="homes-row">
            <?php foreach ($listing_cards as $i => $card): ?>
            <div class="card">
                <div class="card-header">
                    <img
                        src="<?= placeholder_img($card['color'], 1.0) ?>"
                        alt="<?= htmlspecialchars($card['title']) ?>"
                        loading="lazy"
                    >
                    <?php if (!empty($card['badge'])): ?>
                    <span class="card-badge"><?= htmlspecialchars($card['badge']) ?></span>
                    <?php endif; ?>
                    <button class="card-favorite-button" aria-label="Save to wishlist">
                        <?= heart_svg() ?>
                    </button>
                </div>
                <div class="card-content">
                    <div class="card-meta-row">
                        <h3 class="card-title"><?= htmlspecialchars($card['title']) ?></h3>
                        <?php if (!empty($card['rating'])): ?>
                        <span class="card-rating">
                            <?= star_svg() ?>
                            <?= htmlspecialchars($card['rating']) ?>
                        </span>
                        <?php endif; ?>
                    </div>
                    <?php if (!empty($card['desc'])): ?>
                    <p class="card-price"><strong><?= htmlspecialchars($card['desc']) ?></strong></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>


    <!-- ════════════════════════════════════════════════════
         SECTION ② — SERVICES IN KOLKATA (.card-service)
         Matches screenshot: cards_variation_1.png
         ════════════════════════════════════════════════════ -->
    <section class="card-section">
        <div class="card-section-header">
            <h2 class="card-section-title">Services in Kolkata</h2>
        </div>

        <div class="card-row" id="services-row">
            <?php foreach ($service_cards as $card): ?>
            <div class="card-service">
                <div class="card-service-image">
                    <img
                        src="<?= placeholder_img($card['color'], 1.0) ?>"
                        alt="<?= htmlspecialchars($card['title']) ?>"
                        loading="lazy"
                    >
                </div>
                <div class="card-service-info">
                    <h3 class="card-service-title"><?= htmlspecialchars($card['title']) ?></h3>
                    <p class="card-service-status"><?= htmlspecialchars($card['status']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>


    <!-- ════════════════════════════════════════════════════
         SECTION ③ — HOLIDAYSEVA ORIGINALS (.card-original)
         Matches screenshot: card_variation_3.png
         ════════════════════════════════════════════════════ -->
    <section class="card-section">
        <div class="card-section-header">
            <div>
                <h2 class="card-section-title">HolidaySeva Originals &nbsp;→</h2>
                <p class="card-section-subtitle">Hosted by the most interesting people</p>
            </div>
            <div class="card-section-nav">
                <button class="card-nav-btn" id="originals-prev" aria-label="Previous">
                    <?= arrow_left_svg() ?>
                </button>
                <button class="card-nav-btn" id="originals-next" aria-label="Next">
                    <?= arrow_right_svg() ?>
                </button>
            </div>
        </div>

        <div class="card-row" id="originals-row">
            <?php foreach ($original_cards as $card): ?>
            <div class="card-original">
                <div class="card-header">
                    <img
                        src="<?= placeholder_img($card['color'], 4/3) ?>"
                        alt="<?= htmlspecialchars($card['title']) ?>"
                        loading="lazy"
                    >
                    <span class="card-badge">
                        <span class="card-badge-icon">🪶</span>
                        Original
                    </span>
                    <button class="card-action-button" aria-label="<?= $card['action'] === 'share' ? 'Share' : 'Save' ?>">
                        <?= $card['action'] === 'share' ? share_svg() : heart_svg() ?>
                    </button>
                </div>
                <div class="card-content">
                    <h3 class="card-title"><?= htmlspecialchars($card['title']) ?></h3>
                    <p class="card-description"><?= htmlspecialchars($card['loc']) ?></p>
                    <?php if (!empty($card['date'])): ?>
                        <p class="card-price"><span><?= htmlspecialchars($card['date']) ?></span></p>
                    <?php elseif (!empty($card['price'])): ?>
                        <p class="card-price">
                            <strong><?= htmlspecialchars($card['price']) ?></strong>
                            <?php if (!empty($card['rating'])): ?>
                            &nbsp;·&nbsp;
                            <span class="card-rating" style="display:inline-flex;">
                                <?= star_svg() ?>
                                <?= htmlspecialchars($card['rating']) ?>
                            </span>
                            <?php endif; ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

</div><!-- /.page-container -->

<script>
    // ── Horizontal Scroll Nav ────────────────────────────────────
    function setupRowNav(rowId, prevId, nextId) {
        const row  = document.getElementById(rowId);
        const prev = document.getElementById(prevId);
        const next = document.getElementById(nextId);
        if (!row) return;

        const scrollBy = () => row.clientWidth * 0.75;

        if (prev) prev.addEventListener('click', () => {
            row.scrollBy({ left: -scrollBy(), behavior: 'smooth' });
        });
        if (next) next.addEventListener('click', () => {
            row.scrollBy({ left: scrollBy(), behavior: 'smooth' });
        });
    }

    setupRowNav('homes-row',     'homes-prev',     'homes-next');
    setupRowNav('originals-row', 'originals-prev', 'originals-next');

    // ── Favorite Button Toggle ───────────────────────────────────
    document.querySelectorAll('.card-favorite-button').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            btn.classList.toggle('is-favorited');
        });
    });
</script>
</body>
</html>