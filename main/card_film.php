<div class="col-lg-2 col-md-4 col-sm-4 col-4">
    <form action="">
        <div class=" card" style="background-color:#000">
            <a href="showfilm.php?id=<?php echo $row['id']; ?>">
                <?php                    
                            echo "<div id='img_div'> ";
                            echo "<img class = 'img-fluid' src='../admin/image/".$row['image']."' >";
                            echo "</div>";          
                             
                        ?>
            </a>
            <style>
            #img_div img {
                height: 130px;
                width: 100%;
                object-fit: cover;
            }
            </style>
            </a>
            <div class="card-body ">
                <div class="card-body-item-left">
                    <div class="card-body-item first_child">
                        <a href="showfilm.php?id=<?php echo $row['id']; ?>"><i class="fas fa-play"></i></a>
                    </div>
                    <?php
                    $sqlList = "SELECT * from my_list where film_id =  $filmID ";
                    $resultList = mysqli_query($conn, $sqlList); 
                    if(mysqli_num_rows($resultList) > 0){ 
                    while($rowList = mysqli_fetch_assoc($resultList)){
            ?>
                    <div class="card-body-item"><a
                            href="option/remove_list-even.php?id=<?php echo $rowList['list_id']; ?>"><i
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
                    $sqlrate1 = "SELECT * from like_action where film_id =  $filmID and user_id = $user_id";
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
                    $sqlrate2 = "SELECT * from dislike where film_id =  $filmID and user_id = $user_id";
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
                <div class="card-body-item-right">
                    <div class="card-body-item">
                        <button type="button" class="btn btn-primary filminfo" data-id="<?php echo $filmID; ?>"
                            data-bs-toggle="modal" data-bs-target="#myModal">
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>