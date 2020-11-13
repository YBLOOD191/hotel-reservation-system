
-<?php 
session_start();
error_reporting(1);
if($_SESSION['create_account_logged_in']!="")
{
header('location:Booking Form.php');
}
error_reporting(1);
require('connection.php');
extract($_REQUEST);
if(isset($login))
{
  if($eid=="" || $pass=="")
  {
  $error= "<h4 style='color:red'>fill all details</h4>";  
  }   
  else
  {
  $sql=mysqli_query($con,"select * from create_account where email='$eid' && password='$pass' ");
    if(mysqli_num_rows($sql))
    {
    $_SESSION['create_account_logged_in']=$eid;  
    header('location:Booking Form.php'); 
    }
    else
    {
    $error= "<h4 style='color:red'>Invalid login details</h4>"; 
    } 
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PRINCE HOTEL</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css">                                   <!-- Templatemo style -->

    
</head>
<body style="margin-top:0px;">
<?php
include('Menu Bar.php')
?>
 
 <div class="bg-img"style="background-image: url('jasper.jpg');
  background-repeat: no-repeat;height: 100%;background-size: cover;">
<div class="container-fluid"><!-- Primary Id-->
  <div class="container">
    <div class="row"><br>
      <div class="col-sm-4"></div>
        <div class="col-sm-4 text-center"style="box-shadow:2px 2px 2px;background-color:rgba(255, 255, 255, 0.349);"><br>

        	<h1 align="center"><b><font style="font-family: 'Lucida Handwriting', serif;text-shadow:1px 1px #000;">User Login</font></b></h1>
          <?php echo @$error; ?>
          <form method="post"><br>
              <div class="form-group"<center><img src="devlop/img2.jpg"class="img-responsive"style="width:200px;height:150px;border-radius:100%;"></center>
                <input type="Email" class="form-control"name="eid"placeholder="Email Id" autocomplete="off"required >
              </div>
            <div class="form-group">
                <input type="Password" class="form-control"name="pass"placeholder="Password" autocomplete="off"required>
            </div>
          <input type="submit" value="Login" name="login" class="btn btn-primary btn-group btn-group-justified"required>
          <div class="form-group forget">
                <a href="Forgot account.php">Forget Account</a>&nbsp; <b>|</b>&nbsp; 
                <a href="Registation form.php">Create an Account</a>
            </div>
      	</form><br>
        </div>
    </div><br>
  </div>
</div>

                        
            
<?php
include('Footer.php')
?>
</body>
</html>
