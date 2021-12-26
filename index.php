<?php 
session_start();
      //Put session start at the beginning of the file
?>
<?php
  include 'Template/header.php' 
?>
 <nav id="header" class=" navbar navbar-light p-0">
    <div class="container-fluid px-5 head">
      <a href="admin_page.php" class="navbar-brand">  <svg
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
      <form class="nav-option d-flex">
        <a href="login.php"><button type="button" class="btn btn-danger btn-sign-in top-sign-in container"> Sign In</button></a>
      </form>
    </div>
  </nav>
  <div class="slide-banner bg-img "
  style="background-image: url(assets/img/slide-banner.jpg);
    height: 100vh;">
    <div class="layer">
      <div class="row" style="flex:1;">
        <div class="col-md-12 text-center" style="margin-top:100%" >
          <h1>Unlimited movies, TV <br>shows and more.</h1>
          <h3>Watch anywhere. Cancel anytime.</h3>
          <h5>Ready to watch? Enter your email to create or restart your membership.</h5>
        </div>
      </div>
      <div class="row w-100">
        <div class="col-md-2 col-1"></div>
        <div class="col-md-8 col-10  main-search">
        
        <form action = "signup.php" class="form_layout" method="POST">
            <div class="input-group">
              <div class="email-search form-control">
                <input type="email" id="email_address" class=" email-address " name="txtEmailinput" required = "">
                <label for="">Email address</label>
                
              </div>
              <button type="submit" class="btn btn-danger btn_get_stared" name="btn_submit">Get Started <i class="fas fa-chevron-right"></i></button>
             
            </div>
          </form>
         
        </div>
        
      </div>
      
    </div>
  </div>
  <section>
    <div class="container">
      <div class="row align-items-center reverse">
        <div class="advertise_part1 col-lg-6">
          <h2>Have an Android Phone? Get our new free plan!</h2>
          <p>Watch a selection of new movies and TV shows without adding any payment details!</p>
          <a href="https://play.google.com/store/apps/details?id=com.netflix.mediaclient">Get the app<i class="fas fa-chevron-right"></i></a>
        </div>
        <div class="col-lg-6">
          <img src="assets/img/Advertise_part1.jpg">
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="faq">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="mb-5">Frequently Asked Questions</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-2 col-1"></div>
        <div class="col-lg-6 col-md-8 col-10 p-0">
        <div id="accordion">
    <div class="card">
      
        <a class=" btn" data-bs-toggle="collapse" href="#collapseOne">
          What is Netflix?
          
        </a>
      
      <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
        Netflix is a streaming service that offers a wide variety of award-winning TV shows, movies, anime, documentaries and more – on thousands of internet-connected devices.<br><br>
You can watch as much as you want, whenever you want, without a single ad – all for one low monthly price. There's always something new to discover, and new TV shows and movies are added every week!
        </div>
      </div>
    </div>
    <div class="card">
      
      <a class=" btn" data-bs-toggle="collapse" href="#collapsetwo">
        How much does Netflix cost?
        
      </a>
    
    <div id="collapsetwo" class="collapse" data-bs-parent="#accordion">
      <div class="card-body">
      Watch Netflix on your smartphone, tablet, Smart TV, laptop, or streaming device, all for one fixed monthly fee. Plans range from 70,000 ₫ to 260,000 ₫ a month. No extra costs, no contracts.
      </div>
    </div>
  </div>
    <div class="card">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapsethree">
        Where can i watch?
        
    </a>
      <div id="collapsethree" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
        Watch anywhere, anytime. Sign in with your Netflix account to watch instantly on the web at netflix.com from your personal computer or on any internet-connected device that offers the Netflix app, including smart TVs, smartphones, tablets, streaming media players and game consoles.<br><br>
        You can also download your favorite shows with the iOS, Android, or Windows 10 app. Use downloads to watch while you're on the go and without an internet connection. Take Netflix with you anywhere.
        </div>
      </div>
    </div>
    <div class="card">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapsefour">
          How do i cancel?
          
        </a>
      <div id="collapsefour" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
        Netflix is flexible. There are no annoying contracts and no commitments. You can easily cancel your account online in two clicks. There are no cancellation fees – start or stop your account anytime.
        </div>
      </div>
    </div>
    <div class="card">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapsefive">
          What can i watch on Netflix?
          
        </a>
      <div id="collapsefive" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
        Netflix has an extensive library of feature films, documentaries, TV shows, anime, award-winning Netflix originals, and more. Watch as much as you want, anytime you want.
        </div>
      </div>
    </div>
    <div class="card">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapsesix">
          Is verry good for kids?
          
        </a>
     
      <div id="collapsesix" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
        The Netflix Kids experience is included in your membership to give parents control while kids enjoy family-friendly TV shows and films in their own space.<br><br>
        Kids profiles come with PIN-protected parental controls that let you restrict the maturity rating of content kids can watch and block specific titles you don’t want kids to see.
        </div>
      </div>
    </div>
  </div>
        <div class="col-lg-3 col-md-2 col-1"></div>
      </div>
      
    </div>
  </section>
  <section class="bottom-email-search">
    <div class="bottom-search">
      <p class="text-center">Ready to watch? Enter your email to create or restart your membership.</p>
      <div class="row">
        <div class="col-md-2 col-1"></div>
        <div class="col-md-8 col-10  main-search">
        <form action = "signup.php" class="form_layout" method="POST">
            <div class="input-group">
              <div class="email-search form-control">
                <input type="email" id="email_address" class=" email-address " name="txtEmailinput" required = "">
                <label for="">Email address</label>
                
              </div>
              <button type="submit" class="btn btn-danger btn_get_stared" name="btn_submit">Get Started <i class="fas fa-chevron-right"></i></button>
             
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
<?php
    include 'Template/footer.php';
?>
