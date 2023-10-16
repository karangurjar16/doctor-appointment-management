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

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

    <title>Request</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
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

                    <h1 class="h3 mb-3">Pending Appointment</h1>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <?php
                                    include "connect.php";

                                    $q = "select appointment_detail.*,doctor.doctor_id,doctor.doctor_name from appointment_detail,doctor where doctor.doctor_id=appointment_detail.doctor_id and appointment_detail.status='pending'";
                                    $res = mysqli_query($cn, $q) or die(mysqli_error($cn));
                                    $cnt = mysqli_num_rows($res);
                                    if ($cnt == 0) {
                                        echo "No Any Completed Appointment";
                                    } else {
                                        echo "<table class=table tabel-hover width=800>";

                                        echo "<tr><th>appoinment id</th><th>Patient Name</th><th>Doctor Name</th><th>Date</th><th>Status</th><th>Request</th></tr>";
                                        while ($info = mysqli_fetch_array($res)) {
                                            echo "<tr>";
                                            echo "<td>";
                                            echo $info['appointment_id'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $info['user_id'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $info['doctor_name'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $info['a_date'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $info['status'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<a href=accept.php?aid=" . $info['appointment_id'] . ">Accept</a>";
                                            echo "</td>";

                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                    }
                                    ?>

                                </div>
                                <div class="card-body">


                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">Completed Request</h1>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <?php
                                    include "connect.php";

                                    $q = "select appointment_detail.*,doctor.doctor_id,doctor.doctor_name from appointment_detail,doctor where doctor.doctor_id=appointment_detail.doctor_id and appointment_detail.status='Success'";
                                    $res = mysqli_query($cn, $q) or die(mysqli_error($cn));
                                    $cnt = mysqli_num_rows($res);
                                    if ($cnt == 0) {
                                        echo "No Any Completed Appointment";
                                    } else {
                                        echo "<table class=table tabel-hover width=800>";

                                        echo "<tr><th>appoinment id</th><th>Patient Name</th><th>Doctor Name</th><th>Date</th><th>Status</th></tr>";
                                        while ($info = mysqli_fetch_array($res)) {
                                            echo "<tr>";
                                            echo "<td>";
                                            echo $info['appointment_id'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $info['user_id'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $info['doctor_name'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $info['a_date'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $info['status'];
                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                    }
                                    ?>

                                </div>
                                <div class="card-body">


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>

            <?php
            include "footer.php";
            ?>
        </div>
    </div>

    <script src="js/app.js"></script>

</body>

</html>