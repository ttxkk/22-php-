<?php
    //引进导航栏
    require('navigation.php');
    require('../Sql.php');
    $table_name = 'post_content';
    $conn = new test1();//调用类
    $conne = $conn->connect();//调用连接数据库方法
    if($conne){//连接成功
                $p_uid1 = $_SESSION['userID'];//获取已登录用户id
        //查询POST表中和用户表p_uid和uid相同的数据并显示
        $sql = "select * from post_content as p,table_user as u 
                where p.p_uid = u.uid and u.uid = $p_uid1
                order by p.pid desc";
        $exeSql = $conne->query($sql);//执行查询
        $post_result = mysqli_fetch_all($exeSql);//将查询到的结果转换为数组
        //二维数组所以遍历两遍--foreach()是遍历数组的函数
        foreach($exeSql as $key=>$value){
            foreach($value as $key1=>$value1){
                switch($key1){
                    case "pid":
                        $pid = $value1;
                        break;
                    case "title":
                        $title = $value1;
                        break;
                    case "content":
                        $content = $value1;
                        break;
                    case "create_time":
                        $create_time = $value1;
                        break;
                    case "p_uid":
                        $p_uid = $value1;
                        break;
                    case "update_time":
                        $update_time = $value1;
                        require 'pc_post_list_Page.html';
                        break;
                }
            }
        }
        mysqli_free_result($exeSql);//释放内存
    }
    $conne->close();//关闭连接
    


?>