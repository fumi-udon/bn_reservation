<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Bistro Nippon Sunday Edit - Gluten-Free Dining in La Marsa. Authentic Taste, Modern Balance.">
    <title>THE NIPPON SUNDAY EDIT | Bistro Nippon</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;500;700&family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Lato:wght@300;400;700&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            /* Palette: White & Brown Minimalist */
            --bg-color: #F9F7F2;
            /* 米色/和紙のようなオフホワイト */
            --text-primary: #3E2723;
            /* 濃いブラウン（たまり醤油色） */
            --text-secondary: #5D4037;
            /* やや明るいブラウン */
            --accent-gold: #C5A059;
            /* 落ち着いたゴールド */
            --green-safe: #2E7D32;
            /* 安全を示すグリーン */
            --yellow-warn: #F9A825;
            /* 注意を示すイエロー */
            --white: #FFFFFF;
        }

        body {
            font-family: 'Lato', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-primary);
            line-height: 1.8;
            overflow-x: hidden;
            /* 横スクロール防止 */
        }

        h1,
        h2,
        h3,
        .serif-font {
            font-family: 'Playfair Display', serif;
        }

        .jp-font {
            font-family: 'Noto Serif JP', serif;
        }

        /* --- Hero Section with Slider --- */
        .hero-section {
            position: relative;
            min-height: 90vh;
            /* 画面の高さを確保 */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
            color: var(--white);
            background: #000;
        }

        /* スライダーコンテナ */
        .hero-slider-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .carousel,
        .carousel-inner,
        .carousel-item {
            height: 100%;
        }

        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* スマホでも縦横比を崩さずトリミング */
        }

        /* 暗いフィルター */
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(30, 20, 10, 0.5);
            /* ブラウン系の透過黒 */
            z-index: 2;
        }

        /* 文字コンテンツ */
        .hero-content {
            position: relative;
            z-index: 3;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 3rem 1.5rem;
            backdrop-filter: blur(2px);
            max-width: 800px;
            margin: 1rem;
            animation: fadeInUp 1s ease-out;
        }

        .hero-subtitle {
            font-size: 1rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--accent-gold);
            margin-bottom: 1rem;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            line-height: 1.1;
        }

        .hero-tagline {
            font-size: 1.3rem;
            font-style: italic;
            font-weight: 300;
            margin-top: 1rem;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* --- Philosophy Section --- */
        .philosophy-section {
            padding: 5rem 0;
            background-color: var(--white);
            text-align: center;
        }

        .quote-box {
            max-width: 700px;
            margin: 0 auto;
            border-left: 3px solid var(--accent-gold);
            padding-left: 2rem;
            text-align: left;
        }

        .quote-text {
            font-size: 1.3rem;
            font-style: italic;
            color: var(--text-primary);
        }

        .quote-author {
            margin-top: 1.5rem;
            font-size: 0.9rem;
            color: var(--accent-gold);
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* --- Concept Section --- */
        .concept-section {
            padding: 5rem 0;
            background-color: var(--bg-color);
        }

        .feature-card {
            background: var(--white);
            padding: 2.5rem;
            height: 100%;
            border: 1px solid #EFEBE9;
            transition: transform 0.3s ease;
            /* スマホでの視認性向上 */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.02);
        }

        .feature-icon {
            font-size: 2rem;
            color: var(--accent-gold);
            margin-bottom: 1.5rem;
        }

        /* --- Menu Section --- */
        .menu-section {
            background-color: #2D2420;
            /* Dark Brown */
            color: #EFEBE9;
            padding: 5rem 0;
        }

        .menu-title {
            color: var(--accent-gold);
            text-align: center;
            margin-bottom: 1rem;
        }

        .menu-item {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 1rem 0;
            margin-bottom: 0.5rem;
        }

        .menu-item h4 {
            font-size: 1.1rem;
            margin: 0;
            font-weight: 400;
        }

        .menu-desc {
            font-size: 0.85rem;
            color: #A1887F;
            margin-top: 0.3rem;
        }

        .tag-gf {
            background-color: var(--accent-gold);
            color: #2D2420;
            font-size: 0.7rem;
            padding: 2px 6px;
            border-radius: 2px;
            margin-left: 8px;
            vertical-align: middle;
            font-weight: bold;
        }

        /* --- Transparency System --- */
        .system-section {
            padding: 5rem 0;
            background-color: var(--white);
        }

        .system-box {
            padding: 1.5rem;
            border-radius: 4px;
            margin-bottom: 1.5rem;
        }

        .system-box.green {
            background-color: #F1F8E9;
            /* 薄い緑 */
            border-left: 5px solid var(--green-safe);
        }

        .system-box.yellow {
            background-color: #FFFDE7;
            /* 薄い黄色 */
            border-left: 5px solid var(--yellow-warn);
        }

        /* --- Footer / CTA --- */
        .cta-section {
            text-align: center;
            padding: 4rem 1rem;
            background-color: var(--bg-color);
            border-top: 1px solid #E0E0E0;
        }

        .btn-gold {
            background-color: var(--accent-gold);
            color: var(--white);
            padding: 16px 30px;
            font-size: 1.1rem;
            letter-spacing: 1px;
            border: none;
            border-radius: 0;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            width: 100%;
            /* スマホで押しやすく */
            max-width: 350px;
        }

        .btn-gold:hover {
            background-color: #A68B4F;
            color: var(--white);
        }

        /* Responsive Adjustments */
        @media (max-width: 576px) {
            .hero-title {
                font-size: 2.2rem;
            }

            .hero-content {
                padding: 2rem 1rem;
            }

            .philosophy-section,
            .concept-section,
            .menu-section {
                padding: 3rem 0;
            }

            .feature-card {
                margin-bottom: 1rem;
            }

            .menu-item {
                flex-direction: column;
            }

            /* メニュー名を改行させない */
        }
    </style>
</head>

<body>

    @include('layouts.navbar')

    <section class="hero-section">

        <div class="hero-slider-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/gf_head.png') }}" alt="Sunday Mood 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/gf_head2.png') }}" alt="Sunday Mood 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/gf_head3.png') }}" alt="Sunday Mood 3">
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-overlay"></div>

        <div class="hero-content">
            <p class="hero-subtitle">DECEMBER LIMITED • EVERY SUNDAY</p>
            <h1 class="hero-title">THE NIPPON<br>SUNDAY EDIT</h1>
            <p class="hero-tagline serif-font">Gluten-Free Dining</p>
            <hr style="width: 50px; margin: 20px auto; border-color: var(--accent-gold); opacity: 1;">
            <p class="fs-5 fst-italic">Authentic Taste. Modern Balance.<br>
                <span style="font-size: 0.9rem; opacity: 0.8;">Goût Authentique. Équilibre Moderne.</span>
            </p>
        </div>
    </section>

    <section class="philosophy-section">
        <div class="container">
            <div class="quote-box">
                <p class="quote-text serif-font">
                    "Never give up on flavor.<br>
                    I didn't chase a diet. I chased the perfect taste.<br>
                    Gluten-Free is simply where I arrived."
                </p>
                <p class="quote-author">— Owner's Philosophy</p>
            </div>

            <div class="row mt-5 justify-content-center">
                <div class="col-md-8 text-center text-secondary">
                    <p class="mb-4 fs-5">
                        <span class="d-block mb-2 text-primary fw-bold serif-font">"Why settle for less flavor?"</span>
                        Most people think Gluten-Free means sacrificing taste. We prove them wrong.
                        By replacing standard wheat-soy sauce with <strong>Premium GF Tamari</strong>,
                        we achieve a richer, deeper Umami that wheat can never offer.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section class="concept-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="serif-font mb-2">THE CONCEPT</h2>
                <p class="text-uppercase text-muted" style="letter-spacing: 2px;">The Weekend Reset</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon"><i class="bi bi-stars"></i></div>
                        <h3 class="h4 mb-3 serif-font">Kitano Collaboration</h3>
                        <p class="small">
                            Special collaboration with sister brand <strong>Curry Kitano</strong>.
                            Reimagined Gluten-Free Japanese Curry customized for Sunday.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon"><i class="bi bi-droplet-fill"></i></div>
                        <h3 class="h4 mb-3 serif-font">Premium Tamari</h3>
                        <p class="small">
                            Experience the richer, deeper umami of <strong>GF Tamari Soy Sauce</strong>.
                            A flavor profile impossible to achieve with standard soy sauce.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon"><i class="bi bi-heart-pulse"></i></div>
                        <h3 class="h4 mb-3 serif-font">The Weekend Reset</h3>
                        <p class="small">
                            Less noise, more flavor. We swapped wheat for Rice and heavy sauces for Rice Miso.
                            A conscious choice to reset your system.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="menu-section">
        <div class="container">
            <h2 class="menu-title serif-font">SUNDAY MENU HIGHLIGHTS</h2>
            <p class="text-center text-secondary small mb-5" style="opacity: 0.7;">A curated selection of our specials.
            </p>

            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div class="mb-5 position-relative">
                        <img src="{{ asset('images/gf1.png') }}" alt="Gluten-Free Dish" class="img-fluid w-100 shadow"
                            style="border-radius: 2px; border: 1px solid rgba(197, 160, 89, 0.3); max-height: 350px; object-fit: cover;">
                        <div class="text-center mt-2">
                            <span
                                style="color: var(--accent-gold); font-size: 0.8rem; letter-spacing: 1px; text-transform: uppercase;">
                                Signature Tamari Oyako donburi
                            </span>
                        </div>
                    </div>

                    <div class="menu-category">
                        <h3 class="text-white border-bottom border-secondary pb-2 mb-4">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>Gluten-Free Selection
                        </h3>

                        <div class="menu-item">
                            <div>
                                <h4>Tamari Chicken Rice <span class="tag-gf">GF</span></h4>
                                <div class="menu-desc">Rice bowl with chicken marinated in rich Tamari sauce.</div>
                            </div>
                        </div>

                        <div class="menu-item">
                            <div>
                                <h4>Tamari Shrimp Rice <span class="tag-gf">GF</span></h4>
                                <div class="menu-desc">Rice bowl with succulent shrimp and Tamari glaze.</div>
                            </div>
                        </div>

                        <div class="menu-item">
                            <div>
                                <h4>Curry Rice <span class="tag-gf">GF</span></h4>
                                <div class="menu-desc">Collab with Kitano (Chicken / Shrimp / Vegan).</div>
                            </div>
                        </div>

                        <div class="menu-item">
                            <div>
                                <h4>Wakame Miso Soup <span class="tag-gf">GF</span></h4>
                                <div class="menu-desc">Traditional soup made with Rice Miso.</div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-category mt-5">
                        <h3 class="text-white border-bottom border-secondary pb-2 mb-4">
                            <i class="bi bi-star-fill text-warning me-2"></i>Special
                        </h3>

                        <div class="menu-item">
                            <div>
                                <h4>Curry Ramen (Kitano Collab) <span
                                        style="font-size:0.7rem; border:1px solid #fff; padding:2px 4px; margin-left:5px;">WHEAT</span>
                                </h4>
                                <div class="menu-desc">
                                    Bistro Nippon's homemade noodles x Kitano's Curry Soup.<br>
                                    <span class="fst-italic text-muted small">※ This dish contains Gluten (Wheat
                                        Noodles).</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="system-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="serif-font">OUR COMMITMENT</h2>
                <p class="text-muted">Transparency First. Choose with confidence.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="system-box green">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-circle-fill text-success me-2"></i>
                            <h4 class="m-0 fw-bold text-success">ZERO GLUTEN</h4>
                        </div>
                        <p class="fw-bold small text-uppercase text-secondary">Def: Wheat-Free & Safe Condiments</p>
                        <p class="mb-1">Prepared exclusively with GF Tamari, Rice Miso, Rice Vinegar, and GF
                            Mayonnaise.</p>
                        <p class="small text-muted fst-italic">Recommended for: Celiac, Gluten Intolerance.</p>
                    </div>

                    <div class="system-box yellow">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-circle-fill text-warning me-2"></i>
                            <h4 class="m-0 fw-bold text-warning" style="color: #F57F17 !important;">MICRO GLUTEN</h4>
                        </div>
                        <p class="fw-bold small text-uppercase text-secondary">Def: Trace Elements (ppm level)</p>
                        <p class="mb-1">We use specific authentic seasonings (Mirin, Dashi) essential for depth.
                            While wheat ingredients are excluded, these may contain micro-traces.</p>
                        <p class="small text-muted fst-italic">Target: Gluten-Conscious, Health Optimization.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2 class="serif-font mb-4">SUNDAY STATUS: UNLOCKED 🔓</h2>

            <div class="mb-4">
                <p class="fw-bold mb-1">SUNDAY SPECIAL HOURS</p>
                <p class="fs-4 serif-font">13:00 – 16:00 & 18:30 – 22:00</p>
            </div>

            <div class="d-grid gap-2 mx-auto" style="max-width: 400px;">
                <a href="https://wa.me/21624986077?text=I%20would%20like%20to%20book%20a%20table%20for%20Sunday%20GF%20Dining"
                    target="_blank" class="btn btn-gold">
                    <i class="bi bi-whatsapp me-2"></i>Book Your Table
                </a>
            </div>

            <div class="disclaimer text-center mx-auto mt-4" style="max-width: 600px;">
                <p style="font-size: 0.8rem; color: #8D6E63;">
                    <strong>Note:</strong> Prepared in a shared kitchen. While we follow strict cleaning protocols, we
                    cannot guarantee 0% risk for severe airborne allergies.<br>
                </p>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
