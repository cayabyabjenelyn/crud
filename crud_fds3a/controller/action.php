<?php
require_once __DIR__ . '/../database/conn.php';
function getRecords()
{
    $conn = connectDb();
    $query = "SELECT * FROM student";
    $result = $conn->query($query);
    $records = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $records[] = $row;
    }
    return $records;
}

function insertStudent($studid, $lname, $fname, $age, $stat, $address, $cn)
{
    $conn = connectDb();
    $qry = "INSERT INTO student(studid,lname,fname,age,stat,address,cn)
                 VALUES ('$studid',' $lname',' $fname','$age','$stat','$address','$cn')";
    $res = $conn->query($qry);

    return $res;
}
function deletestudent($id)
{
    $conn = connectDb();
    $qry = $conn->query("DELETE FROM student WHERE id = '$id'");

    return $qry;
}

function selectstudent($id)
{
    $conn = connectDb();
    $qry = $conn->query("SELECT * FROM student WHERE id = '$id'");
    return $qry;
}
function updatestudent($id, $studid, $lname, $fname, $age, $stat, $address, $cn)
{
    $conn = connectDb();
    $qry = $conn->query("UPDATE student
                            SET studid='$studid',lname='$lname','fname='$fname',age='$age',stat='$stat',address='$address',cn='$cn'
                            WHERE id = '$id'");

    return $qry;
}
