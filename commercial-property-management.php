<?php
// Vars
$page = "";
$pagetitle = "Commercial Property Management Services | Expert Management for Your Investments | AR";
$description = "Maximize returns, reduce vacancies, and ensure smooth operations with professional commercial property management.";


include("template-parts/header.php"); 
?>

	<div class="section-container">
		<div class="section-container-overlay"  style="background-image: url('https://images.squarespace-cdn.com/content/v1/5c7990c7fb1820611961f360/1636287307899-T87A872YE7PUEYP7WJH6/unsplash-image-PhYq704ffdA.jpg');"></div>

		<section class="heading-section-banner">
			<h1 class="text-white">Commercial Property Management Services</h1>
			<p class="text-white">Maximize returns, reduce vacancies, and ensure smooth operations with professional commercial property management.</p>
			<div>
				<a class="theme-btn" href="<?=$base_url;?>/contact-us.php">Contact Us</a>
			</div>
		</section>
	</div>


	

	<section class="commercial-management-section">
  <div class="container mt-5">
    <div class="row align-items-center g-4">

      <!-- Image Content -->
      <div class="col-md-6 text-center">
        <img src="<?php echo $base_url; ?>/assets/img/new/69b22b42-69e1-430c-820e-6fe6927bb27e.jpg" alt="Commercial Property Management" class="img-fluid rounded">
      </div>

      <!-- Text Content -->
      <div class="col-md-6">
        <h2 class="fs-1 mb-3">Expert Commercial Property Management</h2>
        <h4 class="fs-5 mb-4 text-muted">Maximize returns, minimize stress, and protect your investment.</h4>
        <p class="fs-5 mb-4">
          Managing commercial properties requires specialized knowledge and attention to detail. 
          Our professional property management services help you maximize rental income, reduce vacancies, 
          and ensure your property is maintained efficiently, while staying compliant with regulations.
        </p>
        <ul class="commercial-management-benefits list-unstyled mb-4">
          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Tenant screening and lease management</li>
          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Rent collection and financial reporting</li>
          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Maintenance, repairs, and emergency support</li>
          <li><i class="fa fa-check-circle" style="color:#7EE0B1;"></i> Regulatory compliance and risk management</li>
        </ul>
        <a href="<?php echo $base_url;?>/contact-us.php" class="theme-btn">Request Commercial Property Management Info</a>
      </div>

    </div>
  </div>
</section>


	<style type="text/css">
		.commercial-management-section {
		  background-color: #f4f4f4;
		  padding: 80px 0;
		}

		.commercial-management-section h2 {
		  font-weight: 700;
		}

		.commercial-management-section p {
		  line-height: 1.6;
		}

		.commercial-management-benefits li {
		  margin-bottom: 12px;
		  font-size: 16px;
		}
	</style>

<?php include("template-parts/footer.php"); ?>