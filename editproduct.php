<?php
include('header.php');
?>


<?php
if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
   // echo $id;
   include('config.php');
   $query="Select * from `product` where `id`='$id'";
   $result=mysqli_query($connection,$query);
   
   $data=mysqli_fetch_array($result);
  // print_r($data);
}
?>
<form method="post">
<div class="row m-3">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Product Name:</label>
        
    </div>
    <div class="col-md-8">
    <input type="text" name="product_name" value="<?php echo $data['product_name']?>" class="form-control">
    </div>
</div>
<div class="row m-3">
<div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Image:</label>
        
    </div>
    <div class="col-md-8">
    <input type="text" name="category" value="<?php echo $data['category']?>" class="form-control">
    </div>
</div>

<div class="row m-3">
<div class="col-md-1"></div>
    <div class="col-md-2">
        <label>thumbnail:</label>
        
    </div>
    <div class="col-md-8">
    <input type="text" name="thumbnail" value="<?php echo $data['thumbnail']?>" class="form-control">
    </div>
</div>
<div class="row m-3">
<div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Website:</label>
        
    </div>
    <div class="col-md-8">
    <input type="text" name="webname" value="<?php echo $data['website']?>" class="form-control">
    </div>
</div>
<div class="row m-3">
<div class="col-md-1"></div>
    <div class="col-md-2">
        <label>price:</label>
        
    </div>
    <div class="col-md-8">
    <input type="text" name="price" value="<?php echo $data['price']?>" class="form-control">
    </div>
</div>
<div class="row m-3">
<div class="col-md-1"></div>
    <div class="col-md-2">
        <label>MRP:</label>
        
    </div>
    <div class="col-md-8">
    <input type="text" name="mrp" value="<?php echo $data['MRP']?>" class="form-control">
    </div>
</div>
<div class="row m-3">
<div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Description:</label>
        
    </div>
    <div class="col-md-8">
       
    <textarea name="description" value="<?php echo $data['description']?>" class="form-control"></textarea>
    </div>
</div> 
<div class="row m-3">
<div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Quantity:</label>
        
    </div>
    <div class="col-md-8">
    <input type="number" name="date" value="<?php echo $data['quantity']?>" class="form-control">
    </div>

</div> 
<div class="row m-3">
<div class="col-md-1"></div>
    <div class="col-md-2">
        <label>status:</label>
        
    </div>
    <div class="col-md-8">
    <input type="text" name="status" value="<?php echo $data['status'] ?>" class="form-control">
    </div>

</div>   

<div class="row my-3">
    <div class="col-md-6"></div>
    <div class="col-md-2">
    <input type="hidden" name="id" value="<?php echo $data['id']?>" class="form-control">
        <button name="btn" class="bg-primary" >update</button>
    </div>
</div>
</form>
<?php
if(isset($_REQUEST['btn'])){
    $product_name=$_REQUEST['product_name'];
    $category=$_REQUEST['category'];
    $thumbnail=$_REQUEST['thumbnail'];
    $website=$_REQUEST['webname'];
    $price=$_REQUEST['price'];
    $mrp=$_REQUEST['mrp'];
    $description=$_REQUEST['description'];
    $quantity=$_REQUEST['quantity'];
    $status='Active';
    $id=$_REQUEST['id'];
    include('config.php');
     $q="UPDATE `product` SET `product_name`='$product_name',`category`='$category',`thumbnail`='$thumbnail',`website`='$website',`price`='$price','MRP`='$mrp',`description`='$description',`quantity`='$quantity',`status`='$status' WHERE `id`='$id'";
    $result=mysqli_query($connection,$q);
    if($result>0){
            echo "<script>window.location.assign('manageproduct.php?msg=Updated Successfully')</script>";
    }
    else{
        echo "<script>window.location.assign('manageproduct.php?Not Updated!! Try again Later')</script>";

    }
}

?>
<?php
include('footer.php');
?>