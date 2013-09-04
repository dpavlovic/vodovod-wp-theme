<?php get_header( $name = null ); ?>
<!-- start:main -->
<section class="main">

	<!-- start:container -->
	<div class="container clearfix">

		<!-- start:content -->
		<?php
		if (is_category( array( 'zakoni', 'pravilnici', 'odluke', 'evidencija-javne-nabave', 'izvjestaji-drustva', 'zakoni-pravilnici-odluke', 'javna-nabava', 'objave' ) ) ) { 
			get_template_part( 'content', $name = 'catzakoni' ) ;
		} else {
			get_template_part( 'content', $name = 'category' ) ;
		} ?>
		<!-- stop:content -->
		<?php get_sidebar( $name = "right" ) ?>
	</div>
	<!-- stop:container -->

</section>
<!-- stop:main -->
<?php get_footer( $name = null );?>