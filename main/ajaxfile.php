<?php
    require('connect.php');
    $filmid = $_POST['filmid'];
    $sql = "SELECT * From film where id = $filmid";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
$nationid = $row['nation_id'];
$categoryid = $row['category_id'];
$sqlnation = "SELECT * from nation where id = $nationid" ;
$resultnation = mysqli_query($conn,$sqlnation);
$rownation  = mysqli_fetch_array($resultnation);
$sqlcategory = "SELECT * from category where id_category= $categoryid" ;
$resultcategory = mysqli_query($conn,$sqlcategory);
$rowcategory  = mysqli_fetch_array($resultcategory);
?>
<div class="container-fluid modal_all-body">
    <video class="container-fluid" style="" autoplay muted loop id="myVideo">
        <source src="../admin/video/<?php echo $row['trailer'];  ?>" type="video/mp4">
    </video>
    <div class="modal-function">
        <div class="btn-show"><a href="showfilm.php?id=<?php echo $row['id']; ?>"><i class="fas fa-play"></i>PLAY</a>
        </div>
        <?php           $filmID = $row['id'];
                            $sqlList = "SELECT * from my_list where film_id =  $filmID ";
                            $resultList = mysqli_query($conn, $sqlList); 
                            if(mysqli_num_rows($resultList) > 0){ 
                            while($rowList = mysqli_fetch_assoc($resultList)){
                    ?>
        <div class="card-body-item"><a href="option/remove_list-even.php?id=<?php echo $rowList['list_id']; ?>"><i
                    class="fas fa-check"></i></a>
        </div>

        <?php
                            
                        }
                    }
        
                        else{?>
        <div class="card-body-item">
            <a href="option/add_list-even.php?id=<?php echo $row['id']; ?>">
                <i class="fas fa-plus"></i>
            </a>
        </div>
        <?php  }     
                            $sqlrate1 = "SELECT * from like_action where film_id =  $filmID ";
                            $resultrate1 = mysqli_query($conn, $sqlrate1); 
                            if(mysqli_num_rows($resultrate1) > 0){ 
                            while($rowrate = mysqli_fetch_assoc($resultrate1)){?>
        <div class="card-body-item"><a href="option/unlike.php?id=<?php echo $rowrate['like_id']?>"><i
                    class="fas fa-thumbs-up"></i></a>

        </div>
        <?php
                            }
                        }
                        else{?>
        <div class="card-body-item">
            <a href="option/like.php?id=<?php echo $row['id']; ?>">
                <i class="far fa-thumbs-up"></i>
            </a>
        </div>

        <?php   }
                            $sqlrate2 = "SELECT * from dislike where film_id =  $filmID ";
                            $resultrate2 = mysqli_query($conn, $sqlrate2); 
                            if(mysqli_num_rows($resultrate2) > 0){ 
                            while($rowrate = mysqli_fetch_assoc($resultrate2)){?>
        <div class="card-body-item"><a href="option/undislike.php?id=<?php echo $rowrate['dislike_id']?>"><i
                    class="fas fa-thumbs-down"></i></a>
        </div>
        <?php
                                }
                            }
                        else {?>
        <div class="card-body-item">
            <a href="option/dislike.php?id=<?php echo $row['id']; ?>">
                <i class="far fa-thumbs-down"></i>
            </a>
        </div>

        <?php  }
                            ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-7 col-7">
            <div class="descreption">
                <h4>
                    Description:
                </h4>
                <?php echo $row['description'];  ?>
            </div>
        </div>
        <div class="col-md-5 col-sm-5 col-5">
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
                    <?php echo $rowcategory['name_category'];  ?>
                </p>
            </div>
        </div>
    </div>
</div>
<?php
$sql2 = "SELECT * from episode where film_id = $filmid order by episode ASC" ;
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
            <th> <a href="showepisode.php?id=<?php echo $row2['id'] ; ?>">
                    <?php echo "<img style='width:80px;' src='../admin/image/".$row['image']."' >"; ?></a>
            </th>
            <th>
                <div class="episode">

                    <?php echo "<p> <span>episode:</span>" .$n."</p>" ;
                 echo $row2['episode_name'];  ?>
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
            <?php echo $rowcategory['name_category'];  ?>
        </p>
    </div>
    <div class="country">
        <p>
            <span>
                Country:
            </span>
            <?php echo $rownation['name'];  ?>
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
            <?php echo $row['num_view'];?> 
            <i class="fas fa-eye"></i>
        </p>
    </div>
</div>

</div>


<?php

    }
?>