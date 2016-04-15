<?php require_once '../core/init.php';

$school = mysqli_real_escape_string($con, $_POST['school']);
$stateid = mysqli_real_escape_string($con, $_POST['stateid']);

$sql="INSERT INTO schools (SchoolName, StateId) VALUES ('$school', '$stateid')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

echo "1 record added";

mysqli_close($con);

echo "<br/>Return to <a href='admin.php'>Admin Page</a>";
