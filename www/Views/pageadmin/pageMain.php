<?php

require './check_admin_login.php';

require '../../admin/db.php';

$query = "SELECT * FROM `video`";
$result = $conn->query($query);
// $res = $conn->query("select * from product");
$result = $result->fetch_all();

$feature = array();
$query = "SELECT `id_video` FROM `feature`";
$result_feature = $conn->query($query);
// $res = $conn->query("select * from product");
$result_feature = $result_feature->fetch_all();
foreach ($result_feature as $value) {
    array_push($feature, $value[0]);
  }


$vipham = array();
$query = "SELECT `id_video` FROM `vipham`";
$result_vipham = $conn->query($query);
// $res = $conn->query("select * from product");
$result_vipham = $result_vipham->fetch_all();

foreach ($result_vipham as $value) {
    array_push($vipham, $value[0]);
  }
// print_r($result);
// die();
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
        <a href="#" class="navbar-logo"><img src="../../assets/images/logo.png" alt=""></a>
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
        <!-- <a href="./SignUp.html" class="log-up-btn button-57" style="margin-left: 12px;"><span class="text">Log up</span><span>Create Account!</span></a> -->
        <!-- log in -->
        <!-- <a href="./SignIn.html" class="log-in-btn button-57"><span class="text">Log in</span><span>Exist Account </span></a> -->
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
                <a class="px-4 nameItem" href="">Videos management</a>
            </li>
             <!-- history -->
             <!-- like videos
            <li class="nav-items">
                <i class="fa-solid fa-thumbs-up"></i>
                <a class="px-4 nameItem" href="">Favorite videos</a>
            </li> -->
        </ul>
        <!-- manager -->
        
        <div class="stick"></div>
  
    </div>
 
            </div>
 
            <!-- Content upload -->
            <div class="container_item col-9">
                 <h1>CH??O ADMIN</h1>
                 <div class="row m-2">

                 <?php
                    foreach($result as $value){
                    //  echo $value[0];
                 ?>


<div class="card m-2 my-4" style="width: 18rem;">
   <img class="card-img-top" src="<?php echo $value[4]; ?>" alt="Card image cap">
   <div class="card-body">
       <h5 class="card-title"><?php echo $value[1]; ?></h5>
       <p class="card-text">Descirbe of video</p>
       <a href="#" class="btn btn-primary">See Video</a>               
   </div>
   <form method="post" action="process_save.php" class="mx-4">
    <h5>Th???c Hi???n Thao T??c Th??m:</h5>
   <label class="form-check-label">
       <input type="radio" class="form-check-input" value="1" id="<?php echo $value[0] . 'id' ?>" name="save_">Feature Video
   </label>
   <br>
   <label class="form-check-label">
       <input type="radio" class="form-check-input" value="0" id="<?php echo $value[0] . 'id' ?>" name="save_"> ???n Video
   </label>
   <input type="hidden" name="id_video" value="<?php echo $value[0]; ?>" />

   <h5 class=  "my-2">Th???c Hi???n Thao T??c X??a:</h5>
   <label class="form-check-label">
       <input type="radio" class="form-check-input" value="1" id="<?php echo $value[0] . 'id' ?>" name="delete_">X??a Feature
   </label>
   <br>
   <label class="form-check-label">
       <input type="radio" class="form-check-input" value="0" id="<?php echo $value[0] . 'id' ?>" name="delete_">X??a H???n Ch???
   </label>
   <input type="hidden" name="id_video" value="<?php echo $value[0]; ?>" />
   <input type="submit" value="Save" name="ok" />

   
   </form>
   <!-- <p class="m-2">Tr???ng Th??i: </p> -->



   <?php if(in_array((string)$value[0], $feature)){ ?>
   <p class="m-2">Tr???ng Th??i: Feature</p>
   <?php } elseif (in_array($value[0], $vipham)) { ?>
    <p class="m-2">Tr???ng Th??i: Vi Ph???m n??n b??? h???n ch???</p>
   <?php } else { ?>
    <p class="m-2">Tr???ng Th??i: B??nh th?????ng</p>


    
    <?php }?>



</div>
                 <?php }?>


                
        </div>
 
    </div>
   
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="/main.js"></script> <!-- S??? d???ng link tuy???t ?????i t??nh t??? root, v?? v???y c?? d???u / ?????u ti??n -->
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
    </script>
</body>
 
</html>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="/main.js"></script> <!-- S??? d???ng link tuy???t ?????i t??nh t??? root, v?? v???y c?? d???u / ?????u ti??n -->
    <script>
        $(document).ready(() => {
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
});
 
 
 
     





 
