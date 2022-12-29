<?php

require 'admin/db.php';

	session_start();
	$checkSearch = 0;
	$resultInput = array();
	if(isset($_POST['search_Button']) && isset($_POST['search-input']) && !empty($_POST['search-input'])){
	$checkSearch = 1;
	$nameInput = $_POST['search-input'];
	$_SESSION['nameInputSearch'] = $nameInput;
	include "Views/Search/Search.php";
	$resultInput = $_SESSION['result_Search'];
    
	}

    $query = "SELECT * FROM `video`";
    $result = $conn->query($query);
    // $res = $conn->query("select * from product");
    $result = $result->fetch_all(); 


    $query = "SELECT * FROM `video` where `id_video` in (SELECT `id_video` FROM `feature`)";
    $result_feature = $conn->query($query);
    $result_feature = $result_feature->fetch_all();

// echo count($result_feature);
// die();

$query = "SELECT * FROM `video` where `id_video` not in (SELECT `id_video` FROM `feature`) and `id_video` not in (SELECT `id_video` FROM `vipham`)";
    $result_on  = $conn->query($query);
    $result_on = $result_on->fetch_all();

    

    // $feature = array();
    // $query = "SELECT `id_video` FROM `feature` ";
    // $result_feature = $conn->query($query);
    // // $res = $conn->query("select * from product");
    // $result_feature = $result_feature->fetch_all();
    // foreach ($result_feature as $value) {
    //     array_push($feature, $value[0]);
    // }

    


    // $vipham = array();
    // $query = "SELECT `id_video` FROM `vipham`";
    // $result_vipham = $conn->query($query);
    // // $res = $conn->query("select * from product");
    // $result_vipham = $result_vipham->fetch_all();

    // foreach ($result_vipham as $value) {
    //     array_push($vipham, $value[0]);
    // }
    $conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- logo header -->
    <link rel="shortcut icon" href="assets/images/logo.png"/>
    <!-- css -->
    <link rel="stylesheet" href="assets/css/style_home.css">
    <link rel="stylesheet" href="assets/css/style_common.css">
    <link rel="stylesheet" href="assets/css/style_form_video.css">

    <!-- icon -->
    <script src="https://kit.fontawesome.com/198f11ff77.js" crossorigin="anonymous"></script>
</head>

<body>
     <!-- navbar -->
     <div class="navbar">
        <!-- menu -->
        <div class="navbar-menu "><i class="fa-solid fa-bars"></i></div>
        <!-- logo -->
        <a href="#" class="navbar-logo"><img src="assets/images/logo.png" alt=""></a>
        <!-- search -->
        <div class="search-box">
        <form method="post">
			<input type="text" name="search-input" placeholder="Search...">
            <!-- search button - looking event-->
            <a href="#">
                <button class="" type="submit" name="search_Button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </a>
			</form>
        </div>
        <!-- log up -->
        <a href="./SignUp.html" class="log-up-btn button-57" style="margin-left: 12px;"><span class="text">Log up</span><span>Create Account!</span></a>
        <!-- log in -->
        <a href="./SignIn.html" class="log-in-btn button-57"><span class="text">Log in</span><span>Exist Account </span></a>
    </div>
    <!-- body -->
        <!-- navbar slider -->
        <div class="navbar-slider">
            <!-- main slider -->
            <div class="nav-title">
                Si-zu-ka
            </div>
            <div class="stick"></div>
            <!-- MAIN's elements -->
                <!-- home -->
                <a href="index.php" class="nav-items">
                    <i class="fa-solid fa-house"></i>
                    <div  class="nav-items-title">Home</div>
                </a>
                <!-- trending -->
                <a href="Trending.html" class="nav-items">
                    <i class="fa-solid fa-fire-flame-curved"></i>
                    <div  class="nav-items-title">Trending</div>
                </a>
                 <!-- libary -->
                <a href="Libary.html" class="nav-items">
                    <i class="fa-solid fa-photo-film"></i>
                    <div  class="nav-items-title">Libary</div>
                </a>
                 <!-- subcribed -->
                <a href="Following-channels.html" class="nav-items">
                    <i class="fa-solid fa-circle-nodes"></i>
                    <div  class="nav-items-title">Following Channels</div>
                </a>
                 <!-- history -->
                <a href="History.html" class="nav-items">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <div  class="nav-items-title">History</div>
                </a>
                 <!-- like videos -->
                <a href="Favorite-videos.html" class="nav-items">
                    <i class="fa-solid fa-thumbs-up"></i>
                    <div  class="nav-items-title">Favorite videos</div>
                </a>
                <!-- My list -->
                <a href="My-list.html" class="nav-items">
                    <i class="fa-solid fa-video"></i>
                    <div  class="nav-items-title">My list</div>
                </a>
               
            <!-- MANAGER -->
            <div class="nav-title">
                Manager
            </div>
            <div class="stick"></div>
            <!-- MANAGER's elements -->
                <!-- profile -->
                <a href="Profile.html" class="nav-items">
                    <i class="fa-solid fa-address-card"></i>
                    <div  class="nav-items-title">Profile</div>
                </a>
                <!-- uploads -->
                <a href="UploadVideo.html" class="nav-items">
                    <i class="fa-solid fa-upload"> </i>
                    <div  class="nav-items-title">Uploads</div>
                </a>
        </div>

    
</div>
    <!-- conatin videos -->

    <?php if($checkSearch == 1){ ?>
        <?php if (count($resultInput) == 0) { ?>
            <h1>Không tìm thấy theo yêu cầu</h1>
        <?php } else { ?>
            <div>
    <h1 style="padding-top: 80px; padding-left: 150px;"> Các Video theo yêu cầu</h1>
    <div class="contain-video">
        <?php foreach ($resultInput as $value) { ?>
            <div class="form-video">
            <!-- link chanel of account -->
            <a href="Views/Video/index.php?id_video=<?php echo $value[0]; ?>"><img src="<?php echo $value[4]; ?>" alt=""></a>
            
            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="Views/Video/index.php?id_video=<?php echo $value[0]; ?>"><img src="assets/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
                <div class="inf-video">
                    <h1 class="content-video"><?php echo $value[1]; ?></h1>
                    <!-- click move to chanel -->
                    <a href="#"><p class="name-user"><?php echo $value[6]; ?></p></a>
                    <p> <?php echo $value[2]; ?>. Ngày: <?php echo $value[3]; ?></p>
                </div>
            </div>
        </div>

        <?php } ?>

        <?php } ?>





    <?php }else{ ?>

        <?php
    if (count($result_feature) != 0) { ?>
    <div>
    <h1 style="padding-top: 80px; padding-left: 150px;"> FEATURE VIDEO</h1>
    <div class="contain-video">
        <?php foreach($result_feature as $value){ ?>
            <div class="form-video">
            <!-- link chanel of account -->
            <a href="Views/Video/index.php?id_video=<?php echo $value[0]; ?>"><img src="<?php echo $value[4]; ?>" alt=""></a>
            
            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="Views/Video/index.php?id_video=<?php echo $value[0]; ?>"><img src="assets/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
                <div class="inf-video">
                    <h1 class="content-video"><?php echo $value[1]; ?></h1>
                    <!-- click move to chanel -->
                    <a href="#"><p class="name-user"><?php echo $value[6]; ?></p></a>
                    <p> <?php echo $value[2]; ?>. Ngày: <?php echo $value[3]; ?></p>
                </div>
            </div>
        </div>


        <?php } ?>

    <?php } ?>
    
    </div>



    
    <?php
    if (count($result_on) != 0) { ?>
    <div>
    <h1 style="padding-top: 80px; padding-left: 150px;"> RECOMMEND VIDEO FOR YOU</h1>
    <div class="contain-video">
        <?php foreach($result_on as $value){ ?>
            <div class="form-video">
            <!-- link chanel of account -->
            <a href="Views/Video/index.php?id_video=<?php echo $value[0]; ?>"><img src="<?php echo $value[4]; ?>" alt=""></a>
            
            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="Views/Video/index.php?id_video=<?php echo $value[0]; ?>"><img src="assets/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
                <div class="inf-video">
                    <h1 class="content-video"><?php echo $value[1]; ?></h1>
                    <!-- click move to chanel -->
                    <a href="#"><p class="name-user"><?php echo $value[6]; ?></p></a>
                    <p> <?php echo $value[2]; ?>. Ngày: <?php echo $value[3]; ?></p>
                </div>
            </div>
        </div>


        <?php } ?>

    <?php } ?>
    
    </div>

    <?php } ?>


    
    
    <script>
        const navbarMenu = document.querySelector('.navbar-menu');
        const navbarSlider = document.querySelector('.navbar-slider');
        const navbarItems = document.querySelectorAll('.nav-items');
        
        // show and hide the navbar slider
        navbarMenu.addEventListener('click',function(){
            navbarSlider.classList.toggle('open')
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
      


    </script>
</body>

</html>