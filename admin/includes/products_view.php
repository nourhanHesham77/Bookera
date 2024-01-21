

<a href="?do=add" class="m-3 btn btn-primary">Add Product</a>
<a href="?do=add_cat" class="m-3 btn btn-info">Add category</a>
<a href="?do=cat_view" class="m-3 btn btn-info">View category</a>
<br>
<table class="table table-stripped table-bordered" style="width:90%;margin:auto;">
    <thead class="thead-dark">
        <tr>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>sale</th>
                <th>seller</th>
                <th>img</th>
                <th>quantity</th>
                <th>Description</th>
                <th>Date</th>
                <th>category</th>
                <th>controls</th>
</tr>
</thead>
<tbody>
    <?php
    $select_product= $connect->query("SELECT * FROM products");
    $counter=0;
    foreach($select_product as $row_product){
        // $img=explode(",",$row_product['img']);
    
    ?>

    <tr>
        <td><?php echo++$counter;?></td>
        <td><?php echo$row_product['name']?></td>
        <td><?php echo$row_product['price']?></td>
        <td><?php echo$row_product['sale']?></td>
        <td><?php echo$row_product['seller']?></td>
        <td><img src="imges/<?php echo$row_product['img']; ?>" style="width:90px;height:120px;"></td>
        <td><?php echo$row_product['quantity']?></td>
        <td><?php echo$row_product['descript'];?></td>
        <td><?php echo$row_product['date']?></td>
        
        <td> <?php
        $cat = $row_product['cat_id'];
        $select_cat = $connect->query("SELECT * FROM category WHERE id='$cat' ");
        $row_cat=$select_cat->fetch_assoc();
        echo$row_cat['name'];
        ?></td>
        
      <td> 
         <a href="?do=edit&id=<?php echo$row_product['id']?>" class="btn btn-warning">Edit</a>
         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo$row_product['id'] ?>">
  Delete
</button>

<!-- Modal -->

<div style="color: black;" class="modal fade" id="exampleModal<?php echo$row_product['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete <span style="color:blue;font-weight:bold;"><?php echo$row_product['name'] ?></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are u sure to delete <span style="color:blue;font-weight:bold;"><?php echo$row_product['name'] ?></span> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        <a href="functions/delete_product.php?id=<?php echo$row_product['id'] ?>&img=<?php echo$row_product['img'] ?>" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
  
</div>
    
    </td>
    </tr>

    <?php } ?>
</tbody>
</table>