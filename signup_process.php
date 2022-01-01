<?php 

  if(isset($_POST['btn_submit1'])){
    $user = $_POST['firstName'];
    $email = $_POST['txtEmail'];
    $pass1 = $_POST['txtPass1'];
    $pass2 = $_POST['txtPass2'];
    
    //b1:mo ket noi database
    require('connect.php');
    //b2:truy van
    $sql1 = "SELECT * FROM user WHERE email = '$email' or username='$user'";
    $result = mysqli_query($con,$sql1);
    if(mysqli_num_rows($result) > 0){
      $error = 'tài khoản đã tồn tại';
      header("Location:signup.php?response=$error");
    }
    else {
      $code = md5($pass1);
      $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
      $sql2  = "INSERT INTO user (username, email, pass) 
          VALUES ('$user',' $email','$pass_hash')";
      $res2 = mysqli_query($con, $sql2); // voi lenh insert thanh cong tra ve so nguyen
      if ($res2 == true){
        header("Location:login.php?");
      }else{
          $error = 'khong the insert';
          header("Location:signup.php?response=$error");
      }
  }
}
mysqli_close($con);
?>