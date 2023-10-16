 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

     <link rel="stylesheet" href="print.css">

     <title>Patient Prescription</title>

     <link href="admin/css/app.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
 </head>

 <body>
     <style>
         @media print {

             /* Hide every other element */
             body * {
                 visibility: hidden;
             }

             /* Then displaying print container elements */
             .print-container,
             .print-container * {
                 visibility: visible;
             }

             /* Adjusting the position to always start from top left */
             .print-container {
                 /* position: absolute; */
                 left: 20;
                 top: Opx;
             }
         }
     </style>

     <div class="wrapper">

         <div class="main">

             <main class="content">

                 <div class="container-fluid p-0">

                     <h1 class="h3 mb-3">View Prescription Detail</h1>

                     <div class="row print-container">
                         <div class="col-12">
                             <div class="card">
                                 <div class="card-header">
                                     <?php
                                        include "connect.php";
                                        $presc_id = $_GET['presc_id'];

                                        $q = "select appointment_detail.*,patient_prescription.* from appointment_detail,patient_prescription where presc_id=$presc_id and appointment_detail.appointment_id=patient_prescription.appointment_id";
                                        $res = mysqli_query($cn, $q) or die(mysqli_error($cn));
                                        echo "<table class=table tabel-hover width=800>";
                                        while ($info = mysqli_fetch_array($res)) {
                                            echo "<tr>";
                                            echo "<th>";

                                            echo "presc id";
                                            echo "</th>";
                                            echo "<td>";
                                            echo $info['presc_id'];
                                            echo "</td>";
                                            echo "</tr>";

                                            echo "<tr>";
                                            echo "<th>";
                                            echo "appointment id";
                                            echo "</th>";
                                            echo "<td>";
                                            echo $info['appointment_id'];
                                            echo "</td>";
                                            echo "</tr>";
                                            echo "<tr>";

                                            echo "<tr>";
                                            echo "<th>";
                                            echo "patient Name";
                                            echo "</th>";
                                            echo "<td>";
                                            echo $info['user_id'];
                                            echo "</td>";
                                            echo "</tr>";
                                            echo "<tr>";

                                            echo "<th>";
                                            echo "Advise";
                                            echo "</th>";
                                            echo "<td>";
                                            echo $info['advise'];
                                            echo "</td>";
                                            echo "</tr>";
                                            echo "<tr>";

                                            echo "<th>";
                                            echo "presc date";
                                            echo "</th>";
                                            echo "<td>";
                                            echo $info['pdate'];
                                            echo "</td>";
                                            echo "</tr>";

                                            $did = $info['doctor_id'];
                                            $q2 = "select appointment_detail.*,doctor.* from appointment_detail,doctor where appointment_detail.doctor_id=doctor.doctor_id and appointment_detail.doctor_id='$did'";
                                            $res2 = mysqli_query($cn, $q2) or die(mysqli_error($cn));
                                            echo "<table class=table tabel-hover width=800>";
                                            while ($info2 = mysqli_fetch_array($res2)) {
                                                echo "<tr>";
                                                echo "<th>";
                                                echo "Doctor Name";
                                                echo "</th>";
                                                echo "<td>";
                                                echo $info2['doctor_name'];
                                                echo "</td>";
                                                echo "</tr>";
                                            }


                                            echo "<th >";
                                            echo "List of Medicine";
                                            echo "</th>";
                                            echo "<td>";

                                            echo "</td>";

                                            $aid = $info['appointment_id'];
                                            $q1 = "select patient_medicine.*,medicine.* from medicine,patient_medicine where patient_medicine.aid=$aid and  medicine.medicine_id=patient_medicine.mid";
                                            $res1 = mysqli_query($cn, $q1) or die(mysqli_error($cn));
                                            $i = 1;
                                            while ($info1 = mysqli_fetch_array($res1)) {
                                                echo "<tr>";
                                                echo "<th>";
                                                echo $i++;
                                                echo "</th>";
                                                echo "<td>";
                                                echo $info1['medicine_name'];
                                                echo "</td>";
                                                echo "</tr>";
                                            }
                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                        // echo "<a   href=learn/pdf.php?presc_id=" . $_GET['presc_id'] . ">view detail</a>";

                                        ?>
                                 </div>
                                 <div class="card-body">
                                 </div>
                             </div>
                         </div>
                     </div>

                     <button onclick="window.print();" class="btn btn-primary" id="printbtn">Print</button>



                 </div>
             </main>


         </div>
     </div>

     <script src="js/app.js"></script>
     <script src="js/print.js"></script>


 </body>

 </html>