<?php

require "../config.php";

// get the post records
$aadhar = $_POST['aadharcard'];
$summary = $_POST['caseSummary'];
$treatment = $_POST['treatmentGiven'];
$investegate = $_POST['investigate'];
$dateofDischarge = $_POST['discharge'];
$weightDischarge= $_POST['weightdischarge'];



// database insert SQL code

$sql = "INSERT INTO `responseDetails` (`aadharcard`, `summary`, `treatment`, `investigate`, `discharge(date)`, `discharge(wt)`) 
VALUE ('$aadhar','$summary','$treatment','$investegate','$dateofDischarge','$weightDischarge')";


require('../fpdf/fpdf.php');

// DB Connection
$conn = mysqli_connect('localhost', 'root', 'password');
mysqli_select_db($conn, 'hospital');

$currentaadhar = $_POST['aadharcard'];

// Get patient details

$query = mysqli_query($conn,
    "SELECT healthCare.`customer`, healthCare.`address`, healthCare.`aadharcard`, healthCare.`age`, healthCare.`gender`, healthCare.`weight(Birth)`, healthCare.`diagnosis`, healthCare.`admission(date)`, healthCare.`admission(wt)`
    FROM healthCare
    WHERE healthCare.aadharcard = " .$currentaadhar);

$patient = mysqli_fetch_array($query);

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',11);

$pdf->Cell(0, 5, "Date: " . $_POST['discharge'], 0, 1, 'R');

$pdf->SetFont('Arial','B',20);
$pdf->Cell(0, 10, "HealthCare", 0, 1, 'C');

$pdf->SetFont('Arial','B',11);
$pdf->Cell(0, 5, "HealthCare - Codify Apps", 0, 1, 'C');
$pdf->Cell(0, 5, "Ph: XXXX XXX XXX,Web: hospital@codify.com", 0, 1, 'C');
$pdf->Ln();

// $name = 'Gaurish';
$pdf->Cell(50, 5, "Name", 0, 0);
$pdf->Cell(0, 5, $patient['customer'], 0, 1);
$pdf->Cell(0, 2, '', 0, 1);
// $pdf->Cell(34, 5, $_POST['patient'],0,1);

$pdf->Cell(50, 5, "Address", 0, 0);
$pdf->Cell(0, 5, $patient['address'], 0, 1);
$pdf->Cell(0, 2, '', 0, 1);

$pdf->Cell(50, 5, "Aadhar", 0, 0);
// $pdf->Cell(0, 5, $patient['aadharcard'], 1, 0);
$pdf->Cell(0, 5, $_POST['aadharcard'], 0, 1);
$pdf->Cell(0, 2, '', 0, 1);

$pdf->Cell(50, 5, "Age", 0, 0);
$pdf->Cell(0, 5, $patient['age'], 0, 1);
$pdf->Cell(0, 2, '', 0, 1);

$pdf->Cell(50, 5, "Gender", 0, 0);
$pdf->Cell(0, 5, $patient['gender'], 0, 1);
$pdf->Cell(0, 2, '', 0, 1);

$pdf->Cell(50, 5, "Weight @ Birth", 0, 0);
$pdf->Cell(0, 5, $patient['weight(Birth)'], 0, 1);
$pdf->Cell(0, 2, '', 0, 1);

$pdf->Cell(50, 5, "Diagnosis", 0, 0);
$pdf->Cell(0, 5, $patient['diagnosis'], 0, 1);
$pdf->Cell(0, 2, '', 0, 1);

$pdf->Cell(50, 5, "Date @ Admission", 0, 0);
$pdf->Cell(0, 5, $patient['admission(date)'], 0, 1);
$pdf->Cell(0, 2, '', 0, 1);

$pdf->Cell(50, 5, "Weight @ Admission", 0, 0);
$pdf->Cell(0, 5, $patient['admission(wt)'], 0, 1);
$pdf->Ln();

$pdf->Cell(0, 10, "Discharge Details", 0, 0, 'C');

$pdf->Ln();

$pdf->Cell(50, 5, "Summary", 0, 0);
// $pdf->Cell(0, 5, $patient['summary'], 1, 1);
$pdf->MultiCell(0, 5, $_POST['caseSummary'],0,1);//end of line
$pdf->Cell(0, 2, '', 0, 1);

$pdf->Cell(50, 5, "Treatment", 0, 0);
// $pdf->Cell(0, 5, $patient['treatment'], 1, 1);
$pdf->MultiCell(0, 5, $_POST['treatmentGiven'],0,1);//end of line
$pdf->Cell(0, 2, '', 0, 1);

$pdf->Cell(50, 5, "Investigation", 0, 0);
// $pdf->Cell(0, 5, $patient['investigate'], 1, 1);
$pdf->MultiCell(0, 5, $_POST['investigate'],0,1);//end of line
$pdf->Cell(0, 2, '', 0, 1);


$pdf->Cell(50, 5, "Weight @ Discharge", 0, 0);
// $pdf->Cell(0, 5, $patient['discharge(wt)'], 1, 1);
$pdf->Cell(0, 5, $_POST['weightdischarge'],0,1);//end of line
$pdf->Cell(0, 2, '', 0, 1);

$pdf->Cell(0, 10, '', 0, 1);
$pdf->Cell(25, 5, 'Signature: ', 0, 0, 'L');
$pdf->Cell(25, 5, 'Dr. Codify', 0, 1, 'R');


$pdf->Output();


  if ($conn -> multi_query($sql)) {
    do {
      // Store first result set
      if ($result = $conn -> store_result()) {
        while ($row = $result -> fetch_row()) {
          printf("%s\n", $row[0]);
        }
       $result -> free_result();
      }
      // if there are more result-sets, the print a divider
      if ($conn -> more_results()) {
        printf("-------------\n");
      }
       //Prepare next result set
    } while ($conn -> next_result());
  }
  
$conn->close();

?>