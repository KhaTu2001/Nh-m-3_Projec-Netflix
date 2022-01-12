<?php
    include 'header.php';  
?>
<body style="background-image: url(image/slide-banner.jpg)">
<?php
        include 'navbar.php';
?>
<div class="slide-banner bg-img ">
    <div class="container">
        <div class="row">
            <div id="edit-film" class="table_box">
                <div class="text-center">
                    <h2>Add More episodes</h2>
                </div>

                <form method="post" id="form-insert-film" name="form-insert-film" class="form-horizontal" enctype="multipart/form-data" action="" role="form" >
                    <div class ="container">
                        <label for="id_film" class="container">
                        Choose a movie
                        </label>
                        <div class="container">
                            <select id="id_film"  name="id_film" class="form-control">
                                <?php 
                                    $sql1 = "SELECT * FROM film";
                                    $result1 = mysqli_query($conn, $sql1);

                                    if (mysqli_num_rows($result1) > 0) { 
                                        while($row1 = mysqli_fetch_assoc($result1)) { ?>
                                        <option value="<?php echo $row1["id"];?>">
                                            <?php echo $row1["name"];?>
                                        </option>
                                    <?php 
                                        }
                                    }  
                                    else {?>
                                        <option value="-1">None</option>
                                    <?php }
                                    ?>
                            </select>
                        </div>
                    <div>
                        <label for="name_episode" class="container">
                            Name's Movie
                        </label>
                        <div class="container">
                            <input type="text" class="form-control" id="name_episode" value="" name="name_episode">
                        </div>
                    </div> 
                    <div>
                        <label for="name_episode" class="container">
                            Episode
                        </label>
                        <div class="container">
                            <input type="text" class="form-control" id="episode" value="" name="episode">
                        </div>
                    </div>
                    
                <div>
                        <label for="link" class="container">
                            Link's Movie
                        </label>
                        <div class="container">
                            <input type="file" class="form-control" id="video_link" name="video" >
                        </div>
                </div>
                
                    <div class="container">
                        <!-- <input class="btn btn-primary" type="submit" value="Post"> -->
                        <button type="submit" class="btn btn-primary" id="button_post" name="button_post">Add More episodes </button>
                    </div>                
            </form>
            <?php    
            include('connect.php');
            if(isset($_POST["button_post"])){
                $id_film = $_POST["id_film"];
                $name_episode = $_POST["name_episode"];
                $episode = $_POST["episode"];
                $content = $_FILES["video"]['name'];
                $target = "video/".basename($link);
                if (move_uploaded_file($_FILES['video']['tmp_name'], $target)){
                    $sql = "SELECT * FROM episode WHERE episode = $id_episode";
                    $result = mysqli_query($conn,$sql);
                    if (mysqli_num_rows($result)){?>
                        <script>
                            alert("This episode already has");
                        </script>
                    <?php
                    }
                    else {
                        $sql1 = "INSERT INTO episode(film_id,episode_name,content,episode)            
                            VALUES ('$id_film','$name_episode','$content','$episode')";
                        $result1 = mysqli_query($conn,$sql1);
                        if($result1){?>
                            <script>
                                alert("ADD successful episodes!");
                            </script>
                        <?php
                        } 
                        else { ?>
                            <script>
                                alert("Error adding episode"); 
                            </script>
                        <?php 
                    
                        }
                    }
                }
                else{
                    echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
                }
            }
            
            ?>
            </div>
            </div>

        </div>  
    </div>
    ?>
    </body>
    </html>

