<?php
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === "admin" && $password === "admin") {
        echo "Welcome" . " " . $username;
    } else {
        echo "Đăng nhập bị lỗi";
    }
}
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form đăng nhập</title>
    <stype type="text/css">

    </stype>
</head>
<body>
<form method="post">
    <div class="login">
        <h2>Login</h2>
        <input type="text" name="username" size="30" placeholder="username">
        <input type="password" name="password" size="30" placeholder="password" />
        <input type="submit" value="Sign in"/>
    </div>
</form>
</body>
