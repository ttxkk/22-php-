<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>主页</title>
</head>
<body>
    <?php
        require('navigation.php');//导航栏
        if($_SESSION['is_login']===TRUE){
            $user = $_SESSION['user'];
            echo "登录成功！<br>欢迎回来：{$user}"; 
        }else{
            $_SESSION['tips']='您还未登录，请先登录';
            header("Refresh:1;url=loginPage.php");
        }
        @$zhuXiao = $_POST["zhuXiao"];
        echo "<br>";
        if($zhuXiao==1){
            $_SESSION['is_login']=FALSE;
            $_SESSION['user']='';
            header("Refresh:0.2;url=loginPage.php");
        }
    ?>

    <form action="" method="post">
            <button name="zhuXiao" value="1" style="float:left" >登出</button>
    </form>
    
    <?php
        require('post_list.php');//帖子列表
    ?>

    

</body>
</html>