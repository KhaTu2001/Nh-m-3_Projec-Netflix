<?php
    require('connect.php');
    if(isset($_GET["id"])){
        $filmID = $_GET['id'];
    }
    $sql = "DELETE FROM episode  WHERE film_id = $filmID";
    $sql1 = "DELETE FROM film  WHERE id = $filmID";
    if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql1)) {?>
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