<?php
date_default_timezone_set('America/Mexico_City');
/*------------------------------------*\
	#CONSTANTS
\*------------------------------------*/

/**
* Define paths to javascript, styles, theme and site.
**/
define( 'JSPATH', get_template_directory_uri() . '/js/' );
define( 'BOOTSTRAP_PATH', get_template_directory_uri() . '/dist/' );
define( 'CSSPATH', get_template_directory_uri() . '/css/' );
define( 'THEMEPATH', get_template_directory_uri() . '/' );
define( 'SITEURL', site_url('/') );



/*------------------------------------*\
	#INCLUDES
\*------------------------------------*/

require_once('inc/post-types.php');
require_once('inc/metaboxes.php');
require_once('inc/taxonomies.php');
require_once('inc/pages.php');
require_once('inc/functions-admin.php');
require_once('inc/functions-js-footer.php');



/*------------------------------------*\
	#GENERAL FUNCTIONS
\*------------------------------------*/

/**
* Enqueue frontend scripts and styles
**/
add_action( 'wp_enqueue_scripts', function(){

	// scripts
	//wp_enqueue_script( 'jquery', 'http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js', array(), '2.0.3', true );
	wp_enqueue_script( 'plugins', JSPATH.'functions.js', array('jquery'), '2.0.3', true );
	wp_enqueue_script( 'functions', JSPATH.'functions.js', array('plugins'), '1.0', true );
	wp_enqueue_script( 'bootstrap_js', 'http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/js/bootstrap.min.js', array(), '3.1.0', true );

	if( is_page( 'grabando' ) ){
		wp_enqueue_script( 'cameratag', 'http://cameratag.com/api/v6/js/cameratag.js', array('functions'), '1.0', true );
		wp_enqueue_script( 'strings', JSPATH.'strings.js', array('cameratag'), '1.0', true );
	}

	// localize scripts
	wp_localize_script( 'functions', 'ajax_url', admin_url('admin-ajax.php') );
	wp_localize_script( 'functions', 'site_url', site_url() );
	wp_localize_script( 'functions', 'theme_url', THEMEPATH );	

	// styles
	wp_enqueue_style( 'styles', get_stylesheet_uri() );

});

/**
* Add javascript to the footer of pages.
**/
add_action( 'wp_footer', 'footer_scripts', 21 );

/**
 * Guarda una entrada para post type Tutorial
 *
 * @param string $nombre - Nombre de la autora
 * @param string $titulo - Título del tutorial
 * @param int $id_categoria - ID de taxonomy term de categoría
 * @param string $url_video - URL de video del tutorial
 * @param string $url_imagen - URL relative de thumb del video
 * @return integer $post_id - ID del post creado.
 */
function save_tutorial( $nombre, $titulo, $id_categoria_tutorial, $url_video, $url_imagen ){
	// Create post object
	$tutorial_post = array(
		'post_title'    => $titulo,
		'post_status'   => 'publish',
		'post_author'   => 1,
		'post_type'		=> 'tutoriales'
	);
	$post_id = wp_insert_post( $tutorial_post );

	if( ! $post_id ) return 0;

	add_post_meta( $post_id, '_nombre_meta', $nombre );
	add_post_meta( $post_id, '_url_video_meta', $url_video );
	add_post_meta( $post_id, THEMEPATH . '_url_imagen_meta', $url_imagen );
	$id = wp_set_object_terms( $post_id, array( $id_categoria_tutorial ), 'categoria-tutorial' );
	return $post_id;
}// save_tutorial



/*------------------------------------*\
	#HELPER FUNCTIONS
\*------------------------------------*/

/**
 * Print the title tag based on what is being viewed.
 * @return string
 */
function print_title(){
	global $page, $paged;

	wp_title( '|', true, 'right' );
	bloginfo( 'name' );

	// Add a page number if necessary
	if ( $paged >= 2 || $page >= 2 ){
		echo ' | ' . sprintf( __( 'Página %s' ), max( $paged, $page ) );
	}
}// print_title

show_admin_bar(false);

/**
 * Muestra select con las categorías para los tutoriales. 
 * @return array $categories 
*/
function show_select_categorias_tutoriales(){
	$args = array( 'hide_empty' => false );
	$terms = get_terms( 'categoria-tutorial', $args );
	echo '<label class="[ text-uppercase ][ fz-small ][ letter-spacing--small ] ">Categoría</label>';
	echo '<select class="[ form-control select-categorias ][ margin-bottom ]" name="frase1_category" id="frase1_category">';
	foreach ( $terms as $term) {
		echo '<option value="' . $term->name . '">' . $term->name . '</option>';
	}
	echo '</select>';
}// show_select_categorias_tutoriales



/*------------------------------------*\
	#FORMAT FUNCTIONS
\*------------------------------------*/



/*------------------------------------*\
	#SET/GET FUNCTIONS
\*------------------------------------*/

/**
 * Obtiene las categorías para los tutoriales. 
 * @return array $categories 
*/
function get_categorias_tutoriales(){
	$terms = get_terms( 'categoria-tutorial' );
	$categories = array();
	foreach ( $terms as $term) {
		$categories[$term->slug] = $term->name;
	}
	return $categories;
}// get_categorias_tutoriales

/**
 * Obtiene las categoría (nombre o slug) para un tutorial.
 * @param int $post_id 
 * @param boolean $name 
 * @return string $category
*/
function get_categoria_tutorial( $post_id, $name ){
	$category_terms = get_the_terms( $post_id, 'categoria-tutorial' );
	if( empty( $category_terms ) ){
		return '';
	}
	if( $name ) {
		return $category_terms[0]->name;
	}
	return $category_terms[0]->slug;
}// get_categoria_tutorial



/*------------------------------------*\
	#AJAX FUNCTIONS
\*------------------------------------*/

/**
 * Send email for "more information"
 * @return JSON $message - A success/error message about the status of the post.
*/
function send_email_reuniones(){
	$nombre_apellido 	= $_POST['nombre-y-apellido'];
	$email 				= $_POST['email'];
	$comensales 		= $_POST['comensales'];
	$fecha 				= $_POST['fecha'];
	$comentarios 		= isset( $_POST['comentarios'] ) ? $_POST['comentarios'] : '-';

	$to = 'miguel@pcuervo.com,clientes@dabba.mx';
	$subject = 'Informes acerca de Dabba para reuniones';
	$headers = 'From: Dabba <no-reply@dabba.mx>' . "\r\n";
	$message = '<html><body>';
	$message .= '<p><strong>'.$nombre_apellido.'</strong> ha solicitado información para una reunión.</p>';
	$message .= '<p>Email: '. $email . '</p>';
	$message .= '<p>Número de comensales estimado: '. $comensales . '</p>';
	$message .= '<p>Fecha estimada: '. $fecha . '</p>';
	if( $comentarios != '' ) $message .= '<p>Comentarios adicionales: '. $comentarios . '</p>';
	$message .= '</body></html>';

	add_filter( 'wp_mail_content_type', create_function( '', 'return "text/html"; ' ) );
	wp_mail( $to, $subject, $message, $headers );

	$message = array(
		'error'		=> 0,
		'message'	=> '¡Gracias por contactarnos ' . $nombre_apellido .'!',
		);
	echo json_encode($message , JSON_FORCE_OBJECT);
	exit();
}// send_email_reuniones
add_action("wp_ajax_send_email_reuniones", "send_email_reuniones");
add_action("wp_ajax_nopriv_send_email_reuniones", "send_email_reuniones");

