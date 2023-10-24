<?php

require_once __DIR__ . '/../config/config.php';

function connectDb()
{
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($conn->connect_error) {
        die("Connection Failed" . $conn->connect_error);
    }
    return $conn;
}
