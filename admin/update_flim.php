<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $ma_phim = $_GET['ma_phim'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','btl_netflix');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM phim WHERE ma_phim = '$ma_phim'";

    $result = mysqli_query($conn,$sql); //Nó chỉ ra về 1 bản ghi, mà mình chỉ cần lấy 1 bản ghi thôi

    // Bước 03: Xử lý kết quả
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $ma_quocgia = $row['ma_quocgia'];
    }

    // Bước 04: Đóng kết nối
    mysqli_close($conn);

?>
<?php
    include("header.php");
?>
    <main>
    <div class="container">
    <h5 class="text-center text-primary mt-5">Add a new movie to the movie store.</h5>
        <!-- Form thêm Dữ liệu nhân viên -->
        
        <form action="process-update-flim.php" method="post" enctype="multipart/form-data" >
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
                                if($row['ma_quocgia'] == $ma_quocgia){
                                    echo '<option selected value="'.$row['ma_quocgia'].'">'.$row['tenquocgia'].'</option>';
                                }else{
                                    echo '<option value="'.$row['ma_quocgia'].'">'.$row['tenquocgia'].'</option>';
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
                        include 'connect.php';
                        // Bước 02: Thực hiện truy vấn
                        $sql = "SELECT * FROM db_donvi";

                        $result = mysqli_query($conn,$sql);

                        // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_assoc($result)){
                                if($row['ma_donvi'] == $ma_theloai){
                                    echo '<option selected value="'.$row['ma_theloai'].'">'.$row['tentheloai'].'</option>';
                                }else{
                                    echo '<option value="'.$row['ma_theloai'].'">'.$row['tentheloai'].'</option>';
                                }

                            }
                        }

                        // Bước 03: Đóng kết nối
                        mysqli_close($conn);
                    ?>
               
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">save</button>
        </form>
    </div>    
    </main>
<?php
    include("template/footer.php");
?>