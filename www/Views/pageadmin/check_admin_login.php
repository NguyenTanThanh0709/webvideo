<?php
session_start();
if(empty($_SESSION['level'])){
    header('location:../SignIn_SignUp/SignIn.php');
}