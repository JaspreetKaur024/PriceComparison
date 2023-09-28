<?php
include('header.php');
?>
<h1 class="text-center text-danger">Add Category</h1>
<?php
if(isset($_REQUEST['msg'])){
    echo $_REQUEST['msg'];

}

?>
<form method="post">
<div class="row my-3">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Category  Name:</label>
        
    </div>
    <div class="col-md-8">
        <input type="inputfield"name="category_name"class="form-control">
    </div>
</div>
<div class="row my-3">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Thumbnail:</label>
    </div>
    <div class="col-md-8">
        <input type="input field" name="thumbnail" class="form-control">
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
    $category_name=$_REQUEST['category_name'];
    $thumbnail=$_REQUEST['thumbnail'];
    $status='Active';

$query="INSERT INTO `addcategory`(`category_name`,`thumbnail`,`status`)VALUES('$category_name','$thumbnail','$status')";
$result=mysqli_query($connection,$query);
if($result>0){
    echo "<script>window.location.assign('managecategory.php?msg=Added Successfully')</script>";
}
else{
echo "<script>window.location.assign('addcategory.php?msg=Failed.Please Try Again!!')</script>";
}
}

?>
<?php
include('footer.php');
?>