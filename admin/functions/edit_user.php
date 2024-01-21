<?php
require "connect.php";

$id=$_POST['id'];
$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$priv=$_POST['priv'];

// $select_user=$connect->query("SELECT * FROM users WHERE password='$opassword'");
$npass=password_hash($password,PASSWORD_DEFAULT);

$update_user =$connect-> query("UPDATE users SET name='$name',email='$email',password='$npass',address='$address',gender='$gender',priv='$priv' WHERE id='$id' ");

header("location:../users.php");

// if(mysqli_num_rows($select_user)){
//     $npass=password_hash($password,PASSWORD_DEFAULT);

// $update_user =$connect->query("UPDATE users set name='$name', email='$email',password='$npass',address='$address',gender='$gender',priv='$priv'
// WHERE id='$id");

// }else{
//     header("location:../users.php?do=edit&error='wrong pass'");
// }


