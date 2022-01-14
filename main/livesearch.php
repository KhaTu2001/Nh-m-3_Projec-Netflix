<?php

include_once ('./connect.php');
if(isset($_POST['input'])){

    $input = $_POST['input'];

    $query = "SELECT * FROM film WHERE name LIKE '{$input}%'";

    $result = mysqli_query($conn,$query);

    if (mysqli_num_rows($result) > 0){

        while ($row = mysqli_fetch_array($result)) {
            $id=$row['id'];
            $name= $row['name'];
            $img=$row['image'];
            $actor=$row['actor'];
        ?>
        <a  style="color:while; text-decoration: none;" href="showfilm.php?id=<?php echo $row['id'];?>">
            <div style="display: flex;" class="searchresult_item">
                <img style="margin-right: 10px; height: 80px; width:60px" src="<?php echo '../assets/img/video_001.jpg' ?>" alt="">
                <div class="text-livesearch">
                    <p  style="color: #000; font-size:20px; "><?php echo $row['name'];?></p>
                    <p style=" color: #000; font-size:15px; "><?php echo 'Actor:'.$row['actor']; ?></p>
                </div>
            </div>       

        </a>
            
      <?php      
        }
    }else{
        echo "<h6 class='text-danger text-center mt-3'>No data Found</h6>";
    }
}

?>