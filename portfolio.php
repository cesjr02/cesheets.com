<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
	<title>cesheets.com | Portfolio</title>
	<?php include("inc/head.php"); ?>
	<!-- link to external css -->
	<link rel="stylesheet" type="text/css" href="css/portfolio.css">
	<link rel="stylesheet" type="text/css" href="css/jssor.css">	
	<!-- external js for scroll functionality -->
	<script type="text/javascript" src="js/scroll.js"></script>
	<!-- external js for jssor plugin -->
	<script src="js/jssor.slider.mini.js"></script>
	<!-- external js for jssor javascript code -->
	<script src="js/jssor.js"></script>
</head>
<body id="part3">
	<header id="portfolioHeader">
		<div id="headerContent">
			<img src="images/logo.png" alt="logo image">
			<nav>
				<?php include("inc/nav.php"); ?>
			</nav>
			<h1>Portfolio.</h1>
			<p class="intro">
			Please take a moment to explore samples of my work. A PDF version of my portfolio is also available for download. 
			</p>
			<a href="sheetsc_resume.pdf" class="primary_btn">View Resume</a>
		</div><!-- end of headerContent div -->
	</header>

	<section id="section1">
		<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 940px; height: 437px; margin-left: auto; margin-right: auto;">
			<!-- Slides Container -->
			<div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 940px; height: 437px;">
				<div><img u="image" src="images/gallery/image1.jpg" alt="mobile web development" /></div>
				<div><img u="image" src="images/gallery/image2.jpg" alt="responsive web design" /></div>
				<div><img u="image" src="images/gallery/image3.jpg" alt="lindus construction design" /></div>
				<div><a href="http://www.yapperbox.com"><img u="image" src="images/gallery/image4.jpg" alt="yapperbox.com" /></a></div>
				<div><img u="image" src="images/gallery/image5.jpg" alt="vantage point creative branding" /></div>
			</div>
			<!-- DirectionNavigator Skin Begin -->
			<style>
			.jssora11l, .jssora11r, .jssora11ldn, .jssora11rdn
			{
			    position: absolute;
			    cursor: pointer;
			    display: block;
			    background: url(images/gallery/custom-arrow.png) no-repeat;
			    overflow:hidden;
			}
			.jssora11l { background-position: -3px -33px; }
			.jssora11r { background-position: -63px -33px; }
			.jssora11l:hover { background-position: -123px -33px; }
			.jssora11r:hover { background-position: -183px -33px; }
			.jssora11ldn { background-position: -243px -33px; }
			.jssora11rdn { background-position: -303px -33px; }
			</style>
			<!-- Arrow Left -->
			<span u="arrowleft" class="jssora11l" style="width: 55px; height: 55px; top: 191px; left: 0px;"></span>
			<!-- Arrow Right -->
			<span u="arrowright" class="jssora11r" style="width: 55px; height: 55px; top: 191px; right: 0px"></span>
			<!-- DirectionNavigator Skin End -->
		</div><!-- end of slider1_container -->
	</section>
	
	<section id="section2">
		<div id="sampleWork">
			<div id="sampleWorkText">
				<h2>Sample Work</h2>
				<p>
				The gallery above features my latest work. Samples include user interface design, mobile and dynamic web applications, responsive web development and company branding.
				</p>
				<a href="sheetsc_pdf_portfolio.pdf" class="primary_btn">Download PDF</a>
			</div><!-- end of featuredText div -->			
		</div><!-- end of featured div -->
	</section>

	<footer>
		<div id="footerContent">
			<h1 class="contactBlack">Contact.</h1>
			<p>Want to know more? I'd love to hear from you.</p>
			<a href="mailto:cesjr02@gmail.com"><img src="images/contact/email-black.png" alt="email icon"></a>
			<a href="https://twitter.com/cesheets"><img src="images/contact/twitter-black.png" alt="twitter icon"></a>
			<a href="http://www.linkedin.com/pub/charles-sheets-jr/69/365/2b3"><img src="images/contact/linkedin-black.png" alt="linkedin icon"></a>
			<p id="footerInfo">2014 <span id="footerName">CJ Sheets.</span> Web Designer/Developer</p>			
		</div><!-- end of footer content -->
	</footer>
	</body>
</html>
