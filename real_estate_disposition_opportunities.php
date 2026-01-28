<?php
date_default_timezone_set('America/New_York');

error_reporting(0);

$host = "localhost";
$user = "root";
$pass = "";
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

      mysqli_query($conn, "INSERT INTO real_estate_disposition_opportunities_entry 
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
  <meta charset="UTF-8">
  <title>Real Estate Disposition Opportunities</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: "Helvetica Neue", Arial, sans-serif;
    }


    html {
      scroll-behavior: smooth;
    }

    

    body {
      color: #1f1f1f;
      background: #ffffff;
      line-height: 1.6;
    }

    header {
      background: #ffffff;
      border-bottom: 1px solid #e5e5e5;
      padding: 20px 60px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    header img {
      height: 40px;
    }

    header nav a {
      margin-left: 30px;
      text-decoration: none;
      color: #1f1f1f;
      font-weight: 500;
    }

    .hero {
      background: linear-gradient(rgba(0,0,0,.55), rgba(0,0,0,.55)),
      url("https://images.unsplash.com/photo-1501183638710-841dd1904471") center/cover no-repeat;
      color: white;
      padding: 120px 60px;
      text-align: center;
    }

    .hero h1 {
      font-size: 48px;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 20px;
      max-width: 800px;
      margin: auto;
    }

    section {
      padding: 80px 60px;
    }

    .section-title {
      text-align: center;
      margin-bottom: 60px;
    }

    .section-title h2 {
      font-size: 36px;
      margin-bottom: 10px;
    }

    .section-title span {
      color: #b40101;
      font-weight: bold;
    }

    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
    }

    .card {
      border: 1px solid #e5e5e5;
      border-radius: 6px;
      overflow: hidden;
      background: #fff;
      transition: transform .2s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-body {
      padding: 20px;
    }

    .card-body h4 {
      margin-bottom: 8px;
      color: #b40101;
    }

    .partnership {
      background: #f5f5f5;
      text-align: center;
    }

    .partnership p {
      max-width: 900px;
      margin: auto;
      font-size: 18px;
    }

    .bio {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 50px;
      align-items: center;
    }

    .bio h3 {
      font-size: 32px;
      margin-bottom: 20px;
    }

    .testimonials {
      background: #1f1f1f;
      color: white;
    }

    .testimonial-card {
      background: #2c2c2c;
      padding: 30px;
      border-radius: 6px;
    }

    .testimonial-card p {
      font-style: italic;
      margin-bottom: 15px;
    }

    .lead-form {
      background: #f5f5f5;
      max-width: 900px;
      margin: auto;
      padding: 50px;
      border-radius: 6px;
    }

    form {
      display: grid;
      gap: 20px;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"] {
      padding: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 100%;
    }

    .checkbox-group label {
      display: block;
      margin-bottom: 8px;
    }

    button {
      background: #b40101;
      color: white;
      padding: 16px;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background: #8f0101;
    }

    footer {
      background: #1f1f1f;
      color: white;
      text-align: center;
      padding: 30px;
      font-size: 14px;
    }

    @media (max-width: 768px) {
      .bio {
        grid-template-columns: 1fr;
      }
      header {
        flex-direction: column;
      }
    }


    .header-cta {
      background: #b40101;
      color: #ffffff;
      padding: 12px 22px;
      border-radius: 4px;
      text-decoration: none;
      font-weight: 600;
      transition: background 0.2s ease;
    }

    .header-cta:hover {
      background: #8f0101;
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
  <img src="https://dummyimage.com/500x200/000/fff" alt="Logo">

  <a href="#free-guide" class="header-cta">
    Get Your Free Guide Now
  </a>
</header>

<section class="hero">
  <h1>Real Estate Disposition Opportunities</h1>
  <p>Building strategic partnerships with acquisition companies —  
     <strong>Disposition Team You Always Needed</strong></p>
</section>

<section>
  <div class="section-title">
    <h2>Sold <span>Properties</span></h2>
  </div>

  <div class="cards">
    <div class="card">
      <img src="https://dummyimage.com/500x400/000/fff">
      <div class="card-body">
        <h4>Retail Property</h4>
        <p>123 Main Street, Cornwall, NY</p>
      </div>
    </div>

    <div class="card">
      <img src="https://images.unsplash.com/photo-1582407947304-fd86f028f716">
      <div class="card-body">
        <h4>Industrial Building</h4>
        <p>45 Commerce Drive, Cornwall, NY</p>
      </div>
    </div>

    <div class="card">
      <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c">
      <div class="card-body">
        <h4>Office Space</h4>
        <p>78 Executive Blvd, Cornwall, NY</p>
      </div>
    </div>
  </div>
</section>

<section class="partnership">
  <div class="section-title">
    <h2>Strategic <span>Partnerships</span></h2>
  </div>
  <p>
    We work directly with acquisition companies, investors, and operators to
    efficiently move commercial assets. Our disposition process is designed to
    maximize exposure, minimize friction, and close with certainty.
  </p>
</section>

<section>
  <div class="bio">
    <div>
      <h3>Anthony Rivas</h3>
      <p><strong>Agent. Advisor. Investor. Your Advantage.</strong></p>
      <p>
        With deep market insight and hands-on investment experience, Anthony Rivas
        provides strategic guidance to sellers and acquisition partners looking
        to execute commercial real estate transactions with confidence.
      </p>
    </div>
    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216" style="width:100%; border-radius:6px;">
  </div>
</section>

<section class="testimonials">
  <div class="section-title">
    <h2>Client <span>Testimonials</span></h2>
  </div>

  <div class="cards">
    <div class="testimonial-card">
      <p>“Anthony delivered exactly what he promised. Clean process and strong buyers.”</p>
      <strong>— Acquisition Partner</strong>
    </div>

    <div class="testimonial-card">
      <p>“The disposition team we didn’t know we were missing.”</p>
      <strong>— Commercial Investor</strong>
    </div>
  </div>
</section>

<section id="free-guide">
  <div class="lead-form">
    <div class="section-title">
      <h2>Get Your <span>Free Guide</span></h2>
    </div>

    <form class="main-form">


      <div class="response-container">
        
      </div>


      <input type="text" placeholder="First Name"  class="firstname">
      <input type="text" placeholder="Last Name"  class="lastname">
      <input type="tel" placeholder="Phone"  class="phone">
      <input type="email" placeholder="Email"  class="email">

      <div class="checkbox-group">
        <label><input type="checkbox" class="businessowner"> Business Owner</label>
        <label><input type="checkbox" class="investor"> Investor</label>
        <label><input type="checkbox" class="looking_for_office"> Office Space</label>
        <label><input type="checkbox" class="looking_for_retail"> Retail Space</label>
        <label><input type="checkbox" class="looking_for_industrial"> Industrial Space</label>
      </div>

      <button type="submit" class="submit-btn">Get Free Guide Now</button>
    </form>
  </div>
</section>

<footer>
  © 2026 Real Estate Disposition Opportunities | Keller Williams®
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
