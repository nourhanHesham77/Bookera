<?php

session_start();

require "../admin/functions/connect.php";

$out=$_POST['outgo'];
$in=$_POST['income'];
$message=mysqli_real_escape_string($connect,$_POST['message']);

if(!empty($message)){
    $add=$connect->query("INSERT INTO messages (FromUser,ToUser,chat) VALUES('$out','$in','$message')");
}