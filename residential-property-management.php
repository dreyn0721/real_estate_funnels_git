<?php
// Vars
$page = "";
$pagetitle = "Residential Property Management Services | AR";
$description = "Comprehensive property management solutions to maximize rental income, minimize stress, and protect your residential investments.";


include("template-parts/header.php"); 
?>

	<div class="section-container">
		<div class="section-container-overlay"  style="background-image: url('https://images.squarespace-cdn.com/content/v1/5c7990c7fb1820611961f360/1636287307899-T87A872YE7PUEYP7WJH6/unsplash-image-PhYq704ffdA.jpg');"></div>

		<section class="heading-section-banner">
			<h1 class="text-white">Residential Property Management Services</h1>
			<p class="text-white">Comprehensive property management solutions to maximize rental income, minimize stress, and protect your residential investments.</p>
			<div>
				<a class="theme-btn" href="<?=$base_url;?>/contact-us.php">Contact Us</a>
			</div>
		</section>
	</div>


	
	<section class="residential-management-section">
	  <div class="container mt-5">
	    <div class="row align-items-center g-4">

	      <!-- Image Content -->
	      <div class="col-md-6 text-center">
	        <img src="<?php echo $base_url; ?>/assets/img/new/8f677769-8d16-4e99-acb7-f1898d0ceabb.jpg" alt="Residential Property Management" class="img-fluid rounded">
	      </div>

	      <!-- Text Content -->
	      <div class="col-md-6">
	        <h2 class="fs-1 mb-3">Professional Property Management Services</h2>
	        <p class="fs-5 mb-4">
	          Managing rental properties can be time-consuming and stressful. Our residential property
	          management services take the burden off your shoulders, ensuring your properties are
	          maintained, tenants are satisfied, and your investment grows efficiently.
	        </p>
	        <ul class="management-benefits list-unstyled mb-4">
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Full tenant screening & placement</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Rent collection and financial reporting</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Maintenance & emergency support</li>
	          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Lease agreement management & legal compliance</li>
	        </ul>
	        <a href="<?php echo $base_url; ?>/assets/img/new/05df736d-9456-40dd-b725-ca0070cfdc49.jpg" class="theme-btn">Request Property Management Info</a>
	      </div>

	    </div>
	  </div>
	</section>
		


	<style type="text/css">
		.residential-management-section {
		  background-color: #f4f4f4;
		  padding: 80px 0;
		}

		.residential-management-section h2 {
		  font-weight: 700;
		}

		.residential-management-section p {
		  line-height: 1.6;
		}

		.management-benefits li {
		  margin-bottom: 12px;
		  font-size: 16px;
		}
	</style>

<?php include("template-parts/footer.php"); ?>