<?php
date_default_timezone_set('Europe/Zagreb');
		
/*SET UP VARIABLES*/
setlocale(LC_TIME, 'hr_HR');
add_filter('show_admin_bar', '__return_false');
register_nav_menus( array(
	'top_right_menu' => 'Gore desno izbornik',
	'main_menu' => 'Glavni izbornik'
	) );
add_theme_support( 'post-thumbnails' );
add_image_size( 'intro-image', 290, 144 );
add_image_size( 'intro-image-crop', 290, 144, true );
// turn off default gallery style
add_filter( 'use_default_gallery_style', '__return_false' );
//remove_filter('the_content', 'wpautop');

?>