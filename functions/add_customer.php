<?php


    if($_SERVER['REQUEST_METHOD'] == "POST"){
    
        require "../admin/functions/connect.php";
    
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $pass=$_POST['pass'];
        
        $img = $_FILES['img']['name'];


        if($_FILES['img']['error'] == 0){
        
            $extentions = array("png","jpg","gif","jpeg","jfif");
        
            $ext = pathinfo($img,PATHINFO_EXTENSION);
        
            if(in_array($ext,$extentions)){
        
                if($_FILES['img']['size'] < 10000000){
        
                    $new_name = md5(uniqid()).".".$ext;
        
                    move_uploaded_file($_FILES['img']['tmp_name'],"../admin/imges/".$new_name);
        
                }else{
                    echo "file is too long";
                }
        
            }else{
                echo "this Extention not supported";
            }
        
        }else{
            echo "bad format / file error";
        }
        
$rand=rand(time(),10000000);
        $password = password_hash($pass,PASSWORD_DEFAULT);

$insert_customer=$connect->query("INSERT INTO customers (name,email,phone,password,img) VALUES ('$name','$email','$phone','$password','$new_name')");

header("Location:../index.php");
    }