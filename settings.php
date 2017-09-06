<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store | Settings</title>
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
       
        ?>
        
        <div class="container">
            <div class="row row-margin">
                <div class="col-xs-offset-2 col-xs-8 col-sm-offset-4 col-sm-4">
                    <h3><b>Change Password</b></h3>
                    <form method="POST" action="settings_script.php">
                        <div class="form-group">
                            <input type="password" placeholder="Old Password" class="form-control" name='old_pass'>
                            <div class='error'><?php if(isset($_GET['old_pass_error']))
                            {
                                echo "*".$_GET['old_pass_error'];
                            }
                            ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="New Password" class="form-control" name='new_pass' required pattern='.{6,}$' 
                                   oninvalid='setCustomValidity("password must be atleast 6 characters long")' oninput='setCustomValidity("")' >
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Re-type New Password" class="form-control" name='re_new_pass'>
                            <div class='error'><?php if(isset($_GET['new_pass_error']))
                            {
                                echo "*".$_GET['new_pass_error'];
                            }
                            ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" href="settings.php">Change</button>
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
