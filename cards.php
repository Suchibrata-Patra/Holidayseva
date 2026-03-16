<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Component — Airframe UI</title>
    <link rel="stylesheet" href="https://holidayseva.com/cards.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            background: var(--color-bg);
            color: var(--color-text-primary);
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', sans-serif;
            font-size: 16px;
            line-height: 1.6;
            letter-spacing: -0.3px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 24px;
        }

        /* ────────────────────────────────────────────────────────────────
           HEADER
           ──────────────────────────────────────────────────────────────── */

        .page-header {
            margin-bottom: 64px;
        }

        .page-title {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }

        .page-subtitle {
            font-size: 18px;
            color: var(--color-text-secondary);
            font-weight: 400;
        }

        /* ────────────────────────────────────────────────────────────────
           SECTION
           ──────────────────────────────────────────────────────────────── */

        .section {
            margin-bottom: 64px;
        }

        .section-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 24px;
            color: var(--color-text-primary);
            letter-spacing: -0.3px;
        }

        .section-subtitle {
            font-size: 14px;
            color: var(--color-text-secondary);
            margin-bottom: 16px;
            font-weight: 500;
        }

        /* ────────────────────────────────────────────────────────────────
           PREVIEW SECTION
           ──────────────────────────────────────────────────────────────── */

        .preview {
            background: var(--color-bg-secondary);
            border: 1px solid var(--color-border-lighter);
            border-radius: 12px;
            padding: 32px;
            margin-bottom: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 280px;
        }

        /* ────────────────────────────────────────────────────────────────
           CODE BLOCK
           ──────────────────────────────────────────────────────────────── */

        .code-block {
            background: var(--color-bg-dark);
            color: var(--color-text-inverse);
            border-radius: 8px;
            padding: 20px;
            overflow-x: auto;
            font-family: 'Monaco', 'Courier New', monospace;
            font-size: 13px;
            line-height: 1.6;
            margin-bottom: 32px;
        }

        .code-block pre {
            margin: 0;
            white-space: pre-wrap;
            word-break: break-word;
        }

        .code-block code {
            font-family: 'Monaco', 'Courier New', monospace;
        }

        /* ────────────────────────────────────────────────────────────────
           PREVIEW IMAGE PLACEHOLDER
           ──────────────────────────────────────────────────────────────── */

        .preview-image {
            width: 100%;
            max-width: 240px;
            height: 180px;
            background: linear-gradient(135deg, var(--color-primary-alpha) 0%, var(--color-accent-alpha) 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            color: var(--color-text-secondary);
            font-weight: 500;
        }

        /* ────────────────────────────────────────────────────────────────
           TEXT STYLES
           ──────────────────────────────────────────────────────────────── */

        p {
            margin-bottom: 16px;
            color: var(--color-text-secondary);
            font-size: 15px;
        }

        strong {
            color: var(--color-text-primary);
            font-weight: 600;
        }

        a {
            color: var(--color-text-link);
            text-decoration: none;
            transition: color var(--transition-base);
        }

        a:hover {
            color: var(--color-text-link-hover);
        }

        /* ────────────────────────────────────────────────────────────────
           RESPONSIVE
           ──────────────────────────────────────────────────────────────── */

        @media (max-width: 768px) {
            .container {
                padding: 32px 16px;
            }

            .page-title {
                font-size: 32px;
            }

            .section-title {
                font-size: 20px;
            }

            .preview {
                padding: 24px;
                min-height: 240px;
            }

            .code-block {
                font-size: 12px;
                padding: 16px;
            }
        }

        @media (prefers-color-scheme: dark) {
            body {
                background: var(--color-bg);
                color: var(--color-text-primary);
            }

            .page-subtitle,
            p {
                color: var(--color-text-secondary);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- ────────────────────────────────────────────────────────────────
             PAGE HEADER
             ──────────────────────────────────────────────────────────────── -->
        <div class="page-header">
            <h1 class="page-title">Card Component</h1>
            <p class="page-subtitle">Reusable, flexible card layout for content blocks</p>
        </div>

        <!-- ────────────────────────────────────────────────────────────────
             LIVE PREVIEW
             ──────────────────────────────────────────────────────────────── -->
        <div class="section">
            <h2 class="section-title">Preview</h2>
            <p class="section-subtitle">Basic card with image, title, and description</p>

            <div class="preview">
                <div class="card-grid" style="width: 100%; max-width: 800px;">
                    <!-- Card 1: Basic Card -->
                    <div class="card">
                        <div class="card-header">
                            <img src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Crect fill='%23E5E5EA' width='400' height='300'/%3E%3Ctext x='50%' y='50%' text-anchor='middle' dy='.3em' fill='%23999' font-size='18'%3EImage Here%3C/text%3E%3C/svg%3E" alt="Card image">
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Luxury Flat in Kolkata</h3>
                            <p class="card-description">₹13,683 for 2 nights · ⭐ 4.77</p>
                        </div>
                    </div>

                    <!-- Card 2: Card with Footer -->
                    <div class="card">
                        <div class="card-header">
                            <img src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Crect fill='%23E5E5EA' width='400' height='300'/%3E%3Ctext x='50%' y='50%' text-anchor='middle' dy='.3em' fill='%23999' font-size='18'%3EImage Here%3C/text%3E%3C/svg%3E" alt="Card image">
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Villa in Varanasi</h3>
                            <p class="card-description">₹11,638 for 2 nights · ⭐ 4.88</p>
                        </div>
                        <div class="card-footer">
                            <span>Status: Available</span>
                        </div>
                    </div>

                    <!-- Card 3: Card with Body -->
                    <div class="card">
                        <div class="card-header">
                            <img src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Crect fill='%23E5E5EA' width='400' height='300'/%3E%3Ctext x='50%' y='50%' text-anchor='middle' dy='.3em' fill='%23999' font-size='18'%3EImage Here%3C/text%3E%3C/svg%3E" alt="Card image">
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Apartment in Varanasi</h3>
                            <p class="card-description">Modern 2-bedroom with city view</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ────────────────────────────────────────────────────────────────
             USAGE SECTION
             ──────────────────────────────────────────────────────────────── -->
        <div class="section">
            <h2 class="section-title">Usage</h2>
            <p class="section-subtitle">How to use the card component</p>

            <p>
                The card component is built with <strong>semantic HTML</strong> and <strong>CSS classes</strong>.
                Simply link <code>cards.css</code> in your page and use the HTML structure below.
                All styling is handled by the stylesheet — no inline styles needed.
            </p>

            <p>
                The component supports:
            </p>
            <ul style="margin-left: 20px; margin-bottom: 24px; color: var(--color-text-secondary); font-size: 15px;">
                <li style="margin-bottom: 8px;"><strong>.card-header</strong> — Optional image container at top</li>
                <li style="margin-bottom: 8px;"><strong>.card-content</strong> — Title and description wrapper</li>
                <li style="margin-bottom: 8px;"><strong>.card-body</strong> — Main content area (alternative to .card-content)</li>
                <li style="margin-bottom: 8px;"><strong>.card-footer</strong> — Optional footer with metadata or actions</li>
                <li><strong>.card-grid</strong> — Responsive grid container for multiple cards</li>
            </ul>
        </div>

        <!-- ────────────────────────────────────────────────────────────────
             CODE SNIPPET
             ──────────────────────────────────────────────────────────────── -->
        <div class="section">
            <h2 class="section-title">Code Snippet</h2>
            <p class="section-subtitle">Copy and paste this HTML into your page</p>

            <div class="code-block">
                <pre><code>&lt;!-- Link CSS in &lt;head&gt; --&gt;
&lt;link rel="stylesheet" href="colors.css"&gt;
&lt;link rel="stylesheet" href="cards.css"&gt;

&lt;!-- Single Card --&gt;
&lt;div class="card"&gt;
  &lt;div class="card-header"&gt;
    &lt;img src="image.jpg" alt="Card image"&gt;
  &lt;/div&gt;
  &lt;div class="card-content"&gt;
    &lt;h3 class="card-title"&gt;Card Title&lt;/h3&gt;
    &lt;p class="card-description"&gt;Short description&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="card-footer"&gt;
    &lt;span&gt;Footer action&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Multiple Cards in Grid --&gt;
&lt;div class="card-grid"&gt;
  &lt;div class="card"&gt;...&lt;/div&gt;
  &lt;div class="card"&gt;...&lt;/div&gt;
  &lt;div class="card"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
        </div>

        <!-- ────────────────────────────────────────────────────────────────
             VARIANTS
             ──────────────────────────────────────────────────────────────── -->
        <div class="section">
            <h2 class="section-title">Variants</h2>
            <p class="section-subtitle">Common card patterns</p>

            <h3 style="font-size: 16px; font-weight: 600; margin-top: 32px; margin-bottom: 16px;">Minimal Card (No Footer)</h3>
            <div class="code-block">
                <pre><code>&lt;div class="card"&gt;
  &lt;div class="card-header"&gt;
    &lt;img src="image.jpg" alt="Card"&gt;
  &lt;/div&gt;
  &lt;div class="card-content"&gt;
    &lt;h3 class="card-title"&gt;Title&lt;/h3&gt;
    &lt;p class="card-description"&gt;Subtitle&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>

            <h3 style="font-size: 16px; font-weight: 600; margin-top: 32px; margin-bottom: 16px;">Card with Body Content</h3>
            <div class="code-block">
                <pre><code>&lt;div class="card"&gt;
  &lt;div class="card-content"&gt;
    &lt;h3 class="card-title"&gt;Title&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="card-body"&gt;
    Long-form content goes here...
  &lt;/div&gt;
  &lt;div class="card-footer"&gt;
    &lt;button&gt;Action&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
        </div>

        <!-- ────────────────────────────────────────────────────────────────
             GUIDELINES
             ──────────────────────────────────────────────────────────────── -->
        <div class="section">
            <h2 class="section-title">Guidelines</h2>

            <h3 style="font-size: 16px; font-weight: 600; margin-bottom: 12px; color: var(--color-text-primary);">✓ Do</h3>
            <ul style="margin-left: 20px; margin-bottom: 24px; color: var(--color-text-secondary); font-size: 15px;">
                <li style="margin-bottom: 8px;">Use meaningful titles that clearly describe the card content</li>
                <li style="margin-bottom: 8px;">Keep descriptions concise — one or two lines max</li>
                <li style="margin-bottom: 8px;">Use <code>.card-grid</code> for multiple cards to maintain consistent spacing</li>
                <li style="margin-bottom: 8px;">Include alt text on images for accessibility</li>
                <li>Pair with your design tokens for colors and shadows</li>
            </ul>

            <h3 style="font-size: 16px; font-weight: 600; margin-bottom: 12px; color: var(--color-text-primary);">✗ Don't</h3>
            <ul style="margin-left: 20px; color: var(--color-text-secondary); font-size: 15px;">
                <li style="margin-bottom: 8px;">Add inline styles or raw hex colors — use CSS tokens only</li>
                <li style="margin-bottom: 8px;">Truncate text without visual indicators</li>
                <li style="margin-bottom: 8px;">Make cards clickable without proper keyboard support</li>
                <li style="margin-bottom: 8px;">Nest cards deeply — keep structure flat and simple</li>
            </ul>
        </div>

    </div>
</body>
</html>