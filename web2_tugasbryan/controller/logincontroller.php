<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if($email == "admin@gmail.com" && $password == "123"){
    
    $_SESSION['user'] = "Admin";
    header("Location: ../view/dashboard.php");

}else{

    echo "Login gagal";

}
?>