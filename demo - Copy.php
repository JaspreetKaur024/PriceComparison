<?php
    session_start();
    if(!isset($_SESSION['admin'])){
        echo "<script>window.location.assign('adminlogin.php?msg=Please login!!')</script>"; 
    }
            $admin=$_SESSION['admin']; //session store
        include('header.php');
        ?>
        <h1>Welcome admin<?php echo $_SESSION['admin']?> </h1>
        <a href="admin_logout.php"><button>Logout</button></a>
<?php
include('footer.php');
?>