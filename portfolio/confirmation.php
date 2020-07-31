<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Origin CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
    <title>メール送信完了</title>
    <style>
      .push-btn{
    width: 200px;
    background: #000;
    color: #fff;
    border: none;
    cursor: pointer;
    padding: 5px 10px;
    text-decoration: none;
}
    </style>
</head>
<body>
<?php
echo $_POST['formGroup'];
echo htmlspecialchars($_POST['formGroup']);
 ?>
<?php
 mb_language("Japanese");
 mb_internal_encoding("UTF-8");
 $name = $_POST['name'];
 $inquiry = $_POST['inquiry'];

 $to = "katuyoshimilktea@gmail.com";
 $subject = "サイトを見た人からのお問い合わせ";
 $message = $name."\n".$inquiry;
 $headers = "From: {$_POST['mail']}";
 
 if(mb_send_mail($to, $subject, $message, $headers)){
 echo "メールを送信しました";
 } else {
 echo "メールの送信に失敗しました";
 }
 ?>
 <p>※尚、メールアドレスの記載が間違っている場合、ご返答できませんのでご了承ください。</p>
 <p><a class="push-btn" href="https://katsu-works.com/portfolio/">戻る</a></p>
</body>
</html>