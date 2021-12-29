<?php

    session_start();
    include('connect.php');
    if (isset($_POST['txtEmail'])) {
        $email = $_POST['txtEmail'];
        $pass = $_POST['txtPass'];

        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
        $checkEmail = mysqli_num_rows($result);
        if($checkEmail == 1){
            // CẤP THẺ LÀM VIỆC
            
            $pass_save = $row['pass'];
            if (password_verify($pass, $pass_save)) {
                echo $pass_save;
                $_SESSION['isLoginOK'] = $row;
    
    
                
                header("Location:main.php");
            } else {
                $error = 'Mật khẩu sai';
                header("Location:login.php?error=$error");
            }
        }

       


         } else {
            header("Location: login.php");
        }

    ?>