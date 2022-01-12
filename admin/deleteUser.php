<?php
    require('libs/db.php');

    if(isset($_GET["id"])){
        $userID = $_GET['id'];
    }
    $sql = "DELETE FROM user  WHERE ID = $userID";

    if (mysqli_query($link, $sql)) {?>
        <script>
            alert("Film have been remove from my list");
            location.href= window.location.href;
        </script>

    <?php        
    } else {
        echo "Lỗi xóa user " . mysqli_error($conn);
    }
    mysqli_close($link);
    
?>