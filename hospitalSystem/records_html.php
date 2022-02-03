<?php
  session_start();

  if(!isset($_SESSION["user_name"])){
      header("Location: ../hospitalSystem/login/index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->
        <script src="https://kit.fontawesome.com/11bfc88179.js" crossorigin="anonymous"></script>
        <!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="./logic.js"></script> -->

        <!-- Partially working... -->
        <!-- <link rel="stylesheet" href="records.css"> -->
        
        <title>Customer Records</title>

        <!-- <script>
            $(function () {
                $("#nav").load("./navbar.html");
            });
        </script> -->

</head>

<body>

 <!-- Navbar -->
        <!-- <div id='nav'></div> -->
        <nav id='navbar' class='navbar navbar-expand-sm bg-success navbar-dark fixed-top'>

        <!-- Brand -->
        <a class="navbar-brand" href="../hospitalSystem/records_html.php">
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
            <a class="nav-link" href="./customer/index.php">Admit</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../hospitalSystem/discharged/discharge_html.php">Discharge</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../hospitalSystem/login/logout.php">Logout</a>
            </li>
        </ul>
        </div>

        </nav>
        

    <div class='container-fluid bg-light mt-5'>

        <br/>
<!-- ---------------------------------------------------------------------------------------- -->
    <!-- 1st row for search and button-->
        <div class='row'>

        <!-- Empty column -->
            <div class='col-sm-2'></div>

        <!-- Search field column -->
            <div class='col-sm-8 bg-light p-5'>

                <form method='post'>

                    <div class='row'>
                        <div class="col-sm-12 d-flex justify-content-center">

                            <input type='text' class='form-control w-75 ' name='aadhar' placeholder="Enter customer's Aadhar to view the record">

                        </div>
                    </div>
                    

                    <br/>

                    <div class="row">
                        <div class='col-sm-12 text-center'>

                            <button class='btn btn-success w-25'>Show</button>

                        </div>
                    </div>  

                </form>
            </div>

        <!-- Empty column -->
            <div class='col-sm-2'>
                
            </div>

            <!-- Column for date search -->
                <!-- <div class="col-sm-6">
                        <form action='records.php' method='post'>
                            <div class='row'>
                                <div class='col-sm-6'>
                                    <input type='date' name='startFrom' class='form-control'>
                                </div>
                                <div class='col-sm-6'>
                                    <input type='date' name='uptoEnd' class='form-control'>
                                </div>
                            </div>

                        <br/>
                        
                            <div class='row'>
                                <div class='col-sm-2'></div>
                                <div class='col-sm-8'>
                                    <button class='btn btn-danger w-100'>Show with Date</button>
                                </div>
                                <div class='col-sm-2'></div>
                                
                            </div>
                        </form>
                    </div> -->
            
        </div>
<!-- ---------------------------------------------------------------------------------------- -->

            <br/>

<!-- ---------------------------------------------------------------------------------------- -->
        <!-- 2nd row for records table -->
        <div class="row">

        <!-- Empty column -->
            <div class='col-sm-1'></div>

        <!-- Column for records table -->
            <div class='col-sm-10 bg-light p-5' style='overflow: scroll;'>

                <?php include 'records.php' ?>
                
            </div>

        <!-- Empty column -->
            <div class='col-sm-1'></div>

        </div>
<!-- ---------------------------------------------------------------------------------------- -->        

        <br/>

<!-- ---------------------------------------------------------------------------------------- -->
        <!-- 3rd Row for calendar -->
        <!-- <div class='row calrow'>

            <div class='col-sm-2'></div>

            <div class='col-sm-8 bg-light p-5' style='overflow: scroll;'>
                

                // include 'hospitalCal.php' this next time within php
            </div>

            <div class='col-sm-2'></div>
            
        </div> -->
<!-- ---------------------------------------------------------------------------------------- -->
 
    </div>
</body>
</html>
