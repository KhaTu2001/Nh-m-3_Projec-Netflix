<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC

    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $id_movie = $_GET['id_movie'];

    // Bước 01: Kết nối Database Server
    require 'connect.php';
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM movie WHERE id_movie = '$id_movie'";

    $result = mysqli_query($conn,$sql); //Nó chỉ ra về 1 bản ghi, mà mình chỉ cần lấy 1 bản ghi thôi

    // Bước 03: Xử lý kết quả
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $id_country = $row['id_country'];
        $id_genre = $row['id_genre'];
    }

    // Bước 04: Đóng kết nối
    mysqli_close($conn);

?>
<?php
    include("header.php");
?>
    <main>
    <div class="slide-banner bg-img "
    style="background-image: url(slide-banner.jpg); height: 100vh;"
      >
      <div class="container-fluid admin_box" >
        <div class="container admin_table">
    <h5 class="text-center text-primary mt-5">Add a new movie to the movie store.</h5>
        <!-- Form thêm Dữ liệu nhân viên -->
        
        <form action="process-update-flim.php" method="post" enctype="multipart/form-data" >
        <div class="form-group">
                <label for="txtidmovie">Movie ID</label>
                <input type="text" class="form-control" id="txtidmovie" name="txtidmovie" placeholder="Add Movie ID">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group" >
            <label for="txtimg">Image</label>
                <?php   
                    echo "<br>";
                ?>
   
                <input type="file" name="image"> 
               
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="txtnameofflim">Movie name</label>
                <input type="text" class="form-control" id="txtnameofflim" name="txtnameofflim" placeholder="Add Movie name">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="txtlink">Movie Link</label>
                <input type="text" class="form-control" id="txtlink" name="txtlink" placeholder="Add Link Movie">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Country</label>
                <select class="form-control" id="txtCountry" name="cboCountry">
            
                    <!-- Truy vấn dữ liệu để Hiển thị lựa chọn Đơn vị -->
                    <?php 
                        // Bước 01: Kết nối Database Server
                        require 'connect.php';
                        // Bước 02: Thực hiện truy vấn
                        $sql = "SELECT * FROM country";

                        $result = mysqli_query($conn,$sql);

                        // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_assoc($result)){
                                if($row['id_country'] == $id_country){
                                    echo '<option selected value="'.$row['id_country'].'">'.$row['name_country'].'</option>';
                                }else{
                                    echo '<option value="'.$row['id_country'].'">'.$row['name_country'].'</option>';
                                }

                            }
                        }

                        // Bước 03: Đóng kết nối
                        mysqli_close($conn);
                    ?>
               
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect3">Genre</label>
                <select class="form-control" id="txtgenre" name="cbogenre">
            
                    <!-- Truy vấn dữ liệu để Hiển thị lựa chọn Đơn vị -->
                    <?php 
                        // Bước 01: Kết nối Database Server
                        require 'connect.php';
                        // Bước 02: Thực hiện truy vấn
                        $sql = "SELECT * FROM genre";

                        $result = mysqli_query($conn,$sql);

                        // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_assoc($result)){
                                if($row['id_genre'] == $id_genre){
                                    echo '<option selected value="'.$row['id_genre'].'">'.$row['name_genre'].'</option>';
                                }else{
                                    echo '<option value="'.$row['id_country'].'">'.$row['name_genre'].'</option>';
                                }

                            }
                        }

                        // Bước 03: Đóng kết nối
                        mysqli_close($conn);
                    ?>
               
                </select>
            </div>
            <button type="submit" name="save"class="btn btn-primary mt-3">save</button>
        </form>
    </div>    
    </main>
<?php
    include("footer.php");
?>