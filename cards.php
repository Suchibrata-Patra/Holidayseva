<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services in Kolkata - HolidaySeva</title>
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
            background: #FFFFFF;
            color: #222222;
        }

        /* ════════════════════════════════════════════════════════════════
           COLOR TOKENS
           ════════════════════════════════════════════════════════════════ */

        :root {
            --color-bg: #FFFFFF;
            --color-bg-secondary: #F7F7F7;
            --color-text-primary: #222222;
            --color-text-secondary: #717171;
            --color-border-light: #E5E5E5;
            --color-border-lighter: #F0F0F0;
            --color-primary: #FF385C;
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
           PAGE HEADER
           ════════════════════════════════════════════════════════════════ */

        .page-header {
            padding: 48px 0 40px 0;
        }

        .page-title {
            font-size: 32px;
            font-weight: 700;
            line-height: 1.15;
            letter-spacing: -0.6px;
            color: #222222;
            margin-bottom: 32px;
        }

        /* ════════════════════════════════════════════════════════════════
           CARD STYLES (from cards.css)
           ════════════════════════════════════════════════════════════════ */

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            background: var(--color-bg);
            border: 1px solid var(--color-border-light);
            border-radius: 12px;
            overflow: hidden;
            transition: 
                box-shadow 280ms cubic-bezier(0.34, 1.56, 0.64, 1),
                transform 280ms cubic-bezier(0.34, 1.56, 0.64, 1);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08);
            cursor: pointer;
        }

        .card:hover {
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.12);
            transform: translateY(-4px);
        }

        .card:active {
            transform: translateY(-2px);
        }

        .card-favorite-button {
            position: absolute;
            top: 12px;
            right: 12px;
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 18px;
            transition: background 200ms ease, transform 200ms ease;
            z-index: 10;
        }

        .card-favorite-button:hover {
            background: rgba(255, 255, 255, 1);
            transform: scale(1.1);
        }

        .card-header {
            position: relative;
            width: 100%;
            overflow: hidden;
            background: var(--color-bg-secondary);
            aspect-ratio: 4 / 3;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-header img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
            transition: transform 380ms cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .card:hover .card-header img {
            transform: scale(1.06);
        }

        .card-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            background: rgba(255, 255, 255, 0.95);
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            color: var(--color-text-primary);
            z-index: 5;
        }

        .card-content {
            padding: 16px;
            display: flex;
            flex-direction: column;
            gap: 4px;
            flex: 1;
        }

        .card-title {
            margin: 0;
            font-size: 15px;
            font-weight: 600;
            line-height: 1.35;
            color: var(--color-text-primary);
            letter-spacing: -0.3px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .card-description {
            margin: 0;
            font-size: 13px;
            line-height: 1.38;
            color: var(--color-text-secondary);
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 16px;
            width: 100%;
        }

        /* ════════════════════════════════════════════════════════════════
           RESPONSIVE
           ════════════════════════════════════════════════════════════════ */

        @media (max-width: 768px) {
            .card-grid {
                grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
                gap: 14px;
            }

            .page-title {
                font-size: 24px;
            }
        }

        @media (max-width: 480px) {
            .card-grid {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
                gap: 12px;
            }

            .page-title {
                font-size: 20px;
            }

            .container {
                padding: 0 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <h1 class="page-title">Services in Kolkata</h1>
        </div>

        <!-- Services Grid -->
        <div class="card-grid">
            <!-- Photography -->
            <div class="card">
                <div class="card-header">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Cdefs%3E%3ClinearGradient id='grad1' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%23D35400;stop-opacity:1' /%3E%3Cstop offset='100%25' style='stop-color:%238B4513;stop-opacity:1' /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23grad1)' width='400' height='300'/%3E%3C/svg%3E" alt="Photography">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Photography</h3>
                    <p class="card-description">1 available</p>
                </div>
            </div>

            <!-- Chefs -->
            <div class="card">
                <div class="card-header">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Cdefs%3E%3ClinearGradient id='grad2' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%23F4A460;stop-opacity:1' /%3E%3Cstop offset='100%25' style='stop-color:%23DAA520;stop-opacity:1' /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23grad2)' width='400' height='300'/%3E%3C/svg%3E" alt="Chefs">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Chefs</h3>
                    <p class="card-description">Coming soon</p>
                </div>
            </div>

            <!-- Massage -->
            <div class="card">
                <div class="card-header">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Cdefs%3E%3ClinearGradient id='grad3' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%23CD853F;stop-opacity:1' /%3E%3Cstop offset='100%25' style='stop-color:%23A0522D;stop-opacity:1' /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23grad3)' width='400' height='300'/%3E%3C/svg%3E" alt="Massage">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Massage</h3>
                    <p class="card-description">Coming soon</p>
                </div>
            </div>

            <!-- Prepared meals -->
            <div class="card">
                <div class="card-header">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Cdefs%3E%3ClinearGradient id='grad4' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%2390EE90;stop-opacity:1' /%3E%3Cstop offset='100%25' style='stop-color:%23228B22;stop-opacity:1' /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23grad4)' width='400' height='300'/%3E%3C/svg%3E" alt="Prepared meals">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Prepared meals</h3>
                    <p class="card-description">Coming soon</p>
                </div>
            </div>

            <!-- Training -->
            <div class="card">
                <div class="card-header">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Cdefs%3E%3ClinearGradient id='grad5' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%23696969;stop-opacity:1' /%3E%3Cstop offset='100%25' style='stop-color:%23404040;stop-opacity:1' /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23grad5)' width='400' height='300'/%3E%3C/svg%3E" alt="Training">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Training</h3>
                    <p class="card-description">Coming soon</p>
                </div>
            </div>

            <!-- Make-up -->
            <div class="card">
                <div class="card-header">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Cdefs%3E%3ClinearGradient id='grad6' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%23F5DEB3;stop-opacity:1' /%3E%3Cstop offset='100%25' style='stop-color:%23DEB887;stop-opacity:1' /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23grad6)' width='400' height='300'/%3E%3C/svg%3E" alt="Make-up">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Make-up</h3>
                    <p class="card-description">Coming soon</p>
                </div>
            </div>

            <!-- Hair -->
            <div class="card">
                <div class="card-header">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Cdefs%3E%3ClinearGradient id='grad7' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%23A0522D;stop-opacity:1' /%3E%3Cstop offset='100%25' style='stop-color:%23654321;stop-opacity:1' /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23grad7)' width='400' height='300'/%3E%3C/svg%3E" alt="Hair">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Hair</h3>
                    <p class="card-description">Coming soon</p>
                </div>
            </div>

            <!-- Spa treatments -->
            <div class="card">
                <div class="card-header">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Cdefs%3E%3ClinearGradient id='grad8' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%23FFB6C1;stop-opacity:1' /%3E%3Cstop offset='100%25' style='stop-color:%23FF69B4;stop-opacity:1' /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23grad8)' width='400' height='300'/%3E%3C/svg%3E" alt="Spa treatments">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Spa treatments</h3>
                    <p class="card-description">Coming soon</p>
                </div>
            </div>

            <!-- Catering -->
            <div class="card">
                <div class="card-header">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Cdefs%3E%3ClinearGradient id='grad9' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%23556B2F;stop-opacity:1' /%3E%3Cstop offset='100%25' style='stop-color:%23355E3B;stop-opacity:1' /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23grad9)' width='400' height='300'/%3E%3C/svg%3E" alt="Catering">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Catering</h3>
                    <p class="card-description">Coming soon</p>
                </div>
            </div>

            <!-- Nails -->
            <div class="card">
                <div class="card-header">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Cdefs%3E%3ClinearGradient id='grad10' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%23800020;stop-opacity:1' /%3E%3Cstop offset='100%25' style='stop-color:%23660011;stop-opacity:1' /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23grad10)' width='400' height='300'/%3E%3C/svg%3E" alt="Nails">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Nails</h3>
                    <p class="card-description">Coming soon</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>