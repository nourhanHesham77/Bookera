<?php
$id = $_SESSION['login'];
$select_priv= $connect->query("SELECT * FROM users WHERE id ='$id'");
$row_priv=$select_priv -> fetch_assoc();
$priv = $row_priv['priv'];
?>



<a href="?do=add" class="btn btn-primary m-3">Add user</a>
<table class="table table-bordered table-striped table-hover table-dark" style="width:90%;margin:auto;">

<thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>address</th>
        <th>gender</th>
        <th>privilige</th>
        
</tr>
</thead>
<tbody>
<?php
$select_user=$connect->query('SELECT * FROM users');
$counter=0;
while($row_user=$select_user-> fetch_assoc()){


?>


<tr>
    <td><?php echo ++$counter?></td>
    <td><?php echo $row_user['name'];?></td>
    <td><?php echo $row_user['email'];?></td>
    <td><?php echo $row_user['address'];?></td>
    <td><?php if($row_user['gender']==0){echo "Male";}else{echo 'Female';}?></td>
    <td><?php if($row_user['priv']==0){echo "Owner";}elseif($row_user['priv']==1){echo "Admin";}
    elseif($row_user['priv']==2){echo "supervisor";}else{echo "user";} ?></td>


    
<td >
  <a href="?do=edit&id=<?php echo$row_user['id']?>" 
  class="btn btn-info <?php if($priv>0 && $row_user['priv']==0){echo "disabled";}
  elseif($priv>1 && $row_user['priv']==1){echo "disabled";}
  elseif($priv>2 && $row_user['priv']==2){echo "disabled";} 
  elseif($priv == 3){echo "disabled";}?> " >Edit</a>
      <!-- Button trigger modal -->
<button type="button" class="btn btn-danger"
 <?php if($priv>0 && $row_user['priv']==0){echo "disabled";}
 elseif($priv>1 && $row_user['priv']==1){echo "disabled";}
 elseif($priv>2 && $row_user['priv']==2){echo "disabled";}
 elseif($priv == 3){echo "disabled";}?> data-toggle="modal" data-target="#exampleModal<?php echo$row_user['id'] ?>">
  Delete
</button>

<!-- Modal -->
<div style="color: black;" class="modal fade" id="exampleModal<?php echo$row_user['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete <span style="color:blue;font-weight:bold;"><?php echo$row_user['name'] ?></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are u sure to delete <span style="color:blue;font-weight:bold;"><?php echo$row_user['name'] ?></span> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        <a href="functions/delete_user.php?id=<?php echo$row_user['id'] ?>" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
</div>



</td>
</tr>
<?php } ?>
</tbody>

</table>

<script>
 
</script>