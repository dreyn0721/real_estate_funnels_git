<?php
// Vars
$page = "";
$pagetitle = "Residential Rentals | AR";
$description = "Browse top rental properties, get expert guidance, and secure your perfect residential home effortlessly.";


include("template-parts/header.php"); 
?>

	<div class="section-container">
		<div class="section-container-overlay"  style="background-image: url('https://images.squarespace-cdn.com/content/v1/5c7990c7fb1820611961f360/1636287307899-T87A872YE7PUEYP7WJH6/unsplash-image-PhYq704ffdA.jpg');"></div>

		<section class="heading-section-banner">
			<h1 class="text-white">Residential Rentals</h1>
			<p class="text-white">Browse top rental properties, get expert guidance, and secure your perfect residential home effortlessly.</p>
			<div>
				<a class="theme-btn" href="<?=$base_url;?>/contact-us.php">Contact Us</a>
			</div>
		</section>
	</div>


	
	<section class="residential-rental-section">
	  <div class="container mt-5">
	    <div class="row align-items-center g-4">

	      <!-- Text Content -->
	      <div class="col-md-6">
	        <h2 class="fs-1 mb-3">Find or List Your Rental Property</h2>
	        <p class="fs-5 mb-4">
	          Whether you’re looking for your next rental home or want to list a property, our expert team
	          makes the rental process seamless. We handle everything from property search and tenant matching
	          to lease agreements and move-in coordination.
	        </p>
	        <ul class="rental-benefits list-unstyled mb-4">
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Wide selection of rental properties</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Personalized property matching</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Assistance with lease agreements</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Ongoing support for tenants and landlords</li>
	        </ul>
	        <a href="<?php echo $base_url;?>/contact-us.php" class="theme-btn">Contact Us About Rentals</a>
	      </div>

	      <!-- Image Content -->
	      <div class="col-md-6 text-center">
	        <img src="<?php echo $base_url; ?>/assets/img/new/8cde1a16-d89b-45e3-a30c-5de1e8da5f31.jpg" alt="Residential Rentals" class="img-fluid rounded">
	      </div>

	    </div>
	  </div>
	</section>
		


	<style type="text/css">
		.residential-rental-section {
		  background-color: #f4f4f4;
		  padding: 80px 0;
		}

		.residential-rental-section h2 {
		  font-weight: 700;
		}

		.residential-rental-section p {
		  line-height: 1.6;
		}

		.rental-benefits li {
		  margin-bottom: 12px;
		  font-size: 16px;
		}
	</style>

<?php include("template-parts/footer.php"); ?>