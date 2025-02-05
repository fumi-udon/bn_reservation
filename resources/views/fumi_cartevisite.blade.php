<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>BISTRO NIPPON</title>
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

        .navy-block {
            position: absolute;
            background-color: #1B315E;
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
            background-color: #1B315E;
            opacity: 0.95;
        }

        .bistro-text {
            position: absolute;
            top: 15mm;
            left: 41mm;
            font-size: 8px;
            letter-spacing: 2.5px;
            color: rgba(27, 49, 94, 0.95);
            font-weight: 500;
            text-transform: uppercase;
        }

        .tagline {
            position: absolute;
            top: 22mm;
            left: 41mm;
            font-size: 6.5px;
            letter-spacing: 2px;
            color: rgba(27, 49, 94, 0.7);
            font-weight: 300;
            white-space: nowrap;
        }

        .info {
            position: absolute;
            top: 29mm;
            left: 41mm;
            font-size: 7px;
            letter-spacing: 1.2px;
            line-height: 2;
            color: rgba(27, 49, 94, 0.85);
        }

        .portal-text {
            position: absolute;
            bottom: 6mm;
            right: 52mm;
            font-size: 6px;
            letter-spacing: 1.8px;
            color: rgba(27, 49, 94, 0.35);
            font-weight: 300;
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

        /* LOGO */
        .small-logo {
            position: absolute;
            top: 12mm;
            left: 68mm;
            width: 8mm;
            height: 8mm;
            opacity: 0.6;
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
                <div class="navy-block"></div>
                <div class="line"></div>
                <div class="vertical-text">ビストロニッポン</div>
                <div class="bistro-text">Bistronippon</div>
                <div class="small-logo">
                    <img src="{{ asset('images/logo_bn.png') }}" alt="Logo">
                </div>
                <div class="tagline">Handcrafted Japanese Noodles</div>
                <div class="info">
                    <div>TEL: +216 24 986 077</div>
                    <div>29 Rue Tahar Ben Achour</div>
                    <div>Marsa, Tunisia</div>
                </div>

                <div class="qr-code">
                    <img src="{{ asset('images/bn_qr.png') }}" alt="QR Code">
                </div>
            </div>
        </div>

        <div class="text-center mt-4 no-print">
            <button onclick="window.print()" class="btn btn-primary">download PDF</button>
        </div>
    </div>
</body>

</html>
