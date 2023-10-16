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
            $em=$_POST['seltime'];
            $aid=$_POST['txtaid'];
            

 
            include "connect.php";
            $q1="update appointment_detail set timeslot='$em',status='Success' where appointment_id='$aid'";
            $res1=mysqli_query($cn,$q1) or die (mysqli_error($cn));
            echo "appointment taken successfully"
            
            

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

<?php
            $em=$_POST['seltime'];
            $aid=$_POST['txtaid'];
            

 
            include "connect.php";
            $q1="update appointment_detail set timeslot='$em',status='Success' where appointment_id='$aid'";
            $res1=mysqli_query($cn,$q1) or die (mysqli_error($cn));
            echo "appointment taken successfully"
            
            

        ?>