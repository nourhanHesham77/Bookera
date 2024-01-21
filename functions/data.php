<?php
  while($row=$get ->fetch_assoc() ){
    $output .= '<a href="chat.php?id='. $row['id'] .'">
    <div class="content">
    <img src="admin/imges/'. $row['img'] .'">
    <div class="details">
    <span>'. $row['name'] .'</span>
    <p>this is text message</p>
    </div>
    </div>
    <div class="status-dot"><i class="fas fa-circle"></i></div>
    </a>';
    }