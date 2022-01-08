<!-- <?php
	session_start();
	require('connect.php');
	if(isset( $_SESSION['isLoginOK'])){
	$link =  $_SESSION['isLoginOK'];
	$sql = "SELECT * from user WHERE email = '$link'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);
		$user_id = $row['id'];
	}

?> -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
	<title>Netflix</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../assets/css/minh.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
		integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
</head>
<body class="main" >
	<nav  class="container-fluid navbar-header">
	<div class="header">
		<div class="container">
				<a href="main.php"><img id="logoNetflixback" src="assets/img/Netflixblack.png" alt=""></a>
			<div class="menu-left">
				<ul>
					<li><a href="main.php">Home</a></li>
					<li><a href="">TV Shows</a></li>
					<li><a href="">Movies</a></li>
					<li><a href="">New & Popular</a></li>
					<li><a href="">My List</a></li>
				</ul>
			</div>
				<div class="menu-right">
						<ul>
							<li><div class="menu-left-mobile">
						<div class="dropdown">
							<a class="btn btn-secondary dropdown-toggle" href="#"  id="dropdownMenuLink" data-bs-toggle="dropdown" >Browser</a>
								<div class="dropdown-menu">
									<a href="#">Home</a>
									<a href="#">TV Shows</a>
									<a  href="#">Movies</a>
									<a href="">New & Popular</a>
									<a href="">My List</a>
								</div>
						</div>
				</div>
						</li>
							<li>
								<div id="container">
									<form role="search" method="get" id="searchform" action="">
										<label for="s">
										<i class="fas fa-search"></i>
										</label>
										<input type="text" value="" placeholder="Search..." class="" id="s" />
									</form>
								</div>
							</li>
							<li id="kids">Kids</li>
							<li id="DVD">DVD</li>
							<li><i id="bell" class="fas fa-bell"></i></li>
							<li class="user">
								<div class="dropdown">
									<a class="btn btn-secondary dropdown-toggle" href="#"  id="dropdownMenuLink" data-bs-toggle="dropdown" ><img id="img-user" src="assets/img/user.png" alt="" /></a>
									<div class="dropdown-menu">
										<a href="">Account</a>
										<a href="#">Help Center</a>
										<a  href="#">Sign out of Neflix</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
			</div>
	</div>
	</nav>
	<div class="slider">
		<video autoplay muted loop id="myVideo">
		<source src="assets/video/SPIDER-MAN_ NO WAY HOME - Official Trailer (HD).mp4" type="video/mp4">
		Your browser does not support HTML5 video.
		</video>
		<div class="content">
			<div class="container">
				<div class="slider-top">
					<div class="slider-bottom">
						<br>
						<h1 style="letter-spacing: 5px; margin-left: 10px; font-family: "Arial Black", Gadget, sans-serif;" >Spider man</h1>
						<h2>No Way Home(2021)</h2>
						<p>Lần đầu tiên trong lịch sử điện ảnh của Người Nhện, thân phận người hàng xóm thân thiện bị lật mở, khiến trách nhiệm làm một Siêu Anh Hùng xung đột với cuộc sống bình thường và đặt người anh quan tâm nhất vào tình thế nguy hiểm.
						</p>
						<div class="buttons">
							<button class="btn"><i class="fas fa-play"></i>Play</button>
							<button class="btn"><i class="fas fa-info-circle"></i>More Info</button>
					</div>
					</div>
					<div class="dropdown">
								<a class="btn btn-secondary dropdown-toggle" href="#"  id="dropdownMenuLink" data-bs-toggle="dropdown" >Genres</a>
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
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="category">
		
    	<!-- Swiper -->
		<div class="swiper mySwiper">
		<h2>Narration</h2>
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="assets/img/video_001.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_002.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_003.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_004.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_005.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_006.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_007.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_008.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_009.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_0010.jpg" alt=""></div>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>
	<div class="category">
		
    	<!-- Swiper -->
		<div class="swiper mySwiper">
		<h2>Comendy</h2>
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="assets/img/video_0010.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_003.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_002.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_006.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_005.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_004.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_009.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_008.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_007.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_001.jpg" alt=""></div>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>
	<div class="category">
		
    	<!-- Swiper -->
		<div class="swiper mySwiper">
		<h2>War</h2>
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="assets/img/video_0010.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_003.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_002.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_006.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_005.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_004.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_009.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_008.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_007.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_001.jpg" alt=""></div>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>

	<div class="category">
		
    	<!-- Swiper -->
		<div class="swiper mySwiper">
		<h2>Music</h2>
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="assets/img/video_0010.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_003.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_002.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_006.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_005.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_004.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_009.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_008.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_007.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_001.jpg" alt=""></div>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>

	<div class="category">
		
    	<!-- Swiper -->
		<div class="swiper mySwiper">
		<h2>Childrens</h2>
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="assets/img/video_0010.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_003.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_002.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_006.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_005.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_004.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_009.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_008.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_007.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_001.jpg" alt=""></div>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>
	<!-- mobile -->

	<div class="category">
    	<!-- Swiper -->
		<div class="swiper1 mySwiper">
		<h2>Narration</h2>
		<br>
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="assets/img/video_0010.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_003.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_002.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_006.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_005.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_004.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_009.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_008.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_007.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_001.jpg" alt=""></div>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>

	<div class="category">
    	<!-- Swiper -->
		<div class="swiper1 mySwiper">
			<h2>Comendy</h2>
			<br>
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="assets/img/video_0010.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_003.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_002.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_006.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_005.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_004.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_009.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_008.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_007.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_001.jpg" alt=""></div>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>

	<div class="category">
		
    	<!-- Swiper -->
		<div class="swiper1 mySwiper">
			<h2>War</h2>
			<br>
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="assets/img/video_0010.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_003.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_002.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_006.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_005.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_004.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_009.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_008.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_007.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_001.jpg" alt=""></div>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>

	<div class="category">
    	<!-- Swiper -->
		<div class="swiper1 mySwiper">
		<h2>Music</h2>
		<br>
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="assets/img/video_0010.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_003.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_002.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_006.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_005.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_004.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_009.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_008.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_007.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_001.jpg" alt=""></div>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>

	<div class="category">
    	<!-- Swiper -->
		<div class="swiper1 mySwiper">
			<h2>Cartoon</h2>
			<br>
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="assets/img/video_0010.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_003.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_002.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_006.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_005.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_004.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_009.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_008.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_007.jpg" alt=""></div>
				<div class="swiper-slide"><img src="assets/img/video_001.jpg" alt=""></div>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
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
			<script>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>