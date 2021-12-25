<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    
    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['txtidmovie'])){
        $maNhanVien = $_POST['txtidmovie'];
    }
    if(isset($_POST['txtnameoffilm'])){
        $moviename = $_POST['txtnameoffilm'];
    }
    
    $image = $_FILES['image']['name'];
    $target = "photo/".basename($image);
    $sql = "INSERT INTO movie (image) VALUES ('$image')";
    mysqli_query($conn, $sql);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    echo '<script language="javascript">alert("Đã upload thành công!");</script>';
    }else{
    echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
    }
    
    
    $movielink = $_POST['txtlink'];
    $countryname = $_POST['cboCountry'];
    $genrename = $_POST['cbogenre'];
    // Bước 01: Kết nối Database Server
    include 'connect.php';
    // Bước 02: Thực hiện truy vấn
    $sql = "UPDATE movie 
            SET image='$image', name_movie='$moviename', link = '$movielink', name_country = '$countryname', name_genre='$genrename'";
    // echo $sql;

    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: error.php"); //Chuyển hướng lỗi
    }else{
        header("location: admin_page.php"); //Chuyển hướng lại Trang Quản trị
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>