<?php
// Vars
$page = "";
$pagetitle = "Commercial Properties for Sale | AR";
$description = "Discover prime commercial properties, receive expert investment guidance, and make informed purchasing decisions.";


include("template-parts/header.php"); 
?>

	<div class="section-container">
		<div class="section-container-overlay"  style="background-image: url('https://images.squarespace-cdn.com/content/v1/5c7990c7fb1820611961f360/1636287307899-T87A872YE7PUEYP7WJH6/unsplash-image-PhYq704ffdA.jpg');"></div>

		<section class="heading-section-banner">
			<h1 class="text-white">Commercial Properties for Sale</h1>
			<p class="text-white">Discover prime commercial properties, receive expert investment guidance, and make informed purchasing decisions.</p>
			<div>
				<a class="theme-btn" href="<?=$base_url;?>/contact-us.php">Contact Us</a>
			</div>
		</section>
	</div>


	

	<section class="commercial-buying-section">
  <div class="container mt-5">
    <div class="row align-items-center g-4">

      <!-- Image Content -->
      <div class="col-md-6 text-center">
        <img src="<?php echo $base_url; ?>/assets/img/new/c4fcbc85-fa0d-4bee-abf3-a08b1bf91441.jpg" alt="Commercial Buying" class="img-fluid rounded">
      </div>

      <!-- Text Content -->
      <div class="col-md-6">
        <h2 class="fs-1 mb-3">Invest in the Right Commercial Property</h2>
        <h4 class="fs-5 mb-4 text-muted">Strategic guidance for confident commercial property acquisitions.</h4>
        <p class="fs-5 mb-4">
          Purchasing a commercial property is a major investment decision. Our team provides expert market analysis, 
          property sourcing, and negotiation support to ensure you acquire commercial properties that align with 
          your business goals and investment strategy.
        </p>
        <ul class="commercial-buying-benefits list-unstyled mb-4">
          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Access to exclusive commercial listings</li>
          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Detailed market and financial analysis</li>
          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Expert negotiation and due diligence support</li>
          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Guidance through contracts and closing</li>
        </ul>
        <a href="<?php echo $base_url; ?>/assets/img/new/05df736d-9456-40dd-b725-ca0070cfdc49.jpg" class="theme-btn">Schedule a Commercial Buying Consultation</a>
      </div>

    </div>
  </div>
</section>


	<style type="text/css">
		.commercial-buying-section {
		  background-color: #f4f4f4;
		  padding: 80px 0;
		}

		.commercial-buying-section h2 {
		  font-weight: 700;
		}

		.commercial-buying-section p {
		  line-height: 1.6;
		}

		.commercial-buying-benefits li {
		  margin-bottom: 12px;
		  font-size: 16px;
		}
	</style>

<?php include("template-parts/footer.php"); ?>