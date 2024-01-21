<?php
require "../admin/functions/connect.php";

$mainsearch=$_GET["mser"];

$searchterm = mysqli_real_escape_string($connect,$mainsearch);
$output="";
$get=$connect->query("SELECT * FROM products WHERE name LIKE '%{$searchterm}%'");

$num=$get->num_rows;

if($num>0){
    include "data_search.php";
  }else{
  $output .= "search not found";
  }
  
  echo$output;
