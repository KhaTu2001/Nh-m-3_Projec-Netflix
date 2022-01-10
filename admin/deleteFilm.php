<?php
    require('connect.php');
    if(isset($_GET["id"])){
        $filmID = $_GET['id'];
    }
    $sql = "DELETE FROM episode  WHERE film_id = $filmID";
    $sql1 = "DELETE FROM film  WHERE id = $filmID";
    $sql2 = "DELETE FROM my_list  WHERE film_id = $filmID";
    if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)) {?>
        <script>
            alert("Delete movie successfully");
            location.href = "manageFilm.php";
            // alert("hshshsh");
        </script>

    <?php        
    } else {
        echo "Error deleting movies: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    
?>