<?php
require "connect.php";

$id=$_GET['id'];
$img=$_GET['img'];

$img_arr=explode(",",$img);
$counter=count($img_arr);
for($x=0;$x<$counter;$x++){
    $path="../imges/". $img_arr[$x];
if(!unlink($path)){
    echo "error";
}
}
$delete_product= $connect->query("DELETE FROM products WHERE id='$id'");
header("location:../products.php");