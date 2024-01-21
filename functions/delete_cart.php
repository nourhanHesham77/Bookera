<?php
session_start();
// if(!isset($_SESSION['login'])){
//   header("location:../08-login.php");
//   exit();
// }
require "../admin/functions/connect.php";

$id=$_POST['xid'];
$log=$_SESSION['login'];

$delete_cart=$connect->query("DELETE FROM carts WHERE id='$id'");

if($delete_cart){
$select_cart=$connect->query("SELECT * FROM carts WHERE session_login = '$log'");
$count =$select_cart-> num_rows;
echo$count;


}

