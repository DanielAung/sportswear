<?php
include('connect.php');

unset($_SESSION["StaffID"]);

echo "

<script>
alert('logout successfully');
window.location='staff_login.php'

</script>";

?>