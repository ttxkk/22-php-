<?php
require('../tips.php');
require('../Sql.php');
$table_name = 'post_content';
$conn = new test1();//调用类
$conne = $conn->connect();//调用连接数据库方法
if($conne){//连接成功
    $offset = 0;
    $id = $_POST['delete'];
    //编写查询语句并执行
    $delete = "DELETE FROM post_content where pid = $id";
    $exeSql=$conne->query($delete);
}else{
    echo "连接失败";
}
# 判定下执行结果
if(!$exeSql){
    header("Refresh:1;url=index.php");
    echo $error;
    exit;
}
# 判定删除是否真实成功
if(mysqli_affected_rows($conne)){
    header("Refresh:1;url=index.php");
    echo '删除成功！';
    exit;
}else{
    header("Refresh:1;url=index.php");
    echo '删除失败！';
    exit;
}
$conne->close();



?>