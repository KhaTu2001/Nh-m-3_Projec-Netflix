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

</head>

<body class="main">
    <?php
		include 'navbar.php';
        $sql = "SELECT * from film ";
            $sqlMostview = "SELECT * from film";
            $result = mysqli_query($conn, $sql); 
            $resultMostview = mysqli_query($conn, $sqlMostview); 
            if(mysqli_num_rows($result) > 0){
            $num = 0;
            while( $row= mysqli_fetch_assoc($result)){    
                $view[$num]  = $row['num_view']; 
                $num+=1;      
            }
            while($rowMostview = mysqli_fetch_assoc($resultMostview)){    
            if($rowMostview['num_view'] == max($view)){  echo max($view);?>
    <div class="slider container-fluid">

        <video class="container-fluid" autoplay muted loop id="myVideo">
            <source src="../admin/video/<?php echo $rowMostview['link'];  ?>" type="video/mp4">
        </video>

        <div class="content">
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
       
                $sql1 = "SELECT * from film ";
                $sql2 = "SELECT * from film ";
                $sql3 = "SELECT * from film ";
                $sql4 = "SELECT * from film ";
                $result1 = mysqli_query($conn, $sql1); 
                $result2 = mysqli_query($conn, $sql2); 
                $result3 = mysqli_query($conn, $sql3); 
                $result4 = mysqli_query($conn, $sql4); 
             
            if(mysqli_num_rows($result1) > 0){
            ?>
    <div class="container ">
        <h3>Action</h3>
        <div class="row">
            <?php
            while($row = mysqli_fetch_assoc($result1) ){

                if( $row['category_id'] == 9  ){             
                    $filmID = $row['id'];
                    include 'card_film.php';
                }
        }   
                ?>
        </div>
        <h3>Narration</h3>
        <div class="row">
            <?php
            while($row = mysqli_fetch_assoc($result4 )){
                if( $row['category_id'] == 1  ){
                    $filmID = $row['id'];
                include 'card_film.php';
        }   
    }
                ?>
        </div>
    </div>
    <?php
            }
?>
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