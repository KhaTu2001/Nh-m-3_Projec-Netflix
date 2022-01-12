<?php
    require('connect.php');
    $filmid = $_POST['filmid'];
    $sql = "SELECT * From film where id = $filmid";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
?>
<div class="container-fluid">
    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    <video class="container-fluid" autoplay muted loop id="myVideo">
        <source src="../admin/video/<?php echo $row['link'];  ?>" type="video/mp4">
    </video>
    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<!-- Modal body -->
<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-7">
            <div class="descreption">
                <h4>
                    description
                </h4>
                <?php echo $row['description'];  ?>
            </div>
        </div>
        <div class="col-md-5 col-sm-5">
            <div class="cast">
                <p>
                    <span>
                        Cast:
                    </span>
                    <?php echo $row['actor'];  ?>
                </p>
            </div>
            <div class="Genres">
                <p>
                    <span>
                        Genres:
                    </span>
                    <?php echo $row['category_id'];  ?>
                </p>
            </div>
        </div>
    </div>
</div>
<?php
$sql2 = "SELECT * from episode where film_id = $filmid" ;
$result2 = mysqli_query($conn,$sql2);
$numepisode = 1;
    if($row['type_movie'] == 1 && $result2){
        echo '<hr class="container-fluid">';
        echo '<h4>Episode:</h4>';
if(!empty($result2)){?>
<table>
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col" style="margin-left:-60px"></th>

        </tr>
    </thead>
    <?php
    
while($row2 = mysqli_fetch_array($result2)){
    $n=$numepisode +=1;
?>

    <tbody>

        <tr>
            <th> <a
                    href="showepisode.php?id=<?php echo $row2['id'] ; ?>"><?php echo "<img style='width:80px;' src='../admin/image/".$row['image']."' >"; ?></a>
            </th>
            <th>
                <div class="episode">

                    <?php echo "<p> <span>episode:</span>" .$n."</p>" ;
                 echo $row['description'];  ?>
                </div>
                <style>
                .episode {
                    display: flex;
                    flex-direction: column;
                }
                </style>
            </th>
        </tr>

    </tbody>

</table>
</div>
<?php
}
    }
    else{
        echo '<h3>NO EPISODE</h3>';
    }
}
?>
<hr class="container-fluid">
<h4>More like this:</h4>
<div class="container">

    <?php 
$category = $row['category_id'];
$sql1 = "SELECT * from film where category_id = $category" ;
$result1 = mysqli_query($conn,$sql1);
?>
    <div class="row">
        <?php
while($row1 = mysqli_fetch_array($result1)){
?>



        <?php                                  
            $filmID = $row1['id'];
            include 'card_film-model.php';              
        ?>
    </div>
    <?php
}
    ?>

</div>
<hr class="container-fluid">

<div class="container">

    <h3>
        About <?php echo $row['name'];  ?>
    </h3>
    <div class="cast">
        <p>
            <span>
                Cast:
            </span>
            <?php echo $row['actor'];  ?>
        </p>
    </div>
    <div class="Genres">
        <p>
            <span>
                Genres:
            </span>
            <?php echo $row['category_id'];  ?>
        </p>
    </div>
    <div class="country">
        <p>
            <span>
                Country:
            </span>
            <?php echo $row['nation_id'];  ?>
        </p>
    </div>
    <div class="diretor">
        <p>
            <span>
                Director:
            </span>
            <?php echo $row['director'];  ?>
        </p>
    </div>
    <div class="duration">
        <p>
            <span>
                Duration:
            </span>
            <?php echo $row['duration'];  ?> minute
        </p>
    </div>
    <div class="view">
        <p>
            <span>
                View:
            </span>
            <?php echo $row['num_view'];  ?> <i class="far fa-eye"></i>
        </p>
    </div>
</div>

</div>


<?php

    }
?>