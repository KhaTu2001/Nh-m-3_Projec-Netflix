<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    // session_start();
    // if(!isset($_SESSION['isLoginOK'])){
    //     header("location:login.php");
    // }
    // Xử lý giá trị GỬI TỚI
    if (isset($_POST['btn_submit1'])){
        $username=$_POST['userName'];
        $fullname = $_POST['FullName'];
        $email=$_POST['txtEmail'];
        $phone =$_POST['txtphone'];
        $pass1=$_POST['txtPass1'];
        $gender = $_POST["gender"];

            // Bước 01: Kết nối Database Server
            require('../connect.php');
            // Bước 02: Thực hiện truy vấn
            $sql = "SELECT * FROM user where email = '$email'";
            $res = mysqli_query($conn,$sql);
            echo mysqli_num_rows($res); //in ra du lieu trong bang
            if( mysqli_num_rows($res) > 0){
            ?>
                <script>
                alert("Tài khoản đã tồn tại rồi.Hãy thử lại");
                location.href = "./addadmin.php";
                </script>

            <?php

        }
        else{
           
            $pass_hash = password_hash($pass1,PASSWORD_DEFAULT);
            $sql2 = "INSERT INTO user (username,fullname,email,password,phone,sex,usertype,status) VALUES ('$username','$fullname', '$email','$pass_hash','$phone','$gender','99','1')";
            
            $res = mysqli_query($conn, $sql2);

        //4. Check whether the (Query is Executed) data is inserted or not and display appropriate message
            if ($res == TRUE) {
                //Data Inserted

                //Create a Session Variable to Display Message
                ?>
                    <script>
                    alert("Add admin successful!");
                    location.href = "./manageadmin.php.php";
                    </script>

                <?php  
            } else {

                //Create a Session Variable to Display Message
                ?>
                    <script>
                    alert("Add admin khong thanh cong!");
                    location.href = "addadmin.php";
                    </script>

                <?php 
            }

                    // Bước 03: Đóng kết nối
                    mysqli_close($conn);

            }
    }
    
?>