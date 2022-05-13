<?php
  session_start();

  if(!isset($_SESSION["username"])){
      header("location:index.php");
  }
?>
<?php
require 'config.php';
include 'navbar.php';
error_reporting(0);

?>

<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="search.js" ></script>

</head>
<body>
<div class="container-fluid App">
  <br>
  <div class="row">
<div class="col-md-1"></div>
<div class="col-md-2">
 <input type="text" id="search" name="search" onkeyup="search()" placeholder="Search.."  class="form-control">
</div>
<div class="col-md-1"></div>

  </div>
    <div>
    <h3 style="text-align: center;">All Patients</h3>
    
<table class="table">
  <thead>
<tr>
    <th class="th"></th>
    <th class="th" >Name</th>
    <th class="th">Mobile</th>
    <th class="th">Address</th>
    <th class="th">Admission Date</th>
    <th class="th">Discharge Date</th>

</tr>
</thead>
<tbody>
  <?php
$sql= "Select * from `customerInfo`";
$result = mysqli_query($conn, $sql);
 if($result)
   {

     while($row = mysqli_fetch_assoc($result))
     {
       $id=$row['patient_id'];
       $customer=$row['customer'];
       $mobile=$row['mobile'];
       $address=$row['address'];
       $admission=$row['admission(date)'];
       $discharge=$row['discharge(date)'];
       echo '<tr class="name">
        <th></th>
        <th scope="row">'.$customer.'</th>
        <td>'.$mobile.'</td>
        <td>'.$address.'</td>
        <td>'.$admission.'</td>
        <td>'.$discharge.'</td>
        <td ><a href="edit.php?printid='.$id.'"><button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button></a>
        <td ><a href="view.php?printid='.$id.'"><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button></a>
        </tr>';
        }
    }
   ?>
</tbody>
</table>
</div>
<div class="tabledata"></div>
    </div>

    <div class="bg-light"></div>

</body>

</html>
