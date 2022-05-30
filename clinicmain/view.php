<?php
  session_start();

  if(!isset($_SESSION["username"])){
      header("location:index.php");
  }
?>
<?php
include 'config.php';
?>
<?php

if(isset($_GET['printid'])){
 $id = $_GET['printid'];

$sql="select * from `customerInfo` where `patient_id`= $id ";

$result=mysqli_query($conn, $sql);

if($result){

    if($row = mysqli_fetch_assoc($result))
     {
        $id=$row['patient_id'];
        $mobile=$row['mobile'];
        $customer=$row['customer'];
         $address=$row['address'];
         $age=$row['age'];
         $gender=$row['gender'];
         $birthWt=$row['weight(Birth)'];
         $height=$row['height'];
         $headcircum=$row['headcircum'];
         $admissiondt=$row['admission(date)'];
         $admissionwt=$row['admission(wt)'];
         $dischargedt=$row['discharge(date)'];
         $dischargewt=$row['discharge(wt)'];
         $diagnosis=$row['diagnosis'];
         $caseSummary=$row['caseSummary'];
         $treatmentGiven=$row['treatmentGiven'];
     }
    }
}
?>
<?php

$sql="select * from `investigation` where `patient_id`= $id";

$result=mysqli_query($conn, $sql);

if($result){

    if($row = mysqli_fetch_assoc($result))
     {
       $dlc_p=$row['dlc_p'];
       $dlc_l=$row['dlc_l'];
       $dlc_m=$row['dlc_m'];
       $dlc_b=$row['dlc_b'];
       $dlc_e=$row['dlc_e'];
       $tlc=$row['tlc'];
       $bp=$row['bp'];
       $hb=$row['hb'];
       $widalTest=$row['widalTest'];
       $urineReport=$row['urineReport'];
       $bloodUrea=$row['bloodUrea'];
       $serumCreatinine=$row['serumCreatinine'];
       $lft=$row['lft'];



        }
    }

?>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body >
<br>

<center>
<button onclick="window.print();" class="btn btn-primary" id="print-btn" style="width: 100px;"><i class="fa fa-print" aria-hidden="true"></i></button>
</center>
<div class=" container">

<img src="images/raikhyheader.png" style="width: 100%;">
</div>
<br>
<div class="container">
<div class="row">
<div class="col-lg-5">

</div>
<div class="col-lg-2"></div>
<div class="col-lg-5"> <h5 style="text-align: right; color:#61308b">Dr. Harinder Singh Raikhy</h5>
      <h6 style="text-align: right; color:#61308b">Consultant Paediatrician</h6>
      <h6 style="text-align: right; color:#61308b">Reg. No. EP. 17491 Dt. 7.2.77</h6>
</div>

      </div>
</div>
      <br>
  <div class="container" >
  <u><h6 style="text-align: left;"><b>Patient Id. RKHY/C/<?php echo $id ?></b></h6></u>
<br>
    <table class="table-bordered">

<tr>
<td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Patient Name </h6><?php echo $customer ?></td>
<td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Address </h6><?php echo $address ?></td>
<td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Gender </h6><?php echo $gender ?></td>
<td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Age </h6><?php echo $age ?></td>
</tr>
  </table>
<br>
<br>
<table class="table-bordered">

     <tr>
     <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Weight at Birth </h6><?php echo $birthWt ?></td>
     <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Height/Length </h6><?php echo $height ?></td>
     <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Head Circumference </h6><?php echo $headcircum ?></td>

    </tr>
     </table>
     <br>
     <br>
     <table class="table-bordered">

     <tr>
     <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Date of Admision </h6><?php echo $admissiondt ?></td>
     <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Weight at Admission </h6><?php echo $admissionwt ?></td>
     <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Date of Discharge </h6><?php echo $dischargedt ?></td>
     <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Weight at Discharge </h6><?php echo $dischargewt ?></td>

    </tr>
     </table>

     <br>
     <br>
     <table class="table-bordered">

     <tr>
     <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Diagnosis </h6><?php echo $diagnosis ?></td>
     <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Treatment Given</h6><?php echo $treatmentGiven ?></td>

    </tr>
     </table>
     <br>
     <br>
     <table class="table-bordered">

     <tr>
     <td class="text-center"><h6 style="background-color: black" class="text-light text-center">Case Summary </h6><?php echo $caseSummary ?></td>

    </tr>
     </table>

<br>
  </div>
    <div class="container">
      <div class="row">
      <div class="col-md-3">
    <h5 style="background-color: black;" class="text-light text-center">DLC</h5>
    <table class="table-bordered">
    <tr>
    <td class="text-center"><strong>Polymorphs:</strong> <?php echo $dlc_p ?></td>
    </tr>
    <tr>
    <td class="text-center"><strong>Lymphocytes:</strong> <?php echo $dlc_l ?> </td>
    </tr>
    <tr>
    <td class="text-center"><strong>Monocytes: </strong> <?php echo $dlc_m ?></td>
    </tr>
    <tr>
    <td class="text-center"><strong>Besophytes:</strong> <?php echo $dlc_b ?></td>
    </tr>
    <tr>
    <td class="text-center"><strong>Eosinophill:</strong> <?php echo $dlc_e ?></td>
    </tr>


    </table>

    </div >
    <div class="col-md-3">
    <h5 style="background-color: black;" class="text-light text-center">TLC</h5>
    <table class="table-bordered">
    <tr>
    <td class="text-center" ><strong></strong> <?php echo $tlc ?></td>
    </tr>
    </table>
    <table class="table-bordered">
    <tr>
      <td class="text-center">  <h5 style="background-color: black;" class="text-light text-center">Hb</h5>
<?php echo $hb  ?></td>
    </tr>
  </table>

  <table class="table-bordered">
    <tr>
      <td class="text-center">  <h5 style="background-color: black;" class="text-light text-center">Widal Test</h5><?php echo $widalTest  ?></td>
    </tr>
  </table>

  <table class="table-bordered">
    <tr>
      <td class="text-center">  <h5 style="background-color: black;" class="text-light text-center">Urine C/E</h5><?php echo $urineReport  ?></td>
    </tr>
  </table>
    </div >

    <div class="col-md-3">
    <table class="table-bordered">
    <tr>
      <td class="text-center">  <h5 style="background-color: black;" class="text-light text-center">LFT</h5><?php echo $lft  ?></td>
    </tr>
  </table>
    <table class="table-bordered">
    <tr>
      <td class="text-center">  <h5 style="background-color: black;" class="text-light text-center">Blood Urea</h5><?php echo $bloodUrea  ?></td>
    </tr>
  </table>
  <table class="table-bordered">
    <tr>
      <td class="text-center">  <h5 style="background-color: black;" class="text-light text-center">Serum Creatinine</h5><?php echo $serumCreatinine  ?></td>
    </tr>
  </table>
  <table class="table-bordered">
    <tr>
      <td class="text-center">  <h5 style="background-color: black;" class="text-light text-center">LFT</h5><?php echo $lft  ?></td>
    </tr>
  </table>

      </div>
    </div>
    <br>
    </div>
    <div class="container">
    <div class="row">
<div class="col-md-4">

  </div>
<div class="col-md-4">
  </div>
<div class="col-md-4">

  </div>
    </div>
  </div>
</body>

</html>
