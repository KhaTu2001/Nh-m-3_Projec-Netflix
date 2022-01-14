<?php
    require('connect.php');
    if(isset($_GET["id"])){
        $filmID = $_GET['id'];
    }
    $sql = "DELETE FROM episode  WHERE id = $filmID";
     if (mysqli_query($conn, $sql) ) {?>
         <script>
             alert("Delete Episode successfully");
             location.href = "manageEpisode.php";
         </script>

     <?php        
     } else {
         echo "Error deleting Episode: " . mysqli_error($conn);
     }
     mysqli_close($conn);
    ?>
    