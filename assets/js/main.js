var windowHeight;
var windowWidth;
var navOpen = false;
var scrollElements = [];
var scrollPosY;

var colors = ['#ffdc77','#f2b970','#adf270','#ff8bf0','#ff5959'];
var randomColor = colors[Math.floor(Math.random() * colors.length)];
document.getElementById('loading').style.backgroundColor = randomColor; 

window.addEventListener('load',function(){
  document.querySelector('body').classList.add("loaded");
});

$(document).ready(function(){
	setEventListeners();
	scrollPosY = $(window).scrollTop();
	revealElements( scrollPosY );
	initializeContactForm();
});

function setEventListeners() {
	$('#nav-toggle').on('click', function() {
		toggleNavMenu(this);
	});

	$(window).on('scroll', function() {
		scrollPosY = $(window).scrollTop();
		revealElements( scrollPosY );
	});

	$('#submit-contact-form').on('click', function() {
		submitContactForm();
	});

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

function initializeContactForm() {
	var form = $('#contact-form');
	$(form).validate({
		rules: {
			name: {
				required: true,
				minlength: 2
			},
			email: {
				required: true,
				email: true
			},
			message: {
				required: true
			}
		},
		errorPlacement: function(error, element) {
			error.insertAfter(element);
			return true;
		},
		submitHandler: function() {
			submitContactForm();
		}
	});
}

function submitContactForm() {
	gtag('event', 'contact_form_submission', {
        'app_name': 'Reid Software'
      });
	if ( $('#contact-form').valid() ) {
		$('#submit-contact-form').val('Processing...');
		var formData = $('#contact-form').serializeArray();
		console.log(formData);
		$.ajax({
			type: "POST",
			url: "/app/components/processContactForm.php",
			data: formData,
			cache: false,
			success: function(result) {
				$('#contact-form-container').fadeOut('fast', 'swing', function() {
					$('#success-message').fadeIn('fast', 'swing');
				});
				
			},
			error: function( error ) {
				$('#submit-contact-form').val('Send');
				console.log(error);
			}
		});
	}
}