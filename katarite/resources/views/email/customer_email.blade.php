<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>カスタマーメール</title>
</head>
<body>
    <p>ご契約誠にありがとうございます。ご相談相手の連絡先は下記の通りになります。</p>
    ----------------------------------------------------------------------------------
    <p>お相手様メールアドレス：{{ $inputs_customer['talker_email'] }}</p>
    <p>話者名：{{ $inputs_customer['talker_name'] }}</p>
    <p>語り内容：{{ $inputs_customer['title'] }}</p>
    <p>1時間あたりの料金：{{ $inputs_customer['price'] }}</p>
    ----------------------------------------------------------------------------------
    <p>今後とも、Katariteをよろしくお願いします。</p>
</body>
</html>
