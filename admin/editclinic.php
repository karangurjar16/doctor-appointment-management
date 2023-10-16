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

	<title>Edit Clinic</title>

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
						<h1 class="h3 d-inline align-middle">Update Clinic</h1>
					</div>
					<?php
					$cid = $_GET['cid'];
					include "connect.php";
					$q = "select * from clinic where clinic_id='$cid' ";
					$res = mysqli_query($cn, $q) or die(mysqli_error($cn));

					while ($info = mysqli_fetch_array($res)) {
						$cname = $info['clinic_name'];
						$cadd = $info['clinic_address'];
						$regno = $info['registration_no'];
						$faci = $info['facilities'];
						$cont = $info['clinic_contact'];
						$email = $info['email'];
					?>
						<form method=post action="inseditclinic.php" name="addclinic">
							<div class="row">
								<div class="col-12 col-lg-6">
									<div class="card">

										<div class="card-body">
											<input type="text" class="form-control" placeholder="Clinic name" name="txtcname" value='<?php echo $cname; ?>'>
											<input type="hidden" name="txtcid" value=<?php echo $cid; ?> </div>
										</div>

										<div class="card">
											<div class="card-body">
												<textarea class="form-control" rows="2" placeholder="Clinic address" name="txtcladdress"><?php echo $cadd; ?></textarea>
											</div>
										</div>
										<div class="card">

											<div class="card-body">
												<input type="text" class="form-control" placeholder="Registration number" name="rno" value='<?php echo $regno; ?>'>
											</div>
										</div>
										<div class="card">

											<div class="card-body">
												<textarea class="form-control" rows="2" placeholder="Facilities" name="txtfac"><?php echo $faci; ?></textarea>
											</div>
										</div>
										<div class="card">

											<div class="card-body">
												<input type="number" class="form-control" placeholder="Clinic Contact" name="nocon" value='<?php echo $cont; ?>'>
											</div>
										</div>
										<div class="card">

											<div class="card-body">
												<input type="text" class="form-control" placeholder="email" name="txtemail" value='<?php echo $email;  ?>'>
											</div>
										</div>
										<div class="card">

											<button class="btn btn-secondary">Update Clinic</button>
										</div>


									</div>

								</div>
						</form>
					<?php
					}
					?>

			</main>

			<?php
			include "footer.php";
			?>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>