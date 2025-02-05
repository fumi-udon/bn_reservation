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
    <h1>Setting</h1>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Edit Configuration</h4>
                </div>

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

                    <form method="POST" action="{{ route('ki-configurations.update', $configuration->id) }}">
                        @csrf
                        @method('PUT')


                        <div class="mb-3">
                            <label for="page_id" class="form-label">Page ID (read only)</label>
                            <input type="text" class="form-control @error('page_id') is-invalid @enderror" 
                                   id="page_id" name="page_id" value="{{ old('page_id', $configuration->page_id) }}" readonly required>
                        </div>

                        <div class="mb-3">
                            <label for="status1" class="form-label">Status</label>
                            <input type="text" class="form-control @error('status1') is-invalid @enderror" 
                                   id="status1" name="status1" value="{{ old('status1', $configuration->status1) }}" required>
                        </div>
<!-- 
                        <div class="mb-3">
                            <label for="name1" class="form-label">Name1</label>
                            <input type="text" class="form-control @error('name1') is-invalid @enderror" 
                                   id="name1" name="name1" value="{{ old('name1', $configuration->name1) }}" required>
                        </div> -->

                        <div class="mb-3">
                            <label for="text1" class="form-label">仕様 (read only)</label>
                            <textarea class="form-control @error('text1') is-invalid @enderror"
                                id="text1" 
                                name="text1" 
                                rows="4"
                                readonly>{{ old('text1', $configuration->text1) }}</textarea>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('ki-configurations.index') }}" class="btn btn-secondary me-2">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</section>
<!-- Main Content END-->

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQueryのスクリプト -->
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
