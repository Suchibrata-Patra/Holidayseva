<?php
$pageTitle     = 'Spacing';
$activeSection = 'spacing';
$pageDepth     = 1;
include __DIR__ . '/../includes/layout.php';
?>
<nav class="doc-breadcrumb">
    <a href="../index.php">Home</a><span class="doc-breadcrumb__sep">›</span>
    <span>Foundations</span><span class="doc-breadcrumb__sep">›</span>
    <span class="doc-breadcrumb__current">Spacing</span>
</nav>

<section class="doc-section" id="spacing">
    <div class="doc-eyebrow">Foundations · spacing.css</div>
    <h2 class="doc-section-title"><em>Spacing</em></h2>
    <p class="doc-lead">Eight spacing steps on a 4px base grid. Always compose layouts using spacing tokens.</p>

    <div class="doc-block">
        <div class="doc-preview doc-preview--grey" style="flex-direction:column;gap:12px;align-items:flex-start">
            <div style="display:flex;align-items:center;gap:16px;flex-wrap:wrap">
                <?php
                $steps = [
                    ['--space-xs',  '4px',  4],
                    ['--space-sm',  '8px',  8],
                    ['--space-md',  '16px', 16],
                    ['--space-lg',  '24px', 24],
                    ['--space-xl',  '32px', 32],
                    ['--space-2xl', '48px', 48],
                    ['--space-3xl', '64px', 64],
                ];
                foreach ($steps as [$token, $px, $w]):
                ?>
                <div style="display:flex;align-items:center;gap:8px">
                    <div style="width:<?= $w ?>px;height:20px;background:#FF385C;border-radius:2px"></div>
                    <span style="font-family:monospace;font-size:12px;color:#717171"><?= $token ?> · <?= $px ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="doc-code">
            <div class="doc-code__bar"><span class="doc-code__lang">CSS</span><button class="doc-code__copy" onclick="doCopy(this)">Copy</button></div>
            <pre><span class="hl-cls">.card__body</span> { padding: <span class="hl-val">var(--space-lg)</span>; }
<span class="hl-cls">.stack</span>      { gap: <span class="hl-val">var(--space-md)</span>; }
<span class="hl-cls">.section</span>   { margin-bottom: <span class="hl-val">var(--space-3xl)</span>; }</pre>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/layout-footer.php'; ?>