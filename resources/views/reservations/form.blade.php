<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bistro Nippon') }} - @yield('title', 'in tunisia')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* Main content background styling */
        .main-content {
            position: relative;
            background: none;
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
            z-index: -1;
        }

        /* コンテンツコンテナ */
        .content-container {
            max-width: 800px;
            background: rgba(0, 0, 0, 0.4);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            position: relative;
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

        /* WhatsApp Button */
        .btn-whatsapp {
            background-color: #25D366;
            color: white;
            border: none;
            padding: 12px 30px;
            font-weight: bold;
            border-radius: 50px;
            transition: all 0.3s;
        }

        .btn-whatsapp:hover {
            background-color: #128C7E;
            transform: scale(1.05);
        }
    </style>
</head>

<body>

    @include('layouts.navbar')

    @env('local')
        <div style="background:red; color:white; text-align:center;">
            <h3>ローカル環境 (Debug Mode)</h3>
        </div>
    @endenv

    <section class="main-content">
        {{-- システム停止などのステータスチェック --}}
        @if (isset($status) && $status > 0)
            <div class="content-container">
                <div class="alert alert-warning text-center">
                    <h3 class="alert-heading">Notice</h3>
                    <p class="mb-0">{{ $message }}</p>

                    <div class="mt-4">
                        <p>For inquiries, please contact us:</p>
                        <p><a href="/contact" class="text-dark fw-bold"><i class="bi bi-whatsapp"></i> WhatsApp
                                available</a></p>
                    </div>
                </div>
            </div>
        @else
            <div class="content-container">

                <h1>Reservation Request</h1>

                {{-- WhatsAppモード時の案内メッセージ --}}
                @if (isset($reservationMode) && $reservationMode === 'whatsapp')
                    <div class="alert alert-info border-0 bg-opacity-75"
                        style="background-color: rgba(0,0,0,0.6); color: #fff;">
                        <i class="bi bi-info-circle-fill text-warning"></i>
                        <strong>High Demand Notice:</strong><br>
                        Due to high demand, we are currently accepting reservations via <strong>WhatsApp</strong>
                        only.<br>
                        (メールでの自動予約は停止中です)
                    </div>
                @endif

                <div class="card shadow border-0">
                    <div class="card-body text-start">

                        {{-- バリデーションエラー表示 --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- フラッシュメッセージ --}}
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <form method="POST" action="{{ route('reservation.confirm') }}" class="needs-validation"
                            novalidate id="reservationForm">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="form-label fw-bold">Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}" required
                                    placeholder="Your Name">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label fw-bold">Email <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}" required
                                    placeholder="name@example.com">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="text-muted">We will send a confirmation email</small>
                            </div>

                            <div class="mb-4">
                                <label for="phone" class="form-label fw-bold">Phone Number <span
                                        class="text-danger">*</span></label>
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                    id="phone" name="phone" value="{{ old('phone') }}" required
                                    pattern="[0-9]{8,12}" placeholder="24986077">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="date" class="form-label fw-bold">Reservation Date <span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control @error('date') is-invalid @enderror"
                                    id="date" name="date" value="{{ old('date') }}" required>
                                @error('date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="time" class="form-label fw-bold">Reservation Time <span
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

                            <div class="mb-4">
                                <label for="guests" class="form-label fw-bold">Number of Guests <span
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

                            <div class="text-center mt-5">
                                @if (isset($reservationMode) && $reservationMode === 'whatsapp')
                                    {{-- WhatsApp Mode Button --}}
                                    <button type="button" onclick="sendToWhatsApp()" class="btn-whatsapp shadow-lg">
                                        <i class="bi bi-whatsapp me-2 fs-5"></i> Check Availability on WhatsApp
                                    </button>
                                    <div class="mt-2 text-muted small">
                                        *You will be redirected to WhatsApp app.
                                    </div>
                                @else
                                    {{-- Normal Mode Button --}}
                                    <button type="submit" class="btn-main px-5 py-2 shadow">
                                        Proceed to Confirmation
                                    </button>
                                @endif
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        @endif
    </section>

    @include('layouts.footer')

    {{-- ★ 秘密の管理者ドア (左下) --}}
    <a href="javascript:void(0);" onclick="secretDoor()"
        style="position: fixed; bottom: 5px; left: 5px; font-size: 10px; color: #fff; text-decoration: none; z-index: 9999; opacity: 0.1; cursor: default;">
        Admin
    </a>

    @push('scripts')
        <script>
            // === 1. Secret Door Logic ===
            function secretDoor() {
                // スタッフしか知らない秘密のプロンプト
                let pin = prompt("Enter Admin PIN:");
                // 正解のPINコード (Controllerの設定と合わせる: 1234)
                if (pin) {
                    window.location.href = "{{ route('reservation.toggle') }}?pin=" + pin;
                }
            }

            // === 2. WhatsApp Logic ===
            function sendToWhatsApp() {
                // 入力値取得
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value; // 任意だけどメッセージに含める
                const date = document.getElementById('date').value;
                const time = document.getElementById('time').value;
                const guests = document.getElementById('guests').value;

                // 簡易バリデーション (必須項目チェック)
                if (!name || !date || !time || !guests) {
                    alert('Please fill in Name, Date, Time and Number of Guests.');
                    return;
                }

                // WhatsAppメッセージ作成
                const msg =
                    `Hello, I would like to check availability for a reservation.

Name: ${name}
Date: ${date}
Time: ${time}
Guests: ${guests}
Email: ${email}
----------------
Sent from Reservation Form`;

                // チュニジアの電話番号 (国番号 216)
                const phone = "21624986077";

                // URL生成
                const url = `https://wa.me/${phone}?text=${encodeURIComponent(msg)}`;

                // 遷移
                window.location.href = url;
            }

            // === 3. Date Picker Logic (既存) ===
            $(document).ready(function() {
                const $dateInput = $('#date');

                // 年末年始休業チェック
                $dateInput.on('change', function() {
                    const selectedDate = new Date($(this).val());
                    const start = new Date(2025, 11, 31); // 2025-12-31
                    const end = new Date(2026, 0, 4); // 2026-01-04

                    if (selectedDate >= start && selectedDate <= end) {
                        alert('Sorry, we are closed from Dec 31 to Jan 4 for New Year holidays.');
                        $(this).val('');
                        return;
                    }
                });

                // 日付範囲制限
                const today = new Date();
                const maxDate = new Date();
                // configから値が取れない場合のフォールバックを入れています
                const bookingDays = {{ config('reservation_bn.booking_end_days', 60) }};
                maxDate.setDate(today.getDate() + bookingDays);

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
