<?php 
    include 'all_doctors.php';
    include 'all_patients.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management Admin Dashboard</title>
    <link rel="stylesheet" href="./assets/output.css" />
</head>
<body>
    <header>
        <div class="container">
            <div class="header-container">
                <div class="logo">TMSS C.H</div>
                <div class="user-data">
                    <span class="doctor text-[16px] leading-[20px] capitalize tracking-wide"><?php $_POST['name']?></span>
                    <!-- <span class="patient"></span> -->
                </div>
            </div>
        </div>
    </header>
</body>
</html>