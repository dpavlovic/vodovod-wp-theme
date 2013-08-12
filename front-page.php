<?php get_header( $name = null ); ?>
<!-- start:main -->
<section class="main">

	<!-- start:container -->
	<div class="container clearfix">

		<!-- start:content -->
		<?php get_template_part( 'content', $name = 'homepage' )?>
		<!-- stop:content -->

		<aside>

			<div class="box">
				<h3>Uplate putem interneta:</h3>
				<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/komis.gif" alt="" /></a>
			</div>

			<div class="box">
				<h3>Koirisni linkovi:</h3>
				<ul>
					<li><a href="">www.undergroundwater.org</a></li>
					<li><a href="">www.azto.hr</a></li>
					<li><a href="">www.gvik.hr</a></li>
				</ul>
			</div>

			<div class="box">
				<h3>kategorije:</h3>
				<ul>
					<li><a href="">Javna nabava</a></li>
					<li><a href="">Obavijesti</a></li>
					<li><a href="">Servisne informacije</a></li>
					<li><a href="">Zakoni, pravilnici, odluke</a></li>
				</ul>
			</div>

		</aside>

	</div>
	<!-- stop:container -->

</section>
<!-- stop:main -->
<?php get_footer( $name = null );?>