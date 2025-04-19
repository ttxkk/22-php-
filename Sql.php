<?php
class test1{
    
    public function connect(){
        $dbHost = 'localhost';
        $dbName = 'admin';
        $dbPsw = '123456';
        //创建连接
        $conn = new mysqli($dbHost, $dbName,$dbPsw);
        //连接测试
        $db = 'db_8';
        $sql="use $db";
        $res = mysqli_query($conn,$sql);
        if($res===TRUE){
            return $conn;
        }else{
            return FALSE;
        }
    }




}


?>