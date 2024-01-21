

<table class="table table-stripped table-bordered" style="width:90%;margin:auto;">
    <thead class="thead-dark">
        <tr>
                <th>id</th>
                <th>category</th>
                <th>controls</th>
</tr>
</thead>
<tbody>
<?php
    $select_category= $connect->query("SELECT * FROM category");
    $counter=0;
    foreach($select_category as $row_category){
    
    ?>
    <tr>
    <td><?php echo++$counter;?></td>
        <td><?php echo$row_category['name']?></td>
            <td>
            
         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo$row_category['id'] ?>">
  Delete
</button>

<!-- Modal -->

<div style="color: black;" class="modal fade" id="exampleModal<?php echo$row_category['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete <span style="color:blue;font-weight:bold;"><?php echo$row_category['name'] ?></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are u sure to delete <span style="color:blue;font-weight:bold;"><?php echo$row_category['name'] ?></span> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        <a href="functions/delete_cat.php?id=<?php echo$row_category['id'] ?>" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
  
</div>
   
            </td>
    </tr>
    <?php } ?>
</tbody>
    </table>