<?php
$pageTitle='Badge'; $activeSection='badge'; $pageDepth=1;
include __DIR__.'/../includes/layout.php';
?>
<nav class="doc-breadcrumb"><a href="../index.php">Home</a><span class="doc-breadcrumb__sep">›</span><span>Components</span><span class="doc-breadcrumb__sep">›</span><span class="doc-breadcrumb__current">Badge</span></nav>
<section class="doc-section" id="badge">
    <div class="doc-eyebrow">Components · badge.css</div>
    <h2 class="doc-section-title"><em>Badge</em></h2>
    <p class="doc-lead">Pill-shaped status indicators with eight color variants and a dot prefix modifier.</p>
    <span class="doc-file-tag">📄 badge.css</span>

    <div class="doc-block">
        <div class="doc-preview" style="gap:10px;flex-wrap:wrap;align-items:center">
            <span class="badge badge-primary">Primary</span>
            <span class="badge badge-secondary">Secondary</span>
            <span class="badge badge-accent">Accent</span>
            <span class="badge badge-success">Success</span>
            <span class="badge badge-warning">Warning</span>
            <span class="badge badge-error">Error</span>
            <span class="badge badge-muted">Muted</span>
            <span class="badge badge-dark">Dark</span>
        </div>
        <div class="doc-code"><div class="doc-code__bar"><span class="doc-code__lang">HTML</span><button class="doc-code__copy" onclick="doCopy(this)">Copy</button></div>
        <pre><span class="hl-tag">&lt;span</span> <span class="hl-attr">class</span>=<span class="hl-str">"badge badge-primary"</span><span class="hl-tag">&gt;</span>Primary<span class="hl-tag">&lt;/span&gt;</span>
<span class="hl-tag">&lt;span</span> <span class="hl-attr">class</span>=<span class="hl-str">"badge badge-success"</span><span class="hl-tag">&gt;</span>Success<span class="hl-tag">&lt;/span&gt;</span></pre></div>
    </div>

    <div class="doc-block">
        <div class="doc-block__label">Sizes · Dot modifier</div>
        <div class="doc-preview" style="gap:10px;align-items:center;flex-wrap:wrap">
            <span class="badge badge-primary badge-sm">Small</span>
            <span class="badge badge-primary">Default</span>
            <span class="badge badge-primary badge-lg">Large</span>
            <span class="badge badge-success badge--dot">Online</span>
            <span class="badge badge-warning badge--dot">Away</span>
            <span class="badge badge-error badge--dot">Busy</span>
        </div>
        <div class="doc-code"><div class="doc-code__bar"><span class="doc-code__lang">HTML</span><button class="doc-code__copy" onclick="doCopy(this)">Copy</button></div>
        <pre><span class="hl-tag">&lt;span</span> <span class="hl-attr">class</span>=<span class="hl-str">"badge badge-primary badge-sm"</span><span class="hl-tag">&gt;</span>Small<span class="hl-tag">&lt;/span&gt;</span>
<span class="hl-tag">&lt;span</span> <span class="hl-attr">class</span>=<span class="hl-str">"badge badge-success badge--dot"</span><span class="hl-tag">&gt;</span>Online<span class="hl-tag">&lt;/span&gt;</span></pre></div>
    </div>
</section>
<?php include __DIR__.'/../includes/layout-footer.php'; ?>
