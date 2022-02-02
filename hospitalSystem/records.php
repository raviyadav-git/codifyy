<?php 

require 'config.php';

if (isset($_POST['aadhar']) ) {
    function validate($data){

       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);

       return $data;
    }

    $aadhar = validate($_POST['aadhar']);

    $sql = "SELECT * FROM `healthCare` WHERE `aadharcard`='$aadhar'";
    // $sql = "SELECT * FROM `healthCare`";

        $result = mysqli_query($conn, $sql);

        // function buildTable(){
            
            echo "<table class='table table-striped table-hover text-center'>
                    <thead class='thead thead-dark'>
                        <tr>

                            <th>Id</th>
                            <th>Customer Name</th>
                            <th>Address</th>
                            <th>Aadhar</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Weight at Birth</th>
                            <th>Diagnosis</th>
                            <th>Date of Admission</th>
                            <th>Weight at Admission</th>
                            
                        </tr>
                    </thead>
                ";

                while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..

                    echo "<tr>";

                    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
                        echo "<td style='text-align: center; padding: 15px;'>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
                    }

                    echo "</tr>";
                }
                echo "</table>";
        // }
                
}

// $aadhar = $_POST['aadhar'];
// $startFrom = $_POST['startFrom'];
// $uptoEnd =$_POST['uptoEnd'];

// echo $aadhar;

// echo $startFrom;
// echo $uptoEnd;

// if ($conn->query($sql) === TRUE) {
//   echo '<script> alert("successfully")</script>';
//   header('Location: ../customer/index.html');
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
$conn->close();

?>