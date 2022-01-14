<?php
    require('../account/connect.php');

    if(isset($_GET['id'])){
        $userID = $_GET['id'];
        $sql = "DELETE FROM user  WHERE ID = $userID";
        $sql2 = "DELETE FROM like_action  WHERE user_id = $userID";
        $sql3 = "DELETE FROM dislike WHERE user_id = $userID";
        $sql4 = "DELETE FROM my_list WHERE user_id = $userID";
        if (mysqli_query($conn, $sql4) && mysqli_query($conn, $sql2) && mysqli_query($conn, $sql3) && mysqli_query($conn, $sql) ) {?>
            <script>
                alert("Delete user successfully");
                location.href = "manageuser.php";
            </script>
   
        <?php
        } else {
            echo "Error deleting movies: " . mysqli_error($conn);
        }
    }
        mysqli_close($conn);
       ?>