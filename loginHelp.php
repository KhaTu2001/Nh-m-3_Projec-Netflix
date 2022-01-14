<?php

include 'Template/header.php';

?>
<link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
</head>
<style>
body, html {
  font-family: Arial, Helvetica, sans-serif;
}

* {
    margin:0;
    padding:0;
    box-sizing: border-box;
}

.bg-img {
  background-image: url("./assets/img/backgourp-loginHelp.jpg");
  min-height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.form-loginHelp {
    position: absolute;
    background-color: white;
    width: 38%;
    padding: 20px 20px;
}
.container{
    width: 40%;
    padding-top: 60px; 
} 
#logo-change{
    width: 167px;
    height: 40px;
    display: inline-block;
    margin-left: 20px;
    margin-top: 20px;
}
#signin-change{
    float:right;
    color: #FF0000;
    font-size: 20px;
    text-decoration: none;
    font-weight: 600;
    margin-right: 20px;
    margin-top: 20px;
}
#signin-change:hover{
    text-decoration: underline;
    color: #FF0000;
}
#btn-email-me{
    width: 70%;
    height: 48px;
    font-size: 20px;
    border: none;
    background-color: #0080ff ;
}
.new-email{
    width: 70%;
    padding: 10px 11px;
}
#radio{
    width: 15px;
    height: 15px;
    border-radius: 50%;
    display: inline-block;
    margin-top:5px;
}
#lable{
    color: #333;
    font-size: 15px;
    padding: 10px 0;
}
#forgot{
        font-size: 30px
    }
@media (max-width: 740px){
    .bg-img{
        background-image: none;
    }
    .container{
        width: 100%;
        margin-top: 5px; 
    } 
    .form-loginHelp {
        background-color: white;
        width: 100%;
        padding: 20px 20px;
    }

}
</style>
</head>
<body>

<div class="bg-img">
        <a href="index.php">
        <span id="logo-change"  class="iconify" data-icon="logos:netflix"></span>
        </a>
        <a id="signin-change" href="login.php">Sign In</a>
        <div class="container">
            <form action="./src/process_changepassword.php" method="post" class="form-loginHelp">
                
                    <h1 style="color: #000;" id="forgot">Forgot Email/Password</h1>
                    <p>How would you like to reset your password?</p>
                    
                        <input id="radio" type="radio" placeholder="Enter Email" name="email" required>
                        <label id="lable" for="psw">
                            Email
                        </label>
                    <br>
                    
                        <input id="radio" type="radio" placeholder="Enter Password" name="email" required>
                        <label id="lable" for="psw">
                            Text Manage(SMS)
                        </label>
                    
                    <br>
                    <p>We will send you an email with instructions on how to reset your password.</p>
                    <input class="new-email" type="text" id="Emailchange" name="email" placeholder="name@gmail.com">
                    <br>
                    <small id="emailHelpchange"></small>
                    <br>
                    <br>
                        <button name="btnChange" id="btn-email-me"  type="submit">
                                Email Me
                        </button>
                
                </form>
        </div>
</div>
<footer style=" border-top: none; ">
    <div style="width: 100%" class="container">
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
  <script>
        $(document).ready(function(){
        $("#Emailchange").change(function(){
            let emailPattern = /\S+@\S+.\S+/;
            if(emailPattern.test($(this).val()) == false){
                $("#emailHelpchange").text("Email của bạn không hợp lệ").css("color","red");
            }
            else{
                $("#emailHelpchange").text("Email hợp lệ").css("color","#008000");
            }
        });
    });
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
</body>
</html>