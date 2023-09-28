<?php
include('header.php');
?>
<?php
if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    include('config.php');
    $query="Delete from `product` where `id`=$id";
    $result=mysqli_query($connection,$query);
    if($result>0){
        echo "<script>window.location.assign('manageproduct.php?msg=Deleted Successfully!!')</script>";
    }
    else{
        echo "<script>window.location.assign('manageproduct.php?msg=Try again later!!')</script>";
    }

}

?>
<?php
include('footer.php');
?>
