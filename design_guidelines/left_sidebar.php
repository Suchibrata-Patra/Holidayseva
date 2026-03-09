<?php
/**
 * left_sidebar.php
 * Left navigation — exact Apple HIG developer.apple.com style
 * Include: <?php include __DIR__ . '/left_sidebar.php'; ?>
 */
?>

<div class="sb-filter">
  <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
    <path d="M2 4h12M4 8h8M6 12h4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
  </svg>
  <input type="text" placeholder="Filter" id="sbFilter" oninput="filterSidebar(this.value)" />
</div>

<nav class="sb-nav" id="sbNav">

  <div class="sb-group" id="grp-gettingstarted">
    <button class="sb-group-btn" onclick="toggleGroup('grp-gettingstarted')">
      <svg class="sb-chevron" width="9" height="9" viewBox="0 0 10 10" fill="none">
        <path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      Getting started
    </button>
    <ul class="sb-items" hidden>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.2"/>
          <path d="M8 5v4l2 1.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
        </svg>
        Introduction
      </a></li>
    </ul>
  </div>

  <div class="sb-group" id="grp-foundations">
    <button class="sb-group-btn" onclick="toggleGroup('grp-foundations')">
      <svg class="sb-chevron" width="9" height="9" viewBox="0 0 10 10" fill="none">
        <path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      Foundations
    </button>
    <ul class="sb-items" hidden>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="2" y="2" width="12" height="12" rx="2.5" stroke="currentColor" stroke-width="1.2"/>
        </svg>
        Colour
      </a></li>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <path d="M3 12V4l5 6 5-6v8" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Typography
      </a></li>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <path d="M2 8h12M8 2v12" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
        </svg>
        Spacing
      </a></li>
    </ul>
  </div>

  <div class="sb-group open" id="grp-patterns">
    <button class="sb-group-btn" onclick="toggleGroup('grp-patterns')">
      <svg class="sb-chevron" width="9" height="9" viewBox="0 0 10 10" fill="none">
        <path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      Patterns
    </button>
    <ul class="sb-items">
      <li><a href="charting-data.php" class="sb-link active">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="2" y="9" width="3" height="5" rx="0.5" fill="currentColor"/>
          <rect x="6.5" y="6" width="3" height="8" rx="0.5" fill="currentColor"/>
          <rect x="11" y="3" width="3" height="11" rx="0.5" fill="currentColor"/>
        </svg>
        Charting data
      </a></li>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <circle cx="6" cy="6" r="3.5" stroke="currentColor" stroke-width="1.2"/>
          <path d="M10 10l3.5 3.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
          <path d="M8.5 4.5h4M8.5 7h2.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
        </svg>
        Collaboration and sharing
      </a></li>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="2" y="3" width="9" height="7" rx="1" stroke="currentColor" stroke-width="1.2"/>
          <path d="M11 6l3 2-3 2V6z" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/>
        </svg>
        Drag and drop
      </a></li>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="2" y="4" width="12" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2"/>
          <path d="M5 8h6M5 11h3" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
        </svg>
        Entering data
      </a></li>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <circle cx="8" cy="8" r="1.5" fill="currentColor"/>
          <circle cx="3" cy="8" r="1.5" fill="currentColor"/>
          <circle cx="13" cy="8" r="1.5" fill="currentColor"/>
          <path d="M8 3.5V2M8 14v-1.5M12.2 4l-1 1M4.8 11l-1 1M12.2 12l-1-1M4.8 5l-1-1" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
        </svg>
        Feedback
      </a></li>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <path d="M4 2h8l2 3H2L4 2z" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/>
          <rect x="2" y="5" width="12" height="9" rx="1" stroke="currentColor" stroke-width="1.2"/>
          <path d="M6 9l1.5 1.5L10 7" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        File management
      </a></li>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <path d="M2 14l4-4 3 3 5-9" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M10 5h4v4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Going full screen
      </a></li>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="2" y="2" width="12" height="12" rx="2" stroke="currentColor" stroke-width="1.2"/>
          <path d="M7 5l4 3-4 3V5z" fill="currentColor"/>
        </svg>
        Launching
      </a></li>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="1" y="4" width="10" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2"/>
          <path d="M11 7l4 2.5-4 2.5V7z" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/>
        </svg>
        Live-viewing apps
      </a></li>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <circle cx="8" cy="8" r="1.5" fill="currentColor"/>
          <path d="M5.5 5.5a3.5 3.5 0 000 5M10.5 5.5a3.5 3.5 0 010 5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
          <path d="M3 3a7 7 0 000 10M13 3a7 7 0 010 10" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
        </svg>
        Loading
      </a></li>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <circle cx="8" cy="5" r="2.5" stroke="currentColor" stroke-width="1.2"/>
          <path d="M2 14c0-3.31 2.69-6 6-6s6 2.69 6 6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
        </svg>
        Managing accounts
      </a></li>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <circle cx="8" cy="5" r="2.5" stroke="currentColor" stroke-width="1.2"/>
          <path d="M2 14c0-3.31 2.69-6 6-6s6 2.69 6 6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
          <path d="M11 10.5l1.5 1.5 2.5-2.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Managing notifications
      </a></li>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="2" y="2" width="12" height="12" rx="2" stroke="currentColor" stroke-width="1.2"/>
          <rect x="5" y="5" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.2"/>
        </svg>
        Modality
      </a></li>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="1" y="3" width="6.5" height="10" rx="1" stroke="currentColor" stroke-width="1.2"/>
          <rect x="8.5" y="3" width="6.5" height="10" rx="1" stroke="currentColor" stroke-width="1.2"/>
        </svg>
        Multitasking
      </a></li>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.2"/>
          <path d="M8 7v5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
          <circle cx="8" cy="5" r="0.8" fill="currentColor"/>
        </svg>
        Offering help
      </a></li>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <path d="M5 4c0-1.66 1.34-3 3-3s3 1.34 3 3c0 2-3 3-3 5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
          <circle cx="8" cy="13" r="1" fill="currentColor"/>
        </svg>
        Onboarding
      </a></li>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <path d="M3 6c0-2.76 2.24-5 5-5s5 2.24 5 5c0 3.5-5 9-5 9S3 9.5 3 6z" stroke="currentColor" stroke-width="1.2"/>
        </svg>
        Playing audio
      </a></li>
      <li><a href="#" class="sb-link">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.2"/>
          <circle cx="8" cy="8" r="2.5" stroke="currentColor" stroke-width="1.2"/>
          <circle cx="8" cy="8" r="0.8" fill="currentColor"/>
        </svg>
        Playing haptics
      </a></li>
    </ul>
  </div>

</nav>

<style>
  /* ── Filter ─────────────────────────────── */
  .sb-filter {
    display: flex;
    align-items: center;
    gap: 8px;
    margin: 0 16px 18px;
    padding: 7px 13px;
    background: #f2f2f7;
    border: 1px solid #e5e5ea;
    border-radius: 10px;
    color: #aeaeb2;
  }
  .sb-filter input {
    border: none;
    background: none;
    outline: none;
    font-size: 14px;
    color: #1d1d1f;
    font-family: var(--font-sans, -apple-system, 'Helvetica Neue', sans-serif);
    width: 100%;
  }
  .sb-filter input::placeholder { color: #aeaeb2; }

  /* ── Nav wrapper ─────────────────────────── */
  .sb-nav { padding: 0 8px; }
  .sb-group { margin-bottom: 0; }

  /* ── Group toggle button ─────────────────── */
  .sb-group-btn {
    width: 100%;
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 6px 10px;
    background: none;
    border: none;
    cursor: pointer;
    font-family: var(--font-sans, -apple-system, 'Helvetica Neue', sans-serif);
    font-size: 14px;
    font-weight: 400;
    color: #424245;
    text-align: left;
    border-radius: 6px;
    transition: background 0.1s;
    -webkit-font-smoothing: antialiased;
    line-height: 1.4;
  }
  .sb-group-btn:hover { background: #f2f2f7; }

  /* ── Chevron ─────────────────────────────── */
  .sb-chevron {
    flex-shrink: 0;
    color: #8e8e93;
    transition: transform 0.16s ease;
  }
  .sb-group.open > .sb-group-btn .sb-chevron {
    transform: rotate(90deg);
  }

  /* ── Items ───────────────────────────────── */
  .sb-items {
    list-style: none;
    padding: 0 0 6px 0;
    margin: 0;
  }
  .sb-items[hidden] { display: none; }

  /* ── Link ────────────────────────────────── */
  .sb-link {
    display: flex;
    align-items: flex-start;
    gap: 9px;
    font-size: 13.5px;
    font-weight: 400;
    color: #424245;
    text-decoration: none;
    padding: 5px 10px 5px 26px;
    border-radius: 6px;
    transition: background 0.1s, color 0.1s;
    -webkit-font-smoothing: antialiased;
    line-height: 1.45;
  }
  .sb-link svg {
    flex-shrink: 0;
    color: #8e8e93;
    margin-top: 1px;
  }
  .sb-link:hover {
    background: #f2f2f7;
    color: #1d1d1f;
  }
  .sb-link:hover svg { color: #6e6e73; }

  /* Active — just bold, no background fill */
  .sb-link.active {
    font-weight: 600;
    color: #1d1d1f;
  }
  .sb-link.active svg { color: #1d1d1f; }

  .sb-link.hidden { display: none; }
</style>

<script>
  function toggleGroup(id) {
    const grp = document.getElementById(id);
    const list = grp.querySelector('.sb-items');
    const open = grp.classList.contains('open');
    grp.classList.toggle('open', !open);
    if (open) list.setAttribute('hidden', '');
    else list.removeAttribute('hidden');
  }

  function filterSidebar(q) {
    const term = q.toLowerCase().trim();
    document.querySelectorAll('.sb-link').forEach(a => {
      const match = a.textContent.toLowerCase().includes(term);
      a.classList.toggle('hidden', !match);
      if (match && term) {
        const grp = a.closest('.sb-group');
        grp.classList.add('open');
        grp.querySelector('.sb-items').removeAttribute('hidden');
      }
    });
  }
</script>