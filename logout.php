<?php

  session_start();

   unset($_SESSION['em']);
   unset($_SESSION['pd']);
   header("location:login.php");
  

?>
