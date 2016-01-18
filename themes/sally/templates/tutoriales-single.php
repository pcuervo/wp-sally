<?php
	$tutoriales_args = array(
		'post_type' 		=> 'tutoriales',
		'posts_per_page'	=> -1,
		'orderby'			=> 'date',
		'order'				=> 'ASC',
	);
	$query_tutoriales = new WP_Query( $tutoriales_args );
	if( $query_tutoriales->have_posts() ) : while( $query_tutoriales->have_posts() ) : $query_tutoriales->the_post();
		$image_urls = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$nombre = get_post_meta( $post->ID, '_nombre_meta', true );
		$slug_categoria_tutorial = get_categoria_tutorial( $post->ID, 0 );
	?>
		<div class="[ col-xs-6 col-sm-3 col-md-2 ][ no-padding ][ grid-item ][ <?php echo $slug_categoria_tutorial; ?> ]">
			<div class="[ padding--square ][ bg-image ][ relative ][ grid-item__image ]" style="background-image: url('<?php echo $image_urls[0] ?>');">
				<div class="[ bg-opacity-dark ][ grid-item__info_compressed ]">
					<div class="[ center-full ]">
						<p class="[ text-uppercase color-primary ]"><strong><?php echo $nombre; ?></strong></p>
						<p class="[ color-light ]"><?php echo get_the_title(); ?></p>
					</div>
				</div>
				<div class="[ grid-item__info ]" data-toggle="modal" data-target="#tutoriales3">
					<div class="[ relative ][ height-100 ]">
						<button class="[ btn-play ][ center-full ]" onclick="playPause()">
							<img src="<?php echo THEMEPATH; ?>img/play-btn.png">
						</button>
						<div class="[ grid-item__info__bg ]">
							<p class="[ text-uppercase color-black ][ no-margin ][ fz-small ][ js-nombre ]"><strong> <?php echo $nombre; ?></strong></p>
							<p class="[ color-light ][ no-margin ][ fz-small ][ js-titulo ]"><?php echo get_the_title(); ?></p>
							<span class="[ hidden ][ js-url-video ]"><?php echo $url_video; ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
	endwhile; endif; wp_reset_query();
?>
