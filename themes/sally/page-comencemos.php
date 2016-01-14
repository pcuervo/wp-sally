<?php get_header(); ?>
<section class="[ container ][ text-center ][ center-full margin--landscape ]">
	<img class="[ img-responsive img-title ]" src="<?php echo THEMEPATH;?>img/title-1.png">
	<div class="[ ico-small ][ margin-auto margin-bottom ][ relative ]">
		<img class="[ svg icon--stroke icon--responsive ][ color-light ]" src="<?php echo THEMEPATH;?>icons/webcam.svg">
	</div>
	<div class="[ margin-bottom ]">
		<p class="[ text-uppercase ][ no-margin ]"><strong>Comencemos</strong></p>
		<p>¿Estás lista para contarnos tu tip?</p>
	</div>
	<a type="submit" href="<?php echo site_url( 'grabando' ); ?>" class="[ btn btn-primary ]">Estoy lista</a>
</section>
<?php get_footer(); ?>