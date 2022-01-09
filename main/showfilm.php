<?php  
    include "../Template/header.php";
    require('connect.php');
    ?>
    <link rel="stylesheet" href="main.css?v=<?php echo time(); ?>">
    </head>
    <body>  
<?php
    require('connect.php');
    $filmid = $_GET["id"];
        $sql = "SELECT * from film where id = $filmid";
        $result=mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $view = $row['num_view'] + 1 ;
        $sql1 = "UPDATE film Set num_view =  $view where id = $filmid";
        $result=mysqli_query($conn, $sql1);   
        ?>
    <div class="full_screen-film container-fluid">
        <h2 class = "name_film container"><?php echo $row['name'] ?></h2>
        <button type="submit" class="prev-page" onclick="prev()"><i class="fas fa-arrow-left"></i></button>
        <video  controls>
                <source src="../admin/video/<?php echo $row['link'] ?>" type="video/mp4">
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
