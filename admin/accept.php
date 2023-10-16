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

    <title>Accept</title>

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

                    <h1 class="h3 mb-3">Response</h1>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <?php
                                    include "connect.php";
                                    $aid=$_GET['aid'];
                                    $q = "select appointment_detail.*,doctor.doctor_id,doctor.doctor_name from appointment_detail,doctor where doctor.doctor_id=appointment_detail.doctor_id and appointment_detail.appointment_id='$aid'";
                                    $res = mysqli_query($cn, $q) or die(mysqli_error($cn));
                                    echo "<table class='table table-hover' width=800>";

                                    while ($info = mysqli_fetch_array($res)) {
                                        echo "<tr>";
                                        echo "<th>";
                                        echo "Request By";
                                        echo "</th>";
                                        echo "<td>";
                                        $una=$info['user_id'];
                                        echo $info['user_id'];
                                        echo "</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "<th>";
                                        echo "Doctor";
                                        echo "</th>";
                                        
                                        echo "<td>";
                                        echo $info['doctor_name'];
                                        echo "</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        
                                        echo "<th>";
                                        echo "Date";
                                        echo "</th>";
                                        
                                        
                                        echo "<td>";
                                        echo $info['a_date'];
                                        echo "</td>";
                                        echo "</tr>";

                                        $q1="select * from signup where username='$una'";
                                        $res1 = mysqli_query($cn, $q1) or die(mysqli_error($cn));

                                        while ($info1 = mysqli_fetch_array($res1)) {
                                        echo "<tr>";
                                        echo "<th>";
                                        echo  "Full name";
                                        echo "</th>";
                                        echo "<td>";
                                        echo  $info1['fname'];
                                        echo "</td>";
                                        echo "</tr>";

                                        echo "<tr>";
                                        echo "<th>";
                                        echo  "E-mail";
                                        echo "</th>";
                                        echo "<td>";
                                        echo  $info1['email'];
                                        echo "</td>";
                                        echo "</tr>";
                                            echo "<form action='insaccept.php' method='POST' name='accept'>";
                                        echo "<tr>";
                                        echo "<th>";
                                        echo  "Select Time";
                                        echo "</th>";
                                        echo "<td>";
                                        echo "<input type=hidden name=txtaid value=".$aid.">";
                                        echo  "<select class='form-control form-control-lg' name='seltime'> 
                                        <option>9:00 AM</option>
                                        <option>10:00 AM</option>
                                        <option>11:00 AM</option>
										<option>12:00 AM</option>
                                        <option>03:00 PM</option>
                                        <option>04:00 PM</option>
                                        <option>05:00 PM</option>
                                        <option>06:00 PM</option>
                                        <option>07:00 PM</option>
                                        <option>08:00 PM</option>
                                        <option>09:00 PM</option>
										</select>";
                                        echo "</td>";
                                        echo "</tr>";


                                        echo "<tr>";
                                        echo "<td>";
                                        echo  "";
                                        echo "</td>";
                                        echo "<td>";
                                        echo "<input type=submit class='btn btn-lg btn-primary' name=submit value='Done'>"; 
                                        echo "</td>";
                                        echo "</tr>";
                                        
                                        echo "</form>";
                                        }

                                        
                                    }
                                    echo "</table>";
                                    ?>

                                </div>
                                <div class="card-body">

                                <!-- onclick=alert('Accepted!!!') -->
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