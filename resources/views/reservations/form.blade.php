<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bistro Nippon') }} - @yield('title', 'in tunisia')</title>

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

    <!-- Custom CSS
    <link href="{{ asset('css/reservation.css') }}" rel="stylesheet">
-->
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
        @if ($status > 0)
            <div class="content-container">
                <div class="alert alert-warning text-center">
                    <h3 class="alert-heading">Notice</h3>
                    <p class="mb-0">{{ $message }}</p>

                    <!-- 追加の連絡先情報 -->
                    <div class="mt-4">
                        <p>For inquiries, please contact us:</p>
                        <p><a href="/contact"><i class="bi bi-whatsapp"></i> WhatsApp available</a></p>
                    </div>
                </div>
            </div>
        @else
            <div class="content-container">

                <h1>Reservation</h1>
                <p>
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

                        <form method="POST" action="{{ route('reservation.confirm') }}" class="needs-validation"
                            novalidate>
                            @csrf
                            <!-- Name -->
                            <div class="mb-4">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="mb-4">
                                <label for="email" class="form-label">Email <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="text-muted">We will send a confirmation email</small>
                            </div>

                            <!-- Phone -->
                            <div class="mb-4">
                                <label for="phone" class="form-label">Phone Number <span
                                        class="text-danger">*</span></label>
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                    id="phone" name="phone" value="{{ old('phone') }}" required
                                    pattern="[0-9]{8,12}">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="text-muted">Example: 24 986 077 (no hyphens)</small>
                            </div>

                            <!-- Date -->
                            <div class="mb-4">
                                <label for="date" class="form-label">Reservation Date <span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control @error('date') is-invalid @enderror"
                                    id="date" name="date" value="{{ old('date') }}" required>
                                @error('date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Time -->
                            <div class="mb-4">
                                <label for="time" class="form-label">Reservation Time <span
                                        class="text-danger">*</span></label>
                                <select class="form-select @error('time') is-invalid @enderror" id="time"
                                    name="time" required>
                                    <option value="">Please select</option>
                                    @foreach (config('reservation_bn.available_times') as $time)
                                        <option value="{{ $time }}"
                                            {{ old('time') == $time ? 'selected' : '' }}>
                                            {{ \Carbon\Carbon::createFromFormat('H:i', $time)->format('H:i') }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('time')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small
                                    class="text-muted">{{ config('reservation_bn.restaurant_info.open_hours') }}</small>
                            </div>

                            <!-- Number of Guests -->
                            <div class="mb-4">
                                <label for="guests" class="form-label">Number of Guests <span
                                        class="text-danger">*</span></label>
                                <select class="form-select @error('guests') is-invalid @enderror" id="guests"
                                    name="guests" required>
                                    <option value="">Please select</option>
                                    @for ($i = config('reservation_bn.min_guests'); $i <= config('reservation_bn.max_guests'); $i++)
                                        <option value="{{ $i }}"
                                            {{ old('guests') == $i ? 'selected' : '' }}>
                                            {{ $i }} guests
                                        </option>
                                    @endfor
                                </select>
                                @error('guests')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="text-muted">For parties larger than
                                    {{ config('reservation_bn.max_guests') }}, please call us directly</small>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn-main px-5">Proceed to Confirmation</button>
                            </div>
                        </form>
                    </div>
                </div>

                </p>
            </div>
        @endif
    </section>
    <!-- Main Content ★ debug END-->
    <!-- Footer -->
    @include('layouts.footer')
    @push('scripts')
        <script>
            $(document).ready(function() {
                // 1. 定義を一番上に
                const $dateInput = $('#date');

                // 2. 年末年始休業のチェック (2025/12/31 - 2026/01/04)
                $dateInput.on('change', function() {
                    const selectedDate = new Date($(this).val());

                    // JSの月は0始まり (0=1月, 11=12月)
                    const start = new Date(2025, 11, 31); // 2025-12-31
                    const end = new Date(2026, 0, 4); // 2026-01-04

                    // 期間内ならエラー
                    if (selectedDate >= start && selectedDate <= end) {
                        alert('Sorry, we are closed from Dec 31 to Jan 4 for New Year holidays.');
                        $(this).val(''); // 日付をクリア
                        return;
                    }
                });

                // 3. 日付選択範囲の制限
                const today = new Date();
                const maxDate = new Date();
                maxDate.setDate(today.getDate() + {{ config('reservation_bn.booking_end_days') }});

                $dateInput.attr({
                    'min': today.toISOString().split('T')[0],
                    'max': maxDate.toISOString().split('T')[0]
                });
            });
        </script>
    @endpush
    @stack('scripts')
</body>

</html>
