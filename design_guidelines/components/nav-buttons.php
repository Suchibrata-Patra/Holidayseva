<?php $pageTitle='Nav Buttons'; $activeSection='nav-buttons'; $pageDepth=1; include __DIR__.'/../includes/layout.php'; ?>
<nav class="doc-breadcrumb"><a href="../index.php">Home</a><span class="doc-breadcrumb__sep">›</span><span>Components</span><span class="doc-breadcrumb__sep">›</span><span class="doc-breadcrumb__current">Nav Buttons</span></nav>
<section class="doc-section" id="nav-buttons">
    <div class="doc-eyebrow">Components · navigation-buttons.css</div>
    <h2 class="doc-section-title">Navigation <em>Buttons</em></h2>
    <p class="doc-lead">Circular arrow buttons for carousels and date pickers. Five variants, three sizes, disabled state.</p>
    <span class="doc-file-tag">📄 navigation-buttons.css</span>
    <div class="doc-block">
        <div class="doc-preview" style="gap:20px;align-items:center;flex-wrap:wrap">
            <div class="nav-btn-pair"><button class="nav-btn" disabled>←</button><button class="nav-btn">→</button></div>
            <div class="nav-btn-pair"><button class="nav-btn nav-btn--filled">←</button><button class="nav-btn nav-btn--filled">→</button></div>
            <div class="nav-btn-pair"><button class="nav-btn nav-btn--ghost">←</button><button class="nav-btn nav-btn--ghost">→</button></div>
            <div style="background:#222;padding:16px;border-radius:12px;display:flex;gap:8px">
                <button class="nav-btn nav-btn--dark">←</button><button class="nav-btn nav-btn--dark">→</button>
            </div>
        </div>
        <div class="doc-code"><div class="doc-code__bar"><span class="doc-code__lang">HTML</span><button class="doc-code__copy" onclick="doCopy(this)">Copy</button></div>
        <pre><span class="hl-tag">&lt;div</span> <span class="hl-attr">class</span>=<span class="hl-str">"nav-btn-pair"</span><span class="hl-tag">&gt;</span>
  <span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"nav-btn"</span> <span class="hl-attr">disabled</span><span class="hl-tag">&gt;</span>←<span class="hl-tag">&lt;/button&gt;</span>
  <span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"nav-btn"</span><span class="hl-tag">&gt;</span>→<span class="hl-tag">&lt;/button&gt;</span>
<span class="hl-tag">&lt;/div&gt;</span>
<span class="hl-cmt">&lt;!-- Dark variant (for image overlays) --&gt;</span>
<span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"nav-btn nav-btn--dark"</span><span class="hl-tag">&gt;</span>→<span class="hl-tag">&lt;/button&gt;</span></pre></div>
    </div>
</section>
<?php include __DIR__.'/../includes/layout-footer.php'; ?>
