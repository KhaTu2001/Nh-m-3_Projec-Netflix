<?php
include_once ('../main/connect.php');
if(isset($_POST['btnChange']))
{
    $email = $_POST['email'];
    $sql = "SELECT * FROM user where email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);   
    $fetch_email=$row['email'];
    if($email==$fetch_email) {
                require ('process_mailer.php');
                $pass1 = generatePassword();
                $test = 'Change password account netflix';
                $link = "Password";
                $body = "Your password is : $pass1";
                $headers = "From: password@studentstutorial.com";
                sendMail($email,$test,$body);

                $pass_hash = password_hash($pass1,PASSWORD_DEFAULT);
                $sql02 = "UPDATE user SET password ='$pass_hash' WHERE email='$email'";
                $result02 = mysqli_query($conn,$sql02);
                ?>
                    <script>
                        alert("Check mail để lấy lại mật khẩu từ hệ thống");
                        location.href = "../login.php";      
                    </script>
                <?php 
                // $reply="Check mail để lấy lại mật khẩu từ hệ thống";
                // header("location: ../login.php?reply='$reply'");
                }
    else{
        echo 'invalid userid';
    }
}

?>