<?php
session_start();
    include 'header.php';
?>

<body>

	<?php
        require('connect.php');
        $sql = "SELECT id FROM film ";
        $result = mysqli_query($conn, $sql);
    ?>
		<div id="wrapper">
            <?php
                include("common.php");
            ?>
             <div class="slide-banner bg-img " style="background-image: url(asset/images/slide-banner.jpg);">
             
            <div class="container add_flim-form" id="post_film" style="padding: 0 15%">
                
                <form method="post" id="form-insert-film" name="form-insert-film" class="form-horizontal" action="" role="form" >
                    <div>
                        <label for="film-name" class="col-md-2">
                            Tên phim
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="film-name" name="film-name">
                        </div>
                    </div>
                   
                    <div>
                        <label for="status" class="col-md-2">
                            Trạng thái
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="status" name="status">
                        </div>
                    </div>
                    <div>
                        <label for="director" class="col-md-2">
                            Đạo diễn
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="director" name="director">
                        </div>
                    </div>
                    <div>
                        <label for="actor" class="col-md-2">
                            Diễn viên
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="actor" name="actor">
                        </div>
                    </div>
                    <div>
                        <label for="category" class="col-md-2">
                            Thể loại
                        </label>
                        <div class="col-md-10">
                            <select id="category" style="color: black" name="category">
                                <?php 
                                    $sql = "SELECT * FROM category";
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
                                        echo "No catagory";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="type" class="col-md-2">
                            Type-movie 
                        </label>
                        <div class="col-md-10">
                            <select id="type" style="color: black" name="type_movie">
                                <option value="1">Phim lẻ</option>
                                <option value="2">Phim bộ</option>
                                <option value="3">Phim rạp</option>
                                
                                
                                
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
                    <div>
                        <label for="nation" class="col-md-2">
                            Quốc gia
                        </label>
                        <div class="col-md-10">
                            <select id="nation" style="color: black" name="nation">
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
                    <div>
                        <label for="year" class="col-md-2">
                            Năm phát hành
                        </label>
                        <div class="col-md-9">
                            <select id="year" name="year" id="year" style="color: black">
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="image" class="col-md-2">
                        Link ảnh 
                        </label>
                        <div class="col-md-9">
                            <input type="file" name="image_name" id="image_name" onchange="alertName()"/>
                            <input type="text" class="form-control" id="image_link" name="image" >
                            <script>
                                function alertName() {
                                    var name =  document.getElementById("image_name").value;
                                    var n = name.lastIndexOf('\\'); 
                                    var result = name.substring(n + 1);
                                    document.getElementById("image_link").value = "image/" + result;
                                }
                            </script>
                        </div>
                    </div>
                    <div>
                        <label for="decription" class="col-md-2">
                        Mô tả phim 
                        </label>
                        <div class="col-md-9" style="color: black">
                            <textarea name="decription" id="decription" cols="82" rows="10"></textarea>
                        </div>
                    
                    </div>
                    <div>
                        <label for="duration" class="col-md-2">
                        Thời lượng (phút)
                        </label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" id="duration" name="duration">
                        </div>
                    </div>
                    <div>
                        <label for="author" class="col-md-2">
                        Tác giả
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="author" name="author">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <!-- <input class="btn btn-primary" type="submit" value="Post"> -->
                            <button type="submit" class="btn btn-primary" id="button_post" name="button_post">Đăng phim </button>
                        </div>
                    </div>
                </form>

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
        $conn_image = $_POST["image"];
        $conn_film = '';
        $description = $_POST["decription"];
        $duration = $_POST["duration"];
        $author = $_POST["author"];
       
        $sql = "INSERT INTO film(name,status,director,actor,category_id,type_movie,nation_id,year,image,description,duration,author)            
            VALUES ('$name', '$status','$director','$actor','$category','$type_movie','$nation','$year','$conn_image','$description','$duration','$author')";
        $result = mysqli_query($conn,$sql);
        var_dump($result);
        if($result){?>
            <script>
                alert("Insert film sucessfully!");
            </script>
        <?php
        } else { ?>
            <script>
                alert("Add film fail!"); -->
            </script>
        <?php }
    }
    ?>

    <?php
        include 'footer.php';
    ?>
