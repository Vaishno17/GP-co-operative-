<?php
error_reporting(0);
session_start();
require "config.php";

$errors = array();

//if user signup button
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $addressf = $_POST['addressf'];
    $phoneno = $_POST['phoneno'];
    $adhaarno = $_POST['adhaarno'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $guarentorf = $_POST['guarentorf'];
    $addf = $_POST['addf'];
    $guarentorsec = $_POST['guarentorsec'];
    $addsec = $_POST['addsec'];

    if ($password != $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    }

    // $email_check = "SELECT * FROM project WHERE email = '$email'";
    // $res = mysqli_query($con, $email_check);

    // if (mysqli_num_rows($res) > 0) {
    //     $errors['email'] = "Email that you have entered is already exist!";
    // }

    if (count($errors) == 0) {
        // $encpass = password_hash($password, PASSWORD_BCRYPT);
        // $code = rand(111111, 999999); 
        // $status = "notverified";

        $insert_data = "INSERT INTO `project` ( `name`, `addressf`, `phoneno`, `adhaarno`,`username`,`password`, `cpassword`,  `guarentorf`, `addf`, `guarentorsec`, `addsec`) VALUES ( '$name', '$addressf', '$phoneno', '$adhaarno','$username','$password','$cpassword', '$guarentorf', '$addf', '$guarentorsec', '$addsec')";
        mysqli_query($con, $insert_data);
    }
}


