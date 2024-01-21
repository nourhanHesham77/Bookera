<?php
$current="products";
include "design/header.php";
include "design/sidebar.php";
?>

<div id="content-wrapper">

      <div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">products</li>
        </ol>


</div>

<?php
if(!isset($_GET['do'])){
    include "includes/products_view.php";
}elseif($_GET['do']=="add"){
    include "includes/product_add.php";
}elseif($_GET['do']=="edit"){
  include "includes/product_edit.php";
}
elseif($_GET['do']=="add_cat"){
  include "includes/product_cat.php";
}
elseif($_GET['do']=="cat_view"){
  include "includes/cat_view.php";
}
?>

</div>

<?php
include "design/footer.php";
?>