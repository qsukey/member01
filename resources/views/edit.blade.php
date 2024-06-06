<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員編集</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">会員編集 会員ID: {{$member->id}} </h3>
            </div>
            <div class="card-body">
                <!-- 編集フォーム -->
                <form action="{{ route('update', $member->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">名前</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$member->name}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">電話番号</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{$member->phone}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">メールアドレス</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$member->email}}" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">編集</button>
                    </div>
                </form>
                
                <!-- 削除フォーム -->
                <form action="{{ route('delete', $member->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-danger" type="submit">削除</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>