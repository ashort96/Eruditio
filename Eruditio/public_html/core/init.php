<?php
// Create connection
$con=mysqli_connect("localhost","CodeTN06","CodeTN06","CodeTN06proj");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
