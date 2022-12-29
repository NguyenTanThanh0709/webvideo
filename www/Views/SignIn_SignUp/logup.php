<?php 
    require_once("../others/connectdb.php");

    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    $sql = "SELECT * FROM user WHERE username = '$username'"; 
    $data = $conn->query($sql);
    if($data->num_rows != 0){
        die(json_encode(array('status'=>false, 'data'=>'username đã được sử dụng')));
    }else{
        $sql = "INSERT INTO user (username, password, full_name, email) VALUES(?, ?, ?, ?)";
        $sttm = $conn->prepare($sql);
        $sttm->bind_param("ssss", ...[$username, $password, $fullname, $email]);
        $sttm->execute();
        echo json_encode(array('status'=>true, 'data'=>'Tạo tài khoản thành công'));
    }
    $conn->close();
?>