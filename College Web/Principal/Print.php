<?php
session_start();
if(empty($_SESSION['Username']) || $_SESSION['Username'] != "Principal@kmkks"){
    header('location:../Login/Login.php');
}
include "../php files/db_connection.php";
require_once("../../fpdf/fpdf.php");
$sql = $_SESSION['sql'];
$class = "Class: ".$_SESSION['Class']." (Year : ".date("Y").")";
$class1 = $_SESSION['Class']." (".date("Y").")";
$class2 = $_SESSION['Class'];
$choice = $_SESSION['choice'];
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
if($choice == 1){
$pdf->SetFont('Times','B',15);
$pdf->Cell(0,10,"Shri K.M.Savjani & Smt. K.K.Savjani BBA/BCA College - Veraval",1,1,'C');
$pdf->Cell(0,10,$class,1,1,'C');
$pdf->SetFont('arial','B', 11.9,'C');
$pdf->Cell(26.1,10,"SPUID",1,0,'C');
$pdf->Cell(59.9,10,"Name",1,0,'C');
$pdf->Cell(15.9,10,"Course",1,0,'C');
$pdf->Cell(22,10,"Semester",1,0,'C');
$pdf->Cell(26,10,"Mobile No",1,0,'C');
$pdf->Cell(40.2,10,"Email",1,0,'C');

$pdf->SetFont('arial','',9.6);
$results = mysqli_query($conn, $sql);
$records = mysqli_num_rows($results);
$count=0;
while($Match = $results -> fetch_assoc()){
#recieving the form data
$spuid = $Match['SPU_ID'];
$name = $Match['Name'];
$course = $Match['Course'];
$Current_Semester = $Match['Semester'];
$mobile_no = $Match['Mobile'];
$email = $Match['Email'];
$pdf->Ln();

$pdf->Cell(26.1,10,$spuid,1,0,'C');
$pdf->Cell(59.9,10,$name,1,0,'C');
$pdf->Cell(15.9,10,$course,1,0,'C');
$pdf->Cell(22,10,$Current_Semester,1,0,'C');
$pdf->Cell(26,10,$mobile_no,1,0,'C');
if(strlen($email) <= 19){
 $pdf->MultiCell(40.2,10,$email,1,'C');
}
else{
$pdf->MultiCell(40.2,5,$email,1,'C');
}
$file = $class1.'.pdf';
$count += 1;
if($records == $count){
unset($_SESSION['sql']);
unset($_SESSION['Class']);
unset($_SESSION['choice']);
$pdf->output($file, 'D');
echo "<script>window.location='Students Data.php';</script>";
}
}
}
else{
$pdf->SetFont('Times','B',15);
$pdf->Cell(0,10,"Shri K.M.Savjani & Smt. K.K.Savjani BBA/BCA College - Veraval",1,1,'C');
$pdf->Cell(0,10,$class,1,1,'C');
$pdf->SetFont('arial','B',11.9);
$pdf->Cell(24.9,10,"SPUID",1,0,'C');
$pdf->Cell(106.9,10,"Name",1,0,'C');
$pdf->Cell(29.1,10,"Course",1,0,'C');
$pdf->Cell(29.1,10,"Semester",1,0,'C');

$pdf->SetFont('arial','',9.6);
$results = mysqli_query($conn, $sql);
$records = mysqli_num_rows($results);
$count=0;
while($Match = $results -> fetch_assoc()){
#recieving the form data
$spuid = $Match['SPU_ID'];
$name = $Match['Name'];
$course = $Match['Course'];
$Current_Semester = $Match['Semester'];
$pdf->Ln();

$pdf->Cell(24.9,10,$spuid,1,0,'C');
$pdf->Cell(106.9,10,$name,1,0,'C');
$pdf->Cell(29.1,10,$course,1,0,'C');
$pdf->Cell(29.1,10,$Current_Semester,1,0,'C');
$file = $class1.'.pdf';
$count += 1;
if($records == $count){
unset($_SESSION['sql']);
unset($_SESSION['Class']);
unset($_SESSION['choice']);
$pdf->output($file, 'D');
echo "<script>window.location='Students Data.php';</script>";
}
}
}
?>