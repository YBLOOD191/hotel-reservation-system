<?php 
session_start();
error_reporting(1);
include('connection.php');
$eid=$_SESSION['create_account_logged_in'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PRINCE Hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
 <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css"> 

</head>
<body style="margin-top:50px;">
  
  

<div class="container">
                    <div class="row">
                        
                        <nav class="navbar navbar-expand-lg narbar-light">
                            <a class="navbar-brand mr-auto" href="#">
                                <img src="img/logo.png" alt="Site logo"> PRINCE HOTEL</a>
                               
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">
                                    <a class="nav-link" href="index.php ">HOME <span class="sr-only">(current)</span></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="about.php">ABOUT </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="image gallery.php">GALLERY </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="Contact_us.php">CONTACT US </a>
                                  </li>
                                  
                                  
                                 
                                </ul>
                                
        
        
      
                            </div>                            
                        </nav>            
                    </div>
                </div>



<div class="container-fluid"><!--Primary Id-->
  <h1 class="text-center text-primary"> Booking Details </h1><br>
  <div class="container">
    <div class="row">
        <table class="table table-striped table-bordered table-hover table-responsive"style="height:100px;">
               <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>Room Type</th>
                    <th>Check In Date</th>
                    <th>Check Out Date</th>
                    <th>Occupancy</th>
					<th>Cancel</th>
               </tr>

               <?php 
$sql= mysqli_query($con,"select * from room_booking_details where email='$eid' "); 
while($result=mysqli_fetch_assoc($sql))
{
$oid=$result['id'];
echo "<tr>";
echo "<td>".$result['name']."</td>";
echo "<td>".$result['email']."</td>";
echo "<td>".$result['phone']."</td>";
echo "<td>".$result['address']."</td>";
echo "<td>".$result['country']."</td>";
echo "<td>".$result['room_type']."</td>";
echo "<td>".$result['check_in_date']."</td>";
echo "<td>".$result['check_out_date']."</td>";
echo "<td>".$result['Occupancy']."</td>";
echo "<td><a href='cancel_order.php?order_id=$oid' style='color:Red'>Cancel</a></td>";
echo "</tr>";
}                         
               ?> 
          </table>

    </div>
    </div>
  </div>
<?php
include('Footer.php')
?>
</body>
</html>
