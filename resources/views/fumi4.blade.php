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
            isolation: isolate; /* 背景の重なりを制御 */
            overflow: hidden;
            box-shadow: 0 0 30px rgba(0,0,0,0.03);
        }


        .menu-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('{{ asset("images/bg1.png") }}');
    background-size: cover;  /* または specific size: background-size: 500px auto; */
    background-position: center;
    opacity: 0.08;  /* 透過度を控えめに */
    z-index: -1;
    mix-blend-mode: multiply;  /* 背景との馴染みを改善 */
}

/* より繊細なグラデーションオーバーレイを追加 */
.menu-container::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        165deg,
        rgba(231, 230, 228, 0.3) 0%,
        rgba(214, 213, 211, 0.1) 100%
    );
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
            height: 45%;
            margin-bottom: 2rem;
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
            background: linear-gradient(
                45deg,
                rgba(26, 44, 66, 0.1),
                transparent
            );
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
            font-size: 0.65rem;
            color: var(--soft-gray);
            margin-bottom: 0.5rem;
            letter-spacing: 0.05em;
        }

        .item-price {
            font-size: 0.75rem;
            color: var(--accent-blue);
            letter-spacing: 0.1em;
        }

        .special-section {
            background: #F5F5F3;  /* Auraleeライクな上品なグレー */
            padding: 2rem;
            height: 40%;
            margin: auto;
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
    color: #2C2C2C;  /* 深みのあるダークグレー */
}

.special-title {
    font-size: 1.1rem;
    letter-spacing: 0.2em;
    margin-bottom: 1.5rem;
    position: relative;
    color: #4A4A4A;  /* ミディアムグレー */
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
    color: #2C2C2C;  /* 深みのあるダークグレー */
}

.item-jp {
    color: #757575;  /* ソフトグレー */
}

.description {
    color: #757575;  /* ソフトグレー */
}

.item-price {
    color: #4A4A4A;  /* ミディアムグレー */
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
                opacity: 0.05;  /* 印刷時はより薄く */
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

            <!-- スペシャルメニューセクション -->
            <div class="special-section">
                <div class="special-image">
                    <img
                        src="{{ asset('images/sardine.png') }}"
                        alt="Yakisoba clovisses"
                        loading="eager"
                    >
                </div>
                <div class="special-content">
                <div class="special-title">TAPAS SPECIAL</div>
                <div class="item-title">Nikkei Marinated Sardines</div>
                <div class="item-jp">和風イワシのマリネ</div>
                <p class="description mt-3 mb-4">
                    Fresh sardines marinated in olive oil<br>
                    with house-made Japanese sauce. (4-5 pieces)
                </p>
                <div class="item-price">12 dt</div>
                </div>
            </div>
            <!-- スペシャルメニューセクション  END-->

<div name="spacer" style="padding:70px;"></div>

            <!-- スペシャルメニューセクション -->
            <div class="special-section">
                <div class="special-image">
                    <img
                        src="{{ asset('images/sardine.png') }}"
                        alt="Yakisoba clovisses"
                        loading="eager"
                    >
                </div>
                <div class="special-content">
                <div class="special-title">TAPAS SPECIAL</div>
                <div class="item-title">Nikkei Marinated Sardines</div>
                <div class="item-jp">和風イワシのマリネ</div>
                <p class="description mt-3 mb-4">
                    Fresh sardines marinated in olive oil<br>
                    with house-made Japanese sauce. (4-5 pieces)
                </p>
                <div class="item-price">12 dt</div>
                </div>
            </div>
            <!-- スペシャルメニューセクション  END-->

        </div>
    </div>
</body>
</html>
