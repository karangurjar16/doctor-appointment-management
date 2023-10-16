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

    <title>Admin</title>

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

                    <h1 class="h3 mb-3">Change Password</h1>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-body">
                                    <?php
                                    $cp = $_POST['txtcpass'];
                                    $np = $_POST['txtnpass'];
                                    $cop = $_POST['txtcnpass'];
                                    $em = $_SESSION['dun'];

                                    if ($_SESSION['role'] == 'Doctor') {


                                        include "connect.php";
                                        $q = "select * from doctor where username='$em' and password='$cp'";
                                        $res = mysqli_query($cn, $q) or die(mysqli_error($cn));

                                        $cnt = mysqli_num_rows($res);
                                        if ($cnt == 0) {
                                            echo "invalid current password";
                                        } else {
                                            $q1 = "update doctor set password='$np' where username='$em'";
                                            $res1 = mysqli_query($cn, $q1) or die(mysqli_error($cn));
                                            echo "password change successfully";
                                        }
                                    }

                                    if ($_SESSION['role'] == 'Admin') {


                                        include "connect.php";
                                        $q = "select * from admin where username='$em' and password='$cp'";
                                        $res = mysqli_query($cn, $q) or die(mysqli_error($cn));

                                        $cnt = mysqli_num_rows($res);
                                        if ($cnt == 0) {
                                            echo "invalid current password";
                                        } else {
                                            $q1 = "update admin set password='$np' where username='$em'";
                                            $res1 = mysqli_query($cn, $q1) or die(mysqli_error($cn));
                                            echo "password change successfully";
                                        }
                                    }

                                    if ($_SESSION['role'] == 'Receptionist') {


                                        include "connect.php";
                                        $q = "select * from reception where email='$em' and password='$cp'";
                                        $res = mysqli_query($cn, $q) or die(mysqli_error($cn));

                                        $cnt = mysqli_num_rows($res);
                                        if ($cnt == 0) {
                                            echo "invalid current password";
                                        } else {
                                            $q1 = "update reception set password='$np' where email='$em'";
                                            $res1 = mysqli_query($cn, $q1) or die(mysqli_error($cn));
                                            echo "password change successfully";
                                        }
                                    }

                                    if ($_SESSION['role'] == 'Medical') {


                                        include "connect.php";
                                        $q = "select * from medical where email='$em' and password='$cp'";
                                        $res = mysqli_query($cn, $q) or die(mysqli_error($cn));

                                        $cnt = mysqli_num_rows($res);
                                        if ($cnt == 0) {
                                            echo "invalid current password";
                                        } else {
                                            $q1 = "update medical set password='$np' where email='$em'";
                                            $res1 = mysqli_query($cn, $q1) or die(mysqli_error($cn));
                                            echo "password change successfully";
                                        }
                                    }

                                    
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> &copy;
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