<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký người dùng</title>
</head>
<body>
<form method="post">
    Ten Nguoi Dung : <input type="text" name="user">
    Email : <input type="text" name="email">
    Dien Thoai : <input type="text" name="phone">
    <input type="submit" value="Dang Nhap">
</form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = $_POST["user"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    if (empty($user)){
        echo "Thieu ten dang nhap";
    } else if (empty($email)){
        echo "thieu email";
    } else if (empty($phone)) {
        echo "thieu so dien thoai";
    } else {
        return true;
    }
}
?>