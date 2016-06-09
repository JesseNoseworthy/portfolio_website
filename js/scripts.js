// Smooth scroll
var smoothScroll = function() {
	// Smooth scroll
	$('a[href*=#]').click(function() {
	      var target = $(this.hash);
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	  });
}

// Show navigation bar.
portfolio.showNavBar = function() {
	// Store the navbar in a variable
	var menu = $('#navigation');
	// Now we target the scroll
	$(window).scroll(function () {
		// the window scroll
	  var y = $(this).scrollTop();
	  // This value is equivalent to -100 of the #about section
	  var z = $('#about').offset().top - 100;
	  // If the scroll is greater than or equal to -100 of #about
	  if (y >= z) { 
	  	// We will remove the .hide-nav class (which pushes a set amount
	  	// above the page)
	  	// Then we will add the .show-nav class
	  	menu.removeClass('hide-nav').addClass('show-nav');
	  }
	  else { 
	  	// If that isn't the case, we will do the opposite and 
	  	// keep the nav hidden
	  	menu.removeClass('show-nav').addClass('hide-nav'); 
	  }
	});
};
portfolio.showCurrentSection = function() {
	var sections = $('.section'),
	    links = $('.scroll.link');

	$(window).scroll(function() {
	  "use strict";
	  var currentPosition = $(this).scrollTop();
	  links.removeClass('selected');
	  
	  sections.each(function() {
	      var top = $(this).offset().top - 75,
	          bottom = top + $(this).height();
	      
	      if (currentPosition >= top && currentPosition <= bottom) {
	          $('a[href="#' + this.id + '"]').addClass('selected');
	      }
	  }); 
	});
}

// portfolio.buttonBounce = function() {
// 	$(".header-down-arrow").on('click', function (e) {
// 	        e.preventDefault();
// 	        $(this).effect( "bounce", { times : 3 }, 300);
// 	    });
// }

portfolio.textSlider = function() {

	 heroText = ['huh', 'wha?', 'yep'];
​
	setInterval( function() {
	
	$('.text-text').html().slideUp();
}, 300);
}

portfolio.init = function() {
	smoothScroll();
	portfolio.showNavBar();
	portfolio.showCurrentSection();
	// portfolio.buttonBounce();
	portfolio.textSlider();
};

$(document).ready(function () {
	portfolio.init();
});