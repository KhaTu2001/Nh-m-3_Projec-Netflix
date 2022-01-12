<?php
    require('../connect.php');

    if(isset($_GET['id'])){
        $userID = $_GET['id'];
        $sql = "DELETE FROM user  WHERE ID = '$userID'";
        
        $number = mysqli_query($conn, $sql);
        if ($number > 0) {
            
            ?>
        <script>
            alert("Admin have been remove from my list");
            location.href = "./manageadmin.php.php";
        </script>
        

    <?php        
    }                                     
    }
    
    mysqli_close($conn);
    
?>