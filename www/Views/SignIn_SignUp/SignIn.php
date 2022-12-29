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
    <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/198f11ff77.js" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <div id="sign-in-board">
            <form action="SignIn.php" class="display-flex-center">
                <h1 class="main-title">Sign in</h1>
                <div class="stick"></div>
                <!-- username -->
                <div class="input-box">
                    
                    <input type="text"  name="user-name" id="user-name" class="form-input" placeholder=" " />
                    <label class="input-label"><i class="fa-solid fa-user "></i> Username</label>
                    <span class="error-message">Can't find user</span>
                    
                </div>
                <!-- password -->
                <div class="input-box">
                    
                    <input type="password"  name="password" id="password" class="form-input" placeholder=" "/>
                    <label class="input-label"><i class="fa-solid fa-key "></i> Password</label>
                    <span class="error-message">Wrong password</span>

                </div>
                <div class="show-password-check-box">
                    <input type="checkbox" id="show-password" name="show-password">
                    Show password
                    <i class="fa-solid fa-eye icon-background"></i>
                </div>
                <!-- submit btn -->
                <input type="submit" name="sign-in" class="btn sign-in-btn" value="Sign in">
                <!-- remember me -->
                <br>
                <input type="checkbox" name="remember-me" id="remember-me" > Remember me

                <!-- sign up -->
                <footer>
                    <h5 class="footer-title">Forgot your password !</h5>
                    <p class="footer-desc">If you don't have account, just sign up now !</p>
                    <a href="./SignUp.php" class="btn second-btn" style="top: 12px;left: 25%;">Create account</a>
                </footer>
            </form>
        </div>

    </main>
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
</body>

</html>
