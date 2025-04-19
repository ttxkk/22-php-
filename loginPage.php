<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginPage.css">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="text" name="user" placeholder="输入用户名">
        <input type="password" name="psw" placeholder="输入密码">
        <input type="text" name="yzm" placeholder="输入验证码">
        <img src="captcha.php" alt="验证码"><br>
        <button type="submit">登录</button>
    </form>
    <?php require('tips.php'); ?>
    <h4>如果你还未注册，请先 <a href="registerPage.php">注册</a> </h4>
    <a href="admin/loginPage.php">
        <button>管理员</button>
    </a>

</body>
</html>