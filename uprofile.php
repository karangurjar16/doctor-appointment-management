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
    
     <!-- Login section -->
     <section id = "contact" class = "contact py1">
            <div class = "container grid">
                <!-- <div class = "contact-left">
                    <img src="images/side pic.jpg">
                </div> -->
                <div class = "contact-right text-white text-center bg-blue">
                    <div class = "contact-head">
<?php
            $fn=$_POST['txtfname'];
            // $un=$_POST['txtuname'];
            $em=$_POST['txtemail'];
            $adss=$_POST['txtaddress'];
            $ucon=$_POST['txtcontact'];
            
            $un=$_SESSION['un'];
            // $cid=$_POST['txtcid'];
 
            include "connect.php";
           
                $q="update signup set fname='$fn',email='$em',address='$adss',contact='$ucon' where username='$un'";
                // $q="insert into clinic(clinic_name,clinic_address,registration_no,facilities,clinic_contact,email,timestmp) values('$cln','$cla','$rno','$fac','$clcon','$em','$da')";
                $res=mysqli_query($cn,$q) or die (mysqli_error($cn));
                // header("location:profile.php");
                Echo "Your profile is upadated successfully"
            
      

        ?>
        <h3 class = "lead">


</h3>
</div>
<form>

</form>
</div>
</div>
</section>
<!-- end of Login section -->
</main>
</body>

</html>