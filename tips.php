<?php
if(!empty($_SESSION['tips'])==TRUE){//如果tips为非空
    echo '<b style="color:red">提示:</b><br>';
    echo $_SESSION['tips'];//输出提示
    $_SESSION['tips']='';//清空tips
}
?>