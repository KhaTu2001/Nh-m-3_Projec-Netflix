<div class="col-md-2 col-sm-4 col-4">
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
                    #img_div img{
                        height:130px;
                        width:100%;         
                        object-fit:cover;
                    }
                </style>
                </a>
            <div class="card-body">
                <div class="card-body-item-left">
                    <div class="card-body-item first_child"><a href="showfilm.php?id=<?php echo $row['id']; ?>"><i
                                class="fas fa-play"></i></a>
                    </div>
                    <?php
                    $sqlList = "SELECT * from my_list where film_id =  $filmID ";
                    $resultList = mysqli_query($conn, $sqlList); 
                    if(mysqli_num_rows($resultList) > 0){ 
                    while($rowList = mysqli_fetch_assoc($resultList)){
            ?>
                    <div class="card-body-item"><a href="remove_list-even.php?id=<?php echo $rowList['id']; ?>"><i
                                class="fas fa-check"></i></a>
                    </div>

                    <?php
                    
                }
            }

                else{?>
                    <div class="card-body-item">
                        <a href="add_list-even.php?id=<?php echo $row['id']; ?>">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                    <?php  }     ?>
                </div>
                <div class="card-body-item-right">
                    <div class="card-body-item">
                        <a href="remove_list-even.php?id=<?php echo $row['id']; ?>">
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>