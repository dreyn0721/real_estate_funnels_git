<?php
// Vars
$page = "";
$pagetitle = "Business Valuation Services | AR";
$description = "Get professional business valuation services to determine your company’s worth, support sales, exits, and strategic decisions.";


include("template-parts/header.php"); 
?>

	<div class="section-container">
		<div class="section-container-overlay"  style="background-image: url('https://images.squarespace-cdn.com/content/v1/5c7990c7fb1820611961f360/1636287307899-T87A872YE7PUEYP7WJH6/unsplash-image-PhYq704ffdA.jpg');"></div>

		<section class="heading-section-banner">
			<h1 class="text-white">Business Valuation Services</h1>
			<p class="text-white">Get professional business valuation services to determine your company’s worth, support sales, exits, and strategic decisions.</p>
			<div>
				<a class="theme-btn" href="<?=$base_url;?>/contact-us.php">Contact Us</a>
			</div>
		</section>
	</div>


	

	<section class="business-valuation-section">
	  <div class="container mt-5">
	    <div class="row align-items-center g-4">

	      <!-- Image Content -->
	      <div class="col-md-6 text-center">
	        <img src="<?php echo $base_url; ?>/assets/img/new/d826ef99-61dc-49f6-a7ca-86dbec8bfd58.jpg" alt="Business Valuation Services" class="img-fluid rounded">
	      </div>

	      <!-- Text Content -->
	      <div class="col-md-6">
	        <h2 class="fs-1 mb-3">Professional Business Valuation</h2>
	        <h4 class="fs-5 mb-4 text-muted">Determine your business’s true value for sales, exit planning, or strategic growth.</h4>
	        <p class="fs-5 mb-4">
	          Understanding the true value of your business is critical for sales, mergers, acquisitions, or strategic planning. 
	          Our team provides accurate, data-driven business valuations, helping you make informed decisions and maximize returns.
	        </p>
	        <ul class="valuation-benefits list-unstyled mb-4">
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Comprehensive financial analysis</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Market comparison and benchmarking</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Support for sales, mergers, or exit planning</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Clear, professional valuation reports</li>
	        </ul>
	        <a href="<?php echo $base_url;?>/contact-us.php" class="theme-btn">Request a Business Valuation</a>
	      </div>

	    </div>
	  </div>
	</section>


	<style type="text/css">
		.business-valuation-section {
		  background-color: #f4f4f4;
		  padding: 80px 0;
		}

		.business-valuation-section h2 {
		  font-weight: 700;
		}

		.business-valuation-section p {
		  line-height: 1.6;
		}

		.valuation-benefits li {
		  margin-bottom: 12px;
		  font-size: 16px;
		}
	</style>

<?php include("template-parts/footer.php"); ?>