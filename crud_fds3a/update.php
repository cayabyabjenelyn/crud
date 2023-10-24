    <?php
    require_once __DIR__ . '/./views/select.php';
    foreach ($selectstudent as $key) :
    ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>

        <body>



            <a href="views/view.php">View Data</a>
            <h1>This is Update Panel</h1>


            <form action="views/update_student.php" method="post">
                <input type="hidden" name="id" value="<?= $key['id']; ?>">
                <input type="text" name="studid" placeholder="Enter Your Studid.." value="<?= $key['studid']; ?>">
                <input type="text" name="lname" placeholder="Enter Your Last Name.." value="<?= $key['lname']; ?>">
                <input type="text" name="fname" placeholder="Enter Your First Name.." value="<?= $key['fname']; ?>">
                <input type="text" name="age" placeholder="Enter Your Age.." value="<?= $key['age']; ?>">
                <input type="text" name="stat" placeholder="Enter Your Status.." value="<?= $key['stat']; ?>">
                <input type="text" name="address" placeholder="Enter Your Address.." value="<?= $key['address']; ?>">
                <input type="text" name="cn" placeholder="Enter Your Contact Number.." value="<?= $key['cn']; ?>">
                <input type="submit" name="btn-update" id="btn">
            </form>


        </body>
    <?php
    endforeach;
    ?>

        </html>