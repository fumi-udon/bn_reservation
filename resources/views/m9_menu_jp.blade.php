<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ensô x bistronippon - Menu (Japanese Final)</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Noto+Sans+JP:wght@300;400;500;700&family=JetBrains+Mono:wght@400;500&display=swap"
        rel="stylesheet">

    <style>
        /* ■■■ ENSO x BISTRONIPPON DESIGN SYSTEM (JP Edition) ■■■ */
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
            font-family: 'Noto Sans JP', 'Inter', sans-serif;
            color: var(--text-main);
            font-size: 9.5px;
            line-height: 1.4;
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
            font-family: 'Inter', sans-serif;
            font-size: 22px;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            line-height: 1;
            color: var(--accent-blue);
        }

        .sub-header {
            font-family: 'Noto Sans JP', sans-serif;
            font-size: 8px;
            color: var(--text-sub);
            text-align: right;
            line-height: 1.5;
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
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.05em;
            border-bottom: 1px solid var(--line-color);
            padding-bottom: 3px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            color: var(--accent-blue);
        }

        h2 span.en {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
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
            font-size: 10.5px;
            letter-spacing: 0.02em;
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
            font-family: 'JetBrains Mono', 'Noto Sans JP', monospace;
            font-size: 7.5px;
            color: var(--text-main);
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
            font-weight: 700;
            color: var(--accent-blue);
            margin-bottom: 2px;
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
            font-family: 'Noto Sans JP', sans-serif;
            font-size: 8px;
            color: var(--text-sub);
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
                本格日本料理ダイニング<br>
                チュニジア・メンザ店
            </div>
        </header>

        <div class="grid-container">

            <div class="column">

                <section>
                    <h2>前菜・おつまみ <span class="en">Kémia & Tapas</span></h2>

                    <div class="item">
                        <div class="item-top"><span class="name">手作り餃子 (4個/8個)</span><span class="price">XX/XX</span>
                        </div>
                        <div class="desc">毎日手包みしています。鶏肉と野菜の自家製餡。</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">ローストビーフ皿</span><span class="price">XX</span></div>
                        <div class="desc">低温調理でしっとりと仕上げた牛のたたき風。</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">"黒フェタ"（豆腐のオイル漬け）</span><span class="price">XX</span>
                        </div>
                        <div class="desc">出汁とオリーブオイルに漬け込んだ、和製フェタチーズ風の豆腐。</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">日本のポテトコロッケ (2個)</span><span class="price">XX</span>
                        </div>
                        <div class="desc">ジャガイモと挽肉で作る、昔ながらのホクホクコロッケ。</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">チキンカツ皿 (おつまみ)</span><span class="price">XX</span>
                        </div>
                        <div class="desc">サクサクの衣と特製ソース。シェアに最適です。</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">ワカメサラダ</span><span class="price">XX</span></div>
                        <div class="desc">ごま油香るさっぱりとした海藻サラダ。</div>
                    </div>

                    <div class="gallery-row">
                        <div class="gallery-item">
                            <span class="figure-caption">Fig 01. 焼き餃子</span>
                            <div class="img-container">
                                <img src="{{ asset('images/mix_ramen.png') }}" alt="Gyoza" class="img-full">
                            </div>
                        </div>
                        <div class="gallery-item">
                            <span class="figure-caption">Fig 02. ローストビーフ</span>
                            <div class="img-container">
                                <img src="{{ asset('images/mix_ramen.png') }}" alt="Roast Beef" class="img-full">
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <h2>ラーメン <span class="en">Ramen Nippon</span></h2>
                    <div style="font-size: 8.5px; color: var(--text-sub); margin-bottom: 10px; font-weight: 300;">
                        シェフ特製 "黄金シルキースープ" (コラーゲン・旨味 / 化学調味料不使用)
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">ラーメン日本 - クラシック</span><span class="price">XX</span>
                        </div>
                        <div class="desc">特製醤油ダレと黄金スープのシグネチャーラーメン。</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">ラーメン日本 - 担々麺</span><span class="price">XX</span>
                        </div>
                        <div class="desc">濃厚な胡麻の香りと自家製ラー油。ピリ辛の肉味噌乗せ。</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">海老ラーメン</span><span class="price">XX</span></div>
                        <div class="desc">特製海老油の芳醇な香り。プリプリの漬け海老トッピング。</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">麻辣（マーラー）ラーメン</span><span class="price">XX</span>
                        </div>
                        <div class="desc">特製「麻辣」ソースを使用。痺れる辛さのプレミアムな一杯。</div>
                        <div class="mala-box">
                            <div class="mala-title">★ チュニジアでの新体験</div>
                            <div class="mala-text">
                                「麻辣（マーラー）」とは花椒の痺れと唐辛子の辛さが融合した、東京で大人気の味です。刺激的な美味しさをぜひ。
                            </div>
                        </div>
                    </div>

                    <div class="gallery-row">
                        <div class="gallery-item">
                            <span class="figure-caption">Fig 03. ラーメン日本</span>
                            <div class="img-container">
                                <img src="{{ asset('images/mix_ramen.png') }}" alt="Ramen" class="img-full">
                            </div>
                        </div>
                        <div class="gallery-item">
                            <span class="figure-caption">Fig 04. 麻辣ラーメン</span>
                            <div class="img-container">
                                <img src="{{ asset('images/mix_ramen.png') }}" alt="Mala" class="img-full">
                            </div>
                        </div>
                    </div>
                </section>

            </div>

            <div class="column">

                <section
                    style="background-color: var(--highlight-bg); padding: 8px; border-radius: 4px; margin: -8px -8px 20px -8px;">

                    <h2 style="border-color: #d1d5db;">東京まぜそば <span class="en">Tokyo Mix Ramen</span></h2>

                    <div style="font-size: 8.5px; color: var(--text-main); margin-bottom: 10px; font-weight: 500;">
                        日本の「混ぜて食べる」麺（濃厚旨味ダレ）。<br>
                        ミニスープ・追い飯付き <span style="color: var(--accent-emerald-text);">★ シェフのおすすめ</span>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">まぜそば - チキン</span><span class="price">XX</span>
                        </div>
                        <div class="desc">鶏チャーシューと特製ガーリックオイルの定番スタイル。</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">まぜそば - ベジ</span><span class="price">XX</span>
                        </div>
                        <div class="desc">季節の野菜とガーリックオイルのヘルシーな一杯。</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">まぜそば - 海老ボム</span><span class="price">XX</span>
                        </div>
                        <div class="desc">漬け海老と特製「海老粉」をトッピング。香りが爆発します。</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">まぜそば - "赤" 麻辣（マーラー）</span><span
                                class="price">XX</span></div>
                        <div class="desc">痺れる辛さの特製ソース。具材をお選びください：</div>
                        <div class="options">
                            <span class="opt-item">[ ] チキン</span>
                            <span class="opt-item">[ ] ベジ</span>
                        </div>
                    </div>

                    <div class="figure-box single-image">
                        <span class="figure-caption">Fig 05. 東京まぜそばセット</span>
                        <div class="img-container">
                            <img src="{{ asset('images/mix_ramen.png') }}" alt="Mix Ramen Set" class="img-full">
                        </div>
                    </div>
                </section>

                <section>
                    <h2>丼・カレー <span class="en">Rice Specialties</span></h2>

                    <div class="item">
                        <div class="item-top"><span class="name">黄金カツ丼</span><span class="price">XX</span></div>
                        <div class="desc">特製出汁と卵でとじた、王道のチキンカツ丼。</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">チーズカツ丼</span><span class="price">XX</span></div>
                        <div class="desc">とろけるモッツァレラチーズをトッピング。</div>
                    </div>

                    <div class="item" style="margin-top: 10px;">
                        <div class="item-top"><span class="name">カツカレー</span><span class="price">XX</span></div>
                        <div class="desc">じっくり煮込んだ東京カレーとサクサクのカツ。</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">海老カレー</span><span class="price">XX</span></div>
                        <div class="desc">カレーにプリプリの「漬け海老」をトッピング。</div>
                    </div>

                    <div class="item">
                        <div class="item-top"><span class="name">手作りおにぎり</span><span class="price">XX</span></div>
                        <div class="desc">ツナマヨなど（※数量限定）</div>
                    </div>

                    <div class="gallery-row">
                        <div class="gallery-item">
                            <span class="figure-caption">Fig 06. カレーライス</span>
                            <div class="img-container">
                                <img src="{{ asset('images/mix_ramen.png') }}" alt="Curry Rice" class="img-full">
                            </div>
                        </div>
                        <div class="gallery-item">
                            <span class="figure-caption">Fig 07. おにぎり</span>
                            <div class="img-container">
                                <img src="{{ asset('images/mix_ramen.png') }}" alt="Onigiri" class="img-full">
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <h2>甘味・飲料 <span class="en">Drinks & Sweets</span></h2>
                    <div class="options" style="justify-content: space-between; width: 100%;">
                        <span style="font-size: 8.5px; color: var(--text-main);">自家製コンブチャ (12)</span>
                        <span style="font-size: 8.5px; color: var(--text-main);">緑茶 / シトロナード (9)</span>
                        <span style="font-size: 8.5px; color: var(--text-main);">水 / ソーダ (4)</span>
                    </div>
                    <div class="desc" style="margin-top: 6px;">
                        <strong>本日のデザート:</strong> スタッフにお尋ねください。
                    </div>
                </section>

            </div>
        </div>

        <footer>
            <span>Authentic Japanese Cuisine</span>
            <span>表示価格は税込です (TND)</span>
        </footer>

    </div>

</body>

</html>
