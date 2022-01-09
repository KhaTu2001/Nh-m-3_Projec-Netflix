<?php
    session_start();
    if(isset($_POST['btn_submit'])){
        $name = $_POST['txtaccount'];
        $pass = $_POST['txtPass'];
        require('../connect.php');
        $sql = "SELECT * FROM administrators WHERE name='$name' and pass = '$pass'";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res) > 0){
            
            $_SESSION['isLoginOK'] = $name;
            // echo 'thanh cong roi';
            header("location:index.php");
        }
        else{
            echo 'tai khoan khong dung roi';
        }
    }
?>