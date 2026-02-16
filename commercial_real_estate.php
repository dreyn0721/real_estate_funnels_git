<?php
date_default_timezone_set('America/New_York');

error_reporting(0);


$host = "localhost";
$user = "dreyn";
$pass = "e1J?3N'*2wB8";
$dbname = "dreyn";


// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);


session_start();

if(isset($_SESSION['user_id']) && $_SESSION['user_id']){
  $user_id = $_SESSION['user_id'];
} else {
  $user_id = 0;
}



if( isset( $_POST['action'] ) && $_POST['action'] == "entry" ){
  $current_time = date('m/d/Y H:i:s');


  $errors = [];

  if( isset($_POST['firstname']) && $_POST['firstname'] ){
    $firstname = $_POST['firstname'];
  } else {
    $errors[] = "first name cannot be empty.";
  }

  if( isset($_POST['lastname']) && $_POST['lastname'] ){
    $lastname = $_POST['lastname'];
  } else {
    $errors[] = "last name cannot be empty.";
  }

  if( isset($_POST['email']) && $_POST['email'] ){
    $email = $_POST['email'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "Invalid Email Format";
    }

  } else {
    $errors[] = "Email cannot be empty.";
  }

  if( isset($_POST['phone']) && $_POST['phone'] ){
    $phone = $_POST['phone'];

  } else {
    $errors[] = "Phone cannot be empty.";
  }



  if( isset( $_POST['businessowner'] ) && $_POST['businessowner'] ){
    $businessowner = $_POST['businessowner'];
  } else {
    $businessowner = "0";
  }

  if( isset( $_POST['investor'] ) && $_POST['investor'] ){
    $investor = $_POST['investor'];
  } else {
    $investor = "0";
  }

  if( isset( $_POST['looking_for_office'] ) && $_POST['looking_for_office'] ){
    $looking_for_office = $_POST['looking_for_office'];
  } else {
    $looking_for_office = "0";
  }

  if( isset( $_POST['looking_for_retail'] ) && $_POST['looking_for_retail'] ){
    $looking_for_retail = $_POST['looking_for_retail'];
  } else {
    $looking_for_retail = "0";
  }

  if( isset( $_POST['looking_for_industrial'] ) && $_POST['looking_for_industrial'] ){
    $looking_for_industrial = $_POST['looking_for_industrial'];
  } else {
    $looking_for_industrial = "0";
  }




  if( isset( $errors ) && is_array( $errors ) && count( $errors ) > 0 ){
    //make html error for return
    $html = "<ul>";

    foreach( $errors as $error ){
      $html .= "<li>".$error."</li>";
    }

    $html .= "</ul>";

    echo $html;

  } else {
    //insert data and return success

      mysqli_query($conn, "INSERT INTO commercial_real_estate_entry 
      (
        firstname, 
        lastname,
        phone,
        email,
        datetimeinserted,
        businessowner,
        investor,
        looking_for_office,
        looking_for_retail,
        looking_for_industrial
      ) 
      VALUES 
      (
        '$firstname', 
        '$lastname', 
        '$phone', 
        '$email', 
        '$current_time',
        '$businessowner',
        '$investor',
        '$looking_for_office',
        '$looking_for_retail',
        '$looking_for_industrial'
      ) 
      ");

      echo "success";


  }




  

  exit();
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Anthony Rivas | Commercial Real Estate</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Inter', sans-serif;
      background: #0a0a0a;
      color: #f5f5f5;
      line-height: 1.6;
    }

    /* Section background helpers */
    section {
      background: #0a0a0a;
    }
    .bg-alt {
      background: #121212;
    }
    a { color: inherit; text-decoration: none; }

    html {
      scroll-behavior: smooth;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 24px;
    }

    /* Buttons */
    .btn {
      display: inline-block;
      background: #ffffff;
      color: #000000;
      padding: 16px 32px;
      border-radius: 16px;
      font-weight: 500;
      border: none;
      cursor: pointer;
      transition: transform 0.25s ease, box-shadow 0.25s ease, opacity 0.25s ease;
    }
    .btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 12px 30px rgba(0,0,0,0.45);
      opacity: 0.95;
    }
    .btn:active {
      transform: translateY(0);
      box-shadow: 0 6px 16px rgba(0,0,0,0.4);
    }

    /* Hero */
    .hero {
      padding: 120px 0;
    }
    .hero-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 64px;
      align-items: center;
    }
    .hero h1 {
      font-size: 48px;
      font-weight: 600;
      margin-bottom: 16px;
    }
    .hero h1 span {
      display: block;
      font-size: 20px;
      color: #a3a3a3;
      margin-top: 8px;
    }
    .hero p {
      color: #d4d4d4;
      font-size: 18px;
      max-width: 520px;
      margin-bottom: 32px;
    }

    /* Card */
    .card {
      background: rgba(23,23,23,0.85);
      border: 1px solid #262626;
      border-radius: 24px;
      padding: 32px;
    }

    /* Form */
    .form-title {
      font-size: 24px;
      font-weight: 500;
      margin-bottom: 24px;
    }
    .form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }
    .input {
      width: 100%;
      padding: 14px 16px;
      background: #0a0a0a;
      border: 1px solid #262626;
      border-radius: 12px;
      color: #ffffff;
    }
    .input::placeholder { color: #737373; }
    .form-section {
      margin-top: 16px;
      font-size: 14px;
    }
    .form-section p {
      color: #a3a3a3;
      margin-bottom: 8px;
    }
    .checkbox {
      display: flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 6px;
    }
    .form-submit {
      width: 100%;
      margin-top: 24px;
    }

    /* About */
    .about {
      padding: 120px 0;
    }
    .about h2 {
      font-size: 36px;
      font-weight: 600;
      margin-bottom: 24px;
    }
    .about p {
      max-width: 720px;
      font-size: 18px;
      color: #d4d4d4;
    }

    /* Sold Properties */
    .sold {
      padding: 120px 0;
    }
    .sold h2 {
      font-size: 36px;
      margin-bottom: 48px;
    }
    .sold-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }
    .sold-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 16px;
      margin-bottom: 16px;
    }
    .sold-card h3 {
      font-size: 18px;
      margin-bottom: 4px;
    }
    .sold-card p {
      font-size: 14px;
      color: #a3a3a3;
    }

    /* CTA */
    .cta {
      background: linear-gradient(180deg, #111111, #000000);
      padding: 120px 0;
      text-align: center;
    }
    .cta-inner {
      max-width: 720px;
      margin: 0 auto;
    }
    .cta h2 {
      font-size: 40px;
      margin-bottom: 24px;
    }
    .cta p {
      font-size: 18px;
      color: #d4d4d4;
      margin-bottom: 32px;
    }

    /* Testimonials */
    .testimonials {
      background: rgba(23,23,23,0.6);
      padding: 120px 0;
    }
    .testimonials h2 {
      font-size: 36px;
      margin-bottom: 48px;
    }
    .testimonial-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }
    .testimonial p {
      color: #d4d4d4;
      margin-bottom: 16px;
    }
    .testimonial span {
      font-size: 14px;
      color: #a3a3a3;
    }

    /* Footer */
    footer {
      border-top: 1px solid #262626;
      padding: 32px 0;
      text-align: center;
      font-size: 14px;
      color: #737373;
    }

    /* Logo Header */
    .logo-header {
      padding: 24px 0;
      text-align: center;
      border-bottom: 1px solid #262626;
    }
    .logo-header img {
      max-width: 180px;
      height: auto;
    }

    footer {
      border-top: 1px solid #262626;
      padding: 32px 0;
      text-align: center;
      font-size: 14px;
      color: #737373;
    }








    .response-container{
      display: none;
    }

    .response-container ul{
      padding: 0;
      margin: 0;
    }
    .response-container ul li{
      list-style-type: none;
      color: #fff;
      background-color: #DB2122;
      padding: 10px 30px;
      margin-bottom: 10px;
      border-radius: 10px;
    }

    .response-container p{
      color: #fff;
      background-color: #316300;
      padding: 10px 30px;
      margin-bottom: 10px;
      border-radius: 10px;
    }





    /* Responsive */
    @media (max-width: 900px) {
      .hero-grid {
        grid-template-columns: 1fr;
      }
      .testimonial-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>








  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <script src="assets/js/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">




</head>
<body>

  <!-- Logo Header -->
  <header class="logo-header">
    <img src="https://dummyimage.com/500x250/fff/000000" alt="Anthony Rivas Commercial Real Estate Logo" />
  </header>

  <!-- Hero -->
  <section class="hero">
    <div class="container hero-grid">
      <div>
        <h1>
          Anthony Rivas
          <span>Agent. Advisor. Investor. Your Advantage</span>
        </h1>
        <p>
          Strategic commercial real estate guidance for business owners and
          investors seeking office, retail, or industrial opportunities.
        </p>
        <a href="#form" class="btn btn-scroll">Get Free Guide Now</a>
      </div>

      <div class="card" id="form">
        <div class="form-title">Get the Free CRE Guide</div>
        <form class="main-form">


          <div class="response-container">
            
          </div>



          <div class="form-grid">
            <input class="firstname input" type="text" placeholder="First Name"  />
            <input class="lastname input" type="text" placeholder="Last Name"  />
          </div>
          <input class="phone input" type="tel" placeholder="Phone" style="margin-top:16px"  />
          <input class="email input" type="email" placeholder="Email" style="margin-top:16px"  />

          <div class="form-section">
            <p>I am a:</p>
            <label class=" checkbox"><input type="checkbox" class="businessowner"  /> Business Owner</label>
            <label class=" checkbox"><input type="checkbox" class="investor" /> Investor</label>
          </div>

          <div class="form-section">
            <p>Interested in:</p>
            <label class=" checkbox"><input type="checkbox"  class="looking_for_office" /> Office</label>
            <label class=" checkbox"><input type="checkbox"  class="looking_for_retail" /> Retail</label>
            <label class=" checkbox"><input type="checkbox"  class="looking_for_industrial" /> Industrial</label>
          </div>

          <button class="btn form-submit submit-btn" type="submit">Get Free Guide Now</button>
        </form>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="about bg-alt">
    <div class="container">
      <h2>About Anthony Rivas</h2>
      <p>
        Anthony Rivas is a commercial real estate agent, advisor, and investor
        focused on helping business owners and investors secure strategic office,
        retail, and industrial properties. His investor-first mindset and market
        expertise give clients a measurable advantage.
      </p>
    </div>
  </section>

  <!-- Sold Properties -->
  <section class="sold">
    <div class="container">
      <h2>Sold Properties</h2>
      <div class="sold-grid">
        <div class="card sold-card">
          <img src="property1.jpg" alt="Sold Property 1" />
          <h3>Class A Office Building</h3>
          <p>Downtown Los Angeles, CA</p>
        </div>
        <div class="card sold-card">
          <img src="property2.jpg" alt="Sold Property 2" />
          <h3>Retail Shopping Center</h3>
          <p>Orange County, CA</p>
        </div>
        <div class="card sold-card">
          <img src="property3.jpg" alt="Sold Property 3" />
          <h3>Industrial Distribution Facility</h3>
          <p>Inland Empire, CA</p>
        </div>
        <div class="card sold-card">
          <img src="property4.jpg" alt="Sold Property 4" />
          <h3>Medical Office Plaza</h3>
          <p>San Diego, CA</p>
        </div>
        <div class="card sold-card">
          <img src="property5.jpg" alt="Sold Property 5" />
          <h3>Mixed-Use Retail Asset</h3>
          <p>Pasadena, CA</p>
        </div>
        <div class="card sold-card">
          <img src="property6.jpg" alt="Sold Property 6" />
          <h3>Flex Industrial Property</h3>
          <p>Santa Ana, CA</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Work With Us -->
  <section class="cta bg-alt">
    <div class="container cta-inner">
      <h2>Your Competitive Advantage in Commercial Real Estate</h2>
      <p>
        Whether you are expanding your business or deploying capital, you need
        more than listings — you need strategy, market intelligence, and a
        trusted advisor who thinks like an investor.
      </p>
      <a href="#form" class="btn btn-scroll">Start With the Free Guide</a>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials">
    <div class="container">
      <h2>What Clients Say</h2>
      <div class="testimonial-grid">
        <div class="card testimonial">
          <p>
            "Anthony negotiated terms that saved us hundreds of thousands while
            securing the perfect space for growth."
          </p>
          <span>— Business Owner</span>
        </div>
        <div class="card testimonial">
          <p>
            "His understanding of deals from an investor perspective sets him
            apart from every other broker we’ve worked with."
          </p>
          <span>— Investor</span>
        </div>
        <div class="card testimonial">
          <p>
            "Strategic, professional, and sharp. Anthony is a true advisor, not
            just an agent."
          </p>
          <span>— Commercial Client</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    © 2026 Anthony Rivas Commercial Real Estate
  </footer>






  <script type="text/javascript">
  jQuery( document ).ready(function(){


    jQuery(".submit-btn").on("click", function(e){
      e.preventDefault();

      var firstname = jQuery(".main-form .firstname").val();
      var lastname = jQuery(".main-form .lastname").val();

      var email = jQuery(".main-form .email").val();
      var phone = jQuery(".main-form .phone").val();



      if (jQuery(".main-form .businessowner").is(':checked')) {
        var businessowner = "1";
      } else {
        var businessowner = "0";
      }

      if (jQuery(".main-form .investor").is(':checked')) {
        var investor = "1";
      } else {
        var investor = "0";
      }

      if (jQuery(".main-form .looking_for_office").is(':checked')) {
        var looking_for_office = "1";
      } else {
        var looking_for_office = "0";
      }

      if (jQuery(".main-form .looking_for_retail").is(':checked')) {
        var looking_for_retail = "1";
      } else {
        var looking_for_retail = "0";
      }

      if (jQuery(".main-form .looking_for_industrial").is(':checked')) {
        var looking_for_industrial = "1";
      } else {
        var looking_for_industrial = "0";
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
          businessowner: businessowner,
          investor: investor,
          looking_for_office: looking_for_office,
          looking_for_retail: looking_for_retail,
          looking_for_industrial: looking_for_industrial

        }
      }).done(function( response ) {
          if( response == "success" ){
            //location.reload();


            jQuery(".main-form .firstname").val("");
            jQuery(".main-form .lastname").val("");
            jQuery(".main-form .email").val("");
            jQuery(".main-form .phone").val("");



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




</body>
</html>
