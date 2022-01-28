<?php

// require connection
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "dbname";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

// get the post records
$customer = $_POST['patient'];
$address = $_POST['address'];
$addarcard = $_POST['addarcard'];
$age = $_POST['result'];
$gender = $_POST['gender'];
$weightAtBirth = $_POST['weightatbirth'];
$diagnosis = $_POST['diagnosis'];
$dateOfAdmission = $_POST['admission'];
$weightAdmission = $_POST['weightadmission'];
$dateofDischarge = $_POST['discharge'];
$weightDischarge= $_POST['weightdischarge'];

// database insert SQL code
$sql = "INSERT INTO `healthCare` (`customer`, `address`, `addarcard`, `age`, `gender`, `weight(Birth)`, `diagnosis`, `admission(date)`, `admission(wt)`, `discharge(date)`, `discharge(wt)`)
VALUE ('$customer','$address','$addarcard','$age','$gender','$weightAtBirth','$diagnosis','$dateOfAdmission','$weightAdmission','$dateofDischarge','$weightDischarge')";
// insert in database 

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$conn->close();

?>
