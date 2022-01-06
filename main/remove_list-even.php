  <?php  
    require('connect.php');
  
      $listid = $_GET["id"];
  
    $sql = "DELETE from my_list where id = $listid";

    if (mysqli_query($conn, $sql)) {?>
     <script>
            alert("Movie");
            location.href = "My_list.php";
            // alert("hshshsh");
        </script>

    <?php        
    } else {
        echo "Lỗi xóa user " . mysqli_error($conn);
    }
    mysqli_close($link);
    
?>