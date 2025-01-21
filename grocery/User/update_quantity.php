<?php
session_start();
include 'common/connection.php';

$product_id = $_POST["product_id"];
$quantity = $_POST["quantity"];
$userid= $_SESSION['userid'];

$exe = $obj->query("update cart set qty='$quantity' where product_id='$product_id' and customer_id='$userid' ");
if($exe)
{
	echo 1;
}
else
{
	echo 0;
}



?>