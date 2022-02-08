<?php
  session_start();

  if(!isset($_SESSION["user_name"])){
      header("Location: ../login/index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="customer.css">
  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/11bfc88179.js" crossorigin="anonymous"></script>
  <!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="./logic.js"></script> -->

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
  <title>Health Care</title>
</head>

<!-- <script>
  $(function () {
      $("#nav").load("../navbar.html");
  });
</script> -->
    
<body>

   <!-- Navbar -->
   <!-- <div id='nav'></div> -->
   <nav id='navbar' class='navbar navbar-expand-sm bg-success navbar-dark'>

    <!-- Brand -->
    <a class="navbar-brand" href="../records_html.php">
      <b><h2>Health<span>Care<i class="fas fa-file-medical-alt"></i></span></h2></b>
    </a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="../customer/index.php">Admit</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../discharged/discharge_html.php">Discharge</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../login/logout.php">Logout</a>
        </li>
    </ul>
    </div>

    </nav>

<div class='cover'>
  <div class='container-fluid '>

    <div class="row">
     
  
      <div class='col-md-4 offset-md-4 p-4'>

        <form action="customer.php" method="post" class="form-check">
          <!--  ---------------------------------------------------->
          <h3>Health Care</h3>
          <hr>

          <div class="form-group">
            <label>Name: </label>
            <input type='text' class="form-control" name="patient" id="patient"></input>
          </div>

          <div class="form-group">
            <label>Address: </label>
            <input type='text' class="form-control" name="address" id="address"></input>
          </div>

          <div class="form-group">
            <label>Aadhar: </label>
            <input type='number' class="form-control" name="aadharcard" id="aadharcard"></input>
          </div>

          <div class="form-group">
            <label>DOB: </label>
            <input type='date' class="form-control" id = "DOB" onchange = "showAge()"></input>
          </div>

          <div class="form-group">
            <label>Age: </label>
            <input type="text" class="form-control" name="result" id="result"/>
          </div>

          <div class="form-group">
            <label>Gender:</label>
            <input type='radio' value='male' name='gender' class="form-control" >Male</input>
            <input type='radio' value='female' name='gender' class="form-control" >Female</input>
            <input type='radio' value='others' name='gender' class="form-control" >Others</input>
          </div>

          <div class="form-group">
            <label>Weight @ birth: </label>
            <input type='float' class="form-control" name="weightatbirth" id="weightatbirth"></input>
          </div>

          <div class="form-group">
            <label>Diagnosis: </label>
            <input type='text' class="form-control" name="diagnosis" id="diagnosis"></input>
          </div>

          <div class="form-group">
            <label>Admission: </label>
            <input type='date' name="admission" class="form-control" id="admission"></input>
          </div>

          <div class="form-group">
            <label>Weight @ admission: </label>
            <input type='float' name="weightadmission" class="form-control" id="weightadmission"></input>
          </div>

          <button class="btn btn-success">Submit</button>
          <!--  ---------------------------------------------------->
          </form>

     
      </div>
    </div>
    

  </div>
</div>
</body>
</html>