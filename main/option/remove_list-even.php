  <?php  
    require('connect.php');
      $listid = $_GET["id"];
  
    $sql = "DELETE from my_list where list_id = $listid";

    if (mysqli_query($conn, $sql)) {?>
     <script>
            window.history.go(-1);
            // alert("hshshsh");
        </script>

    <?php        
    } else {
        echo "Lỗi " . mysqli_error($conn);
    }
    mysqli_close($link);
    
?>