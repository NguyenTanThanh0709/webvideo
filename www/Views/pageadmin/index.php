

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
            <form action="processLLogin.php" method="POST" class="display-flex-center">
                <h1 class="main-title">Sign in ADMIN</h1>
                <div class="stick"></div>
                <div>
                    <Strong>User: admin</Strong>
                    <br>
                    <Strong>Password: admin</Strong>

                </div>
                <!-- username -->
                <div class="input-box">
                    
                    <input type="text"  name="admin-name" id="user-name" class="form-input" placeholder=" " />
                    <label class="input-label"><i class="fa-solid fa-user "></i> Username ADMIN</label>
                    <span class="error-message">Can't find ADMIN</span>
                    
                </div>
                <!-- password -->
                <div class="input-box">
                    
                    <input type="password"  name="passwordadmin" id="password" class="form-input" placeholder=" "/>
                    <label class="input-label"><i class="fa-solid fa-key "></i> Password</label>
                    <span class="error-message">Wrong password</span>

                </div>
                <div class="show-password-check-box">
                    <input type="checkbox" id="show-password" name="show-password">
                    Show password ADMIN
                    <i class="fa-solid fa-eye icon-background"></i>
                </div>
                <!-- submit btn -->
                <input type="submit" name="sign-inadmin" class="btn sign-in-btn" value="Sign in ADMIN">
                <!-- remember me -->
                <br>
                

        
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
