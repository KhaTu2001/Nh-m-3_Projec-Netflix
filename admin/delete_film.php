<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    
    // admin.php TRUYỀN DỮ LIỆU SANG
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $id_movie = $_GET['id_movie'];

    // Bước 01: Kết nối Database Server
    require 'connect.php';
    // Bước 02: Thực hiện truy vấn
    $sql = "DELETE FROM movie WHERE id_movie = '$id_movie'";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: admin_page.php"); //Chuyển hướng về Trang quản trị
    }else{
        header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>