<?php
include('connect.php');

if (isset($_POST['btnsubmit'])) {
    $email = $_POST['txtemail'];
    $password = $_POST['txtpassword'];

    $checkQuery = "SELECT * FROM staff
                   WHERE email= '$email' 
                   AND password = '$password'
                   ";
    $checkResult = mysqli_query($con,$checkQuery);
    $count = mysqli_num_rows($checkResult);
    
    if($count <1) {
        echo "<script language='javascript'>";
        echo "alert('Email or password incorrect')";
        echo "</script>";
        // echo "<script>window.location='staff_login.php'</script>";
    } else {
        $arr = mysqli_fetch_array($checkResult);
        $_SESSION['StaffID']=$arr['id'];

		echo "<script>window.alert('Login successfully')</script>";
		echo "<script>window.location='index.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stafflogin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="#" method="POST">
        <label for="email">Email</label>
        <input type="email" name="txtemail" require>
        <br>

        <label for="password">password</label>
        <input type="password" name="txtpassword" require>

        <br>
        <input type="submit" name="btnsubmit" value="login">
        <input type="reset" name="btnreset" value ="cancel">
    </form>
</body>
</html>