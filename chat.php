<?php
include "design/header.php";
?>


<div class="wrapper">
<section class="chat-area">
    <div class="head">
    <?php
    $id=$_SESSION['login'];
    $user_id=$_GET['id'];
    $select_customer=$connect->query("SELECT * FROM customers WHERE id='$user_id'");
    $row=$select_customer->fetch_assoc();
    ?>
<img src="admin/imges/<?php echo$row['img'];?>">
<div class="details">
    <span><?php echo$row['name'];?></span>
    <p>Active now</p>
</div>
</div>


<div class="chat-box">


</div>

<form action="" class="typing-area">
    <input type="text" hidden name="outgo" value="<?php echo$id; ?>">
    <input type="text" hidden name="income" value="<?php echo$user_id; ?>">
<input type="text" name="message" class="inp" placeholder="type message...">
<button><i class="fab fa-telegram-plane"></i></button>
</form>
</section>
</div>



<!-- Custom JS -->
<script src="js/jquery-3.6.0"></script>

    <script src="bookera.js"></script>
    <script src="custom.js"></script>
    <script src="chat.js"></script>
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