<?php 
    require_once("connectdb.php");

    $username = $_COOKIE["username"];
    $id = (int)$_POST["id"];
    $mode = (int)$_POST["mode"];
    try{
        $sql = "UPDATE video SET mode = $mode WHERE id = id and username = '$username'"; 
        $data = $conn->query($sql);
        echo json_encode(array('status'=>true, 'data'=>'Thay đổi chế độ thành công'));
    }catch(PDOException $e){
        echo json_encode(array('status'=>false, 'data'=>$e->getMessage()));
    }
?>