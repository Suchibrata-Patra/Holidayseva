<?php
/**
 * left_sidebar.php
 * Left navigation — Apple HIG style collapsible menu
 * Include: <?php include __DIR__ . '/left_sidebar.php'; ?>
*/
?>

<div class="sb-filter">
  <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
    <path d="M1 3h12M3 7h8M5 11h4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" />
  </svg>
  <input type="text" placeholder="Filter" id="sbFilter" oninput="filterSidebar(this.value)" />
</div>

<nav class="sb-nav" id="sbNav">

  <div class="sb-group" id="grp-gettingstarted">
    <button class="sb-group-btn" onclick="toggleGroup('grp-gettingstarted')">
      <svg class="sb-chevron" width="10" height="10" viewBox="0 0 10 10" fill="none">
        <path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"
          stroke-linejoin="round" />
      </svg>
      Getting started
    </button>
    <ul class="sb-items" hidden>
      <li><a href="#" class="sb-link">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
            <circle cx="7" cy="7" r="5.5" stroke="currentColor" stroke-width="1.2" />
            <path d="M7 4v3.5L9 9" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" />
          </svg>
          Introduction
        </a></li>
    </ul>
  </div>

  <div class="sb-group" id="grp-foundations">
    <button class="sb-group-btn" onclick="toggleGroup('grp-foundations')">
      <svg class="sb-chevron" width="10" height="10" viewBox="0 0 10 10" fill="none">
        <path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"
          stroke-linejoin="round" />
      </svg>
      Foundations
    </button>
    <ul class="sb-items" hidden>
      <li><a href="#" class="sb-link">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
            <rect x="2" y="2" width="10" height="10" rx="2" stroke="currentColor" stroke-width="1.2" />
          </svg>
          Colour
        </a></li>
      <li><a href="#" class="sb-link">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
            <path d="M3 10V4l4 5 4-5v6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
          Typography
        </a></li>
      <li><a href="#" class="sb-link">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
            <path d="M2 7h10M7 2v10" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" />
          </svg>
          Spacing
        </a></li>
    </ul>
  </div>

  <div class="sb-group open" id="grp-components">
    <button class="sb-group-btn" onclick="toggleGroup('grp-components')">
      <svg class="sb-chevron" width="10" height="10" viewBox="0 0 10 10" fill="none">
        <path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"
          stroke-linejoin="round" />
      </svg>
      Components
    </button>
    <ul class="sb-items">
      <li><a href="#" class="sb-link">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
            <rect x="1" y="4" width="12" height="6" rx="3" stroke="currentColor" stroke-width="1.2" />
          </svg>
          Button
        </a></li>
      <li><a href="#" class="sb-link">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
            <rect x="1" y="3" width="12" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2" />
            <path d="M4 6h6M4 9h4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" />
          </svg>
          Input
        </a></li>
      <li><a href="toggle.php" class="sb-link active">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
            <rect x="1" y="4" width="12" height="6" rx="3" stroke="currentColor" stroke-width="1.2" />
            <circle cx="10" cy="7" r="2" fill="currentColor" />
          </svg>
          Toggle
        </a></li>
      <li><a href="#" class="sb-link">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
            <path d="M2 4h10v7a1 1 0 01-1 1H3a1 1 0 01-1-1V4z" stroke="currentColor" stroke-width="1.2" />
            <path d="M2 4l5-2 5 2" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round" />
          </svg>
          Modal
        </a></li>
      <li><a href="#" class="sb-link">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
            <circle cx="7" cy="4" r="2" stroke="currentColor" stroke-width="1.2" />
            <path d="M2 12c0-2.76 2.24-5 5-5s5 2.24 5 5" stroke="currentColor" stroke-width="1.2"
              stroke-linecap="round" />
          </svg>
          Avatar
        </a></li>
    </ul>
  </div>

  <div class="sb-group" id="grp-patterns">
    <button class="sb-group-btn" onclick="toggleGroup('grp-patterns')">
      <svg class="sb-chevron" width="10" height="10" viewBox="0 0 10 10" fill="none">
        <path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"
          stroke-linejoin="round" />
      </svg>
      Patterns
    </button>
    <ul class="sb-items" hidden>
      <li><a href="#" class="sb-link">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
            <path d="M2 11V5l5-3 5 3v6l-5 3-5-3z" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round" />
          </svg>
          Forms
        </a></li>
      <li><a href="#" class="sb-link">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
            <path d="M2 10l4-4 2 2 4-5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
          Data display
        </a></li>
    </ul>
  </div>

</nav>

<style>
  .sb-filter {
    display: flex;
    align-items: center;
    gap: 8px;
    margin: 0 16px 16px;
    padding: 7px 12px;
    background: #f2f2f2;
    border: 1px solid #e0e0e5;
    border-radius: 8px;
    color: #aeaeb2;
  }

  .sb-filter input {
    border: none;
    background: none;
    outline: none;
    font-size: 13px;
    color: #1d1d1f;
    font-family: var(--sans);
    width: 100%;
  }

  .sb-filter input::placeholder {
    color: #aeaeb2;
  }

  .sb-nav {
    padding: 0 8px;
  }

  .sb-group {
    margin-bottom: 1px;
  }

  .sb-group-btn {
    width: 100%;
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 5px 10px;
    background: none;
    border: none;
    cursor: pointer;
    font-family: var(--sans);
    font-size: 13px;
    font-weight: 500;
    color: #1d1d1f;
    text-align: left;
    border-radius: 7px;
    transition: background 0.1s;
    -webkit-font-smoothing: antialiased;
  }

  .sb-group-btn:hover {
    background: #f0f0f5;
  }

  .sb-chevron {
    flex-shrink: 0;
    color: #aeaeb2;
    transition: transform 0.18s ease;
  }

  .sb-group.open>.sb-group-btn .sb-chevron {
    transform: rotate(90deg);
  }

  .sb-items {
    list-style: none;
    padding: 1px 0 3px 18px;
  }

  .sb-items[hidden] {
    display: none;
  }

  .sb-link {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    font-weight: 400;
    color: #424245;
    text-decoration: none;
    padding: 4px 10px;
    border-radius: 6px;
    transition: background 0.1s, color 0.1s;
    -webkit-font-smoothing: antialiased;
    line-height: 1.5;
  }

  .sb-link svg {
    flex-shrink: 0;
    color: #8e8e93;
  }

  .sb-link:hover {
    background: #f0f0f5;
    color: #1d1d1f;
  }

  .sb-link:hover svg {
    color: #1d1d1f;
  }

  .sb-link.active {
    font-weight: 600;
    color: #1d1d1f;
    background: #e8e8ed;
  }

  .sb-link.active svg {
    color: #1d1d1f;
  }

  .sb-link.hidden {
    display: none;
  }
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