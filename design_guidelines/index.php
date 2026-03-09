<?php
// Airbnb-Style UI Component System
// Main Router
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$pages = ['home', 'listings', 'documentation', 'components'];

if (!in_array($page, $pages)) {
    $page = 'home';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airbnb UI - Component System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Helvetica Neue', sans-serif;
            background: #fff;
            color: #222;
        }

        /* Navigation Bar - Shared across all pages */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 100;
            background: #fff;
            border-bottom: 1px solid #eee;
            padding: 16px 0;
        }

        .navbar-content {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-logo {
            font-size: 24px;
            font-weight: 700;
            letter-spacing: -0.5px;
            color: #FF385C;
        }

        .navbar-menu {
            display: flex;
            gap: 40px;
            list-style: none;
        }

        .navbar-menu a {
            text-decoration: none;
            color: #222;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.2s;
            padding: 8px 0;
            border-bottom: 2px solid transparent;
        }

        .navbar-menu a:hover,
        .navbar-menu a.active {
            color: #FF385C;
            border-bottom-color: #FF385C;
        }

        .page-container {
            min-height: calc(100vh - 70px);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="navbar-content">
            <div class="navbar-logo">⬥ Airbnb UI System</div>
            <ul class="navbar-menu">
                <li><a href="?page=home" class="<?= $page === 'home' ? 'active' : '' ?>">Home</a></li>
                <li><a href="?page=components" class="<?= $page === 'components' ? 'active' : '' ?>">Components</a></li>
                <li><a href="?page=listings" class="<?= $page === 'listings' ? 'active' : '' ?>">Listings</a></li>
                <li><a href="?page=documentation" class="<?= $page === 'documentation' ? 'active' : '' ?>">Documentation</a></li>
            </ul>
        </div>
    </nav>

    <div class="page-container">
        <?php
        switch ($page) {
            case 'home':
                include 'pages/home.php';
                break;
            case 'components':
                include 'pages/components.php';
                break;
            case 'listings':
                include 'pages/listings.php';
                break;
            case 'documentation':
                include 'pages/documentation.php';
                break;
        }
        ?>
    </div>
</body>
</html>
