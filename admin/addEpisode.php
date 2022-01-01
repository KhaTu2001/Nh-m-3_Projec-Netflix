<?php
    require('connect.php');
        include 'header.php';  
    ?>
<body>
<div class="slide-banner bg-img " style="background-image: url(image/slide-banner.jpg);height:100vh">
    <div class="container">
        <div class="row">
            <div id="edit-film" class="table_box">
                <div class="text-center">
                    <h2>Thêm tập phim</h2>
                </div>

                <form action="" method="post">
                    <div class ="container">
                        <label for="id_film" class="container">
                          Chọn phim 
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
                            <label for="ID-episode" class="container">
                                ID tập phim
                            </label>
                            <div class="container">
                                <input type="number" class="form-control" id="ID-episode" value="" name="id_episode">
                            </div>
                        </div>
                    <div>
                        <label for="name_episode" class="container">
                            Tên tập phim
                        </label>
                        <div class="container">
                            <input type="text" class="form-control" id="name_episode" value="" name="name_episode">
                        </div>
                    </div>
                <div>
                        <label for="link" class="container">
                            Link tập phim
                        </label>
                        <div class="container">
                            <input type="file" name="video_name" id="video_name" onchange="getlink()"/>
                            <input type="text" class="form-control" id="video_link" name="video" >
                            
                            <script>
                                function getlink() {
                                    var name =  document.getElementById("video_name").value;
                                    var n = name.lastIndexOf('\\'); 
                                    var result = name.substring(n + 1);
                                    document.getElementById("video_link").value = "images/video/" + result;
                                }
                            </script>
                        </div>
                </div>
                
                    <div class="container">
                        <!-- <input class="btn btn-primary" type="submit" value="Post"> -->
                        <button type="submit" class="btn btn-primary" id="button_post" name="button_post">Thêm tập phim </button>
                    </div>
                
            </form>

            <?php
            if(isset($_POST["button_post"])){
                $id_film = $_POST["id_film"];
                $id_episode = $_POST["id_episode"];
                $name_episode = $_POST["name_episode"];
                $content = $_POST["video"];

                $sql = "SELECT * FROM episode WHERE episode=". $id_episode;
                $result = mysqli_query($conn,$sql);
                if (mysqli_num_rows($result)){?>
                    <script>
                        alert("Tập phim này đã có");
                    </script>
                <?php
                }else {
                    $sql = "INSERT INTO episode(film_id,episode,episode_name,content)            
                        VALUES ('$id_film', '$id_episode','$name_episode','$content')";
                    $result = mysqli_query($conn,$sql);
                    if($result){?>
                        <script>
                            alert("Thêm tập phim thành công!");
                        </script>
                    <?php
                    } else { ?>
                        <script>
                            alert("Lỗi thêm tập phim"); -->
                        </script>
                    <?php 
                
                    }
                }
            }
            ?>
            </div>
            </div>

        </div>  
    </div>
    <?php
        include 'footer.php';
    ?>

