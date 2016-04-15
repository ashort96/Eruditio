<?php require_once '../core/init.php';

$scholarshipname = mysqli_real_escape_string($con, $_POST['scholarshipname']);
$schoolid = mysqli_real_escape_string($con, $_POST['schoolid']);
$amount = mysqli_real_escape_string($con, $_POST['amount']);
$gpa = mysqli_real_escape_string($con, $_POST['gpa']);
$act = mysqli_real_escape_string($con, $_POST['act']);
$sat = mysqli_real_escape_string($con, $_POST['sat']);
$link = mysqli_real_escape_string($con, $_POST['link']);

$sql="INSERT INTO school_scholarships (ScholarshipName, SchoolId, Amount, gpa, act, sat, link) VALUES ('$scholarshipname', '$schoolid', '$amount', '$gpa', '$act', '$sat', '$link')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

echo "1 record added";

mysqli_close($con);

echo "<br/>Return to <a href='admin.php'>Admin Page</a>";
