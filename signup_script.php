<?php
require'includes/common.php';
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=mysqli_real_escape_string($con,$_POST['address']);
$query1="SELECT id from users where email='$email'";
$result1=mysqli_query($con,$query1) or die(mysqli_error($con));
$pattern="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(mysqli_num_rows($result1)!=0)
{
    header("location: signup.php?signup_error=email already registered, please login to continue");
}
else
{
    if($first_name=="" or $last_name=="" or $email=="" or $password=="" or $contact=="" or $city=="" or $address=="")
    {
        header("location: signup.php?signup_error=all fields are necessary");
    }
    if(strlen($_POST['password'])<6)
    {
        header("location: signup.php?signup_error=password can't be shorter than 6 characters");
    }
    if(!preg_match($pattern,$email))
    {
        header("location: signup.php?signup_error=enter correct email");
    }
    $query2="INSERT INTO `users`(`id`, `email`, `first_name`, `last_name`, `password`, `contact`, `city`, `address`) VALUES(NULL,'$email','$first_name','$last_name','$password','$contact','$city','$address')  ";
   mysqli_query($con,$query2) or die(mysqli_error($con));
   $user_id=mysqli_insert_id($con);
   $_SESSION['email']=$email;
   $_SESSION['id']=$user_id;
   echo $_SESSION['email'];
   echo $_SESSION['id'];
  header('location: products.php');
    
    
}






