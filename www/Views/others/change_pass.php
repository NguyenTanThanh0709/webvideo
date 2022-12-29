<?php 
    require_once("connectdb.php");

    $username = $_COOKIE["username"];
    $oldpass = $_POST["oldpass"];
    $newpass = $_POST["newpass"];
    $confirm_pass = $_POST["confirm_pass"];
    if($newpass != $confirm_pass) 
        die(json_encode(array('status'=>false, 'data'=>'Mật khẩu nhập lại không khớp')));
    try{
        $sql = "UPDATE user SET password = '$newpass' WHERE username = '$username'"; 
        $data = $conn->query($sql);
        echo json_encode(array('status'=>true, 'data'=>'Thay đổi mật khẩu thành công'));
    }catch(PDOException $e){
        echo json_encode(array('status'=>false, 'data'=>$e->getMessage()));
    }
?>