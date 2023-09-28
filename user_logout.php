<?php
session_start();
unset($_SESSION['jass']);//session destroy
echo "<script>window.location.assign('loginuser.php?msg=Logout Successfully!!')</script>";

?>
