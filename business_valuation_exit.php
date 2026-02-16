<?php
date_default_timezone_set('America/New_York');
error_reporting(E_ALL);

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

       $sql = "INSERT INTO business_valuation_exit_entry 
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
      ";
        
        if ($conn->query($sql) === TRUE) {
          echo "success";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }



  }




  

  exit();
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />




  <title>Business Valuation & Exit Advisory</title>
  <style>

    html {
      scroll-behavior: smooth;
    }

    .cta-btn, .submit-btn {
      display: inline-block;
      text-decoration: none;
      text-align: center;
    }

    body {
      margin: 0;
      font-family: 'Helvetica Neue', Arial, sans-serif;
      color: #111;
      background-color: #fafafa;
    }
    header {
      padding: 24px 80px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #fff;
      border-bottom: 1px solid #e5e5e5;
    }
    .logo {
      font-weight: 700;
      font-size: 20px;
      letter-spacing: 1px;
    }
    .hero {
      padding: 120px 80px;
      background: linear-gradient(135deg, #111 0%, #2b2b2b 100%);
      color: #fff;
    }
    .hero h1 {
      font-size: 52px;
      line-height: 1.1;
      margin-bottom: 24px;
    }
    .hero p {
      font-size: 20px;
      max-width: 640px;
      margin-bottom: 40px;
    }
    .cta-btn, .submit-btn {
      background: #c9a24d;
      color: #111;
      padding: 16px 32px;
      font-weight: 600;
      border: none;
      cursor: pointer;
      font-size: 16px;
    }
    section {
      padding: 100px 80px;
      background: #fff;
    }
    .section-dark {
      background: #f3f3f3;
    }
    h2 {
      font-size: 36px;
      margin-bottom: 24px;
    }
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 40px;
      margin-top: 40px;
    }
    .card {
      padding: 32px;
      border: 1px solid #e5e5e5;
      background: #fff;
    }
    .about {
      max-width: 900px;
    }
    .testimonial {
      font-style: italic;
      margin-bottom: 16px;
    }
    .instruction-list li {
      margin-bottom: 12px;
      font-size: 18px;
    }
    form {
      max-width: 600px;
      display: grid;
      gap: 16px;
    }
    input[type="text"],
    input[type="email"],
    input[type="tel"] {
      padding: 14px;
      font-size: 15px;
      border: 1px solid #ccc;
      width: 100%;
    }
    .checkbox-group {
      display: grid;
      gap: 8px;
      font-size: 14px;
    }
    footer {
      padding: 40px 80px;
      background: #111;
      color: #fff;
      font-size: 14px;
    }









    .compare-wrap {
      max-width: 1100px;
      margin: 80px auto 0;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
    }

    .compare-panel {
      padding: 56px;
    }

    .compare-old {
      background: #0e0e0e;
      color: #fff;
    }

    .compare-new {
      background: #fff;
      border: 2px solid #c9a24d;
    }

    .compare-label {
      font-size: 13px;
      letter-spacing: 2px;
      font-weight: 700;
      margin-bottom: 32px;
    }

    .compare-old .compare-label {
      color: #c9a24d;
    }

    .compare-panel ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .compare-panel li {
      font-size: 16px;
      line-height: 2;
      padding-left: 20px;
      position: relative;
    }

    .compare-panel li::before {
      content: "–";
      position: absolute;
      left: 0;
    }

    /* How to get started */
    .steps-wrap {
      max-width: 1100px;
      margin: 80px auto 0;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 40px;
    }

    .step-card {
      background: #fff;
      padding: 48px;
      border: 1px solid #e5e5e5;
    }

    .step-number {
      font-size: 14px;
      font-weight: 700;
      letter-spacing: 2px;
      color: #c9a24d;
      margin-bottom: 20px;
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







  </style>




  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <script src="assets/js/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">













</head>
<body>

<header>
  <div class="logo">LOGO</div>
</header>

<section class="hero">
  <h1>Business Valuation & Exit Advisory</h1>
  <p>Strategic valuation insights and exit planning for entrepreneurs and business owners ready to scale or transition with confidence.</p>
  <a href="#free-guide" class="cta-btn">Get Free Guide Now</a>
</section>

<section>
  <h2>Who This Is For</h2>
  <div class="grid">
    <div class="card">
      <h3>Entrepreneurs</h3>
      <p>Understand the true value of your business and identify levers to increase enterprise value before a sale or expansion.</p>
    </div>
    <div class="card">
      <h3>Business Owners</h3>
      <p>Plan a clean, strategic exit with a clear timeline while protecting your legacy and maximizing returns.</p>
    </div>
    <div class="card">
      <h3>Investors</h3>
      <p>Evaluate opportunities using disciplined valuation frameworks and market-driven insights.</p>
    </div>
  </div>
</section>

<section class="section-dark">
  <h2>About</h2>
  <div class="about">
    <p><strong>Anthony Rivas: Agent. Advisor. Investor. Your Advantage.</strong></p>
    <p>Anthony works with entrepreneurs, operators, and investors to deliver clarity around business valuation, growth strategy, and exit execution. With a disciplined advisory approach and a real-asset mindset, clients gain the confidence to act decisively—whether scaling operations or preparing for a strategic exit.</p>
  </div>
</section>

<!-- New OLD WAY / NEW WAY Section -->
<section>
  <h2 style="text-align:center">The Old Way vs The New Way</h2>

  <div class="compare-wrap">
    <div class="compare-panel compare-old">
      <div class="compare-label">THE OLD WAY</div>
      <ul>
        <li>High commissions and misaligned incentives</li>
        <li>Generic advisors without exit specialization</li>
        <li>Reactive, last-minute valuation</li>
        <li>No focus on value creation</li>
        <li>Limited buyer exposure</li>
        <li>Opaque processes</li>
        <li>Unpredictable timelines</li>
      </ul>
    </div>

    <div class="compare-panel compare-new">
      <div class="compare-label">THE NEW WAY</div>
      <ul>
        <li>Advisory-first alignment</li>
        <li>Specialized valuation & exit expertise</li>
        <li>Proactive planning years ahead</li>
        <li>Intentional value optimization</li>
        <li>Qualified strategic buyers</li>
        <li>Clear, data-driven transparency</li>
        <li>Defined execution roadmap</li>
      </ul>
    </div>
  </div>
</section>

<!-- How To Get Started Section -->
<section class="section-dark">
  <h2 style="text-align:center">How To Get Started</h2>

  <div class="steps-wrap">
    <div class="step-card">
      <div class="step-number">01</div>
      <h3>Strategy Call</h3>
      <p>Align on your goals, timeline, and whether this advisory approach fits your situation.</p>
    </div>

    <div class="step-card">
      <div class="step-number">02</div>
      <h3>Valuation & Opportunity Review</h3>
      <p>Understand your current valuation and uncover specific levers to increase enterprise value.</p>
    </div>

    <div class="step-card">
      <div class="step-number">03</div>
      <h3>Execution Roadmap</h3>
      <p>Receive a clear plan to scale, optimize, or exit with confidence and precision.</p>
    </div>
  </div>
</section>

<section>
  <h2>What Clients Say</h2>
  <div class="grid">
    <div class="card">
      <p class="testimonial">“The valuation process completely changed how we approached growth. We exited on our terms.”</p>
      <p><strong>— Founder, Multi-Unit Operator</strong></p>
    </div>
    <div class="card">
      <p class="testimonial">“Clear, professional, and strategic. This was not a generic valuation—it was a roadmap.”</p>
      <p><strong>— CEO, Private Company</strong></p>
    </div>
    <div class="card">
      <p class="testimonial">“Anthony helped us understand where value was leaking and how to fix it before market.”</p>
      <p><strong>— Managing Partner</strong></p>
    </div>
  </div>
</section>

<section class="section-dark" id="free-guide">
  <h2>Get the Free Guide</h2>
  <form class="main-form" >

    <div class="response-container">
      
    </div>


    <input type="text" placeholder="First Name" class="firstname" />
    <input type="text" placeholder="Last Name" class="lastname" />
    <input type="tel" placeholder="Phone" class="phone" />
    <input type="email" placeholder="Email" class="email" />
    <div class="checkbox-group">
      <label><input type="checkbox" class="businessowner" /> Business Owner</label>
      <label><input type="checkbox" class="investor" /> Investor</label>

      <label><input type="checkbox" class="looking_for_office" /> Looking for Office Space</label>
      <label><input type="checkbox" class="looking_for_retail" /> Looking for Retail Space</label>
      <label><input type="checkbox" class="looking_for_industrial" /> Looking for Industrial Space</label>
    </div>
    <button class="submit-btn" type="submit">Get Free Guide Now</button>
  </form>
</section>

<footer>
  <p>© 2026 Anthony Rivas Advisory. All Rights Reserved.</p>
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
