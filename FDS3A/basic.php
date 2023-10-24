<?php

   $conn = mysqli_connect("localhost", "root", "", "student3a");

   if($conn->connect_error){
      die("Connection failed". $conn->connect_error);
   }else{
      echo ("Connection Successful");
   }

?>