<?php
require "connect.php";

if(!isset($_POST['submit'])){
    header("location:../users.php");
    exit();
}

$name= $_POST['username'];
$email= $_POST['email'];
$password= $_POST['password'];
$address= $_POST['address'];
$gender= $_POST['gender'];
$priv= $_POST['priv'];


$select_user=$connect->query("SELECT * FROM users WHERE email='$email'");

$coun = mysqli_num_rows($select_user);

if($coun>0){
    
    header("location:../users.php?do=add&error=email exist");
}else{
$pass_hash= password_hash($password,PASSWORD_DEFAULT);

$insert_user = $connect-> query("INSERT INTO users (name,email,password,address,gender,priv) VALUES ('$name','$email','$pass_hash','$address',
'$gender','$priv')");

header("location:../users.php");
}