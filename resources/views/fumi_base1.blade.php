<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bistro Nippon - Blue Architect Edition (Derja & Flags)</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=JetBrains+Mono:wght@400;500&display=swap"
        rel="stylesheet">

    <style>
        /* ■■■ BLUE ARCHITECT / FRAMING EDITION (DERJA & FLAGS) ■■■ */
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

            /* 上下の余白 */
            padding-top: 38mm;
            padding-bottom: 28mm;
            padding-left: 22mm;
            padding-right: 22mm;

            position: relative;
            box-shadow: 0 15px 40px rgba(0, 78, 100, 0.15);
            overflow: hidden;
        }

        /* --- HEADER --- */
        header {
            border-bottom: 2px solid var(--line-color);
            padding-bottom: 14px;
            margin-bottom: 26px;
            display: flex;
            justify-content: space-between;
            /* align-items: flex-end; を削除し、個別に整列させる */
        }

        h1 {
            font-size: 24px;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            line-height: 1;
            color: var(--accent-blue);
            align-self: flex-end;
            /* タイトルは下揃え */
        }

        /* ヘッダー右側のブロック（国旗＋サブヘッダー） */
        .right-header-block {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        /* 国旗コンテナ */
        .flags-container {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 8px;
        }

        .flag-fr {
            width: 28px;
            /* フランス国旗は少し大きく */
            height: auto;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .flag-tn {
            width: 18px;
            /* チュニジア国旗は小さく */
            height: auto;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .sub-header {
            font-family: 'JetBrains Mono', monospace;
            font-size: 8.5px;
            color: var(--text-sub);
            text-transform: uppercase;
            letter-spacing: 0.1em;
            text-align: right;
            line-height: 1.4;
            /* 国旗の下に来るため、縦線は削除してスッキリさせる */
            /* border-left: 1px solid var(--line-color); */
            /* padding-left: 10px; */
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

        /* 方言タグのスタイル（旧 span.jp） */
        h2 span.derja-tag {
            font-weight: 400;
            /* 少し存在感を出すため300から400へ */
            font-size: 9px;
            color: var(--text-sub);
            letter-spacing: 0.05em;
            text-transform: capitalize;
            /* 頭文字を大文字に */
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

        /* --- OPTIONS (Right Aligned) --- */
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

        @media print {
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
            <h1>Bistro Nippon</h1>
            <div class="right-header-block">
                <div class="flags-container">

                    <img src="{{ asset('images/tunisie.png') }}" alt="TN" class="flag-fr">
                    <img src="{{ asset('images/france.png') }}" alt="FR" class="flag-fr">
                </div>
                <div class="sub-header">
                    Tunisia / La Marsa<br>
                    Cuisine Japonaise "Bnina"
                </div>
            </div>
        </header>

        <div class="grid-container">

            <div class="column">

                <section>
                    <h2>Kémia & Tapas <span class="derja-tag">Taftif</span></h2>

                    <div class="item">
                        <div class="item-top"><span class="name">Canard Rosé</span><span class="price">19</span>
                        </div>
                        <div class="desc">Magret de Canard Grillé 60g, Sauce Teriyaki maison.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Djej Poulet Paiko</span><span
                                class="price">19</span>
                        </div>
                        <div class="desc">Poulet frit croustillant, mariné sauce japonaise.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Soupe Miso Fruits de Mer</span><span
                                class="price">17</span></div>
                        <div class="desc">Bouillon traditionnel, fruits de mer, wakamé.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Soupe Miso Wakamé</span><span class="price">8</span>
                        </div>
                        <div class="desc">Bouillon miso classique aux algues.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Tofu Tokyo Caprese</span><span
                                class="price">12</span>
                        </div>
                        <div class="desc">Protéine de soja saine, marinade maison soja et huile d'olive. Servi avec
                            pain.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Harusame & Champignons noirs</span>
                            <span class="price">14</span>
                        </div>
                        <div class="desc">Salade de vermicelles soja et Kikurage (champignons noirs).</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Wakamé Zestée</span><span class="price">12</span>
                        </div>
                        <div class="desc">Algues verts, huile de sésame, citron frais.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Croquettes (2pcs)</span><span class="price">8</span>
                        </div>
                        <div class="desc">Pommes de terre écrasées, panure panko, sauce.</div>
                    </div>
                </section>

                <section>
                    <h2>Donburi <span class="derja-tag">Bol de Riz</span></h2>

                    <div class="item">
                        <div class="item-top"><span class="name">Donburi au Bœuf</span><span class="price">35</span>
                        </div>
                        <div class="desc">Grand bol de riz, bœuf émincé grillé, oignons.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Katsu Don (Poulet)</span><span
                                class="price">28</span></div>
                        <div class="desc">Poulet pané mijoté avec œuf sur riz.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Onigiri (1pc)</span></div>
                        <div class="options">
                            <span class="opt-item">Fromage 6</span>
                            <span class="opt-item">Poulet 7</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Riz Blanc</span><span class="price">4</span></div>
                    </div>
                </section>

                <section>
                    <h2>Menu Sghar (enfant) <span class="derja-tag">Sghar</span></h2>
                    <div class="item">
                        <div class="item-top"><span class="name">Set Riz Sauté / Nouilles</span><span
                                class="price">15</span></div>
                        <div class="desc">Portion adaptée + Poulet frit (Karaage).</div>
                    </div>
                </section>

                <section>
                    <h2>Desserts <span class="derja-tag">Hlou</span></h2>
                    <div class="item">
                        <div class="desc" style="font-style: normal; color: var(--text-main);">
                            Nos desserts changent selon l'inspiration.<br>
                            Veuillez demander la sélection du jour.
                        </div>
                    </div>
                </section>
            </div>

            <div class="column">

                <section>
                    <h2>Ramen <span class="derja-tag">Nouilles Soupe</span></h2>

                    <div class="item">
                        <div class="item-top"><span class="name">Ramen Tantan Épicé</span></div>
                        <div class="desc">Bouillon sésame riche, huile pimentée (Attention, c'est Har !).</div>
                        <div class="options">
                            <span class="opt-item">Wakamé 31.5</span>
                            <span class="opt-item">Poulet 33</span>
                            <span class="opt-item">Bœuf 43</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Ramen Tokyo Soja</span></div>
                        <div class="desc">Bouillon clair sauce soja, saveur authentique.</div>
                        <div class="options">
                            <span class="opt-item">Poulet/Lég 29</span>
                            <span class="opt-item">Poulet Frit 33</span>
                            <span class="opt-item">Bœuf 43</span>
                        </div>
                    </div>
                </section>

                <section>
                    <h2>Udon <span class="derja-tag">Nouilles Épaisses</span></h2>

                    <div class="item">
                        <div class="item-top"><span class="name">Udon Forestier</span></div>
                        <div class="desc">Crème d'épinards, champignons, nouilles épaisses.</div>
                        <div class="options">
                            <span class="opt-item">Nori 29</span>
                            <span class="opt-item">Fruits de Mer 39</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Udon Gingembre</span></div>
                        <div class="desc">Bouillon chaud au gingembre, poireaux.</div>
                        <div class="options">
                            <span class="opt-item">Algues 30</span>
                            <span class="opt-item">Fruits de Mer 39</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Udon Poulet Katsu</span><span
                                class="price">28</span></div>
                        <div class="desc">Udon avec poulet pané croustillant.</div>
                    </div>
                </section>

                <section>
                    <h2>Yakisoba <span class="derja-tag">Sautées</span></h2>

                    <div class="item">
                        <div class="item-top"><span class="name">Yakisoba Nippon</span></div>
                        <div class="desc">Nouilles sautées sauce spéciale, légumes.</div>
                        <div class="options">
                            <span class="opt-item">Légumes 28</span>
                            <span class="opt-item">Paiko 33</span>
                            <span class="opt-item">Fruits de Mer 39</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Yakisoba Bœuf BBQ</span><span
                                class="price">43</span></div>
                        <div class="desc">Nouilles fines sautées, accompagnées de bœuf (150g) en tranches fines.
                        </div>
                    </div>
                </section>

                <section>
                    <h2>Boissons <span class="derja-tag">Mchroubèt</span></h2>

                    <div class="item">
                        <div class="item-top"><span class="name">Mystic Kombucha</span><span
                                class="price">12</span></div>
                        <div class="desc">Hibiscus / Cannelle. Probiotiques naturels.</div>
                    </div>
                    <div class="item">
                        <div class="item-top"><span class="name">Thé Vert</span><span class="price">9</span></div>
                        <div class="desc">Thé japonais chaud, riche en antioxydants.</div>
                    </div>
                    <div class="item">
                        <div class="item-top"><span class="name">Citronnade Chaude</span><span
                                class="price">9</span></div>
                        <div class="desc">Saveur naturellement sucrée du sucre de canne sans ajout de sucre raffiné.
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-top"><span class="name">Eau Minérale</span><span class="price">4</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-top"><span class="name">Soda</span><span class="price">4</span></div>
                    </div>
                </section>

            </div>
        </div>

        <footer>
            <span>Makrouna Japonia Diari</span>
            <span>Sahha !</span>
        </footer>

    </div>

</body>

</html>
