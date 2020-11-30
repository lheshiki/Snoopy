<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
</head>
<body>
　<div class="container">
            <h1>ご予約内容確認</h1>
        <?php
        $date = $_POST['date'];
        $time = $_POST['data_selectTime'];
        $adult = $_POST['data_adult'];
        $child = $_POST['data_child'];
        $seat = $_POST['seat'];
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $last_name_kana = $_POST['last_name_kana'];
        $first_name_kana = $_POST['first_name_kana'];
        $phone = $_POST['phone_number'];
        $email = $_POST['email'];
        ?>
        <p><span style="color:red;">*</span>日付:  <?php echo $date ;?></p>
        <p><span style="color:red;">*</span>時間:  <?php echo $time ;?></p>
        <p><span style="color:red;">*</span>大人数:  <?php echo $adult ;?></p>
        <p><span style="color:red;">*</span>子供数:  <?php echo $child ;?></p>
        <p><span style="color:red;">*</span>席番号:　<?php echo $seat ;?></p>
        <p><span style="color:red;">*</span>姓:　<?php echo $last_name ;?></p>
        <p><span style="color:red;">*</span>名:　<?php echo $first_name ;?></p>
        <p><span style="color:red;">*</span>セイ: <?php echo $last_name_kana ;?></p>
        <p><span style="color:red;">*</span>メイ: <?php echo $first_name_kana ;?></p>
        <p><span style="color:red;">*</span>電話番号: <?php echo $phone ;?></p>
        <p><span style="color:red;">*</span>メールアドレス: <?php echo $email ;?></p>

        <form method="POST" action="thanks.php">
                <input type="hidden" name="date" value="<?php echo $date; ?>">
                <input type="hidden" name="date_selectTime" value="<?php echo $time; ?>">
                <input type="hidden" name="data_adult" value="<?php echo $adult; ?>">
                <input type="hidden" name="data_child" value="<?php echo $child; ?>">
                <input type="hidden" name="seat" value="<?php echo $seat; ?>">
                <input type="hidden" name="last_name" value="<?php echo $last_name; ?>">
                <input type="hidden" name="first_name" value="<?php echo $first_name; ?>">
                <input type="hidden" name="last_name_kana" value="<?php echo $last_name_kana; ?>">
                <input type="hidden" name="first_name_kana" value="<?php echo $first_name_kana; ?>">
                <input type="hidden" name="phone_number" value="<?php echo $phone; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="submit" value="送信">
                <div>
                <button type="button" onclick="history.back()">戻る</button>
                </div>
        </form>
  </div>

</body>
</html>