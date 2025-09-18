<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="../css/Contact.css">

</head>

<body>
    <header class="header">
        <div class="header_inner">
            <a class="header_logo" href="/">FashionablyLate</a>
        </div>
    </header>

    <main>
        <div class="contact-form">
            <div class="contact-form_heading">
                <h3>Contact</h3>
            </div>
            <form class="form">
                <div class="form_group">
                    <div class="form_group-titel">
                        <span class="form_group-titel">お名前</span>
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
                    <div class="form_group-titel">
                        <span class="form_group-titel">性別</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_input-text">
                            <input type="text" name="name" placeholder="" />
                        </div>
                        <div class="form_error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-titel">
                        <span class="form_group-titel">メールアドレス</span>
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
                    <div class="form_group-titel">
                        <span class="form_group-titel">電話番号</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_input-text">
                            <input type="text" name="tel" placeholder="000000000" />
                        </div>
                        <div class="form_error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-titel">
                        <span class="form_group-titel">住所</span>
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
                    <div class="form_group-titel">
                        <span class="form_group-titel">建物名</span>
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
                    <div class="form_group-titel">
                        <span class="form_group-titel">お問い合わせの種類</span>
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
                    <div class="form_group-titel">
                        <span class="form_group-titel">お問い合わせ内容</span>
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
                <div class="form_button">
                    <button class="form_button-submit" type="submit">
                        確認画面
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>