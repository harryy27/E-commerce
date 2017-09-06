<?php
require 'includes/common.php';
$product_id=$_GET['id'];
$user_id=$_SESSION['id'];
$query="INSERT INTO `users_products`(`user_id`, `product_id`, `status`) VALUES ('$user_id','$product_id','Added to Cart')";
mysqli_query($con,$query) or die(mysqli_error($con));
header("location: products.php");
?>
