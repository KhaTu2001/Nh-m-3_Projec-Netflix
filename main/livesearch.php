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
                <div class="img-fuild">
                <img style="margin-right: 10px; height: 90px; width:70px" src="<?php echo '../admin/image/'.$row['image']; ?>" alt="">
                </div>
                <div class="text-livesearch">
                    <p  style="color: #000; font-size: 20px; margin-top:20px; "><?php echo $row['name'];?></p>
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