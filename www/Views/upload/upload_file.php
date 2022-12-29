<?php
include "../../admin/db.php";


if(isset($_POST['submitFILE'])){
    echo 1;
    echo $_FILES['fileToUpload']['name'] . '<br>';
    if (isset($_FILES['fileToUpload']['name']) && $_FILES['imgthumbnails']['name'] != '' && $_FILES['fileToUpload']['name'] != '' && isset($_POST['title_file']) && !empty($_POST['title_file'])) {
        $title = $_POST['title_file'];
        $maxsize = 524288000;
        $target_dir = "../../assets/videos/";
        $target_dir_thumbails = "../../assets/thumbnails/";
        $target_file_thumbails =  $target_dir_thumbails . basename($_FILES["imgthumbnails"]["name"]);
        $target_file =  $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $vis = 1;
        if(isset($_POST['radiovis'])){
            if($_POST['radiovis'] === 'public'){
                $vis = 1;
            }
            if($_POST['radiovis'] === 'private'){
                $vis = 0;
            }
        }

        
        // $target_file_thumbails =  $target_dir_thumbails . basename($_FILES["imgthumbnails"]["name"]);

        // echo 2;
        // Select file type
       $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");
        if (in_array($extension, $extensions_arr)) {
            // Check file size
            // echo 3;
          if(($_FILES['fileToUpload']['size'] >= $maxsize) || ($_FILES["fileToUpload"]["size"] == 0)) {
            $_SESSION['message'] = "File too large. File must be less than 500MB.";
            // echo 4;
        }else{
            // Upload
            if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file) && move_uploaded_file($_FILES['imgthumbnails']['tmp_name'],$target_file_thumbails) ){
                echo 5;
            // Insert record
            $target_file_temp = 'Views/videos/'. basename($_FILES["fileToUpload"]["name"]);
            $target_file_thumbails = 'Views/thumbnails/' . basename($_FILES["imgthumbnails"]["name"]);
            $query = "INSERT INTO `video` (`namevideo`, `view`, `dayupload`,`thumbnail`,`mode`, `username`, `link`) VALUES
            ('$title',0,CURRENT_TIMESTAMP,'$target_file_thumbails','$vis','nguyenbathanh1','$target_file_temp');";
            mysqli_query($conn,$query);

            // $$view1 = 0;
            $query = "SELECT `id_video` FROM `video` WHERE `namevideo` = '$title' and `view` = 0  and `thumbnail` = '$target_file_thumbails' and
            `mode` = '$vis' and `username` = 'nguyenbathanh1' and `link` = '$target_file_temp';";
            $result = mysqli_query($conn, $query);
            // $result = $conn->query($sql);
            $result = $result->fetch_array();  
                        // print_r($result[0]);




            $id_playlist  = $_POST['playlist-select'];
                    echo $id_playlist . '<br>' . $result[0];
            $query = "INSERT INTO `playlist` (`id_playlist`, `id_video`, `username`) VALUES
            ('$id_playlist','$result[0]','Vo Luyen');";
            mysqli_query($conn,$query);
            

            
            $_SESSION['message'] = "Upload successfully.";
            }
        }
        }else{
            $_SESSION['message'] = "Invalid file extension.";
        }
    }else{
        $_SESSION['message'] = "Please select a file.";
    }


}
$conn->close();

?>