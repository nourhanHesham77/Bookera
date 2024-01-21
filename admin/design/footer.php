
  <!-- Sticky Footer -->
  <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
        
<!-- <div class="alert-popover" >
<div style="color: black;"  role="dialog"  >
<div class="modal-dialog" role="document">
<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New<span style="color:blue;font-weight:bold;" class="valst"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span style="color:red;">
</span>
        </button>
      </div>
      <div class="modal-body">
     <p style="color:blue;font-weight:bold;">wants to have access</p> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="denied">deny</button>
        <button class="btn btn-primary" id="accepted">Confirm</button>
      </div>
    </div>
</div>
</div>
</div> -->

          </div>
        </div>
        
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="functions/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  <script>
$(".msg-view").click(function(){
    
    var id = $(this).attr("msg-data");
    

    $(this).closest("tr").find(".stat").html("read");

    $.post("functions/message_read.php",{
        
                         xid   :   id
    },function(data){
        // console.log(data);
        $(".msg-count").html(data);
    
    });
})
$(document).ready(function(){

  //get data...

 $.post("functions/load_customers.php",function(mdata){
  if(mdata=="false"){
    $(".alert-popover").remove();
  }else{
    $(".valst").html(mdata);
    $(".alert-popover").css("display","block");
  }
  
 })

 //give access
//  $("#accepted").click(function(){
//   var email=$(".valst").html();
//   console.log(email);
//   var priv=1;
//   $.post("functions/access_customer.php",{
//     mail:email,
//     spriv:priv
//   },function(edata){
//     console.log(edata);
//     $(".alert-popover").remove();

//   })
//  })

 //close
//  $(".close").click(function(){
//   $(".alert-popover").remove();
//  })

 //denied
//  $("#denied").click(function(){
//   var email=$(".valst").html();
//   $.post("functions/delete_customer.php",
//   {
//     semail : email
//   },function(data){
//     console.log(data);
//     $(".alert-popover").remove();
//   })
//  })

  })




    </script>
</body>

</html>
