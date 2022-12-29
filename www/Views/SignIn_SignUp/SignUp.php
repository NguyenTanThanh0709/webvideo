<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: ../../index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- logo header -->
    <link rel="shortcut icon" href="../../assets/images/logo.png" />
    <!-- css -->

    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- icon -->
    <script src="https://kit.fontawesome.com/198f11ff77.js" crossorigin="anonymous"></script>

</head>

<body>
    <main>
        <div id="sign-up-board">
            <form action="SignUp.php">
               <!-- left side -->
                <div class="left-side">
                    <h1 class="main-title">Sign up</h1>
                    <div class="stick"></div>
                    <!-- fullName -->
                    <div class="input-box">
                        <input type="text" name="full-name" id="user-name" class="form-input" placeholder=" "/>
                        <label class="input-label"><i class="fa-solid fa-file-signature"></i> Full name</label>
                        <span class="error-message">Please input the name</span>
                    </div>
                    <!-- username -->
                    <div class="input-box">
    
                        <input type="text" name="user-name" id="user-name" class="form-input" placeholder=" "/>
                        <label class="input-label"><i class="fa-solid fa-user icon-background"></i> Username</label>
                        <span class="error-message">Please input username</span>
    
                    </div>
                    <!-- email -->
                    <div class="input-box">
    
                        <input type="email" name="email" id="email" class="form-input" placeholder=" "/>
                        <label class="input-label"><i class="fa-solid fa-envelope"></i> Email</label>
                        <span class="error-message">Please input email</span>
    
                    </div>
                    <!-- password -->
                    <div class="input-box">
    
                        <input type="password"  name="password" id="password" class="form-input" placeholder=" "/>
                        <label class="input-label"><i class="fa-solid fa-key"></i> Password</label>
                        <span class="error-message">Please input </span>
                    </div>
                   
                    <!-- confirm password -->
                    <div class="input-box">
    
                        <input type="password" name="confirm-password" id="confirm-password" class="form-input" placeholder=" "/>
                        <label class="input-label"><i class="fa-sharp fa-solid fa-lock"></i> Confirm password</label>
                        <span class="error-message">Please input </span>
    
                    </div>
                    <div class="show-password-check-box">
                        <input type="checkbox" id="show-password" name="show-password">
                        Show password
                        <i class="fa-solid fa-eye icon-background"></i>
                    </div>
                </div>
               <!-- right side -->
                <div class="right-side">
                    <h2 class="right-side-title">Welcome !</h2>
                    <input type="submit" name="sign-up" value="Create account" class="btn">
                    <p class="right-side-desc">Already have an account ? <a href="./SignIn.php" class="btn second-btn " style="margin-left: 12px">Log in.</a></p>
                    <div class="circles">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </form>
            
        </div>
    </main>
</body>
    <script>
        const password = document.querySelector("input[name=password]");
        const confirm_password = document.querySelector("input[name=confirm-password]");
        const show_password = document.getElementById("show-password");
        // show pass - error
        show_password.addEventListener("click",()=>{
            if(this.value = "ok"){
                password.type="text";
                confirm_password.type="text";

            }else{
                password.type="password";
                confirm_password.type="password";
            }
        })
    </script>
</html>
