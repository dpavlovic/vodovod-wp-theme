<?php get_header( $name = null ); ?>
<!-- start:main -->
<section class="main">

	<!-- start:container -->
	<div class="container clearfix">

		<!-- start:content -->
		<?php get_template_part( 'content', $name = 'singlepage' )?>
		<!-- stop:content -->
		<?php get_sidebar( $name = "right" ) ?>
	</div>
	<!-- stop:container -->

</section>
<!-- stop:main -->
<?php get_footer( $name = null );?>