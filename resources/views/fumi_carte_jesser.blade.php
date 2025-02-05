<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>BISTRO NIPPON - Jayser</title>
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
            border: 1px solid rgba(0, 0, 0, 0.8);
            margin: 2mm;
        }

        .inner-border {
            position: absolute;
            top: 2mm;
            left: 2mm;
            right: 2mm;
            bottom: 2mm;
            border: 0.3mm solid rgba(0, 0, 0, 0.3);
        }

        .circle-1 {
            position: absolute;
            width: 15mm;
            height: 15mm;
            background-color: #000;
            opacity: 0.9;
            border-radius: 50%;
            right: 10mm;
            top: 5mm;
            transform: scale(0.8);
        }

        .circle-2 {
            position: absolute;
            width: 10mm;
            height: 10mm;
            background-color: #000;
            opacity: 0.9;
            border-radius: 50%;
            right: 28mm;
            top: 12mm;
            transform: scale(0.6);
        }

        .circle-3 {
            position: absolute;
            width: 12mm;
            height: 12mm;
            background-color: #000;
            opacity: 0.9;
            border-radius: 50%;
            right: 18mm;
            bottom: 12mm;
            transform: scale(0.7);
        }

        .circle-4 {
            position: absolute;
            width: 8mm;
            height: 8mm;
            background-color: #000;
            opacity: 0.9;
            border-radius: 50%;
            right: 35mm;
            bottom: 18mm;
            transform: scale(0.5);
        }

        .name-text {
            position: absolute;
            top: 10mm;
            left: 8mm;
            font-size: 16px;
            letter-spacing: 3px;
            color: rgba(0, 0, 0, 0.9);
            font-weight: 500;
        }

        .role-text {
            position: absolute;
            top: 17mm;
            left: 8mm;
            font-size: 8px;
            letter-spacing: 2.5px;
            color: rgba(0, 0, 0, 0.75);
            font-weight: 400;
            text-transform: uppercase;
        }

        .whatsapp-text {
            position: absolute;
            top: 24mm;
            left: 8mm;
            font-size: 7px;
            letter-spacing: 1.2px;
            color: rgba(0, 0, 0, 0.65);
        }

        .bistro-text {
            position: absolute;
            bottom: 14mm;
            left: 8mm;
            font-size: 10px;
            letter-spacing: 3px;
            color: rgba(0, 0, 0, 0.85);
            font-weight: 400;
            text-transform: uppercase;
        }

        .japanese-text {
            position: absolute;
            bottom: 20mm;
            left: 8mm;
            font-family: YuMincho, "Yu Mincho", "Hiragino Mincho ProN", serif;
            font-size: 8px;
            letter-spacing: 2px;
            color: rgba(0, 0, 0, 0.7);
            font-weight: 300;
        }

        .tel-info {
            position: absolute;
            bottom: 6mm;
            left: 8mm;
            font-size: 7px;
            letter-spacing: 1.2px;
            color: rgba(0, 0, 0, 0.6);
        }

        .small-logo {
            position: absolute;
            top: 10mm;
            right: 8mm;
            width: 10mm;
            height: 10mm;
            opacity: 0.8;
            border-radius: 50%;
            overflow: hidden;
            z-index: 2;
        }

        .small-logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .accent-line {
            position: absolute;
            width: 25mm;
            height: 0.3mm;
            background-color: rgba(0, 0, 0, 0.5);
            bottom: 26mm;
            left: 8mm;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <div id="card">
                <div class="inner-border"></div>
                <div class="circle-1"></div>
                <div class="circle-2"></div>
                <div class="circle-3"></div>
                <div class="circle-4"></div>
                <div class="name-text">JAYSER</div>
                <div class="role-text">Head of Customer Experience</div>
                <div class="whatsapp-text">WhatsApp: wa.me/21624986077</div>
                <div class="accent-line"></div>
                <div class="japanese-text">ビストロニッポン</div>
                <div class="bistro-text">BISTRONIPPON</div>
                <div class="tel-info">Tel: +216 24 986 077</div>
                <div class="small-logo">
                    <img src="{{ asset('images/logo_bn.png') }}" alt="Logo">
                </div>
            </div>
        </div>

        <div class="text-center mt-4 no-print">
            <button onclick="window.print()" class="btn btn-primary">download PDF</button>
        </div>
    </div>
</body>

</html>
