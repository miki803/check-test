
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
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
                <h2>Confirm</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div class="confirm-table">
                    <table class="confirm-table_inner">
                        <tr class="confirm-table_row">
                            <th class="confirm-table_header">お名前</th>
                            <td class="confirm-table_text">{{ $contact['first_name'] }}</td>
                            <td class="confirm-table_text">{{ $contact['last_name'] }}</td>
                        </tr>
                        <tr class="confirm-table_row">
                            <th class="confirm-table_header">性別</th>
                            <td class="confirm-table_text">{{ $contact['gender'] }}</td>
                        </tr>
                        <tr class="confirm-table_row">
                            <th class="confirm-table_header">メールアドレス</th>
                            <td class="confirm-table_text">
                                {{ $contact['email'] }}
                            </td>
                        </tr>
                        <tr class="confirm-table_row">
                            <th class="confirm-table_header">電話番号</th>
                            <td class="confirm-table_text">
                                {{ $contact['tel'] }}
                            </td>
                            <td class="confirm-table_text">
                                {{ $contact['tel'] }}
                            </td>
                            <td class="confirm-table_text">
                                {{ $contact['tel'] }}
                            </td>
                        </tr>
                        <tr class="confirm-table_row">
                            <th class="confirm-table_header">住所</th>
                            <td class="confirm-table_text">
                                {{ $contact['address'] }}
                            </td>
                        </tr>
                        <tr class="confirm-table_row">
                            <th class="confirm-table_header">建物名</th>
                            <td class="confirm-table_text">
                                {{ $contact['building']  }}
                            </td>
                        </tr>
                        <tr class="confirm-table_row">
                            <th class="confirm-table_header">お問い合わせの種類</th>
                            <td class="confirm-table_text">
                                {{ $contact['category'] }}
                            </td>
                        </tr>
                        <tr class="confirm-table_row">
                            <th class="confirm-table_header">お問い合わせ内容</th>
                            <td class="confirm-table_text">
                                {{ $contact['message'] }}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form_button">

                    <button class="form_button-submit" type="submit">送信</button>
                    <button class="form_button-submit" type="button">修正</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>