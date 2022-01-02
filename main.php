<?php
    
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
     
?>
<?php
  require('Template/header_login.php')
?>


  <body style="background-color: #111 !important">
    <div class="container header">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a href="index.php" class="navbar-brand">
            <svg
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
              </g></svg></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">TV Shows</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Movies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">New & Popular</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">My List</a>
              </li>
            </ul>
            <div class="header_right"></div>
          </div>
        </div>
      </nav>
    </div>
      <div class="container">
        <div class="banner" style="background-image: url(assets/img/banner.jpg) ;
        height: 448px;
        background-size:cover;
        width: 100%;object-fit:contain;
        ">
        
      
        <div class="banner_content">
          <h1>
            The legend
          </h1>
          <div class="banner_description">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem
            repellat harum dolorum quaerat sint sed eius voluptas, blanditiis
            labore recusandae unde deserunt! Dolorem commodi suscipit culpa
            temporibus animi, molestiae magnam.
          </div>
          <div class="banner_button">
            <button class="button_play">
              Play
            </button>
          </div>
        </div>
      </div>
      </div>

    <div class="container">
      <div class="row">
        <h2>K-dramas</h2>
      
      </div>
      <div class="row">
        <h2>K-dramas</h2>
        <div class="img_posters">
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
        </div>
      </div>
      <div class="row">
        <h2>K-dramas</h2>
        <div class="img_posters">
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
        </div>
      </div>
      <div class="row">
        <h2>K-dramas</h2>
        <div class="img_posters">
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
          <img src="assets/img/small-movie1.jpg" class="rounded" alt="" />
        </div>
      </div>
    </div>

    <?php
  require('Template/footerr.php')
?>
