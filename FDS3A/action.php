<?php

  require_once('conn.php');
  
  function getRecords(){
    $conn = connectDb();
    $query = "SELECT * FROM student";
    $result = $conn->query($query);
    $records = array();
    while($row = mysqli_fetch_assoc($result)){
      $records[] = $row;
    }
    return $records;
  }
   
?>