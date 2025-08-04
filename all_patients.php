<?php 
    include 'config.php';

    $result = $conn->query("SELECT * FROM patients");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patients</title>
    <link rel="stylesheet" href="./assets/output.css" />
</head>
<body>
    <h3 class="title text-2xl text-center text-black mb-5">Add Patient Now</h3>
    <table class="bg-white shadow rounded max-w-md mx-auto">
        <thead>
            <tr class="mb-1">
                <th class="p-3 border rounded">#</th>
                <th class="p-3 border rounded">Name</th>
                <th class="p-3 border rounded">Age</th>
                <th class="p-3 border rounded">Phone</th>
                <th class="p-3 border rounded">Problem</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($value = $result->fetch_assoc()){
            ?>
            <tr>
                <td class="p-3 border rounded"><?php echo $value['id'] ?></td>
                <td class="p-3 border rounded"><?php echo $value['name'] ?></td>
                <td class="p-3 border rounded"><?php echo $value['age'] ?></td>
                <td class="p-3 border rounded"><?php echo $value['phone'] ?></td>
                <td class="p-3 border rounded"><?php echo $value['problem'] ?></td>
            </tr>
            <?php 
                }
            ?>
        </tbody>
    </table>
</body>
</html>