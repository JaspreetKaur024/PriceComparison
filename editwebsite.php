 <?php
 include('header.php');
 ?>
 <?php
 if(isset($_REQUEST['id'])){
     $id=$_REQUEST['id'];
    // echo $id;
    include('config.php');
    $query="Select * from `websites` where `id`='$id'";
    $result=mysqli_query($connection,$query); 
    $data=mysqli_fetch_array($result);
   // print_r($data);
 }
?>
<form method="post">
    <div class="row m-3">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <label>Website Name:</label>
        </div>
        <div class="col-md-8">
            <input type="text" name="webname" class="form-control" value="<?php echo $data['website_name']?>" >
        </div>
    </div>
    <div class="row m-3">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <label>Logo:</label>
        </div>
        <div class="col-md-8">
        <input type="text" name="logo" class="form-control" value="<?php echo $data['logo']?>" >  
        </div>
    </div>
    
    <div class="row m-3">
            <div class="col-md-5"></div>
            <div class="col-md-2">
                <input type="hidden" name="id" value="<?php echo $data['id']?>" class="form-control">
             <button class="bg-primary" name="btn">Update</button>
            </div>
    </div>

</form>
<?php 

if(isset($_REQUEST['btn'])){
        $website_name=$_REQUEST['webname'];
        $logo=$_REQUEST['logo'];
        
        $id=$_REQUEST['id'];
        $status='Active';
    include('config.php');
    $query="UPDATE `websites` SET `website_name`='$website_name',`logo`='$logo',`status`='$status' WHERE `id`='$id'";
     $result=mysqli_query($connection,$query);
    
     if($result>0){
         echo "<script>window.location.assign('managewebsite.php?msg=Updated successfully')</script>";
  }
     else{
       echo "<script>window.location.assign('managewebsite.php?msg=Not Updated.Please Try Again!!')</script>";
     }
 }
 ?>
<?php
 include('footer.php');
 ?> 

