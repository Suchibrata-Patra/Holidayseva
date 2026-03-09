<?php
$pageTitle     = 'Color';
$activeSection = 'color';
$pageDepth     = 1;
include __DIR__ . '/../includes/layout.php';
?>

<nav class="doc-breadcrumb">
    <a href="../index.php">Home</a>
    <span class="doc-breadcrumb__sep">›</span>
    <span>Foundations</span>
    <span class="doc-breadcrumb__sep">›</span>
    <span class="doc-breadcrumb__current">Color</span>
</nav>

<section class="doc-section" id="color">
    <div class="doc-eyebrow">Foundations · colors.css</div>
    <h2 class="doc-section-title"><em>Color</em></h2>
    <p class="doc-lead">All colors live as CSS variables on <code>:root</code> inside <code>colors.css</code>. Use the token — never a raw hex.</p>

    <div class="doc-block">
        <div class="doc-block__label">Brand</div>
        <div class="doc-preview doc-preview--grey">
            <?php
            $brandColors = [
                ['#FF385C','Primary',      '--color-primary'],
                ['#FF5A76','Primary Light','--color-primary-light'],
                ['#D93B55','Primary Dark', '--color-primary-dark'],
                ['#222222','Secondary',    '--color-secondary'],
                ['#00A699','Accent',       '--color-accent'],
            ];
            $statusColors = [
                ['#008A05','Success',        '--color-success'],
                ['#C45508','Warning',        '--color-warning'],
                ['#C13515','Error',          '--color-error'],
                ['#717171','Text Secondary', '--color-text-secondary'],
                ['#EBEBEB','Muted',          '--color-muted'],
            ];
            function renderSwatches(array $swatches): void {
                echo '<div style="display:flex;flex-wrap:wrap;gap:10px;margin:8px 0">';
                foreach ($swatches as [$hex, $name, $token]) {
                    echo <<<HTML
                    <div style="display:flex;flex-direction:column;gap:6px">
                        <div style="width:52px;height:52px;border-radius:10px;background:{$hex};border:1px solid rgba(0,0,0,0.08);box-shadow:0 1px 4px rgba(0,0,0,0.07)"></div>
                        <div style="font-size:11px;font-weight:600;color:#222">{$name}</div>
                        <div style="font-family:monospace;font-size:10px;color:#717171">{$token}</div>
                    </div>
                    HTML;
                }
                echo '</div>';
            }
            renderSwatches($brandColors);
            renderSwatches($statusColors);
            ?>
        </div>
        <div class="doc-code">
            <div class="doc-code__bar"><span class="doc-code__lang">CSS</span><button class="doc-code__copy" onclick="doCopy(this)">Copy</button></div>
            <pre><span class="hl-cmt">/* Always reference by token */</span>
<span class="hl-cls">.my-element</span> {
  color: <span class="hl-val">var(--color-primary)</span>;
  background: <span class="hl-val">var(--color-surface)</span>;
  border: 1px solid <span class="hl-val">var(--color-border)</span>;
}</pre>
        </div>
    </div>

    <div class="doc-block">
        <div class="doc-block__label">Surface & Background tokens</div>
        <div class="doc-preview doc-preview--grey">
            <?php
            renderSwatches([
                ['#FFFFFF','Surface',     '--color-surface'],
                ['#FAFAFA','BG Page',     '--color-bg-page'],
                ['#F7F7F7','BG Alt',      '--color-bg-alt'],
                ['#EBEBEB','Border',      '--color-border'],
            ]);
            ?>
        </div>
    </div>

    <div class="doc-callout doc-callout--tip">
        <strong>Dark mode ready:</strong> Because all colors are CSS variables, you can add a <code>[data-theme="dark"]</code> selector and override just the token values — no other changes needed.
    </div>
</section>

<?php include __DIR__ . '/../includes/layout-footer.php'; ?>