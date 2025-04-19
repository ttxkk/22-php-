<?php
    session_start();
    require('Sql.php');
    //获取表单的用户名和密码
    $userName = trim($_POST['user']);
    $psw = trim($_POST['psw']);
    //获取验证码并判断
    $str0 = $_SESSION['yzm'];//获取验证码
    $str1=$_POST['yzm'];//获取用户输入的验证码
    if(strcasecmp($str1,$str0)==0){
        //连接数据库
        $conn = new test1();//调用类
        $conne = $conn->connect();//调用连接数据库方法
        if($conne){//连接成功
            $table_name = 'table_user';//表名
            //查询用户名是否重复
            $inquUserName = "select userName from $table_name where $userName=userName";
            if($conne->query($inquUserName)){
                echo "{$userName}已存在";
            }else{
                //插入数据语句
                $insData = "INSERT INTO $table_name(userName,psw)
                values ('$userName','$psw') " ;
                //插入判断是否为空
                if(!empty($userName) && !empty($userName)){
                    $conne->query($insData);
                    $_SESSION['tips']='注册成功，可以登录';
                    header("Refresh:1;url=loginPage.php");
                }else {
                    $_SESSION['tips']='注册失败';
                    header("Refresh:0;url=registerPage.php");
                }
            }
           
        }else{
            echo '<br>使用数据库失败：'.$conne->error;
            header("Refresh:0.7;url=registerPage.php");
        } 
        $conne->close();

    }else{
        echo '验证码验证失败<br>';
        $_SESSION['tips']='验证码错误';
        header("Refresh:0;url=registerPage.php");
    }
    


    

   




?>