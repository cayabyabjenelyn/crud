<?php

   require_once('config.php');

   function connectdb(){
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

   if($conn->connect_error){
    die("Connection Failed". $conn->connect_error);
   }else{
    echo("Connection Successful");
   }
   return $conn;
}
?>