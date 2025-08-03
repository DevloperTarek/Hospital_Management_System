<?php 
    @include 'config.php';  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management - Patients Adding</title>
    <link rel="stylesheet" href="./assets/output.css" />
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-md mx-auto bg-white shadow p-6 rounded">
        <h2 class="text-2xl font-bold mb-4">Patients Registration Form</h2>
        <form action="" method="post" class="space-y-4">
            <input type="text" name="name" id="name" placeholder="Patient Name" class="w-full p-2 rounded transiton-all duration-300 ease-out focus:ouline-none" require />
            <input type="number" name="age" id="age" placeholder="Patient Age" class="w-full p-2 rounded transiton-all duration-300 ease-out focus:ouline-none" require />
            <input type="number" name="phone" id="phone" placeholder="Patient Phone Number" class="w-full p-2 rounded transiton-all duration-300 ease-out focus:ouline-none" require />
            <textarea name="problem" id="problem" class="w-full p-2 rounded transiton-all duration-300 ease-out focus:ouline-none" require></textarea>
            <button name="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Patient Register</button>
        </form>
    </div>
</body>
</html>

<?php 
    if(isset($_POST['submit'])){
        $stmt = $conn->prepare("INSERT INTO patients(name, age, phone, problem) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siss",$_POST['name'],$_POST['age'],$_POST['phone'],$_POST['problem']);
        $stmt->execute();
        echo "<script>alert('Patient Added Successfully'); window.location.href='all_patients.php';</script>";
    }
?>