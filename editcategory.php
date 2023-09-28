<?php
 include('header.php');
 ?>
 <?php
 if(isset($_REQUEST['id'])){
     $id=$_REQUEST['id'];
    // echo $id;
    include('config.php');
    $query="Select * from `addcategory` where `id`='$id'";
    $result=mysqli_query($connection,$query); 
    $data=mysqli_fetch_array($result);
   // print_r($data);
 }
?>
<form method="post">
    <div class="row m-3">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <label>category Name:</label>
        </div>
        <div class="col-md-8">
            <input type="text" name="category_name" class="form-control" value="<?php echo $data['category_name']?>" >
        </div>
    </div>
    <div class="row m-3">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <label>thumbnail:</label>
        </div>
        <div class="col-md-8">
        <input type="text" name="thumbnail" class="form-control" value="<?php echo $data['thumbnail']?>" >  
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
        $category_name=$_REQUEST['category_name'];
        $thumbnail=$_REQUEST['thumbnail'];
        
        $id=$_REQUEST['id'];
        $status='Active';
    include('config.php');
    $query="UPDATE `addcategory` SET `category_name`='$category_name',`thumbnail`='$thumbnail',`status`='$status' WHERE `id`='$id'";
     $result=mysqli_query($connection,$query);
    
     if($result>0){
         echo "<script>window.location.assign('managecategory.php?msg=Updated successfully')</script>";
  }
     else{
       echo "<script>window.location.assign('managecategory.php?msg=Not Updated.Please Try Again!!')</script>";
     }
 }
 ?>
<?php
 include('footer.php');
 ?> 

