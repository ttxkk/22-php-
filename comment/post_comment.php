<?php
    session_start();
    $pid = $_GET['act'];
    $table_name = 'post_comment';
    $dbHost = 'localhost';
    $dbName = 'admin';
    $dbPsw = '123456';
    //创建连接
    $conn = new mysqli($dbHost, $dbName,$dbPsw);
    //连接测试
    $db = 'db_8';
    $sql="use $db";
    $uid = $_SESSION['userID'];
    $res = mysqli_query($conn,$sql);
    if($res===TRUE){
        $equal="select *
        from $table_name where c_pid=$pid
        order by id desc";//asc升序排序 ; desc降序排序
        $exeSql=$conne->query($equal);
        foreach($exeSql as $key=>$value){
            foreach($value as $key1=>$value1){
                switch($key1){
                    case "id":
                        $c_id = $value1;
                        break;
                    case "comment":
                        $comment = $value1;
                        break;
                    case "c_uid":
                        $c_uid = $value1;
                        
                        break;
                    case "c_pid":
                        $c_pid = $value1;
                        break;
                    case "create_time":
                        $create_time = $value1;
                        require 'post_comment_Page.html';
                        break;
                }
            }
        }
        

    }else{
        echo "连接失败";
    }
    $conne->close();
?>