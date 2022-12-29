<?php 
    setcookie("username", "", time() - 3600);
    echo json_encode(array('status'=>true, 'data'=>'Đăng xuất thành công'));
?>