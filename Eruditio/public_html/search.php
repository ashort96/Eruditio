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
              <li><a href="index.php">Home</a></li>
              <li class="active"><a href="search.php">Search</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Nav Bar -->
      <?php
      if(isset($_GET['stateerr']) && $_GET['stateerr'] == 1 ) {
        echo "<div class='alert alert-warning text-center' role='alert'>The state field is required.</div>";
      }
      ?>
      <div id='jumbotron-container' class="container text-center search_container_desktop hidden-xs hidden-sm">
        <p class="searchhead">Input your academic information to let Eruditio find perfect scholarships for you.</p>
        <form action="results.php" role="form" method="post">
          <div id='jumbotron' class="row jumbotron">
            <div class="form-group">
              <h2>Please pick a state to narrow down your search.*</h2>
              <div class="text-right muted">*required field</div>
              <select class="form-control" name="stateId" required>
                <option value="" class="hidden">Select State...</option>
    						<option value="1">Alabama</option>
    						<!--<option value="2">Alaska</option>
    						<option value="3">Arizona</option>-->
    						<option value="4">Arkansas</option>
    						<!--<option value="5">California</option>
    						<option value="6">Colorado</option>
   						  <option value="7">Connecticut</option>
   						  <option value="8">Delaware</option>-->
		            <option value="9">Florida</option>
    						<option value="10">Georgia</option>
    						<!--<option value="11">Hawaii</option>
    						<option value="12">Idaho</option>
    						<option value="13">Illinois</option>
    						<option value="14">Indiana</option>
    						<option value="15">Iowa</option>
    						<option value="16">Kansas</option>-->
    						<option value="17">Kentucky</option>
    						<option value="18">Louisiana</option>
    						<!--<option value="19">Maine</option>
    						<option value="20">Maryland</option>
    						<option value="21">Massachusetts</option>
    						<option value="22">Michigan</option>
    						<option value="23">Minnesota</option>-->
    						<option value="24">Mississippi</option>
    						<option value="25">Missouri</option>
    						<!--<option value="26">Montana</option>
    						<option value="27">Nebraska</option>
    						<option value="28">Nevada</option>
    						<option value="29">New Hampshire</option>
    						<option value="30">New Jersey</option>
    						<option value="31">New Mexico</option>
    						<option value="32">New York</option>-->
    						<option value="33">North Carolina</option>
    						<!--<option value="34">North Dakota</option>
    						<option value="35">Ohio</option>
    						<option value="36">Oklahoma</option>
    						<option value="37">Oregon</option>
    						<option value="38">Pennsylvania</option>
    						<option value="39">Rhode Island</option>-->
    						<option value="40">South Carolina</option>
    						<!--<option value="41">South Dakota</option>-->
    						<option value="42">Tennessee</option>
    						<option value="43">Texas</option>
    						<!--<option value="44">Utah</option>
    						<option value="45">Vermont</option>
    						<option value="46">Virginia</option>
    						<option value="47">Washington</option>
    						<option value="48">West Virginia</option>
    						<option value="49">Wisconsin</option>
    						<option value="50">Wyoming</option>-->
	    				</select>
		    		</div>
		    		<div id="actScoreContainer" class="form-group">
					    <label class="lead"><h2>What's your highest ACT score?</h2></label>
					    <input name="actScore" type="number" class="form-control" placeholder="Enter highest ACT: Ex. 27" max="36" min="0"/>
				    </div>
  					<div id="satScoreContainer" class="form-group">
  						<label class="lead"><h2>What's your highest SAT score?</h2></label>
  						<input name="satScore" type="number" class="form-control" placeholder="Enter highest SAT: Ex. 1500 " max="2400" min="0"/>
			      </div>
		    		<div id="gpaScoreContainer" class="form-group">
		    			<label class="lead"><h2>What's your GPA?</h2></label>
		    			<input name="gpa" step="0.01" type="number" class="form-control" placeholder="Enter GPA: Ex. 3.72"/>
					  </div>
	  					<div class="form-group">
	  						<label class="lead"><h2>What is the minimum amount of money you are looking for?</h2></label>
								<select class="form-control" name="amount">
									<option value="" class="hidden">Minimum amount...</option>
									<option value="1000">$1,000</option>
									<option value="2000">$2,000</option>
									<option value="3000">$3,000</option>
									<option value="4000">$4,000</option>
									<option value="5000">$5,000</option>
								</select>
	  					</div>
    			  <button type="submit" class="btn btn-block btn-success" id="search-button">Search Scholarships</button>
          </div>
        </form>
      </div>
			<div class="container text-center search_container_mobile visible-xs visible-sm">
				<p class="searchhead">Input your academic information to let Eruditio find perfect scholarships for you.</p>
				<form action="results.php" role="form" method="post">
					<div class="row jumbotron">
						<div class="form-group">
							<h2>Please pick a state to narrow down your search.*</h2>
              <div class="text-right muted">*required field</div>
							<select class="form-control" name="stateId" required>
								<option value="" class="hidden">Select State...</option>
								<option value="1">Alabama</option>
								<!--<option value="2">Alaska</option>
								<option value="3">Arizona</option>
								<option value="4">Arkansas</option>
								<option value="5">California</option>
								<option value="6">Colorado</option>
								<option value="7">Connecticut</option>
								<option value="8">Delaware</option>-->
								<option value="9">Florida</option>
								<option value="10">Georgia</option>
								<!--<option value="11">Hawaii</option>
								<option value="12">Idaho</option>
								<option value="13">Illinois</option>
								<option value="14">Indiana</option>
								<option value="15">Iowa</option>
								<option value="16">Kansas</option>-->
								<option value="17">Kentucky</option>
								<option value="18">Louisiana</option>
								<!--<option value="19">Maine</option>
								<option value="20">Maryland</option>
								<option value="21">Massachusetts</option>
								<option value="22">Michigan</option>
								<option value="23">Minnesota</option>-->
								<option value="24">Mississippi</option>
								<option value="25">Missouri</option>
								<!--<option value="26">Montana</option>
								<option value="27">Nebraska</option>
								<option value="28">Nevada</option>
								<option value="29">New Hampshire</option>
								<option value="30">New Jersey</option>
								<option value="31">New Mexico</option>
								<option value="32">New York</option>-->
								<option value="33">North Carolina</option>
								<!--<option value="34">North Dakota</option>
								<option value="35">Ohio</option>
								<option value="36">Oklahoma</option>
								<option value="37">Oregon</option>
								<option value="38">Pennsylvania</option>
								<option value="39">Rhode Island</option>-->
								<option value="40">South Carolina</option>
								<!--<option value="41">South Dakota</option>-->
								<option value="42">Tennessee</option>
								<option value="43">Texas</option>
								<!--<option value="44">Utah</option>
								<option value="45">Vermont</option>
								<option value="46">Virginia</option>
								<option value="47">Washington</option>
								<option value="48">West Virginia</option>
								<option value="49">Wisconsin</option>
								<option value="50">Wyoming</option>-->
							</select>
						</div>
						<div id="actScoreContainer" class="form-group">
							<label class="lead"><h2>What's your highest ACT score?</h2></label>
							<input name="actScore" type="number" class="form-control" placeholder="Enter highest ACT: Ex. 27" max="36" min="0"/>
						</div>
						<div id="satScoreContainer" class="form-group">
							<label class="lead"><h2>What's your highest SAT score?<h2></label>
							<input name="satScore" type="number" class="form-control" placeholder="Enter highest SAT: Ex. 1500 " max="2400" min="0"/>
						</div>
						<div id="gpaScoreContainer" class="form-group">
							<label class="lead"><h2>What's your GPA?<h2></label>
							<input name="gpa" step="0.01" type="number" class="form-control" placeholder="Enter GPA: Ex. 3.72"/>
						</div>
							<div class="form-group">
								<label class="lead"><h2>What is the minimum amount of money you are looking for?</h2></label>
								<select class="form-control" name="amount">
									<option value="" class="hidden">Minimum amount...</option>
									<option value="1000">$1,000</option>
									<option value="2000">$2,000</option>
									<option value="3000">$3,000</option>
									<option value="4000">$4,000</option>
									<option value="5000">$5,000</option>
								</select>
							</div>
						<button type="submit" class="btn btn-block btn-success" id="search-button">Search Scholarships</button>
          </div>
				</form>
			</div>
    </body>
  </html>
