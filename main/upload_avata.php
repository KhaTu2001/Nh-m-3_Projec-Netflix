<?php
        session_start();
    include 'connect.php';
    if(isset($_SESSION['userid'])){
    $userID = $_SESSION['userid'];
}
    if(isset($_POST['button_post'])){
        $image = $_FILES['image']['name'];
        $target = "../admin/image/".basename($image);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $sql="UPDATE user SET  avata_image = '$image' where id = $userID";
            $check = mysqli_query($conn,$sql);
            if($check){?>
                <script>
                    alert("Insert film sucessfully!");
                    window.history.go(-1);
                </script>
                
            <?php

            }
        }
        else{
            echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
            header("location:profile.php");
        
    }
}

?>