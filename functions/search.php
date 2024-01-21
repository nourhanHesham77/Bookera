<?php

require "../admin/functions/connect.php";

$searchterm=mysqli_real_escape_string($connect,$_POST['searchterm']);
$output="";
$get=$connect->query("SELECT * FROM customers WHERE name LIKE '%{$searchterm}%'");

$num=$get->num_rows;

if($num>0){
  include "data.php";
}else{
$output .= "search not found";
}

echo$output;

