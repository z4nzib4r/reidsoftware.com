var windowHeight;
var windowWidth;
var navOpen = false;
var scrollElements = [];
var scrollPosY;

document.getElementById('loading').style.backgroundColor = '#212129'; 

window.addEventListener('load',function(){
  document.querySelector('body').classList.add("loaded");
});

$(document).ready(function(){
	setEventListeners();
	scrollPosY = $(window).scrollTop();
	revealElements( scrollPosY );
});

function setEventListeners() {
	$('#nav-toggle').on('click', function() {
		toggleNavMenu(this);
	});

	// $(window).on('scroll', function() {
	// 	scrollPosY = $(window).scrollTop();
	// 	revealElements( scrollPosY );
	// });

}


function toggleNavMenu(el) {
	if (navOpen === false ) {
		$(el).addClass('nav-open');
		$('#menu').addClass('nav-open');
		navOpen = true;
	} else {
		$(el).removeClass('nav-open');
		$('#menu').removeClass('nav-open');
		navOpen = false;
	}
}

function revealElements( scrollPos ) {
	windowHeight = $(window).height();
	$('.scroll-reveal').each( function( index, element ) {
		var elPos = offset(element).top;
		if ( scrollPos > elPos-windowHeight ) {
			$(element).addClass('in');
		}
	});
}

function offset(el) {
  var rect = el.getBoundingClientRect(),
  scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
  scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
}
