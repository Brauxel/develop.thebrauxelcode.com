/*
	JavaScript Document for The Brauxel Code
	URI: http://thebrauxelcode.com/
	Author: Aakash Bhatia <http://thebrauxelcode.com/ >
*/

$(document).ready(function() {
	"use strict";
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
	$('.rslides').responsiveSlides({
		auto: true,             // Boolean: Animate automatically, true or false
		speed: 500,            // Integer: Speed of the transition, in milliseconds
		timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
		pager: false,           // Boolean: Show pager, true or false
		nav: false,             // Boolean: Show navigation, true or false
		random: false,          // Boolean: Randomize the order of the slides, true or false
		pause: false,           // Boolean: Pause on hover, true or false
		pauseControls: true,    // Boolean: Pause when hovering controls, true or false
		prevText: "Previous",   // String: Text for the "previous" button
		nextText: "Next",       // String: Text for the "next" button
		maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
		navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
		manualControls: "",     // Selector: Declare custom pager navigation
		namespace: "rslides",   // String: Change the default namespace used
		before: function(){},   // Function: Before callback
		after: function(){}     // Function: After callback
	});
	
	// Portfolio hover animation
	$('.overlay-layer').css('padding-top', ($('.overlay-layer-container').height()/2) - 18 );
	$('.overlay-layer').css('padding-bottom', ($('.overlay-layer-container').height()/2) - 18 );
	
	$('#portfolio article').hover(
		function() {
			$(this).find('.overlay-layer').fadeIn();
		},
		function() {
			$(this).find('.overlay-layer').fadeOut();
	});
});