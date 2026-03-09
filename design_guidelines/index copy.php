<?php
$pageTitle    = 'Overview — Getting Started';
$activeSection = 'overview';
$pageDepth    = 0;
include __DIR__ . '/includes/layout.php';
?>

<!-- ── HERO ───────────────────────────────────────────────── -->
<div class="doc-hero" id="overview">
    <div class="doc-hero__eyebrow">HolidaySeva Design System</div>
    <h1 class="doc-hero__title">Build <em>beautiful</em><br>travel interfaces</h1>
    <p class="doc-hero__desc">
        A focused component library for holiday and travel products — clean tokens,
        Airbnb-inspired patterns, and zero dependencies beyond one CSS file and one JS file.
    </p>
    <div class="doc-hero__tags">
        <span class="doc-hero__tag">Vanilla JS</span>
        <span class="doc-hero__tag">CSS Variables</span>
        <span class="doc-hero__tag">BEM Classes</span>
        <span class="doc-hero__tag">v1.1.3</span>
    </div>
</div>

<!-- ── GETTING STARTED ────────────────────────────────────── -->
<section class="doc-section" id="getting-started">
    <h2 class="doc-section-title">Getting <em>Started</em></h2>
    <p class="doc-lead">Two lines and you're live. Import the master stylesheet, then add the script just before <code>&lt;/body&gt;</code>.</p>

    <div class="doc-block">
        <div class="doc-preview doc-preview--grey">
            <div class="doc-steps">
                <div class="doc-step">
                    <div class="doc-step__num"></div>
                    <div class="doc-step__body">
                        <div class="doc-step__title">Import the StyleSheet</div>
                        <div class="doc-step__desc">Copy all CSS files into your project. Then add the single master import to your <code>&lt;head&gt;</code>.</div>
                    </div>
                </div>
                <div class="doc-step">
                    <div class="doc-step__num"></div>
                    <div class="doc-step__body">
                        <div class="doc-step__title">Add the script</div>
                        <div class="doc-step__desc">Drop <code>airframe.js</code> just before <code>&lt;/body&gt;</code>. It auto-inits all interactive components.</div>
                    </div>
                </div>
                <div class="doc-step">
                    <div class="doc-step__num"></div>
                    <div class="doc-step__body">
                        <div class="doc-step__title">Use class names</div>
                        <div class="doc-step__desc">Every component uses BEM-style classes. No JavaScript configuration needed for static components.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="doc-code">
            <div class="doc-code__bar">
                <span class="doc-code__lang">HTML</span>
                <button class="doc-code__copy" onclick="doCopy(this)">Copy</button>
            </div>
            <pre><span class="hl-cmt">&lt;!-- In &lt;head&gt; --&gt;</span>
<span class="hl-tag">&lt;link</span> <span class="hl-attr">rel</span>=<span class="hl-str">"stylesheet"</span> <span class="hl-attr">href</span>=<span class="hl-str">"Assets/css/ui-framework.css"</span> <span class="hl-tag">/&gt;</span>

<span class="hl-cmt">&lt;!-- Before &lt;/body&gt; --&gt;</span>
<span class="hl-tag">&lt;script</span> <span class="hl-attr">src</span>=<span class="hl-str">"Assets/js/airframe.js"</span><span class="hl-tag">&gt;&lt;/script&gt;</span></pre>
        </div>
    </div>

    <div class="doc-callout doc-callout--info">
        <strong>Always use tokens — never raw hex.</strong> Write <code>var(--color-primary)</code> instead of <code>#FF385C</code>. This keeps theming consistent across the entire system.
    </div>

    <div class="doc-callout doc-callout--warn" style="margin-top:12px">
        <strong>Script name fix:</strong> The JS file is <code>airframe.js</code> (in <code>Assets/js/</code>), not <code>HolidaySeva.js</code>. The old docs referenced the wrong filename — that's why interactive components weren't working.
    </div>
</section>

<!-- ── QUICK LINKS ────────────────────────────────────────── -->
<section class="doc-section" id="quick-links">
    <h2 class="doc-section-title">Explore the <em>System</em></h2>
    <p class="doc-lead">Jump straight to the section you need.</p>

    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:12px;margin-top:8px">
        <?php
        $cards = [
            ['🎨','Color',       'foundations/color.php',           'All brand, semantic, and surface tokens'],
            ['Tt','Typography',  'foundations/typography.php',       'Fluid type scale from xs → 4xl'],
            ['◉', 'Button',     'components/button.php',            '7 variants × 4 sizes'],
            ['📅','Calendar',   'components/calendar.php',          'Dual-month date range picker'],
            ['🏠','Listing Card','components/listing-card.php',      'Property card with wishlist'],
            ['{ }','JS API',    'javascript/api.php',               'All public functions & events'],
        ];
        foreach ($cards as [$icon, $name, $href, $desc]):
        ?>
        <a href="<?= $href ?>" style="display:block;background:white;border:1px solid var(--doc-border);border-radius:12px;padding:20px;text-decoration:none;transition:box-shadow 150ms;color:inherit" onmouseover="this.style.boxShadow='0 4px 16px rgba(0,0,0,.10)'" onmouseout="this.style.boxShadow='none'">
            <div style="font-size:22px;margin-bottom:8px"><?= $icon ?></div>
            <div style="font-size:14px;font-weight:700;margin-bottom:4px"><?= $name ?></div>
            <div style="font-size:12px;color:var(--doc-muted)"><?= $desc ?></div>
        </a>
        <?php endforeach; ?>
    </div>
</section>

<?php include __DIR__ . '/includes/layout-footer.php'; ?>
