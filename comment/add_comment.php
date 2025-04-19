<?php
    session_start();
    require('../Sql.php');
    //获取标题，内容
    $comment = trim($_POST['comment']);//获取评论并去除字符串两边的空格
    $p_id = $_POST['pid'];
    //连接数据库
    $conn = new test1();//调用类
    $conne = $conn->connect();//调用连接数据库方法
    if($conne){//连接成功
        echo '<br>连接成功';
        $userName = $_SESSION['user'];
        $table_name = 'post_comment';
        $c_uid = $_SESSION['userID'];//评论的用户id
        //插入数据语句
        $insData = "INSERT INTO $table_name(comment, c_uid, c_pid, create_time)
        values ('$comment','$c_uid', '$p_id', NOW())";
        //插入判断是否为空
        if(!empty($comment) && !empty($c_uid)){
            $a1 = $conne->query($insData);
                $_SESSION['tips']='评论成功';
                header("Refresh:0.7;url=../detail.php?act=$p_id");
            if(mysqli_num_rows($a1)>0){
                echo "评论成功";
            }
        }else {
            $_SESSION['tips']='评论失败';
        }   
    }else{
        echo "评论失败";
    }
    //关闭连接
    $conne->close();
   echo $_SESSION['tips'];
?>


