<?php
  session_start();
  if(!isset($_SESSION['isLoginOK'])){
    header("location:login.php");
  }
    include 'header.php';
?>
<main>

  <div class="slide-banner bg-img "
    style="background-image: url(slide-banner.jpg); height: 100vh;"
      >
      
        <div class="container-fluid admin_box" >
          <div class="container admin_table page" >
            <div class="admin_table-top">

              <div>
                    <a class="btn btn_add-flim" href="add_flim.php">Add</a>
              </div>
              <h4 class="text-center  mt-5">Manage movie stores on Netflix</h5>
            </div>
              
          <table class="table table-bordered">
          <thead>
                <tr>
                      <th scope="col">movie code</th>
                      <th scope="col">image</th>
                      <th scope="col">movie name</th>
                      <th scope="col">movie Link</th>
                      <th scope="col">Country</th>
                      <th scope="col">genre</th>
                      <th scope="col">edit</th>
                      <th scope="col">delete</th> 
                </tr>
          </thead>
          <tbody>
              
              <?php
                include 'connect.php';
                  $sql = "SELECT phim.ma_phim,phim.anh, phim.tenphim, phim.linkphim,quocgia.tenquocgia,theloai.tentheloai
                          from (phim inner join quocgia on phim.ma_phim = quocgia.ma_phim) inner join theloai on phim.ma_phim = theloai.ma_phim" ;
                  $result = mysqli_query($conn,$sql);
                  if(mysqli_num_rows($result)>0){
                              while($row = mysqli_fetch_assoc($result)){
              ?>
                  <tr>
                          <th style = "width:40px" scope="row"><?php echo $row['ma_phim']; ?></th>
                          <td style = "width:320px"><?php echo'<img src="'.$row['anh'].'"  class="img-fluid">';?> </td>
                          <td style = "width:150px"><?php echo $row['tenphim']; ?></td>
                          <td style = "width:300px"><?php echo $row['linkphim']; ?></td>
                          <td style = "width:150px"><?php echo $row['tenquocgia']; ?></td>
                          <td style = "width:150px"><?php echo $row['tentheloai']; ?></td>
                          <td style = "width:70px"><a href="update_flim.php?id=<?php echo $row['ma_phim']; ?>"><i class="fas fa-edit"></i></a></td>
                          <td style = "width:70px"><a href="delete_flim.php?id=<?php echo $row['ma_phim']; ?>"><i class="far fa-trash-alt"></i></a></td>
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