<!-- <div class="chat">
<a onclick="openForm()"><i class="fal fa-comments"></i></a>
</div> -->







<footer>
    <div>Powered by <a href="#">Noura</a></div>
</footer>



  


  <!-- jQuery JS -->
 <script src="js/assets/vendor/jquery-1.12.4.min.js"></script>

<!-- Bootstrap -->
<script src="js/assets/popper.min.js"></script>
<script src="js/assets/bootstrap.min.js"></script>

<!-- Owl Slider -->
<script src="js/assets/owl.carousel.min.js"></script>

<!-- Wow Animation -->
<script src="js/assets/wow.min.js"></script>

<!-- Price Filter -->
<script src="js/assets/price-filter.js"></script>

<!-- Mean Menu -->
<script src="js/assets/jquery.meanmenu.min.js"></script>

<!-- Custom JS -->
<script src="js/jquery-3.6.0"></script>

    <script src="bookera.js"></script>
    <script src="custom.js"></script>
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

             $(".fas fa-search").click(function(){
               var ser= $(".search-box").val();
               $.get("functions/main_search.php",{
                mser : ser
               },function(data){
                console.log(bdata);
               })
             })


             $(window).scroll(function() {
  var scrollTop = $(window).scrollTop();
  var videoHeight = $('#myVideo').height();
  var newRadius = (scrollTop / videoHeight) * 80;
  $('#myVideo').css('border-radius', newRadius + '%');
});

        })

     </script>
</body>
</html> 