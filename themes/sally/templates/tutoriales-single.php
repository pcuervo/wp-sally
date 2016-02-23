<?php
	global $query_tutoriales;
	$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
	$tutoriales_args = array(
		'post_type' 		=> 'tutoriales',
		'posts_per_page'	=> -1,
		'orderby'			=> 'date',
		'order'				=> 'DESC',
		'paged'				=> $paged,
	);
	$query_tutoriales = new WP_Query( $tutoriales_args );
	if( $query_tutoriales->have_posts() ) : while( $query_tutoriales->have_posts() ) : $query_tutoriales->the_post();
		$image_url = THEMEPATH . get_post_meta( $post->ID, '_url_imagen_meta', true );
		$video_url = get_post_meta( $post->ID, '_url_video_meta', true );
		$nombre = get_post_meta( $post->ID, '_nombre_meta', true );
		$click_count = empty( get_post_meta( $post->ID, '_click_count_meta', true ) ) ? 0 : get_post_meta( $post->ID, '_click_count_meta', true );
		$slug_categoria_tutorial = get_categoria_tutorial( $post->ID, 0 );
		$categoria_tutorial = get_categoria_tutorial( $post->ID, 1 );
		$share_url = get_permalink();
	?>
		<div class="[ col-xs-6 col-sm-3 ][ no-padding ][ grid-item ][ <?php echo $slug_categoria_tutorial; ?> ]" data-toggle="modal" data-target="#tutoriales3">
			<div class="[ padding--square ][ bg-image ][ relative ][ grid-item__image ]" style="background-image: url('<?php echo $image_url ?>');">
				<div class="[ bg-opacity-dark ][ grid-item__info_compressed ]">
					<div class="[ center-full ]">
						<p class="[ text-uppercase color-primary ]"><strong><?php echo $nombre; ?></strong></p>
						<p class="[ color-light ]"><?php echo get_the_title(); ?></p>
					</div>
				</div>
				<div class="[ grid-item__info ]">
					<div class="[ relative ][ height-100 ]">
						<button class="[ btn-play ][ center-full ]">
							<img src="<?php echo THEMEPATH; ?>img/play-btn.png">
						</button>
						<div class="[ grid-item__info__bg ]">
							<p class="[ text-uppercase color-black ][ no-margin ][ fz-small ][ js-nombre ]"><strong> <?php echo $nombre; ?></strong></p>
							<p class="[ color-light ][ no-margin ][ fz-small ][ js-titulo ]"><?php echo get_the_title(); ?></p>
							<p class="[ color-light fz-small ]">
								Visto <?php echo $click_count; ?><?php echo $click_count == '1' ? ' vez' : ' veces' ?></p>
							<span class="[ hidden ][ js-url-video ]"><?php echo $video_url; ?></span>
							<span class="[ hidden ][ js-url-share ]"><?php echo $share_url; ?></span>
							<span class="[ hidden ][ js-url-share ]"><?php echo $share_url; ?></span>
							<span class="[ hidden ][ js-categoria ]"><?php echo $categoria_tutorial; ?></span>
							<span class="[ hidden ][ js-id ]"><?php echo $post->ID; ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
	endwhile; endif; wp_reset_query();
?>
