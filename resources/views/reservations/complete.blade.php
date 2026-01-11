<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bistro Nippon') }} - @yield('title', '予約')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/reservation.css') }}" rel="stylesheet">

    <style>
        /* Main content background styling */
        /* 背景画像のオーバーレイを含む修正版 */
        .main-content {
            position: relative;
            background: none;
            /* 直接の背景設定を削除 */
            padding: 40px 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            min-height: 100vh;
            color: #fff;
            flex: 1;
        }

        /* 背景画像用の疑似要素 */
        .main-content::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('{{ asset('images/reservation-bg.jpg') }}');
            /* Laravel assetヘルパーを使用 */
            background-size: cover;
            background-position: center;
            opacity: 0.6;
            z-index: -2;
        }

        /* 暗いオーバーレイ層 */
        .main-content::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* 黒の透過オーバーレイ */
            z-index: -1;
        }

        /* コンテンツコンテナの背景も調整 */
        .content-container {
            max-width: 800px;
            background: rgba(0, 0, 0, 0.4);
            /* より透明に */
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            position: relative;
            /* z-indexを機能させるため */
            z-index: 1;
        }

        /* Headline and paragraph styling */
        .content-container h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .content-container p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        /* Button styling */
        .btn-main {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: bold;
            color: #fff;
            background-color: #f5a623;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-main:hover {
            background-color: #e08e12;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    @include('layouts.navbar')

    @env('local')
        <div>
            <h3>ローカル環境</h3>
        </div>
    @endenv
    <!-- Main Content ★ debug-->
    <section class="main-content">
        <div class="content-container">
            <!-- Completion Message Card -->
            <div class="card shadow">
                <div class="card-body text-center py-5">
                    <div class="display-1 text-success mb-4">
                        <i class="bi bi-check-circle"></i>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <p class="lead mb-4">
                        A confirmation email has been sent.<br>
                        We look forward to welcoming you.
                    </p>

                    @if (session('reservation'))
                        <!-- Reservation Details -->
                        <div class="reservation-details bg-light p-4 rounded text-start mb-4">
                            <h5 class="border-bottom pb-2 mb-3">Reservation Details</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="mb-2">
                                        <strong>Name:</strong><br>
                                        {{ session('reservation')->name }}
                                    </p>
                                    <p class="mb-2">
                                        <strong>Email:</strong><br>
                                        {{ session('reservation')->email }}
                                    </p>
                                    <p class="mb-2">
                                        <strong>Phone:</strong><br>
                                        {{ session('reservation')->phone }}
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="mb-2">
                                        <strong>Date:</strong><br>
                                        {{ \Carbon\Carbon::parse(session('reservation')->date)->format('F j, Y') }}
                                    </p>
                                    <p class="mb-2">
                                        <strong>Time:</strong><br>
                                        {{ session('reservation')->time }}
                                    </p>
                                    <p class="mb-2">
                                        <strong>Guests:</strong><br>
                                        {{ session('reservation')->guests }} guests
                                    </p>
                                </div>
                                @if (session('reservation')->notes)
                                    <div class="col-12 mt-2">
                                        <p class="mb-0">
                                            <strong>Notes:</strong><br>
                                            {!! nl2br(e(session('reservation')->notes)) !!}
                                        </p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif

                    <!-- Restaurant Information -->
                    <div class="store-info bg-light p-4 rounded text-start mb-4">
                        <h5 class="border-bottom pb-2 mb-3">{{ config('reservation_bn.restaurant_info.name') }}</h5>
                        <p class="mb-2">
                            <i class="bi bi-geo-alt-fill me-2"></i>
                            {{ config('reservation_bn.restaurant_info.address') }}
                        </p>
                        <p class="mb-2">
                            <i class="bi bi-telephone-fill me-2"></i>
                            {{ config('reservation_bn.restaurant_info.phone') }}
                        </p>
                        <p class="mb-2">
                            <i class="bi bi-clock-fill me-2"></i>
                            Hours: {{ config('reservation_bn.restaurant_info.business_hours') }}
                        </p>
                    </div>

                    <!-- Important Notes -->
                    <div class="alert alert-info text-start mb-4">
                        <h5 class="alert-heading mb-3">
                            <i class="bi bi-info-circle-fill me-2"></i>
                            Important Information
                        </h5>
                        <ul class="mb-0">
                            <li>For same-day cancellations, please contact us by phone.</li>
                            <li>If you're running late, please notify us.</li>
                            <li>Reservations may be cancelled if arrival is delayed by more than 30 minutes.</li>
                        </ul>
                    </div>

                    <!-- Buttons -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <a href="https://bistronippon.tn/" class="btn btn-primary">
                            <i class="bi bi-house me-1"></i>
                            Back to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Content ★  END-->
    <!-- Footer -->
    @include('layouts.footer')

    @stack('scripts')
</body>

</html>
