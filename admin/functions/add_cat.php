<?php
require "connect.php";

if(!isset($_POST['submit'])){
    header("location:../products.php");
    exit();
}

$cat = $_POST['cat'];

$add_category =$connect->query("INSERT INTO category (name) VALUES ('$cat')");
header("location:../products.php");