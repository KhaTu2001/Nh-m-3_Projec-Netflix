<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    // admin.php TRUYỀN DỮ LIỆU SANG
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $ma_phim = $_GET['ma_phim'];

    // Bước 01: Kết nối Database Server
    include 'connect.php';
    // Bước 02: Thực hiện truy vấn
    $sql = "DELETE FROM phim WHERE ma_phim = '$ma_phim'";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: admin_page.php"); //Chuyển hướng về Trang quản trị
    }else{
        header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>