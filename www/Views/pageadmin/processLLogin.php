<?php

    require '../../admin/db.php';
    if(isset($_POST['sign-inadmin']) && isset($_POST['admin-name']) && isset($_POST['passwordadmin'])){
            if(!empty($_POST['admin-name']) && !empty($_POST['passwordadmin'])){
                $useradmin = $_POST['admin-name'];
                $pass = $_POST['passwordadmin'];

        // echo $useradmin;
        // echo $pass;

                 $sql = "SELECT * FROM `user` where `username` = '$useradmin' and `password` = '$pass' and `isAdmin` = 1;";
                            
                try{
                    $result = $conn->query($sql);
                    // echo json_encode(array('status'=>true, 'data'=>"Thành công"));
                    if(mysqli_num_rows($result) == 1){
                        $each =  mysqli_fetch_array($result);
                        session_start();
                        $_SESSION['userADMIN'] = $each['username'];
                        $_SESSION['level'] = $each['isAdmin'];
                        // print_r($_SESSION['level']);
                // exit;
                        header('location:pageMain.php');
                exit;
                    }
                }catch(PDOException $e){
                    // die(json_encode(array('status'=>false, 'data'=>$e->getMessage())));
                }
            }
        
    }
    $conn->close();
    header('location:index.php')

?>