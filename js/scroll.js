// Allows for smooth scrolling to the contact area.
$(window).load(function (){
	$("#contactScroll").click(function() {
		$('html, body').animate({
			scrollTop: $("#contact").offset().top
		}, 200);
	});
});

$(window).load(function (){
	$("#skillsScroll").click(function() {
		$('html, body').animate({
			scrollTop: $("#skills").offset().top
		}, 200);
	});
});

$(window).load(function (){
	$("#aboutScroll").click(function() {
		$('html, body').animate({
			scrollTop: $("#about").offset().top
		}, 200);
	});
});

$(window).load(function (){
	$("#portfolioScroll").click(function() {
		$('html, body').animate({
			scrollTop: $("#portfolio").offset().top
		}, 200);
	});
});

$(window).load(function (){
	$("#topScroll").click(function() {
		$('html, body').animate({
			scrollTop: $("#top").offset().top
		}, 200);
	});
});