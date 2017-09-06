<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store | Sign Up</title>
        <?php
        require'includes/common.php';
        if(isset($_SESSION['email']))
        {
            header('location:products.php');
        }
        ?>
    </head>
    <body>
        <?php
        include'includes/header.php';
        ?>
        
        <div class="container row-margin" >
            <div class="row">
                <div class="col-xs-offset-2 col-xs-8 col-sm-offset-4 col-sm-4">
                    <h1><b>SIGN UP</b></h1>
                    <form method="POST" action="signup_script.php">
                        <div class="error"><?php if(isset($_GET['signup_error']))
                        {
                            echo"*".$_GET['signup_error'];
                        }
                        ?>
                        </div>
                        <div class="form-group">
                            <input required type="text" placeholder="First Name" class="form-control" name="first_name">
                        </div>
                        <div class="form-group">
                            <input required type="text" placeholder="Last Name" class="form-control" name="last_name">
                        </div>
                        <div class="form-group">
                            <input required type="email" placeholder="Email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" 
                                   oninvalid="setCustomValidity('enter correct email')" oninput='setCustomValidity("")' name="email">
                        </div>
                        <div class="form-group">
                            <input required type="password" placeholder="Password" class="form-control" pattern=".{6,}$"
                                   oninvalid="setCustomValidity('password can\'t be shorter than 6 characters')" oninput='setCustomValidity("")' name="password">
                        </div>
                        <div class="form-group">
                            <input required type="text" placeholder="Contact" class="form-control" pattern="[0-9]{10,10}$" name="contact"
                                   oninvalid="setCustomValidity('please enter corect contact')" oninput='setCustomValidity("")' name="contact">
                        </div>
                        <div class="form-group">
                            <input required type="text" placeholder="City" class="form-control" name="city">
                        </div>
                        <div class="form-group">
                            <input required type="text" placeholder="Address" class="form-control" name="address">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit" href="signup.php">
                        </div>
                    </form>    
                </div>
            </div>
        </div>
        
        <?php
        include'includes/footer.php';
        ?>

    </body>
</html>
