<?php
include "design/header.php";
?>

    <!-- start header -->
    <section class="main" data-aos="fade-out" data-aos-duration="4000">
        <div class="side" id="side1">
        <video autoplay muted loop id="myVideo">
            <source src="book.mp4" type="video/mp4">
          </video>
        </div>


    </section>

    <br><br><br>
    <!-- end header -->
    <section class="container2" id="fiction" >
        <div  class="part1">
            <h1 >fiction</h1>
        </div>

        
       <!-- <br><br> -->
       <div class="slide-container">
        <i class="fas fa-arrow-left" alt="left" id="slide-left"></i>
        
        <section class="conta" id="slider">

        <?php
 
  $select_product= $connect->query("SELECT * FROM products WHERE cat_id=1");
  
      foreach($select_product as $row_product){
          
          ?>

           <a href="single-product.php?id=<?php echo$row_product['id']?>"> <div class="thumbnail">
                <img src="admin/imges/<?php echo$row_product['img']?>">
                <div class="product-details">
                    <h2><?php echo$row_product['name']?></h2>
                    <p><span><?php echo$row_product['sale']?></span><?php echo$row_product['price']?></p>
                    <a class="gocart" cart-id="<?php echo$row_product['id']?>">Add To Cart</a>
                </div>
            </div>
      </a>
            <?php } ?>
          

        </section>
        <i class="fas fa-arrow-right" alt="right" id="slide-right"></i>
       </div>

      <!-- <br><br> -->
    </section>
<br><br><br><br>
    <!-- ad -->
    <section class="container3">
        <div class="waviy">
            <span style="--i:1">N</span>
            <span style="--i:2">e</span>
            <span style="--i:3">w </span>
            <span style="--i:4">R</span>
            <span style="--i:5">e</span>
            <span style="--i:6">l </span>
            <span style="--i:7"> e</span>
            <span style="--i:8">a</span>
            <span style="--i:9">s</span>
            <span style="--i:10">e</span>
            <span style="--i:11">s</span>
            
           </div>
           
           <div class="bo1">
       <img src="img/babel.jpg" id="mypic">
       <img src="img/fortune.jpg" id="mypic2">
           </div>
           <br><br>
    </section>

<br><br><br><br>
    <section class="container4" id="historical">
        <div  class="part2">
            <h1 >historical</h1>
        </div>
        <br><br>
       <div class="slide-container2">
         <i class="fas fa-arrow-left" alt="left" id="slide-left2"></i>      
         <section class="conta" id="slider2">

         <?php
 
 $selecth_product= $connect->query("SELECT * FROM products WHERE cat_id=2");
 
     foreach($selecth_product as $rowh_product){
         
         ?>
<a href="single-product.php?id=<?php echo$rowh_product['id']?>">
           <div class="thumbnail thumb">
               <img src="admin/imges/<?php echo$rowh_product['img']?>">
               <div class="product-details">
                   <h2><?php echo$rowh_product['name']?></h2>
                   <p><span><?php echo$rowh_product['sale']?></span><?php echo$rowh_product['price']?></p>
                   <a class="gocart" cart-id="<?php echo$rowh_product['id']?>">Add To Cart</a>
               </div>
           </div>
     </a>
           <?php } ?>
           
         </section>

        <i class="fas fa-arrow-right" alt="right" id="slide-right2"></i>
       </div>
    </section>

<br><br><br><br>

    <section class="container5" id="drama">
        <div  class="part3">
            <h1 >drama</h1>
        </div>
        <br><br>
       <div class="slide-container3">
         <i class="fas fa-arrow-left" alt="left" id="slide-left3"></i>      
         <section class="conta" id="slider3">

           
         <?php
 
 $select_product= $connect->query("SELECT * FROM products WHERE cat_id=1");
 
     foreach($select_product as $row_product){
         
         ?>
<a href="single-product.php?id=<?php echo$row_product['id']?>">
           <div class="thumbnail thumbi">
               <img src="admin/imges/<?php echo$row_product['img']?>">
               <div class="product-details">
                   <h2><?php echo$row_product['name']?></h2>
                   <p><span><?php echo$row_product['sale']?></span><?php echo$row_product['price']?></p>
                   <a class="gocart" cart-id="<?php echo$row_product['id']?>">Add To Cart</a>
               </div>
           </div>
     </a>
           <?php } ?>
           
         </section>

        <i class="fas fa-arrow-right" alt="right" id="slide-right3"></i>
       </div>
    </section>

<br><br><br>

<section class="container6">

</section>


<br><br><br>

<?php
include "design/footer.php";
?>