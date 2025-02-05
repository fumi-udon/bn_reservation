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

    <!-- Custom CSS 
    <link href="{{ asset('css/reservation.css') }}" rel="stylesheet">
-->
<style>
    /* Main content background styling */
/* 背景画像のオーバーレイを含む修正版 */
.main-content {
    position: relative;
    background: none; /* 直接の背景設定を削除 */
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
    background-image: url('{{ asset("images/reservation-bg.jpg") }}'); /* Laravel assetヘルパーを使用 */
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
    background-color: rgba(0, 0, 0, 0.5); /* 黒の透過オーバーレイ */
    z-index: -1;
}

/* コンテンツコンテナの背景も調整 */
.content-container {
    max-width: 800px;
    background: rgba(0, 0, 0, 0.4); /* より透明に */
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    position: relative; /* z-indexを機能させるため */
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
    .content-container {
    max-width: 600px;
    margin: 2rem auto;
    padding: 0 1rem;
}

    .card {
        border: none;
        border-radius: 10px;
    }

    .btn-success {
        background-color: #25D366;
        border: none;
        padding: 12px;
        font-size: 1.1rem;
    }

    .btn-success:hover {
        background-color: #128C7E;
    }

</style>
</head>
<body>
<!-- Navbar -->
@include('layouts.navbar')

@env('local')
    <div><h3>ローカル環境</h3></div>                
@endenv
<!-- Main Content ★ debug-->
<section class="main-content">
<div class="content-container">
    <h1>Contact Us</h1>
    
    <div class="card shadow">
        <div class="card-body">
<!-- フォームの修正 -->
<!-- フォーム部分の修正 -->
<form id="contactForm">
    @csrf
    <!-- Name -->
    <div class="mb-3">
        <label for="name" class="form-label">Name *</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <!-- Phone -->
    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number *</label>
        <input type="tel" class="form-control" id="phone" name="phone" required>
    </div>

    <!-- Inquiry Type -->
    <div class="mb-3">
        <label for="inquiryType" class="form-label">Type of Inquiry *</label>
        <select class="form-select" id="inquiryType" name="inquiryType" required>
            <option value="">Please select</option>
            <option value="Reservation">About Reservation</option>
            <option value="Employment">Employment</option>
            <option value="Business">Business Inquiry</option>
            <option value="Feedback">Feedback</option>
            <option value="Other">Other</option>
        </select>
    </div>

    <!-- Message -->
    <div class="mb-4">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
    </div>

    <!-- Submit Button -->
    <div class="d-grid">
        <button type="submit" class="btn btn-success">
            <i class="bi bi-whatsapp"></i> Contact via WhatsApp
        </button>
    </div>
</form>
        </div>
    </div>
</div></section>
<!-- Main Content END-->
<!-- Footer -->
@include('layouts.footer')

<script>
$(document).ready(function() {
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        
        // フォームデータの取得
        const name = $('#name').val();
        const phone = $('#phone').val();
        const inquiryType = $('#inquiryType').val();
        const message = $('#message').val();

        // バリデーション
        if (!name || !phone || !inquiryType) {
            alert('Please fill in all required fields');
            return;
        }

        // メッセージの作成
        const text = `* Form Contact page *
Name: ${name}
Phone: ${phone}
Type: ${inquiryType}
Message: ${message}`;

        // WhatsAppビジネス番号（チュニジアの国番号+電話番号）
        const phoneNumber = '21654872429';

        // WhatsAppリンクの生成
        const whatsappLink = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(text)}`;

        // デバッグ用
        console.log('Opening WhatsApp with:', whatsappLink);

        // WhatsAppを新しいウィンドウで開く
        window.open(whatsappLink, '_blank');
    });

    // 入力フィールドのリアルタイムバリデーション
    $('input[required], select[required]').on('change', function() {
        if (!$(this).val()) {
            $(this).addClass('is-invalid');
        } else {
            $(this).removeClass('is-invalid');
        }
    });
});
</script>
    @stack('scripts')
</body>
</html>
