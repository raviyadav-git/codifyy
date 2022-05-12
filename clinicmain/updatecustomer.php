<?php

session_start();

require 'config.php';
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
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

<script>
  function showAge(){
    // console.log("Starting");
    var getDate = document.getElementById('DOB').value;

    var getDOBYear = (new Date(getDate)).getFullYear();

    var currentDate = new Date();

    var yyyy = currentDate.getFullYear();

    var getage = yyyy - getDOBYear;

    var calc_Age = yyyy - new Date(getDate);
    // console.log("Ending");
    var ageInputField = document.getElementById('result').value = getage ;
  }
</script>
</head>

<body>

    <div class="container-fluid App">
      <div class=" container  formbg">
        <form action="update.php" method="post" class="form-check">
         <table class="mainform">
           <thead>
             <tr>
               <td></td>
             </tr>
           </thead>
           <tbody>

            <!-- Name -->
            <tr>
             <td colspan='3'><input type='text' class="form-control" name="patient" id="patient" required placeholder="Patient Name"></input></td>
             <td colspan='3'><input type='text' class="form-control" name="address" id="address" placeholder="Adress" required></input></td>

            </tr>

            <!-- DOB -->
             <tr>
             <td colspan='3'><input type='number' class="form-control" name="aadharid" id="aadharcard" required placeholder="Adhaar ID"></input></td>

                <td colspan='1'><input type='date' class="form-control" id = "DOB" onchange = "showAge()" placeholder="Date of Birth" required></input></td>
                <td colspan='1'><input type="text" class="form-control" name="result" id="result" placeholder="Age"/></td>

              </tr>

            <!-- Age -->
            <tr>
            </tr>

           <!-- Gender -->
            <tr>
             <td colspan='2'>
              <input type='radio' value='male' name='gender'></input>Male
              <input type='radio' value='female' name='gender'></input>Female
              <input type='radio' value='others' name='gender'></input>Others
             </td>
             <td><label for ="weightatbirth">Weight(at birth): </label></td>
             <td colspan='1'><input type='float' class="form-control" name="weightatbirth" id="weightatbirth"></input></td>

            </tr>

           <!-- Date of admission -->
           <tr>
             <td><label for= "admission">Admission: </label></td>
             <td> <input type='date' name="admission" class="form-control" id="admission" required></input></td>
             <td><label for= "weightadmission">Weight: </label></td>
             <td><input type='float' name="weightadmission" class="form-control" id="weightadmission" required></input></td>
            </tr>
            <tr>





          <!-- Date of discharge -->
           <tr>
             <td><label for="discharge">Discharge: </label></td>
             <td ><input type='date' name="discharge" class="form-control" id="discharge"></input></td>
             <td><label for =  "weightdischarge" >Weight: </label></td>
             <td><input type='float' name="weightdischarge" class="form-control" id="weightdischarge" required></input></td>
           </tr>
<!-- Diagnosis -->
<td><label for="diagnosis">Diagnosis : </label></td>
             <td colspan='6'><input type='text' class="form-control" name="diagnosis" id="diagnosis" required></input></td>
            </tr>
      </tbody>
      </table>
      <table class="mainform">
          <tr>
              <td><h5>Case Summary</h5><textarea cols="50" rows="5" name="caseSummary" placeholder="Case Summary . . ."></textarea></td>
              <td><h5>Treatment Given</h5><textarea cols="50" rows="5" name="treatmentGiven" placeholder="Treatment Given . . ."></textarea></td>

          </tr>
          <tr>
              <td><h5>Investigation</h5><textarea cols="50" rows="5" name="investigate" placeholder="Invenstigation . . . "></textarea></td>
              <td><h5>Remarks</h5><textarea cols="50" rows="5" name="remarks" placeholder="Remarks . . ."></textarea></td>

          </tr>

          <tfoot>
            <tr>
              <td colspan='3'>
                  <button class="btnbg">Update</button>
               </td>
            </tr>
           </tfoot>
      </table>
    </form>
      </div>
  </div>

</body>
</html>
