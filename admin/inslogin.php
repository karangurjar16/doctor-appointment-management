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
            $uoe=$_POST['txtuname'];
            $pwd=$_POST['txtpwd'];
            $role=$_POST['selrole'];



            if($role=='Admin')
            {
                $q1="select * from admin where username='$uoe' and password='$pwd' ";
            }
            
            if($role=='Doctor')
            {
                $q1="select * from doctor where username='$uoe' and password='$pwd' ";
            }
            if($role=='Medical')
            {
                $q1="select * from medical where email='$uoe' and password='$pwd' ";
            }
            if($role=='Receptionist')
            {
                $q1="select * from reception where email='$uoe' and password='$pwd' ";
            }
            include "connect.php";

            
            $res1=mysqli_query($cn,$q1) or die (mysqli_error($cn));

            $cnt=mysqli_num_rows($res1);
            if($cnt>0)
            {
                $_SESSION['role']=$role;
                $_SESSION['dun']=$uoe;
                header("Location:index1.php");
            }
            else
            {
                header("Location:index.php");
            }
      


        ?>
                
      
        <!-- end of Login section -->

</body>
</html>