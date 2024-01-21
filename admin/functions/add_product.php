<?php
require "connect.php";

if(!isset($_POST['submit'])){
    header("location:../products.php");
    exit();
}


$name=$_POST['name'];
$price=$_POST['price'];
$sale=$_POST['sale'];
$seller=$_POST['seller'];
$quantity=$_POST['quantity'];
$descript=$_POST['descript'];
$cat=$_POST['categories'];

$img = $_FILES['img']['name'];


if($_FILES['img']['error'] == 0){

    $extentions = array("png","jpg","gif","jpeg","jfif");

    // $ext = explode(".",$img);
    // $ext_end = end($ext);

    $ext = pathinfo($img,PATHINFO_EXTENSION);

    if(in_array($ext,$extentions)){

        if($_FILES['img']['size'] < 10000000){

            $new_name = md5(uniqid()).".".$ext;

            move_uploaded_file($_FILES['img']['tmp_name'],"../imges/".$new_name);

        }else{
            echo "file is too long";
        }

    }else{
        echo "this Extention not supported";
    }

}else{
    echo "bad format / file error";
}


$insert_product=$connect-> query("INSERT INTO products (name,price,sale,seller,img,quantity,descript,cat_id) 
VALUES
('$name','$price','$sale','$seller','$new_name','$quantity','$descript','$cat')
");

header("location:../products.php");
