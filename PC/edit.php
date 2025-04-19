<?php
    require('../tips.php');
    require('../Sql.php');
    $conn = new test1();//调用类
    $conne = $conn->connect();//调用连接数据库方法
    if($conne){//连接成功
        $table_name = 'post_content';
        $id = $_POST['edit'];
        //编写查询语句并执行
        $update = "SELECT *
                FROM $table_name
                where pid = $id";
        $exeSql1=$conne->query($update);
        $post_result = mysqli_fetch_all($exeSql1);
        foreach($exeSql1 as $key=>$value){
            foreach($value as $key1=>$value1){
                switch($key1){
                    case "title":
                        $title = $value1;
                        break;
                    case "content":
                        $content = $value1;
                        break;
                    case "create_time":
                        $create_time = $value1;
                        break;
                    case "pid":
                        $pid = $value1;
                        break;
                    case "p_uid":
                        $p_uid = $value1;
                        require 'edit.html';
                        break;
                }
            }
        }
    }else{
        echo "连接失败";
    }
    $conne->close();
?>