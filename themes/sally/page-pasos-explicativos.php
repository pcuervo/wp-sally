<?php get_header(); ?>
<section class="[ container ][ text-center ][ center-full--desktop ]">
	<div class="[ margin-top--large ][ visible-xs ]"></div>
	<img class="[ img-responsive img-title ]" src="<?php echo THEMEPATH; ?>img/title-1.png">
	<div class="[ padding-movil ]">
		<div class="[ row ]">
			<div class="[ col-sm-4 ][ margin-bottom--large ]">
				<div class="[ icon-box ][ margin-auto margin-bottom ][ relative ]">
					<img class="[ svg icon--stroke icon--responsive ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/webcam.svg">
				</div>
				<p class="[ text-uppercase ][ no-margin ]"><strong>Primero</strong></p>
				<p>Enciende tu cámara web y no te pongas nerviosa</p>
			</div>
			<div class="[ col-offset-1 col-sm-4 ][ margin-bottom--large ]">
				<div class="[ icon-box ][ margin-auto margin-bottom ][ relative ]">
					<img class="[ svg icon--stroke icon--responsive ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/maquillaje-.svg">
				</div>
				<p class="[ text-uppercase ][ no-margin ]"><strong>Después</strong></p>
				<p>Platícanos tu tip, los pasos que debemos seguir y las recomendaciones</p>
			</div>
			<div class="[ col-offset-1 col-sm-4 ][ margin-bottom--large ]">
				<div class="[ icon-box ][ margin-auto margin-bottom ][ relative ]">
					<img class="[ svg icon--stroke icon--responsive ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/subir.svg">
				</div>
				<p class="[ text-uppercase ][ no-margin ]"><strong>Al final</strong></p>
				<p class="[ no-margin ]">Sube tu video.</p>
				<p>!Ya estás compartiendo tu belleza!</p>
			</div>
		</div>
	</div>
	<a href="<?php echo site_url( 'grabando' ); ?>" class="[ btn btn-primary ]">Empezar a grabar</a>
	<div class="[ margin-bottom--xlarge ][ visible-xs ]"></div>
</section>
<div class="[ relative--xs ]">
	<?php get_footer(); ?>
</div>
