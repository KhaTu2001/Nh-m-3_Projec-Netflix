<?php
    include 'header.php';  
?>

<body style="background-image: url(image/slide-banner.jpg)">

    <?php
    require('connect.php');
    if(isset($_GET["id"])){
        $episode_id = $_GET['id'];
    }
    $sql = "SELECT * FROM episode WHERE id = '$episode_id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 0) { 
        echo "No required Episode";
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
                        <h2>Edit Episode</h2>
                    </div>
                    <form method="post" id="form-insert-film" name="form-insert-film" class="form-horizontal" action=""
                        role="form" enctype="multipart/form-data">
                        <div>
                            <label for="ID-film" class="container">
                                Episode's ID
                            </label>
                            <div class="container">
                                <input type="text" class="form-control" id="ID_episode"
                                    value="<?php echo $row["id"]; ?>" readonly>
                            </div>
                        </div>
                        <div class="container form_input">
                            <label for="film_id">
                                film_id
                            </label>
                            <div>
                                <select id="film_id" name="film_id">
                                    <?php 
                                $sql1 = "SELECT * FROM film";
                                $result1 = mysqli_query($conn, $sql1);

                                if (mysqli_num_rows($result1) > 0) { 
                                    while($row1 = mysqli_fetch_assoc($result1)) { ?>
                                    <option value="<?php echo $row1["id"];?>"
                                        <?php echo ($row1["id"] == $row["film_id"]) ?  "selected": "" ?>>
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
                        <div>
                            <label for="film-name" class="container">
                                Episode's name
                            </label>
                            <div class="container">
                                <input type="text" class="form-control" id="episode_name" name="episode_name"
                                    value="<?php echo $row["episode_name"]; ?>">
                            </div>
                        </div>
                        <div>
                            <label for="film-link" class="container">
                                Episode's link
                            </label>
                            <div class="container">
                                <input type="file" class="form-control" id="film_name" name="film_name"
                                    onchange="alertName1()" />
                                <input type="text" class="form-control" id="flim_link" name="link"
                                    value="<?php echo $row["content"]; ?>">
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
                            <label for="status" class="container">
                                Episode
                            </label>
                            <div class="container">
                                <input type="text" class="form-control" id="episode" name="episode"
                                    value="<?php echo $row["episode"]; ?>">
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
            $name = $_POST["episode_name"];
            $film_id = $_POST["film_id"];
            $episode = $_POST["episode"];
            $link_name = $_FILES["film_name"]['name'];     
            $targetlink = "video/".basename($link_name);       
            if(!empty($link_name) ){
                move_uploaded_file($_FILES['film_name']['tmp_name'], $targetlink);
            }
            else{}
                $sql = "SELECT * FROM episode WHERE id = '$episode_id'";
                $check = mysqli_query($conn,$sql);
                if(mysqli_num_rows($check) <= 0){ ?>
        <script>
        alert('Episode and ID <?php echo $episode_id;?> does not exist');
        </script>";
        <?php
                }
                else{}
                    $sql = "UPDATE episode SET 
                        film_id='$film_id',    
                        episode_name='$name',                                     
                        content='$link_name',           
                        episode='$episode'                    
                        WHERE id = $episode_id";
                        $result = mysqli_query($conn,$sql); 

                        if ($result){?>
        <script>
        alert("Edit Episode successfully!");
        location.href = "manageEpisode.php";
        // location.href= window.location.href; reload page
        </script>
        <?php 
                        } 
                        else{ 
                        ?>
        <script>
        alert("Edit Episode fail!");
        </script>
        <?php
                        }
                }
            
        

                mysqli_close($conn);
            }
    ?>
</body>

</html>