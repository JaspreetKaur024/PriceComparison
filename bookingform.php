<?php
include('header.php');
?>
<form method="post">
<div class="row m-3">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <label>UserName:</label>
        
    </div>
    <div class="col-md-8">
        <input type="input field" name="user" class="form-control">
    </div>
</div>
<div class="row m-3">
<div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Email:</label>
        
    </div>
    <div class="col-md-8">
        <input type="email" name="email" class="form-control">
    </div>
</div>
<div class="row m-3">
  <div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Contact:</label>
        
    </div>
    <div class="col-md-8">
        <input type="number" name="contact" class="form-control">
    </div>
</div>
<div class="row m-3">
  <div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Address:</label>
        
    </div>
    <div class="col-md-8">
        <textarea name="address"></textarea>
    </div>
</div>
<div class="row m-3">
<div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Product:</label>
        
    </div>
    <div class="col-md-8">
    <input type="input field" name="product" class="form-control">
   
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
    $user_name=$_REQUEST['user'];
    $email=$_REQUEST['email'];
    $contact=$_REQUEST['contact'];
    $address=$_REQUEST['address'];
    $product=$_REQUEST['product'];
    $price=$_REQUEST['price'];
   
    $quantity=$_REQUEST['quantity'];

   
    $status='Active';
    $query="INSERT INTO `bookingform`(`user_name`,`email`,`contact`,`address`,`product`,`price`,`quantity`,`order_id`,`status`)VALUES('$user_name','$email','$contact','$address','$product','$price','$quantity','$order_id','$status')";
    $result=mysqli_query($connection,$query);
    if($result>0){
    //echo "<script>window.location.assign('manageproduct.php?msg=Added Successfully')</script>";
    }
   // echo "<script>window.location.assign('addproduct.php?msg=Failed.Please Try Again!!')</script>";
}
?>
<?php
include('footer.php');
?>