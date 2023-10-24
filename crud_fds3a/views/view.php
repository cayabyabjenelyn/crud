<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="2">
        <thead>
            <th>Student ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Age</th>
            <th>Status</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Action</th>
        </thead>
        <?php
        require_once('../controller/action.php');

        $records = getRecords();

        if (!empty($records)) {
            foreach ($records as $key) {
        ?>
                <tbody>
                    <tr>
                        <td><?= $key['studid'] ?></td>
                        <td><?= $key['lname'] ?></td>
                        <td><?= $key['fname'] ?></td>
                        <td><?= $key['age'] ?></td>
                        <td><?= $key['stat'] ?></td>
                        <td><?= $key['address'] ?></td>
                        <td><?= $key['cn'] ?></td>

                        <td><a href="../update.php?id=<?= $key['id'] ?>">Edit</a>
                            <a href="delete.php?id=<?= $key['id'] ?>">Delete</a>
                        </td>
                    </tr>
                </tbody>
        <?php
            }
        } else {
            echo "No records found!";
        }
        ?>

    </table>

</body>

</html>