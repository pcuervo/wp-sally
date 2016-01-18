<?php get_header(); ?>
<section class="[ container ]">
		<div class="[ margin-top--xlarge ][ hidden-xs ]"></div>
		<img class="[ img-responsive img-title ]" src="<?php echo THEMEPATH; ?>img/title-1.png">
		<div class="[ text-center ][ margin-top ]">
			<div class="[ inline-block align-middle ]">
				<a href="tutoriales-single.html" class="[ btn btn-primary btn--auto ][ margin-sides--small ]">Ver video</a>
			</div>
			<div class="[ clearfix ][ margin-bottom ][ visible-xs ]"></div>
			<div class="[ inline-block align-middle ]">
				<a href="<?php echo site_url( 'exito' ); ?>" class="[ btn btn-primary btn--auto ][ margin-sides--small ]">Cambiar información</a>
			</div>
			<div class="[ clearfix ][ margin-bottom ][ visible-xs ]"></div>
			<div class="[ inline-block align-middle ]">
				<div class="[ js-publicar-opener ]">
					<a class="[ btn btn-primary btn--auto ][ margin-sides--small ]">Publicar</a>
				</div>
			</div>
			<div class="[ js-publicar-container ]">
				<div class="[ js-publicar-element ][ margin-top ]">
					<div class="[ ico-small ][ margin-auto margin-bottom ][ relative ]">
						<img class="[ svg icon--stroke icon--responsive ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/share.svg">
					</div>
					<div class="[ row ]">
						<div class="[ margin-bottom--large ][ col-sm-4 col-sm-offset-4 col-lg-2 col-lg-offset-5 ][ padding-movil ]">
							<p class="[ text-uppercase ]"><strong>Comparte</strong></p>
							<p>Muchas gracias por tu tip. Ve  tu resultado y empieza a contagiar al mundo.</p>
							<a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);window.location.href=('http://twitter.com/?status='+tit2+'%20'+dir+'');"  target="_blank">
								<img class="[ inline-block align-middle ][ margin-sides--small ][ svg icon--iconed--medium icon--thickness-3 icon--fill ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/twitter.svg">
							</a>
							<a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);var dir2= encodeURIComponent(dir);window.location.href=('http://www.facebook.com/share.php?u='+dir2+'&amp;t='+tit2+'');"  target="_blank">
								<img class="[ inline-block align-middle ][ margin-sides--small ][ svg icon--iconed icon--thickness-3 icon--fill ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/facebook.svg">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>