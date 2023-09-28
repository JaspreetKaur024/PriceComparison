<?php
session_start();
if(!isset($_SESSION['user'])){ //session check
    echo "<Script>window.location.assign('adminlogin.php?msg=Please login!!')</script>";
}
$email=$_SESSION['user']; //session store
include('header.php');
?>
<h1>WELCOME ADMIN <?php echo $_SESSION['user']?></h1> <!--session use-->

<?php
include('footer.php');

?>