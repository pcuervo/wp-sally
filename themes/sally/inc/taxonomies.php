<?php

/*------------------------------------*\
	TAXONOMIES
\*------------------------------------*/

add_action( 'init', 'custom_taxonomies_callback', 0 );
function custom_taxonomies_callback(){

	if( ! taxonomy_exists('categoria-tutorial')){
		$labels = array(
			'name'              => 'Categoría tutorial',
			'singular_name'     => 'Categoría tutorial',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar categoría',
			'update_item'       => 'Actualizar categoría',
			'add_new_item'      => 'Nueva categoría',
			'menu_name'         => 'Categoría tutorial'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'categoria-tutorial' ),
		);

		register_taxonomy( 'categoria-tutorial', 'tutoriales', $args );
	}
	insert_tutoriales_taxonomy_terms();
}// custom_taxonomies_callback

/*
 * Insert  $new_term to $taxonomy based on the title of new post
 
 * @param string $new_term
 * @param string $taxonomy
 */
function insert_tutoriales_taxonomy_terms(){
	$caracteristicas = array( 'Maquillaje', 'Cabello', 'Uñas', 'Cuidado de la piel' );
	foreach ( $caracteristicas as $car ) {
		$term = term_exists( $car, 'categoria-tutorial' );
		if ( FALSE !== $term && NULL !== $term ) continue;

		wp_insert_term( $car, 'categoria-tutorial' );
	}
}// insert_tutoriales_taxonomy_terms

