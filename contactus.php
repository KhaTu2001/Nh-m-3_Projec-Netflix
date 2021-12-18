<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="shotcut icon" type="img" href="assets/img/logo-icon.jpg" >
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/font/fontawesome-free-5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css"> 
    <link rel="stylesheet" href="assets/css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/reponsive.css">
</head>
<body>
<?php
      include 'Template/header_page-footer.php';
    ?>
     <section class="container-fluid " style="border-top: none;background-color: #eaeae6;padding:0">
            <div class="container contact-alert">
                <a style="text-decoration: none; display:flex; "href="#">
                        <div style="color:#000; margin-top:28px;"class="alert-icon">
                        <i style="font-size:1.25rem"  class="far fa-bell"></i>
                        </div>
                        <div class="alert-left">
                            <div class="alert-text">
                                <h5>We are currently experiencing a higher than normal wait time for chat support. </h5>
                                <p>Please try again later or try calling us.</p>
                            </div>
                        </div>
                        
                   
                </a>
            </div>
            
        </section>

      <section class="content-contact">
          <div class="container">
          <div class="container back-to-help">
              <a href="#"><i class="fas fa-arrow-left"></i>Back to help home</a>
          </div>
  </div>
</section>
  <section class="content-contact">
    <div class="container">
      <h1>Contact Customer Service</h1>
    </div>

  </section>
  <section class="content-contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 ">
          <div class="content-contact-right">
            <h3>Call us from the Netflix app</h3>
            <p>Contacting Netflix is now easier than ever when you contact us from the Netflix app on your Android or iOS phone or tablet! Calling through the app is free - all you need is an internet or cellular connection.</p>
            <h5>Download the Netflix app:</h5>
            <div class="app-dowload">
              <a href="https://play.google.com/store/apps/details?id=com.netflix.mediaclient"><img src="assets/img/ch-play.jpg" alt="" class="img-fluid"></a>
              <a href="https://search.itunes.apple.com/WebObjects/MZContentLink.woa/wa/link?mt=8&path=apps%2fnetflix"><img src="assets/img/appstore.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="contact-question">
              <p>Questions?</p>
              <a href="">Learn how to contact us from the Netflix app!</a>
            </div>
            <hr>
            <h3>Call us from any phone</h3>
            <h5>Phone is currently unavailable.</h5>
            <p>Call us using the Netflix app as we don't offer a phone number in your country</p>
            <button class="call-us">CALL US</button>
            <hr>
            <h3>Live Chat</h3>
            <p>You will need an internet or mobile phone connection.</p>
            <button class="live-chat">START LIVE CHAT</button>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 ">
          <div class="content-contact-left">
            <h5>Popular Questions</h5>
            <ul>
              <li><a href="">How do I reset my password?</a> </li>
              <li><a href="">How can I request a TV show or movie?</a></li>
              <li><a href="">How do I cancel my account?</a></li>
              <li><a href="">Why isn't Netflix Working?</a></li>
              <li><a href="">What is Netflix?</a></li>
            </ul>
            <h5>Find a different answer</h5>
            <form class="questions-search ">
              <div class="search-icon">
                <i class="fas fa-search"></i>

              </div>
              <input class=" mr-sm-2" type="text" placeholder="Search"> 
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>
  <?php
    include 'Template/footer_page-footer.php';
  ?>
</body>
</html>