<?php
    session_start();
    include('connect.php');
    if (isset($_POST['btn_submit']) && isset($_POST['txtEmail'])) {
        $email = $_POST['txtEmail'];
        $pass = $_POST['txtPass'];
        $sql = "SELECT * FROM user WHERE email=?";
        $stmt = mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_bind_result($stmt,$id,$username,$fullname,$email,$password,$phone,$sex,$usertype,$image);
            // echo $email;
            if(mysqli_stmt_fetch($stmt)){
                echo $email;
                if(password_verify($pass,$password)){
                    $_SESSION['isLoginOK'] = $email;  
                    
                    if($usertype == '99'){
                        $_SESSION['isLoginOK'] = $email;
                        header("location:admin/admin_page.php"); 
                    
                    }
                    
                    else{
                        echo 'hello';
                        header("location:main.php"); 
                    }
                }
                else{
                    echo 'Sai MK roi';
                }
            }
            else{
                echo "loi roi";
            }
        }


    
    }
    ?>