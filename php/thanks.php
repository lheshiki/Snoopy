<?php
$email = $_POST["email"];
$title = "ご予約ありがとうございました";
$message = "予約内容確認\n";

$message .= "日付：" .$_POST["date"]."\n";
$message .= "時間：" .$_POST["date_selectTime"]."\n";
$message .= "大人数：" .$_POST["data_adult"]."\n";
$message .= "子供数：" .$_POST["data_child"]."\n";
$message .= "関：" .$_POST["seat"]."\n";
$message .= "姓：" .$_POST["last_name"]."\n";
$message .= "名：" .$_POST["first_name"]."\n";
$message .= "セイ：" .$_POST["last_name_kana"]."\n";
$message .= "メイ：" .$_POST["first_name_kana"]."\n";
$message .= "電話番号：" .$_POST["phone_number"]."\n";
$message .= "メールアドレス：" .$_POST["email"]."\n";

// echo $email;
// echo "<br>";
// echo $title;
// echo "<br>";
// echo $message;

if (mb_send_mail($email,$title,$message)) {
    echo '予約完了';
    } else {
    echo '予約失敗';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thanks</title>
</head>
<body>
    <h1>ご予約ありがとうございました</h1>
    <p>予約内容確認メールが届いたことを確認し、店鋪にお越しいただいた時にお見せできるように準備お願いいたします</p>
</body>
</html>