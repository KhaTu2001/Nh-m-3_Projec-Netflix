<?php
    require 'connect.php' ;
    include 'header.php';
?>
<body style="background-image: url(image/slide-banner.jpg)">
<?php
    include 'navbar.php';
?>
<div class="slide-banner bg-img " >
                <div class="container" style="max-width:900px;">
                    <form method="post" class="search_form">
                        <div class="row" id="search-user" style="flex-wrap: nowrap;">
                            <div style="width:70%">
                                <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search user" name="user">
                            </div>
                            <div style="width:30%">
                                <button class="btn btn-lg btn-primary" type="submit" name="button_search" style="width:100%">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            <div class="container" id="list-user">
                <div class="table_box">
                <div class="table_manage">
                    <!-- get from database -->
                    <?php
                        if(isset($_POST["button_search"])){
                            $qry = isset($_POST["qry"]) ? $_POST["qry"] : '';
                            $sql_name = "SELECT * FROM film WHERE name LIKE '%{$qry}%'";
                            $sql_director = "SELECT * FROM film WHERE director LIKE '%{$qry}%'";
                            $sql_actor = "SELECT * FROM film WHERE actor LIKE '%{$qry}%'";
                            $sql_description = "SELECT * FROM film WHERE description LIKE '%{$qry}%'";
                            $sql = $sql_name ." UNION ".$sql_director . " UNION ".$sql_actor. " UNION ". $sql_description;
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) { ?>
                                <!-- output data of each row -->
                                <table class="table table-bordered " >
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Name</th>                      
                                            <th scope="col">Director</th>
                                            <th scope="col">Actor</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Action_edit</th>
                                            <th scope="col">Action_delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php while($row = mysqli_fetch_assoc($result)) {  ?>
                                        <tr>
                                            <th> <?php echo $row["id"] ?> </th>
                                            <th>
                                                <?php
                                                    echo "<div id='img_div'> ";
                                                    echo "<img src='image/".$row['image']."' >";
                                                    echo "</div>";                                    
                                                ?></th>
                                            <th> <?php echo $row["name"] ?> </th>  
                                            <th> <?php echo $row["director"] ?> </th>
                                            <th> <?php echo $row["actor"] ?> </th>
                                            <th> <?php echo $row["description"] ?> </th>
                                            <th> <?php echo $row["author"] ?> </th>
                                            <td class="action_btn">
                                                <button type="button" class="btn btn-info" name="edit" onclick="edit(this)">Edit</button>
                                            </td>
                                            <td class="action_btn">
                                                <button type="button" class="btn btn-danger" name="delete" onclick="del(this)">Delete</button>
                                            </td>
                                        </tr>
                                <?php 
                                }
                            } else {
                                echo "No user like ".$qry;
                            }
                        }
                            mysqli_close($conn);
                    ?>
                        </tbody>
                        <style>
                            #img_div img{
                            width: 240px;
                            object-fit: cover;
                            
                                            }
                        </style>
                    </table>
                </div>
            </div>
        </div>
    </div>
    

    <script>
        function edit(params) {
                var tr = params.parentElement.parentElement;
                var td0= tr.cells.item(0).innerHTML;
                td0 = td0.replace(' ','' ); //id của user có space ???
                location.href= "editFilm.php?id=" + td0;
        };
        function del(params) {
            if(confirm("Are you sure you want to delete this movie?")){
                var tr = params.parentElement.parentElement;
                var td0= tr.cells.item(0).innerHTML;
                td0 = td0.replace(' ','' ); //id của user có space ???
                location.href= "deleteFilm.php?id=" + td0;
            }
        };
    </script>
    <?php
        include 'footer.php';
    ?>
</body>
</html>
