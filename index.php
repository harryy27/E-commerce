<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store</title>
        
        <?php
        require'includes/common.php';
        if(isset($_SESSION['email'])){
            header('location:products.php');
        }
            
        ?>
    </head>
    <body>
        <?php
        include'includes/header.php';
        ?>
        <div id="banner_image">
            <div class="container">
                <center>
                    <div id="banner_content">
                        <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </center>
            </div>
        </div>
        <?php
        include'includes/footer.php';
        ?>
    </body>
</html>
