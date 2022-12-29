<?php 
    require_once("../others/connectdb.php");


    if(!isset($_POST["user-name"]) || !isset($_POST["password"])){
        die(json_encode(array('status'=>true, 'data'=>"Invalid parameters!")));
    }

    $username = $_POST["user-name"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE username = '$username'"; 
    $data = $conn->query($sql);
    if($data->num_rows != 0){
        $r = $data->fetch_assoc();
        if($r['password'] == $password){
            setcookie("username", $username);
            echo json_encode(array('status'=>true, 'data'=>'Đăng nhập thành công'));
        }else echo json_encode(array('status'=>false, 'data'=>'Sai mật khẩu'));
    }else{
        die(json_encode(array('status'=>false, 'data'=>'Tài khoản không tồn tại')));
    }
    $conn->close();
?>