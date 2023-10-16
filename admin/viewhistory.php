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

    <link rel="canonical" href="https://demo-basic.adminkit.io/ui-forms.html" />

    <title>History </title>

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
            include "nav.php";
            ?>

            <main class="content">
                <div class="container-fluid p-0">

                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">View History</h1>


                        </a>
                    </div>
                    <form method=post action="inspresc.php" name="addprecription">
                        <div class="row">
                            <div class="col-12 col-lg-6">

                                <div class="card">

                                    <div class="card-body">
                                        <?php
                                        $aid = $_GET['aid'];
                                        include "connect.php";
                                        // echo $aid; 
                                        $q = "select appointment_detail.*,doctor.* from appointment_detail,doctor where appointment_id='$aid' and appointment_detail.doctor_id=doctor.doctor_id";
                                        $res = mysqli_query($cn, $q) or die(mysqli_error($cn));
                                        echo "<table class=table tabel-hover>";
                                        while ($info = mysqli_fetch_array($res)) {
                                        
                                            echo "<tr>";
                                            echo "<th>";
                                            echo "Appointment ID";
                                            echo "</th>";
                                            echo "<td>";
                                            echo $aid;
                                            echo "</td>";
                                            echo "</tr>";

                                            echo "<tr>";
                                            echo "<th>";
                                            echo "Doctor Name";
                                            echo "</th>";
                                            echo "<td>";
                                            echo $info['doctor_name'];
                                            echo "</td>";
                                            echo "</tr>";

                                            echo "<tr>";
                                            echo "<th>";
                                            echo "Username";
                                            echo "</th>";
                                            echo "<td>";
                                            echo $info['user_id'];
                                            echo "</td>";
                                            echo "</tr>";

                                            echo "<tr>";
                                            echo "<th>";
                                            echo "Time";
                                            echo "</th>";
                                            echo "<td>";
                                            echo $info['timeslot'];
                                            echo "</td>";
                                            echo "</tr>";

                                            
                                        }

                                        echo "</table>";
                                        ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>

            </main>

            <?php
			include "footer.php";
			?>
        </div>
    </div>

    <script src="js/app.js"></script>

</body>

</html>