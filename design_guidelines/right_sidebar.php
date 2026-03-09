<?php
/**
 * right_sidebar.php  — premium Apple grey/black
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

  <div class="toc-divider"></div>

  <p class="toc-related-heading">Related</p>
  <div class="toc-tags">
    <a href="#" class="toc-tag">Button</a>
    <a href="#" class="toc-tag">Input</a>
    <a href="#" class="toc-tag">Checkbox</a>
  </div>
</div>

<style>
.toc-wrap { padding: 22px 16px 0; }

.toc-heading {
  font-size: 10px; font-weight: 700;
  letter-spacing: 0.08em; text-transform: uppercase;
  color: var(--text-quaternary, #aeaeb2);
  margin-bottom: 14px;
}

.toc-list { list-style: none; }

.toc-link {
  display: block;
  font-size: 12.5px; font-weight: 400;
  color: var(--text-tertiary, #6e6e73);
  text-decoration: none;
  padding: 4px 8px;
  border-radius: 5px;
  border-left: 2px solid transparent;
  margin-left: -2px;
  transition: color 0.12s, background 0.12s, border-color 0.12s;
  line-height: 1.5;
  -webkit-font-smoothing: antialiased;
}
.toc-link:hover {
  color: var(--text-primary, #1d1d1f);
  background: var(--bg-secondary, #f5f5f7);
}
.toc-link.active {
  color: var(--text-primary, #1d1d1f);
  font-weight: 600;
  border-left-color: #1d1d1f;
  background: var(--bg-secondary, #f5f5f7);
}

.toc-divider {
  height: 1px;
  background: var(--border-light, #e8e8ed);
  margin: 24px 0 18px;
}

.toc-related-heading {
  font-size: 10px; font-weight: 700;
  letter-spacing: 0.08em; text-transform: uppercase;
  color: var(--text-quaternary, #aeaeb2);
  margin-bottom: 10px;
}

.toc-tags { display: flex; flex-wrap: wrap; gap: 5px; }

.toc-tag {
  font-size: 11.5px; font-weight: 400;
  color: var(--text-secondary, #424245);
  text-decoration: none;
  padding: 3px 10px;
  border-radius: 20px;
  border: 1px solid var(--border, #d2d2d7);
  background: var(--bg-primary, #fff);
  transition: background 0.1s, color 0.1s, border-color 0.1s;
}
.toc-tag:hover {
  background: #1d1d1f;
  color: #fff;
  border-color: #1d1d1f;
}
</style>

<script>
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