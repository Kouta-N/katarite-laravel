<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>話者用メール</title>
</head>
<body>
    <p>ご相談を受け付けました。契約内容は下記の通りになります。</p>
    ----------------------------------------------------------------------------------
    <p>お相手様メールアドレス：{{ $inputs_talker['customer_email'] }}</p>
    <p>語り内容：{{ $inputs_talker['title'] }}</p>
    <p>1時間あたりの料金：{{ $inputs_talker['price'] }}</p>
    ----------------------------------------------------------------------------------
    <p>ご利用誠にありがとうございます。</p>
</body>
</html>
