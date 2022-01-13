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
        <?php if($row['type_movie'] == 1){
        $sql2 = "SELECT * from episode where film_id = $filmid order by episode ASC" ;
        $result2 = mysqli_query($conn,$sql2);
        $numepisode = 1;
        while($row2 = mysqli_fetch_array($result2)){
            $n=$numepisode +=1;
        ?>
        <a style="z-index:1000;position: fixed;"  class = "next_episode" href="showepisode.php?id=<?php echo $row2['id'] ; ?>"> <i
                class="fas fa-forward"></i> </a>
        <?php } 
    }?>
        <video controls>
            <source src="../admin/video/<?php echo $row['link'] ?>" type="video/mp4">
        </video>
    </div>

    </html>
</body>
<script>
function prev() {
    window.history.go(-1);
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