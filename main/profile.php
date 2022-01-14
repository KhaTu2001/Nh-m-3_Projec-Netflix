<?php
    include('../Template/header.php');
?>
<link rel="stylesheet" href="../assets/css/style.css?v=<?php echo time(); ?>">

</head>
<?php 
    session_start();
    include 'connect.php' ;  
    if(isset( $_SESSION['isLoginOK'])){
        $link =  $_SESSION['isLoginOK'];
        $sqlUser = "SELECT * from user WHERE email = '$link'";
        $resultUser = mysqli_query($conn, $sqlUser);
        if(mysqli_num_rows($resultUser) > 0){
            while($rowUser = mysqli_fetch_assoc($resultUser)){          
            $user_id = $rowUser['ID'];
              }
        }
    }
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = mysqli_query($conn, $sql);   
    if (mysqli_num_rows($result) == 0) { 
        echo "No required user";
    } else {
        $row = mysqli_fetch_assoc($result);
?>

<body style="background-image: url(../assets/img/slide-banner.jpg);z-index:1000">
    <nav id="header" class=" navbar navbar-light p-0">
        <div class="container-fluid px-5 head">
            <a href="main.php" class="navbar-brand"> <svg viewBox="0 0 111 30" class="header_navbar--logo"
                    focusable="false">
                    <g id="netflix-logo">
                        <path
                            d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z"
                            id="Fill-14" fill="#e50914"></path>
                    </g>
                </svg></a>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $row['username'];  ?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="profile.php">Account</a></li>
                    <li><a class="dropdown-item" href="#">Help Center</a></li>
                    <li><a class="dropdown-item" href="#">Sign out of Neflix</a></li>
                </ul>
            </div>
            <style>
            #dropdownMenuButton1 {
                width: 180px;
            }

            .dropdown,
            #dropdownMenuButton1,
            .dropdown-menu {
                background-color: #000;
                border-radius: 12px;
            }

            .dropdown-item {
                color: #fff;

            }
            </style>
        </div>
    </nav>
    <div class="container back-to-help">
    </div>
    <div class="container py-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-12" style="margin-top:30px">
                    <div class="card-body text-center">
                        <form action="upload_avata.php" method="post" id="avata-admin" name="avata-admin"
                            class="form-horizontal" enctype="multipart/form-data" action="" role="form">
                            <input type="file" hidden name="image" id="Upload_avata">
                            <?php
                            if(empty($row['avata_image'])){?>
                            <label for="Upload_avata">
                                <div id='img_div'><img src="../assets/img/avata_admin.jfif" alt=""></div>
                            </label>
                            <?php
                            }
                            else{
                                echo "<label for='Upload_avata'>";
                                echo "<div id='img_div'> ";
                                echo "<img src='../admin/image/".$row['avata_image']."' >";
                                echo "</div>"; 
                                echo "</label>";    
                            }                                              
                            ?>

                            <div class="d-flex justify-content-center  align-items-center mb-2">
                                <label for="Upload_avata">
                                    <div class="upload_avata-profile">Chose your avata</div>
                                </label>
                                <button type="submit" class="btn btn-primary btn-md-10" id="button_post"
                                    name="button_post">Post your avata </button>
                                <a href="updateuser.php?id=<?php echo $user_id ?>" class="editicon">Edit profile</a>
                            </div>

                            <style>
                            #img_div img {
                                width: 200px;
                                height: 200px;
                                object-fit: cover;
                                border-radius: 50%;
                            }

                            .d-flex.justify-content-center {
                                margin-top: 48px;
                            }

                            .upload_avata-profile {
                                background-color: red;
                                color: #fff;
                                border-radius: 12px;
                                padding: 8px 12px;
                                margin-right: 12px;
                            }
                            .editicon {
                                text-decoration: none;
                                background-color: aqua;
                                margin-left: 10px;
                                width: 111px;
                                height: 38px;
                                border-radius: 5px;
                                padding: 8px 12px;
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
    <?php
    }
?>
    <style>
    .container.py-3 {
        height: 800px;
        max-width: 650px;
    }
    </style>
</body>

</html>