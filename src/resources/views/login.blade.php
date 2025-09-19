<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />

</head>

<body>
    <header class="header">
        <div class="header_inner">
            <a class="header_logo" href="/">FashionablyLate</a>
        </div>
        <div class="header_login">
            <button class="header_register-submit" type="submit">
                register
            </button>
        </div>
    </header>

    <main>
        <div class="login-form">
            <div class="login-form_heading">
                <h3>Login</h3>
            </div>
            <form class="form">
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_group-title">メールアドレス</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_input-text">
                            <input type="email" name="email" placeholder="test@example.com" />
                        </div>
                        <div class="form_error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_group-title">パスワード</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_input-text">
                            <input type="text" name="password" placeholder="パスワード" />
                        </div>
                        <div class="form_error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
                <div class="form_button">
                    <button class="form_button-submit" type="submit">
                        ログイン
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>