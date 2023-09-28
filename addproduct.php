<?php
include('header.php');
?>
<h1 class="text-center text-success">Add Product</h1>
<?php
if(isset($_REQUEST['msg'])){
    echo $_REQUEST['msg'];
}
?>
<form method="post">
<div class="row m-3">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Product Name:</label>
        
    </div>
    <div class="col-md-8">
        <input type="input field" name="product" class="form-control">
    </div>
</div>
<div class="row m-3">
<div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Category:</label>
        
    </div>
    <div class="col-md-8">
        <input type="input field" name="category" class="form-control">
    </div>
</div>
<div class="row m-3">
  <div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Thumbnail:</label>
        
    </div>
    <div class="col-md-8">
        <input type="input field" name="thumbnail" class="form-control">
    </div>
</div>
<div class="row m-3">
  <div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Website:</label>
        
    </div>
    <div class="col-md-8">
        <input type="input field" name="webname" class="form-control">
    </div>
</div>
<div class="row m-3">
  <div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Price:</label>
        
    </div>
    <div class="col-md-8">
        <input type="input field" name="price" class="form-control">
    </div>
</div>
<div class="row m-3">
  <div class="col-md-1"></div>
    <div class="col-md-2">
        <label>MRP:</label>
        
    </div>
    <div class="col-md-8">
        <input type="input field" name="mrp" class="form-control">
    </div>
</div>
<div class="row m-3">
<div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Description:</label>
        
    </div>
    <div class="col-md-8">
       
    <textarea name="description"></textarea>
    </div>
</div>
<div class="row m-3">
<div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Quantity:</label>
        
    </div>
    <div class="col-md-8">
        <input type="number" name="quantity" class="form-control">
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
    $product_name=$_REQUEST['product'];
    $category=$_REQUEST['category'];
    $thumbnail=$_REQUEST['thumbnail'];
    $website=$_REQUEST['webname'];
   
    $price=$_REQUEST['price'];
    $mrp=$_REQUEST['mrp'];
    $description=$_REQUEST['description'];

    $quantity=$_REQUEST['quantity'];
    $status='Active';
    $query="INSERT INTO `product`(`product_name`,`category`,`thumbnail`,`website`,`price`,`MRP`,`description`,`quantity`,`status`)VALUES('$product_name','$category','$thumbnail','$website','$price','$mrp','$description','$quantity','$status')";
    $result=mysqli_query($connection,$query);
    if($result>0){
        echo "<script>window.location.assign('manageproduct.php?msg=Added Successfully')</script>";
    }
    echo "<script>window.location.assign('addproduct.php?msg=Failed.Please Try Again!!')</script>";
}

?>
<?php
include('footer.php');
?>