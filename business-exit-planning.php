<?php
// Vars
$page = "";
$pagetitle = "Business Exit Planning | AR";
$description = "Expert business exit planning services to help owners sell, transition, or exit their business profitably with strategic guidance.";


include("template-parts/header.php"); 
?>

	<div class="section-container">
		<div class="section-container-overlay"  style="background-image: url('https://images.squarespace-cdn.com/content/v1/5c7990c7fb1820611961f360/1636287307899-T87A872YE7PUEYP7WJH6/unsplash-image-PhYq704ffdA.jpg');"></div>

		<section class="heading-section-banner">
			<h1 class="text-white">Business Exit Planning</h1>
			<p class="text-white">Expert business exit planning services to help owners sell, transition, or exit their business profitably with strategic guidance.</p>
			<div>
				<a class="theme-btn" href="<?=$base_url;?>/contact-us.php">Contact Us</a>
			</div>
		</section>
	</div>


	

	<section class="business-exit-section">
	  <div class="container mt-5">
	    <div class="row align-items-center g-4">

	      <!-- Image Content -->
	      <div class="col-md-6 text-center">
	        <img src="<?php echo $base_url; ?>/assets/img/new/f7d93177-8bd1-4415-a6ab-e1a53c10d442.jpg" alt="Business Exit Planning" class="img-fluid rounded">
	      </div>

	      <!-- Text Content -->
	      <div class="col-md-6">
	        <h2 class="fs-1 mb-3">Strategic Business Exit Planning</h2>
	        <h4 class="fs-5 mb-4 text-muted">Maximize business value and ensure a smooth, profitable transition.</h4>
	        <p class="fs-5 mb-4">
	          Planning your business exit requires strategy, foresight, and expert guidance. Our team helps business owners 
	          prepare for sale, succession, or transition, ensuring maximum value and minimal disruption. 
	          From valuation and financial analysis to deal structuring and negotiations, we guide you every step of the way.
	        </p>
	        <ul class="exit-planning-benefits list-unstyled mb-4">
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Comprehensive business valuation</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Strategic exit planning & succession advice</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Market positioning & deal marketing</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Negotiation & closing support</li>
	        </ul>
	        <a href="<?php echo $base_url;?>/contact-us.php" class="theme-btn">Request Exit Planning Consultation</a>
	      </div>

	    </div>
	  </div>
	</section>


	<style type="text/css">
		.business-exit-section {
		  background-color: #f4f4f4;
		  padding: 80px 0;
		}

		.business-exit-section h2 {
		  font-weight: 700;
		}

		.business-exit-section p {
		  line-height: 1.6;
		}

		.exit-planning-benefits li {
		  margin-bottom: 12px;
		  font-size: 16px;
		}
	</style>

<?php include("template-parts/footer.php"); ?>