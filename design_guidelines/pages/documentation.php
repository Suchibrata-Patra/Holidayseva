<?php
// Load all components
require_once 'components/Button.php';
require_once 'components/Card.php';
require_once 'components/Badge.php';
require_once 'components/Rating.php';
require_once 'components/Avatar.php';
require_once 'components/Input.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation - Airbnb UI System</title>
    <?php
    echo Button::renderCSS();
    echo Card::renderCSS();
    echo Badge::renderCSS();
    echo Rating::renderCSS();
    echo Avatar::renderCSS();
    echo Input::renderCSS();
    ?>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Helvetica Neue', sans-serif;
            background: white;
            color: #222;
            line-height: 1.6;
        }

        .doc-container {
            display: flex;
            min-height: 100vh;
        }

        .doc-sidebar {
            width: 280px;
            background: #f5f5f5;
            padding: 40px 20px;
            overflow-y: auto;
            border-right: 1px solid #EBEBEB;
            position: sticky;
            top: 0;
            height: 100vh;
        }

        .doc-sidebar-title {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #B0B0B0;
            margin-bottom: 20px;
            padding: 0 12px;
        }

        .doc-sidebar-menu {
            list-style: none;
        }

        .doc-sidebar-item {
            margin-bottom: 8px;
        }

        .doc-sidebar-link {
            display: block;
            padding: 10px 12px;
            text-decoration: none;
            color: #222;
            font-size: 14px;
            border-radius: 6px;
            transition: all 0.2s;
            border-left: 2px solid transparent;
        }

        .doc-sidebar-link:hover {
            background: #e8e8e8;
        }

        .doc-sidebar-link.active {
            background: white;
            color: #FF385C;
            border-left-color: #FF385C;
            font-weight: 600;
        }

        .doc-content {
            flex: 1;
            padding: 60px 60px;
            max-width: 900px;
        }

        .doc-section {
            margin-bottom: 80px;
            scroll-margin-top: 20px;
        }

        .doc-h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 24px;
            letter-spacing: -1px;
        }

        .doc-h2 {
            font-size: 28px;
            font-weight: 700;
            margin-top: 60px;
            margin-bottom: 24px;
            letter-spacing: -0.5px;
        }

        .doc-h3 {
            font-size: 20px;
            font-weight: 700;
            margin-top: 40px;
            margin-bottom: 16px;
        }

        .doc-p {
            font-size: 16px;
            color: #717171;
            margin-bottom: 16px;
            line-height: 1.8;
        }

        .doc-intro {
            font-size: 18px;
            color: #717171;
            margin-bottom: 48px;
            line-height: 1.8;
            max-width: 700px;
        }

        .example-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 24px;
            margin: 32px 0;
            padding: 32px;
            background: #f9f9f9;
            border-radius: 12px;
        }

        .example-box {
            padding: 24px;
            background: white;
            border: 1px solid #EBEBEB;
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            gap: 12px;
        }

        .example-label {
            font-size: 13px;
            color: #717171;
            font-weight: 500;
        }

        .code-example {
            background: #222;
            color: #fff;
            padding: 20px;
            border-radius: 8px;
            margin: 24px 0;
            overflow-x: auto;
            font-family: 'Monaco', 'Courier New', monospace;
            font-size: 13px;
            line-height: 1.6;
        }

        .code-line {
            display: block;
            margin-bottom: 8px;
        }

        .keyword {
            color: #FF6B9D;
        }

        .string {
            color: #00D084;
        }

        .function {
            color: #5AC8FA;
        }

        .comment {
            color: #989898;
        }

        .best-practice {
            background: rgba(0, 212, 132, 0.08);
            border-left: 4px solid #00D484;
            padding: 20px;
            border-radius: 8px;
            margin: 24px 0;
        }

        .best-practice-title {
            font-weight: 700;
            color: #00A469;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }

        .best-practice-text {
            font-size: 15px;
            color: #717171;
        }

        .note {
            background: rgba(255, 56, 92, 0.08);
            border-left: 4px solid #FF385C;
            padding: 20px;
            border-radius: 8px;
            margin: 24px 0;
        }

        .note-title {
            font-weight: 700;
            color: #E31C5F;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }

        .note-text {
            font-size: 15px;
            color: #717171;
        }

        .anatomy {
            background: #f9f9f9;
            padding: 32px;
            border-radius: 12px;
            margin: 24px 0;
        }

        .anatomy-item {
            display: flex;
            gap: 16px;
            margin-bottom: 16px;
            padding-bottom: 16px;
            border-bottom: 1px solid #EBEBEB;
        }

        .anatomy-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .anatomy-number {
            width: 28px;
            height: 28px;
            background: #FF385C;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            flex-shrink: 0;
        }

        .anatomy-label {
            flex: 1;
        }

        .anatomy-label-title {
            font-weight: 600;
            color: #222;
            margin-bottom: 4px;
        }

        .anatomy-label-desc {
            font-size: 14px;
            color: #717171;
        }

        @media (max-width: 1200px) {
            .doc-sidebar {
                width: 200px;
                padding: 30px 15px;
            }

            .doc-content {
                padding: 40px 30px;
            }
        }

        @media (max-width: 768px) {
            .doc-container {
                flex-direction: column;
            }

            .doc-sidebar {
                width: 100%;
                height: auto;
                position: relative;
                border-right: none;
                border-bottom: 1px solid #EBEBEB;
                padding: 20px;
            }

            .doc-content {
                padding: 30px 20px;
            }

            .doc-h1 {
                font-size: 32px;
            }

            .doc-h2 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="doc-container">
        <!-- Sidebar Navigation -->
        <aside class="doc-sidebar">
            <h3 class="doc-sidebar-title">Documentation</h3>
            <ul class="doc-sidebar-menu">
                <li class="doc-sidebar-item">
                    <a href="#overview" class="doc-sidebar-link active">Overview</a>
                </li>
                <li class="doc-sidebar-item">
                    <a href="#buttons" class="doc-sidebar-link">Buttons</a>
                </li>
                <li class="doc-sidebar-item">
                    <a href="#cards" class="doc-sidebar-link">Cards</a>
                </li>
                <li class="doc-sidebar-item">
                    <a href="#badges" class="doc-sidebar-link">Badges</a>
                </li>
                <li class="doc-sidebar-item">
                    <a href="#ratings" class="doc-sidebar-link">Ratings</a>
                </li>
                <li class="doc-sidebar-item">
                    <a href="#avatars" class="doc-sidebar-link">Avatars</a>
                </li>
                <li class="doc-sidebar-item">
                    <a href="#inputs" class="doc-sidebar-link">Inputs</a>
                </li>
                <li class="doc-sidebar-item">
                    <a href="#design-principles" class="doc-sidebar-link">Design Principles</a>
                </li>
                <li class="doc-sidebar-item">
                    <a href="#best-practices" class="doc-sidebar-link">Best Practices</a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="doc-content">
            <!-- Overview Section -->
            <section id="overview" class="doc-section">
                <h1 class="doc-h1">Airbnb UI System</h1>
                <p class="doc-intro">
                    A comprehensive, component-based design system built to create beautiful, modern interfaces inspired by Airbnb's design philosophy. Each component includes its own CSS styling and is designed to be fully modular, reusable, and production-ready.
                </p>

                <h2 class="doc-h2">What is This System?</h2>
                <p class="doc-p">
                    The Airbnb UI System is a collection of well-designed, thoroughly documented components that help you build consistent and beautiful user interfaces. This system provides both the visual components and the code needed to implement them in your projects.
                </p>

                <h2 class="doc-h2">Key Principles</h2>
                <ul style="margin-left: 20px; margin-bottom: 32px;">
                    <li class="doc-p" style="margin-bottom: 12px;"><strong>Component-Based:</strong> Each component is self-contained with its own CSS, making them truly modular and reusable.</li>
                    <li class="doc-p" style="margin-bottom: 12px;"><strong>Accessible:</strong> All components follow accessibility best practices and WCAG guidelines.</li>
                    <li class="doc-p" style="margin-bottom: 12px;"><strong>Responsive:</strong> Every component is designed with mobile-first responsive design in mind.</li>
                    <li class="doc-p" style="margin-bottom: 12px;"><strong>Customizable:</strong> Easy to extend and customize for your specific needs.</li>
                    <li class="doc-p"><strong>Production-Ready:</strong> All components are thoroughly tested and ready for production use.</li>
                </ul>
            </section>

            <!-- Buttons Documentation -->
            <section id="buttons" class="doc-section">
                <h2 class="doc-h2">Buttons</h2>
                <p class="doc-p">
                    Buttons are fundamental interactive elements used to trigger actions and navigate through an interface. Our button system provides multiple variants and sizes to accommodate different use cases and contexts.
                </p>

                <h3 class="doc-h3">Variants</h3>
                <div class="example-grid">
                    <div class="example-box">
                        <?php echo (new Button('Primary', 'primary', 'md'))->render(); ?>
                        <span class="example-label">Primary</span>
                    </div>
                    <div class="example-box">
                        <?php echo (new Button('Secondary', 'secondary', 'md'))->render(); ?>
                        <span class="example-label">Secondary</span>
                    </div>
                    <div class="example-box">
                        <?php echo (new Button('Outline', 'outline', 'md'))->render(); ?>
                        <span class="example-label">Outline</span>
                    </div>
                    <div class="example-box">
                        <?php echo (new Button('Ghost', 'ghost', 'md'))->render(); ?>
                        <span class="example-label">Ghost</span>
                    </div>
                    <div class="example-box">
                        <?php echo (new Button('Danger', 'danger', 'md'))->render(); ?>
                        <span class="example-label">Danger</span>
                    </div>
                    <div class="example-box">
                        <?php echo (new Button('Text', 'text', 'md'))->render(); ?>
                        <span class="example-label">Text</span>
                    </div>
                </div>

                <h3 class="doc-h3">Sizes</h3>
                <div class="example-grid">
                    <div class="example-box">
                        <?php echo (new Button('Small', 'primary', 'sm'))->render(); ?>
                        <span class="example-label">Small</span>
                    </div>
                    <div class="example-box">
                        <?php echo (new Button('Medium', 'primary', 'md'))->render(); ?>
                        <span class="example-label">Medium</span>
                    </div>
                    <div class="example-box">
                        <?php echo (new Button('Large', 'primary', 'lg'))->render(); ?>
                        <span class="example-label">Large</span>
                    </div>
                    <div class="example-box">
                        <?php echo (new Button('Extra Large', 'primary', 'xl'))->render(); ?>
                        <span class="example-label">XL</span>
                    </div>
                </div>

                <h3 class="doc-h3">Usage</h3>
                <div class="code-example">
                    <span class="code-line"><span class="comment">// Create a primary button</span></span>
                    <span class="code-line"><span class="keyword">$button</span> = <span class="keyword">new</span> <span class="function">Button</span>(<span class="string">'Get Started'</span>, <span class="string">'primary'</span>, <span class="string">'md'</span>);</span>
                    <span class="code-line"><span class="keyword">echo</span> <span class="keyword">$button</span>-&gt;<span class="function">render</span>();</span>
                </div>

                <div class="best-practice">
                    <div class="best-practice-title">Best Practice</div>
                    <div class="best-practice-text">Use primary buttons for the main action on a page. Limit the number of primary buttons to one per context to guide user attention.</div>
                </div>
            </section>

            <!-- Cards Documentation -->
            <section id="cards" class="doc-section">
                <h2 class="doc-h2">Cards</h2>
                <p class="doc-p">
                    Cards are versatile containers that display related information and actions. They are commonly used to present listings, products, or any grouped content that benefits from visual separation.
                </p>

                <h3 class="doc-h3">Variants</h3>
                <div class="example-grid" style="grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));">
                    <div class="example-box">
                        <div style="width: 100%; height: 100px; background: #f0f0f0; border-radius: 8px; margin-bottom: 8px;"></div>
                        <span class="example-label">Default</span>
                    </div>
                    <div class="example-box">
                        <div style="width: 100%; height: 100px; background: #f0f0f0; border-radius: 8px; margin-bottom: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);"></div>
                        <span class="example-label">Elevated</span>
                    </div>
                    <div class="example-box">
                        <div style="width: 100%; height: 100px; background: #f0f0f0; border-radius: 8px; margin-bottom: 8px; border: 2px solid #FF385C;"></div>
                        <span class="example-label">Outline</span>
                    </div>
                </div>

                <h3 class="doc-h3">Anatomy</h3>
                <div class="anatomy">
                    <div class="anatomy-item">
                        <div class="anatomy-number">1</div>
                        <div class="anatomy-label">
                            <div class="anatomy-label-title">Image Container</div>
                            <div class="anatomy-label-desc">Optional image at the top of the card with aspect ratio 4:3</div>
                        </div>
                    </div>
                    <div class="anatomy-item">
                        <div class="anatomy-number">2</div>
                        <div class="anatomy-label">
                            <div class="anatomy-label-title">Content Area</div>
                            <div class="anatomy-label-desc">Padding container for title, description, and additional content</div>
                        </div>
                    </div>
                    <div class="anatomy-item">
                        <div class="anatomy-number">3</div>
                        <div class="anatomy-label">
                            <div class="anatomy-label-title">Footer Section</div>
                            <div class="anatomy-label-desc">Optional footer area for pricing, actions, or metadata</div>
                        </div>
                    </div>
                </div>

                <h3 class="doc-h3">Usage</h3>
                <div class="code-example">
                    <span class="code-line"><span class="keyword">$card</span> = <span class="keyword">new</span> <span class="function">Card</span>(<span class="string">'Card Title'</span>);</span>
                    <span class="code-line"><span class="keyword">$card</span>-&gt;<span class="function">setImage</span>(<span class="string">'image-url'</span>)</span>
                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;-&gt;<span class="function">setDescription</span>(<span class="string">'Description text'</span>)</span>
                    <span class="code-line">&nbsp;&nbsp;&nbsp;&nbsp;-&gt;<span class="function">setFooter</span>(<span class="string">'Footer content'</span>);</span>
                    <span class="code-line"><span class="keyword">echo</span> <span class="keyword">$card</span>-&gt;<span class="function">render</span>();</span>
                </div>
            </section>

            <!-- Badges Documentation -->
            <section id="badges" class="doc-section">
                <h2 class="doc-h2">Badges</h2>
                <p class="doc-p">
                    Badges are small, focused elements used to label items or indicate status. They're perfect for highlighting important information like availability, status tags, or categories.
                </p>

                <h3 class="doc-h3">Variants</h3>
                <div class="example-grid">
                    <div class="example-box">
                        <?php echo (new Badge('Default', 'default', 'md'))->render(); ?>
                        <span class="example-label">Default</span>
                    </div>
                    <div class="example-box">
                        <?php echo (new Badge('Primary', 'primary', 'md'))->render(); ?>
                        <span class="example-label">Primary</span>
                    </div>
                    <div class="example-box">
                        <?php echo (new Badge('Success', 'success', 'md'))->render(); ?>
                        <span class="example-label">Success</span>
                    </div>
                    <div class="example-box">
                        <?php echo (new Badge('Warning', 'warning', 'md'))->render(); ?>
                        <span class="example-label">Warning</span>
                    </div>
                    <div class="example-box">
                        <?php echo (new Badge('Danger', 'danger', 'md'))->render(); ?>
                        <span class="example-label">Danger</span>
                    </div>
                    <div class="example-box">
                        <?php echo (new Badge('Info', 'info', 'md'))->render(); ?>
                        <span class="example-label">Info</span>
                    </div>
                </div>

                <div class="note">
                    <div class="note-title">Usage Tip</div>
                    <div class="note-text">Badges should be concise and descriptive. Keep badge text short (1-3 words) for optimal visual impact.</div>
                </div>
            </section>

            <!-- Ratings Documentation -->
            <section id="ratings" class="doc-section">
                <h2 class="doc-h2">Ratings</h2>
                <p class="doc-p">
                    Rating components display star-based feedback and review counts. They provide visual feedback about quality and user satisfaction, making them essential for marketplace and review-based applications.
                </p>

                <h3 class="doc-h3">Examples</h3>
                <div class="example-grid">
                    <div class="example-box">
                        <?php echo (new Rating(5, 128))->render(); ?>
                        <span class="example-label">Perfect</span>
                    </div>
                    <div class="example-box">
                        <?php echo (new Rating(4.5, 256))->render(); ?>
                        <span class="example-label">Excellent</span>
                    </div>
                    <div class="example-box">
                        <?php echo (new Rating(4, 95))->render(); ?>
                        <span class="example-label">Good</span>
                    </div>
                    <div class="example-box">
                        <?php echo (new Rating(3.5, 42))->render(); ?>
                        <span class="example-label">Average</span>
                    </div>
                </div>
            </section>

            <!-- Avatars Documentation -->
            <section id="avatars" class="doc-section">
                <h2 class="doc-h2">Avatars</h2>
                <p class="doc-p">
                    Avatars represent users, either with profile images or initials. They're used throughout applications to personalize experiences and identify users at a glance.
                </p>

                <h3 class="doc-h3">Sizes</h3>
                <div class="example-grid">
                    <div class="example-box">
                        <?php echo (new Avatar('', 'User', 'sm'))->setName('JD')->render(); ?>
                        <span class="example-label">Small (32px)</span>
                    </div>
                    <div class="example-box">
                        <?php echo (new Avatar('', 'User', 'md'))->setName('Jane D')->render(); ?>
                        <span class="example-label">Medium (48px)</span>
                    </div>
                    <div class="example-box">
                        <?php echo (new Avatar('', 'User', 'lg'))->setName('Alice')->render(); ?>
                        <span class="example-label">Large (64px)</span>
                    </div>
                    <div class="example-box">
                        <?php echo (new Avatar('', 'User', 'xl'))->setName('Bob W')->render(); ?>
                        <span class="example-label">Extra Large (80px)</span>
                    </div>
                </div>
            </section>

            <!-- Inputs Documentation -->
            <section id="inputs" class="doc-section">
                <h2 class="doc-h2">Input Fields</h2>
                <p class="doc-p">
                    Input fields are the foundation of forms and allow users to enter data. Our input components are accessible, responsive, and support various types and validation states.
                </p>

                <h3 class="doc-h3">Types</h3>
                <div class="example-grid">
                    <div class="example-box" style="align-items: flex-start;">
                        <?php echo (new Input('text', 'Text input...', 'md'))->render(); ?>
                        <span class="example-label">Text</span>
                    </div>
                    <div class="example-box" style="align-items: flex-start;">
                        <?php echo (new Input('email', 'Email input...', 'md'))->render(); ?>
                        <span class="example-label">Email</span>
                    </div>
                </div>

                <h3 class="doc-h3">States</h3>
                <div style="margin: 32px 0; display: flex; flex-direction: column; gap: 24px;">
                    <div>
                        <div style="margin-bottom: 12px; font-size: 14px; font-weight: 600; color: #717171;">Normal</div>
                        <?php echo (new Input('text', 'Enter text...', 'md'))->render(); ?>
                    </div>
                    <div>
                        <div style="margin-bottom: 12px; font-size: 14px; font-weight: 600; color: #717171;">With Icon</div>
                        <?php echo (new Input('text', 'Search...', 'md'))->setIcon('🔍')->render(); ?>
                    </div>
                    <div>
                        <div style="margin-bottom: 12px; font-size: 14px; font-weight: 600; color: #717171;">Error State</div>
                        <?php echo (new Input('email', 'Enter email...', 'md'))->setError('Invalid email address')->render(); ?>
                    </div>
                </div>
            </section>

            <!-- Design Principles -->
            <section id="design-principles" class="doc-section">
                <h2 class="doc-h2">Design Principles</h2>

                <h3 class="doc-h3">1. Simplicity</h3>
                <p class="doc-p">
                    Our components follow a principle of simplicity. Each element has a clear purpose, and unnecessary complexity is removed. Clean lines, generous spacing, and thoughtful typography create an interface that's easy to understand and navigate.
                </p>

                <h3 class="doc-h3">2. Consistency</h3>
                <p class="doc-p">
                    Consistency across components creates a cohesive experience. We use a unified color palette, consistent spacing rules, and standardized patterns that help users predict how the interface will behave.
                </p>

                <h3 class="doc-h3">3. Accessibility</h3>
                <p class="doc-p">
                    All components are designed with accessibility in mind. We follow WCAG guidelines, ensure proper contrast ratios, and provide keyboard navigation support. Every interaction is accessible to all users.
                </p>

                <h3 class="doc-h3">4. Feedback</h3>
                <p class="doc-p">
                    Users should always receive clear feedback for their actions. Our components include hover states, active states, disabled states, and loading indicators that communicate what's happening.
                </p>

                <h3 class="doc-h3">5. Responsiveness</h3>
                <p class="doc-p">
                    Every component is designed to work beautifully on all screen sizes. We use flexible layouts and adaptive typography that scales appropriately for mobile, tablet, and desktop devices.
                </p>
            </section>

            <!-- Best Practices -->
            <section id="best-practices" class="doc-section">
                <h2 class="doc-h2">Best Practices</h2>

                <div class="best-practice">
                    <div class="best-practice-title">Component Usage</div>
                    <div class="best-practice-text">Always use the component classes and render methods provided. Don't override component styles directly—use CSS variables and variants instead for consistency.</div>
                </div>

                <div class="best-practice">
                    <div class="best-practice-title">Spacing</div>
                    <div class="best-practice-text">Maintain consistent spacing around components. Use multiples of 8px for padding and margins to create a visual rhythm and alignment throughout your layouts.</div>
                </div>

                <div class="best-practice">
                    <div class="best-practice-title">Color Usage</div>
                    <div class="best-practice-text">The Airbnb color palette consists of primary red (#FF385C), secondary black (#222222), and accent teal (#00A699). Use these colors consistently and avoid introducing new colors unnecessarily.</div>
                </div>

                <div class="best-practice">
                    <div class="best-practice-title">Typography</div>
                    <div class="best-practice-text">Use the system font stack (-apple-system, BlinkMacSystemFont, etc.) for optimal rendering across devices. Keep font sizes consistent with our defined scales: xs (13px), sm (14px), md (16px), lg (18px).</div>
                </div>

                <div class="best-practice">
                    <div class="best-practice-title">Interaction Design</div>
                    <div class="best-practice-text">Always provide visual feedback for user interactions. Include hover states, focus states, and active states. Use smooth transitions (0.2s-0.3s) to make interactions feel responsive and intentional.</div>
                </div>

                <div class="best-practice">
                    <div class="best-practice-title">Mobile Considerations</div>
                    <div class="best-practice-text">Design mobile-first. Ensure touch targets are at least 44px in size for easy interaction on touch devices. Test components on real devices to verify usability.</div>
                </div>
            </section>
        </main>
    </div>

    <script>
        // Update active link on scroll
        const sidebar_links = document.querySelectorAll('.doc-sidebar-link');
        const sections = document.querySelectorAll('.doc-section');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            sidebar_links.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').slice(1) === current) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
