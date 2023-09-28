<?php
include('header.php');
?>
<?php
if(isset($_REQUEST['msg'])){
  echo $_REQUEST['msg'];
}

?>

  <div>  
        <h5 class="head_agileinfo text-center text-capitalize ">
            <span>W</span>elcome</h5>
</div>
<h1 class="text-center">Admin Login</h1>
<form>
<div class="row">
      <div class="col-md-1  "></div>
      <div class="col-md-1">
         <label class="my-4">Email:</label>
     </div>
      <div class="col-md-9">
         <input type="email" name="mail" class="form-control my-3">
     </div>
</div>
<div class="row">
    <div class="col-md-1  "></div>
    <div class="col-md-1">
       <label class="my-4">Password:</label>
    </div>
      <div class="col-md-9">
        <input type="password" name="pass" class="form-control my-4">
    </div>
</div>
<div class="row">
    <div class="col-md-5"></div>
    <div class="col-md-3">
      <button name="btn" type="submit" class="bg-primary my-2">Login</button>
    </div>
</div>
  </form>     
<?php

if(isset($_REQUEST['btn'])){
$mail=$_REQUEST['mail'];
$password=md5($_REQUEST['pass']);
$status='Active';
include('demo.php');
// echo $mail;
$query="INSERT INTO `admin`(`email`,`password`,`status`)VALUES('$mail','$password','$status')";
  $result=mysqli_query($connection,$query);
if($result>0){
     echo "<script>window.location.assign('webpage.php?msg=Form submitted successfully')</script>";
}
 else{

 echo " <script>window.location.assign('webpage.php?msg=Error Occured!! Try Again')</script>";
  }

}

?>

 
   
    

<?php
include('footer.php');
?>