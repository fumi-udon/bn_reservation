<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bistro Nippon Menu - English Edition (A4 Fit)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=JetBrains+Mono:wght@500&display=swap"
        rel="stylesheet">

    <style>
        /* --- AURALEE / ATON Vibe : Modern Minimalist Style --- */

        /* 1. Reset & Variables */
        :root {
            --bg-color: #ffffff;
            --text-main: #1a1a1a;
            --text-sub: #555555;
            --line-color: #e0e0e0;
            --font-base: 'Inter', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            --font-mono: 'JetBrains Mono', monospace;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-main);
            font-family: var(--font-base);
            font-weight: 400;
            /* 行間を詰めてA4に収める */
            line-height: 1.25;
            -webkit-font-smoothing: antialiased;
        }

        /* 2. Container (A4 Size) */
        .menu-container {
            width: 210mm;
            min-height: 297mm;
            margin: 40px auto;
            background: #fff;
            /* 余白設定をフランス語版と統一 */
            padding: 10mm 20mm;
            box-sizing: border-box;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.03);
            position: relative;
        }

        /* IT Style Language Tag */
        .lang-tag {
            position: absolute;
            top: 10mm;
            right: 20mm;
            font-family: var(--font-mono);
            font-size: 0.75rem;
            color: var(--text-main);
            border: 1px solid var(--text-main);
            padding: 2px 6px;
            letter-spacing: 0.05em;
            opacity: 0.8;
        }

        /* 3. Typography */
        h1.main-title {
            font-family: var(--font-base);
            font-size: 1.5rem;
            font-weight: 600;
            text-transform: uppercase;
            text-align: center;
            letter-spacing: 0.25em;
            margin-bottom: 0.1rem;
            color: var(--text-main);
        }

        .subtitle {
            text-align: center;
            font-size: 0.65rem;
            font-weight: 500;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            color: #999;
            margin-bottom: 1.5rem;
        }

        h2.category-title {
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.15em;
            border-bottom: 1px solid var(--text-main);
            padding-bottom: 4px;
            margin-top: 1.2rem;
            margin-bottom: 0.6rem;
            color: var(--text-main);
        }

        .mt-0 {
            margin-top: 0 !important;
        }

        /* 4. Menu Items */
        .menu-item {
            margin-bottom: 0.65rem;
        }

        .item-header {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-bottom: 0rem;
        }

        .item-name {
            font-size: 0.85rem;
            font-weight: 500;
            letter-spacing: 0.05em;
            color: var(--text-main);
        }

        .item-name small {
            font-size: 0.75rem;
            color: #999;
            margin-left: 5px;
            font-weight: 400;
        }

        .item-price {
            font-size: 0.85rem;
            font-weight: 500;
            letter-spacing: 0.05em;
            white-space: nowrap;
        }

        .item-desc {
            font-size: 0.7rem;
            color: var(--text-sub);
            line-height: 1.2;
            letter-spacing: 0.01em;
            margin-top: 0px;
        }

        /* 5. Options */
        .option-group {
            margin-top: 0.2rem;
        }

        .option-row {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            font-size: 0.7rem;
            color: var(--text-sub);
            margin-bottom: 0.1rem;
            padding-left: 10px;
            border-left: 1px solid var(--line-color);
        }

        .option-name {
            letter-spacing: 0.02em;
        }

        .option-price {
            color: var(--text-main);
            font-weight: 500;
        }

        /* 6. Print Settings */
        @page {
            size: A4;
            margin: 0;
        }

        @media print {
            body {
                background: white;
                -webkit-print-color-adjust: exact;
            }

            .menu-container {
                box-shadow: none;
                margin: 0;
                width: 100%;
                padding: 10mm 20mm;
            }

            h2.category-title {
                break-after: avoid;
            }

            .menu-item {
                break-inside: avoid;
            }

            .lang-tag {
                display: block;
            }
        }
    </style>
</head>

<body>

    <div class="menu-container">

        <div class="lang-tag">EN</div>

        <h1 class="main-title">Bistro Nippon</h1>
        <div class="subtitle">Authentic Japanese Cuisine</div>

        <div class="row gx-5">
            <div class="col-6">

                <h2 class="category-title mt-0">Appetizers & Tapas</h2>

                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Roasted Duck</span>
                        <span class="item-price">19 DT</span>
                    </div>
                    <div class="item-desc">Grilled duck breast (60g) with Teriyaki sauce</div>
                </div>

                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Paiko Chicken</span>
                        <span class="item-price">19 DT</span>
                    </div>
                    <div class="item-desc">Japanese-style fried chicken with savory sauce</div>
                </div>

                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Seafood Miso Soup</span>
                        <span class="item-price">17 DT</span>
                    </div>
                    <div class="item-desc">Miso soup with mixed seafood and wakame seaweed</div>
                </div>

                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Wakame Miso Soup</span>
                        <span class="item-price">8 DT</span>
                    </div>
                    <div class="item-desc">Classic miso soup with wakame seaweed</div>
                </div>
                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Caprese Tofu</span>
                        <span class="item-price">12 DT</span>
                    </div>
                    <div class="item-desc">24h marinated tofu, rich and creamy texture</div>
                </div>

                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Harusame Salad</span>
                        <span class="item-price">14 DT</span>
                    </div>
                    <div class="item-desc">Glass noodle salad with wood ear mushrooms</div>
                </div>

                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Zesty Wakame</span>
                        <span class="item-price">12 DT</span>
                    </div>
                    <div class="item-desc">Seaweed and crisp vegetables with sesame oil and lemon</div>
                </div>

                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Croquettes <small>(2 pcs)</small></span>
                        <span class="item-price">8 DT</span>
                    </div>
                    <div class="item-desc">Potato croquettes with homemade Teriyaki sauce</div>
                </div>

                <h2 class="category-title">Rice Dishes (Donburi)</h2>

                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Beef Donburi</span>
                        <span class="item-price">35 DT</span>
                    </div>
                    <div class="item-desc">Large rice bowl topped with grilled beef (150g) & veggies</div>
                </div>

                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Chicken Katsu Don</span>
                        <span class="item-price">28 DT</span>
                    </div>
                    <div class="item-desc">Large rice bowl with fried chicken, onion, and egg</div>
                </div>

                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Onigiri <small>(1 pc)</small></span>
                    </div>
                    <div class="option-group">
                        <div class="option-row">
                            <span class="option-name">Cheese</span>
                            <span class="option-price">6 DT</span>
                        </div>
                        <div class="option-row">
                            <span class="option-name">Chicken</span>
                            <span class="option-price">7 DT</span>
                        </div>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">White Rice</span>
                        <span class="item-price">4 DT</span>
                    </div>
                </div>

                <h2 class="category-title">Kids Menu</h2>
                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Fried Rice / Noodle Set</span>
                        <span class="item-price">15 DT</span>
                    </div>
                    <div class="item-desc">Mini portion (rice or noodles) + mini fried chicken</div>
                </div>

            </div>

            <div class="col-6">

                <h2 class="category-title mt-0">Ramen</h2>

                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Spicy Tantan Ramen</span>
                    </div>
                    <div class="item-desc">Rich sesame broth, spicy miso, minced beef</div>
                    <div class="option-group">
                        <div class="option-row">
                            <span class="option-name">Wakame</span>
                            <span class="option-price">31.5 DT</span>
                        </div>
                        <div class="option-row">
                            <span class="option-name">Fried Chicken</span>
                            <span class="option-price">33 DT</span>
                        </div>
                        <div class="option-row">
                            <span class="option-name">Beef (150g)</span>
                            <span class="option-price">43 DT</span>
                        </div>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Tokyo Soy Sauce Ramen</span>
                    </div>
                    <div class="item-desc">Classic light soy sauce broth with egg</div>
                    <div class="option-group">
                        <div class="option-row">
                            <span class="option-name">Chicken & Veggies</span>
                            <span class="option-price">29 DT</span>
                        </div>
                        <div class="option-row">
                            <span class="option-name">Fried Chicken</span>
                            <span class="option-price">33 DT</span>
                        </div>
                        <div class="option-row">
                            <span class="option-name">Beef (150g)</span>
                            <span class="option-price">43 DT</span>
                        </div>
                    </div>
                </div>

                <h2 class="category-title">Udon</h2>

                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Forest Udon</span>
                    </div>
                    <div class="item-desc">Noodles topped with creamy spinach sauce & mushrooms</div>
                    <div class="option-group">
                        <div class="option-row">
                            <span class="option-name">Nori Seaweed</span>
                            <span class="option-price">29 DT</span>
                        </div>
                        <div class="option-row">
                            <span class="option-name">Seafood</span>
                            <span class="option-price">39 DT</span>
                        </div>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Ginger Udon</span>
                    </div>
                    <div class="item-desc">Hot ginger soy sauce broth with leeks</div>
                    <div class="option-group">
                        <div class="option-row">
                            <span class="option-name">Mixed Seaweed</span>
                            <span class="option-price">30 DT</span>
                        </div>
                        <div class="option-row">
                            <span class="option-name">Seafood</span>
                            <span class="option-price">39 DT</span>
                        </div>
                    </div>
                </div>

                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Chicken Katsu Udon</span>
                        <span class="item-price">28 DT</span>
                    </div>
                    <div class="item-desc">Thick noodles with fried chicken in Teriyaki sauce</div>
                </div>

                <h2 class="category-title">Yakisoba</h2>

                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Nippon Yakisoba</span>
                    </div>
                    <div class="item-desc">Stir-fried thin noodles with vegetables</div>
                    <div class="option-group">
                        <div class="option-row">
                            <span class="option-name">Seaweed & Veggies</span>
                            <span class="option-price">28 DT</span>
                        </div>
                        <div class="option-row">
                            <span class="option-name">Paiko Chicken</span>
                            <span class="option-price">33 DT</span>
                        </div>
                        <div class="option-row">
                            <span class="option-name">Seafood</span>
                            <span class="option-price">39 DT</span>
                        </div>
                    </div>
                </div>

                <h2 class="category-title">Desserts & Tea</h2>

                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Silky Annin Jelly</span>
                        <span class="item-price">9 DT</span>
                    </div>
                </div>
                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Matcha Pudding</span>
                        <span class="item-price">9 DT</span>
                    </div>
                </div>
                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Sesame Pudding</span>
                        <span class="item-price">8 DT</span>
                    </div>
                </div>

                <div style="margin-bottom: 0.8rem;"></div>

                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Sencha Green Tea <small>(600ml)</small></span>
                        <span class="item-price">9 DT</span>
                    </div>
                </div>
                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Hot Lemonade</span>
                        <span class="item-price">9 DT</span>
                    </div>
                </div>
                <div class="menu-item">
                    <div class="item-header">
                        <span class="item-name">Water <small>(1.5L)</small> / Soda</span>
                        <span class="item-price">4 DT</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
