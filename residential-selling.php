<?php
// Vars
$page = "";
$pagetitle = "Residential Home Selling Services | AR";
$description = "Get expert guidance to price, market, and sell your residential property efficiently and stress-free.";


include("template-parts/header.php"); 
?>

	<div class="section-container">
		<div class="section-container-overlay"  style="background-image: url('https://images.squarespace-cdn.com/content/v1/5c7990c7fb1820611961f360/1636287307899-T87A872YE7PUEYP7WJH6/unsplash-image-PhYq704ffdA.jpg');"></div>

		<section class="heading-section-banner">
			<h1 class="text-white">Residential Selling</h1>
			<p class="text-white">Get expert guidance to price, market, and sell your residential property efficiently and stress-free.</p>
			<div>
				<a class="theme-btn" href="<?=$base_url;?>/contact-us.php">Lets Start</a>
			</div>
		</section>
	</div>


	<section class="residential-selling-section">
	  <div class="container mt-5">
	    <div class="row align-items-center g-4">

	      <!-- Text Content -->
	      <div class="col-md-6">
	        <h2 class="fs-1 mb-3">Selling Your Home Made Easy</h2>
	        <p class="fs-5 mb-4">
				Selling your home doesn’t have to be overwhelming. I provide strategic, hands-on guidance to ensure your property is positioned correctly, marketed effectively, and negotiated for maximum value.<br>
				From pricing to closing, I manage every step with precision so you can move forward confidently, without unnecessary stress.
	        </p>
	        <ul class="selling-benefits list-unstyled mb-4">
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Accurate home valuation designed to maximize your return</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Professional photography and targeted marketing exposure</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Skilled negotiation and contract management</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Seamless coordination from listing to closing</li>
	        </ul>

	        <p>My goal is simple: protect your equity, structure the deal properly, and deliver the strongest possible outcome.</p>
	        <a href="<?php echo $base_url;?>/contact-us.php" class="theme-btn">Get Your Free Home Evaluation</a>
	      </div>

	      <!-- Image Content -->
	      <div class="col-md-6 text-center">
	        <img src="<?php echo $base_url; ?>/assets/img/new/5a9be1ee-6a01-4a90-9e42-8b241539bad9.jpg" alt="Residential Selling" class="img-fluid rounded">
	      </div>

	    </div>
	  </div>
	</section>

		


	<style type="text/css">
		.residential-selling-section {
		  background-color: #f4f4f4;
		  padding: 80px 0;
		}

		.residential-selling-section h2 {
		  font-weight: 700;
		}

		.residential-selling-section p {
		  line-height: 1.6;
		}

		.selling-benefits li {
		  margin-bottom: 12px;
		  font-size: 16px;
		}
	</style>

<?php include("template-parts/footer.php"); ?>