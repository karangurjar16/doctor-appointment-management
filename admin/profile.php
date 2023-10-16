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

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-profile.html" />

	<title>Profile</title>

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
						<h1 class="h3 d-inline align-middle">Profile</h1>


						</a>
					</div>
					<?php
					// $did = $_GET['did'];
					include "connect.php";
					$em=$_SESSION['dun'];
					$q = "select * from doctor where username='$em'";
					$res = mysqli_query($cn, $q) or die(mysqli_error($cn));

					while ($info = mysqli_fetch_array($res)) {
						$dname = $info['doctor_name'];
						$uname = $info['username'];
						$dcon = $info['doctor_contact'];
						$adr = $info['address'];
						$lno = $info['license_no'];
						$spec = $info['speciality'];
					?>
						<form method=post action="udoctor.php" name="updatedoctor">
							<div class="row">
								<div class="col-12 col-lg-6">
									<div class="card">
										<div class="card-body"> 
											<input type="text" class="form-control" placeholder="Doctor name" name="txtdname" value='<?php echo $dname; ?>' >
										</div>

										<div class="card-body">
											<input type="text" class="form-control" placeholder="Username" name="txtuname"  value='<?php echo $uname; ?>'>
										</div>



										<div class="card-body">
											<input type="text" class="form-control" placeholder="Contact" name="txtcontact" maxlength="10" value='<?php echo $dcon; ?>'>
										</div>



										<div class="card-body">
											<textarea class="form-control" rows="2" placeholder="Address" name="txtraddress"><?php echo $adr; ?></textarea>
										</div>


										<div class="card-body">
											<input type="text" class="form-control" placeholder="license Number" name="lno" value='<?php echo $lno; ?>'>
										</div>

										<div class="card-body">
											<input type="text" class="form-control" placeholder="Speciality" name="spec" value='<?php echo $spec; ?>'>
										</div>




									</div>

									<button class="btn btn-secondary">Update Profile</button>
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