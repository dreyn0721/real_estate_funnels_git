<?php
// Vars
$page = "";
$pagetitle = "Residential Homes for Sale | AR";
$description = "Explore top residential properties, receive expert advice, and make confident home buying decisions.";


include("template-parts/header.php"); 
?>

	<div class="section-container">
		<div class="section-container-overlay"  style="background-image: url('https://images.squarespace-cdn.com/content/v1/5c7990c7fb1820611961f360/1636287307899-T87A872YE7PUEYP7WJH6/unsplash-image-PhYq704ffdA.jpg');"></div>

		<section class="heading-section-banner">
			<h1 class="text-white">Residential Homes for Sale</h1>
			<p class="text-white">Explore top residential properties, receive expert advice, and make confident home buying decisions.</p>
			<div>
				<a class="theme-btn" href="<?=$base_url;?>/contact-us.php">Contact Us</a>
			</div>
		</section>
	</div>


	

	<section class="residential-buying-section">
	  <div class="container mt-5">
	    <div class="row align-items-center g-4">

	      <!-- Image Content -->
	      <div class="col-md-6 text-center">
	        <img src="<?php echo $base_url; ?>/assets/img/new/13df5441-4593-4425-ac85-bdb80a56a65e.jpg" alt="Residential Buying" class="img-fluid rounded">
	      </div>

	      <!-- Text Content -->
	      <div class="col-md-6">
	        <h2 class="fs-1 mb-3">Find Your Perfect Home</h2>
	        <p class="fs-5 mb-4">
	          Buying a home is one of the most important decisions of your life. Our team of
	          real estate experts guides you every step of the way, from property search and
	          market analysis to negotiation and closing, so you can buy confidently.
	        </p>
	        <ul class="buying-benefits list-unstyled mb-4">
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Access to on- and off-market listings</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Personalized property recommendations</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Expert negotiation & offer guidance</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Support through inspections & closing</li>
	        </ul>
	        <a href="<?php echo $base_url;?>/contact-us.php" class="theme-btn">Schedule a Consultation</a>
	      </div>

	    </div>
	  </div>
	</section>


	<style type="text/css">
		.residential-buying-section {
		  background-color: #f4f4f4;
		  padding: 80px 0;
		}

		.residential-buying-section h2 {
		  font-weight: 700;
		}

		.residential-buying-section p {
		  line-height: 1.6;
		}

		.buying-benefits li {
		  margin-bottom: 12px;
		  font-size: 16px;
		}
	</style>

<?php include("template-parts/footer.php"); ?>