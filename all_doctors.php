<?php 
    include "config.php";
    $res = $conn->query("SELECT * FROM doctor");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Doctors Added Here</title>
    <link rel="stylesheet" href="./assets/output.css" />
</head>
<body class="shadow max-w-md mx-auto rounded">
    <table class="border rounded w-full text-center">
        <h2 class="text-center mb-2 text-3xl text-capitalize">All Doctor Details</h2>
        <thead class="text-black">
            <tr>
                <th class="p-3 rounded border">#</th>
                <th class="p-3 rounded border">Doctor Name</th>
                <th class="p-3 rounded border">Doctor Specialize</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($req = $res->fetch_assoc()){
            ?>
            <tr>
                <td class="p-3 rounded border"><?php echo $req['id'] ?></td>
                <td class="p-3 rounded border"><?php echo $req['name'] ?></td>
                <td class="p-3 rounded border"><?php echo $req['specialization'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>