<?php get_header(); ?>
<section class="[ container ]">
	<div class="[ margin-top--xlarge ][ hidden-xs ]"></div>
	<img class="[ img-responsive img-title ]" src="<?php echo THEMEPATH; ?>img/title-1.png">
	<div class="[ text-center ][ js-video-container ]">
		<div class="[ row ]">
			<div class="[ col-xs-12 ][ margin-bottom ]">
				<div style="text-center">
					<video id="video1" width="100%" height="100%" controls>
						Your browser does not support the video tag.
					</video>
				</div>
			</div>
		</div>
	</div>
	<div class="[ text-center ][ margin-top margin-bottom ]">
		<div id="hidden-published">
			<div class="[ inline-block align-middle ]">
				<a href="<?php echo site_url( 'grabando' ); ?>" class="[ btn btn-primary btn--auto ][ margin-sides--small ]" onClick="ga('send', 'event', 'GrabacionExitosa', 'clic', 'VolveraGrabar');">Volver a grabar</a>
			</div>
			<div class="[ clearfix ][ margin-bottom ][ visible-xs ]"></div>
			<div class="[ inline-block align-middle ]">
				<div class="[ js-publicar-opener ]">
					<a class="[ btn btn-primary btn--auto ][ margin-sides--small ]" onClick="ga('send', 'event', 'GrabacionExitosa', 'clic', 'Publicar');">Publicar</a>
				</div>
			</div>
		</div>
		
		<div class="[ js-publicar-container ]">
			<div class="[ js-publicar-element ][ margin-top ]">
				<div class="[ ico-small ][ margin-auto margin-bottom ][ relative ]">
					<img class="[ svg icon--stroke icon--responsive ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/share.svg">
				</div>
				<div class="[ row ]">
					<div class="[ margin-bottom--large ][ col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 ]">
						<p class="[ text-uppercase ]"><strong>Comparte</strong></p>
						<p>Tu video se ha publicado.</p>
						<p>Muchas gracias por tu tip. Ve tu resultado y empieza a contagiar al mundo.</p>
						<a href="#" class="[ btn-tw ]" data-share-url="" target="_blank">
							<img class="[ inline-block align-middle ][ margin-sides--small ][ svg icon--iconed--medium icon--thickness-3 icon--fill ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/twitter.svg">
						</a>
						<a href="#" class="[ btn-fb ]" data-share-url="">
							<img class="[ inline-block align-middle ][ margin-sides--small ][ svg icon--iconed icon--thickness-3 icon--fill ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/facebook.svg">
						</a>
						<hr>
						<div class="[ inline-block align-middle ][ margin-sides ]">
							<a href="<?php echo site_url('ver-tutoriales'); ?>" class="[ btn btn-secondary width-100 ][ text-uppercase ][ no-margin ]">Ver todos los tutoriales</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>