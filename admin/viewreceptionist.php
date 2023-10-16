<?php
include "sessionA.php";
include "connect.php";
if(isset($_GET['id'])){
	$del_id = $_GET['id'];
	$q = "DELETE from reception WHERE reception_id = '$del_id'";
	$res = mysqli_query($cn, $q) or die(mysqli_error($cn));
	if( $res){
		?>
	   <script type="text/javascript">
			function Redirect() {
				window.location = "viewreceptionist.php";
			}
			setTimeout('Redirect()',100);
		</script>
		<?php
	}
}
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

	<title>Receptionist</title>

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

					<h1 class="h3 mb-3">View Receptionist</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<?php

									$q = "select * from reception";
									$res = mysqli_query($cn, $q) or die(mysqli_error($cn));
									echo "<table class=table table-hover width=800>";

									echo "<tr><th>Reception id</th><th>Reception Name</th><th>E-mail</th><th>Address</th><th>Contact</th><th>Gender</th><th>Action</th></tr>";
									while ($info = mysqli_fetch_array($res)) {

										?>
										<tr>
										<td><?php echo $info['reception_id']; ?></td>
										<td><?php echo $info['reception_name']; ?></td>
										<td><?php echo $info['email']; ?></td>
										<td><?php echo $info['address']; ?></td>
										<td><?php echo $info['contact']; ?></td>
										<td><?php echo $info['gender']; ?></td>
										<td><a href="viewreceptionist.php?id=<?php echo $info['reception_id']; ?>">Delete</a></td>
									</tr>
										<?php
									
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