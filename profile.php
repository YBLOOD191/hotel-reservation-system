<?php 
session_start();
error_reporting(1);
include('connection.php');
$eid=$_SESSION['create_account_logged_in'];
extract($_REQUEST);
if(isset($update))
{
$que="update create_account set name='$name',password='$pass',mobile='$mob',address='$add' where email='$eid'";
mysqli_query($con,$que);
$msg= "<h3 style='color:blue'>Profile Updated successfully</h3>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PRINCE Hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
 <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
</head>
<body style="background-color:#6d6e6a; margin-top:50px;">
  <?php
  include('Menu Bar.php');
  ?>
 <?php
     $sql= mysqli_query($con,"select * from create_account where email='$eid' "); 
     $result=mysqli_fetch_assoc($sql);
?>
<div class="bg-img"style="background-image: url('jasper.PNG');background-repeat: no-repeat;height: 50%;background-size: cover;">
<div class="container-fluid"id="primary"><!--Primary Id-->
  <center><h1 style="font-family: 'Lucida Handwriting', serif;text-shadow:1px 1px #000;">User Profile</h1></center><br>
  <div class="container">
    <div class="row">
	<center><?php  echo $msg; ?></center>
     <form class="form-horizontal" method="post">
       <div class="col-sm-6">
          <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4> Name :</h4></div>
                <div class="col-sm-8">
                 <input type="text" name="name" value="<?php echo $result['name']; ?>"class="form-control"/>
          </div>
        </div>
      </div>
      

      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Email-Id:</h4></div>
                <div class="col-sm-8">
                 <input type="text" value="<?php echo $result['email']; ?>"class="form-control"/readonly="readonly">
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Password:</h4></div>
                <div class="col-sm-8">
                 <input type="text" name="pass" value="<?php echo $result['password']; ?>"class="form-control"/>
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Mobile:</h4></div>
                <div class="col-sm-8">
                 <input type="text" name="mob" value="<?php echo $result['mobile']; ?>"class="form-control"/>
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Address:</h4></div>
                <div class="col-sm-8">
                 <input type="text" name="add" value="<?php echo $result['address']; ?>"class="form-control"/>
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Gender:</h4></div>
                <div class="col-sm-8">
                 <strong><?php echo $result['gender']; ?></strong>
          </div>
        </div>
      </div>
      
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-5"></div>
                <div class="col-sm-7	">
                 <input type="submit" value="Update Profile" name="update" class="btn btn-primary"/>
          </div>
        </div>
      </div>
    </div>
    </div>
<!--User Profile Update Query-->
        </form>
      </div>
   </div>
 </div>
<?php
include('Footer.php')
?>
</body>
</html>
