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

    <title>Add Medicine</title>

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
                        <h1 class="h3 d-inline align-middle">Add Medicine</h1>


                        </a>
                    </div>
                    <form method=post action="insgenmedicine.php" name="addgenmedicine">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <select name="selm" class="form-control input-md">
                                            <?php
                                            include "connect.php";
                                            $q = "select * from medicine";
                                            $res = mysqli_query($cn, $q) or die(mysqli_error($cn));

                                            while ($info = mysqli_fetch_array($res)) {

                                                echo "<option value=" . $info['medicine_id'] . ">" . $info['medicine_name'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <input type="text" class="form-control" placeholder="Generic Name" name="txtgname">
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <input type="number" class="form-control" placeholder="Price" name="numprice">
                                    </div>
                                </div>

                                <div class="card">
                                    <button class="btn btn-secondary">Add Medicine</button>
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