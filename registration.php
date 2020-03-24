<?php

session_start();
header ('location:login.php');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'adminpanel');

$username = $_POST['user'];
$email =  $_POST['email'];
$password = $_POST['password'];

$s= "SELECT * FROM users WHERE username='$username' ";

$result = mysqli_query($con , $s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo "username already taken";
}
else{
    $reg = "INSERT INTO users(username , email , password) VALUES ('$username','$email','$password') ";
    mysqli_query($con,$reg);
    echo "Registration Successful";
}

?>