<?php
require "../config.php";


// get the post records
$customer = $_POST['patient'];
$address = $_POST['address'];
$aadharcard = $_POST['aadharcard'];
$age = $_POST['result'];
$gender = $_POST['gender'];
$weightAtBirth = $_POST['weightatbirth'];
$diagnosis = $_POST['diagnosis'];
$dateOfAdmission = $_POST['admission'];
$weightAdmission = $_POST['weightadmission'];
$dateofDischarge = $_POST['discharge'];
$weightDischarge= $_POST['weightdischarge'];

// database insert SQL code
$sql= "INSERT INTO `healthCare` (`customer`, `address`, `aadharcard`, `age`, `gender`, `weight(Birth)`, `diagnosis`, `admission(date)`, `admission(wt)`, `discharge(date)`, `discharge(wt)`) VALUE ('$customer','$address','$aadharcard','$age','$gender','$weightAtBirth','$diagnosis','$dateOfAdmission','$weightAdmission','$dateofDischarge','$weightDischarge')";
// insert in database 

if ($conn->query($sql) === TRUE) {
    echo '<script> alert("successfully")</script>';//alert
  } else {
    // echo '<script> alert("Error")</script>';
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$conn->close();

?>