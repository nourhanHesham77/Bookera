<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    require "connect.php";

    $privi=$_POST['spriv'];
    $email=$_POST['mail'];

$update_customer=$connect->query("UPDATE customers set priv=1 WHERE email='$email'");

}