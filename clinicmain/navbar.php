<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>

    function myFunction() {
      var element = document.body;
      element.classList.toggle("dark-mode");
    }

    // function jumbotron() {
    //   var element = document.body;
    //   element.classList.toggle("jumbotron");
    // }
    </script>

    <style>
      .nav-item{
        padding: 10px;
      }
    </style>
  </head>

<body>


<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">

    <a class="navbar-brand" href="">
      <img src="images/hospitallogo.png">
    </a>

    <button class="navbar-toggler" 
    type="button" 
    data-toggle="collapse" 
    data-target="#navbarSupportedContent"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="motherslist.php">Women List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list.php">Children List</a>
        </li>

        <li class="nav-item">
          <a class="nav-link"  href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>
        </li>

      </ul>

    </div>

      <h6 class='p-4'><?php
        date_default_timezone_set("Asia/Kolkata");
        $h = date('G');

        if($h>=5 && $h<=11)
        {
            echo "Good Morning";
        }
        else if($h>=12 && $h<=15)
        {
            echo "Good Afternoon";
        }
        else
        {
            echo "Good Evening";
        }
    ?> <?php echo $_SESSION["username"] ?> </h6>
  </div>
</nav>


</body>
</html>