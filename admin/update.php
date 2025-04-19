<?php
require('../tips.php');
require('../Sql.php');
$conn = new test1();//调用类
$conne = $conn->connect();//调用连接数据库方法
if($conne){//连接成功
    $table_name = 'post_content';
    //获取主页传来的id,标题,内容
    $id = $_POST['pid'];
    $title = $_POST['post_title'];
    $content = $_POST['post_content'];
    //编写查询语句并执行
    $update = "UPDATE post_content
            SET title='$title', content = '$content', update_time = NOW()
            where pid = $id";
    if(!empty($title) && !empty($content)){
        $exeSql=$conne->query($update);
        $_SESSION['tips']='更新成功';
        echo "更新成功";
        header("Refresh:0.7;url=index.php");
    }else {
        $_SESSION['tips']='添加失败';
    }
}else{
    echo '连接失败';
    header("Refresh:0.7;url=edit.php");
}
$conne->close();

?>