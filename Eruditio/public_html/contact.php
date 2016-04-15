

<?php
session_start();
require_once 'core/sanitize.php';
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : array();
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : array();
?>


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
							<li><a href="search.php">Search</a></li>
							<li><a href="about.php">About</a></li>
							<li class="active"><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- End Nav Bar -->

			<!--<div class='row social-container'>
				<h1 class='text-center'>Find us on social media</h1>
				<div class='col-xs-6 col-md-6 text-center'>
					<img src='images/facebook.png' width='100' height='100'/>
				</div>
				<div class= 'col-xs-6 col-md-6 text-center'>
					<img src='images/twitter.png' width='100' height='100'/>
				</div>
			</div>-->


			<?php if(!empty($errors)): ?>
				<div class="panel panel-contact">
					<ul>
						<li><?php echo implode('</li><li> ', $errors); ?></li>
					</ul>
				</div>
			<?php endif; ?>
			<?php
			if(isset($_GET['sent']) && $_GET['sent'] == 1 ) {
				echo "<div class='alert alert-success text-center' role='alert'>Thanks, we have your message and will reply soon.</div>";
			}
			?>
			<h1 class="text-center">Contact us!</h1>
			<h3 class="text-center">If you have any suggestions, questions, or concerns, please don't hesitate to contact us. We will respond as quickly as possible.</h3>
		<div class="contact jumbotron">


			<form action="contactprocess.php" class='text-center' method="post" role='form'>
				<div class='form-group'>
					<label class='form-label' for='name'>
						Your name
						<input id='name' class='form-control' type="text" name="name" placeholder="John Doe" autocomplete="off" <?php echo isset($fields['name']) ? ' value="' . escape($fields['name']) . '"' : ''  ?> required>
					</label>
				</div>
				<br/>
				<div class='form-group'>
					<label class='form-label' for='email'>
						Your email address
						<input class='form-control' id='email' type="text" name="email" placeholder='johndoe@example.com' autocomplete="off" <?php echo isset($fields['email']) ? ' value="' . escape($fields['email']) . '"' : ''  ?> required>
					</label>
				</div>
				<br/>
				<div class='form-group'>
					<labe class='form-label' for='message'>
						Your message
						<textarea id='message' name="message" rows="8" placeholder='Tell us what you think!'  <?php echo isset($fields['message']) ? escape($fields['message']) : ''  ?> required ></textarea>
					</label>
				</div>
				<input class='btn btn-lg btn-success' type="submit" value="Send">
			</form>
		</div>

		<!--Using PHPmailer for sending email
		Find PHPMailer here https://github.com/PHPMailer/PHPMailer on github-->
	</body>
</html>

<?php
unset($_SESSION['errors']);
unset($_SESSION['fields']);
?>
