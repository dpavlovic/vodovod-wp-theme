<div class="content">

	<ul>
		<?php 
			if(have_posts()){
				while(have_posts()){
					the_post();?>
					<li>
						<h2><a href="<?php the_permalink();?>"><?php the_title( $before = '', $after = '', $echo = true )?></a></h2>
						<div class="info clearfix">
							<div><span>Author:</span><?php the_author( $deprecated = '', $deprecated_echo = true )?></div>
							<div><span>Objavljeno:</span><?php the_date( $d = '', $before = '', $after = '', $echo = true )?></div>
							<div><span>Kategorija:</span> <?php the_category( $separator = ',', $parents='', $post_id = false )?></div>
						</div>
						<div class="info-text">
							<?php 
								//the_content( $more_link_text = null, $stripteaser = false );
								echo "proba";
							?>
						</div>
					</li>

				<?php }

			} else {
				echo "Nema unosa koji zadvoljava uvjet!";
			}
			wp_reset_postdata();
		?>
		</ul>

	<div class="navigation">
		<p>
			<?php previous_post_link('%link', 'Stariji tekst', TRUE); ?> 
			<!--<a href="#">« Stariji textovi</a>--> — 
			<?php next_post_link('%link', 'Noviji tekst', TRUE); ?> 
			<!--<a href="#">Noviji tekstovi »</a>-->
		</p>
	</div>

</div>