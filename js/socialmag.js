//Custom scripts for Front End Displays by ThemesMatic

// removes featured class on scroll (above 991px breakpoint)
jQuery(document).ready(function($) {
	$(window).on('resize', function() {
		$(window).scroll(function() {
			if ($('header.frontpage').length) {
				var scroll = $(window).scrollTop();
				if (scroll >= 1) {
					$('.masthead').removeClass('featured');
				} else {
					$('.masthead').addClass('featured');
				}
			}
		}).scroll();
	}).resize();
});

jQuery(document).ready(function($) {
	$(window).scroll(function() {
		if ($(window).scrollTop() >= 1) {
			$('#nav-container').addClass('fixed-header');
		}
		else {
		       $('#nav-container').removeClass('fixed-header');
		}
	});
});
// adds fixed header on scroll (if screen size is great than 991px)
jQuery(document).ready(function($) {
	$(window).on('resize', function () {
		if ($(window).width() < 991) {
		       $('#nav-container').removeClass('fixed-header');
		    }
	}).resize();
});

// get changed nav-container height and add to header dynamically
jQuery(document).ready(function($) {
	$(window).on('resize', function() {
		var headerheight = $('#nav-container').innerHeight();
		$('.masthead').css( "height", headerheight );
		$('#mobile-navigation').css( "line-height", headerheight + 'px' );
	});
});
// toggle main navigation menu in mobile
jQuery(document).ready(function($) {
	$('i#mobile-navigation').click(function() {
        $('.nav-wrapper').slideToggle('fast');
        return false;
	});
	$(window).on('resize', function () {
        if ($(window).width() > 991) {
            $('.nav-wrapper').show();
        } else {
            $('.nav-wrapper').hide();
        }
    }).resize();
});
// creates icon class for "toggleable" indication
jQuery(document).ready(function($) {
	$('.menu-item-has-children').prepend('<i class="fa fa-caret-down sub-menu-toggle" aria-hidden="true"></i>');
});
// toggle navigation submenus in mobile
jQuery(document).ready(function($) {
	$('.menu-item-has-children .fa-caret-down').on("click", function() {
		$(this).parent().find('ul.sub-menu').toggleClass('display');
	});
// close any toggled mobile menus on desktop
	$(window).on('resize', function () {
        if ($(window).width() > 991) {
	        $('ul.sub-menu').removeClass('display');
        }
    });
});
// maintain responsive video aspect ratio using bootstrap
// video embeds compatible: vine.co/vimeo.com/youtube.com/twitch.tv/ustream.tv
jQuery(document).ready(function($){
	$("iframe[src^='https://player.vimeo.com'], iframe[src^='https://www.youtube.com'],iframe[src^='https://vine.co'],iframe[src^='http://www.ustream.tv'],iframe[src^='https://player.twitch.tv']").addClass("embed-responsive-item");
	$("iframe[src^='https://player.vimeo.com'], iframe[src^='https://www.youtube.com'],iframe[src^='https://vine.co'],iframe[src^='http://www.ustream.tv'],iframe[src^='https://player.twitch.tv']").wrap("<div class='embed-responsive embed-responsive-16by9'></div>");
});
// Creates scroll top action
jQuery(document).ready(function($){
	//show and hide scroll up button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 500) {
			$('.socialmag-top').addClass('show-scroll');
		} else {
			$('.socialmag-top').removeClass('show-scroll');
		}
	}).scroll();
	
// scroll to top on click
	$('.socialmag-top').click(function(event){
		event.preventDefault();
		$('html,body').animate({
			scrollTop: 0 ,
			}, 800);
	});
});