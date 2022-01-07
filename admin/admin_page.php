
<?php
    include 'header.php';
?>

<body style="background-image: url(image/slide-banner.jpg);height: 100vh;overflow-y: hidden;">
    <div class="wrapper">

    <?php
        include 'navbar.php';
        
    ?>
            <div class="layer">
                <div class="row" > 
                    <div class="col-md-12 text-center" style = "margin-top:80px" >
                        <h1>Welcome Admin <?php echo $rowAd['username'] ; ?></h1>
                        <h3>What do you want to do today?</h3>
                        <h2>Get ready for a long day of work!!!</h2>
                    <?php $_SESSION['userid'] = $rowAd['ID'] ;?>
                    <div class="avata_admin">
                    <form  action="upload_avata.php"method="post" id="avata-admin" name="avata-admin" class="form-horizontal" enctype="multipart/form-data" action="" role="form" >
                            <input type="file" hidden name="image" id="Upload_avata">
                            <?php
                            if(empty($rowAd['avata_image'])){?>
                                <label for="Upload_avata"> 
                                    <div id='img_div'><img  src="image/avata_admin.jfif" alt=""></div>   
                                </label>
                            <?php
                            }
                            else{
                                echo "<label for='Upload_avata'>";
                                echo "<div id='img_div'> ";
                                echo "<img src='image/".$rowAd['avata_image']."' >";
                                echo "</div>"; 
                                echo "</label>";    
                            }                                              
                            ?>           
                        <style>
                            #img_div img{
                                width:300px;
                                height:300px;
                                object-fit:cover;
                                border-radius:50%;
                            }
                            
                        </style>
                        
                        <div class="container">
                                <button type="submit" class="btn btn-primary btn-md-10" id="button_post" name="button_post">Post your avata </button>
                           
                        </div>
                        
                     </form>
     
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
