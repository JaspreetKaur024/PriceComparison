<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</head>
<body>
<?php
  if(isset($_REQUEST['msg'])){

    echo $_REQUEST['msg'];
  }
    ?>
<h1 class="text-center text-danger">User Register </h1>
<form method="post">
<div class="row m-3">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <label> Name:</label>
        
    </div>
    <div class="col-md-8">
        <input type="input field" name="username" class="form-control" required="">
    </div>
</div>
<div class="row m-3">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <label> Email:</label>
        
    </div>
    <div class="col-md-8">
        <input type=" email" name="email" class="form-control" required="">
    </div>
</div>
<div class="row m-3">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <label> Password:</label>
        
    </div>
    <div class="col-md-8">
        <input type=" password" name="password" class="form-control" required="">
    </div>
</div>
<div class="row m-3">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <label> Contact:</label>
        
    </div>
    <div class="col-md-8">
        <input type=" number" name="contact" class="form-control" required="">
    </div>
</div>
<div class="row m-3">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <label> Address:</label>
        
    </div>
    <div class="col-md-8">
        <textarea name="address"></textarea>
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
$username=$_REQUEST['username'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$contact=$_REQUEST['contact'];
$address=$_REQUEST['address'];
$status='Active';
  $query="INSERT INTO `user_register`(`username`,`email`,`password`,`contact`,`address`,`status`)VALUES('$username','$email','$password','$contact','$address','$status')";
 $result=mysqli_query($connection,$query);
 if($result>0){
    echo "<script>window.location.assign('loginuser.php?msg=Registered Successfully!!')</script>";
 }
 else{
   echo "<script>window.location.assign('userregister.php?msg=Registration Failed .Please Try Again Later!!')</script>";
  }

}
?>
</body>
</html>
<?php
include('footer.php');
?>