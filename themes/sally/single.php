<?php 
get_header(); 
the_post(); 

$image_urls = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
$nombre = get_post_meta( $post->ID, '_nombre_meta', true );
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
					<!--
					<button onclick="playPause()">Play/Pause</button>
					<button onclick="makeBig()">Big</button>
					<button onclick="makeSmall()">Small</button>
					<button onclick="makeNormal()">Normal</button>
					<br><br>-->
					<video id="video1" width="100%" height="100%" controls>
						<source src="movie.mp4" type="video/mp4">
						<source src="movie.ogg" type="video/ogg">
						 <source type="video/webm" src="video.webm" />
						Your browser does not support the video tag.
					</video>
				</div>
			</div>

			<div class="[ col-xs-12 ][ margin-bottom ]">
				<div class="[ inline-block align-middle ][ margin-sides ]">
					<a href="tutoriales.html" class="[ btn btn-secondary width-100 ][ text-uppercase ][ no-margin ]">Ver más tutoriales</a>
				</div>
				<div class="[ margin-bottom ][ visible-xs ]"></div>
				<div class="[ inline-block align-middle ][ margin-sides ][ text-center ]">
					<p class="[ color-primary ][ text-uppercase ]"><strong>Compartir</strong></p>
					<div class="[ margin-top ]">
						<a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);window.location.href=('http://twitter.com/?status='+tit2+'%20'+dir+'');"  target="_blank">
							<img class="[ svg icon--fill icon--iconed icon--thickness-3 ][ color-primary ][ margin-sides--small ]" src="<?php echo THEMEPATH; ?>icons/twitter.svg">
						</a>
						<a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);var dir2= encodeURIComponent(dir);window.location.href=('http://www.facebook.com/share.php?u='+dir2+'&amp;t='+tit2+'');"  target="_blank">
							<img  class="[ svg icon--fill icon--iconed icon--thickness-3 ][ color-primary ][ margin-sides--small ]"src="<?php echo THEMEPATH; ?>icons/facebook.svg">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>