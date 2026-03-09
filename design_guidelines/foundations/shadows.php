<?php
$pageTitle     = 'Shadows';
$activeSection = 'shadows';
$pageDepth     = 1;
include __DIR__ . '/../includes/layout.php';
?>
<nav class="doc-breadcrumb">
    <a href="../index.php">Home</a><span class="doc-breadcrumb__sep">›</span>
    <span>Foundations</span><span class="doc-breadcrumb__sep">›</span>
    <span class="doc-breadcrumb__current">Shadows</span>
</nav>

<section class="doc-section" id="shadows">
    <div class="doc-eyebrow">Foundations · typography.css</div>
    <h2 class="doc-section-title"><em>Shadows</em></h2>
    <p class="doc-lead">Six elevation levels from a hairline <code>xs</code> to a dramatic <code>modal</code>.</p>

    <div class="doc-block">
        <div class="doc-preview doc-preview--grey" style="gap:20px;flex-wrap:wrap">
            <?php
            $shadows = [
                ['xs',    '0 1px 2px rgba(0,0,0,.08)'],
                ['sm',    '0 2px 4px rgba(0,0,0,.08),0 1px 2px rgba(0,0,0,.06)'],
                ['md',    '0 4px 16px rgba(0,0,0,.10),0 2px 6px rgba(0,0,0,.06)'],
                ['lg',    '0 8px 32px rgba(0,0,0,.12),0 4px 12px rgba(0,0,0,.06)'],
                ['xl',    '0 16px 48px rgba(0,0,0,.14),0 6px 20px rgba(0,0,0,.08)'],
                ['modal', '0 20px 60px rgba(0,0,0,.2),0 8px 24px rgba(0,0,0,.12)'],
            ];
            foreach ($shadows as [$name, $shadow]):
            ?>
            <div style="background:white;border-radius:12px;padding:18px 22px;box-shadow:<?= $shadow ?>;font-size:13px;font-weight:600">
                <?= $name ?>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="doc-code">
            <div class="doc-code__bar"><span class="doc-code__lang">CSS</span><button class="doc-code__copy" onclick="doCopy(this)">Copy</button></div>
            <pre><span class="hl-cls">.card</span>    { box-shadow: <span class="hl-val">var(--shadow-card)</span>; }
<span class="hl-cls">.card:hover</span>{ box-shadow: <span class="hl-val">var(--shadow-hover)</span>; }
<span class="hl-cls">.modal</span>   { box-shadow: <span class="hl-val">var(--shadow-modal)</span>; }</pre>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/layout-footer.php'; ?>
