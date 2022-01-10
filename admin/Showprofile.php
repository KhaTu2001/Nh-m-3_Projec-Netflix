<?php
    include('header.php');
    require('connect.php');

    if(isset($_GET["id"])){
        $userID = $_GET['id'];
    }
    $sql = "SELECT * FROM user WHERE id = $userID";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) == 0) { 
        echo "No required user";
    } else {
        $row = mysqli_fetch_assoc($result);
?>

<body style="background-image: url(image/slide-banner.jpg);">
    <?php
    include 'navbar.php';
?>
    <section>
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-12" style="margin-top:68px">
                        <div class="card-body text-center">
                            <form method="post" id="avata-admin" name="avata-admin" class="form-horizontal"
                                enctype="multipart/form-data" action="" role="form">
                                <?php
                            if(empty($row['avata_image'])){?>
                                <div id='img_div'><img src="image/avata_admin.jfif" alt=""></div>
                                <?php
                            }
                            else{?>
                                    <div id="img_div">
                                        <img src="image/<?php echo $row['avata_image']?>" alt="">
                                    </div>
                                <?php
    
                                   
                            }                                              
                            ?>
                                <style>
                                #img_div img {
                                    width: 200px;
                                    height: 200px;
                                    object-fit: cover;
                                    border-radius: 50%;
                                }
                                </style>
                                <h5 class="my-3"><?php echo $row['fullname']?></h5>
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Full name</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?php echo $row['fullname']?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">User Name</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?php echo $row['username']?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Email</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?php echo $row['email']?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Phone</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?php echo $row['phone']?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Gender</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?php echo $row['sex']?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    }
?>
<style>
    .container.py-3{
        
        max-width:650px;
    }
</style>
</body>

</html>