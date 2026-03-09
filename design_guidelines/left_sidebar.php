<?php
/**
 * left_sidebar.php
 * Left navigation — Apple HIG style
 * Three sections: Getting Started · Foundations · Components
 * Active state detected via current PHP page filename
 *
 * Include: <?php include __DIR__ . '/left_sidebar.php'; ?>
 */

// Detect current page so we can mark the right link active
$current = basename($_SERVER['PHP_SELF']);
?>

<div class="sb-filter">
  <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
    <path d="M2 4h12M4 8h8M6 12h4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
  </svg>
  <input type="text" placeholder="Filter" class="sb-filter-input" oninput="filterSidebar(this)" />
</div>

<nav class="sb-nav" id="sbNav">

  <!-- ════════════════════════════════════════
       1. GETTING STARTED
  ════════════════════════════════════════ -->
  <?php
  $gettingStartedPages = ['index.php','introduction.php','overview.php','whats-new.php'];
  $gettingStartedOpen  = in_array($current, $gettingStartedPages);
  ?>
  <div class="sb-group <?= $gettingStartedOpen ? 'open' : '' ?>">
    <button class="sb-group-btn" onclick="toggleGroup(this)">
      <svg class="sb-chevron" width="9" height="9" viewBox="0 0 10 10" fill="none">
        <path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      Getting started
    </button>
    <ul class="sb-items" <?= !$gettingStartedOpen ? 'hidden' : '' ?>>

      <li><a href="index.php" class="sb-link <?= ($current === 'index.php' || $current === 'introduction.php') ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.2"/>
          <path d="M8 5v3.5L10 10" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
        </svg>
        Introduction
      </a></li>

      <li><a href="overview.php" class="sb-link <?= $current === 'overview.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="2" y="2" width="5.5" height="5.5" rx="1" stroke="currentColor" stroke-width="1.2"/>
          <rect x="8.5" y="2" width="5.5" height="5.5" rx="1" stroke="currentColor" stroke-width="1.2"/>
          <rect x="2" y="8.5" width="5.5" height="5.5" rx="1" stroke="currentColor" stroke-width="1.2"/>
          <rect x="8.5" y="8.5" width="5.5" height="5.5" rx="1" stroke="currentColor" stroke-width="1.2"/>
        </svg>
        Overview
      </a></li>

      <li><a href="whats-new.php" class="sb-link <?= $current === 'whats-new.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <path d="M8 2l1.5 4.5H14l-3.7 2.7 1.4 4.3L8 11l-3.7 2.5 1.4-4.3L2 6.5h4.5L8 2z" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/>
        </svg>
        What's new
      </a></li>

    </ul>
  </div>


  <!-- ════════════════════════════════════════
       2. FOUNDATIONS
  ════════════════════════════════════════ -->
  <?php
  $foundationPages = ['colour.php','typography.php','spacing.php','icons.php','layout.php'];
  $foundationOpen  = in_array($current, $foundationPages);
  ?>
  <div class="sb-group <?= $foundationOpen ? 'open' : '' ?>">
    <button class="sb-group-btn" onclick="toggleGroup(this)">
      <svg class="sb-chevron" width="9" height="9" viewBox="0 0 10 10" fill="none">
        <path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      Foundations
    </button>
    <ul class="sb-items" <?= !$foundationOpen ? 'hidden' : '' ?>>

      <li><a href="colour.php" class="sb-link <?= $current === 'colour.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <circle cx="5.5" cy="6.5" r="3" stroke="currentColor" stroke-width="1.2"/>
          <circle cx="10.5" cy="6.5" r="3" stroke="currentColor" stroke-width="1.2"/>
          <circle cx="8" cy="10.5" r="3" stroke="currentColor" stroke-width="1.2"/>
        </svg>
        Colour
      </a></li>

      <li><a href="typography.php" class="sb-link <?= $current === 'typography.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <path d="M3 4h10M8 4v8" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
        </svg>
        Typography
      </a></li>

      <li><a href="spacing.php" class="sb-link <?= $current === 'spacing.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <path d="M2 8h12M8 2v12" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
          <path d="M4 5v6M12 5v6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" opacity=".4"/>
        </svg>
        Spacing
      </a></li>

      <li><a href="icons.php" class="sb-link <?= $current === 'icons.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <path d="M8 2l1.8 3.6L14 6.2l-3 2.9.7 4.1L8 11.1l-3.7 2.1.7-4.1-3-2.9 4.2-.6L8 2z" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/>
        </svg>
        Icons
      </a></li>

      <li><a href="layout.php" class="sb-link <?= $current === 'layout.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="2" y="2" width="12" height="12" rx="1.5" stroke="currentColor" stroke-width="1.2"/>
          <path d="M2 6h12M6 6v8" stroke="currentColor" stroke-width="1.2"/>
        </svg>
        Layout
      </a></li>

    </ul>
  </div>


  <!-- ════════════════════════════════════════
       3. COMPONENTS
  ════════════════════════════════════════ -->
  <?php
  $componentPages = ['button.php','input.php','toggle.php','modal.php','avatar.php',
                     'badge.php','card.php','dropdown.php','tabs.php','tooltip.php'];
  $componentOpen  = in_array($current, $componentPages);
  ?>
  <div class="sb-group <?= $componentOpen ? 'open' : '' ?>">
    <button class="sb-group-btn" onclick="toggleGroup(this)">
      <svg class="sb-chevron" width="9" height="9" viewBox="0 0 10 10" fill="none">
        <path d="M3 2l4 3-4 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      Components
    </button>
    <ul class="sb-items" <?= !$componentOpen ? 'hidden' : '' ?>>

      <li><a href="button.php" class="sb-link <?= $current === 'button.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="1.5" y="5" width="13" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/>
        </svg>
        Button
      </a></li>

      <li><a href="input.php" class="sb-link <?= $current === 'input.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="1.5" y="4" width="13" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2"/>
          <path d="M5 8h6M5 10.5h3" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
        </svg>
        Input
      </a></li>

      <li><a href="toggle.php" class="sb-link <?= $current === 'toggle.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="1" y="5" width="14" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/>
          <circle cx="11.5" cy="8" r="2" fill="currentColor"/>
        </svg>
        Toggle
      </a></li>

      <li><a href="modal.php" class="sb-link <?= $current === 'modal.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/>
          <path d="M1.5 6.5h13" stroke="currentColor" stroke-width="1.2"/>
          <path d="M5 9.5h6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
        </svg>
        Modal
      </a></li>

      <li><a href="avatar.php" class="sb-link <?= $current === 'avatar.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <circle cx="8" cy="5.5" r="2.5" stroke="currentColor" stroke-width="1.2"/>
          <path d="M2.5 14c0-3.04 2.46-5.5 5.5-5.5s5.5 2.46 5.5 5.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
        </svg>
        Avatar
      </a></li>

      <li><a href="badge.php" class="sb-link <?= $current === 'badge.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="3" y="5" width="10" height="6" rx="3" stroke="currentColor" stroke-width="1.2"/>
          <path d="M8 7v2M7 8h2" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
        </svg>
        Badge
      </a></li>

      <li><a href="card.php" class="sb-link <?= $current === 'card.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="1.5" y="3" width="13" height="10" rx="1.5" stroke="currentColor" stroke-width="1.2"/>
          <path d="M4 6.5h5M4 9h8M4 11h6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
        </svg>
        Card
      </a></li>

      <li><a href="dropdown.php" class="sb-link <?= $current === 'dropdown.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="1.5" y="4" width="13" height="5" rx="1.5" stroke="currentColor" stroke-width="1.2"/>
          <path d="M2 11h12M2 13.5h8" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" opacity=".35"/>
          <path d="M11 6.5l2 1.5-2 1.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Dropdown
      </a></li>

      <li><a href="tabs.php" class="sb-link <?= $current === 'tabs.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <path d="M2 10V5.5A1.5 1.5 0 013.5 4H7l1.5 2H14v4a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 012 10z" stroke="currentColor" stroke-width="1.2"/>
        </svg>
        Tabs
      </a></li>

      <li><a href="tooltip.php" class="sb-link <?= $current === 'tooltip.php' ? 'active' : '' ?>">
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none">
          <rect x="2" y="2" width="12" height="8" rx="1.5" stroke="currentColor" stroke-width="1.2"/>
          <path d="M5 10.5l1.5 2.5 1.5-2.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M5 5.5h6M5 7.5h4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
        </svg>
        Tooltip
      </a></li>

    </ul>
  </div>

</nav>

<style>
  /* ── Filter bar ─────────────────────────────────── */
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

  /* ── Nav wrapper ────────────────────────────────── */
  .sb-nav { padding: 0 8px; }
  .sb-group { margin-bottom: 2px; }

  /* ── Group header button ────────────────────────── */
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
    color: #6e6e73;
    text-align: left;
    border-radius: 6px;
    transition: background 0.1s, color 0.1s;
    -webkit-font-smoothing: antialiased;
    line-height: 1.4;
  }
  .sb-group-btn:hover { background: #f2f2f7; color: #1d1d1f; }

  /* Group label bold+black when it contains the active page */
  .sb-group.has-active > .sb-group-btn {
    font-weight: 600;
    color: #1d1d1f;
  }
  .sb-group.has-active > .sb-group-btn .sb-chevron {
    color: #1d1d1f;
  }

  /* ── Chevron ────────────────────────────────────── */
  .sb-chevron {
    flex-shrink: 0;
    color: #aeaeb2;
    transition: transform 0.16s ease;
  }
  .sb-group.open > .sb-group-btn .sb-chevron {
    transform: rotate(90deg);
  }

  /* ── Items list ─────────────────────────────────── */
  .sb-items {
    list-style: none;
    padding: 0 0 6px 0;
    margin: 0;
  }
  .sb-items[hidden] { display: none; }

  /* ── Individual link — deep grey by default ─────── */
  .sb-link {
    display: flex;
    align-items: flex-start;
    gap: 9px;
    font-size: 13.5px;
    font-weight: 400;
    color: #6e6e73;
    text-decoration: none;
    padding: 5px 10px 5px 26px;
    border-radius: 6px;
    transition: background 0.1s, color 0.1s;
    -webkit-font-smoothing: antialiased;
    line-height: 1.45;
  }
  .sb-link svg {
    flex-shrink: 0;
    color: #aeaeb2;
    margin-top: 1px;
  }
  .sb-link:hover {
    background: #f2f2f7;
    color: #1d1d1f;
  }
  .sb-link:hover svg { color: #6e6e73; }

  /* Active — bold + pure black only */
  .sb-link.active {
    font-weight: 600;
    color: #1d1d1f;
  }
  .sb-link.active svg { color: #1d1d1f; }

  .sb-link.hidden { display: none; }
</style>

<script>
  // Mark the parent group of the active link with .has-active on load
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.sb-link.active').forEach(link => {
      const grp = link.closest('.sb-group');
      if (grp) grp.classList.add('has-active');
    });
  });

  function toggleGroup(btn) {
    const grp  = btn.closest('.sb-group');
    const list = grp.querySelector('.sb-items');
    const isOpen = grp.classList.contains('open');
    grp.classList.toggle('open', !isOpen);
    if (isOpen) list.setAttribute('hidden', '');
    else        list.removeAttribute('hidden');
  }

  function filterSidebar(input) {
    const term = input.value.toLowerCase().trim();
    const nav  = input.closest('.sidebar-left, .drawer-sidebar') || document;

    if (!term) {
      nav.querySelectorAll('.sb-link').forEach(a => a.classList.remove('hidden'));
      nav.querySelectorAll('.sb-group').forEach(grp => {
        const list   = grp.querySelector('.sb-items');
        const isOpen = grp.classList.contains('open');
        if (isOpen) list.removeAttribute('hidden');
        else        list.setAttribute('hidden', '');
      });
      return;
    }

    nav.querySelectorAll('.sb-group').forEach(grp => {
      const links    = grp.querySelectorAll('.sb-link');
      const list     = grp.querySelector('.sb-items');
      let   hasMatch = false;

      links.forEach(a => {
        const match = a.textContent.toLowerCase().includes(term);
        a.classList.toggle('hidden', !match);
        if (match) hasMatch = true;
      });

      if (hasMatch) {
        grp.classList.add('open');
        list.removeAttribute('hidden');
      }
    });
  }
</script>