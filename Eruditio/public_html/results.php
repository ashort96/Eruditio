<!-- Copyright 2014 Eruditio All Rights Reserved. Eruditio is an advanced scholarship search engine. -->
<?php
require_once 'core/init.php';
/*Set html values to php variables*/
$stateId = $_POST["stateId"];
$actScore = $_POST["actScore"];
$satScore = $_POST["satScore"];
$gpa = $_POST["gpa"];
$amount = $_POST["amount"];

$errors = array();
if(!$stateId)
	$errors['stateId'] = 'Please select a state';
/*Sets any information not enterted into a variable that will not conflict with results*/
if(empty($gpa)) {
	$gpa = -1;
}

if(empty($actScore)) {
	$actScore = -1;
}

if(empty($satScore)) {
	$satScore = -1;
}

if(empty($amount)) {
	$amount = 0;
}
 /*Return to search.php if no state is picked (for mobile only - need to add javascript)*/
if(count($errors)) {
	$_SESSION['stateId'] = $_POST;
	$_SESSION['errors'] = $errors;
	header('Location: search.php?stateerr=1');
}

?>
<!DOCTYPE html>
	<html>
		<head>
			<!-- This web application utilizes the external stylesheet "Bootstrap" -->
			<!-- Bootstrap does NOT support Internet Explorer 7 and below. -->
			<title>Eruditio - The Scholarship Finder</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
			<link rel="icon" href="favicon.ico" type="image/x-icon" />

			<!--////////////////// StyleSheets \\\\\\\\\\\\\\\\\-->
			<!-- Latest compiled CSS -->
			<link rel="stylesheet" href="styles/bootstrap.css"/>
			<!-- Page"s own stylesheet -->
      <link rel="stylesheet" href="styles/site.css"/>
			<!--<link rel="stylesheet" href="styles/home.css"/>-->

			<!--///////////////// Scripts \\\\\\\\\\\\\\\\\\\\\-->
			<!-- Optional: Include the jQuery library -->
			<script src="js/jquery.js"></script>
			<script src="js/results.js"></script>
			<!-- Optional: Incorporate the Bootstrap JavaScript plugins -->
			<script src="js/bootstrap.js"></script>

		</head>
		<body>
			<!-- Start Nav Bar -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<p class="navbar-brand">Eruditio</p>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li class="active"><a href="search.php">Search</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
    		<!-- End Nav Bar -->
    		<div class="container-fluid">
   				<div class="row">
       				<div class="col-md-12">
                	<div id="about-text-container">
                    	<p><?php
												$schooldisplayed = 0;
												$tempschoolid = -1;
												$scholarshipcount = 0;
												$resultcount = mysqli_query($con, "SELECT schools.id FROM schools INNER JOIN school_scholarships ON school_scholarships.SchoolId = schools.id  WHERE schools.StateId = {$stateId} AND  gpa <= {$gpa} AND (act <= {$actScore} OR sat <= {$satScore}) AND Amount >={$amount}");
												$num_rows = mysqli_num_rows($resultcount);
												/*If no results come back...*/
												if($num_rows == 0) {
													echo "<div class='alert alert-danger text-center results-warning' role='alert'>";
													echo "<h1>Sorry!</h1>";
													echo "<p class='results-warning-text'>It appears no items met your search criteria</p>";
													echo "<a href='search.php' type='button' class='btn btn-danger results-warning-search'>Search Again</a>";
													echo "</div>";
												} else {
															$result = mysqli_query($con, "SELECT SchoolName,schools.id FROM schools WHERE schools.StateId = {$stateId}");
															while ($row = mysqli_fetch_array($result)) {
																$schoolId = $row['id'];
																if($tempschoolid != $schoolId) {
																	$schooldisplayed = 0;
																}
																$result2 = mysqli_query($con, "SELECT * FROM school_scholarships WHERE SchoolId = {$schoolId} AND gpa <= {$gpa} AND (act <= {$actScore} OR sat <= {$satScore}) AND Amount >={$amount} ORDER BY Amount");
																while ($row2 = mysqli_fetch_array($result2)) {
																	if($schooldisplayed == 0) {
																		echo "<h1 class='text-center'>" . $row['SchoolName'] . "</h1>";
																		echo "<div class='container text-center results-container table-responsive'>";
																		echo "<table class='table table-striped table-bordered'>";
																		echo "<tr>";
																		echo "<th>Scholarship</th>";
																		echo "<th>Amount</th>";
																		echo "<th>Minimum GPA</th>";
																		echo "<th>Minimum ACT</th>";
																		echo "</tr>";
																		/*Says the school has been displayed*/
																		$schooldisplayed = 1;
																	}
																		/*Auto Increment*/
																		$scholarshipcount = $scholarshipcount ++;
																		echo "<tr>";
																		echo "<td><a href='" . $row2['link'] . "' target='new'>" . $row2['ScholarshipName'] . "</a></td>";
																		echo "<td>$" . $row2['Amount'] . "</td>";
																		echo "<td>" . $row2['gpa'] . "</td>";
																		echo "<td>" . $row2['act'] . "</td>";
																		echo "</tr>";
																}
																echo "</table>";
																echo "</div>";

															}
														}

                    	?></p>
        					</div>
    					</div>
					</div>
				</div>
		</body>
</html>
