<?php
$current="users";
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
          <li class="breadcrumb-item active">Users</li>
        </ol>


</div>
<?php
if(!isset($_GET['do'])){
    include "includes/user_view.php";
}
elseif($_GET['do']=="add"){
    include "includes/user_add.php";
}elseif($_GET['do']=="edit"){
  include "includes/user_edit.php";
}
?>
</div>




<?php
include "design/footer.php";
?>