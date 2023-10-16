<?php
include "sessionA.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/ui-forms.html" />

    <title>Add symptoms</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

    <div class="wrapper">
        <?php
        include "sidebar.php";
        ?>


        <div class="main">
        <?php
		include "nav.php";
		?>

            <main class="content">
                <div class="container-fluid p-0">

                    <div class="mb-3">
                    
                    <?php
                    $medid=$_POST['txtmid'];
                    $sname=$_POST['txtsname'];
           
                    include "connect.php";
            // $q1="select * from clinic where clinic_name='$cln' or email='$em' ";
            // $res1=mysqli_query($cn,$q1) or die (mysqli_error($cn));
            
            // $cnt=mysqli_num_rows($res1);
            // if($cnt>0)
            // {
            //     echo "already exist";
            // }
            // else
            // {
                    $q="insert into symptoms(medicine_id,symptoms_name) values('$medid','$sname')";
                    $res=mysqli_query($cn,$q) or die (mysqli_error($cn));
                    echo "Symptoms inserted";
            // }

                    ?>


                    </div>
                    

            </main>

            <?php
			include "footer.php";
			?>
        </div>
    </div>

    <script src="js/app.js"></script>

</body>

</html>