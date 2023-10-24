<?php
require_once __DIR__ . '/../controller/action.php';

if (isset($GET['id'])) {
    $selectstudent = selectstudent($_GET['id']);
    return $selectstudent;
}
