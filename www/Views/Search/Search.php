<?php

// include "../../admin/db.php";

    // session_start();
        $result = '';
        // echo $_SESSION['nameInputSearch'];
    if(isset($_SESSION['nameInputSearch'])){
        $nameInput = $_SESSION['nameInputSearch'];
    // echo $nameInput;
    $query = "SELECT * FROM `video` WHERE `namevideo`  LIKE   '%$nameInput%' and `id_video` not in (SELECT `id_video` FROM `vipham`) ;";
                                $result = mysqli_query($conn, $query);
                                // $result = $conn->query($sql);
                                $result = $result->fetch_all();  
                                            // print_r($result[0]);
                                $_SESSION['result_Search'] = $result;
    }

?>
