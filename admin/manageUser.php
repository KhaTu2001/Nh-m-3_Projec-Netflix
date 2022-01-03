<?php
    require('connect.php');
    include('header.php');
?>
<body style="background-image: url(image/slide-banner.jpg)">
<?php
    include 'navbar.php';
?>
<div class="slide-banner bg-img " >
        
       <div class="container">
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
                            $name = isset($_POST["user"]) ? $_POST["user"] : '';
                            
                            $sql = "SELECT * FROM user WHERE username LIKE '%{$name}%'";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) { ?>
                                <!-- output data of each row -->
                                <table class="table table-bordered  " >
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">full name</th>
                                            <th scope="col">User name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Number phone</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Action_edit</th>
                                            <th scope="col">Action_delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php while($row = mysqli_fetch_assoc($result)) {
                                    if ($row["usertype"] == 20){
                                    ?>
                                    <tr>
                                        <th> <?php echo $row["ID"] ?> </th>
                                        <th> <?php echo $row["fullname"] ?> </th>
                                        <th> <?php echo $row["username"] ?> </th>
                                        <th> <?php echo $row["email"] ?> </th>
                                        <th> <?php echo $row["phone"] ?> </th>
                                        <th> <?php echo $row["sex"] ?> </th>
                                        <td class="action_btn">
                                            <button type="button" class="btn btn-info" name="edit" onclick="edit(this)">Edit</button>
                                        </td>
                                        <td class="action_btn">
                                            <button type="button" class="btn btn-danger" name="delete" onclick="del(this)">Delete</button>
                                        </td>
                                    </tr>
                                <?php 
                                    } 
                                }
                            } else {
                                echo "No user like ".$name;
                            }
                        }
                            mysqli_close($conn);
                    ?>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function edit(params) {
                var tr = params.parentElement.parentElement;
                var td0= tr.cells.item(0).innerHTML;
                td0 = td0.replace(' ','' ); //id của user có space ???
                location.href= "editUser.php?id=" + td0;
        };
        function del(params) {
            if(confirm("Are you sure you want to delete this user?")){
                var tr = params.parentElement.parentElement;
                var td0= tr.cells.item(0).innerHTML;
                td0 = td0.replace(' ','' ); //id của user có space ???
                location.href= "deleteUser.php?id=" + td0;
            }
        };
        
    </script>
</body>
</html>
