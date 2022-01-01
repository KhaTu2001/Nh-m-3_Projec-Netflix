<?php
    include 'header.php';
?>
<body>
<?php
    require('connect.php');

    if(isset($_GET["id"])){
        $userID = $_GET['id'];
    }
    $sql = "SELECT * FROM user WHERE id = $userID";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) == 0) { 
        echo "No required user";
    } else {
        $row = mysqli_fetch_assoc($result);?>
        
        <div class="slide-banner bg-img " style="background-image: url(image/slide-banner.jpg);">
             
             <div class="container add_flim-form" id="post_film" >
                 <div class="row">
                 <div id="edit-film" class="table_box"> 
                     <div class="tiltle_edit">
                        <h1>Chỉnh sửa User</h1>
                     </div>
                
            <form method="post" id="form-update" name="form-update" class="form-horizontal" action="" role="form" style="padding: 20px;">
                    <div class="form-group">
                        <label class="container control-label">ID</label>
                        <div class="container">
                        <input type="text" class="form-control" name="id" id="id" value="<?php echo $row["id"];?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="container control-label">Account</label>
                        <div class="container">
                        <input type="text" class="form-control" name="username" id="username" value="<?php echo $row["username"];?>">
                        <label class="notifyerror" style="visibility: hidden; height: 0px" id="usernameerror">Tên tài khoản chỉ bao gồm ký tự a-z, A-Z và số</label>
                        </div>
                    </div>
                    <!-- dont have to get value of password from db -->
                    <div class="form-group">
                        <label class="container control-label">New Password</label>
                        <div class="container">
                        <input type="password" class="form-control" name="password" id="password" value="">
                        <label class="notifyerror" style="visibility: hidden; height: 0px" id="passworderror">Mật khẩu phải bao gồm chữ thường, chữ hoa và số, độ dài tối thiểu 8 ký tự</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="container control-label">Email</label>
                        <div class="container"><input type="email" class="form-control" name="email" id="email" value="<?php echo $row["email"];?>">
                            <label class="notifyerror" style="visibility: hidden; height: 0px" id="emailerror">Email không đúng định dạng name@domain</label>  
                        </div>
    </div>
                    
                    <div class=" container form-group ">
                        <label class="control-label">Sex</label>
                        <div class="select_sex">
                            <label class="checkbox-inline">
                            <input type="radio" name="gender" id="update-gender-male" value="male" <?php if($row["sex"] == "male") echo "checked";?>> male</label>
                            <label class="checkbox-inline">
                                <input type="radio" name="gender" id="update-gender-female" value="female" <?php if($row["sex"] == "female") echo "checked";?>> female</label>
                        </div>
                    </div>
                    
                    <div class="col-offset-3 container">
                            <button type="submit" class="btn btn-primary" id="button_update" name="button_update">Lưu lại </button>
                            <button type="submit" class="btn btn-primary" id="button_previous" name="button_previous" onclick="goToPrePage()">Về trang trước </button>
                    </div>
                    </div>
                    <div class="clear"></div>
                </form>
            
        </div>  
    </div>
    <?php }
        mysqli_close($conn);
    ?>
</body>
</html>
        
    


