<!DOCTYPE HTML>
<html>
    <title>Lifestyle Store | Password Changed</title>
    <?php require'includes/common.php';
    if(!isset($_SESSION['email']))
    {
        header("location: login.php");
    }
    ?>
</html>
<body>
    <?php include'includes/header.php';?>
    <div class="container">
        <div class="jumbotron">
            <center>
                <h2>Password changed successfully...!!!</h2>
                <h3><a href="products.php">Click here </a>to continue shopping.</h3>
            </center>
        </div>
    </div>
    <?php include'includes/footer.php';?>
    
</body>