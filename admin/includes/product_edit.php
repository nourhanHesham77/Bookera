<?php
$id = $_GET['id'];
$select_product=$connect->query("SELECT * FROM products WHERE id ='$id'");
$row_product =$select_product ->fetch_assoc();
?>



<form method="post" action="functions/edit_product.php" style="width:90%;margin:auto;" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo$row_product['id'];?>">
<div class="form-group">
    <label for="exampleInputEmail">Name</label>
    <input class="form-control" type="text" name="name"  value="<?php echo$row_product['name'];?>" id="exampleInputEmail"  placeholder="Name">
</div>


<div class="form-group">
    <label for="exampleInputEmail">price</label>
    <input class="form-control" type="number" name="price" value="<?php echo$row_product['price'];?>" id="exampleInputEmail"  placeholder="price">
</div>


<div class="form-group">
    <label for="exampleInputEmail1">sale</label>
    <input type="text" name="sale" value="<?php echo$row_product['sale'];?>" class="form-control" id="exampleInputEmail1" placeholder="sale">
  </div>

<div class="form-group">
    <label for="exampleInputEmail">seller</label>
    <input class="form-control" type="text" name="seller" value="<?php echo$row_product['seller'];?>" id="exampleInputEmail"  placeholder="seller">
</div>

<div class="form-group">
    <label for="exampleInputEmail">img</label>
    <input class="form-control" type="file" name="img[]" id="exampleInputEmail"  multiple>
    <input type="hidden" name="old_img" value="<?php echo$row_product['img']?>" multiple>
</div>

<div class="form-group">
    <label for="exampleInputEmail">quantity</label>
    <input class="form-control" type="number" name="quantity" value="<?php echo$row_product['quantity'];?>" id="exampleInputEmail"  placeholder="quantity">
</div>

<div class="form-group">
    <label for="exampleInputEmail">Description</label>
    <input class="form-control" type="text" name="descript" value="<?php echo$row_product['descript'];?>" id="exampleInputEmail" placeholder="Description">
</div>

<div class="form-group">
<select name="categories">
    <option hidden>choose cateogry</option>
    <?php
    $cat=$row_product['cat_id'];
    $select_cat = $connect->query("SELECT * FROM category");
    foreach($select_cat as $row_cat){

    
    ?>
    <option value="<?php echo$row_cat['id'];?>" ><?php echo$row_cat['name'];?></option>
    <?php } ?>
</select>
</div>

 
   
  <input type="submit" name="submit" class="btn btn-primary" value="Edit">


</form>