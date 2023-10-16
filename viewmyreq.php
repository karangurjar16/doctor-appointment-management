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
                        <h3 class="lead">Pending Appointment Detail</h3>
                    </div>&nbsp;
                    <div class="card-header">
                        <?php
                        include "connect.php";
                        $un = $_SESSION['un'];

                        $q = "select appointment_detail.*,doctor.doctor_id,doctor.doctor_name,timeslot from appointment_detail,doctor where doctor.doctor_id=appointment_detail.doctor_id  and appointment_detail.user_id='$un' and appointment_detail.status='pending'";
                        $res = mysqli_query($cn, $q) or die(mysqli_error($cn));

                        $cnt = mysqli_num_rows($res);
                        if ($cnt == 0) {
                            echo "No Pending Request";
                        } else {
                            echo "<table width=800 align=center>";
                            echo "<tr><td>Doctor Name</td><td>Date</td><td>Status</td></tr>";
                            while ($info = mysqli_fetch_array($res)) {
                                echo "<tr>";

                                echo "<td>";
                                echo $info['doctor_name'];
                                echo "</td>";
                                // echo "<td>";
                                // echo $info['a_date'];
                                // echo "</td>";
                                echo "<td>";
                                $date = $info['a_date'];
                                $darray = explode("-", $date);
                                $rev = array_reverse($darray);
                                $da = implode("-", $rev);
                                //echo $darray[2] . "-" . $darray[1] . "-" . $darray[0];
                                echo $da;
                                echo "</td>";
                                echo "<td>";
                                echo $info['status'];
                                echo "</td>";
                                echo "<td>";
                                echo "<a class='text-white' href=cancelappointment.php?aid=" . $info['appointment_id'] . ">Cancel Appointment</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        }


                        ?>

                        <div class="contact-head">&nbsp;
                            <h3 class="lead">Success Appointment Detail</h3>
                        </div>&nbsp;
                        <div class="card-header">
                            <?php
                            include "connect.php";
                            $un = $_SESSION['un'];

                            $q = "select appointment_detail.*,doctor.doctor_id,doctor.doctor_name,timeslot from appointment_detail,doctor where doctor.doctor_id=appointment_detail.doctor_id  and appointment_detail.user_id='$un'  and appointment_detail.status='success'";
                            $res = mysqli_query($cn, $q) or die(mysqli_error($cn));

                            $cnt = mysqli_num_rows($res);
                            if ($cnt == 0) {
                                echo "No Success Request";
                            } else {
                                echo "<table width=800 align=center>";

                                echo "<tr><td>Doctor Name</td><td>Date</td><td>Status</td><td>Time</td></tr>";
                                while ($info = mysqli_fetch_array($res)) {
                                    echo "<tr>";

                                    echo "<td>";
                                    echo $info['doctor_name'];
                                    echo "</td>";
                                    // echo "<td>";
                                    // echo $info['a_date'];
                                    // echo "</td>";
                                    echo "<td>";

                                    $date = $info['a_date'];
                                    $darray = explode("-", $date);
                                    $rev = array_reverse($darray);
                                    $da = implode("-", $rev);
                                    //echo $darray[2] . "-" . $darray[1] . "-" . $darray[0];
                                    echo $da;
                                    echo "</td>";
                                    echo "<td>";
                                    echo $info['status'];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $info['timeslot'];
                                    echo "</td>";
                                    echo "<td>";
                                    echo "<a class='text-white' href=cancelappointment.php?aid=" . $info['appointment_id'] . ">Cancel Appointment</a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            }
                            echo "<br>";
                            ?>

                        </div>

                    </div>
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