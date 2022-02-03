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
   <nav id='navbar' class='navbar navbar-expand-sm bg-success navbar-dark fixed-top'>

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

  <div class='container-fluid mt-5'>

    <div class="row">
      <div class='col-sm-3'>
        <!-- <p>3 cols</p> -->
      </div>
  
      <div class='col-sm-6'>

        <form action="customer.php" method="post" class="form-check">
          <table border='0'>
            <thead>
              <tr>
                <td colspan="4"><center><h1><b>Health Care</b><img src=""></h1></center></td>
              </tr>
            </thead>
            <tbody>
                
             
             <tr>
              <td><label for = "patient">Name: </label></td>
              <td colspan='3'><input type='text' class="form-control" name="patient" id="patient"></input></td>
             </tr>
         
             
             <tr>
              <td><label for ="address">Address: </label></td>
              <td colspan='3'><input type='text' class="form-control" name="address" id="address"></input></td>
             </tr>
     
              
             <tr>
                 <td><label for = "aadharcard">Aadhar: </label></td>
                 <td colspan='3'><input type='number' class="form-control" name="aadharcard" id="aadharcard"></input></td>
             </tr>
 
             
              <tr>
                 <td><label for='DOB'>Date of Birth: </label></td>
                 <td colspan='2'><input type='date' class="form-control" id = "DOB" onchange = "showAge()"></input></td>
               </tr>
               
             
             <tr>
              <td><label for = "age">Age: </label></td>
              <td colspan='3'><input type="text" class="form-control" name="result" id="result"/></td>
             </tr>
 
            
             <tr>
              <td><label for='gender'>Gender: </label></td>
              <td colspan='3'>
                <table>
                  <tr>
                    <td><input type='radio' value='male' name='gender' class="form-control" ></input>Male</td>
                    <td><input type='radio' value='female' name='gender' class="form-control" ></input>Female</td>
                    <td><input type='radio' value='others' name='gender' class="form-control" ></input>Others</td>
                  </tr>
                </table>
              </td>
             </tr>
 
            
             <tr>
              <td><label for ="weightatbirth">Weight(at birth): </label></td>
              <td colspan='3'><input type='float' class="form-control" name="weightatbirth" id="weightatbirth"></input></td>
             </tr>
             <tr>
                 
            
              <td><label for="diagnosis">Diagnosis: </label></td>
              <td colspan='3'><input type='text' class="form-control" name="diagnosis" id="diagnosis"></input></td>
             </tr>
 
            
             <tr>
              <td><label for= "admission">Admission: </label></td>
              <td> <input type='date' name="admission" class="form-control" id="admission"></input></td>
              <td><label for= "weightadmission">(Wt.): </label></td>
              <td><input type='float' name="weightadmission" class="form-control" id="weightadmission"></input></td>
             </tr>

       </tbody>
       
       <tfoot>
           
        <tr>
          <td colspan='4'>
              <a href="../discharged/discharge.html"><button class="btn btn-success">Submit</button><a>
             
          </td>
        </tr>
<!--            
        <tr>
          <td colspan='4'>
            <a href='../login/logout.php' class='btn btn-danger'>Logout</a>
          </td>
        </tr> -->
       </tfoot>
 
       </table>

       
     </form>

     
      </div>
  
      <div class='col-sm-3'>
        <!-- <p>3 cols</p> -->
      </div>
    </div>
    

  </div>
    
</body>
</html>