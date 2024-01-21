<?php
$id=$_GET['id'];
$select_user= $connect->query("SELECT * FROM users WHERE id='$id'");
$row_user=$select_user -> fetch_assoc();

?>



<form method="post" action="functions/edit_user.php" style="width:90%;margin:auto;">
<input type="hidden" name="id" value="<?php echo$row_user['id'];?>">
<div class="form-group">
    <label for="exampleInputEmail">Name</label>
    <input class="form-control" type="text" name="username" id="exampleInputEmail" value="<?php echo $row_user['name']?>" placeholder="Name">
</div>


<div class="form-group">
    <label for="exampleInputEmail">E-mail</label>
    <input class="form-control" type="text" name="email" id="exampleInputEmail" value="<?php echo $row_user['email']?>" placeholder="E-mail">
</div>

<!-- 
<div class="form-group">
    <label for="exampleInputEmail1">old password</label>
    <input type="password" name="opassword"  class="form-control" id="exampleInputEmail1" placeholder="password" >
  </div> -->

  <div class="form-group">
    <label for="exampleInputEmail1">New password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputEmail1" placeholder="password">
  </div>



<div class="form-group">
    <label for="exampleInputEmail">Address</label>
    <input class="form-control" type="text" name="address" id="exampleInputEmail" value="<?php echo $row_user['address']?>" placeholder="Address">
</div>

    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="0" <?php if($row_user['gender']==0){echo "checked";}?>>
    <label class="form-check-label" for="inlineRadio1">Male</label>
    </div>

    
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1"<?php if($row_user['gender']==1){echo "checked";}?>>
    <label class="form-check-label" for="inlineRadio2">Female</label>
    </div>

    <br><br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Privliges</label>
    <select name="priv" class="form-control" id="exampleFormControlSelect1">
      <option value="0"<?php if($row_user['priv']==0){echo "selected";}?>>Owner</option>
      <option value="1"<?php if($row_user['priv']==1){echo "selected";}?>>Admin</option>
      <option value="2" <?php if($row_user['priv']==2){echo "selected";}?> >SuperVisor</option>
      <option value="3" <?php if($row_user['priv']==3){echo "selected";}?> >User</option>


    </select>
  </div>

  <input type="submit" name="submit" class="btn btn-primary" value="Edit">


</form>