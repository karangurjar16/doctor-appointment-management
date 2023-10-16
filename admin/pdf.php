<?php
    
ob_end_clean();
// $rid=$_GET['rid'];
// $type=$_GET['type'];



include "connect.php";
$presc_id = $_GET['presc_id'];

$q = "select appointment_detail.*,patient_prescription.* from appointment_detail,patient_prescription where presc_id=$presc_id and appointment_detail.appointment_id=patient_prescription.appointment_id";
$res = mysqli_query($cn, $q) or die(mysqli_error($cn));

                    // $qins="select * from dangue where reqid='$rid'";
                    // $resultins=mysqli_query($connection,$qins);
                    while($arr=mysqli_fetch_array($res))
                    {
                        $presc_id=$arr['presc_id'];
                        // $haemoglobin=$arr['haemoglobin'];
                        // $wbc=$arr['totalwbccount'];
                        // $plat=$arr['platelet'];
                        // $rbc=$arr['rbccount'];
                        // $hct=$arr['hct(pcv)'];
                        // $mcv=$arr['mcv'];
                        // $mch=$arr['mch'];
                        // $mchc=$arr['mchc'];
                        // $neu=$arr['neutrophil'];
                        // $lym=$arr['lymphocyte'];
                        // $mono=$arr['monocyte'];
                    }




require('fpdf.php');
  
// Instantiate and use the FPDF class 
$pdf = new FPDF();
  
//Add a new page
$pdf->AddPage();
  
// Set the font for the text
$pdf->SetFont('Arial', '', 18);
$pdf->Ln();
  

$pdf->Cell(200,10,'prescrtiption',0,'LR','C');
$pdf->Ln();
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(40,10,'prescription id',1);
$pdf->Cell(40,10,$presc_id,1);
// $pdf->Cell(40,10,'g/dl',1);
// $pdf->Cell(40,10,'13-17',1);
// $pdf->Ln();
// $pdf->Cell(40,10,'Total WBC Count',1);
// $pdf->Cell(40,10,$wbc,1);
// $pdf->Cell(40,10,'/ul',1);
// $pdf->Cell(40,10,'4000-11000',1);
// $pdf->Ln();
// $pdf->Cell(40,10,'Platelet',1);
// $pdf->Cell(40,10,$plat,1);
// $pdf->Cell(40,10,'/ul',1);
// $pdf->Cell(40,10,'150000-450000',1);
// $pdf->Ln();
// $pdf->Cell(40,10,'RBC Count',1);
// $pdf->Cell(40,10,$rbc,1);
// $pdf->Cell(40,10,'million/cumm',1);
// $pdf->Cell(40,10,'4.6-6.2',1);
// $pdf->Ln();
// $pdf->Cell(40,10,'Blood Indices',0,'LR');
// $pdf->Ln();
// $pdf->Cell(40,10,'HCT(PCV)',1);
// $pdf->Cell(40,10,$hct,1);
// $pdf->Cell(40,10,'%',1);
// $pdf->Cell(40,10,'40-54',1);
// $pdf->Ln();
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

// if($type=="thyroid")
// {
//     $qinst="select * from thyroid where reqid='$rid'";
//     $resultinst=mysqli_query($connection,$qinst);
//     while($arrt=mysqli_fetch_array($resultinst))
//     {
//         $em=$arrt['email'];
//         $t3=$arrt['t3'];
//         $t4=$arrt['t4'];
//         $tsh=$arrt['tsh'];
//     }
//     require('fpdf.php');
  
// // Instantiate and use the FPDF class 
// $pdf = new FPDF();
  
// //Add a new page
// $pdf->AddPage();
  
// // Set the font for the text
// $pdf->SetFont('Arial', '', 18);
// $pdf->Ln();
  

// $pdf->Cell(200,10,'Thyroid Report',0,'LR','C');
// $pdf->Ln();
// $pdf->SetFont('Arial', '', 12);
// $pdf->Cell(40,10,'T3(Triiodothyronie)',1);
// $pdf->Cell(40,10,$t3,1);
// $pdf->Cell(40,10,'ng/mL',1);
// $pdf->Cell(40,10,'0.6-1.81',1);
// $pdf->Ln();
// $pdf->Cell(40,10,'T4(Thyroxine)',1);
// $pdf->Cell(40,10,$t4,1);
// $pdf->Cell(40,10,'ug/dL',1);
// $pdf->Cell(40,10,'4.5-12.6',1);
// $pdf->Ln();
// $pdf->Cell(40,10,'TSH(Ultra Sensitive)',1);
// $pdf->Cell(40,10,$tsh,1);
// $pdf->Cell(40,10,'uil/mL',1);
// $pdf->Cell(40,10,'0.55-4.78',1);
// $pdf->Ln();

// // return the generated output
// $pdf->Output();
// $pdf->Output('F',$rid.".pdf");
// }
// if($type=="blood")
// {
//                     $qinsb="select * from bloodreport where reqid='$rid'";
//                     $resultinsb=mysqli_query($connection,$qinsb);
//                     while($arrb=mysqli_fetch_array($resultinsb))
//                     {
//                         $email=$arrb['email'];
//                         $haemoglobin=$arrb['haemoglobin'];
//                         $wbc=$arrb['totalwbccount'];
//                         $plat=$arrb['platelet'];
//                         $rbc=$arrb['rbccount'];
//                     }
//                     require('fpdf.php');
  
// // Instantiate and use the FPDF class 
// $pdf = new FPDF();
  
// //Add a new page
// $pdf->AddPage();
  
// // Set the font for the text
// $pdf->SetFont('Arial', '', 18);
// $pdf->Ln();
  

// $pdf->Cell(200,10,'Blood Report',0,'LR','C');
// $pdf->Ln();
// $pdf->SetFont('Arial', '', 12);
// $pdf->Cell(40,10,'Haemoglobin',1);
// $pdf->Cell(40,10,$haemoglobin,1);
// $pdf->Cell(40,10,'g/dl',1);
// $pdf->Cell(40,10,'13-17',1);
// $pdf->Ln();
// $pdf->Cell(40,10,'Total WBC Count',1);
// $pdf->Cell(40,10,$wbc,1);
// $pdf->Cell(40,10,'/ul',1);
// $pdf->Cell(40,10,'4000-11000',1);
// $pdf->Ln();
// $pdf->Cell(40,10,'Platelet',1);
// $pdf->Cell(40,10,$plat,1);
// $pdf->Cell(40,10,'/ul',1);
// $pdf->Cell(40,10,'150000-450000',1);
// $pdf->Ln();
// $pdf->Cell(40,10,'RBC Count',1);
// $pdf->Cell(40,10,$rbc,1);
// $pdf->Cell(40,10,'million/cumm',1);
// $pdf->Cell(40,10,'4.6-6.2',1);
// $pdf->Ln();
// // return the generated output
// $pdf->Output();
// $pdf->Output('F',$rid.".pdf");
// }
// if($type=="covid")
// {
//                     $qinsc="select * from covid where reqid='$rid'";
//                     $resultinsc=mysqli_query($connection,$qinsc);
//                     while($arrc=mysqli_fetch_array($resultinsc))
//                     {
//                         $email=$arrc['email'];
//                         $rdrp=$arrc['rdrp'];
//                         $gene=$arrc['gene'];
//                         $rnase=$arrc['rnase'];
//                         $sars=$arrc['sars'];
//                     }
//                     require('fpdf.php');
  
// // Instantiate and use the FPDF class 
// $pdf = new FPDF();
  
// //Add a new page
// $pdf->AddPage();
  
// // Set the font for the text
// $pdf->SetFont('Arial', '', 18);
// $pdf->Ln();
  

// $pdf->Cell(200,10,'Covid Report',0,'LR','C');
// $pdf->Ln();
// $pdf->Cell(200,10,'Method : Real Time PCR(Qualitative)',0,'LR','C');
// $pdf->Ln();
// $pdf->SetFont('Arial', '', 12);
// $pdf->Cell(40,10,'rdrp',1);
// $pdf->Cell(40,10,$rdrp,1);
// $pdf->Cell(40,10,'Positive/Negative',1);

// $pdf->Ln();
// $pdf->Cell(40,10,'gene',1);
// $pdf->Cell(40,10,$gene,1);
// $pdf->Cell(40,10,'Positive/Negative',1);

// $pdf->Ln();
// $pdf->Cell(40,10,'rnase',1);
// $pdf->Cell(40,10,$rnase,1);
// $pdf->Cell(40,10,'Pass/Fail',1);

// $pdf->Ln();
// $pdf->Cell(40,10,'sars',1);
// $pdf->Cell(40,10,$sars,1);
// $pdf->Cell(40,10,'Positive/Negative',1);

// $pdf->Ln();
// // return the generated output
// $pdf->Output();
// $pdf->Output('F',$rid.".pdf");
// }
