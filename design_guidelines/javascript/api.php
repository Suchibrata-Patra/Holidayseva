<?php
$pageTitle     = 'JavaScript API';
$activeSection = 'js-api';
$pageDepth     = 1;
include __DIR__ . '/../includes/layout.php';
?>
<nav class="doc-breadcrumb">
    <a href="../index.php">Home</a><span class="doc-breadcrumb__sep">›</span>
    <span>JavaScript</span><span class="doc-breadcrumb__sep">›</span>
    <span class="doc-breadcrumb__current">API</span>
</nav>

<section class="doc-section" id="js-api">
    <div class="doc-eyebrow">JavaScript · airframe.js</div>
    <h2 class="doc-section-title">JavaScript <em>API</em></h2>
    <p class="doc-lead">All interactive behaviour is handled by <code>airframe.js</code>. It auto-inits on <code>DOMContentLoaded</code> and exposes a global <code>AirframeUI</code> object plus convenience functions.</p>

    <div class="doc-callout doc-callout--warn">
        <strong>Naming fix:</strong> The global is <code>AirframeUI</code>, not <code>HolidaySevaUI</code> as previously documented. Legacy shims (<code>window.openModal</code>, <code>window.toggleDropdown</code>, etc.) are still provided for backwards compatibility.
    </div>

    <div class="doc-block" style="margin-top:24px">
        <table class="doc-table">
            <thead><tr><th>Function</th><th>Signature</th><th>Description</th></tr></thead>
            <tbody>
                <?php
                $api = [
                    ['openModal',        'openModal(id)',                   'Show modal overlay by element ID. Locks body scroll, focuses close button.'],
                    ['closeModal',       'closeModal(id)',                  'Hide modal by element ID. Restores body scroll.'],
                    ['toggleDropdown',   'toggleDropdown(idOrEl)',          'Toggle a dropdown open/closed. Pass the .dropdown element\'s ID or the element itself.'],
                    ['closeAllDropdowns','closeAllDropdowns()',             'Close every open dropdown on the page.'],
                    ['changeCount',      'changeCount(type, delta, opts?)', 'Increment/decrement a counter. type is \'adults\'/\'children\'/\'infants\'. opts accepts {min, max}.'],
                    ['initCalendar',     'initCalendar(el)',                'Manually init a calendar wrapper element (auto-called on page load).'],
                    ['clearCalendar',    'clearCalendar(el?)',              'Clear selected date range. Without argument, targets #calendarEl.'],
                    ['shiftMonth',       'shiftMonth(calEl, delta)',        'Navigate the calendar by +/- months programmatically.'],
                    ['toggleReview',     'toggleReview(id, btn)',           'Toggle truncated/expanded state of a review body.'],
                    ['doCopy',           'doCopy(btn)',                     'Copy code from nearest pre to clipboard. Shows "Copied!" feedback.'],
                    ['formatDate',       'formatDate(date)',                'Returns a locale-formatted date string from a JS Date object.'],
                ];
                foreach ($api as [$name, $sig, $desc]):
                ?>
                <tr>
                    <td><code><?= $name ?></code></td>
                    <td><code><?= htmlspecialchars($sig) ?></code></td>
                    <td><?= htmlspecialchars($desc) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="doc-block">
        <div class="doc-code" style="border-radius:16px;border:1px solid var(--doc-code-border)">
            <div class="doc-code__bar"><span class="doc-code__lang">JavaScript</span><button class="doc-code__copy" onclick="doCopy(this)">Copy</button></div>
            <pre><span class="hl-cmt">// Programmatic modal control</span>
AirframeUI.openModal(<span class="hl-str">'myModal'</span>);
setTimeout(() =&gt; AirframeUI.closeModal(<span class="hl-str">'myModal'</span>), <span class="hl-val">3000</span>);

<span class="hl-cmt">// Increment adult count</span>
AirframeUI.changeCount(<span class="hl-str">'adults'</span>, <span class="hl-val">1</span>, { min: <span class="hl-val">1</span>, max: <span class="hl-val">8</span> });

<span class="hl-cmt">// Listen to calendar date changes</span>
<span class="hl-key">const</span> cal = document.getElementById(<span class="hl-str">'calendarEl'</span>);
cal.addEventListener(<span class="hl-str">'calendar:change'</span>, (e) =&gt; {
  <span class="hl-key">const</span> { start, end } = e.detail;
  <span class="hl-key">if</span> (start &amp;&amp; end) {
    <span class="hl-key">const</span> nights = Math.round((end - start) / <span class="hl-val">86_400_000</span>);
    console.log(<span class="hl-str">`${nights} nights selected`</span>);
  }
});</pre>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/layout-footer.php'; ?>
