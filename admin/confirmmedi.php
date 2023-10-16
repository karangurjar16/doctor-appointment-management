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

    <title>Confirm Medicine</title>

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
                        <h1 class="h3 d-inline align-middle">Add Receptionist</h1>


                        </a>
                    </div>
                    <form method=post action="inscmedi.php" name="confirmmedical">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="card">
                                    <div class="card-body">

                                        <?php
                                        $aid = $_GET['aid'];
                                        $userid = $_GET['userid'];
                                        echo "<input type=hidden name=txtaid value=" . $aid . ">";
                                        echo "<input type=hidden name=userid value=" . $userid . ">";
                                        ?>

                                        <select name="selmedical" class="form-control input-md">

                                            <?php
                                            include "connect.php";
                                            $q1 = "select * from medical";
                                            $res1 = mysqli_query($cn, $q1) or die(mysqli_error($cn));
                                            while ($info = mysqli_fetch_array($res1)) {
                                                echo "<option value=" . $info['medical_id'] . ">" . $info['medical_name'] . "</option>";
                                            }
                                            ?>

                                        </select>&nbsp;

                                        <textarea name="txtadviser" class="form-control input-md" cols="3" rows="3" placeholder="adviser"></textarea>

                                        <?php
                                        include "connect.php";
                                        $aid = $_GET['aid'];

                                        $q2 = "select medicine.medicine_name,patient_medicine.*from medicine,patient_medicine where aid= $aid and medicine.medicine_id=patient_medicine.mid";
                                        $res2 = mysqli_query($cn, $q2) or die(mysqli_error($cn));

                                        while ($info1 = mysqli_fetch_array($res2)) {
                                            echo "<br>";
                                            echo $info1['medicine_name'];
                                        }
                                        ?>


                                    </div>





                                </div>




                                <div class="card">

                                    <button class="btn btn-secondary">Add Prescription</button>
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