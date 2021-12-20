<?php
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
}
    include 'header.php';
?>
<main>
  <div class="slide-banner bg-img "
  style="background-image: url(slide-banner.jpg); height: 100vh;">
  <div class="container-fluid admin_box" >\
        <div class="container admin_table">
        <h5 class="text-center text-primary mt-5">Add a new movie to the movie store.</h5>
        <!-- Form thêm Dữ liệu nhân viên -->
        
        <form action="process-add-flim.php" method="post" enctype="multipart/form-data" >
            <div class="form-group" >
                <label for="txtimg">Image</label>
                <?php   
                    echo "<br>";
                ?>
                <input type="file" name="image" id="txtimg" name="txtimg" >
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
                        include 'connect.php';
                        // Bước 02: Thực hiện truy vấn
                        $sql = "SELECT * FROM quocgia";

                        $result = mysqli_query($conn,$sql);

                        // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <option value="<?php echo $row['ma_quocgia']; ?>"><?php echo $row['tenquocgia']; ?></option>
                    <?php
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
                        include 'connect.php';
                        // Bước 02: Thực hiện truy vấn
                        $sql = "SELECT * FROM theloai";

                        $result = mysqli_query($conn,$sql);

                        // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <option value="<?php echo $row['ma_theloai']; ?>"><?php echo $row['tentheloai']; ?></option>
                    <?php
                            }
                        }

                        // Bước 03: Đóng kết nối
                        mysqli_close($conn);
                    ?>
               
                </select>
            </div>
            <button type="submit" name="save" class="btn btn-primary mt-3">save</button>
        </form>
        
        <?php
                if(isset($_POST['save'])&&($_POST['save'])){
                    $imagepath = basename($_FILES['image']['name']);
                    $target_dir = "assets/img/img_flim";
                    $target_file = $target_dir . $imagepath;
                    echo "<br><img src='".$target_file."' width='300'>";
                    if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
                        echo "hinh da duoc upload";
                    }
                    else echo "hinh chua duoc up load";
                };

        ?>
        </div>
    </div>
    
    </div>
</main>
<?php
       include "footer.php";
?>

