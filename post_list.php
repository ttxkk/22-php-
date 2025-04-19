<?php
require('tips.php');
require('Sql.php');
$table_name = 'post_content';
$conn = new test1();//调用类
$conne = $conn->connect();//调用连接数据库方法
if($conne){//连接成功
    // $btn = $_GET['next']? $_GET['next'] : 0;
    // echo "1:{$btn};<br>";
    $offset = 0;
    // for($i=0;$_GET['next']==1;$i+=3){
    //     $offset = $i;
    //     if($btn==1){
    //         $offset+=3;
    //         $btn=0;
    //         $_GET['next']=0;
    //         echo "2:{$btn};<br>";
    //     }
    // }

    // if(isset($_SESSION['next'])){
    //     $_SESSION['next']=$_SESSION['next']+1;
    // }else{
    //     $_SESSION['next']=1;
    // }
    // echo $_SESSION['next'];


    //编写查询语句并执行
    $equal="select *
            from $table_name order by pid desc";
    $exeSql=$conne->query($equal);
    $post_result = mysqli_fetch_all($exeSql);
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
                    require 'post_list_Page.html';
                    break;
            }
        }
    }
    mysqli_free_result($exeSql);//释放
}
$conne->close();




?>