<?php
/**
 * HolidaySeva — Card Component Demo Page
 * cards.php
 *
 * Rules:
 *  - Zero inline styles. Zero <style> blocks.
 *  - Styled exclusively by colors.css + cards.css
 *  - All images via verified Unsplash CDN URLs
 */

// ── Unsplash CDN helper ───────────────────────────────────────────
// Uses the stable /photo-{id} CDN endpoint — no API key required.
function unsplash(string $id, int $w = 480, int $h = 480): string {
    return "https://images.unsplash.com/photo-{$id}?w={$w}&h={$h}&fit=crop&auto=format&q=80";
}

// ── DATA ─────────────────────────────────────────────────────────
// All Unsplash photo IDs below are verified public domain / free-to-use.

$listing_cards = [
    [
        'title'  => 'Flat in Kolkata',
        'desc'   => '₹13,683 for 2 nights · ★ 4.77',
        'badge'  => 'Guest favourite',
        'img'    => unsplash('1631049307264-da0ec9d70304'),   // modern bedroom
    ],
    [
        'title'  => 'Villa in Kolkata',
        'desc'   => '₹11,526 for 2 nights · ★ 4.86',
        'badge'  => 'Guest favourite',
        'img'    => unsplash('1613977257363-707ba9578f43'),   // villa exterior pool
    ],
    [
        'title'  => 'Place to stay in Kolkata',
        'desc'   => '₹5,706 for 2 nights · ★ 4.95',
        'badge'  => 'Guest favourite',
        'img'    => unsplash('1600585154340-be6161a56a0c'),   // bright apartment
    ],
    [
        'title'  => 'Flat in Kolkata',
        'desc'   => '₹6,150 for 2 nights · ★ 4.86',
        'badge'  => 'Guest favourite',
        'img'    => unsplash('1618773928121-c32242e63f39'),   // rooftop pool
    ],
    [
        'title'  => 'Flat in Kolkata',
        'desc'   => '₹5,250 for 2 nights · ★ 4.98',
        'badge'  => 'Guest favourite',
        'img'    => unsplash('1502672260266-1c1ef2d93688'),   // cosy living room
    ],
    [
        'title'  => 'Apartment in Kolkata',
        'desc'   => '₹8,729 for 2 nights · ★ 4.98',
        'badge'  => 'Guest favourite',
        'img'    => unsplash('1560448204-e02f11c3d0e2'),      // warm apartment
    ],
    [
        'title'  => 'Place to stay in Kolkata',
        'desc'   => '₹5,596 for 2 nights · ★ 4.91',
        'badge'  => 'Guest favourite',
        'img'    => unsplash('1522708323590-d24dbb6b0267'),   // stylish bedroom
    ],
];

$service_cards = [
    [
        'title'  => 'Photography',
        'status' => '1 available',
        'img'    => unsplash('1542038374416-a55873f2e5ca', 320, 320),  // camera
    ],
    [
        'title'  => 'Chefs',
        'status' => 'Coming soon',
        'img'    => unsplash('1466978913421-dad2ebd01d17', 320, 320),  // chef cooking
    ],
    [
        'title'  => 'Massage',
        'status' => 'Coming soon',
        'img'    => unsplash('1544161515-4ab6ce6db874', 320, 320),     // massage hands
    ],
    [
        'title'  => 'Prepared meals',
        'status' => 'Coming soon',
        'img'    => unsplash('1547592180-85f173990554', 320, 320),     // plated food
    ],
    [
        'title'  => 'Training',
        'status' => 'Coming soon',
        'img'    => unsplash('1534438327276-14e5300c3a48', 320, 320),  // gym / weights
    ],
    [
        'title'  => 'Make-up',
        'status' => 'Coming soon',
        'img'    => unsplash('1487412947147-5cebf100d293', 320, 320),  // makeup artist
    ],
    [
        'title'  => 'Hair',
        'status' => 'Coming soon',
        'img'    => unsplash('1522337360788-8b13dee7a37e', 320, 320),  // hair styling
    ],
    [
        'title'  => 'Spa treatments',
        'status' => 'Coming soon',
        'img'    => unsplash('1540555700478-4be289fbecef', 320, 320),  // spa stones
    ],
    [
        'title'  => 'Catering',
        'status' => 'Coming soon',
        'img'    => unsplash('1555244162-09c340d38bf9', 320, 320),     // catering spread
    ],
    [
        'title'  => 'Nails',
        'status' => 'Coming soon',
        'img'    => unsplash('1604654894610-df63bc536371', 320, 320),  // nail art
    ],
];

$original_cards = [
    [
        'title'  => 'Go backstage at Lolla Brasil with a festival boss',
        'loc'    => 'São Paulo, Brazil',
        'price'  => 'From ₹4,521 / guest',
        'date'   => null,
        'rating' => null,
        'img'    => unsplash('1470229722913-7c0e2dbbafd3', 360, 480),  // concert crowd
        'action' => 'share',
    ],
    [
        'title'  => 'Tapas and trophies with Fernando Morientes',
        'loc'    => 'Madrid, Spain',
        'price'  => null,
        'date'   => 'Coming 10 April',
        'rating' => null,
        'img'    => unsplash('1414235077428-338989a2e8c0', 360, 480),  // tapas spread
        'action' => 'share',
    ],
    [
        'title'  => 'VIP access to a LALIGA match with Isabel Forner',
        'loc'    => 'Vitoria-Gasteiz, Spain',
        'price'  => null,
        'date'   => 'Coming 30 April',
        'rating' => null,
        'img'    => unsplash('1508098682722-e99c43a406b2', 360, 480),  // football stadium
        'action' => 'share',
    ],
    [
        'title'  => 'Paella and a LALIGA game with Arturo Valls',
        'loc'    => 'València, Spain',
        'price'  => null,
        'date'   => 'Coming 30 April',
        'rating' => null,
        'img'    => unsplash('1534080564583-6be75777b70a', 360, 480),  // paella pan
        'action' => 'share',
    ],
    [
        'title'  => 'Carve marble with a third-generation sculptor',
        'loc'    => 'Athens, Greece',
        'price'  => 'From ₹6,350 / guest',
        'date'   => null,
        'rating' => '5.0',
        'img'    => unsplash('1599707367072-cd6ada2bc375', 360, 480),  // sculpture workshop
        'action' => 'heart',
    ],
    [
        'title'  => 'Learn mixology and cocktail tasting in a speakeasy',
        'loc'    => 'Nice, France',
        'price'  => 'From ₹3,704 / guest',
        'date'   => null,
        'rating' => '4.8',
        'img'    => unsplash('1510812431401-41d2bd2722f3', 360, 480),  // bartender cocktail
        'action' => 'heart',
    ],
    [
        'title'  => 'Experience a sacred Buddhist ritual and yoga class',
        'loc'    => 'Haiya Sub-district, Thailand',
        'price'  => 'From ₹1,399 / guest',
        'date'   => null,
        'rating' => '4.96',
        'img'    => unsplash('1506126613408-eca07ce68773', 360, 480),  // yoga meditation
        'action' => 'heart',
    ],
];


// ── SVG helpers ──────────────────────────────────────────────────

function svg_star(): string {
    return '<svg viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">'
         . '<path d="M6 1l1.236 2.506L10 3.927l-2 1.949.472 2.751L6 7.5 3.528 8.627 4 5.876 2 3.927l2.764-.421L6 1z"/>'
         . '</svg>';
}

function svg_heart(): string {
    return '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">'
         . '<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06'
         . 'a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06'
         . 'a5.5 5.5 0 0 0 0-7.78z"/>'
         . '</svg>';
}

function svg_share(): string {
    return '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"'
         . ' fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">'
         . '<circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/>'
         . '<line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/>'
         . '<line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/>'
         . '</svg>';
}

function svg_chevron_left(): string {
    return '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">'
         . '<polyline points="15 18 9 12 15 6"/>'
         . '</svg>';
}

function svg_chevron_right(): string {
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
    <title>Card — HolidaySeva Airframe UI</title>
    <!-- Load color tokens first, then component styles -->
    <link rel="stylesheet" href="colors.css">
    <link rel="stylesheet" href="cards.css">
</head>
<body>

<div class="page-container">

    <header class="page-header">
        <p class="page-eyebrow">Airframe UI · Components</p>
        <h1 class="page-title">Card</h1>
        <p class="page-desc">Three card variations — standard listing, service category, and featured original.</p>
    </header>


    <!-- ════════════════════════════════════════════════════════
         SECTION ① — POPULAR HOMES
         .card  |  badge + heart + title + price·rating row
         ════════════════════════════════════════════════════════ -->
    <section class="card-section">

        <div class="card-section-header">
            <a class="card-section-title-link" href="#">
                Popular homes in North 24 Parganas &nbsp;→
            </a>
            <div class="card-section-nav">
                <button class="card-nav-btn" id="homes-prev" aria-label="Previous">
                    <?= svg_chevron_left() ?>
                </button>
                <button class="card-nav-btn" id="homes-next" aria-label="Next">
                    <?= svg_chevron_right() ?>
                </button>
            </div>
        </div>

        <div class="card-row" id="homes-row">
            <?php foreach ($listing_cards as $card): ?>
            <article class="card">
                <div class="card-header">
                    <img
                        src="<?= $card['img'] ?>"
                        alt="<?= htmlspecialchars($card['title']) ?>"
                        loading="lazy"
                    >
                    <span class="card-badge"><?= htmlspecialchars($card['badge']) ?></span>
                    <button class="card-favorite-button" aria-label="Save to wishlist">
                        <?= svg_heart() ?>
                    </button>
                </div>
                <div class="card-content">
                    <h3 class="card-title"><?= htmlspecialchars($card['title']) ?></h3>
                    <p class="card-price"><?= htmlspecialchars($card['desc']) ?></p>
                </div>
            </article>
            <?php endforeach; ?>
        </div>

    </section>


    <!-- ════════════════════════════════════════════════════════
         SECTION ② — SERVICES IN KOLKATA
         .card-service  |  square image + name + status
         ════════════════════════════════════════════════════════ -->
    <section class="card-section">

        <div class="card-section-header">
            <h2 class="card-section-title">Services in Kolkata</h2>
        </div>

        <div class="card-row" id="services-row">
            <?php foreach ($service_cards as $card): ?>
            <article class="card-service">
                <div class="card-service-image">
                    <img
                        src="<?= $card['img'] ?>"
                        alt="<?= htmlspecialchars($card['title']) ?>"
                        loading="lazy"
                    >
                </div>
                <div class="card-service-info">
                    <h3 class="card-service-title"><?= htmlspecialchars($card['title']) ?></h3>
                    <p class="card-service-status"><?= htmlspecialchars($card['status']) ?></p>
                </div>
            </article>
            <?php endforeach; ?>
        </div>

    </section>


    <!-- ════════════════════════════════════════════════════════
         SECTION ③ — HOLIDAYSEVA ORIGINALS
         .card-original  |  portrait + 🪶 badge + action
         ════════════════════════════════════════════════════════ -->
    <section class="card-section">

        <div class="card-section-header">
            <div>
                <h2 class="card-section-title">HolidaySeva Originals &nbsp;→</h2>
                <p class="card-section-subtitle">Hosted by the most interesting people</p>
            </div>
            <div class="card-section-nav">
                <button class="card-nav-btn" id="originals-prev" aria-label="Previous">
                    <?= svg_chevron_left() ?>
                </button>
                <button class="card-nav-btn" id="originals-next" aria-label="Next">
                    <?= svg_chevron_right() ?>
                </button>
            </div>
        </div>

        <div class="card-row" id="originals-row">
            <?php foreach ($original_cards as $card): ?>
            <article class="card-original">
                <div class="card-header">
                    <img
                        src="<?= $card['img'] ?>"
                        alt="<?= htmlspecialchars($card['title']) ?>"
                        loading="lazy"
                    >
                    <span class="card-badge">
                        <span class="card-badge-icon" aria-hidden="true">🪶</span>
                        Original
                    </span>
                    <button
                        class="card-action-button"
                        aria-label="<?= $card['action'] === 'share' ? 'Share' : 'Save' ?>"
                    >
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
                                &nbsp;·&nbsp;
                                <span class="card-rating">
                                    <?= svg_star() ?><?= htmlspecialchars($card['rating']) ?>
                                </span>
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
    // Horizontal scroll nav
    function setupRowNav(rowId, prevId, nextId) {
        const row  = document.getElementById(rowId);
        const prev = document.getElementById(prevId);
        const next = document.getElementById(nextId);
        if (!row) return;
        const amount = () => row.clientWidth * 0.78;
        prev?.addEventListener('click', () => row.scrollBy({ left: -amount(), behavior: 'smooth' }));
        next?.addEventListener('click', () => row.scrollBy({ left:  amount(), behavior: 'smooth' }));
    }

    setupRowNav('homes-row',     'homes-prev',     'homes-next');
    setupRowNav('originals-row', 'originals-prev', 'originals-next');

    // Heart toggle
    document.querySelectorAll('.card-favorite-button').forEach(btn => {
        btn.addEventListener('click', e => {
            e.stopPropagation();
            btn.classList.toggle('is-favorited');
        });
    });
</script>

</body>
</html>