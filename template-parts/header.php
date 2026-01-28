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
				<a class="navbar-brand" href="#">
					<img src="assets/img/logoipsum-410.png">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse main-nav-menu " id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item <?php echo ($page == "home")? 'active':''; ?>">
							<a class="nav-link " aria-current="page" href="<?=$base_url;?>">Home</a>
						</li>
						<li class="nav-item dropdown <?php echo ($page == "about-us" | $page == "deal-announcement")? 'active':''; ?>">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							About
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item <?php echo ($page == "about-us")? 'active':''; ?>" href="<?=$base_url;?>/about-us.php">About us</a></li>
								<li><a class="dropdown-item <?php echo ($page == "deal-announcement")? 'active':''; ?>" href="<?=$base_url;?>/deal-announcement.php">Deal Announcement</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown <?php echo ($page == "sell-side-advisory" | $page == "buy-side-advisory" | $page == "capital-raising")? 'active':''; ?>">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Service
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item <?php echo ($page == "sell-side-advisory")? 'active':''; ?>" href="<?=$base_url;?>/sell-side-advisory.php">Sell Side Advisory</a></li>
								<li><a class="dropdown-item <?php echo ($page == "buy-side-advisory")? 'active':''; ?>" href="<?=$base_url;?>/buy-side-advisory.php">Buy Side Advisory</a></li>
								<li><a class="dropdown-item <?php echo ($page == "capital-raising")? 'active':''; ?>" href="<?=$base_url;?>/capital-raising.php">Capital Raising</a></li>
							</ul>
						</li>
						<li class="nav-item <?php echo ($page == "blog")? 'active':''; ?>">
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