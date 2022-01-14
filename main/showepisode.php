<?php
    session_start();
    include '../Template/header.php';
?>
<link rel="stylesheet" href="main.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="../assets/css/minh.css?v=<?php echo time(); ?>">


</head>
<link rel="stylesheet" href="main.css?v=<?php echo time(); ?>">
</head>
<body style="overflow-y: hidden;">
    <?php
    require('connect.php');
        if(isset($_GET['id']))  $episode_id = $_GET["id"];
        if(isset($_GET['episode_id'])) $episode_id = $_GET["id"];
        $sql = "SELECT * from episode where id = $episode_id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $film_id = $row["film_id"];
        $sql1 = "SELECT * from film where id = $film_id";
        $result1=mysqli_query($conn, $sql1);
        $row1=mysqli_fetch_assoc($result1);
        $view = $row1['num_view'] + 1 ;
        $sql2 = "UPDATE film Set num_view =  $view where id = $film_id";
        $result2=mysqli_query($conn, $sql2);   
        ?>
    <div class="full_screen-film container-fluid">
        <button type="submit" class="prev-page" onclick="prev()" style="z-index:1000;position: fixed;"><i
                class="fas fa-arrow-left"></i></button>
        <div class="moblie_reponsive">
            <label for="nav_mobile-input" class="navbar_btn">
                <i class="fas fa-bars"></i>
            </label>
            <input type="checkbox" hidden class="add_navbar-option" id="nav_mobile-input">
            <label for="nav_mobile-input" class="navbar_overlay">
            </label>
            <div class="navbar_select-option" style="">
                <ul id="active" class="container-fluid">
                    <div class="navbar_select-header">
                        <h3> <?php echo $row1['name'];?> : <?php echo $row1['name'];?> </h3>
                    </div>
                    <li class="container-fluid">
                        <a class="Episode_card" class="container-fluid"
                            href="showfilm.php?id=<?php echo $row1["id"]; ?>">
                            <div class="index">
                                <p>1</p>
                            </div>
                            <div class="episode_right">
                                <div class="episode_number">
                                    <p>Episode: 1 </p>
                                </div>
                                <div class="episode_name">
                                    <p>Name: <?php echo $row1['name'];?> </p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php
                    $sqlep = "SELECT * from episode where film_id = $film_id order by episode ASC";
                    $resultep = mysqli_query($conn, $sqlep);
                    while($rowep = mysqli_fetch_assoc($resultep)){
                    ?>
                    <li class="container-fluid">
                        <a class="Episode_card" class="container-fluid"
                            href="showepisode.php?id=<?php echo $rowep["id"]; ?>">
                            <div class="index">
                                <p><?php echo $rowep['episode'];?></p>
                            </div>
                            <div class="episode_right">

                                <div class="episode_number">
                                    <p>Episode: <?php echo $rowep['episode'];?> </p>
                                </div>
                                <div class="episode_name">
                                    <p>Name: <?php echo $rowep['episode_name'];?> </p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
        <video controls>
            <source src="../admin/video/<?php echo $row['content'] ?>" type="video/mp4">
        </video>
    </div>



<script>
function prev() {
    location.href = "main.php";
}
</script>
<style>
body {
    background-color: #000;
    overflow-x: hidden;
    overflow-y: auto;
}
</style>
</body>
</html>