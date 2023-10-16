<?php
include "session.php";
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

    <title>Patient History</title>

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

                    <h1 class="h3 mb-3">View Prescription</h1>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <?php
                                    include "connect.php";

                                    $aid = $_GET['aid'];

                                    $q1 = "select * from appointment_detail where appointment_id='$aid'";
                                    $res1 = mysqli_query($cn, $q1) or die(mysqli_error($cn));
                                    while ($info1 = mysqli_fetch_array($res1)) {

                                        $uid = $info1['user_id'];
                                    }                                

                                    // $q = "select * from  patient_prescription";
                                    $q = "select patient_prescription.*,appointment_detail.* from patient_prescription,appointment_detail where  patient_prescription.appointment_id=appointment_detail.appointment_id and appointment_detail.user_id='$uid'";

                                    $res = mysqli_query($cn, $q) or die(mysqli_error($cn));
                                    $cnt = mysqli_num_rows($res);
                                    if ($cnt == 0) {
                                        echo "No Patient Prescription History";
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
                                        echo $info['pdate'];
                                        echo "</td>";
                                        echo "<td>";
                                        echo "<a href=viewdetail.php?presc_id=" . $info['presc_id'] . ">view detail</a>";
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