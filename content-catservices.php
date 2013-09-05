<div class="content">
	<div class="info-text">
		<?php echo category_description()?>
	</div>
		<?php
			$args = array (
				'posts_per_page' => 20,
				'meta_key' => '_serviceinfo_rb',
				'order' => 'ASC',
				'orderby'=>'meta_value_num' // for numeric value use 'meta_value_num' instead
			);
			query_posts ($args);		 
		?>
	<ul>
		<?php 
			if(have_posts()){
				while(have_posts()){
					the_post();?>
					<li>
						<a href="<?php the_permalink();?>"><div class="post-thumbnail"><?php the_post_thumbnail( $size = 'gallery-intro', $attr = '' )?></div></a>
						<div class="gallery-info"><h2><a href="<?php the_permalink();?>"><?php the_title( $before = '', $after = '', $echo = true )?></a></h2>
						<div class="info clearfix">
							<div><span>Author:</span><?php the_author( $deprecated = '', $deprecated_echo = true )?></div>
							<?php if(is_category( $category = 'obavijesti-i-novosti' )) { ?><div><span>Objavljeno:</span><?php the_time( $d = 'F j, Y' )?></div><?php } ?>
							<div><span>Kategorija:</span> <?php the_category( $separator = ',', $parents='', $post_id = false )?></div>
						</div></div>
						<div class="info-text">
							<?php the_content( $more_link_text = "Pročitaj više ...", $stripteaser = false );?>
						</div>
					</li>

				<?php }

			} else {
				echo "Nema unosa koji zadvoljava uvjet!";
			}
		?>
		</ul>
		
</div>
