<?php
    include '../Template/header.php';
?>
<link rel="stylesheet" href="main.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="../assets/css/minh.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="my_list-page">

        <?php
      include "navbar.php";
    ?>
        <div class="header_my-list container">
            <h3>My List</h3>
        </div>

        <script>
        var height = $('nav').height();
        $(window).scroll(function() {
            if ($(this).scrollTop() > height) {
                $('.header_my-list').addClass('sticky');
            } else {
                $('.header_my-list').removeClass('sticky');

            }
        });
        </script>
        <div class="container ">
            <div class="row">
                <?php
                    $sql = "SELECT * from my_list ";
                    $result = mysqli_query($conn, $sql); 
                    if(mysqli_num_rows($result) > 0){ 
                      $row = mysqli_fetch_assoc($result); 
                    $sql1=" SELECT * 
                            from (film inner join my_list on film.id = my_list.film_id)  inner join user on user.ID = my_list.user_id 
                            where user.ID =  $user_id ";
                $result1 = mysqli_query($conn, $sql1); 
                if(mysqli_num_rows($result1) > 0){ 
                while($rowfilm = mysqli_fetch_assoc($result1)){
                    $filmID = $rowfilm['id'];
            ?>
                <div class="col-md-2 col-sm-4 col-4">
                    <form>
                        <div class="card">
                            <a href="showfilm.php?id=<?php echo $rowfilm['id']; ?>">
                                <?php                    
                            echo "<div id='img_div'> ";
                            echo "<img class = 'img-fluid' src='../admin/image/".$rowfilm['image']."' >";
                            echo "</div>";           
                        ?>
                            </a>
                            <style>
                            #img_div img {
                                height: 130px;
                                width: 100%;
                                object-fit: cover;
                            }
                            </style>

                            <div class="card-body" style="justify-content: space-between;">
                                <div class="card-body-item-left">
                                    <div class="card-body-item first_child"><a
                                            href="showfilm.php?id=<?php echo $rowfilm['id']; ?>"><i
                                                class="fas fa-play"></i></a></div>
                                    <div class="card-body-item"><a
                                            href="option/remove_list-even.php?id=<?php echo $row['list_id']; ?>"><i
                                                class="fas fa-check"></i></a></div>

                                    <?php     
                                    $sqlrate1 = "SELECT * from like_action where film_id =  $filmID ";
                                    $resultrate1 = mysqli_query($conn, $sqlrate1); 
                                    if(mysqli_num_rows($resultrate1) > 0){ 
                                    while($rowrate = mysqli_fetch_assoc($resultrate1)){?>
                                    <div class="card-body-item"><a
                                            href="option/unlike.php?id=<?php echo $rowrate['like_id']?>"><i
                                                class="fas fa-thumbs-up"></i></a>

                                    </div>
                                    <?php
                                    }
                                }
                                else{?>
                                    <div class="card-body-item">
                                        <a href="option/like.php?id=<?php echo $rowfilm['id']; ?>">
                                            <i class="far fa-thumbs-up"></i>
                                        </a>
                                    </div>

                                    <?php   }
                                        $sqlrate2 = "SELECT * from dislike where film_id =  $filmID ";
                                        $resultrate2 = mysqli_query($conn, $sqlrate2); 
                                        if(mysqli_num_rows($resultrate2) > 0){ 
                                        while($rowrate = mysqli_fetch_assoc($resultrate2)){?>
                                    <div class="card-body-item"><a
                                            href="option/undislike.php?id=<?php echo $rowrate['dislike_id']?>"><i
                                                class="fas fa-thumbs-down"></i></a>
                                    </div>
                                    <?php
                                            }
                                        }
                                else {?>
                                    <div class="card-body-item">
                                        <a href="option/dislike.php?id=<?php echo $rowfilm['id']; ?>">
                                            <i class="far fa-thumbs-down"></i>
                                        </a>
                                    </div>
                                    <?php  }
                                
                                    ?>
                                </div>

                                <div class="card-body-item-right">
                                    <div class="card-body-item">
                                        <button type="button" class="btn btn-primary filminfo"
                                            data-id="<?php echo $rowfilm['id']; ?>" data-bs-toggle="modal"
                                            data-bs-target="#myModal">
                                            <i class="fas fa-chevron-down"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <?php
                        }
                    }      
                }
                    else{?>
                <div class="no_list">
                    <div class="row" style="flex:1;">
                        <div class="col-md-12 text-center" style="margin-top:50%">

                            <h4>You haven't added any titles to your list yet .</h4>

                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg  modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-6">
                <ul>
                    <li><a href="../footer/contactus.php">Questions? Contact us.</a></li>
                    <li><a href="../footer/FAQ.php">FAQ</a></li>
                    <li><a href="../footer/privacy.php">Privacy</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-6">
                <ul>
                    <li><a href="../footer/helpcenter.php">Help Center</a></li>
                    <li><a href="../footer/LegalNotices.php">Legal Notices</a></li>
                    <li><a href="../footer/termsofuse.php">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-6">
                <ul>
                    <li><a href="profile.php">Account</a></li>
                    <li><a href="../footer/way-match.php">Ways to Match</a></li>
                    <li><a href="../footer/corpinfo.php">Corporate Information</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>



</html>