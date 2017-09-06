
<?php
require'includes/common.php';
$email=mysqli_real_escape_string($con,$_POST['email']);

$password=md5(mysqli_real_escape_string($con,$_POST['password']));
$query="SELECT id , password FROM users where email='$email'";
$query_result=mysqli_query($con,$query) or die(mysqli_error($con));
$data_array=mysqli_fetch_array($query_result);
$pass_enc=$data_array[1];

if(mysqli_num_rows($query_result)==0)
{
    
    header('location: login.php?login_error=not a registered user');
}
else
{
    if($pass_enc==$password)
    {
    
    $_SESSION['email']=$email;
    $_SESSION['id']=$data_array[0];
    header('location:products.php');
    }

    else{
        header("location: login.php?login_error=incorrect password");
    }
}

?>

