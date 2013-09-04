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
	
	$('aside .box .menu li:has(ul)').each(function(){
		
		$(this).children('a').toggle(function(){

			$(this).parent('li').children('ul').slideDown();

			return false;
		},
		function(){
			$(this).parent('li').children('ul').slideUp();

			return false;	
		});
	});
	$( '[rel="tooltip"]' ).hover( function(e) {
	   var x = e.pageX;
	   var y = e.pageY;
	   $('#tooltip').css( { top: y, left: x, position: 'absolute' } )
	       .fadeIn();
	}, function() {
	    $('#tooltip').fadeOut();
	} );
});