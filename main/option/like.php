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
$sql1 = "SELECT * from dislike where user_id = $user_id and film_id=$filmid";
$result1 = mysqli_query($conn, $sql1);
if(empty($result1)){
    $sql = "INSERT INTO like_action (user_id,film_id) values ($user_id,$filmid)";
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
else{
    $sql = "DELETE from dislike where  user_id = $user_id and film_id=$filmid";
    if (mysqli_query($conn, $sql)) {
        $sql1 = "INSERT INTO like_action (user_id,film_id) values ($user_id,$filmid)";
        $result1 = mysqli_query($conn, $sql1);
        if($result1){?>
        <script>
        window.history.go(-1);
        </script>
        <?php
        }
        else{?>
            <script>
            alert("Insert film faild!");
            </script>
            <?php
        }      

    }
    else{?>
        <script>
        alert("delete film faild!");
        </script>
        <?php
        }
}
}
?>