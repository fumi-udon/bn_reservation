<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dessert Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --sand-beige: #F6F5F3;
            --warm-gray: #9A958F;
            --deep-charcoal: #2C2C2C;
            --soft-white: #FDFCFA;
            --accent-gray: #E8E7E4;
        }

        @font-face {
            font-family: 'Gothic MB101';
            src: local('Gothic MB101');
        }

        body {
            background: var(--soft-white);
            font-family: "Gothic MB101", "Helvetica Neue", Arial, sans-serif;
            padding: 2rem;
            margin: 0;
            color: var(--deep-charcoal);
        }

        .menu-container {
            width: 182mm;
            height: 128mm;
            background: white;
            padding: 12mm 14mm;
            margin: 0 auto;
            position: relative;
            isolation: isolate;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.04);
        }

        .featured-dessert {
            height: 88%;
            margin: 1rem 0;
            background: var(--sand-beige);
            padding: 3rem;
            display: flex;
            gap: 3.5rem;
            position: relative;
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
            width: 20px;
            height: 0.5px;
            background: var(--deep-charcoal);
            opacity: 0.7;
        }

        .featured-image {
            width: 45%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-container {
            width: 100%;
            padding-top: 100%;
            position: relative;
            overflow: hidden;
        }

        .featured-image img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 92%;
            height: 92%;
            object-fit: contain;
        }

        .featured-content {
            width: 45%;
            padding-top: 1.5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 1.2rem;
        }

        .new-tag {
            position: absolute;
            top: 2.2rem;
            left: 2.2rem;
            font-size: 0.62rem;
            letter-spacing: 0.25em;
            color: var(--deep-charcoal);
            background: white;
            padding: 0.5rem 1.2rem;
            opacity: 0.95;
            font-weight: 300;
        }

        .item-title {
            font-size: 1.2rem;
            font-weight: 300;
            letter-spacing: 0.12em;
            margin-bottom: 0.4rem;
        }

        .item-jp {
            font-size: 0.85rem;
            color: var(--warm-gray);
            letter-spacing: 0.1em;
            margin-bottom: 1.8rem;
        }

        .description {
            font-size: 0.82rem;
            line-height: 1.8;
            letter-spacing: 0.08em;
            color: var(--deep-charcoal);

            margin-bottom: 2rem;
        }

        .item-price {
            font-size: 0.9rem;
            line-height: 1.8;
            letter-spacing: 0.08em;
            color: var(--deep-charcoal);
        }

        @media print {
            @page {
                size: B6 landscape;
                margin: 0;
            }

            body {
                width: 182mm;
                height: 128mm;
                margin: 0;
                padding: 0;
            }

            .menu-container {
                box-shadow: none;
                width: 182mm !important;
                height: 128mm !important;
                margin: 0 !important;
                padding: 15mm !important;
            }

            .print-button {
                display: none;
            }
        }
    </style>
</head>

<body>
    <button class="print-button no-print" onclick="window.print()">Print Menu</button>
    <div class="menu-container">
        <div class="menu-content">
            <div class="featured-dessert">
                <div class="new-tag">NEW ARRIVAL</div>
                <div class="featured-image">
                    <div class="image-container">
                        <img src="{{ asset('images/a_tofu.png') }}" alt="Annin Tofu" loading="eager">
                    </div>
                </div>
                <div class="featured-content">
                    <div>
                        <h2 class="item-title">Almond Pudding</h2>
                        <div class="item-jp">杏仁豆腐</div>
                    </div>
                    <p class="description">
                        Silky smooth almond jelly<br>
                        made with premium almond extract.
                    </p>
                    <div class="item-price">9 dt</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
