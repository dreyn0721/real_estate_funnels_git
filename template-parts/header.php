<?php include("init/database.php"); ?>
<?php include("init/main-functions.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script src="assets/js/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">


	<link href="assets/main.css" rel="stylesheet" crossorigin="anonymous">


	<link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
	<script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>

	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<meta name="description" content="<?=$description;?>">
	<meta name="author" content="<?=$author;?>" />
	<title><?=$pagetitle;?></title>
</head>
<body>

	<header class="container-fluid bg-white">
		<nav class="main-nav-container container navbar navbar-expand-lg  ">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?php echo $base_url; ?>">
					<img src="assets/img/logoipsum-410.png">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse main-nav-menu " id="navbarNavDropdown">
					<ul class="navbar-nav">

						<li class="nav-item dropdown ">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							About
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item <?php echo ($page == "about-us")? 'active':''; ?>" href="<?=$base_url;?>/about-us.php">About us</a></li>
								<li><a class="dropdown-item <?php echo ($page == "deal-announcement")? 'active':''; ?>" href="<?=$base_url;?>/deal-announcement.php">Deal Announcement</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown mega-dropdown">
						  	<a class="nav-link dropdown-toggle"
							   href="#"
							   id="servicesMenu"
							   role="button"
							   data-bs-toggle="dropdown"
							   aria-expanded="false">
							  Services
							</a>

						  <div class="dropdown-menu mega-menu" aria-labelledby="servicesMenu">
						    <div class="row">

						      <!-- Residential -->
						      <div class="col-md-4">
						        <h6 class="mega-title">Residential</h6>
						        <a class="dropdown-item" href="#">Selling</a>
						        <a class="dropdown-item" href="#">Buying</a>
						        <a class="dropdown-item" href="#">Rental</a>
						        <a class="dropdown-item" href="#">Property Management</a>
						      </div>

						      <!-- Commercial -->
						      <div class="col-md-4">
						        <h6 class="mega-title">Commercial</h6>
						        <a class="dropdown-item" href="#">Selling</a>
						        <a class="dropdown-item" href="#">Buying</a>
						        <a class="dropdown-item" href="#">Lease</a>
						        <a class="dropdown-item" href="#">Property Management</a>
						      </div>

						      <!-- Business -->
						      <div class="col-md-4">
						        <h6 class="mega-title">Business</h6>
						        <a class="dropdown-item" href="#">Exit Planning</a>
						        <a class="dropdown-item" href="#">Valuation</a>
						        <a class="dropdown-item" href="#">Ready to Exit</a>
						      </div>

						    </div>
						  </div>
						</li>


						<li class="nav-item">
							<a class="nav-link" href="<?=$base_url;?>/blog.php">Blog</a>
						</li>


						<?php if( logged_in() ): ?>
							<li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>/logout.php">Logout</a></li>
						<?php else: ?>
							<li class="nav-item">
								<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#authModal">
									Login
								</a>
							</li>
						<?php endif; ?>
						

						<li class="nav-item ">
							<div class="btn-container">
								<a class="theme-btn" href="<?=$base_url;?>/contact-us.php">Contact</a>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<?php include("template-parts/auth-modal.php"); ?>

	<main class="main-content">