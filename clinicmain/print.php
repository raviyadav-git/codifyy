<?php
require 'config.php';
//error_reporting(0);

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

</head>
<body>
<div class=" container">

<img src="images/raikhyheader.png" style="width: 100%;">

      <h6 style="text-align: right;">Dr. Harinder Singh Raikhy</h6>
      <h6 style="text-align: right;">Consultant Paediatrician</h6>
      <h6 style="text-align: right;">Reg. No. EP. 17491 Dt. 7.2.77</h6>
      </div>
<div class="container-fluid">
</div>
    <div>





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
     
   ?>
   <?php $sql="select * from `investigation` where `patient_id`= $id";

$result=mysqli_query($conn, $sql);

if($result){

    if($row = mysqli_fetch_assoc($result))
     {
       $tlc_p=$row['tlc_p'];
       $tlc_l=$row['tlc_l'];
       $tlc_m=$row['tlc_m'];
       $tlc_b=$row['tlc_b'];
       $tlc_e=$row['tlc_e'];
       $dlc_p=$row['dlc_p'];
       $dlc_l=$row['dlc_l'];
       $dlc_m=$row['dlc_m'];
       $dlc_b=$row['dlc_b'];
       $dlc_e=$row['dlc_e'];
       $hb=$row['hb'];
       $widalTest=$row['widalTest'];
       $urineReport=$row['urineReport'];
       $bloodUrea=$row['bloodUrea'];
       $serumCreatinine=$row['serumCreatinine'];
       $lft=$row['lft'];



        }
 ?>
</div><br>
      <br>
<div class="container">
<?php 
      echo '<div class="container " style="width:1000px";> 
         <table> <tr> <td><h6 style="text-align:left;"><b>Patient Name: </b>'.$customer.'</h6></td>
      <td><h6 style="text-align:left;"><b>Gender:</b> '.$gender.'</h6></td> 
      <td><h6 style="text-align:left;"><b>Age:</b> '.$age.'</h6></td>

      </tr>
      <tr>
      <td><h6 style="text-align:left;"><b>Address: </b>'.$address.'</h6></td>
      <td> <h6 style="text-align:left;"><b>Weight at Birth: </b>'.$birthWt.'</h6></td>
      <td> <h6 style="text-align:left;"><b>Head Circumference: </b>'.$headcircum.'</h6> </td>
      </tr>
      <tr>
      <td> <h6 style="text-align:left;"><b>Date of Admission: </b>'.$admissiondt.'</h6> </td>
      <td> <h6 style="text-align:left;"><b>Weight@Admission:</b> '.$admissionwt.'</h6> </td>
      </tr>
      <tr>
      <td> <h6 style="text-align:left;"><b>Date of Discharge: </b>'.$dischargedt.'</h6> </td>
      <td> <h6 style="text-align:left;"><b>Weight@Discharge:</b> '.$dischargewt.'</h6> </td>
      </tr>
      <tr>
      <td> <h6 style="text-align:left;"><b>Diagnosis: </b>'.$diagnosis.'</h6> </td>
      <td> <h6 style="text-align:left;"><b>Treatment Given:</b> '.$treatmentGiven.'</h6> </td>
      </tr>
      <tr>
      <td> <h6 style="text-align:left;"><b>Case Summary: </b>'.$caseSummary.'</h6> </td>
      </tr>
      <tr>
      <td><h4><u>TLC</u></h4></td>
      </tr>
      <tr style="border: 1px solid black ;" >
      <td style="border: 1px solid black ;"> <h6 style="text-align:left;"><b>Polymorphs:</b>'.$tlc_p.'</h6> </td>
      <td style="border: 1px solid black ;"> <h6 style="text-align:left;"><b>Lymphocytes:</b>'.$tlc_l.'</h6> </td>
      <td style="border: 1px solid black ;"> <h6 style="text-align:left;"><b>Monocytes:</b>'.$tlc_m.'</h6> </td>
      <td style="border: 1px solid black ;"> <h6 style="text-align:left;"><b>Besophytes:</b>'.$tlc_b.'</h6> </td>
      <td style="border: 1px solid black ;"> <h6 style="text-align:left;"><b>Eosnophill:</b>'.$tlc_e.'</h6> </td>
      </tr>
      <tr>
      <td><h4>DLC</h4></td>
      </tr>
      <tr style="border: 1px solid black ;">
      <td style="border: 1px solid black ;"> <h6 style="text-align:left;"><b>Polymorphs:</b>'.$dlc_p.'</h6> </td>
      <td style="border: 1px solid black ;"> <h6 style="text-align:left;"><b>Lymphocytes:</b>'.$dlc_l.'</h6> </td>
      <td style="border: 1px solid black ;"> <h6 style="text-align:left;"><b>Monocytes:</b>'.$dlc_m.'</h6> </td>
      <td style="border: 1px solid black ;"> <h6 style="text-align:left;"><b>Besophytes:</b>'.$dlc_b.'</h6> </td>
      <td style="border: 1px solid black ;"> <h6 style="text-align:left;"><b>Eosnophill:</b>'.$dlc_e.'</h6> </td>
      </tr>
      
      <tr>
      <td> <h6 style="text-align:left;"><b>Hb: </b>'.$hb.'</h6> </td>
      <td> <h6 style="text-align:left;"><b>WIdal Test: </b>'.$widalTest.'</h6> </td>

      </tr>
      <tr>
      </tr>
      <tr>
      <td> <h6 style="text-align:left;"><b>Urine C/E: </b>'.$urineReport.'</h6> </td>
      <td> <h6 style="text-align:left;"><b>Blood Urea: </b>'.$bloodUrea.'</h6> </td>

      </tr>
      <tr>
      </tr>
      <tr>
      <td> <h6 style="text-align:left;"><b>Serum Creatinine: </b>'.$serumCreatinine.'</h6> </td>
      <td> <h6 style="text-align:left;"><b>LFT: </b>'.$lft.'</h6> </td>

      </tr>
      <tr>
      </tr>

      
      
      
      
      </table></div>';
      
      
      
      ?>
</div>
<br><br><br><br>

<div class="container">
      <p style="text-align:left;">OPD Timings: 09:00 AM to 07:00 PM</p>
</div>
</body>

</html>