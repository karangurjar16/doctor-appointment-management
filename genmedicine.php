<?php
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Request</title>
    <!-- icon -->
    <link rel="icon" href="images/logo.ico" type="image/icon type">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js">
</head>

<body>

    <?php
    include "navigationlogin.php";
    ?>


    <main>

        <!-- signup section -->
        <section id="contact" class="contact py1">
            <div class="container grid">
                <!-- <div class="contact-left">
                    <img src="images/post-2.jpg">
                </div> -->

                <div class="contact-right text-white text-center bg-blue">
                    <div class="contact-head">
                        <h3 class="lead">View generic medicine</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="form-element">
                            <form>
                                Search Medicine : &nbsp; &nbsp; &nbsp;<input type="text" size="30" placeholder="Search" onkeyup="showResult(this.value)" class="  text-center ">
                            </form>

                           
                        </div>
                    </div>
                    <div id="livesearch">

                    </div>
                    <table id="example" class="table tabel-hover width=800">
                        
                    </table>
                   
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
        function showResult(str) {
            
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("example").innerHTML = this.responseText;
                    // document.getElementById("example").style.border = "1px solid #A5ACB2";
                    // document.getElementById("example").style.border = "1px solid #A5ACB2,";
                }
            }
            xmlhttp.open("GET", "livesearch.php?q=" + str, true);
            xmlhttp.send();
        }
    </script>
</body>

</html>