<?php
include('connect.php');

if(isset($_POST['btnsubmit'])) {
    $name = $_POST['txtbrandname'];

    
    $checkQuery = "SELECT * FROM brand
                   WHERE name = '$name'
                   ";
    $checkResult = mysqli_query($con,$checkQuery);
    
    $count = mysqli_num_rows($checkResult);
    
    if($count == 0 ) {
        $inseryQuery = "INSERT INTO brand(name) 
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
    <title>brandentry</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="catagoryname">BrandName</label>
        <input type="text" name="txtbrandname">
        <br>
        <input type="submit" name="btnsubmit" value="Add">
        <br>
        <input type="file" name="fileToUpload" accept="image/png, image/jpeg" multiple>
        <br>
    </form>
</body>
</html>