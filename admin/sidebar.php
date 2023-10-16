<!-- start Admin menu -->
<?php
if ($_SESSION['role'] == 'Admin') {
?>
	<nav id="sidebar" class="sidebar js-sidebar">
		<div class="sidebar-content js-simplebar">
			<a class="sidebar-brand" href="index1.php">
				<span class="align-middle">Admin PCS</span>
			</a>

			<ul class="sidebar-nav">
				<li class="sidebar-header">
					Pages
				</li>

				<li class="sidebar-item active">
					<a class="sidebar-link" href="index1.php">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
					</a>
				</li>

				<!-- <li class="sidebar-item">
					<a class="sidebar-link" href="profile.php">
						<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
					</a>
				</li> -->



				<!-- <li class="sidebar-item">
					<a class="sidebar-link" href="addsymptoms.php">
						<i class="align-middle" data-feather="edit-3"></i> <span class="align-middle">Add Symptoms</span>
					</a>
				</li> -->

				<li class="sidebar-item">
					<a class="sidebar-link" href="addmedicine.php">
						<i class="align-middle" data-feather="edit-3"></i> <span class="align-middle">Add Medicine</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="adddoctor.php">
						<i class="align-middle" data-feather="edit-3"></i> <span class="align-middle">Create Doctor</span>
					</a>
				</li>

				<!-- <li class="sidebar-item">
					<a class="sidebar-link" href="addgenmedicine.php">
						<i class="align-middle" data-feather="edit-3"></i> <span class="align-middle">Add generic Med.</span>
					</a>
				</li> -->

				<li class="sidebar-item">
					<a class="sidebar-link" href="addreceptionist.php">
						<i class="align-middle" data-feather="edit-3"></i> <span class="align-middle">Create Receptionist</span>
					</a>
				</li>
				
				<li class="sidebar-header">
					Report
				</li>
				
				<li class="sidebar-item">
					<a class="sidebar-link" href="viewdoctor.php">
						<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">View Doctor</span>
					</a>
				</li>

				<!-- <li class="sidebar-item">
					<a class="sidebar-link" href="viewmedicine.php">
						<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">View Medicine</span>
					</a>
				</li> -->

				<li class="sidebar-item">
					<a class="sidebar-link" href="viewclinic.php">
						<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">View Medical</span>
					</a>
				</li>


				<!-- <li class="sidebar-item">
					<a class="sidebar-link" href="viewmedical.php">
						<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">View Medical</span>
					</a>
				</li> -->
				<li class="sidebar-item">
					<a class="sidebar-link" href="viewmedicine.php">
						<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">View Medicine</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="viewreceptionist.php">
						<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">View Receptionist</span>
					</a>
				</li>


				<li class="sidebar-item ">
					<a class="sidebar-link" href="changepwd.php">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Change Password</span>
					</a>
				</li>

				<li class="sidebar-item ">
					<a class="sidebar-link" href="alogout.php">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Logout</span>
					</a>
				</li>

				<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="ui-cards.html">
              <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-typography.html">
              <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="icons-feather.html">
              <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
            </a>
					</li> -->

				<!-- <li class="sidebar-header">
						Plugins & Addons
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="charts-chartjs.html">
              <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="maps-google.html">
              <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
            </a>
					</li>
				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Upgrade to Pro</strong>
						<div class="mb-3 text-sm">
							Are you looking for more components? Check out our premium version.
						</div>
						<div class="d-grid">
							<a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
						</div>
					</div>
				</div> -->
		</div>
	</nav>

<?php
}
?>


<!-- end admin menu -->



<!-- start doctor menu -->

<?php
if ($_SESSION['role'] == 'Doctor') {
?>


	<nav id="sidebar" class="sidebar js-sidebar">
		<div class="sidebar-content js-simplebar">
			<a class="sidebar-brand" href="index1.php">
				<span class="align-middle">Doctor</span>
			</a>

			<ul class="sidebar-nav">
				<li class="sidebar-header">
					Pages
				</li>

				<li class="sidebar-item active">
					<a class="sidebar-link" href="index1.php">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
					</a>
				</li>
			
				<li class="sidebar-item">
					<a class="sidebar-link" href="profile.php">
						<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
					</a>
				</li>

				<!-- <li class="sidebar-item">
					<a class="sidebar-link" href="addreceptionist.php">
						<i class="align-middle" data-feather="edit-3"></i> <span class="align-middle">Create Receptionist</span>
					</a>
				</li> -->

				<li class="sidebar-item">
					<a class="sidebar-link" href="viewdapp.php">
						<i class="align-middle" data-feather="edit-3"></i> <span class="align-middle">View My Appointment</span>
					</a>
				</li>

				
				<li class="sidebar-header">
					Report
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="viewdoctor.php">
						<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">View Doctor</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="addmedicine.php">
						<i class="align-middle" data-feather="edit-3"></i> <span class="align-middle">Add Medicine</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="viewmedicine.php">
						<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">View Medicine</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="viewreceptionist.php">
						<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">View Receptionist</span>
					</a>
				</li>

				<li class="sidebar-item ">
					<a class="sidebar-link" href="changepwd.php">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Change Password</span>
					</a>
				</li>

				<li class="sidebar-item ">
					<a class="sidebar-link" href="alogout.php">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Logout</span>
					</a>
				</li>
		</div>
	</nav>

<?php
}
?>
<!-- end doctor menu -->

<!-- start recsptionist menu -->
<?php
if ($_SESSION['role'] == 'Receptionist') {
?>

	<nav id="sidebar" class="sidebar js-sidebar">
		<div class="sidebar-content js-simplebar">
			<a class="sidebar-brand" href="index1.php">
				<span class="align-middle">Receptionist</span>
			</a>

			<ul class="sidebar-nav">
				<li class="sidebar-header">
					Pages
				</li>

				<li class="sidebar-item active">
					<a class="sidebar-link" href="index1.php">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="profile.php">
						<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
					</a>
				</li>

				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="viewrequest.php">
						<i class="align-middle" data-feather="edit-3"></i> <span class="align-middle">View Received Request</span>
					</a>
				</li>

				<li class="sidebar-header">
					Report
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="viewdoctor.php">
						<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">View Doctor</span>
					</a>
				</li>

				<!-- <li class="sidebar-item">
					<a class="sidebar-link" href="viewmedicine.php">
						<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">View Medicine</span>
					</a>
				</li> -->

				<li class="sidebar-item ">
					<a class="sidebar-link" href="changepwd.php">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Change Password</span>
					</a>
				</li>

				<li class="sidebar-item ">
					<a class="sidebar-link" href="alogout.php">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Logout</span>
					</a>
				</li>
		</div>
	</nav>

<?php
}
?>
<!-- end recsptionist menu -->


<!-- start medical menu -->
<?php
if ($_SESSION['role'] == 'Medical') {
?>

	<nav id="sidebar" class="sidebar js-sidebar">
		<div class="sidebar-content js-simplebar">
			<a class="sidebar-brand" href="index1.php">
				<span class="align-middle">Medical</span>
			</a>

			<ul class="sidebar-nav">
				<li class="sidebar-header">
					Pages
				</li>

				<li class="sidebar-item active">
					<a class="sidebar-link" href="index1.php">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="profile.php">
						<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="addmedicine.php">
						<i class="align-middle" data-feather="edit-3"></i> <span class="align-middle">Add Medicine</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="addgenmedicine.php">
						<i class="align-middle" data-feather="edit-3"></i> <span class="align-middle">Add generic Med.</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="viewprescription.php">
						<i class="align-middle" data-feather="edit-3"></i> <span class="align-middle">View Prescription</span>
					</a>
				</li>

				<li class="sidebar-header">
					Report
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="viewdoctor.php">
						<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">View Doctor</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="viewmedicine.php">
						<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">View Medicine</span>
					</a>
				</li>

				<li class="sidebar-item ">
					<a class="sidebar-link" href="changepwd.php">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Change Password</span>
					</a>
				</li>

				<li class="sidebar-item ">
					<a class="sidebar-link" href="alogout.php">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Logout</span>
					</a>
				</li>
		</div>
	</nav>

<?php
}
?>
<!-- end medical menu -->