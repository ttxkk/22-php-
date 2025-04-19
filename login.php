<?php
    $session_path = '../session_save_dir/';
    //启动session并设置为false
    session_start();
    require('Sql.php');
    $_SESSION['is_login']=FALSE;

    //获取表单的用户名和密码
    $userName = trim($_POST['user']);
    $psw = trim($_POST['psw']);

    //获取验证码并判断
    $str0 = $_SESSION['yzm'];//获取验证码
    $str1=$_POST['yzm'];//获取用户输入的验证码
    if(strcasecmp($str1,$str0)==0){//两个字符串相同则结果为0
        //连接数据库
        $conn = new test1();//调用类
        $conne = $conn->connect();//调用连接数据库方法
        if($conne){//连接成功
            $table_name = 'table_user';//表名
            //数据库查询语句
            $equal="SELECT * from $table_name where userName='$userName' and psw='$psw'";
            $exeSql=$conne->query($equal);
            if(mysqli_num_rows($exeSql)>0){
                $result = mysqli_fetch_assoc($exeSql);//获取关联数组（字符串）
                foreach($result as $key=>$value){
                    switch($key){
                        case 'uid':
                            $uid = $value;
                            break;
                        case 'userName':
                            $uName = $value;
                            break;
                    }
                }
                $_SESSION['is_login']=TRUE;
                $_SESSION['user']=$uName;
                $_SESSION['userID']=$uid;
                // 登录成功跳转
                header("Refresh:0;url=index.php");
            }else{
                $_SESSION['tips']='用户名或密码错误';
                echo '登录失败'.$conne->error;
                header("Refresh:0;url=loginPage.php");
            }
        }else{
            echo '<br>使用数据库失败：'.$conne->error;
        }
        $conne->close();
    }else{
        //失败跳转
        $_SESSION['tips']='验证码错误';
        header("Refresh:0;url=loginPage.php");
        // echo '验证码验证失败<br>';
    }

  



?>





