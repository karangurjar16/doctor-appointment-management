<?php
include "sessionA.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="stylesheet" href="print.css">

    <title>Radhe Medical</title>

    <link href="css/app.css" rel="stylesheet">
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
            .print_name{
                display:block !important;
                text-align:center!important;
            }
            h1.h3.mb-3.show_name{
                display:none!important;
            }
            
        }

        .print_name{
            display:none;
        }
    </style>

    <div class="wrapper">
        <?php
        include "sidebar.php";
        ?>

        <div class="main">
            <?php
            include  "nav.php"
            ?>
            <main class="content">

                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3 show_name">RADHE MEDICAL</h1>

                    <div class="row print-container">
                        <div class="col-12">
                            <div class="card">
                            <h1 class="h3 mb-3 print_name">RADHE MEDICAL</h1>
                                <div class="card-header">
                                    <?php
                                    include "connect.php";
                                    $presc_id = $_GET['presc_id'];

                                    $q = "select * FROM patient_prescription WHERE presc_id = '$presc_id'";
                                    $res = mysqli_query($cn, $q) or die(mysqli_error($cn));

                                    // echo$count = mysqli_num_rows($res);
                                    echo "<table class=table tabel-hover width=800>";
                                    while ($info = mysqli_fetch_array($res)) 
                                    {
                                        
                                        

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

                                        echo "<th >";
                                        echo "List of Medicine";
                                        echo "</th>";
                                        echo "<td>";

                                        echo "</td>";

                                        $aid = $info['appointment_id'];
                                        $get_doctor_id = "select * from appointment_detail WHERE appointment_id = '$aid'";
                                        $get_doctor_result = mysqli_query($cn, $get_doctor_id) or die(mysqli_error($cn));
                                        foreach($get_doctor_result as $get_doctor_result_k => $get_doctor_result_v){
                                            $doc_id = $get_doctor_result_v['doctor_id'];
                                        }

                                        $get_doctor_signature = "select * from doctor WHERE doctor_id = '$doc_id'";
                                        $get_doctor_signature_result = mysqli_query($cn, $get_doctor_signature) or die(mysqli_error($cn));
                                        foreach($get_doctor_signature_result as $get_doctor_signature_result_k => $get_doctor_signature_result_v){
                                            $signature = $get_doctor_signature_result_v['signature'];
                                        }

                                        $q1 = "select patient_medicine.*,medicine.* from medicine,patient_medicine where patient_medicine.aid=$aid and  medicine.medicine_id=patient_medicine.mid";
                                        $res1 = mysqli_query($cn, $q1) or die(mysqli_error($cn));
                                        $i = 1;
                                        while ($info1 = mysqli_fetch_array($res1)) {
                                          
                                            $total += $info1['price'];
                                            echo "<tr>";
                                            echo "<th>";
                                            echo $i++;
                                            echo "</th>";
                                            echo "<td>";
                                            echo $info1['medicine_name'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $info1['medicine_type'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $info1['price'].'/-';
                                            
                                            echo "</td>";
                                           
                                            echo "</tr>";
                                        }
                                        echo "<tr>";
                                        echo "<td colspan='8' style='text-align:right;'>";
                                            echo '<b>Total </b>= '. $total.'/-';
                                            echo "</td>";
                                            echo "</tr>";
                                            echo "<td colspan='8' style='text-align:right;'>";
                                            echo "<img src='img/$signature' width='200px'>";
                                            echo "</td>";
                                        
                                    }
                                    echo "</table>";
                                    ?>
                                </div>
                                <div class="card-body">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button onclick="window.print();" class="btn btn-primary" id="printbtn  ">Print</button>
                </div>
            </main>

            <?php
            include "footer.php";
            ?>
        </div>
    </div>

    <script src="js/app.js"></script>
    <script src="js/print.js"></script>


</body>

</html>