<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />

</head>

<body>
    <header class="header">
        <div class="header_inner">
            <a class="header_logo" href="/">
                FashionablyLate
            </a>
        </div>
        <div class="header_login">
            <button class="header_login-submit" type="submit">
                login
            </button>
        </div>
    </header>

    <main>
        <div class="contact-form_content">
            <div class="contact-form_heading">
                <h2>Register</h2>
            </div>
            <form class="form">
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="group-title">お名前</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_input-text">
                            <input type="text" name="name" placeholder="テスト太郎" />
                        </div>
                        <div class="form_error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="group-title">メールアドレス</span>
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
                        <span class="group-title">パスワード</span>
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
                        登録
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>