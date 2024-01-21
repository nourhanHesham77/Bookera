<?php
session_start();
require "../admin/functions/connect.php";


if(!isset($_POST['submit'])){
    header("location:../login.php");
    exit();
}

$email=$_POST['email'];
$password=$_POST['password'];

$select_user =$connect -> query("SELECT * FROM customers WHERE email = '$email'");
$row_user=$select_user-> fetch_assoc();
$pass_hash =$row_user['password'];
$id =$row_user['id'];
$count = mysqli_num_rows($select_user);

if(password_verify($password,$pass_hash)){
    
    if($count>0){
        $_SESSION['login']=$id;
        header("location:../index.php");
    }else{
        echo "email or password is not correct";
        header("location:../login.php");
    }
}else{
    header("location:../login.php");
}
