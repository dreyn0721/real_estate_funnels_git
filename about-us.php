<?php
// Vars
$page = "";
$pagetitle = "About Us | AR";
$description = "Learn about our trusted real estate team offering residential & commercial buying, selling, property management, and business exit planning.";


include("template-parts/header.php"); 
?>

	<div class="section-container">
		<div class="section-container-overlay"  style="background-image: url('https://images.squarespace-cdn.com/content/v1/5c7990c7fb1820611961f360/1636287307899-T87A872YE7PUEYP7WJH6/unsplash-image-PhYq704ffdA.jpg');"></div>

		<section class="heading-section-banner">
			<h1 class="text-white">About Us</h1>
			<p class="text-white">Learn about our trusted real estate team offering residential & commercial buying, selling, property management, and business exit planning.</p>
			<div>
				<a class="theme-btn" href="<?=$base_url;?>/contact-us.php">Contact Us</a>
			</div>
		</section>
	</div>

	<section class="about-us-section">
	  <div class="container mt-5">
	    <div class="row align-items-center g-4">

	      <!-- Image Content -->
	      <div class="col-md-6 text-center">
	        <img src="assets/img/9cf88d35-d88e-4798-b62e-58bced9ae766.jpg" alt="About Our Real Estate Team" class="img-fluid rounded">
	      </div>

	      <!-- Text Content -->
	      <div class="col-md-6">
	        <h2 class="fs-1 mb-3">About Our Real Estate Experts</h2>
	        <h4 class="fs-5 mb-4 text-muted">Trusted guidance for residential, commercial, and business property solutions.</h4>
	        <p class="fs-5 mb-4">
	          Our experienced team of real estate professionals is dedicated to helping clients achieve their property goals.
	          Whether you are buying, selling, renting, or managing residential or commercial properties, we provide personalized
	          guidance, market insights, and strategic advice to maximize value and simplify the process.
	        </p>
	        <p class="fs-5 mb-4">
	          For business owners looking to transition or exit, our Exit Planning services ensure a smooth, profitable, and well-structured process.
	          With a focus on integrity, professionalism, and results, we deliver trusted expertise every step of the way.
	        </p>
	        <a href="<?php echo $base_url;?>/contact-us.php" class="theme-btn">Meet Our Team / Contact Us</a>
	      </div>

	    </div>
	  </div>
	</section>

<style type="text/css">
	.about-us-section {
	  background-color: #f4f4f4;
	  padding: 80px 0;
	}

	.about-us-section h2 {
	  font-weight: 700;
	}

	.about-us-section p {
	  line-height: 1.6;
	}

	.about-us-section h4 {
	  color: #555;
	  font-weight: 500;
	}
</style>

<?php include("template-parts/footer.php"); ?>