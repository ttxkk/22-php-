<?php
    session_start();
    require('../tips.php');
    require('../Sql.php');
    $table_name = 'post_content';
    $conn = new test1();//调用类
    $conne = $conn->connect();//调用连接数据库方法
    if($conne){//连接成功
        $id = $_POST['delete'];
        //编写查询语句并执行
        $delete = "DELETE FROM post_comment where id = $id";
        // $exeSql=$conne->query($delete);
        echo $pid;
    }
    $conne->close();
?>