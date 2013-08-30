<!DOCTYPE HTML>
<html>
	<head>

		<!-- start:global -->
		<meta charset="UTF-8">
		<!-- end:global -->

		<!-- start:page title -->
		<title>Vodovod Omiš</title>
		<!-- end:page title -->

		<!-- start:stylesheets -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
		<!-- end:stylesheets -->

		<!-- start:scripts -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.iosslider.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/required.js"></script>
			<script type="text/javascript"
		      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOgG-vvNlDW6ldi1dXYBhpz8AhVrdSI40&sensor=false">
		    </script>
		    <script type="text/javascript">
		    function initialize() {
		    	var latlng = new google.maps.LatLng(43.445808, 16.686445);
		    	var settings = {
		    		zoom: 16,
		    		center: latlng,
		    		mapTypeControl: true,
		    		mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
		    		mapTypeId: google.maps.MapTypeId.HYBRID,
		            panControl: true,
		            zoomControl: true,
		            scaleControl: true,


		    	};
		    	var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
		    	var cyntusPos = new google.maps.LatLng(43.445808, 16.686445);
		    	var newcenter = new google.maps.LatLng(43.445808, 16.686445);
		    	var cyntusMarker = new google.maps.Marker({
		    		position: cyntusPos,
		    		map: map,
		    		title:"Vodovod d.o.o Omiš"
		    	});
		}
		</script>
		<!-- end:scripts -->

		 <!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?php wp_head();?>
	</head>
	
	<body onload="initialize()">
	
		<!-- start:header -->
		<header id="header">
			
			<div class="container clearfix">
				
				<h1><a href="<?php echo home_url( $path = '', $scheme = null )?>" class="logo">Vodovod Omiš</a></h1>
					<?php
					$vodovodTopMenuArguments = array(
						'theme_location'  => 'top_right_menu',
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'clearfix top-menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
						);

						wp_nav_menu( $vodovodTopMenuArguments );?>
				
			</div>
			
			
		</header>
		<!-- end:header -->
		
		<!-- start:fluid_height -->
		<div class="fluid_height">

			<!-- start:slider_container -->
			<div class="slider_container">

				<!-- start:ios_slider -->
				<div class="ios_slider">
					<!-- start:slider -->
					<div class="slider">
						
						<article>
							<img src="<?php echo get_template_directory_uri()?>/images/header_bg.jpg" alt="" />
						</article>
						<article>
							<img src="<?php echo get_template_directory_uri()?>/images/header_bg2.jpg" alt="" />
						</article>
						<article>
							<img src="<?php echo get_template_directory_uri()?>/images/header_bg3.jpg" alt="" />
						</article>

					</div>
					<!-- end:slider -->
				</div>
				<!-- end:ios_slider -->

			</div>
			<!-- end:slider_container -->

		</div>
		<!-- end:fluid_height -->


		  
		<!-- start:main-navigation-over -->
		<section class="main-navigation-over">

			<div class="container clearfix">
				<?php
				$vodovodMainMenuArguments = array(
					'theme_location'  => 'main_menu',
					'menu'            => '',
					'container'       => 'nav',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'clearfix',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
					);

					wp_nav_menu( $vodovodMainMenuArguments );?>
			</div>

		</section>
		<!-- end:main-navigation-over -->
		
		