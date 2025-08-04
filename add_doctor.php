<?php 
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor</title>
    <link rel="stylesheet" href="./assets/output.css" />
</head>
<body class="flex items-center justify-center flex-col min-h-[600px] h-full">
    <h2 class="text-2xl text-center mb-2">Add Doctors</h2>
    <form action="" method="post" class="space-y-2 max-w-md mx-auto rounded">
        <input type="text" name="name" id="name" class="p-3 w-full rounded border outline-none" placeholder="Enter Doctor Name" require />
        <select name="specialization" id="specialization" class="p-3 w-full rounded border ouline-none">
            <option value="Ortho-Pedics">Ortho-Pedics</option>
            <option value="Ortho-Pedics">Sicology</option>
            <option value="Ortho-Pedics">Sicraticst</option>
            <option value="Ortho-Pedics">Zoology</option>
        </select>
        <button class="px-4 py-2 bg-blue-400 text-white text-capitalize cursor-pointer hover:bg-blue-600" name="submit">Doctor Register</button>
        <a href="add_patient.php" class="px-4 py-2 bg-blue-400 text-white text-capitalize cursor-pointer hover:bg-blue-600">Patient Register</a>
    </form>
</body>
</html>

<?php 
    if(isset($_POST['submit'])){
        $stmt = $conn->prepare('INSERT INTO doctor(name,specialization) VALUES (?,?)');
        $stmt->bind_param("ss",$_POST['name'],$_POST['specialization']);
        $stmt->execute();
        echo "<p class='absolute top-[50px] right-[20px] capitalize max-w-[280px] p-3 rounded bg-blue-300 text-black'>As a Doctor you added successfully</p>";
        echo "<script>window.location.href='admin-dashboard.php';</script>";
    }
?>