<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" />

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
                <h2>Contact</h2>
            </div>
            <form class="form" action="/confirm" method="post">
                @csrf
                <div class="form_group">
                    <label class="form_group-title">お名前 <span class="required">※</span>
                    </label>
                    <div class="form_group-content">
                        <input type="text" name="first_name" placeholder="例: 山田 " required>
                        <input type="text" name="last_name" placeholder="例: 太郎" required>

                        @error('name')
                        <div class="form_error">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="form_group">
                    <label class="form_group-title">性別 <span class="required">※</span>
                    </label>
                    <div class="form_group-content">
                        <label>
                            <input type="radio" name="gender" value="男性" required> 男性
                        </label>
                        <label>
                            <input type="radio" name="gender" value="女性"> 女性
                        </label>
                        <label>
                            <input type="radio" name="gender" value="その他"> その他
                        </label>
                        @error('gender')
                        <div class="form_error">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="form_group">
                    <label class="form_group-title">メールアドレス <span class="required">※</span>
                    </label>
                    <div class="form_group-content">
                        <input type="email" name="email" placeholder="例: test@example.com" required>
                        @error('email')
                        <div class="form_error">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="form_group">
                    <label class="form_group-title">電話番号 <span class="required">※</span>
                    </label>
                    <div class="form_group-content">
                        <input type="tel" name="tel" placeholder="080" required>
                        <input type="tel" name="tel" placeholder="080" required>
                        <input type="tel" name="tel" placeholder="080" required>
                        @error('tel')
                        <div class="form_error">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="form_group">
                    <label class="form_group-title">住所 <span class="required">※</span>
                    </label>
                    <div class="form_group-content">
                        <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" required>
                        @error('address')
                        <div class="form_error">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="form_group">
                    <label class="form_group-title">建物名</label>
                    <div class="form_group-content">
                        <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101">
                    </div>
                </div>

                <div class="form_group">
                    <label class="form_group-title">お問い合わせの種類<span class="required">※</span>
                    </label>
                    <div class="form_group-content">
                        <select name="category" required>
                            <option value="">選択してください</option>
                            <option value="商品について">商品について</option>
                            <option value="商品の交換について">商品の交換について</option>
                            <option value="その他">その他</option>
                        </select>
                        @error('category')
                        <div class="form_error">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="form_group">
                    <label class="form_group-title">お問い合わせ内容<span class="required">※</span>
                    </label>
                    <div class="form_group-content">
                        <textarea name="message" rows="5" placeholder="お問い合わせ内容をご記入ください" required></textarea>
                        @error('message')
                        <div class="form_error">{{$message}}</div>
                        @enderror
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