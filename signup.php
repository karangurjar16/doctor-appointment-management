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
    <link rel = "stylesheet" href = "css/normalize.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "css/main.css">
    
</head>
<body>
    
<?php
        include "navigation.php";
    ?>
    

    <main>
        
        <!-- signup section -->
        <section id = "contact" class = "contact py1">
            <div class = "container grid">
                <div class = "contact-left">
                    <img src="images/side pic.jpg">
                </div>
                <div class = "contact-right text-white text-center bg-blue">
                    <div class = "contact-head">
                        <h3 class = "lead">Sign Up</h3>
                    </div>
                    <form method="post" action="inssignup.php" name="signup">
                    <div class="col-md-6">
                                    <div class="form-element">
                                    <input name="txtfname" type="text" placeholder="Full Name" class="form-control input-md"   required>
                                    </div>
                    </div>
					<div class="col-md-6">
                                    <div class="form-element">
                                    <input name="txtuname" type="text" placeholder="Username" class="form-control input-md"  required>
                                    </div>
                    </div>
                    <div class="col-md-6">
                                    <div class="form-element">
                                    <input name="txtpwd" type="password" placeholder="Password" class="form-control input-md"  pattern=".{6,}" title="password must be at least 6 characters" required>
                                    </div>
                    </div>
                                
                    <div class="col-md-6">
                                    <div class="form-element">
                                      
                                        <input  name="txtemail" type="text" placeholder="Email" class="form-control input-md" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                                    </div>
                    </div>
                    <div class="col-md-6">
                                    <div class="form-element">
                                    <textarea name="txtaddress"  class="form-control input-md" cols="30" rows="3" placeholder="Address" required></textarea>
                                    </div>
                    </div>
                    <div class="col-md-6">
                                    <div class="form-element">
                                    <input name="txtcontact" type="tel" placeholder="Contact" class="form-control input-md" pattern="[0-9]{10}" title="only number allowed" required>
                                    </div>
                    </div>
                    <div class="col-md-6">
                                    <div class="form-element">
                                    <select name="selgender"  class="form-control input-md" required>
                                    
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                    </div>
                    </div>
                    <div class="col-md-6">
                                    <div class="form-element">
                                    <select name="selseqque"  class="form-control input-md" required>
                                        <option>Security Question</option>
                                        <option>What is your fathername?</option>
                                        <option>What is your hobby?</option>
                                    </select>
                                    </div>
                    </div>
                    <div class="col-md-6">
                                    <div class="form-element">
                                    <input name="txtans" type="text" placeholder="Answer" class="form-control input-md" required>
                                    </div>
                    </div>
                    
                        <button type = "submit" class = "btn btn-white btn-submit">
                            <i class = "fas fa-arrow-right"></i> Sign Up
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
    <script src = "js/script.js"></script>
</body>
</html>