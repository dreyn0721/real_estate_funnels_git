<?php
// Vars
$page = "";
$pagetitle = "Ready to Exit Your Business | AR";
$description = "Prepare your business for a smooth exit with professional advisory, valuation, and strategic planning to maximize value.";


include("template-parts/header.php"); 
?>

	<div class="section-container">
		<div class="section-container-overlay"  style="background-image: url('https://images.squarespace-cdn.com/content/v1/5c7990c7fb1820611961f360/1636287307899-T87A872YE7PUEYP7WJH6/unsplash-image-PhYq704ffdA.jpg');"></div>

		<section class="heading-section-banner">
			<h1 class="text-white">Ready to Exit Your Business</h1>
			<p class="text-white">Prepare your business for a smooth exit with professional advisory, valuation, and strategic planning to maximize value.</p>
			<div>
				<a class="theme-btn" href="<?=$base_url;?>/contact-us.php">Contact Us</a>
			</div>
		</section>
	</div>


	

	<section class="ready-to-exit-section">
  <div class="container mt-5">
    <div class="row align-items-center g-4">

      <!-- Image Content -->
      <div class="col-md-6 text-center">
        <img src="<?php echo $base_url; ?>/assets/img/new/dabed487-5de5-4734-b24c-2f57b40d296e" alt="Ready to Exit Business" class="img-fluid rounded">
      </div>

      <!-- Text Content -->
      <div class="col-md-6">
        <h2 class="fs-1 mb-3">Is Your Business Ready to Exit?</h2>
        <h4 class="fs-5 mb-4 text-muted">Strategic guidance to ensure a profitable and stress-free business transition.</h4>
        <p class="fs-5 mb-4">
          Exiting your business is a major decision that requires careful planning. Our team helps business owners 
          assess readiness, maximize value, and structure a smooth transition. We provide valuation, marketing, 
          negotiation, and closing support to make your exit successful.
        </p>
        <ul class="ready-exit-benefits list-unstyled mb-4">
          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Comprehensive business readiness assessment</li>
          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Exit strategy & succession planning</li>
          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Market your business to qualified buyers</li>
          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Guidance through negotiations & closing</li>
        </ul>
        <a href="<?php echo $base_url;?>/contact-us.php" class="theme-btn">Request Exit Consultation</a>
      </div>

    </div>
  </div>
</section>


	<style type="text/css">
		.ready-to-exit-section {
		  background-color: #f4f4f4;
		  padding: 80px 0;
		}

		.ready-to-exit-section h2 {
		  font-weight: 700;
		}

		.ready-to-exit-section p {
		  line-height: 1.6;
		}

		.ready-exit-benefits li {
		  margin-bottom: 12px;
		  font-size: 16px;
		}
	</style>

<?php include("template-parts/footer.php"); ?>