<?php 
  if(isset($_POST['btn_submit1'])){
    $username=$_POST['userName'];
    $fullname = $_POST['FullName'];
    $email=$_POST['txtEmail'];
    $phone =$_POST['txtphone'];
    $pass1=$_POST['txtPass1'];
    $pass2=$_POST['txtPass2'];
    $gender = $_POST['gender'];
    require('../account/connect.php');
    $sql = "SELECT * FROM user where email = '$email'";
    $res = mysqli_query($conn,$sql);
    //echo mysqli_num_rows($res); //in ra du lieu trong bang
    if( mysqli_num_rows($res) > 0){
      ?>
          <script>
           alert("Account already exists.Please try again");
           location.href = "../account/signup.php";
           </script>

          <?php
  
    }
   else{
      $token = md5($email).rand(10,9999);
      $pass_hash = password_hash($pass1,PASSWORD_DEFAULT);
      $sql2 = "INSERT INTO user (username,fullname,email,password,phone,sex,usertype) VALUES ('$username','$fullname', '$email','$pass_hash','$phone','$gender','20')";
      mysqli_query($conn,$sql2);
      //tao link de vao mail kich hoat
      $link = "<a href='localhost/Nhom-3_Project-Netflix/src/verify-email.php?key=".$email."&token=".$token."'>Click and Verify Email</a>";
      require('process_mailer.php');
      $test = 'Active account netflix';
      $body = 'Click link'.$link;
      // echo $sql2;
      if(sendMail($email,$test,$body)){
        ?>
          <script>
           alert("Signup successful!Please check your email to activate your account");
           location.href = "../account/login.php";
           </script>

          <?php  
       
      }
      else{
        ?>
          <script>
           alert("Unable to register an account.Please try again!!!");
           location.href = "../account/signup.php";
           </script>

          <?php
     
      }
      
    }
    
  }

?>