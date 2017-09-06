<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store | Login</title>
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
        <div class="container panel-width">
            <div class="row row-margin">
                <div class="col-sm-offset-4 col-sm-4 col-xs-offset-2 col-xs-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning"><i>Login to make a purchase</i></p>
                            <form method="POST" action="login_script.php">
                                <div class="error">
                                    <?php if(isset($_GET['login_error']))
                                    {
                                     
                                    $msg= $_GET['login_error'];
                                    
                                    echo "*".$msg;
                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <input required type="email" placeholder="Email" class="form-control" name='email' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" 
                                           oninvalid='setCustomValidity("enter correct email")' oninput="setCustomValidity('') ">
                                    
                                </div>
                                <div class="form-group">
                                    <input required type="password" placeholder="Password" class="form-control" name="password" pattern=".{6,}$" 
                                           oninvalid='setCustomValidity("password must be atleast 6 characters long")' oninput='setCustomValidity("") '>
                                    
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" href="login.php">Login</button>
                                    
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <p>Don't have an account?<a href='signup.php'>Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <?php
        include'includes/footer.php';
        ?>
    </body>
</html>
