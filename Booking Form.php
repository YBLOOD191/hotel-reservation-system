<?php 
include('Menu Bar.php');
include('connection.php');
if($eid=="")
{
header('location:Login.php');
}
$sql= mysqli_query($con,"select * from room_booking_details where email='$eid' "); 
$result=mysqli_fetch_assoc($sql);
//print_r($result);
extract($_REQUEST);
error_reporting(1);
if(isset($savedata))
{
  $sql= mysqli_query($con,"select * from room_booking_details where email='$email' and room_type='$room_type' ");
  if(mysqli_num_rows($sql)) 
  {
  $msg= "<h1 style='color:red'>You have already booked this room</h1>";    
  }
  else
  {

   $sql="insert into room_booking_details(name,email,phone,address,country,room_type,Occupancy,check_in_date,check_out_date) 
  values('$name','$email','$phone','$address','$country','$room_type','$Occupancy','$cdate','$codate')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:black'>You have Successfully booked this room</h1><h2><a href='order.php'>View </a></h2>"; 
   }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PRINCE Hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css"> 
        <link rel="stylesheet" href="spec/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="spec/css/fontAwesome.css">
        <link rel="stylesheet" href="spec/css/hero-slider.css">
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <link rel="stylesheet" href="spec/css/owl-carousel.css">
        <link rel="stylesheet" href="spec/css/datepicker.css">
        <link rel="stylesheet" href="spec/css/tooplate-style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="spec/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    

  
  <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 50px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      legend {
      padding: 10px;      
      font-family: Roboto, Arial, sans-serif;
      font-size: 18px;
      color: #fff;
      background-color: #e67c03;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px #006622; 
      }
      .banner {
      position: relative;
      height: 250px;
      background-image: url("/uploads/media/default/0001/02/b23a2c8c49b8e43249487140e4c2e22a63bd7cb8.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #006622;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #006622;
      color: #006622;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #00b33c;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      .week {
      display:flex;
      justify-content:space-between;
      }
      .columns {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .columns div {
      width:48%;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #006622;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #006622;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #006622;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #00b33c;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  
  <body>
  <?php
  include('Menu Bar.php');
  ?>
    <div class="testbox">
    <form>
      <div class="banner">
        <h1>Your Reservation Form</h1>
      </div>
      <br/>
      <?php echo @$msg; ?>
      <br/>
      <fieldset>
        <legend>Reservation Details</legend>
        <div class="columns">
          <div class="item">
            <label for="fname">First Name<span>*</span></label>
            <input type="text" value="<?php echo $result['name']; ?>"  name="name" placeholder="Enter Your Frist Name"required/>
          </div>
          <div class="item">
            <label for="lname"> Last Name<span>*</span></label>
            <input id="lname" type="text" name="lname" />
          </div>
          <div class="item">
            <label for="address">Address<span>*</span></label>
            <input name="address" value="<?php echo $result['address'];  ?>  " placeholder="Enter Your Address">
          </div>
          <div class="item">
            <label for="zip">Zip Code<span>*</span></label>
            <input id="zip" type="text"   name="zip" required/>
          </div>
          <div class="item">
            <label for="city">Country<span>*</span></label>
            <input type="text" readonly="readonly"  value="<?php echo $result['country']; ?>" name="country"required/>
          </div>
          <div class="item">
            <label for="state">State<span>*</span></label>
            <input id="state" type="text"   name="state" />
          </div>
          <div class="item">
            <label for="eaddress">Email Address<span>*</span></label>
            <input type="email" value="<?php echo $result['email']; ?>"  name="email"  placeholder="Enter Your Email-Id"required/>
          </div>
          <div class="item">
            <label for="phone">Phone<span>*</span></label>
            <input type="number" value="<?php echo $result['mobile']; ?>" name="phone" placeholder="Type Your Phone Number"required/>
          </div>
      </fieldset>
      <br/>
      <fieldset>
      <legend>Dates</legend>
      <div class="columns">
      <div class="item">
      <label for="checkindate">Check-in Date <span>*</span></label>
      <input type="date" name="cdate"required/>
      <i class="fas fa-calendar-alt"></i>
      </div>
      <div class="item">
      <label for="checkoutdate">Check-out Date <span>*</span></label>
      <input type="date" name="codate"required/>
      <i class="fas fa-calendar-alt"></i>
      </div>
      <div class="item">
      <p>Check-in Time </p>
      <select>
      <option value="" disabled selected>Select time</option>
      <option value="1" >Morning</option>
      <option value="2">Afternoon</option>
      <option value="3">Evening</option>
      </select>
      </div>
      <div class="item">
      <p>Check-out Time </p>
      <select>
      <option  value="4" disabled selected>Select time</option>
      <option value="5" >Morning</option>
      <option value="6">Afternoon</option>
      <option value="7">Evening</option>
      </select>
      </div>    
      <div class="item">
      <p>How many adults are coming?</p>
      <select>
      <option value="8" disabled selected>Number of adults</option>
      <option value="9" >1</option>
      <option value="10">2</option>
      <option value="11">3</option>
      <option value="12">4</option>
      <option value="13">5</option>
      </select>
      </div>    
      <div class="item">
      <p>How many children are coming?</p>
      <select>
      <option value="14" disabled selected>Number of children</option>
      <option value="15" >0</option>
      <option value="16">1</option>
      <option value="17">2</option>
      <option value="18">3</option>
      <option value="19">4</option>
      <option value="19">5</option>
      </select>
      </div>   
      <div class="item" style=width:100%>
      <label for="room">Number of rooms</label>
      <input id="room" type="number" name="room" />
      </div>
      <div class="item">
      <p>Room type</p>
      <select>
      <option value="20" selected></option>
      <option>Deluxe Room</option>
                  <option>Luxurious Suite</option>
                  <option>Standard Room</option>
                  <option>Suite Room</option>
                  <option>Twin Deluxe Room</option>
      </select>
      </div>    
      <div class="item">
      <p>Occupancy</p>
      <select>
      <option value="24"  selected></option>
      <option value="single" name="Occupancy"required >Single</option>
      <option value="twin" name="Occupancy" required>Twin</option>
      <option value="dubble" name="Occupancy" required>Double</option>
      </select>
      </div>    
      </div>
      <div class="item">
      <label for="instruction">Special Instructions</label>
      <textarea id="instruction" rows="3"></textarea>
      </div>
      </fieldset>
      <div class="btn-block">
      <button><input type="submit"value="submit" name="savedata" class="btn btn-danger"required/></button>
      
      </div>
    </form>
    </div>
  </body>

<?php
include('Footer.php')
?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="spec/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="spec/js/vendor/bootstrap.min.js"></script>
    
    <script src="spec/js/datepicker.js"></script>
    <script src="spec/js/plugins.js"></script>
    <script src="spec/js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        

       
    });
    
   
    }
    </script>
</body>
</html>
