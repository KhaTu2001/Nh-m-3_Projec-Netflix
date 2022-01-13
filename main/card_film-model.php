<div class="col-lg-4 col-md-4 col-sm-6 col-6">
    <form action="">
        <div class=" card card-model" style="background-color:#000">
            <a href="showfilm.php?id=<?php echo $row1['id']; ?>">
                <?php                    
                            echo "<div id='img_div'> ";
                            echo "<img class = 'img-fluid' src='../admin/image/".$row1['image']."' >";
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
            <div class="card-body " style="display:block">
                <div class="container add_list">

                    <?php
        $sqlList1 = "SELECT * from my_list where film_id =  $filmID ";
        $resultList1 = mysqli_query($conn, $sqlList1); 
        if(mysqli_num_rows($resultList1) > 0){ 
        while($rowList1 = mysqli_fetch_assoc($resultList1)){
?>
                    <div class="card-body-item"><a
                            href="option/remove_list-even.php?id=<?php echo $rowList1['list_id']; ?>"><i
                                class="fas fa-check"></i></a>
                    </div>

                    <?php
        
    }
}
    else{?>
                    <div class="card-body-item">
                        <a href="option/add_list-even.php?id=<?php echo $row1['id']; ?>">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                    <?php  } 
    ?>
                   
                </div>
                <div class="descreption">
                        <h4>
                            Description:
                        </h4>
                        <?php echo $row1['description'];  ?>
                    </div>
            </div>

    </form>
</div>