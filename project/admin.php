<?php
include "config.php";
session_start();


if (!isset($_SESSION['login_admin']) ) {
  
if ($_SERVER['REQUEST_METHOD']=="POST") {
  $username =$_POST['username'];
$password =$_POST['password'];

$username =stripcslashes($username);
$password =stripcslashes($password);
$username =mysqli_real_escape_string($con,$username);
$password =mysqli_real_escape_string($con,$password);
$sql="select id from admin where username ='$username' and password = '$password'";
$result =mysqli_query($con,$sql);
$row =mysqli_fetch_array($result,MYSQLI_ASSOC);

// $active =$row['active'];
$count =mysqli_num_rows($result);

if($count ==1){
  // session_register("username");
  $_SESSION['login_admin']=$username;
 
  header("location:mainLIst.php");
  die();
}
else {
  $error ="your Login Password is invalid";
}


}
}
else {
  header("location:admin.php");
}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/admin.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="login-form-wrap">
  <h2>Admin Login</h2>
  <form method="POST"  id="login-form">
    <p>
    <input type="text" id="username" name="username" placeholder="Username" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="password" name="password" placeholder="password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" id="login" value="Login">
    </p>
  </form>
  <div id="create-account-wrap">
    <p>   <p>
  </div><!--create-account-wrap-->
</div><!--login-form-wrap-->
<!-- partial -->
  
</body>
</html>
