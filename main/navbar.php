<?php
    session_start();
include 'connect.php' ;  
if(isset( $_SESSION['isLoginOK'])){
  $link =  $_SESSION['isLoginOK'];
  $sqlUser = "SELECT * from user WHERE email = '$link'";
  $resultUser = mysqli_query($conn, $sqlUser);
  if(mysqli_num_rows($resultUser) > 0){
	$rowUser = mysqli_fetch_assoc($resultUser);
	
	$user_id = $rowUser['ID'];
	  
  }
?>
<nav class="container-fluid navbar-header">
    <div class="header">
        <div class="container">
            <a href="main.php"><img id="logoNetflixback" src="../assets/img/Netflixblack.png" alt=""></a>
            <div class="menu-left">
                <ul>
                    <li><a href="main.php">Home</a></li>
                    <li><a href="TVShows.php">TV Shows</a></li>
                    <li><a href="movies.php">Movies</a></li>
                    <li><a href="popular.php">Popular</a></li>
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
                                    <a href="TVShows.php">TV Shows</a>
                                    <a href="movies.php">Movies</a>
                                    <a href="popular.php">Popular</a>
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
                            <div style="background-color: #fff; display: flex;" id="searchresult"></div>
                        </div>
                    </li>
                    <li class="user">
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" id="dropdownMenuLink"
                                data-bs-toggle="dropdown"><?php echo $rowUser['username']; ?></a>
                            <div class="dropdown-menu" style = "z-index:1000;">
                                <a href="profile.php?id=<?php echo $user_id ?>">Account</a>
                                <a href="../footer/helpcenter.php">Help Center</a>
                                <a href="../logout.php">Sign out of Neflix</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<script>
   // search
        $(document).ready(function(){
            $("#s").keyup(function(){

                var input = $(this).val();
                // alert(input);

                if(input != ""){
                    $.ajax({

                        url:"livesearch.php",
                        method: "POST",
                        data:{input:input},

                        success: function(data){
                            $("#searchresult").html(data);
                        }
                            
                    })
                }else{

                    $("#searchresult").css("display","none");
                }
            });
        });
</script>
<?php
}
  }
}else{
    header("location:../login.php");
}
        ?>
