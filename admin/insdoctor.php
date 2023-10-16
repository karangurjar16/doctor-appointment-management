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
            // $scn=$_POST['selcname'];
            $dn=$_POST['txtdname'];
            $un=$_POST['txtuname'];
            $pwd=$_POST['txtpwd'];
            $dcon=$_POST['dcon'];
            $ads=$_POST['txtdaddress'];
            $lno=$_POST['lno'];
            $spec=$_POST['txtspec'];
            $em=$_POST['txtemail'];
            $image = $_FILES['signature'];

            $file_name = $_FILES['signature']['name'];
            $file_size =$_FILES['signature']['size'];
            $file_tmp =$_FILES['signature']['tmp_name'];
            $file_type=$_FILES['signature']['type'];
            move_uploaded_file($file_tmp,"img/".$file_name);
           

            include "connect.php";
            $q1="select * from doctor where doctor_name='$dn' or email='$em' ";
            $res1=mysqli_query($cn,$q1) or die (mysqli_error($cn));
            
            $cnt=mysqli_num_rows($res1);
            if($cnt>0)
            {
                echo "already exist";
            }
            else
            {
                $q="insert into doctor(doctor_name,username,password,doctor_contact,address,license_no,speciality,email,signature) values('$dn','$un','$pwd','$dcon','$ads','$lno','$spec','$em','$file_name')";
                $res=mysqli_query($cn,$q) or die (mysqli_error($cn));
                echo "record inserted";
            }
      

        ?>
                
      
        <!-- end of Login section -->

</body>
</html>