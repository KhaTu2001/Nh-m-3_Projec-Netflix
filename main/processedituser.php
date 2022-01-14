<?php
        require_once("connect.php");
        if(isset($_POST["button_update"])){
            $userID = $_POST['id'];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $fullName = $_POST["fullname"];
            $phone = $_POST["phone"];
            $gender = $_POST["gender"];

            //thực hiện việc lưu trữ dữ liệu vào db 
            // edit != insert
            $sql = "SELECT * FROM user WHERE ID = '$userID'";
            $check = mysqli_query($conn,$sql);
            print_r(mysqli_num_rows($check));
            if(mysqli_num_rows($check) <= 0){ ?>
            <script>
                alert('Account with ID <?php echo $userID;?> does not exist yet');
            </script>";
<?php
            }
            else{
                $sql = "UPDATE user SET username='$username', fullname='$fullName', email='$email', phone='$phone', sex='$gender' WHERE id = $userID";
                $result = mysqli_query($conn,$sql); 

                if ($result){?>
            <script>
                alert("Edit user successfully!");
                location.href = "./profile.php"; //reload page"
            </script>
<?php 
                } else{ 
                ?>
            <script>
                alert("Edit user fail!");
            </script>
<?php
                }
            }
        }
    ?>