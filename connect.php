<?php
    $conn = new mysqli("localhost","root","","btl_netflix");

// Check connection
    if ($conn -> connect_error) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
}
?>           