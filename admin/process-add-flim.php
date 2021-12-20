<?php
    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['txtnameofflim'])){
        $moviename = $_POST['txtnameofflim'];
    }
    $img = $_FILES['image']['name'];
    $movielink = $_POST['txtlink'];
    $countryname = $_POST['txtCountry'];
    $genrename = $_POST['txtgenre'];
    

    // Bước 01: Kết nối Database Server
    include 'connect.php';
    // Bước 02: Thực hiện truy vấn
    $sql = "INSERT INTO phim (anh, tenphim, linkphim, tenquocgia, tentheloai) 
    VALUES ('$img','$moviename','$movielink','$countryname','$genrename')";
    // echo $sql;
    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: error.php"); //Chuyển hướng lỗi
    }else{
        header("location: admin.php"); //Chuyển hướng lại Trang Quản trị
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>