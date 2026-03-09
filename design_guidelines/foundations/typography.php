<?php
$pageTitle     = 'Typography';
$activeSection = 'typography';
$pageDepth     = 1;
include __DIR__ . '/../includes/layout.php';
?>

<nav class="doc-breadcrumb">
    <a href="../index.php">Home</a>
    <span class="doc-breadcrumb__sep">›</span>
    <span>Foundations</span>
    <span class="doc-breadcrumb__sep">›</span>
    <span class="doc-breadcrumb__current">Typography</span>
</nav>

<section class="doc-section" id="typography">
    <div class="doc-eyebrow">Foundations · typography.css</div>
    <h2 class="doc-section-title"><em>Typography</em></h2>
    <p class="doc-lead">Circular Std with a fluid clamp-based type scale. Seven steps from <code>--text-xs</code> to <code>--text-4xl</code>.</p>

    <div class="doc-block">
        <div class="doc-preview doc-preview--col" style="gap:0">
            <?php
            $scale = [
                ['clamp(2.25rem,3.5vw+1rem,3.75rem)', '700', '-0.03em', 'Display 4xl', '--text-4xl · 700'],
                ['clamp(1.875rem,2.5vw+1rem,3rem)',   '700', '-0.03em', 'Heading 3xl', '--text-3xl · 700'],
                ['clamp(1.5rem,2vw+1rem,2.25rem)',    '600', '-0.02em', 'Heading 2xl', '--text-2xl · 600'],
                ['clamp(1.25rem,1.5vw+1rem,1.75rem)', '600', '0',       'Title xl',    '--text-xl · 600'],
                ['clamp(1.125rem,1.2vw+0.9rem,1.375rem)','600','0',     'Title lg',    '--text-lg · 600'],
                ['clamp(0.875rem,0.8vw+0.7rem,1rem)', '400', '0',       'Body base — The quick brown fox jumps over the lazy dog.', '--text-base · 400'],
                ['clamp(0.75rem,0.6vw+0.6rem,0.875rem)','400','0',      'Small sm — Caption text and secondary labels.', '--text-sm · 400'],
            ];
            foreach ($scale as [$size, $weight, $tracking, $label, $meta]):
            ?>
            <div style="padding:14px 28px;border-bottom:1px solid #f0f0f0;display:flex;align-items:baseline;justify-content:space-between;gap:20px">
                <span style="font-size:<?= $size ?>;font-weight:<?= $weight ?>;letter-spacing:<?= $tracking ?>;color:#222"><?= $label ?></span>
                <span style="font-family:monospace;font-size:11px;color:#999;white-space:nowrap;flex-shrink:0"><?= $meta ?></span>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="doc-code">
            <div class="doc-code__bar"><span class="doc-code__lang">CSS</span><button class="doc-code__copy" onclick="doCopy(this)">Copy</button></div>
            <pre><span class="hl-cls">.heading</span> {
  font-size: <span class="hl-val">var(--text-2xl)</span>;
  font-weight: <span class="hl-val">var(--weight-bold)</span>;
  letter-spacing: <span class="hl-val">var(--tracking-tight)</span>;
  line-height: <span class="hl-val">var(--leading-tight)</span>;
}</pre>
        </div>
    </div>

    <div class="doc-callout doc-callout--info">
        <strong>Font loading:</strong> Add the Google Fonts link for <em>Circular Std</em> and <em>DM Mono</em> in your <code>&lt;head&gt;</code>. Both are referenced in <code>typography.css</code> via <code>--doc-font</code> and <code>--doc-mono</code>.
    </div>
</section>

<?php include __DIR__ . '/../includes/layout-footer.php'; ?>
