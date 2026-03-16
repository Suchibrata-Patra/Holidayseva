<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Component — Airframe UI</title>
    <link rel="stylesheet" href="colors.css">
    <link rel="stylesheet" href="cards.css">
    <style>
        /* ════════════════════════════════════════════════════════════════
           RESET & TYPOGRAPHY BASE
           ════════════════════════════════════════════════════════════════ */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', sans-serif;
            font-size: 16px;
            line-height: 1.6;
            letter-spacing: -0.3px;
            background: var(--color-bg);
            color: var(--color-text-primary);
        }

        /* ════════════════════════════════════════════════════════════════
           LAYOUT — CONTAINER & SPACING
           ════════════════════════════════════════════════════════════════ */

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* ════════════════════════════════════════════════════════════════
           HERO — PAGE HEADER
           ════════════════════════════════════════════════════════════════ */

        .hero {
            padding: 80px 0 120px 0;
            border-bottom: 1px solid var(--color-border-lighter);
        }

        .hero-content {
            max-width: 620px;
        }

        .hero-overline {
            display: inline-block;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            color: var(--color-primary);
            margin-bottom: 16px;
        }

        .hero-title {
            font-size: 56px;
            font-weight: 700;
            line-height: 1.15;
            letter-spacing: -0.8px;
            margin-bottom: 16px;
            color: var(--color-text-primary);
        }

        .hero-subtitle {
            font-size: 20px;
            line-height: 1.4;
            color: var(--color-text-secondary);
            font-weight: 400;
        }

        /* ════════════════════════════════════════════════════════════════
           SECTION — LAYOUT & STRUCTURE
           ════════════════════════════════════════════════════════════════ */

        section {
            padding: 80px 0;
            border-bottom: 1px solid var(--color-border-lighter);
        }

        section:last-of-type {
            border-bottom: none;
        }

        .section-header {
            margin-bottom: 48px;
        }

        .section-overline {
            display: block;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            color: var(--color-primary);
            margin-bottom: 12px;
        }

        .section-title {
            font-size: 40px;
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -0.6px;
            color: var(--color-text-primary);
            margin-bottom: 12px;
        }

        .section-description {
            font-size: 18px;
            line-height: 1.5;
            color: var(--color-text-secondary);
            max-width: 680px;
        }

        /* ════════════════════════════════════════════════════════════════
           PREVIEW — SHOWCASE CARDS
           ════════════════════════════════════════════════════════════════ */

        .preview-section {
            background: var(--color-bg-secondary);
            border: 1px solid var(--color-border-lighter);
            border-radius: 20px;
            padding: 64px 48px;
            margin-bottom: 64px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 520px;
        }

        .preview-grid {
            width: 100%;
            max-width: 900px;
        }

        /* ════════════════════════════════════════════════════════════════
           ANATOMY — LABELED DIAGRAM
           ════════════════════════════════════════════════════════════════ */

        .anatomy-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 48px;
            align-items: center;
            margin-bottom: 64px;
        }

        .anatomy-visual {
            position: relative;
            background: var(--color-bg-secondary);
            border: 1px solid var(--color-border-lighter);
            border-radius: 20px;
            padding: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 480px;
        }

        .anatomy-card {
            width: 100%;
            max-width: 320px;
        }

        .anatomy-label {
            position: absolute;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            color: var(--color-text-secondary);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .anatomy-label-line {
            width: 16px;
            height: 2px;
            background: var(--color-primary);
            border-radius: 1px;
        }

        .anatomy-list {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .anatomy-item {
            display: flex;
            gap: 12px;
        }

        .anatomy-item-badge {
            width: 32px;
            height: 32px;
            min-width: 32px;
            background: var(--color-primary-alpha);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 700;
            color: var(--color-primary);
        }

        .anatomy-item-content {
            flex: 1;
        }

        .anatomy-item-title {
            font-size: 14px;
            font-weight: 600;
            color: var(--color-text-primary);
            margin-bottom: 4px;
        }

        .anatomy-item-desc {
            font-size: 13px;
            line-height: 1.5;
            color: var(--color-text-secondary);
        }

        /* ════════════════════════════════════════════════════════════════
           CODE BLOCK — SYNTAX HIGHLIGHTED
           ════════════════════════════════════════════════════════════════ */

        .code-block {
            background: var(--color-bg-dark);
            color: var(--color-text-inverse);
            border-radius: 12px;
            padding: 24px;
            overflow-x: auto;
            font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', monospace;
            font-size: 13px;
            line-height: 1.7;
            margin-bottom: 32px;
        }

        .code-block pre {
            margin: 0;
            white-space: pre-wrap;
            word-break: break-word;
        }

        .code-block code {
            font-family: inherit;
        }

        /* ════════════════════════════════════════════════════════════════
           VARIANTS — PATTERN SHOWCASE
           ════════════════════════════════════════════════════════════════ */

        .variant-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 48px;
            margin-bottom: 48px;
        }

        .variant {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .variant-label {
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            color: var(--color-text-secondary);
        }

        .variant-preview {
            background: var(--color-bg-secondary);
            border: 1px solid var(--color-border-lighter);
            border-radius: 16px;
            padding: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 320px;
        }

        /* ════════════════════════════════════════════════════════════════
           DO & DON'T GRID
           ════════════════════════════════════════════════════════════════ */

        .do-dont-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 32px;
            margin-bottom: 32px;
        }

        .do-card,
        .dont-card {
            background: var(--color-bg-secondary);
            border: 1px solid var(--color-border-lighter);
            border-radius: 16px;
            padding: 32px;
            min-height: 240px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .do-card {
            border-left: 4px solid var(--color-success);
        }

        .dont-card {
            border-left: 4px solid var(--color-error);
        }

        .do-dont-label {
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .do-card .do-dont-label {
            color: var(--color-success);
        }

        .dont-card .do-dont-label {
            color: var(--color-error);
        }

        .do-dont-content {
            font-size: 14px;
            line-height: 1.6;
            color: var(--color-text-secondary);
        }

        .do-card .do-dont-content {
            color: var(--color-text-secondary);
        }

        /* ════════════════════════════════════════════════════════════════
           RESPONSIVE — TABLET
           ════════════════════════════════════════════════════════════════ */

        @media (max-width: 1024px) {
            .container {
                padding: 0 20px;
            }

            .hero {
                padding: 60px 0 100px 0;
            }

            .hero-title {
                font-size: 44px;
            }

            .section {
                padding: 60px 0;
            }

            .section-title {
                font-size: 32px;
            }

            .anatomy-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .preview-section {
                padding: 48px 32px;
                min-height: 480px;
            }

            .variant-grid {
                grid-template-columns: 1fr;
            }
        }

        /* ════════════════════════════════════════════════════════════════
           RESPONSIVE — MOBILE
           ════════════════════════════════════════════════════════════════ */

        @media (max-width: 640px) {
            .container {
                padding: 0 16px;
            }

            .hero {
                padding: 48px 0 80px 0;
            }

            .hero-title {
                font-size: 36px;
                line-height: 1.2;
            }

            .hero-subtitle {
                font-size: 16px;
            }

            section {
                padding: 48px 0;
            }

            .section-title {
                font-size: 28px;
            }

            .section-header {
                margin-bottom: 32px;
            }

            .preview-section {
                padding: 32px 20px;
                border-radius: 16px;
                min-height: 380px;
            }

            .anatomy-visual {
                min-height: 360px;
                padding: 32px 20px;
            }

            .do-dont-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .code-block {
                font-size: 12px;
                padding: 16px;
                border-radius: 8px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- ════════════════════════════════════════════════════════════════
             HERO SECTION
             ════════════════════════════════════════════════════════════════ -->
        <div class="hero">
            <div class="hero-content">
                <div class="hero-overline">Component</div>
                <h1 class="hero-title">Card</h1>
                <p class="hero-subtitle">A flexible, reusable container for displaying grouped content with image, text, and actions.</p>
            </div>
        </div>

        <!-- ════════════════════════════════════════════════════════════════
             PREVIEW SECTION
             ════════════════════════════════════════════════════════════════ -->
        <section>
            <div class="section-header">
                <span class="section-overline">Live Preview</span>
                <h2 class="section-title">How it looks</h2>
                <p class="section-description">Real-world examples of the card component in action</p>
            </div>

            <div class="preview-section">
                <div class="preview-grid">
                    <div class="card-grid" style="gap: 16px;">
                        <!-- Card 1: Listing Card -->
                        <div class="card">
                            <div class="card-header">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Cdefs%3E%3ClinearGradient id='grad1' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%23FF6B9D;stop-opacity:1' /%3E%3Cstop offset='100%25' style='stop-color:%2300BDB2;stop-opacity:1' /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23grad1)' width='400' height='300'/%3E%3Ctext x='50%25' y='50%25' text-anchor='middle' dy='.3em' fill='%23fff' font-size='20' font-weight='600'%3EProperty Image%3C/text%3E%3C/svg%3E" alt="Luxury apartment in Kolkata">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Luxury Flat in Kolkata</h3>
                                <p class="card-description">₹13,683 for 2 nights · ⭐ 4.77</p>
                            </div>
                        </div>

                        <!-- Card 2: With Footer -->
                        <div class="card">
                            <div class="card-header">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Cdefs%3E%3ClinearGradient id='grad2' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%2300A699;stop-opacity:1' /%3E%3Cstop offset='100%25' style='stop-color:%23FF385C;stop-opacity:1' /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23grad2)' width='400' height='300'/%3E%3Ctext x='50%25' y='50%25' text-anchor='middle' dy='.3em' fill='%23fff' font-size='20' font-weight='600'%3EVilla in Varanasi%3C/text%3E%3C/svg%3E" alt="Villa in Varanasi">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Villa in Varanasi</h3>
                                <p class="card-description">₹11,638 for 2 nights · ⭐ 4.88</p>
                            </div>
                            <div class="card-footer">
                                <span>Status: Available now</span>
                            </div>
                        </div>

                        <!-- Card 3: Simple -->
                        <div class="card">
                            <div class="card-header">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Cdefs%3E%3ClinearGradient id='grad3' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%23FF385C;stop-opacity:1' /%3E%3Cstop offset='100%25' style='stop-color:%23FFB6C1;stop-opacity:1' /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23grad3)' width='400' height='300'/%3E%3Ctext x='50%25' y='50%25' text-anchor='middle' dy='.3em' fill='%23fff' font-size='20' font-weight='600'%3EApartment%3C/text%3E%3C/svg%3E" alt="Apartment in Kolkata">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Apartment in Kolkata</h3>
                                <p class="card-description">Modern 2BR with city view</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ════════════════════════════════════════════════════════════════
             ANATOMY SECTION
             ════════════════════════════════════════════════════════════════ -->
        <section>
            <div class="section-header">
                <span class="section-overline">Anatomy</span>
                <h2 class="section-title">Structure</h2>
                <p class="section-description">Understanding the card component's building blocks</p>
            </div>

            <div class="anatomy-grid">
                <div class="anatomy-visual">
                    <div class="anatomy-card">
                        <div class="card">
                            <div class="card-header">
                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 240'%3E%3Cdefs%3E%3ClinearGradient id='grad4' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%2300A699;stop-opacity:1' /%3E%3Cstop offset='100%25' style='stop-color:%23FF7D94;stop-opacity:1' /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23grad4)' width='320' height='240'/%3E%3C/svg%3E" alt="">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Card Title</h3>
                                <p class="card-description">Subtitle or metadata</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="anatomy-list">
                    <div class="anatomy-item">
                        <div class="anatomy-item-badge">①</div>
                        <div class="anatomy-item-content">
                            <div class="anatomy-item-title">.card-header</div>
                            <div class="anatomy-item-desc">Image container with 4:3 aspect ratio. Smooth zoom on hover.</div>
                        </div>
                    </div>

                    <div class="anatomy-item">
                        <div class="anatomy-item-badge">②</div>
                        <div class="anatomy-item-content">
                            <div class="anatomy-item-title">.card-title</div>
                            <div class="anatomy-item-desc">Primary heading text. Max 2 lines with ellipsis truncation.</div>
                        </div>
                    </div>

                    <div class="anatomy-item">
                        <div class="anatomy-item-badge">③</div>
                        <div class="anatomy-item-content">
                            <div class="anatomy-item-title">.card-description</div>
                            <div class="anatomy-item-desc">Secondary text for metadata, price, location, or status.</div>
                        </div>
                    </div>

                    <div class="anatomy-item">
                        <div class="anatomy-item-badge">④</div>
                        <div class="anatomy-item-content">
                            <div class="anatomy-item-title">.card-footer (Optional)</div>
                            <div class="anatomy-item-desc">Footer section for actions, tags, or additional info.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ════════════════════════════════════════════════════════════════
             USAGE SECTION
             ════════════════════════════════════════════════════════════════ -->
        <section>
            <div class="section-header">
                <span class="section-overline">Usage</span>
                <h2 class="section-title">Getting started</h2>
                <p class="section-description">How to implement the card component in your project</p>
            </div>

            <div class="code-block">
                <pre><code>&lt;!-- Link CSS --&gt;
&lt;link rel="stylesheet" href="colors.css"&gt;
&lt;link rel="stylesheet" href="cards.css"&gt;

&lt;!-- Single Card --&gt;
&lt;div class="card"&gt;
  &lt;div class="card-header"&gt;
    &lt;img src="image.jpg" alt="Property image"&gt;
  &lt;/div&gt;
  &lt;div class="card-content"&gt;
    &lt;h3 class="card-title"&gt;Luxury Flat in Kolkata&lt;/h3&gt;
    &lt;p class="card-description"&gt;₹13,683 for 2 nights · ⭐ 4.77&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Multiple Cards in Grid --&gt;
&lt;div class="card-grid"&gt;
  &lt;div class="card"&gt;...&lt;/div&gt;
  &lt;div class="card"&gt;...&lt;/div&gt;
  &lt;div class="card"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
        </section>

        <!-- ════════════════════════════════════════════════════════════════
             VARIANTS SECTION
             ════════════════════════════════════════════════════════════════ -->
        <section>
            <div class="section-header">
                <span class="section-overline">Patterns</span>
                <h2 class="section-title">Variants</h2>
                <p class="section-description">Common usage patterns and configurations</p>
            </div>

            <div class="variant-grid">
                <div class="variant">
                    <div class="variant-label">Minimal Card</div>
                    <div class="variant-preview">
                        <div style="width: 100%; max-width: 280px;">
                            <div class="card">
                                <div class="card-header">
                                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Crect fill='%23E5E5EA' width='400' height='300'/%3E%3C/svg%3E" alt="">
                                </div>
                                <div class="card-content">
                                    <h3 class="card-title">Card Title</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="variant">
                    <div class="variant-label">With Footer</div>
                    <div class="variant-preview">
                        <div style="width: 100%; max-width: 280px;">
                            <div class="card">
                                <div class="card-header">
                                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Crect fill='%23E5E5EA' width='400' height='300'/%3E%3C/svg%3E" alt="">
                                </div>
                                <div class="card-content">
                                    <h3 class="card-title">Card Title</h3>
                                </div>
                                <div class="card-footer">
                                    Available now
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ════════════════════════════════════════════════════════════════
             DO & DON'T SECTION
             ════════════════════════════════════════════════════════════════ -->
        <section>
            <div class="section-header">
                <span class="section-overline">Guidelines</span>
                <h2 class="section-title">Best practices</h2>
                <p class="section-description">Do and don't when using the card component</p>
            </div>

            <div class="do-dont-grid">
                <div class="do-card">
                    <div class="do-dont-label">
                        <span style="font-size: 16px;">✓</span> Do
                    </div>
                    <ul style="margin: 0; padding-left: 20px; color: var(--color-text-secondary); font-size: 14px; line-height: 1.6;">
                        <li style="margin-bottom: 8px;">Use clear, concise titles</li>
                        <li style="margin-bottom: 8px;">Include relevant metadata</li>
                        <li style="margin-bottom: 8px;">Use proper image aspect ratio</li>
                        <li>Leverage .card-grid for layouts</li>
                    </ul>
                </div>

                <div class="dont-card">
                    <div class="do-dont-label">
                        <span style="font-size: 16px;">✗</span> Don't
                    </div>
                    <ul style="margin: 0; padding-left: 20px; color: var(--color-text-secondary); font-size: 14px; line-height: 1.6;">
                        <li style="margin-bottom: 8px;">Add inline styles or colors</li>
                        <li style="margin-bottom: 8px;">Truncate text without indicator</li>
                        <li style="margin-bottom: 8px;">Nest cards excessively</li>
                        <li>Forget alt text on images</li>
                    </ul>
                </div>
            </div>
        </section>

    </div>
</body>
</html>