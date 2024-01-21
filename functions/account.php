<?php

session_start();

require "../admin/functions/connect.php";

$select=$connect->query("SELECT * FROM customers");

$output="";
$num=$select->num_rows;

if($num==1){
$output .="NO users are available";

}elseif($num>0){

while($row=$select ->fetch_assoc() ){
$output .= '<a href="#">
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

}

echo$output;