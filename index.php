<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CJ Sheets - Portfolio</title>

<!-- Bootstrap -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- main.css -->
<link href="css/main.css" rel="stylesheet">

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
					    <a href="index.php" class="active">Home</a>
					</li>
					<li>
					    <a href="about.php">About</a>
					</li>
					<li>
					    <a href="portfolio.php">Portfolio</a>
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
			<a href="sheetsc_resume.pdf" class="secondary_btn">View Resume</a>
		</div>
	</header>
	
	<div id="skills" class="container">
		<div class="col-md-4">
			<!--<img src="images/icons/web-design-icon.png" class="icon" alt="web design icon">-->
			<h3>Web Design</h3>
			<p>
			Understanding the needs of the client and target market I use the latest design trends and best user interface techniques 			to create beautiful and functional designs.
			</p>
		</div>
		<div class="col-md-4">
			<!--<img src="images/icons/dynamic-web-icon.png" class="icon" alt="dynamic web app icon">-->
			<h3>Dynamic Web Apps</h3>
			<p>
				Using the LAMP framework (Linux, Apache, MySQL, and PHP), in combination with JavaScript, Ajax, CSS, and HTML5 to 					develop robust online programs.
			</p>
		</div>
		<div class="col-md-4">
			<!--<img src="images/icons/mobile-dev-icon.png" class="icon" alt="mobile web development icon">-->
			<h3>Mobile Development</h3>
			<p>
				Utilizing the HTML5-based jQuery Mobile framework to quickly create touch-friendly websites that are accessible on 					all smartphone, tablet and desktop devices.
			</p>
		</div>	
	</div>
	
	<div id="featured">
		<div class="container">
			<div id="featuredText" class="col-md-6">
				<h2>Featured Work</h2>
				<p>
					Featured on the right is the mobile version to my personal website. I used a HTML5-based jQuery Mobile framework, along with custom CSS and JavaScript. The end result is a native-like mobile app, with fluid transitions and animations. A mobile redirect is controlled via htaccess file. (Desktop computers and tablets receive the full site, while smartphones are directed to the mobile version.)
				</p>
				<h4>ROLE</h4>
				<p>Web Designer/Developer</p>
				<h4>TOOLS</h4>
				<p>JavaScript/jQuery, HTML, CSS</p>
				<a href="sheetsc_pdf_portfolio.pdf" class="primary_btn">Download PDF</a>
			</div><!-- end of featuredText div -->
				
			<div id="featuredImage" class="col-md-6">
				<img class="img-responsive" src="images/featured-image.jpg" alt="featured work">
			</div>
		</div><!-- end of container -->
	</div><!-- end of featured div -->

	<footer>
	<div id="footerContent" class="container">
		<h1 class="contact">Contact.</h1>
		<p>Want to know more? I'd love to hear from you.</p>
		<a href="mailto:cesjr02@gmail.com"><img src="images/contact/email.png" alt="email icon"></a>
		<a href="https://twitter.com/cesheets"><img src="images/contact/twitter.png" alt="twitter icon"></a>
		<a href="http://www.linkedin.com/pub/charles-sheets-jr/69/365/2b3"><img src="images/contact/linkedin.png" alt="linkedin icon"></a>
		<p id="footerInfo">2014 <span id="footerName">CJ Sheets.</span> Web Designer/Developer</p>			
	</div><!-- end of footer content -->
	</footer>
	                                                             

                


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Link to external JS file -->
<script type="text/javascript" src="js/scroll.js"></script>
</body>
</html>