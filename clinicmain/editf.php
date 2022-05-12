<?php
  session_start();

  if(!isset($_SESSION["username"])){
      header("location:index.php");
  }
?>
<?php
include 'config.php';
?>
<?php

if(isset($_GET['printid'])){
 $id = $_GET['printid'];

$sql="select * from `mothers` where `m_id`= $id ";

$result=mysqli_query($conn, $sql);

if($result){

    if($row = mysqli_fetch_assoc($result))
     {
        $id=$row['m_id'];
        $mobile=$row['mobile'];
        $name=$row['name'];
         $address=$row['address'];
         $age=$row['age'];
         $weightbp=$row['weightbp'];
         $wdp=$row['wdp'];
         $wgdp=$row['wgdp'];
         $hypertension=$row['hypertension'];
         $diabetes=$row['diabetes'];
         $thyroid=$row['thyroid'];
         $bp=$row['bp'];
         $admission=$row['admission_dt'];
         $discharge=$row['discharge_dt'];
     }
    }
}
?>

<html>
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
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="search.js" ></script>
</head>
<body>
    <br>
    <div class=" container">
        <img src="images/raikhyheader.png" style="width: 100%;">
    </div>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-lg-5">
            <h5 style="text-align: left; color:#61308b">Dr. Naazbir Gill Raikhy</h5>
            <h6 style="text-align: left; color:#61308b">MBBS, MS OBG, Gold Medalist</h6>
            <h6 style="text-align: left; color:#61308b">FMAS, Sonologist</h6>
            <h6 style="text-align: left; color:#61308b">PMC - 44356</h6>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5">
            <h5 style="text-align: right; color:#61308b"># 10-A, Model Town, Patiala- 147001 </h5>
            <h6 style="text-align: right; color:#61308b">Contact: 0175-2309832</h6>
            <h6 style="text-align: right; color:#61308b">Mob: 6280532988</h6>
            </div>
        </div>
    </div>
      <br>
      <hr>
    <div class="container" >
        <form action="" method="POST">  
      
            <u><h6 style="text-align: left;"><b>Patient Id. RKHY/F/<?php echo $id ?></b></h6></u>
            <table class="table-bordered">
                <tr>
                <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Patient Name </h6><input type="decimal" name="patient_name" value="<?php echo $name ?>"></td>
                <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Address </h6><input type="decimal" name="address" value="<?php echo $address ?>"></td>
                <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Age </h6><input type="decimal" name="age" value="<?php echo $age ?>"></td>
                </tr>
            </table>
            <br>
            <br>
            <table class="table-bordered">
                <tr>
                <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Weight Before Pregnancy </h6><input type="decimal" name="weight" value="<?php echo $weightbp ?>"></td>
                <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Weight During Pregnancy </h6><input type="decimal" name="wdp" value="<?php echo $wdp ?>"></td>
                <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Weight Gain During Pregnancy </h6><input type="decimal" name="wgdp" value="<?php echo $wgdp ?>"></td>

                </tr>
            </table>
            <br>
            <br>
            <table class="table-bordered">
                <tr>
                    <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Hypertension </h6><input type="decimal" name="hypertension" value="<?php echo $hypertension ?>"></td>
                    <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Diabetes </h6><input type="decimal" name="diabetes" value="<?php echo $diabetes ?>"></td>
                    <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Thyroid </h6><input type="decimal" name="thyroid" value="<?php echo $thyroid ?>"></td>
                    <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Blood Pressure </h6><input type="decimal" name="bp" value="<?php echo $bp ?>"></td>
                </tr>
            </table>

            <br>
            <br>
            <table class="table-bordered">

                <tr>
                    <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Admission Date </h6><input type="date" name="adm_date" value="<?php echo $admission ?>"></td>
                    <td class="text-center"><h6 style="background-color: black;" class="text-light text-center">Discharge Date</h6><input type="date" name="dis_date" vaalue="<?php echo $discharge ?>"></td>
                </tr>
            </table>
            <br>
            <button type="submit" name="submit" class="btn btn-success">Update</button>
        </form>
    </div>
    <?php
       if(isset($_POST['submit'])){
           $m_id = $id;
           $m_name = $_POST['patient_name'];
           $m_age = $_POST['age'];
           $m_address = $_POST['address'];
           $m_weight = $_POST['weight'];
           $m_wdp = $_POST['wdp'];
           $m_wgdp = $_POST['wgdp'];
           $m_hypertension = $_POST['hypertension'];
           $m_diabetes = $_POST['diabetes'];
           $m_thyroid = $_POST['thyroid'];
           $m_bp= $_POST['bp'];
           $m_adm_date= $_POST['adm_date'];
           $m_dis_date= $_POST['dis_date'];

           $sql2 = "UPDATE `mothers` SET 
           `name`='$m_name',
           `address`='$m_address',
           `age`='$m_age',
           `weightbp`='$m_weight',
           `wdp`='$m_wdp',
           `wgdp`='$m_wgdp',
           `hypertension`='$m_hypertension',
           `diabetes`='$m_diabetes',
           `thyroid`='$m_thyroid',
           `bp`='$m_bp',
           `admission_dt`='$m_adm_date',
           `discharge_dt`='$m_dis_date' 
           WHERE `m_id`='$id'";
           
           if ($conn->query($sql2) === TRUE) {
        
            header("location:motherslist.php");
          } else {
    
            echo $sql2;
          }
       }
    ?>
</body>

</html>
