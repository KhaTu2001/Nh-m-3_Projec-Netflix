

<?php

    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['txtnameofflim'])){
        $moviename = $_POST['txtnameofflim'];
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
    $sql = "INSERT INTO movie (name_movie,image,link,name_country, name_genre) 
    VALUES ('$moviename','$image','$movielink','$countryname','$genrename')";

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