<?php
require "connect.php";

$id=$_GET['id'];

$delete_category= $connect->query("DELETE FROM category WHERE id='$id'");
header("location:../products.php");