<?php  
    require('connect.php');
  
      $listid = $_GET["id"];
  
    $sql = "DELETE from like_action where like_id = $listid";

    if (mysqli_query($conn, $sql)) {?>
     <script>
            window.history.go(-1);
        </script>

    <?php        
    } else {
        echo "Lỗi " . mysqli_error($conn);
    }
    mysqli_close($conn);
    
?>