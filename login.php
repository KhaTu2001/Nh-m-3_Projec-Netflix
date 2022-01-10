<?php
  include 'Template/header.php'
?>
    <link rel="stylesheet" href="assets/css/reponsive.css">
    <link rel="stylesheet" href="assets/css/login.css?v=<?php echo time(); ?>">
</head>
<body>
<nav id="header" class=" navbar navbar-light p-0">
    <div class="container-fluid px-5 head">
      <a href="index.php" class="navbar-brand">  <svg
        viewBox="0 0 111 30"
        class="header_navbar--logo"
        focusable="false"
      >
        <g id="netflix-logo">
          <path
            d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z"
            id="Fill-14"  
            fill="#e50914"
            
          ></path>
        </g>
      </svg></a>
      </div>
      </nav>  

      <div class="slide-banner bg-img " style=" background-image: url(assets/img/slide-banner.jpg);height: 100%;">
        <div class="form_login container">
        <form action="./src/process-login.php" class="form_layout" method="POST" name="login" >
            <div class="form_header">
              <h1>Sign in</h1>
            </div>
            <div class="mb-3 mt-3">

            <input type="email" id="inputEmail" name="txtEmail" class="form-control" placeholder="Email address" value="" autofocus>
            </div>
            <div class="mb-3">

            <input type="password" id="inputPassword" name="txtPass" class="form-control" placeholder="Password">

            </div>
            <p id="sr_pass"></p>
            <button type="submit" class="btn btn-primary mb-3" name="btn_submit">Sign in</button>
            <div class="form-check mb-3">
              <label class="form-check-label ">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
              </label>
              <a class="needhelp_form.php" href="">Needhelp?</a>
              
            </div>
            <div class="mb-3">
              <i class="fab fa-facebook-square"></i>
              <a class="Form_loginfb" href="https://www.facebook.com/login">Login with Facebook</a>
            </div>
            <div class="mb-3 form_signup">
              <h5>New to Netflix?</h5>
              <a class="sign_up_now" href="index.php">Sign up now.</a>
            </div>
            <!-- <div class="mb-3 form_capcha">
              <span>This page is protected by Google reCAPTCHA to ensure you're not a bot.</span>
              <a class="Form_loginfb" href="https://www.facebook.com/login">Login with Facebook</a>
            </div> -->
        </div> 
        <div class="login_footer">
          <div class="container">
            <a href="#" class="question-contact my-4" style="margin-left: 32px;">Questions? Contact us.</a>
             <div class="row">
               <div class="col-md-3 col-6 my-4">
                 <ul>
                   <li><a href="#">FAQ</a></li>
                   <li><a href="#">Cookie Preferences</a></li>
                   
                 </ul>
               </div>
               <div class="col-md-3 col-6 my-4">
                 <ul>
                   
                   <li><a href="#">Help Centre</a></li>
                   <li><a href="#">Corporate Information</a></li>
                   
                 </ul>
               </div>
               <div class="col-md-3 col-6 my-4">
                 <ul>
                   <li><a href="#">Terms of Us</a></li>
                 </ul>
               </div>
               <div class="col-md-3 col-6 my-4">
                 <ul>
                   <li><a href="privacy.php">Privacy</a></li>
                   
                 </ul>
               </div>
             </div>
           </div>
       
           
        </div> 
      </div>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>   
      <script src="assets/js/jquery-3.6.0.min.js"></script>
      <script src="assets/js/main.js"></script>
</body>
</html>