<?php

/*------------------------------------*\
	CUSTOM METABOXES
\*------------------------------------*/

add_action('add_meta_boxes', function(){ add_metaboxes_tutoriales(); });



/*------------------------------------*\
	CUSTOM METABOXES FUNCTIONS
\*------------------------------------*/

/**
* Add metaboxes for page type "Contacto"
**/
function add_metaboxes_tutoriales(){
	add_meta_box( 'nombre', 'Nombre de autora', 'metabox_nombre', 'tutoriales', 'advanced', 'high' );
	add_meta_box( 'url_video', 'URL video', 'metabox_url_video', 'tutoriales', 'advanced', 'high' );
	add_meta_box( 'url_imagen', 'URL imagen', 'metabox_url_imagen', 'tutoriales', 'advanced', 'high' );
	add_meta_box( 'click_count', '# clicks', 'metabox_click_count', 'tutoriales', 'advanced', 'high' );
	add_meta_box( 'email', 'Correo Electrónico', 'metabox_email', 'tutoriales', 'advanced', 'high' );
}// add_metaboxes_PAGE



/*-----------------------------------------*\
	CUSTOM METABOXES CALLBACK FUNCTIONS
\*-----------------------------------------*/

/**
* Display metabox in page or post type
* @param obj $post
**/
function metabox_url_video( $post ){
	$url_video = get_post_meta($post->ID, '_url_video_meta', true);
	wp_nonce_field(__FILE__, '_url_video_meta_nonce');
	echo "<input type='text' class='[ widefat ]' name='_url_video_meta' value='$url_video'>";
}// metabox_url_video

/**
* Display metabox in page or post type
* @param obj $post
**/
function metabox_url_imagen( $post ){
	$url_imagen = get_post_meta($post->ID, '_url_imagen_meta', true);
	wp_nonce_field(__FILE__, '_url_imagen_meta_nonce');
	echo "<input type='text' class='[ widefat ]' name='_url_imagen_meta' value='$url_imagen'>";
}// metabox_url_imagen

/**
* Display metabox in page or post type
* @param obj $post
**/
function metabox_nombre( $post ){
	$nombre = get_post_meta($post->ID, '_nombre_meta', true);
	wp_nonce_field(__FILE__, '_nombre_meta_nonce');
	echo "<input type='text' class='[ widefat ]' name='_nombre_meta' value='$nombre'>";
}// metabox_nombre

/**
* Display metabox in page or post type
* @param obj $post
**/
function metabox_click_count( $post ){
	$click_count = get_post_meta($post->ID, '_click_count_meta', true);
	wp_nonce_field(__FILE__, '_click_count_meta_nonce');
	echo "<label class='[ widefat ]'>".$click_count."</label>";
}// metabox_click_count

/**
* Display metabox in page or post type
* @param obj $post
**/
function metabox_email( $post ){
	$email = get_post_meta($post->ID, '_email_meta', true);
	wp_nonce_field(__FILE__, '_email_meta_nonce');
	echo "<input type='text' class='[ widefat ]' name='_email_meta' value='$email'>";
}// metabox_nombre



/*------------------------------------*\
	SAVE METABOXES DATA
\*------------------------------------*/

add_action('save_post', function( $post_id ){ save_metaboxes_tutoriales( $post_id ); });

/**
* Save the metaboxes for post type "Productos"
**/
function save_metaboxes_tutoriales( $post_id ){
	// URL video
	if ( isset($_POST['_url_video_meta']) and check_admin_referer( __FILE__, '_url_video_meta_nonce') ){
		update_post_meta($post_id, '_url_video_meta', $_POST['_url_video_meta']);
	}
	// URL imagen
	if ( isset($_POST['_url_imagen_meta']) and check_admin_referer( __FILE__, '_url_imagen_meta_nonce') ){
		update_post_meta($post_id, '_url_imagen_meta', $_POST['_url_imagen_meta']);
	}
	// Nombre
	if ( isset($_POST['_nombre_meta']) and check_admin_referer( __FILE__, '_nombre_meta_nonce') ){
		update_post_meta($post_id, '_nombre_meta', $_POST['_nombre_meta']);
	}
	// Click count
	if ( isset($_POST['_click_count_meta']) and check_admin_referer( __FILE__, '_click_count_meta_nonce') ){
		update_post_meta($post_id, '_click_count_meta', $_POST['_click_count_meta']);
	}
	// Email
	if ( isset($_POST['_email_meta']) and check_admin_referer( __FILE__, '_email_meta_nonce') ){
		update_post_meta($post_id, '_email_meta', $_POST['_email_meta']);
	}
}// save_metaboxes_tutoriales
