<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/add_Post.css">
    <title>Document</title>
    <style type="text/css">
		
	</style>
</head>
<body>
    <?php
        require('navigation.php');
        require('tips.php');
    ?>

    <div class="box">
        <form action="add_post.php" method="post">
            <p>标题：</p>
            <input type="text" name="post_title">   
            <p>内容</p>
            <textarea name="post_content" id="" cols="120" rows="30"></textarea>
            <br>
            <button type="submit" value="1" name="submit">提交</button>
        </form>
    </div>
    
    
</body>
</html>