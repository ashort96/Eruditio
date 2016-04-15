<?php 
require_once 'core/init.php';

$stateId = $_POST["stateId"];
$actScore = $_POST["actScore"];
$satScore = $_POST["satScore"];
$gpa = $_POST["gpa"];
$payout = $_POST["payout"];
$gender = $_POST["gender"];

$errors = array();
if(!$stateId)
	$errors['stateId'] = 'Please select a state';

if(count($errors)) {
	$_SESSION['stateId'] = $_POST;
	$_SESSION['errors'] = $errors;
	header('Location: search.php');
}

$stateResults = mysqli_query($con, "SELECT * FROM states WHERE id={$stateId}");
while($row = mysqli_fetch_array($stateResults)) {
	$stateResult->echo $row['state'];
}



$schoolResult = mysqli_query($con, "SELECT * FROM schools INNER JOIN states ON schools.StateId = states.id WHERE StateId={$stateId}");

header('Location: results.php');