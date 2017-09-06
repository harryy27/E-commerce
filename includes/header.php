<nav class="navbar navbar-inverse navbar-fixed-top ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand"><b>Lifestyle Store</b></a>
                </div>
                <div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <?php
                            if(!isset($_SESSION['email'])){?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                            <?php } 
                            else
                            { ?>
                            <li><a href = "cart.php"><span class = "glyphicon glyphicon-shoppingcart"></span> Cart </a></li>
                            <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span>Settings</a></li>
                            <li><a href = "logout.php"><span class = "glyphicon glyphicon-login"></span> Logout</a></li>
                            <?php } ?>
                        </ul>    
                    </div>
                </div>
            </div>
        </nav>
