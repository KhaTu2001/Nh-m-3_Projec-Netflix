<?php
    include 'header.php';  
?>
<body style="background-image: url(image/slide-banner.jpg)">

    <?php
    require('connect.php');
    if(isset($_GET["id"])){
        $filmID = $_GET['id'];
    }
    $sql = "SELECT * FROM film WHERE id = '$filmID'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) == 0) { 
        echo "No required user";
    } 
    else {
        $row = mysqli_fetch_assoc($result);
        include 'navbar.php';
    ?>

    <div class="slide-banner bg-img " >
             
             <div class="container add_flim-form" id="post_film" >
                 <div class="row">
                 <div id="edit-film" class="table_box"> 
                     <div class="tiltle_edit">
                <h2>Chỉnh sửa film</h2>
            </div>
            <form method="post" id="form-insert-film" name="form-insert-film" class="form-horizontal" action="" role="form" enctype="multipart/form-data">

                <div>
                    <label for="ID-film" class="container">
                        movie's ID
                    </label>
                    <div class="container">
                        <input type="text" class="form-control" id="ID-film" value="<?php echo $row["id"]; ?>" readonly>
                    </div>
                </div>
                <div>
                    <label for="film-name" class="container">
                        movie's name
                    </label>
                    <div class="container">
                        <input type="text" class="form-control" id="film-name" name="film-name" value="<?php echo $row["name"]; ?>">
                    </div>
                </div>
                <div >
                        <label for="film-link" class="container">
                            movie's link
                        </label>
                        <div class="container">
                            <input type="text" class="form-control" id="film-link" name="film-link">
                        </div>
                    </div>
                    <div >
                        <label for="trailer-link" class="container">
                            Trailer's link
                        </label>
                        <div class="container">
                            <input type="text" class="form-control" id="trailer-link" name="trailer-link">
                        </div>
                    </div>
                <div>
                    <label for="status" class="container">
                        Status
                    </label>
                    <div class="container">
                        <input type="text" class="form-control" id="status" name="status" value="<?php echo $row["status"]; ?>">
                    </div>
                </div>
                <div>
                    <label for="director" class="container">
                        Director
                    </label>
                    <div class="container">
                        <input type="text" class="form-control" id="director" name="director" value="<?php echo $row["director"]; ?>">
                    </div>
                </div>
                <div>
                    <label for="actor" class="container">
                        Actor
                    </label>
                    <div class="container">
                        <input type="text" class="form-control" id="actor" name="actor" value="<?php echo $row["actor"]; ?>">
                    </div>
                </div>
                <div class="container form_input">
                    <label for="category">
                        Category 
                    </label>
                    <div >
                        <select id="category" name="category">
                            <?php 
                                $sql1 = "SELECT * FROM category";
                                $result1 = mysqli_query($conn, $sql1);

                                if (mysqli_num_rows($result1) > 0) { 
                                    while($row1 = mysqli_fetch_assoc($result1)) { ?>
                                    <option value="<?php echo $row1["id"];?>" <?php echo ($row1["id"] == $row["category_id"]) ?  "selected": "" ?> >
                                        <?php echo $row1["name"];?>
                                    </option>
                            <?php 
                                    }
                                    
                                }  
                                else {
                                    echo "No catagory";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="container form_input">
                    <label for="type" >
                        Type-movie 
                    </label>
                    <div >
                        <select id="type" name="type_movie" >
                            <option value="1" <?php echo ($row["category_id"] == 1) ?  "selected": "" ?>>Single-movie</option>
                            <option value="2" <?php echo ($row["category_id"] == 2) ?  "selected": "" ?>>series-movie</option>
                            <option value="3" <?php echo ($row["category_id"] == 3) ?  "selected": "" ?>>theater-movie</option>
                            
                            <!-- <?php 
                                $sql = "SELECT * FROM type_movie";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) { 
                                    while($row = mysqli_fetch_assoc($result)) { ?>
                                    <option value="<?php echo $row["id"];?>">
                                        <?php echo $row["name"];?>
                                    </option>
                            <?php 
                                    }
                                }  
                                else {
                                    echo "No nation";
                                }
                            ?> -->
                        </select>
                    </div>
                </div>
                <div class="container form_input">
                    <label for="nation" >
                        Nation
                    </label>
                    <div >
                        <select id="nation" name="nation" >
                            <?php 
                                $sql1 = "SELECT * FROM nation";
                                $result1 = mysqli_query($conn, $sql1);

                                if (mysqli_num_rows($result1) > 0) { 
                                    while($row1 = mysqli_fetch_assoc($result1)) { ?>
                                    <option value="<?php echo $row1["id"];?>" <?php echo ($row["nation_id"] == $row1["id"]) ?  "selected": "" ?>>
                                        <?php echo $row1["name"];?>
                                    </option>
                            <?php 
                                    }
                                }  
                                else {
                                    echo "No nation";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="container form_input">
                    <label for="year" >
                        Release year
                    </label>
                    <div >
                        <select id="year" name="year" id="year" >
                            <option value="2015" <?php echo ($row["year"] == 2015) ?  "selected": "" ?>>2015</option>
                            <option value="2016" <?php echo ($row["year"] == 2016) ?  "selected": "" ?>>2016</option>
                            <option value="2017" <?php echo ($row["year"] == 2017) ?  "selected": "" ?>>2017</option>
                            <option value="2018" <?php echo ($row["year"] == 2018) ?  "selected": "" ?>>2018</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="image" class="container">
                        Image's Link 
                    </label>
                    <div class="container">
                        <input type="file" name="image" id="image">
                    </div>
                </div>
                <div>
                    <label for="decription" class="container">
                        Decription 
                    </label>
                    <div class="container">
                        <input type="text" class="form-control" name="decription" id="decription"  ><?php echo $row["description"]; ?></input>
                    </div>
                
                </div>
                <div>
                    <label for="duration" class="container">
                        Duration (minute)
                    </label>
                    <div class="container">
                        <input type="number" class="form-control" id="duration" name="duration" value="<?php echo $row["duration"]; ?>">
                    </div>
                </div>
                <div>
                    <label for="author" class="container">
                        Author
                    </label>
                    <div class="container">
                        <input type="text" class="form-control" id="author" name="author" value="<?php echo $row["author"]; ?>">
                    </div>
                </div>


               
                    <div class="container" style="margin:16px 0">
                    
                        <button type="submit" class="btn btn-primary" id="button_update" name="button_update">Save</button>
             
                </div>
            </form>
            
            </div>  
        </div>
    </div>

   
   
    <?php
    
        require_once("connect.php");
        if(isset($_POST["button_update"])){
            $name = $_POST["film-name"];
            $link = $_POST["film-link"];
            $trailer = $_POST["trailer-link"];
            $status = $_POST["status"];
            $director = $_POST["director"];
            $actor = $_POST["actor"];
            $category = $_POST["category"];
            $type_movie = $_POST["type_movie"];
            $nation = $_POST["nation"];
            $year = $_POST["year"];
            $conn_film = '';
            $description = $_POST["decription"];
            $duration = $_POST["duration"];
            $author = $_POST["author"];
            $image = $_FILES['image']['name'];
            $target = "image/".basename($image);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $sql = "SELECT * FROM film WHERE ID = '$filmID'";
                $check = mysqli_query($conn,$sql);
                if(mysqli_num_rows($check) <= 0){ ?>
                    <script>
                        alert('Film and ID <?php echo $filmID;?> does not exist');
                    </script>";
                    <?php
                }
                else{
                    $sql = "UPDATE film SET 
                        name='$name',
                        status='$status', 
                        director='$director', 
                        actor='$actor', 
                        category_id='$category',
                        type_movie='$type_movie',
                        nation_id='$nation',
                        image='$image',
                        description='$description',
                        duration='$duration',
                        link='$link',           
                        author='$author',
                        trailer_link='$trailer'
                        WHERE id = $filmID";
                        $result = mysqli_query($conn,$sql); 

                        if ($result){?>
                            <script>
                                alert("Edit film successfully!");
                                location.href="manageFilm.php";
                                // location.href= window.location.href; reload page
                            </script>
                        <?php 
                        } 
                        else{ 
                        ?>
                            <script>
                                alert("Edit film fail!"); -->
                            </script>
                        <?php
                        }
                    }
                }
            else{
                echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
                }
            //thực hiện việc lưu trữ dữ liệu vào db 
           
        }
    }
        mysqli_close($conn);
    ?>

</body>
</html>

        
    


