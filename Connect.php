<?php 

   $server="localhost";
   $username="root";
   $password="";
   $db="registration";

   $conn=mysqli_connect($server,$username,$password,$db);

   if(!$conn)
   {
       die('Error 404 '.mysqli_connect_error());
   }
  else
  {
      
      //echo "connected Succesfully";
  }



?>