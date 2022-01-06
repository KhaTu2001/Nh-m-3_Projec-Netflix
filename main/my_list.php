<?php
    include '../Template/header.php';
?>
    <link rel="stylesheet" href="../assets/css/style.css?v=<?php echo time(); ?>">
    </head>
    <body>  
    <div class="my_list-page ">
    <div class="header_my-list container">
        <h3>My List</h4>
    </div>
    
    
<?php 
    // include 'navbar.php';
    include 'connect.php' ;
    $sql = "SELECT * from my_list ";
    $result = mysqli_query($conn, $sql); 
    if(mysqli_num_rows($result) > 0){ 
      $row = mysqli_fetch_assoc($result);
      $filmID = $row['film_id'];
?>

<div class="container ">

    <div class="row">
        <?php
            $sql1 = "SELECT * from film where id =  $filmID ";
            $result1 = mysqli_query($conn, $sql1); 
            if(mysqli_num_rows($result1) > 0){ 
            while($rowfilm = mysqli_fetch_assoc($result1)){
        ?>
        <div class="col-md-2">
            <form >
                <div class="card">
                    <div class="card-img-top">
                        <?php                    
                            echo "<div > ";
                            echo "<img id='img_div' src='admin/image/".$rowfilm['image']."' >";
                            echo "</div>";           
                        ?>
                    </div>
                    <div class="card-body-film">
                      <div class="card-body-item-left">
                        <div class="card-body-item"><a href="remove_list-even.php?id=<?php echo $row['id']; ?>"><i class="fas fa-play"></i></a></div>
                        <div class="card-body-item"><a href="remove_list-even.php?id=<?php echo $row['id']; ?>"><i class="fas fa-check"></i></a></div>
                        <div class="card-body-item"><a href="remove_list-even.php?id=<?php echo $row['id']; ?>"><i class="fas fa-thumbs-up"></i></a></div>
                        <div class="card-body-item"><a href="remove_list-even.php?id=<?php echo $row['id']; ?>"><i class="fas fa-thumbs-down"></i></a></div>               
                      </div>
                      <div class="card-body-item-right">

                        <div class="card-body-item"><a href="remove_list-even.php?id=<?php echo $row['id']; ?>"><i class="fas fa-chevron-down"></i></a></div>
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
                  <div class="col-md-12 text-center" style="margin-top:50%" >
        
                    <h4>You haven't added any titles to your list yet .</h4>
            
                  </div>
                </div>
              </div>
          <?php
          }
       ?>
    </div>
</div>
<style>
    #img_div {
        height: 132px   ;
        object-fit:cover;
    }
</style>
</div>
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
<?php          
    include '../Template/footer.php';
?>