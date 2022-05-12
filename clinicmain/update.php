<?php
require "config.php";


// get the post records
$mobile = $_POST['mobile'];
$customer = $_POST['customer'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$weightAtBirth = $_POST['weightatbirth'];
$height = $_POST['height'];
$headcircum = $_POST['headcircum'];
$dateOfAdmission = $_POST['admission'];
$weightAdmission = $_POST['weightadmission'];
$dateofDischarge = $_POST['discharge'];
$weightDischarge = $_POST['weightdischarge'];
$diagnosis = $_POST['diagnosis'];
$caseSummary = $_POST['caseSummary'];
$treatmentGiven= $_POST['treatmentGiven'];




$sql= "INSERT INTO `customerInfo` (`mobile`, `customer`, `age`, `gender`, `address`, `weight(Birth)`, `height`, `headcircum`, `admission(date)`, `admission(wt)`, `discharge(date)`, `discharge(wt)`, `diagnosis`, `caseSummary`, `treatmentGiven`) VALUES ('$mobile', '$customer', '$age', '$gender', '$address', '$weightAtBirth', '$height', '$headcircum', '$dateOfAdmission', '$weightAdmission', '$dateofDischarge', '$weightDischarge', '$diagnosis', '$caseSummary', '$treatmentGiven')";


if ($conn->query($sql) === TRUE) {

    header('location:investigation_admission.php');
  } else {

    echo $sql;
  }


?>
