<div class="content">

	<ul>
		<?php 
			$queryHomePageArgs = array (
					'category_name' => 'obavijesti-i-novosti',
				);
			$queryHomePage = new WP_Query($queryHomePageArgs);
			if($queryHomePage->have_posts()){
				while($queryHomePage->have_posts()){
					$queryHomePage->the_post();?>
					<li>
						<h2><a href="">Dan vode 22. ožujka</a></h2>
						<div class="info clearfix">
							<div><span>Author:</span> Admin</div>
							<div><span>Objavljeno:</span> 16.10.2011.</div>
							<div><span>Kategorija:</span> <a href="">Obavijesti</a></div>
						</div>
						<div class="info-text">
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
							</p>
						</div>
					</li>

				<?php }

			} else {
				echo "Nema unosa koji zadvoljava uvjet!";
			}
			wp_reset_postdata();
		?>
		<!--<li>
			<h2><a href="">Dan vode 22. ožujka</a></h2>
			<div class="info clearfix">
				<div><span>Author:</span> Admin</div>
				<div><span>Objavljeno:</span> 16.10.2011.</div>
				<div><span>Kategorija:</span> <a href="">Obavijesti</a></div>
			</div>
			<div class="info-text">
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
		</li>
		<li>
			<h2><a href="">Dan vode 22. ožujka</a></h2>
			<div class="info clearfix">
				<div><span>Author:</span> Admin</div>
				<div><span>Objavljeno:</span> 16.10.2011.</div>
				<div><span>Kategorija:</span> <a href="">Obavijesti</a></div>
			</div>
			<div class="info-text">
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
		</li>
		<li>
			<h2><a href="">Dan vode 22. ožujka</a></h2>
			<div class="info clearfix">
				<div><span>Author:</span> Admin</div>
				<div><span>Objavljeno:</span> 16.10.2011.</div>
				<div><span>Kategorija:</span> <a href="">Obavijesti</a></div>
			</div>
			<div class="info-text">
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
		</li>
		<li>
			<h2><a href="">Dan vode 22. ožujka</a></h2>
			<div class="info clearfix">
				<div><span>Author:</span> Admin</div>
				<div><span>Objavljeno:</span> 16.10.2011.</div>
				<div><span>Kategorija:</span> <a href="">Obavijesti</a></div>
			</div>
			<div class="info-text">
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
		</li>-->
	</ul>

	<div class="navigation">
		<p>
			<a href="http://www.designtheplanet.com/news/">« Stariji textovi</a> — 
			<a href="http://www.designtheplanet.com/news/page/3/">Noviji tekstovi »</a>
		</p>
	</div>

</div>