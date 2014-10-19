// Allows for smooth scrolling to the contact area.
$(window).load(function (){
	$("#contactScroll").click(function() {
		$('html, body').animate({
			scrollTop: $("#footerContent").offset().top
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