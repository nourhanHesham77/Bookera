<?php

require "connect.php";

$id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$sale=$_POST['sale'];
$seller=$_POST['seller'];
$quantity=$_POST['quantity'];
$descript=$_POST['descript'];
$cat=$_POST['categories'];

$old = $_POST['old_img'];

$array=array();

$counter=count($_FILES['img']['name']);

for($x=0;$x<$counter;$x++){
    
    $img=$_FILES['img']['name'][$x];
    
    if($_FILES['img']['error'][$x]==0){

        $extentions=array("jpg","png","jfif","jpeg");
        $im_ex=pathinfo($img,PATHINFO_EXTENSION);

        if(in_array($im_ex,$extentions)){

            if($_FILES['img']['size'][$x]<=1000000){
                $new_img=md5(uniqid()).".".$im_ex;
                move_uploaded_file($_FILES['img']['tmp_name'][$x],"../imges/". $new_img);

                $array[] = $new_img;
                $images_endo = implode(",",$array);

            }else{
                echo "file is too loong";
            }
        }else{
            echo "bad format";
        }

    }else{
        echo "file error";
    }

}

if($counter!=1){
     $images_end=$images_endo;
     $img_arr=explode(",",$old);
$counter=count($img_arr);
for($x=0;$x<$counter;$x++){
    $path="../imges/". $img_arr[$x];
if(!unlink($path)){
    echo "error";
}
}

     
}else{
    $images_end=$old;
}

$update_product = $connect -> query("UPDATE products SET name='$name' ,price='$price' ,sale='$sale' ,seller='$seller' ,img='$images_end' ,quantity='$quantity' ,descript='$descript' ,cat_id='$cat' WHERE id = '$id'");
header("location:../products.php");
 