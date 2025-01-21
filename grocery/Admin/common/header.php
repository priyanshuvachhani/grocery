<?php

$obj = new mysqli("localhost", "root", "", "grocery");


$uid = $_SESSION["userid"];
$admin = $obj->query("select * from admin where id='$uid'");

$raw = $admin->fetch_object();
?>





<nav class="navbar navbar-expand navbar-light navbar-bg">
	<a class="sidebar-toggle">
		<i class="hamburger align-self-center"></i>
	</a>

	<form class="d-none d-sm-inline-block">
		<div class="input-group input-group-navbar">
			<input type="text" class="form-control" placeholder="Search projects…" aria-label="Search">
			<button class="btn" type="button">
				<i class="align-middle" data-feather="search"></i>
			</button>
		</div>
	</form>

	<ul class="navbar-nav">
		<li class="nav-item px-2 dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Mega menu
			</a>
			<div class="dropdown-menu dropdown-menu-start dropdown-mega" aria-labelledby="servicesDropdown">
				<div class="d-md-flex align-items-start justify-content-start">
					<div class="dropdown-mega-list">
						<div class="dropdown-header">Manage Product</div>
						<a class="dropdown-item" href="addproduct.php">Add Product</a>
						<a class="dropdown-item" href="viewproduct">View Product</a>
					</div>
					<div class="dropdown-mega-list">
						<div class="dropdown-header">Manage Customer</div>
						<a class="dropdown-item" href="customer.php">View Customer</a>
						<a class="dropdown-item" href="inqiry.php">View Inqiry</a>
						<a class="dropdown-item" href="feedback.php">View Feedback</a>

					</div>
					<div class="dropdown-mega-list">
						<div class="dropdown-header">Manage Admin</div>
						<a class="dropdown-item" href="pages-profile.php">Profile</a>

					</div>
				</div>
			</div>
		</li>
	</ul>

	<div class="navbar-collapse collapse">
		<ul class="navbar-nav navbar-align">

			<li class="nav-item dropdown">
				<a class="nav-flag dropdown-toggle" href="#" id="languageDropdown" data-bs-toggle="dropdown">
					<img src="img/flags/us.png" alt="English" />
				</a>
				<div class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
					<a class="dropdown-item" href="#">
						<img src="img/flags/us.png" alt="English" width="20" class="align-middle me-1" />
						<span class="align-middle">English</span>
					</a>
					<a class="dropdown-item" href="#">
						<img src="img/flags/es.png" alt="Spanish" width="20" class="align-middle me-1" />
						<span class="align-middle">Spanish</span>
					</a>
					<a class="dropdown-item" href="#">
						<img src="img/flags/de.png" alt="German" width="20" class="align-middle me-1" />
						<span class="align-middle">German</span>
					</a>
					<a class="dropdown-item" href="#">
						<img src="img/flags/nl.png" alt="Dutch" width="20" class="align-middle me-1" />
						<span class="align-middle">Dutch</span>
					</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
					<i class="align-middle" data-feather="settings"></i>
				</a>

				<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
					<img src="img/avatars/p.png" class="avatar img-fluid rounded-circle me-1" alt="Chris Wood" /> <span class="text-dark"><?php echo "$raw->name"; ?></span>
				</a>
				<div class="dropdown-menu dropdown-menu-end">
					<a class="dropdown-item" href="pages-profile.php"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
					<a class="dropdown-item" href="changepassword.php"><i class="align-middle me-1" data-feather="pie-chart"></i> Change Password</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="pages-settings.php">Update Profile</a>

					<a class="dropdown-item" href="logout.php">Sign out</a>
				</div>
			</li>
		</ul>
	</div>
</nav>