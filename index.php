<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>主页</title>
    <style type="text/css">
        button{
            width: 100px;
            height: 3s0px;
            margin: 10px auto;
            text-align: center;
            font-size: 25px;
            background-color:white;
            opacity: 0.7;
            border-radius:5px;
            border: none;
            color:#909090;
        }
        
        .d{
            font-size:25px;
            margin: 0px auto;
            text-align: center;
            color: #707070;
        }
        .box{
            margin: 10px auto;
            width:70%;
            background-color:rgb(255,255,255,0.7);
            opacity: 80%;
        }
	</style>
</head>
<body>
    <?php
        require('navigation.php');//导航栏
        if($_SESSION['is_login']===TRUE){
            $user = $_SESSION['user'];
            $uid = $_SESSION['userID'];
            echo "uid:{$uid}<br>";
            echo "登录成功！欢迎回来：{$user}"; //欢迎页面
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
            <button name="zhuXiao" value="1" >登出</button>
    </form>
    
    <div class="box">
        <?php
            require('post_list.php');//帖子列表
        ?>
    </div>
    

    

</body>
</html>