<?php
session_start();
unset($_SESSION['admin']);//session destroy
echo "<script>window.location.assign('adminlogin.php?msg=Logout Successfully!!')</script>";

?>
