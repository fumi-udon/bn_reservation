<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ensô x bistronippon - Menu (Final Hybrid)</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=JetBrains+Mono:wght@400;500&display=swap"
        rel="stylesheet">

    <style>
        /* ■■■ ENSO x BISTRONIPPON DESIGN SYSTEM ■■■ */
        :root {
            --bg-color: #ffffff;
            --text-main: #2f3e46;
            --text-sub: #7f8c8d;
            --accent-blue: #004e64;
            --accent-emerald-bg: #eaf6f3;
            --accent-emerald-text: #007f5f;
            --line-color: #b0bec5;
            --highlight-bg: #f4f6f7;
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
            font-size: 9.5px;
            line-height: 1.35;
            -webkit-font-smoothing: antialiased;
        }

        .sheet {
            background: var(--bg-color);
            width: 210mm;
            height: 297mm;
            margin: 20px auto;
            padding-top: 30mm;
            padding-bottom: 20mm;
            padding-left: 20mm;
            padding-right: 20mm;
            position: relative;
            box-shadow: 0 15px 40px rgba(0, 78, 100, 0.15);
            overflow: hidden;
        }

        /* --- HEADER --- */
        header {
            border-bottom: 2px solid var(--line-color);
            padding-bottom: 12px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }

        h1 {
            font-size: 22px;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            line-height: 1;
            color: var(--accent-blue);
        }

        .sub-header {
            font-family: 'JetBrains Mono', monospace;
            font-size: 8px;
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
            column-gap: 10mm;
            height: auto;
        }

        .column {
            display: flex;
            flex-direction: column;
        }

        /* --- SECTIONS --- */
        section {
            margin-bottom: 22px;
            position: relative;
        }

        h2 {
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            border-bottom: 1px solid var(--line-color);
            padding-bottom: 3px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            color: var(--accent-blue);
        }

        h2 span.jp {
            font-weight: 300;
            font-size: 9px;
            color: var(--text-sub);
            letter-spacing: 0.05em;
        }

        /* --- ITEMS --- */
        .item {
            margin-bottom: 9px;
            position: relative;
        }

        .item-top {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
        }

        .name {
            font-weight: 500;
            font-size: 10px;
            letter-spacing: 0.03em;
        }

        .price {
            font-family: 'JetBrains Mono', monospace;
            font-size: 10.5px;
            font-weight: 500;
            color: var(--accent-blue);
        }

        .desc {
            font-size: 8.5px;
            color: var(--text-sub);
            margin-top: 1px;
            font-weight: 300;
            padding-right: 5px;
            line-height: 1.3;
        }

        /* --- SUB-SELECT --- */
        .options {
            margin-top: 3px;
            padding-left: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
        }

        .opt-item {
            font-family: 'JetBrains Mono', monospace;
            font-size: 8.5px;
            font-weight: 500;
            color: var(--accent-emerald-text);
            background: var(--accent-emerald-bg);
            padding: 2px 5px;
            border-radius: 3px;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        /* --- IMAGES & FIGURES --- */
        .figure-box {
            margin-top: 12px;
            border-top: 1px solid #eee;
            padding-top: 6px;
        }

        .figure-caption {
            font-family: 'JetBrains Mono', monospace;
            font-size: 7.5px;
            color: var(--text-main);
            text-transform: uppercase;
            margin-bottom: 3px;
            display: block;
            letter-spacing: 0.05em;
        }

        .img-container {
            width: 100%;
            overflow: hidden;
            background-color: #f0f0f0;
            border-radius: 2px;
        }

        .img-full {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: grayscale(10%);
        }

        /* Gallery Row (2 Images) */
        .gallery-row {
            display: flex;
            gap: 8px;
            margin-top: 10px;
            border-top: 1px solid #eee;
            padding-top: 6px;
        }

        .gallery-item {
            flex: 1;
        }

        .gallery-item .img-container {
            height: 60px;
        }

        /* Single Large Image */
        .single-image .img-container {
            height: 90px;
        }

        /* --- MALA EXPLAINER BOX --- */
        .mala-box {
            margin-top: 5px;
            margin-bottom: 8px;
            padding: 6px 8px;
            border: 1px dashed var(--line-color);
            background-color: #fafafa;
            border-radius: 4px;
        }

        .mala-title {
            font-size: 8.5px;
            font-weight: 600;
            color: var(--accent-blue);
            margin-bottom: 2px;
            text-transform: uppercase;
        }

        .mala-text {
            font-size: 8px;
            color: var(--text-sub);
            line-height: 1.3;
        }

        /* --- SECTION HEADER IMAGE --- */
        .section-header-with-image {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 10px;
            border-bottom: 1px solid var(--line-color);
            padding-bottom: 4px;
        }

        .header-text {
            flex-grow: 1;
        }

        .featured-img {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 2px;
            margin-left: 10px;
            margin-bottom: 2px;
            filter: grayscale(20%);
            border: 1px solid var(--line-color);
        }

        /* --- FOOTER --- */
        footer {
            position: absolute;
            bottom: 15mm;
            left: 20mm;
            right: 20mm;
            border-top: 1px solid var(--line-color);
            padding-top: 8px;
            display: flex;
            justify-content: space-between;
            font-family: 'JetBrains Mono', monospace;
            font-size: 8px;
            color: var(--text-sub);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

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
            <h1>Ensô x bistronippon</h1>
            <div class="sub-header">
                Authentic Japanese Dining<br>
                Menzah, Tunis
            </div>
        </header>

        <div class="grid-container">

            <div class="column">

                <section>
                    <h2>Kémia & Tapas <span class="jp">前菜・おつまみ</span></h2>

                    <div class="item">
                        <div class="item-top"><span class="name">Handmade Gyoza (4pcs/8pcs)</span><span
                                class="price">XX/XX</span></div>
                        <div class="desc">Classic Japanese ravioli (Chicken & Veg).</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Roast Beef Plate</span><span class="price">XX</span>
                        </div>
                        <div class="desc">Slices of tender roast beef (Tataki style).</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">"Kuro-Feta" Tofu</span><span class="price">XX</span>
                        </div>
                        <div class="desc">Japanese Tofu marinated in Dashi & Olive Oil.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Japanese Croquette (2pcs)</span><span
                                class="price">XX</span></div>
                        <div class="desc">Classic mashed potato & meat croquettes.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Chicken Katsu Plate</span><span
                                class="price">XX</span></div>
                        <div class="desc">Crispy Chicken Cutlet with Tonkatsu sauce.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Wakame Salad</span><span class="price">XX</span>
                        </div>
                        <div class="desc">Refreshing seaweed salad with sesame.</div>
                    </div>

                    <div class="gallery-row">
                        <div class="gallery-item">
                            <span class="figure-caption">Fig 01. Gyoza</span>
                            <div class="img-container">
                                <img src="{{ asset('images/mix_ramen.png') }}" alt="Gyoza" class="img-full">
                            </div>
                        </div>
                        <div class="gallery-item">
                            <span class="figure-caption">Fig 02. Roast Beef</span>
                            <div class="img-container">
                                <img src="{{ asset('images/mix_ramen.png') }}" alt="Roast Beef" class="img-full">
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <h2>Ramen Nippon <span class="jp">ラーメン</span></h2>
                    <div style="font-size: 8.5px; color: var(--text-sub); margin-bottom: 10px; font-style: italic;">
                        Chef's Golden Silky Soup (Rich Umami & Collagen). No MSG.
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Ramen Nippon - Classic</span><span
                                class="price">XX</span></div>
                        <div class="desc">Signature creamy broth with special Soy Sauce.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Ramen Nippon - Tantan</span><span
                                class="price">XX</span></div>
                        <div class="desc">Spicy sesame broth, homemade chili oil, minced meat.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Ebi Ramen (Shrimp)</span><span
                                class="price">XX</span></div>
                        <div class="desc">Golden broth topped with Marinated Shrimp & Aroma Oil.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Luxury Beef Ramen</span><span
                                class="price">XX</span></div>
                        <div class="desc">Golden broth topped with slices of Roast Beef.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Mala Ramen</span><span class="price">XX</span></div>
                        <div class="desc">Infused with Exclusive "Mala" Sauce.</div>
                        <div class="mala-box">
                            <div class="mala-title">★ New Discovery in Tunisia</div>
                            <div class="mala-text">
                                "Mala" creates a <strong>numbing & spicy</strong> electric taste. Experience the flavor
                                Tokyo loves.
                            </div>
                        </div>
                    </div>

                    <div class="gallery-row">
                        <div class="gallery-item">
                            <span class="figure-caption">Fig 03. Ramen Nippon</span>
                            <div class="img-container">
                                <img src="{{ asset('images/mix_ramen.png') }}" alt="Ramen" class="img-full">
                            </div>
                        </div>
                        <div class="gallery-item">
                            <span class="figure-caption">Fig 04. Ebi Ramen</span>
                            <div class="img-container">
                                <img src="{{ asset('images/mix_ramen.png') }}" alt="Ebi Ramen" class="img-full">
                            </div>
                        </div>
                    </div>
                </section>

            </div>

            <div class="column">

                <section
                    style="background-color: var(--highlight-bg); padding: 8px; border-radius: 4px; margin: -8px -8px 20px -8px;">

                    <h2 style="border-color: #d1d5db;">Tokyo Mix Ramen <span class="jp">まぜそば</span></h2>

                    <div style="font-size: 8.5px; color: var(--text-main); margin-bottom: 10px; font-weight: 500;">
                        (Mazesoba) Japanese Mixing Noodles with Rich Sauce.<br>
                        Includes Mini Soup & Dive Rice. <span style="color: var(--accent-emerald-text);">★ Chef's
                            Recommendation</span>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Mix Ramen - Chicken</span><span
                                class="price">XX</span></div>
                        <div class="desc">Standard style with Garlic Oil & Chicken Char Siu.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Mix Ramen - Veggie</span><span
                                class="price">XX</span></div>
                        <div class="desc">Garlic Oil sauce with assorted seasonal vegetables.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Mix Ramen - Ebi Bomb</span><span
                                class="price">XX</span></div>
                        <div class="desc">Topped with Marinated Shrimp & Aromatic Shrimp Powder.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Mix Ramen - Roast Beef</span><span
                                class="price">XX</span></div>
                        <div class="desc">Luxury style with Roast Beef & Egg Yolk.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Mix Ramen - "Red Mala"</span><span
                                class="price">XX</span></div>
                        <div class="desc">Exclusive Spicy & Numbing Sauce. Select Topping:</div>
                        <div class="options">
                            <span class="opt-item">[ ] Chicken</span>
                            <span class="opt-item">[ ] Veggie</span>
                        </div>
                    </div>

                    <div class="figure-box single-image">
                        <span class="figure-caption">Fig 05. Tokyo Mazesoba (Beef)</span>
                        <div class="img-container">
                            <img src="{{ asset('images/mix_ramen.png') }}" alt="Mazesoba Set" class="img-full">
                        </div>
                    </div>
                </section>

                <section>
                    <h2>Rice Specialties <span class="jp">丼・カレー</span></h2>

                    <div class="item">
                        <div class="item-top"><span class="name">Golden Katsu-Don</span><span
                                class="price">XX</span></div>
                        <div class="desc">Simmered Chicken Cutlet with Egg & Dashi.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Golden Katsu-Don w/ Cheese</span><span
                                class="price">XX</span></div>
                        <div class="desc">Golden Katsu-Don topped with melted Mozzarella.</div>
                    </div>

                    <div class="item" style="margin-top: 10px;">
                        <div class="item-top"><span class="name">Curry - Crispy Katsu</span><span
                                class="price">XX</span></div>
                        <div class="desc">Tokyo Curry with Chicken Cutlet.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Curry - Tokyo Ebi</span><span
                                class="price">XX</span></div>
                        <div class="desc">Tokyo Curry with Marinated Shrimp.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Curry - Roast Beef</span><span
                                class="price">XX</span></div>
                        <div class="desc">Tokyo Curry with tender Roast Beef.</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">Daily Onigiri</span><span class="price">XX</span>
                        </div>
                        <div class="desc">Handmade Rice Balls (Limited Qty).</div>
                    </div>

                    <div class="gallery-row">
                        <div class="gallery-item">
                            <span class="figure-caption">Fig 06. Curry Rice</span>
                            <div class="img-container">
                                <img src="{{ asset('images/mix_ramen.png') }}" alt="Curry Rice" class="img-full">
                            </div>
                        </div>
                        <div class="gallery-item">
                            <span class="figure-caption">Fig 07. Onigiri</span>
                            <div class="img-container">
                                <img src="{{ asset('images/mix_ramen.png') }}" alt="Onigiri" class="img-full">
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <h2>Drinks & Sweets <span class="jp">甘味・飲料</span></h2>
                    <div class="options" style="justify-content: space-between; width: 100%;">
                        <span style="font-size: 8.5px; color: var(--text-main);">Mystic Kombucha (12)</span>
                        <span style="font-size: 8.5px; color: var(--text-main);">Green Tea / Citronnade (9)</span>
                        <span style="font-size: 8.5px; color: var(--text-main);">Water / Soda (4)</span>
                    </div>
                    <div class="desc" style="margin-top: 6px;">
                        <strong>Daily Dessert:</strong> Please ask our team.
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
