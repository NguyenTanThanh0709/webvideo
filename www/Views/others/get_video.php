<?php 
    require_once("connectdb.php");

    $username = $_POST["username"];
    $sql = "SELECT * FROM video WHERE mode = 0";
    try{
        $conn->query($sql);
        echo json_encode(array('status'=>true, 'data'=>"Thành công"));
    }catch(PDOException $e){
        die(json_encode(array('status'=>false, 'data'=>$e->getMessage())));
    }
?>