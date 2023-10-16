<?php
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Request</title>
    <!-- icon -->
    <link rel="icon" href="images/logo.ico" type="image/icon type">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <?php
    include "navigationlogin.php";
    ?>

    <main>
        <!-- signup section -->
        <section id="contact" class="contact py1">
            <div class="container grid">
                <!-- <div class="contact-left">
                    <img src="images/post-2.jpg">
                </div> -->

                <div class="contact-right text-white text-center bg-blue">
                    <div class="contact-head">
                        <h3 class="lead">View prescription History</h3>
                    </div>&nbsp;
                    <?php
                    include "connect.php";
                    $un = $_SESSION['un'];

                    $q = "select patient_prescription.*,appointment_detail.* from patient_prescription,appointment_detail where appointment_detail.user_id='$un' and  patient_prescription.appointment_id=appointment_detail.appointment_id ";
                    $res = mysqli_query($cn, $q) or die(mysqli_error($cn));
                    $cnt = mysqli_num_rows($res);
                    if ($cnt == 0) {
                       echo " <br>";
                        echo "No Data found";
                    } else {
                        echo "<table class=table tabel-hover width=800>";
                        echo "<tr><th>appointment id</th><th>Patient Name</th><th>Date</th><th> </th></tr>";
                        while ($info = mysqli_fetch_array($res)) {
                            echo "<tr>";
                            echo "<td>";
                            echo $info['appointment_id'];
                            echo "</td>";
                            echo "<td>";
                            echo $info['user_id'];
                            echo "</td>";
                            echo "<td>";

                            $date = $info['pdate'];
                            $darray = explode("-", $date);
                            $rev = array_reverse($darray);
                            $da = implode("-", $rev);
                            //echo $darray[2] . "-" . $darray[1] . "-" . $darray[0];
                            echo $da;

                            echo "</td>";
                            echo "<td>";
                            echo "<a class=text-white href=viewpdetail.php?presc_id=" . $info['presc_id'] . ">view detail</a>";
                            // echo "<a class=text-white href=learn/pdf.php?presc_id=" . $info['presc_id'] . ">view detail</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                    ?>

                    <!--?php
                                    include "connect.php";
                                    // $presc_id = $_GET['presc_id'];
                                    // presc_id=$presc_id and
                                    $q = "select appointment_detail.*,patient_prescription.* from appointment_detail,patient_prescription where  appointment_detail.appointment_id=patient_prescription.appointment_id";
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
                                    ?-->
                </div>
            </div>
        </section>
        <!-- end of Login section -->
    </main>

    <?php
    include "footer.php";
    ?>


    <!-- custom js -->
    <script src="js/script.js"></script>
</body>

</html>