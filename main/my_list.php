<?php
    include '../Template/header.php';
?>
<link rel="stylesheet" href="../assets/css/style.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="main.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="../assets/css/minh.css?v=<?php echo time(); ?>">
</head>
<body>
<div class="my_list-page">

    <?php
      include "navbar.php";
    ?>
        <div class="header_my-list container-fluid" >
            <div class=" container">
                <h3>My List</h3>
            </div>
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

        <?php     
    $sql = "SELECT * from my_list ";
    $result = mysqli_query($conn, $sql); 
    if(mysqli_num_rows($result) > 0){ 
      $row = mysqli_fetch_assoc($result);
      $UserID = $user_id;
?>
        <div class="container ">

            <div class="row" >
                <?php
            $sql1=" SELECT * 
                    from (film inner join my_list on film.id = my_list.film_id)  inner join user on user.ID = my_list.user_id 
                    where user.ID =  $UserID ";
            $result1 = mysqli_query($conn, $sql1); 
            if(mysqli_num_rows($result1) > 0){ 
            while($rowfilm = mysqli_fetch_assoc($result1)){
        ?>
                <div class="col-md-2 col-sm-4 col-4" >
                    <form>
                        <div class="card">
                            <div class="card-img-top">
                                <a href="showfilm.php?id=<?php echo $rowfilm['id']; ?>">
                                    <?php                    
                            echo "<div id='img_div'> ";
                            echo "<img src='../admin/image/".$rowfilm['image']."' >";
                            echo "</div>";           
                        ?>
                                </a>
                                <style>
                                #img_div img {
                                    height: 132px;
                                    width: 200px;
                                    object-fit: cover;
                                }
                                </style>
                            </div>
                            <div class="card-body">
                                <div class="card-body-item-left">
                                    <div class="card-body-item first_child"><a
                                            href="showfilm.php?id=<?php echo $rowfilm['id']; ?>"><i
                                                class="fas fa-play"></i></a></div>
                                    <div class="card-body-item"><a
                                            href="remove_list-even.php?id=<?php echo $row['id']; ?>"><i
                                                class="fas fa-check"></i></a></div>
                                </div>
                                <div class="card-body-item-right">
                                    <div class="card-body-item"><a
                                            href="remove_list-even.php?id=<?php echo $row['id']; ?>"><i
                                                class="fas fa-chevron-down"></i></a></div>
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
    </div>  

</body>
<footer>
    <div class="container">

        <div class="row">
            <div class="col-md-4 col-6">
                <ul>
                    <li><a href="contactus.php" class="question-contact">Questions? Contact us.</a></li>
                    <li><a href="FAQ.php">FAQ</a></li>
                    <li><a href="privacy.php">Privacy</a></li>

                </ul>
            </div>
            <div class="col-md-4 col-6">
                <ul>
                    <li><a href="helpcentre.php">Help Centre</a></li>
                    <li><a href="LegalNotices.php">Legal Notices</a></li>
                    <li><a href="termsofuse.php">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-6">
                <ul>
                    <li><a href="login.php">Account</a></li>
                    <li><a href="way-match.php">Ways to Match</a></li>
                    <li><a href="corpinfo.php">Corporate Information</a></li>

                </ul>
            </div>

        </div>
    </div>


</footer>
<script src="assets/js/main.js"></script>
<script src="assets/css/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</html>