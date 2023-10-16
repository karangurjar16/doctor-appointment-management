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

	<title>Add Receptionist</title>

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
						<h1 class="h3 d-inline align-middle">Add Receptionist</h1>


						</a>
					</div>
					<form method=post action="insreceptionist.php" name="addreceptionist">
						<div class="row">
							<div class="col-12 col-lg-6">



								<!-- <div class="card">
								 <div class="card-body">
									z>
								
                                </div>
						</div> -->

								<div class="card">

									<div class="card-body">
										<input type="text" class="form-control" placeholder="Receptionist name" name="txtrname">
									</div>
								</div>

								<!-- <div class="card">
								
								<div class="card-body">
									<input type="text" class="form-control" placeholder="Enter Username" name="txtuname">
								</div>
							</div> -->

								<div class="card">

									<div class="card-body">
										<input type="password" class="form-control" placeholder="Enter password" name="txtpwd" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "6">
									</div>
								</div>

								<div class="card">

									<div class="card-body">
										<input type="text" class="form-control" placeholder="Email" name="txtemail">
									</div>
								</div>

								<div class="card">

									<div class="card-body">
										<textarea class="form-control" rows="2" placeholder="Address" name="txtraddress"></textarea>
									</div>
								</div>

								<div class="card">
									<div class="card-body">
										<input type="number" class="form-control" placeholder="Contact" name="rcon" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "10">
									</div>
								</div>

								<!-- <div class="card">							
								<div class="card-body">
									 <select name="selseqque"  class="form-control input-md">
                                        <option>Security Question</option>
                                        <option>What is your fathername?</option>
                                        <option>What is your hobby?</option>
                                    </select>
								</div>
							</div> -->
								<div class="card">
									<div class="card-body">
										<select name="selgender" class="form-control">
											<option>Male</option>
											<option>Female</option>
										</select>
									</div>
								</div>
								<div class="card">

									<button class="btn btn-secondary">Insert Receptionist</button>
								</div>
							</div>
						</div>
					</form>
			</main>

			<?php
			include "footer.php";
			?>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>