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

  <div class=" container">
    <img src="images/raikhyheader.png" style="width: 100%;">
  </div>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-lg-5"></div>
      <div class="col-lg-2"></div>
      <div class="col-lg-5"> <h5 style="text-align: right; color:#61308b">Dr. Harinder Singh Raikhy</h5>
            <h6 style="text-align: right; color:#61308b">Consultant Paediatrician</h6>
            <h6 style="text-align: right; color:#61308b">Reg. No. EP. 17491 Dt. 7.2.77</h6>
      </div>
    </div>
  </div>
  <br>
  <form action="" method="POST">      
    <div class="container" >
      <u><h6 style="text-align: left;"><b>Patient Id. RKHY/C/<?php echo $id ?></b></h6></u>
      <br>
      <table class="table-bordered">

        <tr>
          <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Patient Name </h6><input type="text" name="patient" value="<?php echo $customer ?>"></td>
          <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Address </h6><input type="text" name="address" value="<?php echo $address ?>"></td>
          <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Gender </h6><input type="text" name="gender" value="<?php echo $gender ?>"></td>
          <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Age </h6><input type="text" name="age" value="<?php echo $age ?>"></td>
        </tr>
      </table>
      <br>
      <br>
      <table class="table-bordered">

        <tr>
          <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Weight at Birth </h6><input type="decimal" name="birth" value="<?php echo $birthWt ?>"></td>
          <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Height/Lenght </h6><input type="decimal" name="height" value="<?php echo $height ?>"></td>
          <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Head Circumference </h6><input type="decimal" name="headcirum" value="<?php echo $headcircum ?>"></td>

        </tr>
      </table>
     <br>
     <br>
     <table class="table-bordered">

      <tr>
        <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Date of Admision </h6><input type="date" name="admitDate" value="<?php echo $admissiondt ?>"></td>
        <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Weight at Admission </h6><input type="decimal" name="admitWT" value="<?php echo $admissionwt ?>"></td>
        <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Date of Discharge </h6><input type="date" name="dischargeDate" value="<?php echo $dischargedt ?>"></td>
        <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Weight at Discharge </h6><input type="decimal" name="dischargeWT" value="<?php echo $dischargewt ?>"></td>

      </tr>
     </table>

     <br>
     <br>
     <table class="table-bordered">

     <tr>
     <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Diagnosis </h6><input type="text" name="diagnosis" value="<?php echo $diagnosis ?>"></td>
     <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Treatment Given</h6><input type="text" name="treatment" value="<?php echo $treatmentGiven ?>"></td>

     </tr>
     </table>
     <br>
     <br>
     <table class="table-bordered">

     <tr>
     <td class="text-center"><h6 style="background-color: black" class="text-light text-center">Case Summary </h6><input type="text" name="case" value="<?php echo $caseSummary ?>"></td>

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
            <td class="text-center"><strong>Polymorphs:</strong> <input type="decimal" name="dlc_p" value="<?php echo $dlc_p ?>"></td>
            </tr>
            <tr>
            <td class="text-center"><strong>Lymphocytes:</strong> <input type="decimal" name="dlc_l" value="<?php echo $dlc_l ?>"></td>
            </tr>
            <tr>
            <td class="text-center"><strong>Monocytes: </strong> <input type="decimal" name="dlc_m" value="<?php echo $dlc_m ?>"></td>
            </tr>
            <tr>
            <td class="text-center"><strong>Besophytes:</strong> <input type="decimal" name="dlc_b" value="<?php echo $dlc_b ?>"></td>
            </tr>
            <tr>
            <td class="text-center"><strong>Eosinophill:</strong> <input type="decimal" name="dlc_e" value="<?php echo $dlc_e ?>"></td>
            </tr>


          </table>

        </div >
        <div class="col-md-3">
          <h5 style="background-color: black;" class="text-light text-center">TLC</h5>
          <table class="table-bordered">
            <tr>
            <td class="text-center" ><strong></strong> <input type="decimal" name="tlc" value="<?php echo $tlc ?>"></td>
            </tr>
            </table>
            <table class="table-bordered">
            <tr>
              <td class="text-center">  <h5 style="background-color: black;" class="text-light text-center">Hb</h5>
              <input type="decimal" name="hb" value="<?php echo $hb  ?>"></td>
            </tr>
          </table>

          <table class="table-bordered">
            <tr>
              <td class="text-center">  <h5 style="background-color: black;" class="text-light text-center">Widal Test</h5><input type="decimal" name="widal" value="<?php echo $widalTest  ?>"></td>
            </tr>
          </table>

          <table class="table-bordered">
            <tr>
              <td class="text-center">  <h5 style="background-color: black;" class="text-light text-center">Urine C/E</h5><input type="decimal" name="ur" value="<?php echo $urineReport  ?>"></td>
            </tr>
          </table>
        </div >

        <div class="col-md-3">
          <table class="table-bordered">
            <tr>
              <td class="text-center">  <h5 style="background-color: black;" class="text-light text-center">LFT</h5><input type="decimal" name="lft" value="<?php echo $lft  ?>"></td>
            </tr>
          </table>
          <table class="table-bordered">
            <tr>
              <td class="text-center">  <h5 style="background-color: black;" class="text-light text-center">Blood Urea</h5><input type="decimal" name="bu" value="<?php echo $bloodUrea  ?>"></td>
            </tr>
          </table>
          <table class="table-bordered">
            <tr>
              <td class="text-center">  <h5 style="background-color: black;" class="text-light text-center">Serum Creatinine</h5><input type="decimal" name="sc" value="<?php echo $serumCreatinine  ?>"></td>
            </tr>
          </table>
          <table class="table-bordered">
            <tr>
              <td class="text-center">  <h5 style="background-color: black;" class="text-light text-center">LFT</h5><input type="decimal" name="lft" value="<?php echo $lft  ?>"></td>
            </tr>
          </table>

        </div>
      </div>
      <br>
    </div>
    <div class="container">
     <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
    </div>
   <button class="btn btn-success" name="submit" type="submit">Update</button>
  </form>
  <?php
    if(isset($_POST['submit'])){
      $patient_id = $id;
      $patient_name = $_POST['patient'];
      $patient_address = $_POST['address'];
      $patient_gender = $_POST['gender'];
      $patient_age = $_POST['age'];
      $patient_birth = $_POST['birth'];
      $patient_height = $_POST['height'];
      $patient_head = $_POST['headcirum'];
      $patient_ad = $_POST['admitDate'];
      $patient_awt = $_POST['admitWT'];
      $patient_dd = $_POST['dischargeDate'];
      $patient_dwt = $_POST['dischargeWT'];
      $patient_diagnosis = $_POST['diagnosis'];
      $patient_treatment = $_POST['treatment'];
      $patient_case = $_POST['case'];
      $pdlc_p =$_POST['dlc_p'];
      $pdlc_l =$_POST['dlc_l'];
      $pdlc_m =$_POST['dlc_m'];
      $pdlc_b =$_POST['dlc_b'];
      $pdlc_e =$_POST['dlc_e'];
      $ptlc =$_POST['tlc'];
      $phb =$_POST['hb'];
      $pwidal =$_POST['widal'];
      $pur =$_POST['ur'];
      $pbu =$_POST['bu'];
      $psc =$_POST['sc'];
      $plft =$_POST['lft'];

      $sql2 = "UPDATE `customerInfo` SET 
      `customer`='$patient_name',
      `age`='$patient_age',
      `gender`='$patient_gender',
      `address`='$patient_address',
      `weight(Birth)`='$patient_birth',
      `height`='$patient_height',
      `headcircum`='$patient_head',
      `admission(date)`='$patient_ad',
      `admission(wt)`='$patient_awt',
      `discharge(date)`='$patient_dd',
      `discharge(wt)`='$patient_dwt',
      `diagnosis`='$patient_diagnosis',
      `caseSummary`='$patient_case',
      `treatmentGiven`='$patient_treatment' 
      WHERE `patient_id`='$id'";

      $sql3 = "UPDATE `investigation` SET 
      `dlc_p`='$pdlc_p',
      `dlc_l`='$pdlc_l',
      `dlc_m`='$pdlc_m',
      `dlc_b`='$pdlc_b',
      `dlc_e`='$pdlc_e',
      `tlc`='$ptlc',
      `hb`='$phb',
      `widalTest`='$pwidal',
      `urineReport`='$pur',
      `bloodUrea`='$pbu',
      `serumCreatinine`='$psc',
      `lft`='$plft' 
      WHERE `patient_id`='$id'";

      if ($conn->query($sql2) === TRUE) {
        
        header("location:list.php");
      } else {

        echo $sql2;
      }

      if ($conn->query($sql3) === TRUE) {
        // echo $sql2;
        header("location:list.php");
      } else {

        echo $sql3;
      }
    }
  ?>
</body>

</html>