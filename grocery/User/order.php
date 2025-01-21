<?php

session_start();

include 'common/connection.php';

$ord_date = date("Y-m-d");
$user_id = $_SESSION['userid'];






$amount = $_SESSION['price'];
$i_id = $_SESSION['idea_id'];
$inn_id = $_SESSION['inn_id'];

$con->query("INSERT INTO `myorder`(`ord_date`, `u_id`, `i_id`, `amount`, `inn_id`) VALUES ('$ord_date','$u_id','$i_id','$amount','$inn_id')");

$order_id = $con->insert_id;


$con->query("INSERT INTO `payment`(`user_id`, `order_id`,`amount`) VALUES ('$u_id','$order_id','$amount')");


$apiKey = "rzp_test_pLl681e9OrLq4X";

$profile_data = $con->query("select * from user where u_id='$u_id'");
$profile = $profile_data->fetch_object();


  
?>