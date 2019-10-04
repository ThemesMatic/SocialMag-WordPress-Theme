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
		return false;
	});
// close any toggled mobile menus on desktop
	$(window).on('resize', function () {
        if ($(window).width() > 991) {
	        $('ul.sub-menu').removeClass('display');
        }
    });
});
// Smooth scroll to anchor links
jQuery(document).ready(function($){
    $('.featured-button[href*="#"]').click(function(e) {
        e.preventDefault();
        $("html, body").animate({
	        scrollTop: $($(this).attr("href")).offset().top-60
	    }, 500);
	  return false;  
    });
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
	$('.socialmag-top').click(function(e){
		e.preventDefault();
		$('html,body').animate({
			scrollTop: 0 ,
			}, 800);
			return false;
	});

});
// maintain responsive video aspect ratio using bootstrap
// video embeds compatible: vimeo.com/youtube.com/twitch.tv/ustream.tv
jQuery(document).ready(function($){
	$("iframe[src^='https://player.vimeo.com'], iframe[src^='https://www.youtube.com'],iframe[src^='http://www.ustream.tv'],iframe[src^='https://player.twitch.tv']").addClass("embed-responsive-item");
	$("iframe[src^='https://player.vimeo.com'], iframe[src^='https://www.youtube.com'],iframe[src^='http://www.ustream.tv'],iframe[src^='https://player.twitch.tv']").wrap("<div class='embed-responsive embed-responsive-16by9'></div>");
});