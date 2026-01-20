<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bistro Nippon - Blue Architect Edition (Print Ready)</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=JetBrains+Mono:wght@400;500&display=swap"
        rel="stylesheet">

    <style>
        /* ■■■ BLUE ARCHITECT / FRAMING EDITION ■■■ */
        :root {
            --bg-color: #ffffff;
            --text-main: #2f3e46;
            --text-sub: #7f8c8d;
            --accent-blue: #004e64;
            --accent-emerald-bg: #eaf6f3;
            --accent-emerald-text: #007f5f;
            --line-color: #b0bec5;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #e5e5e5;
            font-family: 'Inter', sans-serif;
            color: var(--text-main);
            font-size: 10px;
            line-height: 1.35;
            -webkit-font-smoothing: antialiased;
        }

        /* A4 Paper Simulation */
        .sheet {
            background: var(--bg-color);
            width: 210mm;
            height: 297mm;
            margin: 20px auto;

            /* 上下の余白を確保して中央寄せ */
            padding-top: 38mm;
            padding-bottom: 28mm;
            padding-left: 22mm;
            padding-right: 22mm;

            position: relative;
            box-shadow: 0 15px 40px rgba(0, 78, 100, 0.15);
            overflow: hidden;
        }

        /* --- ENGLISH MARK --- */
        .lang-mark {
            position: absolute;
            top: 32mm;
            right: 22mm;
            width: 24px;
            height: auto;
            opacity: 0.8;
            z-index: 10;
        }

        /* --- HEADER --- */
        header {
            border-bottom: 2px solid var(--line-color);
            padding-bottom: 14px;
            margin-bottom: 26px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            position: relative;
        }

        h1 {
            font-size: 24px;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            line-height: 1;
            color: var(--accent-blue);
            margin-right: 40px;
        }

        .sub-header {
            font-family: 'JetBrains Mono', monospace;
            font-size: 8.5px;
            color: var(--text-sub);
            text-transform: uppercase;
            letter-spacing: 0.1em;
            text-align: right;
            line-height: 1.4;
            border-left: 1px solid var(--line-color);
            padding-left: 10px;
        }

        /* --- GRID --- */
        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            column-gap: 12mm;
            height: auto;
        }

        .column {
            display: flex;
            flex-direction: column;
        }

        /* --- SECTIONS --- */
        section {
            margin-bottom: 24px;
        }

        h2 {
            font-size: 11.5px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            border-bottom: 1px solid var(--line-color);
            padding-bottom: 4px;
            margin-bottom: 12px;
            display: flex;
            justify-content: space-between;
            color: var(--accent-blue);
        }

        h2 span.jp {
            font-weight: 300;
            font-size: 9.5px;
            color: var(--text-sub);
            letter-spacing: 0.05em;
        }

        /* --- ITEMS --- */
        .item {
            margin-bottom: 11px;
            position: relative;
        }

        .item-top {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
        }

        .name {
            font-weight: 500;
            font-size: 10.5px;
            letter-spacing: 0.03em;
        }

        .price {
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            font-weight: 500;
            color: var(--accent-blue);
        }

        .desc {
            font-size: 9px;
            color: var(--text-sub);
            margin-top: 2px;
            font-weight: 300;
            padding-right: 10px;
            line-height: 1.3;
        }

        /* --- OPTIONS --- */
        .options {
            margin-top: 4px;
            padding-left: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            justify-content: flex-end;
        }

        .opt-item {
            font-family: 'JetBrains Mono', monospace;
            font-size: 10px;
            font-weight: 500;
            color: var(--accent-emerald-text);
            background: var(--accent-emerald-bg);
            padding: 2px 6px;
            border-radius: 3px;
            /* 印刷時に背景色を強制するプロパティ */
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        /* --- FOOTER --- */
        footer {
            position: absolute;
            bottom: 20mm;
            left: 22mm;
            right: 22mm;
            border-top: 1px solid var(--line-color);
            padding-top: 10px;
            display: flex;
            justify-content: space-between;
            font-family: 'JetBrains Mono', monospace;
            font-size: 8.5px;
            color: var(--text-sub);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* ■■■ PRINT SETTINGS (FIXED) ■■■ */
        @media print {

            /* 全ての要素に対して背景色印刷を強制 */
            * {
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
                color-adjust: exact !important;
            }

            body {
                background: none;
                margin: 0;
            }

            .sheet {
                margin: 0;
                box-shadow: none;
                width: 210mm;
                height: 297mm;
                page-break-after: always;
                border: none;
            }

            /* 不要なヘッダー・フッター（ブラウザのもの）を消すおまじない */
            @page {
                margin: 0;
                size: A4;
            }
        }
    </style>
</head>

<body>

    <div class="sheet">
        <img src="{{ asset('images/english.png') }}" alt="English Menu" class="lang-mark">

        <header>
            <h1>Bistro Nippon</h1>
            <div class="sub-header">
                Tunisia / La Marsa<br>
                Est. 2017
            </div>
        </header>

        <div class="grid-container">

            <div class="column">

                <section>
                    <h2>Kémia & Tapas <span class="jp">前菜</span></h2>

                    <div class="item">
                        <div class="item-top"><span class="name">Canard Rosé</span><span class="price">19</span>
                        </div>
                        <div class="desc">Grilled Duck Breast 60g, Homemade Teriyaki Sauce.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Poulet Paiko</span><span class="price">19</span>
                        </div>
                        <div class="desc">Crispy fried chicken, marinated in Japanese sauce.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Miso Soup Seafood</span><span
                                class="price">17</span></div>
                        <div class="desc">Traditional broth, seafood, wakame seaweed.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Miso Soup Wakame</span><span class="price">8</span>
                        </div>
                        <div class="desc">Classic miso broth with wakame seaweed.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Tofu Caprese</span><span class="price">12</span>
                        </div>
                        <div class="desc">Tofu marinated for 24h, creamy mozzarella-like texture.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Harusame & Kikurage</span><span
                                class="price">14</span></div>
                        <div class="desc">Soy vermicelli salad with wood ear mushrooms.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Zesty Wakame</span><span class="price">12</span>
                        </div>
                        <div class="desc">Seaweed, sesame oil, fresh lemon.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Croquettes (2pcs)</span><span class="price">8</span>
                        </div>
                        <div class="desc">Mashed potato croquettes, panko breadcrumbs, homemade sauce.</div>
                    </div>
                </section>

                <section>
                    <h2>Donburi <span class="jp">丼もの</span></h2>

                    <div class="item">
                        <div class="item-top"><span class="name">Beef Donburi</span><span class="price">35</span>
                        </div>
                        <div class="desc">Large bowl of rice, grilled sliced beef, onions.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Katsu Don (Chicken)</span><span
                                class="price">28</span></div>
                        <div class="desc">Simmered breaded chicken cutlet with egg over rice.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Onigiri (1pc)</span></div>
                        <div class="options">
                            <span class="opt-item">Cheese 6</span>
                            <span class="opt-item">Chicken 7</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">White Rice</span><span class="price">4</span></div>
                    </div>
                </section>

                <section>
                    <h2>Kids Menu <span class="jp">お子様</span></h2>
                    <div class="item">
                        <div class="item-top"><span class="name">Fried Rice / Noodles Set</span><span
                                class="price">15</span></div>
                        <div class="desc">Adapted portion + Fried chicken (Karaage).</div>
                    </div>
                </section>

                <section>
                    <h2>Desserts <span class="jp">デザート</span></h2>
                    <div class="item">
                        <div class="desc" style="font-style: normal; color: var(--text-main);">
                            Our desserts change based on inspiration.<br>
                            Please ask our team for today's selection.
                        </div>
                    </div>
                </section>

            </div>

            <div class="column">

                <section>
                    <h2>Ramen <span class="jp">ラーメン</span></h2>

                    <div class="item">
                        <div class="item-top"><span class="name">Spicy Tantan Ramen</span></div>
                        <div class="desc">Rich sesame broth, chili oil, minced beef.</div>
                        <div class="options">
                            <span class="opt-item">Wakame 31.5</span>
                            <span class="opt-item">Chicken 33</span>
                            <span class="opt-item">Beef 43</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Tokyo Soy Ramen</span></div>
                        <div class="desc">Clear soy sauce broth, authentic flavor.</div>
                        <div class="options">
                            <span class="opt-item">Chicken/Veg 29</span>
                            <span class="opt-item">Fried Chicken 33</span>
                            <span class="opt-item">Beef 43</span>
                        </div>
                    </div>
                </section>

                <section>
                    <h2>Udon <span class="jp">うどん</span></h2>

                    <div class="item">
                        <div class="item-top"><span class="name">Forest Udon</span></div>
                        <div class="desc">Spinach cream sauce, mushrooms, thick noodles.</div>
                        <div class="options">
                            <span class="opt-item">Nori 29</span>
                            <span class="opt-item">Seafood 39</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Ginger Udon</span></div>
                        <div class="desc">Hot ginger broth, leeks.</div>
                        <div class="options">
                            <span class="opt-item">Seaweed 30</span>
                            <span class="opt-item">Seafood 39</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Chicken Katsu Udon</span><span
                                class="price">28</span></div>
                        <div class="desc">Udon noodles served with crispy breaded chicken cutlet.</div>
                    </div>
                </section>

                <section>
                    <h2>Yakisoba <span class="jp">焼きそば</span></h2>

                    <div class="item">
                        <div class="item-top"><span class="name">Yakisoba Nippon</span></div>
                        <div class="desc">Stir-fried noodles with special sauce, vegetables.</div>
                        <div class="options">
                            <span class="opt-item">Vegetables 28</span>
                            <span class="opt-item">Paiko 33</span>
                            <span class="opt-item">Seafood 39</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">BBQ Beef Yakisoba</span><span
                                class="price">43</span></div>
                        <div class="desc">Stir-fried thin noodles, accompanied by thinly sliced beef (150g).</div>
                    </div>
                </section>

                <section>
                    <h2>Drinks <span class="jp">お飲み物</span></h2>

                    <div class="item">
                        <div class="item-top"><span class="name">Mystic Kombucha</span><span
                                class="price">12</span></div>
                        <div class="desc">Hibiscus / Cinnamon. Natural probiotics.</div>
                    </div>
                    <div class="item">
                        <div class="item-top"><span class="name">Green Tea (Thé Vert)</span><span
                                class="price">9</span></div>
                        <div class="desc">Hot Japanese tea, rich in antioxidants.</div>
                    </div>
                    <div class="item">
                        <div class="item-top"><span class="name">Hot Citronnade</span><span class="price">9</span>
                        </div>
                        <div class="desc">Naturally sweet cane sugar flavor without refined sugar.</div>
                    </div>
                    <div class="item">
                        <div class="item-top"><span class="name">Mineral Water</span><span class="price">4</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-top"><span class="name">Soda</span><span class="price">4</span></div>
                    </div>
                </section>

            </div>
        </div>

        <footer>
            <span>Authentic Japanese Cuisine</span>
            <span>All prices in TND (DT)</span>
        </footer>

    </div>

</body>

</html>
