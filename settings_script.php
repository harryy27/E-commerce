<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
   header('location: index.php');
}
$old_pass=$_POST['old_pass'];
$user_id=$_SESSION['email'];
$new_pass=$_POST['new_pass'];
$re_new_pass=$_POST['re_new_pass'];
$query="select password from users where email='$user_id'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$pass=mysqli_fetch_array($result);

if( md5($old_pass)!=$pass[0])
{
  header("location: settings.php?old_pass_error=incorrect password");  
}

if($re_new_pass!=$new_pass)
{
    header( "location: settings.php?new_pass_error=passwords don't match");
}
$pass_enc=md5($new_pass);
$update_query="UPDATE `users` SET `password`='$pass_enc' WHERE email='$user_id'";
mysqli_query($con,$update_query) or die(mysql_error($con));
header("location: password_change_success.php");

?>