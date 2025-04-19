<?php
require('../tips.php');
require('../Sql.php');
require('navigation.php');
$table_name = 'post_content';
$conn = new test1();//调用类
$conne = $conn->connect();//调用连接数据库方法
if($conne){//连接成功

    $id = $_GET['act'];
    //查询文章id对应的文章内容
    $equal="select *
            from $table_name where pid = $id";
    $exeSql=$conne->query($equal);
    $post_result = mysqli_fetch_all($exeSql);
    //遍历并输出内容
    foreach($exeSql as $key=>$value){
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
                case "update_time":
                    $update_time = $value1;
                    break;
                case "pid":
                    $pid = $value1;
                    break;
                case "p_uid":
                    $p_uid = $value1;
                    require 'detail.html';
                    break;
            }
        }
    }

    mysqli_free_result($exeSql);//释放
}else{
    echo "连接失败";
}
$conne->close();




?>