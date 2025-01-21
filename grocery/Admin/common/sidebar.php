<nav id="sidebar" class="sidebar">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="dashboard-saas.php">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
				<path d="M19.4,4.1l-9-4C10.1,0,9.9,0,9.6,0.1l-9,4C0.2,4.2,0,4.6,0,5s0.2,0.8,0.6,0.9l9,4C9.7,10,9.9,10,10,10s0.3,0,0.4-0.1l9-4
              C19.8,5.8,20,5.4,20,5S19.8,4.2,19.4,4.1z" />
				<path d="M10,15c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
              c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,15,10.1,15,10,15z" />
				<path d="M10,20c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
              c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,20,10.1,20,10,20z" />
			</svg>

			<span class="align-middle me-3">Grocery</span>
		</a>

		<ul class="sidebar-nav">
			<li class="sidebar-header">
				<h1 class="text-primary">Admin</h1>
			</li>
			<li class="sidebar-item">
				<a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="slidgers"></i> <span class="align-middle">Dashboards</span>
					<span class="badge badge-sidebar-primary"></span>
				</a>
				<ul id="dashboards" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">

					<li class="sidebar-item"><a class="sidebar-link" href="dashboard-saas.php">SaaS</a></li>

				</ul>
			</li>
			<li class="sidebar-item">
				<a data-bs-target="#category" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="category-add"></i><span class="align-middle">Category</span>
					<span class="badge badge-sidebar-primary"></span>
				</a>
				<ul id="category" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="category.php">Add Category</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="viewcategory.php">View Category</a></li>
				</ul>
			</li>


			<li class="sidebar-item">
				<a data-bs-target="#subcategory" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="category-add"></i><span class="align-middle">Sub-Category</span>
					<span class="badge badge-sidebar-primary"></span>
				</a>
				<ul id="subcategory" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="subcategory.php">Add Sub-Category</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="viewsubcategory.php">View Sub-Category</a></li>
				</ul>
			</li>

			<li class="sidebar-item">
				<a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="grid"></i> <span class="align-middle">Product</span>
				</a>
				<ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="addproduct.php">Add Product</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="viewproduct.php">View Product</a></li>


				</ul>
			</li>

			<li class="sidebar-item">
				<a data-bs-target="#icons" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="heart"></i> <span class="align-middle">Customer</span>

				</a>
				<ul id="icons" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="customer.php">Customer Info</a></li>

				</ul>
			</li>
			<li class="sidebar-item">
				<a data-bs-target="#forms" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Feedback</span>
				</a>
				<ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="inquiry.php">View Feedback</a></li>

				</ul>
			</li>
			<li class="sidebar-item">
				<a data-bs-target="#feedback" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Inquiry</span>
				</a>
				<ul id="feedback" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="feedback.php">View Inquiry</a></li>

				</ul>
			</li>

			<li class="sidebar-item">
				<a data-bs-target="#ic" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="heart"></i> <span class="align-middle">State</span>

				</a>
				<ul id="ic" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="addstate.php">Add State</a></li>
				</ul>
				<ul id="ic" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="viewstate.php">View State</a></li>
				</ul>
			</li>
			<li class="sidebar-item">
				<a data-bs-target="#s" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="heart"></i> <span class="align-middle">City</span>

				</a>
				<ul id="s" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="addcity.php">Add City</a></li>
				</ul>
				<ul id="s" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="viewcity.php">View City</a></li>
				</ul>
			</li>
			<li class="sidebar-item">
				<a data-bs-target="#a" data-bs-toggle="collapse" class="sidebar-link collapsed">
					<i class="align-middle" data-feather="heart"></i> <span class="align-middle">Area</span>

				</a>
				<ul id="a" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="addarea.php">Add Area</a></li>
				</ul>
				<ul id="a" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
					<li class="sidebar-item"><a class="sidebar-link" href="viewarea.php">View Area</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>