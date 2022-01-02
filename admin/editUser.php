<?php
    include 'header.php';
?>
<body style="background-image: url(image/slide-banner.jpg)">

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
        $row = mysqli_fetch_assoc($result);
        include 'navbar.php';
    ?>
        
        <div class="slide-banner bg-img " >
             
             <div class="container add_flim-form" id="post_film" >
                 <div class="row">
                 <div id="edit-film" class="table_box"> 
                     <div class="tiltle_edit">
                        <h1>Edit User</h1>
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
                        <label class="notifyerror" style="visibility: hidden; height: 0px" id="usernameerror">The account name only includes characters a-z, A-Z and number</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="container control-label">Email</label>
                        <div class="container"><input type="email" class="form-control" name="email" id="email" value="<?php echo $row["email"];?>">
                            <label class="notifyerror" style="visibility: hidden; height: 0px" id="emailerror">Invalid email format name@domain</label>  
                        </div>
                    </div>
                    <!-- dont have to get value of password from db -->
                    <div class="form-group">
                        <label class="container control-label">New Password</label>
                        <div class="container">
                        <input type="password" class="form-control" name="password" id="password" value="">
                        <label class="notifyerror" style="visibility: hidden; height: 0px" id="passworderror">Password must include lowercase letters, uppercase letters and numbers, minimum length 8 characters</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="container control-label">Confirm password</label>
                        <div class="container">
                        <input type="password" class="form-control" name="repassword" id="repassword" value="">
                        <label class="notifyerror" style="visibility: hidden; height: 0px" id="repassworderror">The following password must be the same as the previous password </label>
                        </div>
                    </div>  
                    <div class=" container form-group ">
                        <label class="control-label">Gender</label>
                        <div class="select_sex">
                            <label class="checkbox-inline">
                            <input type="radio" name="gender" id="update-gender-male" value="male" <?php if($row["gender"] == "male") echo "checked";?>> male</label>
                            <label class="checkbox-inline">
                            <input type="radio" name="gender" id="update-gender-female" value="female" <?php if($row["gender"] == "female") echo "checked";?>> female</label>
                            
                        </div>
                    </div>                  
                    <div class="col-offset-3 container">
                            <button type="submit" class="btn btn-primary" id="button_update" name="button_update">Save </button>
                    </div>
                    </div>
                    <div class="clear"></div>
                </form>
        </div>  
    </div>        
    <?php
    require_once("connect.php");
    if(isset($_POST["button_update"])&&$_POST['username']!=''){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $gender = $_POST['gender'];
        $sql = "SELECT * FROM user WHERE ID = '$userID'";
        $check = mysqli_query($conn,$sql);
        if(mysqli_num_rows($check) <= 0){ ?>
            <script>
                alert('User and ID <?php echo $userID;?> does not exist');
            </script>";
            <?php
        }
        elseif($password != $repassword){?>
            <script>
                alert('password incorrect');
            </script>";
            <?php
        }
        
        else{
            $sql = "UPDATE user SET 
                username='$username',
                password='$password', 
                gender='$gender', 
                WHERE id = $userID";
                $result = mysqli_query($conn,$sql);
                if ($result){?>
                    <script>
                        alert("Edit User successfully!");
                        location.href="manageUser.php";
                        // location.href= window.location.href; reload page
                    </script>
                <?php 
                } 
                else{ 
                ?>
                    <script>
                        alert("Edit User fail!"); -->
                    </script>
                <?php
                }
            } 
        }
    }
        mysqli_close($conn);
    ?>
</body>
</html>