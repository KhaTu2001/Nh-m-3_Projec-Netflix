<?php
    session_start();
    include('../connect.php');
    if (isset($_POST['btn_submit']) && isset($_POST['txtEmail'])) {
        $email = $_POST['txtEmail'];
        $pass = $_POST['txtPass'];
        if ($email == "" ||  $pass =="") {?><script>
			alert("username và password bạn không được để trống!")
            </script>
            <?php
        }
        else{
            $sql = "SELECT * FROM user WHERE email=? and status = '1'";
            $stmt = mysqli_prepare($conn,$sql);
            mysqli_stmt_bind_param($stmt, "s", $email);
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_bind_result($stmt,$id,$username,$fullname,$email,$password,$phone,$sex,$usertype,$image,$status);
                // echo $email;
                if(mysqli_stmt_fetch($stmt)){
                    // echo $email;
                    if(password_verify($pass,$password)){
                        $_SESSION['isLoginOK'] = $email;  
                        
                        if($usertype == '99'){
                            $_SESSION['isLoginOK'] = $email;
                            header("location:../admin/admin_page.php"); 
                            ?>
                                

                            <?php  
                        
                        }
                        
                        else{
                            ?>
                                <script>
                                    alert("Đăng nhập thành công");
                                    location.href = "../main.php";
                                    // alert("hshshsh");
                                </script>

                            <?php        
                            // echo 'hello';
                            // header("location: ../main.php"); 
                        }
                    }
                    else{
                        ?>
                                <script>
                                    alert("Sai mật khẩu rồi!!!quay lại đi");
                                    location.href = "../login.php";
                                    // alert("hshshsh");
                                </script>

                            <?php  
                    }
                }
                else{
                    ?>
                    <script>
                        alert("Tài khoản không tồn tại!!!");
                        location.href = "../login.php";
                        // alert("hshshsh");
                    </script>

                <?php  
                }
            }

        }
       


    
    }
    ?>