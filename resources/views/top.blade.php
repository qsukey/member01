<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員一覧</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ url('/register') }}" class="btn btn-link">>> 登録</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">名前</th>
                    <th scope="col">電話番号</th>
                    <th scope="col">メールアドレス</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                    <tr>
                        <td>{{$member -> name}}</td>
                        <td>{{$member -> phone}}</td>
                        <td>{{$member -> email}}</td>
                        <td><a href="/edit/{{$member -> id}}" class="btn btn-link">>> 編集</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>