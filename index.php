<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
	<title>cesheets.com</title>
	<?php include("inc/head.php"); ?>
</head>
<body id="part1">
	<header>
		<div id="headerContent">
			<img src="images/logo.png" alt="logo image">
			<nav>
				<?php include("inc/nav.php"); ?>
			</nav>
			<h1>Welcome.</h1>
			<p class="intro">
			Hello, welcome to my world. Here, you'll be able to explore my qualifications, browse my portfolio, and gain insight into my creative process. This website serves as a means to spark employer interest and collaborate with other graphic designers and web developers.
			</p>
			<a href="sheetsc_resume.pdf" class="secondary_btn">View Resume</a>
		</div><!-- end of headerContent div -->
	</header>

	<section id="section1">
		<div id="skills">
			<div id="col1">
				<img src="images/icons/web-design-icon.png" class="icon" alt="web design icon">
				<h3>Web Design</h3>
				<p>
				Understanding the needs of the client and target market I use the latest design trends and best user interface techniques to create beautiful and functional designs.
				</p>
				<a href="#">Learn more</a>
			</div>
			<div id="col2">
				<img src="images/icons/dynamic-web-icon.png" class="icon" alt="dynamic web app icon">
				<h3>Dynamic Web Apps</h3>
				<p>
				Using the LAMP framework (Linux, Apache, MySQL, and PHP), in combination with JavaScript, Ajax, CSS, and HTML5 to develop robust online programs.
				</p>
				<a href="#">Learn more</a>
			</div>
			<div id="col3">
				<img src="images/icons/mobile-dev-icon.png" class="icon" alt="mobile web development icon">
				<h3>Mobile Development</h3>
				<p>
				Utilizing the HTML5-based jQuery Mobile framework to quickly create touch-friendly websites that are accessible on all smartphone, tablet and desktop devices.
				</p>
				<a href="#">Learn more</a>
			</div>
		</div><!-- end of skills div -->
	</section>
	
	<section id="section2">
		<div id="featured">
			<div id="featuredText">
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
			
			<div id="featuredImage">
				<img src="images/featured-image.jpg" alt="featured work">
			</div>
		</div><!-- end of featured div -->
	</section>

	<footer>
		<?php include("inc/footer.php"); ?>
	</footer>
</body>
</html>
