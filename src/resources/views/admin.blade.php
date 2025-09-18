<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="../css/Admin.css">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header_inner">
            <a class="header_logo" href="/">FashionablyLate</a>
        </div>
        <div class="header_logout">
            <button class="hesder_logout-submit" type="submit">
                logout
            </button>
        </div>
    </header>
    <main>
        <div class="confirm-form">
            <div class="confirm-form_heading">
                <h3>Admin</h3>
            </div>
            <div class="category__content">
                <form class="create-form">
                    <div class="create-form__item">
                        <input class="create-form__item-input" type="text" placeholder="テスト太郎">
                    </div>
                    <div class="create-form__item">
                        <input class="create-form__item-input" type="text" placeholder="テスト太郎">
                    </div>
                    <div class="create-form__item">
                        <input class="create-form__item-input" type="text" placeholder="テスト太郎">
                    </div>

                    <div class="create-form__item">
                        <label for="start"></label>
                        <input  type="date"
                                id="start"
                                name="trip-start"
                                value="2018-07-22"
                                min="2000-01-01"
                                max="2040-12-31" />
                    </div>
                    
                    <div class="create-form__button">
                        <button class="create-form__button-submit" type="submit">検索</button>
                        <button class="create-form__button-submit" type="submit">リセット</button>
                    </div>
                </form>
            </div>
        </div>
        
    </main>
</body>
</html>