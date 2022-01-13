<?php
    include '../Template/header.php';
?>
<link rel="stylesheet" href="../assets/css/style.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="../assets/css/reponsive.css?v=<?php echo time(); ?>">
</head>

<body>
  <nav id="header" class="container-fluid" style="background-image: url(../assets/img/helpcenter.jpg);height:212px;">
    <div class="contact-header container">
      <div class=" row">

        <div class="navbar-right" style="width:auto;">

          <a href="index.php" class="navbar-brand">
            <svg viewBox="0 0 111 30" class="header_navbar--logo-first" focusable="false">
              <g id="netflix-logo">
                <path
                  d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z"
                  id="Fill-14" fill="#e50914"></path>
              </g>
            </svg>
            <svg class="header_navbar--logo-second" focusable="true" viewBox="225 0 552 1000" height="32px">
              <defs>
                <radialGradient id="54260309-7575-46f4-a806-31673acf60fe-a" r="75%"
                  gradientTransform="matrix(.38 0 .5785 1 .02 0)">
                  <stop offset="60%" stop-opacity=".3"></stop>
                  <stop offset="90%" stop-opacity=".05"></stop>
                  <stop offset="100%" stop-opacity="0"></stop>
                </radialGradient>
              </defs>
              <path d="M225 0v1000c60-8 138-14 198-17V0H225" fill="#b1060e"></path>
              <path d="M579 0v983c71 3 131 9 198 17V0H579" fill="#b1060e"></path>
              <path d="M225 0v200l198 600V557l151 426c76 3 136 9 203 17V800L579 200v240L423 0H225"
                fill="url(#54260309-7575-46f4-a806-31673acf60fe-a)"></path>
              <path d="M225 0l349 983c76 3 136 9 203 17L423 0H225" fill="#e50914"></path>
            </svg>
          </a>


        </div>
        <div class="navbar-left" style="width:auto;">
          <div class="join-netflix">
            <a href="">JOIN NETFLIX</a>
          </div>
          <form class="nav-option d-flex">
            <a href=""><button type="button" class="btn btn-danger btn-sign-in top-sign-in container"> Sign
                In</button></a>
          </form>
        </div>

      </div>


    </div>
    ` <h3 class="text-center ">Help Center</h3>
  </nav>
  <div class="container">
      <div class="row  mt-5 " style="margin-bottom: 100px;">
        <div class="col-3 helpcenter">
        <h3 style="color:black;margin-left:30px">Getting Started</h3>
          <ul>
            <li><a href="">How to sign up for Netflix</a></li>
            <li><a href="">What is Netflix?</a></li>
            <li><a href="">Plans and Pricing</a></li>
          </ul>
        </div>
        <div class="col-3 helpcenter" >
          <h3 class="text-center" style="color:black">Can't Watch</h3>
          <ul>
              <li><a href="">How to change your Netflix password</a></li>
              <li><a href="">Netflix asks you to sign up when trying to sign in</a></li>
              <li><a href="">Netflix says 'This app is not compatible with your device.'</a></li>
            </ul>
        </div>
        <div class="col-3 helpcenter">
          <h3 class="text-center" style="color:black">Manage My Account</h3>
          <ul>
              <li><a href="">Can't sign in to Netflix</a></li>
              <li><a href="">How to restart your Netflix account</a></li>
              <li><a href="">My email was changed without my permission</a></li>
            </ul>
        </div>
        <div class="col-3 helpcenter">
          <h3 class="text-center" style="color:black">Watching Netflix</h3>
          <ul>
              <li><a href="">What devices can I use to stream Netflix?</a></li>
              <li><a href="">How to watch Netflix on your TV</a></li>
              <li><a href="">How to download titles to watch offline</a></li>
            </ul>
        </div>
      </div>
      
    </div>

  <?php
    include '../Template/footer_page-footer.php';
  ?>
</body>

</html>