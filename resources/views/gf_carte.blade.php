<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bistro Nippon - Sunday Menu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=JetBrains+Mono:wght@400;500;700&display=swap"
        rel="stylesheet">

    <style>
        /* ■■■ BISTRONIPPON DESIGN SYSTEM ■■■ */
        :root {
            --bg-color: #ffffff;
            --text-main: #2f3e46;
            --text-sub: #7f8c8d;
            --accent-blue: #004e64;
            --line-color: #b0bec5;
            --body-bg: #e5e5e5;

            /* Badge Colors */
            --gf-bg: #d4edda;
            --gf-text: #155724;
            --mg-bg: #fff3cd;
            --mg-text: #856404;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: var(--body-bg);
            font-family: 'Inter', sans-serif;
            color: var(--text-main);
            font-size: 14px;
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
        }

        /* --- CONTAINER --- */
        .sheet {
            background: var(--bg-color);
            margin: 0 auto;
            position: relative;
            box-shadow: 0 4px 20px rgba(0, 78, 100, 0.1);
            overflow: hidden;
            width: 100%;
            min-height: 100vh;
            padding: 20px;
        }

        /* --- HEADER --- */
        header {
            border-bottom: 2px solid var(--line-color);
            padding-bottom: 15px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand-group h1 {
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            line-height: 1;
            color: var(--accent-blue);
            margin-bottom: 5px;
        }

        .brand-group .subtitle {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.15em;
            color: var(--text-sub);
        }

        .sub-header {
            font-family: 'JetBrains Mono', monospace;
            font-size: 10px;
            color: var(--text-sub);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            text-align: right;
            line-height: 1.4;
            border-left: 1px solid var(--line-color);
            padding-left: 10px;
            max-width: 120px;
        }

        /* --- LEGEND --- */
        .legend {
            background-color: #f8f9fa;
            border-radius: 6px;
            padding: 10px 15px;
            margin-bottom: 25px;
            font-size: 11px;
            color: var(--text-sub);
        }

        .legend-title {
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 6px;
            display: block;
            color: var(--accent-blue);
        }

        .legend-items {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* --- BADGES --- */
        .badge {
            font-family: 'JetBrains Mono', monospace;
            font-size: 10px;
            font-weight: 700;
            padding: 2px 6px;
            border-radius: 4px;
            display: inline-block;
            vertical-align: middle;
            margin-right: 5px;
        }

        .badge.gf {
            background-color: var(--gf-bg);
            color: var(--gf-text);
        }

        .badge.mg {
            background-color: var(--mg-bg);
            color: var(--mg-text);
        }

        /* --- GRID CONTAINER (Default Mobile) --- */
        .grid-container {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .column {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        /* --- SECTIONS & ITEMS --- */
        section {
            margin-bottom: 10px;
        }

        h2 {
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            border-bottom: 1px solid var(--line-color);
            padding-bottom: 6px;
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            color: var(--accent-blue);
        }

        h2 span.sub {
            font-weight: 400;
            font-size: 12px;
            color: var(--text-sub);
            letter-spacing: 0.05em;
        }

        .item {
            margin-bottom: 18px;
            position: relative;
        }

        .item-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .name {
            font-weight: 600;
            font-size: 15px;
            letter-spacing: 0.02em;
            color: var(--text-main);
            padding-right: 10px;
        }

        .price {
            font-family: 'JetBrains Mono', monospace;
            font-size: 15px;
            font-weight: 600;
            color: var(--accent-blue);
            white-space: nowrap;
        }

        .desc {
            font-size: 13px;
            color: var(--text-sub);
            margin-top: 4px;
            font-weight: 400;
            line-height: 1.4;
        }

        /* --- FOOTER --- */
        footer {
            margin-top: 40px;
            border-top: 1px solid var(--line-color);
            padding-top: 20px;
            padding-bottom: 40px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            text-align: center;
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            color: var(--text-sub);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* ■■■ DESKTOP & PRINT SETTINGS (Fixed Layout) ■■■ */
        @media screen and (min-width: 769px),
        print {
            body {
                font-size: 10px;
                padding: 20px 0;
            }

            .sheet {
                width: 210mm;
                /* min-height: 297mm; */
                padding: 35mm 22mm 25mm 22mm;
                margin: 20px auto;
                height: auto;
            }

            header {
                padding-bottom: 14px;
                margin-bottom: 26px;
            }

            .brand-group h1 {
                font-size: 24px;
            }

            .sub-header {
                font-size: 8.5px;
                border-left: 1px solid var(--line-color);
                padding-left: 10px;
                max-width: none;
                text-align: right;
            }

            /* --- 2-COLUMN LAYOUT WITH DIVIDER --- */
            .grid-container {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 0;
                /* Clear grid gap to control spacing via padding */
            }

            .column {
                gap: 20px;
            }

            /* Separator Line Logic */
            .column:first-child {
                border-right: 1px solid var(--line-color);
                padding-right: 25px;
                /* Space before the line */
            }

            .column:last-child {
                padding-left: 25px;
                /* Space after the line */
            }

            section {
                margin-bottom: 22px;
            }

            h2 {
                font-size: 11.5px;
                padding-bottom: 4px;
                margin-bottom: 12px;
            }

            h2 span.sub {
                font-size: 9.5px;
            }

            .item {
                margin-bottom: 11px;
            }

            .name {
                font-size: 10.5px;
            }

            .price {
                font-size: 11px;
            }

            .desc {
                font-size: 9px;
                margin-top: 2px;
            }

            .badge {
                font-size: 8.5px;
                padding: 1px 4px;
                margin-right: 4px;
            }

            .legend {
                padding: 8px 12px;
                margin-bottom: 20px;
            }

            footer {
                position: absolute;
                bottom: 20mm;
                left: 22mm;
                right: 22mm;
                padding: 10px 0 0 0;
                flex-direction: row;
                justify-content: space-between;
                text-align: left;
                font-size: 8.5px;
            }
        }

        /* --- PRINT SPECIFICS --- */
        @media print {
            * {
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
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
                /* Force A4 Height */
                page-break-after: always;
                border: none;
                overflow: hidden;
            }

            @page {
                margin: 0;
                size: A4;
            }
        }
    </style>
</head>

<body>

    <div class="sheet">

        <header>
            <div class="brand-group">
                <h1>BISTRO NIPPON</h1>
                <div class="subtitle">SUNDAY BODY RESET</div>
            </div>
            <div class="sub-header">
                Gluten-Free &<br>Comfort Selections
            </div>
        </header>

        <div class="legend">
            <span class="legend-title">Guide Alimentaire</span>
            <div class="legend-items">
                <div class="legend-item">
                    <span class="badge gf">GF</span> = Gluten Free (Sans Gluten)
                </div>
                <div class="legend-item">
                    <span class="badge mg">MG</span> = Minimal Gluten (Traces < 20ppm) </div>
                        <div class="legend-item">
                            (No Mark) = Recette standard (Contient du gluten)
                        </div>
                </div>
            </div>

            <div class="grid-container">

                <div class="column">

                    <section>
                        <h2>Entrées & Tapas <span class="sub">Starters</span></h2>

                        <div class="item">
                            <div class="item-top">
                                <span class="name"><span class="badge mg">MG</span>Caprese Tofu</span>
                                <span class="price">12</span>
                            </div>
                            <div class="desc">Tofu mariné (24h) façon fromage. Tomate, roquette et nori.</div>
                        </div>

                        <div class="item">
                            <div class="item-top">
                                <span class="name">Mabo Nasu Tofu</span>
                                <span class="price">18</span>
                            </div>
                            <div class="desc">[Plat seul] Aubergines et tofu mijotés dans une sauce épicée.</div>
                        </div>

                        <div class="item">
                            <div class="item-top">
                                <span class="name"><span class="badge mg">MG</span>Canard Rosé Teriyaki</span>
                                <span class="price">19</span>
                            </div>
                            <div class="desc">Magret de Canard Grillé (60g), Sauce Teriyaki, Légumes.</div>
                        </div>

                        <div class="item">
                            <div class="item-top">
                                <span class="name"><span class="badge mg">MG</span>Harusame & Kikurage</span>
                                <span class="price">14</span>
                            </div>
                            <div class="desc">Salade fraîche de vermicelles et champignons noirs.</div>
                        </div>

                        <div class="item">
                            <div class="item-top">
                                <span class="name"><span class="badge mg">MG</span>Wakame Zesté</span>
                                <span class="price">12</span>
                            </div>
                            <div class="desc">Algues marinées, huile de sésame torréfiée et citron.</div>
                        </div>

                        <div class="item">
                            <div class="item-top">
                                <span class="name"><span class="badge gf">GF</span>Soupe Miso Wakamé</span>
                                <span class="price">9</span>
                            </div>
                            <div class="desc">Bouillon miso traditionnel aux algues.</div>
                        </div>
                    </section>

                    <section>
                        <h2>Riz <span class="sub">Donburi & Onigiri</span></h2>

                        <div class="item">
                            <div class="item-top">
                                <span class="name">Donburi Crevettes Fromage</span>
                                <span class="price">36</span>
                            </div>
                            <div class="desc">Crevettes mijotées à l'œuf, sauce tamari, fromage.</div>
                        </div>

                        <div class="item">
                            <div class="item-top">
                                <span class="name">Donburi Mabo Tofu</span>
                                <span class="price">31</span>
                            </div>
                            <div class="desc">Bol de riz, aubergines, tofu et viande hachée épicée.</div>
                        </div>

                        <div class="item">
                            <div class="item-top">
                                <span class="name"><span class="badge gf">GF</span>Onigiri Fromage</span>
                                <span class="price">6.5</span>
                            </div>
                            <div class="desc">Boule de riz garnie au Fromage, tamari.</div>
                        </div>

                        <div class="item">
                            <div class="item-top">
                                <span class="name"><span class="badge mg">MG</span>Onigiri Canard Miso</span>
                                <span class="price">8.5</span>
                            </div>
                            <div class="desc">Riz fourré au Canard et Aubergine confits au Miso.</div>
                        </div>
                    </section>

                </div>

                <div class="column">

                    <section>
                        <h2>Nouilles <span class="sub">Yakisoba & Ramen</span></h2>

                        <div class="item">
                            <div class="item-top">
                                <span class="name">Mabo Maze Ramen</span>
                                <span class="price">33</span>
                            </div>
                            <div class="desc">Nouilles généreusement nappées d'une sauce Mabo riche.</div>
                        </div>

                        <div class="item">
                            <div class="item-top">
                                <span class="name">Ramen Tantan Spicy</span>
                                <span class="price">28</span>
                            </div>
                            <div class="desc">Bouillon riche au sésame et miso pimenté, bœuf haché.</div>
                        </div>

                        <div class="item">
                            <div class="item-top">
                                <span class="name">Yakisoba Légumes</span>
                                <span class="price">28</span>
                            </div>
                            <div class="desc">Nouilles sautées aux légumes, sauce soja maison.</div>
                        </div>

                        <div class="item">
                            <div class="item-top">
                                <span class="name">Yakisoba Fruits de Mer</span>
                                <span class="price">39</span>
                            </div>
                            <div class="desc">Nouilles sautées avec un mix de fruits de mer.</div>
                        </div>
                    </section>

                    <section>
                        <h2>Curry Japonais <span class="sub">Rice & Ramen</span></h2>

                        <div class="item">
                            <div class="item-top">
                                <span class="name"><span class="badge gf">GF</span>Curry Rice Légumes</span>
                                <span class="price">30</span>
                            </div>
                            <div class="desc">Sauce curry GF, légumes. (Vegan)</div>
                        </div>

                        <div class="item">
                            <div class="item-top">
                                <span class="name"><span class="badge gf">GF</span>Curry Rice Poulet</span>
                                <span class="price">35</span>
                            </div>
                            <div class="desc">Sauce curry GF, riz blanc et poulet.</div>
                        </div>

                        <div class="item">
                            <div class="item-top">
                                <span class="name"><span class="badge gf">GF</span>Curry Rice Crevettes</span>
                                <span class="price">40</span>
                            </div>
                            <div class="desc">Sauce curry GF, riz blanc et crevettes.</div>
                        </div>

                        <div class="item">
                            <div class="item-top">
                                <span class="name">Curry Ramen Poulet</span>
                                <span class="price">35</span>
                            </div>
                            <div class="desc">Bouillon de curry, nouilles maison, poulet grillé.</div>
                        </div>

                        <div class="item">
                            <div class="item-top">
                                <span class="name">Curry Ramen Crevettes</span>
                                <span class="price">40</span>
                            </div>
                            <div class="desc">Bouillon de curry, nouilles maison, crevettes.</div>
                        </div>
                    </section>

                    <section>
                        <h2>Boissons <span class="sub">Healthy Drinks</span></h2>

                        <div class="item">
                            <div class="item-top">
                                <span class="name">Mystic Kombucha</span>
                                <span class="price">12</span>
                            </div>
                            <div class="desc">Hibiscus / Cannelle. Riche en probiotiques.</div>
                        </div>

                        <div class="item">
                            <div class="item-top">
                                <span class="name">Thé Vert Sencha</span>
                                <span class="price">9</span>
                            </div>
                            <div class="desc">Thé vert japonais chaud, riche en antioxydants.</div>
                        </div>
                    </section>

                </div>
            </div>

            <footer>
                <span>Authentic Japanese Cuisine</span>
                <span>Nos desserts changent selon l'inspiration.</span>
            </footer>

        </div>

</body>

</html>
