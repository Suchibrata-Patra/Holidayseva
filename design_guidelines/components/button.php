<?php
$pageTitle     = 'Button';
$activeSection = 'button';
$pageDepth     = 1;
include __DIR__ . '/../includes/layout.php';
?>
<nav class="doc-breadcrumb">
    <a href="../index.php">Home</a><span class="doc-breadcrumb__sep">›</span>
    <span>Components</span><span class="doc-breadcrumb__sep">›</span>
    <span class="doc-breadcrumb__current">Button</span>
</nav>

<section class="doc-section" id="button">
    <div class="doc-eyebrow">Components · button.css</div>
    <h2 class="doc-section-title"><em>Button</em></h2>
    <p class="doc-lead">Seven variants × four sizes × icon-only and loading states. All built on a single <code>.btn</code> base class.</p>
    <span class="doc-file-tag">📄 button.css</span>

    <div class="doc-block">
        <div class="doc-block__label">Variants</div>
        <div class="doc-preview" style="gap:12px;flex-wrap:wrap;align-items:center">
            <button class="btn btn-primary">Primary</button>
            <button class="btn btn-secondary">Secondary</button>
            <button class="btn btn-outline">Outline</button>
            <button class="btn btn-ghost">Ghost</button>
            <button class="btn btn-accent">Accent</button>
            <button class="btn btn-danger">Danger</button>
            <button class="btn btn-gradient">Gradient</button>
            <button class="btn btn-link">Link</button>
        </div>
        <div class="doc-code">
            <div class="doc-code__bar"><span class="doc-code__lang">HTML</span><button class="doc-code__copy" onclick="doCopy(this)">Copy</button></div>
            <pre><span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"btn btn-primary"</span><span class="hl-tag">&gt;</span>Primary<span class="hl-tag">&lt;/button&gt;</span>
<span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"btn btn-secondary"</span><span class="hl-tag">&gt;</span>Secondary<span class="hl-tag">&lt;/button&gt;</span>
<span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"btn btn-outline"</span><span class="hl-tag">&gt;</span>Outline<span class="hl-tag">&lt;/button&gt;</span>
<span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"btn btn-ghost"</span><span class="hl-tag">&gt;</span>Ghost<span class="hl-tag">&lt;/button&gt;</span>
<span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"btn btn-gradient"</span><span class="hl-tag">&gt;</span>Gradient<span class="hl-tag">&lt;/button&gt;</span></pre>
        </div>
    </div>

    <div class="doc-block">
        <div class="doc-block__label">Sizes</div>
        <div class="doc-preview" style="gap:12px;align-items:center;flex-wrap:wrap">
            <button class="btn btn-primary btn-xs">X-Small</button>
            <button class="btn btn-primary btn-sm">Small</button>
            <button class="btn btn-primary">Default</button>
            <button class="btn btn-primary btn-lg">Large</button>
            <button class="btn btn-primary btn-xl">X-Large</button>
        </div>
        <div class="doc-code">
            <div class="doc-code__bar"><span class="doc-code__lang">HTML</span><button class="doc-code__copy" onclick="doCopy(this)">Copy</button></div>
            <pre><span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"btn btn-primary btn-xs"</span><span class="hl-tag">&gt;</span>X-Small<span class="hl-tag">&lt;/button&gt;</span>
<span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"btn btn-primary btn-sm"</span><span class="hl-tag">&gt;</span>Small<span class="hl-tag">&lt;/button&gt;</span>
<span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"btn btn-primary"</span><span class="hl-tag">&gt;</span>Default<span class="hl-tag">&lt;/button&gt;</span>
<span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"btn btn-primary btn-lg"</span><span class="hl-tag">&gt;</span>Large<span class="hl-tag">&lt;/button&gt;</span>
<span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"btn btn-primary btn-xl"</span><span class="hl-tag">&gt;</span>X-Large<span class="hl-tag">&lt;/button&gt;</span></pre>
        </div>
    </div>

    <div class="doc-block">
        <div class="doc-block__label">States</div>
        <div class="doc-preview" style="gap:12px;align-items:center">
            <button class="btn btn-primary" disabled>Disabled</button>
            <button class="btn btn-primary btn--loading">Loading</button>
            <button class="btn btn-primary btn-full" style="max-width:280px">Full Width</button>
        </div>
        <div class="doc-code">
            <div class="doc-code__bar"><span class="doc-code__lang">HTML</span><button class="doc-code__copy" onclick="doCopy(this)">Copy</button></div>
            <pre><span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"btn btn-primary"</span> <span class="hl-attr">disabled</span><span class="hl-tag">&gt;</span>Disabled<span class="hl-tag">&lt;/button&gt;</span>
<span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"btn btn-primary btn--loading"</span><span class="hl-tag">&gt;</span>Loading<span class="hl-tag">&lt;/button&gt;</span>
<span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"btn btn-primary btn-full"</span><span class="hl-tag">&gt;</span>Full Width<span class="hl-tag">&lt;/button&gt;</span></pre>
        </div>
    </div>

    <div class="doc-callout doc-callout--info">
        <strong>No JS required.</strong> Buttons are purely CSS-driven. The <code>btn--loading</code> modifier uses a CSS pseudo-element spinner — no JavaScript state needed.
    </div>

    <h3 style="font-size:1rem;font-weight:700;margin:32px 0 8px">Props / Classes</h3>
    <table class="doc-table">
        <thead><tr><th>Class</th><th>Type</th><th>Description</th></tr></thead>
        <tbody>
            <?php
            $props = [
                ['btn',           'Base',    'Required on every button'],
                ['btn-primary',   'Variant', 'Red filled — primary action'],
                ['btn-secondary', 'Variant', 'Dark filled — secondary action'],
                ['btn-outline',   'Variant', 'Bordered, transparent fill'],
                ['btn-ghost',     'Variant', 'No border, hover background'],
                ['btn-gradient',  'Variant', 'Red gradient fill'],
                ['btn-danger',    'Variant', 'Destructive action'],
                ['btn-link',      'Variant', 'Text-only with underline hover'],
                ['btn-xs / btn-sm / btn-lg / btn-xl', 'Size', 'Override default medium size'],
                ['btn-full',      'Layout',  'Stretches to 100% container width'],
                ['btn--loading',  'State',   'Shows CSS spinner, disables pointer'],
            ];
            foreach ($props as [$cls, $type, $desc]):
            ?>
            <tr><td><code><?= $cls ?></code></td><td><?= $type ?></td><td><?= $desc ?></td></tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>

<?php include __DIR__ . '/../includes/layout-footer.php'; ?>
