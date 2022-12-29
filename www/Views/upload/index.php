<?php
include "../../admin/db.php";
 
$query = "SELECT * FROM `nameplaylist`";
$result = $conn->query($query);
// $res = $conn->query("select * from product");
$result = $result->fetch_all();
 
 
// foreach ($result as $value) {
//  print_r($value[0]);
// }
// die();
// print_r($result);
 
$conn->close();
?>
 
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/style_upload.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/style.css">
    <link rel="shortcut icon" href="../../assets/images/logo.png"/>
    <!-- css -->
    <link rel="stylesheet" href="../../assets/css/style_home.css">
    <link rel="stylesheet" href="../../assets/css/style_common.css">
    <link rel="stylesheet" href="../../assets/css/style_upload.css">
    <!-- <link rel="stylesheet" href="./style_upload2.css"> -->
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
 
    <!-- icon -->
    <script src="https://kit.fontawesome.com/198f11ff77.js" crossorigin="anonymous"></script>
      <!-- loading page -->
    <link rel="stylesheet" href="../../assets/css/Page-loading.css">
    <script src="../../assets/scripts/Page-loading.js"></script>
    <title>Home Page</title>
</head>
 
<body>
    <div class="container-fluid fixed-top">
        <div class="row">
            <!-- Header -->
            <div class="navbar">
        <!-- menu -->
        <div class="navbar-menu "><i class="fa-solid fa-bars"></i></div>
        <!-- logo -->
        <a href="#" class="navbar-logo"><img src="../images/logo.png" alt=""></a>
        <!-- search -->
        <div class="search-box">
            <!-- search input -->
            <input type="text" name="search-input" placeholder="Search...">
            <!-- search button - looking event-->
            <a href="#">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
        </div>
        <!-- log up -->
        <a href="./SignUp.html" class="log-up-btn button-57" style="margin-left: 12px;"><span class="text">Log up</span><span>Create Account!</span></a>
        <!-- log in -->
        <a href="./SignIn.html" class="log-in-btn button-57"><span class="text">Log in</span><span>Exist Account </span></a>
    </div>
        </div>
    </div>
 
    <div class="container-fluid container2" style="
    position: absolute;
    top: 70px;
">
        <div class="row">
            <!-- SideBar -->
            <div class="container_item__sidebar col-3 ">
            <div class="navbar-slider open">
        <!-- main slider -->
       
        <div class="nav-title ">
            Si-zu-ka
        </div>
        <div class="stick"></div>
 
        <ul>
            <!-- home -->
            <li class="nav-items ">
                <i class="fa-solid fa-house"></i>
                <a class="px-4 nameItem" href="Home.html">Home</a>
            </li>
            <!-- trending -->
            <li class="nav-items ">
                <i class="fa-solid fa-fire-flame-curved"></i>
                <a class="px-4 nameItem" href="">Trending</a>
            </li>
             <!-- libary -->
            <li class="nav-items">
                <i class="fa-solid fa-photo-film"></i>
                <a class="px-4 nameItem" href="">Libary</a>
            </li>
             <!-- subcribed -->
            <li class="nav-items">
                <i class="fa-solid fa-circle-nodes"></i>
                <a class="px-4 nameItem" href="">Following Channels</a>
            </li>
             <!-- history -->
            <li class="nav-items">
                <i class="fa-solid fa-clock-rotate-left"></i>
                <a class="px-4 nameItem" href="">History</a>
            </li>
             <!-- like videos -->
            <li class="nav-items">
                <i class="fa-solid fa-thumbs-up"></i>
                <a class="px-4 nameItem" href="">Favorite videos</a>
            </li>
        </ul>
        <!-- manager -->
        <div class="nav-title">
            Manager
        </div>
        <div class="stick"></div>
 
        <ul>
            <!-- profile -->
            <li class="nav-items">
                <i class="fa-solid fa-address-card"></i>
                <a class="px-4 nameItem" href="">Profile</a>
            </li>
            <!-- uploads -->
            <li class="nav-items active">
                <i class="fa-solid fa-upload"></i>
                <a class="px-4 nameItem" href="UploadVideo.html">Uploads</a>
            </li>
        </ul>
    </div>
 
            </div>
 
            <!-- Content upload -->
            <div class="container_item col-9">
                    <div class="row" style="margin-right: 5px;">
                        <div class="col-12 content_title m-3">
                            <h2 style="color: #B08D8D ;">Upload Video</h2>
                            <!-- <label for="pet-select">File or URL:</label>
 
                            <select name="pets" id="upload-select">
                                <option value="">--Please choose an option--</option>
                                <option value="2">Upload URL</option>
                                <option value="1">Upload File</option>
       
                            </select> -->
 
                        </div>
                        <!-- upload file -->
                        <div class="col-12 file">
                            <h5>Upload Video with FILE:</h5>
                            <form enctype='multipart/form-data' method="post" name="form_file" action="upload_file.php" class="needs-validation ml-3" onsubmit="return validate()" novalidate>
                                <div class="form-group">
                                    <label for="title_file">Title of the video:</label>
                                    <input  type="text" class="form-control" id="title_file" placeholder="Enter title of the video" name="title_file" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file"  class="custom-file-input" name="fileToUpload" id="fileToUpload" required accept="video/mp4,video/x-m4v,video/*">
                                        <label class="custom-file-label" for="fileToUpload" style=" width: 90%;">Choose file</label>
                                    </div>
                                   
                                </div>
                                <label for="playlist-video">Playlist</label>
             <select name="playlist-select" id="playlist-select " class="bg-danger text-white">
                <?php
                foreach ($result as $value) {
                ?>
                    <option value="<?php echo $value[0]; ?>"><?php echo $value[1]; ?></option>
                <?php } ?>
                 <!-- <option value="music">music</option>
                 <option value="action">action</option>
                 <option value="fiction">fiction</option> -->
             </select>
                                <p class="mb-2" id="nameFile"></p>
                                <H2>visibillity</H2>
                                <div class="form-group row">
    <div class="text-danger col-sm-2">Public</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" name="radiovis" type="radio" id="gridCheck1" value="public">
        <label class="form-check-label" for="radiovis">
        Anyone can discover and see this video
        </label>
      </div>
    </div>
  </div>
 
  <div class="form-group row">
    <div class="text-danger col-sm-2">Private</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" name="radiovis" type="radio" id="gridCheck2" value="private">
        <label class="form-check-label" for="radiovis">
        Only you can see this video
        </label>
      </div>
    </div>
  </div>
 
  <H2>Set the thumbails.</H2>
  <div>
  <input type="file"  name="imgthumbnails"   id="thumbnails-img-src" accept=" image/*" style="display: none;">
                <div class="button-6  btn btn-outline-info btn-sm" id="thumbnails-upload-button">Custom Thumbnails <i class="fa-solid fa-wrench icon" ></i> </div>
                <!-- thumnails uploaded -->
                <div class="thumbnails">
                    <img src="" alt="Thumbnails" id="sample-img">
                </div>
  </div>
                                <button type="submit" name="submitFILE" class="btn btn-danger btn-sm">Upload with file</button>
                            </form>
                        </div>
                        <!-- upload url -->
                        <div class="col-12 url mb-5">
                            <h5>Upload Video with URL:</h5>
                        <form enctype='multipart/form-data' method="post" action="upload_url.php" class="needs-validation ml-3" novalidate>
                                <div class="form-group">
                                <label for="title_url">Title of the video:</label>
                                <input  type="text" class="form-control" id="title_url" placeholder="Enter title of the video" name="title_url" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                <label for="url">Add Video with URL:</label>
                                <input  type="url" class="form-control" id="url" placeholder="Enter URL of the video" name="url" pattern="https://.*" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <label for="playlist-video">Playlist</label>
             <select name="playlist-select" id="playlist-select" class="bg-danger text-white">
             <?php
                foreach ($result as $value) {
                ?>
                    <option value="<?php echo $value[0]; ?>"><?php echo $value[1]; ?></option>
                <?php } ?>
             </select> <br/>
             <H2>visibillity</H2>
                                <div class="form-group row">
    <div class="text-danger col-sm-2">Public</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" name="radiovis" type="radio" id="gridCheck1" value="public">
        <label class="form-check-label" for="radiovis">
        Anyone can discover and see this video
        </label>
      </div>
    </div>
  </div>
 
  <div class="form-group row">
    <div class="text-danger col-sm-2">Private</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" name="radiovis" type="radio" id="gridCheck2" value="private">
        <label class="form-check-label" for="radiovis">
        Only you can see this video
        </label>
      </div>
    </div>
  </div>
 
  <H2>Set the thumbails.</H2>
  <div>
  <input type="file"  name="imgthumbnails"   id="thumbnails-img-src1" accept=" image/*" style="display: none;">
                <div class="button-6  btn btn-outline-info btn-sm" id="thumbnails-upload-button1">Custom Thumbnails <i class="fa-solid fa-wrench icon" ></i> </div>
                <!-- thumnails uploaded -->
                <div class="thumbnails1">
                    <img src="" alt="Thumbnails" id="sample-img">
                </div>
  </div>
                                <button type="submit" name="submitURL" class="btn btn-danger btn-sm">Upload with URL</button>
                            </form>
                        </div>
                       
                    </div>
            </div>  
        </div>
 
    </div>
   
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="/main.js"></script> <!-- Sử dụng link tuyệt đối tính từ root, vì vậy có dấu / đầu tiên -->
    <script>
        const navbarMenu = document.querySelector('.navbar-menu');
        const navbarSlider = document.querySelector('.navbar-slider');
        const navbarItems = document.querySelectorAll('.nav-items');
        const navbarItemsTITLE = document.querySelectorAll('a.nameItem');
       
       
        // show and hide the navbar slider
        navbarMenu.addEventListener('click',function(){
            navbarSlider.classList.toggle('open')
			// navbarItemsTITLE.classList.toggle('d-none')
			// console.log(navbarItemsTITLE[0].classList.toggle('d-none'));

			navbarItemsTITLE.forEach(element => {
				element.classList.toggle('d-none')
			});
        })
        //active the items in navbar slider
        navbarItems.forEach(items=>{
            items.addEventListener('click',function(){
                console.log('chose')
                navbarItems.forEach(item=>{
                    item.classList.remove('active')
                })
                items.classList.add('active')
 
            })
        }
        )
      
 
 
        // upload thumbnails
        $('#thumbnails-upload-button').click(function() {
            // hide the upload btn
            $('#sample-img').css('display','none')
            if($('#thumbnails-img')){
                $('#thumbnails-img').remove()
            }
            $(this).parents().find('#thumbnails-img-src').click();
        });
 
            document.getElementById('thumbnails-img-src').onchange = e => {
            const file = e.target.files[0];
            //src of img file
            const url = URL.createObjectURL(file);
 
            //create img
            const thumbnailImg = `
                <img src="${url}" alt="Thumbnails" id="thumbnails-img">
            `
            $('.thumbnails').append(thumbnailImg);  
            };


             // upload thumbnails
        $('#thumbnails-upload-button1').click(function() {
            // hide the upload btn
            $('#sample-img1').css('display','none')
            if($('#thumbnails-img1')){
                $('#thumbnails-img1').remove()
            }
            $(this).parents().find('#thumbnails-img-src1').click();
        });
 
            document.getElementById('thumbnails-img-src1').onchange = e => {
            const file = e.target.files[0];
            //src of img file
            const url = URL.createObjectURL(file);
 
            //create img
            const thumbnailImg = `
                <img src="${url}" alt="Thumbnails" id="thumbnails-img1">
            `
            $('.thumbnails1').append(thumbnailImg);  
            };
    </script>
</body>

     
