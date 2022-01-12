<?php  
    include "../Template/header.php";
    require('connect.php');
    ?>
    <link rel="stylesheet" href="main.css?v=<?php echo time(); ?>">
    </head>
    <body style="overflow-y: hidden;">  
<?php
    require('connect.php');
    $filmid = $_GET["id"];
        $sql = "SELECT * from episode where id = $filmid";
        $result=mysqli_query($conn, $sql);
        
    while($row = mysqli_fetch_assoc($result)){
        $episode = $row['film_id'];
        $sql1 = "SELECT * from film where id = $episode";
        $result1=mysqli_query($conn, $sql1);
        $row1=mysqli_fetch_assoc($result1);
        $view = $row1['num_view'] + 1 ;
        $sql2 = "UPDATE film Set num_view =  $view where id = $filmid";
        $result2=mysqli_query($conn, $sql2);   
        ?>
    <div class="full_screen-film container-fluid">
    <button type="submit" class="prev-page" onclick="prev()" style="z-index:1000;position: fixed;"><i class="fas fa-arrow-left"></i></button>
        <video  controls>
        
                <source src="../admin/video/<?php echo $row['content'] ?>" type="video/mp4">
        </video>
    </div>

    </html>
    </body>
    <script>
        function prev(){
            window.history.go(-1);
        }
    </script>
    <style>
        body{
            background-color:#000;
            overflow-x:hidden;
            overflow-y:auto;
        }
    </style>
<?php
    } 
?>
