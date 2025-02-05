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

        .warning-content {
            text-align: center;
            font-size: 1.2rem;
            font-weight: bold;
            padding: 10px;
        }

        .blink-text {
            animation: blink-animation 1.5s ease-in-out infinite;
            color: #dc3545;
            font-size: 1.4rem;
        }

        @keyframes blink-animation {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0.3;
            }

            100% {
                opacity: 1;
            }
        }

        #warningMessage {
            transform: translateY(-50px);
            opacity: 0;
            transition: all 0.8s ease-out;
        }

        #warningMessage.slide-in {
            transform: translateY(0);
            opacity: 1;
        }

        .warning-content i {
            font-size: 1.5rem;
            color: #dc3545;
            margin-right: 10px;
            animation: shake 2s ease-in-out infinite;
        }

        @keyframes shake {

            0%,
            100% {
                transform: rotate(0deg);
            }

            5%,
            15% {
                transform: rotate(-10deg);
            }

            10%,
            20% {
                transform: rotate(10deg);
            }

            25% {
                transform: rotate(0deg);
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
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
            <div id="warningMessage" class="alert alert-warning d-none"
                style="border-radius: 8px; margin-bottom: 30px;">
                <div class="warning-content">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    <span class="blink-text">YOUR RESERVATION IS NOT YET CONFIRMED!</span>
                    <span class="d-block mt-1">Please review and confirm your reservation details.</span>
                </div>
            </div>
            <!-- Reservation Form -->
            <div class="card shadow">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('reservation.store') }}">
                        @csrf

                        <!-- Reservation Details -->
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <!-- Name -->
                                    <tr>
                                        <th class="table-light" style="width: 30%">Name</th>
                                        <td>
                                            {{ $validated['name'] }}
                                            <input type="hidden" name="name" value="{{ $validated['name'] }}">
                                        </td>
                                    </tr>

                                    <!-- Email -->
                                    <tr>
                                        <th class="table-light">Email</th>
                                        <td>
                                            {{ $validated['email'] }}
                                            <input type="hidden" name="email" value="{{ $validated['email'] }}">
                                        </td>
                                    </tr>

                                    <!-- Phone -->
                                    <tr>
                                        <th class="table-light">Phone Number</th>
                                        <td>
                                            {{ $validated['phone'] }}
                                            <input type="hidden" name="phone" value="{{ $validated['phone'] }}">
                                        </td>
                                    </tr>

                                    <!-- Date -->
                                    <tr>
                                        <th class="table-light">Date</th>
                                        <td>
                                            {{ \Carbon\Carbon::parse($validated['date'])->format('F j, Y') }}
                                            <input type="hidden" name="date" value="{{ $validated['date'] }}">
                                        </td>
                                    </tr>

                                    <!-- Time -->
                                    <tr>
                                        <th class="table-light">Time</th>
                                        <td>
                                            {{ $validated['time'] }}
                                            <input type="hidden" name="time" value="{{ $validated['time'] }}">
                                        </td>
                                    </tr>

                                    <!-- Number of Guests -->
                                    <tr>
                                        <th class="table-light">Number of Guests</th>
                                        <td>
                                            {{ $validated['guests'] }} guests
                                            <input type="hidden" name="guests" value="{{ $validated['guests'] }}">
                                        </td>
                                    </tr>

                                    <!-- Notes -->
                                    @if (isset($validated['notes']))
                                        <tr>
                                            <th class="table-light">Notes</th>
                                            <td>
                                                {!! nl2br(e($validated['notes'])) !!}
                                                <input type="hidden" name="notes" value="{{ $validated['notes'] }}">
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>

                        <!-- Important Notice -->
                        <div class="alert mt-4"
                            style="background: rgba(255, 255, 255, 0.1); border: none; border-left: 3px solid #f5a623; text-align: left; padding: 1.5rem;">
                            <h5 class="alert-heading mb-3"
                                style="font-family: 'Playfair Display', serif; color: #999; font-size: 1.1rem;">
                                <i class="bi bi-info-circle me-2"></i>Please Note
                            </h5>
                            <ul class="mb-0" style="list-style-type: none; padding-left: 0;">
                                <li class="mb-2" style="font-size: 0.9rem; color: #999;">
                                    <i class="bi bi-clock me-2"></i>If you're running late, please contact us by phone.
                                </li>
                                <li style="font-size: 0.9rem; color: #999;">
                                    <i class="bi bi-envelope me-2"></i>You will receive a confirmation email after
                                    completing your reservation.
                                </li>
                            </ul>
                        </div>

                        <!-- Button Group -->
                        <div class="d-flex justify-content-center gap-3 mt-4">
                            <!-- Back Button -->
                            <button type="button" class="btn-main px-4" onclick="history.back()">
                                <i class="bi bi-arrow-left"></i> Modify
                            </button>

                            <!-- Confirm Button -->
                            <button type="submit" class="btn-main px-4">
                                Confirm Reservation <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Content ★ debug END-->
    <!-- Footer -->
    @include('layouts.footer')

    @push('scripts')
        <script>
            $(document).ready(function() {
                const $warningMessage = $('#warningMessage');

                // 初期表示を設定
                $warningMessage.removeClass('d-none');

                // スライドインアニメーション
                setTimeout(function() {
                    $warningMessage.addClass('slide-in');
                }, 500);

                // スクロール時の効果
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 100) {
                        $warningMessage.css({
                            'position': 'sticky',
                            'top': '20px',
                            'z-index': 1000
                        });
                    } else {
                        $warningMessage.css({
                            'position': 'relative',
                            'top': 'auto'
                        });
                    }
                });

                // 定期的に背景色を変更
                let isHighlighted = false;
                setInterval(function() {
                    if (isHighlighted) {
                        $warningMessage.css('background-color', '#fff3cd');
                    } else {
                        $warningMessage.css('background-color', '#ffe5e5');
                    }
                    isHighlighted = !isHighlighted;
                }, 2000);
            });
        </script>
    @endpush
    @stack('scripts')
</body>

</html>
