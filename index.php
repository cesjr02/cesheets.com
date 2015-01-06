<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Charles Sheets Jr.</title>
	<?php include("inc/head.php"); ?>
</head>
<body>
	<header class="navbar navbar-inverse navbar-static-top bs-docs-nav" id="top" role="banner">
	  	<div class="container">
	  	<!-- Bootstrap navbar -->
		<div class="navbar-header">
		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>                          
		</div>
			<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
				<ul class="nav navbar-nav navbar-right">
					<li>
					    <a href="#" id="aboutScroll">About</a>
					</li>
					<li>
					    <a href="#" id="portfolioScroll">Portfolio</a>
					</li>
					<li>
					    <a href="#" id="contactScroll">Contact</a>
					</li>                                
				</ul>	          	      
			</nav>
		</div><!-- header container -->
		<div class="container" id="headerContent">
		<img src="images/logo.png" alt="Logo">
			<h1>Welcome.</h1>
			<p>
				Hello, welcome to my world. Here, you'll be able to explore my qualifications, browse my portfolio, and gain 						insight into my creative process. This website serves as a means to spark employer interest and collaborate 						with other graphic designers and web developers.
			</p>
			<a href="resume.pdf" class="secondary_btn">View Resume</a>
		</div>
	</header>
	
	<section id="skills" class="container">
		<div class="col-md-4">
			<!--<img src="images/icons/web-design-icon.png" class="icon" alt="web design icon">-->
			<h3><span class="fa fa-pencil"></span> Web Design</h3>
			<p>
			Understanding the needs of the client and target market I use the latest design trends and best user interface techniques 			to create beautiful and functional designs.
			</p>
		</div>
		<div class="col-md-4">
			<!--<img src="images/icons/dynamic-web-icon.png" class="icon" alt="dynamic web app icon">-->
			<h3><span class="fa fa-code"></span> Dynamic Web Apps</h3>
			<p>
				Using the LAMP framework (Linux, Apache, MySQL, and PHP), in combination with JavaScript, Ajax, XML, CSS, and HTML5 to 					develop robust online programs.
			</p>
		</div>
		<div class="col-md-4">
			<!--<img src="images/icons/mobile-dev-icon.png" class="icon" alt="mobile web development icon">-->
			<h3><span class="fa fa-gears"></span> Mobile Development</h3>
			<p>
				Utilizing the HTML5-based jQuery Mobile framework to quickly create touch-friendly websites that are accessible on 					all smartphone, tablet and desktop devices.
			</p>
		</div>	
	</section><!-- end of skills section -->
	
	<section id="portfolio">
		<div class="container">
			<div id="portfolioText" class="col-md-12">
				<h2>Featured Work</h2>
				<p>
					Please take a moment to download and browse my portfolio samples. Here you will find examples of branding, dynamic web applications, applications built using XML, mobile optimized websites and responsive design.
				</p>
				<h4>ROLE</h4>
				<p>Web Designer/Developer</p>
				<h4>TOOLS</h4>
				<p>HTML/CSS, XML, PHP, JavaScript, Photoshop & Illustrator</p>
				<a href="portfolio.pdf" class="primary_btn">Download PDF</a>
			</div><!-- end of featuredText div -->
				
		</div><!-- end of featured container -->
	</section><!-- end of featured section -->
	
	<section id="about">
		<div class="container">
			<div class="col-md-6">
			<!--<img src="images/icons/education-icon.png" class="icon" alt="education icon">-->
			<h3><span class="fa fa-graduation-cap"></span> Education</h3>
			<p>
			I earned my Associate of Applied Science degree and Web Design certificate at Western Technical College in La Crosse, WI. In 2013 I decided to further my education. I'm currently studying online to earn a Web Technologies Certificate at Harvard Extension School, Cambridge, MA.
			</p>
		</div>
		<div class="col-md-6">
			<!--<img src="images/icons/experience-icon.png" class="icon" alt="experience icon">-->
			<h3><span class="fa fa-line-chart"></span> Experience</h3>
			<p>
			My background is in graphic design and web development. I enjoy using both to compliment the websites and dynamic web applications I create. As a freelancer I became proficient while working with clients and gained the knowledge to execute projects from start to finish.
			</p>
		</div>
		</div><!--end of about container -->
	</section><!-- end of about section -->	
	
	
	
	<div id="contact" class="container">
		<h1 class="contact">Contact.</h1>
		<p>Want to know more? I'd love to hear from you.</p>
		<a href="mailto:cesjr02@gmail.com"><img src="images/contact/email.png" class="hover" alt="email icon"></a>
		<a href="https://twitter.com/cesheets"><img src="images/contact/twitter.png" class="hover" alt="twitter icon"></a>
		<a href="http://www.linkedin.com/pub/charles-sheets-jr/69/365/2b3"><img src="images/contact/linkedin.png" class="hover" alt="linkedin icon"></a>			
	</div><!-- end of contact -->	
		
	<?php include("inc/footer.php"); ?>                                                                           

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- external js for scroll functionality -->
	<script type="text/javascript" src="js/scroll.js"></script>
</body>
</html>