<?php 
session_start();
require "config.php";
$name = "";
$addressf="";
$phoneno="";
$adhaarno="";
$password="";
$cpassword="";

$guarentorf="";
$addf="";
$guarentorsec="";
$addsec="";

$errors = array();

//if user signup button
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $addressf = mysqli_real_escape_string($con, $_POST['addressf']);
    $phoneno = md5($_POST['phoneno']);
    $adhaarno = md5($_POST['adhaarno']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    $guarentorf = mysqli_real_escape_string($con, $_POST['guarentorf']);
    $addf = mysqli_real_escape_string($con, $_POST['addf']);
    $guarentorsec = mysqli_real_escape_string($con, $_POST['guarentorsec']);
    $addsec = mysqli_real_escape_string($con, $_POST['addsec']);

    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM project WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO `project` ( `name`, `addressf`, `phoneno`, `adhaarno`,`password`, `cpassword`,  `guarentorf`, `addf`, `guarentorsec`, `addsec`) VALUES ( '$name', '$addressf', '$phoneno', '$adhaarno','$password','$cpassword', '$guarentorf', '$addf', '$guarentorsec', '$addsec')";
         mysqli_query($con, $insert_data);
       
    }

}
 
   
?>