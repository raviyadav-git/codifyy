<?php
require "config.php";


// get the post records
$mobile = $_POST['mobile'];
$name = $_POST['name'];
$address = $_POST['address'];
$age = $_POST['age'];
$weightbp = $_POST['weightbp'];
$wdp = $_POST['wdp'];
$wgdp = $_POST['wgdp'];
$hypertension = $_POST['hypertension'];
$diabetes = $_POST['diabetes'];
$thyroid = $_POST['thyroid'];
$bp = $_POST['bp'];
$admission_dt = $_POST['admission_dt'];
$discharge_dt= $_POST['discharge_dt'];




$sql= "INSERT INTO `mothers` (`mobile`, `name`, `address`, `age`, `weightbp`, `wdp`, `wgdp`, `hypertension`, `diabetes`,`thyroid`,`bp`, `admission_dt`, `discharge_dt`) VALUES ('$mobile', '$name', '$address', '$age', '$wightbp', '$wdp', '$wgdp', '$hypertension', '$diabetes', '$thyroid', '$bp', '$admission_dt', '$discharge_dt')";


if ($conn->query($sql) === TRUE) {

    header('location:motherslist.php');
  } else {

    echo $sql;
  }


?>
