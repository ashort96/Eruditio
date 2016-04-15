<!DOCTYPE html>
<!-- Copyright 2014 Eruditio All Rights Reserved. Eruditio is an advanced scholarship search engine. -->
<html lang="en">
		<head>
			<!-- This web application utilizes the external stylesheet "Bootstrap" -->
			<!-- Bootstrap does NOT support Internet Explorer 7 and below. -->
			<title>Eruditio - The Scholarship Finder</title>
			<meta charset="utf-8">
      			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
			<link rel="icon" href="favicon.ico" type="image/x-icon" />
			<!--////////////////// StyleSheets \\\\\\\\\\\\\\\\\-->
			<!-- Latest compiled CSS -->
			<link rel="stylesheet" href="styles/bootstrap.css"/>
      			<!-- Page"s own stylesheet -->
      			<link rel="stylesheet" href="styles/site.css"/>
			<!--///////////////// Scripts \\\\\\\\\\\\\\\\\\\\\-->
			<!-- Optional: Include the jQuery library -->
			<script src="js/jquery.js"></script>
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
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="search.php">Search</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- End Nav Bar -->
      <div class="container-fluid">
        <h1 class="text-center" id='index-header'>Eruditio</h1>
        <h2 class="text-center" id='index-text'><small>The Scholarship Finder</small></h2>
	        <p class="lead text-left">Latin for scholarship, Eruditio is a scholarship search engine specifically designed to give users from Tennessee more control over what scholarships they look for. For example, Eruditio allows the user to input academic information such as GPA and ACT Score, to look for specific scholarships that match what the user has input into the search query.</p>
					<p class="text-center container">
            <a class="btn search-button btn-default btn-lg hidden-xs" href="search.php">
            <span class="glyphicon glyphicon-search button-font" style='font-size: 15px;'></span> Start Your Scholarship Search Now
             </a>
             <a class="btn  search-button btn-default btn-lg visible-xs" href="search.php">Search Now</a>
      		</p>
      </div>
			<hr/>
      <div class="container-fluid text-center">
	      <div class="col-md-6">
          <img class="img-circle index_img" src="images/college.jpg" alt="Generic placeholder image">
          <h2 class="index_h2">From Coast to Coast</h2>
          <p class="column-text">Eruditio has a wide variety of scholarships from state and local institutions, to major universities across the United States.</p>
	      </div>
	      <div class="col-md-6">
      		<img class="img-circle index_img" src="images/dollar2.jpg" alt="Generic placeholder image">
        	<h2 class="index_h2">High Payout</h2>
          <p class="column-text">Eruditio has some of the highest paying scholarships in its<br> database, ranging from $1,000 to $25,000.</p>
	      </div>
      </div>
			<hr/>
      <div class="container-fluid text-center device-picture">
      	<div class="col-md-6">
        	<h2>Cross-Platform Ready</h2>
          	<p class="column-text">Eruditio works on all major mobile web browsers, from iOS to Android, as well as IE verions 7 and up and current versions of Google Chrome and Firefox.</p>
        </div>
        <div class="col-md-6">
        	<img class="visible-lg visible-md" src="images/devices.png" alt="Mobile Devices"/>
        </div>
      </div>
    </body>
  </html>
