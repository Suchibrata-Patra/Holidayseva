<?php
$pageTitle     = 'Events & Data Attributes';
$activeSection = 'js-events';
$pageDepth     = 1;
include __DIR__ . '/../includes/layout.php';
?>
<nav class="doc-breadcrumb">
    <a href="../index.php">Home</a><span class="doc-breadcrumb__sep">›</span>
    <span>JavaScript</span><span class="doc-breadcrumb__sep">›</span>
    <span class="doc-breadcrumb__current">Events</span>
</nav>

<section class="doc-section" id="js-events">
    <div class="doc-eyebrow">JavaScript · Events &amp; Attributes</div>
    <h2 class="doc-section-title">Events <em>&amp; Data Attributes</em></h2>
    <p class="doc-lead">AirframeUI emits custom events and recognises special data attributes for integration with your own code.</p>

    <div class="doc-block">
        <table class="doc-table">
            <thead><tr><th>Event / Attribute</th><th>Where</th><th>Description</th></tr></thead>
            <tbody>
                <?php
                $events = [
                    ['calendar:change',  'Event on .calendar-wrapper',  'Fires when a date is selected. event.detail contains { start: Date, end: Date|null }.'],
                    ['data-booking',     'Ancestor of calendar',         'Marks the booking context. Calendar searches upward to find and update check-in/out text spans.'],
                    ['data-wishlist',    'Any button',                   'Auto-inited toggle: adds .is-wishlisted class and changes color to primary red on click.'],
                    ['data-calendar',    'Wrapper div',                  'Alternative to .calendar-wrapper class for triggering calendar auto-init.'],
                    ['data-booking-checkin',  'Span inside booking ancestor', 'Text span that gets updated with selected check-in date.'],
                    ['data-booking-checkout', 'Span inside booking ancestor', 'Text span that gets updated with selected check-out date.'],
                ];
                foreach ($events as [$event, $where, $desc]):
                ?>
                <tr>
                    <td><code><?= htmlspecialchars($event) ?></code></td>
                    <td><?= $where ?></td>
                    <td><?= htmlspecialchars($desc) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="doc-block">
        <div class="doc-code" style="border-radius:16px;border:1px solid var(--doc-code-border)">
            <div class="doc-code__bar"><span class="doc-code__lang">JavaScript</span><button class="doc-code__copy" onclick="doCopy(this)">Copy</button></div>
            <pre><span class="hl-cmt">// Wishlist toggle — auto-inited, or manual:</span>
<span class="hl-key">const</span> heart = document.querySelector(<span class="hl-str">'[data-wishlist]'</span>);
heart.addEventListener(<span class="hl-str">'click'</span>, () =&gt; {
  <span class="hl-key">const</span> active = heart.classList.toggle(<span class="hl-str">'is-wishlisted'</span>);
  heart.setAttribute(<span class="hl-str">'aria-pressed'</span>, active);
});

<span class="hl-cmt">// Booking card — connect calendar to date fields:</span>
<span class="hl-tag">&lt;div</span> <span class="hl-attr">data-booking</span><span class="hl-tag">&gt;</span>
  <span class="hl-tag">&lt;span</span> <span class="hl-attr">data-booking-checkin</span><span class="hl-tag">&gt;</span>Add date<span class="hl-tag">&lt;/span&gt;</span>
  <span class="hl-tag">&lt;span</span> <span class="hl-attr">data-booking-checkout</span><span class="hl-tag">&gt;</span>Add date<span class="hl-tag">&lt;/span&gt;</span>
  <span class="hl-tag">&lt;div</span> <span class="hl-attr">class</span>=<span class="hl-str">"calendar-wrapper"</span> <span class="hl-attr">id</span>=<span class="hl-str">"calendarEl"</span><span class="hl-tag">&gt;</span>...<span class="hl-tag">&lt;/div&gt;</span>
<span class="hl-tag">&lt;/div&gt;</span></pre>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/layout-footer.php'; ?>
