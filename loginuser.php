<?php
session_start();
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  if(isset($_REQUEST['msg'])){

    echo $_REQUEST['msg'];
  }
  ?>
<form method="post">
<div class="row my-3">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Email:</label>
        
    </div>
    <div class="col-md-8">
        <input type="email"name="email"class="form-control">
    </div>
</div>
<div class="row my-3">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <label>Password:</label>
    </div>
    <div class="col-md-8">
        <input type="password" name="password" class="form-control">
    </div>
</div>

<div class="row my-3">
    <div class="col-md-6"></div>
    <div class="col-md-2">
        <button name="btn" class="bg-primary" >Log in</button>
    </div>
</div>
</form>
<?php
if(isset($_REQUEST['btn'])){
    include('config.php');
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
  $query="Select * from `user_register` where `email`='$email' and `password`='$password'";
  $result=mysqli_query($connection,$query);

$data=mysqli_fetch_array($result);
print_r($data);
 if(mysqli_num_rows($result)>0)
  //print_r($data);
  {
 //session start
$_SESSION['jass']=$data['email'];

 echo "<script>window.location.assign('index.php?msg=Log In successfully!!')</script>";
 }
  else{
    echo "<script>window.location.assign('loginuser.php?msg=Invalid email or password')</script>";
 }
}
?>
</body>
</html>
<?php
include('footer.php');
?>