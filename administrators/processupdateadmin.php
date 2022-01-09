<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    // session_start();
    // if(!isset($_SESSION['isLoginOK'])){
    //     header("location:login.php");
    // }
    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['txtid'])){
        $id = $_POST['txtid'];
    }
    if(isset($_POST['userName'])){
        $user     = $_POST['userName'];
    }

    $email        = $_POST['txtEmail'];
    $fullname      = $_POST['FullName'];
    $phone      = $_POST['txtphone'];

    
    // Bước 01: Kết nối Database Server
    require('../connect.php');
    // Bước 02: Thực hiện truy vấn
    $sql = "UPDATE user SET username='$user', fullname='$fullname', email = '$email', phone = '$phone'";
    // echo $sql;

    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        echo 'loi'; //Chuyển hướng lỗi
    }else{
        
        ?>
        <script>
            alert("Admin have been update");
            location.href = "./index.php";
        </script>
        

    <?php        
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>