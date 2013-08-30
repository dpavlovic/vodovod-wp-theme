<?php
date_default_timezone_set('Europe/Zagreb');
		
/*SET UP VARIABLES*/
setlocale(LC_TIME, 'hr_HR');
add_filter('show_admin_bar', '__return_false');
register_nav_menus( array(
	'top_right_menu' => 'Gore desno izbornik',
	'main_menu' => 'Glavni izbornik'
	) );
add_theme_support( 'post-thumbnails' );
add_image_size( 'intro-image', 290, 144 );
add_image_size( 'gallery-intro', 100, 100, true );
add_image_size( 'intro-image-crop', 290, 144, true );
// turn off default gallery style
//add_filter( 'use_default_gallery_style', '__return_false' );
//remove_filter('the_content', 'wpautop');

$sidebar_args = array(
		'name'          => sprintf( __( 'Right Sidebar %d' ), $i ),
		'id'            => 'rightsidebar',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="box widget %2$s">',
		'after_widget'  => "</div>",
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => "</h3>",
	);
register_sidebar( $sidebar_args );

/*
 * custom meta boxes
 */
$prefix = 'dbt_';
$meta_box = array(
		'id' => 'zakoni-pravilnici-odluke',
		'title' => 'Zakoni, pravilnici, odluke',
		'page' => 'post',
		'context' => 'normal',
		'priority' => 'high',
		'fields' => array(
				array(
						'name' => 'Naslov Zakona Pravilnika ili Odluke',
						'desc' => 'Unesite naslov zakona, pravilnika ili odluke (ponoviti naslov posta)',
						'id' => $prefix . 'naslovZakonaPravilnikaOdluke',
						'type' => 'text',
						'std' => ''
				),
				array(
						'name' => 'Url dokumenta u privitku postu',
						'desc' => 'Unesite kompletan url (http://..) dokumenta - zakona pravilnika odluke',
						'id' => $prefix . 'url',
						'type' => 'text',
						'std' => '',
				),
				array(
						'name' => 'Kratak opis zakona, pravilnika odluke',
						'desc' => 'Unesite kratak opis',
						'id' => $prefix . 'opis',
						'type' => 'textarea',
						'std' => ''
				),
			)
		);

add_action('admin_menu', 'mytheme_add_box');
// Add meta box
function mytheme_add_box() {
	global $meta_box;
	add_meta_box($meta_box['id'], $meta_box['title'], 'mytheme_show_box', $meta_box['page'], $meta_box['context'], $meta_box['priority']);
}
// Callback function to show fields in meta box
function mytheme_show_box() {
	global $meta_box, $post;
	// Use nonce for verification
	echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
	echo '<table class="form-table">';
	foreach ($meta_box['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		echo '<tr>',
		'<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
		'<td>';
		switch ($field['type']) {
			case 'text':
				echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />', '<br />', $field['desc'];
				break;
			case 'textarea':
				echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>', '<br />', $field['desc'];
				break;
			case 'select':
				echo '<select name="', $field['id'], '" id="', $field['id'], '">';
				foreach ($field['options'] as $option) {
					echo '<option ', $meta == $option ? ' selected="selected"' : '', '>', $option, '</option>';
				}
				echo '</select>';
				echo '<br />';
				echo $field['desc'];
				break;
			case 'radio':
				foreach ($field['options'] as $option) {
					echo '<input type="radio" name="', $field['id'], '" value="', $option['value'], '"', $meta == $option['value'] ? ' checked="checked"' : '', ' />', $option['name'],'<br />';
				}
				break;
			case 'checkbox':
				echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />';
				break;
		}
		echo '</td><td>',
		'</td></tr>';
	}
	echo '</table>';
}
add_action('save_post', 'mytheme_save_data');
// Save data from meta box
function mytheme_save_data($post_id) {
	global $meta_box;
	// verify nonce
	if (!wp_verify_nonce($_POST['mytheme_meta_box_nonce'], basename(__FILE__))) {
		return $post_id;
	}
	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}
	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
	foreach ($meta_box['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
}
?>