<?php
 session_start();
include('header.php');
?>
<div class="container">
    <h1 class="text-center">Admin Login </h1>
    <?php
  if(isset($_REQUEST['msg'])){

    echo $_REQUEST['msg'];
  }
    ?>
    <!-- <form method="post" >
<div class="row my-4">
      <div class="col-md-1  "></div>
      <div class="col-md-1">
         <label class="">Email:</label>
     </div>
      <div class="col-md-9">
         <input type="email" name="mail" class="form-control ">
     </div>
</div>
<div class="row my-4">
    <div class="col-md-1  "></div>
    <div class="col-md-1">
       <label class="">Password:</label>
    </div>
      <div class="col-md-9">
        <input type="password" name="pass" class="form-control ">
    </div>
</div>
<div class="row">
    <div class="col-md-5"></div>
    <div class="col-md-3">
      <button name="btn" type="submit" class="bg-primary my-2">Login</button>
    </div>
</div>
  </form>  
</div> -->
<div class="modal-header text-center" >
                    <h5 class="modal-title " >Admin Login</h5>
                    
                       
                </div>
                <div class="modal-body pt-3 pb-5 px-sm-5">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <img src="images/p3.png" class="img-fluid" alt="login_image" />
                        </div>
                        <div class="col-md-6">
                            <form action="#" method="post">
                               
                                <div class="form-group">
                                    <label for="recipient-email" class="col-form-label">Email</label>
                                    <input type="email" class="form-control" placeholder=" " name="mail" id="recipient-email" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password1" class="col-form-label">Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="pass" id="password1" required="">
                                </div>
                                <!-- <div class="form-group">
                                    <label for="password2" class="col-form-label">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2" required="">
                                </div> -->
                                <div class="sub-w3l">
                                    <div class="sub-agile">
                                        <input type="checkbox" id="brand2" value="">
                                        <label for="brand2" class="mb-3">
                                            <span></span>I Accept to the Terms & Conditions</label>
                                    </div>
                                </div>
                                <div class="right-w3l">
                                    <input type="submit" class="form-control" value="Log in" name="btn">
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
</div>
<?php
if(isset($_REQUEST['btn'])){
    include('config.php');
$email=$_REQUEST['mail'];
$password=md5($_REQUEST['pass']);
 $query="Select * from `admin_form` where `email`='$email' and `password`='$password' ";
  $result=mysqli_query($connection,$query);
  $data=mysqli_fetch_array($result);
  //print_r($data);
  if(mysqli_num_rows($result)>0){
 //session start
 $_SESSION['user']=$data['email'];
  //echo $_SESSION['user'];
   echo "<script>window.location.assign('dashboard.php')</script>";
  }
  else{
    echo "<script>window.location.assign('adminlogin.php?msg=Invalid email or password')</script>";
  }
}
?>
<?php
include('footer.php');
?>