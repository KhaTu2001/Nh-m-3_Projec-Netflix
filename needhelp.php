<?php
  include 'Template/header.php'
?>
<link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .header-change{
        background-color: #000; 
        height: 65px;
    }
    .dropdown-menu{
        background-color: #000;
    }
    .dropdown{
        float: right; 
        margin-top: 10px;
    }
    #logo-change{
        width: 92px; 
        height: 25px; 
        margin-top: 20px; 
        display: inline-block;
    }
    .dropdown-menu a{
        text-decoration: none;
        color: #FFF;
    }
    .dropdown-menu a:hover{
        text-decoration: underline;
    }
    #dropdownMenuLink{
        background-color: #000;
        border: none;
    }
    .new-password{
        padding: 15px;
        width: 60%;
    }
    .slider{
        margin-top:50px;
    }
    #btn-save{
        background-color: #0080FF;
        border: none;
        padding: 7px 27px;
    }
    #btn-cancel{
        background-color: #999999;
        border: none;
        padding: 7px 20px;
    }
    .col-mb-3{
        margin: 40px 0;
    }
    #label-checbox{
        font-size: 15px;
    }
    .new-email{
        width: 60%;
        padding: 15px;
    }
    @media (min-width: 1024px){
        .slider{
            padding: 50px 100px;
        }
    }
</style>
<body>
    <div class="header-change">
        <div class="container">
            <img id="logo-change" src="./assets/img/Netflixblack.png" alt="">
            <div class="dropdown">
				<a class="btn btn-secondary dropdown-toggle" href="#"  id="dropdownMenuLink" data-bs-toggle="dropdown" ><img style="width: 40px; height: 25px;" id="img-user" src="./assets/img/user.png" alt="" /></a>
				<div class="dropdown-menu">
					<a  href="#">Account</a>
                    <br>
					<a href="#">Help Center</a>
                    <br>
					<a href="#">Sign out of Neflix</a>
					</div>
				</div>
        </div>
    </div>
    <div class="slider">
            <form action="" class="from-change">
                <div class="container">
                    <h2>Change Password</h2>
                    <div class="email">
                        <h6>Current Email</h6>
                        <input class="new-email" type="text" name="email" placeholder="name@gmail.com">
                    </div>
                        <div class="col-mb-3">
                            <input class="new-password" type="password"  placeholder="Old password " >
                        </div>
                        <div class="col-mb-3">
                            <input class="new-password" type="password"  placeholder="New password (6-60 characters)" >
                        </div>
                        <div class="col-mb-3">
                            <input class="new-password" type="password"  placeholder="Confirm new password" >
                        </div>
                        <div class="col-mb-3">
                            <input type="checkbox" id="vehicle1" name="" value="">
                            <label id="label-checbox" for="vehicle1"> Require all devices to sign in again with new password </label>
                        </div>
                        <div class="col-mb-3">
                        <button id="btn-save" type="submit">
                                Save
                        </button>
                        <button id="btn-cancel" type="submit">
                                Cancel
                        </button>
                        </div>
                    </div>
            </form>
    </div>
    <footer style="background-color: #FFFFFF; border-top: none; ">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-6">
          <ul>
            <li><a href="contactus.php" class="question-contact">Questions? Contact us.</a></li>
            <li><a href="FAQ.php">FAQ</a></li>
            <li><a href="privacy.php">Privacy</a></li>
            
          </ul>
        </div>
        <div class="col-md-4 col-6">
          <ul>
            <li><a href="helpcenter.php">Help Centre</a></li>
            <li><a href="LegalNotices.php">Legal Notices</a></li>
            <li><a href="termsofuse.php">Terms of Use</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-6">
          <ul>
            <li><a href="login.php">Account</a></li>
            <li><a href="way-match.php">Ways to Match</a></li>
            <li><a href="corpinfo.php">Corporate Information</a></li>
           
          </ul>
        </div>
       
      </div>
    </div>

    
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>