<?php
// Vars
$page = "contact-us";
$pagetitle = "Contact Us | AR";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non euismod dolor. Integer sapien ipsum, dapibus eget bibendum sed nullam sodales.";


include("template-parts/header.php"); ?>

	<div class="container mt-5">
		<h1 class="text-center mb-4">Schedule A Free Consultation</h1>

		<form method="post" action="" class="main-form">


		    <div class="response-container">
		      
		    </div>


			<div class="input-container">
				<h3>Name</h3>
				<div class="row">
					<div class="col-md-6">
						<label for="firstname">First Name (required)</label>
						<input type="text" name="firstname" required class="form-control firstname">
					</div>
					<div class="col-md-6">
						<label for="lastname">Last Name (required)</label>
						<input type="text" name="lastname" required class="form-control lastname">
					</div>
				</div>

				<div class="form-group mt-4">
					<label for="email">Email (required)</label>
					<input type="email" name="email" required class="form-control email">
				</div>

				<div class="form-group mt-4">
					<label for="phone">Phone (required)</label>
					<input type="tel" name="phone" required class="form-control phone">
				</div>

				<div class="form-group mt-4">
					<label for="message">Please describe what you're looking for: (required)</label>
					<div class="" style="border: solid 1px #E1E1E1; border-radius: 5px; padding: 10px; margin: 10px 0">
						<p>Example Messages:</p>
						<ul>
							<li>Residential – Looking to sell my home or explore cash offers</li>
							<li>Commercial – Interested in buying or listing a property</li>
							<li>Business – Need a valuation or planning an exit</li>
						</ul>
					</div>
					<!-- <p>Industry, location, # employees, revenues, profits, etc.</p> -->
					<textarea name="message" rows=4 class="w-100 message" placeholder="Type of inquiry: Residential (cash/listing), Commercial (buy/sell), Business (valuation/exit)"></textarea>
				</div>


				<div class="mt-4">
					

					<div class="col-md-12 radio-input-container mt-5">
					<p>What do you need help with? (required)</p>
					<p>Services:</p>
		        <div class="radio-group">



	          <label class="radio-card">
	            <input type="radio" name="serviceType" class="radio-input-service" value="Residential Selling" required>
	            <span class="radio-content">
	              <strong>Residential Selling</strong>
	            </span>
	          </label>



	          <label class="radio-card">
	            <input type="radio" name="serviceType" class="radio-input-service" value="Residential Buying" required>
	            <span class="radio-content">
	              <strong>Residential Buying</strong>
	            </span>
	          </label>



	          <label class="radio-card">
	            <input type="radio" name="serviceType" class="radio-input-service" value="Residential Rental" required>
	            <span class="radio-content">
	              <strong>Residential Rental</strong>
	            </span>
	          </label>



	          <label class="radio-card">
	            <input type="radio" name="serviceType" class="radio-input-service" value="Residential Property Management" required>
	            <span class="radio-content">
	              <strong>Residential Property Management</strong>
	            </span>
	          </label>



	          <label class="radio-card">
	            <input type="radio" name="serviceType" class="radio-input-service" value="Commercial Selling" required>
	            <span class="radio-content">
	              <strong>Commercial Selling</strong>
	            </span>
	          </label>



	          <label class="radio-card">
	            <input type="radio" name="serviceType" class="radio-input-service" value="Commercial Buying" required>
	            <span class="radio-content">
	              <strong>Commercial Buying</strong>
	            </span>
	          </label>



	          <label class="radio-card">
	            <input type="radio" name="serviceType" class="radio-input-service" value="Commercial Lease" required>
	            <span class="radio-content">
	              <strong>Commercial Lease</strong>
	            </span>
	          </label>



	          <label class="radio-card">
	            <input type="radio" name="serviceType" class="radio-input-service" value="Commercial Property Management" required>
	            <span class="radio-content">
	              <strong>Commercial Property Management</strong>
	            </span>
	          </label>



	          <label class="radio-card">
	            <input type="radio" name="serviceType" class="radio-input-service" value="Business Exit Planning" required>
	            <span class="radio-content">
	              <strong>Business Exit Planning</strong>
	            </span>
	          </label>



	          <label class="radio-card">
	            <input type="radio" name="serviceType" class="radio-input-service" value="Business Valuation" required>
	            <span class="radio-content">
	              <strong>Business Valuation</strong>
	            </span>
	          </label>



	          <label class="radio-card">
	            <input type="radio" name="serviceType" class="radio-input-service" value="Business Ready to Exit" required>
	            <span class="radio-content">
	              <strong>Business Ready to Exit</strong>
	            </span>
	          </label>



		        </div>
		      </div>

				</div>

			</div>


			<button class="theme-btn mt-3 submit-btn" type="submit" name="button">Submit</button>
		</form>

	</div>


<style type="text/css">
	/* Modern Radio Group */
	.radio-group {
	  display: flex;
/*	  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));*/
	  gap: 5px;
	  margin: 30px 0;
	  flex-direction: column;
	}

	.radio-card {
	  position: relative;
	  cursor: pointer;
	  width: 350px;
	}

	.radio-card input {
	  position: absolute;
	  opacity: 0;
	  pointer-events: none;
	}

	.radio-content {
	  display: block;
	  padding: 5px 20px;
	  border: 2px solid #ddd;
	  border-radius: 8px;
	  transition: all 0.3s ease;
	  background: #fff;
	}

	.radio-content strong {
	  display: block;
	  font-size: 16px;
	  color: #0b2a4a;
	}

	.radio-content small {
	  color: #666;
	}

	/* Hover */
	.radio-card:hover .radio-content {
	  border-color: #172877;
	  transform: translateY(-3px);
	}

	/* Checked state */
	.radio-card input:checked + .radio-content {
	  border-color: #172877;
	  background: #fff8f0;
	  box-shadow: 0 12px 30px rgba(0,0,0,0.12);
	}

	/* Checked indicator */
	.radio-card input:checked + .radio-content::after {
	  content: "✓";
	  position: absolute;
	  top: 6px;
	  right: 15px;
	  background: #172877;
	  color: #fff;
	  width: 26px;
	  height: 26px;
	  border-radius: 50%;
	  display: flex;
	  align-items: center;
	  justify-content: center;
	  font-size: 14px;
	}

	.main-form{
		padding-top: 20px;
		padding-bottom: 60px;
	}
</style>



<script type="text/javascript">
  jQuery( document ).ready(function(){


    jQuery(".submit-btn").on("click", function(e){
      e.preventDefault();

      var firstname = jQuery(".main-form .firstname").val();
      var lastname = jQuery(".main-form .lastname").val();

      var email = jQuery(".main-form .email").val();
      var phone = jQuery(".main-form .phone").val();

      var message = jQuery(".main-form .message").val();



      // if (jQuery(".main-form .businessvaluation").is(':checked')) {
      //   var businessvaluation = "1";
      // } else {
      //   var businessvaluation = "0";
      // }

      // if (jQuery(".main-form .selling").is(':checked')) {
      //   var selling = "1";
      // } else {
      //   var selling = "0";
      // }

      // if (jQuery(".main-form .buying").is(':checked')) {
      //   var buying = "1";
      // } else {
      //   var buying = "0";
      // }

      // if (jQuery(".main-form .other").is(':checked')) {
      //   var other = "1";
      // } else {
      //   var other = "0";
      // }


      
      var service = jQuery('input[name="serviceType"]:checked').val();



      


      $.ajax({
        method: "POST",
        url: "",
        data: { 
          action:"entry", 
          firstname: firstname, 
          lastname: lastname , 
          email: email, 
          phone: phone,
          message: message,

          service: service

        }
      }).done(function( response ) {

	      	$('html, body').animate({
			  scrollTop: 0 // Scroll to the top of the page
			}, 'slow'); 

          if( response == "success" ){
            //location.reload();

            jQuery(".main-form .firstname").val("");
						jQuery(".main-form .lastname").val("");
						jQuery(".main-form .email").val("");
						jQuery(".main-form .phone").val("");
						jQuery(".main-form .message").val("");

            jQuery(".response-container").show();
            jQuery(".response-container").html("<p>Your form submitted successfully, we will send you an email shortly. <br>Thank you</p>");

          } else {
            jQuery(".response-container").show();
            jQuery(".response-container").html(response);
          }
      });



    });



  });
</script>







<?php include("template-parts/footer.php"); ?>