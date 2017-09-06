<?php
require'includes/common.php';
$product_id=$_GET['product_id'];
$user_id=$_SESSION['id'];
$query="DELETE FROM `users_products` WHERE user_id='$user_id' AND product_id='$product_id'";
mysqli_query($con,$query) or die(mysqli_error($con));
header("location: cart.php");


?>
