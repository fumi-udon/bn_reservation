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
    <link href="{{ asset('css/ki_configurations.css') }}" rel="stylesheet">


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
    <!-- <h2>Ki Configurations</h2> -->

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>

                    <th>Page ID</th>
                    <th>Status</th>
                    <th>仕様</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($configurations as $config)
                    <tr>

                        <td>{{ $config->page_id }}</td>
                        <td>{{ $config->status1 }}</td>
                        <td>{!! nl2br(e($config->text1)) !!}</td>
                        <td>
                            <a href="{{ route('ki-configurations.edit', $config->id) }}" 
                               class="btn btn-sm btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $configurations->links() }}
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


// Ki Configurations の動的な機能を強化
$(document).ready(function() {
    // ステータスバッジのスタイリング
    $('.table tbody tr').each(function() {
        const statusCell = $(this).find('td:nth-child(2)');
        const status = statusCell.text().trim();
        
        // ステータステキストをバッジでラップ
        const badgeClass = status.toLowerCase() === 'active' ? 'status-active' : 'status-inactive';
        statusCell.html(`<span class="status-badge ${badgeClass}">${status}</span>`);
    });

    // テーブル行のホバーエフェクト
    $('.table tbody tr').hover(
        function() {
            $(this).find('.btn-primary').addClass('show');
        },
        function() {
            $(this).find('.btn-primary').removeClass('show');
        }
    );

    // アラートの自動非表示
    $('.alert-success').delay(3000).fadeOut(500);

    // レスポンシブテーブルのスクロールインジケータ
    const tableContainer = $('.table-responsive');
    if (tableContainer[0].scrollWidth > tableContainer[0].clientWidth) {
        tableContainer.addClass('has-scroll');
    }
});
</script>
    @stack('scripts')
</body>
</html>
