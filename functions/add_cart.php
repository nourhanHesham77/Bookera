<?php

session_start();
if(!isset($_SESSION['login'])){
  header("location:../login.php");
  exit();
}
require "../admin/functions/connect.php";

$id= $_SESSION['login'];
$product=$_POST['productid'];

$select_cart=$connect->query("SELECT * FROM carts WHERE product_id = '$product' and session_login = '$id'");

$count =$select_cart-> num_rows;

if($count>0){
    $update_cart=$connect->query("UPDATE carts SET count=count+1 WHERE product_id = '$product' and session_login = '$id' ");
    echo$count;
}else{

    $add_cart=$connect->query("INSERT INTO carts (product_id,session_login,count) VALUES ('$product','$id',1)");
    // if($add_cart){
    //   $select_count=$connect->query("SELECT * FROM cart WHERE session_login = '$id'");
    // $count_cart=$select_count-> num_rows;
    // echo$count_cart;
    // }
}