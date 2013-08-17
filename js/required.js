$(document).ready(function() {
	
	//dropdown menu handler
	jQuery('nav ul li').hover(
        function() { jQuery(this).children('ul').css('display', 'block'); 
        },
        function() { jQuery(this).children('ul').css('display', 'none'); }
    );	
		
	$('.ios_slider').iosSlider({
		desktopClickDrag: true,
		infiniteSlider: true,
		responsiveSlides: true,
		autoSlide: true
	});
});