<?php
$pageTitle='Avatar'; $activeSection='avatar'; $pageDepth=1;
include __DIR__.'/../includes/layout.php';
?>
<nav class="doc-breadcrumb"><a href="../index.php">Home</a><span class="doc-breadcrumb__sep">›</span><span>Components</span><span class="doc-breadcrumb__sep">›</span><span class="doc-breadcrumb__current">Avatar</span></nav>
<section class="doc-section" id="avatar">
    <div class="doc-eyebrow">Components · avatar.css</div>
    <h2 class="doc-section-title"><em>Avatar</em></h2>
    <p class="doc-lead">Circular user icons in six sizes with color fills, status indicators, and stacked group layout.</p>
    <span class="doc-file-tag">📄 avatar.css</span>

    <div class="doc-block">
        <div class="doc-block__label">Sizes</div>
        <div class="doc-preview" style="gap:16px;align-items:center">
            <?php foreach(['xs','sm','md','lg','xl','2xl'] as $size): ?>
            <div class="avatar avatar--<?=$size?>"><img src="https://i.pravatar.cc/80?img=<?=rand(1,70)?>" alt=""></div>
            <?php endforeach; ?>
        </div>
        <div class="doc-code"><div class="doc-code__bar"><span class="doc-code__lang">HTML</span><button class="doc-code__copy" onclick="doCopy(this)">Copy</button></div>
        <pre><span class="hl-tag">&lt;div</span> <span class="hl-attr">class</span>=<span class="hl-str">"avatar avatar--xs"</span><span class="hl-tag">&gt;</span>XS<span class="hl-tag">&lt;/div&gt;</span>
<span class="hl-tag">&lt;div</span> <span class="hl-attr">class</span>=<span class="hl-str">"avatar avatar--lg"</span><span class="hl-tag">&gt;</span>
  <span class="hl-tag">&lt;img</span> <span class="hl-attr">src</span>=<span class="hl-str">"photo.png"</span> <span class="hl-attr">alt</span>=<span class="hl-str">"Name"</span> <span class="hl-tag">/&gt;</span>
<span class="hl-tag">&lt;/div&gt;</span></pre></div>
    </div>

    <div class="doc-block">
        <div class="doc-block__label">Status · Group</div>
        <div class="doc-preview" style="gap:24px;align-items:center;flex-wrap:wrap">
            <div class="avatar-wrap"><div class="avatar avatar--lg"><img src="https://i.pravatar.cc/80?img=5" alt=""></div><span class="avatar-status"></span></div>
            <div class="avatar-wrap"><div class="avatar avatar--lg"><img src="https://i.pravatar.cc/80?img=8" alt=""></div><span class="avatar-status avatar-status--away"></span></div>
            <div class="avatar-wrap"><div class="avatar avatar--lg"><img src="https://i.pravatar.cc/80?img=12" alt=""></div><span class="avatar-status avatar-status--offline"></span></div>
            <div class="avatar-group">
                <div class="avatar avatar--primary"><img src="https://i.pravatar.cc/80?img=3" alt=""></div>
                <div class="avatar avatar--secondary"><img src="https://i.pravatar.cc/80?img=6" alt=""></div>
                <div class="avatar avatar--accent"><img src="https://i.pravatar.cc/80?img=9" alt=""></div>
                <div class="avatar-group__count">+4</div>
            </div>
        </div>
        <div class="doc-code"><div class="doc-code__bar"><span class="doc-code__lang">HTML</span><button class="doc-code__copy" onclick="doCopy(this)">Copy</button></div>
        <pre><span class="hl-cmt">&lt;!-- Status dot --&gt;</span>
<span class="hl-tag">&lt;div</span> <span class="hl-attr">class</span>=<span class="hl-str">"avatar-wrap"</span><span class="hl-tag">&gt;</span>
  <span class="hl-tag">&lt;div</span> <span class="hl-attr">class</span>=<span class="hl-str">"avatar"</span><span class="hl-tag">&gt;</span>N<span class="hl-tag">&lt;/div&gt;</span>
  <span class="hl-tag">&lt;span</span> <span class="hl-attr">class</span>=<span class="hl-str">"avatar-status"</span><span class="hl-tag">&gt;&lt;/span&gt;</span>
<span class="hl-tag">&lt;/div&gt;</span>
<span class="hl-cmt">&lt;!-- Stacked group --&gt;</span>
<span class="hl-tag">&lt;div</span> <span class="hl-attr">class</span>=<span class="hl-str">"avatar-group"</span><span class="hl-tag">&gt;</span>
  <span class="hl-tag">&lt;div</span> <span class="hl-attr">class</span>=<span class="hl-str">"avatar"</span><span class="hl-tag">&gt;</span>A<span class="hl-tag">&lt;/div&gt;</span>
  <span class="hl-tag">&lt;div</span> <span class="hl-attr">class</span>=<span class="hl-str">"avatar-group__count"</span><span class="hl-tag">&gt;</span>+4<span class="hl-tag">&lt;/div&gt;</span>
<span class="hl-tag">&lt;/div&gt;</span></pre></div>
    </div>
</section>
<?php include __DIR__.'/../includes/layout-footer.php'; ?>
