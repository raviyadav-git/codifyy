<?php
require "config.php";


// get the post records
$dlc_p = $_POST['dlc_p'];
$dlc_l = $_POST['dlc_l'];
$dlc_m = $_POST['dlc_m'];
$dlc_b = $_POST['dlc_b'];
$dlc_e = $_POST['dlc_e'];
$tlc = $_POST['tlc'];
$bp = $_POST['bp'];
$hb = $_POST['hb'];
$widalTest = $_POST['widalTest'];
$urineReport = $_POST['urineReport'];
$bloodUrea = $_POST['bloodUrea'];
$serumCreatinine= $_POST['serumCreatinine'];
$lft= $_POST['lft'];




$sql= "INSERT INTO `investigation` (`dlc_p`, `dlc_l`, `dlc_m`, `dlc_b`, `dlc_e`, `tlc`, `bp`, `hb`, `widalTest`, `urineReport`, `bloodUrea`, `serumCreatinine`, `lft`) values ('$dlc_p','$dlc_l','$dlc_m','$dlc_b','$dlc_e', '$tlc', '$bp','$hb','$widalTest','$urineReport','$bloodUrea','$serumCreatinine','$lft') ";


if ($conn->query($sql) === TRUE) {

    header('location:list.php');
  } else {

    echo $sql;
  }


?>
