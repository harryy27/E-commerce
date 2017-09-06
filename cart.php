<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store | Cart</title>
        <?php
        require 'includes/common.php';
        if(!isset($_SESSION['email']))
        {
            header("location: login.php");
        }
        ?>
    </head>
    <body>
        <?php
       include'includes/header.php';
        ?>
        <div class="container">
            
                <center>
                    <div class="table-responsive table-width">
                <table class="table table-bordered table-margin table-hover ">
                    
                   <?php $user_id=$_SESSION['id'];
                   
                    $query="SELECT product_id FROM users_products INNER JOIN users ON users_products.user_id=users.id WHERE status='Added to Cart'";
                    $result=mysqli_query($con,$query) or die(mysqli_query($con));
                   
                    if(mysqli_num_rows($result)==0)
                    {
                        echo"<div class='jumbotron'><h2>Add  products to the Cart first...!!!</h2><h3><a href='products.php'>Click here </a>to Shop.</h3></div>";
                    }
                    else 
                    {
                    echo "<tr><th>Item Number</th><th>Item Name</th><th>Price</th><th>      </th></tr>";
                    $index=0;
                    $amount=0;
                    $id="";
                    while($res_array=mysqli_fetch_array($result))
                    {
                        if($id=="")
                        {
                            $id=$res_array['product_id'];
                        }
                        else
                        {
                        $id=$id.",".$res_array['product_id'];
                        }
                        $index=$index+1;
                        $prod_query="select name, price from products where id='$res_array[0]'";
                        $prod_result=mysqli_query($con,$prod_query) or die(mysqli_error($con));
                        $prod_array=mysqli_fetch_array($prod_result);
                        $amount=$amount+$prod_array['price'];
                        
                        $link="cart-remove.php?product_id=$res_array[0]";
                      ?>
                    
                    <tr><td><center><?php echo $index?></center></td><td><?php echo $prod_array['name']."<br>". "<a href='$link' class='remove_item_link'> Remove</a>";?></td><td><?php echo "Rs. ".$prod_array['price']?></td><td></td></tr>

                
                    <?php }
                    
                    echo '<tr><td></td><td>Total Amount</td><td>Rs. '.$amount.'</td><td><a href="success.php?id='.$id.'"><button class="btn btn-primary">Confirm-Order</button></a></td></tr>';
                    }
                    ?>
                    
                    
                </table>
                    </div>
                </center>
        </div>
        
        <?php
        include'includes/footer.php';
        ?>
    </body>
</html>
