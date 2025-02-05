<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>JAPANESE CURRY KITANO</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @media print {
            body * {
                visibility: hidden;
            }

            #card,
            #card * {
                visibility: visible;
            }

            #card {
                position: absolute;
                left: 0;
                top: 0;
            }

            .no-print {
                display: none !important;
            }
        }

        #card {
            width: 85mm;
            height: 54mm;
            background-color: #F4F4F0;
            position: relative;
            font-family: "Helvetica Neue", Arial, sans-serif;
            overflow: hidden;
        }

        .vertical-text {
            position: absolute;
            font-family: YuMincho, "Yu Mincho", "Hiragino Mincho ProN", serif;
            color: rgba(255, 255, 255, 0.934);
            font-size: 12px;
            writing-mode: vertical-rl;
            text-orientation: upright;
            letter-spacing: 0.4em;
            top: 8mm;
            left: 8mm;
            font-weight: 400;
        }

        .yellow-block {
            position: absolute;
            background-color: #E6BF00;
            opacity: 0.95;
            width: 30mm;
            height: 100%;
            left: 0;
        }

        .line {
            position: absolute;
            width: 1mm;
            height: 100%;
            left: 35mm;
            background-color: #E6BF00;
            opacity: 0.95;
        }

        .restaurant-text {
            position: absolute;
            top: 15mm;
            left: 41mm;
            font-size: 8px;
            letter-spacing: 2.5px;
            color: rgba(33, 37, 41, 0.75);
            font-weight: 400;
            text-transform: uppercase;
        }

        .tagline {
            position: absolute;
            top: 22mm;
            left: 41mm;
            font-size: 6.5px;
            letter-spacing: 2px;
            color: rgba(33, 37, 41, 0.7);
            font-weight: 300;
            white-space: nowrap;
        }

        .info {
            position: absolute;
            top: 28mm;
            left: 41mm;
            font-size: 7px;
            letter-spacing: 1.2px;
            line-height: 2.2;
            color: rgba(33, 37, 41, 0.65);
        }

        .qr-code {
            position: absolute;
            bottom: 2.5mm;
            right: 2.5mm;
            width: 49px;
            height: 49px;
            background: rgb(140, 138, 138);
        }

        .qr-code img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .small-logo {
            position: absolute;
            top: 13mm;
            left: 66mm;
            width: 7mm;
            height: 7mm;
            opacity: 0.5;
            border-radius: 50%;
            overflow: hidden;
        }

        .small-logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <div id="card">
                <div class="yellow-block"></div>
                <div class="line"></div>
                <div class="vertical-text">カレーキタノ</div>
                <div class="restaurant-text">Curry Kitano</div>
                <div class="small-logo">
                    <img src="{{ asset('images/logo_ki.png') }}" alt="Logo">
                </div>
                <div class="tagline">Authentic Japanese Curry</div>
                <div class="info">
                    <div>TEL: +216 54 872 429</div>
                    <div>39 Rue Salem Bou Hajeb</div>
                    <div>Marsa, Tunisia</div>
                </div>
                <div class="qr-code">
                    <img src="{{ asset('images/ki_qr.png') }}" alt="QR Code">
                </div>
            </div>
        </div>
        <div class="text-center mt-4 no-print">
            <button onclick="window.print()" class="btn btn-primary">download PDF</button>
        </div>
    </div>
</body>

</html>
