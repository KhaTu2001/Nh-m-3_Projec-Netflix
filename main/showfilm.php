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
    while($row = mysqli_fetch_assoc($result)){?>
    <div class="full_screen-film container-fluid">
        <h2 class = "name_film container"><?php echo $row['name'] ?></h2>
        <button type="submit" class="prev-page" onclick="prev()"><i class="fas fa-arrow-left"></i></button>
        <video width="640" height="480" controls posster="images/poster.png">
                <source src="../admin/video/<?php echo $row['link'] ?>" type="video/mp4">
                <source src="freehostpage.ogg" type="video/ogg">
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
