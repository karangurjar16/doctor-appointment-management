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

    <title>medi | Admin</title>

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

                    
                    <form method=post action="inscmedi.php" name="confirmmedical">
                        <div class="row">
                            <div class="col-12 col-lg-6">

                                <div class="card">

                                    <div class="card-body">
                                        <?php

                                        $aid = $_POST['txtaid'];
                                        $smedical = $_POST['selmedical'];
                                        $adv = $_POST['txtadviser'];
                                        $userid = $_POST['userid'];

                                        $date=date('Y-m-d');

                                        include "connect.php";

                                        $q = "insert into patient_prescription(user_id,appointment_id,medical_id,advise,pdate) values('$userid','$aid','$smedical','$adv','$date')";
                                        $res = mysqli_query($cn, $q) or die(mysqli_error($cn));
                                        echo "presc inserted";
                                        ?>

                                    </div>

                                </div>




                               
                            </div>

                        </div>
                    </form>

            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>PCS</strong></a> &copy;
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="js/app.js"></script>

</body>

</html>