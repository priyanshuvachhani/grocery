<?php
include 'common/connection.php';
$id =$_GET['dcid'];

$d =$obj->query("delete from cart where cart_id='$id'");
if ($d)
 {
	header('location:cart.php');
}
else{
	echo"<script>alert('error in delete')</script>";
}


?>