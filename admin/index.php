<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

	<title>Sign In | Admin Site</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Welcome back</h1>
							<p class="lead">
								Sign in to your account to continue
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="img/avatars/male-doctor.jpg" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
									</div>&nbsp;
									<form action="inslogin.php" method="post" name="adminlogin">
										<div class="mb-3">
											<input class="form-control form-control-lg" type="text" name="txtuname" placeholder="Enter your Username" required />
										</div>
										<div class="mb-3">
											<input class="form-control form-control-lg" type="password" name="txtpwd" placeholder="Enter your password" required/>

										</div>
										<div class="mb-3">
											<select class="form-control form-control-lg" name="selrole">
												<option>Admin</option>
												<option>Doctor</option>
												<option>Medical</option>
												<option>Receptionist</option>
											</select>
											<!-- <small>
												<a href="index.html">Forgot password?</a>
											</small> -->
										</div>
										<!-- <div>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
												<span class="form-check-label">
													Remember me next time
												</span>
											</label>
										</div> -->
										<div class="text-center mt-3">
											<!-- <a href="index.html" class="btn btn-lg btn-primary">Sign in</a> -->
											<button type="submit" class="btn btn-lg btn-primary">Sign in</button>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html>