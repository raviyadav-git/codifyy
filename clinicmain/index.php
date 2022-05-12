<?php
  session_start();

  if(isset($_SESSION["username"])){
      header("location:dashboard.php");
  }
?>
<?php

include 'config.php';
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="style.css">
</head>
  <body>
    <div class="backgroundimage">
      <style>
.backgroundimage{
background-color: #22979e;
  background-size: cover;
  background-repeat: no-repeat;
  height:100%;
}
      </style>
  <br>
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 transbox"  style="border-radius:30px;">
<div>
    <center>
<br>

      <img src="images/hospitallogo.png">

      <h3>Please Login to Your Account</h3><br>
      <form action="login.php" method="post">
        <div class="form-group">
          <input style="width:30%; padding:10px; border-radius:5px;" class="form-control" type="text" name="username" placeholder="Username" required><br>
          <input style="width:30%; padding:10px; border-radius:5px;" class="form-control" type="password" name="password" placeholder="Password" required><br>
          <button style="width:25%; padding:10px; border-radius:5px;" class="btn btn-primary" type="submit" name="login">Login</button><br><br>
        </div>
      </form>
    </center>
      </div>
      </div>
      </div>
      <div class="col-md-2"></div>

    </div>
</div>
    </body>
</html>
