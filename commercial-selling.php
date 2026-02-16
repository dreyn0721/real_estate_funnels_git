<?php
// Vars
$page = "";
$pagetitle = "Commercial Property Sales | AR";
$description = "Get expert guidance to price, market, and sell your commercial property for maximum value and a smooth transaction.";


include("template-parts/header.php"); 
?>

	<div class="section-container">
		<div class="section-container-overlay"  style="background-image: url('https://images.squarespace-cdn.com/content/v1/5c7990c7fb1820611961f360/1636287307899-T87A872YE7PUEYP7WJH6/unsplash-image-PhYq704ffdA.jpg');"></div>

		<section class="heading-section-banner">
			<h1 class="text-white">Commercial Property Sales</h1>
			<p class="text-white">Get expert guidance to price, market, and sell your commercial property for maximum value and a smooth transaction.</p>
			<div>
				<a class="theme-btn" href="<?=$base_url;?>/contact-us.php">Contact Us</a>
			</div>
		</section>
	</div>


	

	<section class="commercial-selling-section">
	  <div class="container mt-5">
	    <div class="row align-items-center g-4">

	      <!-- Text Content -->
	      <div class="col-md-6">
	        <h2 class="fs-1 mb-3">Sell Your Commercial Property with Confidence</h2>
	        <h4 class="fs-5 mb-4 text-muted">Maximize value and streamline your sale with expert guidance.</h4>
	        <p class="fs-5 mb-4">
	          Selling a commercial property requires strategic planning, market insight, and expert negotiation. 
	          Our team provides comprehensive commercial selling services to ensure your property sells efficiently, 
	          at the best possible price, and with minimal stress.
	        </p>
	        <ul class="commercial-benefits list-unstyled mb-4">
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Accurate commercial property valuation</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Professional marketing to qualified buyers</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Expert negotiation and contract support</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Confidential and smooth transaction process</li>
	        </ul>
	        <a href="<?php echo $base_url;?>/contact-us.php" class="theme-btn">Request a Commercial Sale Consultation</a>
	      </div>

	      <!-- Image Content -->
	      <div class="col-md-6 text-center">
	        <img src="<?php echo $base_url; ?>/assets/img/new/60de5869-9cb0-45ac-8fcd-3997426302d5.jpg" alt="Commercial Selling" class="img-fluid rounded">
	      </div>

	    </div>
	  </div>
	</section>


	<style type="text/css">
		.commercial-selling-section {
		  background-color: #f4f4f4;
		  padding: 80px 0;
		}

		.commercial-selling-section h2 {
		  font-weight: 700;
		}

		.commercial-selling-section p {
		  line-height: 1.6;
		}

		.commercial-benefits li {
		  margin-bottom: 12px;
		  font-size: 16px;
		}
	</style>

<?php include("template-parts/footer.php"); ?>