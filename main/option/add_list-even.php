<?php
    session_start();
include 'connect.php' ; 
$filmid = $_GET["id"];
if(isset( $_SESSION['isLoginOK'])){
  $link =  $_SESSION['isLoginOK'];
  $sqlUser = "SELECT * from user WHERE email = '$link'";
  $resultUser = mysqli_query($conn, $sqlUser);
  if(mysqli_num_rows($resultUser) > 0){
	  while($rowUser = mysqli_fetch_assoc($resultUser)){
	
	$user_id = $rowUser['ID'];
	  }
}
$sql = "INSERT INTO my_list(user_id,film_id) values ($user_id,$filmid)";
$result = mysqli_query($conn, $sql);
if($result){?>
    <script>
        window.history.go(-1);
    </script>
<?php
}
else{
    ?>
    <script>
        alert("Insert film faild!");
    </script>
<?php
}
}
?>