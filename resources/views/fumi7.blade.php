<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dessert Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --sand-beige: #E7E6E4;
            --warm-gray: #A19E9A;
            --deep-charcoal: #2C2C2C;
            --soft-white: #F8F8F6;
            --light-sand: #F5F5F3;
        }

        body {
            background: var(--soft-white);
            font-family: "Helvetica Neue", Arial, sans-serif;
            padding: 2rem;
            margin: 0;
        }

        .menu-container {
            width: 176mm;
            height: 250mm;
            background: white;
            padding: 15mm;
            margin: 0 auto;
            position: relative;
            isolation: isolate;
            overflow: hidden;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.03);
        }

        .menu-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("{{ asset('images/bg1.png') }}");
            /* a_tofu.pngと同じasset()関数を使用 */
            background-size: cover;
            opacity: 0.05;
            z-index: -1;
            mix-blend-mode: soft-light;
        }

        .menu-content {
            position: relative;
            z-index: 1;
            height: 100%;
        }

        .menu-header {
            margin-bottom: 2.5rem;
            position: relative;
        }

        .menu-header::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -12px;
            width: 25px;
            height: 1px;
            background: var(--deep-charcoal);
        }

        .menu-title {
            font-size: 0.85rem;
            letter-spacing: 0.25em;
            color: var(--deep-charcoal);
            font-weight: 400;
            margin: 0;
        }

        .menu-subtitle {
            font-size: 0.65rem;
            color: var(--warm-gray);
            margin-top: 0.4rem;
            letter-spacing: 0.15em;
        }

        /* 新デザート（杏仁豆腐）セクション */
        .featured-dessert {
            height: 55%;
            margin-bottom: 2rem;
            background: var(--light-sand);
            padding: 2.5rem;
            display: flex;
            gap: 2.5rem;
            position: relative;
        }

        .featured-image {
            width: 45%;
            /* 50%から45%に縮小し、余裕を持たせる */
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-container {
            width: 100%;
            padding-top: 100%;
            /* アスペクト比を1:1に固定 */
            position: relative;
            overflow: hidden;
        }

        .featured-image img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            object-fit: contain;
            /* coverからcontainに変更し、画像比率を維持 */
            padding: 1rem;
            /* 画像の周りに余白を追加 */
        }

        .featured-content {
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .new-tag {
            position: absolute;
            top: 2rem;
            left: 2rem;
            font-size: 0.65rem;
            letter-spacing: 0.2em;
            color: var(--deep-charcoal);
            background: white;
            padding: 0.4rem 1rem;
            opacity: 0.9;
        }

        /* プリンセクション */
        .pudding-section {
            height: 32%;
            margin-top: 2rem;
            display: flex;
            gap: 2rem;
            padding: 0 1rem;
        }

        .pudding-item {
            flex: 1;
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .pudding-image {
            width: 100px;
            height: 100px;
            position: relative;
            overflow: hidden;
            background: var(--light-sand);
        }

        .pudding-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .item-info {
            flex: 1;
            position: relative;
            padding-left: 1rem;
        }

        .item-info::before {
            content: '';
            position: absolute;
            left: 0;
            top: 5px;
            width: 1px;
            height: calc(100% - 10px);
            background: var(--warm-gray);
            opacity: 0.2;
        }

        .item-title {
            font-size: 0.8rem;
            letter-spacing: 0.15em;
            color: var(--deep-charcoal);
            margin-bottom: 0.3rem;
        }

        .item-jp {
            font-size: 0.7rem;
            color: var(--warm-gray);
            margin-bottom: 0.5rem;
            letter-spacing: 0.05em;
            line-height: 1.4;
        }

        .item-price {
            font-size: 0.7rem;
            color: var(--deep-charcoal);
            letter-spacing: 0.1em;
        }

        .description {
            font-size: 0.7rem;
            color: var(--warm-gray);
            line-height: 1.6;
            margin: 1rem 0;
        }

        .season-tag {
            position: absolute;
            bottom: 15mm;
            right: 15mm;
            font-size: 0.6rem;
            color: var(--warm-gray);
            letter-spacing: 0.2em;
            transform: rotate(-90deg);
            transform-origin: right;
            opacity: 0.7;
        }

        @media print {
            @page {
                size: B5 portrait;
                margin: 0;
            }

            body {
                width: 176mm;
                height: 250mm;
                margin: 0;
                padding: 0;
            }

            .menu-container {
                box-shadow: none;
                width: 176mm !important;
                height: 250mm !important;
                margin: 0 !important;
                padding: 15mm !important;
            }
        }

        .print-button {
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--deep-blue);
            color: white;
            border: none;
            padding: 8px 16px;
            font-size: 0.7rem;
            letter-spacing: 0.1em;
            cursor: pointer;
            z-index: 1000;
            transition: background 0.3s ease;
        }

        .print-button:hover {
            background: var(--deep-blue);
        }

        @media print {
            .no-print {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <button class="print-button no-print" onclick="window.print()">Print Menu</button>
    <div class="menu-container">
        <div class="menu-content">
            <div class="menu-header">
                <h1 class="menu-title">AFTER MEAL</h1>
                <div class="menu-subtitle">Early Winter 2024</div>
            </div>

            <!-- 新デザート：杏仁豆腐 -->
            <div class="featured-dessert">
                <div class="new-tag">NEW ARRIVAL</div>
                <div class="featured-image">
                    <div class="image-container">
                        <img src="{{ asset('images/a_tofu.png') }}" alt="Annin Tofu" loading="eager">
                    </div>
                </div>
                <div class="featured-content">
                    <h2 class="item-title">ANNIN TOFU</h2>
                    <div class="item-jp">杏仁豆腐</div>
                    <p class="description">
                        Silky smooth almond jelly<br>
                        made with premium almond extract.<br>
                    </p>
                    <div class="item-price">9 dt</div>
                </div>
            </div>

            <!-- プリンセクション -->
            <div class="pudding-section">
                <div class="pudding-item">
                    <div class="pudding-image">
                        <img src="{{ asset('images/pudding.png') }}" alt="Matcha Pudding" loading="lazy">
                    </div>
                    <div class="item-info">
                        <div class="item-title">PUDDING</div>
                        <div class="item-jp">Lightly sweetened</div>
                        <div class="item-price">Matcha 9 dt</div>
                        <div class="item-price">sesame 8 dt</div>
                    </div>
                </div>
                <div class="pudding-item">
                    <div class="pudding-image">
                        <img src="{{ asset('images/lemonade_hot.png') }}" alt="Sesame Pudding" loading="lazy">
                    </div>
                    <div class="item-info">
                        <div class="item-title">HOT CITRONNADE</div>
                        <div class="item-jp">House-crafted with cinnamon & cane sugar</div>
                        <div class="item-price">9 dt</div>
                    </div>
                </div>
            </div>

            <div class="season-tag">WINTER 2024</div>
        </div>
    </div>
</body>

</html>
