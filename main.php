<?php
    
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    
    include('./Template/header.php');
?>

<?php
<<<<<<< HEAD
    include('./Template/footerr.php')
=======
    include('./Template/footer.php');
>>>>>>> 11eb5f04f09ec0b2fe151dec682c9d8dafd80d1a
?>