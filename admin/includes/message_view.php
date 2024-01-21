   <button type="button" class="btn btn-danger m-3" data-toggle="modal" data-target="#deleteall">
  Clear Messages
</button>

<!-- Modal -->

<div style="color: black;" class="modal fade" id="deleteall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete <span style="color:blue;font-weight:bold;">all</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are u sure to delete <span style="color:blue;font-weight:bold;">all messages</span> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        <a href="functions/clear_messages.php" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
  
</div>
<!-- <button type="button" class="btn btn-primary m-3" id="select-msg">Select</button> -->
<form action="functions/delete_message.php" method="post">
<table class="table table-stripped table-bordered" style="width:90%;margin:auto;">
<thead class="thead-dark">
    <tr>
      <th ><button type="submit" class="btn btn-danger" id="del-msg">Delete</button></th>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>subject</th>
        <th>message</th>
        <th>statues</th>
</tr>
</thead>

<tbody>
<?php
    $select_message= $connect->query("SELECT * FROM comments");
    $counter=0;
    foreach($select_message as $row_message){
        
    ?>

    
        <tr>
          <td style="width:10px;text-align:center;"><input type="checkbox" id="msg-del" name="msg-del[]" value="<?php echo$row_message['id'];?>"></td>
    <td><?php echo++$counter;?></td>
        <td><?php echo$row_message['name']?></td>
        <td><?php echo$row_message['email']?></td>
        <td><?php echo$row_message['subject']?></td>
        <td>
        <button type="button" class="btn btn-primary msg-view" id="view" data-toggle="modal" data-target="#exampleModalx<?php echo$row_message['id'] ?>" msg-data="<?php echo$row_message['id'] ?>">
  View Message
</button>

<!-- Modal -->

<div style="color: black;" class="modal fade" id="exampleModalx<?php echo$row_message['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Message from<span style="color:blue;font-weight:bold;"><?php echo$row_message['name'] ?></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <p style="color:blue;font-weight:bold;"><?php echo$row_message['message'] ?></p> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
  
</div>
    
        </td>
        <td class="stat"><?php if($row_message['statues']==0){echo"unread";}else{echo"read";}?></td>
    </tr>

    <?php } ?>
    </tbody>



</table>

    </form>