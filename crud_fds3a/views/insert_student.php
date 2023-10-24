<?php

require_once('../controller/action.php');
$id = $_POST['id'];
$studid = $_POST['studid'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$age = $_POST['age'];
$stat = $_POST['stat'];
$address = $_POST['address'];
$cn = $_POST['cn'];


if (isset($_POST['btnsave'])) {
   $bool = insertStudent($id, $studid, $lname, $fname, $age, $stat, $address, $cn);
   if ($bool) {
      echo "Data Inserted Successfully";
      header("location: ../index.php");
   } else {
      echo "Something Went Wrong";
   }
}
