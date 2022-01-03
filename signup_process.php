<?php 
  if(isset($_POST['btn_submit1'])){
    $username=$_POST['userName'];
    $fullname = $_POST['FullName'];
    $email=$_POST['txtEmail'];
    $phone =$_POST['txtphone'];
    $pass1=$_POST['txtPass1'];
    $pass2=$_POST['txtPass2'];
    $gender = $_POST["gender"];
    require('connect.php');
    $sql = "SELECT * FROM user where email = '$email'";
    $res = mysqli_query($conn,$sql);
    if( mysqli_num_rows($res) > 0){
      $error = "Tai khoan da ton tai";
      header("Location:signup.php?error=$error");
    }
    else{
      $pass_hash = password_hash($pass1,PASSWORD_DEFAULT);
      $sql2 = "INSERT INTO user (username,fullname,email,password,phone,sex,usertype) VALUES ('$username','$fullname', '$email','$pass_hash','$phone','$gender','20')";
      $res2 = mysqli_query($conn,$sql2);
      echo $sql2;
      if($res2 >0){
        echo "Signup successful";
        header("Location:login.php");
      }
      else{
        $error = "khong the dang ky";
      header("Location:signup.php?error=$error");
      }
    }
  }

  // else{
    
  // }

?>