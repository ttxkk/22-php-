<?php
    require('../Sql.php');

    session_start();
    $_SESSION['is_login']=FALSE;

    //获取表单的用户名和密码
    $adminName = trim($_POST['user']);
    $psw = trim($_POST['psw']);

    //获取验证码并判断
    $str0 = $_SESSION['yzm'];//获取验证码
    $str1=$_POST['yzm'];//获取用户输入的验证码
    if(strcasecmp($str1,$str0)==0){//strcasecmp()对比俩个字符串是否相同；不区分大小写
        $conne = new test1();//调用类
        $conne = $conne->connect();//调用连接数据库方法
        if($conne){//连接成功
            $table_name = 'admin';//表名
            //数据库查询语句
            $equal="select name,password from $table_name 
                    where name='$adminName' and password='$psw'";
            $exeSql=mysqli_query($conne,$equal);
            if(mysqli_num_rows($exeSql)>0){
                $_SESSION['is_login']=TRUE;
                $_SESSION['user']=$adminName;
                //登录成功跳转
                header("Refresh:0;url=index.php");
            }else{
                $_SESSION['tips']='账号或密码错误';
                echo '登录失败';
                header("Refresh:0;url=loginPage.php");
            }
        }
    }else{
        //失败跳转
        $_SESSION['tips']='验证码错误';
        header("Refresh:0;url=loginPage.php");
    }
    $conne->close();
    

?>