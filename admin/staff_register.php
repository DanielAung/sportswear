 <?php
 include('connect.php');
 
 if(isset($_POST['btnsubmit'])) {
     $name = $_POST['txtname'];
     $role = $_POST['txtrole'];
     $password = $_POST['txtpassword'];
     $email = $_POST['txtemail'];
     $address = $_POST['txtaddress'];
     $gender = $_POST['txtgender'];

     $checkQuery = "SELECT *FROM staff 
                    WHERE email = '$email'
                    ";
    $checkResult = mysqli_query($con,$checkQuery);

    $count = mysqli_num_rows($checkResult);
    if($count == 0) {
        $insertQuery = "INSERT INTO staff(name,role,password,email,address,gender) 
                        VALUES('$name','$role','$password','$email','$address','$gender')
                        ";
       $insertResult = mysqli_query($con,$insertQuery);
    
       if($insertResult) {
        echo "<script>

        alert('Register Successful');

        window.location.assign('index.php');

        </script>";
       } else {
           echo "data not recorded".mysqli_error();
       }
    } else {
        echo "data already existed";
    }

 }
 
 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>StaffRegister</title>
     <link rel="stylesheet" href="style.css">
 </head>
 <body>
     <form action="#" method="POST">
         <label for="name">Name</label>
         <input type="text" name="txtname" require>

        <br>

         <label for="role">role</label>
         <select name="txtrole" id="role">
             <option value="staff">staff</option>
             <option value="admin">admin</option>
             <option value="casher">casher</option>
         </select>
        <br>

         <label for="password">password</label>
         <input type="password" name="txtpassword" require>
        <br>

         <label for="email">email</label>
         <input type="email" name="txtemail" require>
        <br>

         <label for="address">address</label>
         <input type="text" name="txtaddress" require>
         <br>

         <label for="gender">gender</label>
         <label for="male">Male</label>
         <input type="radio" name="txtgender" value="male"> 
         <label for="male">female</label>
         <input type="radio" name="txtgender" value="female"> 
        <br>

         <input type="submit" value="Register" name="btnsubmit">
         <input type="reset" value="Cancel" name="btncancel">
         
         

         <!-- name,role,password,email,address,gender register,cancel -->
     </form>
 </body>
 </html>