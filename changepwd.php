<?php
 include "session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password </title>
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
    include "navigationlogin.php";
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
                        <h3 class="lead">Change Password</h3>
                    </div>
                    <form method="post" action="inschangepwd.php" name="changepassword">


                        <div class="col-md-6">
                            <div class="form-element">

                                <input name="txtcurpwd" type="password" placeholder="Current Password" class="form-control input-md" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-element">
                                <input class="form-control" id="txtnpwd" name="txtnpwd" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.txtconpwd.pattern = this.value;" placeholder="Password" required>
                              </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-element">
                                <input class="form-control" id="txtconpwd" name="txtconpwd" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Verify Password" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-white btn-submit">
                            <i class="fas fa-arrow-right"></i>Submit
                        </button>
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