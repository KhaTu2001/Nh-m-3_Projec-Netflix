<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <title>Netflix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../assets/css/minh.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="main.css?v=<?php echo time(); ?>">
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/main.js"></script>

</head>
<body class="main">
    <?php
	include 'connect.php';
            $sql = "SELECT * from film where type_movie = 2";
            $result = mysqli_query($conn, $sql); 
            $sqlMostview = "SELECT * from film";
            $resultMostview = mysqli_query($conn, $sqlMostview); 
            if(mysqli_num_rows($result) > 0){
            $num = 0;
            $num2 = 0;
            while( $row= mysqli_fetch_assoc($result)){    
                $view[$num]  = $row['num_view']; 
                $num+=1;      
            }
            while($rowMostview = mysqli_fetch_assoc($resultMostview)){    
            if($rowMostview['num_view'] == max($view) && $num2<1){$num2 +=1; ?>
    <div class="slider container-fluid">
    
        <video class="container-fluid" autoplay muted loop id="myVideo">
            <source src="../admin/video/<?php echo $rowMostview['link'];  ?>" type="video/mp4">
        </video>

        <div class="content">
        <?php include 'navbar.php';?>
            <div class="container">
                <br>
                <h1><?php echo $rowMostview['name'];  ?> </h1>
                <p><?php echo $rowMostview['description'];  ?></p>
                <div class="buttons">
                    <button class="btn"><a href="showfilm.php?id=<?php echo $rowMostview['id']; ?>"><i
                                class="fas fa-play"></i>Play</a></button>
                    <button class="btn"><i class="fas fa-info-circle"></i>More Info</button>
                </div>

                <!-- <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" id="dropdownMenuLink"
                            data-bs-toggle="dropdown">Genres</a>
                        <div class="dropdown-menu">
                            <a href="">Narration</a>
                            <a href="">Comendy</a>
                            <a href="">War</a>
                            <a href="">Music</a>
                            <a href="">Childrens</a>
                            <a href="">Cartoon</a>
                            <a href="">Mythological</a>
                            <a href="">TV Show</a>
                            <a href="">Action</a>
                            <a href="">Adventure</a>
                            <a href="">Fiction</a>
                            <a href="">Movie Secrets</a>
                            <a href="">Martial Arts Film</a>
                            <a href="">Horror Movie</a>
                            <a href="">Vietnamese Comedy</a>
                            <a href="">Psychological</a>
                            <a href="">Criminal</a>
                            <a href="">Documentary</a>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
    <?php 
    }
}
}
                $sql123 = "SELECT * from film where type_movie = 2";
                $result123 = mysqli_query($conn, $sql123); 
                $sql1 = "SELECT * from film where type_movie = 2";
                $sql2 = "SELECT * from film where type_movie = 2";
                $sql3 = "SELECT * from film where type_movie = 2";
                $sql4 = "SELECT * from film where type_movie = 2";
                $sql5 = "SELECT * from film where type_movie = 2";
                $sql6 = "SELECT * from film where type_movie = 2";
                $sql7 = "SELECT * from film where type_movie = 2";
                $sql8 = "SELECT * from film where type_movie = 2";
                $sql9 = "SELECT * from film where type_movie = 2";
                $sql10 = "SELECT * from film where type_movie = 2";
                $sql11 = "SELECT * from film where type_movie = 2";
                $sql12 = "SELECT * from film where type_movie = 2";
                $sql13 = "SELECT * from film where type_movie = 2";
                $sql14 = "SELECT * from film where type_movie = 2";
                $sql15 = "SELECT * from film where type_movie = 2";
                $sql16 = "SELECT * from film where type_movie = 2";
                $result1 = mysqli_query($conn, $sql1); 
                $result2 = mysqli_query($conn, $sql2); 
                $result3 = mysqli_query($conn, $sql3); 
                $result4 = mysqli_query($conn, $sql4); 
                $result5 = mysqli_query($conn, $sql5); 
                $result6 = mysqli_query($conn, $sql6); 
                $result7 = mysqli_query($conn, $sql7); 
                $result8 = mysqli_query($conn, $sql8); 
                $result9 = mysqli_query($conn, $sql9); 
                $result10 = mysqli_query($conn, $sql10); 
                $result11 = mysqli_query($conn, $sql11); 
                $result12 = mysqli_query($conn, $sql12); 
                $result13 = mysqli_query($conn, $sql13); 
                $result14 = mysqli_query($conn, $sql14); 
                $result15 = mysqli_query($conn, $sql15); 
                $result16 = mysqli_query($conn, $sql16); 
        
include 'list_film.php'; 
?>
<div class="modal" id="myModal">
        <div class="modal-dialog modal-lg  modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                </div>

            </div>
        </div>
    </div>
    <div class="footer">
        <div class="social">
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
        </div>
        <div class="flex">
            <div class="info">
                <ul>
                    <li><a href="#">Questions? Contact us.</a></li>
                    <li><a href="FAQ.php">FAQ</a></li>
                    <li><a href="privacy.php">Privacy</a></li>
                </ul>
            </div>
            <div class="info">
                <ul>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Legal Notices</a></li>
                    <li><a href="#">Terms of Use</a></li>
                </ul>
            </div>
            <div class="info">
                <ul>
                    <li><a href="#">Account</a></li>
                    <li><a href="way-match.php">Ways to Match</a></li>
                    <li><a href="corpinfo.php">Corporate Information</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript">
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 5,
        spaceBetween: 10,
        slidesPerGroup: 2,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    var swiper = new Swiper(".swiper1", {
        slidesPerView: 2,
        spaceBetween: 10,
        slidesPerGroup: 2,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>