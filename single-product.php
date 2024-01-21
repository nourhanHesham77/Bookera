
<?php

include "design/header.php";
?>


    <br><br><br>
    <section class="single">
        <?php 
        $id=$_GET['id'];
        $select=$connect->query("SELECT * FROM products WHERE id='$id'");
        $row=$select->fetch_assoc();
        $cat=$row['cat_id'];
        $get_cat=$connect->query("SELECT * FROM category WHERE id='$cat'");
        $gets=$get_cat->fetch_assoc();
        ?>
    <div class="single-product">
        <div class="sg-img">
<img src="admin/imges/<?php echo$row['img']?>">
</div>
<div class="sg-content">
    <ul>
        <li><?php echo$gets['name']?></li>
        <li>, <?php echo$row['seller']?></li>
    </ul>
    <div class="pro-name">
        <p><?php echo$row['name']?></p>
    </div>
    
    <div class="pro-rating">
        <ul>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fa fa-star"></i></li>
            <li class="list-inline-item"><i class="fal fa-star"></i></li>
            <li class="list-inline-item"><i class="fal fa-star"></i></li>
            <li class="list-inline-item"><i class="fal fa-star"></i></li>
           
        </ul>
    </div>

    <div class="pro-price">
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item sale"><?php $real=$row['price'];
            $off=$row['sale'];
            $final=$real-$off;
            echo$final;?> </li>
            <li class="list-inline-item price"><?php echo$row['price']?></li>
        </ul>
        <p>Availability : <span>In Stock</span> <label>(13 Available)</label></p>
    </div>



<div class="qty-box">
    <ul class="list-unstyled list-inline">
        <li class="list-inline-item">Qty :</li>
        <li class="list-inline-item quantity buttons_added">
            <input type="button" value="-" class="minus">
            <input type="number" step="1" min="1" max="10" value="1" class="qty text" size="4" readonly>
            <input type="button" value="+" class="plus">
        </li>
    </ul>
</div>


<div class="pro-btns">
<a class="gocart" href="" cart-id="<?php echo$row['id']?>">Add To Cart</a>
</div>

</div>
</div>





</section>


<div class="review-form">
    <h6>Add Your Review</h6>
    <form action="#">
        <div class="row">
          
                <div class="star-rating">
                    <label>Your Rating*</label>
                    <span class="fal fa-star" data-rating="1"></span>
                    <span class="fal fa-star" data-rating="2"></span>
                    <span class="fal fa-star" data-rating="3"></span>
                    <span class="fal fa-star" data-rating="4"></span>
                    <span class="fal fa-star" data-rating="5"></span>
                    <input type="hidden" name="whatever1" class="rating-value" value="0">
                </div>
           
            <div class="col-md-6">
                <label>Your Name*</label>
                <input type="text" name="name" required="">
            </div>
            <div class="col-md-6">
                <label>Your Email*</label>
                <input type="text" name="email" required="">
            </div>
            <div class="col-md-12">
                <label>Your Review*</label>
                <textarea required=""></textarea>
                <button type="submit">Add Review</button>
            </div>
        </div>
    </form>
</div>


<?php
include "design/footer.php";
?>