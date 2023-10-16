<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Website</title>
    <!-- icon -->
    <link rel="icon" href="images/logo.ico" type="image/icon type">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <?php
    include "navigation.php";
    ?>


    <main>

        <!-- Login section -->
        <section id="contact" class="contact py1">
            <div class="container grid">
                <div class="contact-left">
                    <img src="images/post-2.jpg">
                </div>
                <div class="contact-right text-white text-center bg-blue">
                    <div class="contact-head">
                        <?php
                        $uoe1=$_POST['txtuoe1'];
                        $slq = $_POST['selseqque1'];
                        $ans1 = $_POST['txtans1'];

                        include "connect.php";

                        $q1 = "select sec_que='$slq' and answer='$ans1' from signup where username='$uoe1' ";
                        $res1 = mysqli_query($cn, $q1) or die(mysqli_error($cn));

                        $cnt = mysqli_num_rows($res1);
                        if ($cnt > 0) {
                            header("Location:home.php");
                        } else {
                            header("Location:login.php");
                        }
                        ?>
                        <h3 class="lead">


                        </h3>
                    </div>
                    <form>

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
</body>

</html>