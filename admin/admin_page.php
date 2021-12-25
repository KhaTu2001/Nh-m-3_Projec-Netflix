<?php
  
    include 'header.php';
?>
<main>

  <div class="slide-banner bg-img "
    style="background-image: url(slide-banner.jpg); height: 100vh;">
      
        <div class="container-fluid admin_box">
          
            <div class="container admin_table-top">
              
              <div>
                    <a class="btn btn_add-film" href="add_lilm.php">Add</a>
              </div>
              <h4 style="margin-left:80px" class="text-center  mt-5">Manage movie stores on Netflix</h5>
            </div>
          
          <div class="container admin_table page" style="scrollbar-width: thin" >
            
              
          <table class="table table-bordered table-hover">
            
          <thead>
                <tr>
                      <th scope="col">Movie code</th>
                      <th scope="col">Movie name</th>
                      <th scope="col">Image</th>
                      <th scope="col">Movie Link</th>
                      <th scope="col">Country</th>
                      <th scope="col">Genre</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th> 
                </tr>
          </thead>
          <tbody>
              
              <?php
                  include 'connect.php';
                  $sql = "SELECT movie.id_movie,movie.name_movie, movie.image, movie.link,movie.name_country,movie.name_genre
                          from movie";
                  $result = mysqli_query($conn,$sql);
                  if(mysqli_num_rows($result)>0){
                              while($row = mysqli_fetch_assoc($result)){
              ?>
                  <tr>
                          <th  scope="row"><?php echo $row['id_movie']; ?></th>
                          <td style = "width:150px;"><?php echo $row['name_movie']; ?></td>
                          <td style = "width:320px"><?php     
                          
                          echo "<div id='img_div'>";
                          echo "<img  src='photo/".$row['image']."' >";
                          echo "</div>";
                          
                          ?></td>
                          <td style = "width:300px"><?php echo $row['link']; ?></td>
                          <td style = "width:150px"><?php echo $row['name_country'];?></td>
                          <td style = "width:150px"><?php echo $row['name_genre']; ?></td>
                          <td style = "width:70px"><a href="update_film.php?id=<?php echo $row['id_movie']; ?>"><i class="fas fa-edit"></i></a></td>
                          <td style = "width:70px"><a href="delete_film.php?id=<?php echo $row['id_movie']; ?>"><i class="far fa-trash-alt"></i></a></td>
                    </tr>
                <?php
                        }
                    }
                    mysqli_close($conn);
                ?>
          </tbody>
          </table>
  
        </div>
      </div>
    
    </div>
</main>

<?php
       include("footer.php");
?>