<div class="content">
	<div class="info-text">
		<?php echo category_description()?>
	</div>
	<ul class="cat-law">
		<?php 
		if(have_posts()){
			while(have_posts()){
				the_post();?>
				<li>
					<div class="post-thumbnail"><img src="<?php echo get_template_directory_uri();?>/images/document-icon.png"></div>
					<div class="gallery-info"><h2><?php the_title( $before = '', $after = '', $echo = true )?></h2>
						<div class="info clearfix">
							<?php if(is_category( $category = 'obavijesti-i-novosti' )) { ?><div><span>Objavljeno:</span><?php the_time( $d = 'F j, Y' )?></div><?php } ?></div>

							<div class="clearfix"><span>Kategorija:</span> <?php the_category( $separator = ',', $parents='', $post_id = false )?></div>
							<div class="link clearfix"><a href="<?php echo get_post_meta($post->ID, 'dbt_url', true); ?>" >Preuzimanje dokumenta</a></div>
							<div class="description clearfix">Opis: <?php echo get_post_meta($post->ID, 'dbt_opis', true); ?></div>
						</div>
						<div class="info-text">
							<?php //the_content( $more_link_text = "Pročitaj više ...", $stripteaser = false );?>
						</div>
					</li>

					<?php }

				} else {
					echo "Nema unosa koji zadvoljava uvjet!";
				}
				?>
			</ul>

		</div>