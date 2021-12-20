<?php
   
    session_start();
    include('connect.php');
    if (isset($_POST['btn_submit'])) {
        $email = $_POST['txtEmail'];
        $pass = $_POST['txtPass'];
       
    
    
        $sql = "SELECT * FROM nguoidung WHERE email = '$email' AND pass='$pass'";
        echo $sql;
        $result = mysqli_query($con,$sql);
        
        if(mysqli_num_rows($result) > 0){
            // CẤP THẺ LÀM VIỆC
            $_SESSION['isLoginOK'] = $email;

            header("location: main.html"); //Chuyển hướng về Trang quản trị
        }
        else{

            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
            header("location: login.php?error=$error");
             //Chuyển hướng, hiển thị thông báo lỗi
        }
    
        if (mysqli_num_rows($res) > 0) {
            // $row = mysqli_fetch_assoc($res);
            // $pass_save = $row['password'];
            // if (password_verify($pass, $pass_save)) {
            //     $_SESSION['login'] = "<div class='danger'>Đăng nhập thành công.</div>";
            //     $_SESSION['user'] = $email;
            //     $_SESSION['userid'] = $row['userid'];

    
        } else {
            header("Location: login.php");
        }
    
    }


        
    ?>