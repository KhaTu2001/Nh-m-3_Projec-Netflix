<?php
    session_start();
    include('connect.php');
    if (isset($_POST['btn_submit'])) {
        $email = $_POST['txtEmail'];
        $pass = $_POST['txtPass'];
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            
            $_SESSION['isLoginOK'] = $email;  
            $dbarray = mysqli_fetch_array($result);
            if($dbarray['usertype'] == 99){ 
                header("location:admin/admin_page.php");
  
            }
            else{
                header("location:main.php"); 
            }         
        }
        else{
            
            $error = "Bạn đã nhập thông tin Email"."<br/>"."hoặc mật khẩu chưa chính xác";
            header("location: login.php?error=$error");
             //Chuyển hướng, hiển thị thông báo lỗi
        }
         } 
    else {
        header("Location: login.php");
        }

    ?>