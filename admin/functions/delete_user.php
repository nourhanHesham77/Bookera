<?php

require "connect.php";

$id=$_GET['id'];

$delete=$connect->query("DELETE FROM users WHERE id = '$id'");

header("location:../users.php");