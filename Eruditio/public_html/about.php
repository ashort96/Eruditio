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
							<li class="active"><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
      <!-- End Nav Bar -->

      <h1 class='text-center about-header'>About Eruditio</h1>
      <div class='container featurette-container'>
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">How was Eruditio found?</h2>
            <p class="lead">Eruditio was founded when an opportunity arose to compete in the first Code TN programming competition. The team of 8 students from Bearden High School worked in a collaborative effort to make Eruditio one of the best scholarship-search applications on the web.</p>
          </div>
          <div class="col-md-5">
            <img src='images/founded.png' class="featurette-image img-responsive visible-lg visible-md"  alt="Generic placeholder image" width='300' height='300'/>
          </div>
        </div>
        <hr class="featurette-divider">
          <div class="row featurette">
            <div class="col-md-5">
              <img src='images/roadsign.png' class="featurette-image img-responsive visible-lg visible-md" alt="Generic placeholder image" width='500' height='500'/>
            </div>
            <div class="col-md-7">
              <h2 class="featurette-heading">Thinking ahead...</h2>
              <p class="lead">There are many plans in the future for Eruditio, some of which include statewide scholarship results, an account (not required) to save results and other information to that will also allow colleges to enter in their own information, expansion of database to cover all schools, dedicated mobile app, the ability to filter Scholarships, and the transposing of the code to a php framework called  <a href="http://laravel.com" target="new">Laravel</a>.</p>
            </div>
          </div>
      </div>
      <hr class='featurette-divider'>
      <h1 class="text-center about-header">The Team:</h1>
      <div class="text-center aboutcontainer visible-lg visible-md">
        <div class='row'>
          <div class="col-md-6">
            <img class="img-circle about_img" src="images/max.jpg" alt="Max Neveau"/>
            <h2 class="about_name">Max Neveau</h2>
            <p class="column-text">Max is a senior in High School. He is a computer geek at night, but a musical theatre geek during the day, helping produce his high school"s musical as the ASM. Programming since the age of 14, he has basic knowledge of multiple languages. Going to college for material science, he hopes to put his programming knowledge to the test with models of different problems.</p>
          </div>
          <div class="col-md-6">
            <img class="img-circle about_img" src="images/grant1.jpg" alt="Grant Savage"/>
            <h2 class="about_name">Grant Savage</h2>
            <p class="column-text">Grant is a senior at Bearden High School. He likes computers, music, and how things work. In his free-time, Grant likes to go flying around Knoxville. He hopes to go to college and earn a degree in Aerospace Engineering. His dream is to fly all over the world, playing golf at every major golf course at every destination he travels to.</p>
          </div>
        </div>
        <hr/>
        <div class='row'>
          <div class="col-md-6">
            <img class="img-circle about_img" src="images/adam.jpg" alt="Adam Short"/>
            <h2 class="about_name">Adam Short</h2>
            <p class="column-text">Adam is a senior at Bearden High School. He spends most of his time on his computer or playing any percussion instrument. He is currently undecided as to what college he will be attending and what major he will be pursuing. He plans on either going into Information and Systems Technology or Buisness.</p>
          </div>
          <div class="col-md-6">
            <img class="img-circle about_img" src="images/andrew.jpg" alt="Andrew Bumpas"/>
            <h2 class="about_name">Andrew Bumpas</h2>
            <p class="column-text">Andrew Bumpas is a senior at Bearden High School. Andrew currently works for TCBY selling frozen yogurt. He is looking to attend Tennessee Technological University majoring in Computer Engineering. In his free time, Andrew enjoys working out, running, and spending quality time with his friends and family.</p>
          </div>
        </div>
        <hr/>
        <div class='row'>
          <div class="col-md-6">
            <img class="img-circle about_img" src="images/jacob.jpg" alt="Jacob Rutherford"/>
            <h2 class="about_name">Jacob Rutherford</h2>
            <p class="column-text">Currently a senior attending Bearden High School, Jacob Rutherford has a strong knowledge in the C language of programming. Jacob is also a part of the management team at Regal Entertainment Group's Pinnacle Stadium 18 in Knoxville. Moving forward, Jacob looks to major in Computer Science at the University of Tennessee Knoxville, in hopes to provide useful products as a flexible program designer who can thrive in almost any environment.</p>
          </div>
          <div class="col-md-6">
            <img class="img-circle about_img" src="images/paul.jpg" alt="Paul Baeske"/>
            <h2 class="about_name">Paul Baeske</h2>
            <p class="column-text">Paul is a senior at Bearden High School. He likes music, computers, and how things work. In his free time, Paul likes to find new music and mix with it. He hopes to go to college and earn a degree in Audio Engineering. His dream is to open up his own music festival and own his own recording company.</p>
          </div>
        </div>
        <hr/>
        <div class='row'>
          <div class="col-md-6">
            <img class="img-circle about_img" src="images/sebastian.jpg" alt="Sebastian Soldner"/>
            <h2 class="about_name">Sebastian Soldner</h2>
            <p class="column-text">Presently a Senior at Bearden High School, Sebastian Soldner uses his strong knowledge of target demographics, public speaking, and organizational leadership to help aid Eruditio in reaching its goals. In his free time, Sebastian enjoys reading, video games, running, and a nice debate. In the future, Sebastian plans to study business administration and finance, feeding his passion to become an entrepreneur capable of performing positively in a global society.</p>
          </div>
          <div class="col-md-6">
            <img class="img-circle about_img" src="images/nick.jpg" alt="Nick Warner">
            <h2 class="about_name">Nick Warner</h2>
            <p class="column-text">Nick Warner is currently attending Bearden High School, and is in his senior year. His experience with code such as HTML and Javascript make him a viable member for both the workforce and further college-level education. With this, he looks to attend Pellissippi State Community College before transferring to Full Sail University, and later get a job as a game developer.</p>
          </div>
        </div>
        <h2 class="text-center">And a special thanks to:</h2>
        <div class="row">
          <div class="col-md-6">
            <img class="img-circle about_img" src="images/moskal.JPG" alt="Amy Moskal" />
            <h2 class="about_name">Amy Moskal</h2>
            <p class="column-text">Ms. Moskal has been an educator in Knox County for 26 years. Currently, she teaches Web Design I, Web Design II, Interactive Multimedia, and Computer Apps. Ms. Moskal earned her Bachelors degree from the University of Tennessee in Business Education and a Masters in Technological & Adult Education. Also, she earned an Ed.S degree in Administration from Lincoln Memorial University. Ms. Moskal is a 1979 graduate of Bearden High School. In her spare time, she enjoys spending time with her family.</p>
          </div>
          <div class="col-md-6">
            <img class="img-circle about_img" src="images/rscmug.jpeg" alt="Brett Johnson" />
            <h2 class="about_name">Brett Johnson</h2>
            <p class="column-text">Brett Johnson joined Radio Systems Corporation in 2010 and serves as the company’s Director of Customer Experience, overseeing the E-commerce and Customer Care teams.  In this role, Brett works with each of the company’s brands to grow sales, build awareness, and represent the voice of the customer in the company.  In 2003, Brett graduated from Carnegie Mellon University with a Master of Science in E-commerce and has worked in the internet and technology industries in varying capacities for 20 years. Brett lives in Knoxville, TN with his wife, two teenage daughters, and dog Sumi. He enjoys being in the outdoors, skydiving, snowboarding and photography.</p>
          </div>
        </div>
      </div>
        <!-- Mobile -->
      <div class="text-center aboutcontainer visible-sm visible-xs">

          <div class="col-md-12">
            <img class="img-circle about_img" src="images/max.jpg" alt="Max Neveau"/>
            <h2 class="about_name">Max Neveau</h2>
            <p class="column-text">Max is a senior in High School. He is a computer geek at night, but a musical theatre geek during the day, helping produce his high school"s musical as the ASM. Programming since the age of 14, he has basic knowledge of multiple languages. Going to college for material science, he hopes to put his programming knowledge to the test with models of different problems.</p>
          </div>
          <div class="col-md-12">
            <img class="img-circle about_img" src="images/grant1.jpg" alt="Grant Savage"/>
            <h2 class="about_name">Grant Savage</h2>
            <p class="column-text">Grant is a senior at Bearden High School. He likes computers, music, and how things work. In his free-time, Grant likes to go flying around Knoxville. He hopes to go to college and earn a degree in Aerospace Engineering. His dream is to fly all over the world, playing golf at every major golf course at every destination he travels to.</p>
          </div>

        <hr/>

          <div class="col-md-12">
            <img class="img-circle about_img" src="images/adam.jpg" alt="Adam Short"/>
            <h2 class="about_name">Adam Short</h2>
            <p class="column-text">Adam is a senior at Bearden High School. He spends most of his time on his computer or playing any percussion instrument. He is currently undecided as to what college he will be attending and what major he will be pursuing. He plans on either going into Information and Systems Technology or Buisness.</p>
          </div>
          <div class="col-md-12">
            <img class="img-circle about_img" src="images/andrew.jpg" alt="Andrew Bumpas"/>
            <h2 class="about_name">Andrew Bumpas</h2>
            <p class="column-text">Andrew Bumpas is a senior at Bearden High School. Andrew currently works for TCBY selling frozen yogurt. He is looking to attend Tennessee Technological University majoring in Computer Engineering. In his free time, Andrew enjoys working out, running, and spending quality time with his friends and family.</p>
          </div>

        <hr/>

          <div class="col-md-12">
            <img class="img-circle about_img" src="images/jacob.jpg" alt="Jacob Rutherford"/>
            <h2 class="about_name">Jacob Rutherford</h2>
            <p class="column-text">Currently a senior attending Bearden High School, Jacob Rutherford has a strong knowledge in the C language of programming. Jacob is also a part of the management team at Regal Entertainment Group's Pinnacle Stadium 18 in Knoxville. Moving forward, Jacob looks to major in Computer Science at the University of Tennessee Knoxville, in hopes to provide useful products as a flexible program designer who can thrive in almost any environment.</p>
          </div>
          <div class="col-mx-12">
            <img class="img-circle about_img" src="images/paul.jpg" alt="Paul Baeske"/>
            <h2 class="about_name">Paul Baeske</h2>
            <p class="column-text">Paul is a senior at Bearden High School. He likes music, computers, and how things work. In his free time, Paul likes to find new music and mix with it. He hopes to go to college and earn a degree in Audio Engineering. His dream is to open up his own music festival and own his own recording company.</p>
          </div>

        <hr/>

          <div class="col-md-12">
            <img class="img-circle about_img" src="images/sebastian.jpg" alt="Sebastian Soldner"/>
            <h2 class="about_name">Sebastian Soldner</h2>
            <p class="column-text">Presently a Senior at Bearden High School, Sebastian Soldner uses his strong knowledge of target demographics, public speaking, and organizational leadership to help aid Eruditio in reaching its goals. In his free time, Sebastian enjoys reading, video games, running, and a nice debate. In the future, Sebastian plans to study business administration and finance, feeding his passion to become an entrepreneur capable of performing positively in a global society.</p>
          </div>
          <div class="col-md-12">
            <img class="img-circle about_img" src="images/nick.jpg" alt="Nick Warner">
            <h2 class="about_name">Nick Warner</h2>
            <p class="column-text">Nick Warner is currently attending Bearden High School, and is in his senior year. His experience with code such as HTML and Javascript make him a viable member for both the workforce and further college-level education. With this, he looks to attend Pellissippi State Community College before transferring to Full Sail University, and later get a job as a game developer.</p>
          </div>

        <h2 class="text-center">And a special thanks to:</h2>

          <div class="col-md-12">
            <img class="img-circle about_img" src="images/moskal.JPG" alt="Amy Moskal" />
            <h2 class="about_name">Amy Moskal</h2>
            <p class="column-text">Ms. Moskal has been an educator in Knox County for 26 years. Currently, she teaches Web Design I, Web Design II, Interactive Multimedia, and Computer Apps. Ms. Moskal earned her Bachelors degree from the University of Tennessee in Business Education and a Masters in Technological & Adult Education. Also, she earned an Ed.S degree in Administration from Lincoln Memorial University. Ms. Moskal is a 1979 graduate of Bearden High School. In her spare time, she enjoys spending time with her family.</p>
          </div>
          <div class="col-md-12">
            <img class="img-circle about_img" src="images/rscmug.jpeg" alt="Brett Johnson" />
            <h2 class="about_name">Brett Johnson</h2>
            <p class="column-text">Brett Johnson joined Radio Systems Corporation in 2010 and serves as the company’s Director of Customer Experience, overseeing the E-commerce and Customer Care teams.  In this role, Brett works with each of the company’s brands to grow sales, build awareness, and represent the voice of the customer in the company.  In 2003, Brett graduated from Carnegie Mellon University with a Master of Science in E-commerce and has worked in the internet and technology industries in varying capacities for 20 years. Brett lives in Knoxville, TN with his wife, two teenage daughters, and dog Sumi. He enjoys being in the outdoors, skydiving, snowboarding and photography.</p>
          </div>

      </div>
    </body>
  </html>
