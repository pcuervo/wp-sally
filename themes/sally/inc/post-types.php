<?php

/*------------------------------------*\
	CUSTOM POST TYPES
\*------------------------------------*/

add_action('init', function(){

	// ARCHIVO
	$labels = array(
		'name'          => 'Tutoriales',
		'singular_name' => 'Tutorial',
		'add_new'       => 'Nuevo tutorial',
		'add_new_item'  => 'Nuevo tutorial',
		'edit_item'     => 'Editar tutorial',
		'new_item'      => 'Nuevo tutorial',
		'all_items'     => 'Todos',
		'view_item'     => 'Ver tutorial',
		'search_items'  => 'Buscar tutorial',
		'not_found'     => 'No se encontró',
		'menu_name'     => 'Tutoriales'
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'tutoriales' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'tutoriales', $args );

});