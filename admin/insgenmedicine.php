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
            
            $mid=$_POST['selm'];
            $gname=$_POST['txtgname'];
            $gprice=$_POST['numprice'];
 
            include "connect.php";
            
                $q="insert into generic_medicine(mid,gname,gprice) values('$mid','$gname',$gprice)";
                $res=mysqli_query($cn,$q) or die (mysqli_error($cn));
                echo "record inserted";
        

        ?>
                
      
        <!-- end of Login section -->

</body>
</html>