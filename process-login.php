<?php
include('connect.php')
?>
<?php
    if(isset($_POST['btn_submit'])){
        $email = $_POST['txtmail'];
        $pass = $_POST['txtpass'];
        $sql ="SELECT * FROM users WHERE Email = '$email' and Password = '$pass'";
        $number = mysqli_query($con,$sql);
        if($number > 0 ){
            header("location:main.php");
        }else{
            echo ('loi roi');
        }
    }else{
        header("location:login.php");
    }
    
?>