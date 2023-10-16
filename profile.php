<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
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

        <!-- signup section -->
        <section id="contact" class="contact py123">
            <div class="container">
                <!-- <div class="contact-left">
                    <img src="images/side pic.jpg">
                </div> -->
                <div class="contact-right text-white text-center bg-blue">
                    <div class="contact-head">
                        <h3 class="lead">Update Profile</h3>
                    </div>
                    <?php
                    // $did = $_GET['did'];
                    include "connect.php";
                    $em = $_SESSION['un'];
                    $q = "select * from signup where username='$em'";
                    $res = mysqli_query($cn, $q) or die(mysqli_error($cn));

                    while ($info = mysqli_fetch_array($res)) {
                        $fname = $info['fname'];
                        // $uname = $info['username'];
                        $email = $info['email'];
                        $adr = $info['address'];
                        $conta = $info['contact'];
                    ?>
                        <form method="post" action="uprofile.php" name="signup">
                            <div class="col-md-6">
                                <div class="form-element">
                                    <input name="txtfname" id="name" type="text" placeholder="Full Name" class="form-control input-md" value='<?php echo $fname; ?>'>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="form-element">
                                    <input name="txtuname" type="text" placeholder="Username" class="form-control input-md" value='<?php echo $uname; ?>' required>
                                </div>
                            </div> -->
                            <!-- <div class="col-md-6">
                                <div class="form-element">
                                    <input name="txtpwd" type="password" placeholder="Password" class="form-control input-md"  required>
                                </div>
                            </div> -->

                            <div class="col-md-6">
                                <div class="form-element">

                                    <input name="txtemail" type="text" placeholder="Email" class="form-control input-md" value='<?php echo $email; ?>' required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-element">
                                    <textarea name="txtaddress" class="form-control input-md" cols="30" rows="3" placeholder="Address" required><?php echo $adr; ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-element">
                                    <input name="txtcontact" type="number" placeholder="Contact" class="form-control input-md" value='<?php echo $conta; ?>' required>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="form-element">
                                    <select name="selgender" class="form-control input-md" required>

                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div> -->
                            <!-- <div class="col-md-6">
                                <div class="form-element">
                                    <select name="selseqque" class="form-control input-md" required>

                                        <option>Security Question</option>
                                        <option>What is your fathername?</option>
                                        <option>What is your hobby?</option>
                                    </select>
                                </div>
                            </div> -->
                            <!-- <div class="col-md-6">
                                <div class="form-element">
                                    <input name="txtans" type="text" placeholder="Answer" class="form-control input-md" required>
                                </div>
                            </div> -->

                            <button type="submit" class="btn btn-white btn-submit">
                                <!-- <i class = "fas fa-arrow-right"></i> Update Profile -->
                                <i></i> Update Profile
                            </button>
                        </form>
                    <?php
                    }
                    ?>
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
    <script>
        function validateform() {
            let name = document.getElementById("name");
            if (name.value == " ") {
                alert("name must be filled out");
            } else {
                alert("your profile is upadted");
            }
        }
    </script>
</body>

</html>