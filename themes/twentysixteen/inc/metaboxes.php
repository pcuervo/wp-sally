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
function metabox_nombre( $post ){
	$nombre = get_post_meta($post->ID, '_nombre_meta', true);
	wp_nonce_field(__FILE__, '_nombre_meta_nonce');
	echo "<input type='text' class='[ widefat ]' name='_nombre_meta' value='$nombre'>";
}// metabox_nombre



/*------------------------------------*\
	SAVE METABOXES DATA
\*------------------------------------*/

add_action('save_post', function( $post_id ){ save_metaboxes_tutoriales( $post_id ); });

/**
* Save the metaboxes for post type "Productos"
**/
function save_metaboxes_tutoriales( $post_id ){
	// Guarnición 1
	if ( isset($_POST['_url_video_meta']) and check_admin_referer( __FILE__, '_url_video_meta_nonce') ){
		update_post_meta($post_id, '_url_video_meta', $_POST['_url_video_meta']);
	}
	// Guarnición 2
	if ( isset($_POST['_nombre_meta']) and check_admin_referer( __FILE__, '_nombre_meta_nonce') ){
		update_post_meta($post_id, '_nombre_meta', $_POST['_nombre_meta']);
	}
}// save_metaboxes_tutoriales
