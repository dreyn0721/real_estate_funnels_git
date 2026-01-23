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
					<label for="message">Please describe your business (required)</label>
					<p>Industry, location, # employees, revenues, profits, etc.</p>
					<textarea name="message" rows=4 class="w-100 message"></textarea>
				</div>


				<div class="mt-4">
					<p>What do you need help with? (required)</p>
					

					<div class="form-group mb-3">
						<input type="checkbox" name="businessvaluation" class="businessvaluation"> <label>Business valuation</label>
					</div>

					<div class="form-group mb-3">
						<input type="checkbox" name="selling" class="selling"> <label>Selling a business</label>
					</div>

					<div class="form-group mb-3">
						<input type="checkbox" name="buying" class="buying"> <label>Buying a business</label>
					</div>

					<div class="form-group mb-3">
						<input type="checkbox" name="other" class="other"> <label>Other / not sure</label>
					</div>

				</div>

			</div>


			<button class="theme-btn mt-3 submit-btn" type="submit" name="button">Submit</button>
		</form>

	</div>






<script type="text/javascript">
  jQuery( document ).ready(function(){


    jQuery(".submit-btn").on("click", function(e){
      e.preventDefault();

      var firstname = jQuery(".main-form .firstname").val();
      var lastname = jQuery(".main-form .lastname").val();

      var email = jQuery(".main-form .email").val();
      var phone = jQuery(".main-form .phone").val();

      var message = jQuery(".main-form .message").val();



      if (jQuery(".main-form .businessvaluation").is(':checked')) {
        var businessvaluation = "1";
      } else {
        var businessvaluation = "0";
      }

      if (jQuery(".main-form .selling").is(':checked')) {
        var selling = "1";
      } else {
        var selling = "0";
      }

      if (jQuery(".main-form .buying").is(':checked')) {
        var buying = "1";
      } else {
        var buying = "0";
      }

      if (jQuery(".main-form .other").is(':checked')) {
        var other = "1";
      } else {
        var other = "0";
      }



      


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

          businessvaluation: businessvaluation,
          selling: selling,
          buying: buying,
          other: other

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