<?php
/**
 * right_sidebar.php
 * Right "On this page" TOC — Apple HIG style
 * Include: <?php include __DIR__ . '/right_sidebar.php'; ?>
 */
?>

<div class="toc-wrap">
  <p class="toc-heading">On this page</p>
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
    padding: 20px 0 0 16px;
  }

  .toc-heading {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.04em;
    color: #1d1d1f;
    margin-bottom: 10px;
    padding-left: 8px;
  }

  .toc-list {
    list-style: none;
    border-left: 1px solid #e0e0e5;
  }

  .toc-link {
    display: block;
    font-size: 12px;
    font-weight: 400;
    color: #6e6e73;
    text-decoration: none;
    padding: 3px 0 3px 12px;
    border-left: 2px solid transparent;
    margin-left: -1px;
    transition: color 0.12s, border-color 0.12s;
    line-height: 1.5;
    -webkit-font-smoothing: antialiased;
  }
  .toc-link:hover { color: #1d1d1f; }
  .toc-link.active {
    color: #1d1d1f;
    font-weight: 500;
    border-left-color: #1d1d1f;
  }
</style>

<script>
  // Scroll spy for right TOC
  document.addEventListener('DOMContentLoaded', () => {
    const tocLinks = document.querySelectorAll('.toc-link');
    const sections = document.querySelectorAll('section[id], div[id], header[id]');

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