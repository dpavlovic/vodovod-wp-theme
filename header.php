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
		<script src="<?php echo get_template_directory_uri(); ?>/js/required.js"></script>
		<!-- end:scripts -->

		 <!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	
	<body>
	
		<!-- start:header -->
		<header id="header">
			
			<div class="container clearfix">
				
				<h1><a href="" class="logo">Vodovod Omiš</a></h1>
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
				
				<!--<ul class="clearfix top-menu">
					<li><a href="">Vodovod d.o.o.</a></li>
					<li><a href="">Online pritužbe</a></li>
					<li><a href="">Najčešća pitanja</a></li>
					<li><a href="">Kontakt</a></li>
				</ul>-->
				
			</div>
			
			
		</header>
		<!-- end:header -->
		  
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
				<!--<nav>
					<ul class="clearfix">
						<li><a href="">Početna</a></li>
						<li><a href="">Javna nabava</a></li>
						<li><a href="">Obavijesti</a></li>
						<li><a href="">Servisne informacije</a></li>
						<li><a href="">Zakoni, pravilnici, odluke</a></li>
					</ul>
				</nav>-->

				<!--<div class="search">
					<form action="#">
						<p class="clearfix">
							<input type="text" class="text" palcehodler="pretraga...">
							<input type="submit" class="submit" value="Traži">
						</p>
					</form>
				</div>-->

			</div>

		</section>
		<!-- end:main-navigation-over -->
		
		