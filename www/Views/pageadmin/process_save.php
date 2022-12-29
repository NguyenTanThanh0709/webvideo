<?php
require '../../admin/db.php';

if(isset($_POST['ok'])){
    // print_r($_POST['id_video']);
    if(isset($_POST['save_'])){

        $id = (int)$_POST['id_video'];
        $trangthai = $_POST['save_'];
        if($trangthai == "1"){
            $query = "INSERT INTO `feature` (`id_video`) VALUES ('$id');";
            $result = $conn->query($query);
    
        }elseif($trangthai == "0"){
            $query = "INSERT INTO `vipham` (`id_video`) VALUES ('$id');";
            $result = $conn->query($query);
        }
    }
    elseif(isset($_POST['delete_'])){
        $id = (int)$_POST['id_video'];
        $trangthai = $_POST['delete_'];
        if($trangthai == "1"){
            $query = "DELETE FROM `feature` Where `id_video` = '$id';";
            $result = $conn->query($query);
    
        }elseif($trangthai == "0"){
            $query = "DELETE FROM `vipham` Where `id_video` = '$id';";
            $result = $conn->query($query);
        }
    }



}
$conn->close();
header('location:pageMain.php');


?>