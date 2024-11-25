<?php

//logout of user
  session_start();
  if (session_destroy()) {
         header("location:User.php");
      }
?>