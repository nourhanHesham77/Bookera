<?php

session_start();

require "../admin/functions/connect.php";

$out=$_POST['outgo'];
$in=$_POST['income'];
$output="";

$gett=$connect->query("SELECT * FROM messages WHERE (FromUser = {$out} AND ToUser = {$in}) 
OR (FromUser = {$in} AND ToUser = {$out})");

$num=$gett->num_rows;

if($num>0){
    while($row= $gett->fetch_assoc()){
        if($row['FromUser'] === $out){
            $output .='<div class="chatt outgoing">
            <div class="details">
            <p>'. $row['chat'] .'</p>
            </div>
            </div>';
        }else{
            $mg=$connect->query("SELECT * FROM customers WHERE id='$in'");
            $mg_row=$mg->fetch_assoc();
            $output .= '<div class="chatt incoming">
            <img src="admin/imges/'. $mg_row['img'] .'">
        <div class="details">
        <p>'. $row['chat'] .'</p>
        </div>
        </div>
        ';
        }
    }
}

echo$output;