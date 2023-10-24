<?php

require_once __DIR__ . '/../database/conn.php';
require_once __DIR__ . '/../controller/action.php';



if (isset($_POST['btn-update'])) {

    $id = $_POST['id'];
    $studid = $_POST['studid'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $age = $_POST['age'];
    $stat = $_POST['stat'];
    $address = $_POST['address'];
    $cn = $_POST['cn'];


    $bool = updatestudent($id, $studid, $lname, $fname, $age, $stat, $address, $cn);
    if ($bool) {
        echo "Data Updated Successfully";
        header("location: ../update_student.php?id=$id");
    } else {
        echo "Something Went Wrong";
    }
}
