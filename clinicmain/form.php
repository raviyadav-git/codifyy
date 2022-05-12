<?php
  session_start();

  if(!isset($_SESSION["username"])){
      header("location:index.php");
  }
?>
<?php


include 'config.php';
include 'navbar.php';

?>
<?php
?>
<html lang="en">
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

    <title>Raikhy Hospital</title>
</head>

<body>

    <div class="container-fluid App">
      <div class="jumbotron">
        <form action="update.php" method="post" class="form-check">
         <table class="mainform">
           
           <tbody>

            <!-- Name -->
            <tr>
             <td colspan='1'>Mobile<input type='number' class="form-control" name="mobile" id="mobile" required placeholder="Enter Mobile Number"></input></td>
             <td colspan='1'>Patient Name<input type='text' class="form-control" name="customer" id="patient" required placeholder="Patient Name"></input></td>
             <td colspan='1'>Age<input type="text" class="form-control" name="age" id="result" placeholder="Example:  2 Years & 6 Months"/></td>
            
             <td colspan='1'>
              <input type='radio' value='male' name='gender'></input>Male
              <input type='radio' value='female' name='gender'></input>Female
              <input type='radio' value='others' name='gender'></input>Others
             </td>

            </tr>

            <!-- DOB -->
             <tr>
             <td colspan='1'>Address<input type='text' class="form-control" name="address" id="address" placeholder="Adress" required></input></td>

             <td colspan='1'>Weight(at birth)<input type='float' class="form-control" name="weightatbirth" id="weightatbirth" placeholder="Weight"></input></td>
             <td colspan='1'>Height / Length<input type='float' class="form-control" name="height" id="height" placeholder="Height"></input></td>
             <td colspan='1'>Head Circumferance<input type='text' class="form-control" name="headcircum" id="height" placeholder="Head Circumferance"></input></td>
              </tr>


           <tr>
             <td> Admission Date<input type='date' name="admission" class="form-control" id="admission" required></input></td>
             <td> Weight(at Admission)<input type='float' name="weightadmission" class="form-control" id="weightadmission" required></input></td>
             <td >Discharge Date<input type='date' name="discharge" class="form-control" id="discharge"></input></td>
             <td>Weight (at Discharge)<input type='float' name="weightdischarge" class="form-control" id="weightdischarge" required></input></td>           
            </tr>
           <tr>
             <td colspan='2'><input type='text' class="form-control" name="diagnosis" id="diagnosis" required placeholder="Diagnosis"></input></td>
             <td colspan="2"><input type='text' class="form-control" name="caseSummary" id="casesummary" required placeholder="Case Summary"></input></td>

            </tr>
            <tr>
              <td>
              <td colspan="2">Treatment Given<input type='text' class="form-control" name="treatmentGiven" id="treatment" required placeholder="Treatment Given"></input></td>

              </td>
            </tr>
      </tbody>
      </table>
      
      <button type="submit" class="btn btn-primary" style="width: 200px;">NEXT</button>

    </form>
      </div>
  </div>

</body>
</html>
