<?php 
session_start();
$username =  $_POST['UserName'] ?? '';
$password = $_POST['PassWord'] ?? '';
if ($username == 'zinza' && $password == '12345') {
    $_SESSION['user'] = $username;
    
    header("location:main.php");
} else {
    
    echo " Your user or password incorrect, please try again";
    require( "login.html");
}


?>