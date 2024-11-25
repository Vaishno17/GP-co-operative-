<?php
// error_reporting(0);

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




    if (count($errors) == 0) {
        
        $insert_data = "INSERT INTO `project` ( `name`, `addressf`, `phoneno`, `adhaarno`,`username`,`password`, `cpassword`,  `guarentorf`, `addf`, `guarentorsec`, `addsec`) VALUES ( '$name', '$addressf', '$phoneno', '$adhaarno','$username','$password','$cpassword', '$guarentorf', '$addf', '$guarentorsec', '$addsec')";
        mysqli_query($con, $insert_data);
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Form </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/user.css">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div id="login-form-wrap">
        <h2>Create Account</h2>
        <form action="Account_create.php" method="POST" id="login-form">
            <p>
                <input type="text" id="name" name="name" placeholder="Full Name" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="text" id="addressf" name="addressf" placeholder="Address" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="tel" id="phoneno" name="phoneno" placeholder="Phone Number" pattern="[0-9]{10}" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="tel" id="adhaarno" maxlength="19" name="adhaarno" placeholder="Adhaar Number" pattern="[0-9]{12}" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="text" id="username"  name="username" placeholder="Username"  required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="password" id="password"  name="password" placeholder="Password"  required><i class="validation"><span></span><span></span></i>
            </p>
            <p>                
                <input type="password" id="confirmpassword"  name="cpassword" placeholder="Confirm Password"  required><i class="validation"><span></span><span></span></i>
            </p>

            <h2>Guarantors</h2>
            <p>
                <input type="text" id="guarentorf" name="guarentorf" placeholder="Guarantor Full Name" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="text" id="addf" name="addf" placeholder="Address" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="text" id="guarentorsec" name="guarentorsec" placeholder="Guarantor Full Name" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="text" id="addsec" name="addsec" placeholder="Address" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="submit" id="login" name="submit" value="Submit" onclick="matchPassword()">
                <!-- lable  -->
            </p>
        </form>
        <div id="create-account-wrap">
            <p>
            <p>
        </div>
        <!--create-account-wrap-->
    </div>
    <!--login-form-wrap-->
    <!-- partial -->

    <!-- <script>
        function matchPassword() {
            var password = document.getElementById("password");
            var confirmpassword = document.getElementById("confirmpassword");
            if (password!=confirmpassword) {
                alert("Passwords didn't match !");
            }
        }
    </script> -->

</body>

</html>