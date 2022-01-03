<?php
    $conn = new mysqli("localhost","root","","btl_netflix");

// Check connection
    if ($con -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
}
?>           