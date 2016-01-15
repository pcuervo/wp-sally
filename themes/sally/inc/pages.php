<?php


/*------------------------------------*\
	CUSTOM PAGES
\*------------------------------------*/

add_action('init', function(){

	// PASOS EXPLICATIVOS
	if( ! get_page_by_path('pasos-explicativos') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Pasos explicativos',
			'post_name'   => 'pasos-explicativos',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// TUTORIALES
	if( ! get_page_by_path('ver-tutoriales') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Ver Tutoriales',
			'post_name'   => 'ver-tutoriales',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// COMENCEMOS
	if( ! get_page_by_path('comencemos') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Comencemos',
			'post_name'   => 'comencemos',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// GRABANDO
	if( ! get_page_by_path('grabando') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Grabando',
			'post_name'   => 'grabando',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// ÉXITO
	if( ! get_page_by_path('exito') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Éxito',
			'post_name'   => 'exito',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

});
