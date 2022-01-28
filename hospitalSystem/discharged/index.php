<?php

require "config.php";

// get the post records
$aadhar = $_POST['aadharcard'];
$summary = $_POST['caseSummary'];
$treatment = $_POST['treatmentGiven'];
$investegate = $_POST['investigate'];

// database insert SQL code
$sql = "INSERT INTO `responseDetails` (`aadharcard`,`summary`, `treatment`, `investigate`)
VALUE ('$aadhar','$summary','$treatment','$investagate')";
// insert in database 

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$conn->close();

?>