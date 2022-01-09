<?php
    include 'header.php';
?>

<body style="background-image: url(image/slide-banner.jpg)">
   
	<?php
        require('connect.php');
        $sql = "SELECT id FROM film ";
        $result = mysqli_query($conn, $sql);
        include 'navbar.php';
    ?>
		
            
             <div class="slide-banner bg-img  ">
             
            <div class="container add_flim-form" id="post_film" >
                <div class="row">
                <div id="edit-film" class="table_box">
                <div class="text-center">
                    <h2>Add More Movie</h2>
                </div>
                <form method="post" id="form-insert-film" name="form-insert-film" class="form-horizontal" enctype="multipart/form-data" action="" role="form" >
                    <div >
                        <label for="film-name" class="container">
                            movie's name
                        </label>
                        <div class="container">
                            <input type="text" class="form-control" id="film-name" name="film-name">
                        </div>
                    </div>
                    <div >
                        <label for="film-link" class="container">
                            movie's link
                        </label>
                        <div class="container">
                            <input type="file" class="form-control" id="film-link" name="film-link">
                        </div>
                    </div>
                    <div >
                        <label for="image" class="container">
                            Image's Link
                        </label>
                        <div class="container">
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                    </div>
                   
                    <div >
                        <label for="status" class="container">
                            Status
                        </label>
                        <div class="container">
                            <input type="text" class="form-control" id="status" name="status">
                        </div>
                    </div>
                    <div >
                        <label for="director" class="container">
                            directors
                        </label>
                        <div class="container">
                            <input type="text" class="form-control" id="director" name="director">
                        </div>
                    </div>
                    <div >
                        <label for="actor" class="container">
                            Actor
                        </label>
                        <div class="container">
                            <input type="text" class="form-control" id="actor" name="actor">
                        </div>
                    </div>
                    <div class="container form_input">
                        <label for="category" >
                            Category
                        </label>
                        <div >
                            <select id="category" name="category">
                                <?php 
                                    $sql = "SELECT * FROM category";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) { 
                                        while($row = mysqli_fetch_assoc($result)) { ?>
                                        <option value="<?php echo $row["id_category"];?>">
                                            <?php echo $row["name_category"];?>
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
                            <select id="type" name="type_movie">
                                <option value="1">TV Shows</option>
                                <option value="2">Movies</option>
                                 <?php 
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
                                ?> 
                            </select>
                        </div>
                    </div>
                    <div class="container form_input">
                        <label for="nation" >
                            Nation
                        </label>
                        <div >
                            <select id="nation" name="nation">
                                <?php 
                                    $sql = "SELECT * FROM nation";
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
                                ?>
                            </select>
                        </div>
                    </div>
                    <div >
                        <label for="decription" class="container">
                            year
                        </label>
                        <div class="container">
                            <input type="text" class="form-control" id="year" name="year">
                        </div>
                    
                    </div>
                    <div >
                        <label for="decription" class="container">
                            Movie Description 
                        </label>
                        <div class="container">
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                    
                    </div>
                    <div >
                        <label for="duration" class="container">
                            Duration (minutes)
                        </label>
                        <div class="container">
                            <input type="number" class="form-control" id="duration" name="duration">
                        </div>
                    </div>
                    <div >
                        <label for="author" class="container">
                            Author
                        </label>
                        <div class="container">
                            <input type="text" class="form-control" id="author" name="author">
                        </div>
                    </div>
                        <div class="container">
                            <button type="submit" class="btn btn-primary btn-md-10" id="button_post" name="button_post">Post movie </button>
                        </div>
                </form>
                </div>
            </div>
        </div>
    
    </div>

    <?php
    if(isset($_POST["button_post"])){
        $name = $_POST["film-name"];
        $status = $_POST["status"];
        $director = $_POST["director"];
        $actor = $_POST["actor"];
        $category = $_POST["category"];
        $type_movie = $_POST["type_movie"];
        $nation = $_POST["nation"];
        $year = $_POST["year"];
        $conn_film = '';
        $description = $_POST["description"];
        $duration = $_POST["duration"];
        $author = $_POST["author"];
        $image = $_FILES['image']['name'];
        $targetimg = "image/".basename($image);   
        $link = $_FILES["film-link"]['name'];
        $targetimg = "image/".basename($image);
        $targetmp4 = "video/".basename($link);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetimg) && move_uploaded_file($_FILES['film-link']['tmp_name'], $targetmp4)) {
            $sql = "INSERT INTO film(name,status,director,actor,category_id,type_movie,nation_id,year,image,description,duration,link,author)            
            VALUES ('$name', '$status','$director','$actor','$category','$type_movie','$nation','$year','$image','$description','$duration','$link','$author')";
            $result = mysqli_query($conn,$sql);
            var_dump($result);
            if($result){?>
                <script>
                    alert("Insert film sucessfully!");
                </script>
            <?php
            } 
        }
        else{
            echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
            }
       
    }
    ?>
    </body>
    </html>
