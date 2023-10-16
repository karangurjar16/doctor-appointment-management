<?php
    
ob_end_clean();
$rid=$_GET['rid'];
$type=$_GET['type'];

include "myconnection.php";
if($type=="Dangue")
{
                    $qins="select * from dangue where reqid='$reqid'";
                    $resultins=mysqli_query($connection,$qins);
                    while($arr=mysqli_fetch_array($resultins))
                    {
                        $emmail=$arr['email'];
                        $haemoglobin=$arr['haemoglobin'];
                    }

}


require('fpdf.php');
  
// Instantiate and use the FPDF class 
$pdf = new FPDF();
  
//Add a new page
$pdf->AddPage();
  
// Set the font for the text
$pdf->SetFont('Arial', '', 18);
$pdf->Ln();
  

$pdf->Cell(200,10,'Dangue Report',0,'LR','C');
$pdf->Ln();
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(40,10,'haemoglobin ',1);
$pdf->Cell(40,10,$haemoglobin,1);
$pdf->Ln();


  
// return the generated output
$pdf->Output();
  
?>
