<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        h1{
            float: left;
            margin:20px;
            text-align: center;
        }
            
        .aa{float: left;
            margin:40px;
            text-align: center;
            font-size: 25px;
            color: lightseagreen;
            }
        a{text-decoration: none;
        color: lightseagreen;
        }
        body{
                background-image:url(../img/1.jpg); 
                background-size:100%;
                background-repeat:no-repeat;
                margin: 0 auto;
                text-align:center;
                
                }
        .hx{margin:-20px auto;

            }
        
        .nav{
            width: 100%;
            height:100px;
            background-color:rgb(255,255,255,0.7);
            color: #808080;
            }
        .logo{
            width: 100px;
            height:100px;
            background-image: url(../img/6.png);float: right;
        }
	
    </style>
    
</head>
<body>
	<div class="nav">
		<h1>
			<a href="../index.php" style="color:lightseagreen">主页</a> 
		</h1>
		<div class="aa">
			<a href="../add_postPage.php" style="color:lightseagreen">添加</a>
		</div>
		<div class="aa">关于我们</div>
		<div class="logo"></div>
   </div><br/>
</body>
</html>