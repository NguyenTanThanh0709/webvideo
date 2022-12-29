<?php 
    require_once("connectdb.php");

    $username = $_COOKIE["username"];
    $sql = "SELECT * FROM video";
    try{
        $conn->query($sql);
        echo json_encode(array('status'=>true, 'data'=>"Thành công"));
    }catch(PDOException $e){
        die(json_encode(array('status'=>false, 'data'=>$e->getMessage())));
    }
?>