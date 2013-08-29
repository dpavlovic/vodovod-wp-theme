<?php
	function set_html_content_type()
	{
		return 'text/html';
	}

	$predmet = array(
		0 => 'Prijava krađe vode',
		1 => 'Pritužbe na rad vodovoda',
		2 => 'Razno',	
	);
	
	$success	=	FALSE;
	$error		=	FALSE;

	if( isset($_POST['submit_contact']) ){
		
		if( trim($_POST['nameaaa']) == '' ){
			$error = TRUE;
		}
		
		if( trim($_POST['address']) == '' ){
			$error = TRUE;
		}
		
		if( trim($_POST['email']) == '' ){
			$error = TRUE;
		}
		
		if( trim($_POST['emails']) == '' ){
			$error = TRUE;
		}
		
		if( trim($_POST['website']) == '' ){
			$error = TRUE;
		}
		
		//send email
		if(!$error){
			
			$email_from			=	'info@vodovod.hr';
			
			$name				=	$_POST['nameaaa'];
			$address			=	$_POST['address'];
			$email				=	$_POST['email'];
			$message_value		=	$_POST['message'];
			
			$predmet_name		=	$predmet[$_POST['predmet']];
			
			$message	=	'
						<p><strong>Ime i prezime:</strong> '.$name.'</p>
						<p><strong>Adresa:</strong> '.$address.'</p>
						<p><strong>Email:</strong> '.$email.'</p>
						<p><strong>Predmet:</strong> '.$predmet_name.'</p>
						<p><strong>Poruka: </strong><br>'.$message_value.'</p>
				';
			
			//set up attachment
			$attach_me = array();
		
			if($_FILES["foto"]["error"] != 4)
			{
				move_uploaded_file($_FILES["foto"]["tmp_name"],WP_CONTENT_DIR .'/uploads/'.basename($_FILES['foto']['name']));
				$attach_me = array(WP_CONTENT_DIR ."/uploads/".$_FILES["foto"]["name"]);
			}

			$headers[] = 'From: Kontakt Web Form <'.$email_from.'>';

			add_filter( 'wp_mail_content_type', 'set_html_content_type' );
			$check = wp_mail( 'vatrom@gmail.com@gmail.com', 'Poruka s web stranice - forma prijava', $message, $headers, $attach_me );
			remove_filter( 'wp_mail_content_type', 'set_html_content_type' );
			
			$success = TRUE;
			unset($_POST);
		}
	}
?>
<div class="content contact_form">

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
								//echo "proba";
							?>
						</div>
					</li>

				<?php }

			} else {
				echo "Nema unosa koji zadovoljava uvjet!";
			}
			wp_reset_postdata();
		?>
	</ul>
	
	<?php if($success): ?>
		<p class="success">
			Podaci poslani. Hvala na interesu.
		</p>
	<?php endif; ?>
		
	<?php if($error): ?>
		<p class="error">
			Molimo Vas popunite sva polja. Hvala.
		</p>
	<?php endif; ?>
		
	<form action="<?php the_permalink() ?>" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label>Ime i prezime:</label>
				<?php $name = ( isset($_POST['nameaaa']) )? $_POST['nameaaa'] : '';?>
				<input type="text" name="nameaaa" class="text" value="<?php echo $name; ?>" />
			</li>
			<li>
				<label>Adresa:</label>
				<?php $address = ( isset($_POST['address']) )? $_POST['address'] : '';?>
				<input type="text" name="address" class="text" value="<?php echo $address; ?>" />
			</li>
			<li>
				<label>E-mail adresa:</label>
				<?php $email_value = ( isset($_POST['email']) )? $_POST['email'] : '';?>
				<input type="text" name="email" class="text" value="<?php echo $email_value; ?>" />
			</li>
			<li>
				<label>Predmet:</label>
				<select name="predmet" class="select">
					<?php foreach ($predmet AS $key => $type): ?>
						<?php $selected = ( isset($_POST['predmet']) && $_POST['predmet'] == $key )? 'selected="selected"' : '';?>
						<option value="<?php echo $key;?>" <?php echo $selected;?>><?php echo $type; ?></option>
					<?php endforeach; ?>
				</select>
			</li>
			<li>
				<label>Poruka:</label>
				<?php $message_value = ( isset($_POST['message']) )? $_POST['message'] : '';?>
				<textarea name="message" class="textarea"><?php echo $message_value; ?></textarea>
			</li>
			
			<li>
				<label>Prijenos slike:</label>
				<input type="file" name="foto" class="file"  />
			</li>
			<li class="clearfix">
				<input type="submit" name="submit_contact" value="Pošalji" class="submit">
			</li>
		</ul>
	</form>

	<div class="navigation">
		<p>
			<?php previous_post_link('%link', 'Stariji tekst', TRUE); ?> 
			<!--<a href="#">« Stariji textovi</a>--> — 
			<?php next_post_link('%link', 'Noviji tekst', TRUE); ?> 
			<!--<a href="#">Noviji tekstovi »</a>-->
		</p>
	</div>

</div>