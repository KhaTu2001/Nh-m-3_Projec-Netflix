<?php
    include_once ('./connect.php');

    $email = $_POST["email"];
    $oldpass = $_POST["oldpassword"];
    $newpass = $_POST["newpassword"];

    if(count($_POST)>0) {
    $result = mysqli_query($conn,"SELECT * from user WHERE email= '$email'");
    $row = mysqli_fetch_array($result);
    
        if(password_verify($_POST["oldpassword"],$row["password"])){ 

                $pass_hash = password_hash($newpass,PASSWORD_DEFAULT);
                $sql02 = "UPDATE user SET password ='$pass_hash' WHERE email='$email'";
                $result02 = mysqli_query($conn,$sql02);
                ?>
                <script>
                    alert("Đổi mật khẩu thành công");
                    location.href = "./login.php";      
                </script>
                <?php 
            } else{
                ?>
                <script>
                    alert("Tài khoản hoặc mặt khẩu sai");
                    location.href = "./needhelp.php";          
                </script>
                <?php 
            }
    }
    


    