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

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<title>Medical</title>

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

					<h1 class="h3 mb-3">View medical</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
                                <?php
                                       include "connect.php";

                                       $q="select * from medical";
                                       $res=mysqli_query($cn,$q) or die(mysqli_error($cn));
                                       echo "<table width=600>";

                                       echo "<tr><td>Medical Name</td><td>Address</td><td>License No</td><td>Contact</td><td>Email</td></tr>";
                                       while($info=mysqli_fetch_array($res))
                                       {
                                           echo "<tr>";
                                           
                                           echo "<td>";
                                        echo $info['medical_name'];
                                           echo "</td>";
                                           echo "<td>";
                                           echo $info['address'];
                                           echo "</td>";
                                           echo "<td>";
                                           echo $info['license_no'];
                                              echo "</td>";
                                              echo "<td>";
                                              echo $info['contact'];
                                                 echo "</td>";
                                                 echo "<td>";
                                                 echo $info['email'];
                                                    echo "</td>";
                                                
                                           echo "</tr>" ;


                                       }
                                       echo "</table>";
                                       ?>

								</div>
								<div class="card-body">
    

								</div>
							</div>
						</div>
					</div>

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