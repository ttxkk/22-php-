<?php
    session_start();
    $a = 3;
    $get_data=$_POST['submit'];
    require('Sql.php');
    //获取标题，内容
    $post_title = $_POST['post_title'];
    $post_content = $_POST['post_content'];
    function add_post(){//创建函数add_post
        global $post_title;
        global $post_content;
        $table_name = 'post_content';
        $conn = new test1();//调用类test1(也叫实例化)
        $conne = $conn->connect();//调用连接数据库方法
        if($conne){//连接成功
            echo '<br>使用数据库成功';
            $p_uid = $_SESSION['userID'];//获取登录用户id
            //插入数据语句
            $insData = "INSERT INTO $table_name(title,content,create_time,p_uid,update_time)
            values ('$post_title','$post_content',NOW(), $p_uid,NOW()) ";
            //判断表单内容是否为空
            if(!empty($post_title) && !empty($post_content)){
                //不为空则执行插入语句
                $conne->query($insData);
                $_SESSION['tips']='添加成功';
                header("Refresh:1;url=index.php");
            }else {
                $_SESSION['tips']='添加失败';
            }
        }
        //关闭连接:连接在脚本执行完后会自动关闭。也可以使用该代码来关闭连接
        $conne->close();
    }
    //如果提交按钮被点击并传来内容则执行添加帖子函数
    if($get_data==1){
        add_post();
    }
   echo $_SESSION['tips'];//输出提示内容
?>


