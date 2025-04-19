<?php
    if(isset($_SESSION['JSQ'])){
        $_SESSION['JSQ']=$_SESSION['JSQ']+1;
    }else{
        $_SESSION['JSQ']=1;
    }
    echo $_SESSION['JSQ'];
    header("Refresh:1;url=index.php");
?>
