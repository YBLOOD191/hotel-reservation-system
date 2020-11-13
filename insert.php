<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$country = $_POST['country'];
$message = $_POST['message'];

if (!empty($firstname) || !empty($lastname) || !empty($country) || !empty($message)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "hotel";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('connect error'('.mysqli_connect_errno().')'. mysqli_connect_error());'
    } else {
        $SELECT = "SELECT email FROM register WHERE email = ? Limit 1;"
        $INSERT = "INSERT Into register (firstname, lastname, country, message) values (?,?,?,?)";
    }
}
    else { "All fields are required"; 
    die()}

?>