
<?php
    include 'header.php';
?>

<body style="background-image: url(image/slide-banner.jpg);height: 100vh;">
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
                    </div>
                </div>
            </div>
   
    </div>
    
</body>
</html>
