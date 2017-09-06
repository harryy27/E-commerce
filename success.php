<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store | Success</title>
        
        <?php require'includes/common.php';
        if(!isset($_SESSION['email']))
        {
            header("location: login.php");
        }
        ?>
    </head>
    <body>
        <?php
        include'includes/header.php';
        $user_id=$_SESSION['id'];
        $product_id=$_GET['id'];
        $query="UPDATE users_products SET status='Confirmed' WHERE user_id='$user_id' AND product_id IN ($product_id)";
        mysqli_query($con,$query) or die(mysqli_error($con));
        
        ?>
        
        <div class="container">
            <div class="jumbotron row-margin">
                <center>
                    <h1><b>Congrats!Your order is successfully placed...!!!</b></h1>
                    <h3>Thank You for shopping with us. Click <a href="products.php">here</a> to purchase any other item.</h3>
                </center>
            </div>
        </div>
        
        <?php
        
        include'includes/footer.php';
        ?>
    </body>
</html>
