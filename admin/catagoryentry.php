<?php
include('connect.php');

if(isset($_POST['btnsubmit'])) {
    // echo "fasdjflajs";
    $name = $_POST['txtcatagoryname'];

    
    $checkQuery = "SELECT * FROM catagory 
                   WHERE name = '$name'
                   ";
    $checkResult = mysqli_query($con,$checkQuery);
    
    $count = mysqli_num_rows($checkResult);
    
    if($count == 0 ) {
        $inseryQuery = "INSERT INTO catagory(name) 
                        VALUES('$name')
                        ";
        $insertResult = mysqli_query($con,$inseryQuery);
        if($insertResult) {
            echo "<script>
    
            alert('$name is added to the database');
            </script>";
        } else {
            echo 'data not added'.mysqli_error();
        }
    } else {
        echo "already exist";
    }
    
}  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catagoryentry</title>
</head>
<body>

    <form action="#" method="POST">
        <h1>Catagory</h1>
        <label for="catagoryname">CatagoryName</label>
        <input type="text" name="txtcatagoryname">
        <br>
        <input type="submit" name="btnsubmit" value="Add">
        <input type="submit" name="btnsubmit" value="View">
        <input type="submit" name="btnsubmit" value="Edit">
        
    </form>
</body>
</html>