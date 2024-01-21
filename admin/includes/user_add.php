

<div style="width:80%;margin:auto;" class= "<?php
if(isset($_GET['error'])){
  echo "alert alert-danger";
}?>"
><?php
if(isset($_GET['error'])){
  echo $_GET['error'];
}

?>
</div>



<form method="post" action="functions/add_user.php" style="width:90%;margin:auto;">

<div class="form-group">
    <label for="exampleInputEmail">Name</label>
    <input class="form-control" type="text" name="username" id="exampleInputEmail" value="" placeholder="Name">
</div>


<div class="form-group">
    <label for="exampleInputEmail">E-mail</label>
    <input class="form-control" type="text" name="email" id="exampleInputEmail" value="" placeholder="E-mail">
</div>


<div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputEmail1" placeholder="password">
  </div>

<div class="form-group">
    <label for="exampleInputEmail">Address</label>
    <input class="form-control" type="text" name="address" id="exampleInputEmail" value="" placeholder="Address">
</div>

    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="0">
    <label class="form-check-label" for="inlineRadio1">Male</label>
    </div>

    
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1">
    <label class="form-check-label" for="inlineRadio2">Female</label>
    </div>

    <br><br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Privliges</label>
    <select name="priv" class="form-control" id="exampleFormControlSelect1">
      <option value="0" >Owner</option>
      <option value="1" >Admin</option>
      <option value="2" >SuperVisor</option>
      <option value="3" >User</option>

    </select>
  </div>

  <input type="submit" name="submit" class="btn btn-primary" value="Add">


</form>