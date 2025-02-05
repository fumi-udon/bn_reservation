<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bistro Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --deep-blue: #1a2c42;
            --accent-blue: #2c4a6d;
            --soft-gray: #8e9396;
            --light-gray: #f4f5f6;
            --warm-white: #fcfcfa;
        }

        body {
            background: var(--warm-white);
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
            /* 背景の重なりを制御 */
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
            background-image: url('{{ asset('images/bg1.png') }}');
            background-size: cover;
            /* または specific size: background-size: 500px auto; */
            background-position: center;
            opacity: 0.08;
            /* 透過度を控えめに */
            z-index: -1;
            mix-blend-mode: multiply;
            /* 背景との馴染みを改善 */
        }

        /* より繊細なグラデーションオーバーレイを追加 */
        .menu-container::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(165deg,
                    rgba(231, 230, 228, 0.3) 0%,
                    rgba(214, 213, 211, 0.1) 100%);
            z-index: -1;
            opacity: 0.7;
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
            bottom: -15px;
            width: 30px;
            height: 2px;
            background: var(--deep-blue);
        }

        .menu-title {
            font-size: 0.9rem;
            letter-spacing: 0.2em;
            color: var(--deep-blue);
            font-weight: 400;
            margin: 0;
        }

        .menu-subtitle {
            font-size: 0.7rem;
            color: var(--soft-gray);
            margin-top: 0.4rem;
            letter-spacing: 0.1em;
        }

        .drinks-section {
            height: 46%;
            margin-bottom: 1.4rem;
        }

        .image-wrapper {
            position: relative;
            overflow: hidden;
            margin-bottom: 1rem;
            background: var(--light-gray);
            transition: transform 0.3s ease;
        }

        .image-wrapper::before {
            content: '';
            display: block;
            padding-top: 100%;
        }

        .image-wrapper:hover {
            transform: translateY(-3px);
        }

        .image-wrapper::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg,
                    rgba(26, 44, 66, 0.1),
                    transparent);
        }

        .image-wrapper img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .menu-item {
            margin-bottom: 1.5rem;
        }

        .item-info {
            margin-top: 1rem;
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
            background: var(--accent-blue);
            opacity: 0.3;
        }

        .item-title {
            font-size: 0.9rem;
            letter-spacing: 0.15em;
            /* color: var(--soft-gray); */
            margin-bottom: 0.3rem;
        }

        .item-jp {
            font-size: 0.8rem;
            color: var(--accent-blue);
            margin-bottom: 0.5rem;
            letter-spacing: 0.05em;
        }

        .item-price {
            font-size: 0.75rem;
            color: var(--accent-blue);
            letter-spacing: 0.1em;
        }

        .special-section {
            background: #F5F5F3;
            /* Auraleeライクな上品なグレー */
            padding: 2rem;
            height: 40%;
            margin-top: auto;
            display: flex;
            position: relative;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .special-content {
            width: 55%;
            padding-left: 2.5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: #2C2C2C;
            /* 深みのあるダークグレー */
        }

        .special-title {
            font-size: 1.1rem;
            letter-spacing: 0.2em;
            margin-bottom: 1.5rem;
            position: relative;
            color: #4A4A4A;
            /* ミディアムグレー */
        }

        .description {

            font-size: 0.8rem;
        }

        .special-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -0.5rem;
            width: 20px;
            height: 1px;
            background: #4A4A4A;
            opacity: 0.5;
        }

        .item-title {
            color: #2C2C2C;
            /* 深みのあるダークグレー */
        }

        .item-jp {
            color: #757575;
            /* ソフトグレー */
        }

        .description {
            color: #757575;
            /* ソフトグレー */
        }

        .item-price {
            color: #4A4A4A;
            /* ミディアムグレー */
        }

        .special-image {
            width: 45%;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .special-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(1.05);
        }

        .special-content {
            width: 55%;
            padding-left: 2.5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
        }

        .special-title {
            font-size: 0.9rem;
            letter-spacing: 0.2em;
            margin-bottom: 1.5rem;
            position: relative;
        }

        .special-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -0.5rem;
            width: 20px;
            height: 1px;
            background: white;
            opacity: 0.5;
        }

        .season-tag {
            position: absolute;
            bottom: 15mm;
            right: 15mm;
            font-size: 0.65rem;
            color: var(--soft-gray);
            letter-spacing: 0.2em;
            transform: rotate(-90deg);
            transform-origin: right;
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
            background: var(--accent-blue);
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

            .menu-container::before {
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
                opacity: 0.05;
                /* 印刷時はより薄く */
            }

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
                <h1 class="menu-title">DRINKS & DESERT</h1>
                <div class="menu-subtitle">Early Winter2024</div>
            </div>

            <div class="drinks-section">
                <div class="row g-4">
                    <div class="col-4 menu-item">
                        <div class="image-wrapper">
                            <img src="{{ asset('images/lemonade.png') }}" alt="House Lemonade" loading="lazy">
                        </div>
                        <div class="item-info">
                            <div class="item-title">LEMONADE SODA</div>
                            <div class="item-jp">house-crafted with cane sugar</div>
                            <div class="item-price">9 dt</div>
                        </div>
                    </div>

                    <div class="col-4 menu-item">
                        <div class="image-wrapper">
                            <img src="{{ asset('images/lemonade_hot.png') }}" alt="lemonade_hot" loading="lazy">
                        </div>
                        <div class="item-info">
                            <div class="item-title">HOT LEMONADE</div>
                            <div class="item-jp">house-crafted with cane sugar & cinnamon</div>
                            <div class="item-price">9 dt</div>
                        </div>
                    </div>

                    <div class="col-4 menu-item">
                        <div class="image-wrapper">
                            <img src="{{ asset('images/pudding.png') }}" alt="Iced Tea" loading="lazy">
                        </div>
                        <div class="item-info">
                            <div class="item-title">PUDDING</div>
                            <div class="item-jp">Lightly sweet - <br>Sesame or Matcha</div>
                            <div class="item-price">8 dt / 9 dt</div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="special-section" style="height: 32%;">
                <div class="special-image">
                    <!-- 画像を差し替え -->
                    <img src="{{ asset('images/yksb_clv.png') }}" alt="Yakisoba clovisses" loading="eager">
                </div>
                <div class="special-content">
                    <h2 class="special-title">FUSION SPECIAL</h2>
                    <h3 class="item-title">Clam yakisoba</h3>
                    <div class="item-jp">ボンゴレ風焼きそば</div>
                    <p class="description">
                        Italian-Japanese fusion yakisoba<br>
                        with clam broth & olive oil
                    </p>
                    <div class="description">
                        Japanese noodles, clam broth,<br>
                        seasonal vegetables, cherry tomatoes
                    </div>
                    <div class="item-price">36 dt</div>
                </div>
            </div>

            <!-- 新しく追加する日替わりタパスセクション -->
            <div class="daily-tapas" style="margin-top: 0.5rem; padding: 0 2rem; height: 10%;">
                <div class="row g-2"> <!-- g-4からg-2に変更 -->
                    <div class="col-6">
                        <div class="item-info">
                            <div class="item-title">CROQUETTES SET</div>
                            <div class="item-jp">Clam yakisoba + 2 japanese croquettes</div>
                            <div class="item-price">42 dt</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-info">
                            <div class="item-title">SOUP SET</div>
                            <div class="item-jp">Clam yakisoba + miso soup</div>
                            <div class="item-price">40 dt</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
