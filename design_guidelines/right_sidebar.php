<?php
/**
 * right_sidebar.php
 * Right TOC — Apple developer.apple.com style
 * Matches: supported platforms row + plain left-bordered section links
 * Include: <?php include __DIR__ . '/right_sidebar.php'; ?>
 */
?>

<div class="toc-wrap">

  <!-- Supported platforms -->
  <div class="toc-platforms">
    <p class="toc-platforms-label">Supported platforms</p>
    <div class="toc-platform-icons">

      <!-- iPhone -->
      <svg width="18" height="22" viewBox="0 0 18 22" fill="none" title="iPhone">
        <rect x="1" y="1" width="16" height="20" rx="3.5" stroke="currentColor" stroke-width="1.3"/>
        <circle cx="9" cy="18" r="1" fill="currentColor"/>
        <path d="M7 3h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
      </svg>

      <!-- iPad -->
      <svg width="18" height="22" viewBox="0 0 18 22" fill="none" title="iPad">
        <rect x="1" y="1" width="16" height="20" rx="2.5" stroke="currentColor" stroke-width="1.3"/>
        <circle cx="9" cy="18.5" r="1" fill="currentColor"/>
      </svg>

      <!-- Mac -->
      <svg width="24" height="22" viewBox="0 0 24 22" fill="none" title="Mac">
        <rect x="1" y="1" width="22" height="14" rx="2" stroke="currentColor" stroke-width="1.3"/>
        <path d="M1 18h22" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
        <path d="M8 18l1 3h6l1-3" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/>
      </svg>

      <!-- TV -->
      <svg width="24" height="20" viewBox="0 0 24 20" fill="none" title="Apple TV">
        <rect x="1" y="1" width="22" height="14" rx="2" stroke="currentColor" stroke-width="1.3"/>
        <path d="M9 15v4M15 15v4M7 19h10" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
      </svg>

      <!-- Vision Pro
      <svg width="26" height="16" viewBox="0 0 26 16" fill="none" title="visionOS">
        <path d="M1 8C1 8 5 1.5 13 1.5S25 8 25 8s-4 6.5-12 6.5S1 8 1 8z" stroke="currentColor" stroke-width="1.3"/>
        <ellipse cx="13" cy="8" rx="3.5" ry="4" stroke="currentColor" stroke-width="1.3"/>
      </svg> -->

      <!-- Watch
      <svg width="14" height="22" viewBox="0 0 14 22" fill="none" title="Apple Watch">
        <rect x="1" y="5" width="12" height="12" rx="3" stroke="currentColor" stroke-width="1.3"/>
        <path d="M4 5V3.5a1 1 0 011-1h4a1 1 0 011 1V5M4 17v1.5a1 1 0 001 1h4a1 1 0 001-1V17" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
      </svg> -->

    </div>
  </div>

  <!-- TOC links — no "On this page" label, just the list -->
  <ul class="toc-list" id="tocList">
    <li><a class="toc-link" href="#overview">Toggle</a></li>
    <li><a class="toc-link" href="#anatomy">Anatomy</a></li>
    <li><a class="toc-link" href="#specs">Specifications</a></li>
    <li><a class="toc-link" href="#usage">HTML Usage</a></li>
    <li><a class="toc-link" href="#javascript">JavaScript API</a></li>
    <li><a class="toc-link" href="#integration">Integration</a></li>
    <li><a class="toc-link" href="#accessibility">Accessibility</a></li>
  </ul>

</div>

<style>
  .toc-wrap {
    padding: 24px 0 0 20px;
  }

  /* ── Supported platforms ─────────────────── */
  .toc-platforms {
    margin-bottom: 22px;
  }

  .toc-platforms-label {
    font-size: 12px;
    font-weight: 600;
    color: #1d1d1f;
    margin-bottom: 10px;
    letter-spacing: -0.01em;
    -webkit-font-smoothing: antialiased;
  }

  .toc-platform-icons {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #1d1d1f;
  }

  .toc-platform-icons svg {
    flex-shrink: 0;
    opacity: 0.75;
  }

  /* ── TOC list ────────────────────────────── */
  .toc-list {
    list-style: none;
    border-left: 1px solid #e0e0e5;
    padding: 0;
    margin: 0;
  }

  .toc-link {
    display: block;
    font-size: 12.5px;
    font-weight: 400;
    color: #6e6e73;
    text-decoration: none;
    padding: 4px 0 4px 14px;
    border-left: 2px solid transparent;
    margin-left: -1px;
    transition: color 0.1s, border-color 0.1s;
    line-height: 1.5;
    -webkit-font-smoothing: antialiased;
    letter-spacing: -0.005em;
  }

  .toc-link:hover {
    color: #1d1d1f;
  }

  .toc-link.active {
    color: #1d1d1f;
    font-weight: 600;
    border-left-color: #1d1d1f;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const tocLinks  = document.querySelectorAll('.toc-link');
    const sections  = document.querySelectorAll('section[id], div[id], header[id]');

    const spy = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          tocLinks.forEach(a => {
            a.classList.remove('active');
            if (a.getAttribute('href') === '#' + entry.target.id) {
              a.classList.add('active');
            }
          });
        }
      });
    }, { rootMargin: '-15% 0px -75% 0px' });

    sections.forEach(s => spy.observe(s));
  });
</script>