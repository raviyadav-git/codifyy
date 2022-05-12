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

    <div class="container-fluid">
      <div class=" container jumbotron col-md-6">
        <form action="updateinvestigation.php" method="post" class="form-check"> <h5>Investigations</h5>
        <br> 
           <div class="col-md-6>"> 


         <h5>DLC</h5>
          <input  type="text" class="form-control" name="dlc_p" placeholder="Polymorphs"><br>
          <input type="text" class="form-control" name="dlc_l" placeholder="Lymphocytes"><br>
          <input type="text" class="form-control" name="dlc_m" placeholder="Monocytes"><br>
          <input type="text" class="form-control" name="dlc_b" placeholder="Besophytes"><br>
          <input type="text" class="form-control" name="dlc_e" placeholder="Eosnophill"><br>
          <input  type="text" class="form-control" name="tlc" placeholder="TLC">

<br>
<hr>
<br>
          <input type='text' class="form-control" name="bp" id="bp" required placeholder="Blood Pressure"></input><br>
          <input type='text' class="form-control" name="hb" id="hb" required placeholder="Hb"></input><br>
          <input type='text' class="form-control" name="widalTest" id="widaltest" required placeholder="Widal Test"></input><br>
          <input type='text' name="urineReport" class="form-control" id="urineReport" required placeholder="Urine C/E"></input><br>
          <input type='text' name="bloodUrea" class="form-control" id="bloodUrea" required placeholder="Blood Urea"></input><br>
          <input type='text' name="serumCreatinine" class="form-control" id="serumcreatanine" required placeholder="Serum Creatinine"></input><br>
          <input type='text' name="lft" class="form-control" id="lft" required placeholder="LFT"></input><br>
   
                  <button type="submit" class="btn btn-primary">Save</button>







    </form>
  
      </div></div>
</body>
</html>



