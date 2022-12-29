<?php
    include "../../admin/db.php";

    function checkURLExits($url){
        $result = false;
            $url = filter_var($url, FILTER_VALIDATE_URL);
            
            /* Open curl connection */
            $handle = curl_init($url);
            
            /* Set curl parameter */
            curl_setopt_array($handle, array(
                CURLOPT_FOLLOWLOCATION => TRUE,     // we need the last redirected url
                CURLOPT_NOBODY => TRUE,             // we don't need body
                CURLOPT_HEADER => FALSE,            // we don't need headers
                CURLOPT_RETURNTRANSFER => FALSE,    // we don't need return transfer
                CURLOPT_SSL_VERIFYHOST => FALSE,    // we don't need verify host
                CURLOPT_SSL_VERIFYPEER => FALSE     // we don't need verify peer
            ));
        
            /* Get the HTML or whatever is linked in $url. */
            $response = curl_exec($handle);
            
            $httpCode = curl_getinfo($handle, CURLINFO_EFFECTIVE_URL);  // Try to get the last url
            $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);      // Get http status from last url
            
            /* Check for 200 (file is found). */
            if($httpCode == 200) {
                $result = true;
            }
            curl_close($handle);
            return $result;
            
            /* Close curl connection */
            
    }



    if(isset($_POST['submitURL'])){
        if(isset($_POST['url']) && isset($_POST['title_url'])  && $_FILES['imgthumbnails']['name'] != '' && !empty($_POST['url']) && !empty($_POST['title_url'])){
            $url = $_POST['url'];
            $title = $_POST['title_url'];
            $pos = strpos($url, 'http');
            $target_file_thumbails = "/upload/thumbnails/" . basename($_FILES["imgthumbnails"]["name"]);

            $target_dir_thumbails = "../../assets/thumbnails/";
            $target_file_thumbails_ =  $target_dir_thumbails . basename($_FILES["imgthumbnails"]["name"]);
            $vis = 1;
        if(isset($_POST['radiovis'])){
            if($_POST['radiovis'] === 'public'){
                $vis = 1;
            }
            if($_POST['radiovis'] === 'private'){
                $vis = 0;
            }
        }
            if($pos !== false){
            // tim thay
            if(checkURLExits($url)){
            //     $query = "INSERT INTO `video` (`username`, `namevideo`, `chanel`, `dayupload`,`address`,`active`) VALUES
            // ('nguyenbathanh1','$title','nguyenbathanh1',CURRENT_TIMESTAMP,'$url',1);";

                $target_file_thumbails = 'Views/thumbnails/' . basename($_FILES["imgthumbnails"]["name"]);

            if(move_uploaded_file($_FILES['imgthumbnails']['tmp_name'],$target_file_thumbails_) ){
                $query = "INSERT INTO `video` (`namevideo`, `view`, `dayupload`,`thumbnail`,`mode`, `username`, `link`) VALUES
                ('$title',0,CURRENT_TIMESTAMP,'$target_file_thumbails','$vis','nguyenbathanh1','$url');";
                                mysqli_query($conn,$query);
                
                
                                $query = "SELECT `id_video` FROM `video` WHERE `namevideo` = '$title' and `view` = 0  and `thumbnail` = '$target_file_thumbails' and
                                `mode` = '$vis' and `username` = 'nguyenbathanh1' and `link` = '$url';";
                                $result = mysqli_query($conn, $query);
                                // $result = $conn->query($sql);
                                $result = $result->fetch_array();  
                                            print_r($result[0]);
                    
                    
                    
                    
                                $id_playlist  = $_POST['playlist-select'];
                                        echo $id_playlist . '<br>' . $result[0];
                                $query = "INSERT INTO `playlist` (`id_playlist`, `id_video`, `username`) VALUES
                                ('$id_playlist','$result[0]','Vo Luyen1');";
                                mysqli_query($conn,$query);
            }



            }
            else{
                // url not exits 
            }
                
            }else{
            // khong tim thay 
            }
    
        }

    }
    $conn->close();

?>