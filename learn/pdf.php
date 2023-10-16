<?php
require('fpdf.php');
include "connect.php";
// $q ="select  * from signup where fname='sahil'";
$presc_id = $_GET['presc_id'];
$q = "select appointment_detail.*,patient_prescription.* from appointment_detail,patient_prescription where presc_id=$presc_id and appointment_detail.appointment_id=patient_prescription.appointment_id";
$res = mysqli_query($cn, $q) or die(mysqli_error($cn));
while ($info = mysqli_fetch_array($res)) {
    $did = $info['doctor_id'];
    $pid = $info['presc_id'];
    $aid = $info['appointment_id'];
    $pname = $info['user_id'];
    $advise = $info['advise'];
    $pdate = $info['pdate'];
    // $fn=$info['presc_id'];
    $aid = $info['appointment_id'];

    $q1 = "select patient_medicine.*,medicine.* from medicine,patient_medicine where patient_medicine.aid=$aid and  medicine.medicine_id=patient_medicine.mid";
    $res1 = mysqli_query($cn, $q1) or die(mysqli_error($cn));
    // $i = 1;
    while ($info1 = mysqli_fetch_array($res1)) {

        $mname = $info1['medicine_name'];
        $pdf = new FPDF();
        $pdf->AddPage();
        // $pdf->Image('prescription.jpg',0,0,210,0);
        // $pdf->Image('logo123.png', 10, -40, 150, 0);
        $pdf->Image('logo123.png', 10, -5, 50, 40);

        $pdf->SetFont('Arial', 'B', 18);

        $pdf->Cell(200, 10, 'Prescription', 0, 'LR', 'C');

        $pdf->Ln();
        $pdf->SetFont('Arial', '', 10);


        $pdf->Ln();
        $pdf->cell(40, 10, 'List of medicine');
        $pdf->Cell(40, 10, $mname, 0, 0, 'C');
        $pdf->output();
    }
}
// $pdf = new FPDF();
// $pdf->AddPage();
// // $pdf->Image('prescription.jpg',0,0,210,0);
// // $pdf->Image('logo123.png', 10, -40, 150, 0);
// $pdf->Image('logo123.png', 10, -5, 50, 40);

// $pdf->SetFont('Arial', 'B', 18);

// $pdf->Cell(200, 10, 'Prescription', 0, 'LR', 'C');

// $pdf->Ln();
// $pdf->SetFont('Arial', '', 10);

// $pdf->Ln();
// $pdf->cell(40, 10, 'Appointment ID');
// // $pdf->cell(40,10,'Appointment ID',1);
// $pdf->Cell(40, 10, $aid, 0, 0, 'C');
// $pdf->cell(40, 10, 'Prescription ID');
// $pdf->Cell(40, 10, $pid, 0, 0, 'C');
// $pdf->Ln();
// $pdf->cell(40, 10, 'Patient Name');
// $pdf->Cell(40, 10, $pname, 0, 0, 'C');
// $pdf->cell(40, 10, 'Doctor Name');
// $pdf->Cell(40, 10, $did, 0, 0, 'C');

// $pdf->Ln();
// $pdf->cell(40, 10, 'Prescription Date');
// $pdf->Cell(40, 10, $pdate, 0, 0, 'C');

// $pdf->Line(10, 65, 200, 65);

// $pdf->Ln();

// $pdf->Ln();
// $pdf->cell(40, 10, 'List of medicine');
// $pdf->Cell(40, 10, $mname, 0, 0, 'C');

// $pdf->Ln();
// $pdf->cell(40, 10, 'Advise');
// $pdf->Cell(40, 10, $advise, 0, 0, 'C');
// $pdf->output();


?>

<!--?php 
    
ob_end_clean();
// $rid=$_GET['rid'];
// $type=$_GET['type'];

include "connect.php";
$presc_id = $_GET['presc_id'];
$q = "select appointment_detail.*,patient_prescription.* from appointment_detail,patient_prescription where presc_id=$presc_id and appointment_detail.appointment_id=patient_prescription.appointment_id";
$res = mysqli_query($cn, $q) or die(mysqli_error($cn));

            //   $qins="select * from dangue where reqid='$rid'";
            //  $resultins=mysqli_query($connection,$qins);
                    while($arr=mysqli_fetch_array($resultins))
                    {
                        // $email=$arr['presc_id'];
                        $haemoglobin=$arr['presc_id'];
                        $wbc=$arr['user_id'];
                        $plat=$arr['appointment_id'];
                        $rbc=$arr['pdate'];
                        $hct=$arr['advise'];
                    //     $mcv=$arr['mcv'];
                    //     $mch=$arr['mch'];
                    //     $mchc=$arr['mchc'];
                    //     $neu=$arr['neutrophil'];
                    //     $lym=$arr['lymphocyte'];
                    //     $mono=$arr['monocyte'];
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
$pdf->Cell(40,10,'Haemoglobin',1);
$pdf->Cell(40,10,$haemoglobin,1);
$pdf->Cell(40,10,'g/dl',1);
$pdf->Cell(40,10,'13-17',1);
$pdf->Ln();
$pdf->Cell(40,10,'Total WBC Count',1);
$pdf->Cell(40,10,$wbc,1);
$pdf->Cell(40,10,'/ul',1);
$pdf->Cell(40,10,'4000-11000',1);
$pdf->Ln();
$pdf->Cell(40,10,'Platelet',1);
$pdf->Cell(40,10,$plat,1);
$pdf->Cell(40,10,'/ul',1);
$pdf->Cell(40,10,'150000-450000',1);
$pdf->Ln();
$pdf->Cell(40,10,'RBC Count',1);
$pdf->Cell(40,10,$rbc,1);
$pdf->Cell(40,10,'million/cumm',1);
$pdf->Cell(40,10,'4.6-6.2',1);
$pdf->Ln();
$pdf->Cell(40,10,'Blood Indices',0,'LR');
$pdf->Ln();
$pdf->Cell(40,10,'HCT(PCV)',1);
$pdf->Cell(40,10,$hct,1);
$pdf->Cell(40,10,'%',1);
$pdf->Cell(40,10,'40-54',1);
$pdf->Ln();
// $pdf->Cell(40,10,'MCV',1);
// $pdf->Cell(40,10,$mcv,1);
// $pdf->Cell(40,10,'fl',1);
// $pdf->Cell(40,10,'80-100',1);
// $pdf->Ln();
// $pdf->Cell(40,10,'MCH',1);
// $pdf->Cell(40,10,$mch,1);
// $pdf->Cell(40,10,'pg',1);
// $pdf->Cell(40,10,'27-34',1);
// $pdf->Ln();
// $pdf->Cell(40,10,'MCHC',1);
// $pdf->Cell(40,10,$mchc,1);
// $pdf->Cell(40,10,'g/dl',1);
// $pdf->Cell(40,10,'30-36',1);
// $pdf->Ln();
// $pdf->Cell(40,10,'Differencial Count',0,'LR');
// $pdf->Ln();
// $pdf->Cell(40,10,'     ',1);
// $pdf->Cell(40,10,'Result',1);
// $pdf->Cell(40,10,'Unit',1);
// $pdf->Cell(40,10,'Reference Interval',1);
// $pdf->Ln();
// $pdf->Cell(40,10,'Neutrophil',1);
// $pdf->Cell(40,10,$neu,1);
// $pdf->Cell(40,10,'%',1);
// $pdf->Cell(40,10,'50-70',1);
// $pdf->Ln();
// $pdf->Cell(40,10,'Lymphocyte',1);
// $pdf->Cell(40,10,$lym,1);
// $pdf->Cell(40,10,'%',1);
// $pdf->Cell(40,10,'20-40',1);
// $pdf->Ln();
// $pdf->Cell(40,10,'Monocyte',1);
// $pdf->Cell(40,10,$mono,1);
// $pdf->Cell(40,10,'%',1);
// $pdf->Cell(40,10,'3-6',1);
// $pdf->Ln();




  
// return the generated output
$pdf->Output();
$pdf->Output('F',$presc_id.".pdf");
?>