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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Akronim|Lucida Handwriting" rel="stylesheet">
</head>
<body style="margin-top:50px;">
<?php
include('Menu Bar.php')
?>
<div class="container"style=" border-radius: 5px; background-color: #87878a93; padding: 10px;">
<?php echo @$msg; ?>
    <div style="text-align:center">
      <h2>Contact Us</h2>
      <p>Swing by for a tot of scotch, or leave us a message:</p>
    </div>
    <div class="row"style="content: ''; display: table; clear: both;">
      <div class="column"style=" float: left; width: 50%; margin-top: 10px; padding: 20px;">
        <img src="jasper.jpg" style="width:100%">
      </div>
      <div class="column"style=" float: left; width: 50%; margin-top: 10px; padding: 20px;">
        <form action="insert.php" method="POST">
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Your name..">
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name..">
          <label for="country">Country</label>
          <select id="country" name="country">
            <option value="kenya">Kenya</option>
            <option value="tanzania">Tanzania</option>
            <option value="uganda">Uganda</option>
            <option value="rwanda">Rwanda</option>
            <option value="burundi">Burundi</option>
            <option value="burundi">Sudan</option>
            <option value="burundi">South Sudan</option>
            <option value="burundi">Ethiopia</option>
            <option value="burundi">Somalia</option>
          </select>
          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="Write something.." style="height:170px"></textarea>
          <input type="submit" value="Submit"style=" background-color: #4CAF50; color: white; padding: 12px 20px; border: none; cursor: pointer; .hover:background-color: #45a049;">
        </form>
      </div>
    </div>
  </div> </p>
<?php
include('Footer.php')
?>
</body>
</html>