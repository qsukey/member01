<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>会員登録</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">名前</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="名前をご入力ください。" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">電話番号</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="電話番号をご入力ください。" required>
                            </div>
                            <div class="form-group">
                                <label for="email">メールアドレス</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="メールアドレスをご入力ください。" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">登録</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (Popper.js and jQuery) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>