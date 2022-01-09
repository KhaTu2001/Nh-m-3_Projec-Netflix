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
?>
<nav class="container-fluid navbar-header">
    <div class="header">
        <div class="container">
            <a href="main.php"><img id="logoNetflixback" src="../assets/img/Netflixblack.png" alt=""></a>
            <div class="menu-left">
                <ul>
                    <li><a href="main.php">Home</a></li>
                    <li><a href="">TV Shows</a></li>
                    <li><a href="">Movies</a></li>
                    <li><a href="">New & Popular</a></li>
                    <li><a href="my_list.php">My List</a></li>
                </ul>
            </div>
            <div class="menu-right">
                <ul>
                    <li>
                        <div class="menu-left-mobile">
                            <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown">Browser</a>
                                <div class="dropdown-menu">
                                    <a href="#">Home</a>
                                    <a href="#">TV Shows</a>
                                    <a href="#">Movies</a>
                                    <a href="#">New & Popular</a>
                                    <a href="my_list.php">My List</a>
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
                            <a class="btn btn-secondary dropdown-toggle" href="#" id="dropdownMenuLink"
                                data-bs-toggle="dropdown"><?php echo $rowUser['']; ?></a>
                            <div class="dropdown-menu">
                                <a href="profile.php">Account</a>
                                <a href="#">Help Center</a>
                                <a href="#">Sign out of Neflix</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<?php
}
?>
