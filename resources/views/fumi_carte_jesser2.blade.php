<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Staff Business Card</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Noto+Sans+JP:wght@300;400;500&display=swap"
        rel="stylesheet">
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
            font-family: 'Montserrat', 'Noto Sans JP', sans-serif;
            overflow: hidden;
        }

        .curved-block {
            position: absolute;
            width: 32mm;
            height: 120%;
            left: -5mm;
            top: -5mm;
            background: #000000;
            transform: rotate(-2deg);
            border-radius: 0 60% 40% 0;
        }

        .curved-accent {
            position: absolute;
            width: 28mm;
            height: 120%;
            left: -8mm;
            top: -5mm;
            background: #1a1a1a;
            transform: rotate(-4deg);
            border-radius: 0 60% 50% 0;
            opacity: 0.7;
        }

        .vertical-text {
            position: absolute;
            font-family: YuMincho, "Yu Mincho", "Hiragino Mincho ProN", serif;
            color: rgba(255, 255, 255, 0.834);
            font-size: 12px;
            writing-mode: vertical-rl;
            text-orientation: upright;
            letter-spacing: 0.4em;
            top: 12mm;
            left: 8mm;
            font-weight: 700;
        }

        .staff-info {
            position: absolute;
            top: 10mm;
            left: 32mm;
        }

        .name {
            font-size: 16px;
            letter-spacing: 1.2px;
            margin-bottom: 1mm;
        }

        .title {
            font-size: 9px;
            color: #111;
            font-weight: 400;
            margin-bottom: 5mm;
            letter-spacing: 0.3px;
            padding-left: 1mm;
        }

        .whatsapp {
            gap: 1.5mm;
            padding-left: 1mm;
            font-size: 9px;
            color: #111;
        }

        .wa-icon {
            width: 13px;
            height: 13px;
            fill: #25D366;
        }

        .company-section {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 40mm;
            padding: 2mm 3mm;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            background: rgba(244, 244, 240, 0.9);
        }

        .bistro-name {
            font-size: 10px;
            letter-spacing: 1px;
            color: #000000;
            font-weight: 400;
            margin-bottom: 1mm;
            text-transform: uppercase;
        }

        .info-text {
            font-size: 7.5px;
            line-height: 1.5;
            color: #444;
        }

        .logo {
            position: absolute;
            bottom: 5mm;
            right: 42mm;
            width: 7mm;
            height: 7mm;
            opacity: 0.8;
            border-radius: 50%;
            overflow: hidden;
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .contact-qr {
            display: flex;
            align-items: center;
            gap: 2mm;
            margin-top: 3mm;
        }

        .qr-code {
            width: 8mm;
            height: 8mm;
            opacity: 0.8;
        }

        .whatsapp-minimal {
            font-size: 9px;
            color: #666666;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <div id="card">
                <div class="curved-accent"></div>
                <div class="curved-block"></div>
                <div class="vertical-text">ジェイセル</div>

                <div class="staff-info">
                    <div class="name">HAMIDOU JASSER</div>
                    <div class="title">Head of Guest Relations</div>

                </div>

                <div class="logo">
                    <img src="{{ asset('images/logo_bn.png') }}" alt="Bistronippon Logo">
                </div>

                <div class="company-section">
                    <div class="bistro-name">BISTRONIPPON</div>
                    <div class="info-text">
                        <div>29 Rue Tahar Ben Achour</div>
                        <div>Marsa, Tunisia</div>
                        <div>Tel: +216 24 986 077</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4 no-print">
            <button onclick="window.print()" class="btn btn-dark">Download PDF</button>
        </div>
    </div>
</body>

</html>
