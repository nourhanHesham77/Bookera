<?php
session_start();
require "admin/functions/connect.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoOkeRa</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/mainp.css">
    <!-- <link rel="stylesheet" href="extra.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="icon" href="img/book1.jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>

     <!-- Fontawesome Icon -->
     <link rel="stylesheet" href="css/assets/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
/* .product-details h2{
    color:black;
} */
    </style>
</head>
<body>
   
     <header class="header">
        
        <div class="logo">
            <a href="index.php" > 
                <img src="img/book1.jpg">
                <h3>BoOkeRa</h3>
            </a>
        </div>
    
            <nav class="navbar">
                <ul>
               <li> <a href="#fiction">Fiction</a></li>
               <li> <a href="#historical">Historical</a></li>
               <li> <a href="#drama">Drama</a></li>
               <li>  <a href="#literature">Literature</a></li>
               <li>  <a href="#review">Review</a></li>
                </ul>
            </nav>
    
            <div class="icons">
                <div class="fas fa-search" id="search-btn"></div>
               <div class="fas fa-shopping-cart" id="cart-btn"> <a href="<?php if(!isset($_SESSION['login'])){echo'login.php';}?>" style="color:black;"></a></div>
                <div class="<?php if(isset($_SESSION['login'])){echo'fas fa-user-secret';}else{echo'fas fa-user';} ?>" id="login-btn"></div>
            </div>

            <form  class="search-form" >
                <input type="search" id="search-box" placeholder="search here....">
                <label for="search-box" class="fas fa-search"></label>
                <div class="conta_search"></div>
            </form>


            <div class="shopping-cart" style="display:<?php if(!isset($_SESSION['login'])){echo'none';}?>;">
               <div class="close"><a><i class="fas fa-times"></i><h4>close</h4></a></div> 
                <br><br>
                <h2>shopping cart</h2>
                <br>
                <div class="shop-container">
                    <div class="cart-content">

                <?php

$id=$_SESSION['login'];
$get_cart=$connect->query("SELECT * FROM carts WHERE session_login='$id'");
foreach($get_cart as $row_cart){
$product=$row_cart['product_id'];
$count=$row_cart['count'];
$select_product= $connect->query("SELECT * FROM products WHERE id='$product'");
    foreach($select_product as $row_product){
        ?>
        <div class="aja<?php echo $row_cart['id'] ?>">
                <div class="box">
                <div class="delete-btn">
                            <a><i class="fas fa-trash remov" carid="<?php echo$row_cart['id']?>"></i></a>
                        </div>
                    <img src="admin/imges/<?php echo$row_product['img'] ?>" >
                    <div class="content">
                        <h3><?php echo$row_product['name'] ?></h3>
                       
                        <span><?php echo$count; ?> x <?php echo$row_product['price']?></span>
                    </div>
                </div>
      </div>
<br>
<?php } ?>
<?php } ?>
    </div>

                <hr>
                <br>

              
                <div class="total">total:<span><?php  $id=$_SESSION['login'];
                                $get_cart=$connect->query("SELECT * FROM carts WHERE session_login='$id'");
                                $grand = 0;
                                foreach($get_cart as $row_cart){
                                    $product=$row_cart['product_id'];
                                    $count=$row_cart['count'];
                                    $select_product= $connect->query("SELECT * FROM products WHERE id='$product'");
                                    
                                        foreach($select_product as $row_product){
                                            
                               
                               
                                         $origin=$row_product['price'];
                                         $num=$row_cart['count'];
                                         $total=$num * $origin;
                                         $grand +=$total;
                                        
                                         
                              
                              } 
                                } 
                                echo$grand; ?></span></div>
                <a href="#" class="btns">checkout</a>
            </div>

        </div>
                            

        <div class="dropdown">
            <ul>
            <li style="<?php if(!isset($_SESSION['login'])){ echo'display:none;';}?>"><a href="account.php">my account</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
               
                <hr>
                <li><a href="functions/logout.php">Logout</a></li>
            </ul>
        </div>
    

     </header>


    
    <!-- end nav -->
