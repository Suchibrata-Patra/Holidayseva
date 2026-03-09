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
    <title>Listings - Airbnb UI System</title>
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
            margin-bottom: 48px;
        }

        .search-section {
            margin-bottom: 48px;
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .listings-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 24px;
        }

        .listing-item {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
        }

        .listing-image-wrapper {
            position: relative;
            height: 240px;
            overflow: hidden;
            background: #f0f0f0;
        }

        .listing-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .listing-item:hover .listing-image {
            transform: scale(1.05);
        }

        .listing-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            z-index: 10;
        }

        .listing-info {
            padding: 16px;
            background: white;
            border: 1px solid #EBEBEB;
            border-top: none;
        }

        .listing-title {
            font-size: 15px;
            font-weight: 600;
            color: #222;
            margin-bottom: 4px;
            line-height: 1.4;
        }

        .listing-location {
            font-size: 13px;
            color: #717171;
            margin-bottom: 8px;
        }

        .listing-rating {
            margin-bottom: 12px;
        }

        .listing-price {
            font-size: 16px;
            font-weight: 700;
            color: #222;
            margin-bottom: 12px;
        }

        .listing-price-label {
            font-size: 12px;
            color: #717171;
            font-weight: 400;
        }

        .listing-footer {
            display: flex;
            gap: 8px;
        }

        .listing-footer button {
            flex: 1;
        }

        .filter-section {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-bottom: 32px;
        }

        .filter-btn {
            padding: 8px 16px;
            border: 1.5px solid #DDDDDD;
            border-radius: 24px;
            background: white;
            color: #222;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }

        .filter-btn:hover {
            border-color: #222;
            background: #f7f7f7;
        }

        .filter-btn.active {
            background: #222;
            color: white;
            border-color: #222;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Explore Listings</h1>
        <p class="subtitle">Discover beautiful homes and experiences with our Airbnb-style UI components.</p>

        <!-- Search Section -->
        <div class="search-section">
            <?php echo (new Input('text', 'Search destinations...', 'lg'))->setIcon('🔍')->setName('search')->render(); ?>
            <button style="
                padding: 12px 32px;
                background: #FF385C;
                color: white;
                border: none;
                border-radius: 8px;
                font-weight: 600;
                cursor: pointer;
                transition: all 0.2s;
            ">
                Search
            </button>
        </div>

        <!-- Filters -->
        <div class="filter-section">
            <button class="filter-btn active">All</button>
            <button class="filter-btn">Apartments</button>
            <button class="filter-btn">Houses</button>
            <button class="filter-btn">Villas</button>
            <button class="filter-btn">Rooms</button>
            <button class="filter-btn">Unique</button>
        </div>

        <!-- Listings Grid -->
        <div class="listings-grid">
            <!-- Listing 1 -->
            <div class="listing-item">
                <div class="listing-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?w=400&h=300&fit=crop" alt="Cozy Apartment" class="listing-image">
                    <div class="listing-badge">
                        <?php echo (new Badge('Featured', 'primary', 'sm'))->render(); ?>
                    </div>
                </div>
                <div class="listing-info">
                    <div class="listing-title">Cozy Downtown Apartment</div>
                    <div class="listing-location">📍 San Francisco, CA</div>
                    <div class="listing-rating">
                        <?php echo (new Rating(4.8, 128, 'sm'))->render(); ?>
                    </div>
                    <div class="listing-price">
                        <span class="listing-price-label">from</span><br>
                        $150 <span class="listing-price-label">per night</span>
                    </div>
                    <div class="listing-footer">
                        <?php echo (new Button('View', 'primary', 'sm'))->setFullWidth(true)->render(); ?>
                    </div>
                </div>
            </div>

            <!-- Listing 2 -->
            <div class="listing-item">
                <div class="listing-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1540932549986-b8a874ad53f7?w=400&h=300&fit=crop" alt="Luxury Villa" class="listing-image">
                    <div class="listing-badge">
                        <?php echo (new Badge('Luxury', 'info', 'sm'))->render(); ?>
                    </div>
                </div>
                <div class="listing-info">
                    <div class="listing-title">Luxury Beachfront Villa</div>
                    <div class="listing-location">📍 Malibu, CA</div>
                    <div class="listing-rating">
                        <?php echo (new Rating(5, 256, 'sm'))->render(); ?>
                    </div>
                    <div class="listing-price">
                        <span class="listing-price-label">from</span><br>
                        $450 <span class="listing-price-label">per night</span>
                    </div>
                    <div class="listing-footer">
                        <?php echo (new Button('View', 'primary', 'sm'))->setFullWidth(true)->render(); ?>
                    </div>
                </div>
            </div>

            <!-- Listing 3 -->
            <div class="listing-item">
                <div class="listing-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?w=400&h=300&fit=crop" alt="Modern Studio" class="listing-image">
                    <div class="listing-badge">
                        <?php echo (new Badge('New', 'success', 'sm'))->render(); ?>
                    </div>
                </div>
                <div class="listing-info">
                    <div class="listing-title">Modern City Studio</div>
                    <div class="listing-location">📍 New York, NY</div>
                    <div class="listing-rating">
                        <?php echo (new Rating(4.5, 95, 'sm'))->render(); ?>
                    </div>
                    <div class="listing-price">
                        <span class="listing-price-label">from</span><br>
                        $180 <span class="listing-price-label">per night</span>
                    </div>
                    <div class="listing-footer">
                        <?php echo (new Button('View', 'primary', 'sm'))->setFullWidth(true)->render(); ?>
                    </div>
                </div>
            </div>

            <!-- Listing 4 -->
            <div class="listing-item">
                <div class="listing-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?w=400&h=300&fit=crop" alt="Mountain Cabin" class="listing-image">
                    <div class="listing-badge">
                        <?php echo (new Badge('Limited', 'warning', 'sm'))->render(); ?>
                    </div>
                </div>
                <div class="listing-info">
                    <div class="listing-title">Cozy Mountain Cabin</div>
                    <div class="listing-location">📍 Lake Tahoe, CA</div>
                    <div class="listing-rating">
                        <?php echo (new Rating(4.9, 187, 'sm'))->render(); ?>
                    </div>
                    <div class="listing-price">
                        <span class="listing-price-label">from</span><br>
                        $220 <span class="listing-price-label">per night</span>
                    </div>
                    <div class="listing-footer">
                        <?php echo (new Button('View', 'primary', 'sm'))->setFullWidth(true)->render(); ?>
                    </div>
                </div>
            </div>

            <!-- Listing 5 -->
            <div class="listing-item">
                <div class="listing-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=400&h=300&fit=crop" alt="Historic Townhouse" class="listing-image">
                    <div class="listing-badge">
                        <?php echo (new Badge('Historic', 'info', 'sm'))->render(); ?>
                    </div>
                </div>
                <div class="listing-info">
                    <div class="listing-title">Historic Townhouse</div>
                    <div class="listing-location">📍 Boston, MA</div>
                    <div class="listing-rating">
                        <?php echo (new Rating(4.7, 142, 'sm'))->render(); ?>
                    </div>
                    <div class="listing-price">
                        <span class="listing-price-label">from</span><br>
                        $195 <span class="listing-price-label">per night</span>
                    </div>
                    <div class="listing-footer">
                        <?php echo (new Button('View', 'primary', 'sm'))->setFullWidth(true)->render(); ?>
                    </div>
                </div>
            </div>

            <!-- Listing 6 -->
            <div class="listing-item">
                <div class="listing-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1560314503-0ab9b0fcbfb8?w=400&h=300&fit=crop" alt="Urban Loft" class="listing-image">
                    <div class="listing-badge">
                        <?php echo (new Badge('Superhost', 'warning', 'sm'))->render(); ?>
                    </div>
                </div>
                <div class="listing-info">
                    <div class="listing-title">Industrial Urban Loft</div>
                    <div class="listing-location">📍 Chicago, IL</div>
                    <div class="listing-rating">
                        <?php echo (new Rating(4.6, 112, 'sm'))->render(); ?>
                    </div>
                    <div class="listing-price">
                        <span class="listing-price-label">from</span><br>
                        $165 <span class="listing-price-label">per night</span>
                    </div>
                    <div class="listing-footer">
                        <?php echo (new Button('View', 'primary', 'sm'))->setFullWidth(true)->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
