<?php
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
    if (isset($_GET['id']))  $filmid = $_GET["id"];
        $sql = "SELECT * from film where id = $filmid";
        $result=mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $view = $row['num_view'] + 1 ;
        $sql1 = "UPDATE film Set num_view =  $view where id = $filmid";
        $result1=mysqli_query($conn, $sql1);   
        ?>
    <div class="full_screen-film container-fluid">
        <button type="submit" class="prev-page" onclick="prev()" style="z-index:1000;position: fixed;"><i
                class="fas fa-arrow-left"></i></button>
        <?php if($row['type_movie'] == 1){?>


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
                        <h3> <?php echo $row['name'];?> : <?php echo $row['name'];?> </h3>
                    </div>
                    <li class="container-fluid">
                        <a class="Episode_card" class="container-fluid" href="showfilm.php?id=<?php echo $row["id"]; ?>">
                            <div class="index">
                                <p>1</p>
                            </div>
                            <div class="episode_right">
                                <div class="episode_number">
                                    <p>Episode: 1 </p>
                                </div>
                                <div class="episode_name">
                                    <p>Name: <?php echo $row['name'];?> </p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php
                        $sql2 = "SELECT * from episode where film_id = $filmid order by episode ASC";
                        $result2 = mysqli_query($conn,$sql2);
                        while( $row2 = mysqli_fetch_assoc($result2)){
                    ?>
                    <li class="container-fluid">
                        <a class="Episode_card" class="container-fluid" href="showepisode.php?id=<?php echo $row2["id"]; ?>">
                            <div class="index">
                                <p><?php echo $row2['episode'];?> </p>
                            </div>
                            <div class="episode_right">

                                <div class="episode_number">
                                    <p>Episode: <?php echo $row2['episode'];?> </p>
                                </div>
                                <div class="episode_name">
                                    <p>Name: <?php echo $row2['episode_name'];?> </p>
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
        <?php
        }
        ?>
        <video controls>
            <source src="../admin/video/<?php echo $row['link'] ?>" type="video/mp4">
        </video>
    </div>

    </html>
</body>
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
<?php
    } 
?>