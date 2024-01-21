<?php
require "connect.php";


$get_customer=$connect->query("SELECT * FROM customers ORDER BY id DESC");
$row_customer =$get_customer ->fetch_assoc();
$privi=$row_customer['priv'];
if($privi==0){
echo$row_customer['email'];
}else{
    echo "false";
}

