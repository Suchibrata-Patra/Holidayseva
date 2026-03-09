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
    <title>Components - Airbnb UI System</title>
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
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 60px 24px;
        }

        h1 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 12px;
            letter-spacing: -0.5px;
        }

        .subtitle {
            font-size: 16px;
            color: #717171;
            margin-bottom: 60px;
        }

        .section {
            margin-bottom: 80px;
        }

        .section-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 32px;
            padding-bottom: 16px;
            border-bottom: 1px solid #EBEBEB;
        }

        .component-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 32px;
            margin-bottom: 48px;
        }

        .component-showcase {
            padding: 24px;
            background: #f7f7f7;
            border-radius: 12px;
            border: 1px solid #EBEBEB;
        }

        .component-label {
            font-size: 12px;
            color: #B0B0B0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
            font-weight: 600;
        }

        .demo {
            padding: 16px;
            background: white;
            border-radius: 8px;
            border: 1px solid #EBEBEB;
            display: flex;
            gap: 12px;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 12px;
        }

        .demo.demo-full {
            display: block;
        }

        .demo.demo-full > * {
            display: block;
            margin-bottom: 12px;
        }

        .code-block {
            background: #222;
            color: #fff;
            padding: 12px;
            border-radius: 6px;
            font-size: 11px;
            font-family: 'Monaco', 'Courier New', monospace;
            overflow-x: auto;
            margin-top: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Components</h1>
        <p class="subtitle">Explore all available Airbnb UI components with live examples and code snippets.</p>

        <!-- Buttons -->
        <section class="section">
            <h2 class="section-title">Buttons</h2>
            <div class="component-grid">
                <div class="component-showcase">
                    <div class="component-label">Primary</div>
                    <div class="demo">
                        <?php echo (new Button('Get Started', 'primary', 'md'))->render(); ?>
                    </div>
                </div>
                <div class="component-showcase">
                    <div class="component-label">Secondary</div>
                    <div class="demo">
                        <?php echo (new Button('Learn More', 'secondary', 'md'))->render(); ?>
                    </div>
                </div>
                <div class="component-showcase">
                    <div class="component-label">Outline</div>
                    <div class="demo">
                        <?php echo (new Button('Cancel', 'outline', 'md'))->render(); ?>
                    </div>
                </div>
                <div class="component-showcase">
                    <div class="component-label">Ghost</div>
                    <div class="demo">
                        <?php echo (new Button('Close', 'ghost', 'md'))->render(); ?>
                    </div>
                </div>
                <div class="component-showcase">
                    <div class="component-label">Danger</div>
                    <div class="demo">
                        <?php echo (new Button('Delete', 'danger', 'md'))->render(); ?>
                    </div>
                </div>
                <div class="component-showcase">
                    <div class="component-label">Text</div>
                    <div class="demo">
                        <?php echo (new Button('View All', 'text', 'md'))->render(); ?>
                    </div>
                </div>
            </div>

            <h3 style="font-size: 18px; font-weight: 600; margin-top: 40px; margin-bottom: 20px;">Button Sizes</h3>
            <div class="component-showcase">
                <div class="component-label">All Sizes</div>
                <div class="demo" style="gap: 12px; align-items: flex-start;">
                    <?php echo (new Button('Small', 'primary', 'sm'))->render(); ?>
                    <?php echo (new Button('Medium', 'primary', 'md'))->render(); ?>
                    <?php echo (new Button('Large', 'primary', 'lg'))->render(); ?>
                    <?php echo (new Button('Extra Large', 'primary', 'xl'))->render(); ?>
                </div>
            </div>
        </section>

        <!-- Badges -->
        <section class="section">
            <h2 class="section-title">Badges</h2>
            <div class="component-grid">
                <div class="component-showcase">
                    <div class="component-label">Default</div>
                    <div class="demo">
                        <?php echo (new Badge('Default', 'default', 'md'))->render(); ?>
                    </div>
                </div>
                <div class="component-showcase">
                    <div class="component-label">Primary</div>
                    <div class="demo">
                        <?php echo (new Badge('Featured', 'primary', 'md'))->render(); ?>
                    </div>
                </div>
                <div class="component-showcase">
                    <div class="component-label">Success</div>
                    <div class="demo">
                        <?php echo (new Badge('Available', 'success', 'md'))->render(); ?>
                    </div>
                </div>
                <div class="component-showcase">
                    <div class="component-label">Warning</div>
                    <div class="demo">
                        <?php echo (new Badge('Limited', 'warning', 'md'))->render(); ?>
                    </div>
                </div>
                <div class="component-showcase">
                    <div class="component-label">Danger</div>
                    <div class="demo">
                        <?php echo (new Badge('Sold Out', 'danger', 'md'))->render(); ?>
                    </div>
                </div>
                <div class="component-showcase">
                    <div class="component-label">Info</div>
                    <div class="demo">
                        <?php echo (new Badge('New', 'info', 'md'))->render(); ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ratings -->
        <section class="section">
            <h2 class="section-title">Ratings</h2>
            <div class="component-grid">
                <div class="component-showcase">
                    <div class="component-label">Perfect Rating</div>
                    <div class="demo">
                        <?php echo (new Rating(5, 128))->render(); ?>
                    </div>
                </div>
                <div class="component-showcase">
                    <div class="component-label">High Rating</div>
                    <div class="demo">
                        <?php echo (new Rating(4.5, 256))->render(); ?>
                    </div>
                </div>
                <div class="component-showcase">
                    <div class="component-label">Good Rating</div>
                    <div class="demo">
                        <?php echo (new Rating(4, 95))->render(); ?>
                    </div>
                </div>
                <div class="component-showcase">
                    <div class="component-label">Average Rating</div>
                    <div class="demo">
                        <?php echo (new Rating(3.5, 42))->render(); ?>
                    </div>
                </div>
                <div class="component-showcase">
                    <div class="component-label">Without Count</div>
                    <div class="demo">
                        <?php echo (new Rating(4.8))->render(); ?>
                    </div>
                </div>
                <div class="component-showcase">
                    <div class="component-label">Large Size</div>
                    <div class="demo">
                        <?php echo (new Rating(4.5, 128, 'lg'))->render(); ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Avatars -->
        <section class="section">
            <h2 class="section-title">Avatars</h2>
            <div class="component-showcase">
                <div class="component-label">Avatar Sizes</div>
                <div class="demo" style="gap: 16px;">
                    <?php echo (new Avatar('', 'User', 'sm'))->setName('John Doe')->render(); ?>
                    <?php echo (new Avatar('', 'User', 'md'))->setName('Jane Smith')->render(); ?>
                    <?php echo (new Avatar('', 'User', 'lg'))->setName('Alice Johnson')->render(); ?>
                    <?php echo (new Avatar('', 'User', 'xl'))->setName('Bob Williams')->render(); ?>
                </div>
            </div>
        </section>

        <!-- Cards -->
        <section class="section">
            <h2 class="section-title">Cards</h2>
            <div class="component-grid">
                <div class="component-showcase">
                    <div class="component-label">Default Card</div>
                    <div class="demo demo-full">
                        <?php 
                        $card = new Card('Cozy Apartment', 'default');
                        $card->setImage('https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?w=300&h=240&fit=crop')
                             ->setDescription('Beautiful apartment in the heart of the city')
                             ->setFooter('<strong>$150</strong> per night');
                        echo $card->render(); 
                        ?>
                    </div>
                </div>
                <div class="component-showcase">
                    <div class="component-label">Elevated Card</div>
                    <div class="demo demo-full">
                        <?php 
                        $card = new Card('Luxury Villa', 'elevated');
                        $card->setImage('https://images.unsplash.com/photo-1540932549986-b8a874ad53f7?w=300&h=240&fit=crop')
                             ->setDescription('Stunning villa with ocean view')
                             ->setFooter('<strong>$280</strong> per night');
                        echo $card->render(); 
                        ?>
                    </div>
                </div>
                <div class="component-showcase">
                    <div class="component-label">Outline Card</div>
                    <div class="demo demo-full">
                        <?php 
                        $card = new Card('Modern Studio', 'outline');
                        $card->setImage('https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?w=300&h=240&fit=crop')
                             ->setDescription('Sleek and modern studio apartment')
                             ->setFooter('<strong>$120</strong> per night');
                        echo $card->render(); 
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Inputs -->
        <section class="section">
            <h2 class="section-title">Inputs</h2>
            <div class="component-showcase">
                <div class="component-label">Text Input</div>
                <div class="demo demo-full">
                    <?php echo (new Input('text', 'Enter your name', 'md'))->setName('name')->render(); ?>
                </div>
            </div>
            <div class="component-showcase">
                <div class="component-label">Email Input</div>
                <div class="demo demo-full">
                    <?php echo (new Input('email', 'Enter your email', 'md'))->setName('email')->render(); ?>
                </div>
            </div>
            <div class="component-showcase">
                <div class="component-label">Input with Icon</div>
                <div class="demo demo-full">
                    <?php echo (new Input('text', 'Search...', 'md'))->setIcon('🔍')->setName('search')->render(); ?>
                </div>
            </div>
            <div class="component-showcase">
                <div class="component-label">Input with Error</div>
                <div class="demo demo-full">
                    <?php echo (new Input('email', 'Enter your email', 'md'))->setError('Please enter a valid email address')->setName('email_error')->render(); ?>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
