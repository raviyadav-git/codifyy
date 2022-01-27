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
$summary = $_POST['caseSummary'];
$treatment = $_POST['treatmentGiven'];
$investagation = $_POST['investigate'];

// database insert SQL code
$sql = "INSERT INTO `responseDetails` (`caseSummary`, `treatmentGiven`, `investigation`)
VALUE ('$summary','$treatment','$investagation')";
// insert in database 

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$conn->close();

?>