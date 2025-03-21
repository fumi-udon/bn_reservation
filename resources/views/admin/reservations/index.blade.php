<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>予約管理</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('admin.data') }}">管理画面</a>
            <div class="ms-auto">
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-light">
                        <i class="bi bi-box-arrow-right"></i> ログアウト
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">予約一覧</h5>
                <div>
                    <a href="{{ route('admin.data') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> 戻る
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>予約日</th>
                                <th>時間</th>
                                <th>人数</th>
                                <th>名前</th>
                                <th>メール</th>
                                <th>電話番号</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($reservations as $reservation)
                                <tr>
                                    <td>{{ \Carbon\Carbon::parse($reservation->date)->format('Y/m/d') }}</td>
                                    <td>{{ $reservation->time }}</td>
                                    <td>{{ $reservation->guests }}名</td>
                                    <td>{{ $reservation->name }}</td>
                                    <td>{{ $reservation->email }}</td>
                                    <td>{{ $reservation->phone }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">予約データがありません</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
