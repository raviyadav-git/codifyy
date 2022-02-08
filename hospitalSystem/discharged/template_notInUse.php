<?php

// $x = $_POST['printbtn'];

// if(isset($_POST['printbtn'])) {
    // echo "This is Button1 that is selected";

require('../fpdf/fpdf.php');

// DB Connection
$con = mysqli_connect('localhost', 'root', 'password');
mysqli_select_db($con, 'hospital');

$currentaadhar = $_POST['aadharcard'];
// $currren

// $currentaadhar = '000011119999';
// Get patient details
$query = mysqli_query($con,
    "SELECT healthCare.`customer`, healthCare.`address`, healthCare.`aadharcard`, healthCare.`age`, healthCare.`gender`, healthCare.`weight(Birth)`, healthCare.`diagnosis`, healthCare.`admission(date)`, healthCare.`admission(wt)`, responseDetails.`summary`, responseDetails.`treatment`, responseDetails.`investigate`, responseDetails.`discharge(date)`, responseDetails.`discharge(wt)`
    FROM healthCare
    INNER JOIN responseDetails
    WHERE healthCare.aadharcard = " .$currentaadhar. " AND responseDetails.aadharcard = " . $currentaadhar);

// $query = mysqli_query($con,
//     "SELECT * FROM `healthCare` WHERE aadharcard = 000011119999;"
// );

// echo $query;

$patient = mysqli_fetch_array($query);

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',11);

// $pdf->Cell(130	,5,'Gemul Cars Co',0,0);
// $pdf->Cell(59	,5,'INVOICE',0,1);//end of line
$pdf->Cell(0, 10, "HealthCare", 1, 1, 'C');
// $name = 'Gaurish';
$pdf->Cell(50, 5, "Name", 1, 0);
$pdf->Cell(0, 5, $patient['customer'], 1, 1);

$pdf->Cell(50, 5, "Address", 1, 0);
$pdf->Cell(0, 5, $patient['address'], 1, 1);

$pdf->Cell(50, 5, "Aadhar", 1, 0);
// $pdf->Cell(0, 5, $patient['aadharcard'], 1, 0);
$pdf->Cell(34, 5, $_POST['aadharcard'],0,1);//end of line

$pdf->Cell(50, 5, "Age", 1, 0);
$pdf->Cell(0, 5, $patient['age'], 1, 1);

$pdf->Cell(50, 5, "Gender", 1, 0);
$pdf->Cell(0, 5, $patient['gender'], 1, 1);

$pdf->Cell(50, 5, "Weight @ Birth", 1, 0);
$pdf->Cell(0, 5, $patient['weight(Birth)'], 1, 1);

$pdf->Cell(50, 5, "Diagnosis", 1, 0);
$pdf->Cell(0, 5, $patient['diagnosis'], 1, 1);

$pdf->Cell(50, 5, "Date @ Admission", 1, 0);
$pdf->Cell(0, 5, $patient['admission(date)'], 1, 1);

$pdf->Cell(50, 5, "Weight @ Admission", 1, 0);
$pdf->Cell(0, 5, $patient['admission(wt)'], 1, 1);

$pdf->Cell(50, 5, "Summary", 1, 0);
// $pdf->Cell(0, 5, $patient['summary'], 1, 1);
$pdf->Cell(34, 5, $_POST['caseSummary'],0,1);//end of line

$pdf->Cell(50, 5, "Treatment", 1, 0);
// $pdf->Cell(0, 5, $patient['treatment'], 1, 1);
$pdf->Cell(34, 5, $_POST['treatmentGiven'],0,1);//end of line

$pdf->Cell(50, 5, "Investigation", 1, 0);
// $pdf->Cell(0, 5, $patient['investigate'], 1, 1);
$pdf->Cell(34, 5, $_POST['investigate'],0,1);//end of line

$pdf->Cell(50, 5, "Date @ Discharge", 1, 0);
// $pdf->Cell(0, 5, $patient['discharge(date)'], 1, 1);
$pdf->Cell(34, 5, $_POST['discharge'],0,1);//end of line

$pdf->Cell(50, 5, "Weight @ Discharge", 1, 0);
// $pdf->Cell(0, 5, $patient['discharge(wt)'], 1, 1);
$pdf->Cell(34, 5, $_POST['weightdischarge'],0,1);//end of line

$pdf->Output();
// }

?>