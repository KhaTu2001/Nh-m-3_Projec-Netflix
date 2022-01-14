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
        echo "No required Film";
    } 
    else {
        $row = mysqli_fetch_assoc($result);
        include 'navbar.php';
    ?>

    <div class="slide-banner bg-img ">

        <div class="container add_flim-form" id="post_film">
            <div class="row">
                <div id="edit-film" class="table_box">
                    <div class="tiltle_edit">
                        <h2>Edit Film</h2>
                    </div>
                    <form method="post" id="form-insert-film" name="form-insert-film" class="form-horizontal" action=""
                        role="form" enctype="multipart/form-data">

                        <div>
                            <label for="ID-film" class="container">
                                movie's ID
                            </label>
                            <div class="container">
                                <input type="text" class="form-control" id="ID-film" value="<?php echo $row["id"]; ?>"
                                    readonly>
                            </div>
                        </div>
                        <div>
                            <label for="film-name" class="container">
                                movie's name
                            </label>
                            <div class="container">
                                <input type="text" class="form-control" id="film-name" name="film-name"
                                    value="<?php echo $row["name"]; ?>">
                            </div>
                        </div>
                        <div>
                            <label for="film-link" class="container">
                                movie's link
                            </label>
                            <div class="container">
                                <input type="file" class="form-control" id="film_name" name="film_name"
                                    onchange="alertName1()" />
                                <input type="text" class="form-control" id="flim_link" name="link"
                                    value="<?php echo $row["link"]; ?>">
                                <script>
                                function alertName1() {
                                    var name = document.getElementById("film_name").value;
                                    var n = name.lastIndexOf('\\');
                                    var result = name.substring(n + 1);
                                    document.getElementById("flim_link").value = result;
                                }
                                </script>
                            </div>
                        </div>
                        <div>
                            <label for="trailer-link" class="container">
                                Trailer's link
                            </label>
                            <div class="container">
                                <input type="file" class="form-control" id="trailer_name" name="trailer_name"
                                    onchange="alertName2()" />
                                <input type="text" class="form-control" id="trailer_link" name="trailer"
                                    value="<?php echo $row["link"]; ?>">
                                <script>
                                function alertName2() {
                                    var name = document.getElementById("trailer_name").value;
                                    var n = name.lastIndexOf('\\');
                                    var result = name.substring(n + 1);
                                    document.getElementById("trailer_link").value = result;
                                }
                                </script>
                            </div>
                        </div>
                        <div>
                            <label for="image" class="container">
                                Image's Link
                            </label>
                            <div class="container">
                                <input type="file" class="form-control" name="image_name" id="image_name"
                                    onchange="alertName3()" />
                                <input type="text" class="form-control" id="image_link" name="image"
                                    value="<?php echo $row["image"]; ?>">
                                <script>
                                function alertName3() {
                                    var name = document.getElementById("image_name").value;
                                    var n = name.lastIndexOf('\\');
                                    var result = name.substring(n + 1);
                                    document.getElementById("image_link").value = result;
                                }
                                </script>
                            </div>
                        </div>
                        <div>
                            <label for="status" class="container">
                                Status
                            </label>
                            <div class="container">
                                <input type="text" class="form-control" id="status" name="status"
                                    value="<?php echo $row["status"]; ?>">
                            </div>
                        </div>
                        <div>
                            <label for="director" class="container">
                                Director
                            </label>
                            <div class="container">
                                <input type="text" class="form-control" id="director" name="director"
                                    value="<?php echo $row["director"]; ?>">
                            </div>
                        </div>
                        <div>
                            <label for="actor" class="container">
                                Actor
                            </label>
                            <div class="container">
                                <input type="text" class="form-control" id="actor" name="actor"
                                    value="<?php echo $row["actor"]; ?>">
                            </div>
                        </div>
                        <div class="container form_input">
                            <label for="category">
                                Category
                            </label>
                            <div>
                                <select id="category" name="category">
                                    <?php 
                                $sql1 = "SELECT * FROM category";
                                $result1 = mysqli_query($conn, $sql1);

                                if (mysqli_num_rows($result1) > 0) { 
                                    while($row1 = mysqli_fetch_assoc($result1)) { ?>
                                    <option value="<?php echo $row1["id_category"];?>"
                                        <?php echo ($row1["id_category"] == $row["category_id"]) ?  "selected": "" ?>>
                                        <?php echo $row1["name_category"];?>
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
                            <label for="type">
                                Type-movie
                            </label>
                            <div>
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
                            <label for="nation">
                                Nation
                            </label>
                            <div>
                                <select id="nation" name="nation">
                                    <?php 
                                $sql1 = "SELECT * FROM nation";
                                $result1 = mysqli_query($conn, $sql1);

                                if (mysqli_num_rows($result1) > 0) { 
                                    while($row1 = mysqli_fetch_assoc($result1)) { ?>
                                    <option value="<?php echo $row1["id"];?>"
                                        <?php echo ($row["nation_id"] == $row1["id"]) ?  "selected": "" ?>>
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
                        <div>
                            <label for="decription" class="container">
                                Release year
                            </label>
                            <div class="container">
                                <input type="text" class="form-control" id="year" name="year"
                                    value="<?php echo $row["release_year"]; ?>">
                                </input>
                            </div>

                        </div>

                        <div>
                            <label for="decription" class="container">
                                Decription
                            </label>
                            <div class="container">
                                <input type="text" class="form-control" name="decription" id="decription"
                                    value="<?php echo $row["description"]; ?>">
                                </input>
                            </div>

                        </div>
                        <div>
                            <label for="duration" class="container">
                                Duration (minute)
                            </label>
                            <div class="container">
                                <input type="number" class="form-control" id="duration" name="duration"
                                    value="<?php echo $row["duration"]; ?>">
                            </div>
                        </div>
                        <div>
                            <label for="author" class="container">
                                Author
                            </label>
                            <div class="container">
                                <input type="text" class="form-control" id="author" name="author"
                                    value="<?php echo $row["author"]; ?>">
                            </div>
                        </div>



                        <div class="container" style="margin:16px 0">

                            <button type="submit" class="btn btn-primary" id="button_update"
                                name="button_update">Save</button>

                        </div>
                    </form>

                </div>
            </div>
        </div>



        <?php
    
        require_once("connect.php");
        if(isset($_POST["button_update"])){
            $name = $_POST["film-name"];
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
            $image = $_POST["image"];
            $link_film = $_POST["link"];
            $trailer = $_POST["trailer"];
            $link_name = $_FILES["film_name"]['name'];
            $trailer_name = $_FILES["trailer_name"]['name'];
            $image_name = $_FILES["image_name"]['name'];
            $targetimg = "image/".basename($image_name);
            $targetlink = "video/".basename($link_name);
            $targettrailer = "video/".basename($trailer_name);

            if(!empty($image_name)){
                move_uploaded_file($_FILES['image_name']['tmp_name'], $targetimg);
            }
            elseif(!empty($link_name) ){
                move_uploaded_file($_FILES['film_name']['tmp_name'], $targetlink);
            }
            elseif(!empty($trailer_name) ){
                move_uploaded_file($_FILES['trailer_name']['tmp_name'], $targettrailer);
            }
            else{}
                $sql = "SELECT * FROM film WHERE id = '$filmID'";
                $check = mysqli_query($conn,$sql);
                if(mysqli_num_rows($check) <= 0){ ?>
        <script>
        alert('Film and ID <?php echo $filmID;?> does not exist');
        </script>";
        <?php
                }
                else{}
                    $sql = "UPDATE film SET 
                        name='$name',
                        status='$status', 
                        director='$director', 
                        actor='$actor', 
                        category_id='$category',
                        type_movie='$type_movie',
                        nation_id='$nation',
                        release_year = '$year',
                        image='$image',
                        description='$description',
                        duration='$duration',
                        link='$link_film',           
                        author='$author',
                        trailer='$trailer'
                        WHERE id = $filmID";
                        $result = mysqli_query($conn,$sql); 

                        if ($result){?>
        <script>
        alert("Edit film successfully!");
        location.href = "manageFilm.php";
        // location.href= window.location.href; reload page
        </script>
        <?php 
                        } 
                        else{ 
                        ?>
        <script>
        alert("Edit film fail!");
        -- >
        </script>
        <?php
                        }
                }
            
        
            
                mysqli_close($conn);
            }?>
</body>
</html>

        
    

