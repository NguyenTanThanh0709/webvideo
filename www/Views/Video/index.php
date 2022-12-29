<?php
require '../../admin/db.php';
$id = $_GET['id_video'];

$query = "SELECT * FROM `video` where `id_video` = '$id';";
    $result = $conn->query($query);
    $result = $result->fetch_array();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video</title>
    <!-- logo header -->
    <link rel="shortcut icon" href="../../assets/images/logo.png"/>
    <!-- css -->
    <link rel="stylesheet" href="../../assets/css/style_home.css">
    <link rel="stylesheet" href="../../assets/css/style_common.css">
    <link rel="stylesheet" href="../../assets/css/style_video.css">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
    <!-- icon -->
    <script src="https://kit.fontawesome.com/198f11ff77.js" crossorigin="anonymous"></script>
     <!-- loading page -->
     <link rel="stylesheet" href="../../assets/CSS/Page-loading.css">
     <script src="../../assets/scripts/Page-loading.js"></script>
</head>

<body>
    <!-- navbar -->
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
            <a href="../Source/Home.html" class="nav-items">
                <i class="fa-solid fa-house"></i>
                <div  class="nav-items-title">Home</div>
            </a>
            <!-- trending -->
            <a href="../Source/Trending.html" class="nav-items">
                <i class="fa-solid fa-fire-flame-curved"></i>
                <div  class="nav-items-title">Trending</div>
            </a>
             <!-- libary -->
            <a href="../Source/Libary.html" class="nav-items">
                <i class="fa-solid fa-photo-film"></i>
                <div  class="nav-items-title">Libary</div>
            </a>
             <!-- subcribed -->
            <a href="../Source/Following-channels.html" class="nav-items">
                <i class="fa-solid fa-circle-nodes"></i>
                <div  class="nav-items-title">Following Channels</div>
            </a>
             <!-- history -->
            <a href="../Source/History.html" class="nav-items">
                <i class="fa-solid fa-clock-rotate-left"></i>
                <div  class="nav-items-title">History</div>
            </a>
             <!-- like videos -->
            <a href="../Source/Favorite-videos.html" class="nav-items">
                <i class="fa-solid fa-thumbs-up"></i>
                <div  class="nav-items-title">Favorite videos</div>
            </a>
            <!-- My list -->
            <a href="../Source/My-list.html" class="nav-items">
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
            <a href="../Source/Profile.html" class="nav-items">
                <i class="fa-solid fa-address-card"></i>
                <div  class="nav-items-title">Profile</div>
            </a>
            <!-- uploads -->
            <a href="../Source/UploadVideo.html" class="nav-items">
                <i class="fa-solid fa-upload"> </i>
                <div  class="nav-items-title">Uploads</div>
            </a>
    </div>
    <!-- video display -->
    <div class="wrapper">
        <div class="left-side">
            <div class="video-wrapper">
                <video controls style="width: 100%; height: 100%;">
                    <source src="<?php echo $result[7]; ?>" >
                </video>
            </div>
            <!-- title video -->
            <h3 class="video-title"><?php echo $result[1] ?></h3>
            <div class="video-contact">
                <h6 class="video-view">123 views</h6>
                <h6 class="video-upload-date"><?php echo $result[3] ?></h6>
                <div class="video-like"><i class="fa-solid fa-thumbs-up"></i> <span class="number-of-liked"><?php echo $result[2] ?></span></div>
                <div class="video-share"> <i class="fa-solid fa-share-from-square"> </i> Share</div>
                <div class="video-playlist-save"><i class="fa-solid fa-floppy-disk"></i> Save</div>
            </div>
            <div class="stick-separate"></div>
            <!-- user make video -->
            <div class="infomation-video-maker">
                <img src="../../assets/images/logo.png" alt="" class="video-maker-avt" style="border-radius: 50%;">
                <h3 class="video-maker-username"><?php echo $result[6] ?></h3>
                <h5 class="subcriber"><span class="number-of-subcriber">123</span> Subcirbers</h5>
                <button class="btn subcribe-btn " type="submit" name="subcribe">Subcribe</button>
            </div>
            <!-- description -->
            <div class="video-description">
                <h3 class="desc-title">Description</h3>
                <p class="details-description line-clamp"><?php echo $result[1] ?></p>
            </div>
            <div class="stick-separate"></div>
            <!-- create comment -->
            <div class="comment-box">

                
                <h3 class="user-name">Name of user is typing this comment</h3>
                <!-- <img src="../images/Thumbnails-img.jpg" alt="" class="user-avt"> -->
                <!-- <textarea name="comment-area" id="comment-area" cols="100" rows="" class="comment-input"></textarea> -->
                <!-- comment btn -->
                <input type="button" name="comment" class="comment-btn button-6" value="Comment">
            </div>
            <h2 class="comments-titles">Comments</h2>
            <!-- comments of other users -->
            <!-- comment-list -->
            <div class="comment-list">
                <div class="comment-others ">
                    <h3 class="comment-other-user-name">Name of user is typing this comment</h3>
                    <!-- <img src="../images/Thumbnails-img.jpg " alt="" class="comment-other-user-avt"> -->
                        <p class="comment-details ">Long Text   In Access web apps, the Long Text field can store up to 2^30-1 bytes, and is equivalent to the SQL Server data type of nvarchar(max). If you want, you can set a character limit to prevent your users from using the full capacity of the field. You can’t store Rich Text in Access web apps.
    
                            Short Text    In Access web apps the Short Text field is set to store 255 characters by default, but you can adjust the Character Limit property all the way up to 4000 characters. Its SQL Server equivalent is nvarchar, with length from 1 to 4000.
      
                  </div>
                
                <div class="comment-others">
                    <h3 class="comment-other-user-name ">Name of user is typing this comment</h3>
                    <!-- <img src="../images/Thumbnails-img.jpg" alt="" class="comment-other-user-avt"> -->
                        <p class="comment-details ">Long Text   In Access web apps, the Long Text field can store up to 2^30-1 bytes, and is equivalent to the SQL Server data type of nvarchar(max). If you want, you can set a character limit to prevent your users from using the full capacity of the field. You can’t store Rich Text in Access web apps.
    
                            Short Text    In Access web apps the Short Text field is set to store 255 characters by default, but you can adjust the Character Limit property all the way up to 4000 characters. Its SQL Server equivalent is nvarchar, with length from 1 to 4000.
                            
                            Learn more about data types for Access web apps.
                            
                            Default controls for Long Text and Short Text fields
                            In most cases, Access uses Text Box controls to display Short Text or Long Text fields. However, when you add a Long Text field to a view in an Access web app, Access creates a Multiline Textbox. When using a Multiline Textbox in the browser, you can press Enter to move to a new line in the textbox. If you’re in a datasheet, you’ll need to use the scrollbars to see anything below the first line.
                            
                            In Desktop databases, if a Long Text field is configured to show Rich Text, and you add that field to a form or report, Access automatically applies the Rich Text setting to the text box. </p>
                    
                    
                  </div>
                <div class="comment-others">
                    <h3 class="comment-other-user-name">Name of user is typing this comment</h3>
                    <!-- <img src="../images/Thumbnails-img.jpg" alt="" class="comment-other-user-avt"> -->
                    <p class="comment-details ">Tao ko phải cuối cùng, cũng k thèm đầu tiên nhưng miễn sao có riêng góc nhìn và nhịp điệu
                        Trãi qua quá trình mà tao khám phá mình đã bật được cá tính mà đặt ra biệt hiệu 
                        Lòng tin,tình yêu, và kết nối,thứ cho tao thêm đường binh khi hết lối
                        Cũng cần có thời điểm lúc xây dựng đồng minh, chọn cùng cộng sinh hoặc là chết đói
                        Khi mà tao biết là mình cần phải lớn, lúc đã có quá nhiều thằng kêu tao anh </p>
                <!-- header to comment -->
                <a href="#"><img class="user-avt" src="../../assets/images/default_avt.png" alt=""></a>

                <!-- body to usser comment -->
                <div class="body-user-comment">
                    <h3 class="user-name">Name of user is typing this comment</h3>
                    <textarea name="comment-area" id="comment-area" cols="100" rows="" class="comment-input" style="overflow: auto;"></textarea>
                    <!-- comment btn -->
                    <input type="button" name="comment" class="comment-btn button-6" value="Comment">
                </div>
                <div class="clear"></div>
            </div>
            <div class="header-comment">
                <!-- header -->
                <h2 class="comments-titles">Comments</h2>

                <!-- comment-list -->
                <div class="comment-list">
                    <div class="comment-others">
                        <!-- body another user comment -->
                        <a href="#"><img class="comment-other-user-avt" src="../../assets/images/default_avt.png" alt=""></a>
                        
                        <!-- body to usser comment -->
                        <div class="body-user-comment">
                            <h3 class="comment-other-user-name">Name of user is typing this comment</h3>
                            <p class="comment-details ">Long Text   In Access web apps, the Long Text field can store up to 2^30-1 bytes, and is equivalent to the SQL Server data type of nvarchar(max). If you want, you can set a character limit to prevent your users from using the full capacity of the field. You can’t store Rich Text in Access web apps.
                                Short Text    In Access web apps the Short Text field is set to store 255 characters by default, but you can adjust the Character Limit property all the way up to 4000 characters. Its SQL Server equivalent is nvarchar, with length from 1 to 4000.
                            </p>
                            
                            <div class="comment-box">
                            <!-- header to comment -->
                            <a href="#"><img class="user-avt" src="../../assets/images/default_avt.png" alt=""></a>

                            <!-- body to usser comment -->
                            <div class="body-user-comment">
                                <h3 class="user-name">Name of user is typing this comment</h3>
                                <textarea name="comment-area" id="comment-area" cols="100" rows="" class="comment-input" style="overflow: auto;"></textarea>
                                <!-- comment btn -->
                                <input type="button" name="comment" class="comment-btn button-6" value="Comment">
                            </div>
                        </div>
                    </div>

                    <div class="comment-others">
                        <!-- body another user comment -->
                        <a href="#"><img class="comment-other-user-avt" src="../../assets/images/default_avt.png" alt=""></a>
                        
                        <!-- body to usser comment -->
                        <div class="body-user-comment">
                            <h3 class="comment-other-user-name">Name of user is typing this comment</h3>
                            <p class="comment-details ">Long Text   In Access web apps, the Long Text field can store up to 2^30-1 bytes, and is equivalent to the SQL Server data type of nvarchar(max). If you want, you can set a character limit to prevent your users from using the full capacity of the field. You can’t store Rich Text in Access web apps.
                                Short Text    In Access web apps the Short Text field is set to store 255 characters by default, but you can adjust the Character Limit property all the way up to 4000 characters. Its SQL Server equivalent is nvarchar, with length from 1 to 4000.
                            </p>
                            
                            <div class="comment-box">
                            <!-- header to comment -->
                            <a href="#"><img class="user-avt" src="../../assets/images/default_avt.png" alt=""></a>

                            <!-- body to usser comment -->
                            <div class="body-user-comment">
                                <h3 class="user-name">Name of user is typing this comment</h3>
                                <textarea name="comment-area" id="comment-area" cols="100" rows="" class="comment-input" style="overflow: auto;"></textarea>
                                <!-- comment btn -->
                                <input type="button" name="comment" class="comment-btn button-6" value="Comment">
                            </div>
                        </div>
                    </div>

                    <div class="comment-others">
                        <!-- body another user comment -->
                        <a href="#"><img class="comment-other-user-avt" src="../../assets/images/default_avt.png" alt=""></a>
                        
                        <!-- body to usser comment -->
                        <div class="body-user-comment">
                            <h3 class="comment-other-user-name">Name of user is typing this comment</h3>
                            <p class="comment-details ">Long Text   In Access web apps, the Long Text field can store up to 2^30-1 bytes, and is equivalent to the SQL Server data type of nvarchar(max). If you want, you can set a character limit to prevent your users from using the full capacity of the field. You can’t store Rich Text in Access web apps.
                                Short Text    In Access web apps the Short Text field is set to store 255 characters by default, but you can adjust the Character Limit property all the way up to 4000 characters. Its SQL Server equivalent is nvarchar, with length from 1 to 4000.
                            </p>
                            
                            <div class="comment-box">
                            <!-- header to comment -->
                            <a href="#"><img class="user-avt" src="../../assets/images/default_avt.png" alt=""></a>

                            <!-- body to usser comment -->
                            <div class="body-user-comment">
                                <h3 class="user-name">Name of user is typing this comment</h3>
                                <textarea name="comment-area" id="comment-area" cols="100" rows="" class="comment-input" style="overflow: auto;"></textarea>
                                <!-- comment btn -->
                                <input type="button" name="comment" class="comment-btn button-6" value="Comment">
                            </div>
                        </div>
                    </div>

                    <div class="comment-others">
                        <!-- body another user comment -->
                        <a href="#"><img class="comment-other-user-avt" src="../../assets/images/default_avt.png" alt=""></a>
                        
                        <!-- body to usser comment -->
                        <div class="body-user-comment">
                            <h3 class="comment-other-user-name">Name of user is typing this comment</h3>
                            <p class="comment-details ">Long Text   In Access web apps, the Long Text field can store up to 2^30-1 bytes, and is equivalent to the SQL Server data type of nvarchar(max). If you want, you can set a character limit to prevent your users from using the full capacity of the field. You can’t store Rich Text in Access web apps.
                                Short Text    In Access web apps the Short Text field is set to store 255 characters by default, but you can adjust the Character Limit property all the way up to 4000 characters. Its SQL Server equivalent is nvarchar, with length from 1 to 4000.
                            </p>
                            
                            <div class="comment-box">
                            <!-- header to comment -->
                            <a href="#"><img class="user-avt" src="../../assets/images/default_avt.png" alt=""></a>

                            <!-- body to usser comment -->
                            <div class="body-user-comment">
                                <h3 class="user-name">Name of user is typing this comment</h3>
                                <textarea name="comment-area" id="comment-area" cols="100" rows="" class="comment-input" style="overflow: auto;"></textarea>
                                <!-- comment btn -->
                                <input type="button" name="comment" class="comment-btn button-6" value="Comment">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- comments of other users -->

        </div>
        <div class="right side">
              
        </div>
    </div>

    </div>

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
        $('textarea').each(function () {
            this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
            }).on('input', function () {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        });
        //show all description which was hidden
        $('.video-description').click(function(){
            $('.details-description').toggleClass('none-line-clamp line-clamp')
        })
        // solve comments
        document.querySelectorAll('.comment-others').forEach(function(cmt){
            cmt.addEventListener('mouseover',function(){
                let details=cmt.querySelector('.comment-details')
                details.style.background ='#c49999'
                details.style.zIndex = '999'
                details.classList.add('none-line-clamp')
                details.classList.remove('line-clamp')


            })
            cmt.addEventListener('mouseout',function(){
                let details=cmt.querySelector('.comment-details')
                details.style.background ='#f3f3f3'
                details.style.zIndex = '1'
                details.classList.add('line-clamp')
                details.classList.remove('none-line-clamp')


            })
        })
        

    </script>
</body>

</html>
