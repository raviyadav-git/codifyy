<?php

require "../config.php";

// get the post records
$aadhar = $_POST['aadharcard'];
$summary = $_POST['caseSummary'];
$treatment = $_POST['treatmentGiven'];
$investegate = $_POST['investigate'];
$dateofDischarge = $_POST['discharge'];
$weightDischarge= $_POST['weightdischarge'];



// database insert SQL code

$sql = "INSERT INTO `responseDetails` (`aadharcard`, `summary`, `treatment`, `investigate`, `discharge(date)`, `discharge(wt)`) 
VALUE ('$aadhar','$summary','$treatment','$investegate','$dateofDischarge','$weightDischarge')";


// insert in database 

if ($conn->query($sql) === TRUE) {
  echo '<script> alert("successfully")</script>';
  header('Location: ../customer/index.html');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$conn->close();

?>
