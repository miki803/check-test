
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="../css/Confirm.css">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header_inner">
            <a class="header_logo" href="/">FashionablyLate</a>
        </div>
    </header>
    
    <main>
        <div class="confirm-form">
            <div class="confirm-form_heading">
                <h3>Confirm</h3>
            </div>
            <form class="form">
                <div class="confirm-tablr">
                    <table class="confirm-table_inner">
                        <tr class="confirm-table_row">
                            <th class="confirm-table_header">お名前</th>
                            <td class="confirm-table_text">
                                <input type="text" name="name" value="山田 太郎" />
                            </td>
                        </tr>
                        <tr class="confirm-table_row">
                            <th class="confirm-table_header">性別</th>
                            <td class="confirm-table_text">
                                <input type="text" name="email" value="男性" />
                            </td>
                        </tr>
                        <tr class="confirm-table_row">
                            <th class="confirm-table_header">メールアドレス</th>
                            <td class="confirm-table_text">
                                <input type="email" name="email" value="test@example.com" />
                            </td>
                        </tr>
                        <tr class="confirm-table_row">
                            <th class="confirm-table_header">電話番号</th>
                            <td class="confirm-table_text">
                                <input type="tel" name="tel" value="08012345678" />
                            </td>
                        </tr>
                        <tr class="confirm-table_row">
                            <th class="confirm-table_header">住所</th>
                            <td class="confirm-table_text">
                                <input type="text" name="email" value="東京都" />
                            </td>
                        </tr>
                        <tr class="confirm-table_row">
                            <th class="confirm-table_header">建物名</th>
                            <td class="confirm-table_text">
                                <input type="text" name="email" value="颯マンション１０１" />
                            </td>
                        </tr>
                        <tr class="confirm-table_row">
                            <th class="confirm-table_header">お問い合わせの種類</th>
                            <td class="confirm-table_text">
                                <input type="text" name="email" value="商品の交換について" />
                            </td>
                        </tr>
                        <tr class="confirm-table_row">
                            <th class="confirm-table_header">お問い合わせ内容</th>
                            <td class="confirm-table_text">
                                <input type="text" name="email" value="届いた商品が注文していた商品ではありませんでした。商品の取り換えをお願いします。" />
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form_button">
                    <button class="form_button-submit" type="submit">送信</button>
                    <button class="form_button-submit" type="submit">修正</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>