<?php

// require connection
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "hospital";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

// get the post records
$patientName = $_POST['patient'];
$address = $_POST['address'];
$addarcard = $_POST['addarcard'];
$age = $_POST['result'];
$sex = $_POST['gender'];
$weightAtBirth = $_POST['weightatbirth'];
$diagnosis = $_POST['diagnosis'];
$dateOfAdmission = $_POST['admission'];
$weightAdmission = $_POST['weightaddmission'];
$dateofDischarge = $_POST['discharge'];
$weightDischarge= $_POST['weightdischarge'];

// database insert SQL code
$sql = "INSERT INTO `healthCare` (`patientName`, `address`, `addarcard`, `age`, `sex`, `weightAtBirth`, `diagnosis`, `dateOfAdmission`, `weightAdmission`, `dateofDischarge`, `weightDischarge`)
VALUE ('$patientName','$address','$addarcard','$age','$sex','$weightAtBirth','$diagnosis','$dateOfAdmission','$weightAdmission','$dateofDischarge','$weightDischarge')";
// insert in database 

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$conn->close();

?>