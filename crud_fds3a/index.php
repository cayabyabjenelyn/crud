<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="views/view.php"> View Data</a>
    <form action="views/insert_student.php" method="post">
        <input type="text" name="studid" placeholder="Enter Your Studid..">
        <input type="text" name="lname" placeholder="Enter Your Last Name..">
        <input type="text" name="fname" placeholder="Enter Your First Name..">
        <input type="text" name="age" placeholder="Enter Your Age..">
        <input type="text" name="stat" placeholder="Enter Your Status..">
        <input type="text" name="address" placeholder="Enter Your Address..">
        <input type="text" name="cn" placeholder="Enter Your Contact Number..">
        <input type="submit" name="btnsave">
    </form>
</body>

</html>