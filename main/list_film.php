<?php
                if(mysqli_num_rows($result123) > 0){             
                    ?>
<div class="container ">
    <?php 
            
            $number1 = 0;
            $number2 = 0;
            $number3 = 0;
            $number4 = 0;
            $number5 = 0;
            $number6 = 0;
            $number7 = 0;
            $number8 = 0;
            $number9 = 0;
            $number10 = 0;
            $number11 = 0;
            $number12 = 0;
            $number13 = 0;
            $number14 = 0;
            $number15 = 0;
            $number16 = 0;

    ?>
    <div class="row">
        <?php
            while($row = mysqli_fetch_assoc($result1) ){
                if($row['category_id'] == 1 && $number1<1){echo "<h3>Narration</h3>" ; $number1+=1;}
                if( $row['category_id'] == 1  ){   
                   
                    $filmID = $row['id'];
                    include 'card_film.php';
                
                
        }  } 
                ?>
    </div>
    <div class="row">
        <?php
            while($row = mysqli_fetch_assoc($result2 )){
                if($row['category_id'] == 2&& $number2<1){echo "<h3>Comendy</h3>" ;$number2+=1;}
                if( $row['category_id'] == 2  ){
                    $filmID = $row['id'];
                include 'card_film.php';
        }  
     
    }
                ?>
    </div>
    <div class="row">
        <?php
            while($row = mysqli_fetch_assoc($result3) ){
                if($row['category_id'] == 3&& $number3<1){echo "<h3>War</h3>" ;$number3+=1;}
                if( $row['category_id'] == 3  ){             
                    $filmID = $row['id'];
                    include 'card_film.php';
                }
                
                
        }   
                ?>
    </div>
    <div class="row">
        <?php
            while($row = mysqli_fetch_assoc($result4 )){
                if($row['category_id'] == 4 && $number4<1){echo "<h3>Music</h3>" ;$number4+=1;}
                if( $row['category_id'] == 4  ){
                    $filmID = $row['id'];
                include 'card_film.php';
         
    }
}
                ?>
    </div>
   
    <div class="row">
        <?php
            while($row = mysqli_fetch_assoc($result5) ){
                if($row['category_id'] == 5&& $number5<1){echo "<h3>Childrens</h3>" ;$number5+=1;}
                if( $row['category_id'] == 5  ){             
                    $filmID = $row['id'];
                    include 'card_film.php';
                }
                
                    
                
        }   
                ?>
    </div>
    <div class="row">
        <?php
            while($row = mysqli_fetch_assoc($result6 )){
                if($row['category_id'] == 6&& $number6<1){echo "<h3>Cartoon</h3>" ;$number6+=1;}
                if( $row['category_id'] == 6  ){
                    $filmID = $row['id'];
                include 'card_film.php';
        }   
    }
                ?>
    </div>
    <div class="row">
        <?php
            while($row = mysqli_fetch_assoc($result7) ){
                if($row['category_id'] == 7&& $number7<1){echo "<h3>Mythological</h3>" ;$number7+=1;}

                if( $row['category_id'] == 7  ){             
                    $filmID = $row['id'];
                    include 'card_film.php';
                }
               
                    
                
        }   
                ?>
    </div>
    <div class="row">
        <?php
            while($row = mysqli_fetch_assoc($result8 )){
                if($row['category_id'] == 8 && $number2<1){echo "<h3>Documentary</h3>" ;$number2+=1;}
                if( $row['category_id'] == 8  ){
                    $filmID = $row['id'];
                include 'card_film.php';
        }   
    }
                ?>
    </div>
    <div class="row">
        <?php
            while($row = mysqli_fetch_assoc($result9) ){
                if($row['category_id'] == 9&& $number9<1){echo "<h3>Action</h3>" ;$number9+=1;}

                if( $row['category_id'] == 9  ){             
                    $filmID = $row['id'];
                    include 'card_film.php';
                }
               
                    
                
        }   
                ?>
    </div>
    <div class="row">
        <?php
            while($row = mysqli_fetch_assoc($result10 )){
                if($row['category_id'] == 10&& $number10<1){echo "<h3>Adventure</h3>" ;$number10+=1;}
                if( $row['category_id'] == 10  ){
                    $filmID = $row['id'];
                include 'card_film.php';
        }   
    }
                ?>
    </div>
    <div class="row">
        <?php
            while($row = mysqli_fetch_assoc($result11) ){
                if($row['category_id'] == 11&& $number11<1){echo "<h3>Fiction</h3>" ;$number11+=1;}
                if( $row['category_id'] == 11  ){             
                    $filmID = $row['id'];
                    include 'card_film.php';
                }
               
                    
                
        }   
                ?>
    </div>
    <div class="row">
        <?php
            while($row = mysqli_fetch_assoc($result12 )){
                if($row['category_id'] == 12&& $number12<1){echo "<h3>Movie Secrets</h3>" ;$number12+=1;}
                if( $row['category_id'] == 12  ){
                    $filmID = $row['id'];
                include 'card_film.php';
        }   
    }
                ?>
    </div>
    <div class="row">
        <?php
            while($row = mysqli_fetch_assoc($result13) ){
                if($row['category_id'] == 13&& $number13<1){echo "<h3>Martial Arts Film</h3>" ;$number13+=1;}
                if( $row['category_id'] == 13  ){             
                    $filmID = $row['id'];
                    include 'card_film.php';
                }
               
                }
           
                ?>
    </div>
    <div class="row">
        <?php
            while($row = mysqli_fetch_assoc($result14 )){
                if($row['category_id'] == 14&& $number14<1){echo "<h3>Horror Movie</h3>" ;$number14+=1;}
                if( $row['category_id'] == 14  ){
                    $filmID = $row['id'];
                include 'card_film.php';
        }   }
    
                ?>
    </div>
    <div class="row">
        <?php
            while($row = mysqli_fetch_assoc($result15) ){
                if($row['category_id'] == 15&& $number15<1){echo "<h3>Criminal</h3>" ;$number15+=1;}
                if( $row['category_id'] == 15  ){             
                    $filmID = $row['id'];
                    include 'card_film.php';
                }
               
                    
                }
           
                ?>
    </div>
    <div class="row">
        <?php
            while($row = mysqli_fetch_assoc($result16 )){
                if($row['category_id'] == 16&& $number16<1){echo "<h3>Psychological</h3>" ;$number16+=1;}
                if( $row['category_id'] == 16  ){
                    $filmID = $row['id'];
                include 'card_film.php';
        }   }
    
                ?>
    </div>
   
</div>
<?php
                }
                ?>