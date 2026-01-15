<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sunday Body Reset Menu | BISTRO NIPPON</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Playfair+Display:ital,wght@0,400;0,600;1,400&display=swap"
        rel="stylesheet">

    <style>
        @page {
            size: A4;
            margin: 0;
        }

        body {
            background: #fff !important;
            color: #111;
            /* Slightly darker for better contrast */
            font-family: 'Lato', sans-serif;
            -webkit-print-color-adjust: exact;
            line-height: 1.2;
        }

        :root {
            --brand-green: #2E7D32;
        }

        .menu-container {
            width: 210mm;
            height: 297mm;
            padding: 8mm 12mm;
            /* Adjusted padding for larger text */
            margin: 0 auto;
            background: white;
            box-sizing: border-box;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        /* --- Header --- */
        header {
            text-align: center;
            margin-bottom: 0.5rem;
            /* Tightened */
        }

        .brand-top {
            font-size: 0.8rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            font-weight: 700;
            margin-bottom: 0.2rem;
            display: block;
            color: #444;
        }

        h1.main-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            font-weight: 600;
            /* Bolder for readability */
            letter-spacing: 0.02em;
            text-transform: uppercase;
            margin: 0;
            line-height: 1;
        }

        .subtitle {
            font-family: 'Playfair Display', serif;
            font-style: italic;
            font-size: 0.9rem;
            color: #555;
            margin-top: 0.2rem;
        }

        /* --- Legend Area --- */
        .info-area {
            border-top: 2px solid #000;
            border-bottom: 1px solid #ccc;
            padding: 6px 0;
            margin-bottom: 1rem;
            text-align: center;
        }

        .legend-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1.5rem;
            font-size: 0.75rem;
            /* Larger */
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 4px;
        }

        .legend-item {
            display: flex;
            align-items: center;
        }

        .legend-img {
            height: 14px;
            width: auto;
            margin-right: 6px;
        }

        .legend-mg-mark,
        .mg-icon {
            display: inline-block;
            border: 1.5px solid var(--brand-green);
            /* Thicker border */
            color: var(--brand-green);
            font-size: 0.65rem;
            padding: 0px 4px;
            margin-right: 6px;
            font-weight: 700;
            line-height: 1.2;
            transform: translateY(-1px);
        }

        .disclaimer-text {
            font-size: 0.65rem;
            /* Larger */
            color: #444;
            font-weight: 400;
            max-width: 95%;
            margin: 0 auto;
            line-height: 1.2;
        }

        /* --- Grid Layout --- */
        .menu-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-content: flex-start;
            /* No flex-grow to avoid pushing footer down too much */
        }

        .col-left {
            width: 48%;
        }

        .col-right {
            width: 48%;
        }

        /* --- Categories --- */
        section {
            margin-bottom: 1.2rem;
        }

        h2.cat-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.1rem;
            /* Larger */
            font-weight: 700;
            border-bottom: 1px solid #999;
            /* Darker line */
            padding-bottom: 2px;
            margin-bottom: 0.6rem;
            color: #000;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }

        h2.cat-title span.sub {
            font-family: 'Lato', sans-serif;
            font-size: 0.65rem;
            font-weight: 400;
            color: #666;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        /* --- Items --- */
        .item {
            margin-bottom: 0.6rem;
            /* Tighter spacing for items */
            position: relative;
        }

        .item-row {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: 1px;
        }

        .item-main {
            display: flex;
            align-items: center;
            width: 88%;
        }

        .gf-icon {
            height: 1.1em;
            width: auto;
            margin-right: 6px;
            transform: translateY(-2px);
        }

        .name {
            font-weight: 700;
            font-size: 0.95rem;
            /* Increased Size for Readability */
            letter-spacing: 0.01em;
            line-height: 1.1;
        }

        .name.gf-green {
            color: var(--brand-green);
        }

        .price {
            font-weight: 600;
            font-size: 0.95rem;
            /* Increased Size */
            font-family: 'Playfair Display', serif;
            white-space: nowrap;
            color: #000;
        }

        .desc {
            font-size: 0.75rem;
            /* Increased Size */
            color: #555;
            font-weight: 400;
            line-height: 1.2;
            width: 100%;
            margin-top: 1px;
        }

        .vegan-tag {
            font-style: italic;
            color: var(--brand-green);
            font-size: 0.7rem;
            margin-left: 3px;
            font-weight: 700;
        }

        /* --- Boissons Bottom --- */
        .boissons-section {
            margin-top: 0.5rem;
            /* Reduced gap */
            padding-top: 0.5rem;
            border-top: 1px solid #ccc;
            margin-bottom: 0;
        }

        .boissons-grid {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .boissons-item {
            width: 48%;
            margin-bottom: 0;
        }

        @media print {
            body {
                margin: 0;
            }

            .menu-container {
                box-shadow: none;
                border: none;
                padding-top: 5mm;
            }
        }
    </style>
</head>

<body>

    <div class="menu-container">

        <header>
            <span class="brand-top">Bistro Nippon</span>
            <h1 class="main-title">Sunday Body Reset</h1>
            <p class="subtitle">Gluten-Free & Comfort Selections</p>
        </header>

        <div class="info-area">
            <div class="legend-bar">
                <div class="legend-item">
                    <img src="{{ asset('images/gf_logo.png') }}" alt="GF" class="legend-img">
                    <span style="color: var(--brand-green); font-weight:700;">Gluten Free</span>
                </div>
                <div class="legend-item">
                    <span class="legend-mg-mark">MG</span>
                    <span style="color: var(--brand-green); font-weight:700;">Minimal Gluten</span>
                </div>
                <div class="legend-item">
                    <span style="color:#666; font-style:italic;">(No Mark) Regular</span>
                </div>
            </div>
            <p class="disclaimer-text">
                <strong>MG (Minimal Gluten) :</strong> Plats préparés avec des ingrédients pauvres en gluten, mais
                pouvant contenir des traces (< 20ppm).<br>
                    Les articles sans icône sont des recettes standards contenant du gluten.
            </p>
        </div>

        <div class="menu-grid">

            <div class="col-left">

                <section>
                    <h2 class="cat-title">Entrées & Tapas <span class="sub">Starters</span></h2>

                    <div class="item">
                        <div class="item-row">
                            <div class="item-main">
                                <span class="mg-icon">MG</span>
                                <span class="name">Caprese Tofu</span>
                            </div>
                            <span class="price">12 DT</span>
                        </div>
                        <div class="desc">Tofu mariné (24h) façon fromage. Tomate, roquette et nori.</div>
                    </div>

                    <div class="item">
                        <div class="item-row">
                            <div class="item-main">
                                <span class="name">Mabo Nasu Tofu</span>
                            </div>
                            <span class="price">18 DT</span>
                        </div>
                        <div class="desc">[Plat seul] Aubergines et tofu mijotés dans une sauce épicée.</div>
                    </div>

                    <div class="item">
                        <div class="item-row">
                            <div class="item-main">
                                <span class="mg-icon">MG</span>
                                <span class="name">Canard Rosé Teriyaki</span>
                            </div>
                            <span class="price">19 DT</span>
                        </div>
                        <div class="desc">Magret de Canard Grillé (60g), Sauce Teriyaki, Légumes.</div>
                    </div>

                    <div class="item">
                        <div class="item-row">
                            <div class="item-main">
                                <span class="mg-icon">MG</span>
                                <span class="name">Harusame & Kikurage</span>
                            </div>
                            <span class="price">14 DT</span>
                        </div>
                        <div class="desc">Salade fraîche de vermicelles et champignons noirs.</div>
                    </div>

                    <div class="item">
                        <div class="item-row">
                            <div class="item-main">
                                <span class="mg-icon">MG</span>
                                <span class="name">Wakame Zesté</span>
                            </div>
                            <span class="price">12 DT</span>
                        </div>
                        <div class="desc">Algues marinées, huile de sésame torréfiée et citron.</div>
                    </div>

                    <div class="item">
                        <div class="item-row">
                            <div class="item-main">
                                <img src="{{ asset('images/gf_logo.png') }}" alt="GF" class="gf-icon">
                                <span class="name gf-green">Soupe Miso Wakamé</span>
                            </div>
                            <span class="price">9 DT</span>
                        </div>
                        <div class="desc">Bouillon miso traditionnel aux algues.</div>
                    </div>
                </section>

                <section>
                    <h2 class="cat-title">Curry Japonais <span class="sub">Rice & Ramen</span></h2>

                    <div class="item">
                        <div class="item-row">
                            <div class="item-main">
                                <img src="{{ asset('images/gf_logo.png') }}" alt="GF" class="gf-icon">
                                <span class="name gf-green">Curry Rice Légumes</span>
                            </div>
                            <span class="price">30 DT</span>
                        </div>
                        <div class="desc">Sauce curry GF, légumes. <span class="vegan-tag">(Vegan)</span></div>
                    </div>

                    <div class="item">
                        <div class="item-row">
                            <div class="item-main">
                                <img src="{{ asset('images/gf_logo.png') }}" alt="GF" class="gf-icon">
                                <span class="name gf-green">Curry Rice Poulet</span>
                            </div>
                            <span class="price">35 DT</span>
                        </div>
                        <div class="desc">Sauce curry GF, riz blanc et poulet.</div>
                    </div>

                    <div class="item">
                        <div class="item-row">
                            <div class="item-main">
                                <img src="{{ asset('images/gf_logo.png') }}" alt="GF" class="gf-icon">
                                <span class="name gf-green">Curry Rice Crevettes</span>
                            </div>
                            <span class="price">40 DT</span>
                        </div>
                        <div class="desc">Sauce curry GF, riz blanc et crevettes.</div>
                    </div>

                    <div class="item">
                        <div class="item-row">
                            <div class="item-main">
                                <span class="name">Curry Ramen Poulet</span>
                            </div>
                            <span class="price">35 DT</span>
                        </div>
                        <div class="desc">Bouillon de curry, nouilles maison, poulet grillé.</div>
                    </div>

                    <div class="item">
                        <div class="item-row">
                            <div class="item-main">
                                <span class="name">Curry Ramen Crevettes</span>
                            </div>
                            <span class="price">40 DT</span>
                        </div>
                        <div class="desc">Bouillon de curry, nouilles maison, crevettes.</div>
                    </div>
                </section>

            </div>

            <div class="col-right">

                <section>
                    <h2 class="cat-title">Nouilles <span class="sub">Yakisoba & Ramen</span></h2>

                    <div class="item">
                        <div class="item-row">
                            <div class="item-main">
                                <span class="name">Mabo Maze Ramen</span>
                            </div>
                            <span class="price">33 DT</span>
                        </div>
                        <div class="desc">Nouilles généreusement nappées d'une sauce Mabo riche.</div>
                    </div>

                    <div class="item">
                        <div class="item-row">
                            <div class="item-main">
                                <span class="name">Ramen Tantan Spicy</span>
                            </div>
                            <span class="price">28 DT</span>
                        </div>
                        <div class="desc">Bouillon riche au sésame et miso pimenté, bœuf haché.</div>
                    </div>

                    <div class="item">
                        <div class="item-row">
                            <div class="item-main">
                                <span class="name">Yakisoba Légumes</span>
                            </div>
                            <span class="price">28 DT</span>
                        </div>
                        <div class="desc">Nouilles sautées aux légumes, sauce soja maison.</div>
                    </div>

                    <div class="item">
                        <div class="item-row">
                            <div class="item-main">
                                <span class="name">Yakisoba Fruits de Mer</span>
                            </div>
                            <span class="price">39 DT</span>
                        </div>
                        <div class="desc">Nouilles sautées avec un mix de fruits de mer.</div>
                    </div>

                </section>

                <section>
                    <h2 class="cat-title">Riz <span class="sub">Donburi & Onigiri</span></h2>

                    <div class="item">
                        <div class="item-row">
                            <div class="item-main">
                                <img src="{{ asset('images/gf_logo.png') }}" alt="GF" class="gf-icon">
                                <span class="name gf-green">Donburi Crevettes Fromage</span>
                            </div>
                            <span class="price">36 DT</span>
                        </div>
                        <div class="desc">Crevettes mijotées à l'œuf, sauce tamari, fromage.</div>
                    </div>

                    <div class="item">
                        <div class="item-row">
                            <div class="item-main">
                                <span class="name">Donburi Mabo Tofu </span>
                            </div>
                            <span class="price">31 DT</span>
                        </div>
                        <div class="desc">Bol de riz, aubergines, tofu et viande hachée épicée.</div>
                    </div>

                    <div class="item">
                        <div class="item-row">
                            <div class="item-main">
                                <img src="{{ asset('images/gf_logo.png') }}" alt="GF" class="gf-icon">
                                <span class="name gf-green">Curry Rice Légumes</span>
                            </div>
                            <span class="price">30 DT</span>
                        </div>
                        <div class="desc">Recette 100% Végétale & Sans Gluten. <span class="vegan-tag">(Rec.)</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item-row">
                            <div class="item-main">
                                <img src="{{ asset('images/gf_logo.png') }}" alt="GF" class="gf-icon">
                                <span class="name gf-green">Onigiri Fromage</span>
                            </div>
                            <span class="price">6.5 DT</span>
                        </div>
                        <div class="desc">Boule de riz garnie au Fromage, tamari.</div>
                    </div>

                    <div class="item">
                        <div class="item-row">
                            <div class="item-main">
                                <span class="mg-icon">MG</span>
                                <span class="name">Onigiri Canard Miso</span>
                            </div>
                            <span class="price">8.5 DT</span>
                        </div>
                        <div class="desc">Riz fourré au Canard et Aubergine confits au Miso.</div>
                    </div>
                </section>

            </div>
        </div>

        <section class="boissons-section">
            <h2 class="cat-title">Boissons <span class="sub">Healthy Drinks</span></h2>

            <div class="boissons-grid">
                <div class="boissons-item item">
                    <div class="item-row">
                        <div class="item-main">
                            <span class="name">Mystic Kombucha</span>
                        </div>
                        <span class="price">12 DT</span>
                    </div>
                    <div class="desc">Hibiscus / Cannelle. Riche en probiotiques.</div>
                </div>

                <div class="boissons-item item">
                    <div class="item-row">
                        <div class="item-main">
                            <span class="name">Thé Vert Sencha</span>
                        </div>
                        <span class="price">9 DT</span>
                    </div>
                    <div class="desc">Thé vert japonais chaud, riche en antioxydants.</div>
                </div>
            </div>
        </section>

        <section class="desserts-section"
            style="margin-top: 0.5rem; border-top: 1px solid #eee; padding-top: 0.5rem;">
            <h2 class="cat-title" style="justify-content: flex-start; gap: 1rem;">
                Desserts <span class="sub">Sweet Finish</span>
            </h2>
            <div class="item">
                <div class="desc" style="font-size: 0.75rem; font-style: italic;">
                    Nos desserts changent selon l'inspiration. Veuillez demander la sélection du jour à notre équipe.
                </div>
            </div>
        </section>
    </div>

</body>

</html>
