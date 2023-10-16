<?php
include "sessionA.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Website</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel = "stylesheet" href = "css/normalize.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "css/main.css">
</head>
<body>
        
        <!-- Login section -->
      
        <?php
            $cln=$_POST['txtcname'];
            $cla=$_POST['txtcladdress'];
            $rno=$_POST['rno'];
            $fac=$_POST['txtfac'];
            $clcon=$_POST['nocon'];
            $em=$_POST['txtemail'];
            $da=date('Y-m-d');

 
            include "connect.php";
            $q1="select * from clinic where clinic_name='$cln' or email='$em' ";
            $res1=mysqli_query($cn,$q1) or die (mysqli_error($cn));
            
            $cnt=mysqli_num_rows($res1);
            if($cnt>0)
            {
                echo "already exist";
            }
            else
            {
                $q="insert into clinic(clinic_name,clinic_address,registration_no,facilities,clinic_contact,email,timestmp) values('$cln','$cla','$rno','$fac','$clcon','$em','$da')";
                $res=mysqli_query($cn,$q) or die (mysqli_error($cn));
                echo "record inserted";
            }
      

        ?>
                
      
        <!-- end of Login section -->

</body>
</html>