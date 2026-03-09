<?php $pageTitle='Calendar'; $activeSection='calendar'; $pageDepth=1;
$extraJs=['calendar.js']; include __DIR__.'/../includes/layout.php'; ?>
<nav class="doc-breadcrumb"><a href="../index.php">Home</a><span class="doc-breadcrumb__sep">›</span><span>Components</span><span class="doc-breadcrumb__sep">›</span><span class="doc-breadcrumb__current">Calendar</span></nav>
<section class="doc-section" id="calendar">
    <div class="doc-eyebrow">Components · calendar.css</div>
    <h2 class="doc-section-title"><em>Calendar</em></h2>
    <p class="doc-lead">Dual-month date range picker. Auto-inited by <code>airframe.js</code> on any <code>.calendar-wrapper</code>. Supports Dates / Flexible tabs and ± day flex pills.</p>
    <span class="doc-file-tag">📄 calendar.css</span>

    <div class="doc-callout doc-callout--info">
        <strong>Auto-init:</strong> Add <code>id="calendarEl"</code> to <code>.calendar-wrapper</code> and <code>airframe.js</code> will render the calendar and handle all interactions automatically.
    </div>
    <div class="doc-callout doc-callout--warn" style="margin-top:12px">
        <strong>Script fix:</strong> The docs previously referenced <code>HolidaySeva.js</code> which does not exist. The correct file is <code>airframe.js</code>. This was the root cause of the calendar not rendering.
    </div>

    <div class="doc-block" style="margin-top:20px">
        <div class="doc-preview doc-preview--grey doc-preview--center" style="padding:32px 16px">
            <div class="calendar-wrapper" id="calendarEl" style="box-shadow:var(--shadow-lg)">
                <div class="calendar-tabs">
                    <button class="calendar-tab is-active">Dates</button>
                    <button class="calendar-tab">Flexible</button>
                </div>
                <div class="calendar-months"></div>
                <div class="calendar-flex-pills">
                    <button class="calendar-flex-pill is-active">Exact dates</button>
                    <button class="calendar-flex-pill">± 1 day</button>
                    <button class="calendar-flex-pill">± 2 days</button>
                    <button class="calendar-flex-pill">± 3 days</button>
                    <button class="calendar-flex-pill">± 7 days</button>
                    <button class="calendar-flex-pill">± 14 days</button>
                </div>
                <div class="calendar-footer">
                    <button class="btn btn-link" onclick="clearCalendar()">Clear dates</button>
                    <button class="btn btn-primary btn-sm">Close</button>
                </div>
            </div>
        </div>
        <div class="doc-code"><div class="doc-code__bar"><span class="doc-code__lang">HTML</span><button class="doc-code__copy" onclick="doCopy(this)">Copy</button></div>
        <pre><span class="hl-tag">&lt;div</span> <span class="hl-attr">class</span>=<span class="hl-str">"calendar-wrapper"</span> <span class="hl-attr">id</span>=<span class="hl-str">"calendarEl"</span><span class="hl-tag">&gt;</span>
  <span class="hl-tag">&lt;div</span> <span class="hl-attr">class</span>=<span class="hl-str">"calendar-tabs"</span><span class="hl-tag">&gt;</span>
    <span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"calendar-tab is-active"</span><span class="hl-tag">&gt;</span>Dates<span class="hl-tag">&lt;/button&gt;</span>
    <span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"calendar-tab"</span><span class="hl-tag">&gt;</span>Flexible<span class="hl-tag">&lt;/button&gt;</span>
  <span class="hl-tag">&lt;/div&gt;</span>
  <span class="hl-tag">&lt;div</span> <span class="hl-attr">class</span>=<span class="hl-str">"calendar-months"</span><span class="hl-tag">&gt;&lt;/div&gt;</span>
  <span class="hl-tag">&lt;div</span> <span class="hl-attr">class</span>=<span class="hl-str">"calendar-flex-pills"</span><span class="hl-tag">&gt;</span>
    <span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"calendar-flex-pill is-active"</span><span class="hl-tag">&gt;</span>Exact dates<span class="hl-tag">&lt;/button&gt;</span>
    <span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"calendar-flex-pill"</span><span class="hl-tag">&gt;</span>± 1 day<span class="hl-tag">&lt;/button&gt;</span>
  <span class="hl-tag">&lt;/div&gt;</span>
  <span class="hl-tag">&lt;div</span> <span class="hl-attr">class</span>=<span class="hl-str">"calendar-footer"</span><span class="hl-tag">&gt;</span>
    <span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"btn btn-link"</span> <span class="hl-attr">onclick</span>=<span class="hl-str">"clearCalendar()"</span><span class="hl-tag">&gt;</span>Clear dates<span class="hl-tag">&lt;/button&gt;</span>
    <span class="hl-tag">&lt;button</span> <span class="hl-attr">class</span>=<span class="hl-str">"btn btn-primary btn-sm"</span><span class="hl-tag">&gt;</span>Close<span class="hl-tag">&lt;/button&gt;</span>
  <span class="hl-tag">&lt;/div&gt;</span>
<span class="hl-tag">&lt;/div&gt;</span></pre></div>
    </div>
</section>
<?php include __DIR__.'/../includes/layout-footer.php'; ?>
