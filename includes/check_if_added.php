<?php

function check_if_added_to_cart($product_id)
{
    require 'common.php';
   
    $user_id=$_SESSION['id'];
    $query="select * from users_products where product_id='$product_id' and user_id='$user_id' and status='Added to Cart'";
    $result=mysqli_query($con,$query) or die(mysqli_error($con));
    if(mysqli_num_rows($result)>0)
    {
        return 1;
    }
    else
    {
        return 0;
    }
      
}
?>

