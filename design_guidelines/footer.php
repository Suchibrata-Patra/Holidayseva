<?php
/**
 * footer.php — Apple developer.apple.com-style site footer
 * Four-column link grid + feedback bar + legal strip + theme switcher
 *
 * Include: <?php include __DIR__ . '/footer.php'; ?>
 */
?>

<footer class="site-footer" role="contentinfo">

  <!-- ── Breadcrumb bar ────────────────────────────── -->
  <div class="footer-breadcrumb">
    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true">
      <path d="M7 1.5L2.5 7 7 12.5M2.5 7h9" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <span class="footer-breadcrumb-sep" aria-hidden="true">›</span>
    <a href="#">Developer</a>
    <span class="footer-breadcrumb-sep" aria-hidden="true">›</span>
    <a href="#">Documentation</a>
  </div>

  <!-- ── Four-column link grid ─────────────────────── -->
  <div class="footer-grid">

    <!-- Col 1 -->
    <div class="footer-col">
      <p class="footer-col-heading">Design</p>
      <ul>
        <li><a href="#">Colour</a></li>
        <li><a href="#">Typography</a></li>
        <li><a href="#">Spacing</a></li>
        <li><a href="#">Icons</a></li>
        <li><a href="#">Layout</a></li>
      </ul>
      <p class="footer-col-heading" style="margin-top:24px">Components</p>
      <ul>
        <li><a href="#">Button</a></li>
        <li><a href="#">Input</a></li>
        <li><a href="#">Toggle</a></li>
        <li><a href="#">Modal</a></li>
        <li><a href="#">Avatar</a></li>
      </ul>
    </div>

    <!-- Col 2 -->
    <div class="footer-col">
      <p class="footer-col-heading">Topics &amp; Patterns</p>
      <ul>
        <li><a href="#">Accessibility</a></li>
        <li><a href="#">Animation</a></li>
        <li><a href="#">Data Display</a></li>
        <li><a href="#">Forms</a></li>
        <li><a href="#">Navigation</a></li>
        <li><a href="#">Charting</a></li>
        <li><a href="#">Feedback &amp; Alerts</a></li>
        <li><a href="#">Loading States</a></li>
        <li><a href="#">Empty States</a></li>
        <li><a href="#">Onboarding</a></li>
        <li><a href="#">Dark Mode</a></li>
      </ul>
    </div>

    <!-- Col 3 -->
    <div class="footer-col">
      <p class="footer-col-heading">Resources</p>
      <ul>
        <li><a href="#">Documentation</a></li>
        <li><a href="#">Changelog</a></li>
        <li><a href="#">Downloads</a></li>
        <li><a href="#">Figma Kit</a></li>
      </ul>
      <p class="footer-col-heading" style="margin-top:24px">Support</p>
      <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Bug Reporting</a></li>
        <li><a href="#">System Status</a></li>
      </ul>
      <p class="footer-col-heading" style="margin-top:24px">Account</p>
      <ul>
        <li><a href="#">Sign In</a></li>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">API Keys</a></li>
      </ul>
    </div>

    <!-- Col 4 -->
    <div class="footer-col">
      <p class="footer-col-heading">Company</p>
      <ul>
        <li><a href="#">About Holidayseva</a></li>
        <li><a href="#">Design Philosophy</a></li>
        <li><a href="#">Careers</a></li>
        <li><a href="#">Press Kit</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
      <p class="footer-col-heading" style="margin-top:24px">Community</p>
      <ul>
        <li><a href="#">Forum</a></li>
        <li><a href="#">GitHub</a></li>
        <li><a href="#">Discord</a></li>
        <li><a href="#">Design Awards</a></li>
        <li><a href="#">Showcase</a></li>
      </ul>
    </div>

  </div>

  <!-- ── Feedback bar ───────────────────────────────── -->
  <div class="footer-feedback">
    <p>To submit feedback on these guidelines, visit <a href="#">Feedback Assistant</a>.</p>
    <div class="footer-theme-switcher" role="group" aria-label="Colour scheme">
      <button class="theme-btn" data-theme="light" aria-pressed="false">Light</button>
      <button class="theme-btn" data-theme="dark"  aria-pressed="false">Dark</button>
      <button class="theme-btn active" data-theme="auto" aria-pressed="true">Auto</button>
    </div>
  </div>

  <!-- ── Legal strip ────────────────────────────────── -->
  <div class="footer-legal">
    <span>Copyright &copy; <?= date('Y') ?> Holidayseva. All rights reserved.</span>
    <nav class="footer-legal-links" aria-label="Legal">
      <a href="#">Terms of Use</a>
      <span aria-hidden="true">|</span>
      <a href="#">Privacy Policy</a>
      <span aria-hidden="true">|</span>
      <a href="#">Cookie Settings</a>
    </nav>
  </div>

</footer>

<style>
  /* ── Footer shell ────────────────────────────────── */
  .site-footer {
    /* Push footer inward to clear both fixed sidebars */
    margin-left: var(--sidebar-w, 240px);
    margin-right: var(--toc-w, 200px);
    background: #f5f5f7;
    border-top: 1px solid #d2d2d7;
    font-family: var(--font-sans, -apple-system, 'Helvetica Neue', sans-serif);
    -webkit-font-smoothing: antialiased;
    color: #1d1d1f;
  }

  /* ── Breadcrumb bar ──────────────────────────────── */
  .footer-breadcrumb {
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 14px 48px;
    border-bottom: 1px solid #d2d2d7;
    font-size: 13px;
    color: #6e6e73;
  }
  .footer-breadcrumb svg { color: #1d1d1f; flex-shrink: 0; }
  .footer-breadcrumb a {
    color: #424245;
    text-decoration: none;
    transition: color 0.12s;
  }
  .footer-breadcrumb a:hover { color: #0071e3; }
  .footer-breadcrumb-sep { color: #aeaeb2; font-size: 12px; }

  /* ── Four-column grid ────────────────────────────── */
  .footer-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 0;
    padding: 40px 48px 48px;
    border-bottom: 1px solid #d2d2d7;
  }

  .footer-col {
    padding-right: 32px;
  }
  .footer-col:last-child { padding-right: 0; }

  .footer-col-heading {
    font-size: 12px;
    font-weight: 600;
    color: #1d1d1f;
    letter-spacing: -0.01em;
    margin-bottom: 10px;
  }

  .footer-col ul {
    list-style: none;
    padding: 0;
    margin: 0 0 4px;
  }

  .footer-col ul li {
    margin-bottom: 1px;
  }

  .footer-col ul a {
    display: inline-block;
    font-size: 13px;
    font-weight: 400;
    color: #424245;
    text-decoration: none;
    padding: 3px 0;
    line-height: 1.5;
    transition: color 0.1s;
    letter-spacing: -0.005em;
  }
  .footer-col ul a:hover { color: #0071e3; }

  /* ── Feedback bar ────────────────────────────────── */
  .footer-feedback {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 18px 48px;
    border-bottom: 1px solid #d2d2d7;
    gap: 24px;
    flex-wrap: wrap;
  }

  .footer-feedback p {
    font-size: 13px;
    color: #424245;
    margin: 0;
    letter-spacing: -0.005em;
  }

  .footer-feedback p a {
    color: #0071e3;
    text-decoration: none;
  }
  .footer-feedback p a:hover { text-decoration: underline; }

  /* Theme switcher pill group */
  .footer-theme-switcher {
    display: flex;
    border: 1px solid #d2d2d7;
    border-radius: 20px;
    overflow: hidden;
    flex-shrink: 0;
    background: #fff;
  }

  .theme-btn {
    border: none;
    background: none;
    padding: 5px 14px;
    font-size: 12.5px;
    font-weight: 400;
    color: #424245;
    cursor: pointer;
    font-family: inherit;
    -webkit-font-smoothing: antialiased;
    transition: background 0.12s, color 0.12s;
    line-height: 1.4;
    letter-spacing: -0.01em;
  }

  .theme-btn:hover { color: #1d1d1f; }

  .theme-btn.active {
    background: #0071e3;
    color: #fff;
    font-weight: 500;
    border-radius: 20px;
    margin: 2px;
    padding: 3px 12px;
  }

  /* ── Legal strip ─────────────────────────────────── */
  .footer-legal {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 48px;
    gap: 16px;
    flex-wrap: wrap;
  }

  .footer-legal span,
  .footer-legal-links a,
  .footer-legal-links span {
    font-size: 12.5px;
    color: #424245;
    letter-spacing: -0.005em;
  }

  .footer-legal-links {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .footer-legal-links a {
    text-decoration: none;
    transition: color 0.1s;
  }
  .footer-legal-links a:hover { color: #0071e3; }

  .footer-legal-links span[aria-hidden] { color: #aeaeb2; }

  /* ── Responsive ──────────────────────────────────── */
  @media (max-width: 1100px) {
    /* Right TOC sidebar typically hidden at this width */
    .site-footer { margin-right: 0; }
  }

  @media (max-width: 900px) {
    /* Left sidebar hidden — full-width footer */
    .site-footer { margin-left: 0; margin-right: 0; }
    .footer-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 32px 0;
    }
    .footer-col { padding-right: 16px; }
  }

  @media (max-width: 560px) {
    .footer-breadcrumb,
    .footer-grid,
    .footer-feedback,
    .footer-legal { padding-left: 20px; padding-right: 20px; }

    .footer-grid { grid-template-columns: 1fr; gap: 24px; }

    .footer-legal { flex-direction: column; align-items: flex-start; gap: 8px; }
  }
</style>

<script>
  (function () {
    const btns = document.querySelectorAll('.theme-btn');
    btns.forEach(btn => {
      btn.addEventListener('click', function () {
        btns.forEach(b => { b.classList.remove('active'); b.setAttribute('aria-pressed', 'false'); });
        this.classList.add('active');
        this.setAttribute('aria-pressed', 'true');

        const theme = this.dataset.theme;
        if (theme === 'dark') {
          document.documentElement.setAttribute('data-theme', 'dark');
        } else if (theme === 'light') {
          document.documentElement.setAttribute('data-theme', 'light');
        } else {
          document.documentElement.removeAttribute('data-theme');
        }
      });
    });
  })();
</script>