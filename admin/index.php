<?php
include('connect.php');
 if(!isset($_SESSION['StaffID'])) {
    echo "<script>

    alert('Please Login');

    window.location.assign('staff_login.php');

    </script>";
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <img src="logo.jpg" alt="">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <div class="section">
        <h1>Welcome to my sportwear shop</h1>
        <div class="image-container">
           <img src="./images/awaybackground.jpg" alt="">
        </div>
    </div>

</body>
</html>