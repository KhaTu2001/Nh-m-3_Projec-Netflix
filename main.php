<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Netflix</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/minh.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
		integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
</head>
<body class="main-demo" >
	<div style="height: 600px;
	  background-image: linear-gradient(
			to bottom,
			rgba(0, 0, 0, 0.8) 0%,
			rgba(0, 0, 0, 0.2) 20%,
			rgba(20, 20, 20, 0.2) 80%,
			rgba(20, 20, 20, 1) 100%
		),
		url(assets/img/poster.jpg);
	background-size: cover;
	padding: 4px 12px 12px;" class="container-fluid ">
		<div class="hero">
			<div class="header">
				<div class="logo">
					<a href="index.html">
					<img src="assets/img/netflix-logo-2-1.png" alt="" />
					</a>
				</div>
				<div class="menu">
					<div class="menu-left">
						<ul>
							<li><a href="">Home</a></li>
							<li><a href="">TV Shows</a></li>
							<li><a href="">Movies</a></li>
							<li><a href="">New & Popular</a></li>
							<li><a href="">My list</a></li>
						</ul>
					</div>
					<div class="menu-right">
						<ul>
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
							<li>Kids</li>
							<li>DVD</li>
							<li><i class="fas fa-bell"></i></li>
							<li class="user">
								<img src="assets/img/user.png" alt="" />
								<div class="dropdown">
									<a class="btn btn-secondary dropdown-toggle" href="#"  id="dropdownMenuLink" data-bs-toggle="dropdown" ></a>
									<div class="dropdown-menu">
										<a href="#">Account</a>
										<a href="#">Help Center</a>
										<a  href="#">Sign out of Neflix</a>
									</div>
								  </div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="banner">
			<video width="640" height="480" controls posster="images/poster.png">

					<source src="admin/video/dhruv - double take (Official Audio).mp4" type="video/mp4">

					<source src="freehostpage.ogg" type="video/ogg">
			</video>
			<!-- <div>
<button onclick="playPause();">Play/Pause</button>
<button onclick="size250();">250</button>
<button onclick="size400();">400</button>
<button onclick="size550();">550</button>
</div>
<video id="myvideo" width="250">
      <source id="mp4" src="http://media.w3.org/2010/05/sintel/trailer.mp4" type="video/mp4"></source>
      <source id="webm" src="http://media.w3.org/2010/05/sintel/trailer.webm" type="video/webm"></source>
      <source id="ogv" src="http://media.w3.org/2010/05/sintel/trailer.ogv" type="video/ogg"></source>
</video>
<script type="text/javascript">
var video = document.getElementById("myvideo");
function playPause()
{ 
if (video.paused) 
video.play(); 
else 
video.pause(); 
}

function size250()
{video.width = 250;}

function size400()
{video.width = 400;}

function size550()
{video.width = 550;} 
</script>   -->
				<span class="subtitle">
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum cumque
					voluptatum ut placeat maiores! Minus quo
				</span>
				<div class="buttons">
					<button class="btn"><i class="fas fa-play"></i>Assistir</button>
					<button class="btn"><i class="fas fa-plus"></i>Minha lista</button>
				</div>
			</div>
			<div class="category">
				<span>Recomendados</span>
				<div id="carouselExampleControls" class="carousel slide" name="carousel-slide" data-bs-ride="carousel">
					<div class="carousel-inner">
					  <div class="carousel-item active">
						<div class="row">
							<div class="col-md-2">
								<img class="" src="assets/img/video_001.jpg" alt="">
							</div>
							<div class="col-md-2">
								<img src="assets/img/video_002.jpg" alt="">
							</div>
							<div class="col-md-2">
								<img src="assets/img/video_003.jpg" alt="">
							</div>
							<div class="col-md-2">
								<img src="assets/img/video_004.jpg" alt="">
							</div>
							<div class="col-md-2">
								<img src="assets/img/video_005.jpg" alt="">
							</div>
							<div class="col-md-2">
								<img src="assets/img/video_001.jpg" alt="">
							</div>
						</div>
					  </div>
					  <div class="carousel-item">
						<div class="row">
							<div class="col-md-2">
								<img class="" src="assets/img/video_001.jpg" alt="">
							</div>
							<div class="col-md-2">
								<img src="assets/img/video_002.jpg" alt="">
							</div>
							<div class="col-md-2">
								<img src="assets/img/video_003.jpg" alt="">
							</div>
							<div class="col-md-2">
								<img src="assets/img/video_004.jpg" alt="">
							</div>
							<div class="col-md-2">
								<img src="assets/img/video_005.jpg" alt="">
							</div>
							<div class="col-md-2">
								<img src="assets/img/video_001.jpg" alt="">
							</div>
						</div>
					  </div>
					  <div class="carousel-item">
						<div class="row">
							<div class="col-md-2">
								<img class="" src="assets/img/video_001.jpg" alt="">
							</div>
							<div class="col-md-2">
								<img src="assets/img/video_002.jpg" alt="">
							</div>
							<div class="col-md-2">
								<img src="assets/img/video_003.jpg" alt="">
							</div>
							<div class="col-md-2">
								<img src="assets/img/video_004.jpg" alt="">
							</div>
							<div class="col-md-2">
								<img src="assets/img/video_005.jpg" alt="">
							</div>
							<div class="col-md-2">
								<img src="assets/img/video_001.jpg" alt="">
							</div>
						</div>
					  </div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
					  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					  <span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
					  <span class="carousel-control-next-icon" aria-hidden="true"></span>
					  <span class="visually-hidden">Next</span>
					</button>
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
							<li><a href="">Questions? Contact us.</a></li>
							<li><a href="">FAQ</a></li>
							<li><a href="">Privacy</a></li>
						</ul>
					</div>
					<div class="info">
						<ul>
							<li><a href="">Help Center</a></li>
							<li><a href="">Legal Notices</a></li>
							<li><a href="">Terms of Use</a></li>
						</ul>
					</div>
					<div class="info">
						<ul>
							<li><a href="">Account</a></li>
							<li><a href="">Ways to Match</a></li>
							<li><a href="">Corporate Information</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>
</body>

</html>