<?php
/**
 * HolidaySeva — Card Component Demo Page
 * cards.php
 *
 * RULES:
 *  - Zero inline styles. Zero <style> blocks.
 *  - All visuals controlled exclusively by cards.css
 *  - Images use Unsplash public source URLs (no API key needed)
 */

// ── Unsplash Source URL helper ────────────────────────────────────
// format: https://images.unsplash.com/photo-{id}?w=400&h=400&fit=crop&auto=format
function unsplash(string $id, int $w = 400, int $h = 400): string {
    return "https://images.unsplash.com/photo-{$id}?w={$w}&h={$h}&fit=crop&auto=format&q=80";
}

// ── Data ──────────────────────────────────────────────────────────

$listing_cards = [
    [
        'title'  => 'Flat in Kolkata',
        'desc'   => '₹13,683 for 2 nights',
        'rating' => '4.77',
        'badge'  => 'Guest favourite',
        'img'    => unsplash('1631049307264-da0ec9d70304'),  // modern bedroom
    ],
    [
        'title'  => 'Villa in Kolkata',
        'desc'   => '₹11,526 for 2 nights',
        'rating' => '4.86',
        'badge'  => 'Guest favourite',
        'img'    => unsplash('1582268611958-ebfd161ef9cf'),  // villa with pool
    ],
    [
        'title'  => 'Place to stay in Kolkata',
        'desc'   => '₹5,706 for 2 nights',
        'rating' => '4.95',
        'badge'  => 'Guest favourite',
        'img'    => unsplash('1600585154340-be6161a56a0c'),  // cosy apartment
    ],
    [
        'title'  => 'Flat in Kolkata',
        'desc'   => '₹6,150 for 2 nights',
        'rating' => '4.86',
        'badge'  => 'Guest favourite',
        'img'    => unsplash('1556909114-f6e7ad7d3136'),  // rooftop pool flat
    ],
    [
        'title'  => 'Flat in Kolkata',
        'desc'   => '₹5,250 for 2 nights',
        'rating' => '4.98',
        'badge'  => 'Guest favourite',
        'img'    => unsplash('1502672260266-1c1ef2d93688'),  // living room
    ],
    [
        'title'  => 'Apartment in Kolkata',
        'desc'   => '₹8,729 for 2 nights',
        'rating' => '4.98',
        'badge'  => 'Guest favourite',
        'img'    => unsplash('1560448204-e02f11c3d0e2'),  // warm apartment
    ],
    [
        'title'  => 'Place to stay in Kolkata',
        'desc'   => '₹5,596 for 2 nights',
        'rating' => '4.91',
        'badge'  => 'Guest favourite',
        'img'    => unsplash('1522708323590-d24dbb6b0267'),  // stylish room
    ],
];

$service_cards = [
    [
        'title'  => 'Photography',
        'status' => '1 available',
        'img'    => unsplash('1452457807411-4d1a7a674891'),  // camera
    ],
    [
        'title'  => 'Chefs',
        'status' => 'Coming soon',
        'img'    => unsplash('1556909114-35ef64e4b8fc'),  // chef plating food
    ],
    [
        'title'  => 'Massage',
        'status' => 'Coming soon',
        'img'    => unsplash('1544161515-4ab6ce6db874'),  // massage hands
    ],
    [
        'title'  => 'Prepared meals',
        'status' => 'Coming soon',
        'img'    => unsplash('1504674900247-0877df9cc836'),  // plated meal
    ],
    [
        'title'  => 'Training',
        'status' => 'Coming soon',
        'img'    => unsplash('1571019613454-1cb2f99b2d8b'),  // gym dumbbell
    ],
    [
        'title'  => 'Make-up',
        'status' => 'Coming soon',
        'img'    => unsplash('1487412947147-5cebf100d293'),  // makeup artist
    ],
    [
        'title'  => 'Hair',
        'status' => 'Coming soon',
        'img'    => unsplash('1522337360788-8b13dee7a37e'),  // hair styling
    ],
    [
        'title'  => 'Spa treatments',
        'status' => 'Coming soon',
        'img'    => unsplash('1540555700478-4be289fbecef'),  // spa stones
    ],
    [
        'title'  => 'Catering',
        'status' => 'Coming soon',
        'img'    => unsplash('1555244162-09c340d38bf9'),  // catering spread
    ],
    [
        'title'  => 'Nails',
        'status' => 'Coming soon',
        'img'    => unsplash('1604654894610-df63bc536371'),  // nail art
    ],
];

$original_cards = [
    [
        'title'  => 'Go backstage at Lolla Brasil with a festival boss',
        'loc'    => 'São Paulo, Brazil',
        'price'  => 'From ₹4,521 / guest',
        'date'   => null,
        'rating' => null,
        'img'    => unsplash('1470229722913-7c0e2dbbafd3', 300, 400),  // concert crowd
        'action' => 'share',
    ],
    [
        'title'  => 'Tapas and trophies with Fernando Morientes',
        'loc'    => 'Madrid, Spain',
        'price'  => null,
        'date'   => 'Coming 10 April',
        'rating' => null,
        'img'    => unsplash('1414235077428-338989a2e8c0', 300, 400),  // tapas food
        'action' => 'share',
    ],
    [
        'title'  => 'VIP access to a LALIGA match with Isabel Forner',
        'loc'    => 'Vitoria-Gasteiz, Spain',
        'price'  => null,
        'date'   => 'Coming 30 April',
        'rating' => null,
        'img'    => unsplash('1522778119026-4f7e85ef3b28', 300, 400),  // football stadium
        'action' => 'share',
    ],
    [
        'title'  => 'Paella and a LALIGA game with Arturo Valls',
        'loc'    => 'València, Spain',
        'price'  => null,
        'date'   => 'Coming 30 April',
        'rating' => null,
        'img'    => unsplash('1534080564583-6be75777b70a', 300, 400),  // paella pan
        'action' => 'share',
    ],
    [
        'title'  => 'Carve marble with a third-generation sculptor',
        'loc'    => 'Athens, Greece',
        'price'  => 'From ₹6,350 / guest',
        'date'   => null,
        'rating' => '5.0',
        'img'    => unsplash('1581337204873-ef36aa186caa', 300, 400),  // marble sculpture
        'action' => 'heart',
    ],
    [
        'title'  => 'Learn mixology and cocktail tasting in a speakeasy',
        'loc'    => 'Nice, France',
        'price'  => 'From ₹3,704 / guest',
        'date'   => null,
        'rating' => '4.8',
        'img'    => unsplash('1574096079513-d8259312b785', 300, 400),  // cocktail bartender
        'action' => 'heart',
    ],
    [
        'title'  => 'Experience a sacred Buddhist ritual and yoga class',
        'loc'    => 'Haiya Sub-district, Thailand',
        'price'  => 'From ₹1,399 / guest',
        'date'   => null,
        'rating' => '4.96',
        'img'    => unsplash('1506126613408-eca07ce68773', 300, 400),  // yoga meditation
        'action' => 'heart',
    ],
];

// ── SVG Partials ─────────────────────────────────────────────────

function svg_star(): string {
    return '<svg viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">'
         . '<path d="M6 1l1.236 2.506L10 3.927l-2 1.949.472 2.751L6 7.5 3.528 8.627 4 5.876 2 3.927l2.764-.421L6 1z"/>'
         . '</svg>';
}

function svg_heart(): string {
    return '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none"'
         . ' stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">'
         . '<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>'
         . '</svg>';
}

function svg_share(): string {
    return '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none"'
         . ' stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">'
         . '<circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/>'
         . '<line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/>'
         . '<line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/>'
         . '</svg>';
}

function svg_arrow_left(): string {
    return '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">'
         . '<polyline points="15 18 9 12 15 6"/>'
         . '</svg>';
}

function svg_arrow_right(): string {
    return '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">'
         . '<polyline points="9 18 15 12 9 6"/>'
         . '</svg>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Components — HolidaySeva Airframe UI</title>
    <link rel="stylesheet" href="cards.css">
</head>
<body>

<div class="page-container">

    <header class="page-header">
        <p class="page-eyebrow">Airframe UI · Components</p>
        <h1 class="page-title">Card</h1>
        <p class="page-desc">Three card variations — standard listing, service category, and featured original.</p>
    </header>


    <!-- ═══════════════════════════════════════════════════════════
         SECTION ① — POPULAR HOMES
         Variation: .card  (listing card — badge, heart, rating)
         ═══════════════════════════════════════════════════════════ -->
    <section class="card-section">

        <div class="card-section-header">
            <a class="card-section-title-link" href="#">
                Popular homes in North 24 Parganas &nbsp;→
            </a>
            <div class="card-section-nav">
                <button class="card-nav-btn" id="homes-prev" aria-label="Scroll left"><?= svg_arrow_left() ?></button>
                <button class="card-nav-btn" id="homes-next" aria-label="Scroll right"><?= svg_arrow_right() ?></button>
            </div>
        </div>

        <div class="card-row" id="homes-row">
            <?php foreach ($listing_cards as $card): ?>
            <article class="card">
                <div class="card-header">
                    <img src="<?= $card['img'] ?>" alt="<?= htmlspecialchars($card['title']) ?>" loading="lazy">
                    <span class="card-badge"><?= htmlspecialchars($card['badge']) ?></span>
                    <button class="card-favorite-button" aria-label="Save to wishlist">
                        <?= svg_heart() ?>
                    </button>
                </div>
                <div class="card-content">
                    <div class="card-meta-row">
                        <h3 class="card-title"><?= htmlspecialchars($card['title']) ?></h3>
                        <span class="card-rating"><?= svg_star() ?> <?= htmlspecialchars($card['rating']) ?></span>
                    </div>
                    <p class="card-price"><strong><?= htmlspecialchars($card['desc']) ?></strong></p>
                </div>
            </article>
            <?php endforeach; ?>
        </div>

    </section>


    <!-- ═══════════════════════════════════════════════════════════
         SECTION ② — SERVICES IN KOLKATA
         Variation: .card-service  (compact square category card)
         ═══════════════════════════════════════════════════════════ -->
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


    <!-- ═══════════════════════════════════════════════════════════
         SECTION ③ — HOLIDAYSEVA ORIGINALS
         Variation: .card-original  (editorial card — badge + action)
         ═══════════════════════════════════════════════════════════ -->
    <section class="card-section">

        <div class="card-section-header">
            <div>
                <h2 class="card-section-title">HolidaySeva Originals &nbsp;→</h2>
                <p class="card-section-subtitle">Hosted by the most interesting people</p>
            </div>
            <div class="card-section-nav">
                <button class="card-nav-btn" id="originals-prev" aria-label="Scroll left"><?= svg_arrow_left() ?></button>
                <button class="card-nav-btn" id="originals-next" aria-label="Scroll right"><?= svg_arrow_right() ?></button>
            </div>
        </div>

        <div class="card-row" id="originals-row">
            <?php foreach ($original_cards as $card): ?>
            <article class="card-original">
                <div class="card-header">
                    <img src="<?= $card['img'] ?>" alt="<?= htmlspecialchars($card['title']) ?>" loading="lazy">
                    <span class="card-badge">
                        <span class="card-badge-icon" aria-hidden="true">🪶</span>
                        Original
                    </span>
                    <button class="card-action-button" aria-label="<?= $card['action'] === 'share' ? 'Share' : 'Save' ?>">
                        <?= $card['action'] === 'share' ? svg_share() : svg_heart() ?>
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
                                &nbsp;·&nbsp;<span class="card-rating"><?= svg_star() ?> <?= htmlspecialchars($card['rating']) ?></span>
                            <?php endif; ?>
                        </p>
                    <?php endif; ?>
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
        const amount = () => row.clientWidth * 0.75;
        prev?.addEventListener('click', () => row.scrollBy({ left: -amount(), behavior: 'smooth' }));
        next?.addEventListener('click', () => row.scrollBy({ left:  amount(), behavior: 'smooth' }));
    }

    setupRowNav('homes-row',     'homes-prev',     'homes-next');
    setupRowNav('originals-row', 'originals-prev', 'originals-next');

    document.querySelectorAll('.card-favorite-button').forEach(btn => {
        btn.addEventListener('click', e => {
            e.stopPropagation();
            btn.classList.toggle('is-favorited');
        });
    });
</script>

</body>
</html>