<?php
// user and admin login page


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
        margin: 0;
        padding: 0;
        background-color: #9f9da7;
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
        }
        .button {
          border: none;
          background-color: #329dd5;
          background-size: cover;
          background-position: center;
          padding: 15px 32px;
          text-align: center;
         
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
        }
        a{
            text-decoration: none;
            color: #fff;

        }
        u{
            text-decoration: none;
            
        }
        .button1
         {            
            font-size: 24px;
            padding: 14px 40px;
            border-radius: 5px;
        }

        .button2
        {
            font-size: 24px;
            padding: 14px 40px;
            border-radius: 5px;
        } 
        h1{
            color: #000;
            font-family: 'Times New Roman';
            font-size: 40px;
        }
        
        a:hover{
            color: rgb(0, 0, 0);
        }
        #login-form-wrap{background-color: #fff;
        width: 35%;
        margin: 150px auto;
        text-align: center;
        padding: 20px 0 40px 0;
        border-radius: 4px;
        box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);
        }
        
        </style>
         <br>
    <title>Login</title>
</head>
<body>
   
<div id="login-form-wrap">
    <center> <br>
        <h1> <u>Login Form</u>  
   <br><br><br>
    <button class="button button1" ><a href="User.php"> User Login</a></button> 
    
    <button class="button button2"><a href="admin.php"> Head Login</a></button> 

</h1>  
 </center> 
 
</div> 
</body>
</html>   