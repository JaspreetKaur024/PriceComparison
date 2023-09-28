<?php
include('header.php');
?>
<h1 class="text-center text-danger">Register Website</h1>
<?php
if(isset($_REQUEST['msg'])){
    echo $_REQUEST['msg'];
}

?>
<form method="post">
<div class="row m-3">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Webstite Name:</label>
        
    </div>
    <div class="col-md-8">
        <input type="input field" name="webname" class="form-control" required="">
    </div>
</div>
<div class="row m-3">
<div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Logo:</label>
        
    </div>
    <div class="col-md-8">
        <input type="input field" name="logo" class="form-control" required="">
    </div>
</div>

</div>
<div class="row my-3">
    <div class="col-md-6"></div>
    <div class="col-md-2">
        <button name="btn" class="bg-primary" >Submit</button>
    </div>
</div>


</form>
<?php
include('config.php');
if(isset($_REQUEST['btn'])){
$website_name=$_REQUEST['webname'];
$logo=$_REQUEST['logo'];

$status='Active';
$query="INSERT INTO `websites` (`website_name`,`logo`,`status`)VALUES('$website_name','$logo','$status')";
$result=mysqli_query($connection,$query);
if($result>0){
    echo "<script>window.location.assign('managewebsite.php?msg=Registered successfully')</script>";
}
else{
    echo "<script>window.location.assign('addwebsite.php?msg=Invalid details.please register again')</script>";
}


}
?>
<?php
include('footer.php');
?>