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

        <link rel="stylesheet" href="discharge.css">

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
        

        <script>
            function clrcase(){
                document.getElementById('caseArea').value = '';
            }

            function clrtreat(){
                document.getElementById('treatArea').value = '';
            }

            function clrinvest(){
                document.getElementById('investArea').value = '';
            }

            function printDiv() {

                const aadharNum = document.getElementById("aadharNum").value;
                const caseSum = document.getElementById("caseArea").value;
                const treatment = document.getElementById("treatArea").value;
                const invest = document.getElementById("investArea").value;
                const DischargeDate = document.getElementById("discharge").value;
                // const a = $sql;

                w = window.open();
                w.document.write(`
                    <div id="wrapper" style='position: absolute;
                                                        overflow: auto;
                                                        left: 0;
                                                        right: 0;
                                                        top: 0;
                                                        bottom: 0;
                                                        border: 5px solid black;'>
                    
                    
                    <table border='0' style='margin: auto;'>
                        <thead>
                            <tr>
                                <td colspan='6' style='text-align: right;'>Date: ${DischargeDate}<br/></td>
                            </tr>
                            
                            <tr>
                                <td colspan='6' style='text-align: center;'><h1>Health Report</h1></td>
                            </tr>    

                            <tr>
                                <td colspan='6' style='text-align: center;'><h6><span style='font-size: x-large;'>HealthCare<img style='height: 25px; width: 25px;' src='https://e7.pngegg.com/pngimages/0/389/png-clipart-health-care-nursing-care-medicine-patient-health-professional-others-love-heart.png'></img></span><br>
                                    Codify Apps, Ph: XXXX XXX XXX,<br>Web: hospital@codify.com<h6></td>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>Patient's name</td>
                                <td colspan='3'></td>

                                <td>Aadhar: </td>
                                <td>${aadharNum}</td>
                            </tr>

                           


                            <tr>
                                <td>Patient's address:</td>
                                <td colspan='5'></td>
                            </tr>

                            <tr>
                                <td>Wt.(birth): </td>
                                <td colspan='1'>2.5 Kgs</td>

                                <td>Age:</td>
                                <td colspan='1'>21</td>

                                <td>Gender: </td>
                                <td colspan='1'>Male</td>

                                
                            </tr>

                            <tr>
                                <td>Admission Date: </td>
                                <td colspan='2'>2022-01-29</td>
                                <td colspan='2'>Admission Weight: </td>
                                <td>58 Kgs</td>
                            </tr>

                            <tr>
                                <td>Diagnosis: </td>
                                <td colspan='5'>Alright!</td>
                            </tr>

                            <tr>
                                <th colspan='6'><br>Discharge Details</th>
                            </tr>

                            <tr>
                                <td>Case Summary: </td>
                                <td colspan='5'><textarea cols='55' rows='12'>${caseSum}</textarea></td>
                            </tr>

                            <tr>
                                <td>Treatment given: </td>
                                <td colspan='5'><textarea cols='55' rows='10'>${treatment}</textarea></td>
                            </tr>

                            <tr>
                                <td>Investigation: </td>
                                <td colspan='5'><textarea cols='55' rows='10'>${invest}</textarea></td>
                            </tr>
                        </tbody>

                        
                        <tfoot>

                            <tr>
                                <td colspan='5'><br><br><br><br><br><br><br></td>
                            </tr>

                            <tr>
                                
                                <td>Signature: </td>
                                <td colspan='5'>Dr. Codify</td>
                            <tr>
                        </tfoot>
                    </table>
                      `
                );
                w.print();
                w.close();
            }

            
        </script>

    <title>Discharge</title>


</head>
<body>

     <!-- Navbar -->
     
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
            <a class="nav-link" href="../customer/index.html">Admit</a>
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

<div class="cover">
        <div class='container-fluid'>

        <div class='row'>

            <div class='col-sm-4 offset-sm-4 bg-light p-4'>

                <form action="discharge.php" class='form-group' method="post">
                    <!-- ------------------------------------ -->

                    <h1>Report</h1>
                    <b><hr></b>

                    <div class='form-group'>
                        <label>Aadhar: </label>
                        <input type='text' class='form-control' id='aadharNum' onchange="php()" name="aadharcard" >
                    </div>
                    <br>
                    <div class='form-group'>
                        <label>Case Summary</label>
                        <textarea cols="50" rows="7" class='form-control' id='caseArea' name="caseSummary"></textarea>
                        <div id='clrbtn' class='p-1' onclick="clrcase()">Clear area
                    </div>
                    <br>
                    <div class='form-group'>
                        <label>Treatment Given</label>
                        <textarea cols="50" rows="7" class='form-control' id='treatArea' name="treatmentGiven"></textarea>
                        <div id='clrbtn' class='p-1' onclick="clrtreat()">Clear area
                    </div>
                    <br>
                    <div class='form-group'>
                        <label>Investigation</label>
                        <textarea cols="50" rows="7" class='form-control' id='investArea' name="investigate"></textarea>
                        <div id='clrbtn' class='p-1' onclick="clrinvest()">Clear area
                    </div>
                    <br>
                    <div class='form-group'>
                        <label>Discharge: </label>
                        <input type='date' name="discharge" class="form-control" id="discharge"></input>
                    </div>
                    <br>
                    <div class='form-group'>
                        <label>Weight @ discharge:</label>
                        <input type='float' name="weightdischarge" class="form-control" id="weightdischarge"></input>
                    </div>

                    <hr>
                    <td colspan='2'><a class='btn btn-primary w-100' onclick="printDiv()" value="print a div!">Print this page</a>
                    <br><br>

                    <button class='btn btn-success'>Submit</button>

                    <!-- ------------------------------------ -->
                   
                </form>
                
            </div>
        </div>
    </div>
    </div>
</body>
</html>
