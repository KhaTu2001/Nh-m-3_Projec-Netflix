<?php
    include 'header.php';
?>

<body>
    <?php
        include 'navbar.php';
      ?>
    <section style="background-image: url(image/slide-banner.jpg);">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <form action="upload_avata.php" method="post" id="avata-admin" name="avata-admin"
                                class="form-horizontal" enctype="multipart/form-data" action="" role="form">
                                <input type="file" hidden name="image" id="Upload_avata">
                                <?php
                            if(empty($rowAd['avata_image'])){?>
                                <div id='img_div'><img src="image/avata_admin.jfif" alt=""></div>
                                <?php
                            }
                            else{
                          
                                echo "<div id='img_div'> ";
                                echo "<img src='image/".$rowAd['avata_image']."' >";
                                echo "</div>"; 
                            }                                              
                            ?>
                                <style>
                                #img_div img {
                                    width: 380px;
                                    height: 380px;
                                    object-fit: cover;
                                    border-radius: 50%;
                                }
                                </style>
                                <h5 class="my-3"><?php echo $rowAd['fullname']?></h5>
                                <p class="text-muted mb-1">Full Stack Developer</p>
                                <div class="d-flex justify-content-center  align-items-center mb-2">
                                    <label for="Upload_avata">
                                        <div class="upload_avata-profile">Chose your avata</div>
                                    </label>
                                    <button type="submit" class="btn btn-primary btn-md-10" id="button_post"
                                        name="button_post">Post your avata </button>
                                </div>
                                <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                        <a href="editadmin.php?id=<?php echo $user_id ?>" style="color:#000;">Edit profile</a>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Most Viewed</h6>
                                        <p class="text-muted">Netflix</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $rowAd['fullname']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">User Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $rowAd['username']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $rowAd['email']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $rowAd['phone']?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Gender</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $rowAd['sex']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <div class="card mb-4 mb-md-0">
                                        <div class="card-body">
                                            <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span>
                                                Project Status</p>
                                            <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                            <div class="progress rounded" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 80%"
                                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                            <div class="progress rounded" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 72%"
                                                    aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                            <div class="progress rounded" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 89%"
                                                    aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                            <div class="progress rounded" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 55%"
                                                    aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                            <div class="progress rounded mb-2" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 66%"
                                                    aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>