<?php
<<<<<<< HEAD
$con = new mysqli("localhost","root","","project_netflix");
=======
$con = new mysqli("localhost","root","","btl_netflix");
>>>>>>> e426c9b321a895e7990b15ecfc87e81b084fdaeb

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
?>