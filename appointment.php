
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <!-- icon -->
    <link rel="icon" href="images/logo.ico" type="image/icon type">
    <!-- font awesome -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>

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
                <div class="contact-left">
                    <img src="images/post-2.jpg">
                </div>
                <div class="contact-right text-white text-center bg-blue">
                    <div class="contact-head">
                        <h3 class="lead">Appointment</h3>
                    </div>
                    <form method="post" action="insappointment.php" name="appointment">

                        <div class="col-md-6">
                            <div class="form-element">
                                <input id="txtdate" name="txtdate" type="date" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-element">
                                <select name="seldoctor" class="form-control input-md">
                                    <?php
                                    include "connect.php";
                                    $q1 = "select * from doctor";
                                    $res1 = mysqli_query($cn, $q1) or die(mysqli_error($cn));
                                    while ($info = mysqli_fetch_array($res1)) {
                                        echo "<option value=" . $info['doctor_id'] . ">" . $info['doctor_name'] . "</option>";
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>


                        <!-- <div class="col-md-6">
                            <div class="form-element">
                                <input name="txtage" type="number" placeholder="Enter Age" class="form-control input-md">
                            </div>
                        </div> -->
                        <button type="submit" class="btn btn-white btn-submit">
                            <i class="fas fa-arrow-right"></i> Book Appointment
                        </button>
                        <!-- <input type = "text" class="btn btn-white btn-submit" placeholder="booked"  onclick="alert('Appointment Booked.')"></input> -->
                    </form>
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
    <script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');  
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#txtdate').attr('min',today);
    </script>
</body>

</html>