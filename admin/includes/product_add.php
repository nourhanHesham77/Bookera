

<form method="post" action="functions/add_product.php" style="width:90%;margin:auto;" enctype="multipart/form-data">

<div class="form-group">
    <label for="exampleInputEmail">Name</label>
    <input class="form-control" type="text" name="name" id="exampleInputEmail"  placeholder="Name">
</div>


<div class="form-group">
    <label for="exampleInputEmail">price</label>
    <input class="form-control" type="number" name="price" id="exampleInputEmail"  placeholder="price">
</div>


<div class="form-group">
    <label for="exampleInputEmail1">sale</label>
    <input type="text" name="sale"  class="form-control" id="exampleInputEmail1" placeholder="sale">
  </div>

<div class="form-group">
    <label for="exampleInputEmail">seller</label>
    <input class="form-control" type="text" name="seller" id="exampleInputEmail"  placeholder="seller">
</div>

<div class="form-group">
    <label for="exampleInputEmail">img</label>
    <input class="form-control" type="file" name="img" id="exampleInputEmail"  multiple>
</div>

<div class="form-group">
    <label for="exampleInputEmail">quantity</label>
    <input class="form-control" type="number" name="quantity" id="exampleInputEmail"  placeholder="quantity">
</div>

<div class="form-group">
    <label for="exampleInputEmail">Description</label>
    <input class="form-control" type="text" name="descript" id="exampleInputEmail" placeholder="Description">
</div>


<div class="form-group">
<select name="categories">
    <option hidden>choose cateogry</option>
    <?php
    $select_cat = $connect->query("SELECT * FROM category");
    foreach($select_cat as $row_cat){

    
    ?>
    <option value="<?php echo$row_cat['id'];?>" ><?php echo$row_cat['name'];?></option>
    <?php } ?>
</select>
</div>

 
   
  <input type="submit" name="submit" class="btn btn-primary" value="Add">


</form>