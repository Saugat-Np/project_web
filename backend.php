<?php
session_start();

$valid_user_name = "saugat";
$valid_password= password_hash("12345",PASSWORD_DEFAULT);

$error = "incorrect username or password";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $_username = $_POST['uname'];
    $_password = $_POST['pword'];

    if (($_username==$valid_user_name&& password_verify($_password,$valid_password) )) {
        $_SESSION["unm"]=$_username;
        header("location:home_page.php");
        exit();
    } else {
        header("location:login.php?error=$error");
        exit();
    }

}

?>

