<?php
/**
 * drawer_sidebar.php — Mobile slide-in drawer
 * Contains the same left_sidebar.php content inside a drawer shell.
 * This element is display:none on desktop (≥681px) and a fixed
 * drawer on mobile (≤680px). Controlled by header.php JS.
 *
 * Include ONCE per page, anywhere after header.php:
 *   <?php include __DIR__ . '/drawer_sidebar.php'; ?>
 *
 * The hamburger button in header.php targets id="drawerSidebar".
 */
?>

<aside class="drawer-sidebar" id="drawerSidebar" aria-label="Navigation drawer" aria-hidden="true">

  <!-- Drawer top bar -->
  <div class="drawer-header">
    <span class="drawer-header-title">Navigation</span>
    <button class="drawer-close" id="drawerClose" aria-label="Close navigation">
      <svg width="10" height="10" viewBox="0 0 10 10" fill="none" aria-hidden="true">
        <path d="M1 1l8 8M9 1L1 9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
      </svg>
    </button>
  </div>

  <!-- Reuse the exact same left sidebar content -->
  <?php include __DIR__ . '/left_sidebar.php'; ?>

</aside>

<script>
// Wire the drawer-close button (the hamburger close is in header.php)
(function () {
  const closeBtn = document.getElementById('drawerClose');
  const drawer   = document.getElementById('drawerSidebar');
  const backdrop = document.getElementById('drawerBackdrop');
  const burger   = document.getElementById('navHamburger');

  if (!closeBtn) return;

  // Sync aria-hidden with open state
  function syncAria() {
    const isOpen = drawer.classList.contains('is-open');
    drawer.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
  }

  // Observe class changes on drawer to sync aria-hidden
  new MutationObserver(syncAria).observe(drawer, {
    attributes: true, attributeFilter: ['class']
  });

  closeBtn.addEventListener('click', () => {
    // Trigger the close logic in header.php via burger click simulation,
    // or dispatch a custom event that header.php listens to.
    drawer.classList.remove('is-open');
    backdrop.classList.remove('is-active');
    burger.classList.remove('is-open');
    burger.setAttribute('aria-expanded', 'false');
    burger.setAttribute('aria-label', 'Open navigation menu');
    document.body.style.overflow = '';
    setTimeout(() => backdrop.classList.remove('is-visible'), 300);
    burger.focus();
  });
})();
</script>