<?php

session_start();


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'adminpanel');

$username = $_POST['user'];
$email =  $_POST['email'];
$password = $_POST['password'];

$s= "SELECT * FROM users WHERE username='$username' && password='$password'  ";

$result = mysqli_query($con , $s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $username;
   header('location:home.php');
}
else{
    header('location:login.php');
}

?>