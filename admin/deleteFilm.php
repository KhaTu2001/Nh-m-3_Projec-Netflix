<?php
    require('connect.php');
    if(isset($_GET["id"])){
        $filmID = $_GET['id'];
    }
    $sql = "DELETE FROM film  WHERE id = $filmID";

    if (mysqli_query($conn, $sql)) {?>
        <script>
            alert("Xóa phim thành công");
            location.href = "manageFilm.php";
            // alert("hshshsh");
        </script>

    <?php        
    } else {
        echo "Lỗi xóa phim: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    
?>