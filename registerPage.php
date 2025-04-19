<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginPage.css">
    <title>Document</title>
<!-- <style type="text/css">
    body{
            background-image:url(1.jpg); 
            background-size:100%;
            background-repeat:no-repeat;
            margin: 0 auto;
            text-align:center;
            font-size: 25px;
            } 
    form{
            width: 500px;
            height:650px;
            margin: 0 auto;
            background:pink; 
            opacity: 0.7;
            background-image:linear-gradient(pink,lightblue);
            border:5px solid gray;}
    input{
            height: 40px;
            
        } 
        
        
        button{
                    width: 100px;
                    height: 40px;
                    margin: 10px auto;
                    text-align: center;
                    font-size: 25px;
                    background-color:rgb(255,255,255,0.7);
                    border-radius:5px;
                    border: none;
                    color: #808080;
            }
            .logo{
                margin:-110px auto;
                
        }   
</style> -->
</head>
<body>
    <form action="register.php" method="post">
        <input type="text" name="user" placeholder="输入用户名">
        <input type="password" name="psw" placeholder="输入密码">
        <input type="text" name="yzm" placeholder="输入验证码">
        <img src="captcha.php" alt="验证码">
        <button type="submit">注册</button>
    </form>
        <a href="loginPage.php">
            <button>返回登录</button>
        </a>
        <br>
    <?php
        require('tips.php');
    ?>

</body>
</html>