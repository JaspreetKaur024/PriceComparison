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
        <label> Website Name:</label>
        
    </div>
    <div class="col-md-8">
    <input type="text" name="webname" value="<?php echo $data['website_name']?>" class="form-control">
    </div>
</div>
<div class="row m-3">
<div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Logo:</label>
        
    </div>
    <div class="col-md-8">
    <input type="text" name="Logo" value="<?php echo $data['Logo']?>" class="form-control">
    </div>
</div>
<div class="row m-3">
<div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Email:</label>
        
    </div>
    <div class="col-md-8">
       
    <textarea name="Email" value="<?php echo $data['Email']?>" class="form-control"></textarea>
    </div>
</div> 
<div class="row m-3">
<div class="col-md-1"></div>
    <div class="col-md-2">
        <label>password:</label>
        
    </div>
    <div class="col-md-8">
    <input type="password" name="password" value="<?php echo $data['password']?>" class="form-control">
    </div>

</div> 
<div class="row m-3">
<div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Contact:</label>
        
    </div>
    <div class="col-md-8">
    <input type="Contact" name="Contact" value="<?php echo $data['Contact'] ?>" class="form-control">
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
    $website_name=$_REQUEST['webname'];
    $logo=$_REQUEST['logo'];
    $email=$_REQUEST['email'];
    $contact=$_REQUEST['contact'];
    $status='Active';
    $id=$_REQUEST['id'];
    include('config.php');
    $query="UPDATE `websites` SET `website_name`='$website_name',`logo`='$logo',`email`='$email',`password`='$password',`contact`='$contact',`status`='$status' WHERE `id`='$id'";
   
    $result=mysqli_query($connection,$query);
    if($result>0){
            echo "<script>window.location.assign('managewebsite.php?msg=Updated Successfully')</script>";
    }
    else{
        echo "<script>window.location.assign('managewebsite.php?Not Updated!! Try again Later')</script>";

    }
}

?>
<?php
include('footer.php');
?>