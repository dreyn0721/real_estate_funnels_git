<?php
// Vars
$page = "";
$pagetitle = "Commercial Leasing Services | AR";
$description = "Expert guidance to secure the ideal commercial space, negotiate favorable lease terms, and simplify the leasing process.";


include("template-parts/header.php"); 
?>

	<div class="section-container">
		<div class="section-container-overlay"  style="background-image: url('https://images.squarespace-cdn.com/content/v1/5c7990c7fb1820611961f360/1636287307899-T87A872YE7PUEYP7WJH6/unsplash-image-PhYq704ffdA.jpg');"></div>

		<section class="heading-section-banner">
			<h1 class="text-white">Commercial Leasing Services</h1>
			<p class="text-white">Expert guidance to secure the ideal commercial space, negotiate favorable lease terms, and simplify the leasing process.</p>
			<div>
				<a class="theme-btn" href="<?=$base_url;?>/contact-us.php">Contact Us</a>
			</div>
		</section>
	</div>


	

	<section class="commercial-lease-section">
  <div class="container mt-5">
    <div class="row align-items-center g-4">

      <!-- Text Content -->
      <div class="col-md-6">
        <h2 class="fs-1 mb-3">Commercial Leasing Made Simple</h2>
        <h4 class="fs-5 mb-4 text-muted">Expert guidance for landlords and tenants to secure optimal lease agreements.</h4>
        <p class="fs-5 mb-4">
          Leasing a commercial property requires careful planning, legal knowledge, and market expertise. 
          Our team guides both property owners and tenants through the leasing process, ensuring 
          fair terms, timely agreements, and smooth occupancy.
        </p>
        <ul class="commercial-lease-benefits list-unstyled mb-4">
          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Lease negotiation and drafting support</li>
          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Market analysis for fair rental rates</li>
          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Tenant screening and property evaluation</li>
          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Legal compliance and smooth lease execution</li>
        </ul>
        <a href="<?php echo $base_url;?>/contact-us.php" class="theme-btn">Request a Commercial Lease Consultation</a>
      </div>

      <!-- Image Content -->
      <div class="col-md-6 text-center">
        <img src="<?php echo $base_url; ?>/assets/img/new/20712fb4-b9d4-4bc8-bc6a-f62b7121f8a5.jpg" alt="Commercial Lease" class="img-fluid rounded">
      </div>

    </div>
  </div>
</section>


	<style type="text/css">
		.commercial-lease-section {
		  background-color: #f4f4f4;
		  padding: 80px 0;
		}

		.commercial-lease-section h2 {
		  font-weight: 700;
		}

		.commercial-lease-section p {
		  line-height: 1.6;
		}

		.commercial-lease-benefits li {
		  margin-bottom: 12px;
		  font-size: 16px;
		}
	</style>

<?php include("template-parts/footer.php"); ?>