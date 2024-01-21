
<?php
include "design/header.php";
?>

<?php 
if(!isset($_SESSION['login'])){
    header("location: login.php");
    exit();
}
?>


<div class="wrapper">
<section class="users">
    <?php
    $id=$_SESSION['login'];
    $select_customer=$connect->query("SELECT * FROM customers WHERE id='$id'");
    $row=$select_customer->fetch_assoc();
    ?>
    <div class="content">
<img src="admin/imges/<?php echo$row['img'];?>">

<div class="details">
    <span><?php echo$row['name'];?></span>
    <p>Active now</p>
</div>
</div>
<div class="search">
<span class="text">chat with..</span>
<input type="text" placeholder="enter name">
<button><i class="fas fa-search"></i></button>
</div>

<div class="users-list">

<hr>

</div>

</section>
</div>



<!-- Custom JS -->
<script src="js/jquery-3.6.0"></script>

    <script src="bookera.js"></script>
    <script src="custom.js"></script>
    <script src="users.js"></script>
    <script>
        $(document).ready(function(){
            $(".gocart").click(function(){
                    var product=$(this).attr("cart-id");

                    $.post("functions/add_cart.php",{
                        productid : product
                    },
                    function(data){
                        console.log(data);
                        // $(".count-cart").html(data);  
                        $(".cart-content").load(location.href+' .cart-content');
                        $(".total").load(location.href+' .total'); 
                    })
                      
                  
                   

    
                })

                $(".remov").click(function(){
              var id =  $(this).attr("carid");
                $(".aja"+id).fadeOut();
                $.post("functions/delete_cart.php",{
                      xid : id
                }
                ,function(bdata){
                    console.log(bdata);
                   
                })
              
             })

        })

     </script>
</body>
</html> 