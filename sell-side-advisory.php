
<?php include("init/database.php"); ?>
<?php include("init/main-functions.php"); ?>

<?php
// Vars
$page = "sell-side-advisory";
$pagetitle = "Sell Side Advisory | AR";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non euismod dolor. Integer sapien ipsum, dapibus eget bibendum sed nullam sodales.";
?>


<?php include("template-parts/header.php"); ?>

	<div class="section-container">
		<div class="section-container-overlay"  style="background-image: url('https://images.squarespace-cdn.com/content/v1/5c7990c7fb1820611961f360/1747368684092-46TI3O28OGFJTUZ5PKRG/unsplash-image-mD8_A77YN2Q.jpg');"></div>

		<section class="heading-section-banner">
			<h1 class="text-white">Sell Your Business. Monetize Your Life’s Work.</h1>
			<h3 class="text-white">We Work Hand in Hand with Business Owners To Help Them Achieve Life Changing Outcomes.</h3>
			<div>
				<a class="theme-btn" href="<?=$base_url;?>/contact-us.php">Contact Us</a>
			</div>
		</section>
	</div>

	<section>
		<div class="container mt-3">
			<div class="row align-items-center p-2">

				<div class="col-md-6 ">

					<h3 class="fs-1">Successful Transactions</h3>
					<h4>Our Confidential & Structured Sell-Side Process Generates Offers from Qualified Buyers in as Little as 30 Days from Launching a Process.</h4>
					<p>Each client is assigned to a Pinewood partner to execute a customized and hands on process that leads to multiple buyer offers, term sheets, and a swift and smooth process to closing.</p>
					<div class="text-center mt-3">
						<a class="theme-btn" href="<?=$base_url;?>/contact-us.php">Schedule a Consultation</a>
					</div>
				</div>

				<div class="col-md-6 text-center">
					<div class="accordion" id="accordionExample">
					  <div class="accordion-item">
					    <h2 class="accordion-header">
					      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					        Pre Sale Analysis
					      </button>
					    </h2>
					    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
					      <div class="accordion-body">
					        <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum, nibh sit amet porttitor pellentesque, diam tortor consequat orci, eget vestibulum dui quam vitae justo. Nulla diam sem, convallis ac leo vel.
					      </div>
					    </div>
					  </div>
					  <div class="accordion-item">
					    <h2 class="accordion-header">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					        Accordion Item #2
					      </button>
					    </h2>
					    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      <div class="accordion-body">
					        <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum, nibh sit amet porttitor pellentesque, diam tortor consequat orci, eget vestibulum dui quam vitae justo. Nulla diam sem, convallis ac leo vel.
					      </div>
					    </div>
					  </div>
					  <div class="accordion-item">
					    <h2 class="accordion-header">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					        Accordion Item #3
					      </button>
					    </h2>
					    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
					      <div class="accordion-body">
					        <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus condimentum, nibh sit amet porttitor pellentesque, diam tortor consequat orci, eget vestibulum dui quam vitae justo. Nulla diam sem, convallis ac leo vel.
					      </div>
					    </div>
					  </div>
					</div>
				</div>

			</div>
			
		</div>
	</section>



<?php include("template-parts/footer.php"); ?>