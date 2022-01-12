<?php 
  if(isset($_POST['btn_submit1'])){
    $username=$_POST['userName'];
    $fullname = $_POST['FullName'];
    $email=$_POST['txtEmail'];
    $phone =$_POST['txtphone'];
    $pass1=$_POST['txtPass1'];
    $pass2=$_POST['txtPass2'];
    $gender = $_POST["gender"];
    require('../connect.php');
    $sql = "SELECT * FROM user where email = '$email'";
    $res = mysqli_query($conn,$sql);
    //echo mysqli_num_rows($res); //in ra du lieu trong bang
    if( mysqli_num_rows($res) > 0){
      ?>
          <script>
           alert("Tài khoản đã tồn tại rồi.Hãy thử lại");
           location.href = "../signup.php";
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
      // echo $sql2;
      if(sendMail($email, $link)){
        ?>
          <script>
           alert("Signup successful!Hãy check mail để kích hoạt tài khoản");
           location.href = "../login.php";
           </script>

          <?php  
       
      }
      else{
        ?>
          <script>
           alert("Không thể đăng ký tài khoản.Hãy thử lại!!!");
          //  location.href = "../signup.php";
           </script>

          <?php
      //   $error = "khong the dang ky";
      // header("Location:signup.php?error=$error");
      }
      
    }
  }

  // else{
    
  // }

?>