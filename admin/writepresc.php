<?php
include "sessionA.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/ui-forms.html" />

	<title>Forms | Admin</title>

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
						<h1 class="h3 d-inline align-middle">Add Medicine</h1>


						</a>
					</div>
					<form method=post action="inspresc.php" name="addprecription">
						<div class="row">
							<div class="col-12 col-lg-6">

								<div class="card">

									<div class="card-body">
										<?php
										$aid = $_GET['aid'];
										$userid = $_GET['userid'];
										include "connect.php";
										$qmed = "select patient_medicine.*,medicine.* from patient_medicine,medicine where medicine.medicine_id=patient_medicine.mid and patient_medicine.aid=$aid";
										$resmed = mysqli_query($cn, $qmed) or die(mysqli_error($cn));
										echo "<table class=table table-hover>";
										while ($infomed = mysqli_fetch_array($resmed)) {
											echo "<tr>";
											echo "<td>";
											echo $infomed['aid'];
											echo "</td>";
											echo "<td>";
											echo $infomed['medicine_name'];
											echo "</td>";
											echo "<td>";
											echo "<a href=removemedi.php?pmid=" . $infomed['pmid'] . "&aid=" . $aid . "&userid=" . $userid . ">Remove</a>";
											echo "</td>";
											echo "</tr>";
											echo "<tr>";

											echo "</tr>";
										}
										echo "</table>";

										?>
									</div>
									<div class="card-body">
										<?php

										echo "<td>";
										echo "<a href=confirmmedi.php?pmid=" . $infomed['pmid'] . "&aid=" . $aid . "&userid=" . $userid . ">Confirm</a>";
										echo "</td>";

										?>

									</div>
								</div>

								<div class="card">

									<div class="card-body">


										<?php


										$q1 = "select * from medicine";
										$res1 = mysqli_query($cn, $q1) or die(mysqli_error($cn));
										echo "<table class=table table-hover>";
										while ($info = mysqli_fetch_array($res1)) {

											echo "<tr>";
											echo "<td>";
											echo $info['medicine_name'];
											echo "</td>";
											echo "<td>";
											echo "<a href=addmedi.php?mid=" . $info['medicine_id'] . "&aid=" . $aid . "&userid=" . $userid . ">add</a>";
											echo "</td>";
											echo "</tr>";
										}
										echo "</table>";
										?>



									</div>
								</div>

								<div class="card1">
									<div class="card-body1">
										<?php
										// <a href="viewhistory.php">view History</a>
										echo "<a href=viewpatienthistory.php?aid=" . $aid . ">View Prescription History</a>";

										?>
									</div>
								</div>
							</div>

						</div>
					</form>

			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>PCS</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>