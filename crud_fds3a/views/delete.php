<?php

require_once('../controller/action.php');

$id = $_GET['id'];
$res = deletestudent($id);

if ($res) {
    header("location: view.php");
} else {
    echo "Something Went Wrong!";
}
