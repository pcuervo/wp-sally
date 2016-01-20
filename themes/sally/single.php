<?php
get_header();
the_post();

$nombre = get_post_meta( $post->ID, '_nombre_meta', true );
$url_video = THEMEPATH . get_post_meta( $post->ID, '_url_video_meta', true );
$slug_categoria_tutorial = get_categoria_tutorial( $post->ID, 0 );
?>
<section class="[ container ]">

	<camera id='DemoCamera' data-app-id='63f9c870-72c4-0130-04c5-123139045d73'></camera>

	<img class="[ img-responsive img-title ]" src="<?php echo THEMEPATH; ?>img/title-2.png">
	<div class="[ text-center ]">
		<p class="[ text-uppercase no-margin ]"><strong><?php echo get_the_title(); ?></strong></p>
		<p class="[ text-uppercase ]"><?php echo $nombre; ?></p>
		<div class="[ row ]">

			<div class="[ col-xs-12 ][ margin-bottom--large ]">
				<div style="text-center">
					<video id="video1" width="100%" height="100%" controls>
						<source src="<?php echo $url_video; ?>" type="video/mp4">
						Your browser does not support the video tag.
					</video>
				</div>
			</div>

			<div class="[ col-xs-12 ][ margin-bottom ]">
				<div class="[ inline-block align-middle ][ margin-sides ]">
					<a href="<?php echo site_url('ver-tutoriales'); ?>" class="[ btn btn-secondary width-100 ][ text-uppercase ][ no-margin ]">Ver más tutoriales</a>
				</div>
				<div class="[ margin-bottom ][ visible-xs ]"></div>
				<div class="[ inline-block align-middle ][ margin-sides ][ text-center ]">
					<p class="[ color-light ][ text-uppercase ]"><strong>Compartir</strong></p>
					<div class="[ margin-top ]">
						<a class="[ btn-tw ]" href="http://twitter.com/home?status=Sally Beauty - <?php the_title(); ?> - <?php echo get_permalink($post->ID);?>" target="_blank">
							<img class="[ svg icon--fill icon--iconed icon--thickness-3 ][ color-light ][ margin-sides--small ]" src="<?php echo THEMEPATH; ?>icons/twitter.svg">
						</a>
						<a class="[ btn-fb ]" data-share-url="<?php echo get_permalink(); ?>" href="#">
							<img  class="[ svg icon--fill icon--iconed icon--thickness-3 ][ color-light ][ margin-sides--small ]"src="<?php echo THEMEPATH; ?>icons/facebook.svg">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>